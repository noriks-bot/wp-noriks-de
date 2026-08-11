<?php
/**
 * product-bottom: NORIKS KneeFix — ortopedska steznica za koljeno (orto-kneefix).
 * Sekcije i redoslijed preslikani s referentne stranice, tekst na HR,
 * slike su NORIKS kreative iz img/kneefix/. Svaka sekcija ima sliku s jedne
 * i tekst s druge strane (naizmjenično) — nema sekcija koje su samo slika.
 *   1. Wenn jeder Schritt unangenehm wird   slika lijevo   13_stepenice
 *   2. Vielleicht geht es nicht nur um Verschleiß   slika desno    14_zglob
 *   3. Unterstützung für aktive Knie         slika lijevo   08_aktivno
 *   4. 4 Funktionen. Ein stabileres Gefühl.    slika desno    03_funkcije
 *   5. Bequemer Halt in 3 Schritten          slika lijevo   04_koraki
 *   6. Mehr Komfort im Alltag      slika desno    05_lifestyle
 *   7. Preporučeno za potporu koljena     slika lijevo   06_zdravnik
 *   8. Der Unterschied ist spürbar                  slika desno    07_vs
 *   9. Was unsere Kunden sagen                3 kartice      10/11/12
 * Recenzije i FAQ renderira zajednički reviews.php (ne ovdje).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$kf      = get_template_directory_uri() . '/img/kneefix/';
$kf_path = get_template_directory() . '/img/kneefix/';

/* Ako slika nije na serveru, prikaže se neutralni sivi placeholder. */
$kf_img = function( $file, $alt ) use ( $kf, $kf_path ) {
  if ( file_exists( $kf_path . $file ) ) {
    return '<img src="'.esc_url($kf.$file).'" alt="'.esc_attr($alt).'" loading="lazy">';
  }
  return '<div class="kfx-ph" role="img" aria-label="'.esc_attr($alt).'"><span>'.esc_html($alt).'</span></div>';
};
?>

<!-- ============ 1) Wenn jeder Schritt unangenehm wird ============ -->
<section class="kfx-sec">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-media"><?php echo $kf_img('13_stepenice.jpg','Knieschmerzen beim Treppabgehen'); ?></div>
    <div class="kfx-copy">
      <h2 class="kfx-h2">Wenn jeder Schritt unangenehm wird</h2>
      <p class="kfx-lead">Am Anfang ist es oft nur ein leichtes Ziehen.</p>
      <p>Dann kommen die Momente, in denen Sie das Knie deutlich stärker spüren:</p>
      <ul class="kfx-list">
        <li>Beim Aufstehen</li>
        <li>Auf Treppen</li>
        <li>Nach längerem Sitzen</li>
        <li>Beim Gehen oder längeren Stehen</li>
      </ul>
      <p>Viele beginnen dann automatisch, Bewegungen zu vermeiden. Sie gehen langsamer, entlasten das Knie unbewusst oder fühlen sich bei alltäglichen Bewegungen unsicher.</p>
      <p class="kfx-strong">Das Problem dabei: Je vorsichtiger Sie sich bewegen, desto mehr wird das Knie zum Mittelpunkt Ihres Alltags.</p>
    </div>
  </div>
</section>

<!-- ============ 2) Vielleicht geht es nicht nur um Verschleiß ============ -->
<section class="kfx-sec kfx-alt">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-copy">
      <h2 class="kfx-h2">Vielleicht geht es nicht nur um Verschleiß</h2>
      <p>Viele gängige Erklärungen sprechen nur von „Abnutzung". Knieschmerzen fühlen sich aber oft eher an wie <strong>Druck, Reizung oder Instabilität</strong>.</p>
      <p>Ein möglicher Grund ist eine gereizte Gelenkinnenhaut — die empfindliche innere Schicht des Kniegelenks. Wird dieses Gewebe gereizt, kann das Knie empfindlicher auf Belastung reagieren. Das kann sich zeigen als:</p>
      <ul class="kfx-inline-list">
        <li>Druckgefühl rund um die Kniescheibe</li>
        <li>Steifheit nach Ruhephasen</li>
        <li>Unsicherheit bei Bewegung</li>
        <li>Empfindlichkeit bei Belastung</li>
      </ul>
      <p>Viele klassische Orthesen versuchen das Problem mit starrer Stabilisierung zu lösen. Harte Orthesen sind aber oft unbequem, rutschen oder schränken die natürliche Bewegung ein. Genau deshalb wurde <strong>NORIKS KneeFix</strong> anders entwickelt.</p>
    </div>
    <div class="kfx-media"><?php echo $kf_img('14_zglob.jpg','Gereizte Gelenkinnenhaut des Kniegelenks'); ?></div>
  </div>
</section>

