<?php
/**
 * product-bottom: ORTHOPÄDISCHER RÜCKENGURT (ortopas)
 *
 * Dedicated bottom-nicer for the NORIKS orthopedic back belt.
 * Shown via single-product-bottom-nicer.php when noriks_is_type('ortopas').
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

/* ------------------------------------------------------------------
 * MEDIEN nach Sektionen.
 * Videos 2, 3, 4, 6 liegen im Theme (git) — /img/ortopas-videos/.
 * TODO: Bild 1 (Collage) und 5 (Indikationen) sind vorerst HR-Versionen —
 *       DE (deutsche) Bilder erforderlich.
 * ------------------------------------------------------------------ */
$opz_vid_dir      = get_template_directory_uri() . '/img/ortopas-videos/';
$opz_img_collage  = 'https://noriks.com/hr/wp-content/uploads/2026/07/ortopas-hr-9.png'; // 1) zufriedene Kunden (Bild) — TODO DE image
$opz_video_relief = $opz_vid_dir . 'relief.mp4';                                          // 2) natürliche Linderung (Video)
$opz_video_cause  = $opz_vid_dir . 'cause.mp4';                                           // 3) die wahre Ursache (Video)
$opz_img_indik    = get_template_directory_uri() . '/img/ortopas/ortopas-indikacije.png'; // lokalizirana grafika indikacij // lokalizirana grafika indikacij // 5) wie es wirkt (Bild) — TODO DE image
$opz_video_feat   = $opz_vid_dir . 'features.mp4';                                        // 6) innovative Eigenschaften (Video)

/* Karten (runde Videos) — 4) Sektion mit 3 Karten */
$opz_cards = array(
    array(
        'video' => $opz_vid_dir . 'card-1.mp4',
        'title' => 'Lindert Beschwerden',
        'text'  => 'Kann bei Ischias und Rückenschmerzen schnelle Linderung bieten',
    ),
    array(
        'video' => $opz_vid_dir . 'card-2.mp4',
        'title' => 'Entlastung der Lendenwirbelsäule',
        'text'  => 'Stabilisiert und richtet den unteren Rücken aus',
    ),
    array(
        'video' => $opz_vid_dir . 'card-3.mp4',
        'title' => 'Bewährte Methode',
        'text'  => 'Basiert auf gezielter Kompressionstechnologie',
    ),
);

/* Vergleichstabelle — 7) Sektion. array( Bezeichnung, NORIKS(bool), Physio(bool) ) */
$opz_cmp_rows = array(
    array( 'Schmerzlinderung',                true,  true  ),
    array( 'Langanhaltende Wirkung',          true,  false ),
    array( 'Günstiger Preis',                 true,  false ),
    array( 'Sofortige Entspannung',           true,  false ),
    array( 'Keine Wartezeit',                 true,  false ),
    array( '60-tägige Geld-zurück-Garantie',  true,  false ),
    array( 'Langfristige Kosten',             false, true  ),
);
/* Bewertungen mit Bild — 8) Sektion */
$opz_reviews = array(
    array(
        'img'   => get_template_directory_uri() . '/img/ortopas-reviews/review-1.webp',
        'title' => 'Große Hilfe gegen Schmerzen im unteren Rücken',
        'text'  => 'Der NORIKS-Gurt hat mir das Leben wirklich sehr erleichtert. Er wirkt genau so, wie versprochen. Ich kann mich wieder ohne Schmerzen bücken.',
        'name'  => 'Elisabeth M.',
    ),
    array(
        'img'   => get_template_directory_uri() . '/img/ortopas-reviews/review-2.jpg',
        'title' => 'Weich und bequem',
        'text'  => 'Mein Physiotherapeut hat mir einen Gurt gegen Rückenschmerzen empfohlen. Zuvor hatte ich auch andere Gurte ausprobiert, aber dieser ist beim Sitzen und Bücken viel bequemer. Trotzdem bietet er hervorragenden Halt!',
        'name'  => 'Julia U.',
    ),
    array(
        'img'   => get_template_directory_uri() . '/img/ortopas-reviews/review-3.webp',
        'title' => 'Erstklassig!',
        'text'  => 'Er hilft mir, aufrecht zu sitzen, und ich habe das Gefühl, gerader zu gehen. Die Schmerzen haben stark nachgelassen, und ich kann endlich auch nach längerem Sitzen schmerzfrei aufstehen. Ich trage den Gurt etwa 2–3 Stunden am Tag – meist bei der Arbeit.',
        'name'  => 'Stefan D.',
    ),
);

