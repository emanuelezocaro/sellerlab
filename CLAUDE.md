# SellerLab — Documentazione per Claude

Sito PHP per venditori online italiani: confronto marketplace, tool e-commerce, calcolatore margini, guida per profilo. Nessun framework, nessun build step — PHP puro + CSS custom.

---

## Architettura

### Struttura file

```
sellerlab/
├── index.php                  # Homepage
├── marketplace.php            # Hub marketplace (tutte le categorie)
├── tools.php                  # Hub tool & software
├── confronto.php              # Tabella comparativa interattiva (JS)
├── calcolatore.php            # Calcolatore commissioni (JS)
├── guida.php                  # Guida per profilo venditore
├── glossario.php              # Glossario termini e-commerce
├── consulenza.php             # Pagina consulenza 1:1
├── style.css                  # CSS unico, nessun preprocessore
├── sitemap.xml
├── robots.txt
├── marketplace/               # 8 sottopagine categoria marketplace
│   ├── marketplace-generalisti.php
│   ├── marketplace-verticali.php
│   ├── marketplace-fashion.php
│   ├── marketplace-comparatori.php
│   ├── marketplace-social.php
│   ├── marketplace-outlet.php
│   ├── marketplace-ricondizionato.php
│   └── marketplace-internazionali.php
├── tools/                     # 9 sottopagine categoria tool
│   ├── tools-ecommerce.php
│   ├── tools-feed.php
│   ├── tools-analytics.php
│   ├── tools-repricing.php
│   ├── tools-inventory.php
│   ├── tools-reviews.php
│   ├── tools-spedizioni.php
│   ├── tools-email-marketing.php
│   └── tools-pagamenti.php
└── includes/
    ├── head.php               # <head> con SEO, OG, JSON-LD
    ├── nav.php                # Navbar + JS hamburger/dropdown
    ├── breadcrumb.php         # Breadcrumb (renderizza $breadcrumb)
    ├── footer.php             # Footer con link
    ├── end.php                # </body></html>
    ├── data-marketplace.php   # Source of truth: categorie + item marketplace
    ├── data-tools.php         # Source of truth: categorie + item tool
    ├── render-card.php        # Funzione render_card() usata da tutte le sottopagine
    └── render-faq.php         # Renderizza sezione FAQ da $cat['faqs']
```

### Pattern architetturale

**Hub & Spoke:** ogni hub (`marketplace.php`, `tools.php`) mostra tutte le categorie con card riepilogative. Le sottopagine mostrano le card dettagliate di quella categoria specifica.

**Single source of truth:** tutti i dati vivono in `data-marketplace.php` e `data-tools.php`. Le 17 sottopagine non hardcodano contenuto: leggono i dati dai file di dati.

---

## Struttura dati

### Categoria (in `$marketplace_categories` e `$tools_categories`)

```php
'slug' => [
    'label'           => 'Nome visualizzato nel nav',
    'slug'            => 'slug-url',
    'h2'              => 'Titolo sezione nelle card hub (breve)',
    'h1'              => 'H1 keyword-rich della sottopagina',
    'seo_title'       => '<title> della sottopagina',
    'meta_description'=> 'Meta description 130-160 char',
    'desc'            => 'Sottotitolo descrittivo',
    'section_label'   => 'Label etichetta',
    'items_count'     => 4,
    'commission_range'=> '0–15%',   // marketplace
    'price_range'     => '...',     // tools
    'featured'        => ['id1', 'id2'],
    'faqs'            => [
        ['q' => 'Domanda?', 'a' => 'Risposta con dati specifici.'],
        // 3-4 FAQ per categoria
    ],
]
```

### Item marketplace / tool

```php
'id' => [
    'id'       => 'amazon',
    'name'     => 'Amazon.it',
    'category' => 'generalisti',
    'domain'   => 'amazon.it',          // per Google Favicon API
    'type'     => 'Descrizione breve · dal 2010',
    'badges'   => [['text'=>'...','color'=>'orange']],
    'desc'     => 'HTML permesso: <strong>, <br>',
    'metrics'  => [['label'=>'Piano Base','value'=>'39$/mese']],
    'pros'     => ['Pro 1', 'Pro 2'],
    'cons'     => ['Contro 1'],
    'tags'     => ['Tag 1', 'Tag 2'],
]
```

