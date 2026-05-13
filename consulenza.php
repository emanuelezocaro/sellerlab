<?php
$title = 'Consulenza Vendita Online 1:1 - SellerLab';
$description = 'Sessione strategica 1:1 per chi vende online in Italia. 60 minuti, un piano scritto, nessun corso da comprare dopo. Scopri come funziona e prenota il tuo slot.';
$canonical = 'https://sellerlab.it/consulenza.php';
$og_title = 'Consulenza Vendita Online 1:1 - SellerLab';
$og_description = '60 minuti per smettere di girare in tondo. Un piano concreto sul tuo prodotto, i tuoi canali, i tuoi margini.';
$og_url = 'https://sellerlab.it/consulenza.php';
$og_locale = 'it_IT';
$current_page = 'consulenza';
include 'includes/head.php';
// no nav - landing page
?>

<style>
/* ── RESET LOCALE ── */
.c-section { padding: 80px 24px; }
.c-inner { max-width: 860px; margin: 0 auto; }
.c-inner-wide { max-width: 1040px; margin: 0 auto; }
.c-label {
  display: inline-block;
  font-size: 11px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  margin-bottom: 16px;
}
.c-label.blue { color: #60a5fa; }
.c-label.green { color: #4ade80; }
.c-label.orange { color: #fb923c; }
.c-label.default { color: var(--accent); }

/* ── HERO ── */
.c-hero {
  background: #060d1a;
  padding: 100px 24px 90px;
  text-align: center;
  border-bottom: 1px solid #1e293b;
  position: relative;
  overflow: hidden;
}
.c-hero::before {
  content: '';
  position: absolute;
  top: -120px; left: 50%;
  transform: translateX(-50%);
  width: 600px; height: 600px;
  background: radial-gradient(circle, rgba(37,99,235,.18) 0%, transparent 70%);
  pointer-events: none;
}
.c-hero-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: rgba(37,99,235,.12);
  border: 1px solid rgba(37,99,235,.3);
  border-radius: 99px;
  padding: 6px 16px;
  font-size: 12px;
  font-weight: 600;
  color: #93c5fd;
  letter-spacing: .3px;
  margin-bottom: 32px;
}
.c-hero h1 {
  font-size: clamp(2.2rem, 5.5vw, 3.8rem);
  font-weight: 800;
  color: #f8fafc;
  letter-spacing: -1.5px;
  line-height: 1.1;
  max-width: 820px;
  margin: 0 auto 24px;
}
.c-hero h1 em {
  font-style: normal;
  color: #60a5fa;
}
.c-hero h1 s {
  color: #334155;
  text-decoration: line-through;
  text-decoration-color: #ef4444;
}
.c-hero-sub {
  font-size: 19px;
  color: #94a3b8;
  max-width: 580px;
  margin: 0 auto 40px;
  line-height: 1.7;
}
.c-hero-proof {
  display: flex;
  justify-content: center;
  gap: 32px;
  flex-wrap: wrap;
  margin-bottom: 48px;
}
.c-hero-proof span {
  font-size: 13px;
  color: #475569;
  display: flex;
  align-items: center;
  gap: 6px;
}
.c-hero-proof span b { color: #94a3b8; }
.c-hero-cta {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 12px;
}
.btn-c-primary {
  display: inline-block;
  background: #2563eb;
  color: #fff !important;
  font-size: 18px;
  font-weight: 700;
  padding: 18px 42px;
  border-radius: 8px;
  text-decoration: none;
  transition: background .2s, transform .15s, box-shadow .2s;
  box-shadow: 0 4px 24px rgba(37,99,235,.35);
  letter-spacing: -.3px;
}
.btn-c-primary:hover {
  background: #1d4ed8;
  transform: translateY(-2px);
  box-shadow: 0 8px 32px rgba(37,99,235,.45);
}
.c-hero-note { font-size: 13px; color: #334155; }

/* ── PAIN SECTION ── */
.c-pain {
  background: #f8fafc;
  border-top: 1px solid var(--border);
  border-bottom: 1px solid var(--border);
}
.c-pain h2 {
  font-size: clamp(1.5rem, 3vw, 2.2rem);
  font-weight: 700;
  letter-spacing: -.5px;
  margin-bottom: 8px;
}
.c-pain-intro { font-size: 16px; color: var(--text-secondary); margin-bottom: 40px; line-height: 1.65; }
.c-pain-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 16px;
}
.c-pain-item {
  background: #fff;
  border: 1px solid #e2e8f0;
  border-left: 3px solid #ef4444;
  border-radius: 8px;
  padding: 20px 24px;
  font-size: 15px;
  color: #374151;
  line-height: 1.6;
}
.c-pain-item strong { color: #111827; }
.c-pain-cta {
  margin-top: 40px;
  text-align: center;
  padding: 32px;
  background: #fff;
  border: 1px solid #e2e8f0;
  border-radius: 12px;
}
.c-pain-cta p { font-size: 16px; color: var(--text-secondary); margin-bottom: 20px; }
.c-pain-cta p strong { color: var(--text); }

/* ── DELIVERABLES ── */
.c-deliv-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
  margin-top: 40px;
}
.c-deliv-card {
  border: 1px solid var(--border);
  border-radius: 12px;
  padding: 28px;
  background: var(--bg-card);
  transition: border-color .2s, transform .15s;
}
.c-deliv-card:hover { border-color: var(--accent); transform: translateY(-2px); }
.c-deliv-icon {
  font-size: 28px;
  margin-bottom: 14px;
  display: block;
}
.c-deliv-card h3 { font-size: 16px; font-weight: 700; margin-bottom: 8px; }
.c-deliv-card p { font-size: 14px; color: var(--text-secondary); line-height: 1.65; }
.c-deliv-card ul {
  list-style: none;
  margin-top: 12px;
  display: flex;
  flex-direction: column;
  gap: 6px;
}
.c-deliv-card ul li {
  font-size: 13.5px;
  color: var(--text-secondary);
  display: flex;
  gap: 8px;
  align-items: flex-start;
}
.c-deliv-card ul li::before { content: '→'; color: var(--accent); flex-shrink: 0; font-weight: 700; }

/* ── WHY PAID ── */
.c-why {
  background: #060d1a;
  padding: 80px 24px;
  border-top: 1px solid #1e293b;
  border-bottom: 1px solid #1e293b;
}
.c-why h2 {
  font-size: clamp(1.6rem, 3.5vw, 2.4rem);
  font-weight: 700;
  color: #f1f5f9;
  letter-spacing: -.5px;
  margin-bottom: 16px;
  max-width: 680px;
}
.c-why-lead {
  font-size: 17px;
  color: #64748b;
  line-height: 1.8;
  max-width: 640px;
  margin-bottom: 48px;
}
.c-why-lead strong { color: #94a3b8; }
.c-why-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 16px;
}
.c-why-item {
  border: 1px solid #1e293b;
  border-radius: 10px;
  padding: 28px;
  background: rgba(255,255,255,.02);
  transition: border-color .2s;
}
.c-why-item:hover { border-color: #334155; }
.c-why-item h4 { font-size: 15px; font-weight: 700; color: #e2e8f0; margin-bottom: 10px; }
.c-why-item p { font-size: 14px; color: #475569; line-height: 1.7; }
.c-why-item p strong { color: #94a3b8; }

/* ── PROCESS ── */
.c-process-steps {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 0;
  margin-top: 48px;
  border: 1px solid var(--border);
  border-radius: 12px;
  overflow: hidden;
}
.c-step {
  padding: 36px 28px;
  border-right: 1px solid var(--border);
  position: relative;
}
.c-step:last-child { border-right: none; }
.c-step-num {
  font-size: 52px;
  font-weight: 900;
  color: var(--accent);
  opacity: .1;
  line-height: 1;
  margin-bottom: 16px;
  letter-spacing: -3px;
}
.c-step h3 { font-size: 15px; font-weight: 700; margin-bottom: 10px; }
.c-step p { font-size: 13.5px; color: var(--text-secondary); line-height: 1.65; }

/* ── FAQ ── */
.c-faq {
  margin-top: 48px;
  border: 1px solid var(--border);
  border-radius: 12px;
  overflow: hidden;
}
.c-faq-item {
  border-bottom: 1px solid var(--border);
  padding: 26px 30px;
}
.c-faq-item:last-child { border-bottom: none; }
.c-faq-q { font-size: 15px; font-weight: 700; margin-bottom: 10px; }
.c-faq-a { font-size: 14px; color: var(--text-secondary); line-height: 1.75; }
.c-faq-a strong { color: var(--text); }

/* ── BOOKING SECTION ── */
.c-booking {
  background: #060d1a;
  padding: 80px 24px;
  text-align: center;
  border-top: 1px solid #1e293b;
}
.c-booking h2 {
  font-size: clamp(1.8rem, 4vw, 2.8rem);
  font-weight: 800;
  color: #f8fafc;
  letter-spacing: -1px;
  margin-bottom: 16px;
}
.c-booking-sub {
  font-size: 17px;
  color: #64748b;
  max-width: 520px;
  margin: 0 auto 48px;
  line-height: 1.7;
}
.c-booking-urgency {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: rgba(239,68,68,.08);
  border: 1px solid rgba(239,68,68,.2);
  border-radius: 99px;
  padding: 7px 18px;
  font-size: 12px;
  font-weight: 600;
  color: #fca5a5;
  margin-bottom: 32px;
  letter-spacing: .3px;
}
.c-booking-widget {
  max-width: 760px;
  margin: 0 auto;
  border-radius: 16px;
  overflow: hidden;
  border: 1px solid #1e293b;
}
.c-booking-after {
  margin-top: 28px;
  font-size: 13px;
  color: #334155;
  display: flex;
  justify-content: center;
  gap: 24px;
  flex-wrap: wrap;
}
.c-booking-after span { display: flex; align-items: center; gap: 6px; }

/* ── RESPONSIVE ── */
@media (max-width: 768px) {
  .c-hero { padding: 72px 20px 64px; }
  .c-hero-proof { gap: 16px; }
  .c-pain-grid { grid-template-columns: 1fr; }
  .c-deliv-grid { grid-template-columns: 1fr; }
  .c-why-grid { grid-template-columns: 1fr; }
  .c-process-steps { grid-template-columns: 1fr; }
  .c-step { border-right: none; border-bottom: 1px solid var(--border); }
  .c-step:last-child { border-bottom: none; }
}
</style>

<!-- ═══════════════════════════════
     HERO
════════════════════════════════ -->
<div class="c-hero">
  <div class="c-hero-badge">
    <span>●</span> Sessione 1:1 - Solo 3 posti a settimana
  </div>
  <h1>Hai letto guide.<br>Hai visto video.<br><em>Stai ancora cercando.</em></h1>
  <p class="c-hero-sub">60 minuti sul tuo prodotto specifico, i tuoi numeri, la tua situazione. Si esce con un piano scritto in mano, non con altri dubbi.</p>
  <div class="c-hero-proof">
    <span><b>60 min</b> di lavoro concreto</span>
    <span><b>Piano scritto</b> entro 24h</span>
    <span><b>Nessun corso</b> da comprare dopo</span>
    <span><b>Nessun upsell</b> alla fine</span>
  </div>
  <div class="c-hero-cta">
    <a href="#prenota" class="btn-c-primary">Guarda gli slot disponibili ↓</a>
    <span class="c-hero-note">Pagamento anticipato - Disponibilità limitata</span>
  </div>
</div>

<!-- ═══════════════════════════════
     PAIN
════════════════════════════════ -->
<div class="c-pain c-section">
  <div class="c-inner">
    <div class="c-label orange">Il problema</div>
    <h2>Ti riconosci in almeno una di queste?</h2>
    <p class="c-pain-intro">Se si, sei nel posto giusto. Se no, probabilmente non hai bisogno di questa sessione.</p>
    <div class="c-pain-grid">
      <div class="c-pain-item">Hai un prodotto ma non sai su <strong>quale marketplace ha senso venderlo</strong> senza buttare budget di test.</div>
      <div class="c-pain-item">Vendi gia ma i margini non tornano e <strong>non capisci dove stai perdendo</strong> soldi ogni mese.</div>
      <div class="c-pain-item">Hai letto tutto online ma la tua situazione <strong>sembra sempre un'eccezione</strong> rispetto alle guide generiche.</div>
      <div class="c-pain-item">Stai valutando Amazon, un e-commerce proprio, Zalando - e <strong>non sai da dove partire</strong> senza fare errori da 5.000 euro.</div>
      <div class="c-pain-item">Hai gia provato qualcosa ma <strong>non sta funzionando come ti aspettavi</strong> e non sai se il problema e il canale, il prodotto o la strategia.</div>
      <div class="c-pain-item">Vuoi un secondo parere indipendente da <strong>qualcuno che non ha nulla da venderti</strong> dopo la risposta.</div>
    </div>
    <div class="c-pain-cta">
      <p>Il problema non e la mancanza di informazioni. E che <strong>le informazioni generiche non si applicano al tuo caso specifico.</strong><br>Per questo esiste questa sessione.</p>
      <a href="#prenota" class="btn-c-primary">Prenota la sessione →</a>
    </div>
  </div>
</div>

<!-- ═══════════════════════════════
     COSA OTTIENI
════════════════════════════════ -->
<div class="c-section">
  <div class="c-inner-wide">
    <div class="c-inner" style="padding:0;">
      <div class="c-label default">Cosa ottieni</div>
      <h2 style="font-size:clamp(1.5rem,3vw,2.2rem);font-weight:700;letter-spacing:-.5px;margin-bottom:8px;">Niente di generico. Tutto sul tuo caso.</h2>
      <p style="color:var(--text-secondary);font-size:16px;line-height:1.65;">In 60 minuti costruiamo insieme quattro cose concrete. Non slide, non teoria: roba che puoi applicare il giorno dopo.</p>
    </div>
    <div class="c-deliv-grid">
      <div class="c-deliv-card">
        <span class="c-deliv-icon">🎯</span>
        <h3>Quale canale fa per te</h3>
        <p>Analizziamo 3-4 opzioni in base al tuo prodotto, margini e punto di partenza. Usciamo con una priorita chiara.</p>
        <ul>
          <li>Amazon, e-commerce proprio, marketplace verticali</li>
          <li>Costo di ingresso e tempo per vedere risultati</li>
          <li>Il canale da evitare nel tuo caso specifico</li>
        </ul>
      </div>
      <div class="c-deliv-card">
        <span class="c-deliv-icon">🔢</span>
        <h3>I margini reali</h3>
        <p>Commissioni, logistica, fee fisse, IVA, resi. Calcoliamo i numeri prima di investire, non dopo aver perso soldi.</p>
        <ul>
          <li>Margine netto effettivo per canale</li>
          <li>Break-even e volume minimo necessario</li>
          <li>Dove stai perdendo soldi senza saperlo</li>
        </ul>
      </div>
      <div class="c-deliv-card">
        <span class="c-deliv-icon">📋</span>
        <h3>Piano 90 giorni scritto</h3>
        <p>Un documento con i passi concreti: cosa fare prima, cosa rimandare, cosa evitare. Non "dipende" - una sequenza precisa.</p>
        <ul>
          <li>Priorita settimana per settimana</li>
          <li>Cosa non fare nei primi 90 giorni</li>
          <li>KPI da monitorare per capire se sta funzionando</li>
        </ul>
      </div>
      <div class="c-deliv-card">
        <span class="c-deliv-icon">💬</span>
        <h3>Risposte alle tue domande</h3>
        <p>Le domande a cui nessuna guida ha mai risposto davvero. Non script preconfezionati: ragioniamo sul tuo caso punto per punto.</p>
        <ul>
          <li>Domande specifiche preparate in anticipo</li>
          <li>Risposta diretta, senza giri di parole</li>
          <li>Anche le domande scomode che non sai a chi fare</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- ═══════════════════════════════
     PERCHE A PAGAMENTO
════════════════════════════════ -->
<div class="c-why">
  <div class="c-inner">
    <div class="c-label blue">Perche a pagamento</div>
    <h2>La consulenza gratuita non esiste. Qualcuno paga sempre.</h2>
    <p class="c-why-lead">Chi offre consulenze gratuite monetizza in un altro modo: un corso da vendere dopo, un'agenzia da proporre, tool in affiliazione. <strong>Il consiglio e gratuito, ma l'obiettivo non e il tuo risultato.</strong></p>
    <div class="c-why-grid">
      <div class="c-why-item">
        <h4>Interessi allineati al 100%</h4>
        <p>Non ho corsi da vendere, non ho agenzie da raccomandare, non ho software in affiliazione. <strong>Guadagno solo dalla sessione.</strong> Il mio unico obiettivo e che tu esca con chiarezza reale.</p>
      </div>
      <div class="c-why-item">
        <h4>Chi paga si prepara. Chi non paga improvvisa.</h4>
        <p>Una sessione pagata produce domande piu precise, contesto piu chiaro, risultati piu concreti. <strong>Non e una questione di soldi: e una questione di qualita dell'output.</strong></p>
      </div>
      <div class="c-why-item">
        <h4>Nessun upsell alla fine</h4>
        <p>Al termine della sessione non c'e nulla da comprare. <strong>Non c'e un "livello successivo", non c'e un pacchetto premium.</strong> La sessione e il prodotto, e finisce li.</p>
      </div>
      <div class="c-why-item">
        <h4>Accountability reale</h4>
        <p>Hai pagato in anticipo. Io lo so. Questo significa che <strong>non posso permettermi di darti risposte generiche</strong> - ti richiederesti un rimborso, giustamente.</p>
      </div>
    </div>
  </div>
</div>

<!-- ═══════════════════════════════
     COME FUNZIONA
════════════════════════════════ -->
<div class="c-section" style="background:var(--bg-alt);border-top:1px solid var(--border);border-bottom:1px solid var(--border);">
  <div class="c-inner">
    <div class="c-label default">Processo</div>
    <h2 style="font-size:clamp(1.5rem,3vw,2.2rem);font-weight:700;letter-spacing:-.5px;margin-bottom:8px;">Come funziona</h2>
    <p style="color:var(--text-secondary);font-size:16px;">Semplice. Tre passi, nessuna sorpresa.</p>
    <div class="c-process-steps">
      <div class="c-step">
        <div class="c-step-num">1</div>
        <h3>Scegli lo slot e paga</h3>
        <p>Selezioni una data disponibile qui sotto. Il pagamento anticipato conferma l'appuntamento e garantisce che la sessione sia dedicata interamente a te.</p>
      </div>
      <div class="c-step">
        <div class="c-step-num">2</div>
        <h3>Compila il questionario</h3>
        <p>Prima della sessione ricevi 5 domande sul tuo prodotto, canali considerati e obiettivi. 10 minuti che rendono i 60 minuti insieme 3 volte piu efficaci.</p>
      </div>
      <div class="c-step">
        <div class="c-step-num">3</div>
        <h3>Sessione + piano scritto</h3>
        <p>Videocall di 60 minuti sul tuo caso. Entro 24 ore ricevi il documento con l'analisi e il piano d'azione. Puoi usarlo subito.</p>
      </div>
    </div>
  </div>
</div>

<!-- ═══════════════════════════════
     FAQ
════════════════════════════════ -->
<div class="c-section">
  <div class="c-inner">
    <div class="c-label default">Dubbi</div>
    <h2 style="font-size:clamp(1.5rem,3vw,2.2rem);font-weight:700;letter-spacing:-.5px;margin-bottom:8px;">Probabilmente la risposta e gia qui.</h2>
    <p style="color:var(--text-secondary);font-size:16px;margin-bottom:0;">Le domande che arrivano piu spesso prima di prenotare.</p>
    <div class="c-faq">
      <div class="c-faq-item">
        <div class="c-faq-q">Non posso trovare queste informazioni gratis online?</div>
        <div class="c-faq-a">Puoi. Ma stai ancora cercando, no? Il problema non e la mancanza di informazioni - e che quelle generiche non si applicano al <strong>tuo prodotto, la tua categoria, il tuo punto di partenza.</strong> Per questo esiste una sessione 1:1.</div>
      </div>
      <div class="c-faq-item">
        <div class="c-faq-q">Quanto costa?</div>
        <div class="c-faq-a">Il prezzo e indicato direttamente nel calendario di prenotazione qui sotto. Il pagamento avviene in anticipo al momento della conferma dello slot.</div>
      </div>
      <div class="c-faq-item">
        <div class="c-faq-q">Non ho ancora un prodotto definito. Ha senso prenotare?</div>
        <div class="c-faq-a">Solo se hai almeno una direzione concreta (una categoria, una nicchia). <strong>Senza qualcosa da analizzare non si produce un piano utile.</strong> Se sei nella fase di ideazione pura, aspetta ancora un po'.</div>
      </div>
      <div class="c-faq-item">
        <div class="c-faq-q">Cosa succede se la sessione non mi e utile?</div>
        <div class="c-faq-a">Se arrivi con un caso concreto e il questionario compilato, e quasi impossibile che non esca nulla di utile. Il questionario pre-sessione serve esattamente a questo: verificare prima che ci sia materiale su cui lavorare. <strong>In 4 anni di sessioni non e mai successo.</strong></div>
      </div>
      <div class="c-faq-item">
        <div class="c-faq-q">Posso fare domande su marketplace esteri?</div>
        <div class="c-faq-a">Si. SellerLab nasce con focus Italia, ma la sessione puo coprire anche l'espansione in Europa: <strong>Amazon.de, Amazon.fr, Allegro, eBay internazionale,</strong> o altri canali se e parte del tuo obiettivo.</div>
      </div>
      <div class="c-faq-item">
        <div class="c-faq-q">La sessione e in videochiamata?</div>
        <div class="c-faq-a">Si, esclusivamente in videochiamata su piattaforma a scelta (Google Meet, Zoom, Teams). La registrazione e disponibile su richiesta.</div>
      </div>
    </div>
  </div>
</div>

<!-- ═══════════════════════════════
     BOOKING
════════════════════════════════ -->
<div class="c-booking" id="prenota">
  <div class="c-inner">
    <div class="c-booking-urgency">
      ● Solo 3 posti disponibili a settimana
    </div>
    <h2>Scegli il tuo slot.</h2>
    <p class="c-booking-sub">60 minuti e hai un piano chiaro. Seleziona una data disponibile qui sotto.</p>
    <div class="c-booking-widget">
      <!-- Koalendar Inline Embed Start -->
      <div id="inline-widget-comiteg-2-2"></div>
      <!-- Koalendar Inline Embed End -->
    </div>
    <div class="c-booking-after">
      <span>Pagamento sicuro anticipato</span>
      <span>Piano scritto entro 24h</span>
      <span>Videochiamata su qualsiasi piattaforma</span>
    </div>
  </div>
</div>

<div style="text-align:center;padding:24px;border-top:1px solid #1e293b;background:#060d1a;">
  <a href="index.php" style="font-size:13px;color:#334155;text-decoration:none;">← Torna alla home</a>
</div>

<!-- Koalendar Inline Embed Scripts -->
<script>window.Koalendar=window.Koalendar||function(){(Koalendar.props=Koalendar.props||[]).push(arguments)};</script>
<script async src="https://koalendar.com/assets/widget.js"></script>
<script>Koalendar('inline', {"url":"https://koalendar.com/e/comiteg-2-2","selector":"#inline-widget-comiteg-2-2"});</script>

<?php include 'includes/end.php'; ?>