$opz_yes = '<svg class="opz-yes" viewBox="0 0 24 24" width="20" height="20" aria-hidden="true"><path d="M5 12.5l4 4 10-10" fill="none" stroke="#22a45d" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/></svg>';
$opz_no  = '<svg class="opz-no" viewBox="0 0 24 24" width="20" height="20" aria-hidden="true"><path d="M7 7l10 10M17 7L7 17" fill="none" stroke="#dc3545" stroke-width="2.4" stroke-linecap="round"/></svg>';
?>

<!-- ============ 1) Über 14.000 zufriedene Kunden ============ -->
<section class="opz-why opz-customers">
  <div class="opz-wrap opz-row">
    <div class="opz-col opz-media">
      <img loading="lazy" decoding="async" src="<?php echo esc_url( $opz_img_collage ); ?>" alt="Zufriedene Kunden des NORIKS orthopädischen Rückengurts" />
    </div>
    <div class="opz-col opz-copy">
      <div class="opz-stars" aria-hidden="true">★★★★★</div>
      <h2 class="opz-title">Über 14.000 zufriedene Kunden</h2>
      <p class="opz-sub">Tausende Menschen haben ihre täglichen Rückenschmerzen bereits gegen Stabilität und Linderung eingetauscht — bei der Arbeit, beim Autofahren und zu Hause.</p>
    </div>
  </div>
</section>

<!-- ============ 2) Natürliche Schmerzlinderung ============ -->
<section class="opz-why">
  <div class="opz-wrap opz-row">
    <div class="opz-col opz-media">
      <video src="<?php echo esc_url( $opz_video_relief ); ?>" muted autoplay loop playsinline preload="metadata"></video>
    </div>
    <div class="opz-col opz-copy">
      <h2 class="opz-title">Natürliche Schmerzlinderung</h2>
      <p>Wenn Sie den NORIKS-Gurt anlegen, sorgt die fortschrittliche Technologie mit <strong>zwei Kompressionszonen</strong> für die richtige Ausrichtung Ihrer Hüften und Ihres unteren Rückens. Das kann Ihre Wirbelsäule stabilisieren und den Ischiasnerv entlasten.</p>
      <p>Normalerweise müssten Sie eine umfangreiche Physiotherapie durchlaufen, um diese Linderung zu erreichen. Der NORIKS-Gurt ermöglicht es, dass Sie die <strong>Linderung in Echtzeit spüren</strong> — während Sie arbeiten oder mit Ihren Liebsten unterwegs sind.</p>
      <p>Sobald Ihr unterer Rücken und Ihre Hüften richtig gestützt sind, kann sich der Druck auf den Ischiasnerv verringern. Das kann <strong>weniger Schmerzen und mehr Beweglichkeit</strong> bedeuten.</p>
    </div>
  </div>
</section>

