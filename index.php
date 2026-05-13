<?php
$title = 'SellerLab — Marketplace e Tool per Vendere Online in Italia';
$description = 'Confronta tutti i marketplace italiani e i tool per venditori online: Amazon, eBay, Zalando, Etsy e molto altro. Commissioni reali, pro e contro aggiornati al 2025.';
$keywords = 'marketplace italiani, vendere online italia, amazon italia commissioni, ebay italia, zalando venditori, ecommerce italia, tool ecommerce, shopify italia';
$canonical = 'https://sellerlab.it/';
$og_title = 'SellerLab — Marketplace e Tool per Vendere Online in Italia';
$og_description = 'Confronta tutti i marketplace italiani e i tool per venditori online. Commissioni reali, pro e contro aggiornati al 2025.';
$og_url = 'https://sellerlab.it/';
$og_locale = 'it_IT';
$jsonld = '<script type="application/ld+json">\n  {\n    "@context": "https://schema.org",\n    "@graph": [\n      {\n        "@type": "WebSite",\n        "@id": "https://sellerlab.it/#website",\n        "name": "SellerLab",\n        "description": "Guida indipendente a marketplace e tool per vendere online in Italia",\n        "url": "https://sellerlab.it",\n        "inLanguage": "it-IT",\n        "publisher": { "@id": "https://sellerlab.it/#organization" }\n      },\n      {\n        "@type": "Organization",\n        "@id": "https://sellerlab.it/#organization",\n        "name": "SellerLab",\n        "url": "https://sellerlab.it",\n        "description": "Guida indipendente ai marketplace e tool per vendere online in Italia"\n      },\n      {\n        "@type": "BreadcrumbList",\n        "itemListElement": [\n          { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://sellerlab.it/" }\n        ]\n      }\n    ]\n  }\n  </script>';
$current_page = 'home';
include 'includes/head.php';
include 'includes/nav.php';
?>

<!-- HERO -->
<section class="hero">
  <div class="hero-badge">🇮🇹 Focalizzato sul mercato italiano</div>
  <h1>Vendi online in Italia.<br><em>Scegli bene dove farlo.</em></h1>
  <p>SellerLab raccoglie e confronta tutti i marketplace, le piattaforme e i tool per venditori italiani. Commissioni reali, pro e contro onesti, guide pratiche.</p>
  <div class="hero-actions">
    <a href="marketplace.php" class="btn btn-primary">Esplora i Marketplace →</a>
    <a href="tools.php" class="btn btn-secondary">Tool & Software</a>
  </div>
</section>

<!-- STATS -->
<div class="stats-bar">
  <div class="stat-item">
    <div class="stat-number">20+</div>
    <div class="stat-label">Marketplace analizzati</div>
  </div>
  <div class="stat-item">
    <div class="stat-number">30+</div>
    <div class="stat-label">Tool e software recensiti</div>
  </div>
  <div class="stat-item">
    <div class="stat-number">100%</div>
    <div class="stat-label">Focus mercato italiano</div>
  </div>
  <div class="stat-item">
    <div class="stat-number">0</div>
    <div class="stat-label">Contenuti sponsorizzati</div>
  </div>
</div>

