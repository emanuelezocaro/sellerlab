<?php if (!empty($cat['faqs'])): ?>
<section class="section faq-section">
  <div class="section-inner">
    <div class="section-header centered">
      <h2>Domande frequenti</h2>
      <p>Le risposte alle domande più comuni su questo argomento.</p>
    </div>
    <div class="faq-list">
      <?php foreach ($cat['faqs'] as $faq): ?>
      <div class="faq-item">
        <h3 class="faq-q"><?= htmlspecialchars($faq['q']) ?></h3>
        <p class="faq-a"><?= htmlspecialchars($faq['a']) ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>
