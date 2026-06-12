<?php
$css_path = '../style.css';
$base_path = '../';
$current_page = 'tools';
$root = dirname(__DIR__);
include $root . '/includes/data-tools.php';
$cat = $tools_categories['feed'];
$items = array_filter($tools, function($t) { return $t['category'] === 'feed'; });
$title = $cat['seo_title'];
$description = $cat['meta_description'];
$canonical = 'https://sellerlab.it/tools/tools-feed.php';
$og_title = $cat['seo_title'];
$og_description = $cat['meta_description'];
$og_url = 'https://sellerlab.it/tools/tools-feed.php';
$og_locale = 'it_IT';
$faqs_jsonld = array_map(function($f2){ return ['@type'=>'Question','name'=>$f2['q'],'acceptedAnswer'=>['@type'=>'Answer','text'=>$f2['a']]]; }, $cat['faqs']);
$jsonld = '<script type="application/ld+json">' . json_encode(['@context'=>'https://schema.org','@graph'=>[['@type'=>'FAQPage','mainEntity'=>$faqs_jsonld],['@type'=>'BreadcrumbList','itemListElement'=>[['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://sellerlab.it/'],['@type'=>'ListItem','position'=>2,'name'=>'Tool & Software','item'=>'https://sellerlab.it/tools.php'],['@type'=>'ListItem','position'=>3,'name'=>$cat['label']]]]]], JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES) . '</script>';
$breadcrumb = [['label' => 'Home', 'url' => 'index.php'], ['label' => 'Tool & Software', 'url' => 'tools.php'], ['label' => $cat['label']]];
include $root . '/includes/head.php';
include $root . '/includes/nav.php';
include $root . '/includes/breadcrumb.php';
include $root . '/includes/render-card.php';
?>

<div class="page-hero">
  <div class="page-hero-inner">
    <div class="section-label">Tool & Software</div>
    <h1><?= htmlspecialchars($cat['h1']) ?></h1>
    <p><?= htmlspecialchars($cat['desc']) ?></p>
  </div>
</div>

<section class="section">
  <div class="section-inner">
    <div class="grid-2">
      <?php foreach ($items as $item) render_card($item); ?>
    </div>
  </div>
</section>

<?php include $root . '/includes/render-faq.php'; ?>
<?php include $root . '/includes/footer.php'; ?>
<?php include $root . '/includes/end.php'; ?>
