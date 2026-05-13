<?php

// ============================================================
//  TOOLS CATEGORIES
// ============================================================

$tools_categories = [

  'ecommerce' => [
    'label'          => 'Piattaforme E-commerce',
    'slug'           => 'ecommerce',
    'h2'             => 'Il tuo negozio indipendente',
    'desc'           => 'Avere un proprio e-commerce significa piena libertà sui dati clienti, margini migliori e brand identity autonoma. La complessità tecnica varia molto da piattaforma a piattaforma.',
    'section_label'  => 'Piattaforme E-commerce',
    'items_count'    => 6,
    'price_range'    => 'Da gratis a ~299$/mese',
    'featured'       => ['shopify', 'woocommerce', 'prestashop'],
  ],

  'feed' => [
    'label'          => 'Feed & Multichannel',
    'slug'           => 'feed',
    'h2'             => 'Gestisci più canali senza impazzire',
    'desc'           => 'Questi tool sincronizzano catalogo, prezzi e disponibilità tra il tuo e-commerce e tutti i marketplace, generano feed ottimizzati e centralizzano gli ordini.',
    'section_label'  => 'Feed & Multichannel',
    'items_count'    => 3,
    'price_range'    => 'Da ~39€ a ~250€/mese',
    'featured'       => ['lengow', 'channable', 'datafeedwatch'],
  ],

  'analytics' => [
    'label'          => 'Analytics Amazon',
    'slug'           => 'analytics',
    'h2'             => 'Studia la concorrenza, ottimizza i listing',
    'desc'           => 'Tool indispensabili per chi vende su Amazon: ricerca keyword, analisi competitor, storico prezzi, profittabilità per SKU.',
    'section_label'  => 'Analytics Amazon',
    'items_count'    => 5,
    'price_range'    => 'Da ~19$ a ~250$/mese',
    'featured'       => ['helium10', 'jungle-scout', 'keepa'],
  ],

  'repricing' => [
    'label'          => 'Repricing',
    'slug'           => 'repricing',
    'h2'             => 'Ottimizza i prezzi automaticamente',
    'desc'           => 'I repricer aggiornano i tuoi prezzi in automatico per vincere la Buy Box su Amazon o restare competitivi sui comparatori, rispettando i margini minimi che imposti.',
    'section_label'  => 'Repricing',
    'items_count'    => 2,
    'price_range'    => 'Da ~55€/mese',
    'featured'       => ['repricer', 'prisync'],
  ],

  'inventory' => [
    'label'          => 'Inventario & Ordini',
    'slug'           => 'inventory',
    'h2'             => 'Centralizza magazzino e ordini da tutti i canali',
    'desc'           => 'Quando vendi su più piattaforme, gestire lo stock in modo sincronizzato diventa critico. Questi tool evitano overselling e centralizzano la gestione logistica.',
    'section_label'  => 'Inventario & Ordini',
    'items_count'    => 2,
    'price_range'    => 'Gratis / Da ~449$/mese',
    'featured'       => ['linnworks', 'veeqo'],
  ],

  'reviews' => [
    'label'          => 'Gestione Recensioni',
    'slug'           => 'reviews',
    'h2'             => 'Costruisci la fiducia dei clienti',
    'desc'           => 'Le recensioni influenzano direttamente le conversioni. Questi tool raccolgono, gestiscono e mostrano le opinioni dei clienti in modo professionale.',
    'section_label'  => 'Gestione Recensioni',
    'items_count'    => 2,
    'price_range'    => 'Da ~29€ a ~259€/mese',
    'featured'       => ['trustpilot', 'feedaty'],
  ],

  'spedizioni' => [
    'label'          => 'Gestione Spedizioni',
    'slug'           => 'spedizioni',
    'h2'             => 'Spedisci meglio, spendi meno',
    'desc'           => 'Strumenti per confrontare corrieri, stampare etichette in bulk, tracciare i pacchi e ridurre i costi logistici. Fondamentali per chi vende su più canali.',
    'section_label'  => 'Gestione Spedizioni',
    'items_count'    => 4,
    'price_range'    => 'Gratis / Da ~29€/mese',
    'featured'       => ['shippypro', 'sendcloud', 'qapla'],
  ],

  'email-marketing' => [
    'label'          => 'Email Marketing & CRM',
    'slug'           => 'email-marketing',
    'h2'             => 'Fidelizza i clienti dopo il primo acquisto',
    'desc'           => 'L\'email marketing è il canale con il ROI più alto nell\'e-commerce. Automatizzare flussi post-acquisto, recupero carrelli e campagne segmentate è la differenza tra un cliente one-shot e un cliente fedele.',
    'section_label'  => 'Email Marketing & CRM',
    'items_count'    => 3,
    'price_range'    => 'Gratis / Da ~13€/mese',
    'featured'       => ['klaviyo', 'brevo', 'mailchimp'],
  ],

  'pagamenti' => [
    'label'          => 'Pagamenti & BNPL',
    'slug'           => 'pagamenti',
    'h2'             => 'I metodi di pagamento che gli italiani preferiscono',
    'desc'           => 'Offrire i metodi di pagamento giusti riduce l\'abbandono del carrello. In Italia ci sono alcune soluzioni locali con alto tasso di adozione.',
    'section_label'  => 'Pagamenti & BNPL',
    'items_count'    => 6,
    'price_range'    => 'Commission-based',
    'featured'       => ['stripe', 'scalapay', 'satispay'],
  ],

];


// ============================================================
//  TOOLS ITEMS
// ============================================================