<!-- ============ 3) Unterstützung für aktive Knie ============ -->
<section class="kfx-sec">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-media"><?php echo $kf_img('08_aktiv_DE.webp','Bleiben Sie aktiv — ohne Einschränkungen im Knie'); ?></div>
    <div class="kfx-copy">
      <h2 class="kfx-h2">Unterstützung für aktive Knie</h2>
      <p><strong>NORIKS KneeFix</strong> vereint mehrere Funktionen in einem flexiblen Unterstützungssystem für den Alltag. Statt einer schweren Orthese erhalten Sie:</p>
      <ul class="kfx-check">
        <li>Kompression, die Sie selbst einstellen</li>
        <li>Seitliche Stabilisierung</li>
        <li>Gelpolster zur Entlastung der Kniescheibe</li>
        <li>Rutschfester Haftrand</li>
      </ul>
      <p>Ziel ist es nicht, Ihr Knie ruhigzustellen. KneeFix wurde entwickelt, um das Knie im Alltag angenehmer zu unterstützen — beim Gehen, bei der Arbeit, beim Einkaufen oder unterwegs.</p>
    </div>
  </div>
</section>

<!-- ============ 4) 4 Funktionen. Ein stabileres Gefühl. ============ -->
<section class="kfx-sec kfx-alt">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-copy">
      <h2 class="kfx-h2">4 Funktionen. Ein stabileres Gefühl.</h2>
      <p>KneeFix macht nicht nur eines — mehrere Unterstützungssysteme wirken gleichzeitig:</p>
      <ul class="kfx-check">
        <li><strong>Präzises Drehrad für die Kompression</strong> — einstellbare Kompression und sicherer Sitz</li>
        <li><strong>Doppelte Seitenstabilisatoren</strong> — seitliche Stabilität des Knies</li>
        <li><strong>Gelpolster für die Kniescheibe</strong> — Druckentlastung und Stoßdämpfung</li>
        <li><strong>Silikongriff gegen Verrutschen</strong> — weiche Silikonstruktur verhindert Rutschen und Einrollen</li>
      </ul>
    </div>
    <div class="kfx-media"><?php echo $kf_img('03_funktionen_DE.webp','Vier Funktionen der NORIKS KneeFix Bandage'); ?></div>
  </div>
</section>

<!-- ============ 5) Bequemer Halt in 3 Schritten ============ -->
<section class="kfx-sec">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-media"><?php echo $kf_img('04_schritte_DE.webp','Bequemer Halt in drei Schritten — anziehen, ausrichten, einstellen'); ?></div>
    <div class="kfx-copy">
      <h2 class="kfx-h2">Bequemer Halt in 3 Schritten</h2>
      <ol class="kfx-steps">
        <li><strong>Ziehen Sie die Bandage über das Knie.</strong> Ziehen Sie sie nach oben, für sicheren und bequemen Sitz.</li>
        <li><strong>Richten Sie das Gelpolster aus.</strong> Platzieren Sie es mittig um die Kniescheibe.</li>
        <li><strong>Stellen Sie die Kompression ein.</strong> Drehen Sie am Rad, um Halt und Stabilität einzustellen.</li>
      </ol>
      <p>Ohne komplizierte Riemen und Einstellungen — in wenigen Sekunden bereit.</p>
    </div>
  </div>
</section>

<!-- ============ 6) Mehr Komfort im Alltag ============ -->
<section class="kfx-sec kfx-alt">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-copy">
      <h2 class="kfx-h2">Mehr Komfort im Alltag</h2>
      <p>Viele wollen keine schwere Sportorthese. Sie wollen einfach:</p>
      <ul class="kfx-check">
        <li>Sicherer gehen</li>
        <li>Entspannter Treppen steigen</li>
        <li>Länger stehen</li>
        <li>Freier bewegen</li>
      </ul>
      <p>NORIKS KneeFix wurde entwickelt, um alltägliche Bewegungen angenehmer zu machen — ohne unnötige Einschränkungen. Das flexible Material passt sich Ihrem Tag besser an und stützt das Knie dort, wo Sie es brauchen.</p>
      <a class="kfx-cta" href="#bundle-selector">Größe wählen →</a>
    </div>
    <div class="kfx-media"><?php echo $kf_img('05_lifestyle_DE.webp','KneeFix im Alltag — Spaziergang, Fahrrad, Training'); ?></div>
  </div>
</section>

