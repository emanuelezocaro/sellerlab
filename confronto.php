<?php
$title = 'Confronto Commissioni Marketplace 2025: Amazon vs eBay vs Zalando | SellerLab';
$description = 'Tabella comparativa di tutti i marketplace italiani: commissioni, traffico, tipo di accesso, categorie principali. Amazon vs eBay vs Zalando vs Etsy e molto altro.';
$canonical = 'https://sellerlab.it/confronto.php';
$og_title = 'Confronto Commissioni Marketplace Italiani 2025 - SellerLab';
$og_description = 'Tabella comparativa completa: commissioni, traffico, accesso e categorie di tutti i marketplace italiani.';
$og_url = 'https://sellerlab.it/confronto.php';
$og_locale = 'it_IT';
$current_page = 'confronto';
$breadcrumb = [['label' => 'Home', 'url' => 'index.php'], ['label' => 'Confronto']];
include 'includes/head.php';
include 'includes/nav.php';
?>

<nav class="section-nav" id="section-nav">
  <div class="section-nav-inner">
    <a href="#" class="section-nav-link active" onclick="secNav(event,'all')">Tutti</a>
    <a href="#" class="section-nav-link" onclick="secNav(event,'generalista')">Generalisti</a>
    <a href="#" class="section-nav-link" onclick="secNav(event,'fashion')">Fashion</a>
    <a href="#" class="section-nav-link" onclick="secNav(event,'verticale')">Verticali</a>
    <a href="#" class="section-nav-link" onclick="secNav(event,'comparatore')">Comparatori</a>
    <a href="#" class="section-nav-link" onclick="secNav(event,'social')">Social</a>
    <a href="#" class="section-nav-link" onclick="secNav(event,'outlet')">Outlet</a>
    <a href="#" class="section-nav-link" onclick="secNav(event,'libero')">Accesso libero</a>
  </div>
</nav>

