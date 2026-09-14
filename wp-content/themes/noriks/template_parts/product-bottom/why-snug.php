<?php
/**
 * product-bottom: NORIKS Snug — jastuk za cijelo tijelo u S-obliku (orto-snug).
 * Pravilo: svaka sekcija ima TOCNO JEDNU sliku, naizmjenicno lijevo/desno,
 * pozadine se izmjenjuju (prva tonirana).
 *   1) Galerija u krevetu            5) Dimenzije (desno)
 *   2) Problem — VIDEO (lijevo)      6) Preporucuju kiroprakticari
 *   3) Kako radi (desno)             7) Punjenje (lijevo)
 *   4) Tri potpore (lijevo)          8) Boje (desno)
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$sg      = get_template_directory_uri() . '/img/snug/';
$sg_path = get_template_directory() . '/img/snug/';
$sg_vid  = function( $file, $poster, $alt ) use ( $sg, $sg_path ) {
  if ( ! file_exists( $sg_path . $file ) ) { return ''; }
  return '<video class="nsg-video" autoplay muted loop playsinline preload="metadata" poster="'
       . esc_url( $sg . $poster ) . '" aria-label="' . esc_attr( $alt ) . '">'
       . '<source src="' . esc_url( $sg . $file ) . '" type="video/mp4"></video>';
};
$sg_img  = function( $file, $alt, $cls = '' ) use ( $sg, $sg_path ) {
  if ( ! file_exists( $sg_path . $file ) ) { return ''; }
  return '<img class="' . esc_attr( $cls ) . '" src="' . esc_url( $sg . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
?>

<!-- 1) KAKO IZGLEDA U KREVETU (galerija) -->
<section class="nsg-sec nsg-tint">
  <div class="nsg-wrap">
    <p class="nsg-kicker nsg-center">Im echten Schlafzimmer</p>
    <h2 class="nsg-h2 nsg-center">Eine Umarmung, die die ganze Nacht hält</h2>
    <p class="nsg-sub">Umarmen Sie es vorne, lehnen Sie sich hinten an — das Kissen wirkt auf beiden Seiten.</p>
    <div class="nsg-gallery">
      <figure><?php echo $sg_vid( 'sng-gal-1.mp4', 'sng-gal-1.jpg', 'Das Kissen um die Beine geschlungen im Schlaf' ); ?></figure>
      <figure><?php echo $sg_vid( 'sng-gal-2.mp4', 'sng-gal-2.jpg', 'So wird NORIKS Snug verwendet' ); ?></figure>
      <figure><?php echo $sg_vid( 'sng-gal-3.mp4', 'sng-gal-3.jpg', 'Seitenschlaf mit NORIKS Snug' ); ?></figure>
      <figure><?php echo $sg_vid( 'sng-gal-4.mp4', 'sng-gal-4.jpg', 'NORIKS Snug im Bett' ); ?></figure>
    </div>
  </div>
</section>

<!-- 2) PROBLEM — slika lijevo -->
<section class="nsg-sec">
  <div class="nsg-wrap nsg-row2">
    <div class="nsg-media"><?php echo $sg_vid( 'sng-video.mp4', 'sng-video.jpg', 'NORIKS Snug im Einsatz' ); ?></div>
    <div class="nsg-copy">
      <p class="nsg-kicker">Das Problem</p>
      <h2 class="nsg-h2">Warum Sie morgens nie <em>erholt aufwachen</em></h2>
      <div class="nsg-pain__list">
        <div class="nsg-pain__row">
          <span class="nsg-pain__num">01</span>
          <div class="nsg-pain__copy">
            <h3>Die Schulter trägt das ganze Gewicht.</h3>
            <p>Ohne Stütze für den Oberkörper kippt die obere Schulter nach vorn und übernimmt Ihr gesamtes Gewicht. Das ist das Taubheitsgefühl, mit dem Sie jeden Morgen aufwachen.</p>
          </div>
        </div>
        <div class="nsg-pain__row">
          <span class="nsg-pain__num">02</span>
          <div class="nsg-pain__copy">
            <h3>Die Hüfte sackt ab, die Wirbelsäule folgt.</h3>
            <p>Nichts hält Ihre Hüften auf einer Linie, also zieht die Schwerkraft sie nach unten und der untere Rücken verdreht sich, um das auszugleichen. Das ist das Aufwachen um drei Uhr nachts.</p>
          </div>
        </div>
        <div class="nsg-pain__row">
          <span class="nsg-pain__num">03</span>
          <div class="nsg-pain__copy">
            <h3>Die Knie liegen aufeinander und reiben.</h3>
            <p>Der Druck Knochen auf Knochen wächst die ganze Nacht. Bis zum Morgen schmerzen die Knie und die Beine sind schwer, noch bevor Sie aufgestanden sind.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 3) KAKO RADI — slika desno -->
<section class="nsg-sec nsg-tint">
  <div class="nsg-wrap nsg-row2 nsg-row2--rev">
    <div class="nsg-copy">
      <p class="nsg-kicker">So funktioniert es</p>
      <h2 class="nsg-h2">Die S-Form hält drei Punkte gleichzeitig</h2>
      <p>Die Krümmung folgt der Körperlinie: Der obere Teil stützt die Schulter, die Mitte füllt den Raum an der Taille, der untere Schenkel trennt die Knie.</p>
      <p>Das Gewicht verteilt sich über die gesamte Länge, statt sich an einer Stelle zu sammeln. Der Körper hört auf, die Signale zu senden, die Sie wecken.</p>
      <ul class="nsg-check">
        <li>Entlastete Schultern, kein Druck auf eine Seite</li>
        <li>Hüften und Becken in natürlicher Linie</li>
        <li>Getrennte Knie, kein Knochen-auf-Knochen-Kontakt</li>
      </ul>
      <a class="nsg-cta" href="#bundle-selector">Wählen Sie Ihre Farbe</a>
    </div>
    <div class="nsg-media"><?php echo $sg_img( 'sng-usporedba.jpg', 'NORIKS Snug im Vergleich zu einem gewöhnlichen Kissen' ); ?></div>
  </div>
</section>

<!-- 4) TRI KLJUČNE POTPORE — slika lijevo -->
<section class="nsg-sec nsg-trust">
  <div class="nsg-trust__head">
    <p class="nsg-trust__eyebrow">Vertrauen der Fachleute</p>
    <h2 class="nsg-trust__title">Empfohlen von <em>Chiropraktikern.</em></h2>
  </div>
  <div class="nsg-wrap">
    <div class="nsg-docs">
      <article class="nsg-doc">
        <div class="nsg-doc__img"><?php echo $sg_img( 'sng-doc-1.jpg', 'Chiropraktikerin mit dem NORIKS Snug Kissen' ); ?></div>
        <div class="nsg-doc__body">
          <p class="nsg-doc__lead">„Snug empfehle ich Patienten, die nachts mit Hüft- und Rückenschmerzen kämpfen.”</p>
          <p class="nsg-doc__p">„Die S-Form hält die Wirbelsäule in neutraler Position, weil sie Schultern, Hüften und Knie gleichzeitig stützt. Die meisten Körperkissen lösen davon nur eines. Dieses löst alle drei, und deshalb benutzen die Patienten es wirklich weiter.”</p>
          <div class="nsg-doc__who">
            <p class="nsg-doc__name">Chiropraktikerin<svg width="16" height="16" viewBox="0 0 16 16" aria-hidden="true"><circle cx="8" cy="8" r="8" fill="#5b7fa6"/><path d="M5 8l2 2 4-4" fill="none" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </p>
            <p class="nsg-doc__role">12 Jahre Praxis</p>
          </div>
        </div>
      </article>
      <article class="nsg-doc">
        <div class="nsg-doc__img"><?php echo $sg_img( 'sng-doc-2.jpg', 'Chiropraktiker mit dem NORIKS Snug Kissen' ); ?></div>
        <div class="nsg-doc__body">
          <p class="nsg-doc__lead">„Bei Patienten, die auf der Seite schlafen, ist das Problem immer dasselbe: der leere Raum zwischen Schulter und Knien.”</p>
          <p class="nsg-doc__p">„Snug ist eines der wenigen Produkte, die das wirklich lösen. Es stützt die gesamte Rumpflänge, nicht nur einen Druckpunkt. Die Patienten kommen nach zwei Wochen wieder und sagen, die morgendliche Steifheit sei weg.”</p>
          <div class="nsg-doc__who">
            <p class="nsg-doc__name">Chiropraktiker<svg width="16" height="16" viewBox="0 0 16 16" aria-hidden="true"><circle cx="8" cy="8" r="8" fill="#5b7fa6"/><path d="M5 8l2 2 4-4" fill="none" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </p>
            <p class="nsg-doc__role">18 Jahre Praxis</p>
          </div>
        </div>
      </article>
    </div>
    <p class="nsg-note">Meinungen von Fachleuten ersetzen weder die ärztliche Untersuchung noch die verordnete Therapie.</p>
  </div>
</section>

<!-- 7) PUNJENJE — slika lijevo -->
<section class="nsg-sec nsg-tint">
  <div class="nsg-wrap nsg-row2">
    <div class="nsg-media"><?php echo $sg_img( 'sng-potpore.jpg', 'Drei zentrale Stützen: Arme, Hüften, Knie' ); ?></div>
    <div class="nsg-copy">
      <p class="nsg-kicker">Drei Stützpunkte</p>
      <h2 class="nsg-h2">Ein Kissen statt drei</h2>
      <p>Die meisten stapeln zwei oder drei gewöhnliche Kissen, um die Stütze zu bekommen, die Snug allein gibt — und schieben sie dann die ganze Nacht hin und her.</p>
      <p>Snug hält alle drei Punkte auf einmal, also müssen Sie nicht aufwachen, um es zurechtzurücken.</p>
      <ul class="nsg-check">
        <li>Armstütze — verhindert Taubheitsgefühle in der Nacht</li>
        <li>Hüftausrichtung — die Wirbelsäule bleibt neutral</li>
        <li>Kniepolsterung — nimmt den Druck vom unteren Rücken</li>
      </ul>
    </div>
  </div>
</section>

<!-- 5) DIMENZIJE — slika desno -->
<section class="nsg-sec">
  <div class="nsg-wrap nsg-row2 nsg-row2--rev">
    <div class="nsg-copy">
      <p class="nsg-kicker">Die richtige Größe</p>
      <h2 class="nsg-h2">105 × 30 cm — genug, aber nicht zu viel</h2>
      <p>Es stützt Sie von der Schulter bis zu den Knien, belegt aber nicht das ganze Bett und stört Ihren Partner nicht.</p>
      <p>Genau diese Länge ist der Grund, warum es sich leicht halten lässt und man sich leicht mit ihm dreht — ohne Umlegen und ohne Aufwachen.</p>
      <ul class="nsg-check">
        <li>Länge 105 cm, Breite 30 cm</li>
        <li>Passt zu allen Körpergrößen</li>
        <li>Leicht, mit einer Hand umzulegen</li>
      </ul>
    </div>
    <div class="nsg-media"><?php echo $sg_img( 'sng-dimenzije.jpg', 'Maße: 105 × 30 cm' ); ?></div>
  </div>
</section>

<!-- 6) PREPORUČUJU STRUČNJACI (postavitev z originala) -->
<section class="nsg-sec nsg-tint">
  <div class="nsg-wrap nsg-row2">
    <div class="nsg-media"><?php echo $sg_img( 'sng-boje.jpg', 'Sechs verfügbare Farben' ); ?></div>
    <div class="nsg-copy">
      <p class="nsg-kicker">Farbe wählen</p>
      <h2 class="nsg-h2">Sechs Farben für jedes Schlafzimmer</h2>
      <p>Blau, Rosa, Grau, Grün, Lila und Dunkelblau — die Farbe wählen Sie auf dieser Seite, bevor Sie in den Warenkorb legen.</p>
      <p>Alle Töne haben denselben kühlenden Stoff und dieselbe Füllung; nur die Farbe des Bezugs ist anders.</p>
      <a class="nsg-cta" href="#bundle-selector">Wählen Sie Ihre Farbe</a>
    </div>
  </div>
</section>

<!-- 10) ŠTO MOŽETE OČEKIVATI -->
<style>
.nsg-sec { padding: 62px 0; background: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #1f2a37; }
.nsg-sec * { box-sizing: border-box; }
.nsg-tint { background: #f2f5f9; }
.nsg-wrap { width: 100%; max-width: 1240px; margin: 0 auto; padding: 0 24px; }
.nsg-kicker { font-size: 12.5px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #5b7fa6; margin: 0 0 10px; }
.nsg-h2 { font-size: clamp(25px, 3.2vw, 36px); font-weight: 800; line-height: 1.18; letter-spacing: -.01em; margin: 0 0 16px; color: #1f2a37; }
.nsg-center { text-align: center; }
.nsg-sub { text-align: center; font-size: 16px; color: #5c6b7a; max-width: 60ch; margin: 0 auto 40px; line-height: 1.6; }
.nsg-copy p { font-size: 16px; line-height: 1.7; color: #4a5765; margin: 0 0 14px; }
.nsg-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 52px; align-items: center; }
.nsg-media img { width: 100%; display: block; border-radius: 14px; box-shadow: 0 2px 4px rgba(31,42,55,.05), 0 14px 40px rgba(31,42,55,.09); }
.nsg-three { display: grid; grid-template-columns: repeat(3, 1fr); gap: 22px; }
.nsg-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 26px 22px; }
.nsg-num { display: inline-flex; align-items: center; justify-content: center; width: 34px; height: 34px; border-radius: 50%; background: #5b7fa6; color: #fff; font-weight: 800; font-size: 16px; margin-bottom: 14px; }
.nsg-card h3 { font-size: 17.5px; font-weight: 800; margin: 0 0 8px; line-height: 1.3; }
.nsg-card p { font-size: 15px; color: #5c6b7a; line-height: 1.6; margin: 0; }
.nsg-check { list-style: none; padding: 0; margin: 4px 0 22px; display: flex; flex-direction: column; gap: 11px; }
.nsg-check li { position: relative; padding-left: 28px; font-size: 15.5px; line-height: 1.5; }
.nsg-check li::before { content: "✓"; position: absolute; left: 0; top: -1px; width: 20px; height: 20px; border-radius: 50%; background: #5b7fa6; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nsg-cta { display: inline-block; background: #1f2a37; color: #fff !important; font-size: 15px; font-weight: 700; padding: 15px 30px; border-radius: 8px; text-decoration: none; }
.nsg-cta:hover { background: #33445a; color: #fff !important; }
.nsg-cta--center { display: block; width: fit-content; margin: 40px auto 0; }
.nsg-trust__head { padding: 0 22px; text-align: center; margin-bottom: 34px; }
.nsg-trust__eyebrow { font-size: 12px; letter-spacing: .14em; text-transform: uppercase; font-weight: 700; color: #5b7fa6; margin: 0 0 8px; }
.nsg-trust__title { font-size: clamp(22px, 3vw, 30px); line-height: 1.15; font-weight: 800; color: #12202c; margin: 0; }
.nsg-trust__title em { font-style: italic; font-weight: 800; color: #5b7fa6; }
.nsg-docs { display: grid; grid-template-columns: 1fr 1fr; gap: 24px; max-width: 960px; margin: 0 auto; }
.nsg-doc { background: #fff; border: 1px solid #e0d6d6; border-radius: 12px; overflow: hidden; display: flex; flex-direction: column; }
.nsg-doc__img { width: 100%; aspect-ratio: 4/5; overflow: hidden; }
.nsg-doc__img img { width: 100%; height: 100%; object-fit: cover; display: block; }
.nsg-doc__body { padding: 22px 20px 24px; display: flex; flex-direction: column; flex: 1; }
.nsg-doc__lead { font-size: clamp(17px, 2.2vw, 19px); font-weight: 700; font-style: italic; color: #12202c; line-height: 1.45; margin: 0 0 14px; }
.nsg-doc__p { font-size: 15px; color: #3d4a57; line-height: 1.62; margin: 0 0 18px; }
.nsg-doc__who { border-top: 1px solid #e0d6d6; padding-top: 15px; margin-top: auto; }
.nsg-doc__name { margin: 0; font-size: 15px; font-weight: 700; color: #12202c; line-height: 1.3; display: flex; align-items: center; gap: 6px; }
.nsg-doc__role { margin: 4px 0 0; font-size: 13px; color: #6b7a88; line-height: 1.3; }
.nsg-note { text-align: center; font-size: 12px; color: #93a1b0; font-style: italic; margin: 22px 0 0; }
.nsg-tl { display: grid; grid-template-columns: repeat(3, 1fr); gap: 22px; }
.nsg-tl__item { background: #f2f5f9; border-radius: 14px; padding: 26px 22px; }
.nsg-tl__when { font-size: 12.5px; font-weight: 800; letter-spacing: .1em; text-transform: uppercase; color: #5b7fa6; margin-bottom: 8px; }
.nsg-tl__item h3 { font-size: 18px; font-weight: 800; margin: 0 0 8px; line-height: 1.3; }
.nsg-tl__item p { font-size: 15px; color: #5c6b7a; line-height: 1.6; margin: 0; }
.nsg-row2--tight { gap: 44px; align-items: center; }
.nsg-pain__list { display: flex; flex-direction: column; }
.nsg-pain__row { display: flex; gap: 18px; padding: 22px 0; border-top: 1px solid #dbe2ea; }
.nsg-pain__row:last-child { border-bottom: 1px solid #dbe2ea; }
.nsg-pain__num { flex: none; font-size: 17px; font-weight: 800; color: #5b7fa6; letter-spacing: .04em; padding-top: 5px; }
.nsg-pain__copy { flex: 1; }
.nsg-pain__copy h3 { font-size: clamp(18px, 2vw, 21px); font-weight: 800; line-height: 1.25; margin: 0 0 7px; letter-spacing: -.01em; }
.nsg-pain__copy p { font-size: 15px; line-height: 1.6; color: #5c6b7a; margin: 0; }
.nsg-h2 em { font-style: normal; color: #5b7fa6; }
.nsg-gallery { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; align-items: stretch; }
.nsg-gallery figure { margin: 0; border-radius: 14px; overflow: hidden; box-shadow: 0 2px 4px rgba(31,42,55,.05), 0 14px 40px rgba(31,42,55,.09); }
.nsg-gallery img, .nsg-video { width: 100%; height: 100%; object-fit: cover; object-position: center; display: block; aspect-ratio: 3/4; }
.nsg-boje { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; margin-top: 34px; }
.nsg-media--stack { display: grid; gap: 16px; }
.nsg-boje figure { margin: 0; border-radius: 14px; overflow: hidden; }
.nsg-boje img { width: 100%; display: block; }
@media (max-width: 980px) {
  .nsg-docs { grid-template-columns: 1fr; gap: 18px; max-width: 520px; }
  .nsg-boje { grid-template-columns: 1fr 1fr; }
  .nsg-gallery { grid-template-columns: 1fr 1fr; }
  .nsg-row2 { grid-template-columns: 1fr; gap: 30px; }
  .nsg-row2--rev .nsg-media { order: -1; }
  .nsg-three, .nsg-tl, .nsg-docs { grid-template-columns: 1fr; gap: 16px; }
}
@media (max-width: 560px) {
  .nsg-gallery { grid-template-columns: 1fr; gap: 14px; }
  .nsg-gallery img, .nsg-video { aspect-ratio: 3/4; }
  .nsg-sec { padding: 44px 0; }
  .nsg-pain__row { gap: 14px; padding: 20px 0; }
  .nsg-wrap { padding: 0 16px; }
  .nsg-sub { margin-bottom: 28px; }
  .nsg-card, .nsg-tl__item { padding: 22px 18px; }
  .nsg-cta { width: 100%; text-align: center; }
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