**Marketplace:** 28 item, 8 categorie  
**Tool:** 31 item, 9 categorie

---

## Include order — CRITICO

### Pagine root (es. `marketplace.php`)
```php
$title = '...';
$description = '...';
$canonical = 'https://sellerlab.it/marketplace.php';
$breadcrumb = [...];
include 'includes/head.php';
include 'includes/nav.php';
include 'includes/breadcrumb.php';   // SEMPRE subito dopo nav
include 'includes/data-marketplace.php';
include 'includes/render-card.php';
```

### Sottopagine (es. `marketplace/marketplace-generalisti.php`)
```php
// 1. Carica dati PRIMA dell'head (per usare i dati nelle variabili SEO)
$root = dirname(__DIR__);
include $root . '/includes/data-marketplace.php';
$cat = $marketplace_categories['generalisti'];
$items = array_filter($marketplaces, function($m) { return $m['category'] === 'generalisti'; });

// 2. Variabili SEO da dati categoria
$title       = $cat['seo_title'];
$description = $cat['meta_description'];
$canonical   = 'https://sellerlab.it/marketplace/marketplace-generalisti.php';
$og_locale   = 'it_IT';

// 3. JSON-LD (FAQPage + BreadcrumbList)
$faqs_jsonld = array_map(function($f){ ... }, $cat['faqs']);
$jsonld = '<script type="application/ld+json">' . json_encode([...]) . '</script>';

// 4. Include template
include $root . '/includes/head.php';
include $root . '/includes/nav.php';
include $root . '/includes/breadcrumb.php';  // SEMPRE subito dopo nav
include $root . '/includes/render-card.php';
```

---

## Variabili PHP per head.php

| Variabile | Obbligatoria | Note |
|---|---|---|
| `$title` | ✅ | `<title>` tag |
| `$description` | ✅ | Meta description |
| `$canonical` | ✅ | Link canonical + hreflang |
| `$og_locale` | ✅ | Sempre `'it_IT'` |
| `$keywords` | ❌ | Meta keywords (opzionale) |
| `$og_title` | ❌ | Default: `$title` |
| `$og_description` | ❌ | Default: `$description` |
| `$og_url` | ❌ | Default: `$canonical` |
| `$jsonld` | ❌ | Stringa HTML `<script type="application/ld+json">` |
| `$css_path` | ❌ | Default: `'style.css'` — sottopagine usano `'../style.css'` |

---

## Breadcrumb

Impostare `$breadcrumb` come array prima di includere `nav.php`:

```php
// Pagina root
$breadcrumb = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Marketplace'],  // ultimo elemento: nessun url
];

// Sottopagina
$breadcrumb = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Marketplace', 'url' => 'marketplace.php'],
    ['label' => 'Generalisti'],
];
```

Le URL nel breadcrumb usano `$base_path` (`''` per root, `'../'` per sottopagine).

---

## Path per sottopagine — CRITICO

Le sottopagine in `marketplace/` e `tools/` usano path assoluti per evitare problemi `open_basedir` del server:

```php
$root = dirname(__DIR__);               // path assoluto alla root del progetto
$css_path = '../style.css';             // path relativo per il browser
$base_path = '../';                     // prefisso per i link nel nav e footer

include $root . '/includes/head.php';   // path assoluto per PHP
```

**Non usare mai** `include '../includes/head.php'` nelle sottopagine — causa errori `open_basedir` sul server di produzione.

---

## Compatibilità PHP

Il server di produzione gira su **PHP 7.3**. Non usare:
- Arrow functions `fn($x) => ...` (richiedono PHP 7.4+)
- Named arguments (PHP 8.0+)
- Match expressions (PHP 8.0+)

