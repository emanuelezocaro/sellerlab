<?php
$title = 'Guida: Quale Marketplace Scegliere - SellerLab';
$description = 'Non sai da dove iniziare? Scopri quale marketplace fa per te in base al tipo di prodotto, ai tuoi obiettivi e al tuo livello di esperienza.';
$canonical = 'https://sellerlab.it/guida.php';
$og_title = 'Guida: Quale Marketplace Scegliere - SellerLab';
$og_description = 'Guida pratica per scegliere il marketplace giusto in base al tipo di prodotto e agli obiettivi di business.';
$og_url = 'https://sellerlab.it/guida.php';
$og_locale = 'it_IT';
$current_page = 'guida';
include 'includes/head.php';
include 'includes/nav.php';
?>

<style>
    .profile-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 20px; }

    .profile-card {
      background: var(--bg-card);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      padding: 28px;
      transition: border-color .2s, box-shadow .2s;
    }
    .profile-card:hover { border-color: var(--border-hover); box-shadow: var(--shadow-hover); }

    .profile-icon { font-size: 40px; margin-bottom: 16px; }
    .profile-title { font-size: 18px; font-weight: 700; margin-bottom: 6px; letter-spacing: -.2px; }
    .profile-subtitle { font-size: 13px; color: var(--text-muted); margin-bottom: 16px; }
    .profile-desc { font-size: 14px; color: var(--text-secondary); line-height: 1.65; margin-bottom: 20px; }

    .rec-list { list-style: none; display: flex; flex-direction: column; gap: 10px; margin-bottom: 20px; }
    .rec-item {
      display: flex;
      align-items: flex-start;
      gap: 10px;
      font-size: 13.5px;
    }
    .rec-item img { width: 20px; height: 20px; object-fit: contain; flex-shrink: 0; margin-top: 1px; }
    .rec-item-text { flex: 1; }
    .rec-item-name { font-weight: 600; color: var(--text); }
    .rec-item-why { color: var(--text-secondary); font-size: 12.5px; margin-top: 1px; }

    .avoid-box {
      background: var(--red-light);
      border: 1px solid #fecaca;
      border-radius: var(--radius-sm);
      padding: 12px 14px;
      font-size: 13px;
      color: #991b1b;
    }
    .avoid-box strong { color: #7f1d1d; }

    .path-section { margin-bottom: 56px; }
    .path-steps {
      display: flex;
      flex-direction: column;
      gap: 0;
      position: relative;
    }
    .path-step {
      display: flex;
      gap: 20px;
      padding: 24px 0;
      border-bottom: 1px solid var(--border);
    }
    .path-step:last-child { border-bottom: none; }
    .step-num {
      width: 36px; height: 36px;
      background: var(--accent);
      color: #fff;
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      font-size: 14px; font-weight: 700;
      flex-shrink: 0;
      margin-top: 2px;
    }
    .step-content h4 { font-size: 16px; font-weight: 700; margin-bottom: 6px; }
    .step-content p { font-size: 14px; color: var(--text-secondary); line-height: 1.6; }

    .comparison-mini {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 16px;
      margin-top: 24px;
    }
    @media (max-width: 600px) { .comparison-mini { grid-template-columns: 1fr; } }

    .mini-card {
      border: 1px solid var(--border);
      border-radius: var(--radius-sm);
      padding: 16px;
      text-align: center;
    }
    .mini-card-title { font-size: 13px; font-weight: 700; margin-bottom: 8px; }
    .mini-card-val { font-size: 22px; font-weight: 700; color: var(--accent); }
    .mini-card-sub { font-size: 11px; color: var(--text-muted); margin-top: 2px; }

    .timeline {
      display: flex;
      flex-direction: column;
      gap: 20px;
      padding-left: 24px;
      border-left: 2px solid var(--border);
      margin-top: 24px;
    }
    .tl-item { position: relative; }
    .tl-dot {
      width: 12px; height: 12px;
      background: var(--accent);
      border-radius: 50%;
      position: absolute;
      left: -30px;
      top: 4px;
    }
    .tl-phase { font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: .5px; color: var(--accent); }
    .tl-title { font-size: 15px; font-weight: 700; margin: 2px 0 4px; }
    .tl-desc { font-size: 13.5px; color: var(--text-secondary); line-height: 1.6; }
  </style>

<div class="page-hero">
  <div class="page-hero-inner">
    <div class="section-label">Guida pratica</div>
    <h1>Quale marketplace fa per te?</h1>
    <p>Non esiste la piattaforma giusta in assoluto. Dipende da cosa vendi, quali sono i tuoi obiettivi e quanto sei disposto a investire. Questa guida ti aiuta a scegliere.</p>
  </div>
</div>

<section class="section">
  <div class="section-inner">

    <div class="intro-box">
      <p>La domanda più comune di chi inizia a vendere online è: <strong>"Da dove parto?"</strong>. La risposta dipende da tre variabili: il tipo di prodotto, il tuo modello di business e il capitale disponibile. Questa guida analizza i profili più comuni e associa a ciascuno i canali più adatti.</p>
    </div>

    <!-- PROFILI -->
    <div class="section-header">
      <div class="section-label">Per tipo di venditore</div>
      <h2>Trova il tuo profilo</h2>
    </div>

    <div class="profile-grid">

      <!-- ARTIGIANO -->
      <div class="profile-card">
        <div class="profile-icon">🎨</div>
        <div class="profile-title">L'artigiano e il creativo</div>
        <div class="profile-subtitle">Prodotti handmade, personalizzati o digitali</div>
        <div class="profile-desc">Produci oggetti unici: gioielli, ceramiche, candele, stampe, illustrazioni digitali, abbigliamento custom. Il tuo vantaggio competitivo è l'unicità, non il prezzo.</div>
        <ul class="rec-list">
          <li class="rec-item">
            <img src="https://cdn.simpleicons.org/etsy/F16521" alt="Etsy">
            <div class="rec-item-text">
              <div class="rec-item-name">Etsy - Prima scelta</div>
              <div class="rec-item-why">Comunità globale che cerca prodotti unici. Accesso immediato, visibilità internazionale dal giorno 1.</div>
            </div>
          </li>
          <li class="rec-item">
            <img src="https://cdn.simpleicons.org/instagram/E4405F" alt="Instagram">
            <div class="rec-item-text">
              <div class="rec-item-name">Instagram Shop - Canale di scoperta</div>
              <div class="rec-item-why">Ottimo per costruire un pubblico e far scoprire il prodotto tramite contenuti visivi.</div>
            </div>
          </li>
          <li class="rec-item">
            <img src="https://cdn.simpleicons.org/shopify/96BF48" alt="Shopify">
            <div class="rec-item-text">
              <div class="rec-item-name">Shopify - Quando scala</div>
              <div class="rec-item-why">Apri il tuo negozio quando vuoi più controllo sul brand e fidelizzare i clienti.</div>
            </div>
          </li>
        </ul>
        <div class="avoid-box">🚫 <strong>Evita:</strong> Amazon per iniziare - i prodotti handmade si perdono tra milioni di articoli e la piattaforma non è pensata per unicità.</div>
      </div>

      <!-- RIVENDITORE -->
      <div class="profile-card">
        <div class="profile-icon">📦</div>
        <div class="profile-title">Il rivenditore</div>
        <div class="profile-subtitle">Prodotti di terzi, stock acquistato, retail/wholesale</div>
        <div class="profile-desc">Compri prodotti esistenti (da grossisti, liquidazioni o brand) e li rivendi con un margine. La tua forza è nella selezione, nel prezzo e nell'efficienza logistica.</div>
        <ul class="rec-list">
          <li class="rec-item">
            <img src="https://www.google.com/s2/favicons?domain=amazon.it&sz=32" alt="Amazon">
            <div class="rec-item-text">
              <div class="rec-item-name">Amazon FBA - Cardine</div>
              <div class="rec-item-why">Massimo traffico e fiducia. FBA delega la logistica. Ma occhio alla Buy Box: con prodotti già presenti avrai concorrenza.</div>
            </div>
          </li>
          <li class="rec-item">
            <img src="https://cdn.simpleicons.org/ebay/E53238" alt="eBay">
            <div class="rec-item-text">
              <div class="rec-item-name">eBay - Complementare</div>
              <div class="rec-item-why">Per prodotti difficili da trovare, referenze di nicchia o quando Amazon è troppo affollato.</div>
            </div>
          </li>
          <li class="rec-item">
            <img src="https://www.google.com/s2/favicons?domain=trovaprezzi.it&sz=32" alt="Trovaprezzi">
            <div class="rec-item-text">
              <div class="rec-item-name">Trovaprezzi - Per elettronica/tech</div>
              <div class="rec-item-why">Se hai prezzi competitivi su elettronica, intercetta chi è già in fase di acquisto.</div>
            </div>
          </li>
        </ul>
        <div class="avoid-box">⚠️ <strong>Attenzione:</strong> Su Amazon, prima di acquistare stock usa Keepa per verificare storico prezzi e Buy Box: potresti trovarti con margini azzerati da un calo improvviso.</div>
      </div>

      <!-- BRAND OWNER -->
      <div class="profile-card">
        <div class="profile-icon">🏷️</div>
        <div class="profile-title">Il brand owner</div>
        <div class="profile-subtitle">Prodotto con marchio proprio, private label o D2C</div>
        <div class="profile-desc">Hai un brand (anche piccolo) e vuoi costruire una presenza duratura. L'obiettivo non è solo vendere, ma costruire riconoscimento e clienti fedeli.</div>
        <ul class="rec-list">
          <li class="rec-item">
            <img src="https://cdn.simpleicons.org/shopify/96BF48" alt="Shopify">
            <div class="rec-item-text">
              <div class="rec-item-name">Shopify - Base di partenza</div>
              <div class="rec-item-why">Il tuo negozio è il tuo asset. I dati clienti ti appartengono. È qui che costruisci la relazione diretta.</div>
            </div>
          </li>
          <li class="rec-item">
            <img src="https://www.google.com/s2/favicons?domain=amazon.it&sz=32" alt="Amazon">
            <div class="rec-item-text">
              <div class="rec-item-name">Amazon - Per volume</div>
              <div class="rec-item-why">Con Brand Registry puoi sfruttare A+ Content, Sponsored Brands e protezione da hijacker.</div>
            </div>
          </li>
          <li class="rec-item">
            <img src="https://cdn.simpleicons.org/instagram/E4405F" alt="Instagram">
            <div class="rec-item-text">
              <div class="rec-item-name">Instagram/TikTok - Discovery</div>
              <div class="rec-item-why">Per far conoscere il brand a nuovi potenziali clienti tramite contenuti e creator.</div>
            </div>
          </li>
        </ul>
        <div class="avoid-box">🚫 <strong>Evita:</strong> Dipendere esclusivamente da Amazon. Se Amazon sospende l'account o abbassa il ranking, perdi tutto. Il sito proprio è l'assicurazione.</div>
      </div>

      <!-- FASHION SELLER -->
      <div class="profile-card">
        <div class="profile-icon">👗</div>
        <div class="profile-title">Il fashion seller</div>
        <div class="profile-subtitle">Abbigliamento, scarpe, accessori nuovi o usati</div>
        <div class="profile-desc">Vendi moda, che sia nuovo, vintage o second-hand. Il canale giusto dipende molto dal segmento di prezzo e dall'età del target.</div>
        <ul class="rec-list">
          <li class="rec-item">
            <img src="https://cdn.simpleicons.org/zalando/FF6900" alt="Zalando">
            <div class="rec-item-text">
              <div class="rec-item-name">Zalando - Per brand strutturati</div>
              <div class="rec-item-why">La vetrina fashion più grande d'Europa. Ma serve un brand registrato e una collezione strutturata.</div>
            </div>
          </li>
          <li class="rec-item">
            <img src="https://cdn.simpleicons.org/vinted/007782" alt="Vinted">
            <div class="rec-item-text">
              <div class="rec-item-name">Vinted - Per second-hand</div>
              <div class="rec-item-why">Zero commissioni venditore. Ottimo per iniziare con usato o stock di fine stagione.</div>
            </div>
          </li>
          <li class="rec-item">
            <img src="https://www.google.com/s2/favicons?domain=depop.com&sz=32" alt="Depop">
            <div class="rec-item-text">
              <div class="rec-item-name">Depop - Per vintage e Gen Z</div>
              <div class="rec-item-why">Community giovane con passione per streetwear, vintage e moda creativa.</div>
            </div>
          </li>
        </ul>
        <div class="avoid-box">⚠️ <strong>Considera:</strong> I resi nel fashion raggiungono il 30–50%. Calcola sempre il costo dei resi nei tuoi margini prima di scegliere un canale.</div>
      </div>

      <!-- DIY/CASA -->
      <div class="profile-card">
        <div class="profile-icon">🔨</div>
        <div class="profile-title">Il seller DIY & Casa</div>
        <div class="profile-subtitle">Bricolage, giardinaggio, arredamento, utensili</div>
        <div class="profile-desc">Vendi prodotti per la casa, il giardino o il fai-da-te. Un settore in forte crescita con scontrini medi elevati e acquirenti qualificati.</div>
        <ul class="rec-list">
          <li class="rec-item">
            <img src="https://www.google.com/s2/favicons?domain=manomano.com&sz=32" alt="ManoMano">
            <div class="rec-item-text">
              <div class="rec-item-name">ManoMano - Prima scelta verticale</div>
              <div class="rec-item-why">Pubblico altamente targettizzato. Meno concorrenza rispetto ad Amazon per prodotti DIY.</div>
            </div>
          </li>
          <li class="rec-item">
            <img src="https://www.google.com/s2/favicons?domain=amazon.it&sz=32" alt="Amazon">
            <div class="rec-item-text">
              <div class="rec-item-name">Amazon - Per volumi</div>
              <div class="rec-item-why">Le categorie Home & Garden su Amazon.it sono molto trafficate. FBA funziona bene per prodotti non ingombranti.</div>
            </div>
          </li>
          <li class="rec-item">
            <img src="https://www.google.com/s2/favicons?domain=leroymerlin.it&sz=32" alt="Leroy Merlin">
            <div class="rec-item-text">
              <div class="rec-item-name">Leroy Merlin - Complementare</div>
              <div class="rec-item-why">Brand di fiducia per prodotti casa. Accesso selettivo ma ottima qualità del traffico.</div>
            </div>
          </li>
        </ul>
        <div class="avoid-box">⚠️ <strong>Nota:</strong> Prodotti ingombranti (mobili, elettrodomestici grandi) hanno fee FBA molto elevate. Valuta il FBM o un 3PL per questi articoli.</div>
      </div>

      <!-- TECH/ELETTRONICA -->
      <div class="profile-card">
        <div class="profile-icon">💻</div>
        <div class="profile-title">Il seller tech & elettronica</div>
        <div class="profile-subtitle">Informatica, smartphone, elettrodomestici, gaming</div>
        <div class="profile-desc">Uno dei settori più competitivi: margini bassi, price war continua, acquirenti molto informati. Vinci su selezione, prezzo e servizio.</div>
        <ul class="rec-list">
          <li class="rec-item">
            <img src="https://www.google.com/s2/favicons?domain=amazon.it&sz=32" alt="Amazon">
            <div class="rec-item-text">
              <div class="rec-item-name">Amazon - Inevitabile</div>
              <div class="rec-item-why">Il 60%+ degli acquisti tech in Italia inizia su Amazon. Devi esserci, ma con una strategia di pricing precisa.</div>
            </div>
          </li>
          <li class="rec-item">
            <img src="https://www.google.com/s2/favicons?domain=trovaprezzi.it&sz=32" alt="Trovaprezzi">
            <div class="rec-item-text">
              <div class="rec-item-name">Trovaprezzi - Per prezzi competitivi</div>
              <div class="rec-item-why">Gli acquirenti tech usano i comparatori. Essere presenti con buon prezzo porta traffico qualificato a costo contenuto.</div>
            </div>
          </li>
          <li class="rec-item">
            <img src="https://www.google.com/s2/favicons?domain=backmarket.it&sz=32" alt="Back Market">
            <div class="rec-item-text">
              <div class="rec-item-name">Back Market - Per ricondizionato</div>
              <div class="rec-item-why">Se hai accesso a prodotti ricondizionati certificati, il mercato cresce velocemente e i margini sono migliori.</div>
            </div>
          </li>
        </ul>
        <div class="avoid-box">⚠️ <strong>Attenzione:</strong> Usa sempre un repricer (es. Repricer.com) su Amazon per l'elettronica: i prezzi cambiano ogni ora e perdere la Buy Box significa perdere il 90% delle vendite.</div>
      </div>

    </div>

    <div class="divider" style="margin:56px 0;"></div>

    <!-- PERCORSO PER CHI INIZIA -->
    <div class="path-section">
      <div class="section-header">
        <div class="section-label">Per chi parte da zero</div>
        <h2>Il percorso consigliato</h2>
        <p>Se non hai ancora venduto online, ecco una progressione logica che minimizza il rischio e massimizza l'apprendimento.</p>
      </div>

      <div class="timeline">
        <div class="tl-item">
          <div class="tl-dot"></div>
          <div class="tl-phase">Fase 1 - Mese 1-3</div>
          <div class="tl-title">Inizia su un marketplace esistente</div>
          <div class="tl-desc">Non costruire subito il tuo e-commerce. Inizia su Amazon, eBay o Etsy: il traffico è già lì, non devi preoccuparti di marketing e impari come funziona la vendita online con infrastruttura pronta. Vendi 10–20 prodotti, impara cosa piace al mercato.</div>
        </div>
        <div class="tl-item">
          <div class="tl-dot"></div>
          <div class="tl-phase">Fase 2 - Mese 3-6</div>
          <div class="tl-title">Ottimizza e aggiungi un secondo canale</div>
          <div class="tl-desc">Una volta che il primo canale funziona, aggiungi un secondo (es. da Amazon aggiungi Etsy, o da eBay aggiungi Amazon). Usa un tool di feed management se gestisci 50+ prodotti. Inizia a costruire un piccolo database clienti dove possibile.</div>
        </div>
        <div class="tl-item">
          <div class="tl-dot"></div>
          <div class="tl-phase">Fase 3 - Mese 6-12</div>
          <div class="tl-title">Apri il tuo negozio indipendente</div>
          <div class="tl-desc">Solo quando hai validato il prodotto e la domanda, investi in un e-commerce proprio (Shopify o WooCommerce). A questo punto hai già dati sulle preferenze dei clienti, know-how sul pricing e un flusso di cassa per sostenere i costi fissi.</div>
        </div>
        <div class="tl-item">
          <div class="tl-dot"></div>
          <div class="tl-phase">Fase 4 - Anno 2+</div>
          <div class="tl-title">Strategia multichannel strutturata</div>
          <div class="tl-desc">Con un negozio proprio che funziona e marketplace attivi, costruisci una strategia coerente: prezzi allineati, stock sincronizzato via Lengow/Channable, advertising su Google Shopping e Amazon Ads, email marketing con Klaviyo.</div>
        </div>
      </div>
    </div>

    <div class="divider" style="margin:56px 0;"></div>

    <!-- ERRORI COMUNI -->
    <div>
      <div class="section-header">
        <div class="section-label">Errori da evitare</div>
        <h2>I 6 errori più comuni di chi inizia</h2>
      </div>
      <div class="grid-2">

        <div class="card">
          <div class="card-name" style="margin-bottom:8px;">1. Aprire il proprio e-commerce prima di validare il prodotto</div>
          <div class="card-desc">Costruire un sito Shopify costa tempo e denaro. Se non sai ancora se il tuo prodotto vende, inizia su un marketplace: hai traffico immediato e zero costi di infrastruttura. Poi apri il sito quando hai già prove che il mercato c'è.</div>
        </div>

        <div class="card">
          <div class="card-name" style="margin-bottom:8px;">2. Ignorare le commissioni nel calcolo del prezzo</div>
          <div class="card-desc">Molti fissano il prezzo aggiungendo un margine al costo del prodotto, dimenticando commissioni marketplace (8–25%), IVA, spedizione, resi e costo del capitale. Usa il <a href="calcolatore.php" style="color:var(--accent);">calcolatore margini</a> prima di fissare qualsiasi prezzo.</div>
        </div>

        <div class="card">
          <div class="card-name" style="margin-bottom:8px;">3. Dipendere da un solo canale</div>
          <div class="card-desc">Vendere solo su Amazon significa che Amazon controlla il tuo business. Un account sospeso, un cambio di algoritmo o una nuova policy possono azzerare il fatturato in 24 ore. Diversifica sempre su almeno 2–3 canali, incluso un tuo negozio.</div>
        </div>

        <div class="card">
          <div class="card-name" style="margin-bottom:8px;">4. Non leggere le policy del marketplace</div>
          <div class="card-desc">Amazon in particolare ha policy molto stringenti su immagini, titoli, recensioni e comunicazioni col cliente. Violazioni apparentemente innocue (es. chiedere recensioni nel pacco) possono portare alla sospensione dell'account.</div>
        </div>

        <div class="card">
          <div class="card-name" style="margin-bottom:8px;">5. Trascurare la qualità delle immagini</div>
          <div class="card-desc">Le immagini sono il fattore numero uno che determina il CTR su tutti i marketplace. Un prodotto fotografato bene vende fino a 3 volte di più dello stesso prodotto con foto mediocri. È il primo investimento da fare, non l'ultimo.</div>
        </div>

        <div class="card">
          <div class="card-name" style="margin-bottom:8px;">6. Acquistare grandi quantità di stock senza test</div>
          <div class="card-desc">Un errore classico: comprare 500 pezzi convinti che si venderanno, poi rimanere bloccati con stock invenduto. Testa sempre con piccole quantità (20–50 pezzi), valida la domanda e poi scala. Vale sia per Amazon FBA che per il proprio sito.</div>
        </div>

      </div>
    </div>

  </div>
</section>

<section class="cta-section">
  <div class="section-inner">
    <h2>Calcola i tuoi margini prima di iniziare.</h2>
    <p>Inserisci prezzo, costo e spedizione per vedere quanto guadagni su ogni marketplace.</p>
    <div class="hero-actions">
      <a href="calcolatore.php" class="btn btn-primary">Apri il Calcolatore →</a>
      <a href="confronto.php" class="btn" style="background:rgba(255,255,255,.1);color:#fff;border:1px solid rgba(255,255,255,.2);">Confronta le commissioni</a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

<?php include 'includes/end.php'; ?>
