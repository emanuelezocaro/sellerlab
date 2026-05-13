<?php
$title = 'Marketplace Italiani 2026: Commissioni, Pro e Contro | SellerLab';
$description = 'Confronta tutti i marketplace per vendere online in Italia: Amazon, eBay, Zalando, Etsy, Subito, ManoMano e molto altro. Commissioni aggiornate, pro e contro, guide pratiche.';
$canonical = 'https://sellerlab.it/marketplace.php';
$og_title = 'Marketplace Italiani 2026 - Confronto Commissioni e Guide';
$og_description = 'Confronta Amazon, eBay, Zalando, Etsy, Subito e altri 15+ marketplace italiani. Commissioni reali, pro e contro aggiornati.';
$og_url = 'https://sellerlab.it/marketplace.php';
$og_locale = 'it_IT';
$current_page = 'marketplace';
$breadcrumb = [['label' => 'Home', 'url' => 'index.php'], ['label' => 'Marketplace']];
include 'includes/head.php';
include 'includes/nav.php';
include 'includes/breadcrumb.php';
include 'includes/data-marketplace.php';
include 'includes/render-card.php';
?>

<div class="page-hero">
  <div class="page-hero-inner">
    <div class="section-label">Marketplace</div>
    <h1>Marketplace italiani 2026: commissioni, pro e contro</h1>
    <p>20+ piattaforme analizzate. Scegli la categoria che ti interessa per vedere commissioni, pro e contro dettagliati.</p>
  </div>
</div>

<section class="section">
  <div class="section-inner">
    <div class="intro-box">
      <p>Il mercato e-commerce italiano vale oltre <strong>54 miliardi di euro</strong> e cresce ogni anno. Scegliere dove vendere non è banale: ogni marketplace ha il suo pubblico, le sue regole e le sue commissioni. Questa guida ti aiuta a orientarti senza perderti.</p>
    </div>

    <div class="grid-2" style="margin-top:40px;">
      <?php foreach ($marketplace_categories as $cat): ?>
        <?php render_hub_card($cat, 'marketplace/marketplace', ''); ?>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/end.php'; ?>
