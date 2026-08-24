<?php
/**
 * Podstranica s PDF uputama za NORIKS proizvode.
 *
 * Stranica se kreira jednom iz teme (slug: anleitungen) i koristi predlozak page-upute.php.
 * PDF-ovi stoje lokalno u temi, u mapi /manuals/.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

function noriks_manuals_list() {
    return array(
        array(
            'file'  => 'noriks-majice.pdf',
            'sku'   => 'NORIKS-ALL-BLACK-6-PACK',
            'title' => 'NORIKS T-Shirts',
            'sub'   => 'Baumwoll-T-Shirts — Größenwahl, Tragen und Pflege.',
        ),
        array(
            'file'  => 'noriks-bokserice.pdf',
            'sku'   => 'NORIKS-BOX-BLACK-5-PACK',
            'title' => 'NORIKS Boxershorts',
            'sub'   => 'Modal-Boxershorts — Maße, Tragen und Pflege.',
        ),
        array(
            'file'  => 'noriks-kompresijske-carape.pdf',
            'sku'   => array( 'NORIKS-KOMZIPS', 'NORIKS-BOXERS-ORTO-4' ),
            'title' => 'NORIKS Kompressionsstrümpfe mit Reißverschluss',
            'sub'   => 'Abgestufte Kompression 15–20 mmHg mit seitlichem Reißverschluss.',
        ),
        array(
            'file'  => 'noriks-kneefix.pdf',
            'sku'   => 'NORIKS-KNEEFIX',
            'title' => 'NORIKS KneeFix — orthopädische Kniebandage',
            'sub'   => 'Einstellbare Kompression, seitliche Stabilisatoren und Gelpolster für die Kniescheibe.',
        ),
        array(
            'file'  => 'noriks-bunion-fix.pdf',
            'sku'   => 'NORIKS-BUNION',
            'title' => 'NORIKS Bunion Fix — Hallux-valgus-Korrektor',
            'sub'   => 'Schrittweise Ausrichtung der Großzehe mit 30 Minuten bis 3 Stunden täglich.',
        ),
        array(
            'file'  => 'noriks-ortopas.pdf',
            'sku'   => 'NORIKS-ORTOPAS',
            'title' => 'NORIKS orthopädischer Rückengurt',
            'sub'   => 'Gezielte Kompression für den unteren Rücken und Stabilisierung bei alltäglichen Bewegungen.',
        ),
        array(
            'file'  => 'noriks-fisiorest.pdf',
            'sku'   => 'NORIKS-FISIOREST',
            'title' => 'NORIKS FisioRest — Nackengerät',
            'sub'   => 'Traktion, Wärme und Vibrationsmassage in einer Sitzung von 15 bis 30 Minuten.',
        ),
        array(
            'file'  => 'noriks-fit-kompresijska-majica.pdf',
            'sku'   => 'NORIKS-KOMPSFIT',
            'title' => 'NORIKS FIT — Kompressionsshirt',
            'sub'   => 'Eng anliegende Kompression, die die Silhouette glättet und eine aufrechte Haltung unterstützt.',
        ),
        array(
            'file'  => 'noriks-leakbox.pdf',
            'sku'   => 'NORIKS-LEAKBOX',
            'title' => 'NORIKS PureDry — waschbare Inkontinenz-Boxershorts',
            'sub'   => 'Bis zu 300 ml Saugleistung, siebenlagiger Kern und wasserabweisende Membran.',
        ),
        array(
            'file'  => 'noriks-ergosit.pdf',
            'sku'   => 'NORIKS-ERGOSIT',
            'title' => 'NORIKS ErgoSit — orthopädisches Sitzkissen',
            'sub'   => 'Steißbein-Aussparung und Memory-Schaum hoher Dichte für langes Sitzen.',
        ),
        array(
            'file'  => 'noriks-kidsnest.pdf',
            'sku'   => 'NORIKS-KIDSNEST',
            'title' => 'NORIKS KidsNest — orthopädisches Kinderkissen',
            'sub'   => 'Drei Größen, die mit dem Kind mitwachsen und die richtige Kopfhaltung unterstützen.',
        ),
    );
}

/** Slika i poveznica proizvoda po SKU-u — uvijek aktualne, bez rucnog upisa URL-a. */
function noriks_manual_product( $sku ) {
    $out = array( 'img' => '', 'url' => '' );
    if ( ! function_exists( 'wc_get_product_id_by_sku' ) ) { return $out; }

    $pid = 0;
    foreach ( (array) $sku as $candidate ) {
        $pid = wc_get_product_id_by_sku( $candidate );
        if ( $pid ) { break; }
    }
    if ( ! $pid ) { return $out; }

    $out['url'] = get_permalink( $pid );
    $out['img'] = get_the_post_thumbnail_url( $pid, 'woocommerce_thumbnail' );

    if ( ! $out['img'] && function_exists( 'wc_get_product' ) ) {
        $product = wc_get_product( $pid );
        if ( $product ) {
            $gallery = $product->get_gallery_image_ids();
            if ( ! empty( $gallery[0] ) ) {
                $out['img'] = wp_get_attachment_image_url( $gallery[0], 'woocommerce_thumbnail' );
            }
        }
    }
    return $out;
}

/** Jednokratno kreira pravu WP stranicu i dodijeli joj predlozak page-upute.php. */
function noriks_manuals_ensure_page() {
    $opt = 'noriks_manuals_page_id';
    $id  = (int) get_option( $opt );
    if ( $id && get_post_status( $id ) ) { return; }

    $existing = get_page_by_path( 'anleitungen' );
    if ( $existing ) {
        update_post_meta( $existing->ID, '_wp_page_template', 'page-upute.php' );
        update_option( $opt, $existing->ID );
        return;
    }

    $id = wp_insert_post( array(
        'post_title'   => 'Gebrauchsanleitungen',
        'post_name'    => 'anleitungen',
        'post_type'    => 'page',
        'post_status'  => 'publish',
        'post_content' => '',
        'meta_input'   => array( '_wp_page_template' => 'page-upute.php' ),
    ) );
    if ( $id && ! is_wp_error( $id ) ) { update_option( $opt, $id ); }
}
add_action( 'init', 'noriks_manuals_ensure_page' );
