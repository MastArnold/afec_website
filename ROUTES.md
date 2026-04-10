# AFEC API — Documentation des routes

> **Base URL** : `http://<host>:8000/api`
> **Auth** : `Authorization: Bearer <token>` sur les routes protégées 🔒
> **Fichiers** : envoyer en `multipart/form-data` quand un champ `file` est présent
> **Pagination** : paramètre query `?per_page=15` disponible sur tous les `GET index`

---

## Structure d'une réponse paginée

```json
{
  "current_page": 1,
  "data": [...],
  "last_page": 5,
  "per_page": 15,
  "total": 73,
  "next_page_url": "http://.../api/blogs?page=2",
  "prev_page_url": null
}
```

---

## AUTH

### `POST /auth/login` 🌐
```json
// Body
{ "email": "string", "password": "string" }

// Réponse 200
{ "token": "string", "user": { "id": 1, "name": "string", "email": "string", "role_id": 2 } }
```

### `POST /auth/logout` 🔒
```
// Body : aucun
// Réponse 200 : { "message": "Logged out" }
```

---

## ABOUT (singleton)

### `GET /abouts` 🌐
Retourne la page à propos (un seul enregistrement).

### `POST /abouts` 🔒 — crée ou met à jour (singleton)
```
Content-Type: application/json
{ "title": "string", "content": "string (html)" }
```

### `PUT /abouts/{id}` 🔒
```json
{ "title": "string", "content": "string" }
```

---

## ABOUT MISSION (singleton)

### `GET /about-mission` 🌐

### `POST /about-mission` 🔒 — crée ou met à jour (singleton)
```
Content-Type: multipart/form-data
title:   string
content: string
image:   file (optionnel)
```

### `PUT /about-mission/{id}` 🔒
```
Content-Type: multipart/form-data
title:   string (optionnel)
content: string (optionnel)
image:   file   (optionnel)
```

---

## ABOUT VALUES

### `GET /about-values` 🌐
### `GET /about-values/{id}` 🌐

### `POST /about-values` 🔒
```json
{ "ico": "string", "title": "string", "content": "string", "is_active": true }
```

### `PUT /about-values/{id}` 🔒
```json
{ "ico": "string", "title": "string", "content": "string", "is_active": true }
```

### `DELETE /about-values/{id}` 🔒 → `204`

---

## AREAS

### `GET /areas` 🔒
### `GET /areas/{id}` 🔒

### `POST /areas` 🔒
```json
{ "title": "string (required)", "description": "string|null", "is_public": true }
```

### `PUT /areas/{id}` 🔒
```json
{ "title": "string", "description": "string|null", "is_public": true }
```

### `DELETE /areas/{id}` 🔒 → `204`

---

## AREA INTROS

### `GET /area-intros` 🔒
### `GET /area-intros/{id}` 🔒

### `POST /area-intros` 🔒
```json
{ "title": "string (required)", "intro": "string (required)" }
```

### `PUT /area-intros/{id}` 🔒
```json
{ "title": "string", "intro": "string" }
```

### `DELETE /area-intros/{id}` 🔒 → `204`

---

## BLOGS

### `GET /blogs` 🌐
- Sans token → uniquement `is_public = true`, triés par date desc
- Avec token → tous les articles

### `GET /blogs/{slug}` 🌐 — accès public par slug
- Retourne `404` si `is_public = false` et non authentifié

### `GET /blogs/{id}` 🔒 — accès admin par ID

### `POST /blogs` 🔒
```
Content-Type: multipart/form-data
title:        string (required) — le slug est généré automatiquement
cover:        file   (optionnel)
author:       string (optionnel)
date:         datetime
planned_date: datetime (optionnel)
content:      string (html)
is_public:    boolean
is_featured:  boolean
category_id:  integer (optionnel)
```

### `PUT /blogs/{id}` 🔒
Mêmes champs que store, sauf `slug` (immuable).

### `DELETE /blogs/{id}` 🔒 → `204`

---

## BLOG CATEGORIES

### `GET /blog-categories` 🌐
### `GET /blog-categories/{id}` 🌐

