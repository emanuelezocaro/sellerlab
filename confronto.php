<?php
$title = 'Confronto Commissioni Marketplace Italiani 2025 — SellerLab';
$description = 'Tabella comparativa di tutti i marketplace italiani: commissioni, traffico, tipo di accesso, categorie principali. Amazon vs eBay vs Zalando vs Etsy e molto altro.';
$canonical = 'https://sellerlab.it/confronto.php';
$og_title = 'Confronto Commissioni Marketplace Italiani 2025 — SellerLab';
$og_description = 'Tabella comparativa completa: commissioni, traffico, accesso e categorie di tutti i marketplace italiani.';
$og_url = 'https://sellerlab.it/confronto.php';
$og_locale = 'it_IT';
$current_page = 'confronto';
include 'includes/head.php';
include 'includes/nav.php';
?>

<div class="page-hero">
  <div class="page-hero-inner">
    <div class="section-label">Tabella comparativa</div>
    <h1>Tutti i marketplace a confronto</h1>
    <p>Commissioni, traffico, tipo di accesso e categorie principali. Filtra e ordina per trovare il canale giusto per te.</p>
  </div>
</div>

<section class="section">
  <div class="section-inner">

    <div class="intro-box">
      <p>Le commissioni indicate sono <strong>medie indicative</strong> per le categorie più comuni. Ogni marketplace applica tariffe diverse per categoria: verifica sempre la tabella commissioni ufficiale prima di vendere. I dati di traffico sono stime basate su fonti pubbliche (SimilarWeb, Statista) — <strong>aggiornate al 2025</strong>.</p>
    </div>

    <div class="filter-bar">
      <button class="filter-btn active" onclick="filterTable('all', this)">Tutti</button>
      <button class="filter-btn" onclick="filterTable('generalista', this)">Generalisti</button>
      <button class="filter-btn" onclick="filterTable('fashion', this)">Fashion</button>
      <button class="filter-btn" onclick="filterTable('verticale', this)">Verticali</button>
      <button class="filter-btn" onclick="filterTable('comparatore', this)">Comparatori</button>
      <button class="filter-btn" onclick="filterTable('social', this)">Social</button>
      <button class="filter-btn" onclick="filterTable('outlet', this)">Outlet</button>
      <button class="filter-btn" onclick="filterTable('libero', this)">Accesso libero</button>
    </div>

    <div class="table-wrap">
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
