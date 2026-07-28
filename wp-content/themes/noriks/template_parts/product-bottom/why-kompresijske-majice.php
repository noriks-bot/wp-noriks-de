<?php
/**
 * product-bottom: NORIKS FIT — KOMPRESIJSKE MAJICE (orto-kompresijske-majice)
 * Kompressions-/Shaping-Shirt für Männer.
 * Echte HTML-Sektionen (Text + Bild links/rechts, Video, Vergleich). Brand NORIKS FIT.
 * FAQ und Bewertungen rendert die gemeinsame reviews.php-Sektion (nicht hier).
 * Bilder: img/kompsfit/ , Video: img/kompsfit-videos/
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$km  = get_template_directory_uri() . '/img/kompsfit/';
$kmv = get_template_directory_uri() . '/img/kompsfit-videos/';
?>

<!-- ============ 1) Video demo (slika/video + tekst) ============ -->
<section class="kmf-sec">
  <div class="kmf-wrap kmf-row2 kmf-rev">
    <div class="kmf-media"><video src="<?php echo esc_url( $kmv.'demo.mp4' ); ?>" autoplay muted loop playsinline preload="metadata"></video></div>
    <div class="kmf-copy">
      <p class="kmf-eyebrow">Sofortige Wirkung</p>
      <h2 class="kmf-h2">Formt die Silhouette, <em>sobald Sie es anziehen</em></h2>
      <p>Gezielte Kompression strafft Bauch und Hüften gleichmäßig, glättet die „Love Handles“ und richtet die Haltung auf — ohne Einengen, das Atmung oder Bewegung einschränkt.</p>
      <ul class="kmf-check">
        <li>Geglätteter Bauch und Brustbereich</li>
        <li>Aufrechtere, wachere Haltung</li>
        <li>Unsichtbar unter jedem Hemd</li>
      </ul>
    </div>
  </div>
</section>

<!-- ============ 2) Vratite samopouzdanje i snagu (tekst + slika) ============ -->
<section class="kmf-sec kmf-alt">
  <div class="kmf-wrap kmf-row2">
    <div class="kmf-copy">
      <p class="kmf-eyebrow">NORIKS FIT</p>
      <h2 class="kmf-h2">Holen Sie sich Selbstvertrauen und Stärke zurück</h2>
      <p>Wenn Sie möchten, dass Ihre Kleidung besser sitzt und Sie sich den ganzen Tag gestützt fühlen, ist NORIKS FIT für Sie gemacht.</p>
      <p>Gefertigt aus <strong>ionischem Kompressionsgewebe</strong>, bietet es eine anliegende, stützende Passform, die die Silhouette glättet und ganztägigen Komfort liefert — ein schärferer Look, ein besseres Haltungsbewusstsein und das Selbstvertrauen, das entsteht, wenn Sie sich in dem, was Sie tragen, wohlfühlen.</p>
      <a class="kmf-cta" href="#bundle-selector">Wählen Sie Ihre Größe →</a>
    </div>
    <div class="kmf-media kmf-hero-media"><img src="<?php echo esc_url( $km.'hero.webp' ); ?>" alt="NORIKS FIT Kompressionsshirt unter dem Hemd" loading="lazy"></div>
  </div>
</section>

<!-- ============ 3) Tajno oružje protiv pivskog trbuha ============ -->
<section class="kmf-sec">
  <div class="kmf-wrap">
    <h2 class="kmf-h2 kmf-center kmf-upper">Ihre neue Geheimwaffe gegen den Bierbauch</h2>
    <div class="kmf-weapon-grid">
      <div class="kmf-feat-col">
        <div class="kmf-feat"><span class="kmf-feat-ic">✓</span><p>Tschüss, „Dad Bod“.</p></div>
        <div class="kmf-feat"><span class="kmf-feat-ic">✓</span><p>Bierbauch? Verschwunden.</p></div>
        <div class="kmf-feat"><span class="kmf-feat-ic">✓</span><p>Hüftspeck? Weggesperrt.</p></div>
      </div>
      <div class="kmf-weapon-media"><img src="<?php echo esc_url( $km.'wear.webp' ); ?>" alt="NORIKS FIT formt Bauch und Silhouette" loading="lazy"></div>
      <div class="kmf-feat-col">
        <div class="kmf-feat"><span class="kmf-feat-ic">✓</span><p>Brust? Geglättet.</p></div>
        <div class="kmf-feat"><span class="kmf-feat-ic">✓</span><p>Unsichtbar. Unaufhaltsam.</p></div>
        <div class="kmf-feat"><span class="kmf-feat-ic">✓</span><p>Das Hemd sitzt. Endlich.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- ============ 3b) Prije / Poslije (tekst + slika) ============ -->
<section class="kmf-sec">
  <div class="kmf-wrap kmf-row2">
    <div class="kmf-copy">
      <p class="kmf-eyebrow">Sichtbarer Unterschied</p>
      <h2 class="kmf-h2">Vorher und nachher mit NORIKS FIT</h2>
      <p>Aufrechtere Haltung, geglätteter Bauch und eine schärfere Silhouette — sobald Sie es anziehen.</p>
      <ul class="kmf-check">
        <li>Sichtbar aufrechtere Haltung</li>
        <li>Geglätteter Bauch und „Love Handles“</li>
        <li>Schärfere Silhouette unter jedem Shirt</li>
      </ul>
      <a class="kmf-cta" href="#bundle-selector">Wählen Sie Ihre Größe →</a>
    </div>
    <div class="kmf-media"><img src="<?php echo esc_url( $km.'prije-poslije.jpg' ); ?>" alt="Vorher und nachher mit NORIKS FIT" loading="lazy"></div>
  </div>
</section>

<style>
.kmf-sub{color:#5b5b5b;font-size:16px;line-height:1.6;max-width:620px;margin:0 auto 22px;text-align:center;}
.kmf-ba{max-width:760px;margin:22px auto 0;border-radius:16px;overflow:hidden;box-shadow:0 10px 30px rgba(0,0,0,.12);}
.kmf-ba img{width:100%;height:auto;display:block;}
.kmf-icons{display:grid;grid-template-columns:repeat(4,1fr);gap:22px;margin-top:28px;}
.kmf-ic{text-align:center;}
.kmf-ic img{width:56px;height:56px;object-fit:contain;margin:0 auto 12px;display:block;}
.kmf-ic p{margin:0;font-weight:700;font-size:15px;color:#141414;line-height:1.35;}
@media(max-width:700px){.kmf-icons{grid-template-columns:repeat(2,1fr);gap:18px;}}
</style>

<!-- ============ 4) Zašto NORIKS FIT? (usporedba) ============ -->
<section class="kmf-sec kmf-alt">
  <div class="kmf-wrap">
    <h2 class="kmf-h2 kmf-center">Warum NORIKS FIT?</h2>
    <p class="kmf-sub">Vergleichen Sie NORIKS FIT mit gewöhnlichen Kompressionsshirts und sehen Sie den Unterschied, den Sie spüren, sobald Sie es anziehen.</p>
    <div class="kmf-cmp-row">
      <div class="kmf-cmp-media"><img src="<?php echo esc_url( $km.'compare.webp' ); ?>" alt="NORIKS FIT im Vergleich zu gewöhnlichen Shirts" loading="lazy"></div>
      <div class="kmf-table">
        <div class="kmf-t-head">
          <span class="kmf-t-feature"></span>
          <span class="kmf-t-col kmf-t-us">NORIKS FIT</span>
          <span class="kmf-t-col kmf-t-them">Andere</span>
        </div>
        <?php
        $kmf_rows = array(
          'Ganztägiger Kompressionskomfort',
          'Langlebiges, hochwertiges Material',
          'Unsichtbar unter jedem Hemd',
          'Zugleich ein Sportshirt',
          'Leichtes, feuchtigkeitsableitendes Gewebe',
        );
        foreach ( $kmf_rows as $row ) : ?>
          <div class="kmf-t-row">
            <span class="kmf-t-feature"><?php echo esc_html( $row ); ?></span>
            <span class="kmf-t-col kmf-t-us"><span class="kmf-yes">✓</span></span>
            <span class="kmf-t-col kmf-t-them"><span class="kmf-no">✕</span></span>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="kmf-cta-wrap"><a class="kmf-cta" href="#bundle-selector">Bestellen Sie Ihr NORIKS FIT →</a></div>
  </div>
</section>

<!-- ============ 5) Recenzije (testimonijali sa slikama) ============ -->
<section class="kmf-sec">
  <div class="kmf-wrap">
    <div class="kmf-rev-top">
      <span class="kmf-rev-stars">★★★★★</span>
      <span class="kmf-rev-head">3.575 verifizierte Bewertungen — hervorragend, 4,8 von 5 Sternen</span>
    </div>
    <div class="kmf-rev-cards">
      <div class="kmf-rev-card">
        <div class="kmf-rev-photo"><img src="<?php echo esc_url( $km.'wear.webp' ); ?>" alt="NORIKS FIT Kundenbewertung" loading="lazy"></div>
        <p class="kmf-rev-txt">„Ich bin ehrlich — ich war skeptisch. Ich hatte immer diesen kleinen Bauch, den ich unter weiten Shirts versteckt habe. Nach 4 Wochen, in denen ich NORIKS 4 Stunden täglich getragen habe, habe ich ein paar Zentimeter an der Taille verloren und stehe aufrecht, ohne darüber nachzudenken. Die Schultern haben sich geöffnet, und meine Freundin meinte, ich sehe aus, als würde ich ‚strahlen‘.“</p>
        <div class="kmf-rev-foot"><span class="kmf-rev-badge">★★★★★ Verifiziert</span><span class="kmf-rev-name">Michael M. — 34 J.</span></div>
      </div>
      <div class="kmf-rev-card">
        <div class="kmf-rev-photo"><img src="<?php echo esc_url( $km.'persona.webp' ); ?>" alt="NORIKS FIT Kundenbewertung" loading="lazy"></div>
        <p class="kmf-rev-txt">„Ich sitze den ganzen Tag am Schreibtisch. Gebeugt, aufgebläht, ohne Selbstvertrauen. NORIKS hat mich buchstäblich dazu gebracht, ohne jede Anstrengung aufrecht zu sitzen. Nach 10 Tagen war die Verspannung im Rücken weg, und meine Hemden saßen plötzlich besser. Jetzt trage ich es im Büro — es ist diskret, atmungsaktiv, und ehrlich? Ich verstecke mich nicht mehr vor Kameras.“</p>
        <div class="kmf-rev-foot"><span class="kmf-rev-badge">★★★★★ Verifiziert</span><span class="kmf-rev-name">Markus P. — 42 J.</span></div>
      </div>
      <div class="kmf-rev-card">
        <div class="kmf-rev-photo"><img src="<?php echo esc_url( $km.'hero.webp' ); ?>" alt="NORIKS FIT Kundenbewertung" loading="lazy"></div>
        <p class="kmf-rev-txt">„Drei Jahre lang habe ich Verabredungen abgesagt, weil ich gehasst habe, was ich beim Anziehen im Spiegel sehe. Mit NORIKS habe ich zum ersten Mal aufgehört, gegen mein eigenes Spiegelbild zu kämpfen. Heute Morgen war ich in 5 Minuten angezogen. Ohne Zurechtzupfen. Ohne dem Spiegel auszuweichen. Das ist es.“</p>
        <div class="kmf-rev-foot"><span class="kmf-rev-badge">★★★★★ Verifiziert</span><span class="kmf-rev-name">Thomas K. — 27 J.</span></div>
      </div>
    </div>
    <div class="kmf-cta-wrap"><a class="kmf-cta" href="#bundle-selector">Wählen Sie Ihre Größe →</a></div>
  </div>
</section>

<style>
/* 5) testimonijali */
.kmf-rev-top{display:flex;flex-direction:column;align-items:center;gap:4px;margin-bottom:26px;}
.kmf-rev-top .kmf-rev-stars{color:#00b67a;font-size:22px;letter-spacing:2px;}
.kmf-rev-head{font-weight:700;font-size:17px;color:#141414;text-align:center;}
.kmf-rev-cards{display:grid;grid-template-columns:repeat(3,1fr);gap:18px;}
.kmf-rev-card{border:1px solid #e4e4e4;border-radius:14px;overflow:hidden;background:#fff;display:flex;flex-direction:column;}
.kmf-rev-photo img{width:100%;height:300px;object-fit:cover;display:block;}
.kmf-rev-txt{padding:16px 16px 8px;margin:0;font-size:14px;line-height:1.55;color:#333;flex:1;}
.kmf-rev-foot{padding:0 16px 16px;display:flex;flex-direction:column;gap:4px;}
.kmf-rev-badge{color:#00b67a;font-size:13px;font-weight:700;}
.kmf-rev-name{font-weight:700;font-size:14px;color:#141414;}
@media(max-width:860px){.kmf-rev-cards{grid-template-columns:1fr;}}
</style>

<style>
.kmf-sec{padding:48px 0;background:#fff;}
.kmf-alt{background:#f5f6f7;}
.kmf-wrap{max-width:1100px;margin:0 auto;padding:0 18px;}
.kmf-row2{display:grid;grid-template-columns:1fr 1fr;gap:44px;align-items:center;}
.kmf-eyebrow{text-transform:uppercase;letter-spacing:.12em;font-size:12px;font-weight:700;color:#8a8f96;margin:0 0 6px;}
.kmf-h2{font-size:clamp(24px,3.2vw,34px);line-height:1.15;font-weight:800;color:#141414;margin:0 0 16px;font-family:inherit;}
.kmf-h2 em{font-style:italic;color:#141414;}
.kmf-center{text-align:center;}
.kmf-upper{text-transform:uppercase;font-size:clamp(20px,2.6vw,26px);}
.kmf-copy p{font-size:16px;line-height:1.65;color:#3a3a3a;margin:0 0 14px;}
.kmf-media img,.kmf-media video{width:100%;height:auto;display:block;border-radius:16px;}
.kmf-media video{background:#000;}
.kmf-hero-media img{max-height:460px;object-fit:cover;object-position:center 18%;}
.kmf-check{list-style:none;margin:6px 0 0;padding:0;}
.kmf-check li{position:relative;padding:0 0 10px 28px;font-size:15.5px;color:#141414;}
.kmf-check li:before{content:"✓";position:absolute;left:0;top:0;width:20px;height:20px;background:#141414;color:#fff;border-radius:50%;font-size:12px;text-align:center;line-height:20px;}
.kmf-cta{display:inline-block;margin-top:8px;background:#141414;color:#fff;font-weight:700;font-size:16px;padding:14px 30px;border-radius:10px;text-decoration:none;}
.kmf-cta-wrap{text-align:center;margin-top:30px;}

/* 3) weapon */
.kmf-weapon-grid{display:grid;grid-template-columns:1fr 1.1fr 1fr;gap:24px;align-items:center;margin-top:26px;}
.kmf-weapon-media img{width:100%;height:auto;border-radius:14px;display:block;}
.kmf-feat-col{display:flex;flex-direction:column;gap:34px;}
.kmf-feat{text-align:center;}
.kmf-feat-ic{display:inline-flex;align-items:center;justify-content:center;width:46px;height:46px;border:1.5px solid #141414;border-radius:50%;font-size:19px;margin-bottom:10px;}
.kmf-feat p{margin:0;font-weight:700;font-size:14.5px;text-transform:uppercase;letter-spacing:.02em;color:#141414;}

/* 4) compare */
.kmf-cmp-row{display:grid;grid-template-columns:.9fr 1.1fr;gap:36px;align-items:center;margin-top:24px;}
.kmf-cmp-media img{width:100%;height:auto;border-radius:14px;display:block;}
.kmf-table{border-radius:14px;overflow:hidden;border:1px solid #e4e4e4;background:#fff;}
.kmf-t-head,.kmf-t-row{display:grid;grid-template-columns:1fr 100px 100px;align-items:center;}
.kmf-t-head{background:#141414;color:#fff;}
.kmf-t-head .kmf-t-col{color:#fff;font-weight:700;text-align:center;padding:13px 6px;font-size:14px;}
.kmf-t-feature{padding:14px 16px;font-size:14px;color:#141414;line-height:1.35;}
.kmf-t-head .kmf-t-feature{color:#fff;}
.kmf-t-row{border-top:1px solid #eee;}
.kmf-t-row:nth-child(even){background:#fafafa;}
.kmf-t-col{text-align:center;font-size:16px;}
.kmf-yes{color:#2fae4e;font-weight:800;}
.kmf-no{color:#c9c9c9;font-weight:800;}

@media(max-width:860px){
  .kmf-row2{grid-template-columns:1fr;gap:22px;}
  .kmf-rev .kmf-media{order:-1;}
  .kmf-cmp-row{grid-template-columns:1fr;gap:20px;}
}
@media(max-width:600px){
  .kmf-weapon-grid{grid-template-columns:1fr;gap:20px;}
  .kmf-weapon-media{order:-1;}
  .kmf-feat-col{flex-direction:row;justify-content:space-around;gap:12px;}
}
</style>