### `POST /blog-categories` 🔒
```json
{ "name": "string" }
```

### `PUT /blog-categories/{id}` 🔒
```json
{ "name": "string" }
```

### `DELETE /blog-categories/{id}` 🔒 → `204`

---

## BLOG FILES

### `GET /blog-files` 🌐
### `GET /blog-files/{id}` 🌐

### `POST /blog-files` 🔒
```
Content-Type: multipart/form-data
blog_id:      integer
name:         string
title:        string
file:         file
downloadable: boolean
```

### `PUT /blog-files/{id}` 🔒
```json
{ "name": "string", "title": "string", "downloadable": true }
```

### `DELETE /blog-files/{id}` 🔒 → `204`

---

## SLIDES (Carousel)

### `GET /slides` 🌐
### `GET /slides/{id}` 🌐

### `POST /slides` 🔒
```
Content-Type: multipart/form-data
title:       string
sub_title:   string (optionnel)
description: string (optionnel)
cta:         string (optionnel, texte du bouton)
link:        string (optionnel, url du bouton)
order:       integer
cover:       file
```

### `PUT /slides/{id}` 🔒 — mêmes champs

### `PUT /slides/{id}/order` 🔒
```json
{ "order": 3 }
```

### `DELETE /slides/{id}` 🔒 → `204`

---

## MESSAGES (Contact)

### `POST /messages` 🌐 — envoi d'un message par un visiteur
```
Content-Type: multipart/form-data
sender_name:  string
sender_phone: string (optionnel)
sender_mail:  string
subject:      string
message:      string
file:         file (optionnel)
```
> Déclenche une notification aux admins.

### `GET /messages` 🔒
### `GET /messages/{id}` 🔒

### `PUT /messages/{id}` 🔒
```json
{ "is_active": false }
```

### `PUT /messages/{id}/seen` 🔒
```
// Body : aucun — marque le message comme vu par l'utilisateur connecté
// Réponse 200 : message mis à jour
```

### `DELETE /messages/{id}` 🔒 → `204`

---

## CONTACT ADDRESSES

### `GET /contact-addresses` 🌐
### `GET /contact-addresses/{id}` 🌐

### `POST /contact-addresses` 🔒
```json
{ "name": "string", "email": "string", "phone": "string", "address": "string", "map": "string (url embed)" }
```

### `PUT /contact-addresses/{id}` 🔒 — mêmes champs
### `DELETE /contact-addresses/{id}` 🔒 → `204`

---

## CONTACT SETTINGS

### `GET /contact-settings` 🔒
### `POST /contact-settings` 🔒
```json
{ "to_mail": "email" }
```
### `PUT /contact-settings/{id}` 🔒
```json
{ "to_mail": "email" }
```
### `DELETE /contact-settings/{id}` 🔒 → `204`

---

## CONTACT SOCIALS

### `GET /contact-socials` 🌐
### `GET /contact-socials/{id}` 🌐

### `POST /contact-socials` 🔒
```json
{ "name": "string (ex: Facebook)", "url": "string" }
```

### `PUT /contact-socials/{id}` 🔒 — mêmes champs
### `DELETE /contact-socials/{id}` 🔒 → `204`

---

## DONATIONS

### `GET /donations` 🌐
### `GET /donations/{id}` 🌐

### `POST /donations` 🔒
```json
{ "introduction": "string (html)" }
```

### `PUT /donations/{id}` 🔒 — mêmes champs
### `DELETE /donations/{id}` 🔒 → `204`

---

## DONATION BANKS

### `GET /donation-banks` 🌐
### `GET /donation-banks/{id}` 🌐

### `POST /donation-banks` 🔒
```json
{ "transfert_name": "string", "transfert_no": "string" }
```

### `PUT /donation-banks/{id}` 🔒 — mêmes champs
### `DELETE /donation-banks/{id}` 🔒 → `204`

---

## DONATION MOBILES

### `GET /donation-mobiles` 🌐
### `GET /donation-mobiles/{id}` 🌐

### `POST /donation-mobiles` 🔒
```json
{ "name": "string", "phone": "string", "code": "string", "is_public": true }
```

