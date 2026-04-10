# AFEC Website — Contexte projet pour Claude

## Vue d'ensemble

API Laravel (v11) pour le site web de l'AFEC. Consommée par un frontend séparé.
Auth via **Laravel Sanctum** (tokens API stateless).

---

## Architecture

### Pattern Repository

Toutes les ressources suivent ce pattern strict :

```
app/Models/Xxx.php
app/Repositories/Contracts/XxxRepositoryInterface.php   ← étend BaseRepositoryInterface
app/Repositories/Eloquent/XxxRepository.php             ← étend BaseRepository
app/Http/Controllers/XxxController.php
```

**BaseRepository** expose : `all()`, `paginate(int $perPage)`, `find(int $id)`, `create(array $data)`, `update(int $id, array $data)`, `delete(int $id)`.

Chaque nouveau binding interface → implémentation doit être ajouté dans `app/Providers/AppServiceProvider.php`.

### Services

`app/Services/` pour la logique métier partagée entre contrôleurs.
Exemple : `NotificationService::notifyAdmins()`.

### Enums

`app/Enums/` — PHP 8.1 backed enums (string).
Exemple : `NotificationEntity` (`blog`, `image`, `video`, `message`).

---

## Authentification

- **Sanctum** token API — `Authorization: Bearer <token>`
- Login : `POST /api/auth/login`
- Logout : `POST /api/auth/logout` (protégé)
- Routes protégées : middleware `auth:sanctum`
- Sur les routes publiques qui ont besoin de détecter l'auth : utiliser `Auth::guard('sanctum')->check()` (pas `Auth::check()`)

### Rôles utilisateurs (table `user_roles`)

| id | name       |
|----|------------|
| 1  | superadmin |
| 2  | admin      |
| 3  | animator   |

---

## Structure des routes (`routes/api.php`)

Deux groupes :

1. **Routes publiques** — GET index/show sur les ressources de contenu, POST messages
2. **Routes protégées** (`middleware('auth:sanctum')`) — toutes les mutations + routes sensibles

Ressources avec GET public et mutations protégées : déclarer deux fois avec `->only()` / `->except()`.

---

## Système de notifications

Les admins (role_id 1 et 2) reçoivent des notifications quand :
- Un article / image / vidéo est **publié** (`is_public` passe à `true`)
- Un article / image / vidéo est **modifié** (champs autres que `is_public`)
- Un visiteur **envoie un message** via le site

**Déclenchement** — dans le contrôleur, directement dans `store()` / `update()` :

```php
NotificationService::notifyAdmins(
    NotificationEntity::Blog,
    $id,
    "Titre de la notification",
    Auth::id()  // null pour les visiteurs anonymes
);
```

**Logique dans `update()` :**
```php
$current = $this->repo->find($id);
// ... faire l'update ...
$isPublishing = isset($data['is_public']) && !$current->is_public && (bool) $data['is_public'];
$ignored = ['is_public', 'updated_by', '_method', '_token'];
$otherFieldsChanged = count(array_diff_key($data, array_flip($ignored))) > 0;
```

---

## Conventions contrôleurs

- Injection du repository via le constructeur (propriété privée)
- `index()` — toujours paginé avec `$request->query('per_page', 15)`
- `store()` — ajouter `created_by` et `updated_by` = `Auth::id()`
- `update()` — ajouter `updated_by` = `Auth::id()`
- Retourner `response()->json($data, 201)` pour les créations, `204` pour les suppressions
- Stocker les fichiers dans `storage/app/public/data/<type>/`, URL via `asset('storage/' . $path)`

---

## Migrations

Un seul fichier de migration pour plusieurs tables liées (voir `2025_11_13_011520_create_afec_domain_tables.php`).
Nommage : `YYYY_MM_DD_HHMMSS_description.php`.

---

## Seeding

```bash
php artisan migrate:fresh --seed
```

`DatabaseSeeder` appelle `UserRoleSeeder` en premier (les rôles doivent exister avant les users).

---

## Slugs (Blog)

- Généré automatiquement à la **création** depuis `title` via `Str::slug()`
- **Immuable** : jamais écrasé dans `update()` (`unset($data['slug'])` avant l'update)
- **Unicité** : suffixe numérique `-2`, `-3`... via `BlogRepository::generateUniqueSlug()`
- `show(string $param)` — détection intelligente : numérique → ID (admin), sinon → slug (public)

---

## Commandes utiles

```bash
php artisan serve --host=0.0.0.0 --port=8000   # accessible sur le réseau local
php artisan migrate
php artisan db:seed
php artisan route:list
```
