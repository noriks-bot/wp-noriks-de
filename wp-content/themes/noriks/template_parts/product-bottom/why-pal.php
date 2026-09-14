<?php
/**
 * product-bottom: NORIKS Pal — stap s dvije rucke, svjetiljkom i alarmom (orto-pal).
 * Pravilo: svaka sekcija ima TOCNO JEDNU sliku, naizmjenicno lijevo/desno,
 * pozadine se izmjenjuju (prva tonirana). Iznimka je galerija kupaca (12).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$pl      = get_template_directory_uri() . '/img/pal/';
$pl_path = get_template_directory() . '/img/pal/';
$pl_vid  = function( $file, $poster, $alt ) use ( $pl, $pl_path ) {
  if ( ! file_exists( $pl_path . $file ) ) { return ''; }
  return '<video class="npl-video" autoplay muted loop playsinline preload="metadata" poster="'
       . esc_url( $pl . $poster ) . '" aria-label="' . esc_attr( $alt ) . '">'
       . '<source src="' . esc_url( $pl . $file ) . '" type="video/mp4"></video>';
};
$pl_img  = function( $file, $alt, $cls = '' ) use ( $pl, $pl_path ) {
  if ( ! file_exists( $pl_path . $file ) ) { return ''; }
  return '<img class="' . esc_attr( $cls ) . '" src="' . esc_url( $pl . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
?>

<!-- 1) USTAJANJE -->
<!-- 1) PROBLEM — slika lijevo -->
<section class="npl-sec npl-tint">
  <div class="npl-wrap npl-row2">
    <div class="npl-media"><?php echo $pl_img( 'pal-rucke.jpg', 'Orthopädische Griffe zum Abstützen' ); ?></div>
    <div class="npl-copy">
      <p class="npl-kicker">Der zweite Griff</p>
      <h2 class="npl-h2">Halt genau dort, wo Sie ihn brauchen</h2>
      <p>Neben dem oberen Griff hat der Stock auch einen <strong>zweiten Griff weiter unten</strong>. An ihm halten Sie sich fest, wenn Sie aus dem Sessel, aus dem Bett oder von einem niedrigen Stuhl aufstehen.</p>
      <p>Der Druck geht senkrecht nach unten in den stabilen Fuß — nicht nach vorn, wo er Sie aus dem Gleichgewicht ziehen würde. Deshalb stehen Sie in einer Bewegung auf, ohne sich vorzubeugen und ohne fremde Hilfe.</p>
      <ul class="npl-check">
        <li>Aufstehen aus Sessel, Bett oder von der Bank</li>
        <li>Die Griffe scheuern die Handfläche auch nach längerem Gehen nicht</li>
        <li>Ohne zu warten, bis Ihnen jemand hilft</li>
      </ul>
      <a class="npl-cta" href="#bundle-selector">Angebot ansehen</a>
    </div>
  </div>
</section>

<!-- 3) PREGLED ŠTAPA — slika lijevo -->
<section class="npl-sec">
  <div class="npl-wrap npl-row2 npl-row2--rev">
    <div class="npl-copy">
      <p class="npl-kicker">Stabilität</p>
      <h2 class="npl-h2">Er steht von allein — kein Bücken nach dem Stock</h2>
      <p>Vier Gummifüße halten den Stock aufrecht, wenn Sie ihn loslassen. Er fällt nicht neben dem Sofa, am Tisch oder im Wartezimmer zu Boden, also müssen Sie sich nicht danach bücken.</p>
      <p>Das ist die Kleinigkeit, die Sie schon am ersten Tag merken: Der Stock wartet dort, wo Sie ihn gelassen haben.</p>
    </div>
    <div class="npl-media"><?php echo $pl_vid( 'pal-video.mp4', 'pal-video.jpg', 'Der Stock steht von allein auf vier Füßen' ); ?></div>
  </div>
</section>

<!-- 5) PROTUKLIZNA BAZA — slika lijevo -->
<section class="npl-sec npl-tint">
  <div class="npl-wrap npl-row2">
    <div class="npl-media"><?php echo $pl_img( 'pal-pregled.jpg', 'Überblick: zwei Griffe, Lampe, Alarm, vier Füße' ); ?></div>
    <div class="npl-copy">
      <p class="npl-kicker">Was Sie bekommen</p>
      <h2 class="npl-h2">Fünf Dinge in einem Stock</h2>
      <div class="npl-points">
        <div class="npl-point"><h3>Zwei Griffe</h3><p>Der obere zum Gehen, der untere zum Aufstehen.</p></div>
        <div class="npl-point"><h3>Vier Füße</h3><p>Der Stock steht von allein und fällt nicht zu Boden.</p></div>
        <div class="npl-point"><h3>Lampe</h3><p>Beleuchtet den Weg vor Ihnen im Dunkeln.</p></div>
        <div class="npl-point"><h3>Alarm</h3><p>Lautes Signal, das die Mitbewohner hören.</p></div>
        <div class="npl-point"><h3>Faltbare Ausführung</h3><p>Passt in die Tasche und ins Handschuhfach.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- 4) STOJI SAM (video) — video desno -->
<section class="npl-sec">
  <div class="npl-wrap npl-row2 npl-row2--rev">
    <div class="npl-copy">
      <p class="npl-kicker">Der Fuß</p>
      <h2 class="npl-h2">Hält auf Fliesen, Parkett und draußen</h2>
      <p>Die Gummifüße sind <strong>rutschfest</strong> und rutschen auf glatten Böden nicht. Draußen passt sich der Fuß unebenem Gelände an und bleibt stabil.</p>
      <ul class="npl-check">
        <li>Rutscht nicht auf Fliesen, Parkett oder Laminat</li>
        <li>Passt sich unebenem Gelände an</li>
        <li>Die Füße lassen sich ersetzen, wenn sie abgenutzt sind</li>
      </ul>
    </div>
    <div class="npl-media"><?php echo $pl_img( 'pal-nozice.jpg', 'Vier rutschfeste Gummifüße' ); ?></div>
  </div>
</section>

<!-- 6) SVJETILJKA — slika desno -->
<section class="npl-sec npl-tint">
  <div class="npl-wrap npl-row2">
    <div class="npl-media"><?php echo $pl_img( 'pal-sklopivo.jpg', 'Faltbarer und verstellbarer Stock' ); ?></div>
    <div class="npl-copy">
      <p class="npl-kicker">Transport</p>
      <h2 class="npl-h2">Faltet sich in einer Sekunde und passt in die Tasche</h2>
      <p>Die Teile sind mit einem Innengummi verbunden, deshalb lässt sich der Stock <strong>mit einer Bewegung</strong> zerlegen und zusammensetzen, ohne Werkzeug und ohne fremde Hilfe. Gefaltet passt er in die Tasche oder ins Handschuhfach.</p>
      <p>Die Höhe stellen Sie in wenigen Sekunden ein, deshalb passt derselbe Stock einer Person mit 155 cm und einer mit 190 cm.</p>
      <ul class="npl-check">
        <li>Zerlegen und Zusammensetzen ohne Werkzeug</li>
        <li>Verstellbare Länge für alle Körpergrößen</li>
        <li>Die Teile bleiben verbunden — nichts geht verloren</li>
      </ul>
    </div>
  </div>
</section>

<section class="npl-sec npl-rev">
  <div class="npl-wrap">
    <p class="npl-kicker npl-center">Bei unseren Kunden</p>
    <h2 class="npl-h2 npl-center">Der Stock in echten Wohnungen</h2>
    <p class="npl-sub">Fotos und Kommentare von Kunden — neben dem Sessel, im Flur, im Dunkeln und gefaltet für unterwegs.</p>
    <div class="npl-rev__grid">
      <?php
      $pl_reviews = array(
        array( 'img' => 'pal-ugc-1.jpg',    'name' => 'Maria K.',  'meta' => 'Berlin · vor 2 Monaten gekauft',
               'text' => '„Ich habe ihn neben dem Sessel. Früher bin ich in drei Anläufen aufgestanden, jetzt greife ich den unteren Griff und stehe beim ersten Mal auf.”' ),
        array( 'img' => 'pal-ugc-3.jpg',    'name' => 'Dieter P.', 'meta' => 'München · vor 3 Monaten gekauft',
               'text' => '„Er steht von allein am Tisch und fällt nicht um. Für mich ist das die größte Sache — ich bücke mich nicht mehr alle fünf Minuten nach dem Stock.”' ),
        array( 'img' => 'pal-noc.jpg',      'name' => 'Anna M.',  'meta' => 'Hamburg · vor einem Monat gekauft',
               'text' => '„Die Lampe schalte ich ein, wenn ich nachts ins Bad gehe. Ich wecke meinen Mann nicht mit dem großen Licht und sehe den Boden vor mir.”' ),
        array( 'img' => 'pal-ugc-baza.jpg', 'name' => 'Jan S.',    'meta' => 'Köln · vor 6 Wochen gekauft',
               'text' => '„Der Fuß ist breit und rutscht nicht. Ich habe ihn auf den Badfliesen und auf der nassen Terrasse ausprobiert — er hält.”' ),
        array( 'img' => 'pal-ugc-6.jpg',    'name' => 'Renate B.',    'meta' => 'Stuttgart · vor 2 Monaten gekauft',
               'text' => '„Ich habe ihn meiner Mutter zum 78. Geburtstag gekauft. Sie stellt die Höhe selbst ein und faltet ihn selbst, ohne jede Hilfe.”' ),
        array( 'img' => 'pal-ugc-5.jpg',    'name' => 'Stefan L.', 'meta' => 'Leipzig · vor 4 Monaten gekauft',
               'text' => '„Ich habe ihn im Auto, wenn ich zum Arzt fahre. Er faltet sich in einer Sekunde und passt in die Tasche, im Wartezimmer stört er nicht.”' ),
      );
      foreach ( $pl_reviews as $r ) : ?>
      <article class="npl-rev__card">
        <div class="npl-rev__img"><?php echo $pl_img( $r['img'], 'Fotografija kupca — NORIKS Pal' ); ?></div>
        <div class="npl-rev__body">
          <div class="npl-rev__stars" aria-label="Ocjena 5 od 5">★★★★★</div>
          <p class="npl-rev__text"><?php echo esc_html( $r['text'] ); ?></p>
          <p class="npl-rev__name"><?php echo esc_html( $r['name'] ); ?>
            <svg width="15" height="15" viewBox="0 0 16 16" aria-hidden="true"><circle cx="8" cy="8" r="8" fill="#2f9e5f"/><path d="M5 8l2 2 4-4" fill="none" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </p>
          <p class="npl-rev__meta"><?php echo esc_html( $r['meta'] ); ?></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="npl-sec npl-tint">
  <div class="npl-wrap npl-row2 npl-row2--rev">
    <div class="npl-copy">
      <p class="npl-kicker">Der Unterschied</p>
      <h2 class="npl-h2">Von „ich brauche Hilfe” zu „ich gehe allein”</h2>
      <p>Der Unterschied liegt nicht in der Kraft der Beine, sondern darin, dass Sie etwas zum Festhalten haben. Der zweite Griff trägt das Gewicht statt Ihrer Schultern und Handgelenke.</p>
      <p class="npl-strong">Selbstständiges Aufstehen und sogar ein Spaziergang im Park.</p>
      <a class="npl-cta" href="#bundle-selector">Ohne Risiko bestellen — 30 Tage</a>
    </div>
    <div class="npl-media"><?php echo $pl_img( 'pal-prije-poslije.jpg', 'Vorher und nachher — selbstständige Bewegung' ); ?></div>
  </div>
</section>

<!-- 14) ŠEST RAZLOGA — slika desno -->
<style>
.npl-sec { padding: 62px 0; background: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #12212b; }
.npl-sec * { box-sizing: border-box; }
.npl-tint { background: #eef6f8; }
.npl-wrap { width: 100%; max-width: 1240px; margin: 0 auto; padding: 0 24px; }
.npl-kicker { font-size: 12.5px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #2b8fa6; margin: 0 0 10px; }
.npl-h2 { font-size: clamp(25px, 3.2vw, 36px); font-weight: 800; line-height: 1.18; letter-spacing: -.01em; margin: 0 0 16px; }
.npl-center { text-align: center; }
.npl-copy p { font-size: 16px; line-height: 1.7; color: #465863; margin: 0 0 14px; }
.npl-strong { font-weight: 800; color: #12212b !important; font-size: 17px !important; }
.npl-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 52px; align-items: center; }
.npl-media img { width: 100%; display: block; border-radius: 14px; box-shadow: 0 2px 4px rgba(18,33,43,.05), 0 14px 40px rgba(18,33,43,.10); }
.npl-check { list-style: none; padding: 0; margin: 4px 0 0; display: flex; flex-direction: column; gap: 11px; }
.npl-check li { position: relative; padding-left: 28px; font-size: 15.5px; line-height: 1.5; }
.npl-check li::before { content: "✓"; position: absolute; left: 0; top: -1px; width: 20px; height: 20px; border-radius: 50%; background: #2f9e5f; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.npl-points { display: flex; flex-direction: column; gap: 16px; margin-top: 4px; }
.npl-point h3 { font-size: 16.5px; font-weight: 800; margin: 0 0 4px; color: #2b8fa6; }
.npl-point p { font-size: 15px; color: #465863; line-height: 1.6; margin: 0; }
.npl-six { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-top: 4px; }
.npl-reason { background: #fff; border: 1px solid #d9e8ec; border-radius: 12px; padding: 18px 16px; }
.npl-reason span { display: inline-flex; align-items: center; justify-content: center; width: 26px; height: 26px; border-radius: 50%; background: #2b8fa6; color: #fff; font-weight: 800; font-size: 13px; margin-bottom: 9px; }
.npl-reason h3 { font-size: 15.5px; font-weight: 800; margin: 0 0 5px; line-height: 1.3; }
.npl-reason p { font-size: 14px; color: #465863; line-height: 1.55; margin: 0; }
.npl-cta { display: inline-block; background: #12212b; color: #fff !important; font-size: 15px; font-weight: 700; padding: 15px 30px; border-radius: 8px; text-decoration: none; }
.npl-cta:hover { background: #2b8fa6; color: #fff !important; }
.npl-rev__grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
.npl-rev__card { background: #fff; border: 1px solid #d9e8ec; border-radius: 14px; overflow: hidden;
  display: flex; flex-direction: column; box-shadow: 0 1px 2px rgba(18,33,43,.04), 0 8px 24px rgba(18,33,43,.06); }
.npl-rev__img img { width: 100%; aspect-ratio: 1/1; object-fit: cover; display: block; border-radius: 0; box-shadow: none; }
.npl-rev__body { padding: 16px 18px 18px; }
.npl-rev__stars { color: #f0a020; font-size: 14px; letter-spacing: 1px; margin: 0 0 8px; }
.npl-rev__text { font-size: 14.5px; line-height: 1.6; color: #46545e; margin: 0 0 12px; }
.npl-rev__name { display: flex; align-items: center; gap: 6px; font-size: 14.5px; font-weight: 800; color: #12212b; margin: 0; }
.npl-rev__name svg { flex: 0 0 15px; }
.npl-rev__meta { font-size: 12.5px; color: #7b8b94; margin: 3px 0 0; }
.npl-sub { text-align: center; font-size: 16px; color: #5b6d78; max-width: 60ch; margin: 0 auto 34px; line-height: 1.6; }
.npl-video { width: 100%; display: block; border-radius: 14px; }
@media (max-width: 980px) {
  .npl-rev__grid { grid-template-columns: 1fr 1fr; }
    .npl-row2 { grid-template-columns: 1fr; gap: 30px; }
  .npl-row2--rev .npl-media { order: -1; }
  .npl-six { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 560px) {
  .npl-rev__grid { grid-template-columns: 1fr; gap: 16px; }
  .npl-sec { padding: 44px 0; }
  .npl-wrap { padding: 0 16px; }
  .npl-six { grid-template-columns: 1fr; gap: 14px; }
  .npl-cta { width: 100%; text-align: center; }
}

/* ── kratek opis izdelka: kljukice namesto pik ─────────────────────── */
.woocommerce div.product .woocommerce-product-details__short-description ul,
.woocommerce-product-details__short-description ul {
  list-style: none !important; margin: 10px 0 14px !important; padding-left: 0 !important; }
.woocommerce div.product .woocommerce-product-details__short-description ul li,
.woocommerce-product-details__short-description ul li {
  list-style: none !important; text-indent: 0 !important; margin: 0 0 7px !important;
  line-height: 1.45 !important; font-size: 15.5px !important;
  display: block !important; position: relative !important; padding-left: 31px !important; }
.woocommerce-product-details__short-description ul li::marker { content: "" !important; }
.woocommerce-product-details__short-description ul li::before { content: none !important; }
.woocommerce-product-details__short-description .nsg-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