### `PUT /donation-mobiles/{id}` 🔒 — mêmes champs
### `DELETE /donation-mobiles/{id}` 🔒 → `204`

---

## PAYMENT METHODS (DonationMethod)

### `GET /payment-methods` 🌐
Inclut les relations `ibanDetails` et `steps`.

### `GET /payment-methods/{id}` 🌐

### `POST /payment-methods` 🔒
```json
{
  "name": "string",
  "tagline": "string",
  "initials": "string",
  "color": "string (hex)",
  "field": "string (label du champ de référence)",
  "value": "string",
  "copy_value": "string",
  "note": "string",
  "is_active": true,
  "iban_details": [
    { "label": "string", "detail": "string" }
  ],
  "steps": [
    { "content": "string" }
  ]
}
```

### `PUT /payment-methods/{id}` 🔒 — mêmes champs
### `DELETE /payment-methods/{id}` 🔒 → `204`

---

## PAYMENT IBAN DETAILS

### `GET /payment-iban-details` 🌐
### `GET /payment-iban-details/{id}` 🌐

### `POST /payment-iban-details` 🔒
```json
{ "donation_method_id": 1, "label": "string", "detail": "string" }
```

### `PUT /payment-iban-details/{id}` 🔒 — mêmes champs
### `DELETE /payment-iban-details/{id}` 🔒 → `204`

---

## PAYMENT METHOD STEPS

### `GET /payment-method-steps` 🌐
### `GET /payment-method-steps/{id}` 🌐

### `POST /payment-method-steps` 🔒
```json
{ "donation_method_id": 1, "content": "string" }
```

### `PUT /payment-method-steps/{id}` 🔒 — mêmes champs
### `DELETE /payment-method-steps/{id}` 🔒 → `204`

---

## YEAR THEMES (Home)

### `GET /year-themes` 🌐
### `GET /year-themes/{id}` 🌐

### `POST /year-themes` 🔒
```
Content-Type: multipart/form-data
title:    string
subtitle: string
content:  string
image:    file
is_active: boolean
```

### `PUT /year-themes/{id}` 🔒 — mêmes champs

### `PUT /year-themes/{id}/activate` 🔒
```
// Body : aucun — active ce thème (désactive les autres)
```

### `DELETE /year-themes/{id}` 🔒 → `204`

---

## HOME CAROUSELS

### `GET /home-carousels` 🔒
### `GET /home-carousels/{id}` 🔒

### `POST /home-carousels` 🔒
```
Content-Type: multipart/form-data
title:      string
cover:      file
cover_name: string
is_public:  boolean
```

### `PUT /home-carousels/{id}` 🔒 — mêmes champs
### `DELETE /home-carousels/{id}` 🔒 → `204`

---

## IMAGES

### `GET /images` 🌐
### `GET /images/{id}` 🌐

### `POST /images` 🔒
```
Content-Type: multipart/form-data
title:       string
description: string
image:       file
category_id: integer (optionnel)
is_public:   boolean
```
> Déclenche une notification si `is_public = true`.

### `PUT /images/{id}` 🔒 — mêmes champs
> Déclenche une notification si `is_public` passe à `true`, ou si d'autres champs changent.

### `DELETE /images/{id}` 🔒 → `204`

---

## IMAGE CATEGORIES

### `GET /image-categories` 🌐
### `GET /image-categories/{id}` 🌐

### `POST /image-categories` 🔒
```json
{ "name": "string" }
```

### `PUT /image-categories/{id}` 🔒
```json
{ "name": "string" }
```

### `DELETE /image-categories/{id}` 🔒 → `204`

---

## PARTNERS

### `GET /partners` 🌐
### `GET /partners/{id}` 🌐

### `POST /partners` 🔒
```
Content-Type: multipart/form-data
name:      string
logo:      file
link:      string (url, optionnel)
is_active: boolean
```

### `PUT /partners/{id}` 🔒 — mêmes champs
### `DELETE /partners/{id}` 🔒 → `204`

---

## TEAMS

### `GET /teams` 🌐
### `GET /teams/{id}` 🌐

