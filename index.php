<?php
$title = 'Vendere Online in Italia: Marketplace, Tool e Guide | SellerLab';
$description = 'Confronta tutti i marketplace italiani e i tool per vendere online: Amazon, eBay, Zalando, Etsy. Commissioni reali, pro e contro onesti, guide pratiche aggiornate al 2026.';
$keywords = 'marketplace italiani, vendere online italia, amazon italia commissioni, ebay italia, zalando venditori, ecommerce italia, tool ecommerce, shopify italia';
$canonical = 'https://sellerlab.it/';
$og_title = 'SellerLab - Marketplace e Tool per Vendere Online in Italia';
$og_description = 'Confronta tutti i marketplace italiani e i tool per venditori online. Commissioni reali, pro e contro aggiornati al 2026.';
$og_url = 'https://sellerlab.it/';
$og_locale = 'it_IT';
$jsonld = '<script type="application/ld+json">{"@context":"https://schema.org","@graph":[{"@type":"WebSite","@id":"https://sellerlab.it/#website","name":"SellerLab","url":"https://sellerlab.it","inLanguage":"it-IT"},{"@type":"Organization","@id":"https://sellerlab.it/#organization","name":"SellerLab","url":"https://sellerlab.it"}]}</script>';
$current_page = 'home';
include 'includes/head.php';
include 'includes/nav.php';
include 'includes/data-marketplace.php';
include 'includes/data-tools.php';
include 'includes/render-card.php';
?>

<!-- HERO -->
<section class="hero">
  <div class="hero-badge">🇮🇹 Focalizzato sul mercato italiano</div>
  <h1>Vendere online in Italia.<br><em>Scegli bene dove farlo.</em></h1>
  <p>SellerLab raccoglie e confronta tutti i marketplace, le piattaforme e i tool per venditori italiani. Commissioni reali, pro e contro onesti, guide pratiche.</p>
  <div class="hero-actions">
    <a href="marketplace.php" class="btn btn-primary">Esplora i Marketplace →</a>
    <a href="tools.php" class="btn btn-secondary">Tool & Software</a>
  </div>
</section>

<!-- STATS -->
<div class="stats-bar">
  <div class="stat-item">
    <div class="stat-number"><?= count($marketplaces) ?>+</div>
    <div class="stat-label">Marketplace analizzati</div>
  </div>
  <div class="stat-item">
    <div class="stat-number"><?= count($tools) ?>+</div>
    <div class="stat-label">Tool e software recensiti</div>
  </div>
  <div class="stat-item">
    <div class="stat-number"><?= count($marketplace_categories) + count($tools_categories) ?></div>
    <div class="stat-label">Categorie coperte</div>
  </div>
  <div class="stat-item">
    <div class="stat-number">0</div>
    <div class="stat-label">Contenuti sponsorizzati</div>
  </div>
</div>

<!-- MARKETPLACE CATEGORIES -->
<section class="section section-alt">
  <div class="section-inner">
    <div class="section-header">
      <div class="section-label">Marketplace</div>
      <h2>Dove vendere online in Italia</h2>
      <p>Tutte le categorie di marketplace analizzate: commissioni reali, pro e contro, a chi si addicono.</p>
    </div>
    <div class="grid-2">
      <?php foreach ($marketplace_categories as $cat): ?>
        <?php render_hub_card($cat, 'marketplace/marketplace'); ?>
      <?php endforeach; ?>
    </div>
    <div style="margin-top:32px;text-align:center;">
      <a href="marketplace.php" class="btn btn-primary">Tutti i marketplace →</a>
    </div>
  </div>
</section>

<!-- TOOLS CATEGORIES -->
<section class="section">
  <div class="section-inner">
    <div class="section-header">
      <div class="section-label">Tool & Software</div>
      <h2>Gli strumenti per vendere meglio</h2>
      <p>Piattaforme e-commerce, feed management, analytics Amazon, spedizioni, pagamenti: tutto quello che ti serve categorizzato e confrontato.</p>
    </div>
    <div class="grid-2">
      <?php foreach ($tools_categories as $cat): ?>
        <?php render_hub_card($cat, 'tools/tools'); ?>
      <?php endforeach; ?>
    </div>
    <div style="margin-top:32px;text-align:center;">
      <a href="tools.php" class="btn btn-primary">Tutti i tool →</a>
    </div>
  </div>
</section>