$tools = [

  // ----- PIATTAFORME E-COMMERCE -----

  'shopify' => [
    'id'       => 'shopify',
    'name'     => 'Shopify',
    'category' => 'ecommerce',
    'domain'   => 'shopify.com',
    'type'     => 'Piattaforma e-commerce SaaS · dal 2006',
    'badges'   => [
      ['text' => 'Più popolare al mondo',  'color' => 'green'],
      ['text' => 'SaaS · No codice richiesto', 'color' => 'blue'],
    ],
    'desc'     => 'Shopify è la piattaforma e-commerce più usata al mondo. Il modello SaaS fa sì che hosting, SSL, checkout e gestione ordini siano già inclusi nell\'abbonamento mensile - nessuna infrastruttura da gestire, nessuna configurazione server.<br><br>L\'<strong>App Store</strong> con 8.000+ app è il suo vero vantaggio competitivo: upsell, recensioni, loyalty program, integrazioni marketplace, feed Google Shopping, gestione resi. Le integrazioni italiane rilevanti ci sono tutte: Scalapay, Satispay, Packlink, Qapla\'.<br><br><strong>Shopify Payments</strong> è disponibile in Italia e azzera la transaction fee dello 0,5–2% che scatta usando gateway esterni. Per chi parte da zero o vuole abbandonare un sito obsoleto è la scelta più rapida. Dove perde terreno: personalizzazioni profonde richiedono sviluppatori Liquid, e il vendor lock-in è reale - i dati e la piattaforma dipendono da Shopify.',
    'metrics'  => [
      ['label' => 'Piano Base',      'value' => '29$/mese'],
      ['label' => 'Piano Shopify',   'value' => '79$/mese'],
      ['label' => 'Piano Advanced',  'value' => '299$/mese'],
      ['label' => 'Transaction fee', 'value' => '0% (con Shopify Pay)'],
    ],
    'pros'     => [
      'Setup rapidissimo, senza competenze tecniche',
      'App Store enorme per ogni esigenza',
      'Checkout ottimizzato per le conversioni',
      'Shopify Payments integrato (anche in Italia)',
      'Scalabile fino a volumi enterprise (Shopify Plus)',
      'Supporto 24/7 anche nei piani base',
    ],
    'cons'     => [
      'Costo mensile fisso + app = può diventare costoso',
      'Personalizzazioni profonde richiedono sviluppatori Liquid',
      'Dati e piattaforma dipendenti da Shopify (vendor lock-in)',
      'SEO meno flessibile rispetto a soluzioni open source',
    ],
    'tags'     => ['Ideale per startup', 'D2C brand', 'Fashion & Lifestyle', 'No-code'],
  ],

  'woocommerce' => [
    'id'       => 'woocommerce',
    'name'     => 'WooCommerce',
    'category' => 'ecommerce',
    'domain'   => 'woocommerce.com',
    'type'     => 'Plugin e-commerce per WordPress · Open Source',
    'badges'   => [
      ['text' => 'Open Source · Gratuito', 'color' => 'blue'],
      ['text' => 'Richiede WordPress',     'color' => 'gray'],
    ],
    'desc'     => 'WooCommerce è il plugin e-commerce più installato al mondo perché WordPress è la base di quasi la metà dei siti web. Il plugin base è gratuito e open source - la piena proprietà dei dati è garantita. Il prezzo da pagare: hosting, backup, aggiornamenti e sicurezza sono responsabilità tua, non di una piattaforma SaaS.<br><br>In Italia è diffusissimo tra le PMI che lavorano con agenzie web locali. L\'ecosistema di plugin copre tutto ciò che serve per il mercato italiano: fatturazione elettronica (Fatture in Cloud, Aruba), corrieri (BRT, GLS, SDA), pagamenti locali (Satispay, Scalapay). La curva di apprendimento è più alta di Shopify, e il costo totale reale - hosting + plugin premium + sviluppo - può sorprendere chi parte pensando sia "gratis".',
    'metrics'  => [
      ['label' => 'Plugin base',          'value' => 'Gratuito'],
      ['label' => 'Hosting consigliato',  'value' => '15–50€/mese'],
      ['label' => 'Plugin premium',       'value' => 'Variabile'],
      ['label' => 'Transaction fee',      'value' => '0%'],
    ],
    'pros'     => [
      'Gratuito e open source, piena proprietà dei dati',
      'Massima flessibilità e personalizzazione',
      'Ecosistema plugin enorme, molti italiani',
      'SEO eccellente con Yoast/Rank Math',
      'Nessuna transaction fee aggiuntiva',
    ],
    'cons'     => [
      'Richiede gestione tecnica (hosting, aggiornamenti, sicurezza)',
      'Performance può degradare con cataloghi grandi',
      'Costo totale nascosto (hosting + plugin + sviluppo)',
      'Checkout meno ottimizzato di default rispetto a Shopify',
    ],
    'tags'     => ['WordPress esistente', 'PMI italiane', 'Open source'],
  ],

  'prestashop' => [
    'id'       => 'prestashop',
    'name'     => 'PrestaShop',
    'category' => 'ecommerce',
    'domain'   => 'prestashop.com',
    'type'     => 'Piattaforma e-commerce open source · dal 2007',
    'badges'   => [
      ['text' => 'Open Source · Molto diffuso in Italia', 'color' => 'blue'],
    ],
    'desc'     => 'PrestaShop nasce come piattaforma nativa per l\'e-commerce - non è un plugin aggiunto a un CMS generico - e questo si vede nella gestione di cataloghi complessi: magazzino multi-deposito, varianti articolate, regole di prezzo avanzate. In Italia ha una presenza storica solida, con un ecosistema maturo di agenzie specializzate e moduli per fatturazione italiana, corrieri locali e feed marketplace.<br><br>È la scelta tipica di aziende con cataloghi da centinaia o migliaia di SKU che hanno bisogno di personalizzazioni specifiche e preferiscono non dipendere da una piattaforma SaaS. La versione community è gratuita; i moduli aggiuntivi si acquistano sull\'AddOns Marketplace ufficiale. La versione Cloud esiste ma in Italia si usa quasi sempre il self-hosted.',
    'metrics'  => [
      ['label' => 'Licenza',              'value' => 'Gratuita (open source)'],
      ['label' => 'Hosting consigliato',  'value' => '20–80€/mese'],
      ['label' => 'Moduli premium',       'value' => '30–300€ cad.'],
    ],
    'pros'     => [
      'Nativo per e-commerce, gestione catalogo avanzata',
      'Ecosistema italiano maturo (agenzie, moduli)',
      'Ottimo per cataloghi grandi e complessi',
      'Multi-negozio nativo (una installazione, più shop)',
    ],
    'cons'     => [
      'Curva di apprendimento alta',
      'Aggiornamenti di versione complessi',
      'Performance richiede hosting dedicato',
      'UI backend datata rispetto ai concorrenti',
    ],
    'tags'     => ['Cataloghi grandi', 'B2B', 'Multi-negozio'],
  ],

  'magento' => [
    'id'       => 'magento',
    'name'     => 'Adobe Commerce (Magento)',
    'category' => 'ecommerce',
    'domain'   => 'magento.com',
    'type'     => 'Piattaforma e-commerce enterprise · Open Source & Cloud',
    'badges'   => [
      ['text' => 'Enterprise', 'color' => 'gray'],
    ],
    'desc'     => 'Magento, ora Adobe Commerce, è la piattaforma enterprise di riferimento per e-commerce complessi. La versione open source (Magento Open Source) è gratuita ma richiede sviluppatori specializzati; Adobe Commerce è la versione cloud/enterprise a pagamento con supporto ufficiale.<br><br>È la scelta di grandi retailer e aziende con esigenze molto specifiche: cataloghi da centinaia di migliaia di SKU, logiche B2B avanzate, personalizzazioni profonde, integrazioni ERP/SAP. In Italia è usato da aziende medio-grandi con team tecnici interni o partner certificati.<br><br>Non è adatto a chi parte da zero o a PMI senza budget IT significativo: i costi di sviluppo e manutenzione sono elevati.',
    'metrics'  => [
      ['label' => 'Open Source',    'value' => 'Gratuito'],
      ['label' => 'Adobe Commerce', 'value' => 'Da ~22.000$/anno'],
      ['label' => 'Dev richiesti',  'value' => 'Sì, specializzati'],
    ],
    'pros'     => [
      'Massima flessibilità per esigenze complesse',
      'B2B commerce nativo e avanzato',
      'Scalabilità enterprise comprovata',
    ],
    'cons'     => [
      'Costi di sviluppo e manutenzione elevati',
      'Non adatto a PMI o startup',
      'Richiede team tecnico dedicato',
    ],
    'tags'     => ['Enterprise', 'B2B', 'Grandi cataloghi'],
  ],

  'bigcommerce' => [
    'id'       => 'bigcommerce',
    'name'     => 'BigCommerce',
    'category' => 'ecommerce',
    'domain'   => 'bigcommerce.com',
    'type'     => 'Piattaforma SaaS · Mid-market / Enterprise · B2C + B2B',
    'badges'   => [
      ['text' => 'SaaS Mid-Market', 'color' => 'blue'],
    ],
    'desc'     => 'BigCommerce è una piattaforma SaaS americana posizionata tra Shopify e Magento nel mercato e-commerce. Offre funzionalità native più avanzate di Shopify senza richiedere plugin extra: gestione prezzi per gruppo clienti, preventivi B2B, gestione tasse internazionale, feed avanzati per marketplace. È apprezzata da brand mid-market che vogliono flessibilità senza la complessità di Magento.<br><br>Supporta vendor channel nativo, cataloghi B2B con prezzi personalizzati e ha integrazione diretta con Amazon, eBay, Google Shopping e Facebook. Piano standard da circa 29$ al mese, con commissioni di transazione pari a zero - differenza chiave rispetto a Shopify che applica fee sulle vendite.',
    'metrics'  => [
      ['label' => 'Pricing',        'value' => 'Da ~29$/mese'],
      ['label' => 'Fee transazione', 'value' => '0%'],
      ['label' => 'Focus',          'value' => 'Mid-market B2C/B2B'],
    ],
    'pros'     => [
      'Zero commissioni su transazioni',
      'Funzioni B2B native senza plugin',
      'Integrazioni marketplace out-of-the-box',
      'Scalabilità enterprise senza migrazioni',
    ],
    'cons'     => [
      'Community e ecosistema temi inferiori a Shopify',
      'Curva di apprendimento più alta',
      'Meno diffuso in Italia rispetto a Shopify',
    ],
    'tags'     => ['SaaS', 'B2B', 'Mid-market', 'No commissioni'],
  ],

  'wix' => [
    'id'       => 'wix',
    'name'     => 'Wix eCommerce',
    'category' => 'ecommerce',
    'domain'   => 'wix.com',
    'type'     => 'Website builder · SaaS · PMI / freelance',
    'badges'   => [
      ['text' => 'Facilità d\'uso', 'color' => 'green'],
    ],
    'desc'     => 'Wix è il website builder più diffuso al mondo con oltre 250 milioni di utenti, e include funzionalità e-commerce integrate in tutti i piani a pagamento. È la scelta naturale per chi ha già un sito Wix e vuole aggiungere vendita online senza cambiare piattaforma, oppure per piccoli negozi che cercano massima semplicità.<br><br>Il modulo Wix eCommerce include gestione prodotti, pagamenti, spedizioni, coupon, email transazionali e una buona integrazione con strumenti di marketing. Non è pensato per cataloghi enormi o logiche complesse, ma per shop da 10 a 500 prodotti con un unico negozio fisico o online.',
    'metrics'  => [
      ['label' => 'Pricing',         'value' => 'Da ~17€/mese'],
      ['label' => 'Fee transazione',  'value' => '0%'],
      ['label' => 'Focus',           'value' => 'Piccoli shop / freelance'],
    ],
    'pros'     => [
      'Facilissimo da usare, drag & drop',
      'Tutto incluso: sito + shop + marketing',
      'Nessuna competenza tecnica richiesta',
      'Supporto italiano disponibile',
    ],
    'cons'     => [
      'Limitato per cataloghi grandi o complessi',
      'Personalizzazione tecnica ridotta',
      'Meno integrazioni rispetto a Shopify/WooCommerce',
    ],
    'tags'     => ['Facile', 'Piccoli shop', 'All-in-one'],
  ],

  // ----- FEED & MULTICHANNEL -----

  'lengow' => [
    'id'       => 'lengow',
    'name'     => 'Lengow',
    'category' => 'feed',
    'domain'   => 'lengow.com',
    'type'     => 'Feed management & Multichannel · SaaS',
    'badges'   => [
      ['text' => 'Molto usato in Italia', 'color' => 'blue'],
    ],
    'desc'     => 'Lengow è una delle piattaforme di feed management più usate in Europa, con una presenza consolidata in Italia. Permette di importare il catalogo dal proprio e-commerce (Shopify, Magento, PrestaShop, WooCommerce, CSV) e distribuirlo ottimizzato su oltre 1.800 canali: marketplace, comparatori, retargeting, affiliazione.<br><br>Il punto di forza è la capacità di <strong>trasformare e arricchire i dati del feed</strong> per ogni canale: ogni marketplace vuole i dati in un formato specifico, con campi obbligatori diversi. Lengow automatizza queste trasformazioni senza necessità di sviluppo. Include anche la <strong>centralizzazione degli ordini</strong>: tutti gli ordini dai vari canali arrivano in un unico dashboard e vengono propagati al tuo e-commerce.<br><br>Ideale per chi vende su 3+ canali e vuole ridurre il lavoro manuale di aggiornamento prezzi e disponibilità.',
    'metrics'  => [
      ['label' => 'Piano starter',    'value' => '~250€/mese'],
      ['label' => 'Canali supportati', 'value' => '1.800+'],
      ['label' => 'Integrazioni IT',  'value' => 'Amazon, eBay, Zalando…'],
    ],
    'pros'     => [
      'Regole di trasformazione feed molto potenti',
      'Centralizzazione ordini da tutti i canali',
      'Supporto per tutti i marketplace italiani principali',
      'Dashboard analytics multichannel',
    ],
    'cons'     => [
      'Prezzo elevato per piccoli seller',
      'Curva di apprendimento delle regole di mapping',
      'Onboarding richiede tempo',
    ],
    'tags'     => ['Multichannel', 'Feed ottimizzato', 'Gestione ordini centralizzata'],
  ],

  'channable' => [
    'id'       => 'channable',
    'name'     => 'Channable',
    'category' => 'feed',
    'domain'   => 'channable.com',
    'type'     => 'Feed management & PPC automation · SaaS',
    'badges'   => [
      ['text' => 'Feed + PPC automation', 'color' => 'purple'],
    ],
    'desc'     => 'Channable è un tool olandese molto apprezzato per la combinazione di <strong>feed management</strong> e <strong>automazione delle campagne PPC</strong>. Oltre a gestire la distribuzione del catalogo su marketplace e comparatori, permette di creare campagne Google Shopping e Meta Ads dinamiche basate sui dati di prodotto, con regole di bidding automatizzate.<br><br>Rispetto a Lengow, Channable è generalmente percepito come più semplice da configurare e con un\'interfaccia più moderna. Il prezzo è scalabile in base al numero di prodotti gestiti, il che lo rende accessibile anche a seller di dimensioni medie.<br><br>In Italia è molto usato da agenzie di digital marketing che gestiscono campagne shopping per conto di retailer, grazie alle funzionalità di automazione PPC integrate.',
    'metrics'  => [
      ['label' => 'Piano Small',        'value' => '~39€/mese'],
      ['label' => 'Canali supportati',  'value' => '2.500+'],
      ['label' => 'PPC automation',     'value' => 'Sì (Google, Meta)'],
    ],
    'pros'     => [
      'PPC automation integrata (unico nel settore)',
      'Interfaccia più moderna e intuitiva di Lengow',
      'Prezzi scalabili, accessibile a seller medi',
      'Ottimo per agenzie digital',
    ],
    'cons'     => [
      'Gestione ordini meno avanzata di Lengow',
      'Supporto italiano limitato',
    ],
    'tags'     => ['Feed management', 'Google Shopping ads', 'Agenzie digital'],
  ],

  'datafeedwatch' => [
    'id'       => 'datafeedwatch',
    'name'     => 'DataFeedWatch',
    'category' => 'feed',
    'domain'   => 'datafeedwatch.com',
    'type'     => 'Feed optimization · SaaS · Focalizzato su qualità dati',
    'badges'   => [
      ['text' => 'Ottimizzazione feed', 'color' => 'green'],
    ],
    'desc'     => 'DataFeedWatch è specializzato nell\'ottimizzazione della qualità dei feed prodotto, con un focus particolare su Google Shopping. Permette di arricchire i titoli dei prodotti con regole automatiche (es. aggiungere categoria + brand + colore al titolo), correggere dati mancanti e segmentare il catalogo per campagne più granulari.<br><br>Supporta oltre 2.000 canali ed è particolarmente apprezzato per la facilità con cui si possono creare regole di trasformazione complesse senza codice. Ottimo come strumento complementare a una piattaforma di advertising Google.',
    'metrics'  => [
      ['label' => 'Piano base', 'value' => '~59$/mese'],
      ['label' => 'Canali',     'value' => '2.000+'],
    ],
    'pros'     => [
      'Regole di ottimizzazione feed molto granulari',
      'Ottimo per migliorare performance Google Shopping',
      'Prezzo contenuto rispetto ai concorrenti',
    ],
    'cons'     => [
      'Meno funzioni di gestione ordini rispetto a Lengow',
      'Focalizzato su feed, non su multichannel completo',
    ],
    'tags'     => ['Feed optimization', 'Google Shopping'],
  ],

  // ----- ANALYTICS AMAZON -----

  'helium10' => [
    'id'       => 'helium10',
    'name'     => 'Helium 10',
    'category' => 'analytics',
    'domain'   => 'helium10.com',
    'type'     => 'Suite analytics Amazon · Keyword · Listing optimization',
    'badges'   => [
      ['text' => 'Suite completa', 'color' => 'orange'],
    ],
    'desc'     => 'Helium 10 è la suite all-in-one più completa per seller Amazon. Comprende oltre 30 tool in un unico abbonamento: ricerca prodotto, analisi keyword, ottimizzazione listing, monitoraggio posizioni, analisi competitor, gestione inventory, protezione brand e molto altro.<br><br>I tool più usati: <strong>Black Box</strong> per la ricerca prodotto, <strong>Cerebro</strong> per il reverse ASIN (scopri le keyword di un competitor), <strong>Magnet</strong> per la ricerca keyword con volume stimato, <strong>Scribbles</strong> per l\'ottimizzazione del listing, <strong>Profits</strong> per il P&L per SKU.<br><br>Funziona su tutti i marketplace Amazon europei incluso Amazon.it. L\'interfaccia è in inglese ma i dati coprono il mercato italiano.',
    'metrics'  => [
      ['label' => 'Piano Starter',  'value' => '39$/mese'],
      ['label' => 'Piano Platinum', 'value' => '99$/mese'],
      ['label' => 'Tool inclusi',   'value' => '30+'],
    ],
    'pros'     => [
      'Suite più completa sul mercato Amazon',
      'Reverse ASIN per analizzare qualsiasi competitor',
      'P&L per SKU con costi FBA automatici',
      'Protezione brand e monitoraggio hijacker',
    ],
    'cons'     => [
      'Curva di apprendimento alta per sfruttarlo al 100%',
      'Solo per Amazon (non altri marketplace)',
      'Costo elevato per chi usa solo pochi tool',
    ],
    'tags'     => ['Ricerca prodotto', 'Keyword research', 'Listing optimization', 'FBA analytics'],
  ],

  'jungle-scout' => [
    'id'       => 'jungle-scout',
    'name'     => 'Jungle Scout',
    'category' => 'analytics',
    'domain'   => 'junglescout.com',
    'type'     => 'Amazon analytics · Product research · Supplier database',
    'badges'   => [
      ['text' => 'Ricerca prodotto', 'color' => 'green'],
    ],
    'desc'     => 'Jungle Scout è storicamente il tool di riferimento per la <strong>ricerca prodotto</strong> su Amazon: stima le vendite mensili di qualsiasi prodotto, aiuta a valutare la competitività di una nicchia e monitora le performance dei competitor. Include anche un database fornitori per trovare produttori (principalmente da Alibaba/Asia) verificati.<br><br>Rispetto a Helium 10, Jungle Scout è spesso percepito come più semplice e con un\'interfaccia più pulita. È la scelta preferita da chi inizia su Amazon FBA e vuole fare product research strutturata prima di lanciare un nuovo prodotto.',
    'metrics'  => [
      ['label' => 'Piano Base',  'value' => '49$/mese'],
      ['label' => 'Piano Suite', 'value' => '69$/mese'],
    ],
    'pros'     => [
      'Interfaccia più semplice di Helium 10',
      'Database fornitori integrato',
      'Ottimo per chi inizia con Amazon FBA',
    ],
    'cons'     => [
      'Meno tool inclusi rispetto a Helium 10',
      'Solo Amazon',
    ],
    'tags'     => ['Product research', 'FBA', 'Supplier sourcing'],
  ],

  'keepa' => [
    'id'       => 'keepa',
    'name'     => 'Keepa',
    'category' => 'analytics',
    'domain'   => 'keepa.com',
    'type'     => 'Storico prezzi Amazon · Price tracking · Buy Box history',
    'badges'   => [
      ['text' => 'Storico prezzi Amazon', 'color' => 'blue'],
    ],
    'desc'     => 'Keepa è uno strumento specifico per tracciare lo <strong>storico dei prezzi di qualsiasi prodotto su Amazon</strong>, incluso il prezzo di terze parti e la Buy Box history. È indispensabile per chi fa retail arbitrage, wholesale o vuole capire l\'andamento stagionale dei prezzi prima di acquistare stock.<br><br>Mostra grafici storici di prezzo, disponibilità, numero di seller sul listing, BSR (Best Seller Rank) nel tempo. L\'estensione browser evidenzia automaticamente questi dati sulle pagine prodotto di Amazon. Il piano gratuito è molto limitato; il piano a pagamento (~19$/mese) sblocca tutti i dati storici.',
    'metrics'  => [
      ['label' => 'Piano gratuito',  'value' => 'Sì (limitato)'],
      ['label' => 'Piano completo',  'value' => '~19$/mese'],
    ],
    'pros'     => [
      'Storico prezzi completo su tutti i marketplace Amazon EU',
      'Estensione browser integrata in Amazon',
      'Prezzo molto contenuto',
      'Indispensabile per retail arbitrage e wholesale',
    ],
    'cons'     => [
      'Solo Amazon, niente altri marketplace',
      'Interfaccia datata',
    ],
    'tags'     => ['Price tracking', 'Retail arbitrage', 'Buy Box'],
  ],

  'sellerboard' => [
    'id'       => 'sellerboard',
    'name'     => 'Sellerboard',
    'category' => 'analytics',
    'domain'   => 'sellerboard.com',
    'type'     => 'Amazon P&L analytics · Profittabilità per SKU',
    'badges'   => [
      ['text' => 'P&L in tempo reale', 'color' => 'green'],
    ],
    'desc'     => 'Sellerboard è il tool di riferimento per il <strong>controllo della profittabilità su Amazon</strong>. Calcola in tempo reale il P&L per ogni SKU includendo tutte le fee Amazon (FBA, referral, stoccaggio, rimborsi), i costi di prodotto inseriti manualmente, PPC spend e resi. Mostra il profitto netto reale, non solo il fatturato.<br><br>Include anche strumenti di alert per stock in esaurimento, rimborsi automatici per lost/damaged FBA inventory, e analisi delle performance dei listing. Il prezzo è molto competitivo rispetto alla completezza delle funzioni.',
    'metrics'  => [
      ['label' => 'Piano base',    'value' => '19$/mese'],
      ['label' => 'Rimborsi FBA',  'value' => 'Inclusi'],
    ],
    'pros'     => [
      'P&L reale per SKU con tutti i costi Amazon',
      'Rimborsi automatici per inventory FBA persa/danneggiata',
      'Prezzo molto contenuto',
      'Alert stock automatici via email',
    ],
    'cons'     => [
      'Solo Amazon (non altri marketplace)',
      'Costi prodotto da inserire manualmente',
    ],
    'tags'     => ['P&L Amazon', 'FBA analytics', 'Rimborsi FBA'],
  ],

  'perpetua' => [
    'id'       => 'perpetua',
    'name'     => 'Perpetua',
    'category' => 'analytics',
    'domain'   => 'perpetua.io',
    'type'     => 'Amazon Advertising · PPC automation · AI-driven',
    'badges'   => [
      ['text' => 'Amazon Ads', 'color' => 'orange'],
    ],
    'desc'     => 'Perpetua è uno strumento di ottimizzazione della pubblicità Amazon (Sponsored Products, Sponsored Brands, Sponsored Display) basato su algoritmi di machine learning. Automatizza la gestione delle campagne PPC: aggiusta i bid in tempo reale, ottimizza le parole chiave, gestisce budget e target ACOS senza intervento manuale quotidiano.<br><br>È particolarmente utile per seller con un numero medio-alto di campagne che non vogliono gestire tutto manualmente tramite Seller Central. Il dashboard di reporting è chiaro e mostra trend di spesa, ROAS, TACOS e performance per prodotto. Si integra anche con Instacart e Walmart negli USA.',
    'metrics'  => [
      ['label' => 'Pricing',    'value' => 'Da ~250$/mese'],
      ['label' => 'Focus',      'value' => 'Amazon PPC automation'],
      ['label' => 'Algoritmo',  'value' => 'AI / ML'],
    ],
    'pros'     => [
      'Ottimizzazione automatica dei bid in tempo reale',
      'Risparmio di ore di lavoro settimanale',
      'Target ACOS configurabili per campagna',
      'Reporting dettagliato e pulito',
    ],
    'cons'     => [
      'Costo elevato per piccoli seller',
      'Curva di apprendimento iniziale',
      'Solo Amazon Advertising',
    ],
    'tags'     => ['Amazon PPC', 'Advertising', 'AI bidding', 'TACOS'],
  ],

  // ----- REPRICING -----

  'repricer' => [
    'id'       => 'repricer',
    'name'     => 'Repricer.com',
    'category' => 'repricing',
    'domain'   => 'repricer.com',
    'type'     => 'Repricing Amazon & eBay · Automazione prezzi',
    'badges'   => [
      ['text' => 'Veloce & affidabile', 'color' => 'orange'],
    ],
    'desc'     => 'Repricer.com è uno dei repricer più veloci e affidabili per Amazon ed eBay. Aggiorna i prezzi in pochi secondi in risposta ai cambiamenti dei competitor, con l\'obiettivo di massimizzare il tempo in Buy Box senza abbassare inutilmente il prezzo. Le strategie di repricing sono configurabili: puoi impostare regole basate su posizione, BSR, tipo di seller (FBA vs FBM), e limiti di prezzo minimo/massimo per proteggere i margini.<br><br>Include anche funzioni di analisi della Buy Box: storico, percentuale di ownership, competitor principali. Integrazione diretta con Amazon Seller Central tramite API.',
    'metrics'  => [
      ['label' => 'Piano Express',          'value' => '~55€/mese'],
      ['label' => 'Piano Plus',             'value' => '~85€/mese'],
      ['label' => 'Velocità aggiornamento', 'value' => '~2 minuti'],
    ],
    'pros'     => [
      'Tra i repricer più veloci disponibili',
      'Strategie di repricing avanzate e configurabili',
      'Supporta Amazon.it e eBay.it',
      'Trial gratuito 14 giorni',
    ],
    'cons'     => [
      'Costo mensile fisso anche per pochi SKU',
      'Curva di apprendimento per strategie avanzate',
    ],
    'tags'     => ['Amazon repricing', 'Buy Box', 'eBay repricing'],
  ],

  'prisync' => [
    'id'       => 'prisync',
    'name'     => 'Prisync',
    'category' => 'repricing',
    'domain'   => 'prisync.com',
    'type'     => 'Competitor price monitoring · E-commerce repricing',
    'badges'   => [
      ['text' => 'Monitor prezzi competitor', 'color' => 'blue'],
    ],
    'desc'     => 'Prisync è un tool per il <strong>monitoraggio dei prezzi dei competitor</strong> su qualsiasi sito e-commerce, non solo su marketplace. Permette di tracciare i prezzi dei tuoi concorrenti diretti (dal loro shop online, da Amazon, da comparatori) e di ricevere alert quando cambiano. Include funzioni di repricing automatico per adeguare i tuoi prezzi in base a regole configurate.<br><br>Ideale per retailer che vendono su proprio shop e vogliono restare competitivi senza monitorare manualmente decine di siti.',
    'metrics'  => [
      ['label' => 'Piano base',    'value' => '59$/mese'],
      ['label' => 'Monitoraggio',  'value' => 'Qualsiasi sito'],
    ],
    'pros'     => [
      'Monitora qualsiasi sito e-commerce, non solo marketplace',
      'Alert immediati su cambi prezzo competitor',
      'Dashboard comparativo chiaro',
    ],
    'cons'     => [
      'Repricing automatico meno avanzato di tool specializzati',
      'Richiede configurazione dei competitor da monitorare',
    ],
    'tags'     => ['Price monitoring', 'Competitor tracking', 'E-commerce'],
  ],

  // ----- INVENTARIO & ORDINI -----

  'linnworks' => [
    'id'       => 'linnworks',
    'name'     => 'Linnworks',
    'category' => 'inventory',
    'domain'   => 'linnworks.com',
    'type'     => 'Order & Inventory Management · Multichannel · OMS',
    'badges'   => [
      ['text' => 'Multichannel OMS', 'color' => 'blue'],
    ],
    'desc'     => 'Linnworks è un sistema di gestione ordini e inventario (OMS) pensato per seller multichannel professionali. Centralizza in un\'unica interfaccia tutti gli ordini da Amazon, eBay, Shopify, WooCommerce, Etsy e altri canali, sincronizza le giacenze in tempo reale per evitare overselling, e gestisce il fulfillment con integrazioni verso corrieri (DHL, UPS, Royal Mail, ecc.).<br><br>Include funzioni di warehouse management (picking list, packing slip, barcode scanning), reporting avanzato e regole di automazione per la gestione degli ordini. È usato da seller con volumi medio-alti che necessitano di un layer di controllo centralizzato sopra i vari marketplace.',
    'metrics'  => [
      ['label' => 'Prezzo',             'value' => 'Da ~449$/mese'],
      ['label' => 'Canali supportati',  'value' => '100+'],
    ],
    'pros'     => [
      'Gestione ordini centralizzata su tutti i canali',
      'Sincronizzazione stock in tempo reale',
      'Warehouse management integrato',
      'Automazioni ordini avanzate',
    ],
    'cons'     => [
      'Costo elevato, non per piccoli seller',
      'Setup complesso, richiede onboarding',
    ],
    'tags'     => ['OMS', 'Warehouse management', 'Seller avanzati'],
  ],

  'veeqo' => [
    'id'       => 'veeqo',
    'name'     => 'Veeqo',
    'category' => 'inventory',
    'domain'   => 'veeqo.com',
    'type'     => 'Inventory & Order Management · Gratuito (Amazon)',
    'badges'   => [
      ['text' => 'Acquisito da Amazon · Gratuito', 'color' => 'green'],
    ],
    'desc'     => 'Veeqo è stato acquisito da Amazon nel 2021 ed è ora offerto <strong>gratuitamente</strong> ai seller. È un sistema di gestione ordini e inventario multichannel che supporta Amazon, eBay, Shopify, Etsy e altri canali. Include tariffe di spedizione scontate tramite i corrieri partner di Amazon.<br><br>Il fatto di essere gratuito lo rende estremamente competitivo rispetto a Linnworks per seller di taglia media. È la scelta logica per chi vende principalmente su Amazon e vuole un OMS senza costi aggiuntivi. Va considerato che, essendo di Amazon, i dati passano attraverso l\'ecosistema Amazon.',
    'metrics'  => [
      ['label' => 'Prezzo',              'value' => 'Gratuito'],
      ['label' => 'Spedizioni scontate', 'value' => 'Sì'],
    ],
    'pros'     => [
      'Completamente gratuito',
      'Tariffe spedizione scontate incluse',
      'Integrazione nativa Amazon eccellente',
    ],
    'cons'     => [
      'Dati su infrastruttura Amazon',
      'Meno funzioni avanzate di Linnworks',
    ],
    'tags'     => ['OMS gratuito', 'Amazon seller', 'Multichannel'],
  ],

  // ----- RECENSIONI -----

  'trustpilot' => [
    'id'       => 'trustpilot',
    'name'     => 'Trustpilot',
    'category' => 'reviews',
    'domain'   => 'trustpilot.com',
    'type'     => 'Piattaforma recensioni · B2C · Riconosciuta globalmente',
    'badges'   => [
      ['text' => 'Standard globale', 'color' => 'blue'],
    ],
    'desc'     => 'Trustpilot è la piattaforma di recensioni con il riconoscimento più ampio a livello globale. Il profilo appare nei risultati di ricerca Google con le stelle nel snippet - un aumento di CTR organico misurabile. I widget dinamici si integrano nel sito per mostrare il rating in tempo reale.<br><br>Il piano gratuito riceve solo recensioni spontanee. I piani a pagamento aggiungono inviti automatici post-acquisto via email, risposte alle recensioni e analisi avanzate. In Italia è lo standard per gli shop B2C che vogliono costruire reputazione online verificabile - il costo principale è il piano Standard a ~259€/mese, giustificato solo da un certo volume di ordini.',
    'metrics'  => [
      ['label' => 'Piano Free',     'value' => 'Sì'],
      ['label' => 'Piano Standard', 'value' => '~259€/mese'],
    ],
    'pros'     => [
      'Riconoscimento globale, alta fiducia consumatori',
      'Stelle in Google SERP aumentano il CTR',
      'Piano gratuito funzionale per iniziare',
    ],
    'cons'     => [
      'Costo alto per piani con inviti automatici',
      'Recensioni negative visibili pubblicamente senza filtri',
    ],
    'tags'     => ['Shop reviews', 'Google stars', 'B2C'],
  ],

  'feedaty' => [
    'id'       => 'feedaty',
    'name'     => 'Feedaty',
    'category' => 'reviews',
    'domain'   => 'feedaty.com',
    'type'     => 'Piattaforma recensioni · Italiana · Certificata Google',
    'badges'   => [
      ['text' => 'Made in Italy', 'color' => 'green'],
    ],
    'desc'     => 'Feedaty è la principale piattaforma italiana di gestione recensioni per e-commerce, certificata da Google come Trusted Ratings Partner. Raccoglie recensioni sia sull\'esperienza d\'acquisto (negozio) che sui singoli prodotti, con inviti automatici post-acquisto.<br><br>È integrata nativamente con le principali piattaforme italiane (Shopify, WooCommerce, PrestaShop, Magento) e con le soluzioni di fatturazione italiane. Le stelle appaiono nei risultati Google sia per lo shop che per i prodotti. Rispetto a Trustpilot, ha prezzi più accessibili e un\'assistenza in italiano.',
    'metrics'  => [
      ['label' => 'Piano base',            'value' => '~29€/mese'],
      ['label' => 'Certificazione Google', 'value' => 'Sì'],
      ['label' => 'Recensioni prodotto',   'value' => 'Sì'],
    ],
    'pros'     => [
      'Prezzi molto più accessibili di Trustpilot',
      'Supporto in italiano',
      'Recensioni prodotto certificate per Google Shopping',
      'Integrazioni native con CMS italiani',
    ],
    'cons'     => [
      'Meno riconosciuta a livello internazionale',
      'Community più piccola rispetto a Trustpilot',
    ],
    'tags'     => ['Italiano', 'Google Shopping reviews', 'PMI italiane'],
  ],

  // ----- SPEDIZIONI -----

  'shippypro' => [
    'id'       => 'shippypro',
    'name'     => 'ShippyPro',
    'category' => 'spedizioni',
    'domain'   => 'shippypro.com',
    'type'     => 'Shipping management · Etichette · Tracking · Italiano',
    'badges'   => [
      ['text' => 'Made in Italy', 'color' => 'green'],
      ['text' => 'All-in-one spedizioni', 'color' => 'blue'],
    ],
    'desc'     => 'ShippyPro è la piattaforma italiana di gestione spedizioni più completa per e-commerce: stampa etichette in bulk, confronto tariffe multi-corriere, tracking proattivo con notifiche ai clienti, gestione resi e analytics logistici. Nata in Italia nel 2016, è progettata con il mercato locale in mente: corrieri italiani pre-integrati, supporto in italiano, conformità alle normative locali.<br><br>Si integra con oltre 180 corrieri (BRT, GLS, SDA, DHL, UPS, Poste Italiane, TNT e molti altri) e con tutti i principali marketplace e CMS: Amazon, eBay, Shopify, WooCommerce, PrestaShop, Magento. La funzione <strong>Label Creator</strong> permette di generare etichette per ordini da qualsiasi canale in un\'unica interfaccia. Il piano gratuito copre fino a 50 spedizioni al mese, ideale per chi inizia.<br><br>Rispetto a Sendcloud (olandese), ShippyPro ha un catalogo corrieri italiani più ampio e supporto dedicato in italiano. Rispetto a Qapla\', ha focus più operativo (etichette, logistica) e meno sul post-vendita e tracking esteso.',
    'metrics'  => [
      ['label' => 'Piano Free',          'value' => 'Fino a 50 sped./mese'],
      ['label' => 'Piano Professional',  'value' => 'Da ~29€/mese'],
      ['label' => 'Corrieri integrati',  'value' => '180+'],
      ['label' => 'Origine',             'value' => 'Italiana'],
    ],
    'pros'     => [
      'Piattaforma italiana: supporto e UX in italiano',
      'Catalogo corrieri italiani il più completo disponibile',
      'Piano gratuito funzionale per piccoli volumi',
      'Integrazione con tutti i principali marketplace italiani',
      'Resi automatizzati e tracking branded',
    ],
    'cons'     => [
      'Meno conosciuto fuori dall\'Italia',
      'Funzioni analytics meno avanzate di soluzioni enterprise',
    ],
    'tags'     => ['Italiano', 'Multi-corriere', 'Etichette bulk', 'Resi'],
  ],

  'qapla' => [
    'id'       => 'qapla',
    'name'     => 'Qapla\'',
    'category' => 'spedizioni',
    'domain'   => 'qapla.it',
    'type'     => 'Shipment tracking · Post-vendita · Notifiche clienti',
    'badges'   => [
      ['text' => 'Made in Italy', 'color' => 'green'],
    ],
    'desc'     => 'Qapla\' è un software italiano specializzato nella gestione post-spedizione: tracciamento multi-corriere in tempo reale, notifiche proattive ai clienti via email e SMS, branded tracking page personalizzata e dashboard per monitorare anomalie e ritardi. Riduce le email di assistenza "dov\'è il mio pacco?" fino all\'80%.<br><br>Supporta oltre 180 corrieri italiani e internazionali (BRT, SDA, GLS, DHL, UPS, FedEx, Poste Italiane e molti altri) e si integra con i principali CMS e marketplace. Particolarmente apprezzato da e-commerce italiani per il supporto in lingua e la comprensione del mercato locale.',
    'metrics'  => [
      ['label' => 'Pricing',              'value' => 'Da ~49€/mese'],
      ['label' => 'Corrieri supportati',  'value' => '180+'],
      ['label' => 'Origine',             'value' => 'Italiano'],
    ],
    'pros'     => [
      'Tracking multi-corriere in un\'unica dashboard',
      'Notifiche proattive riducono ticket assistenza',
      'Branded tracking page personalizzabile',
      'Supporto e interfaccia in italiano',
    ],
    'cons'     => [
      'Focalizzato sul post-spedizione: non gestisce etichette',
      'Meno conosciuto fuori dall\'Italia',
    ],
    'tags'     => ['Tracking', 'Post-vendita', 'Italiano', 'Multi-corriere'],
  ],

  'sendcloud' => [
    'id'       => 'sendcloud',
    'name'     => 'Sendcloud',
    'category' => 'spedizioni',
    'domain'   => 'sendcloud.com',
    'type'     => 'Shipping management · Etichette · Multi-corriere',
    'badges'   => [
      ['text' => 'Shipping Platform', 'color' => 'blue'],
    ],
    'desc'     => 'Sendcloud è la piattaforma di spedizione più diffusa in Europa tra gli e-commerce di piccole e medie dimensioni. Permette di confrontare tariffe tra più corrieri, stampare etichette in bulk, gestire resi in modo automatizzato e inviare notifiche di tracking brandizzate ai clienti.<br><br>Si integra con Shopify, WooCommerce, Magento, PrestaShop, Amazon, eBay e molti altri canali. I corrieri preintegrati includono BRT, GLS, DHL, UPS, Poste Italiane, SDA e altri. Il piano gratuito consente fino a 100 spedizioni/mese - ideale per chi inizia o ha volumi bassi.',
    'metrics'  => [
      ['label' => 'Pricing',       'value' => 'Gratis fino a 100 sped.'],
      ['label' => 'Corrieri IT',   'value' => 'BRT, GLS, DHL, SDA…'],
      ['label' => 'Integrazioni',  'value' => '80+ piattaforme'],
    ],
    'pros'     => [
      'Piano gratuito disponibile',
      'Tariffe scontate su corrieri partner',
      'Gestione resi automatizzata',
      'Integrazioni con tutti i principali CMS',
    ],
    'cons'     => [
      'Costi crescono rapidamente con i volumi',
      'Supporto talvolta lento su piani base',
    ],
    'tags'     => ['Spedizioni', 'Multi-corriere', 'Resi', 'PMI'],
  ],

  'packlink' => [
    'id'       => 'packlink',
    'name'     => 'Packlink PRO',
    'category' => 'spedizioni',
    'domain'   => 'packlink.it',
    'type'     => 'Shipping aggregator · Comparatore tariffe · B2B',
    'badges'   => [
      ['text' => 'Comparatore Corrieri', 'color' => 'purple'],
    ],
    'desc'     => 'Packlink PRO è la versione business di Packlink, uno dei principali aggregatori di spedizioni in Europa. Consente di confrontare in tempo reale le tariffe di oltre 30 corrieri per trovare il prezzo migliore per ogni spedizione, con sconti significativi rispetto alle tariffe standard. Particolarmente utile per chi non ha volume sufficiente per negoziare contratti diretti con i corrieri.<br><br>L\'interfaccia web permette di creare spedizioni singole o in batch, scaricare etichette, tracciare i pacchi e accedere a uno storico completo. Si integra con Shopify, WooCommerce, Prestashop e altri. Gratuito senza abbonamento mensile: si paga solo per le spedizioni effettuate.',
    'metrics'  => [
      ['label' => 'Pricing',   'value' => 'Gratuito (paga per sped.)'],
      ['label' => 'Corrieri',  'value' => '30+ comparati'],
      ['label' => 'Risparmio', 'value' => 'Fino al 70% vs. listino'],
    ],
    'pros'     => [
      'Zero costi fissi: paghi solo le spedizioni',
      'Tariffe scontate per bassi volumi',
      'Confronto istantaneo tra 30+ corrieri',
      'Ideale per chi spedisce meno di 200 pacchi/mese',
    ],
    'cons'     => [
      'Meno automatizzato di Sendcloud',
      'Integrazioni più limitate',
    ],
    'tags'     => ['Comparatore', 'Risparmio', 'Piccoli volumi'],
  ],

  // ----- EMAIL MARKETING & CRM -----

  'mailchimp' => [
    'id'       => 'mailchimp',
    'name'     => 'Mailchimp',
    'category' => 'email-marketing',
    'domain'   => 'mailchimp.com',
    'type'     => 'Email marketing · Newsletter · Automazioni base',
    'badges'   => [
      ['text' => 'Il più conosciuto', 'color' => 'orange'],
      ['text' => 'Piano gratuito', 'color' => 'green'],
    ],
    'desc'     => 'Mailchimp è la piattaforma di email marketing più conosciuta al mondo: oltre 13 milioni di utenti attivi, interfaccia intuitiva, piano gratuito fino a 500 contatti. In Italia è spesso la prima scelta per chi si avvicina all\'email marketing senza esperienza pregressa.<br><br>Il punto di forza è la semplicità: editor drag-and-drop, template pronti, automazioni di base (welcome email, recupero carrello) e buone integrazioni con Shopify e WooCommerce. Il piano gratuito è funzionale per chi inizia, ma include il branding Mailchimp e limita le funzionalità di automazione avanzata.<br><br>Rispetto a Klaviyo, è meno potente nella segmentazione basata su dati d\'acquisto e non riporta revenue attribution diretta. Rispetto a Brevo, costa di più all\'aumentare della lista. È la scelta giusta per chi parte da zero e vuole uno strumento familiare con ampia documentazione e community.',
    'metrics'  => [
      ['label' => 'Piano Free',      'value' => 'Fino a 500 contatti'],
      ['label' => 'Piano Essentials', 'value' => 'Da ~13€/mese'],
      ['label' => 'Integrazioni',    'value' => 'Shopify, WooCommerce…'],
    ],
    'pros'     => [
      'Interfaccia più semplice e intuitiva del mercato',
      'Piano gratuito funzionale per iniziare',
      'Ampia documentazione e community in italiano',
      'Integrazioni con tutti i principali CMS e-commerce',
    ],
    'cons'     => [
      'Costi crescono rapidamente con i contatti',
      'Automazioni meno potenti di Klaviyo',
      'Segmentazione e-commerce meno granulare',
      'Piano gratuito include il logo Mailchimp nelle email',
    ],
    'tags'     => ['Newsletter', 'Semplicità', 'Principianti', 'PMI'],
  ],

  'brevo' => [
    'id'       => 'brevo',
    'name'     => 'Brevo (ex Sendinblue)',
    'category' => 'email-marketing',
    'domain'   => 'brevo.com',
    'type'     => 'Email marketing · SMS · CRM · Europeo',
    'badges'   => [
      ['text' => 'GDPR nativo', 'color' => 'blue'],
      ['text' => 'Piano gratuito generoso', 'color' => 'green'],
    ],
    'desc'     => 'Brevo (ex Sendinblue, rinominato nel 2023) è la piattaforma europea di email e SMS marketing più usata tra le PMI italiane, grazie a un piano gratuito molto generoso (300 email/giorno senza limite di contatti) e prezzi competitivi sui piani a pagamento.<br><br>A differenza di Mailchimp che limita per numero di contatti, Brevo limita per <strong>volume di invio</strong>: puoi avere 10.000 contatti in lista e pagare solo in base a quante email mandi al mese. Per chi ha liste grandi ma manda poco, è molto più conveniente. Essendo europea, la conformità GDPR è integrata nativamente - un vantaggio non banale per chi vende in Italia e UE.<br><br>Offre email transazionali (conferme ordine, tracking), SMS marketing, live chat e un CRM base. Integrazioni native con Shopify, WooCommerce, PrestaShop. La qualità delle automazioni è buona ma non raggiunge la profondità di Klaviyo per e-commerce avanzato.',
    'metrics'  => [
      ['label' => 'Piano Free',       'value' => '300 email/giorno illimitati contatti'],
      ['label' => 'Piano Starter',    'value' => 'Da ~19€/mese'],
      ['label' => 'SMS marketing',    'value' => 'Sì, integrato'],
      ['label' => 'Origine',          'value' => 'Europea (Francia)'],
    ],
    'pros'     => [
      'Piano gratuito senza limite di contatti',
      'Prezzo per volume, non per lista: conveniente per liste grandi',
      'GDPR compliance nativa',
      'Email transazionali + SMS in un unico strumento',
      'Interfaccia in italiano disponibile',
    ],
    'cons'     => [
      'Automazioni e-commerce meno avanzate di Klaviyo',
      'Meno template di qualità rispetto a Mailchimp',
      'Deliverability inferiore ai leader su invii massivi',
    ],
    'tags'     => ['PMI italiane', 'GDPR', 'Email + SMS', 'Costo contenuto'],
  ],

  'klaviyo' => [
    'id'       => 'klaviyo',
    'name'     => 'Klaviyo',
    'category' => 'email-marketing',
    'domain'   => 'klaviyo.com',
    'type'     => 'Email marketing · SMS · CRM e-commerce',
    'badges'   => [
      ['text' => 'Email & SMS', 'color' => 'orange'],
    ],
    'desc'     => 'Klaviyo è la piattaforma di email e SMS marketing più usata dagli e-commerce D2C. L\'integrazione con Shopify e WooCommerce è profonda: importa in automatico acquisti, comportamento on-site e storico clienti, e li usa per segmentazioni precise e automazioni ad alto impatto.<br><br>Flussi pronti all\'uso: welcome series, recupero carrello abbandonato, post-acquisto, win-back clienti inattivi, VIP program. I report mostrano direttamente quante revenue ogni flusso ha generato - non click o open rate, ma soldi. Per chi vende su un proprio e-commerce e vuole smettere di mandare newsletter generiche a tutta la lista, è lo strumento più potente disponibile.',
    'metrics'  => [
      ['label' => 'Pricing',      'value' => 'Gratis fino a 500 contatti'],
      ['label' => 'Integrazione', 'value' => 'Shopify nativa'],
      ['label' => 'Canali',       'value' => 'Email + SMS'],
    ],
    'pros'     => [
      'Segmentazione basata su dati d\'acquisto reali',
      'Integrazione Shopify/WooCommerce profondissima',
      'Revenue attribution diretta per ogni email',
      'Automazioni pronte all\'uso molto efficaci',
    ],
    'cons'     => [
      'Costi crescono rapidamente con i contatti',
      'Curva di apprendimento per flow avanzati',
      'Meno adatto a chi non ha un e-commerce proprio',
    ],
    'tags'     => ['Email', 'SMS', 'D2C', 'Shopify', 'Automation'],
  ],

  // ----- PAGAMENTI & BNPL -----

  'stripe' => [
    'id'       => 'stripe',
    'name'     => 'Stripe',
    'category' => 'pagamenti',
    'domain'   => 'stripe.com',
    'type'     => 'Payment gateway · Developer-first · Globale',
    'badges'   => [
      ['text' => 'Standard per sviluppatori', 'color' => 'purple'],
    ],
    'desc'     => 'Stripe è il gateway di pagamento di riferimento per sviluppatori e aziende tech di tutto il mondo. La sua API è considerata la più completa e ben documentata del settore: integrazione in ore, non giorni, con supporto per pagamenti una tantum, abbonamenti, marketplace split-payment, fatturazione automatica e molto altro.<br><br>In Italia accetta carte Visa/Mastercard/Amex, bonifici SEPA, PayPal, Apple Pay, Google Pay e metodi locali europei. La fee standard è <strong>1,5% + 0,25€ per carte europee</strong> - tra le più basse per chi ha volumi significativi. Supporta anche Klarna, Scalapay e altri BNPL tramite Stripe Payment Element.<br><br>È la scelta naturale per chi costruisce un e-commerce custom, un\'app o ha esigenze di pagamento complesse. Per chi usa Shopify, WooCommerce o PrestaShop, l\'integrazione ufficiale è disponibile e stabile. Non richiede contratti né minimi mensili.',
    'metrics'  => [
      ['label' => 'Fee carte EU',     'value' => '1,5% + 0,25€'],
      ['label' => 'Fee carte non-EU', 'value' => '2,5% + 0,25€'],
      ['label' => 'Costo fisso',      'value' => '0€/mese'],
      ['label' => 'Setup',            'value' => 'Immediato online'],
    ],
    'pros'     => [
      'API più completa e documentata del mercato',
      'Fee tra le più basse su carte europee',
      'Nessun costo fisso mensile',
      'Supporta tutti i metodi di pagamento rilevanti',
      'Dashboard e reporting eccellenti',
    ],
    'cons'     => [
      'Supporto clienti meno reattivo rispetto a Nexi per aziende italiane',
      'Richiede conoscenze tecniche per integrazioni custom',
      'Pagamenti in sospeso (payout) nei primi mesi di attività',
    ],
    'tags'     => ['Developer', 'API', 'Globale', 'Commissioni basse'],
  ],

  'scalapay' => [
    'id'       => 'scalapay',
    'name'     => 'Scalapay',
    'category' => 'pagamenti',
    'domain'   => 'scalapay.com',
    'type'     => 'Buy Now Pay Later · Italiano · E-commerce & POS',
    'badges'   => [
      ['text' => 'BNPL · Made in Italy', 'color' => 'orange'],
    ],
    'desc'     => 'Scalapay è il BNPL (Buy Now, Pay Later) più usato in Italia: il cliente paga in 3 o 4 rate senza interessi, il merchant incassa l\'intero importo subito. Plugin ufficiali per Shopify, WooCommerce, PrestaShop e Magento - l\'integrazione tecnica è rapida.<br><br>Funziona meglio su fashion, beauty e lifestyle, dove lo scontrino medio alto giustifica la rateizzazione. In pratica: chi non avrebbe comprato a 150€ in un colpo solo, compra a 50€ × 3. La fee per il merchant è del 3–5% - più alta di una carta di credito standard - ma il guadagno in conversion rate e scontrino medio la compensa su molte categorie. Da valutare con dati reali del proprio shop prima di attivarlo.',
    'metrics'  => [
      ['label' => 'Fee merchant',       'value' => '~3–5%'],
      ['label' => 'Rate cliente',       'value' => '3 o 4 (0% interessi)'],
      ['label' => 'Pagamento merchant', 'value' => 'Immediato'],
    ],
    'pros'     => [
      'Aumenta conversioni e scontrino medio',
      'Pagamento immediato al merchant',
      'Molto riconosciuta in Italia (fashion, beauty)',
      'Integrazione semplice con i principali CMS',
    ],
    'cons'     => [
      'Fee più alta rispetto a pagamenti tradizionali',
      'Meno efficace per prodotti con scontrino basso',
    ],
    'tags'     => ['BNPL', 'Fashion', 'Beauty', 'Scontrino alto'],
  ],

  'satispay' => [
    'id'       => 'satispay',
    'name'     => 'Satispay',
    'category' => 'pagamenti',
    'domain'   => 'satispay.com',
    'type'     => 'Pagamento digitale · Italiano · Conto corrente',
    'badges'   => [
      ['text' => 'Pagamento nativo italiano', 'color' => 'blue'],
    ],
    'desc'     => 'Satispay collega direttamente il conto corrente del cliente a quello del merchant, senza carte di credito intermedie. In Italia conta 3 milioni di utenti attivi - molto usato nei negozi fisici con POS contactless, ma disponibile anche per e-commerce tramite integrazione su Shopify e WooCommerce.<br><br>La struttura delle fee è insolita: gratuito per transazioni sotto i 10€, poi 0,20€ fissi - non percentuale - per tutti gli importi superiori. Su uno scontrino da 50€ la fee è 0,20€, stessa cifra che su uno da 200€. Conveniente per scontrini medi e bassi; meno rilevante per chi vende prodotti ad alto valore dove la percentuale di una carta di credito resta competitiva.',
    'metrics'  => [
      ['label' => 'Fee <10€',  'value' => '0€'],
      ['label' => 'Fee >10€',  'value' => '0,20€ fissi'],
      ['label' => 'Utenti IT', 'value' => '3M+'],
    ],
    'pros'     => [
      'Fee bassissima (0,20€ fissi sopra 10€)',
      'Enorme adozione in Italia',
      'Gratuito per micro-transazioni',
      'Noto e fidato dai consumatori italiani',
    ],
    'cons'     => [
      'Solo mercato italiano',
      'Richiede che il cliente abbia l\'app Satispay',
      'Meno diffuso per acquisti online rispetto al fisico',
    ],
    'tags'     => ['Italiano', 'Fee minima', 'Micro-transazioni'],
  ],

  'paypal' => [
    'id'       => 'paypal',
    'name'     => 'PayPal',
    'category' => 'pagamenti',
    'domain'   => 'paypal.com',
    'type'     => 'Wallet digitale · Pagamenti online · B2C globale',
    'badges'   => [
      ['text' => 'Pagamento globale', 'color' => 'blue'],
    ],
    'desc'     => 'PayPal è il metodo di pagamento online più diffuso al mondo con oltre 400 milioni di utenti attivi. In Italia è ancora molto popolare soprattutto tra gli acquirenti abituali di marketplace come eBay, ed è percepito come garanzia di sicurezza grazie alla protezione acquirenti integrata.<br><br>Per i venditori, PayPal Checkout si integra con tutti i principali CMS (Shopify, WooCommerce, PrestaShop) in pochi minuti. Le commissioni sono circa 3,4% + 0,35€ per transazione in Italia. Offre anche PayPal Pay Later (BNPL) e PayPal Credit in alcuni mercati.',
    'metrics'  => [
      ['label' => 'Commissione',   'value' => '~3,4% + 0,35€'],
      ['label' => 'Utenti globali', 'value' => '400M+'],
      ['label' => 'Setup',         'value' => 'Immediato'],
    ],
    'pros'     => [
      'Fiducia altissima tra i consumatori',
      'Integrazione universale con tutti i CMS',
      'Checkout rapido per utenti già registrati',
      'Protezione acquirenti aumenta conversion rate',
    ],
    'cons'     => [
      'Commissioni più alte rispetto a Stripe',
      'Dispute acquirenti spesso favoriscono il buyer',
      'Ritardi nei prelievi per nuovi account',
    ],
    'tags'     => ['Wallet', 'Globale', 'Fiducia'],
  ],

  'klarna' => [
    'id'       => 'klarna',
    'name'     => 'Klarna',
    'category' => 'pagamenti',
    'domain'   => 'klarna.com',
    'type'     => 'BNPL · Pagamento in 3 rate · B2C',
    'badges'   => [
      ['text' => 'BNPL Premium', 'color' => 'green'],
    ],
    'desc'     => 'Klarna è il leader mondiale del Buy Now Pay Later con oltre 150 milioni di utenti in 45 paesi. Offre ai consumatori la possibilità di pagare in 3 rate senza interessi, posticipare il pagamento di 30 giorni o rateizzare su periodi più lunghi. I merchant ricevono l\'importo completo subito, senza rischio di insolvenza.<br><br>In Italia è in forte crescita, specialmente nei settori moda, elettronica e arredamento. Integrabile facilmente con Shopify, WooCommerce e PrestaShop. La presenza di Klarna nel checkout può aumentare il valore medio del carrello (AOV) fino al 40% secondo i dati interni del provider.',
    'metrics'  => [
      ['label' => 'Commissione',   'value' => '~2,49% + 0,20€'],
      ['label' => 'Utenti globali', 'value' => '150M+'],
      ['label' => 'Rate',          'value' => '3 rate senza interessi'],
    ],
    'pros'     => [
      'Aumenta AOV e riduce abbandono carrello',
      'Il merchant incassa subito, nessun rischio',
      'Brand riconoscibile, aumenta fiducia',
      'Ottimo per prodotti da 50€ a 500€',
    ],
    'cons'     => [
      'Commissioni più alte rispetto a Satispay',
      'Approvazione non immediata per alcuni merchant',
      'Meno diffuso per acquisti sotto i 30€',
    ],
    'tags'     => ['BNPL', 'Rate', 'Fashion', 'Alto AOV'],
  ],

  'nexi' => [
    'id'       => 'nexi',
    'name'     => 'Nexi / XPay',
    'category' => 'pagamenti',
    'domain'   => 'nexi.it',
    'type'     => 'Payment gateway · Carte · B2C italiano',
    'badges'   => [
      ['text' => 'Pagamenti Italiani', 'color' => 'blue'],
    ],
    'desc'     => 'Nexi è il principale operatore italiano di pagamenti digitali, presente in tutta la catena: dai POS fisici (usati da milioni di esercenti) all\'e-commerce tramite XPay, il gateway online. XPay permette di accettare pagamenti con carta di credito/debito (Visa, Mastercard), bonifici, wallet digitali e metodi locali europei.<br><br>Per i seller italiani, Nexi ha un vantaggio importante: essendo il provider di riferimento delle banche italiane, ha integrazioni native con molti istituti di credito locali e può semplificare la riconciliazione contabile. Offre anche soluzioni per pagamenti ricorrenti, marketplace split-payment e onboarding veloce per aziende italiane.',
    'metrics'  => [
      ['label' => 'Commissione',   'value' => '~1,5–2,5%'],
      ['label' => 'Origine',       'value' => 'Italiana'],
      ['label' => 'Esercenti IT',  'value' => '1M+'],
    ],
    'pros'     => [
      'Player italiano: supporto e compliance locali',
      'Integrazioni con banche italiane semplificate',
      'Commissioni competitive su volumi medi',
      'Soluzione unica per fisico + online',
    ],
    'cons'     => [
      'Meno conosciuto a livello internazionale',
      'Developer experience meno raffinata di Stripe',
      'Contratti talvolta con vincoli minimi',
    ],
    'tags'     => ['Italiano', 'Carte', 'POS + online', 'B2B'],
  ],

];