<!-- ============ 7) Empfohlen zur täglichen Knieunterstützung ============ -->
<section class="kfx-sec">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-media"><?php echo $kf_img('06_arzt_DE.webp','Empfohlen zur täglichen Knieunterstützung'); ?></div>
    <div class="kfx-copy">
      <h2 class="kfx-h2">Empfohlen zur täglichen Knieunterstützung</h2>
      <ul class="kfx-check">
        <li>Einstellbare Kompressionsunterstützung</li>
        <li>Stabilisiert und schützt das Knie</li>
        <li>Bequem für den täglichen Gebrauch</li>
      </ul>
      <p>KneeFix ist als alltägliche Unterstützung gedacht, nicht als medizinische Behandlung. Bei akuten Verletzungen oder anhaltenden Beschwerden sprechen Sie das Tragen bitte mit Ihrem Arzt ab.</p>
    </div>
  </div>
</section>

<!-- ============ 8) Der Unterschied ist spürbar ============ -->
<section class="kfx-sec kfx-alt">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-copy">
      <h2 class="kfx-h2">Der Unterschied ist spürbar</h2>
      <p>Traditionelle Orthesen lösen das Problem oft, indem sie das Knie ruhigstellen. KneeFix geht einen anderen Weg — es unterstützt die Bewegung, statt sie zu blockieren.</p>
      <ul class="kfx-check">
        <li>Natürlicher Gang statt Steifheit in der Bewegung</li>
        <li>Entspannte Körperhaltung statt unbequemer Position</li>
        <li>Bewegungsfreiheit und Komfort statt sichtbarer Kniebelastung</li>
      </ul>
      <a class="kfx-cta" href="#bundle-selector">KneeFix bestellen</a>
    </div>
    <div class="kfx-media"><?php echo $kf_img('07_vs_DE.webp','NORIKS Kniebandage im Vergleich zur traditionellen Orthese'); ?></div>
  </div>
</section>