<!-- ============ 3) Die wahre Ursache von Rückenschmerzen und Ischias ============ -->
<section class="opz-why opz-cause">
  <div class="opz-wrap opz-row">
    <div class="opz-col opz-media">
      <video src="<?php echo esc_url( $opz_video_cause ); ?>" muted autoplay loop playsinline preload="metadata"></video>
    </div>
    <div class="opz-col opz-copy">
      <h2 class="opz-title">Die wahre Ursache von Rückenschmerzen und Ischias</h2>
      <p>Stunden am Schreibtisch, sich wiederholende Bewegungen oder schwere körperliche Arbeit können <strong>ungleichmäßigen Druck auf die Bandscheiben</strong> erzeugen. In Kombination mit einer falschen Haltung kann dies über die Jahre zu erheblichen Schäden an der Wirbelsäule führen.</p>
      <p>In der Folge können die Bandscheiben aus ihrer Position rutschen und auf den Ischiasnerv drücken, was <strong>brennende Schmerzen, Kribbeln und sogar Schwäche</strong> verursacht, die vom unteren Rücken bis in die Beine ausstrahlen.</p>
    </div>
  </div>
</section>

<!-- ============ 4) Natürliche Linderung (3 Karten) ============ -->
<section class="opz-why opz-cards">
  <div class="opz-wrap">
    <h2 class="opz-cards-title">Natürliche Linderung bei Ischias und Rückenschmerzen</h2>
    <div class="opz-cards-grid">
      <?php foreach ( $opz_cards as $opz_card ) : ?>
        <div class="opz-card">
          <div class="opz-card-media">
            <video src="<?php echo esc_url( $opz_card['video'] ); ?>" muted autoplay loop playsinline preload="metadata"></video>
          </div>
          <div class="opz-card-head">
            <span class="opz-check" aria-hidden="true">
              <svg viewBox="0 0 24 24" width="22" height="22"><circle cx="12" cy="12" r="12" fill="#28a745"/><path d="M7 12.5l3 3 7-7" fill="none" stroke="#fff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </span>
            <h3 class="opz-card-title"><?php echo esc_html( $opz_card['title'] ); ?></h3>
          </div>
          <p class="opz-card-text"><?php echo esc_html( $opz_card['text'] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ 5) Wie wirkt der NORIKS-Gurt? ============ -->
<section class="opz-why">
  <div class="opz-wrap opz-row">
    <div class="opz-col opz-media">
      <img loading="lazy" decoding="async" src="<?php echo esc_url( $opz_img_indik ); ?>" alt="Indikationen — wobei der NORIKS orthopädische Gurt hilft" />
    </div>
    <div class="opz-col opz-copy">
      <h2 class="opz-title">Wie wirkt der NORIKS-Gurt?</h2>
      <p>Der NORIKS-Gurt <strong>stabilisiert gezielt</strong> den Bereich L5 der Wirbelsäule mithilfe <strong>gezielter Kompression</strong>, richtet das Becken korrekt aus und bringt das ISG-Gelenk in seinen natürlichen Bewegungsumfang zurück.</p>
      <p>Er <strong>stützt den problematischen Bereich</strong>, kann die Bandscheiben entlasten und so den Druck auf den Ischiasnerv verringern.</p>
      <p>Die gezielte Kompression fördert die Durchblutung, wodurch der Selbstheilungsprozess unterstützt werden kann.</p>
      <p>Diese Kombination kann bei Ischias, Rückenschmerzen und ISG-Beschwerden schnelle Linderung sowie bei regelmäßiger Anwendung <strong>langanhaltende Schmerzlinderung</strong> bieten.</p>
    </div>
  </div>
</section>

<!-- ============ 6) Innovative Eigenschaften ============ -->
<section class="opz-why">
  <div class="opz-wrap opz-row">
    <div class="opz-col opz-media">
      <video src="<?php echo esc_url( $opz_video_feat ); ?>" muted autoplay loop playsinline preload="metadata"></video>
    </div>
    <div class="opz-col opz-copy">
      <h2 class="opz-title">Innovative Eigenschaften</h2>
      <p><strong>Dünn und praktisch:</strong> Für den täglichen Gebrauch entwickelt und passt sich bequem unter den meisten Kleidungsstücken an, sodass niemand bemerkt, dass Sie ihn tragen!</p>
      <p><strong>Einstellbare Kompression:</strong> Ermöglicht es Ihnen, den Grad der Unterstützung an Ihre Bedürfnisse anzupassen, und bietet maximalen Komfort.</p>
      <p>Der Zugang zu Physiotherapeuten und Schmerzspezialisten ist oft begrenzt sowie mit hohen Kosten und Zeitaufwand verbunden. <strong>Der NORIKS-Gurt bietet eine professionelle Lösung auf höchstem Niveau</strong> und stellt eine wirksame sowie erschwingliche Alternative dar.</p>
    </div>
  </div>
