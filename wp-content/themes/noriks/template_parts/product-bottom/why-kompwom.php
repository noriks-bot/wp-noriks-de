<?php
/**
 * product-bottom: NORIKS FIT Woman — oblikujuca majica s 3D linijama (orto-kompwom).
 * Pravilo: svaka sekcija ima TOCNO JEDNU sliku, naizmjenicno lijevo/desno.
 * Recenzije su preslikane s originala (leonieandco): bordo pas + vodoravni klizac.
 *   1) Zagladen trbuh (lijevo)     5) Tkanina i kroj (desno)
 *   2) Mi vs drugi (desno)         6) Kako je nositi (lijevo)
 *   3) RECENZIJE — klizac          7) Boje (desno)
 *   4) Osjecajte se sigurno (lijevo)
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$kw      = get_template_directory_uri() . '/img/kompwom/';
$kw_path = get_template_directory() . '/img/kompwom/';
$kw_img  = function( $file, $alt, $cls = '' ) use ( $kw, $kw_path ) {
  if ( ! file_exists( $kw_path . $file ) ) { return ''; }
  return '<img class="' . esc_attr( $cls ) . '" src="' . esc_url( $kw . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
?>

<!-- 1) ZAGLAĐEN TRBUH — slika lijevo -->
<section class="nkw-sec nkw-tint">
  <div class="nkw-wrap nkw-row2">
    <div class="nkw-media"><?php echo $kw_img( 'kwm-trbuh.jpg', 'Geglätteter Bauch mit dem NORIKS FIT Woman Shirt' ); ?></div>
    <div class="nkw-copy">
      <p class="nkw-kicker">Sofort, ab der ersten Minute</p>
      <h2 class="nkw-h2">Geglätteter Bauch <em>ohne Einschnüren</em></h2>
      <p>Unsere 3D-Linien formen den Körper so, dass sie den Bauch- und Hüftbereich sanft zusammenhalten und die Durchblutung anregen — ohne einschneidendes Band und ohne das Gefühl, eingezwängt zu sein.</p>
      <p>Ohne Shirt ist der Bauch weich und die Falten zeichnen sich unter der Kleidung ab. Mit ihm ist der Bauch sofort geglättet und die Haltung aufrechter.</p>
      <ul class="nkw-check">
        <li>Sofort geglätteter Bauch</li>
        <li>Aufrechte Haltung ohne nachzudenken</li>
        <li>Unsichtbar unter der Kleidung</li>
      </ul>
      <a class="nkw-cta" href="#bundle-selector">Farbe und Größe wählen</a>
    </div>
  </div>
</section>

<!-- 2) MI VS DRUGI — slika desno -->
<section class="nkw-sec">
  <div class="nkw-wrap nkw-row2 nkw-row2--rev">
    <div class="nkw-copy">
      <p class="nkw-kicker">Der Unterschied</p>
      <h2 class="nkw-h2">Warum gewöhnliche Kompression nicht funktioniert</h2>
      <p>Klassische Shape-Shirts drücken in einer einzigen Linie. Das Ergebnis sind eine Wulst über dem Saum, Falten an den Schultern und ein Saum, der sich unter der Kleidung abzeichnet.</p>
      <p>Bei uns ist das Relief <strong>in den Stoff eingewebt</strong> und über die Breite verteilt, sodass sich der Druck verteilt, statt sich zu sammeln.</p>
      <ul class="nkw-vs">
        <li class="is-yes">In das Gestrick eingewebte 3D-Technologie</li>
        <li class="is-yes">Sanfte 360°-Kompression ohne Wülste</li>
        <li class="is-yes">Stützt den unteren Rücken</li>
        <li class="is-no">Gewöhnliche Kompression, die Wülste erzeugt</li>
        <li class="is-no">Das Material rollt sich im Lauf des Tages</li>
        <li class="is-no">Saum, der sich unter der Kleidung abzeichnet</li>
      </ul>
    </div>
    <div class="nkw-media"><?php echo $kw_img( 'kwm-usporedba.jpg', 'NORIKS FIT Woman im Vergleich zu einem gewöhnlichen Shape-Shirt' ); ?></div>
  </div>
</section>

<!-- 3) OSJEĆAJTE SE SIGURNO — slika lijevo -->
<section class="nkw-rev">
  <div class="nkw-rev__head">
    <span class="nkw-rev__badge">★★★★★ Ausgezeichnet · Bewertung 4,9/5</span>
    <h2 class="nkw-rev__title">Bewertungen von Frauen wie Ihnen</h2>
  </div>
  <div class="nkw-rev__track">
    <?php
    $kw_reviews = array(
      array( 'img' => 'kwm-ugc-1.jpg', 'name' => 'Karolina B.', 'meta' => 'Größe M · 46 · Berlin', 'worn' => 'Trägt es seit 7 Wochen',
             'text' => '„Meine Blusen sitzen glatt, vorne und hinten. Die, die ich vorher probiert habe, haben keinen ganzen Tag durchgehalten.”' ),
      array( 'img' => 'kwm-ugc-2.jpg', 'name' => 'Daniela P.', 'meta' => 'Größe 2XL · 48 · München', 'worn' => 'Trägt es seit 5 Wochen',
             'text' => '„Das erste Shape-Shirt, das sich bei mir nicht nach oben rollt. Der Saum hält und der Stoff ist dünn genug für den Sommer.”' ),
      array( 'img' => 'kwm-ugc-3.jpg', 'name' => 'Hanna T.', 'meta' => 'Größe 3XL · 51 · Hamburg', 'worn' => 'Trägt es seit 6 Wochen',
             'text' => '„Ich habe es für eine Hochzeit gekauft und trage es jetzt zur Arbeit. Sitzen verändert nicht mehr, wie das Kleid fällt.”' ),
      array( 'img' => 'kwm-ugc-4.jpg', 'name' => 'Lara D.', 'meta' => 'Größe M · 43 · Köln', 'worn' => 'Trägt es seit 8 Wochen',
             'text' => '„Ich ziehe es nach dem Frühstück an und vergesse, dass ich es trage. Bis mittags merke ich es überhaupt nicht.”' ),
      array( 'img' => 'kwm-ugc-5.jpg', 'name' => 'Natalie A.', 'meta' => 'Größe 2XL · 37 · Stuttgart', 'worn' => 'Trägt es seit 9 Wochen',
             'text' => '„Es sah nie gut aus, wenn ich das Shirt in die Hose gesteckt habe. Mit diesem darunter wirkt die Taille schmaler und ich zupfe nicht den ganzen Tag an mir herum.”' ),
      array( 'img' => 'kwm-ugc-6.jpg', 'name' => 'Nicole M.', 'meta' => 'Größe L · 48 · Leipzig', 'worn' => 'Trägt es seit 4 Wochen',
             'text' => '„Ich habe es für ein Outfit bestellt und trage es jetzt unter den meisten Pullovern. Das Gestrick wirkt glatt statt knittrig an der Taille.”' ),
      array( 'img' => 'kwm-ugc-7.jpg', 'name' => 'Petra J.', 'meta' => 'Größe XL · 50 · Dresden', 'worn' => 'Trägt es seit 6 Wochen',
             'text' => '„Ich sitze neun Stunden am Tag am Schreibtisch und es bleibt bequem. Es gibt keine Nähte, die man spürt, und die Bluse bleibt hinten glatt.”' ),
      array( 'img' => 'kwm-ugc-8.jpg', 'name' => 'Sofia K.', 'meta' => 'Größe M · 45 · Bremen', 'worn' => 'Trägt es seit 10 Wochen',
             'text' => '„Mein Rücken ist dankbar. Das Shirt erinnert mich sanft daran, mich aufzurichten, und schnürt mich dabei nirgends ein.”' ),
    );
    foreach ( $kw_reviews as $r ) : ?>
    <article class="nkw-rev__card">
      <div class="nkw-rev__img"><?php echo $kw_img( $r['img'], 'Kupka u NORIKS FIT Woman majici' ); ?></div>
      <div class="nkw-rev__body">
        <div class="nkw-rev__top">
          <div>
            <p class="nkw-rev__name"><?php echo esc_html( $r['name'] ); ?>
              <svg width="15" height="15" viewBox="0 0 16 16" aria-hidden="true"><circle cx="8" cy="8" r="8" fill="#3aa06a"/><path d="M5 8l2 2 4-4" fill="none" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </p>
            <p class="nkw-rev__meta"><?php echo esc_html( $r['meta'] ); ?></p>
          </div>
          <span class="nkw-rev__worn"><?php echo esc_html( $r['worn'] ); ?></span>
        </div>
        <p class="nkw-rev__text"><?php echo esc_html( $r['text'] ); ?></p>
      </div>
    </article>
    <?php endforeach; ?>
  </div>
  <p class="nkw-rev__hint">Zur Seite ziehen für weitere Bewertungen →</p>
</section>

<!-- 7) BOJE — slika desno -->
<section class="nkw-sec nkw-tint">
  <div class="nkw-wrap nkw-row2">
    <div class="nkw-media"><?php echo $kw_img( 'kwm-drzanje.jpg', 'Schmalere Taille und aufrechte Haltung' ); ?></div>
    <div class="nkw-copy">
      <p class="nkw-kicker">Drei Dinge auf einmal</p>
      <h2 class="nkw-h2">Fühlen Sie sich <em>sicher in Ihrer Haut</em></h2>
      <div class="nkw-points">
        <div class="nkw-point"><h3>Schmalere Taille</h3><p>Die 3D-Linien formen die Taille und glätten die Wülste über Hose oder Rock.</p></div>
        <div class="nkw-point"><h3>Sofort flacher Bauch</h3><p>Die sanfte Kompression hält den Bauch unter jeder Kleidung, ohne Druck auf einen einzelnen Punkt.</p></div>
        <div class="nkw-point"><h3>Aufrechte Haltung</h3><p>Die Stütze am Rücken hilft, aufrecht zu stehen, und entlastet den unteren Rücken.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- 4) TKANINA I KROJ — slika desno -->
<section class="nkw-sec">
  <div class="nkw-wrap nkw-row2 nkw-row2--rev">
    <div class="nkw-copy">
      <p class="nkw-kicker">Stoff und Schnitt</p>
      <h2 class="nkw-h2">Das Relief ist <em>eingewebt</em>, nicht aufgedruckt</h2>
      <p>Das breite Band verläuft über Bauch und Hüften, das zweite über den Rücken. Deshalb reißt nichts und blättert nichts ab.</p>
      <div class="nkw-facts">
        <div><h3>3D-Linien</h3><p>Strukturiert, in das Gestrick eingewebt — sie verschwinden mit der Zeit nicht.</p></div>
        <div><h3>Band am Rücken</h3><p>Das zweite Band verläuft über den Rücken und unterstützt die aufrechte Haltung.</p></div>
        <div><h3>Ärmel</h3><p>Anliegender Schnitt, der sich nicht rollt und nicht hochrutscht.</p></div>
        <div><h3>Material</h3><p>Dünn, matt und atmungsaktiv — verschwindet unter Hemd oder Blazer.</p></div>
      </div>
    </div>
    <div class="nkw-media"><?php echo $kw_img( 'kwm-detalji.jpg', 'Details: 3D-Linien, Band, Ärmel, Material' ); ?></div>
  </div>
</section>

<!-- 5) KAKO JE NOSITI — slika lijevo -->
<section class="nkw-sec nkw-tint">
  <div class="nkw-wrap nkw-row2">
    <div class="nkw-media"><?php echo $kw_img( 'kwm-siva.jpg', 'NORIKS FIT Woman dunkelgrau' ); ?></div>
    <div class="nkw-copy">
      <p class="nkw-kicker">So wird es getragen</p>
      <h2 class="nkw-h2">Morgens anziehen und bis abends vergessen</h2>
      <p>Sie müssen normal atmen und essen können, ohne an das Shirt zu denken. Wenn die Abdrücke auf der Haut zwanzig Minuten nach dem Ausziehen noch sichtbar sind, ist die Größe zu klein.</p>
      <ul class="nkw-check">
        <li><strong>Den ganzen Tag</strong> — die Kompression ist verteilt, deshalb schneidet nichts ein</li>
        <li><strong>Unter allem</strong> — keine Linie und kein Saum unter der Kleidung</li>
        <li><strong>Einfache Pflege</strong> — Maschinenwäsche bei 30 °C</li>
      </ul>
      <p class="nkw-note nkw-note--left">Wählen Sie die Größe nach dem Brustumfang. Wenn Sie zwischen zwei Größen liegen, nehmen Sie die größere.</p>
    </div>
  </div>
</section>

<!-- 6) RECENZIJE (postavitev z originala — bordo pas z drsnikom) -->
<section class="nkw-sec">
  <div class="nkw-wrap nkw-row2 nkw-row2--rev">
    <div class="nkw-copy">
      <p class="nkw-kicker">Drei Farben</p>
      <h2 class="nkw-h2">Schwarz, dunkelgrau und <em>rosa</em></h2>
      <p>Schwarz unter allem, dunkelgrau für den Alltag, rosa, wenn Sie etwas Wärmeres möchten. Alle drei haben dasselbe Gestrick und dasselbe Relief.</p>
      <p>Farbe und Größe wählen Sie auf dieser Seite, bevor Sie in den Warenkorb legen.</p>
      <a class="nkw-cta" href="#bundle-selector">Farbe und Größe wählen</a>
    </div>
    <div class="nkw-media"><?php echo $kw_img( 'kwm-roza.jpg', 'NORIKS FIT Woman rosa' ); ?></div>
  </div>
</section>

<style>
.nkw-sec { padding: 62px 0; background: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #241c22; }
.nkw-sec * { box-sizing: border-box; }
.nkw-tint { background: #fbf3f4; }
.nkw-wrap { width: 100%; max-width: 1240px; margin: 0 auto; padding: 0 24px; }
.nkw-kicker { font-size: 12.5px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #a8536b; margin: 0 0 10px; }
.nkw-h2 { font-size: clamp(25px, 3.2vw, 36px); font-weight: 800; line-height: 1.18; letter-spacing: -.01em; margin: 0 0 16px; color: #241c22; }
.nkw-h2 em { font-style: italic; font-weight: 800; color: #a8536b; }
.nkw-copy p { font-size: 16px; line-height: 1.7; color: #56494f; margin: 0 0 14px; }
.nkw-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 52px; align-items: center; }
.nkw-media img { width: 100%; display: block; border-radius: 14px; box-shadow: 0 2px 4px rgba(36,28,34,.05), 0 14px 40px rgba(36,28,34,.10); }
.nkw-check { list-style: none; padding: 0; margin: 4px 0 22px; display: flex; flex-direction: column; gap: 11px; }
.nkw-check li { position: relative; padding-left: 28px; font-size: 15.5px; line-height: 1.5; }
.nkw-check li::before { content: "\2713"; position: absolute; left: 0; top: -1px; width: 20px; height: 20px; border-radius: 50%; background: #2f9e5f; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nkw-vs { list-style: none; padding: 0; margin: 4px 0 0; display: flex; flex-direction: column; gap: 10px; }
.nkw-vs li { position: relative; padding-left: 28px; font-size: 15px; line-height: 1.5; }
.nkw-vs li::before { position: absolute; left: 0; top: -1px; width: 20px; height: 20px; border-radius: 50%; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nkw-vs .is-yes::before { content: "\2713"; background: #2f9e5f; color: #fff; }
.nkw-vs .is-no { color: #8b7b83; }
.nkw-vs .is-no::before { content: "\2715"; background: #ece0e4; color: #a8949c; }
.nkw-points { display: flex; flex-direction: column; gap: 20px; }
.nkw-point h3 { font-size: 17.5px; font-weight: 800; margin: 0 0 6px; color: #a8536b; }
.nkw-point p { font-size: 15.5px; color: #56494f; line-height: 1.6; margin: 0; }
.nkw-facts { display: grid; grid-template-columns: 1fr 1fr; gap: 22px 26px; margin-top: 6px; }
.nkw-facts h3 { font-size: 16px; font-weight: 800; margin: 0 0 6px; color: #241c22; }
.nkw-facts p { font-size: 14.5px; color: #6b5f66; line-height: 1.6; margin: 0; }
.nkw-note { font-size: 13.5px; color: #8b7b83; font-style: italic; margin: 20px 0 0; }
.nkw-note--left { text-align: left; }
.nkw-cta { display: inline-block; background: #241c22; color: #fff !important; font-size: 15px; font-weight: 700; padding: 15px 30px; border-radius: 8px; text-decoration: none; }
.nkw-cta:hover { background: #a8536b; color: #fff !important; }

/* ── recenzije: bordo pas + vodoravni klizac (kot na originalu) ────── */
.nkw-rev { background: #5c2331; padding: 62px 0 54px; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; }
.nkw-rev * { box-sizing: border-box; }
.nkw-rev__head { max-width: 1240px; margin: 0 auto 30px; padding: 0 24px; text-align: center; }
.nkw-rev__badge { display: inline-block; border: 1px solid rgba(255,255,255,.45); border-radius: 100px; padding: 8px 18px; font-size: 12.5px; font-weight: 700; letter-spacing: .04em; color: #fff; }
.nkw-rev__title { font-family: Georgia, 'Times New Roman', serif; font-size: clamp(27px, 3.4vw, 40px); font-weight: 400; color: #fff; margin: 16px 0 0; line-height: 1.2; }
.nkw-rev__track { display: flex; gap: 20px; overflow-x: auto; scroll-snap-type: x mandatory; -webkit-overflow-scrolling: touch;
  padding: 4px 24px 18px; margin: 0 auto; max-width: 1240px; scrollbar-width: thin; scrollbar-color: rgba(255,255,255,.4) transparent; }
.nkw-rev__track::-webkit-scrollbar { height: 6px; }
.nkw-rev__track::-webkit-scrollbar-track { background: rgba(255,255,255,.12); border-radius: 100px; }
.nkw-rev__track::-webkit-scrollbar-thumb { background: rgba(255,255,255,.45); border-radius: 100px; }
.nkw-rev__card { flex: 0 0 310px; width: 310px; scroll-snap-align: start; background: #fff; border-radius: 12px; overflow: hidden; display: flex; flex-direction: column; }
.nkw-rev__img img { width: 100%; aspect-ratio: 1/1; object-fit: cover; display: block; }
.nkw-rev__body { padding: 16px 18px 20px; }
.nkw-rev__top { display: flex; align-items: flex-start; justify-content: space-between; gap: 10px; }
.nkw-rev__name { display: flex; align-items: center; gap: 6px; font-size: 15px; font-weight: 800; color: #241c22; margin: 0; }
.nkw-rev__name svg { flex: 0 0 15px; }
.nkw-rev__meta { font-size: 12.5px; color: #7b6d73; margin: 3px 0 0; }
.nkw-rev__worn { flex: 0 0 auto; background: #f3eaed; color: #5c2331; font-size: 10.5px; font-weight: 800; letter-spacing: .04em; text-transform: uppercase; padding: 5px 9px; border-radius: 100px; white-space: nowrap; }
.nkw-rev__text { font-size: 14.5px; line-height: 1.6; color: #46393f; margin: 13px 0 0; }
.nkw-rev__hint { text-align: center; font-size: 12.5px; color: rgba(255,255,255,.6); margin: 8px 0 0; }

@media (max-width: 980px) {
  .nkw-row2 { grid-template-columns: 1fr; gap: 30px; }
  .nkw-row2--rev .nkw-media { order: -1; }
  .nkw-facts { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 560px) {
  .nkw-sec { padding: 44px 0; }
  .nkw-wrap { padding: 0 16px; }
  .nkw-facts { grid-template-columns: 1fr; gap: 16px; }
  .nkw-cta { width: 100%; text-align: center; }
  .nkw-rev { padding: 46px 0 40px; }
  .nkw-rev__head { padding: 0 16px; }
  .nkw-rev__track { padding: 4px 16px 16px; gap: 14px; }
  .nkw-rev__card { flex: 0 0 300px; width: 300px; }
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