<!-- ============ 9) Was unsere Kunden sagen ============ -->
<section class="kfx-sec kfx-revs">
  <div class="kfx-wrap">
    <h2 class="kfx-h2 kfx-center">Was unsere Kunden sagen</h2>
    <p class="kfx-sub kfx-center"><strong>Tausende Kunden tragen NORIKS KneeFix bereits täglich</strong> weil es entwickelt wurde, das Knie gezielt zu unterstützen — statt die Bewegung unnötig einzuschränken oder Beschwerden nur kurzfristig zu überdecken.</p>
    <div class="kfx-rev-grid">
      <?php foreach ( array(
        array( '10_review-1.jpg', 'Endlich ein stabilerer Gang', 'Ich habe schon einige Bandagen ausprobiert, aber sie waren entweder zu steif oder sind ständig gerutscht. Diese sitzt spürbar angenehmer und gibt dem Knie beim Gehen und auf Treppen viel mehr Stabilität.', 'Damir P.' ),
        array( '11_review-3.jpg', 'Mehr Sicherheit auf Treppen', 'Treppen waren für mich jahrelang eine Qual, weil sich mein Knie instabil anfühlte. Seit ich KneeFix trage, fühle ich mich deutlich sicherer. Sie rutscht selbst bei längeren Spaziergängen kaum.', 'Sanja M.' ),
        array( '12_review-6.jpg', 'Angenehm im Alltag', 'Ich trage sie bei der Arbeit und hätte nicht gedacht, dass sie so bequem ist. Das Material ist flexibel, die Kompression lässt sich leicht einstellen und unter der Hose sieht man sie kaum.', 'Vesna N.' ),
      ) as $rv ) : ?>
        <article class="kfx-rev">
          <div class="kfx-rev-img"><?php echo $kf_img( $rv[0], 'Kunde trägt die NORIKS KneeFix Bandage' ); ?></div>
          <div class="kfx-rev-body">
            <div class="kfx-stars" aria-label="Ocjena 5 od 5">★★★★★</div>
            <p class="kfx-rev-title"><?php echo esc_html( $rv[1] ); ?></p>
            <p class="kfx-rev-text"><?php echo esc_html( $rv[2] ); ?></p>
            <p class="kfx-rev-name"><?php echo esc_html( $rv[3] ); ?></p>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
  .kfx-sec { padding: 48px 0; }
  .kfx-alt { background: #f5f6f7; }
  .kfx-wrap { max-width: 1180px; margin: 0 auto; padding: 0 18px; }
  .kfx-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
  .kfx-h2 { font-size: clamp(24px,3.1vw,36px); font-weight: 800; color: #141414; line-height: 1.15; margin: 0 0 16px; }
  .kfx-center { text-align: center; }
  .kfx-copy p, .kfx-sub { font-size: 16px; line-height: 1.65; color: #3a3a3a; margin: 0 0 14px; }
  .kfx-sub { max-width: 820px; margin: 0 auto 26px; }
  .kfx-lead { font-weight: 700; color: #141414; }
  .kfx-strong { font-weight: 700; color: #141414; }
  .kfx-media img { width: 100%; height: auto; display: block; border-radius: 16px; }

  .kfx-ph { width: 100%; aspect-ratio: 1/1; background: #ededed; border: 1px dashed #d3d3d3; border-radius: 16px;
            display: flex; align-items: center; justify-content: center; padding: 18px; box-sizing: border-box; }
  .kfx-ph span { font-size: 13px; line-height: 1.45; color: #9a9a9a; text-align: center; }

  .kfx-list { margin: 0 0 16px; padding-left: 20px; }
  .kfx-list li { font-size: 16px; line-height: 1.6; color: #3a3a3a; margin: 0 0 6px; }
  .kfx-inline-list { list-style: none; display: flex; flex-wrap: wrap; gap: 8px 10px; margin: 0 0 16px; padding: 0; }
  .kfx-inline-list li { background: #fff; border: 1px solid #e4e4e4; border-radius: 999px; padding: 8px 16px; font-size: 14px; color: #141414; }
  .kfx-check { list-style: none; margin: 0 0 16px; padding: 0; }
  .kfx-check li { position: relative; padding: 0 0 11px 30px; font-size: 15.5px; color: #141414; line-height: 1.5; }
  .kfx-check li:before { content: "✓"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; background: #141414; color: #fff; border-radius: 50%; font-size: 12px; text-align: center; line-height: 20px; }
  .kfx-steps { list-style: none; counter-reset: kfxstep; margin: 0 0 16px; padding: 0; }
  .kfx-steps li { counter-increment: kfxstep; position: relative; padding: 0 0 14px 40px; font-size: 15.5px; line-height: 1.55; color: #3a3a3a; }
  .kfx-steps li:before { content: counter(kfxstep); position: absolute; left: 0; top: 0; width: 26px; height: 26px; background: #141414; color: #fff; border-radius: 50%; font-size: 13px; font-weight: 700; text-align: center; line-height: 26px; }

  .kfx-cta { display: inline-block; margin-top: 8px; background: #141414; color: #fff; font-weight: 700; font-size: 16px; padding: 14px 30px; border-radius: 10px; text-decoration: none; }
  .kfx-cta:hover { background: #E8450E; color: #fff; }

  /* 9) recenzije s fotografijama kupaca */
  .kfx-rev-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 22px; }
  .kfx-rev { background: #fff; border: 1px solid #e8e8e8; border-radius: 14px; overflow: hidden; }
  .kfx-rev-img img { width: 100%; height: 100%; aspect-ratio: 3/4; object-fit: cover; display: block; border-radius: 0; }
  .kfx-rev-body { padding: 16px 18px 18px; text-align: center; }
  .kfx-stars { color: #f5a623; font-size: 15px; letter-spacing: 1px; }
  .kfx-rev-title { font-weight: 700; color: #141414; font-size: 15px; margin: 8px 0 8px; }
  .kfx-rev-text { font-size: 14px; line-height: 1.6; color: #4a4a4a; margin: 0 0 12px; }
  .kfx-rev-name { font-size: 13px; font-style: italic; font-weight: 700; color: #6b6b6b; margin: 0; padding-top: 10px; border-top: 1px solid #ededed; }

  @media (max-width: 820px) {
    .kfx-sec { padding: 30px 0; }
    .kfx-row2 { grid-template-columns: 1fr; gap: 20px; }
    .kfx-row2 .kfx-media { order: -1; }
    .kfx-h2 { font-size: 2rem; }
    .kfx-rev-grid { grid-template-columns: 1fr; }
    .kfx-rev-img img { aspect-ratio: 4/3; }
  }

  /* Nema "Tablica veličina" linka na KneeFixu (ni plugin ni globalni). */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  /* Kratki opis (short description): sakrij standardne točke (•), ostaje samo ✅
     iz teksta; razmak između "Prednosti:" i liste te ispod liste.
     (Ovaj se predložak učitava samo na orto-kneefix stranicama.) */
  .woocommerce-product-details__short-description ul {
      list-style: none;
      margin: 8px 0 26px;
      padding-left: 0;
  }
  .woocommerce-product-details__short-description ul li {
      list-style: none;
      padding-left: 0;
      margin-left: 0;
      line-height: 1.55;
      margin-bottom: 6px;
  }
  /* razmak iznad "Prednosti:" (paragraf neposredno prije liste) */
  .woocommerce-product-details__short-description p:has(+ ul) {
      margin-top: 20px;
      margin-bottom: 4px;
  }
</style>

<script>
(function(){
  document.querySelectorAll('a.kfx-cta[href="#bundle-selector"]').forEach(function(a){
    a.addEventListener('click', function(e){ e.preventDefault(); var t=document.getElementById('bundle-selector')||document.querySelector('.single_add_to_cart_button'); if(t) t.scrollIntoView({behavior:'smooth',block:'center'}); });
  });
})();
</script>
