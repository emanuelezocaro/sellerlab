<?php if (!empty($breadcrumb)): ?>
<div class="breadcrumb-bar">
  <div class="breadcrumb-bar-inner">
    <?php foreach ($breadcrumb as $i => $crumb): ?>
      <?php if ($i > 0): ?><span class="breadcrumb-sep">/</span><?php endif; ?>
      <?php if (!empty($crumb['url'])): ?>
        <a href="<?= ($base_path ?? '') . htmlspecialchars($crumb['url']) ?>"><?= htmlspecialchars($crumb['label']) ?></a>
      <?php else: ?>
        <span class="breadcrumb-current"><?= htmlspecialchars($crumb['label']) ?></span>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
</div>
<?php endif; ?>
