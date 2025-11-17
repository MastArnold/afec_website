import React from 'react';
import { createRoot } from 'react-dom/client';
import General from './general';

const sidebarItems = [
  { key: 'general', label: 'General' },
  { key: 'accueil', label: 'Accueil' },
  {
    key: 'about',
    label: 'A Propos',
    children: [
      { key: 'about.overview', label: 'Texte et image' },
      { key: 'about.partners', label: 'Partenaires' },
      { key: 'about.team', label: 'Équipe' },
    ],
  },
  { key: 'news', label: 'Actualités' },
  { key: 'interventions', label: 'Interventions' },
  { key: 'images', label: 'Images' },
  { key: 'videos', label: 'Vidéos' },
  { key: 'don', label: 'Don' },
  { key: 'contact', label: 'Contact' },
  { key: 'messages', label: 'Message' },
  { key: 'settings', label: 'Paramètre' },
];

function SidebarItem({ item, activeKey, onSelect, level = 0, expandedGroups, onToggleGroup }) {
  const isGroup = Array.isArray(item.children) && item.children.length > 0;
  const isExpanded = expandedGroups.includes(item.key);
  const isActive = activeKey === item.key || item.children?.some((child) => child.key === activeKey);

  return (
    <li>
      <button
        type="button"
        onClick={() => {
          if (isGroup) {
            onToggleGroup(item.key);
          } else {
            onSelect(item.key);
          }
        }}
        className={`w-full flex items-center justify-between rounded-lg px-3 py-2 text-sm font-medium text-left transition-colors duration-150 ${
          isActive
            ? 'bg-blue-100 text-gray-700 shadow-sm'
            : 'text-gray-800 hover:bg-blue-100 hover:text-gray-700'
        }`}
        style={{ paddingLeft: 12 + level * 12 }}
     >
        <span>{item.label}</span>
        {isGroup && (
          <span
            className={`text-xs transition-transform duration-150 ${
              isExpanded ? 'rotate-90' : 'rotate-0'
            }`}
          >
            <svg className="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7.82054 20.7313C8.21107 21.1218 8.84423 21.1218 9.23476 20.7313L15.8792 14.0868C17.0505 12.9155 17.0508 11.0167 15.88 9.84497L9.3097 3.26958C8.91918 2.87905 8.28601 2.87905 7.89549 3.26958C7.50497 3.6601 7.50497 4.29327 7.89549 4.68379L14.4675 11.2558C14.8581 11.6464 14.8581 12.2795 14.4675 12.67L7.82054 19.317C7.43002 19.7076 7.43002 20.3407 7.82054 20.7313Z" fill="#2e2e2e"></path> </g></svg>
          </span>
        )}
      </button>

      {isGroup && isExpanded && (
        <ul className="mt-1 space-y-1">
          {item.children.map((child) => (
            <SidebarItem
              key={child.key}
              item={child}
              activeKey={activeKey}
              onSelect={onSelect}
              level={level + 1}
              expandedGroups={expandedGroups}
              onToggleGroup={onToggleGroup}
            />
          ))}
        </ul>
      )}
    </li>
  );
}

function Sidebar({ activeKey, onSelect }) {
  const [expandedGroups, setExpandedGroups] = React.useState(['about']);

  function handleToggleGroup(key) {
    setExpandedGroups((current) =>
      current.includes(key) ? current.filter((k) => k !== key) : [...current, key]
    );
  }

  return (
    <aside className="backdrop-blur w-72 flex flex-col">
      <div className="h-16 flex items-center px-6">
        <div className="flex items-center gap-2">
          <div className="h-8 w-8 rounded-lg bg-emerald-500 flex items-center justify-center text-sm font-semibold text-white">
            AF
          </div>
          <div className="flex flex-col leading-tight">
            <span className="text-sm font-semibold tracking-tight text-slate-50">
              AFEC Admin
            </span>
            <span className="text-[11px] text-slate-400">Gestion du site</span>
          </div>
        </div>
      </div>
      <nav className="flex-1 overflow-y-auto py-8">
        <ul className="space-y-1 px-3">
          {sidebarItems.map((item) => (
            <SidebarItem
              key={item.key}
              item={item}
              activeKey={activeKey}
              onSelect={onSelect}
              level={0}
              expandedGroups={expandedGroups}
              onToggleGroup={handleToggleGroup}
            />
          ))}
        </ul>
      </nav>
    </aside>
  );
}

