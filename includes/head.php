<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-7MWL3R1W6F"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-7MWL3R1W6F');
  </script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- SEO primario -->
  <title><?= htmlspecialchars($title) ?></title>
  <meta name="description" content="<?= htmlspecialchars($description) ?>">
  <?php if (!empty($keywords)): ?><meta name="keywords" content="<?= htmlspecialchars($keywords) ?>"><?php endif; ?>
  <meta name="robots" content="index, follow">
  <meta name="author" content="SellerLab">
  <link rel="canonical" href="<?= htmlspecialchars($canonical) ?>">
  <link rel="alternate" hreflang="it" href="<?= htmlspecialchars($canonical) ?>">
  <link rel="alternate" hreflang="x-default" href="<?= htmlspecialchars($canonical) ?>">

  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="SellerLab">
  <meta property="og:title" content="<?= htmlspecialchars($og_title ?? $title) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($og_description ?? $description) ?>">
  <meta property="og:url" content="<?= htmlspecialchars($og_url ?? $canonical) ?>">
  <?php if (!empty($og_locale)): ?><meta property="og:locale" content="<?= htmlspecialchars($og_locale) ?>"><?php endif; ?>

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= htmlspecialchars($twitter_title ?? $og_title ?? $title) ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($twitter_description ?? $og_description ?? $description) ?>">

  <?php if (!empty($jsonld)): ?>
  <?= $jsonld ?>
  <?php endif; ?>

  <link rel="stylesheet" href="<?= $css_path ?? 'style.css' ?>">
</head>
<body>
