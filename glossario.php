<?php
$title = 'Glossario E-commerce e Marketplace — SellerLab';
$description = 'Tutti i termini del commercio online spiegati in italiano: FBA, FBM, BSR, Buy Box, ASIN, EAN, GTIN, CPC, ROAS, AOV e molto altro.';
$canonical = 'https://sellerlab.it/glossario.php';
$og_title = 'Glossario E-commerce e Marketplace — SellerLab';
$og_description = 'Tutti i termini del commercio online spiegati in italiano: FBA, BSR, Buy Box, ASIN, CPC e molto altro.';
$og_url = 'https://sellerlab.it/glossario.php';
$og_locale = 'it_IT';
$current_page = 'glossario';
include 'includes/head.php';
include 'includes/nav.php';
?>

<div class="page-hero">
  <div class="page-hero-inner">
    <div class="section-label">Glossario</div>
    <h1>Termini dell'e-commerce spiegati</h1>
    <p>60+ definizioni di marketplace, logistica, advertising e metriche. Da FBA a ROAS, tutto ciò che devi sapere.</p>
  </div>
</div>

<section class="section">
  <div class="section-inner">
    <div class="glossary-layout">

      <!-- SIDEBAR -->
      <aside>
        <div class="alpha-nav">
          <h3>Vai alla lettera</h3>
          <div class="alpha-links" id="alpha-links"></div>
        </div>
      </aside>

      <!-- CONTENUTO -->
      <div>
        <div class="search-wrap">
          <input type="text" class="search-input" id="search" placeholder="Cerca un termine... (es. FBA, Buy Box, ASIN)">
        </div>

        <div id="glossary-content"></div>
        <div class="no-results" id="no-results">Nessun termine trovato per "<span id="search-query"></span>".</div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
