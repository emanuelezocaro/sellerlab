<?php
$title = 'Calcolatore Margini Marketplace — SellerLab';
$description = 'Calcola commissioni e margine netto su Amazon, eBay, Etsy, Zalando e altri marketplace italiani. Strumento gratuito per venditori online.';
$canonical = 'https://sellerlab.it/calcolatore.php';
$og_title = 'Calcolatore Margini Marketplace — SellerLab';
$og_description = 'Calcola quanto guadagni realmente su ogni marketplace, al netto di commissioni e costi. Gratuito.';
$og_url = 'https://sellerlab.it/calcolatore.php';
$og_locale = 'it_IT';
$current_page = 'calcolatore';
include 'includes/head.php';
include 'includes/nav.php';
?>

<div class="page-hero">
  <div class="page-hero-inner">
    <div class="section-label">Strumento gratuito</div>
    <h1>Calcolatore margini marketplace</h1>
    <p>Inserisci prezzo di vendita, costo del prodotto e spedizione. Scopri quanto guadagni davvero su ogni piattaforma.</p>
  </div>
</div>

<section class="section">
  <div class="section-inner">
    <div class="calc-layout">

      <!-- INPUT -->
      <div class="calc-box">
        <h2>Dati del prodotto</h2>

        <div class="field">
          <label>Seleziona il marketplace</label>
          <div class="marketplace-grid">
            <button class="mp-btn selected" data-mp="amazon" data-commission="0.15" data-fixed="0">
              <img src="https://www.google.com/s2/favicons?domain=amazon.it&sz=32" alt="">Amazon
            </button>
            <button class="mp-btn" data-mp="ebay" data-commission="0.128" data-fixed="0">
              <img src="https://cdn.simpleicons.org/ebay/E53238" alt="">eBay
            </button>
            <button class="mp-btn" data-mp="etsy" data-commission="0.065" data-fixed="0.20">
              <img src="https://cdn.simpleicons.org/etsy/F16521" alt="">Etsy
            </button>
            <button class="mp-btn" data-mp="zalando" data-commission="0.20" data-fixed="0">
              <img src="https://cdn.simpleicons.org/zalando/FF6900" alt="">Zalando
            </button>
            <button class="mp-btn" data-mp="manomano" data-commission="0.13" data-fixed="0">
              <img src="https://www.google.com/s2/favicons?domain=manomano.com&sz=32" alt="">ManoMano
            </button>
            <button class="mp-btn" data-mp="tiktok" data-commission="0.065" data-fixed="0">
              <img src="https://cdn.simpleicons.org/tiktok/000000" alt="">TikTok Shop
            </button>
            <button class="mp-btn" data-mp="backmarket" data-commission="0.12" data-fixed="0">
              <img src="https://www.google.com/s2/favicons?domain=backmarket.it&sz=32" alt="">Back Market
            </button>
            <button class="mp-btn" data-mp="temu" data-commission="0.03" data-fixed="0">
              <img src="https://www.google.com/s2/favicons?domain=temu.com&sz=32" alt="">Temu
            </button>
            <button class="mp-btn" data-mp="custom" data-commission="0.10" data-fixed="0">
              ✏️ Personalizzato
            </button>
          </div>
        </div>

        <div class="field" id="custom-commission-field" style="display:none;">
          <label>Commissione personalizzata (%)</label>
          <input type="number" id="custom-commission" value="10" min="0" max="100" step="0.1">
        </div>

        <div class="field-row">
          <div class="field">
            <label>Prezzo di vendita (€)</label>
            <input type="number" id="price" value="30" min="0" step="0.01">
          </div>
          <div class="field">
            <label>Costo prodotto (€)</label>
            <input type="number" id="cost" value="10" min="0" step="0.01">
          </div>
        </div>

        <div class="field-row">
          <div class="field">
            <label>Costo spedizione (€)</label>
            <input type="number" id="shipping" value="4" min="0" step="0.01">
          </div>
          <div class="field">
            <label>Altri costi (€)</label>
            <input type="number" id="other" value="0" min="0" step="0.01">
          </div>
        </div>

        <div class="field">
          <label>IVA inclusa nel prezzo?</label>
          <select id="vat">
            <option value="0">No (prezzo già IVA esclusa)</option>
            <option value="0.22" selected>Sì, IVA 22%</option>
            <option value="0.10">Sì, IVA 10%</option>
            <option value="0.04">Sì, IVA 4%</option>
          </select>
        </div>
      </div>

      <!-- RISULTATI -->
      <div class="result-box">
        <h2>Risultato</h2>

        <div class="result-line">
          <span class="result-label">Prezzo di vendita</span>
          <span class="result-value" id="r-price">€30,00</span>
        </div>
        <div class="result-line">
          <span class="result-label">IVA versata</span>
          <span class="result-value negative" id="r-vat">−€5,41</span>
        </div>
        <div class="result-line">
          <span class="result-label">Commissione marketplace</span>
          <span class="result-value negative" id="r-commission">−€4,50</span>
        </div>
        <div class="result-line">
          <span class="result-label">Fee fisse marketplace</span>
          <span class="result-value negative" id="r-fixed">−€0,00</span>
        </div>
        <div class="result-line">
          <span class="result-label">Costo prodotto</span>
          <span class="result-value negative" id="r-cost">−€10,00</span>
        </div>
        <div class="result-line">
          <span class="result-label">Spedizione</span>
          <span class="result-value negative" id="r-shipping">−€4,00</span>
        </div>
        <div class="result-line">
          <span class="result-label">Altri costi</span>
          <span class="result-value negative" id="r-other">−€0,00</span>
        </div>

        <div class="result-total">
          <span class="result-total-label">Profitto netto</span>
          <span class="result-total-value" id="r-profit">€6,09</span>
        </div>

        <div class="margin-bar-wrap">
          <div class="margin-bar-label">
            <span>Margine netto</span>
            <span id="r-margin-pct">20.3%</span>
          </div>
          <div class="margin-bar">
            <div class="margin-bar-fill" id="margin-bar-fill" style="width:20%;background:var(--green);"></div>
          </div>
        </div>

        <div class="tip-box" id="tip-box">
          💡 <strong>Consiglio:</strong> Con questo margine sei in una posizione solida. Considera di reinvestire parte del profitto in advertising per aumentare il volume.
        </div>
      </div>

    </div>

    <!-- CONFRONTO RAPIDO -->
    <div style="margin-top:48px;">
      <div class="section-header">
        <div class="section-label">Confronto automatico</div>
        <h2>Stesso prodotto, tutti i marketplace</h2>
        <p>Con il prezzo e i costi inseriti sopra, ecco quanto guadagneresti su ogni piattaforma.</p>
      </div>
      <div class="grid-3" id="comparison-grid">
        <!-- Populated by JS -->
      </div>
    </div>

  </div>
</section>

<?php include 'includes/footer.php'; ?>