<!-- CATEGORIE PRINCIPALI -->
<section class="section section-alt">
  <div class="section-inner">
    <div class="section-header">
      <div class="section-label">Dove vuoi vendere</div>
      <h2>Scegli il canale giusto per il tuo business</h2>
      <p>Ogni canale ha le sue regole, il suo pubblico e le sue commissioni. Conoscerli ti permette di scegliere con cognizione di causa.</p>
    </div>
    <div class="grid-3">

      <a href="marketplace.php#generalisti" class="card" style="text-decoration:none;color:inherit;">
        <div class="card-header">
          <div class="card-icon">🏪</div>
          <span class="badge badge-blue">7 piattaforme</span>
        </div>
        <div class="card-name" style="margin-bottom:8px;">Marketplace Generalisti</div>
        <div class="card-desc">Le grandi piattaforme che vendono di tutto: Amazon, eBay, Subito. Alto traffico, alta concorrenza, regole rigide.</div>
        <span class="tag">Amazon</span> <span class="tag">eBay</span> <span class="tag">Subito.it</span>
      </a>

      <a href="marketplace.php#verticali" class="card" style="text-decoration:none;color:inherit;">
        <div class="card-header">
          <div class="card-icon">🎯</div>
          <span class="badge badge-purple">8 piattaforme</span>
        </div>
        <div class="card-name" style="margin-bottom:8px;">Marketplace Verticali</div>
        <div class="card-desc">Piattaforme specializzate per categoria: moda, tech, arredamento, handmade. Pubblico più qualificato, nicchie definite.</div>
        <span class="tag">Zalando</span> <span class="tag">Etsy</span> <span class="tag">ManoMano</span>
      </a>

      <a href="marketplace.php#comparatori" class="card" style="text-decoration:none;color:inherit;">
        <div class="card-header">
          <div class="card-icon">🔍</div>
          <span class="badge badge-orange">4 piattaforme</span>
        </div>
        <div class="card-name" style="margin-bottom:8px;">Comparatori & Shopping Ads</div>
        <div class="card-desc">Trovaprezzi, Google Shopping e altri canali CPC per intercettare chi è già pronto all'acquisto.</div>
        <span class="tag">Google Shopping</span> <span class="tag">Trovaprezzi</span> <span class="tag">Kelkoo</span>
      </a>

      <a href="tools.php#ecommerce" class="card" style="text-decoration:none;color:inherit;">
        <div class="card-header">
          <div class="card-icon">🛒</div>
          <span class="badge badge-green">6 tool</span>
        </div>
        <div class="card-name" style="margin-bottom:8px;">Piattaforme E-commerce</div>
        <div class="card-desc">Shopify, WooCommerce, PrestaShop: il tuo negozio indipendente. Piena libertà, più responsabilità.</div>
        <span class="tag">Shopify</span> <span class="tag">WooCommerce</span> <span class="tag">PrestaShop</span>
      </a>

      <a href="tools.php#feed" class="card" style="text-decoration:none;color:inherit;">
        <div class="card-header">
          <div class="card-icon">⚙️</div>
          <span class="badge badge-blue">5 tool</span>
        </div>
        <div class="card-name" style="margin-bottom:8px;">Feed & Multichannel</div>
        <div class="card-desc">Gestisci prodotti e ordini su più marketplace contemporaneamente. Lengow, Channable, DataFeedWatch.</div>
        <span class="tag">Lengow</span> <span class="tag">Channable</span> <span class="tag">DataFeedWatch</span>
      </a>

      <a href="tools.php#analytics" class="card" style="text-decoration:none;color:inherit;">
        <div class="card-header">
          <div class="card-icon">📊</div>
          <span class="badge badge-purple">7 tool</span>
        </div>
        <div class="card-name" style="margin-bottom:8px;">Analytics & Ottimizzazione</div>
        <div class="card-desc">Helium 10, Jungle Scout, Keepa: studia la concorrenza, ottimizza i listing, monitora i prezzi.</div>
        <span class="tag">Helium 10</span> <span class="tag">Keepa</span> <span class="tag">Sellerboard</span>
      </a>

    </div>
  </div>
</section>