function Topbar({ userName }) {
  return (
    <header className="h-16 border-b border-slate-200/80 bg-white/80 backdrop-blur flex items-center justify-between px-6">
      <div>
        <h1 className="text-lg font-semibold text-slate-900">Tableau de bord</h1>
        <p className="text-xs text-slate-500">Gérez le contenu de votre site AFEC</p>
      </div>

      <div className="flex items-center gap-4">
        <button
          type="button"
          className="relative inline-flex items-center justify-center rounded-full h-10 w-10 border border-slate-200 hover:bg-slate-50"
        >
          <span className="absolute -top-0.5 -right-0.5 flex h-4 w-4 items-center justify-center rounded-full bg-red-500 text-[10px] font-semibold text-white">
            3
          </span>
          <span className="sr-only">Notifications</span>
          <span aria-hidden className="text-slate-500 text-lg">🔔</span>
        </button>

        <div className="flex items-center gap-2">
          <div className="flex flex-col text-right">
            <span className="text-sm font-medium text-slate-900">{userName ?? 'Utilisateur'}</span>
            <span className="text-xs text-slate-500">Connecté</span>
          </div>
          <div className="h-9 w-9 rounded-full bg-slate-900 text-white flex items-center justify-center text-sm font-semibold">
            {userName ? userName[0]?.toUpperCase() : 'U'}
          </div>
        </div>
      </div>
    </header>
  );
}

function SectionContent({ activeKey }) {
  const base = 'Zone de démonstration pour la section';
  switch (activeKey) {
    case 'general':
      return <General />;
    case 'accueil':
      return <p>{base} Accueil.</p>;
    case 'about.overview':
      return <p>{base} A Propos − Texte et image.</p>;
    case 'about.partners':
      return <p>{base} A Propos − Partenaires.</p>;
    case 'about.team':
      return <p>{base} A Propos − Équipe.</p>;
    case 'news':
      return <p>{base} Actualités.</p>;
    case 'interventions':
      return <p>{base} Interventions.</p>;
    case 'images':
      return <p>{base} Images.</p>;
    case 'videos':
      return <p>{base} Vidéos.</p>;
    case 'don':
      return <p>{base} Don.</p>;
    case 'contact':
      return <p>{base} Contact.</p>;
    case 'messages':
      return <p>{base} Message.</p>;
    case 'settings':
      return <p>{base} Paramètre.</p>;
    default:
      return <p>Sélectionnez une section dans le menu de gauche.</p>;
  }
}

function AdminApp() {
  const [activeKey, setActiveKey] = React.useState('general');
  const [userName] = React.useState(window.AdminUserName || null);

  function resolveActiveLabel() {
    for (const item of sidebarItems) {
      if (item.key === activeKey) {
        return item.label;
      }
      if (Array.isArray(item.children)) {
        const child = item.children.find((c) => c.key === activeKey);
        if (child) {
          return child.label;
        }
      }
    }
    return 'Section';
  }

  const activeLabel = resolveActiveLabel();

  return (
    <div className="min-h-screen flex text-slate-900">
      <Sidebar activeKey={activeKey} onSelect={setActiveKey} />
      <div className="flex-1 flex flex-col">
        <Topbar userName={userName} />
        <main className="flex-1 p-6 overflow-y-auto">
          <div className="max-w-6xl mx-auto space-y-4">
            <div>
              <h2 className="text-xl font-semibold text-slate-900">{activeLabel}</h2>
              <p className="text-sm text-slate-500 mt-1">
                Contenu de gestion pour la section "{activeLabel}".
              </p>
            </div>
            <div className="bg-white">
              <SectionContent activeKey={activeKey} />
            </div>
          </div>
        </main>
      </div>
    </div>
  );
}

const container = document.getElementById('admin-root');
if (container) {
  const root = createRoot(container);
  root.render(<AdminApp />);
}