<!-- STRUMENTI PRATICI -->
<section class="section section-alt">
  <div class="section-inner">
    <div class="section-header">
      <div class="section-label">Strumenti pratici</div>
      <h2>Confronta, calcola, scegli</h2>
      <p>Strumenti interattivi e guide per prendere decisioni concrete.</p>
    </div>
    <div class="grid-3">

      <a href="confronto.php" class="card card-link" style="text-decoration:none;">
        <div style="font-size:32px;margin-bottom:16px;">⚖️</div>
        <div class="card-name" style="margin-bottom:8px;">Confronto commissioni</div>
        <div class="card-desc">Tabella comparativa di tutti i marketplace italiani: commissioni, traffico, tipo di accesso e categorie principali in un colpo d'occhio.</div>
        <div style="margin-top:16px;font-size:13px;font-weight:600;color:var(--accent);">Apri il confronto →</div>
      </a>

      <a href="calcolatore.php" class="card card-link" style="text-decoration:none;">
        <div style="font-size:32px;margin-bottom:16px;">🧮</div>
        <div class="card-name" style="margin-bottom:8px;">Calcolatore commissioni</div>
        <div class="card-desc">Inserisci prezzo, costo e spedizione. Scopri quanto guadagni davvero su Amazon, eBay, Etsy, Zalando e altri. Calcolo in tempo reale.</div>
        <div style="margin-top:16px;font-size:13px;font-weight:600;color:var(--accent);">Calcola ora →</div>
      </a>

      <a href="guida.php" class="card card-link" style="text-decoration:none;">
        <div style="font-size:32px;margin-bottom:16px;">🧭</div>
        <div class="card-name" style="margin-bottom:8px;">Guida alla scelta</div>
        <div class="card-desc">Non sai da dove iniziare? La guida ti aiuta a scegliere il marketplace giusto in base al tipo di prodotto, al tuo profilo e agli obiettivi.</div>
        <div style="margin-top:16px;font-size:13px;font-weight:600;color:var(--accent);">Leggi la guida →</div>
      </a>

    </div>
  </div>
</section>

<!-- PERCHÉ SELLERLAB -->
<section class="section">
  <div class="section-inner">
    <div class="section-header centered">
      <div class="section-label">Perché SellerLab</div>
      <h2>Informazioni chiare, nessun conflitto di interesse</h2>
      <p>Ogni scheda è redatta in modo indipendente. Nessun marketplace o tool ci paga per essere promosso.</p>
    </div>
    <div class="grid-3">
      <div class="card" style="text-align:center;">
        <div style="font-size:36px;margin-bottom:16px;">🎯</div>
        <div class="card-name" style="margin-bottom:8px;">Solo mercato italiano</div>
        <div class="card-desc">Dati di traffico, commissioni e disponibilità riferiti specificatamente all'Italia. Niente informazioni generiche che non si applicano alla tua realtà.</div>
      </div>
      <div class="card" style="text-align:center;">
        <div style="font-size:36px;margin-bottom:16px;">⚖️</div>
        <div class="card-name" style="margin-bottom:8px;">Pro e contro onesti</div>
        <div class="card-desc">Ogni scheda riporta vantaggi e svantaggi reali. Non esistono piattaforme perfette: ti aiutiamo a capire quale è giusta per il tuo caso specifico.</div>
      </div>
      <div class="card" style="text-align:center;">
        <div style="font-size:36px;margin-bottom:16px;">🔄</div>
        <div class="card-name" style="margin-bottom:8px;">Aggiornato regolarmente</div>
        <div class="card-desc">Il mondo del commercio online cambia velocemente. Commissioni, policy e nuove piattaforme: manteniamo tutto aggiornato.</div>
      </div>
    </div>
  </div>
</section>

<!-- CTA CONSULENZA -->
<section class="cta-section">
  <div class="section-inner">
    <h2>Vuoi una strategia su misura?</h2>
    <p>Una sessione 1:1 di 60 minuti per capire su quali canali puntare, come strutturare l'operatività e cosa evitare. Con un piano scritto alla fine.</p>
    <div class="hero-actions">
      <a href="consulenza.php" class="btn btn-primary">Prenota la consulenza →</a>
      <a href="guida.php" class="btn" style="background:rgba(255,255,255,.1);color:#fff;border:1px solid rgba(255,255,255,.2);">Prima leggi la guida</a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/end.php'; ?>
