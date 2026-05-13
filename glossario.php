<?php
$title = 'Glossario E-commerce Italiano: Termini Marketplace e Vendita Online | SellerLab';
$description = 'Tutti i termini del commercio online spiegati in italiano: FBA, FBM, BSR, Buy Box, ASIN, EAN, GTIN, CPC, ROAS e molto altro. Il glossario per chi vende online.';
$canonical = 'https://sellerlab.it/glossario.php';
$og_title = 'Glossario E-commerce Italiano: Termini Marketplace e Vendita Online | SellerLab';
$og_description = 'Tutti i termini del commercio online spiegati in italiano: FBA, BSR, Buy Box, ASIN, CPC e molto altro.';
$og_url = 'https://sellerlab.it/glossario.php';
$og_locale = 'it_IT';
$current_page = 'glossario';
include 'includes/head.php';
include 'includes/nav.php';
?>

<style>
    .glossary-layout {
      display: grid;
      grid-template-columns: 200px 1fr;
      gap: 40px;
      align-items: start;
    }
    @media (max-width: 768px) { .glossary-layout { grid-template-columns: 1fr; } }

    .alpha-nav {
      position: sticky;
      top: 80px;
      background: var(--bg-soft);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      padding: 20px;
    }
    .alpha-nav h3 { font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: .5px; color: var(--text-muted); margin-bottom: 12px; }
    .alpha-links { display: flex; flex-wrap: wrap; gap: 4px; }
    .alpha-links a {
      width: 28px; height: 28px;
      display: flex; align-items: center; justify-content: center;
      border-radius: 6px;
      font-size: 13px; font-weight: 600;
      color: var(--text-secondary);
      text-decoration: none;
      transition: all .15s;
    }
    .alpha-links a:hover { background: var(--accent); color: #fff; }

    .search-wrap { margin-bottom: 32px; }
    .search-input {
      width: 100%;
      padding: 12px 16px;
      border: 1px solid var(--border);
      border-radius: var(--radius-sm);
      font-size: 15px;
      font-family: inherit;
      color: var(--text);
      background: var(--bg);
      transition: border-color .15s;
    }
    .search-input:focus { outline: none; border-color: var(--accent); box-shadow: 0 0 0 3px rgba(37,99,235,.08); }

    .letter-section { margin-bottom: 40px; scroll-margin-top: 120px; }
    .letter-heading {
      font-size: 28px;
      font-weight: 700;
      color: var(--accent);
      letter-spacing: -1px;
      margin-bottom: 16px;
      padding-bottom: 8px;
      border-bottom: 2px solid var(--accent-light);
    }

    .term-entry {
      padding: 18px 0;
      border-bottom: 1px solid var(--border);
    }
    .term-entry:last-child { border-bottom: none; }
    .term-name {
      font-size: 16px;
      font-weight: 700;
      color: var(--text);
      margin-bottom: 4px;
      display: flex;
      align-items: center;
      gap: 10px;
    }
    .term-abbr {
      font-size: 12px;
      font-weight: 600;
      color: var(--text-muted);
      font-style: normal;
    }
    .term-def {
      font-size: 14px;
      color: var(--text-secondary);
      line-height: 1.65;
    }
    .term-def strong { color: var(--text); }
    .term-tags { margin-top: 8px; display: flex; gap: 6px; flex-wrap: wrap; }

    .no-results {
      text-align: center;
      padding: 48px 24px;
      color: var(--text-secondary);
      font-size: 15px;
      display: none;
    }
  </style>

<nav class="section-nav" id="section-nav">
  <div class="section-nav-inner" id="section-nav-letters"></div>
</nav>

<div class="page-hero">
  <div class="page-hero-inner">
    <div class="section-label">Glossario</div>
    <h1>Glossario e-commerce italiano</h1>
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

<script>
const terms = [
  // A
  { letter: 'A', name: 'ASIN', full: 'Amazon Standard Identification Number', tags: ['Amazon'], def: 'Codice univoco a 10 caratteri alfanumerici assegnato da Amazon a ogni prodotto nel suo catalogo. Ogni variante (colore, taglia) ha un ASIN diverso. Utilizzato per identificare i prodotti nelle API e negli strumenti di analisi come Keepa o Helium 10.' },
  { letter: 'A', name: 'AOV', full: 'Average Order Value', tags: ['Metriche'], def: 'Valore medio degli ordini. Si calcola dividendo il fatturato totale per il numero di ordini in un periodo. È una metrica fondamentale: aumentare l\'AOV (es. con bundle, upsell, cross-sell) è spesso più efficiente che acquisire nuovi clienti.' },
  { letter: 'A', name: 'A+ Content', full: null, tags: ['Amazon'], def: 'Funzionalità di Amazon Seller Central che permette ai brand registrati di arricchire le pagine prodotto con immagini aggiuntive, testi formattati, confronti prodotto e moduli visivi. Aumenta mediamente le conversioni del 3–10%.' },
  { letter: 'A', name: 'Algoritmo A9/A10', full: null, tags: ['Amazon'], def: 'Il motore di ricerca interno di Amazon che determina il ranking dei prodotti nelle SERP del marketplace. Considera fattori come tasso di conversione, rilevanza delle keyword, storico di vendita, prezzo competitivo, recensioni e velocità di spedizione.' },

  // B
  { letter: 'B', name: 'B2B', full: 'Business to Business', tags: ['Generale'], def: 'Modello commerciale in cui un\'azienda vende ad altre aziende (non ai consumatori finali). Molte piattaforme come Amazon Business, Alibaba o ManoMano PRO hanno sezioni B2B con prezzi dedicati e fatturazione automatica.' },
  { letter: 'B', name: 'B2C', full: 'Business to Consumer', tags: ['Generale'], def: 'Modello commerciale in cui un\'azienda vende direttamente al consumatore finale. La maggior parte dei marketplace (Amazon, eBay, Zalando) opera in questo modello.' },
  { letter: 'B', name: 'BNPL', full: 'Buy Now Pay Later', tags: ['Pagamenti'], def: 'Soluzione di pagamento rateale senza interessi per il cliente. Il merchant riceve l\'importo completo immediatamente. In Italia le principali soluzioni BNPL sono <strong>Scalapay</strong> e <strong>Klarna</strong>. Aumenta mediamente l\'AOV e le conversioni, ma la fee per il merchant è più alta (3–5%).' },
  { letter: 'B', name: 'BSR', full: 'Best Seller Rank', tags: ['Amazon'], def: 'Classifica di vendita di un prodotto all\'interno della sua categoria su Amazon. Si aggiorna ogni ora in base alle vendite recenti. Un BSR basso (es. #1, #50) indica un prodotto che vende molto. Monitorabile con Keepa nel tempo per capire la stagionalità.' },
  { letter: 'B', name: 'Buy Box', full: null, tags: ['Amazon'], def: 'Il riquadro "Aggiungi al carrello" sulla pagina prodotto Amazon. Quando più seller vendono lo stesso ASIN, Amazon assegna la Buy Box a uno di essi in base a prezzo, disponibilità, performance dell\'account e metodo di fulfillment. Chi non ha la Buy Box ha visibilità molto ridotta: il 90% degli acquisti avviene tramite essa.' },
  { letter: 'B', name: 'Bundle', full: null, tags: ['Strategia'], def: 'Raggruppare più prodotti in un unico listing per venderli insieme a un prezzo combinato. Strategia efficace per aumentare l\'AOV, ridurre la concorrenza diretta (il bundle ha un ASIN proprio) e migliorare i margini.' },

  // C
  { letter: 'C', name: 'C2C', full: 'Consumer to Consumer', tags: ['Generale'], def: 'Modello commerciale in cui i consumatori vendono ad altri consumatori. Tipico di piattaforme come Subito.it, Vinted, eBay (sezione privati), Depop e Vestiaire Collective.' },
  { letter: 'C', name: 'Cannibalization', full: null, tags: ['Strategia'], def: 'Fenomeno per cui la vendita su un canale (es. marketplace) riduce le vendite su un altro canale (es. proprio sito). Da monitorare quando si apre un nuovo canale, soprattutto confrontando prezzi e visibilità.' },
  { letter: 'C', name: 'Cashback', full: null, tags: ['Metriche'], def: 'Rimborso parziale di una spesa, usato come incentivo promozionale. Alcune piattaforme come Amazon Vine o programmi di affiliazione usano meccanismi simili per generare recensioni o acquisti.' },
  { letter: 'C', name: 'Checkout Rate', full: null, tags: ['Metriche'], def: 'Percentuale di utenti che, una volta avviato il checkout, completano l\'acquisto. Su marketplace come Amazon è tipicamente molto alta (>80%); su siti propri può scendere anche al 30–40% senza ottimizzazione.' },
  { letter: 'C', name: 'CPC', full: 'Cost Per Click', tags: ['Advertising'], def: 'Modello pubblicitario in cui si paga ogni volta che un utente clicca sull\'annuncio. Usato da Google Shopping, Trovaprezzi, Kelkoo e Amazon Sponsored Products. Il CPC varia in base alla competitività della keyword e della categoria.' },
  { letter: 'C', name: 'CTR', full: 'Click-Through Rate', tags: ['Advertising'], def: 'Percentuale di persone che cliccano su un annuncio o un listing rispetto a quante lo visualizzano. Formula: click / impressioni × 100. Un CTR basso indica un\'immagine o titolo poco attraente.' },
  { letter: 'C', name: 'CR', full: 'Conversion Rate', tags: ['Metriche'], def: 'Percentuale di visite che si trasformano in acquisto. Su Amazon varia mediamente tra il 5% e il 15% per prodotti ottimizzati. Sul proprio e-commerce è tipicamente tra l\'1% e il 3% per traffico freddo.' },

  // D
  { letter: 'D', name: 'D2C', full: 'Direct to Consumer', tags: ['Strategia'], def: 'Modello in cui un brand vende direttamente al consumatore finale, bypassando distributori e rivenditori. Permette margini più alti, dati clienti propri e controllo sull\'esperienza d\'acquisto. Shopify è la piattaforma di riferimento per il D2C.' },
  { letter: 'D', name: 'Dropshipping', full: null, tags: ['Logistica'], def: 'Modello in cui il seller vende prodotti senza tenerli fisicamente in magazzino: l\'ordine viene inoltrato direttamente al fornitore che spedisce al cliente finale. Permette di avviare un\'attività con poco capitale, ma con margini bassi e controllo qualità limitato.' },
  { letter: 'D', name: 'DSA', full: 'Digital Services Act', tags: ['Normativa'], def: 'Regolamento europeo in vigore dal 2024 che obbliga marketplace e piattaforme digitali a maggiore trasparenza. Ha introdotto l\'obbligo per i venditori professionali di dichiararsi come tali su piattaforme C2C come Vinted, Subito e Depop.' },

  // E
  { letter: 'E', name: 'EAN', full: 'European Article Number', tags: ['Catalogo'], def: 'Codice a barre standard (13 cifre) che identifica univocamente un prodotto nel commercio europeo. Obbligatorio su molti marketplace (Amazon, ManoMano, Zalando). Senza EAN è spesso impossibile listare prodotti su piattaforme strutturate. Si acquista tramite GS1 Italy.' },
  { letter: 'E', name: 'EPC', full: 'Earnings Per Click', tags: ['Affiliazione'], def: 'Guadagno medio per ogni clic generato in un programma di affiliazione. Usato per valutare la redditività di un programma di affiliazione rispetto a un altro.' },

  // F
  { letter: 'F', name: 'FBA', full: 'Fulfilled by Amazon', tags: ['Amazon', 'Logistica'], def: 'Programma logistico di Amazon in cui il venditore spedisce lo stock ai magazzini Amazon, che si occupa di stoccaggio, picking, imballaggio, spedizione, resi e customer service. I prodotti FBA ottengono il badge Prime e maggiore visibilità in Buy Box. Include fee di stoccaggio e fulfillment che si sommano alle commissioni standard.' },
  { letter: 'F', name: 'FBM', full: 'Fulfilled by Merchant', tags: ['Amazon', 'Logistica'], def: 'Alternativa a FBA in cui il venditore gestisce autonomamente stoccaggio e spedizione degli ordini Amazon. Costi inferiori rispetto a FBA ma niente badge Prime (tranne con Seller Fulfilled Prime) e meno visibilità in Buy Box.' },
  { letter: 'F', name: 'Feed prodotti', full: null, tags: ['Tecnico'], def: 'File strutturato (XML, CSV o JSON) contenente tutti i dati del catalogo prodotti: titolo, descrizione, prezzo, disponibilità, immagini, EAN, categoria. Serve per inviare il catalogo a marketplace e comparatori. La qualità del feed impatta direttamente sulla visibilità.' },
  { letter: 'F', name: 'Fulfillment', full: null, tags: ['Logistica'], def: 'L\'insieme delle operazioni che trasformano un ordine in una consegna: ricevimento ordine, picking, imballaggio, etichettatura, spedizione e gestione resi. Può essere gestito internamente (FBM), esternalizzato a un 3PL o delegato al marketplace (FBA, Zalando Fulfillment).' },

  // G
  { letter: 'G', name: 'GMV', full: 'Gross Merchandise Value', tags: ['Metriche'], def: 'Valore totale delle transazioni processate su una piattaforma in un dato periodo. Indica il volume d\'affari complessivo, ma non il fatturato netto del marketplace (che dipende dalla commissione applicata).' },
  { letter: 'G', name: 'GTIN', full: 'Global Trade Item Number', tags: ['Catalogo'], def: 'Standard internazionale che include EAN-13, UPC e ISBN. Su Amazon è richiesto per la maggior parte delle categorie. Si può richiedere un\'esenzione GTIN per prodotti handmade o bundle custom.' },

  // H
  { letter: 'H', name: 'Hijacker', full: null, tags: ['Amazon'], def: 'Venditore non autorizzato che si inserisce su un listing Amazon altrui per vendere prodotti contraffatti o di qualità inferiore. Problema comune per chi vende brand propri. Si combina con Amazon Brand Registry, che permette di segnalare e rimuovere gli hijacker.' },

  // I
  { letter: 'I', name: 'IVA', full: 'Imposta sul Valore Aggiunto', tags: ['Fiscale'], def: 'Imposta applicata alla vendita di beni e servizi in Italia. Le aliquote principali sono 22% (standard), 10% (alimenti trasformati, turismo) e 4% (alimentari di base, libri). Rilevante per il calcolo dei margini: il prezzo di vendita sui marketplace italiani è IVA inclusa.' },

  // K
  { letter: 'K', name: 'Keyword Research', full: null, tags: ['Amazon', 'SEO'], def: 'Processo di identificazione delle parole chiave che i clienti usano per cercare prodotti. Su Amazon si esegue con tool come Helium 10 (Magnet, Cerebro) o Jungle Scout. Le keyword trovate si inseriscono in titolo, bullet point, descrizione e search terms (backend keywords).' },

  // L
  { letter: 'L', name: 'LTV', full: 'Lifetime Value', tags: ['Metriche'], def: 'Il valore totale che un cliente genera nel corso dell\'intera relazione con il brand. Calcolo base: AOV × frequenza acquisti annua × anni di permanenza. Metrica cruciale per decidere quanto investire in acquisizione clienti (CAC).' },
  { letter: 'L', name: 'Listing', full: null, tags: ['Marketplace'], def: 'La pagina prodotto su un marketplace. Include titolo, immagini, bullet point, descrizione, prezzo e recensioni. Ottimizzare il listing (titolo con keyword, immagini professionali, descrizione persuasiva) è fondamentale per aumentare visibilità e conversioni.' },
  { letter: 'L', name: 'Logistica 3PL', full: 'Third Party Logistics', tags: ['Logistica'], def: 'Provider logistico esterno che gestisce stoccaggio, fulfillment e spedizioni per conto del seller. Alternativa a FBA per chi vuole indipendenza da Amazon pur esternalizzando la logistica. In Italia: Kubbo, Effegroup, Send Cloud, Sendify.' },

  // M
  { letter: 'M', name: 'MAP', full: 'Minimum Advertised Price', tags: ['Pricing'], def: 'Prezzo minimo a cui un rivenditore può pubblicizzare un prodotto, stabilito dal brand owner. Non è un prezzo di vendita obbligatorio ma una linea guida contrattuale. Importante per brand che vendono tramite distributori su marketplace.' },
  { letter: 'M', name: 'Multichannel', full: null, tags: ['Strategia'], def: 'Strategia di vendita su più canali contemporaneamente: proprio e-commerce, Amazon, eBay, Zalando, Google Shopping. Richiede sincronizzazione di stock e prezzi, tipicamente tramite tool come Lengow o Channable.' },

  // O
  { letter: 'O', name: 'ODR', full: 'Order Defect Rate', tags: ['Amazon'], def: 'Metrica Amazon che misura la percentuale di ordini con problemi: feedback negativo, richieste A-to-Z, chargeback. Deve restare sotto l\'1% per non rischiare la sospensione dell\'account. È uno degli indicatori di salute dell\'account più monitorati.' },
  { letter: 'O', name: 'OMS', full: 'Order Management System', tags: ['Tecnico'], def: 'Software che centralizza la gestione degli ordini da tutti i canali di vendita. Sincronizza stock, gestisce il fulfillment e traccia le spedizioni. Esempi: Linnworks, Veeqo, ChannelAdvisor.' },
  { letter: 'O', name: 'Overselling', full: null, tags: ['Logistica'], def: 'Vendita di quantità superiori alle giacenze disponibili. Causa cancellazioni di ordine che danneggiano le metriche dell\'account su Amazon e altri marketplace. Si previene con un OMS che sincronizza lo stock in tempo reale su tutti i canali.' },

  // P
  { letter: 'P', name: 'P&L', full: 'Profit & Loss', tags: ['Metriche'], def: 'Conto economico che mostra ricavi, costi e profitto. Per un seller Amazon include: fatturato, commissioni marketplace, fee FBA, costo del venduto, advertising, resi. Tool come Sellerboard calcolano il P&L per SKU in tempo reale.' },
  { letter: 'P', name: 'PPC', full: 'Pay Per Click', tags: ['Advertising'], def: 'Modello pubblicitario in cui si paga per ogni clic ricevuto. Su Amazon il sistema pubblicitario (Sponsored Products, Sponsored Brands, Sponsored Display) funziona con aste PPC. Su Google si gestisce tramite Google Ads.' },
  { letter: 'P', name: 'Prime', full: null, tags: ['Amazon'], def: 'Programma di abbonamento Amazon che offre spedizione gratuita in 1-2 giorni su milioni di prodotti. I prodotti Prime (via FBA o Seller Fulfilled Prime) hanno una visibilità significativamente maggiore e tassi di conversione più alti rispetto ai non-Prime.' },
  { letter: 'P', name: 'Private Label', full: null, tags: ['Strategia'], def: 'Strategia in cui un seller fa produrre prodotti con il proprio brand, tipicamente da fornitori asiatici. Permette margini più alti e brand building, ma richiede investimento iniziale in stock e sviluppo prodotto. Modello molto usato dagli Amazon FBA seller.' },

  // R
  { letter: 'R', name: 'ROAS', full: 'Return on Ad Spend', tags: ['Advertising'], def: 'Fatturato generato per ogni euro speso in advertising. Formula: fatturato da ads / spesa ads. Un ROAS di 4 significa €4 di ricavi per ogni €1 speso. Su Amazon si preferisce spesso il TACOS (Total ACoS) che include anche le vendite organiche.' },
  { letter: 'R', name: 'Repricing', full: null, tags: ['Pricing'], def: 'Aggiornamento automatico dei prezzi in risposta ai movimenti dei competitor, con l\'obiettivo di massimizzare la Buy Box o restare competitivi sui comparatori. Tool dedicati: Repricer.com, BQool, SellerSnap.' },
  { letter: 'R', name: 'Retail Arbitrage', full: null, tags: ['Strategia'], def: 'Acquisto di prodotti da negozi fisici o online a prezzo scontato per rivenderli su marketplace (tipicamente Amazon) a prezzo più alto. Richiede strumenti di price tracking come Keepa per identificare opportunità di margine.' },

  // S
  { letter: 'S', name: 'SERP', full: 'Search Engine Results Page', tags: ['SEO', 'Amazon'], def: 'Pagina dei risultati di ricerca. Su Amazon, la SERP mostra i prodotti in risposta a una keyword. Posizionarsi nelle prime posizioni organiche (senza ads) richiede storico di vendite, recensioni e ottimizzazione del listing.' },
  { letter: 'S', name: 'SKU', full: 'Stock Keeping Unit', tags: ['Catalogo'], def: 'Codice univoco interno assegnato a ogni variante di prodotto per gestire il magazzino. Diverso dall\'EAN (codice standard) e dall\'ASIN (codice Amazon): lo SKU è definito dal venditore. Ogni combinazione colore/taglia/configurazione ha uno SKU proprio.' },
  { letter: 'S', name: 'SLA', full: 'Service Level Agreement', tags: ['Logistica'], def: 'Accordo sui livelli di servizio che definisce tempistiche di spedizione e gestione ordini. Marketplace come ManoMano e Zalando hanno SLA rigidi con penali per ritardi. Amazon misura il Late Shipment Rate che deve restare sotto il 4%.' },
  { letter: 'S', name: 'Sponsored Products', full: null, tags: ['Amazon', 'Advertising'], def: 'Il formato pubblicitario principale di Amazon: annunci CPC che appaiono nei risultati di ricerca e nelle pagine prodotto. Permettono di targetizzare keyword specifiche o ASIN competitor. Fondamentali per lanciare nuovi prodotti e aumentare visibilità organica.' },
  { letter: 'S', name: 'Storico BSR', full: null, tags: ['Amazon'], def: 'L\'andamento del Best Seller Rank nel tempo per un prodotto specifico. Consultabile tramite Keepa. Permette di capire stagionalità delle vendite, impatto di promozioni e confrontare performance tra prodotti.' },

  // T
  { letter: 'T', name: 'TACOS', full: 'Total Advertising Cost of Sale', tags: ['Amazon', 'Advertising'], def: 'Percentuale della spesa pubblicitaria rispetto al fatturato totale (organico + ads). Formula: spesa ads / fatturato totale × 100. Più completo dell\'ACoS (che usa solo il fatturato ads) perché mostra l\'efficienza complessiva dell\'advertising.' },
  { letter: 'T', name: '3PL', full: 'Third Party Logistics', tags: ['Logistica'], def: 'Vedi "Logistica 3PL". Provider esterno che gestisce stoccaggio e fulfillment per conto del venditore, permettendo di esternalizzare la logistica senza usare FBA.' },

  // U
  { letter: 'U', name: 'UGC', full: 'User Generated Content', tags: ['Marketing'], def: 'Contenuti creati dagli utenti: recensioni, foto, video di unboxing, post social. Estremamente efficace come social proof. Su Amazon si manifesta nelle recensioni verificate. Su Instagram e TikTok tramite contenuti dei clienti che mostrano i prodotti.' },
  { letter: 'U', name: 'UPC', full: 'Universal Product Code', tags: ['Catalogo'], def: 'Equivalente americano dell\'EAN europeo (12 cifre invece di 13). Su Amazon.com è il codice standard; su Amazon.it si accetta anche l\'EAN. Per vendere su marketplace internazionali potrebbe servire entrambi.' },

  // V
  { letter: 'V', name: 'Variante', full: null, tags: ['Catalogo'], def: 'Una versione specifica di un prodotto che si differenzia per attributi come colore, taglia, materiale. Su Amazon, le varianti sono raggruppate sotto un unico listing padre (parent ASIN) con listing figli separati. Le recensioni si accumulano a livello del listing padre.' },
  { letter: 'V', name: 'Vendor Central', full: null, tags: ['Amazon'], def: 'Programma Amazon riservato a brand e distributori selezionati. Amazon acquista lo stock direttamente e diventa il venditore ufficiale. Offre il badge "Venduto da Amazon" (massima fiducia del cliente) ma il brand perde controllo su prezzi e stock. Opposto di Seller Central (3P).' },

  // W
  { letter: 'W', name: 'Warehouse', full: null, tags: ['Logistica'], def: 'Magazzino. Nel contesto del selling online, può essere: magazzino proprio, magazzino FBA (Amazon), magazzino 3PL o magazzino del dropshipper. La scelta impatta su costi di stoccaggio, velocità di spedizione e scalabilità.' },

  // Z
  { letter: 'Z', name: 'ZFS', full: 'Zalando Fulfillment Solutions', tags: ['Zalando', 'Logistica'], def: 'Servizio logistico di Zalando analogo all\'FBA di Amazon. Il brand invia lo stock a Zalando che gestisce stoccaggio, spedizione e resi. Permette ai prodotti di beneficiare della rete logistica di Zalando e di standard di spedizione garantiti.' },
];

function buildGlossary(filter) {
  const q = filter ? filter.toLowerCase() : '';
  const content = document.getElementById('glossary-content');
  const noResults = document.getElementById('no-results');
  document.getElementById('search-query').textContent = filter;

  const filtered = q ? terms.filter(t =>
    t.name.toLowerCase().includes(q) ||
    (t.full && t.full.toLowerCase().includes(q)) ||
    t.def.toLowerCase().includes(q) ||
    t.tags.some(tag => tag.toLowerCase().includes(q))
  ) : terms;

  if (filtered.length === 0) {
    content.innerHTML = '';
    noResults.style.display = 'block';
    return;
  }
  noResults.style.display = 'none';

  const grouped = {};
  filtered.forEach(t => {
    if (!grouped[t.letter]) grouped[t.letter] = [];
    grouped[t.letter].push(t);
  });

  content.innerHTML = Object.keys(grouped).sort().map(letter => `
    <div class="letter-section" id="letter-${letter}">
      <div class="letter-heading">${letter}</div>
      ${grouped[letter].map(t => `
        <div class="term-entry">
          <div class="term-name">
            ${t.name}
            ${t.full ? `<span class="term-abbr">— ${t.full}</span>` : ''}
          </div>
          <div class="term-def">${t.def}</div>
          <div class="term-tags">${t.tags.map(tag => `<span class="tag">${tag}</span>`).join('')}</div>
        </div>
      `).join('')}
    </div>
  `).join('');
}

function buildAlphaNav() {
  const letters = [...new Set(terms.map(t => t.letter))].sort();
  const html = letters.map(l => `<a href="#letter-${l}">${l}</a>`).join('');
  document.getElementById('alpha-links').innerHTML = html;
  document.getElementById('section-nav-letters').innerHTML = letters.map(l =>
    `<a href="#letter-${l}" class="section-nav-link" onclick="secNavGloss(event,'letter-${l}')">${l}</a>`
  ).join('');
}

const sectionNav = document.getElementById('section-nav');

function secNavGloss(e, id) {
  e.preventDefault();
  var el = document.getElementById(id);
  if (el) el.scrollIntoView({ behavior: 'smooth', block: 'start' });
  sectionNav.querySelectorAll('.section-nav-link').forEach(function(l) { l.classList.remove('active'); });
  if (e.currentTarget) e.currentTarget.classList.add('active');
}

window.addEventListener('scroll', function() {
  sectionNav.classList.toggle('is-visible', window.scrollY > 120);
}, { passive: true });

let searchTimeout;
document.getElementById('search').addEventListener('input', e => {
  clearTimeout(searchTimeout);
  searchTimeout = setTimeout(() => buildGlossary(e.target.value), 200);
});

buildGlossary();
buildAlphaNav();

setTimeout(function() {
  const letterSections = document.querySelectorAll('.letter-section');
  const navLinks = sectionNav.querySelectorAll('.section-nav-link');

  const obs = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        navLinks.forEach(function(l) { l.classList.remove('active'); });
        const id = entry.target.id.replace('letter-', '');
        const active = sectionNav.querySelector('[href="#letter-' + id + '"]');
        if (active) {
          active.classList.add('active');
          active.scrollIntoView({ block: 'nearest', inline: 'center' });
        }
      }
    });
  }, { rootMargin: '-10% 0px -80% 0px' });
  letterSections.forEach(function(s) { obs.observe(s); });
}, 100);
</script>

<?php include 'includes/end.php'; ?>