### `POST /teams` 🔒
```
Content-Type: multipart/form-data
name:       string
role:       string (poste/fonction)
photo:      file
department: string (optionnel)
order:      integer
is_public:  boolean
```

### `PUT /teams/{id}` 🔒 — mêmes champs
### `DELETE /teams/{id}` 🔒 → `204`

---

## VIDEOS

### `GET /videos` 🌐
### `GET /videos/{id}` 🌐

### `POST /videos` 🔒
```
Content-Type: multipart/form-data
title:       string
description: string
video:       file
thumbnail:   file
date:        datetime
duration:    string (ex: "3:45")
category_id: integer (optionnel)
is_public:   boolean
```
> Déclenche une notification si `is_public = true`.

### `PUT /videos/{id}` 🔒 — mêmes champs
> Déclenche une notification si `is_public` passe à `true`, ou si d'autres champs changent.

### `PUT /videos/{id}/activate` 🔒
```
// Body : aucun — met is_active à true
```

### `PUT /videos/{id}/unactivate` 🔒
```
// Body : aucun — met is_active à false
```

### `DELETE /videos/{id}` 🔒 → `204`

---

## VIDEO CATEGORIES

### `GET /video-categories` 🌐
### `GET /video-categories/{id}` 🌐

### `POST /video-categories` 🔒
```json
{ "name": "string" }
```

### `PUT /video-categories/{id}` 🔒
```json
{ "name": "string" }
```

### `DELETE /video-categories/{id}` 🔒 → `204`

---

## DONATION SECTION (singleton)

### `GET /donation-section` 🌐
Retourne le texte de la section don.

### `PUT /donation-section` 🔒
```json
{ "title": "string", "subtitle": "string", "content": "string", "is_active": true }
```

---

## DONATION SECTION IMAGES

### `GET /donation-section-images` 🌐
Liste paginée des images de la section don.

### `POST /donation-section-images` 🔒
```json
{ "image_id": 12 }
```

### `DELETE /donation-section-images/{id}` 🔒 → `204`

---

## GENERALS

### `GET /generals` 🔒

### `POST /generals` 🔒
```
Content-Type: multipart/form-data
logo: file
```

### `PUT /generals/{id}` 🔒
```
Content-Type: multipart/form-data
logo: file
```

### `DELETE /generals/{id}` 🔒 → `204`

---

## USERS

### `GET /users` 🔒
Query params : `?search=string&per_page=15`

### `GET /users/{id}` 🔒
Inclut la relation `role`.

### `POST /users` 🔒
```json
{ "name": "string", "email": "email", "password": "string (min:8)", "role_id": 2 }
```

### `PUT /users/{id}` 🔒
```json
{ "name": "string", "email": "email", "password": "string|null", "role_id": 2 }
```

### `DELETE /users/{id}` 🔒 → `204`

---

## USER ROLES

### `GET /user-roles` 🔒

### `POST /user-roles` 🔒
```json
{ "name": "string (unique)" }
```

### `PUT /user-roles/{id}` 🔒
```json
{ "name": "string" }
```

### `DELETE /user-roles/{id}` 🔒 → `204`

---

## NOTIFICATIONS

### `GET /notifications` 🔒
Retourne les notifications de l'utilisateur connecté, triées par date décroissante.

```json
// Réponse paginée, chaque item :
{
  "id": 1,
  "user_id": 3,
  "title": "Nouvel article publié : Mon article",
  "entity": "blog",
  "entity_id": 42,
  "triggered_at": "2026-04-10T14:30:00Z",
  "triggered_by": 2,
  "read": false
}
```

### `PUT /notifications/{id}/read` 🔒
```
// Body : aucun — marque la notification comme lue
// Réponse : 204
```

### `PUT /notifications/read-all` 🔒
```
// Body : aucun — marque toutes les notifications non lues de l'utilisateur connecté comme lues
// Réponse : 204
```

---

## Codes de réponse

| Code | Signification |
|------|--------------|
| `200` | Succès |
| `201` | Créé |
| `204` | Supprimé / action effectuée (pas de contenu) |
| `401` | Non authentifié |
| `404` | Ressource introuvable |
| `422` | Erreur de validation |
