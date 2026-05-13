<?php
$title = 'Marketplace Italiani 2025 - Commissioni e Guide | SellerLab';
$description = 'Confronta tutti i marketplace per vendere online in Italia: Amazon, eBay, Zalando, Etsy, Subito, ManoMano e molto altro. Commissioni aggiornate, pro e contro, guide pratiche.';
$keywords = 'marketplace italiani, vendere su amazon italia, commissioni amazon, ebay italia commissioni, zalando venditori, etsy italia, manomano marketplace, subito.it venditori, comparatore marketplace ecommerce';
$canonical = 'https://sellerlab.it/marketplace.php';
$og_title = 'Marketplace Italiani 2025 - Confronto Commissioni e Guide';
$og_description = 'Confronta Amazon, eBay, Zalando, Etsy, Subito e altri 15+ marketplace italiani. Commissioni reali, pro e contro aggiornati.';
$og_url = 'https://sellerlab.it/marketplace.php';
$og_locale = 'it_IT';
$jsonld = '<script type="application/ld+json">\n  {\n    "@context": "https://schema.org",\n    "@graph": [\n      {\n        "@type": "BreadcrumbList",\n        "itemListElement": [\n          { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://sellerlab.it/" },\n          { "@type": "ListItem", "position": 2, "name": "Marketplace", "item": "https://sellerlab.it/marketplace.html" }\n        ]\n      },\n      {\n        "@type": "ItemList",\n        "name": "Marketplace per vendere online in Italia",\n        "description": "Lista completa dei marketplace italiani con commissioni e caratteristiche aggiornate al 2025",\n        "numberOfItems": 18,\n        "itemListElement": [\n          { "@type": "ListItem", "position": 1, "name": "Amazon.it", "url": "https://amazon.it", "description": "Il marketplace più grande in Italia con oltre 35 milioni di visitatori mensili. Commissioni 8-15%." },\n          { "@type": "ListItem", "position": 2, "name": "eBay.it", "url": "https://ebay.it", "description": "Marketplace storico ideale per usato, collezionismo e ricambi. Commissione ~12.8%." },\n          { "@type": "ListItem", "position": 3, "name": "Subito.it", "url": "https://subito.it", "description": "Piattaforma di annunci n.1 in Italia. Gratuito per privati, piani pro per dealer." },\n          { "@type": "ListItem", "position": 4, "name": "Etsy", "url": "https://etsy.com", "description": "Marketplace per handmade, vintage e prodotti creativi. Commissione 6.5%." },\n          { "@type": "ListItem", "position": 5, "name": "Zalando", "url": "https://zalando.it", "description": "Leader europeo fashion. Accesso selettivo, commissioni 5-25%." },\n          { "@type": "ListItem", "position": 6, "name": "ManoMano", "url": "https://manomano.it", "description": "Marketplace europeo per bricolage e giardinaggio. Commissioni 12-15%." },\n          { "@type": "ListItem", "position": 7, "name": "Vinted", "url": "https://vinted.it", "description": "Moda second-hand. Zero commissioni per il venditore." },\n          { "@type": "ListItem", "position": 8, "name": "TikTok Shop", "url": "https://shop.tiktok.com", "description": "Social commerce emergente in Italia. Commissioni ~5-8%." }\n        ]\n      },\n      {\n        "@type": "WebPage",\n        "name": "Marketplace Italiani - Confronto e Guide",\n        "url": "https://sellerlab.it/marketplace.html",\n        "description": "Confronto completo di tutti i marketplace per vendere online in Italia",\n        "inLanguage": "it-IT",\n        "isPartOf": { "@id": "https://sellerlab.it/#website" }\n      }\n    ]\n  }\n  </script>';
$current_page = 'marketplace';
include 'includes/head.php';
include 'includes/nav.php';
?>

<nav class="section-nav" id="section-nav">
  <div class="section-nav-inner">
    <a href="#generalisti" class="section-nav-link" onclick="secNav(event,'generalisti')">Generalisti</a>
    <a href="#verticali" class="section-nav-link" onclick="secNav(event,'verticali')">Verticali</a>
    <a href="#fashion" class="section-nav-link" onclick="secNav(event,'fashion')">Fashion</a>
    <a href="#comparatori" class="section-nav-link" onclick="secNav(event,'comparatori')">Comparatori</a>
    <a href="#social" class="section-nav-link" onclick="secNav(event,'social')">Social</a>
    <a href="#outlet" class="section-nav-link" onclick="secNav(event,'outlet')">Outlet</a>
    <a href="#ricondizionato" class="section-nav-link" onclick="secNav(event,'ricondizionato')">Ricondizionato</a>
    <a href="#internazionali" class="section-nav-link" onclick="secNav(event,'internazionali')">Internazionali</a>
  </div>
</nav>

<div class="page-hero">
  <div class="page-hero-inner">
    <div class="section-label">Marketplace</div>
    <h1>Tutti i canali di vendita italiani</h1>
    <p>20+ piattaforme analizzate con commissioni reali, traffico stimato, pro e contro. Aggiornato al 2025.</p>
  </div>
</div>

