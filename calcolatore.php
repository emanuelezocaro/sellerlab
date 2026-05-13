<?php
$title = 'Calcolatore Commissioni Amazon e Marketplace - Gratis | SellerLab';
$description = 'Calcola commissioni e margine netto su Amazon, eBay, Etsy, Zalando e altri marketplace italiani. Strumento gratuito per chi vende online.';
$canonical = 'https://sellerlab.it/calcolatore.php';
$og_title = 'Calcolatore Commissioni Amazon e Marketplace - Gratis | SellerLab';
$og_description = 'Calcola quanto guadagni realmente su ogni marketplace, al netto di commissioni e costi. Gratuito.';
$og_url = 'https://sellerlab.it/calcolatore.php';
$og_locale = 'it_IT';
$current_page = 'calcolatore';
$breadcrumb = [['label' => 'Home', 'url' => 'index.php'], ['label' => 'Calcolatore']];
include 'includes/head.php';
include 'includes/nav.php';
?>

<style>
    .calc-layout {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 32px;
      align-items: start;
    }
    @media (max-width: 768px) { .calc-layout { grid-template-columns: 1fr; } }

    .calc-box {
      background: var(--bg-card);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      padding: 32px;
    }
    .calc-box h2 { font-size: 18px; font-weight: 700; margin-bottom: 24px; letter-spacing: -.2px; }

    .field { margin-bottom: 20px; }
    .field label {
      display: block;
      font-size: 13px;
      font-weight: 600;
      color: var(--text-secondary);
      margin-bottom: 6px;
      text-transform: uppercase;
      letter-spacing: .4px;
    }
    .field input, .field select {
      width: 100%;
      padding: 10px 14px;
      border: 1px solid var(--border);
      border-radius: var(--radius-sm);
      font-size: 15px;
      font-family: inherit;
      color: var(--text);
      background: var(--bg);
      transition: border-color .15s;
      -webkit-appearance: none;
    }
    .field input:focus, .field select:focus {
      outline: none;
      border-color: var(--accent);
      box-shadow: 0 0 0 3px rgba(37,99,235,.08);
    }
    .field-row { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }

    .result-box {
      background: var(--bg-soft);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      padding: 32px;
    }
    .result-box h2 { font-size: 18px; font-weight: 700; margin-bottom: 24px; letter-spacing: -.2px; }

    .result-line {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 12px 0;
      border-bottom: 1px solid var(--border);
      font-size: 14px;
    }
    .result-line:last-child { border-bottom: none; }
    .result-label { color: var(--text-secondary); }
    .result-value { font-weight: 600; color: var(--text); }
    .result-value.negative { color: var(--red); }
    .result-value.positive { color: var(--green); }

    .result-total {
      margin-top: 20px;
      padding: 20px;
      background: var(--text);
      border-radius: var(--radius-sm);
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .result-total-label { color: #94a3b8; font-size: 14px; font-weight: 600; }
    .result-total-value { color: #fff; font-size: 24px; font-weight: 700; }
    .result-total-value.loss { color: #fca5a5; }

    .margin-bar-wrap { margin-top: 16px; }
    .margin-bar-label { font-size: 12px; color: var(--text-secondary); margin-bottom: 6px; display: flex; justify-content: space-between; }
    .margin-bar { height: 8px; background: var(--border); border-radius: 4px; overflow: hidden; }
    .margin-bar-fill { height: 100%; border-radius: 4px; transition: width .4s ease, background .4s; }

    .marketplace-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
      gap: 8px;
      margin-bottom: 20px;
    }
    .mp-btn {
      padding: 10px 12px;
      border: 1px solid var(--border);
      border-radius: var(--radius-sm);
      background: var(--bg);
      cursor: pointer;
      font-size: 12.5px;
      font-weight: 500;
      font-family: inherit;
      color: var(--text-secondary);
      text-align: center;
      transition: all .15s;
      display: flex;
      align-items: center;
      gap: 6px;
    }
    .mp-btn img { width: 16px; height: 16px; object-fit: contain; }
    .mp-btn:hover { border-color: var(--accent); color: var(--accent); }
    .mp-btn.selected { background: var(--accent); border-color: var(--accent); color: #fff; }
    .mp-btn.selected img { filter: brightness(10); }

    .tip-box {
      background: var(--accent-light);
      border: 1px solid #bfdbfe;
      border-radius: var(--radius-sm);
      padding: 14px 16px;
      margin-top: 20px;
      font-size: 13px;
      color: #1e40af;
      line-height: 1.6;
    }
    .tip-box strong { color: #1e3a8a; }
  </style>

<div class="page-hero">
  <div class="page-hero-inner">
    <div class="section-label">Strumento gratuito</div>
    <h1>Calcolatore commissioni marketplace</h1>
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

<script>
const marketplaces = [
  { id: 'amazon',     name: 'Amazon.it',    commission: 0.15,  fixed: 0,    icon: 'https://www.google.com/s2/favicons?domain=amazon.it&sz=32' },
  { id: 'ebay',       name: 'eBay.it',      commission: 0.128, fixed: 0,    icon: 'https://cdn.simpleicons.org/ebay/E53238' },
  { id: 'etsy',       name: 'Etsy',         commission: 0.065, fixed: 0.20, icon: 'https://cdn.simpleicons.org/etsy/F16521' },
  { id: 'zalando',    name: 'Zalando',      commission: 0.20,  fixed: 0,    icon: 'https://cdn.simpleicons.org/zalando/FF6900' },
  { id: 'manomano',   name: 'ManoMano',     commission: 0.13,  fixed: 0,    icon: 'https://www.google.com/s2/favicons?domain=manomano.com&sz=32' },
  { id: 'tiktok',     name: 'TikTok Shop',  commission: 0.065, fixed: 0,    icon: 'https://cdn.simpleicons.org/tiktok/000000' },
  { id: 'backmarket', name: 'Back Market',  commission: 0.12,  fixed: 0,    icon: 'https://www.google.com/s2/favicons?domain=backmarket.it&sz=32' },
  { id: 'vinted',     name: 'Vinted',       commission: 0,     fixed: 0,    icon: 'https://cdn.simpleicons.org/vinted/007782' },
  { id: 'temu',       name: 'Temu',         commission: 0.03,  fixed: 0,    icon: 'https://www.google.com/s2/favicons?domain=temu.com&sz=32' },
];

let selectedMp = marketplaces[0];

function fmt(n) {
  return (n >= 0 ? '' : '−') + '€' + Math.abs(n).toFixed(2).replace('.', ',');
}

function calculate() {
  const price    = parseFloat(document.getElementById('price').value) || 0;
  const cost     = parseFloat(document.getElementById('cost').value) || 0;
  const shipping = parseFloat(document.getElementById('shipping').value) || 0;
  const other    = parseFloat(document.getElementById('other').value) || 0;
  const vatRate  = parseFloat(document.getElementById('vat').value) || 0;

  let commission = selectedMp.commission;
  let fixed = selectedMp.fixed;

  if (selectedMp.id === 'custom') {
    commission = (parseFloat(document.getElementById('custom-commission').value) || 0) / 100;
    fixed = 0;
  }

  const vatAmount       = vatRate > 0 ? price - (price / (1 + vatRate)) : 0;
  const priceExVat      = price - vatAmount;
  const commissionAmt   = priceExVat * commission;
  const totalCosts      = vatAmount + commissionAmt + fixed + cost + shipping + other;
  const profit          = price - totalCosts;
  const marginPct       = price > 0 ? (profit / price) * 100 : 0;

  document.getElementById('r-price').textContent      = '€' + price.toFixed(2).replace('.', ',');
  document.getElementById('r-vat').textContent        = vatAmount > 0 ? '−€' + vatAmount.toFixed(2).replace('.', ',') : '€0,00';
  document.getElementById('r-commission').textContent = '−€' + commissionAmt.toFixed(2).replace('.', ',');
  document.getElementById('r-fixed').textContent      = fixed > 0 ? '−€' + fixed.toFixed(2).replace('.', ',') : '€0,00';
  document.getElementById('r-cost').textContent       = '−€' + cost.toFixed(2).replace('.', ',');
  document.getElementById('r-shipping').textContent   = '−€' + shipping.toFixed(2).replace('.', ',');
  document.getElementById('r-other').textContent      = other > 0 ? '−€' + other.toFixed(2).replace('.', ',') : '€0,00';

  const profitEl = document.getElementById('r-profit');
  profitEl.textContent = (profit >= 0 ? '€' : '−€') + Math.abs(profit).toFixed(2).replace('.', ',');
  profitEl.className   = 'result-total-value' + (profit < 0 ? ' loss' : '');

  const mp = Math.max(0, Math.min(100, marginPct));
  document.getElementById('r-margin-pct').textContent = marginPct.toFixed(1) + '%';
  const fill = document.getElementById('margin-bar-fill');
  fill.style.width      = mp + '%';
  fill.style.background = marginPct < 0 ? 'var(--red)' : marginPct < 10 ? 'var(--orange)' : 'var(--green)';

  const tip = document.getElementById('tip-box');
  if (profit < 0) {
    tip.innerHTML = '⚠️ <strong>Attenzione:</strong> Stai vendendo in perdita. Aumenta il prezzo, riduci i costi o scegli un marketplace con commissioni più basse.';
  } else if (marginPct < 10) {
    tip.innerHTML = '⚠️ <strong>Margine basso:</strong> Meno del 10% di margine è rischioso. Considera di rivedere i costi o il prezzo di vendita.';
  } else if (marginPct < 20) {
    tip.innerHTML = '💡 <strong>Margine accettabile:</strong> Sei in territorio sicuro ma c\'è spazio per migliorare. Ottimizza i costi di spedizione e verifica le commissioni.';
  } else {
    tip.innerHTML = '✅ <strong>Ottimo margine:</strong> Sei in una posizione solida. Considera di reinvestire in advertising per scalare il volume di vendite.';
  }

  renderComparison(price, cost, shipping, other, vatRate);
}

function renderComparison(price, cost, shipping, other, vatRate) {
  const grid = document.getElementById('comparison-grid');
  const vatAmount = vatRate > 0 ? price - (price / (1 + vatRate)) : 0;
  const priceExVat = price - vatAmount;

  const sorted = [...marketplaces]
    .filter(m => m.id !== 'custom')
    .map(m => {
      const comm = priceExVat * m.commission + m.fixed;
      const profit = price - vatAmount - comm - cost - shipping - other;
      const margin = price > 0 ? (profit / price) * 100 : 0;
      return { ...m, profit, margin };
    })
    .sort((a, b) => b.profit - a.profit);

  grid.innerHTML = sorted.map((m, i) => `
    <div class="card" style="padding:20px;">
      <div style="display:flex;align-items:center;gap:10px;margin-bottom:14px;">
        <img src="${m.icon}" width="20" height="20" style="object-fit:contain;">
        <span style="font-weight:700;font-size:15px;">${m.name}</span>
        ${i === 0 ? '<span class="badge badge-green" style="margin-left:auto;">Migliore</span>' : ''}
      </div>
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:8px;">
        <div class="metric"><div class="metric-label">Commissione</div><div class="metric-value">${(m.commission * 100).toFixed(1)}%${m.fixed > 0 ? ' +€' + m.fixed.toFixed(2) : ''}</div></div>
        <div class="metric"><div class="metric-label">Profitto</div><div class="metric-value" style="color:${m.profit >= 0 ? 'var(--green)' : 'var(--red)'};">${m.profit >= 0 ? '€' : '−€'}${Math.abs(m.profit).toFixed(2).replace('.', ',')}</div></div>
      </div>
      <div style="margin-top:10px;">
        <div style="font-size:11px;color:var(--text-muted);margin-bottom:4px;">Margine: ${m.margin.toFixed(1)}%</div>
        <div class="margin-bar"><div class="margin-bar-fill" style="width:${Math.max(0, Math.min(100, m.margin))}%;background:${m.margin < 0 ? 'var(--red)' : m.margin < 10 ? 'var(--orange)' : 'var(--green)'};"></div></div>
      </div>
    </div>
  `).join('');
}

// Init
document.querySelectorAll('.mp-btn').forEach(btn => {
  btn.addEventListener('click', () => {
    document.querySelectorAll('.mp-btn').forEach(b => b.classList.remove('selected'));
    btn.classList.add('selected');
    const mp = marketplaces.find(m => m.id === btn.dataset.mp);
    selectedMp = mp || { id: 'custom', name: 'Personalizzato', commission: parseFloat(document.getElementById('custom-commission').value) / 100, fixed: 0 };
    document.getElementById('custom-commission-field').style.display = btn.dataset.mp === 'custom' ? 'block' : 'none';
    calculate();
  });
});

document.querySelectorAll('input, select').forEach(el => el.addEventListener('input', calculate));

calculate();
</script>

<?php include 'includes/end.php'; ?>
