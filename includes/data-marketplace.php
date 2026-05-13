<?php

// ============================================================
//  MARKETPLACE CATEGORIES
// ============================================================

$marketplace_categories = [

  'generalisti' => [
    'label'          => 'Generalisti',
    'slug'           => 'generalisti',
    'h2'             => 'Le grandi piattaforme per tutti i prodotti',
    'desc'           => 'Alto traffico, alta concorrenza. Adatti a chi vuole volumi e non dipende dal branding forte.',
    'section_label'  => 'Marketplace Generalisti',
    'items_count'    => 4,
    'commission_range' => '0–15%',
    'featured'       => ['amazon', 'ebay', 'subito'],
  ],

  'verticali' => [
    'label'          => 'Verticali',
    'slug'           => 'verticali',
    'h2'             => 'Piattaforme specializzate per categoria',
    'desc'           => 'Pubblico più qualificato, meno concorrenza generalista. Ideali per chi ha un prodotto ben definito.',
    'section_label'  => 'Marketplace Verticali',
    'items_count'    => 4,
    'commission_range' => '0–15%',
    'featured'       => ['etsy', 'manomano', 'vinted'],
  ],

  'fashion' => [
    'label'          => 'Moda & Fashion',
    'slug'           => 'fashion',
    'h2'             => 'I canali per vendere abbigliamento e accessori',
    'desc'           => 'Dal fast fashion al lusso: ogni segmento ha la sua piattaforma di riferimento.',
    'section_label'  => 'Moda & Fashion',
    'items_count'    => 5,
    'commission_range' => '5–30%',
    'featured'       => ['zalando', 'farfetch', 'depop'],
  ],

  'comparatori' => [
    'label'          => 'Comparatori & Shopping Ads',
    'slug'           => 'comparatori',
    'h2'             => 'Intercetta chi è già pronto a comprare',
    'desc'           => 'Canali CPC per portare traffico qualificato al tuo shop. Non sono marketplace: non gestiscono la transazione.',
    'section_label'  => 'Comparatori & Shopping Ads',
    'items_count'    => 3,
    'commission_range' => 'CPC',
    'featured'       => ['google-shopping', 'trovaprezzi', 'kelkoo'],
  ],

  'social' => [
    'label'          => 'Social Commerce',
    'slug'           => 'social',
    'h2'             => 'Vendere dove le persone passano il tempo',
    'desc'           => 'TikTok, Instagram e Facebook stanno diventando canali di vendita a tutti gli effetti.',
    'section_label'  => 'Social Commerce',
    'items_count'    => 2,
    'commission_range' => '0–8%',
    'featured'       => ['tiktok-shop', 'instagram-shop'],
  ],

  'outlet' => [
    'label'          => 'Outlet & Flash Sale',
    'slug'           => 'outlet',
    'h2'             => 'Smaltire stock e invenduto senza svalutare il brand',
    'desc'           => 'Canali dedicati alle vendite promozionali, flash sale e liquidazione stock.',
    'section_label'  => 'Outlet & Flash Sale',
    'items_count'    => 2,
    'commission_range' => 'Modello evento',
    'featured'       => ['veepee', 'privalia'],
  ],

  'ricondizionato' => [
    'label'          => 'Ricondizionato & Economia Circolare',
    'slug'           => 'ricondizionato',
    'h2'             => 'Il mercato dell\'usato e del ricondizionato',
    'desc'           => 'Segmento in forte crescita: i consumatori cercano risparmio e sostenibilità. Opportunità concrete per chi gestisce resi, ricondizionati e stock usato.',
    'section_label'  => 'Ricondizionato & Economia Circolare',
    'items_count'    => 1,
    'commission_range' => '~12%',
    'featured'       => ['backmarket'],
  ],

  'internazionali' => [
    'label'          => 'Internazionali & Specializzati',
    'slug'           => 'internazionali',
    'h2'             => 'Canali verticali e piattaforme con presenza in Italia',
    'desc'           => 'Marketplace specializzati per nicchia o country, con opportunità concrete per chi vende in segmenti specifici o vuole espandersi oltre confine.',
    'section_label'  => 'Internazionali & Specializzati',
    'items_count'    => 5,
    'commission_range' => '6–20%',
    'featured'       => ['allegro', 'catawiki', 'leroymerlin'],
  ],

];


// ============================================================
//  MARKETPLACE ITEMS
// ============================================================