Usare sempre la sintassi estesa:
```php
// ❌ Non funziona su PHP 7.3
$items = array_filter($marketplaces, fn($m) => $m['category'] === 'generalisti');

// ✅ Compatibile
$items = array_filter($marketplaces, function($m) { return $m['category'] === 'generalisti'; });
```

---

## SEO & GEO (AI search)

### Struttura per ogni sottopagina

1. **`<title>`** — da `$cat['seo_title']`: keyword principale + anno + brand
2. **Meta description** — da `$cat['meta_description']`: 130-160 char, keyword + dati concreti
3. **H1** — da `$cat['h1']`: keyword-rich, diverso dal `h2` (usato nelle card hub)
4. **hreflang** — generato automaticamente in `head.php` da `$canonical`
5. **FAQPage JSON-LD** — generato da `$cat['faqs']` nella sottopagina
6. **BreadcrumbList JSON-LD** — generato nella sottopagina
7. **Sezione FAQ HTML** — renderizzata da `render-faq.php` in fondo alla pagina

### Regola per le FAQ
Le FAQ devono contenere **dati specifici e numeri reali** (es. percentuali commissioni, prezzi, nomi tool). Le AI (Perplexity, ChatGPT, ecc.) tendono a citare fonti con risposte concrete e fattuali.

---

## Checklist nuova pagina / modifica contenuto

**Ogni volta che si crea o modifica una pagina:**

- [ ] Breadcrumb subito dopo `include nav.php`
- [ ] `$title`, `$description`, `$canonical`, `$og_locale` impostati
- [ ] H1 keyword-rich (non uguale al title, non uguale al h2 delle card)
- [ ] `hreflang` — automatico via `head.php` se `$canonical` è impostato
- [ ] Aggiorna `sitemap.xml` con la nuova URL e `lastmod` aggiornato
- [ ] Aggiorna le pagine impattate (confronto.php, calcolatore.php, guida.php se pertinente)

**Quando si aggiunge un marketplace:**
- [ ] Aggiungere item in `includes/data-marketplace.php`
- [ ] Aggiornare `items_count` della categoria
- [ ] Aggiungere riga in `confronto.php` (array JS `data`)
- [ ] Aggiungere button + entry in `calcolatore.php` (array JS `marketplaces`)
- [ ] Valutare aggiunta in `guida.php` (profilo venditore pertinente)

**Quando si aggiunge un tool:**
- [ ] Aggiungere item in `includes/data-tools.php`
- [ ] Aggiornare `items_count` della categoria
- [ ] Valutare aggiunta in `guida.php` se pertinente

---

## Contenuto attuale

| Sezione | Quantità |
|---|---|
| Marketplace | 28 item, 8 categorie |
| Tool & Software | 31 item, 9 categorie |
| Pagine sottocategoria | 17 (8 marketplace + 9 tools) |
| FAQ per sottopagina | 3-4 domande con risposte fattuali |

---

## Stato tecnico

| Aspetto | Stato |
|---|---|
| Schema FAQPage | ✅ Tutte le 17 sottopagine |
| Schema BreadcrumbList | ✅ Tutte le 17 sottopagine |
| hreflang it + x-default | ✅ Automatico via head.php |
| H1 keyword-rich | ✅ Tutte le sottopagine |
| Meta description ottimizzate | ✅ Tutte le sottopagine |
| Breadcrumb HTML | ✅ Tutte le pagine |
| robots.txt | ✅ Con sitemap URL |
| sitemap.xml | ✅ 25 URL, lastmod 2026-06-12 |
| Footer link (sottopagine) | ✅ Usa $base_path |
| Mobile menu | ✅ Fix last-child centering |
| PHP 7.3 compatibility | ✅ No arrow functions |
| open_basedir (server) | ✅ dirname(__DIR__) su tutte le sottopagine |

---

## Deploy

Il sito è hostato su un server PHP condiviso italiano.  
Repository GitHub: `emanuelezocaro/sellerlab`  
Branch principale: `main` → deploy automatico su push.

```bash
git add -A
git commit -m "Descrizione"
git push
```