<style>
    .table-wrap {
      overflow-x: auto;
      border: 1px solid var(--border);
      border-radius: var(--radius);
    }
    table {
      width: 100%;
      border-collapse: collapse;
      font-size: 13.5px;
      min-width: 800px;
    }
    thead tr {
      background: var(--bg-soft);
      border-bottom: 2px solid var(--border);
    }
    th {
      padding: 12px 16px;
      text-align: left;
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .5px;
      color: var(--text-secondary);
      white-space: nowrap;
    }
    td {
      padding: 14px 16px;
      border-bottom: 1px solid var(--border);
      vertical-align: middle;
    }
    tr:last-child td { border-bottom: none; }
    tr:hover td { background: var(--bg-soft); }

    .mp-name {
      display: flex;
      align-items: center;
      gap: 10px;
      font-weight: 600;
      color: var(--text);
      white-space: nowrap;
    }
    .mp-name img { width: 20px; height: 20px; object-fit: contain; flex-shrink: 0; }

    .commission-bar-wrap { display: flex; align-items: center; gap: 10px; }
    .commission-bar {
      width: 80px;
      height: 6px;
      background: var(--border);
      border-radius: 3px;
      overflow: hidden;
      flex-shrink: 0;
    }
    .commission-bar-fill { height: 100%; border-radius: 3px; background: var(--accent); }

    .traffic-dot {
      display: inline-block;
      width: 8px; height: 8px;
      border-radius: 50%;
      margin-right: 6px;
    }

    .filter-bar {
      display: flex;
      gap: 8px;
      flex-wrap: wrap;
      margin-bottom: 24px;
    }
    .filter-btn {
      padding: 7px 16px;
      border-radius: 20px;
      border: 1px solid var(--border);
      background: var(--bg);
      color: var(--text-secondary);
      font-size: 13px;
      font-weight: 500;
      cursor: pointer;
      font-family: inherit;
      transition: all .15s;
    }
    .filter-btn:hover, .filter-btn.active {
      background: var(--accent);
      border-color: var(--accent);
      color: #fff;
    }



    .sort-btn {
      background: none;
      border: none;
      cursor: pointer;
      color: var(--text-secondary);
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .5px;
      font-family: inherit;
      padding: 0;
      display: flex;
      align-items: center;
      gap: 4px;
    }
    .sort-btn:hover { color: var(--text); }

    .highlight-row td { background: #fffbeb !important; }
  </style>

<div class="page-hero">
  <div class="page-hero-inner">
    <div class="section-label">Tabella comparativa</div>
    <h1>Confronto commissioni marketplace 2025</h1>
    <p>Commissioni, traffico, tipo di accesso e categorie principali. Filtra e ordina per trovare il canale giusto per te.</p>
  </div>
</div>

<section class="section">
  <div class="section-inner">
    <?php include 'includes/breadcrumb.php'; ?>

    <div class="intro-box">
      <p>Le commissioni indicate sono <strong>medie indicative</strong> per le categorie più comuni. Ogni marketplace applica tariffe diverse per categoria: verifica sempre la tabella commissioni ufficiale prima di vendere. I dati di traffico sono stime basate su fonti pubbliche (SimilarWeb, Statista) - <strong>aggiornate al 2025</strong>.</p>
    </div>

    <div class="filter-bar">
      <button class="filter-btn active" data-filter="all" onclick="filterTable('all', this)">Tutti</button>
      <button class="filter-btn" data-filter="generalista" onclick="filterTable('generalista', this)">Generalisti</button>
      <button class="filter-btn" data-filter="fashion" onclick="filterTable('fashion', this)">Fashion</button>
      <button class="filter-btn" data-filter="verticale" onclick="filterTable('verticale', this)">Verticali</button>
      <button class="filter-btn" data-filter="comparatore" onclick="filterTable('comparatore', this)">Comparatori</button>
      <button class="filter-btn" data-filter="social" onclick="filterTable('social', this)">Social</button>
      <button class="filter-btn" data-filter="outlet" onclick="filterTable('outlet', this)">Outlet</button>
      <button class="filter-btn" data-filter="libero" onclick="filterTable('libero', this)">Accesso libero</button>
    </div>

    <div class="table-wrap" id="table-wrap">
      <table id="main-table">
        <thead>
          <tr>
            <th><button class="sort-btn" onclick="sortTable('name')">Marketplace ↕</button></th>
            <th>Tipo</th>
            <th><button class="sort-btn" onclick="sortTable('commission')">Commissione ↕</button></th>
            <th><button class="sort-btn" onclick="sortTable('traffic')">Traffico/mese ↕</button></th>
            <th>Accesso</th>
            <th>Categorie principali</th>
            <th>Ideale per</th>
          </tr>
        </thead>
        <tbody id="table-body">
        </tbody>
      </table>
    </div>

    <div style="margin-top:40px;text-align:center;">
      <p style="font-size:14px;color:var(--text-secondary);margin-bottom:16px;">Vuoi calcolare il margine netto su un prodotto specifico?</p>
      <a href="calcolatore.php" class="btn btn-primary">Apri il Calcolatore →</a>
    </div>

  </div>
</section>

<?php include 'includes/footer.php'; ?>

<script>
const data = [
  {
    name: 'Amazon.it', type: 'generalista', typeLabel: 'Generalista',
    commission: 15, commissionLabel: '8–15%', commissionMax: 15,
    traffic: 35, trafficLabel: '~35M', trafficLevel: 5,
    access: 'libero', accessLabel: 'Libero (Pro 39€/m)',
    categories: 'Tutto', idealFor: 'Volumi alti, FBA',
    icon: 'https://www.google.com/s2/favicons?domain=amazon.it&sz=32',
    link: 'marketplace.html#amazon'
  },
  {
    name: 'eBay.it', type: 'generalista', typeLabel: 'Generalista',
    commission: 12.8, commissionLabel: '~12.8%', commissionMax: 12.8,
    traffic: 12, trafficLabel: '~12M', trafficLevel: 4,
    access: 'libero', accessLabel: 'Gratuito',
    categories: 'Usato, Ricambi, Collezionismo', idealFor: 'Nicchie, C2C',
    icon: 'https://cdn.simpleicons.org/ebay/E53238',
    link: 'marketplace.html#ebay'
  },
  {
    name: 'Subito.it', type: 'generalista', typeLabel: 'Annunci',
    commission: 0, commissionLabel: '0% (privati)', commissionMax: 0,
    traffic: 18, trafficLabel: '~18M', trafficLevel: 5,
    access: 'libero', accessLabel: 'Gratuito',
    categories: 'Usato, Auto, Immobili', idealFor: 'Locale, usato',
    icon: 'https://www.google.com/s2/favicons?domain=subito.it&sz=32',
    link: 'marketplace.html#subito'
  },
  {
    name: 'Etsy', type: 'verticale', typeLabel: 'Verticale',
    commission: 6.5, commissionLabel: '6.5% + 0,20$', commissionMax: 6.5,
    traffic: 8, trafficLabel: '~8M (IT)', trafficLevel: 3,
    access: 'libero', accessLabel: 'Gratuito',
    categories: 'Handmade, Vintage, Digitali', idealFor: 'Artigiani, creativi',
    icon: 'https://cdn.simpleicons.org/etsy/F16521',
    link: 'marketplace.html#etsy'
  },
  {
    name: 'Zalando', type: 'fashion', typeLabel: 'Fashion',
    commission: 20, commissionLabel: '5–25%', commissionMax: 25,
    traffic: 8, trafficLabel: '~8M (IT)', trafficLevel: 3,
    access: 'selettivo', accessLabel: 'Su invito',
    categories: 'Abbigliamento, Scarpe, Accessori', idealFor: 'Brand fashion',
    icon: 'https://cdn.simpleicons.org/zalando/FF6900',
    link: 'marketplace.html#zalando'
  },
  {
    name: 'ManoMano', type: 'verticale', typeLabel: 'Verticale',
    commission: 13, commissionLabel: '12–15%', commissionMax: 15,
    traffic: 4, trafficLabel: '~4M (IT)', trafficLevel: 2,
    access: 'approvazione', accessLabel: 'Con approvazione',
    categories: 'Bricolage, Giardino, Casa', idealFor: 'DIY, scontrino alto',
    icon: 'https://www.google.com/s2/favicons?domain=manomano.com&sz=32',
    link: 'marketplace.html#manomano'
  },
  {
    name: 'Vinted', type: 'fashion', typeLabel: 'Fashion C2C',
    commission: 0, commissionLabel: '0% (venditore)', commissionMax: 0,
    traffic: 6, trafficLabel: '~6M', trafficLevel: 3,
    access: 'libero', accessLabel: 'Gratuito',
    categories: 'Abbigliamento usato', idealFor: 'Second-hand C2C',
    icon: 'https://cdn.simpleicons.org/vinted/007782',
    link: 'marketplace.html#vinted'
  },
  {
    name: 'Farfetch', type: 'fashion', typeLabel: 'Luxury Fashion',
    commission: 27, commissionLabel: '25–30%', commissionMax: 30,
    traffic: 5, trafficLabel: '~5M (glob.)', trafficLevel: 2,
    access: 'selettivo', accessLabel: 'Su approvazione',
    categories: 'Luxury, Designer', idealFor: 'Boutique luxury',
    icon: 'https://www.google.com/s2/favicons?domain=farfetch.com&sz=32',
    link: 'marketplace.html#farfetch'
  },
  {
    name: 'YOOX', type: 'outlet', typeLabel: 'Outlet',
    commission: 0, commissionLabel: 'Acquisto stock', commissionMax: 0,
    traffic: 3, trafficLabel: '~3M', trafficLevel: 2,
    access: 'selettivo', accessLabel: 'Selettivo',
    categories: 'Fashion fine stagione', idealFor: 'Smaltire invenduto',
    icon: 'https://www.google.com/s2/favicons?domain=yoox.com&sz=32',
    link: 'marketplace.html#yoox'
  },
  {
    name: 'Back Market', type: 'verticale', typeLabel: 'Verticale',
    commission: 12, commissionLabel: '~12%', commissionMax: 12,
    traffic: 3, trafficLabel: '~3M (IT)', trafficLevel: 2,
    access: 'approvazione', accessLabel: 'Con approvazione',
    categories: 'Elettronica ricondizionata', idealFor: 'Ricondizionato',
    icon: 'https://www.google.com/s2/favicons?domain=backmarket.it&sz=32',
    link: 'marketplace.html#backmarket'
  },
  {
    name: 'ePrice', type: 'verticale', typeLabel: 'Verticale',
    commission: 9, commissionLabel: '5–12%', commissionMax: 12,
    traffic: 2, trafficLabel: '~2M', trafficLevel: 1,
    access: 'approvazione', accessLabel: 'Su richiesta',
    categories: 'Elettronica, Informatica', idealFor: 'Tech complementare',
    icon: 'https://www.google.com/s2/favicons?domain=eprice.it&sz=32',
    link: 'marketplace.html#eprice'
  },
  {
    name: 'MediaWorld Mkt.', type: 'verticale', typeLabel: 'Verticale',
    commission: 10, commissionLabel: '8–12%', commissionMax: 12,
    traffic: 5, trafficLabel: '~5M', trafficLevel: 2,
    access: 'selettivo', accessLabel: 'Su invito',
    categories: 'Elettronica, Gaming', idealFor: 'Brand tech',
    icon: 'https://www.google.com/s2/favicons?domain=mediaworld.it&sz=32',
    link: 'marketplace.html#mediaworld'
  },
  {
    name: 'Google Shopping', type: 'comparatore', typeLabel: 'Comparatore',
    commission: 0, commissionLabel: 'CPC (0,20–1,50€)', commissionMax: 0,
    traffic: 100, trafficLabel: 'Enorme', trafficLevel: 5,
    access: 'libero', accessLabel: 'Feed + Google Ads',
    categories: 'Tutto', idealFor: 'Tutti gli shop',
    icon: 'https://cdn.simpleicons.org/google/4285F4',
    link: 'marketplace.html#google-shopping'
  },
  {
    name: 'Trovaprezzi.it', type: 'comparatore', typeLabel: 'Comparatore',
    commission: 0, commissionLabel: 'CPC (0,10–0,80€)', commissionMax: 0,
    traffic: 4, trafficLabel: '~4M', trafficLevel: 2,
    access: 'libero', accessLabel: 'Feed + budget CPC',
    categories: 'Elettronica, Casa', idealFor: 'Prezzi competitivi',
    icon: 'https://www.google.com/s2/favicons?domain=trovaprezzi.it&sz=32',
    link: 'marketplace.html#trovaprezzi'
  },
  {
    name: 'TikTok Shop', type: 'social', typeLabel: 'Social',
    commission: 6.5, commissionLabel: '~5–8%', commissionMax: 8,
    traffic: 13, trafficLabel: '~13M utenti IT', trafficLevel: 4,
    access: 'libero', accessLabel: 'Aperto (2023)',
    categories: 'Lifestyle, Beauty, Moda', idealFor: 'Discovery commerce',
    icon: 'https://cdn.simpleicons.org/tiktok/000000',
    link: 'marketplace.html#tiktok-shop'
  },
  {
    name: 'Instagram Shop', type: 'social', typeLabel: 'Social',
    commission: 0, commissionLabel: 'Gratuito (no checkout IT)', commissionMax: 0,
    traffic: 26, trafficLabel: '~26M utenti IT', trafficLevel: 5,
    access: 'libero', accessLabel: 'Gratuito',
    categories: 'Moda, Beauty, Lifestyle', idealFor: 'Brand visual',
    icon: 'https://cdn.simpleicons.org/instagram/E4405F',
    link: 'marketplace.html#instagram-shop'
  },
  {
    name: 'Veepee', type: 'outlet', typeLabel: 'Flash Sale',
    commission: 0, commissionLabel: 'Consignment (rev. share)', commissionMax: 0,
    traffic: 5, trafficLabel: '70M iscritti EU', trafficLevel: 3,
    access: 'selettivo', accessLabel: 'Su proposta brand',
    categories: 'Fashion, Lifestyle', idealFor: 'Smaltire stock',
    icon: 'https://www.google.com/s2/favicons?domain=veepee.it&sz=32',
    link: 'marketplace.html#veepee'
  },
  {
    name: 'Catawiki', type: 'verticale', typeLabel: 'Aste',
    commission: 12.5, commissionLabel: '~12.5%', commissionMax: 12.5,
    traffic: 2, trafficLabel: '~2M (IT)', trafficLevel: 1,
    access: 'approvazione', accessLabel: 'Expert review',
    categories: 'Arte, Orologi, Wine, Collezionismo', idealFor: 'Oggetti rari e unici',
    icon: 'https://www.google.com/s2/favicons?domain=catawiki.com&sz=32',
    link: 'marketplace.html#catawiki'
  },
  {
    name: 'Depop', type: 'fashion', typeLabel: 'Fashion C2C',
    commission: 10, commissionLabel: '~10%', commissionMax: 10,
    traffic: 3, trafficLabel: '~3M (IT)', trafficLevel: 2,
    access: 'libero', accessLabel: 'Gratuito',
    categories: 'Vintage, Streetwear, Gen Z', idealFor: 'Giovani, moda creativa',
    icon: 'https://www.google.com/s2/favicons?domain=depop.com&sz=32',
    link: 'marketplace.html#depop'
  },
  {
    name: 'Vestiaire Coll.', type: 'fashion', typeLabel: 'Luxury C2C',
    commission: 15, commissionLabel: '12–15% + fee', commissionMax: 15,
    traffic: 2, trafficLabel: '~2M (IT)', trafficLevel: 1,
    access: 'libero', accessLabel: 'Libero (autenticazione)',
    categories: 'Luxury second-hand', idealFor: 'Fashion luxury usato',
    icon: 'https://www.google.com/s2/favicons?domain=vestiairecollective.com&sz=32',
    link: 'marketplace.html#vestiaire'
  },
  {
    name: 'Leroy Merlin Mkt.', type: 'verticale', typeLabel: 'Verticale',
    commission: 12, commissionLabel: '~12%', commissionMax: 12,
    traffic: 4, trafficLabel: '~4M', trafficLevel: 2,
    access: 'selettivo', accessLabel: 'Su invito',
    categories: 'DIY, Casa, Giardino', idealFor: 'Prodotti casa',
    icon: 'https://www.google.com/s2/favicons?domain=leroymerlin.it&sz=32',
    link: 'marketplace.html#leroymerlin'
  },
  {
    name: 'Unieuro Mkt.', type: 'verticale', typeLabel: 'Verticale',
    commission: 10, commissionLabel: '~10%', commissionMax: 10,
    traffic: 4, trafficLabel: '~4M', trafficLevel: 2,
    access: 'selettivo', accessLabel: 'Su invito',
    categories: 'Elettronica, Elettrodomestici', idealFor: 'Elettronica IT',
    icon: 'https://www.google.com/s2/favicons?domain=unieuro.it&sz=32',
    link: 'marketplace.html#unieuro'
  },
  {
    name: 'Allegro', type: 'generalista', typeLabel: 'Generalista',
    commission: 8, commissionLabel: '5–12%', commissionMax: 12,
    traffic: 1, trafficLabel: 'In espansione', trafficLevel: 1,
    access: 'libero', accessLabel: 'Libero',
    categories: 'Tutto (Polonia → EU)', idealFor: 'Espansione est-Europa',
    icon: 'https://www.google.com/s2/favicons?domain=allegro.pl&sz=32',
    link: 'marketplace.html#allegro'
  },
  {
    name: 'Temu', type: 'generalista', typeLabel: 'Generalista',
    commission: 2, commissionLabel: '0–5%', commissionMax: 5,
    traffic: 20, trafficLabel: '~20M (IT)', trafficLevel: 5,
    access: 'approvazione', accessLabel: 'Programma seller',
    categories: 'Tutto (low-cost)', idealFor: 'Nicchie, prodotti differenziati',
    icon: 'https://www.google.com/s2/favicons?domain=temu.com&sz=32',
    link: 'marketplace.html#temu'
  }
];

let currentFilter = 'all';
let currentSort = { col: 'traffic', dir: -1 };

function trafficColor(level) {
  const colors = ['', '#e2e8f0', '#93c5fd', '#60a5fa', '#3b82f6', '#1d4ed8'];
  return colors[level] || '#e2e8f0';
}

function accessBadge(access) {
  const map = {
    libero:      '<span class="badge badge-green">Libero</span>',
    approvazione:'<span class="badge badge-orange">Approvazione</span>',
    selettivo:   '<span class="badge badge-gray">Selettivo</span>'
  };
  return map[access] || '';
}

function typeBadge(type) {
  const map = {
    generalista: 'badge-blue', verticale: 'badge-purple', fashion: 'badge-purple',
    comparatore: 'badge-blue', social: 'badge-orange', outlet: 'badge-gray'
  };
  return `<span class="badge ${map[type] || 'badge-gray'}">${type.charAt(0).toUpperCase() + type.slice(1)}</span>`;
}

function renderTable() {
  let rows = [...data];
  if (currentFilter !== 'all') {
    if (currentFilter === 'libero') {
      rows = rows.filter(r => r.access === 'libero');
    } else {
      rows = rows.filter(r => r.type === currentFilter);
    }
  }
  rows.sort((a, b) => {
    const col = currentSort.col;
    if (col === 'name') return currentSort.dir * a.name.localeCompare(b.name);
    return currentSort.dir * (a[col] - b[col]);
  });

  document.getElementById('table-body').innerHTML = rows.map(r => `
    <tr>
      <td>
        <a href="${r.link}" class="mp-name" style="text-decoration:none;">
          <img src="${r.icon}" alt="${r.name}" width="20" height="20" style="width:20px;height:20px;object-fit:contain;vertical-align:middle;margin-right:6px;" onerror="this.style.display='none'">
          ${r.name}
        </a>
      </td>
      <td>${typeBadge(r.type)}</td>
      <td>
        <div class="commission-bar-wrap">
          <span style="font-weight:600;min-width:80px;">${r.commissionLabel}</span>
          <div class="commission-bar"><div class="commission-bar-fill" style="width:${Math.min(r.commissionMax / 30 * 100, 100)}%;"></div></div>
        </div>
      </td>
      <td>
        <span style="display:inline-flex;align-items:center;gap:6px;">
          <span class="traffic-dot" style="background:${trafficColor(r.trafficLevel)};"></span>
          ${r.trafficLabel}
        </span>
      </td>
      <td>${accessBadge(r.access)}<br><span style="font-size:11.5px;color:var(--text-muted);margin-top:3px;display:block;">${r.accessLabel}</span></td>
      <td style="max-width:180px;font-size:13px;color:var(--text-secondary);">${r.categories}</td>
      <td><span class="tag">${r.idealFor}</span></td>
    </tr>
  `).join('');
}

function filterTable(type, btn) {
  currentFilter = type;
  document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
  btn.classList.add('active');
  renderTable();
  if (window.scrollY > 120) {
    document.getElementById('table-wrap').scrollIntoView({ behavior: 'smooth', block: 'start' });
  }
}

function sortTable(col) {
  if (currentSort.col === col) currentSort.dir *= -1;
  else { currentSort.col = col; currentSort.dir = -1; }
  renderTable();
}

renderTable();

// sticky section nav
const sectionNav = document.getElementById('section-nav');
window.addEventListener('scroll', function() {
  sectionNav.classList.toggle('is-visible', window.scrollY > 120);
}, { passive: true });

function secNav(e, type) {
  e.preventDefault();
  sectionNav.querySelectorAll('.section-nav-link').forEach(b => b.classList.remove('active'));
  e.currentTarget.classList.add('active');
  // sync inline filter-bar
  const match = [...document.querySelectorAll('.filter-btn')].find(b => b.dataset.filter === type);
  if (match) { document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active')); match.classList.add('active'); }
  currentFilter = type;
  renderTable();
  document.getElementById('table-wrap').scrollIntoView({ behavior: 'smooth', block: 'start' });
}
</script>

<?php include 'includes/end.php'; ?>