<!-- TOP MARKETPLACE PREVIEW -->
<section class="section">
  <div class="section-inner">
    <div class="section-header">
      <div class="section-label">I più usati in Italia</div>
      <h2>Marketplace principali a colpo d'occhio</h2>
      <p>Una panoramica rapida sui canali più rilevanti per il mercato italiano.</p>
    </div>
    <div class="grid-2">

      <div class="card">
        <div class="card-header">
          <div class="card-icon">
            <img src="https://www.google.com/s2/favicons?domain=amazon.it&sz=64" alt="Amazon" width="28" height="28">
          </div>
          <span class="badge badge-orange">Leader di mercato</span>
        </div>
        <div class="card-title-group">
          <div class="card-name">Amazon.it</div>
          <div class="card-type">Marketplace generalista · B2C</div>
        </div>
        <div class="card-desc" style="margin-top:12px;">La piattaforma con il maggior traffico e-commerce in Italia. Oltre 30 milioni di visitatori mensili. Ideale per chi vuole volumi, meno per chi costruisce un brand.</div>
        <div class="metrics">
          <div class="metric"><div class="metric-label">Commissione</div><div class="metric-value">8–15%</div></div>
          <div class="metric"><div class="metric-label">Traffico/mese</div><div class="metric-value">~35M</div></div>
          <div class="metric"><div class="metric-label">Iscrizione</div><div class="metric-value">39€/mese</div></div>
        </div>
        <a href="marketplace.php#amazon" class="btn btn-secondary" style="font-size:13px;padding:8px 16px;">Scheda completa →</a>
      </div>

      <div class="card">
        <div class="card-header">
          <div class="card-icon">
            <img src="https://cdn.simpleicons.org/ebay/E53238" alt="eBay" width="28" height="28">
          </div>
          <span class="badge badge-blue">Storico</span>
        </div>
        <div class="card-title-group">
          <div class="card-name">eBay.it</div>
          <div class="card-type">Marketplace generalista · C2C & B2C</div>
        </div>
        <div class="card-desc" style="margin-top:12px;">Il marketplace più longevo, ancora forte su usato, collezionismo e ricambi auto. Traffico in calo rispetto al picco, ma nicchie specifiche rimangono molto profittevoli.</div>
        <div class="metrics">
          <div class="metric"><div class="metric-label">Commissione</div><div class="metric-value">~12.8%</div></div>
          <div class="metric"><div class="metric-label">Traffico/mese</div><div class="metric-value">~12M</div></div>
          <div class="metric"><div class="metric-label">Iscrizione</div><div class="metric-value">Gratuita</div></div>
        </div>
        <a href="marketplace.php#ebay" class="btn btn-secondary" style="font-size:13px;padding:8px 16px;">Scheda completa →</a>
      </div>

      <div class="card">
        <div class="card-header">
          <div class="card-icon">
            <img src="https://cdn.simpleicons.org/zalando/FF6900" alt="Zalando" width="28" height="28">
          </div>
          <span class="badge badge-purple">Fashion</span>
        </div>
        <div class="card-title-group">
          <div class="card-name">Zalando</div>
          <div class="card-type">Marketplace verticale · Moda & Lifestyle</div>
        </div>
        <div class="card-desc" style="margin-top:12px;">Il marketplace fashion più grande d'Europa. Accesso selettivo: devi essere un brand riconosciuto o retailer autorizzato. Cliente fidelizzato e alta propensione all'acquisto.</div>
        <div class="metrics">
          <div class="metric"><div class="metric-label">Commissione</div><div class="metric-value">5–25%</div></div>
          <div class="metric"><div class="metric-label">Traffico/mese</div><div class="metric-value">~8M (IT)</div></div>
          <div class="metric"><div class="metric-label">Accesso</div><div class="metric-value">Su invito</div></div>
        </div>
        <a href="marketplace.php#zalando" class="btn btn-secondary" style="font-size:13px;padding:8px 16px;">Scheda completa →</a>
      </div>

      <div class="card">
        <div class="card-header">
          <div class="card-icon">
            <img src="https://www.google.com/s2/favicons?domain=manomano.com&sz=64" alt="ManoMano" width="28" height="28">
          </div>
          <span class="badge badge-green">DIY & Casa</span>
        </div>
        <div class="card-title-group">
          <div class="card-name">ManoMano</div>
          <div class="card-type">Marketplace verticale · Fai da te & Giardino</div>
        </div>
        <div class="card-desc" style="margin-top:12px;">Marketplace europeo specializzato in bricolage, giardinaggio e arredamento. In forte crescita in Italia, con un pubblico molto targettizzato e scontrino medio alto.</div>
        <div class="metrics">
          <div class="metric"><div class="metric-label">Commissione</div><div class="metric-value">12–15%</div></div>
          <div class="metric"><div class="metric-label">Traffico/mese</div><div class="metric-value">~4M (IT)</div></div>
          <div class="metric"><div class="metric-label">Iscrizione</div><div class="metric-value">Gratuita</div></div>
        </div>
        <a href="marketplace.php#manomano" class="btn btn-secondary" style="font-size:13px;padding:8px 16px;">Scheda completa →</a>
      </div>

    </div>
    <div style="margin-top:32px;text-align:center;">
      <a href="marketplace.php" class="btn btn-primary">Tutti i marketplace →</a>
    </div>
  </div>
</section>

<!-- PERCHÉ SELLERLAB -->
<section class="section section-alt">
  <div class="section-inner">
    <div class="section-header centered">
      <div class="section-label">Perché SellerLab</div>
      <h2>Informazioni chiare, nessun conflitto di interesse</h2>
      <p>Ogni scheda è redatta in modo indipendente. Nessun marketplace ci paga per essere promosso.</p>
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

<!-- CTA -->
<section class="cta-section">
  <div class="section-inner">
    <h2>Pronto a scegliere il canale giusto?</h2>
    <p>Esplora tutti i marketplace italiani con schede dettagliate, commissioni reali e confronti pratici.</p>
    <div class="hero-actions">
      <a href="marketplace.php" class="btn btn-primary">Esplora i Marketplace →</a>
      <a href="tools.php" class="btn" style="background:rgba(255,255,255,.1);color:#fff;border:1px solid rgba(255,255,255,.2);">Vedi i Tool</a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