<section class="section">
  <div class="section-inner">

    <div class="intro-box">
      <p>Il mercato e-commerce italiano vale oltre <strong>54 miliardi di euro</strong> e cresce ogni anno. Scegliere dove vendere non è banale: ogni marketplace ha il suo pubblico, le sue regole e le sue commissioni. Questa guida ti aiuta a orientarti senza perderti.</p>
    </div>

    <div class="cat-nav">
      <a href="#generalisti" class="cat-btn active">Generalisti</a>
      <a href="#verticali" class="cat-btn">Verticali</a>
      <a href="#fashion" class="cat-btn">Moda & Fashion</a>
      <a href="#comparatori" class="cat-btn">Comparatori</a>
      <a href="#social" class="cat-btn">Social Commerce</a>
      <a href="#outlet" class="cat-btn">Outlet & Flash Sale</a>
    </div>

    <!-- ===== GENERALISTI ===== -->
    <div id="generalisti" style="scroll-margin-top:120px;">
      <div class="section-header">
        <div class="section-label">Marketplace Generalisti</div>
        <h2>Le grandi piattaforme per tutti i prodotti</h2>
        <p>Alto traffico, alta concorrenza. Adatti a chi vuole volumi e non dipende dal branding forte.</p>
      </div>
      <div class="grid-2">

        <!-- AMAZON -->
        <div class="card" id="amazon">
          <div class="card-header">
            <div class="card-icon">
              <img src="https://www.google.com/s2/favicons?domain=amazon.it&sz=64" alt="Amazon" width="28" height="28">
            </div>
            <div>
              <span class="badge badge-orange" style="margin-bottom:4px;display:block;">Leader di mercato</span>
              <span class="badge badge-blue">FBA disponibile</span>
            </div>
          </div>
          <div class="card-name" style="margin:12px 0 4px;">Amazon.it</div>
          <div class="card-type">Marketplace generalista · B2C · dal 2010 in Italia</div>
          <div class="card-desc" style="margin-top:10px;">
            Amazon è il marketplace con il maggior traffico in Italia e uno dei più influenti al mondo. Presente nel paese dal 2010, conta decine di milioni di visitatori mensili e una base clienti abituata ad acquistare frequentemente. Per i venditori è il canale con il maggior potenziale di volume, ma anche quello più competitivo e con le politiche più rigide.<br><br>
            Il programma <strong>FBA (Fulfilled by Amazon)</strong> consente di delegare interamente la logistica: il venditore spedisce il proprio stock ai magazzini Amazon, che si occupa di stoccaggio, spedizione al cliente finale, resi e customer service. In cambio, i prodotti acquisiscono il badge Prime e una maggiore visibilità. Il programma <strong>FBM (Fulfilled by Merchant)</strong> mantiene invece la logistica in mano al venditore, con costi inferiori ma meno visibilità sui risultati di ricerca.<br><br>
            La visibilità su Amazon è governata dall'algoritmo A9/A10, che premia conversione, recensioni, parole chiave nel titolo e nei bullet point, e storico di vendita. Senza una strategia di advertising (Sponsored Products, Sponsored Brands) è sempre più difficile emergere in categorie affollate.
          </div>
          <div class="metrics">
            <div class="metric"><div class="metric-label">Commissione</div><div class="metric-value">8–15%</div></div>
            <div class="metric"><div class="metric-label">Traffico/mese (IT)</div><div class="metric-value">~35M</div></div>
            <div class="metric"><div class="metric-label">Piano Pro</div><div class="metric-value">39€/mese</div></div>
            <div class="metric"><div class="metric-label">Piano Base</div><div class="metric-value">0,99€/vendita</div></div>
          </div>
          <div class="pros-cons">
            <div class="pros">
              <h4>Punti di forza</h4>
              <ul>
                <li>Traffico enorme e clienti ad alta intenzione d'acquisto</li>
                <li>FBA semplifica completamente la logistica</li>
                <li>Badge Prime aumenta conversioni in modo significativo</li>
                <li>Strumenti pubblicitari maturi e granulari</li>
                <li>Espansione facile su altri marketplace europei</li>
              </ul>
            </div>
            <div class="cons">
              <h4>Punti di debolezza</h4>
              <ul>
                <li>Concorrenza brutale, spesso dai prodotti Amazon stessi</li>
                <li>Regole rigide e account sospesi senza preavviso</li>
                <li>Commissioni + FBA riducono i margini</li>
                <li>Il cliente è di Amazon, non tuo</li>
                <li>Advertising sempre più costoso per emergere</li>
              </ul>
            </div>
          </div>
          <div class="tags">
            <span class="tag">Ideale per volumi alti</span>
            <span class="tag">Prodotti standard</span>
            <span class="tag">Brand già noti</span>
            <span class="tag">Logistica esternalizzata</span>
          </div>
        </div>

        <!-- EBAY -->
        <div class="card" id="ebay">
          <div class="card-header">
            <div class="card-icon">
              <img src="https://cdn.simpleicons.org/ebay/E53238" alt="eBay" width="28" height="28">
            </div>
            <span class="badge badge-blue">Storico dal 1999</span>
          </div>
          <div class="card-name" style="margin:12px 0 4px;">eBay.it</div>
          <div class="card-type">Marketplace generalista · C2C & B2C</div>
          <div class="card-desc" style="margin-top:10px;">
            eBay è la piattaforma più longeva del panorama italiano e mondiale. Arrivata in Italia nel 1999, ha da sempre ospitato sia privati che professionisti. Nonostante il calo generale del traffico rispetto al decennio scorso, rimane un canale molto redditizio per <strong>specifiche nicchie</strong>: ricambi auto, elettronica usata, collezionismo, numismatica, abbigliamento vintage e prodotti difficili da trovare altrove.<br><br>
            eBay offre sia il formato ad <strong>asta</strong> che quello a <strong>prezzo fisso</strong>. Il formato asta è oggi usato meno, ma rimane efficace per oggetti rari o da collezione. I negozi eBay permettono commissioni ridotte per chi vende regolarmente e offrono strumenti di promozione interni.<br><br>
            La fee structure di eBay è articolata: si paga una percentuale sul prezzo finale (incluse le spese di spedizione), più eventuali fee di inserzione oltre il numero gratuito mensile. Dal 2022 eBay ha semplificato il modello tariffario in Italia allineandolo agli altri paesi europei.
          </div>
          <div class="metrics">
            <div class="metric"><div class="metric-label">Commissione finale</div><div class="metric-value">~12.8%</div></div>
            <div class="metric"><div class="metric-label">Traffico/mese (IT)</div><div class="metric-value">~12M</div></div>
            <div class="metric"><div class="metric-label">Inserzioni gratis/mese</div><div class="metric-value">200</div></div>
            <div class="metric"><div class="metric-label">Negozio Base</div><div class="metric-value">~19€/mese</div></div>
          </div>
          <div class="pros-cons">
            <div class="pros">
              <h4>Punti di forza</h4>
              <ul>
                <li>Ottimo per nicchie: usato, collezionismo, ricambi</li>
                <li>Zero costi di iscrizione per iniziare</li>
                <li>Formato asta utile per oggetti rari</li>
                <li>Buyer protection aumenta la fiducia degli acquirenti</li>
                <li>Accesso ai mercati internazionali eBay</li>
              </ul>
            </div>
            <div class="cons">
              <h4>Punti di debolezza</h4>
              <ul>
                <li>Traffico in calo per prodotti nuovi generalisti</li>
                <li>Alta percentuale di acquirenti price-sensitive</li>
                <li>Fee calcolata anche sulle spese di spedizione</li>
                <li>Risoluzione dispute spesso a favore dell'acquirente</li>
                <li>Meno adatto a brand e prodotti premium</li>
              </ul>
            </div>
          </div>
          <div class="tags">
            <span class="tag">Usato & vintage</span>
            <span class="tag">Collezionismo</span>
            <span class="tag">Ricambi auto</span>
            <span class="tag">Elettronica</span>
          </div>
        </div>

        <!-- SUBITO.IT -->
        <div class="card" id="subito">
          <div class="card-header">
            <div class="card-icon">
              <img src="https://www.google.com/s2/favicons?domain=subito.it&sz=64" alt="Subito.it" width="28" height="28">
            </div>
            <span class="badge badge-green">N.1 annunci IT</span>
          </div>
          <div class="card-name" style="margin:12px 0 4px;">Subito.it</div>
          <div class="card-type">Annunci classificati · C2C & B2C · Locale</div>
          <div class="card-desc" style="margin-top:10px;">
            Nata nel 2008 come successore di Kijiji, Subito.it è la piattaforma di annunci numero uno in Italia per traffico e penetrazione. Forte su usato locale, auto, immobili ed elettronica, funziona su logica geografica: chi cerca, filtra per città o regione, e questo la rende complementare ai marketplace nazionali.<br><br>
            Per i <strong>privati</strong> è gratuita nella maggior parte delle categorie. Per i <strong>professionisti</strong> (dealer auto, agenzie immobiliari, rivenditori) esistono piani a pagamento con inserzioni illimitate, visibilità premium e strumenti di gestione. Le categorie più forti sono: <strong>auto e moto</strong>, <strong>immobiliare</strong>, <strong>elettronica</strong>, <strong>arredamento</strong> e <strong>abbigliamento</strong>.<br><br>
            Subito non gestisce i pagamenti: le transazioni avvengono direttamente tra acquirente e venditore. Le "Spedizioni Subito" offrono protezione per entrambe le parti, ma l'utilizzo rimane parziale - molti scambi avvengono ancora in contanti di persona.
          </div>
          <div class="metrics">
            <div class="metric"><div class="metric-label">Commissione</div><div class="metric-value">0% (privati)</div></div>
            <div class="metric"><div class="metric-label">Traffico/mese (IT)</div><div class="metric-value">~18M</div></div>
            <div class="metric"><div class="metric-label">Annunci gratis</div><div class="metric-value">Sì (limiti/cat.)</div></div>
            <div class="metric"><div class="metric-label">Piano Pro Auto</div><div class="metric-value">Da 49€/mese</div></div>
          </div>
          <div class="pros-cons">
            <div class="pros">
              <h4>Punti di forza</h4>
              <ul>
                <li>Traffico altissimo, soprattutto per usato locale</li>
                <li>Gratuito per la maggior parte dei casi</li>
                <li>Ideale per vendite locali senza spedizione</li>
                <li>Forte per auto, immobili ed elettronica</li>
              </ul>
            </div>
            <div class="cons">
              <h4>Punti di debolezza</h4>
              <ul>
                <li>Nessuna protezione nativa su pagamenti</li>
                <li>Alto rischio truffe senza spedizioni protette</li>
                <li>Non adatto alla vendita di prodotti nuovi in modo scalabile</li>
                <li>Acquirenti molto price-sensitive</li>
              </ul>
            </div>
          </div>
          <div class="tags">
            <span class="tag">Usato locale</span>
            <span class="tag">Auto & Moto</span>
            <span class="tag">Immobiliare</span>
            <span class="tag">Svuota casa</span>
          </div>
        </div>

        <!-- EPRICE -->
        <div class="card" id="eprice">
          <div class="card-header">
            <div class="card-icon">
              <img src="https://www.google.com/s2/favicons?domain=eprice.it&sz=64" alt="ePrice" width="28" height="28">
            </div>
            <span class="badge badge-blue">Tech & Elettronica</span>
          </div>
          <div class="card-name" style="margin:12px 0 4px;">ePrice</div>
          <div class="card-type">Marketplace verticale · Elettronica & Tecnologia</div>
          <div class="card-desc" style="margin-top:10px;">
            ePrice nasce nel 1999 come e-commerce di elettronica e nel tempo ha aperto la sezione marketplace a venditori terzi. Rimane uno dei pochi player italiani indipendenti nel tech, con un pubblico già orientato all'acquisto online di informatica, smartphone, TV e audio, piccoli e grandi elettrodomestici.<br><br>
            L'accesso è su richiesta: servono partita IVA e rispetto degli standard qualitativi della piattaforma. Non è un canale per prodotti generalisti - funziona solo per chi vende tech.<br><br>
            Il confronto con Amazon è diretto: ePrice ha meno traffico, ma anche meno concorrenza. Su alcune referenze tech i margini sono migliori proprio perché si compete con meno seller. Da trattare come canale complementare, non primario.
          </div>
          <div class="metrics">
            <div class="metric"><div class="metric-label">Commissione</div><div class="metric-value">5–12%</div></div>
            <div class="metric"><div class="metric-label">Traffico/mese (IT)</div><div class="metric-value">~2M</div></div>
            <div class="metric"><div class="metric-label">Accesso</div><div class="metric-value">Su richiesta</div></div>
          </div>
          <div class="pros-cons">
            <div class="pros">
              <h4>Punti di forza</h4>
              <ul>
                <li>Piattaforma italiana con focus locale</li>
                <li>Meno concorrenza rispetto ad Amazon</li>
                <li>Pubblico già orientato all'acquisto tech</li>
              </ul>
            </div>
            <div class="cons">
              <h4>Punti di debolezza</h4>
              <ul>
                <li>Traffico nettamente inferiore ai grandi marketplace</li>
                <li>Solo categorie tech/elettronica</li>
                <li>Strumenti di gestione meno avanzati</li>
              </ul>
            </div>
          </div>
          <div class="tags">
            <span class="tag">Elettronica</span>
            <span class="tag">Informatica</span>
            <span class="tag">Elettrodomestici</span>
          </div>
        </div>

      </div>
    </div>

    <div class="divider" style="margin:56px 0;"></div>

    <!-- ===== VERTICALI ===== -->
    <div id="verticali" style="scroll-margin-top:120px;">
      <div class="section-header">
        <div class="section-label">Marketplace Verticali</div>
        <h2>Piattaforme specializzate per categoria</h2>
        <p>Pubblico più qualificato, meno concorrenza generalista. Ideali per chi ha un prodotto ben definito.</p>
      </div>
      <div class="grid-2">

        <!-- ETSY -->
        <div class="card" id="etsy">
          <div class="card-header">
            <div class="card-icon">
              <img src="https://cdn.simpleicons.org/etsy/F16521" alt="Etsy" width="28" height="28">
            </div>
            <span class="badge badge-purple">Handmade & Creativi</span>
          </div>
          <div class="card-name" style="margin:12px 0 4px;">Etsy</div>
          <div class="card-type">Marketplace verticale · Handmade, Vintage & Creatività</div>
          <div class="card-desc" style="margin-top:10px;">
            Etsy è la piattaforma globale per artigianato, vintage e prodotti creativi: 90 milioni di acquirenti attivi, base italiana in crescita. Chi compra su Etsy cerca qualcosa di specifico e unico - non il prezzo più basso. Questo cambia completamente le dinamiche competitive rispetto ai marketplace generalisti.<br><br>
            Le categorie più forti: gioielli artigianali, stampe e illustrazioni digitali, abbigliamento handmade e personalizzato, decorazioni casa, candele, ceramiche, prodotti vintage (almeno 20 anni di età) e forniture per creativi. I prodotti industriali non sono ammessi, ma il print-on-demand tramite partner come Printful o Printify è consentito.<br><br>
            Etsy Ads consente di sponsorizzare i propri listing internamente. Per i venditori italiani è disponibile anche un programma spedizioni integrato con corrieri convenzionati.
          </div>
          <div class="metrics">
            <div class="metric"><div class="metric-label">Fee inserzione</div><div class="metric-value">0,20$/listing</div></div>
            <div class="metric"><div class="metric-label">Commissione transaz.</div><div class="metric-value">6.5%</div></div>
            <div class="metric"><div class="metric-label">Fee pagamento</div><div class="metric-value">3% + 0,25€</div></div>
            <div class="metric"><div class="metric-label">Accesso</div><div class="metric-value">Libero</div></div>
          </div>
          <div class="pros-cons">
            <div class="pros">
              <h4>Punti di forza</h4>
              <ul>
                <li>Clienti con alta intenzione d'acquisto per prodotti unici</li>
                <li>Accesso immediato senza approvazione</li>
                <li>Forte brand awareness e fiducia nella piattaforma</li>
                <li>Ottimo per print-on-demand e digitali</li>
                <li>Mercato internazionale accessibile dal giorno uno</li>
              </ul>
            </div>
            <div class="cons">
              <h4>Punti di debolezza</h4>
              <ul>
                <li>Saturazione crescente nelle categorie più popolari</li>
                <li>Fee multiple si accumulano (inserzione + transaz. + pagamento)</li>
                <li>Algoritmo di ricerca cambiato più volte, visibilità instabile</li>
                <li>Non adatto a prodotti industriali o commodity</li>
              </ul>
            </div>
          </div>
          <div class="tags">
            <span class="tag">Artigianato</span>
            <span class="tag">Gioielli</span>
            <span class="tag">Stampe digitali</span>
            <span class="tag">Print-on-demand</span>
            <span class="tag">Vintage</span>
          </div>
        </div>

        <!-- MANOMANO -->
        <div class="card" id="manomano">
          <div class="card-header">
            <div class="card-icon">
              <img src="https://www.google.com/s2/favicons?domain=manomano.com&sz=64" alt="ManoMano" width="28" height="28">
            </div>
            <span class="badge badge-green">In forte crescita</span>
          </div>
          <div class="card-name" style="margin:12px 0 4px;">ManoMano</div>
          <div class="card-type">Marketplace verticale · Bricolage, Giardinaggio & Casa</div>
          <div class="card-desc" style="margin-top:10px;">
            ManoMano copre bricolage, fai-da-te, giardinaggio e arredamento su sei mercati europei, Italia inclusa dal 2016. La pandemia ha accelerato la crescita del settore DIY e ManoMano ne ha beneficiato in modo diretto: oggi è il canale verticale di riferimento per chi vende prodotti per la casa in Europa.<br><br>
            Serve sia il <strong>segmento B2C</strong> (appassionati DIY, proprietari di casa) che il <strong>segmento PRO</strong> (professionisti edili e impiantisti). Categorie principali: utensili manuali ed elettrici, materiali edili, impianti idraulici ed elettrici, arredo giardino, illuminazione, vernici e finiture.<br><br>
            L'onboarding richiede EAN su tutti i prodotti, SLA di spedizione stringenti e approvazione. Lo scontrino medio è tra i più alti dei marketplace verticali - un ordine tipico vale 3-4 volte quello di un marketplace generalista - il che rende le commissioni al 12-15% più digeribili.
          </div>
          <div class="metrics">
            <div class="metric"><div class="metric-label">Commissione</div><div class="metric-value">12–15%</div></div>
            <div class="metric"><div class="metric-label">Traffico/mese (IT)</div><div class="metric-value">~4M</div></div>
            <div class="metric"><div class="metric-label">Onboarding</div><div class="metric-value">Con approvazione</div></div>
            <div class="metric"><div class="metric-label">Scontrino medio</div><div class="metric-value">Alto</div></div>
          </div>
          <div class="pros-cons">
            <div class="pros">
              <h4>Punti di forza</h4>
              <ul>
                <li>Nicchia specifica con acquirenti qualificati</li>
                <li>Scontrino medio elevato migliora i margini assoluti</li>
                <li>Crescita del mercato DIY post-pandemia ancora attiva</li>
                <li>Segmento PRO con volumi interessanti</li>
                <li>Meno concorrenza rispetto ai generalisti</li>
              </ul>
            </div>
            <div class="cons">
              <h4>Punti di debolezza</h4>
              <ul>
                <li>Commissioni tra le più alte dei verticali</li>
                <li>EAN obbligatorio per tutti i prodotti</li>
                <li>SLA di spedizione rigidi, penali per ritardi</li>
                <li>Processo di onboarding lungo</li>
              </ul>
            </div>
          </div>
          <div class="tags">
            <span class="tag">Bricolage</span>
            <span class="tag">Giardinaggio</span>
            <span class="tag">Arredo esterno</span>
            <span class="tag">Utensili</span>
          </div>
        </div>

        <!-- VINTED -->
        <div class="card" id="vinted">
          <div class="card-header">
            <div class="card-icon">
              <img src="https://cdn.simpleicons.org/vinted/007782" alt="Vinted" width="28" height="28">
            </div>
            <span class="badge badge-purple">Second-hand fashion</span>
          </div>
          <div class="card-name" style="margin:12px 0 4px;">Vinted</div>
          <div class="card-type">Marketplace verticale · Abbigliamento usato · C2C</div>
          <div class="card-desc" style="margin-top:10px;">
            Vinted è l'app di moda second-hand più scaricata in Italia, con una base utenti concentrata sotto i 35 anni. Il suo meccanismo è semplice: <strong>il venditore non paga commissioni</strong>. Le fee (circa 5% + 0,70€) le paga l'acquirente come "protezione acquirente". Risultato: zero barriere all'ingresso per chi vende, ma margini difficili da pianificare per chi vuole farne un business strutturato.<br><br>
            La piattaforma è pensata per il <strong>C2C privato</strong>. Chi vende in modo professionale deve dichiararlo esplicitamente - obbligo legale dal 2023 con il Digital Services Act - e rispettare norme specifiche. Le categorie più attive: abbigliamento donna, bambino e luxury second-hand.<br><br>
            Su Vinted i prezzi sono tendenzialmente bassi e gli acquirenti sono abituati a trattare. Non è il canale giusto per costruire un'attività scalabile, ma per smaltire stock o iniziare a vendere usato senza costi fissi non ha rivali.
          </div>
          <div class="metrics">
            <div class="metric"><div class="metric-label">Commissione venditore</div><div class="metric-value">0%</div></div>
            <div class="metric"><div class="metric-label">Fee acquirente</div><div class="metric-value">~5% + 0,70€</div></div>
            <div class="metric"><div class="metric-label">Traffico/mese (IT)</div><div class="metric-value">~6M</div></div>
            <div class="metric"><div class="metric-label">Accesso</div><div class="metric-value">Libero</div></div>
          </div>
          <div class="pros-cons">
            <div class="pros">
              <h4>Punti di forza</h4>
              <ul>
                <li>Zero commissioni per il venditore</li>
                <li>Enorme base utenti giovani e attivi</li>
                <li>Spedizioni integrate con etichette prepagate</li>
                <li>Forte per abbigliamento donna e bambino</li>
              </ul>
            </div>
            <div class="cons">
              <h4>Punti di debolezza</h4>
              <ul>
                <li>Solo abbigliamento e accessori</li>
                <li>Principalmente C2C, difficile scalare come business</li>
                <li>Prezzi tendenzialmente molto bassi</li>
                <li>Acquirenti abituati a fortissimi sconti</li>
              </ul>
            </div>
          </div>
          <div class="tags">
            <span class="tag">Abbigliamento usato</span>
            <span class="tag">Luxury second-hand</span>
            <span class="tag">Bambino</span>
            <span class="tag">C2C</span>
          </div>
        </div>

        <!-- MEDIAWORLD MARKETPLACE -->
        <div class="card" id="mediaworld">
          <div class="card-header">
            <div class="card-icon">
              <img src="https://www.google.com/s2/favicons?domain=mediaworld.it&sz=64" alt="MediaWorld" width="28" height="28">
            </div>
            <span class="badge badge-blue">Retail ibrido</span>
          </div>
          <div class="card-name" style="margin:12px 0 4px;">MediaWorld Marketplace</div>
          <div class="card-type">Marketplace verticale · Elettronica & Tecnologia</div>
          <div class="card-desc" style="margin-top:10px;">
            MediaWorld ha aperto un marketplace sul proprio e-commerce, permettendo a venditori terzi di listare prodotti accanto all'inventario proprio. È un canale interessante perché sfrutta il brand riconosciuto di MediaWorld e la fiducia del consumatore italiano per l'acquisto di elettronica.<br><br>
            L'accesso è limitato a seller con partita IVA, catalogo strutturato e standard di spedizione elevati. Le categorie ammesse rispecchiano il posizionamento del brand: smartphone, TV, audio, informatica, gaming e piccoli elettrodomestici. È una piattaforma complementare, non primaria, ma efficace per brand che vogliono associarsi a un retailer di fiducia.
          </div>
          <div class="metrics">
            <div class="metric"><div class="metric-label">Commissione</div><div class="metric-value">8–12%</div></div>
            <div class="metric"><div class="metric-label">Accesso</div><div class="metric-value">Su invito/richiesta</div></div>
            <div class="metric"><div class="metric-label">Traffico/mese (IT)</div><div class="metric-value">~5M</div></div>
          </div>
          <div class="pros-cons">
            <div class="pros">
              <h4>Punti di forza</h4>
              <ul>
                <li>Brand riconosciuto aumenta la fiducia del cliente</li>
                <li>Acquirenti già motivati all'acquisto tech</li>
                <li>Meno concorrenza rispetto ad Amazon nella stessa nicchia</li>
              </ul>
            </div>
            <div class="cons">
              <h4>Punti di debolezza</h4>
              <ul>
                <li>Accesso selettivo, non immediato</li>
                <li>Solo categorie tech/elettronica</li>
                <li>Strumenti seller ancora in sviluppo</li>
              </ul>
            </div>
          </div>
          <div class="tags">
            <span class="tag">Elettronica</span>
            <span class="tag">Gaming</span>
            <span class="tag">Informatica</span>
          </div>
        </div>

      </div>
    </div>

    <div class="divider" style="margin:56px 0;"></div>

    <!-- ===== FASHION ===== -->
    <div id="fashion" style="scroll-margin-top:120px;">
      <div class="section-header">
        <div class="section-label">Moda & Fashion</div>
        <h2>I canali per vendere abbigliamento e accessori</h2>
        <p>Dal fast fashion al lusso: ogni segmento ha la sua piattaforma di riferimento.</p>
      </div>
      <div class="grid-2">

        <!-- ZALANDO -->
        <div class="card" id="zalando">
          <div class="card-header">
            <div class="card-icon">
              <img src="https://cdn.simpleicons.org/zalando/FF6900" alt="Zalando" width="28" height="28">
            </div>
            <span class="badge badge-purple">Leader europeo fashion</span>
          </div>
          <div class="card-name" style="margin:12px 0 4px;">Zalando</div>
          <div class="card-type">Marketplace fashion · B2C · Solo brand selezionati</div>
          <div class="card-desc" style="margin-top:10px;">
            Con 50 milioni di clienti attivi in 25 paesi, Zalando è la vetrina fashion più grande d'Europa. In Italia ha un pubblico consolidato e un tasso di acquisto ripetuto alto. Ma non è un marketplace aperto: si entra solo tramite il <strong>Zalando Partner Program (ZPP)</strong>, su invito o candidatura approvata.<br><br>
            Due modelli possibili: <strong>Wholesale</strong> (Zalando acquista lo stock e gestisce tutto) oppure <strong>Partner Program</strong> (il brand lista i prodotti, gestisce la logistica in proprio o tramite Zalando Fulfillment Solutions). Per candidarsi servono: brand registrato, collezione stagionale strutturata, capacità logistica adeguata e conformità agli standard fotografici - che sono molto rigidi.<br><br>
            Il lato critico: Zalando può restituire l'invenduto e le condizioni commerciali penalizzano i brand piccoli. Le commissioni variano dal 5 al 25% a seconda della categoria. Ha senso per chi ha già un brand strutturato e vuole distribuirlo a scala europea, meno per chi sta ancora costruendo il prodotto.
          </div>
          <div class="metrics">
            <div class="metric"><div class="metric-label">Commissione</div><div class="metric-value">5–25%</div></div>
            <div class="metric"><div class="metric-label">Clienti attivi EU</div><div class="metric-value">50M+</div></div>
            <div class="metric"><div class="metric-label">Accesso</div><div class="metric-value">Su invito/approvazione</div></div>
            <div class="metric"><div class="metric-label">Traffico/mese (IT)</div><div class="metric-value">~8M</div></div>
          </div>
          <div class="pros-cons">
            <div class="pros">
              <h4>Punti di forza</h4>
              <ul>
                <li>La più grande vetrina fashion d'Europa</li>
                <li>Clienti con alta propensione all'acquisto fashion</li>
                <li>Visibilità cross-country su 25 mercati</li>
                <li>Zalando Fulfillment semplifica la logistica</li>
              </ul>
            </div>
            <div class="cons">
              <h4>Punti di debolezza</h4>
              <ul>
                <li>Accesso molto selettivo</li>
                <li>Standard fotografici e dati prodotto rigidissimi</li>
                <li>Alta percentuale di resi (fino al 50% nel fashion)</li>
                <li>Condizioni sfavorevoli per brand piccoli</li>
              </ul>
            </div>
          </div>
          <div class="tags">
            <span class="tag">Brand fashion</span>
            <span class="tag">Abbigliamento</span>
            <span class="tag">Scarpe</span>
            <span class="tag">Accessori</span>
          </div>
        </div>

        <!-- FARFETCH -->
        <div class="card" id="farfetch">
          <div class="card-header">
            <div class="card-icon">
              <img src="https://www.google.com/s2/favicons?domain=farfetch.com&sz=64" alt="Farfetch" width="28" height="28">
            </div>
            <span class="badge badge-gray">Luxury fashion</span>
          </div>
          <div class="card-name" style="margin:12px 0 4px;">Farfetch</div>
          <div class="card-type">Marketplace luxury · Boutique indipendenti & Brand</div>
          <div class="card-desc" style="margin-top:10px;">
            Farfetch è la piattaforma globale per la moda di lusso, con un modello unico: connette boutique indipendenti e brand premium con clienti in tutto il mondo. Per un negozio fisico di abbigliamento luxury italiano, Farfetch rappresenta uno dei pochi canali per raggiungere clienti internazionali senza costruire un e-commerce proprio.<br><br>
            Le commissioni sono alte (fino al 30%), ma il valore medio degli ordini è altrettanto elevato. L'onboarding richiede un catalogo fotografato secondo gli standard di Farfetch e un processo di approvazione. Farfetch gestisce il checkout e la relazione con il cliente; la boutique si occupa del picking e della spedizione.
          </div>
          <div class="metrics">
            <div class="metric"><div class="metric-label">Commissione</div><div class="metric-value">~25–30%</div></div>
            <div class="metric"><div class="metric-label">Scontrino medio</div><div class="metric-value">Molto alto</div></div>
            <div class="metric"><div class="metric-label">Mercato</div><div class="metric-value">Globale</div></div>
          </div>
          <div class="pros-cons">
            <div class="pros">
              <h4>Punti di forza</h4>
              <ul>
                <li>Accesso al mercato globale luxury</li>
                <li>Scontrino medio molto elevato</li>
                <li>Ideale per boutique italiane con prodotti premium</li>
              </ul>
            </div>
            <div class="cons">
              <h4>Punti di debolezza</h4>
              <ul>
                <li>Commissioni elevatissime</li>
                <li>Standard fotografici molto esigenti</li>
                <li>Concorrenza con grandi brand diretti</li>
              </ul>
            </div>
          </div>
          <div class="tags">
            <span class="tag">Luxury</span>
            <span class="tag">Boutique</span>
            <span class="tag">Designer</span>
          </div>
        </div>

        <!-- YOOX -->
        <div class="card" id="yoox">
          <div class="card-header">
            <div class="card-icon">
              <img src="https://www.google.com/s2/favicons?domain=yoox.com&sz=64" alt="YOOX" width="28" height="28">
            </div>
            <span class="badge badge-blue">Italiano</span>
          </div>
          <div class="card-name" style="margin:12px 0 4px;">YOOX</div>
          <div class="card-type">Fashion outlet online · Invenduto & past season</div>
          <div class="card-desc" style="margin-top:10px;">
            YOOX è una piattaforma italiana (parte del gruppo YNAP insieme a Net-A-Porter) specializzata in abbigliamento, scarpe e accessori di fine stagione e invenduto. È il canale ideale per smaltire stock rimasto da stagioni precedenti senza svalutare il brand sul proprio e-commerce.<br><br>
            Il modello di YOOX prevede principalmente l'acquisto diretto dello stock (non consignment), il che riduce il rischio per il venditore ma elimina la flessibilità. Collabora con brand di fascia media e alta. Non è aperto a tutti: richiede un processo di valutazione del brand e del prodotto.
          </div>
          <div class="metrics">
            <div class="metric"><div class="metric-label">Modello</div><div class="metric-value">Acquisto stock</div></div>
            <div class="metric"><div class="metric-label">Segmento</div><div class="metric-value">Mid-premium</div></div>
            <div class="metric"><div class="metric-label">Accesso</div><div class="metric-value">Selettivo</div></div>
          </div>
          <div class="pros-cons">
            <div class="pros">
              <h4>Punti di forza</h4>
              <ul>
                <li>Ottimo per smaltire invenduto senza svalutare il brand</li>
                <li>Acquisto dello stock = zero rischio giacenza</li>
                <li>Brand riconosciuto e clienti fashion qualificati</li>
              </ul>
            </div>
            <div class="cons">
              <h4>Punti di debolezza</h4>
              <ul>
                <li>Prezzi di acquisto spesso bassi</li>
                <li>Accesso selettivo, non per tutti i brand</li>
                <li>Nessun controllo sulla presentazione del prodotto</li>
              </ul>
            </div>
          </div>
          <div class="tags">
            <span class="tag">Fine stagione</span>
            <span class="tag">Invenduto</span>
            <span class="tag">Fashion outlet</span>
          </div>
        </div>

        <!-- DEPOP -->
        <div class="card" id="depop">
          <div class="card-header">
            <div class="card-icon">
              <img src="https://www.google.com/s2/favicons?domain=depop.com&sz=64" alt="Depop" width="28" height="28">
            </div>
            <span class="badge badge-green">Gen Z & Vintage</span>
          </div>
          <div class="card-name" style="margin:12px 0 4px;">Depop</div>
          <div class="card-type">Social marketplace · Secondhand · B2C / C2C</div>
          <div class="card-desc" style="margin-top:10px;">
            Depop funziona come un incrocio tra Instagram e un mercatino vintage: ogni seller ha un profilo, pubblica foto curate e costruisce una community di follower. Il focus è su abbigliamento vintage, streetwear, pezzi unici e second-hand di marca. Non si vende a catalogo - si vende un'estetica.<br><br>
            Acquistato da Etsy nel 2021, conta 35 milioni di utenti globali con forte concentrazione in UK, USA e Italia, tutti under 30. Funziona per chi ha pezzi selezionati e curati - vintage anni '80–'00, capsule collection, capi di nicchia. Non funziona per chi vende in modo seriale o vuole scalare con un catalogo ampio.
          </div>
          <div class="metrics">
            <div class="metric"><div class="metric-label">Commissione</div><div class="metric-value">10% + fees</div></div>
            <div class="metric"><div class="metric-label">Focus</div><div class="metric-value">Vintage / Streetwear</div></div>
            <div class="metric"><div class="metric-label">Target</div><div class="metric-value">18–30 anni</div></div>
          </div>
          <div class="pros-cons">
            <div class="pros">
              <h4>Punti di forza</h4>
              <ul>
                <li>Community attiva e molto coinvolta</li>
                <li>Perfetto per pezzi unici e vintage</li>
                <li>UX social: follower, like, DM</li>
                <li>Internazionale, forte in UK e USA</li>
              </ul>
            </div>
            <div class="cons">
              <h4>Punti di debolezza</h4>
              <ul>
                <li>Non adatto a prodotti seriali o a catalogo</li>
                <li>Richiede foto curate e personal branding</li>
                <li>Margini bassi su pezzi a basso prezzo</li>
              </ul>
            </div>
          </div>
          <div class="tags">
            <span class="tag">Vintage</span>
            <span class="tag">Secondhand</span>
            <span class="tag">Gen Z</span>
            <span class="tag">Streetwear</span>
          </div>
        </div>

        <!-- VESTIAIRE COLLECTIVE -->
        <div class="card" id="vestiaire">
          <div class="card-header">
            <div class="card-icon">
              <img src="https://www.google.com/s2/favicons?domain=vestiairecollective.com&sz=64" alt="Vestiaire Collective" width="28" height="28">
            </div>
            <span class="badge badge-purple">Luxury Secondhand</span>
          </div>
          <div class="card-name" style="margin:12px 0 4px;">Vestiaire Collective</div>
          <div class="card-type">Luxury resale · Autenticazione · C2C / B2C</div>
          <div class="card-desc" style="margin-top:10px;">
            Vestiaire Collective è il canale europeo per il luxury second-hand: borse Chanel, scarpe Gucci, orologi di pregio, cappotti Burberry. Ciò che lo distingue dalla concorrenza è l'autenticazione fisica degli articoli prima della consegna - ogni pezzo passa per esperti e fotografi prima di arrivare all'acquirente. Questo riduce le frodi e consente prezzi più alti.<br><br>
            23 milioni di utenti globali, tutti orientati all'acquisto di fascia alta. Solo brand premium sono accettati: niente fast fashion. È il canale giusto per chi rivende capi di lusso usati o gestisce un archivio di pezzi premium e vuole prezzi adeguati al valore reale.
          </div>
          <div class="metrics">
            <div class="metric"><div class="metric-label">Commissione</div><div class="metric-value">12–25%</div></div>
            <div class="metric"><div class="metric-label">Focus</div><div class="metric-value">Luxury / Premium</div></div>
            <div class="metric"><div class="metric-label">Autenticazione</div><div class="metric-value">Sì, fisica</div></div>
          </div>
          <div class="pros-cons">
            <div class="pros">
              <h4>Punti di forza</h4>
              <ul>
                <li>Leader europeo nel luxury resale</li>
                <li>Autenticazione aumenta fiducia e prezzi</li>
                <li>Community di acquirenti alto spendenti</li>
                <li>Valutazione guidata per ogni articolo</li>
              </ul>
            </div>
            <div class="cons">
              <h4>Punti di debolezza</h4>
              <ul>
                <li>Solo brand luxury: nessun fast fashion</li>
                <li>Commissioni elevate</li>
                <li>Tempi lunghi per autenticazione e spedizione</li>
              </ul>
            </div>
          </div>
          <div class="tags">
            <span class="tag">Luxury</span>
            <span class="tag">Resale</span>
            <span class="tag">Autenticazione</span>
            <span class="tag">Premium</span>
          </div>
        </div>

      </div>
    </div>

    <div class="divider" style="margin:56px 0;"></div>

    <!-- ===== COMPARATORI ===== -->
    <div id="comparatori" style="scroll-margin-top:120px;">
      <div class="section-header">
        <div class="section-label">Comparatori & Shopping Ads</div>
        <h2>Intercetta chi è già pronto a comprare</h2>
        <p>Canali CPC per portare traffico qualificato al tuo shop. Non sono marketplace: non gestiscono la transazione.</p>
      </div>
      <div class="grid-2">

        <!-- GOOGLE SHOPPING -->
        <div class="card" id="google-shopping">
          <div class="card-header">
            <div class="card-icon">
              <img src="https://cdn.simpleicons.org/google/4285F4" alt="Google Shopping" width="28" height="28">
            </div>
            <span class="badge badge-blue">Indispensabile</span>
          </div>
          <div class="card-name" style="margin:12px 0 4px;">Google Shopping</div>
          <div class="card-type">Comparatore · CPC · Advertising</div>
          <div class="card-desc" style="margin-top:10px;">
            Google Shopping non è un marketplace ma il canale pubblicitario più potente per l'e-commerce. Tramite Google Merchant Center puoi caricare il tuo catalogo prodotti e mostrare annunci con immagine, prezzo e nome negozio direttamente nei risultati di ricerca Google e nella tab Shopping.<br><br>
            Funziona con un modello <strong>CPC (costo per clic)</strong> gestito tramite Google Ads. Dal 2020 esiste anche la possibilità di listare prodotti gratuitamente nella sezione Shopping (Free Listings), anche se le inserzioni a pagamento ottengono notevolmente più visibilità.<br><br>
            Per partire serve: un account Google Merchant Center, un feed prodotti in formato XML/CSV con dati strutturati (GTIN, prezzo, disponibilità), e un account Google Ads per le campagne a pagamento. La qualità del feed è determinante per la visibilità.
          </div>
          <div class="metrics">
            <div class="metric"><div class="metric-label">Modello</div><div class="metric-value">CPC</div></div>
            <div class="metric"><div class="metric-label">Free Listings</div><div class="metric-value">Sì</div></div>
            <div class="metric"><div class="metric-label">CPC medio e-commerce</div><div class="metric-value">0,20–1,50€</div></div>
            <div class="metric"><div class="metric-label">GTIN richiesto</div><div class="metric-value">Sì (spesso)</div></div>
          </div>
          <div class="pros-cons">
            <div class="pros">
              <h4>Punti di forza</h4>
              <ul>
                <li>Traffico di altissima qualità (utente cerca attivamente)</li>
                <li>Free listings per visibilità organica gratuita</li>
                <li>Controllo totale su budget e targeting</li>
                <li>Integrazione con tutti i principali CMS e-commerce</li>
              </ul>
            </div>
            <div class="cons">
              <h4>Punti di debolezza</h4>
              <ul>
                <li>Richiede budget pubblicitario continuo per risultati significativi</li>
                <li>Feed di qualità complesso da mantenere</li>
                <li>Concorrenza alta su CPC in categorie popolari</li>
              </ul>
            </div>
          </div>
          <div class="tags">
            <span class="tag">Traffico qualificato</span>
            <span class="tag">Tutti i prodotti</span>
            <span class="tag">CPC</span>
          </div>
        </div>

        <!-- TROVAPREZZI -->
        <div class="card" id="trovaprezzi">
          <div class="card-header">
            <div class="card-icon">
              <img src="https://www.google.com/s2/favicons?domain=trovaprezzi.it&sz=64" alt="Trovaprezzi" width="28" height="28">
            </div>
            <span class="badge badge-green">Italiano</span>
          </div>
          <div class="card-name" style="margin:12px 0 4px;">Trovaprezzi.it</div>
          <div class="card-type">Comparatore prezzi · CPC · Italiano</div>
          <div class="card-desc" style="margin-top:10px;">
            Trovaprezzi è il comparatore prezzi italiano più usato: milioni di utenti al mese che cercano la migliore offerta su un prodotto specifico. Funziona bene su elettronica, informatica, elettrodomestici e qualsiasi prodotto con EAN, dove il confronto di prezzo è immediato e l'utente è già in fase di decisione d'acquisto.<br><br>
            Per listare serve registrarsi come merchant, inviare un feed prodotti (CSV o XML) e impostare un budget CPC. Il costo per clic varia per categoria e competitività - in genere inferiore a Google Shopping. Ha senso come canale complementare per chi ha prezzi competitivi; non serve a chi non può o non vuole competere sul prezzo.
          </div>
          <div class="metrics">
            <div class="metric"><div class="metric-label">Modello</div><div class="metric-value">CPC</div></div>
            <div class="metric"><div class="metric-label">Traffico/mese (IT)</div><div class="metric-value">~4M</div></div>
            <div class="metric"><div class="metric-label">CPC medio</div><div class="metric-value">0,10–0,80€</div></div>
          </div>
          <div class="pros-cons">
            <div class="pros">
              <h4>Punti di forza</h4>
              <ul>
                <li>Piattaforma italiana, utenti già in fase di acquisto</li>
                <li>CPC più basso rispetto a Google Shopping</li>
                <li>Efficace per prodotti con buon prezzo</li>
              </ul>
            </div>
            <div class="cons">
              <h4>Punti di debolezza</h4>
              <ul>
                <li>Solo per chi ha prezzi competitivi</li>
                <li>Traffico inferiore a Google Shopping</li>
                <li>Meno efficace per prodotti di nicchia o senza EAN</li>
              </ul>
            </div>
          </div>
          <div class="tags">
            <span class="tag">Elettronica</span>
            <span class="tag">Prezzi competitivi</span>
            <span class="tag">CPC</span>
          </div>
        </div>

        <!-- KELKOO -->
        <div class="card" id="kelkoo">
          <div class="card-header">
            <div class="card-icon">
              <img src="https://www.google.com/s2/favicons?domain=kelkoo.it&sz=64" alt="Kelkoo" width="28" height="28">
            </div>
            <span class="badge badge-gray">Europeo</span>
          </div>
          <div class="card-name" style="margin:12px 0 4px;">Kelkoo</div>
          <div class="card-type">Comparatore prezzi · CPC · Europeo</div>
          <div class="card-desc" style="margin-top:10px;">
            Kelkoo è un comparatore europeo presente in Italia con traffico più limitato rispetto a Trovaprezzi, ma utile per chi vuole diversificare i canali CPC. Funziona in modo analogo: feed prodotti + budget CPC. È usato principalmente da merchant che vogliono coprire più comparatori contemporaneamente tramite tool di feed management.
          </div>
          <div class="metrics">
            <div class="metric"><div class="metric-label">Modello</div><div class="metric-value">CPC</div></div>
            <div class="metric"><div class="metric-label">Copertura</div><div class="metric-value">Europa</div></div>
          </div>
          <div class="pros-cons">
            <div class="pros">
              <h4>Punti di forza</h4>
              <ul>
                <li>Copertura europea utile per espansione</li>
                <li>CPC spesso inferiore a canali più noti</li>
              </ul>
            </div>
            <div class="cons">
              <h4>Punti di debolezza</h4>
              <ul>
                <li>Traffico italiano ridotto</li>
                <li>Da usare come canale complementare, non primario</li>
              </ul>
            </div>
          </div>
          <div class="tags">
            <span class="tag">CPC</span>
            <span class="tag">Multichannel</span>
          </div>
        </div>

      </div>
    </div>

    <div class="divider" style="margin:56px 0;"></div>

    <!-- ===== SOCIAL COMMERCE ===== -->
    <div id="social" style="scroll-margin-top:120px;">
      <div class="section-header">
        <div class="section-label">Social Commerce</div>
        <h2>Vendere dove le persone passano il tempo</h2>
        <p>TikTok, Instagram e Facebook stanno diventando canali di vendita a tutti gli effetti.</p>
      </div>
      <div class="grid-2">

        <!-- TIKTOK SHOP -->
        <div class="card" id="tiktok-shop">
          <div class="card-header">
            <div class="card-icon">
              <img src="https://cdn.simpleicons.org/tiktok/000000" alt="TikTok Shop" width="28" height="28">
            </div>
            <span class="badge badge-orange">Emergente in Italia</span>
          </div>
          <div class="card-name" style="margin:12px 0 4px;">TikTok Shop</div>
          <div class="card-type">Social Commerce · Live shopping · Gen Z</div>
          <div class="card-desc" style="margin-top:10px;">
            TikTok Shop porta l'e-commerce dentro l'app: video, live e schede prodotto acquistabili senza uscire da TikTok. In Italia è operativo dal 2023 e ancora in fase di adozione, ma la crescita è rapida - soprattutto su beauty, moda, lifestyle e gadget.<br><br>
            La logica è opposta ai marketplace tradizionali: l'utente non cerca il prodotto, lo scopre guardando un contenuto. Questo apre a conversioni su prodotti che non avrebbero mai intercettato traffico organico. Per funzionare richiede produzione video continua e una presenza attiva sulla piattaforma. Il programma <strong>TikTok Affiliate</strong> consente ai creator di promuovere i tuoi prodotti in cambio di commissione - un canale di acquisizione interessante senza budget pubblicitario diretto.
          </div>
          <div class="metrics">
            <div class="metric"><div class="metric-label">Commissione</div><div class="metric-value">~5–8%</div></div>
            <div class="metric"><div class="metric-label">Accesso IT</div><div class="metric-value">Aperto (2023)</div></div>
            <div class="metric"><div class="metric-label">Utenti TikTok IT</div><div class="metric-value">~13M</div></div>
          </div>
          <div class="pros-cons">
            <div class="pros">
              <h4>Punti di forza</h4>
              <ul>
                <li>Discovery commerce: raggiungi chi non ti stava cercando</li>
                <li>Enorme base utenti giovani</li>
                <li>Affiliate program per leva creator</li>
                <li>Commissioni ancora basse nella fase di lancio</li>
              </ul>
            </div>
            <div class="cons">
              <h4>Punti di debolezza</h4>
              <ul>
                <li>Richiede produzione di contenuti video continua</li>
                <li>Ancora in fase di adozione in Italia</li>
                <li>Non adatto a tutti i prodotti (meglio visual e lifestyle)</li>
                <li>Infrastruttura ancora in sviluppo</li>
              </ul>
            </div>
          </div>
          <div class="tags">
            <span class="tag">Beauty</span>
            <span class="tag">Moda</span>
            <span class="tag">Lifestyle</span>
            <span class="tag">Gadget</span>
          </div>
        </div>

        <!-- INSTAGRAM / META SHOP -->
        <div class="card" id="instagram-shop">
          <div class="card-header">
            <div class="card-icon">
              <img src="https://cdn.simpleicons.org/instagram/E4405F" alt="Instagram Shop" width="28" height="28">
            </div>
            <span class="badge badge-purple">Meta Commerce</span>
          </div>
          <div class="card-name" style="margin:12px 0 4px;">Instagram & Facebook Shop</div>
          <div class="card-type">Social Commerce · Visual · Meta Ads integration</div>
          <div class="card-desc" style="margin-top:10px;">
            Instagram e Facebook Shop permettono di creare una vetrina prodotti integrata nei profili social. In Italia il checkout nativo non è disponibile (solo negli USA), quindi in pratica funziona come vetrina con redirect al tuo e-commerce - non come marketplace autonomo.<br><br>
            Il vero valore è l'integrazione con <strong>Meta Ads</strong>: collegando il catalogo a Facebook Business Manager si attivano campagne Dynamic Product Ads che mostrano i prodotti giusti all'utente giusto in automatico. Per chi fa retargeting su Meta, avere il catalogo collegato è praticamente obbligatorio - la differenza in performance è netta.
          </div>
          <div class="metrics">
            <div class="metric"><div class="metric-label">Costo piattaforma</div><div class="metric-value">Gratuito</div></div>
            <div class="metric"><div class="metric-label">Checkout IT</div><div class="metric-value">Non disponibile</div></div>
            <div class="metric"><div class="metric-label">Utenti Instagram IT</div><div class="metric-value">~26M</div></div>
          </div>
          <div class="pros-cons">
            <div class="pros">
              <h4>Punti di forza</h4>
              <ul>
                <li>Integrazione nativa con Meta Ads per retargeting</li>
                <li>Enorme base utenti italiana</li>
                <li>Ottimo per brand con forte presenza social</li>
              </ul>
            </div>
            <div class="cons">
              <h4>Punti di debolezza</h4>
              <ul>
                <li>Checkout nativo non disponibile in Italia</li>
                <li>Funziona come vetrina, non come marketplace autonomo</li>
                <li>Richiede investimento in Meta Ads per visibilità significativa</li>
              </ul>
            </div>
          </div>
          <div class="tags">
            <span class="tag">Visual brand</span>
            <span class="tag">Meta Ads</span>
            <span class="tag">Retargeting</span>
          </div>
        </div>

      </div>
    </div>

    <div class="divider" style="margin:56px 0;"></div>

    <!-- ===== OUTLET ===== -->
    <div id="outlet" style="scroll-margin-top:120px;">
      <div class="section-header">
        <div class="section-label">Outlet & Flash Sale</div>
        <h2>Smaltire stock e invenduto senza svalutare il brand</h2>
        <p>Canali dedicati alle vendite promozionali, flash sale e liquidazione stock.</p>
      </div>
      <div class="grid-2">

        <!-- VEEPEE -->
        <div class="card" id="veepee">
          <div class="card-header">
            <div class="card-icon">
              <img src="https://www.google.com/s2/favicons?domain=veepee.it&sz=64" alt="Veepee" width="28" height="28">
            </div>
            <span class="badge badge-orange">Flash Sale</span>
          </div>
          <div class="card-name" style="margin:12px 0 4px;">Veepee (ex Vente-privée)</div>
          <div class="card-type">Vendite privé · Flash sale · Solo stock definito</div>
          <div class="card-desc" style="margin-top:10px;">
            Già Vente-privée fino al rebranding del 2019, Veepee è la piattaforma europea delle vendite-evento riservate agli iscritti: 70 milioni di soci in Europa. Il meccanismo non cambia: il brand propone uno stock definito a prezzo scontato, la vendita dura 3–5 giorni, visibile solo a chi è registrato.<br><br>
            Veepee gestisce tutto - comunicazione, immagini, customer service - e paga il brand entro 30–60 giorni dalla chiusura dell'evento. È una soluzione concreta per smaltire invenduto o fine stagione senza svalutare il prezzo sul proprio canale diretto. Lo svantaggio principale: gli sconti richiesti sono spesso aggressivi (30–70%) e non si ha controllo sulla presentazione creativa.
          </div>
          <div class="metrics">
            <div class="metric"><div class="metric-label">Modello</div><div class="metric-value">Consignment/evento</div></div>
            <div class="metric"><div class="metric-label">Iscritti EU</div><div class="metric-value">70M+</div></div>
            <div class="metric"><div class="metric-label">Accesso</div><div class="metric-value">Su proposta brand</div></div>
          </div>
          <div class="pros-cons">
            <div class="pros">
              <h4>Punti di forza</h4>
              <ul>
                <li>Smaltimento rapido di stock definiti</li>
                <li>Veepee gestisce tutto: comunicazione, foto, CS</li>
                <li>Contesto "vendita esclusiva" protegge l'immagine brand</li>
                <li>Accesso a base iscritti enorme</li>
              </ul>
            </div>
            <div class="cons">
              <h4>Punti di debolezza</h4>
              <ul>
                <li>Sconti richiesti spesso aggressivi (30–70%)</li>
                <li>Pagamento dilazionato (30–60 gg)</li>
                <li>Nessun controllo sulla presentazione creativa</li>
                <li>Solo per stock definiti, non catalogo standard</li>
              </ul>
            </div>
          </div>
          <div class="tags">
            <span class="tag">Fine stagione</span>
            <span class="tag">Flash sale</span>
            <span class="tag">Fashion & Lifestyle</span>
          </div>
        </div>

        <!-- PRIVALIA -->
        <div class="card" id="privalia">
          <div class="card-header">
            <div class="card-icon">
              <img src="https://www.google.com/s2/favicons?domain=privalia.com&sz=64" alt="Privalia" width="28" height="28">
            </div>
            <span class="badge badge-blue">Outlet online</span>
          </div>
          <div class="card-name" style="margin:12px 0 4px;">Privalia</div>
          <div class="card-type">Fashion outlet · Vendite evento · B2C</div>
          <div class="card-desc" style="margin-top:10px;">
            Privalia opera con lo stesso modello di Veepee - vendite evento a prezzi scontati, visibili solo agli iscritti - con focus su abbigliamento, scarpe e accessori di brand noti. Presente in Italia, Spagna e Messico, è stata acquisita da Veepee nel 2019 ma mantiene operatività parzialmente autonoma in alcuni mercati.<br><br>
            In Italia ha perso visibilità rispetto al picco degli anni 2010–2016, ma resta un canale utile per brand fashion di fascia media che vogliono smaltire stock senza bruciare il prezzo sul canale diretto.
          </div>
          <div class="metrics">
            <div class="metric"><div class="metric-label">Modello</div><div class="metric-value">Vendite evento</div></div>
            <div class="metric"><div class="metric-label">Focus</div><div class="metric-value">Fashion mid-range</div></div>
            <div class="metric"><div class="metric-label">Accesso</div><div class="metric-value">Su proposta brand</div></div>
          </div>
          <div class="pros-cons">
            <div class="pros">
              <h4>Punti di forza</h4>
              <ul>
                <li>Smaltimento stock fashion in modo controllato</li>
                <li>Base clienti italiana consolidata</li>
              </ul>
            </div>
            <div class="cons">
              <h4>Punti di debolezza</h4>
              <ul>
                <li>Visibilità in calo rispetto al passato</li>
                <li>Sconti richiesti molto aggressivi</li>
              </ul>
            </div>
          </div>
          <div class="tags">
            <span class="tag">Fashion</span>
            <span class="tag">Outlet</span>
            <span class="tag">Stock invenduto</span>
          </div>
        </div>

      </div>
    </div>

    <div class="divider" style="margin:56px 0;"></div>

    <!-- ===== RICONDIZIONATO ===== -->
    <div id="ricondizionato" style="scroll-margin-top:120px;">
      <div class="section-header">
        <div class="section-label">Ricondizionato & Economia Circolare</div>
        <h2>Il mercato dell'usato e del ricondizionato</h2>
        <p>Segmento in forte crescita: i consumatori cercano risparmio e sostenibilità. Opportunità concrete per chi gestisce resi, ricondizionati e stock usato.</p>
      </div>
      <div class="grid-2">

        <!-- BACK MARKET -->
        <div class="card" id="backmarket">
          <div class="card-header">
            <div class="card-icon">
              <img src="https://www.google.com/s2/favicons?domain=backmarket.it&sz=64" alt="Back Market" width="28" height="28">
            </div>
            <span class="badge badge-green">Ricondizionato</span>
          </div>
          <div class="card-name" style="margin:12px 0 4px;">Back Market</div>
          <div class="card-type">Marketplace ricondizionato · B2C · Elettronica</div>
          <div class="card-desc" style="margin-top:10px;">
            Back Market è il marketplace europeo per l'elettronica ricondizionata: smartphone, tablet, laptop, console, cuffie. Attivo in oltre 16 paesi, ha costruito la sua reputazione su garanzie chiare e prezzi sensibilmente inferiori al nuovo - in media il 30-70% in meno rispetto al listino.<br><br>
            L'accesso non è automatico: ogni venditore deve superare una verifica e ogni prodotto deve passare test tecnici standardizzati con valutazione cosmetica certificata. La garanzia minima di 12 mesi è obbligatoria su tutti gli articoli. È il canale giusto per riparatori, ricondizionatori professionali e chi gestisce stock di resi o usato certificato.
          </div>
          <div class="metrics">
            <div class="metric"><div class="metric-label">Commissione</div><div class="metric-value">~12%</div></div>
            <div class="metric"><div class="metric-label">Focus</div><div class="metric-value">Elettronica ricondizionata</div></div>
            <div class="metric"><div class="metric-label">Accesso</div><div class="metric-value">Su approvazione</div></div>
          </div>
          <div class="pros-cons">
            <div class="pros">
              <h4>Punti di forza</h4>
              <ul>
                <li>Leader europeo nel ricondizionato tech</li>
                <li>Pubblico con alta intenzione d'acquisto</li>
                <li>Brand forte e reputazione costruita sulla fiducia</li>
                <li>Garanzia e protezione acquirente integrata</li>
              </ul>
            </div>
            <div class="cons">
              <h4>Punti di debolezza</h4>
              <ul>
                <li>Solo elettronica: nessun altro settore</li>
                <li>Standard qualitativi molto rigidi</li>
                <li>Accesso non immediato, richiede verifica</li>
                <li>Competizione tra seller sulla stessa referenza</li>
              </ul>
            </div>
          </div>
          <div class="tags">
            <span class="tag">Ricondizionato</span>
            <span class="tag">Smartphone</span>
            <span class="tag">Laptop</span>
            <span class="tag">Sostenibilità</span>
          </div>
        </div>

      </div>
    </div>

    <div class="divider" style="margin:56px 0;"></div>

    <!-- ===== INTERNAZIONALI & SPECIALIZZATI ===== -->
    <div id="internazionali" style="scroll-margin-top:120px;">
      <div class="section-header">
        <div class="section-label">Internazionali & Specializzati</div>
        <h2>Canali verticali e piattaforme con presenza in Italia</h2>
        <p>Marketplace specializzati per nicchia o country, con opportunità concrete per chi vende in segmenti specifici o vuole espandersi oltre confine.</p>
      </div>
      <div class="grid-2">

        <!-- ALLEGRO -->
        <div class="card" id="allegro">
          <div class="card-header">
            <div class="card-icon">
              <img src="https://www.google.com/s2/favicons?domain=allegro.pl&sz=64" alt="Allegro" width="28" height="28">
            </div>
            <span class="badge badge-blue">Polonia & CEE</span>
          </div>
          <div class="card-name" style="margin:12px 0 4px;">Allegro</div>
          <div class="card-type">Marketplace generalista · CEE · B2C / C2C</div>
          <div class="card-desc" style="margin-top:10px;">
            Allegro domina il mercato polacco con 135 milioni di offerte attive e 22 milioni di acquirenti mensili - numeri paragonabili ad Amazon in un paese da 38 milioni di abitanti. Per i seller italiani è la porta d'ingresso più diretta sull'Europa Centrale e dell'Est, mercati in crescita con meno concorrenza rispetto all'ovest.<br><br>
            Dal 2021 è aperto a seller europei non polacchi tramite il programma Allegro Express, con spedizioni internazionali. Funziona bene su elettronica, moda, casa e prodotti Made in Italy - in Polonia l'origine italiana è percepita come garanzia di qualità su molte categorie.
          </div>
          <div class="metrics">
            <div class="metric"><div class="metric-label">Commissione</div><div class="metric-value">6–12%</div></div>
            <div class="metric"><div class="metric-label">Mercato</div><div class="metric-value">Polonia / CEE</div></div>
            <div class="metric"><div class="metric-label">Utenti</div><div class="metric-value">22M mensili</div></div>
          </div>
          <div class="pros-cons">
            <div class="pros">
              <h4>Punti di forza</h4>
              <ul>
                <li>Monopolio di fatto sul mercato polacco</li>
                <li>CEE in forte crescita con meno competizione</li>
                <li>Commissioni inferiori ad Amazon</li>
                <li>Ottimo per Made in Italy</li>
              </ul>
            </div>
            <div class="cons">
              <h4>Punti di debolezza</h4>
              <ul>
                <li>Richiede gestione in lingua polacca</li>
                <li>Logistica internazionale da strutturare</li>
                <li>Meno conosciuto dai seller italiani</li>
              </ul>
            </div>
          </div>
          <div class="tags">
            <span class="tag">Polonia</span>
            <span class="tag">Europa Est</span>
            <span class="tag">Internazionale</span>
            <span class="tag">CEE</span>
          </div>
        </div>

        <!-- CATAWIKI -->
        <div class="card" id="catawiki">
          <div class="card-header">
            <div class="card-icon">
              <img src="https://www.google.com/s2/favicons?domain=catawiki.com&sz=64" alt="Catawiki" width="28" height="28">
            </div>
            <span class="badge badge-purple">Aste Online</span>
          </div>
          <div class="card-name" style="margin:12px 0 4px;">Catawiki</div>
          <div class="card-type">Marketplace aste · Collezionismo · B2C / C2C</div>
          <div class="card-desc" style="margin-top:10px;">
            Catawiki è la piattaforma europea di aste online per oggetti speciali e da collezione: arte, orologi, gioielli, fumetti, monete, vini pregiati, auto d'epoca, merchandise raro. Attiva in oltre 60 paesi, organizza 75.000 aste all'anno con acquirenti da tutto il mondo disposti a pagare prezzi di mercato reali.<br><br>
            Non è ad accesso libero: ogni venditore deve fare richiesta e ogni lotto passa attraverso una selezione editoriale curata da esperti per categoria. Questo filtro è anche il suo punto di forza - gli acquirenti si fidano perché sanno che i pezzi sono stati valutati. Il canale giusto per oggetti unici, collezioni, stock vintage o articoli difficili da prezzare su un marketplace standard.
          </div>
          <div class="metrics">
            <div class="metric"><div class="metric-label">Commissione</div><div class="metric-value">12.5–20%</div></div>
            <div class="metric"><div class="metric-label">Modello</div><div class="metric-value">Aste settimanali</div></div>
            <div class="metric"><div class="metric-label">Accesso</div><div class="metric-value">Su selezione</div></div>
          </div>
          <div class="pros-cons">
            <div class="pros">
              <h4>Punti di forza</h4>
              <ul>
                <li>Leader europeo nelle aste di collezionismo</li>
                <li>Acquirenti internazionali, prezzi spesso alti</li>
                <li>Copertura editoriale e promozione inclusa</li>
                <li>Ottimo per pezzi unici difficili da prezzare</li>
              </ul>
            </div>
            <div class="cons">
              <h4>Punti di debolezza</h4>
              <ul>
                <li>Non adatto a prodotti seriali</li>
                <li>Accesso selettivo con tempi di approvazione</li>
                <li>Prezzi finali non prevedibili (asta)</li>
              </ul>
            </div>
          </div>
          <div class="tags">
            <span class="tag">Aste</span>
            <span class="tag">Collezionismo</span>
            <span class="tag">Arte</span>
            <span class="tag">Oggetti unici</span>
          </div>
        </div>

        <!-- LEROY MERLIN MARKETPLACE -->
        <div class="card" id="leroymerlin">
          <div class="card-header">
            <div class="card-icon">
              <img src="https://www.google.com/s2/favicons?domain=leroymerlin.it&sz=64" alt="Leroy Merlin" width="28" height="28">
            </div>
            <span class="badge badge-green">Casa & DIY</span>
          </div>
          <div class="card-name" style="margin:12px 0 4px;">Leroy Merlin Marketplace</div>
          <div class="card-type">Marketplace verticale · Casa & Bricolage · B2C</div>
          <div class="card-desc" style="margin-top:10px;">
            Leroy Merlin ha aperto il suo marketplace in Italia permettendo a seller terzi di vendere sulla piattaforma del colosso francese del fai-da-te. È uno dei retailer fisici più grandi d'Italia con oltre 50 punti vendita e un'audience omnicanale di milioni di clienti che cercano materiali, utensili, arredamento e soluzioni per la casa.<br><br>
            Il marketplace è aperto a prodotti complementari alla loro offerta: decorazione, giardinaggio, ferramenta, illuminazione, cucina, bagno. L'integrazione con il mondo fisico (click & collect, visibilità in-store) è un vantaggio difficile da trovare altrove. Ideale per brand e rivenditori del settore casa e DIY.
          </div>
          <div class="metrics">
            <div class="metric"><div class="metric-label">Commissione</div><div class="metric-value">10–15%</div></div>
            <div class="metric"><div class="metric-label">Focus</div><div class="metric-value">Casa / Bricolage / Garden</div></div>
            <div class="metric"><div class="metric-label">Canale</div><div class="metric-value">Online + fisico</div></div>
          </div>
          <div class="pros-cons">
            <div class="pros">
              <h4>Punti di forza</h4>
              <ul>
                <li>Brand forte e fiducia consolidata in Italia</li>
                <li>Pubblico qualificato per casa e bricolage</li>
                <li>Omnicanalità: online + 50+ negozi fisici</li>
                <li>Meno competizione rispetto ad Amazon</li>
              </ul>
            </div>
            <div class="cons">
              <h4>Punti di debolezza</h4>
              <ul>
                <li>Solo settore casa/DIY: niche specifica</li>
                <li>Strumenti seller ancora in sviluppo</li>
                <li>Accesso richiede approvazione</li>
              </ul>
            </div>
          </div>
          <div class="tags">
            <span class="tag">Casa</span>
            <span class="tag">DIY</span>
            <span class="tag">Giardinaggio</span>
            <span class="tag">Ferramenta</span>
          </div>
        </div>

        <!-- UNIEURO MARKETPLACE -->
        <div class="card" id="unieuro">
          <div class="card-header">
            <div class="card-icon">
              <img src="https://www.google.com/s2/favicons?domain=unieuro.it&sz=64" alt="Unieuro" width="28" height="28">
            </div>
            <span class="badge badge-blue">Elettronica Retail</span>
          </div>
          <div class="card-name" style="margin:12px 0 4px;">Unieuro Marketplace</div>
          <div class="card-type">Marketplace verticale · Elettronica · B2C</div>
          <div class="card-desc" style="margin-top:10px;">
            Unieuro è la più grande catena italiana di elettronica di consumo, con oltre 500 punti vendita in tutta Italia e un sito e-commerce molto frequentato. Il marketplace aperto a seller terzi consente di vendere prodotti tech, elettrodomestici, accessori e gaming sulla piattaforma di uno dei brand retail più riconosciuti nel paese.<br><br>
            Il vantaggio principale è la forte brand reputation italiana e la copertura capillare sul territorio. I clienti di Unieuro sono già orientati all'acquisto tech e hanno alta fiducia nella piattaforma. È un'alternativa interessante ad Amazon per chi vende in categorie elettronica, con meno competizione e maggiore visibilità su un pubblico nazionale.
          </div>
          <div class="metrics">
            <div class="metric"><div class="metric-label">Commissione</div><div class="metric-value">~10–14%</div></div>
            <div class="metric"><div class="metric-label">Focus</div><div class="metric-value">Elettronica / Elettrodomestici</div></div>
            <div class="metric"><div class="metric-label">Negozi fisici</div><div class="metric-value">500+ in Italia</div></div>
          </div>
          <div class="pros-cons">
            <div class="pros">
              <h4>Punti di forza</h4>
              <ul>
                <li>Brand italiano molto riconosciuto</li>
                <li>Clienti con alta intenzione d'acquisto tech</li>
                <li>Omnicanalità con forte radicamento locale</li>
                <li>Meno sellers rispetto ad Amazon</li>
              </ul>
            </div>
            <div class="cons">
              <h4>Punti di debolezza</h4>
              <ul>
                <li>Traffico inferiore rispetto ad Amazon.it</li>
                <li>Solo elettronica e categorie correlate</li>
                <li>Strumenti per seller meno maturi</li>
              </ul>
            </div>
          </div>
          <div class="tags">
            <span class="tag">Elettronica</span>
            <span class="tag">Elettrodomestici</span>
            <span class="tag">Gaming</span>
            <span class="tag">Italia</span>
          </div>
        </div>

        <!-- TEMU -->
        <div class="card" id="temu">
          <div class="card-header">
            <div class="card-icon">
              <img src="https://www.google.com/s2/favicons?domain=temu.com&sz=64" alt="Temu" width="28" height="28">
            </div>
            <span class="badge badge-orange">Ultra low-cost</span>
          </div>
          <div class="card-name" style="margin:12px 0 4px;">Temu</div>
          <div class="card-type">Marketplace globale · Diretto da fabbrica · B2C</div>
          <div class="card-desc" style="margin-top:10px;">
            Temu è il marketplace di PDD Holdings (stesso gruppo di Pinduoduo) che dal 2022 ha invaso il mercato europeo con una strategia aggressiva: prezzi ultra-competitivi grazie alla filiera corta direttamente dai produttori cinesi, spedizioni gratuite anche per ordini minimi e promozioni continue. In Italia ha raggiunto milioni di utenti in pochissimo tempo.<br><br>
            Dal 2024 Temu ha aperto un programma per seller europei (modello "semi-managed"), permettendo a venditori terzi di listare prodotti sulla piattaforma. Per i seller italiani rappresenta una doppia sfida: competere con i loro prezzi è quasi impossibile, ma allo stesso tempo venderci prodotti differenziati - Made in Italy, nicchie di qualità, accessori originali - può essere un'opportunità concreta su un traffico enorme.
          </div>
          <div class="metrics">
            <div class="metric"><div class="metric-label">Commissione</div><div class="metric-value">0–5% (semi-managed)</div></div>
            <div class="metric"><div class="metric-label">Traffico IT</div><div class="metric-value">Molto alto</div></div>
            <div class="metric"><div class="metric-label">Accesso</div><div class="metric-value">Programma seller</div></div>
          </div>
          <div class="pros-cons">
            <div class="pros">
              <h4>Punti di forza</h4>
              <ul>
                <li>Traffico enorme e in rapida crescita in Italia</li>
                <li>Commissioni molto basse rispetto ad Amazon</li>
                <li>Opportunità per prodotti Made in Italy e di nicchia</li>
                <li>Forte investimento in marketing (TV, social, referral)</li>
              </ul>
            </div>
            <div class="cons">
              <h4>Punti di debolezza</h4>
              <ul>
                <li>Concorrenza quasi impossibile su prezzo con i seller cinesi</li>
                <li>Brand percepito come low-quality: dannoso per brand premium</li>
                <li>Programma seller europeo ancora immaturo</li>
                <li>Controversie legali e regolamentari in corso in UE</li>
              </ul>
            </div>
          </div>
          <div class="tags">
            <span class="tag">Low-cost</span>
            <span class="tag">Cina</span>
            <span class="tag">Alto traffico</span>
            <span class="tag">Opportunità nicchie</span>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<!-- CTA -->
