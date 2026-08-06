<?php
/**
 * product-bottom: HALLUX-VALGUS-KORREKTOR (bunion / hallux valgus)
 *
 * Dedicated bottom-nicer for the NORIKS bunion corrector.
 * Shown via single-product-bottom-nicer.php when noriks_is_type('bunion').
 *
 * Medien liegen im Theme (git), relativ über get_template_directory_uri():
 *   img/bunion-videos/section-1.mp4, funkcionira.mp4, step-1..3.mp4
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$bun_vid_dir = get_template_directory_uri() . '/img/bunion-videos/';
$bun_video_1 = $bun_vid_dir . 'section-1.mp4'; // 1) One foot away
$bun_video_2 = $bun_vid_dir . 'funkcionira.mp4'; // 2) Wie es wirkt

$bun_img_features = get_template_directory_uri() . '/img/bunion/why-2026.webp';

// Echte Ergebnisse — Prozentwerte
$bun_results = array(
    array( 'pct' => 91, 'text' => 'der Nutzer berichteten bereits ab der 2. Anwendung von einer Linderung der Hallux-Beschwerden' ),
    array( 'pct' => 90, 'text' => 'der Nutzer waren nach 14 Tagen konsequenter Anwendung (30 Min./Tag) vollständig schmerzfrei' ),
    array( 'pct' => 88, 'text' => 'der Nutzer bemerkten nach 30 Tagen konsequenter Anwendung (30 Min./Tag) sichtbare Verbesserungen der Zehenstellung' ),
);

// Warum uns wählen — Vergleich (gleicher Stil wie knc-table)
$bun_cmp = array(
    '90-tägige Geld-zurück-Garantie',
    'Lindert Beschwerden',
    'Verhindert das Wachstum des Ballenzehs',
    'Verbessert den Zustand des Ballenzehs mit der Zeit',
    'Flexibles Design — Sie können damit gehen',
    'Robust und langlebig',
);

// Anwendung — 3 Schritte (Video + Beschreibung)
$bun_steps = array(
    array( 'video' => $bun_vid_dir . 'step-1.mp4', 'caption' => 'Befestigen Sie den NORIKS Korrektor an Großzehe und Fuß' ),
    array( 'video' => $bun_vid_dir . 'step-2.mp4', 'caption' => 'Stellen Sie die Dehnungsintensität nach Wunsch ein' ),
    array( 'video' => $bun_vid_dir . 'step-3.mp4', 'caption' => 'Entspannen Sie sich und lassen Sie den NORIKS Korrektor seine Arbeit tun' ),
);
?>

<!-- ============ 1) Nur einen Schritt entfernt… ============ -->
<section class="bun-why bun-intro">
  <div class="bun-wrap bun-row">
    <div class="bun-col bun-media">
      <video src="<?php echo esc_url( $bun_video_1 ); ?>" muted autoplay loop playsinline preload="metadata"></video>
    </div>
    <div class="bun-col bun-copy">
      <h2 class="bun-title">Sie sind nur einen Schritt davon entfernt, sich von <span class="bun-hl">Hallux-Beschwerden</span>, geschwollenen Zehen und Fußschmerzen zu befreien…</h2>
      <p>Wenn Sie das lesen, leiden Sie mit hoher Wahrscheinlichkeit unter anhaltenden <strong class="bun-red">Hallux-Beschwerden</strong>.</p>
      <p>Die Folge? Schmerzen und Beschwerden beeinträchtigen Ihre täglichen Aktivitäten.</p>
      <p>Unbehandelt können sie sich verschlimmern. Die Zehen überkreuzen sich, es können sich Hammerzehen und knöcherne Auswüchse bilden.</p>
      <p>Der Hallux valgus ist ein <strong class="bun-red">fortschreitendes Problem</strong> und verschwindet nicht von allein.</p>
      <p>Mit der Zeit kann er zu ernsteren Problemen führen, wie <u>invasiven Operationen, Beschwerden an Hüften, Knien und im unteren Rücken bis hin zu eingeschränkter Beweglichkeit</u>.</p>
      <p>Mithilfe einer klinisch erprobten, fortschrittlichen Ausrichtungstherapie und eines patentierten Gelenkmechanismus lindert der <strong>NORIKS Hallux-valgus-Korrektor</strong> wirksam die Beschwerden am betroffenen Fußbereich und stellt die Gesundheit Ihres Fußes mit nur 30 Minuten Anwendung pro Tag wieder her.</p>
      <p class="bun-stat"><span class="bun-check" aria-hidden="true">✔</span> <em>91 % der Nutzer berichteten bereits in der ersten Woche von einer <strong>Verringerung der Fußschmerzen</strong></em></p>
    </div>
  </div>
</section>

<!-- ============ 2) Wie wirkt es? ============ -->
<section class="bun-why">
  <div class="bun-wrap bun-row bun-reverse">
    <div class="bun-col bun-media">
      <video src="<?php echo esc_url( $bun_video_2 ); ?>" muted autoplay loop playsinline preload="metadata"></video>
    </div>
    <div class="bun-col bun-copy">
      <h2 class="bun-title">Wie wirkt es?</h2>
      <p>Der <strong>NORIKS Hallux-valgus-Korrektor</strong> nutzt eine fortschrittliche Ausrichtungstherapie. Er ist so konzipiert, dass er die <strong class="bun-red">Neuausrichtung</strong> der Großzehe unterstützt und die Entzündung mithilfe eines starken, patentierten Gelenkmechanismus allmählich lindert.</p>
      <p>Er hilft, die Muskelspannung zu lösen, indem er die Großzehe sanft in ihre natürliche Position zurückführt, was mit der Zeit zu einer schmerzfreien, natürlichen Ausrichtung des Zehengelenks führt.</p>
      <p>So wird die über Jahre angesammelte Spannung gelöst, die Wölbung korrigiert und verkleinert, der Schmerz gelindert und weiteres Wachstum verhindert — damit Sie wieder aufrecht und selbstbewusst auf den Beinen stehen.</p>
      <p>Manche Nutzer benötigen vielleicht eine oder zwei Anwendungen, um sich daran zu gewöhnen, da das <strong class="bun-red">Gefühl ausgeprägter sein kann</strong> als bei anderen Methoden.</p>
      <p>Es ist eine natürliche und nicht-invasive Methode, um die natürliche Position von Zehe und Fuß wiederherzustellen und die durch ungeeignetes Schuhwerk oder Genetik verursachten Schäden zu beheben.</p>
      <p>Ob kleiner Kinderfuß oder großer Fuß eines Erwachsenen — der <u>Korrektor ist so gefertigt, dass er sich bequem an alle Fußgrößen anpasst</u>.</p>
      <p class="bun-stat"><span class="bun-check" aria-hidden="true">✔</span> <em>87 % der Nutzer berichteten bereits im ersten Monat von <strong>sichtbaren Verbesserungen</strong></em></p>
    </div>
  </div>
</section>

<!-- ============ 3) Anwendung (grau, 3 Schritte) ============ -->
<section class="bun-why bun-howto">
  <div class="bun-wrap">
    <h2 class="bun-howto-title">Anwendung</h2>
    <div class="bun-howto-intro">
      <p>Wir empfehlen, mit 30 Minuten pro Tag zu beginnen und die Anwendung schrittweise auf 1 bis 3 Stunden zu steigern.</p>
      <p>Wenn Sie sich wohlfühlen, können Sie ihn auch während des Schlafs jede Nacht tragen.</p>
      <p>Am besten eignet er sich für Ruhephasen — wenn Sie auf dem Sofa liegen, fernsehen, lesen oder schlafen.</p>
      <p>Doch anders als andere Produkte auf dem Markt können Sie sich auch bewegen, ohne dass der NORIKS Korrektor Sie dank seines flexiblen Designs in der Bewegung einschränkt.</p>
    </div>
    <div class="bun-steps-grid">
      <?php $bun_n = 0; foreach ( $bun_steps as $bun_step ) : $bun_n++; ?>
        <div class="bun-step">
          <div class="bun-step-media">
            <video src="<?php echo esc_url( $bun_step['video'] ); ?>" muted autoplay loop playsinline preload="metadata"></video>
          </div>
          <div class="bun-step-num"><?php echo (int) $bun_n; ?></div>
          <p class="bun-step-caption"><?php echo esc_html( $bun_step['caption'] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ 4) 8 Gründe, warum Sie ihn lieben werden ============ -->
<section class="bun-why">
  <div class="bun-wrap bun-row">
    <div class="bun-col bun-copy">
      <h2 class="bun-title">8 Gründe, warum Sie ihn lieben werden</h2>
      <ul class="bun-reasons">
        <li><strong>Linderung der Beschwerden</strong> beim Gehen, Trainieren, Stehen und Schlafen</li>
        <li><strong>Verhindert</strong> das weitere Wachstum des Ballenzehs</li>
        <li><strong>Nicht-chirurgische Option</strong> zur Linderung</li>
        <li>Feste Gelenkausrichtung, die <strong>Ihren Zustand wirklich verbessert</strong></li>
        <li><strong>Einstellbare</strong> Dehnungsintensität</li>
        <li>Entwickelt und empfohlen von <strong>medizinischen Fachleuten</strong></li>
        <li><strong>Einfach anzuwenden</strong> und tragbar</li>
        <li><strong>90-tägige Geld-zurück-Garantie</strong> („Ergebnisse oder volle Rückerstattung"), weil wir so überzeugt von unserem Produkt sind und wissen, dass es Ihnen helfen wird</li>
      </ul>
    </div>
    <div class="bun-col bun-media">
      <img loading="lazy" decoding="async" src="<?php echo esc_url( $bun_img_features ); ?>" alt="Warum der NORIKS Hallux-valgus-Korrektor anders ist" />
    </div>
  </div>
</section>

<!-- ============ 5) Echte Ergebnisse, echte Menschen ============ -->
<section class="bun-why bun-results-sec">
  <div class="bun-wrap bun-row">
    <div class="bun-col bun-copy">
      <h2 class="bun-title">Echte <span class="bun-hl">Ergebnisse</span>, echte Menschen</h2>
      <p>Wir haben einen Verbrauchertest durchgeführt, bei dem wir den NORIKS Hallux-valgus-Korrektor an über <strong>37 podologische Praxen</strong> geschickt haben. Insgesamt haben ihn <strong>432 Patienten</strong> mit Hallux valgus getestet. Hier sind die Ergebnisse.</p>
    </div>
    <div class="bun-col">
      <div class="bun-results">
        <?php foreach ( $bun_results as $bun_r ) : $bun_dash = round( $bun_r['pct'] * 1.6336, 1 ); ?>
          <div class="bun-result">
            <svg class="bun-ring" viewBox="0 0 60 60" aria-hidden="true">
              <circle cx="30" cy="30" r="26" fill="none" stroke="#dfe6ee" stroke-width="5"/>
              <circle cx="30" cy="30" r="26" fill="none" stroke="#1a86d0" stroke-width="5" stroke-linecap="round"
                      stroke-dasharray="<?php echo esc_attr( $bun_dash ); ?> 163.4" transform="rotate(-90 30 30)"/>
              <text x="30" y="34" text-anchor="middle" class="bun-ring-txt"><?php echo (int) $bun_r['pct']; ?>%</text>
            </svg>
            <p class="bun-result-text"><?php echo esc_html( $bun_r['text'] ); ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ============ 6) Warum uns wählen? (Vergleichstabelle, knc-Stil) ============ -->
<section class="bun-cmp-section">
  <div class="bun-cmp-wrap">
    <h2 class="bun-cmp-title">Warum uns wählen?</h2>
    <p class="bun-cmp-lead">Fallen Sie nicht auf <span class="bun-hl">BILLIGE Imitationen</span> herein</p>
    <p class="bun-cmp-sub">So schneidet der <strong>NORIKS Hallux-valgus-Korrektor</strong> im Vergleich ab:</p>
    <div class="bun-cmp-scroll">
      <table class="bun-cmp-table">
        <thead>
          <tr>
            <th></th>
            <th class="bun-us">NORIKS</th>
            <th class="bun-comp">Andere Korrektoren</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ( $bun_cmp as $bun_row ) : ?>
            <tr>
              <td><?php echo esc_html( $bun_row ); ?></td>
              <td class="us ok">✓</td>
              <td class="no">✕</td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<style>
  /* Kein "Größentabelle"-Link beim Hallux-valgus-Korrektor (weder Plugin noch global). */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  /* Kurzbeschreibung (short description): Standard-Punkte (•) ausblenden, nur ✅ bleibt;
     Abstand über "Vorteile:" und mehr Platz unter der Liste.
     (Diese Vorlage wird nur auf orto-bunion-Seiten geladen.) */
  .woocommerce-product-details__short-description ul {
      list-style: none;
      margin: 8px 0 26px;
      padding-left: 0;
  }
  .woocommerce-product-details__short-description ul li {
      list-style: none;
      padding-left: 0;
      margin-left: 0;
  }
  .woocommerce-product-details__short-description p:has(+ ul) {
      margin-top: 20px;
      margin-bottom: 4px;
  }

  .bun-why { padding: 44px 0; }
  .bun-why.bun-intro { background: #fbf9f4; }
  .bun-wrap { max-width: 1180px; margin: 0 auto; padding: 0 16px; }
  .bun-row { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
  .bun-media video { width: 100%; height: auto; border-radius: 12px; display: block; }
  .bun-title { font-size: clamp(24px,2.9vw,34px); font-weight: 800; color: #1c1c1c; line-height: 1.2; margin: 0 0 18px; }
  .bun-hl { color: #1a86d0; }
  .bun-red { color: #e0563f; }
  .bun-copy p { font-size: 16px; line-height: 1.7; color: #333; margin: 0 0 12px; }
  .bun-stat { display: flex; align-items: flex-start; gap: 8px; margin-top: 6px !important; }
  .bun-check { color: #1a86d0; font-weight: 800; }
  .bun-stat em { font-style: italic; color: #333; }

  /* section 2: media on the right */
  .bun-reverse .bun-media { order: 2; }
  .bun-reverse .bun-copy { order: 1; }

  /* 3) Anwendung (grauer Hintergrund) */
  .bun-why.bun-howto { background: #f0f2f5; }
  .bun-howto-title { text-align: center; font-size: clamp(24px,2.9vw,34px); font-weight: 800; color: #1c1c1c; margin: 0 0 18px; }
  .bun-howto-intro { max-width: 820px; margin: 0 auto 34px; text-align: center; }
  .bun-howto-intro p { font-size: 16px; line-height: 1.6; color: #333; margin: 0 0 12px; }
  .bun-steps-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 26px; }
  .bun-step { text-align: center; }
  .bun-step-media { width: 100%; aspect-ratio: 1 / 1; border-radius: 14px; overflow: hidden; background: #e6e9ee; }
  .bun-step-media video { width: 100%; height: 100%; object-fit: cover; display: block; }
  .bun-step-num { font-size: 22px; font-weight: 800; color: #1c1c1c; margin: 14px 0 6px; }
  .bun-step-caption { font-size: 15px; line-height: 1.5; color: #333; margin: 0 8px; }

  /* 4) 8 Gründe */
  .bun-media img { width: 100%; height: auto; border-radius: 12px; display: block; }
  .bun-reasons { list-style: none; margin: 0; padding: 0; }
  .bun-reasons li { position: relative; padding: 0 0 16px 34px; font-size: 15.5px; line-height: 1.5; color: #333; }
  .bun-reasons li:before {
      content: ""; position: absolute; left: 0; top: 1px; width: 22px; height: 22px; border-radius: 50%;
      background: #1a86d0 url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M6 12.5l4 4 8-8' fill='none' stroke='white' stroke-width='2.6' stroke-linecap='round' stroke-linejoin='round'/></svg>") center/15px no-repeat;
  }

  /* 5) Echte Ergebnisse */
  .bun-results { display: flex; flex-direction: column; gap: 18px; }
  .bun-result { display: flex; align-items: center; gap: 16px; border-bottom: 1px solid #e6e6e6; padding-bottom: 16px; }
  .bun-result:last-child { border-bottom: 0; padding-bottom: 0; }
  .bun-ring { width: 70px; height: 70px; flex: 0 0 70px; }
  .bun-ring-txt { font-size: 16px; font-weight: 800; fill: #1a86d0; }
  .bun-result-text { font-size: 14.5px; line-height: 1.5; color: #333; margin: 0; }

  /* 6) Warum uns wählen — Vergleichstabelle (gleicher Stil wie knc-table) */
  .bun-cmp-section { background:#fff; padding:44px 0; }
  .bun-cmp-wrap { max-width:940px; margin:0 auto; padding:0 16px; }
  .bun-cmp-title { text-align:center; font-size:clamp(24px,3vw,34px); font-weight:800; color:#111; margin:0 0 8px; }
  .bun-cmp-lead { text-align:center; font-size:18px; font-weight:800; color:#111; margin:0 0 6px; }
  .bun-cmp-sub { text-align:center; font-size:14px; color:#444; margin:0 0 24px; }
  .bun-cmp-scroll { border-radius:16px; overflow:hidden; box-shadow:0 12px 34px rgba(18,48,90,.12); border:1px solid #edf0f4; }
  .bun-cmp-table { width:100%; border-collapse:collapse; table-layout:fixed; margin:0 !important; }
  .bun-cmp-table th, .bun-cmp-table td { padding:15px 12px; text-align:center; font-size:15px; }
  .bun-cmp-table thead th { color:#fff; font-weight:700; vertical-align:middle; font-size:14px; }
  .bun-cmp-table thead th:first-child { width:52%; background:#fff; }
  .bun-cmp-table .bun-comp { background:#767676; }
  .bun-cmp-table .bun-us { background:#111; }
  .bun-cmp-table tbody td:first-child { text-align:left; font-weight:600; color:#111; font-size:14px; line-height:1.3; padding-left:18px; }
  .bun-cmp-table tbody tr { border-bottom:1px solid #eef0f4; }
  .bun-cmp-table tbody tr:nth-child(even) { background:#fafbfc; }
  .bun-cmp-table td.ok { color:#1a9e5f; font-size:19px; font-weight:700; }
  .bun-cmp-table td.no { color:#d64545; font-size:18px; font-weight:700; }
  .bun-cmp-table td.us { background:#f3f3f3 !important; }
  .bun-cmp-table td.us.ok { color:#1a9e5f; }
  @media (max-width:600px) {
    .bun-cmp-table th, .bun-cmp-table td { padding:12px 6px; font-size:13px; }
    .bun-cmp-table thead th { font-size:12px; }
    .bun-cmp-table tbody td:first-child { font-size:12px; padding-left:10px; }
  }

  @media (max-width: 820px) {
    .bun-row { grid-template-columns: 1fr; gap: 22px; }
    .bun-reverse .bun-media { order: 0; }
    .bun-reverse .bun-copy { order: 0; }
    .bun-steps-grid { grid-template-columns: 1fr; gap: 18px; }
  }
</style>
