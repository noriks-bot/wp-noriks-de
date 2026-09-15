<?php
/**
 * product-bottom: NORIKS ControlPro (orto-controlpro).
 * Preneseno s hrvaskega trga 1:1 — iste 4 sekcije, ista postavitev, prevedeno.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$cp      = get_template_directory_uri() . '/img/controlpro/';
$cp_path = get_template_directory() . '/img/controlpro/';
$cp_img = function( $file, $alt ) use ( $cp, $cp_path ) {
  if ( file_exists( $cp_path . $file ) ) {
    return '<img src="'.esc_url($cp.$file).'" alt="'.esc_attr($alt).'" loading="lazy">';
  }
  return '<div class="cpr-ph" role="img" aria-label="'.esc_attr($alt).'"><span>'.esc_html($alt).'</span></div>';
};
?>

<section class="cpr-sec">
  <div class="cpr-wrap cpr-row2">
    <div class="cpr-media"><?php echo $cp_img('08-vjezba-1.webp','Übung mit dem NORIKS ControlPro Trainer'); ?></div>
    <div class="cpr-copy">
      <h2 class="cpr-h2">Warum eine Kontraktion zu spüren und den Beckenboden wirklich zu stärken nicht dasselbe ist</h2>
      <p>Ihr Arzt hat Ihnen Kegelübungen empfohlen. Also haben Sie angespannt. Und Sie haben gespürt, dass es wirkt — diese Spannung, diese Kontraktion. Deshalb haben Sie weitergemacht. Wochen, vielleicht Monate.</p>
      <p>Der Harnverlust hörte trotzdem nicht auf.</p>
      <p>Der Grund ist einfach: eine Kontraktion zu spüren und echte Kraft im Beckenboden aufzubauen sind zwei verschiedene Dinge. Ohne Widerstand aktivieren Sie den Muskel nur — Sie trainieren ihn nicht. Sie spannen ins Leere, und kein Muskel im Körper ist so je stärker geworden.</p>
      <p>ControlPro ändert das. Ihr Beckenboden bekommt etwas, wogegen er drücken kann — echten physischen Widerstand, der genau die Muskeln belastet, die die Blase kontrollieren.</p>
    </div>
  </div>
</section>

<section class="cpr-sec">
  <div class="cpr-wrap cpr-row2">
    <div class="cpr-media"><?php echo $cp_img('09-vjezba-2.webp','Drücken gegen Widerstand — 3 Sätze à 10 Wiederholungen täglich'); ?></div>
    <div class="cpr-copy">
      <h2 class="cpr-h2">3 Sätze à 10 Wiederholungen täglich. Mehr nicht.</h2>
      <p>Setzen Sie sich auf einen Stuhl und platzieren Sie ControlPro zwischen den Knien. Drücken Sie gegen den Widerstand — 3 Sätze à 10 Wiederholungen täglich.</p>
      <p>Ohne Einführen, ohne Kabel, ohne App. Es sieht aus wie ein Trainingsgerät, weil es eines ist. Nutzen Sie es bei den Nachrichten oder am Schreibtisch — niemand muss es sehen.</p>
      <a class="cpr-cta" href="#bundle-selector">Holen Sie sich noch heute die Kontrolle zurück</a>
    </div>
  </div>
</section>

<section class="cpr-sec">
  <div class="cpr-wrap cpr-row2">
    <div class="cpr-media"><?php echo $cp_img('01-usporedba.png','Vergleich: Einlagen, EMS-Geräte, reine Kegelübungen und NORIKS'); ?></div>
    <div class="cpr-copy">
      <h2 class="cpr-h2">Warum das wirkt, wenn nichts anderes geholfen hat</h2>
      <p>Einlagen und Schutz lindern nur das Symptom — Sie kaufen sie Monat für Monat, für immer, und nichts wird stärker.</p>
      <p>EMS-Geräte (175–350 €) kontrahieren den Muskel <em>für Sie</em>, als würde jemand anderes Ihre Liegestütze machen — die Verbindung Gehirn–Muskel entsteht nie, und viele erfordern innere Sonden.</p>
      <p>Reine Kegelübungen sind eine gute Idee, aber ohne Widerstand und ohne Rückmeldung trainieren die meisten Männer blind und geben nach wenigen Wochen auf.</p>
      <p>NORIKS ControlPro zahlen Sie einmal, die Arbeit machen Sie selbst gegen echten Widerstand, und es nutzt dasselbe Prinzip der progressiven Belastung, das jeden anderen Muskel stärkt.</p>
      <p>Ihr Beckenboden ist nicht kaputt.</p>
      <p class="cpr-strong">Er ist nur untertrainiert.</p>
    </div>
  </div>
</section>

<section class="cpr-sec cpr-revs">
  <div class="cpr-wrap">
    <h2 class="cpr-h2 cpr-center">Männer wie Sie sehen bereits Ergebnisse</h2>
    <div class="cpr-rev-grid">
      <?php foreach ( array(
        array( 'Von 4 Einlagen täglich auf 0', 'Nach der Prostata-OP habe ich über ein Jahr Kegelübungen gemacht, ohne Fortschritt. Ich war skeptisch, aber ich nutze es seit etwa fünf Wochen und bin von vier Einlagen täglich auf null gekommen.', 'Michael R.' ),
        array( 'Ich war skeptisch', 'Ich hatte zwei Jahre Harnverlust, Übungen brachten keine Veränderung. Den Unterschied spürt man sofort, wenn die Muskeln echten Widerstand haben. Jetzt verliere ich nichts mehr.', 'Georg P.' ),
        array( 'Einfach und gut verarbeitet', 'Einfaches, solide gebautes Gerät. Drücken und loslassen, mit der Zeit gewinnt man deutlich mehr Kontrolle. Finger weg von billigen Kopien — sie haben nicht denselben Widerstand.', 'Andreas T.' ),
      ) as $rv ) : ?>
        <article class="cpr-rev">
          <span class="cpr-quote" aria-hidden="true">&#10077;</span>
          <div class="cpr-stars" aria-label="5/5">★★★★★</div>
          <p class="cpr-rev-title"><?php echo esc_html( $rv[0] ); ?></p>
          <p class="cpr-rev-text">„<?php echo esc_html( $rv[1] ); ?>"</p>
          <p class="cpr-rev-name"><?php echo esc_html( $rv[2] ); ?></p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
  .cpr-sec { padding: 46px 0; }
  .cpr-wrap { max-width: 1180px; margin: 0 auto; padding: 0 18px; }
  .cpr-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
  .cpr-h2 { font-size: clamp(24px,3.1vw,34px); font-weight: 800; color: #141414; line-height: 1.2; margin: 0 0 16px; }
  .cpr-center { text-align: center; }
  .cpr-copy p { font-size: 15.5px; line-height: 1.65; color: #3a3a3a; margin: 0 0 14px; }
  .cpr-strong { font-weight: 700; color: #141414; }
  .cpr-media img { width: 100%; height: auto; display: block; border-radius: 6px; }

  .cpr-ph { width: 100%; aspect-ratio: 1/1; background: #ededed; border: 1px dashed #d3d3d3; border-radius: 6px;
            display: flex; align-items: center; justify-content: center; padding: 18px; box-sizing: border-box; }
  .cpr-ph span { font-size: 13px; line-height: 1.45; color: #9a9a9a; text-align: center; }

  .cpr-cta { display: inline-block; margin-top: 6px; background: #141414; color: #fff; font-weight: 700; font-size: 15px; padding: 13px 26px; border-radius: 8px; text-decoration: none; }
  .cpr-cta:hover { background: #E8450E; color: #fff; }

  /* 4) kartice recenzija */
  .cpr-rev-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 22px; margin-top: 26px; }
  .cpr-rev { position: relative; background: #f4f4f4; border-radius: 10px; padding: 22px 20px; text-align: center; }
  .cpr-quote { position: absolute; top: 14px; right: 16px; font-size: 20px; line-height: 1; color: #141414; }
  .cpr-stars { color: #f5b301; font-size: 16px; letter-spacing: 1px; }
  .cpr-rev-title { font-weight: 800; color: #141414; font-size: 15px; margin: 10px 0 10px; }
  .cpr-rev-text { font-size: 14px; line-height: 1.6; color: #4a4a4a; margin: 0 0 14px; }
  .cpr-rev-name { font-size: 13px; font-style: italic; color: #6b6b6b; margin: 0; }

  @media (max-width: 820px) {
    /* enakomeren razmik: med sekcijama isto kao med sliku i tekst (18px) */
    .cpr-sec { padding: 9px 0; }
    .cpr-sec:first-of-type { padding-top: 0; }
    .cpr-wrap { padding-left: 0; padding-right: 0; }
    .cpr-row2 { grid-template-columns: 1fr; gap: 18px; }
    .cpr-h2 { font-size: 1.9rem; margin-bottom: 12px; }
    .cpr-copy p { margin-bottom: 12px; }
    .cpr-cta { margin-top: 2px; }
    .cpr-rev-grid { grid-template-columns: 1fr; gap: 18px; margin-top: 18px; }
  }

  /* Nema "Tablica veličina" linka na ControlPro uređaju (ni plugin ni globalni). */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  /* Kratki opis: skupljeni razmaci — i kad su točke <li> i kad su odvojeni <p>.
     (Ovaj se predložak učitava samo na orto-controlpro stranicama.) */
  .woocommerce-product-details__short-description { margin-bottom: 10px !important; }
  .woocommerce-product-details__short-description ul { list-style: none; margin: 4px 0 8px; padding-left: 0; }
  .woocommerce-product-details__short-description ul li { list-style: none; padding-left: 0; margin: 0 0 4px; line-height: 1.4; }
  .woocommerce-product-details__short-description p { margin: 0 0 5px !important; line-height: 1.4; }
  /* viseći uvod: prijelom u drugi red poravnan s tekstom, ne s ✓ */
  .woocommerce-product-details__short-description ul li,
  .woocommerce-product-details__short-description p { padding-left: 1.6em; text-indent: -1.6em; }
  .woocommerce-product-details__short-description p:last-child { margin-bottom: 0 !important; }
  .woocommerce-product-details__short-description br { line-height: 0.9; }
  /* prazni odstavci/prijelomi u kratkom opisu ne smiju stvarati praznine */
  .woocommerce-product-details__short-description p:empty,
  .woocommerce-product-details__short-description br:first-child,
  .woocommerce-product-details__short-description br + br { display: none !important; }

  /* manji odmak između kratkog opisa i cijene te između cijene i scarcity bara */
  .single-product .summary .price,
  .single-product div.product p.price { margin-top: 4px !important; margin-bottom: 8px !important; }
  .single-product .gck-countdown { margin-top: 8px !important; }
  .single-product .summary > p:empty, .single-product .summary > br { display: none !important; }
</style>

<script>
(function(){
  /* Kratki opis iz admina cesto sadrzi prazne odstavke (<p>&nbsp;</p>) koji rade
     velike praznine iznad cijene — CSS ih ne moze uhvatiti, pa ih uklonimo. */
  function cprTrimDesc(){
    var box = document.querySelector('.woocommerce-product-details__short-description');
    if (!box) { return; }
    box.querySelectorAll('p, div').forEach(function(el){
      if (el.querySelector('img, ul, ol, svg')) { return; }
      var t = (el.textContent || '').replace(/\u00a0/g, ' ').trim();
      if (t === '') { el.remove(); }
    });
  }
  if (document.readyState === 'loading') { document.addEventListener('DOMContentLoaded', cprTrimDesc); } else { cprTrimDesc(); }

  document.querySelectorAll('a.cpr-cta[href="#bundle-selector"]').forEach(function(a){
    a.addEventListener('click', function(e){ e.preventDefault(); var t=document.getElementById('bundle-selector')||document.querySelector('.single_add_to_cart_button'); if(t) t.scrollIntoView({behavior:'smooth',block:'center'}); });
  });
})();
</script>