$marketplaces = [

  // ----- GENERALISTI -----

  'amazon' => [
    'id'       => 'amazon',
    'name'     => 'Amazon.it',
    'category' => 'generalisti',
    'domain'   => 'amazon.it',
    'type'     => 'Marketplace generalista · B2C · dal 2010 in Italia',
    'badges'   => [
      ['text' => 'Leader di mercato', 'color' => 'orange'],
      ['text' => 'FBA disponibile',   'color' => 'blue'],
    ],
    'desc'     => 'Amazon è il marketplace con il maggior traffico in Italia e uno dei più influenti al mondo. Presente nel paese dal 2010, conta decine di milioni di visitatori mensili e una base clienti abituata ad acquistare frequentemente. Per i venditori è il canale con il maggior potenziale di volume, ma anche quello più competitivo e con le politiche più rigide.<br><br>Il programma <strong>FBA (Fulfilled by Amazon)</strong> consente di delegare interamente la logistica: il venditore spedisce il proprio stock ai magazzini Amazon, che si occupa di stoccaggio, spedizione al cliente finale, resi e customer service. In cambio, i prodotti acquisiscono il badge Prime e una maggiore visibilità. Il programma <strong>FBM (Fulfilled by Merchant)</strong> mantiene invece la logistica in mano al venditore, con costi inferiori ma meno visibilità sui risultati di ricerca.<br><br>La visibilità su Amazon è governata dall\'algoritmo A9/A10, che premia conversione, recensioni, parole chiave nel titolo e nei bullet point, e storico di vendita. Senza una strategia di advertising (Sponsored Products, Sponsored Brands) è sempre più difficile emergere in categorie affollate.',
    'metrics'  => [
      ['label' => 'Commissione',         'value' => '8–15%'],
      ['label' => 'Traffico/mese (IT)',  'value' => '~35M'],
      ['label' => 'Piano Pro',           'value' => '39€/mese'],
      ['label' => 'Piano Base',          'value' => '0,99€/vendita'],
    ],
    'pros'     => [
      'Traffico enorme e clienti ad alta intenzione d\'acquisto',
      'FBA semplifica completamente la logistica',
      'Badge Prime aumenta conversioni in modo significativo',
      'Strumenti pubblicitari maturi e granulari',
      'Espansione facile su altri marketplace europei',
    ],
    'cons'     => [
      'Concorrenza brutale, spesso dai prodotti Amazon stessi',
      'Regole rigide e account sospesi senza preavviso',
      'Commissioni + FBA riducono i margini',
      'Il cliente è di Amazon, non tuo',
      'Advertising sempre più costoso per emergere',
    ],
    'tags'     => ['Ideale per volumi alti', 'Prodotti standard', 'Brand già noti', 'Logistica esternalizzata'],
  ],

  'ebay' => [
    'id'       => 'ebay',
    'name'     => 'eBay.it',
    'category' => 'generalisti',
    'domain'   => 'ebay.it',
    'type'     => 'Marketplace generalista · C2C & B2C',
    'badges'   => [
      ['text' => 'Storico dal 1999', 'color' => 'blue'],
    ],
    'desc'     => 'eBay è la piattaforma più longeva del panorama italiano e mondiale. Arrivata in Italia nel 1999, ha da sempre ospitato sia privati che professionisti. Nonostante il calo generale del traffico rispetto al decennio scorso, rimane un canale molto redditizio per <strong>specifiche nicchie</strong>: ricambi auto, elettronica usata, collezionismo, numismatica, abbigliamento vintage e prodotti difficili da trovare altrove.<br><br>eBay offre sia il formato ad <strong>asta</strong> che quello a <strong>prezzo fisso</strong>. Il formato asta è oggi usato meno, ma rimane efficace per oggetti rari o da collezione. I negozi eBay permettono commissioni ridotte per chi vende regolarmente e offrono strumenti di promozione interni.<br><br>La fee structure di eBay è articolata: si paga una percentuale sul prezzo finale (incluse le spese di spedizione), più eventuali fee di inserzione oltre il numero gratuito mensile. Dal 2022 eBay ha semplificato il modello tariffario in Italia allineandolo agli altri paesi europei.',
    'metrics'  => [
      ['label' => 'Commissione finale',     'value' => '~12.8%'],
      ['label' => 'Traffico/mese (IT)',     'value' => '~12M'],
      ['label' => 'Inserzioni gratis/mese', 'value' => '200'],
      ['label' => 'Negozio Base',           'value' => '~19€/mese'],
    ],
    'pros'     => [
      'Ottimo per nicchie: usato, collezionismo, ricambi',
      'Zero costi di iscrizione per iniziare',
      'Formato asta utile per oggetti rari',
      'Buyer protection aumenta la fiducia degli acquirenti',
      'Accesso ai mercati internazionali eBay',
    ],
    'cons'     => [
      'Traffico in calo per prodotti nuovi generalisti',
      'Alta percentuale di acquirenti price-sensitive',
      'Fee calcolata anche sulle spese di spedizione',
      'Risoluzione dispute spesso a favore dell\'acquirente',
      'Meno adatto a brand e prodotti premium',
    ],
    'tags'     => ['Usato & vintage', 'Collezionismo', 'Ricambi auto', 'Elettronica'],
  ],

  'subito' => [
    'id'       => 'subito',
    'name'     => 'Subito.it',
    'category' => 'generalisti',
    'domain'   => 'subito.it',
    'type'     => 'Annunci classificati · C2C & B2C · Locale',
    'badges'   => [
      ['text' => 'N.1 annunci IT', 'color' => 'green'],
    ],
    'desc'     => 'Nata nel 2008 come successore di Kijiji, Subito.it è la piattaforma di annunci numero uno in Italia per traffico e penetrazione. Forte su usato locale, auto, immobili ed elettronica, funziona su logica geografica: chi cerca, filtra per città o regione, e questo la rende complementare ai marketplace nazionali.<br><br>Per i <strong>privati</strong> è gratuita nella maggior parte delle categorie. Per i <strong>professionisti</strong> (dealer auto, agenzie immobiliari, rivenditori) esistono piani a pagamento con inserzioni illimitate, visibilità premium e strumenti di gestione. Le categorie più forti sono: <strong>auto e moto</strong>, <strong>immobiliare</strong>, <strong>elettronica</strong>, <strong>arredamento</strong> e <strong>abbigliamento</strong>.<br><br>Subito non gestisce i pagamenti: le transazioni avvengono direttamente tra acquirente e venditore. Le "Spedizioni Subito" offrono protezione per entrambe le parti, ma l\'utilizzo rimane parziale - molti scambi avvengono ancora in contanti di persona.',
    'metrics'  => [
      ['label' => 'Commissione',       'value' => '0% (privati)'],
      ['label' => 'Traffico/mese (IT)', 'value' => '~18M'],
      ['label' => 'Annunci gratis',    'value' => 'Sì (limiti/cat.)'],
      ['label' => 'Piano Pro Auto',    'value' => 'Da 49€/mese'],
    ],
    'pros'     => [
      'Traffico altissimo, soprattutto per usato locale',
      'Gratuito per la maggior parte dei casi',
      'Ideale per vendite locali senza spedizione',
      'Forte per auto, immobili ed elettronica',
    ],
    'cons'     => [
      'Nessuna protezione nativa su pagamenti',
      'Alto rischio truffe senza spedizioni protette',
      'Non adatto alla vendita di prodotti nuovi in modo scalabile',
      'Acquirenti molto price-sensitive',
    ],
    'tags'     => ['Usato locale', 'Auto & Moto', 'Immobiliare', 'Svuota casa'],
  ],

  'eprice' => [
    'id'       => 'eprice',
    'name'     => 'ePrice',
    'category' => 'generalisti',
    'domain'   => 'eprice.it',
    'type'     => 'Marketplace verticale · Elettronica & Tecnologia',
    'badges'   => [
      ['text' => 'Tech & Elettronica', 'color' => 'blue'],
    ],
    'desc'     => 'ePrice nasce nel 1999 come e-commerce di elettronica e nel tempo ha aperto la sezione marketplace a venditori terzi. Rimane uno dei pochi player italiani indipendenti nel tech, con un pubblico già orientato all\'acquisto online di informatica, smartphone, TV e audio, piccoli e grandi elettrodomestici.<br><br>L\'accesso è su richiesta: servono partita IVA e rispetto degli standard qualitativi della piattaforma. Non è un canale per prodotti generalisti - funziona solo per chi vende tech.<br><br>Il confronto con Amazon è diretto: ePrice ha meno traffico, ma anche meno concorrenza. Su alcune referenze tech i margini sono migliori proprio perché si compete con meno seller. Da trattare come canale complementare, non primario.',
    'metrics'  => [
      ['label' => 'Commissione',        'value' => '5–12%'],
      ['label' => 'Traffico/mese (IT)', 'value' => '~2M'],
      ['label' => 'Accesso',            'value' => 'Su richiesta'],
    ],
    'pros'     => [
      'Piattaforma italiana con focus locale',
      'Meno concorrenza rispetto ad Amazon',
      'Pubblico già orientato all\'acquisto tech',
    ],
    'cons'     => [
      'Traffico nettamente inferiore ai grandi marketplace',
      'Solo categorie tech/elettronica',
      'Strumenti di gestione meno avanzati',
    ],
    'tags'     => ['Elettronica', 'Informatica', 'Elettrodomestici'],
  ],

  // ----- VERTICALI -----

  'etsy' => [
    'id'       => 'etsy',
    'name'     => 'Etsy',
    'category' => 'verticali',
    'domain'   => 'etsy.com',
    'type'     => 'Marketplace verticale · Handmade, Vintage & Creatività',
    'badges'   => [
      ['text' => 'Handmade & Creativi', 'color' => 'purple'],
    ],
    'desc'     => 'Etsy è la piattaforma globale per artigianato, vintage e prodotti creativi: 90 milioni di acquirenti attivi, base italiana in crescita. Chi compra su Etsy cerca qualcosa di specifico e unico - non il prezzo più basso. Questo cambia completamente le dinamiche competitive rispetto ai marketplace generalisti.<br><br>Le categorie più forti: gioielli artigianali, stampe e illustrazioni digitali, abbigliamento handmade e personalizzato, decorazioni casa, candele, ceramiche, prodotti vintage (almeno 20 anni di età) e forniture per creativi. I prodotti industriali non sono ammessi, ma il print-on-demand tramite partner come Printful o Printify è consentito.<br><br>Etsy Ads consente di sponsorizzare i propri listing internamente. Per i venditori italiani è disponibile anche un programma spedizioni integrato con corrieri convenzionati.',
    'metrics'  => [
      ['label' => 'Fee inserzione',       'value' => '0,20$/listing'],
      ['label' => 'Commissione transaz.', 'value' => '6.5%'],
      ['label' => 'Fee pagamento',        'value' => '3% + 0,25€'],
      ['label' => 'Accesso',              'value' => 'Libero'],
    ],
    'pros'     => [
      'Clienti con alta intenzione d\'acquisto per prodotti unici',
      'Accesso immediato senza approvazione',
      'Forte brand awareness e fiducia nella piattaforma',
      'Ottimo per print-on-demand e digitali',
      'Mercato internazionale accessibile dal giorno uno',
    ],
    'cons'     => [
      'Saturazione crescente nelle categorie più popolari',
      'Fee multiple si accumulano (inserzione + transaz. + pagamento)',
      'Algoritmo di ricerca cambiato più volte, visibilità instabile',
      'Non adatto a prodotti industriali o commodity',
    ],
    'tags'     => ['Artigianato', 'Gioielli', 'Stampe digitali', 'Print-on-demand', 'Vintage'],
  ],

  'manomano' => [
    'id'       => 'manomano',
    'name'     => 'ManoMano',
    'category' => 'verticali',
    'domain'   => 'manomano.com',
    'type'     => 'Marketplace verticale · Bricolage, Giardinaggio & Casa',
    'badges'   => [
      ['text' => 'In forte crescita', 'color' => 'green'],
    ],
    'desc'     => 'ManoMano copre bricolage, fai-da-te, giardinaggio e arredamento su sei mercati europei, Italia inclusa dal 2016. La pandemia ha accelerato la crescita del settore DIY e ManoMano ne ha beneficiato in modo diretto: oggi è il canale verticale di riferimento per chi vende prodotti per la casa in Europa.<br><br>Serve sia il <strong>segmento B2C</strong> (appassionati DIY, proprietari di casa) che il <strong>segmento PRO</strong> (professionisti edili e impiantisti). Categorie principali: utensili manuali ed elettrici, materiali edili, impianti idraulici ed elettrici, arredo giardino, illuminazione, vernici e finiture.<br><br>L\'onboarding richiede EAN su tutti i prodotti, SLA di spedizione stringenti e approvazione. Lo scontrino medio è tra i più alti dei marketplace verticali - un ordine tipico vale 3-4 volte quello di un marketplace generalista - il che rende le commissioni al 12-15% più digeribili.',
    'metrics'  => [
      ['label' => 'Commissione',        'value' => '12–15%'],
      ['label' => 'Traffico/mese (IT)', 'value' => '~4M'],
      ['label' => 'Onboarding',         'value' => 'Con approvazione'],
      ['label' => 'Scontrino medio',    'value' => 'Alto'],
    ],
    'pros'     => [
      'Nicchia specifica con acquirenti qualificati',
      'Scontrino medio elevato migliora i margini assoluti',
      'Crescita del mercato DIY post-pandemia ancora attiva',
      'Segmento PRO con volumi interessanti',
      'Meno concorrenza rispetto ai generalisti',
    ],
    'cons'     => [
      'Commissioni tra le più alte dei verticali',
      'EAN obbligatorio per tutti i prodotti',
      'SLA di spedizione rigidi, penali per ritardi',
      'Processo di onboarding lungo',
    ],
    'tags'     => ['Bricolage', 'Giardinaggio', 'Arredo esterno', 'Utensili'],
  ],

  'vinted' => [
    'id'       => 'vinted',
    'name'     => 'Vinted',
    'category' => 'verticali',
    'domain'   => 'vinted.it',
    'type'     => 'Marketplace verticale · Abbigliamento usato · C2C',
    'badges'   => [
      ['text' => 'Second-hand fashion', 'color' => 'purple'],
    ],
    'desc'     => 'Vinted è l\'app di moda second-hand più scaricata in Italia, con una base utenti concentrata sotto i 35 anni. Il suo meccanismo è semplice: <strong>il venditore non paga commissioni</strong>. Le fee (circa 5% + 0,70€) le paga l\'acquirente come "protezione acquirente". Risultato: zero barriere all\'ingresso per chi vende, ma margini difficili da pianificare per chi vuole farne un business strutturato.<br><br>La piattaforma è pensata per il <strong>C2C privato</strong>. Chi vende in modo professionale deve dichiararlo esplicitamente - obbligo legale dal 2023 con il Digital Services Act - e rispettare norme specifiche. Le categorie più attive: abbigliamento donna, bambino e luxury second-hand.<br><br>Su Vinted i prezzi sono tendenzialmente bassi e gli acquirenti sono abituati a trattare. Non è il canale giusto per costruire un\'attività scalabile, ma per smaltire stock o iniziare a vendere usato senza costi fissi non ha rivali.',
    'metrics'  => [
      ['label' => 'Commissione venditore', 'value' => '0%'],
      ['label' => 'Fee acquirente',        'value' => '~5% + 0,70€'],
      ['label' => 'Traffico/mese (IT)',    'value' => '~6M'],
      ['label' => 'Accesso',              'value' => 'Libero'],
    ],
    'pros'     => [
      'Zero commissioni per il venditore',
      'Enorme base utenti giovani e attivi',
      'Spedizioni integrate con etichette prepagate',
      'Forte per abbigliamento donna e bambino',
    ],
    'cons'     => [
      'Solo abbigliamento e accessori',
      'Principalmente C2C, difficile scalare come business',
      'Prezzi tendenzialmente molto bassi',
      'Acquirenti abituati a fortissimi sconti',
    ],
    'tags'     => ['Abbigliamento usato', 'Luxury second-hand', 'Bambino', 'C2C'],
  ],

  'mediaworld' => [
    'id'       => 'mediaworld',
    'name'     => 'MediaWorld Marketplace',
    'category' => 'verticali',
    'domain'   => 'mediaworld.it',
    'type'     => 'Marketplace verticale · Elettronica & Tecnologia',
    'badges'   => [
      ['text' => 'Retail ibrido', 'color' => 'blue'],
    ],
    'desc'     => 'MediaWorld ha aperto un marketplace sul proprio e-commerce, permettendo a venditori terzi di listare prodotti accanto all\'inventario proprio. È un canale interessante perché sfrutta il brand riconosciuto di MediaWorld e la fiducia del consumatore italiano per l\'acquisto di elettronica.<br><br>L\'accesso è limitato a seller con partita IVA, catalogo strutturato e standard di spedizione elevati. Le categorie ammesse rispecchiano il posizionamento del brand: smartphone, TV, audio, informatica, gaming e piccoli elettrodomestici. È una piattaforma complementare, non primaria, ma efficace per brand che vogliono associarsi a un retailer di fiducia.',
    'metrics'  => [
      ['label' => 'Commissione',        'value' => '8–12%'],
      ['label' => 'Accesso',            'value' => 'Su invito/richiesta'],
      ['label' => 'Traffico/mese (IT)', 'value' => '~5M'],
    ],
    'pros'     => [
      'Brand riconosciuto aumenta la fiducia del cliente',
      'Acquirenti già motivati all\'acquisto tech',
      'Meno concorrenza rispetto ad Amazon nella stessa nicchia',
    ],
    'cons'     => [
      'Accesso selettivo, non immediato',
      'Solo categorie tech/elettronica',
      'Strumenti seller ancora in sviluppo',
    ],
    'tags'     => ['Elettronica', 'Gaming', 'Informatica'],
  ],

  // ----- FASHION -----

  'zalando' => [
    'id'       => 'zalando',
    'name'     => 'Zalando',
    'category' => 'fashion',
    'domain'   => 'zalando.it',
    'type'     => 'Marketplace fashion · B2C · Solo brand selezionati',
    'badges'   => [
      ['text' => 'Leader europeo fashion', 'color' => 'purple'],
    ],
    'desc'     => 'Con 50 milioni di clienti attivi in 25 paesi, Zalando è la vetrina fashion più grande d\'Europa. In Italia ha un pubblico consolidato e un tasso di acquisto ripetuto alto. Ma non è un marketplace aperto: si entra solo tramite il <strong>Zalando Partner Program (ZPP)</strong>, su invito o candidatura approvata.<br><br>Due modelli possibili: <strong>Wholesale</strong> (Zalando acquista lo stock e gestisce tutto) oppure <strong>Partner Program</strong> (il brand lista i prodotti, gestisce la logistica in proprio o tramite Zalando Fulfillment Solutions). Per candidarsi servono: brand registrato, collezione stagionale strutturata, capacità logistica adeguata e conformità agli standard fotografici - che sono molto rigidi.<br><br>Il lato critico: Zalando può restituire l\'invenduto e le condizioni commerciali penalizzano i brand piccoli. Le commissioni variano dal 5 al 25% a seconda della categoria. Ha senso per chi ha già un brand strutturato e vuole distribuirlo a scala europea, meno per chi sta ancora costruendo il prodotto.',
    'metrics'  => [
      ['label' => 'Commissione',        'value' => '5–25%'],
      ['label' => 'Clienti attivi EU',  'value' => '50M+'],
      ['label' => 'Accesso',            'value' => 'Su invito/approvazione'],
      ['label' => 'Traffico/mese (IT)', 'value' => '~8M'],
    ],
    'pros'     => [
      'La più grande vetrina fashion d\'Europa',
      'Clienti con alta propensione all\'acquisto fashion',
      'Visibilità cross-country su 25 mercati',
      'Zalando Fulfillment semplifica la logistica',
    ],
    'cons'     => [
      'Accesso molto selettivo',
      'Standard fotografici e dati prodotto rigidissimi',
      'Alta percentuale di resi (fino al 50% nel fashion)',
      'Condizioni sfavorevoli per brand piccoli',
    ],
    'tags'     => ['Brand fashion', 'Abbigliamento', 'Scarpe', 'Accessori'],
  ],

  'farfetch' => [
    'id'       => 'farfetch',
    'name'     => 'Farfetch',
    'category' => 'fashion',
    'domain'   => 'farfetch.com',
    'type'     => 'Marketplace luxury · Boutique indipendenti & Brand',
    'badges'   => [
      ['text' => 'Luxury fashion', 'color' => 'gray'],
    ],
    'desc'     => 'Farfetch è la piattaforma globale per la moda di lusso, con un modello unico: connette boutique indipendenti e brand premium con clienti in tutto il mondo. Per un negozio fisico di abbigliamento luxury italiano, Farfetch rappresenta uno dei pochi canali per raggiungere clienti internazionali senza costruire un e-commerce proprio.<br><br>Le commissioni sono alte (fino al 30%), ma il valore medio degli ordini è altrettanto elevato. L\'onboarding richiede un catalogo fotografato secondo gli standard di Farfetch e un processo di approvazione. Farfetch gestisce il checkout e la relazione con il cliente; la boutique si occupa del picking e della spedizione.',
    'metrics'  => [
      ['label' => 'Commissione',    'value' => '~25–30%'],
      ['label' => 'Scontrino medio', 'value' => 'Molto alto'],
      ['label' => 'Mercato',        'value' => 'Globale'],
    ],
    'pros'     => [
      'Accesso al mercato globale luxury',
      'Scontrino medio molto elevato',
      'Ideale per boutique italiane con prodotti premium',
    ],
    'cons'     => [
      'Commissioni elevatissime',
      'Standard fotografici molto esigenti',
      'Concorrenza con grandi brand diretti',
    ],
    'tags'     => ['Luxury', 'Boutique', 'Designer'],
  ],

  'yoox' => [
    'id'       => 'yoox',
    'name'     => 'YOOX',
    'category' => 'fashion',
    'domain'   => 'yoox.com',
    'type'     => 'Fashion outlet online · Invenduto & past season',
    'badges'   => [
      ['text' => 'Italiano', 'color' => 'blue'],
    ],
    'desc'     => 'YOOX è una piattaforma italiana (parte del gruppo YNAP insieme a Net-A-Porter) specializzata in abbigliamento, scarpe e accessori di fine stagione e invenduto. È il canale ideale per smaltire stock rimasto da stagioni precedenti senza svalutare il brand sul proprio e-commerce.<br><br>Il modello di YOOX prevede principalmente l\'acquisto diretto dello stock (non consignment), il che riduce il rischio per il venditore ma elimina la flessibilità. Collabora con brand di fascia media e alta. Non è aperto a tutti: richiede un processo di valutazione del brand e del prodotto.',
    'metrics'  => [
      ['label' => 'Modello',  'value' => 'Acquisto stock'],
      ['label' => 'Segmento', 'value' => 'Mid-premium'],
      ['label' => 'Accesso',  'value' => 'Selettivo'],
    ],
    'pros'     => [
      'Ottimo per smaltire invenduto senza svalutare il brand',
      'Acquisto dello stock = zero rischio giacenza',
      'Brand riconosciuto e clienti fashion qualificati',
    ],
    'cons'     => [
      'Prezzi di acquisto spesso bassi',
      'Accesso selettivo, non per tutti i brand',
      'Nessun controllo sulla presentazione del prodotto',
    ],
    'tags'     => ['Fine stagione', 'Invenduto', 'Fashion outlet'],
  ],

  'depop' => [
    'id'       => 'depop',
    'name'     => 'Depop',
    'category' => 'fashion',
    'domain'   => 'depop.com',
    'type'     => 'Social marketplace · Secondhand · B2C / C2C',
    'badges'   => [
      ['text' => 'Gen Z & Vintage', 'color' => 'green'],
    ],
    'desc'     => 'Depop funziona come un incrocio tra Instagram e un mercatino vintage: ogni seller ha un profilo, pubblica foto curate e costruisce una community di follower. Il focus è su abbigliamento vintage, streetwear, pezzi unici e second-hand di marca. Non si vende a catalogo - si vende un\'estetica.<br><br>Acquistato da Etsy nel 2021, conta 35 milioni di utenti globali con forte concentrazione in UK, USA e Italia, tutti under 30. Funziona per chi ha pezzi selezionati e curati - vintage anni \'80–\'00, capsule collection, capi di nicchia. Non funziona per chi vende in modo seriale o vuole scalare con un catalogo ampio.',
    'metrics'  => [
      ['label' => 'Commissione', 'value' => '10% + fees'],
      ['label' => 'Focus',       'value' => 'Vintage / Streetwear'],
      ['label' => 'Target',      'value' => '18–30 anni'],
    ],
    'pros'     => [
      'Community attiva e molto coinvolta',
      'Perfetto per pezzi unici e vintage',
      'UX social: follower, like, DM',
      'Internazionale, forte in UK e USA',
    ],
    'cons'     => [
      'Non adatto a prodotti seriali o a catalogo',
      'Richiede foto curate e personal branding',
      'Margini bassi su pezzi a basso prezzo',
    ],
    'tags'     => ['Vintage', 'Secondhand', 'Gen Z', 'Streetwear'],
  ],

  'vestiaire' => [
    'id'       => 'vestiaire',
    'name'     => 'Vestiaire Collective',
    'category' => 'fashion',
    'domain'   => 'vestiairecollective.com',
    'type'     => 'Luxury resale · Autenticazione · C2C / B2C',
    'badges'   => [
      ['text' => 'Luxury Secondhand', 'color' => 'purple'],
    ],
    'desc'     => 'Vestiaire Collective è il canale europeo per il luxury second-hand: borse Chanel, scarpe Gucci, orologi di pregio, cappotti Burberry. Ciò che lo distingue dalla concorrenza è l\'autenticazione fisica degli articoli prima della consegna - ogni pezzo passa per esperti e fotografi prima di arrivare all\'acquirente. Questo riduce le frodi e consente prezzi più alti.<br><br>23 milioni di utenti globali, tutti orientati all\'acquisto di fascia alta. Solo brand premium sono accettati: niente fast fashion. È il canale giusto per chi rivende capi di lusso usati o gestisce un archivio di pezzi premium e vuole prezzi adeguati al valore reale.',
    'metrics'  => [
      ['label' => 'Commissione',   'value' => '12–25%'],
      ['label' => 'Focus',         'value' => 'Luxury / Premium'],
      ['label' => 'Autenticazione', 'value' => 'Sì, fisica'],
    ],
    'pros'     => [
      'Leader europeo nel luxury resale',
      'Autenticazione aumenta fiducia e prezzi',
      'Community di acquirenti alto spendenti',
      'Valutazione guidata per ogni articolo',
    ],
    'cons'     => [
      'Solo brand luxury: nessun fast fashion',
      'Commissioni elevate',
      'Tempi lunghi per autenticazione e spedizione',
    ],
    'tags'     => ['Luxury', 'Resale', 'Autenticazione', 'Premium'],
  ],

  // ----- COMPARATORI -----

  'google-shopping' => [
    'id'       => 'google-shopping',
    'name'     => 'Google Shopping',
    'category' => 'comparatori',
    'domain'   => 'google.com',
    'type'     => 'Comparatore · CPC · Advertising',
    'badges'   => [
      ['text' => 'Indispensabile', 'color' => 'blue'],
    ],
    'desc'     => 'Google Shopping non è un marketplace ma il canale pubblicitario più potente per l\'e-commerce. Tramite Google Merchant Center puoi caricare il tuo catalogo prodotti e mostrare annunci con immagine, prezzo e nome negozio direttamente nei risultati di ricerca Google e nella tab Shopping.<br><br>Funziona con un modello <strong>CPC (costo per clic)</strong> gestito tramite Google Ads. Dal 2020 esiste anche la possibilità di listare prodotti gratuitamente nella sezione Shopping (Free Listings), anche se le inserzioni a pagamento ottengono notevolmente più visibilità.<br><br>Per partire serve: un account Google Merchant Center, un feed prodotti in formato XML/CSV con dati strutturati (GTIN, prezzo, disponibilità), e un account Google Ads per le campagne a pagamento. La qualità del feed è determinante per la visibilità.',
    'metrics'  => [
      ['label' => 'Modello',            'value' => 'CPC'],
      ['label' => 'Free Listings',      'value' => 'Sì'],
      ['label' => 'CPC medio e-commerce', 'value' => '0,20–1,50€'],
      ['label' => 'GTIN richiesto',     'value' => 'Sì (spesso)'],
    ],
    'pros'     => [
      'Traffico di altissima qualità (utente cerca attivamente)',
      'Free listings per visibilità organica gratuita',
      'Controllo totale su budget e targeting',
      'Integrazione con tutti i principali CMS e-commerce',
    ],
    'cons'     => [
      'Richiede budget pubblicitario continuo per risultati significativi',
      'Feed di qualità complesso da mantenere',
      'Concorrenza alta su CPC in categorie popolari',
    ],
    'tags'     => ['Traffico qualificato', 'Tutti i prodotti', 'CPC'],
  ],

  'trovaprezzi' => [
    'id'       => 'trovaprezzi',
    'name'     => 'Trovaprezzi.it',
    'category' => 'comparatori',
    'domain'   => 'trovaprezzi.it',
    'type'     => 'Comparatore prezzi · CPC · Italiano',
    'badges'   => [
      ['text' => 'Italiano', 'color' => 'green'],
    ],
    'desc'     => 'Trovaprezzi è il comparatore prezzi italiano più usato: milioni di utenti al mese che cercano la migliore offerta su un prodotto specifico. Funziona bene su elettronica, informatica, elettrodomestici e qualsiasi prodotto con EAN, dove il confronto di prezzo è immediato e l\'utente è già in fase di decisione d\'acquisto.<br><br>Per listare serve registrarsi come merchant, inviare un feed prodotti (CSV o XML) e impostare un budget CPC. Il costo per clic varia per categoria e competitività - in genere inferiore a Google Shopping. Ha senso come canale complementare per chi ha prezzi competitivi; non serve a chi non può o non vuole competere sul prezzo.',
    'metrics'  => [
      ['label' => 'Modello',            'value' => 'CPC'],
      ['label' => 'Traffico/mese (IT)', 'value' => '~4M'],
      ['label' => 'CPC medio',          'value' => '0,10–0,80€'],
    ],
    'pros'     => [
      'Piattaforma italiana, utenti già in fase di acquisto',
      'CPC più basso rispetto a Google Shopping',
      'Efficace per prodotti con buon prezzo',
    ],
    'cons'     => [
      'Solo per chi ha prezzi competitivi',
      'Traffico inferiore a Google Shopping',
      'Meno efficace per prodotti di nicchia o senza EAN',
    ],
    'tags'     => ['Elettronica', 'Prezzi competitivi', 'CPC'],
  ],

  'kelkoo' => [
    'id'       => 'kelkoo',
    'name'     => 'Kelkoo',
    'category' => 'comparatori',
    'domain'   => 'kelkoo.it',
    'type'     => 'Comparatore prezzi · CPC · Europeo',
    'badges'   => [
      ['text' => 'Europeo', 'color' => 'gray'],
    ],
    'desc'     => 'Kelkoo è un comparatore europeo presente in Italia con traffico più limitato rispetto a Trovaprezzi, ma utile per chi vuole diversificare i canali CPC. Funziona in modo analogo: feed prodotti + budget CPC. È usato principalmente da merchant che vogliono coprire più comparatori contemporaneamente tramite tool di feed management.',
    'metrics'  => [
      ['label' => 'Modello',   'value' => 'CPC'],
      ['label' => 'Copertura', 'value' => 'Europa'],
    ],
    'pros'     => [
      'Copertura europea utile per espansione',
      'CPC spesso inferiore a canali più noti',
    ],
    'cons'     => [
      'Traffico italiano ridotto',
      'Da usare come canale complementare, non primario',
    ],
    'tags'     => ['CPC', 'Multichannel'],
  ],

  // ----- SOCIAL COMMERCE -----

  'tiktok-shop' => [
    'id'       => 'tiktok-shop',
    'name'     => 'TikTok Shop',
    'category' => 'social',
    'domain'   => 'tiktok.com',
    'type'     => 'Social Commerce · Live shopping · Gen Z',
    'badges'   => [
      ['text' => 'Emergente in Italia', 'color' => 'orange'],
    ],
    'desc'     => 'TikTok Shop porta l\'e-commerce dentro l\'app: video, live e schede prodotto acquistabili senza uscire da TikTok. In Italia è operativo dal 2023 e ancora in fase di adozione, ma la crescita è rapida - soprattutto su beauty, moda, lifestyle e gadget.<br><br>La logica è opposta ai marketplace tradizionali: l\'utente non cerca il prodotto, lo scopre guardando un contenuto. Questo apre a conversioni su prodotti che non avrebbero mai intercettato traffico organico. Per funzionare richiede produzione video continua e una presenza attiva sulla piattaforma. Il programma <strong>TikTok Affiliate</strong> consente ai creator di promuovere i tuoi prodotti in cambio di commissione - un canale di acquisizione interessante senza budget pubblicitario diretto.',
    'metrics'  => [
      ['label' => 'Commissione',   'value' => '~5–8%'],
      ['label' => 'Accesso IT',    'value' => 'Aperto (2023)'],
      ['label' => 'Utenti TikTok IT', 'value' => '~13M'],
    ],
    'pros'     => [
      'Discovery commerce: raggiungi chi non ti stava cercando',
      'Enorme base utenti giovani',
      'Affiliate program per leva creator',
      'Commissioni ancora basse nella fase di lancio',
    ],
    'cons'     => [
      'Richiede produzione di contenuti video continua',
      'Ancora in fase di adozione in Italia',
      'Non adatto a tutti i prodotti (meglio visual e lifestyle)',
      'Infrastruttura ancora in sviluppo',
    ],
    'tags'     => ['Beauty', 'Moda', 'Lifestyle', 'Gadget'],
  ],

  'instagram-shop' => [
    'id'       => 'instagram-shop',
    'name'     => 'Instagram & Facebook Shop',
    'category' => 'social',
    'domain'   => 'instagram.com',
    'type'     => 'Social Commerce · Visual · Meta Ads integration',
    'badges'   => [
      ['text' => 'Meta Commerce', 'color' => 'purple'],
    ],
    'desc'     => 'Instagram e Facebook Shop permettono di creare una vetrina prodotti integrata nei profili social. In Italia il checkout nativo non è disponibile (solo negli USA), quindi in pratica funziona come vetrina con redirect al tuo e-commerce - non come marketplace autonomo.<br><br>Il vero valore è l\'integrazione con <strong>Meta Ads</strong>: collegando il catalogo a Facebook Business Manager si attivano campagne Dynamic Product Ads che mostrano i prodotti giusti all\'utente giusto in automatico. Per chi fa retargeting su Meta, avere il catalogo collegato è praticamente obbligatorio - la differenza in performance è netta.',
    'metrics'  => [
      ['label' => 'Costo piattaforma',  'value' => 'Gratuito'],
      ['label' => 'Checkout IT',        'value' => 'Non disponibile'],
      ['label' => 'Utenti Instagram IT', 'value' => '~26M'],
    ],
    'pros'     => [
      'Integrazione nativa con Meta Ads per retargeting',
      'Enorme base utenti italiana',
      'Ottimo per brand con forte presenza social',
    ],
    'cons'     => [
      'Checkout nativo non disponibile in Italia',
      'Funziona come vetrina, non come marketplace autonomo',
      'Richiede investimento in Meta Ads per visibilità significativa',
    ],
    'tags'     => ['Visual brand', 'Meta Ads', 'Retargeting'],
  ],

  // ----- OUTLET & FLASH SALE -----

  'veepee' => [
    'id'       => 'veepee',
    'name'     => 'Veepee (ex Vente-privée)',
    'category' => 'outlet',
    'domain'   => 'veepee.it',
    'type'     => 'Vendite privé · Flash sale · Solo stock definito',
    'badges'   => [
      ['text' => 'Flash Sale', 'color' => 'orange'],
    ],
    'desc'     => 'Già Vente-privée fino al rebranding del 2019, Veepee è la piattaforma europea delle vendite-evento riservate agli iscritti: 70 milioni di soci in Europa. Il meccanismo non cambia: il brand propone uno stock definito a prezzo scontato, la vendita dura 3–5 giorni, visibile solo a chi è registrato.<br><br>Veepee gestisce tutto - comunicazione, immagini, customer service - e paga il brand entro 30–60 giorni dalla chiusura dell\'evento. È una soluzione concreta per smaltire invenduto o fine stagione senza svalutare il prezzo sul proprio canale diretto. Lo svantaggio principale: gli sconti richiesti sono spesso aggressivi (30–70%) e non si ha controllo sulla presentazione creativa.',
    'metrics'  => [
      ['label' => 'Modello',  'value' => 'Consignment/evento'],
      ['label' => 'Iscritti EU', 'value' => '70M+'],
      ['label' => 'Accesso',  'value' => 'Su proposta brand'],
    ],
    'pros'     => [
      'Smaltimento rapido di stock definiti',
      'Veepee gestisce tutto: comunicazione, foto, CS',
      'Contesto "vendita esclusiva" protegge l\'immagine brand',
      'Accesso a base iscritti enorme',
    ],
    'cons'     => [
      'Sconti richiesti spesso aggressivi (30–70%)',
      'Pagamento dilazionato (30–60 gg)',
      'Nessun controllo sulla presentazione creativa',
      'Solo per stock definiti, non catalogo standard',
    ],
    'tags'     => ['Fine stagione', 'Flash sale', 'Fashion & Lifestyle'],
  ],

  'privalia' => [
    'id'       => 'privalia',
    'name'     => 'Privalia',
    'category' => 'outlet',
    'domain'   => 'privalia.com',
    'type'     => 'Fashion outlet · Vendite evento · B2C',
    'badges'   => [
      ['text' => 'Outlet online', 'color' => 'blue'],
    ],
    'desc'     => 'Privalia opera con lo stesso modello di Veepee - vendite evento a prezzi scontati, visibili solo agli iscritti - con focus su abbigliamento, scarpe e accessori di brand noti. Presente in Italia, Spagna e Messico, è stata acquisita da Veepee nel 2019 ma mantiene operatività parzialmente autonoma in alcuni mercati.<br><br>In Italia ha perso visibilità rispetto al picco degli anni 2010–2016, ma resta un canale utile per brand fashion di fascia media che vogliono smaltire stock senza bruciare il prezzo sul canale diretto.',
    'metrics'  => [
      ['label' => 'Modello',  'value' => 'Vendite evento'],
      ['label' => 'Focus',    'value' => 'Fashion mid-range'],
      ['label' => 'Accesso',  'value' => 'Su proposta brand'],
    ],
    'pros'     => [
      'Smaltimento stock fashion in modo controllato',
      'Base clienti italiana consolidata',
    ],
    'cons'     => [
      'Visibilità in calo rispetto al passato',
      'Sconti richiesti molto aggressivi',
    ],
    'tags'     => ['Fashion', 'Outlet', 'Stock invenduto'],
  ],

  // ----- RICONDIZIONATO -----

  'backmarket' => [
    'id'       => 'backmarket',
    'name'     => 'Back Market',
    'category' => 'ricondizionato',
    'domain'   => 'backmarket.it',
    'type'     => 'Marketplace ricondizionato · B2C · Elettronica',
    'badges'   => [
      ['text' => 'Ricondizionato', 'color' => 'green'],
    ],
    'desc'     => 'Back Market è il marketplace europeo per l\'elettronica ricondizionata: smartphone, tablet, laptop, console, cuffie. Attivo in oltre 16 paesi, ha costruito la sua reputazione su garanzie chiare e prezzi sensibilmente inferiori al nuovo - in media il 30-70% in meno rispetto al listino.<br><br>L\'accesso non è automatico: ogni venditore deve superare una verifica e ogni prodotto deve passare test tecnici standardizzati con valutazione cosmetica certificata. La garanzia minima di 12 mesi è obbligatoria su tutti gli articoli. È il canale giusto per riparatori, ricondizionatori professionali e chi gestisce stock di resi o usato certificato.',
    'metrics'  => [
      ['label' => 'Commissione', 'value' => '~12%'],
      ['label' => 'Focus',       'value' => 'Elettronica ricondizionata'],
      ['label' => 'Accesso',     'value' => 'Su approvazione'],
    ],
    'pros'     => [
      'Leader europeo nel ricondizionato tech',
      'Pubblico con alta intenzione d\'acquisto',
      'Brand forte e reputazione costruita sulla fiducia',
      'Garanzia e protezione acquirente integrata',
    ],
    'cons'     => [
      'Solo elettronica: nessun altro settore',
      'Standard qualitativi molto rigidi',
      'Accesso non immediato, richiede verifica',
      'Competizione tra seller sulla stessa referenza',
    ],
    'tags'     => ['Ricondizionato', 'Smartphone', 'Laptop', 'Sostenibilità'],
  ],

  // ----- INTERNAZIONALI & SPECIALIZZATI -----

  'allegro' => [
    'id'       => 'allegro',
    'name'     => 'Allegro',
    'category' => 'internazionali',
    'domain'   => 'allegro.pl',
    'type'     => 'Marketplace generalista · CEE · B2C / C2C',
    'badges'   => [
      ['text' => 'Polonia & CEE', 'color' => 'blue'],
    ],
    'desc'     => 'Allegro domina il mercato polacco con 135 milioni di offerte attive e 22 milioni di acquirenti mensili - numeri paragonabili ad Amazon in un paese da 38 milioni di abitanti. Per i seller italiani è la porta d\'ingresso più diretta sull\'Europa Centrale e dell\'Est, mercati in crescita con meno concorrenza rispetto all\'ovest.<br><br>Dal 2021 è aperto a seller europei non polacchi tramite il programma Allegro Express, con spedizioni internazionali. Funziona bene su elettronica, moda, casa e prodotti Made in Italy - in Polonia l\'origine italiana è percepita come garanzia di qualità su molte categorie.',
    'metrics'  => [
      ['label' => 'Commissione', 'value' => '6–12%'],
      ['label' => 'Mercato',     'value' => 'Polonia / CEE'],
      ['label' => 'Utenti',      'value' => '22M mensili'],
    ],
    'pros'     => [
      'Monopolio di fatto sul mercato polacco',
      'CEE in forte crescita con meno competizione',
      'Commissioni inferiori ad Amazon',
      'Ottimo per Made in Italy',
    ],
    'cons'     => [
      'Richiede gestione in lingua polacca',
      'Logistica internazionale da strutturare',
      'Meno conosciuto dai seller italiani',
    ],
    'tags'     => ['Polonia', 'Europa Est', 'Internazionale', 'CEE'],
  ],

  'catawiki' => [
    'id'       => 'catawiki',
    'name'     => 'Catawiki',
    'category' => 'internazionali',
    'domain'   => 'catawiki.com',
    'type'     => 'Marketplace aste · Collezionismo · B2C / C2C',
    'badges'   => [
      ['text' => 'Aste Online', 'color' => 'purple'],
    ],
    'desc'     => 'Catawiki è la piattaforma europea di aste online per oggetti speciali e da collezione: arte, orologi, gioielli, fumetti, monete, vini pregiati, auto d\'epoca, merchandise raro. Attiva in oltre 60 paesi, organizza 75.000 aste all\'anno con acquirenti da tutto il mondo disposti a pagare prezzi di mercato reali.<br><br>Non è ad accesso libero: ogni venditore deve fare richiesta e ogni lotto passa attraverso una selezione editoriale curata da esperti per categoria. Questo filtro è anche il suo punto di forza - gli acquirenti si fidano perché sanno che i pezzi sono stati valutati. Il canale giusto per oggetti unici, collezioni, stock vintage o articoli difficili da prezzare su un marketplace standard.',
    'metrics'  => [
      ['label' => 'Commissione', 'value' => '12.5–20%'],
      ['label' => 'Modello',     'value' => 'Aste settimanali'],
      ['label' => 'Accesso',     'value' => 'Su selezione'],
    ],
    'pros'     => [
      'Leader europeo nelle aste di collezionismo',
      'Acquirenti internazionali, prezzi spesso alti',
      'Copertura editoriale e promozione inclusa',
      'Ottimo per pezzi unici difficili da prezzare',
    ],
    'cons'     => [
      'Non adatto a prodotti seriali',
      'Accesso selettivo con tempi di approvazione',
      'Prezzi finali non prevedibili (asta)',
    ],
    'tags'     => ['Aste', 'Collezionismo', 'Arte', 'Oggetti unici'],
  ],

  'leroymerlin' => [
    'id'       => 'leroymerlin',
    'name'     => 'Leroy Merlin Marketplace',
    'category' => 'internazionali',
    'domain'   => 'leroymerlin.it',
    'type'     => 'Marketplace verticale · Casa & Bricolage · B2C',
    'badges'   => [
      ['text' => 'Casa & DIY', 'color' => 'green'],
    ],
    'desc'     => 'Leroy Merlin ha aperto il suo marketplace in Italia permettendo a seller terzi di vendere sulla piattaforma del colosso francese del fai-da-te. È uno dei retailer fisici più grandi d\'Italia con oltre 50 punti vendita e un\'audience omnicanale di milioni di clienti che cercano materiali, utensili, arredamento e soluzioni per la casa.<br><br>Il marketplace è aperto a prodotti complementari alla loro offerta: decorazione, giardinaggio, ferramenta, illuminazione, cucina, bagno. L\'integrazione con il mondo fisico (click & collect, visibilità in-store) è un vantaggio difficile da trovare altrove. Ideale per brand e rivenditori del settore casa e DIY.',
    'metrics'  => [
      ['label' => 'Commissione', 'value' => '10–15%'],
      ['label' => 'Focus',       'value' => 'Casa / Bricolage / Garden'],
      ['label' => 'Canale',      'value' => 'Online + fisico'],
    ],
    'pros'     => [
      'Brand forte e fiducia consolidata in Italia',
      'Pubblico qualificato per casa e bricolage',
      'Omnicanalità: online + 50+ negozi fisici',
      'Meno competizione rispetto ad Amazon',
    ],
    'cons'     => [
      'Solo settore casa/DIY: niche specifica',
      'Strumenti seller ancora in sviluppo',
      'Accesso richiede approvazione',
    ],
    'tags'     => ['Casa', 'DIY', 'Giardinaggio', 'Ferramenta'],
  ],

  'unieuro' => [
    'id'       => 'unieuro',
    'name'     => 'Unieuro Marketplace',
    'category' => 'internazionali',
    'domain'   => 'unieuro.it',
    'type'     => 'Marketplace verticale · Elettronica · B2C',
    'badges'   => [
      ['text' => 'Elettronica Retail', 'color' => 'blue'],
    ],
    'desc'     => 'Unieuro è la più grande catena italiana di elettronica di consumo, con oltre 500 punti vendita in tutta Italia e un sito e-commerce molto frequentato. Il marketplace aperto a seller terzi consente di vendere prodotti tech, elettrodomestici, accessori e gaming sulla piattaforma di uno dei brand retail più riconosciuti nel paese.<br><br>Il vantaggio principale è la forte brand reputation italiana e la copertura capillare sul territorio. I clienti di Unieuro sono già orientati all\'acquisto tech e hanno alta fiducia nella piattaforma. È un\'alternativa interessante ad Amazon per chi vende in categorie elettronica, con meno competizione e maggiore visibilità su un pubblico nazionale.',
    'metrics'  => [
      ['label' => 'Commissione',   'value' => '~10–14%'],
      ['label' => 'Focus',         'value' => 'Elettronica / Elettrodomestici'],
      ['label' => 'Negozi fisici', 'value' => '500+ in Italia'],
    ],
    'pros'     => [
      'Brand italiano molto riconosciuto',
      'Clienti con alta intenzione d\'acquisto tech',
      'Omnicanalità con forte radicamento locale',
      'Meno sellers rispetto ad Amazon',
    ],
    'cons'     => [
      'Traffico inferiore rispetto ad Amazon.it',
      'Solo elettronica e categorie correlate',
      'Strumenti per seller meno maturi',
    ],
    'tags'     => ['Elettronica', 'Elettrodomestici', 'Gaming', 'Italia'],
  ],

  'temu' => [
    'id'       => 'temu',
    'name'     => 'Temu',
    'category' => 'internazionali',
    'domain'   => 'temu.com',
    'type'     => 'Marketplace globale · Diretto da fabbrica · B2C',
    'badges'   => [
      ['text' => 'Ultra low-cost', 'color' => 'orange'],
    ],
    'desc'     => 'Temu è il marketplace di PDD Holdings (stesso gruppo di Pinduoduo) che dal 2022 ha invaso il mercato europeo con una strategia aggressiva: prezzi ultra-competitivi grazie alla filiera corta direttamente dai produttori cinesi, spedizioni gratuite anche per ordini minimi e promozioni continue. In Italia ha raggiunto milioni di utenti in pochissimo tempo.<br><br>Dal 2024 Temu ha aperto un programma per seller europei (modello "semi-managed"), permettendo a venditori terzi di listare prodotti sulla piattaforma. Per i seller italiani rappresenta una doppia sfida: competere con i loro prezzi è quasi impossibile, ma allo stesso tempo venderci prodotti differenziati - Made in Italy, nicchie di qualità, accessori originali - può essere un\'opportunità concreta su un traffico enorme.',
    'metrics'  => [
      ['label' => 'Commissione', 'value' => '0–5% (semi-managed)'],
      ['label' => 'Traffico IT', 'value' => 'Molto alto'],
      ['label' => 'Accesso',     'value' => 'Programma seller'],
    ],
    'pros'     => [
      'Traffico enorme e in rapida crescita in Italia',
      'Commissioni molto basse rispetto ad Amazon',
      'Opportunità per prodotti Made in Italy e di nicchia',
      'Forte investimento in marketing (TV, social, referral)',
    ],
    'cons'     => [
      'Concorrenza quasi impossibile su prezzo con i seller cinesi',
      'Brand percepito come low-quality: dannoso per brand premium',
      'Programma seller europeo ancora immaturo',
      'Controversie legali e regolamentari in corso in UE',
    ],
    'tags'     => ['Low-cost', 'Cina', 'Alto traffico', 'Opportunità nicchie'],
  ],

];
