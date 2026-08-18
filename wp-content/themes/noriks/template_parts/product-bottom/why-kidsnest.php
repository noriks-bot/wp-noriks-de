<?php
/**
 * product-bottom: NORIKS KidsNest — Kinderkissen für richtiges Atmen (orto-kidsnest).
 * Kopie der tryneedo.com/products/kids-pillow Sektionen, DE-Übersetzung (abgeschwächte med. Aussagen).
 * Reihenfolge:
 *   1. Trust marquee (blau)  2. "Beginnen Sie heute Abend..." (Bild L / Text R, blauer Titel)
 *   3. "Richtige Unterstützung..." (Text L / Bild R)  4. Statistik 94/60/98 (hellblau, 3 Karten mit Ringen)
 *   5. "Kinderkissen #1 2026" + Sterne + laufende Fotoleiste
 * Blau: #2b3fb0, hell: #eef1fb, navy: #1b2450. Bilder: img/kidsnest/
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$kn = get_template_directory_uri() . '/img/kidsnest/';
?>

<!-- ============ 1) Trust marquee (plava traka, vrti se) ============ -->
<div class="kn-marquee" aria-hidden="true">
  <div class="kn-marquee-track">
    <?php $kn_ticker = array('VON KINDERÄRZTEN EMPFOHLEN','OEKO-TEX® MEMORY-SCHAUM','3-ZONEN-STRUKTUR','90 NÄCHTE PROBESCHLAFEN','HYPOALLERGEN','WASCHBARER BEZUG');
    for ( $r = 0; $r < 2; $r++ ) { foreach ( $kn_ticker as $t ) { echo '<span class="kn-tick">'.esc_html($t).'</span><span class="kn-dot">•</span>'; } } ?>
  </div>
</div>

<!-- ============ 2) Pocnite veceras — slika LIJEVO, tekst DESNO ============ -->
<section class="kn-sec">
  <div class="kn-wrap kn-row2">
    <div class="kn-media"><img src="<?php echo esc_url( $kn.'01-poravnan-de.webp' ); ?>" alt="Perfekt ausgerichtet — Kopf, Nacken und Wirbelsäule im Schlaf" loading="lazy" onerror="this.style.display='none'"></div>
    <div class="kn-copy">
      <p class="kn-eyebrow">Entwickelt mit Zahnärzten für die Atemwege von Kindern</p>
      <h2 class="kn-h2 kn-h2-blue">Beginnen Sie noch heute Abend, den verborgenen Schaden zu korrigieren.</h2>
      <p>Kinderzahnärzte mit Schwerpunkt Atemwege warnen Eltern vor demselben stillen Problem: Kinder, die schnarchen und durch den Mund atmen, "schlafen nicht einfach nur schlechter". Ihr Kiefer, ihr Gaumen und ihre Gesichtsstruktur können sich langsam in die falsche Richtung entwickeln.</p>
      <p><strong>Und das Zeitfenster für die Korrektur bleibt nicht für immer offen.</strong></p>
      <p>Das NORIKS <strong>KidsNest Kissen</strong> wurde entwickelt, um <strong>Kopf, Kiefer und Atemwege während des Schlafs in der richtigen Position zu unterstützen</strong> — es fördert die Nasenatmung und eine gesündere Gesichtsentwicklung, solange es noch darauf ankommt.</p>
      <p><strong>Das ist nicht einfach nur ein Kissen.<br>Es ist nächtliche Atemwegsunterstützung in den Jahren, die das Gesicht Ihres Kindes formen.</strong></p>
    </div>
  </div>
</section>

<!-- ============ 3) Pravilna potpora — tekst LIJEVO, slika DESNO ============ -->
<section class="kn-sec">
  <div class="kn-wrap kn-row2">
    <div class="kn-copy">
      <h2 class="kn-h2 kn-h2-blue">Die richtige Unterstützung von Kopf und Nacken ist entscheidend für gesunden Schlaf.</h2>
      <p>Das ergonomische Kinderkissen hält <strong>Kopf und Nacken in natürlicher Ausrichtung und hilft, das Abkippen des Kopfes</strong> während der Nacht zu verhindern. So bleibt die Wirbelsäule korrekt ausgerichtet — auch wenn sich Ihr Kind im Schlaf viel dreht.</p>
      <p><strong>Das Ergebnis: ruhigerer Schlaf und bessere Erholung.</strong></p>
    </div>
    <div class="kn-media"><img src="<?php echo esc_url( $kn.'kn-de-2.webp' ); ?>" alt="Kind schläft ruhig auf dem KidsNest Kissen" loading="lazy" onerror="this.style.display='none'"></div>
  </div>
</section>

<!-- ============ 4) Statistika — svijetlo-plava, 3 kartice s krugovima ============ -->
<section class="kn-sec kn-stats-sec">
  <div class="kn-wrap">
    <h2 class="kn-h2 kn-h2-blue kn-center">Geschaffen, um das heranwachsende Gesicht Ihres Kindes zu schützen</h2>
    <p class="kn-sub kn-center"><strong>Schlafen mit offenem Mund kann in der Kindheit das wachsende Gesicht umformen. KidsNest hält den Kopf Ihres Kindes ausgerichtet, damit es durch die Nase atmet.</strong></p>
    <div class="kn-stats">
      <?php
      $kn_stats = array(
        array('94','165.3','der Eltern bemerken innerhalb von 2 Wochen, dass ihr Kind <strong>mit geschlossenem Mund</strong> schläft'),
        array('60','105.5','der Gesichtsentwicklung Ihres <strong>Kindes</strong> ist bis zum 6. Lebensjahr geformt — dieses Zeitfenster öffnet sich nicht wieder'),
        array('98','172.3','der Eltern würden <strong>KidsNest</strong> weiterempfehlen, um das Lächeln eines weiteren Kindes zu schützen'),
      );
      foreach ( $kn_stats as $st ) : ?>
      <div class="kn-stat-card">
        <svg class="kn-ring" viewBox="0 0 64 64" aria-hidden="true">
          <circle cx="32" cy="32" r="28" fill="none" stroke="#dfe5f5" stroke-width="5"/>
          <circle cx="32" cy="32" r="28" fill="none" stroke="#2b3fb0" stroke-width="5" stroke-linecap="round" stroke-dasharray="<?php echo esc_attr($st[1]); ?> 175.9" transform="rotate(-90 32 32)"/>
          <text x="32" y="38" text-anchor="middle" class="kn-ring-t"><?php echo esc_html($st[0]); ?>%</text>
        </svg>
        <p><?php echo wp_kses_post($st[2]); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ 5) #1 djecji jastuk + zvjezdice + drseca foto traka ============ -->
<section class="kn-sec kn-rated-sec">
  <div class="kn-wrap">
    <h2 class="kn-h2 kn-h2-blue kn-center">Ausgezeichnet als Kinder-Schlafkissen #1 im Jahr 2026</h2>
    <p class="kn-sub kn-center">Unterstützen Sie ihren Schlaf — unterstützen Sie die Jahre des Heranwachsens.</p>
    <p class="kn-stars kn-center"><span aria-hidden="true">★★★★★</span> Bewertung 4,8/5 auf Basis von 140+ Rezensionen</p>
  </div>
  <div class="kn-strip">
    <div class="kn-strip-track">
      <?php for ( $r = 0; $r < 2; $r++ ) : for ( $i = 1; $i <= 5; $i++ ) : ?>
        <img src="<?php echo esc_url( $kn.'traka/t'.$i.'.webp' ); ?>" alt="NORIKS KidsNest — Kinder und Eltern" loading="lazy" onerror="this.style.display='none'">
      <?php endfor; endfor; ?>
    </div>
  </div>
</section>

<!-- ============ 6) Kvaliteta materijala — slika LIJEVO, tekst DESNO ============ -->
<section class="kn-sec">
  <div class="kn-wrap kn-row2">
    <div class="kn-media"><img src="<?php echo esc_url( $kn.'kn-de-6.webp' ); ?>" alt="KidsNest — 3-Zonen-Struktur und atmungsaktives Gewebe aus der Nähe" loading="lazy" onerror="this.style.display='none'"></div>
    <div class="kn-copy">
      <h2 class="kn-h2 kn-h2-blue">Qualität, die man spürt — Nacht für Nacht.</h2>
      <p>Das dichte, atmungsaktive Gestrick und die sorgfältig geformte Oberfläche sind nicht nur fürs Auge da — <strong>jede Zone hat ihre Aufgabe</strong>. Die Mitte nimmt den Kopf sanft auf, die Ränder stützen den Nacken, und die Struktur behält ihre Form auch nach Monaten täglicher Nutzung.</p>
      <p>Der Bezug lässt sich abnehmen und in der Maschine waschen, der Schaum ist <strong>hypoallergen und milbenresistent</strong> — so bleibt das Kissen frisch, sauber und bereit für jede Nacht. Keine Kuhlen, kein Plattliegen, keine Kompromisse.</p>
      <p><strong>Ein Kissen, das auch nach einem Jahr noch aussieht — und stützt — wie am ersten Tag.</strong></p>
    </div>
  </div>
</section>

<style>
  .kn-wrap { max-width: 1440px; margin: 0 auto; padding: 0 22px; } /* isti container kao gornji .product */
  .kn-sec { padding: 60px 0; }
  .kn-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; }
  .kn-h2 { font-size: clamp(26px,3.2vw,40px); font-weight: 800; color: #1b2450; line-height: 1.14; margin: 0 0 16px; }
  .kn-h2-blue { color: #2b3fb0; }
  .kn-center { text-align: center; }
  .kn-eyebrow { font-size: 13px; font-weight: 800; letter-spacing: .02em; color: #1b2450; margin: 0 0 6px; }
  .kn-copy p { font-size: 15.5px; line-height: 1.65; color: #33394f; margin: 0 0 14px; }
  .kn-sub { font-size: 16px; line-height: 1.55; color: #33394f; max-width: 680px; margin: 0 auto 10px; }
  .kn-media img { width: 100%; height: auto; display: block; border-radius: 18px; box-shadow: 0 14px 40px rgba(27,36,80,.10); }

  /* 1) marquee */
  .kn-marquee { background: #2b3fb0; overflow: hidden; white-space: nowrap; margin-top: 26px; }
  @media (min-width: 861px) { .kn-marquee { margin-top: -20px; } } /* desktop: prepolovljen razmik do vsebine zgoraj */
  .kn-marquee + .kn-sec { padding-top: 26px; }
  .kn-marquee-track { display: inline-block; padding: 13px 0; animation: knScroll 28s linear infinite; }
  .kn-tick { color: #fff; font-weight: 800; font-style: italic; font-size: 15px; letter-spacing: .06em; text-transform: uppercase; }
  .kn-dot { color: #aebafe; margin: 0 22px; font-weight: 800; }
  @keyframes knScroll { from { transform: translateX(0); } to { transform: translateX(-50%); } }

  /* 4) statistika */
  .kn-stats-sec { background: #eef1fb; }
  .kn-stats { display: grid; grid-template-columns: repeat(3,1fr); gap: 24px; max-width: 1180px; margin: 30px auto 0; }
  .kn-stat-card { background: #fff; border-radius: 16px; padding: 34px 26px; text-align: center; box-shadow: 0 10px 28px rgba(27,36,80,.07); }
  .kn-ring { width: 150px; height: 150px; margin: 0 auto 18px; display: block; }
  .kn-ring-t { font-size: 15px; font-weight: 800; fill: #2b3fb0; }
  .kn-stat-card p { font-size: 15px; line-height: 1.5; color: #33394f; margin: 0; }
  .kn-stat-card p strong { color: #2b3fb0; }

  /* 5) rated + strip */
  .kn-rated-sec { background: #eef1fb; padding-bottom: 0; }
  .kn-stars { font-size: 16px; color: #1b2450; font-weight: 600; margin: 6px 0 26px; }
  .kn-stars span { color: #f5a623; letter-spacing: 2px; margin-right: 8px; }
  .kn-strip { overflow: hidden; width: 100vw; margin-left: calc(50% - 50vw); padding-bottom: 34px; }
  .kn-strip-track { display: flex; gap: 8px; width: max-content; animation: knScroll 60s linear infinite; }
  .kn-strip:hover .kn-strip-track { animation-play-state: paused; }
  .kn-strip-track img { width: 350px; aspect-ratio: 1/1; object-fit: cover; border-radius: 10px; display: block; flex: 0 0 auto; }

  @media (max-width: 860px) {
    .kn-sec { padding: 30px 0; }
    .kn-row2 { grid-template-columns: 1fr; gap: 18px; }
    .kn-row2 .kn-media { order: -1; }
    .kn-h2 { font-size: 2rem; }
    .kn-stats { grid-template-columns: 1fr; gap: 14px; margin-top: 18px; }
    .kn-ring { width: 120px; height: 120px; }
    .kn-strip-track img { width: 240px; }
  }
</style>