</section>

<!-- ============ 7) Der NORIKS-Gurt im Vergleich (Tabelle) ============ -->
<section class="opz-why opz-compare">
  <div class="opz-wrap opz-row">
    <div class="opz-col opz-copy">
      <h2 class="opz-title">Der NORIKS-Gurt im Vergleich</h2>
      <p class="opz-sub">Wirkt gezielt auf den unteren Rücken, um Belastungen zu reduzieren.</p>
    </div>
    <div class="opz-col">
      <table class="opz-table">
        <thead>
          <tr>
            <th class="opz-th-feat"></th>
            <th class="opz-th-brand">NORIKS</th>
            <th class="opz-th-alt">Physio</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ( $opz_cmp_rows as $opz_r ) : ?>
            <tr>
              <th class="opz-feat"><?php echo esc_html( $opz_r[0] ); ?></th>
              <td class="opz-brand"><?php echo $opz_r[1] ? $opz_yes : $opz_no; ?></td>
              <td class="opz-alt"><?php echo $opz_r[2] ? $opz_yes : $opz_no; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- ============ 8) Kundenbewertungen (mit Bild) ============ -->
<section class="opz-why opz-reviews">
  <div class="opz-wrap">
    <div class="opz-reviews-grid">
      <?php foreach ( $opz_reviews as $opz_rev ) : ?>
        <div class="opz-review">
          <div class="opz-review-media">
            <img loading="lazy" decoding="async" src="<?php echo esc_url( $opz_rev['img'] ); ?>" alt="NORIKS-Gurt — Kundenbewertung <?php echo esc_attr( $opz_rev['name'] ); ?>" />
          </div>
          <div class="opz-review-stars" aria-hidden="true">★★★★★</div>
          <h3 class="opz-review-title"><?php echo esc_html( $opz_rev['title'] ); ?></h3>
          <p class="opz-review-text"><?php echo esc_html( $opz_rev['text'] ); ?></p>
          <div class="opz-review-name"><?php echo esc_html( $opz_rev['name'] ); ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
  /* Kein "Größentabelle"-Link beim Gurt (weder Plugin noch global). */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  /* Kurzbeschreibung (short description) des Gurts: Standard-Punkte (•) ausblenden,
     nur ✅ aus dem Text bleibt; etwas Abstand zwischen "Vorteile:" und der Liste.
     (Diese Vorlage wird nur auf orto-ortopas-Seiten geladen.) */
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

  .opz-why { padding: 44px 0; }
  .opz-why.opz-customers { background: #f7f7f7; }
  .opz-wrap { max-width: 1180px; margin: 0 auto; padding: 0 16px; }
  .opz-row { display: grid; grid-template-columns: 1fr 1fr; gap: 44px; align-items: center; }
  .opz-media img,
  .opz-media video { width: 100%; height: auto; border-radius: 12px; display: block; }
  .opz-stars { color: #f5a623; font-size: 24px; letter-spacing: 2px; margin-bottom: 10px; }
  .opz-title { font-size: clamp(26px,3.2vw,40px); font-weight: 800; color: #1c1c1c; line-height: 1.15; margin: 0 0 16px; }
  .opz-copy p { font-size: 16px; line-height: 1.7; color: #333; margin: 0 0 14px; }
  .opz-sub { font-size: 17px; line-height: 1.6; color: #333; margin: 0; }

  /* --- 4) Sektion mit Karten (grauer Hintergrund / noriks Stil) --- */
  .opz-why.opz-cards { background: #f7f7f7; }
  .opz-cards-title { text-align: center; font-size: clamp(22px,2.6vw,30px); font-weight: 800; color: #1c1c1c; margin: 0 0 32px; line-height: 1.2; }
  .opz-cards-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 22px; }
  .opz-card { background: #fff; border-radius: 14px; padding: 26px 22px; text-align: center; box-shadow: 0 2px 10px rgba(0,0,0,0.05); }
  .opz-card-media { width: 108px; height: 108px; margin: 0 auto 18px; border-radius: 50%; overflow: hidden; }
  .opz-card-media video { width: 100%; height: 100%; object-fit: cover; display: block; }
  .opz-card-head { display: flex; align-items: center; justify-content: center; gap: 8px; margin: 0 0 10px; }
  .opz-check { flex: 0 0 auto; line-height: 0; }
  .opz-card-title { font-size: 18px; font-weight: 800; color: #1c1c1c; margin: 0; line-height: 1.2; }
  .opz-card-text { font-size: 14px; line-height: 1.55; color: #555; margin: 0; }

  /* --- Vergleichstabelle (noriks grüner Stil) --- */
  .opz-why.opz-compare { background: #f7f7f7; }
  .opz-table { width: 100%; border-collapse: separate; border-spacing: 0; background: #fff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 18px rgba(0,0,0,0.07); }
  .opz-table th, .opz-table td { padding: 13px 14px; text-align: center; vertical-align: middle; }
  .opz-table thead th { background: #22a45d; color: #fff; font-size: 15px; font-weight: 800; }
  .opz-table thead .opz-th-feat { background: #22a45d; }
  .opz-table .opz-feat { background: #22a45d; color: #fff; font-weight: 700; text-align: left; font-size: 14px; line-height: 1.25; width: 55%; }
  .opz-table tbody tr td { border-bottom: 1px solid #eee; background: #fff; }
  .opz-table tbody tr:last-child td,
  .opz-table tbody tr:last-child .opz-feat { border-bottom: 0; }
  .opz-table .opz-brand { background: #f2fbf6; }
  .opz-yes, .opz-no { display: inline-block; vertical-align: middle; }

  /* --- 8) Kundenbewertungen (mit Bild) --- */
  .opz-reviews-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 26px; }
  .opz-review { background: #fafafa; border-radius: 12px; overflow: hidden; box-shadow: 0 2px 10px rgba(0,0,0,0.05); text-align: center; }
  .opz-review-media { width: 100%; aspect-ratio: 1 / 1; background: #eee; }
  .opz-review-media img { width: 100%; height: 100%; object-fit: cover; display: block; }
  .opz-review-stars { color: #f5b301; font-size: 20px; letter-spacing: 2px; margin: 16px 0 8px; }
  .opz-review-title { font-size: 17px; font-weight: 800; color: #1c1c1c; margin: 0 14px 10px; line-height: 1.25; }
  .opz-review-text { font-size: 14px; line-height: 1.6; color: #444; margin: 0 16px 14px; }
  .opz-review-name { font-size: 13px; font-style: italic; font-weight: 700; color: #333; border-top: 1px solid #e6e6e6; margin: 0 16px; padding: 12px 0 18px; }

  @media (max-width: 820px) {
    .opz-row { grid-template-columns: 1fr; gap: 22px; }
    .opz-title { text-align: left; }
    .opz-cards-grid { grid-template-columns: 1fr; gap: 16px; }
    .opz-reviews-grid { grid-template-columns: 1fr; gap: 18px; }
    .opz-table th, .opz-table td { padding: 11px 10px; }
    .opz-table .opz-feat { font-size: 13px; }
    .opz-table thead th { font-size: 14px; }
  }
</style>