<section class="cta-section">
  <div class="section-inner">
    <h2>Quale tool usi per gestire tutto?</h2>
    <p>Feed management, repricing, analytics Amazon: scopri i tool che usano i seller professionisti.</p>
    <a href="tools.php" class="btn btn-primary">Scopri i Tool →</a>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

<script>
function secNav(e, id) {
  e.preventDefault();
  window.location.hash = id;
  setTimeout(function() { window.scrollBy(0, -120); }, 10);
  document.querySelectorAll('#section-nav .section-nav-link').forEach(function(l) { l.classList.remove('active'); });
  if (e.currentTarget) e.currentTarget.classList.add('active');
}

(function() {
  const nav = document.getElementById('section-nav');
  const links = nav.querySelectorAll('.section-nav-link');
  const sections = Array.from(links).map(l => document.getElementById(l.getAttribute('href').replace('#',''))).filter(Boolean);

  window.addEventListener('scroll', function() {
    nav.classList.toggle('is-visible', window.scrollY > 120);
  }, { passive: true });

  const observer = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        links.forEach(function(l) { l.classList.remove('active'); });
        const active = nav.querySelector('[href="#' + entry.target.id + '"]');
        if (active) {
          active.classList.add('active');
          active.scrollIntoView({ block: 'nearest', inline: 'center' });
        }
      }
    });
  }, { rootMargin: '-10% 0px -80% 0px' });

  sections.forEach(function(s) { observer.observe(s); });
})();
</script>

<?php include 'includes/end.php'; ?>
