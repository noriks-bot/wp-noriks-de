
<?php
/* Bunion / ortopas / fisiorest: eigene Why-Sektionen (ohne return — danach
   läuft das gemeinsame Bewertungssystem weiter). Andere Produkte bleiben unberührt. */
if ( function_exists( 'noriks_is_type' ) ) {
    if ( noriks_is_type( 'bunion' ) ) {
        get_template_part( 'template_parts/product-bottom/why-bunion' );
    } elseif ( noriks_is_type( 'ortopas' ) ) {
        get_template_part( 'template_parts/product-bottom/why-ortopas' );
    } elseif ( noriks_is_type( 'fisiorest' ) ) {
        get_template_part( 'template_parts/product-bottom/why-fisiorest' );
    } elseif ( noriks_is_type( 'norikshers' ) ) {
        get_template_part( 'template_parts/product-bottom/why-norikshers' );
    } elseif ( noriks_is_type( 'kompresijske-nogavice' ) ) {
        get_template_part( 'template_parts/product-bottom/why-kompresijske' );
    } elseif ( noriks_is_type( 'leakboxers' ) ) {
        get_template_part( 'template_parts/product-bottom/why-leakboxers' );
    } elseif ( noriks_is_type( 'kompresijske-majice' ) ) {
        get_template_part( 'template_parts/product-bottom/why-kompresijske-majice' );
    } elseif ( noriks_is_type( 'ortopedski-jastuk' ) ) {
        // ERGOSIT ORTHOPÄDISCHES SITZKISSEN (orto-ortopedski-jastuk) — novi proizvod, why-sekcije po uputama
        get_template_part( 'template_parts/product-bottom/why-ortopedski-jastuk' );
    } elseif ( noriks_is_type( 'kneefix' ) ) {
        get_template_part( 'template_parts/product-bottom/why-kneefix' );
    } elseif ( noriks_is_type( 'kidsnest' ) ) {
        get_template_part( 'template_parts/product-bottom/why-kidsnest' );
    }
}
?>
<?php
if ( noriks_has_product_cat( 'starter', get_the_id() ) )   :
?>



<section  class="why-section">
  <div style="max-width: 1440px;" class="container why-container">

    <!-- Left Video -->
    <div class="why-col">
      <div class="video-wrapper">
          <img style="" src="<?php echo get_template_directory_uri(); ?>/img/starter-1.png
">
      </div>
    </div>

    <!-- Right Content -->
    <div class="why-col why-content">
      <h2 style="color: #222; text-align:left; margin-left: 20px; font-family: 'Barlow', sans-serif; color:#222223;">
WARUM SICH KUNDEN FUER DAS STARTER-PAKET ENTSCHEIDEN
      </h2>

      <div style="margin-left: 20px;" class="why-point">
        <p  style="    font-style: italic;
    line-height: 1.2;"  ><strong>"Ich habe es zuerst genommen, weil ich nicht sicher war, ob es mir passt."



</strong><span style="font-weight:normal;">Marko - Berlin</span></p>
        <p class="description">Viele Kunden starten mit dem Starter-Paket, weil sie zuerst sehen wollen, wie NORIKS sitzt und wie es sich im Alltag traegt. Ein T-Shirt und eine Boxershort reichen aus, um sich ohne grosses Risiko zu entscheiden.



</p>
      </div>

      <div style="margin-left: 20px;" class="why-point">
        <p  style="    font-style: italic;
    line-height: 1.2;" ><strong>"Nach dem ersten Tragen habe ich direkt mehr bestellt."



</strong><span style="font-weight:normal;">Pavle - Hamburg</span></p>
        <p class="description">Mehr als 95 % der Kunden bestellen nach dem Starter-Paket erneut. Nicht, weil sie es geplant hatten, sondern weil sie schon am ersten Tag den Unterschied bei Schnitt, Komfort und Qualitaet spueren.


</p>
      </div>

      <div style="margin-left: 20px;" class="why-point">
        <p  style="    font-style: italic;
    line-height: 1.2;"  ><strong>"Material und Passform haben mich ueberzeugt."



</strong><span style="font-weight:normal;">Ante - Muenchen</span></p>
        <p class="description">T-Shirt und Boxershorts sind weich, leicht und angenehm auf der Haut. Das Starter-Paket ist oft der Grund, warum NORIKS sehr schnell Teil der taeglichen Garderobe wird.



</p>
      </div>
    </div>

  </div>
</section>



<section style="background: white;" class="why-section">
   <div style="max-width: 1440px;" class="container why-container">

    <!-- Left Video -->
    <div class="why-col">
      <div class="video-wrapper">
           <img style="" src="<?php echo get_template_directory_uri(); ?>/img/starter-2.png
">
      </div>
    </div>

    <!-- Right Content -->
    <div class="why-col why-content">
      <h2 style="color: #222; text-align:left; margin-left: 20px; font-family: 'Barlow', sans-serif; color:#222223;">
EINE KOMBINATION FUER JEDEN TAG

      </h2>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Fuer ganztagigen Komfort entwickelt


</strong></p>
        <p class="description">T-Shirt und Boxershorts sind fuer das Tragen von morgens bis abends gemacht, ohne Zurechtruecken und ohne Unbequemlichkeit. Alles bleibt an seinem Platz, nichts drueckt und Sie koennen sich den ganzen Tag frei bewegen.


</p>
      </div>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Ein Schnitt, der mit dem Koerper arbeitet


</strong></p>
        <p class="description">Der Schnitt des Shirts betont den Oberkoerper, waehrend die Boxershorts genug Platz und Stabilitaet geben, ohne hochzurutschen. Das Ergebnis ist ein sicheres, entspanntes Gefuehl und ein gepflegter Look in jeder Situation.


</p>
      </div>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Qualitaet, die man sofort spuert


</strong></p>
        <p class="description">Die Materialien sind weich, atmungsaktiv und angenehm auf der Haut, ohne nach dem Waschen ihre Form zu verlieren. Schon beim ersten Tragen wird klar, warum diese Kombination schnell zum taeglichen Standard wird.


</p>
      </div>
    </div>

  </div>
</section>






<section class="why-section">
   <div style="max-width: 1440px;" class="container why-container">

    <!-- Left Video -->
    <div class="why-col">
      <div class="video-wrapper">
          <img style="" src="<?php echo get_template_directory_uri(); ?>/img/starter-3.png
">
      </div>
    </div>

    <!-- Right Content -->
    <div class="why-col why-content">
      <h2 style="color: #222; text-align:left; margin-left: 20px; font-family: 'Barlow', sans-serif; color:#222223;">
DER EINFACHSTE UND SICHERSTE START
      </h2>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>So wenig Risiko wie moeglich


</strong></p>
        <p class="description">Weil Sie die Qualitaet kennenlernen koennen, ohne viel im Voraus auszugeben.
Statt sofort mehrere Teile zu kaufen, nehmen Sie ein T-Shirt und eine Boxershort. Genau genug, um zu sehen, wie alles sitzt, wie es sich traegt und wie sich das Material anfuehlt.

</p>
      </div>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Fuer den ersten Schritt gemacht


</strong></p>
        <p class="description">Das Starter-Paket ist als erster Eindruck gedacht, nicht als Vorrat.
Es ist pro Kunde nur einmal und zu einem Sonderpreis verfuegbar, damit die Entscheidung leichtfaellt.


</p>
      </div>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Ein Erlebnis, das sich wiederholt


</strong></p>
        <p class="description">Die meisten Maenner bleiben danach bei NORIKS, weil sie den Unterschied bei Schnitt, Komfort und Qualitaet merken.
Aber der erste Schritt ist genau dieser: wenig Risiko, klarer Eindruck.

</p>
      </div>
    </div>

  </div>
</section>



<?php endif; ?>







<?php 
if ( noriks_has_product_cat( 'tshirts', get_the_id() ) || has_term( 'black-friday', 'product_cat', get_the_id() ) || has_term( 'orto-majica-darila', 'product_cat', get_the_id() ) ) :
?>





<section class="why-section">
  <div class="container why-container">

    <!-- Left Video -->
    <div class="why-col">
      <div class="video-wrapper">
        <video 
          autoplay muted loop playsinline 
          class="why-video">
          <source src="https://noriks.com/de/wp-content/themes/noriks/videos/noriks_gif_en_2-1.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      </div>
    </div>

    <!-- Right Content -->
    <div class="why-col why-content">
      <h2 style="color: #222; text-align:left; margin-left: 20px; font-family: 'Barlow', sans-serif; color:#222223;">
        <?php echo get_field( 'singlepp_content_part_h1', 'options' ); ?>
      </h2>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong><?php echo get_field( 'singlepp_content_part_t_1', 'options' ); ?></strong></p>
        <p class="description"><?php echo get_field( 'singlepp_content_part_t_2', 'options' ); ?></p>
      </div>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong><?php echo get_field( 'singlepp_content_part_t_3', 'options' ); ?></strong></p>
        <p class="description"><?php echo get_field( 'singlepp_content_part_t_4', 'options' ); ?></p>
      </div>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong><?php echo get_field( 'singlepp_content_part_t_5', 'options' ); ?></strong></p>
        <p class="description"><?php echo get_field( 'singlepp_content_part_t_6', 'options' ); ?></p>
      </div>
    </div>

  </div>
</section>


  
  
  
  
  
  
<!-- table section -->

  
  
<section class="comparison-section" style="padding-top: 30px;" >
    <div class="comparison-intro">
     <!-- <h4 class="highlight"><?php echo get_field("_comp_table_t1", "options"); ?></h4>-->
      <h1 style="color:white;"><?php echo get_field("_comp_table_t2", "options"); ?></h1>
      <p style="    opacity: 0.6;" class="note"><?php echo get_field("_comp_table_t3", "options"); ?></p>
    </div>
  </section>
  
  
<section class="comparison-table-section">
 
 <div class="comparison-container">
   <table class="comparison-table">
      <thead>
        <tr>
          <th></th>
          <th class="brand-column">
                <?php echo get_field("_comp_table_inside_1", "options"); ?><br>
            <div class="price"><?php echo get_field("_comp_table_inside_3", "options"); ?></div>
          </th>
          <th class="other-brand"><?php echo get_field("_comp_table_inside_2", "options"); ?><br><span><?php echo get_field("_comp_table_inside_4", "options"); ?></span></th>
        </tr>
      </thead>
      <tbody>
          
          <?php
          $_comp_table_fieldlines = get_field("_comp_table_fieldlines","options");
          ?>
          
            <?php if ($_comp_table_fieldlines): ?>
             <?php foreach ($_comp_table_fieldlines as $item): ?>
          
                    <tr>
                      <td><?php echo $item['text']; ?></td>
                      <td class="bg-best"><span  style="background: #496d8f;" class="checkmark">✔</span></td>
                      <td class="bg-bad"><span class="crossmark">✖</span></td>
                    </tr>
                    
            <?php endforeach; ?>
        <?php endif; ?>
       
       
      </tbody>
    </table>

    <p style="    opacity: 0.6;" class="small-note">
      <?php echo get_field("_comp_table_bottom_text", "options"); ?>
    </p>
  </div>
</section>



<section class="why-section">
  <div class="container why-container">

    <!-- Left Video -->
    <div class="why-col">
      <div class="video-wrapper">
          <img style="width: 100%;       
    aspect-ratio: 1/1; 
    object-fit: cover;  " src="<?php echo get_template_directory_uri(); ?>/img/majice-3 (1).jpeg">
      </div>
    </div>

    <!-- Right Content -->
    <div class="why-col why-content">
      <h2 style="color: #222; text-align:left; margin-left: 20px; font-family: 'Barlow', sans-serif; color:#222223;">
        WARUM DIESES SHIRT IHR STANDARD WIRD
      </h2>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Fuer das echte Leben gemacht
</strong></p>
        <p class="description">Dieses Shirt ist fuer den ganzen Tag gemacht, von morgens bis abends. Es braucht kein Zurechtruecken und kein Nachdenken. Es sitzt einfach gut, in jeder Situation.
</p>
      </div>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Ein Schnitt, der den Koerper versteht
</strong></p>
        <p class="description">Der Schnitt wurde so entwickelt, dass er der Koerperform folgt, ohne einzuengen, und genau das betont, was er soll. Das Ergebnis ist ein gepflegter, selbstsicherer Look ohne Unbehagen.
</p>
      </div>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Spueren Sie den Unterschied schon beim ersten Tragen
</strong></p>
        <p class="description">Das Material ist weich, leicht und atmungsaktiv auf der Haut. Nach dem ersten Tragen ist klar, warum dieses Shirt schnell zu dem wird, das Sie am haeufigsten waehlen.
</p>
      </div>
    </div>

  </div>
</section>

  
<!-- table section -->

<?php endif; ?>







<!-- here we include new file BOXERIRICE-->

<?php if ( noriks_has_product_cat( 'boxers', get_the_ID() ) && !has_term( 'black-friday', 'product_cat', get_the_ID() ) ): ?>



<style>
    .why-container  {
    max-width: 1440px !important;
}
    
</style>


<?php 
if(  get_the_ID() == 39181 ): 
?>


<!-- invlude video views here -->


<?php 
endif; 
?>










<!-- 1 boksarica -->


<section class="why-section">
  <div class="container why-container">

    <!-- Left Video -->
    <div class="why-col">
       <img src="/de/wp-content/uploads/2025/12/recreate_without_photo_equipment_98300wkq98yf4jbkroa5.jpg">
    </div>

    <!-- Right Content -->
    <div class="why-col why-content">
      <h2 style="color: #222; text-align:left; margin-left: 20px; font-family: 'Barlow', sans-serif; color:#222223;">
        Flexibler Schnitt fuer kraeftigere Beine
      </h2>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Ganztagiger Komfort
</strong></p>
        <p class="description">Speziell fuer Maenner mit kraeftigeren Oberschenkeln entwickelt. Das elastische, flexible Material bietet maximalen Komfort ohne Druck oder unangenehmen Bund. Die Unterwaesche bleibt an Ort und Stelle und rutscht nicht hoch, sodass Sie sich den ganzen Tag frei bewegen koennen.</p>
      </div>

    
    
    </div>

  </div>
</section>
<style>
/* your styles */
</style>





<!-- 2 boksarica -->

<section  style="background: white;" class="why-section">
  <div class="container why-container">

    <!-- Left Video -->
    <div class="why-col">
       <img src="/de/wp-content/uploads/2025/12/recreate_this_picture_to_look_more_real_same_text_on_it_zidddz68sbcgp6wmizbl.jpg">
    </div>

    <!-- Right Content -->
    <div class="why-col why-content">
      <h2 style="color: #222; text-align:left; margin-left: 20px; font-family: 'Barlow', sans-serif; color:#222223;">
       Weniger Verschleiss und Beschaedigung
      </h2>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Besonders langlebig
</strong></p>
        <p class="description">Vergessen Sie staendiges Nachkaufen von kaputter Unterwaesche. NORIKS Shorts bestehen aus robusterem Material, halten laenger und sparen Ihnen den naechsten Einkauf.
</p>
      </div>

      <div style="margin-left: 20px;" class="why-point">
        
        
        <p class="description">
        
        ✅ Weniger Einreissen<br/>
        ✅ Weniger Schwitzen<br/>
        ✅ Komfort den ganzen Tag<br/>
                
        </p>
      </div>

     
    </div>

  </div>
</section>
<style>
/* your styles */
</style>




<!-- 3 boksarica -->

<section class="why-section">
  <div class="container why-container">

    <!-- Left Video -->
    <div class="why-col">
       <img style="width: 100%;       
    aspect-ratio: 1/1; 
    object-fit: cover;  " src="/de/wp-content/uploads/2025/12/create_same_style_studio_photo_with_younger_guy_30_years_normal_look_and_croatian_can_look_midldle__e99c86vy07c57mjd38f6.jpg">
    </div>

    <!-- Right Content -->
    <div class="why-col why-content">
      <h2 style="color: #222; text-align:left; margin-left: 20px; font-family: 'Barlow', sans-serif; color:#222223;">
       Genug Platz fuer alles
      </h2>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Lassen Sie alles frei atmen
</strong></p>
        <p class="description">NORIKS Unterwaesche gibt den ganzen Tag Halt, ohne ihre Form zu verlieren. Das unglaublich weiche Modal-Material dehnt sich mit und sitzt genau dort richtig, wo es soll. Der Bereich vorne ist geraeumiger und flexibler, damit nichts eingeengt wirkt.</p>
      </div>

   
   
    </div>

  </div>
</section>
<style>
/* your styles */
</style>








<?php endif; ?>

<!-- end BOXERICE -->






<style>
    .most-popular {
    
        padding-top: 20px;
    
    }
</style>










<!--  BOXERICE stylee -->






  
  
  <style>
      
      .comparison-section-gray  {
         border-radius: 5px;
        }
              
      .comparison-intro-gray  {
           margin-bottom: 0;
        }
      
  </style>
  <div  style="background: #f9f9f9; padding-top: 30px;" >
<section style="background: #f9f9f9; max-width: 1440px;" class="comparison-section comparison-section-gray">
    <div style="background: #f9f9f9;padding: 0;padding-left: 10px;
    padding-right: 10px;" class="comparison-intro comparison-intro-gray ">
      <!--<h4 style="" class="highlight"><?php echo get_field("singlepp_content_standard_reviews_t1","options"); ?></h4>-->
      <h1 style="color:black;     margin-bottom: 4px;">
          
          <?php if ( function_exists('noriks_is_type') && noriks_is_type('fisiorest') ): ?>
          
          
          
          Du bist nicht allein auf der Suche nach Entlastung für den Nacken.
          
          <?php elseif ( function_exists('noriks_is_type') && noriks_is_type('bunion') ): ?>
          
          
          
          Du bist nicht allein auf der Suche nach Linderung bei Hallux valgus.
          
          <?php elseif ( function_exists('noriks_is_type') && noriks_is_type('ortopas') ): ?>
          
          
          
          Du bist nicht allein auf der Suche nach Entlastung für den Rücken.
          
          <?php elseif ( function_exists('noriks_is_type') && noriks_is_type('kompresijske-nogavice') ): ?>
          
          
          
          Du bist nicht allein auf der Suche nach perfekten Kompressionsstrümpfen.
          
          <?php elseif ( function_exists('noriks_is_type') && noriks_is_type('bokserice') ): ?>
          
          
          
          Du bist nicht allein auf der Suche nach perfekten Boxershorts.
          
          <?php elseif ( function_exists('noriks_is_type') && noriks_is_type('norikshers') ): ?>

          Du bist nicht allein auf der Suche nach glatter, faltenfreier Haut.

          <?php elseif ( function_exists('noriks_is_type') && noriks_is_type('leakboxers') ): ?>

          Sie sind nicht allein auf der Suche nach zuverlässigem Schutz vor Urinverlust.

          <?php elseif ( function_exists('noriks_is_type') && noriks_is_type('kompresijske-majice') ): ?>

          Sie sind nicht allein auf der Suche nach einer schärferen Silhouette und besserer Haltung.

          <?php elseif ( function_exists('noriks_is_type') && noriks_is_type('ortopedski-jastuk') ): ?>

          Sie sind nicht allein auf der Suche nach schmerzfreiem Sitzen.

          <?php elseif ( function_exists('noriks_is_type') && noriks_is_type('kneefix') ): ?>

           Sie sind nicht allein auf der Suche nach einem stabileren Knie.

          <?php elseif ( function_exists('noriks_is_type') && noriks_is_type('kneefix') ): ?>Tausende Kunden tragen die NORIKS KneeFix Bandage bereits für ein stabileres Knie – auf Treppen, beim Spaziergang und bei langem Stehen.<?php elseif ( function_exists('noriks_is_type') && noriks_is_type('kidsnest') ): ?>

          Sie sind nicht allein auf der Suche nach ruhigem Kinderschlaf.

          <?php elseif ( !noriks_has_product_cat( 'boxers', get_the_ID() ) ): ?>

          <?php echo get_field("singlepp_content_standard_reviews_t2","options"); ?>

          <?php else: ?>

          Sie sind nicht allein auf der Suche nach den perfekten Boxershorts.

          <?php endif; ?>
          
          
          </h1>
    <p class="note" style="color: black; margin-top: 0px; margin-bottom: 5px;"><?php if ( function_exists('noriks_is_type') && noriks_is_type('fisiorest') ): ?>Tausende nutzen bereits NORIKS FisioRest für weniger Schmerzen und Verspannungen im Nacken – Traktion, Vibration und Wärme in einem Gerät.<?php elseif ( function_exists('noriks_is_type') && noriks_is_type('bunion') ): ?>Tausende tragen bereits den NORIKS Korrektor für weniger Schmerzen und eine geradere Zehenstellung – zu Hause, vor dem Fernseher oder im Schlaf.<?php elseif ( function_exists('noriks_is_type') && noriks_is_type('ortopas') ): ?>Tausende tragen bereits den NORIKS Rückengurt für weniger Schmerzen und einen stabileren Rücken – bei der Arbeit, beim Heben und langem Sitzen.<?php elseif ( function_exists('noriks_is_type') && noriks_is_type('kompresijske-nogavice') ): ?>Tausende Männer tragen bereits die NORIKS Kompressionsstrümpfe für leichtere und weniger müde Beine – bei der Arbeit, auf Reisen und beim Training.<?php elseif ( function_exists('noriks_is_type') && noriks_is_type('bokserice') ): ?>Tausende Männer tragen bereits die NORIKS Boxershorts – Komfort, der den ganzen Tag hält.<?php elseif ( function_exists('noriks_is_type') && noriks_is_type('norikshers') ): ?>Tausende Frauen verwenden bereits die HERS Silikon-Kollagen-Streifen für glattere, straffere und jugendlicher aussehende Haut.<?php elseif ( function_exists('noriks_is_type') && noriks_is_type('leakboxers') ): ?>Tausende Männer tragen bereits die NORIKS saugfähigen Boxershorts für Trockenheit und Selbstvertrauen – ohne Einlagen und Windeln.<?php elseif ( function_exists('noriks_is_type') && noriks_is_type('kompresijske-majice') ): ?>Tausende Männer tragen bereits das NORIKS Kompressionsshirt für einen geglätteten Bauch, bessere Haltung und mehr Selbstvertrauen.<?php elseif ( function_exists('noriks_is_type') && noriks_is_type('ortopedski-jastuk') ): ?>Tausende Kunden verwenden bereits das NORIKS ErgoSit orthopädische Sitzkissen, um ohne Schmerzen im Steißbein, Rücken und in den Hüften zu sitzen – im Auto, im Büro und zu Hause.<?php elseif ( function_exists('noriks_is_type') && noriks_is_type('kidsnest') ): ?>Tausende Eltern haben das gewöhnliche Kissen bereits durch das NORIKS KidsNest ersetzt – leisere Nächte, Nasenatmung und Schlaf, der wirklich erholt.<?php else: ?><?php echo get_field("singlepp_content_standard_reviews_t3","options"); ?><?php endif; ?></p>
    </div>
  </section>
  </div>
  
  
  <style>
      @media (max-width: 768px) {
          
          .basic-reviews-section  {
               padding-left: 0px;
               padding-right: 0px;
            }
            .review .content {
                font-size: 13px;
            }
            .review .info {
                font-size: 13px;
                line-height: 1.3;
            }
            .review {
  
                padding-bottom: 15px;
                margin-bottom: 16px;

            }
      }
  </style>
  
  
  <style>
.loader {
  border: 4px solid #f3f3f3;
  border-top: 4px solid #f5a623;
  border-radius: 50%;
  width: 30px;
  height: 30px;
  animation: spin 0.8s linear infinite;
  margin: 0 auto;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

.extra-review-group {
  opacity: 0;
  transition: opacity 0.5s ease;
}

.extra-review-group.show {
  opacity: 1;
}
</style>







<?php 
  // ===== CONFIG: LANGUAGE & DATA =====
  $reviews_language = get_field("webshop_language", "options");
  if (!$reviews_language) { $reviews_language = "EN"; }

  // Detect if current product belongs to the boxershorts group.
  $current_product_id = (function_exists('is_product') && is_product()) ? get_queried_object_id() : get_the_id();
  $is_bokserice_page  = noriks_has_product_cat( 'boxers', $current_product_id );
  $is_ortopas_page    = ( function_exists('noriks_is_type') && noriks_is_type('ortopas', $current_product_id) );
  $is_bunion_page     = ( function_exists('noriks_is_type') && noriks_is_type('bunion', $current_product_id) );
  $is_fisiorest_page  = ( function_exists('noriks_is_type') && noriks_is_type('fisiorest', $current_product_id) );
  $is_norikshers_review_page = ( function_exists('noriks_is_type') && noriks_is_type('norikshers', $current_product_id) );
  $is_leakboxers_page = ( function_exists('noriks_is_type') && noriks_is_type('leakboxers', $current_product_id) );
  $is_kompmajice_page = ( function_exists('noriks_is_type') && noriks_is_type('kompresijske-majice', $current_product_id) );
  $is_jastuk_page     = ( function_exists('noriks_is_type') && noriks_is_type('ortopedski-jastuk', $current_product_id) );
  $is_kidsnest_page   = ( function_exists('noriks_is_type') && noriks_is_type('kidsnest', $current_product_id) );
  $is_kneefix_page    = ( function_exists('noriks_is_type') && noriks_is_type('kneefix', $current_product_id) );

  // Fallback product name shown in review cards.
  $rv_fallback_title = ( function_exists('noriks_is_type') && noriks_is_type('kompresijske-nogavice') ) ? 'NORIKS Kompressionsstrümpfe'
                     : ( $is_ortopas_page ? 'NORIKS Rückengurt'
                     : ( $is_bunion_page ? 'NORIKS Hallux-Korrektor'
                     : ( $is_fisiorest_page ? 'NORIKS FisioRest'
                     : ( $is_kneefix_page ? 'NORIKS KneeFix Kniebandage'
                     : ( $is_kidsnest_page ? 'NORIKS KidsNest Kissen'
                     : ( $is_jastuk_page ? 'NORIKS ErgoSit orthopädisches Sitzkissen'
                     : ( $is_leakboxers_page ? 'NORIKS saugfähige Boxershorts'
                     : ( $is_kompmajice_page ? 'NORIKS FIT Kompressionsshirt'
                     : ( $is_norikshers_review_page ? 'NORIKS HERS' : 'Ein graues T-Shirt' ) ) ) ) ) ) ) ) );

  // Include review pools (own pool per orto product group)
  if ( $is_kneefix_page ) {
    include get_stylesheet_directory() . '/auto_reviews/DE_kneefix.php';
  } elseif ( $is_kidsnest_page ) {
    include get_stylesheet_directory() . '/auto_reviews/DE_kidsnest.php';
  } elseif ( $is_jastuk_page ) {
    include get_stylesheet_directory() . '/auto_reviews/DE_ortopedski_jastuk.php';
  } elseif ( $is_leakboxers_page ) {
    include get_stylesheet_directory() . '/auto_reviews/DE_leakboxers.php';
  } elseif ( $is_kompmajice_page ) {
    include get_stylesheet_directory() . '/auto_reviews/DE_kompresijske-majice.php';
  } elseif ( $is_norikshers_review_page ) {
    include get_stylesheet_directory() . '/auto_reviews/DE_norikshers.php';
  } elseif ( $is_fisiorest_page ) {
    include get_stylesheet_directory() . '/auto_reviews/DE_fisiorest.php';
  } elseif ( $is_bunion_page ) {
    include get_stylesheet_directory() . '/auto_reviews/DE_bunion.php';
  } elseif ( $is_ortopas_page ) {
    include get_stylesheet_directory() . '/auto_reviews/DE_ortopas.php';
  } elseif ( ( function_exists('noriks_is_type') && noriks_is_type('kompresijske-nogavice') ) ) {
      include get_stylesheet_directory() . '/auto_reviews/DE_nogavice.php';
  } elseif ( ! $is_bokserice_page )  {
    include get_stylesheet_directory() . '/auto_reviews/'.$reviews_language.'.php';
  } else {
    $boxers_reviews_file = '/auto_reviews/' . $reviews_language . '_bokserice.php';
    include get_stylesheet_directory() . $boxers_reviews_file;
  }

  include get_stylesheet_directory() . '/auto_reviews/'.$reviews_language.'-2.php';

  // Ensure arrays exist
  $auto_reviews_en   = is_array($auto_reviews_en)   ? $auto_reviews_en   : [];
  $auto_reviews_ship = isset($auto_reviews_ship) && is_array($auto_reviews_ship) ? $auto_reviews_ship : [];

  // ===== HELPERS: STABLE DAILY RANDOMIZATION =====

  /**
   * Get WP/Woo timezone (fallback Europe/Ljubljana).
   */
  function reviews_wp_tz(): DateTimeZone {
    $tz_string = function_exists('wp_timezone_string') ? wp_timezone_string() : (get_option('timezone_string') ?: 'Europe/Ljubljana');
    return new DateTimeZone($tz_string ?: 'Europe/Ljubljana');
  }

  /**
   * Deterministic "random" integer in [0, $mod-1] from a seed string.
   */
  function stable_mod_index(string $seed, int $mod): int {
    if ($mod <= 0) return 0;
    $h = substr(sha1($seed), 0, 8); // 32-bit slice
    $n = hexdec($h);
    return (int) ($n % $mod);
  }

  /**
   * Deterministic shuffle based on a seed string. (Stable for a given seed.)
   */
  function shuffle_with_seed(array $arr, string $seed): array {
    if (empty($arr)) return $arr;
    $keys = array_keys($arr);
    usort($keys, function($a, $b) use ($seed) {
      $ha = sha1($seed . ':' . $a);
      $hb = sha1($seed . ':' . $b);
      return strcmp($ha, $hb);
    });
    $out = [];
    foreach ($keys as $k) { $out[] = $arr[$k]; }
    return $out;
  }

  /**
   * Build/caches a pool of products: [['title'=>..., 'url'=>...], ...]
   */
  function get_wc_product_pool(
      $transient_key = 'reviews_product_pool_cache_v4',
      $ttl = 12 * HOUR_IN_SECONDS
  ) {
      if ( ! function_exists( 'wc_get_products' ) ) {
          return [];
      }

      $product_id = 0;
      if ( function_exists( 'is_product' ) && is_product() ) {
          $product_id = get_queried_object_id();
      }

      $is_bokserice = false;
      $is_ortopas   = false;
      $is_bunion    = false;
      $is_fisiorest = false;
      $is_norikshers = false;
      $is_leakboxers = false;
      $is_kompmajice = false;
      $is_jastuk    = false;
      $is_nogavice    = false;
      $is_kidsnest  = false;
      if ( $product_id ) {
          $is_bokserice = noriks_has_product_cat( 'boxers', $product_id );
          $is_ortopas   = ( function_exists('noriks_is_type') && noriks_is_type('ortopas', $product_id) );
          $is_bunion    = ( function_exists('noriks_is_type') && noriks_is_type('bunion', $product_id) );
          $is_fisiorest = ( function_exists('noriks_is_type') && noriks_is_type('fisiorest', $product_id) );
          $is_norikshers = ( function_exists('noriks_is_type') && noriks_is_type('norikshers', $product_id) );
          $is_leakboxers = ( function_exists('noriks_is_type') && noriks_is_type('leakboxers', $product_id) );
          $is_kompmajice = ( function_exists('noriks_is_type') && noriks_is_type('kompresijske-majice', $product_id) );
          $is_jastuk    = ( function_exists('noriks_is_type') && noriks_is_type('ortopedski-jastuk', $product_id) );
          $is_nogavice    = ( function_exists('noriks_is_type') && noriks_is_type('kompresijske-nogavice', $product_id) );
          $is_kidsnest  = ( function_exists('noriks_is_type') && noriks_is_type('kidsnest', $product_id) );
      }

      /* Kljuc se izpelje iz tipa izdelka — rocni seznam zastavic je zaostajal
         za vejami in je npr. KneeFixu stregel predpomnjeni bazen majic. */
      $noriks_key_type = 'all';
      if ( function_exists( 'noriks_is_type' ) ) {
          foreach ( array( 'kneefix', 'kidsnest', 'ortopedski-jastuk', 'leakboxers', 'kompresijske-majice', 'norikshers', 'fisiorest', 'bunion', 'ortopas', 'kompresijske-nogavice', 'nosilka', 'controlpro', 'dental', 'hairmagic', 'norikshersbrush', 'noriks-cards', 'cloath', 'bra', 'hyd', 'snore', 'cloud', 'bokserice' ) as $t ) {
              if ( noriks_is_type( $t, $product_id ) ) { $noriks_key_type = $t; break; }
          }
      }
      $cache_key = $transient_key . '_' . $noriks_key_type;

      if ( function_exists( 'get_transient' ) ) {
          $cached = get_transient( $cache_key );
          if ( ! empty( $cached ) && is_array( $cached ) ) {
              return $cached;
          }
      }

      $args = [
          'status'  => 'publish',
          'limit'   => -1,
          'return'  => 'ids',
          'orderby' => 'date',
          'order'   => 'DESC',
      ];

      if ( $is_kidsnest ) {
          $args['category'] = [ 'orto-kidsnest' ];
      } elseif ( $is_jastuk ) {
          $args['category'] = [ 'orto-ortopedski-jastuk' ];
      } elseif ( $is_leakboxers ) {
          $args['category'] = [ 'orto-leak-boxers' ];
      } elseif ( $is_kompmajice ) {
          $args['category'] = [ 'orto-kompresijske-majice' ];
      } elseif ( $is_norikshers ) {
          $args['category'] = [ 'orto-norikshers', 'orto-noriks-hers' ];
      } elseif ( $is_fisiorest ) {
          $args['category'] = [ 'orto-fisiorest' ];
      } elseif ( $is_bunion ) {
          $args['category'] = [ 'orto-bunion' ];
      } elseif ( $is_ortopas ) {
          $args['category'] = [ 'orto-ortopas' ];
      } elseif ( $is_bokserice ) {
          $args['category'] = noriks_term_group( 'boxers' );
      } elseif ( $is_nogavice ) {
          $args['category'] = [ 'socken', 'orto-kompresijske-carape' ];
      } elseif ( function_exists('noriks_is_type') && noriks_is_type('kneefix', $product_id) ) {
          $args['category'] = [ 'orto-kneefix' ];
      } else {
          // Stranice majica: bazen SAMO iz kategorije majica (s podkategorijama).
          // Prije je uzimao sve osim bokserica, pa su recenzije o majicama
          // zavrsavale pod orto proizvodima (Cloth XXL, Cool Curl…).
          $args['category'] = noriks_term_group( 'tshirts' );
      }

      $ids = wc_get_products( $args );

      $pool = [];
      if ( ! empty( $ids ) ) {
          foreach ( $ids as $pid ) {
              $title = get_the_title( $pid );
              $url   = get_permalink( $pid );
              if ( $title && $url ) {
                  $pool[] = [
                      'title' => $title,
                      'url'   => $url,
                  ];
              }
          }
      }

      if ( function_exists( 'set_transient' ) ) {
          set_transient( $cache_key, $pool, $ttl );
      }

      return $pool;
  }

  /**
   * Load avatar images from theme folder and return URLs.
   * Expected folders:
   *  - /auto_reviews/bokserice-slike/
   *  - /auto_reviews/majice-slike/
   */
  function get_review_avatar_pool(string $type = 'tshirts'): array {
    $type = ($type === 'boxershorts' || $type === 'bokserice') ? 'bokserice' : 'majice';

    $dir_path = trailingslashit(get_stylesheet_directory()) . 'auto_reviews/' . $type . '-slike/';
    $dir_url  = trailingslashit(get_stylesheet_directory_uri()) . 'auto_reviews/' . $type . '-slike/';

    if ( ! is_dir($dir_path) ) return [];

    $files = glob($dir_path . '*.{jpg,jpeg,png,webp,JPG,JPEG,PNG,WEBP}', GLOB_BRACE);
    if (empty($files)) return [];

    $urls = [];
    foreach ($files as $f) {
      $base = basename($f);
      if ($base && $base[0] !== '.') {
        $urls[] = $dir_url . rawurlencode($base);
      }
    }
    return $urls;
  }

  /**
   * Assign avatars (some real, some placeholder) deterministically per day + review index.
   * If real image is chosen, sets $r['avatar_url'].
   */
  function assign_avatars_stable(array $reviews, array $avatar_pool, string $daily_seed, string $context_seed = 'product', int $real_probability_percent = 60): array {
    $count = count($avatar_pool);
    foreach ($reviews as $i => &$r) {
      $r['avatar_url'] = '';

      if ($count <= 0) continue;

      $roll = stable_mod_index($daily_seed . ':avatar-roll:' . $context_seed . ':' . $i, 100);
      if ($roll < max(0, min(100, $real_probability_percent))) {
        $pick_i = stable_mod_index($daily_seed . ':avatar-pick:' . $context_seed . ':' . $i, $count);
        $r['avatar_url'] = $avatar_pool[$pick_i] ?? '';
      }
    }
    return $reviews;
  }
  
  
  
  /**
 * Avatar images rules:
 * - First $first_n reviews ALWAYS get an image (if available)
 * - Remaining images (unique) are placed randomly within reviews [$range_start .. $range_end]
 * - Each image can appear ONLY once
 * - Deterministic per day (stable daily seed)
 */
function assign_unique_avatars_first3_then_random_until30(
  array $reviews,
  array $avatar_pool,
  string $daily_seed,
  string $context_seed = 'product',
  int $first_n = 3,
  int $range_start = 3,   // 0-based index: review #4
  int $range_end = 30     // 1-based count: up to review #30 -> last index 29
): array {
  $total = count($reviews);
  if ($total <= 0) return $reviews;

  // Ensure key exists and default is placeholder
  foreach ($reviews as &$r) { $r['avatar_url'] = ''; }
  unset($r);

  if (empty($avatar_pool)) return $reviews;

  // Deterministic shuffle of images (stable per day)
  $pool = shuffle_with_seed($avatar_pool, 'avatar-pool:' . $daily_seed . ':' . $context_seed);
  $pool_count = count($pool);

  // 1) First N reviews always get images (as many as available)
  $first_n = max(0, min($first_n, $total, $pool_count));
  for ($i = 0; $i < $first_n; $i++) {
    $reviews[$i]['avatar_url'] = $pool[$i] ?? '';
  }

  // If no more images left, finish
  if ($pool_count <= $first_n) return $reviews;

  // 2) Randomly place remaining images from review #4 to #30 (indexes 3..29)
  $last_index = min($total - 1, $range_end - 1);
  if ($last_index < $range_start) return $reviews;

  $eligible = range($range_start, $last_index);

  // Deterministic shuffle of eligible positions (stable per day)
  $eligible = shuffle_with_seed($eligible, 'avatar-positions:' . $daily_seed . ':' . $context_seed);

  $remaining_images = array_slice($pool, $first_n);
  $take = min(count($remaining_images), count($eligible));

  for ($j = 0; $j < $take; $j++) {
    $pos = $eligible[$j];
    $reviews[$pos]['avatar_url'] = $remaining_images[$j] ?? '';
  }

  return $reviews;
}
  
  
  
  /**
 * Assign avatars for first N reviews:
 * - Use each real image at most once (no repeats).
 * - Only apply to first $use_first_n reviews.
 * - After that (or if pool runs out), use placeholder (avatar_url = '').
 * Deterministic per day.
 */
function assign_unique_avatars_first_n(array $reviews, array $avatar_pool, string $daily_seed, string $context_seed = 'product', int $use_first_n = 10): array {
  $total = count($reviews);
  if ($total <= 0) return $reviews;

  // Ensure every review has the key
  foreach ($reviews as &$r) { $r['avatar_url'] = ''; }
  unset($r);

  if (empty($avatar_pool)) return $reviews;

  // Deterministic shuffled image order for the day + context
  $shuffled_pool = shuffle_with_seed($avatar_pool, 'avatar-pool:' . $daily_seed . ':' . $context_seed);

  // We can only place as many images as we have, and only in first N reviews
  $limit = min($use_first_n, $total, count($shuffled_pool));

  for ($i = 0; $i < $limit; $i++) {
    $reviews[$i]['avatar_url'] = $shuffled_pool[$i] ?? '';
  }

  return $reviews;
}

  /**
   * Assign a deterministic product (title+url) to each review for the day.
   * Stable per day AND per review index.
   */
  function assign_products_stable(array $reviews, array $product_pool, string $daily_seed): array {
    $count = count($product_pool);
    foreach ($reviews as $i => &$r) {
      if ($count > 0) {
        $pick = $product_pool[ stable_mod_index($daily_seed . ':prod:' . $i, $count) ];
        $r['product_title'] = $pick['title'];
        $r['product_url']   = $pick['url'];
      } else {
        $r['product_title'] = $r['product_title'] ?? '';
        $r['product_url']   = $r['product_url']   ?? '';
      }
    }
    return $reviews;
  }

  /**
   * Distribute review dates backward from today to a cutoff date (inclusive),
   * with a deterministic per-day count using the daily seed.
   */
  function assign_dates_stable(array $reviews, string $cutoff_date_string = '20.6.2025', int $min_per_day = 2, int $max_per_day = 9, string $display_format = 'j.n.Y'): array {
    if (empty($reviews)) return $reviews;

    $tz      = reviews_wp_tz();
    $today   = new DateTime('today', $tz);
     $today->modify('-7 days'); // newest review date = today - 7 days
    $cutoff  = DateTime::createFromFormat('j.n.Y', $cutoff_date_string, $tz) ?: new DateTime('20.6.2025', $tz);
    if ($cutoff > $today) $cutoff = clone $today;

    $daily_seed = $today->format('Y-m-d');
    $reviews    = shuffle_with_seed($reviews, 'reviews-order:' . $daily_seed);

    $total    = count($reviews);
    $assigned = 0;
    $day_off  = 0;

    while ($assigned < $total) {
      $date = (clone $today)->modify("-{$day_off} days");
      if ($date < $cutoff) $date = clone $cutoff;

      $span   = max(0, $max_per_day - $min_per_day);
      $add    = ($span > 0) ? (stable_mod_index('perday:'.$daily_seed.':'.$day_off, $span + 1)) : 0;
      $perday = $min_per_day + $add;

      $take = min($perday, $total - $assigned);
      for ($i = 0; $i < $take; $i++) {
        $reviews[$assigned]['assigned_date'] = $date->format($display_format);
        $assigned++;
      }

      $day_off++;
      if ($date == $cutoff && $assigned >= $total) break;
    }

    foreach ($reviews as &$r) {
      if (empty($r['assigned_date'])) $r['assigned_date'] = $cutoff->format($display_format);
    }
    return $reviews;
  }

  // ===== BUILD FOR TODAY =====
  $tz         = reviews_wp_tz();
  $today_obj  = new DateTime('today', $tz);
  $daily_seed = $today_obj->format('Y-m-d');

  // Avatar pools based on page category
  $avatar_type = $is_bokserice_page ? 'bokserice' : 'majice';
  // Belt + bunion + fisiorest + leak boxers + kompressionsshirt + jastuk + kidsnest: text-only reviews (no avatar images).
  $noriks_no_photos = function_exists('noriks_is_type') && (
        noriks_is_type('kompresijske-nogavice') ||
        noriks_is_type('ortopas') ||
        noriks_is_type('bunion') ||
        noriks_is_type('fisiorest') ||
        noriks_is_type('kneefix') ||
        noriks_is_type('kidsnest') ||
        noriks_is_type('ortopedski-jastuk') ||
        noriks_is_type('leakboxers') ||
        noriks_is_type('kompresijske-majice') ||
        noriks_is_type('norikshers') ||
        noriks_is_type('nosilka') ||
        noriks_is_type('controlpro') ||
        noriks_is_type('dental') ||
        noriks_is_type('hairmagic') ||
        noriks_is_type('norikshersbrush') ||
        noriks_is_type('noriks-cards') ||
        noriks_is_type('cloath') ||
        noriks_is_type('bra') ||
        noriks_is_type('hyd') ||
        noriks_is_type('snore') ||
        noriks_is_type('cloud')
  );
  // fotografije osoba: samo na odjeci (majice, bokserice, kompleti), ne na ortopedskim pomagalima
  $avatar_pool = $noriks_no_photos ? array() : get_review_avatar_pool($avatar_type);

  // On single-product landing pages (leak boxers / kompressionsshirt) the cards should
  // reference THIS product (via $rv_fallback_title), not random pool products.
  $product_pool = ( $is_leakboxers_page || $is_kompmajice_page || $is_kneefix_page ) ? array() : get_wc_product_pool();

  // 1) Stable daily shuffle of review pools
  $auto_reviews_en   = shuffle_with_seed($auto_reviews_en,   'pool-en:'   . $daily_seed);
  $auto_reviews_ship = shuffle_with_seed($auto_reviews_ship, 'pool-ship:' . $daily_seed);

  // 2) Stable product assignment for the day
  $auto_reviews_en   = assign_products_stable($auto_reviews_en,   $product_pool, $daily_seed);
  $auto_reviews_ship = assign_products_stable($auto_reviews_ship, $product_pool, $daily_seed);

  // 3) Deterministic date distribution back to cutoff 20.06.2025
  $auto_reviews_en   = assign_dates_stable($auto_reviews_en,   '20.6.2025', 2, 9, 'j.n.Y');
  $auto_reviews_ship = assign_dates_stable($auto_reviews_ship, '20.6.2025', 2, 9, 'j.n.Y');


  // 4) Deterministic avatars (some real, some placeholder)
$auto_reviews_en   = assign_unique_avatars_first3_then_random_until30($auto_reviews_en,   $avatar_pool, $daily_seed, 'product', 3, 3, 30);

$auto_reviews_ship = assign_unique_avatars_first_n($auto_reviews_ship, $avatar_pool, $daily_seed, 'shipping', 0);

  
  

  // ===== PAGINATION CHUNKS =====
  $initial_count = 18;   // show on load
  $load_count    = 9;    // per "load more"

  $initial_product   = array_slice($auto_reviews_en, 0, $initial_count);
  $remaining_product = array_slice($auto_reviews_en, $initial_count);
  $chunks_product    = array_chunk($remaining_product, $load_count);

  $initial_ship   = array_slice($auto_reviews_ship, 0, $initial_count);
  $remaining_ship = array_slice($auto_reviews_ship, $initial_count);
  $chunks_ship    = array_chunk($remaining_ship, $load_count);

  // Dynamic counts
  $prod_count = count($auto_reviews_en);
  $ship_count = count($auto_reviews_ship);
?>

<?php if ( $is_ortopas_page || $is_bunion_page || $is_fisiorest_page || $is_norikshers_review_page || $is_leakboxers_page || $is_kompmajice_page || $is_jastuk_page || $is_kidsnest_page || $is_kneefix_page ) : ?>
<style>/* belt + bunion + fisiorest + norikshers + leakboxers + kompressionsshirt + jastuk + kidsnest: text-only reviews, no avatar */ #reviews-section .avatar { display: none !important; }</style>
<?php endif; ?>

<section id="reviews-section" class="basic-reviews-section" style="margin-bottom:40px!important;padding-bottom:40px!important;">
  <div class="container basic-reviews-section-container" style="width:100%;max-width:1440px;padding-top:20px!important;margin:0 auto;padding-left: 10px; padding-right: 10px;">

    <!-- Tabs -->
    <div class="reviews-tabs" style="display:flex;gap:18px;border-bottom:1px solid #cbc8c8;margin-bottom:18px;">
      <button type="button" class="reviews-tab is-active" data-tab="product"
        style="appearance:none;background:#00000008;border:1px solid #cbc8c8;border-bottom:0;padding:8px 14px;border-radius:0;font-weight:700;">
        <?php echo esc_html__('Produktbewertungen', 'your-textdomain'); ?> (692)
      </button>
      <button type="button" class="reviews-tab" data-tab="shipping"
        style="appearance:none;background:transparent;border:1px solid transparent;border-bottom:0;padding:8px 14px;border-radius:0;font-weight:700;">
        <?php echo esc_html__('Versandbewertungen', 'your-textdomain'); ?> (389)
      </button>
    </div>

    <!-- PRODUCT GRID (default visible) -->
    <div class="reviews-grid" id="reviews-grid-product">
      <?php if (!empty($initial_product)) : foreach ($initial_product as $review) :
        $name  = $review['name'] ?? 'Anonymní';
        $text  = $review['text'] ?? '';
        $title = !empty($review['product_title']) ? $review['product_title'] : $rv_fallback_title;
        $url   = !empty($review['product_url'])   ? $review['product_url']   : '#';
        $stars = '★★★★★';
        $date_display = $review['assigned_date'] ?? '';
        $avatar_url   = !empty($review['avatar_url']) ? $review['avatar_url'] : '';
      ?>
        <article class="review-card">
          <div class="card-top">
            <h3 class="product-title"><a href="<?php echo esc_url($url); ?>">
              <?php echo esc_html($title); ?>
            </a></h3>
            <div class="date">
              <?php echo esc_html($date_display); ?>
            </div>
          </div>
          <div class="stars"><?php echo $stars; ?></div>
          <div class="identity">
            <?php if ($avatar_url) : ?>
              <div class="avatar"><img src="<?php echo esc_url($avatar_url); ?>" alt="" loading="lazy" /></div>
            <?php else : ?>
              <div class="avatar">👤</div>
            <?php endif; ?>
            <div class="name"><?php echo esc_html($name); ?></div>
            <span class="verified"><?php _e('Bestaetigt','your-textdomain'); ?></span>
          </div>
          <div class="content"><?php echo esc_html($text); ?></div>
        </article>
      <?php endforeach; endif; ?>
    </div>

    <!-- SHIPPING GRID (hidden initially) -->
    <div class="reviews-grid" id="reviews-grid-shipping" style="display:none;">
      <?php if (!empty($initial_ship)) : foreach ($initial_ship as $review) :
        $name  = $review['name'] ?? 'Anonymní';
        $text  = $review['text'] ?? '';
        $title = !empty($review['product_title']) ? $review['product_title'] : $rv_fallback_title;
        $url   = !empty($review['product_url'])   ? $review['product_url']   : '#';
        $stars = '★★★★★';
        $date_display = $review['assigned_date'] ?? '';
        $avatar_url   = !empty($review['avatar_url']) ? $review['avatar_url'] : '';
      ?>
        <article class="review-card">
          <div class="card-top">
            <h3 class="product-title">
              <a href="<?php echo esc_url($url); ?>">
                <?php echo esc_html($title); ?>
              </a>
            </h3>
            <div class="date">
              <?php echo esc_html($date_display); ?>
            </div>
          </div>
          <div class="stars"><?php echo $stars; ?></div>
          <div class="identity">
            <?php if ($avatar_url) : ?>
              <div class="avatar"><img src="<?php echo esc_url($avatar_url); ?>" alt="" loading="lazy" /></div>
            <?php else : ?>
              <div class="avatar">👤</div>
            <?php endif; ?>
            <div class="name"><?php echo esc_html($name); ?></div>
            <span class="verified"><?php _e('Bestaetigt','your-textdomain'); ?></span>
          </div>
          <?php if (!empty($review['headline'])) : ?>
            <div class="headline"><?php echo esc_html($review['headline']); ?></div>
          <?php endif; ?>
          <div class="content"><?php echo esc_html($text); ?></div>
        </article>
      <?php endforeach; endif; ?>
    </div>

  </div>

  <!-- Controls: one CTA row, reused per tab -->
  <div class="container basic-reviews-section-container" style="width:100%;max-width:1100px;margin-top:30px!important;margin:0 auto;">
    <div class="cta-button" style="background:transparent;padding:0;justify-content:left;">
      <a class="cta-button2 button button--xl"
         style="margin:0 auto;text-align:left;background:black;font-family:'Roboto',sans-serif;color:#fff;text-transform:none;font-size:15px;padding:10px 25px;"
         href="#"><?php echo get_field("singlepp_content_standard_reviews_seemore_button","options"); ?></a>
    </div>
    <div id="reviews-loading" style="display:none;text-align:center;padding:15px;">
      <div class="loader"></div>
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function(){
    // Data from PHP (already include product_title/product_url/assigned_date/avatar_url)
    const chunksProduct = <?php echo json_encode($chunks_product); ?>;
    const chunksShip    = <?php echo json_encode($chunks_ship); ?>;

    let nextProduct = 0;
    let nextShip    = 0;

    const tabs    = document.querySelectorAll('.reviews-tab');
    const gridP   = document.getElementById('reviews-grid-product');
    const gridS   = document.getElementById('reviews-grid-shipping');
    const seeMore = document.querySelector('.cta-button2');
    const loader  = document.getElementById('reviews-loading');

    let activeTab = 'product';

    function setTab(tab){
      activeTab = tab;
      tabs.forEach(t=>{
        if(t.dataset.tab === tab){ t.classList.add('is-active'); t.style.background='#00000008'; t.style.borderColor='#e6e6e6'; }
        else{ t.classList.remove('is-active'); t.style.background='transparent'; t.style.borderColor='transparent'; }
      });
      if(tab === 'product'){ gridP.style.display='grid'; gridS.style.display='none'; }
      else{ gridP.style.display='none'; gridS.style.display='grid'; }

      const moreAvail = tab === 'product'
        ? (nextProduct < (chunksProduct?.length || 0))
        : (nextShip < (chunksShip?.length || 0));
      if (seeMore) seeMore.style.display = moreAvail ? 'inline-block' : 'none';
    }

    setTab('product');
    tabs.forEach(btn => btn.addEventListener('click', ()=> setTab(btn.dataset.tab)));

    // Escape helper
    const esc = (str) => String(str ?? '').replace(/[&<>"']/g, s => ({
      '&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#039;'
    }[s]));

    function avatarHtml(avatarUrl){
      if(avatarUrl){
        return `<div class="avatar"><img src="${esc(avatarUrl)}" alt="" loading="lazy" /></div>`;
      }
      return `<div class="avatar">👤</div>`;
    }

    // Append a chunk of cards into a grid
    function appendChunk(grid, chunk){
      chunk.forEach(function(review){
        const article = document.createElement('article');
        article.className = 'review-card is-new';

        const url       = review.product_url   || '#';
        const title     = review.product_title || '<?php echo esc_js($rv_fallback_title); ?>';
        const name      = review.name          || 'Anonym';
        const text      = review.text          || '';
        const headline  = review.headline      || '';
        const date      = review.assigned_date || '';
        const avatarUrl = review.avatar_url    || '';

        article.innerHTML = `
          <div class="card-top">
            <h3 class="product-title"><a href="${esc(url)}">${esc(title)}</a></h3>
            <div class="date">${esc(date)}</div>
          </div>
          <div class="stars">★★★★★</div>
          <div class="identity">
            ${avatarHtml(avatarUrl)}
            <div class="name">${esc(name)}</div>
            <span class="verified"><?php _e('Bestaetigt','your-textdomain'); ?></span>
          </div>
          ${headline ? `<div class="headline">${esc(headline)}</div>` : ''}
          <div class="content">${esc(text)}</div>
        `;
        grid.appendChild(article);
      });
    }

    seeMore && seeMore.addEventListener('click', function(e){
      e.preventDefault();
      seeMore.style.display='none';
      loader.style.display='block';

      setTimeout(function(){
        if(activeTab === 'product' && nextProduct < (chunksProduct?.length || 0)){
          appendChunk(gridP, chunksProduct[nextProduct]);
          nextProduct++;
        }else if(activeTab === 'shipping' && nextShip < (chunksShip?.length || 0)){
          appendChunk(gridS, chunksShip[nextShip]);
          nextShip++;
        }
        loader.style.display='none';
        const moreAvail = activeTab === 'product'
          ? (nextProduct < (chunksProduct?.length || 0))
          : (nextShip < (chunksShip?.length || 0));
        if(moreAvail) seeMore.style.display='inline-block';
      }, 400);
    });
  });
</script>

<!-- new review styling -->
<style>
/* ===== Reviews: Full corrected CSS ===== */

/* Section + container */
#reviews-section{
  font-family: "Roboto", system-ui, -apple-system, Segoe UI, Arial, sans-serif;
  background:#f9f9f9;
}
.basic-reviews-section-container{
  max-width:1440px;
  margin:0 auto;
  padding:0 0px;
}

/* Tabs */
.reviews-tabs{ display:flex; gap:18px; border-bottom:1px solid #eee; margin-bottom:18px; }
.reviews-tab{
  appearance:none; background:transparent; border:1px solid transparent; border-bottom:0;
  padding:8px 14px; font-weight:700; cursor:pointer;
}
.reviews-tab.is-active{ background:#00000008; border-color:#e6e6e6; }

/* Grid */
.reviews-grid{
  display:grid;
  grid-template-columns:repeat(3, 1fr);
  gap:10px;
  width:100%;
}
@media (max-width:1100px){
  .reviews-grid{ grid-template-columns:repeat(2, 1fr); }
}
@media (max-width:640px){
  .reviews-grid{ grid-template-columns:1fr; }
}

/* Card */
.review-card{
  width:100%;
  height:100%;
  background:#fff;
  border:1px solid #efefef;
  border-radius:4px;
  box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.1);
  padding:18px 20px;
  display:flex;
  flex-direction:column;
}

/* Card top */
.review-card .card-top{
  display:flex; align-items:flex-start; justify-content:space-between; gap:12px;
  margin:-2px 0 6px;
}
.review-card .product-title{
  margin:0; font-weight:800; font-size:16px; line-height:1.25;
}
.review-card .product-title a{
  color:#0e0e0e; text-decoration:underline; text-underline-offset:2px;
}
.review-card .date{
  color:#8c8c8c; font-size:13px; white-space:nowrap; margin-top:2px;
}

/* Stars */
.review-card .stars{
  letter-spacing:3px; font-size:18px; color:#0f0f0f; margin:2px 0 10px;
}

/* Identity */
.review-card .identity{
    
  display:flex;
  align-items:flex-start;   /* ⬅️ top-align items */
  gap:12px;
  margin:2px 0 12px;
  
  
}
.review-card .avatar{
  width:32px; height:32px;
  border:1px solid #dfdfdf;
  border-radius:0px;
  display:flex; align-items:center; justify-content:center;
  font-size:18px; color:#000; background:#fff;
  overflow:hidden;
}
.review-card .avatar img{
  width:100%;
  height:100%;
  object-fit:cover;
  display:block;
}
.review-card .name{ font-weight:700; color:#111; font-size:15px; }
.review-card .verified{
  display:inline-block; background:#0f0f0f; color:#fff;
  font-size:12px; font-weight:700; line-height:1;
  padding:5px 8px 4px; border-radius:3px; margin-left:6px;
}

/* Headline + body */
.review-card .headline{ font-weight:800; font-size:16px; color:#111; margin:6px 0 6px; }
.review-card .content{ color:#2b2b2b; font-size:15px; line-height:1.7; }

/* Reveal for appended cards */
.review-card.is-new{ animation:rv-fade .28s ease-out both; }
@keyframes rv-fade{ from{opacity:0; transform:translateY(6px);} to{opacity:1; transform:none;} }

/* Loader */
#reviews-loading .loader{
  width:28px; height:28px; border:3px solid #e6e6e6; border-top-color:#111; border-radius:50%;
  margin:0 auto; animation:rv-spin .75s linear infinite;
}
@keyframes rv-spin{ to{ transform:rotate(360deg);} }



/* Default avatar (placeholder) stays 32x32 */
.review-card .avatar{
  width:32px;
  height:32px;
  border:1px solid #dfdfdf;
  border-radius:0px;
  display:flex;
  align-items:center;
  justify-content:center;
  font-size:18px;
  color:#000;
  background:#fff;
  overflow:hidden;
}

/* If avatar contains a real image -> make it 80x80 */
.review-card .avatar:has(img){
  width:250px;
  height:250px;
  font-size:0; /* hide any accidental text spacing */
  align-items:stretch;
  justify-content:stretch;
}

.review-card .avatar img{
  width:100%;
  height:100%;
  object-fit:cover;
  display:block;
}

/* ONLY reviews with real image */
.review-card .identity:has(.avatar img){
  display:block;              /* ⬅️ image gets own row */
}

/* Real image wrapper */
.review-card .avatar:has(img){
  width:100%;
  height:auto;
  border:none;
  margin-bottom:10px;
}

/* Real image itself */
.review-card .avatar img{
  width:100%;
  max-width:320px;
  height:auto;
  display:block;
  object-fit:cover;
  border:1px solid #dfdfdf;
  border-radius:4px;
}

/* Name + verified BELOW image */
.review-card .identity:has(.avatar img) .name,
.review-card .identity:has(.avatar img) .verified{
  display:inline-block;
  vertical-align:middle;
}


@media (max-width: 991px){

  /* ONLY reviews with real image */
  .review-card .avatar:has(img){
    max-width:100%;
  }

  .review-card .avatar img{
    width:100%;        /* ✅ full width on mobile */
    max-width:100%;
    height:auto;
  }

}


</style>






<?php
$faq_list = get_field('faq_list', 'option');
$faq_list2 = get_field('faq_list_2', 'option');
$faq_list3 = get_field('faq_list_3', 'option');

$is_ortopas_faq   = ( function_exists('noriks_is_type') && noriks_is_type('ortopas') );
$is_bunion_faq    = ( function_exists('noriks_is_type') && noriks_is_type('bunion') );
$is_fisiorest_faq = ( function_exists('noriks_is_type') && noriks_is_type('fisiorest') );
$is_norikshers_faq = ( function_exists('noriks_is_type') && noriks_is_type('norikshers') );
$is_leakboxers_faq = ( function_exists('noriks_is_type') && noriks_is_type('leakboxers') );
$is_kompmajice_faq = ( function_exists('noriks_is_type') && noriks_is_type('kompresijske-majice') );
$is_jastuk_faq     = ( function_exists('noriks_is_type') && noriks_is_type('ortopedski-jastuk') );
$is_kidsnest_faq   = ( function_exists('noriks_is_type') && noriks_is_type('kidsnest') );
$is_kneefix_faq   = ( function_exists('noriks_is_type') && noriks_is_type('kneefix') );

// NORIKS FIT (Kompressions-/Shaping-Shirt) — FAQ zum Produkt, ersetzt NUR den
// Produktinfo-Container. (Übersetzung der Referenz, NORIKS FIT.)
$kompmajice_faq = array(
  array(
    'questioon' => 'Für wen ist NORIKS FIT gedacht?',
    'answer'    => 'NORIKS FIT wurde für Männer entwickelt, die schlanker aussehen, das Vertrauen in den eigenen Körper zurückgewinnen, die Haltung korrigieren, sich tagsüber energiegeladener fühlen und unter jeder Kleidung schlanker wirken möchten.'
  ),
  array(
    'questioon' => 'Wie wirkt das NORIKS FIT Shirt eigentlich?',
    'answer'    => 'NORIKS FIT verwendet ein fortschrittliches ionisches Kompressionsgewebe, das die natürliche Reaktion des Körpers aktiviert. Die mikrogewebten Fasern fördern eine gesunde Durchblutung und helfen Ihnen, von morgens bis abends eine aufrechte Haltung zu bewahren. Bei regelmäßigem Tragen sorgt es für einen sichtbar geformteren Oberkörper, eine bessere Ausrichtung der Wirbelsäule und mehr Selbstvertrauen.'
  ),
  array(
    'questioon' => 'Wie schnell werde ich Ergebnisse bemerken?',
    'answer'    => 'Jeder Körper ist anders, aber die meisten Kunden berichten von einer sichtbaren Veränderung innerhalb der ersten 30 Tage. Für die beste Wirkung tragen Sie NORIKS FIT täglich und kombinieren Sie es mit einer ausgewogenen Ernährung und regelmäßiger Bewegung.'
  ),
  array(
    'questioon' => 'Sieht man es unter dem Hemd?',
    'answer'    => 'Nein. NORIKS FIT ist dünn, diskret und unter jedem Hemd unsichtbar, während es gleichzeitig Bauch und Brust formt und die Haltung unterstützt.'
  ),
  array(
    'questioon' => 'Wie wird es gewaschen und woraus besteht es?',
    'answer'    => 'Es besteht aus 80 % Nylon und 20 % Elasthan. Waschen Sie es kalt im Schonwaschgang, um die Kompression zu erhalten und die Lebensdauer des Gewebes zu verlängern.'
  ),
);

// NORIKS LEAK BOXERS (Inkontinenz-Boxershorts) — FAQ zum Produkt, ersetzt NUR den
// Produktinfo-Container. (Übersetzung der Referenz, NORIKS.)
$leakboxers_faq = array(
  array(
    'questioon' => 'Warum haben sich mehr als 123.000 Männer für NORIKS entschieden?',
    'answer'    => 'NORIKS sind die saugfähigsten waschbaren Boxershorts bei männlichem Urinverlust: Sie halten bis zu 300 ml, sind Oeko-Tex®-zertifiziert und frei von Schadstoffen, waschbar und wiederverwendbar (die umweltfreundliche Alternative zu Einweg-Einlagen) und für ganztägigen Komfort und Selbstvertrauen konzipiert. Ganze 87 % der Kunden bestellen nach dem ersten Kauf erneut.'
  ),
  array(
    'questioon' => 'Wie viel nehmen sie auf?',
    'answer'    => 'Bis zu 300 ml — fast 3-mal mehr als die meisten Produkte auf dem Markt. Dank des 7-schichtigen PureDry™-Kerns wird die Flüssigkeit sofort aufgesaugt und tief im Inneren eingeschlossen, die Haut bleibt trocken und die Außenschicht ist wasserabweisend.'
  ),
  array(
    'questioon' => 'Sieht man sie unter der Kleidung?',
    'answer'    => 'Nein. NORIKS Boxershorts sind dünn, diskret und flexibel — sie sehen aus und fühlen sich an wie normale Unterwäsche, ohne aufzutragen und ohne „Windel-Gefühl“.'
  ),
  array(
    'questioon' => 'Wie werden sie gewaschen?',
    'answer'    => 'Waschen Sie sie bei 30–40 °C, ohne Weichspüler und Bleichmittel, und trocknen Sie sie an der Luft. Sie behalten ihre Saugkraft über Hunderte von Wäschen.'
  ),
  array(
    'questioon' => 'Ist die Lieferung diskret?',
    'answer'    => 'Ja. Alle Bestellungen versenden wir in neutraler, diskreter Verpackung ohne sichtbare Hinweise auf den Inhalt, um Ihre Privatsphäre zu schützen.'
  ),
  array(
    'questioon' => 'Woraus sind sie gefertigt?',
    'answer'    => 'Eine Außenschicht aus Bambusfaser mit Elasthan, ein 7-schichtiger saugfähiger Kern aus technischen Mikrofasern sowie eine wasserabweisende, atmungsaktive Membran.'
  ),
);

// ErgoSit orthopädisches Sitzkissen — FAQ zum Produkt (NORIKS).
$jastuk_faq = array(
  array( 'questioon' => 'Wie lindert NORIKS ErgoSit die Schmerzen beim Sitzen?', 'answer' => 'ErgoSit hat eine Steißbein-Aussparung, die den direkten Druck vom Steißbein und Ischiasnerv nimmt, während die anatomische Form aus Memory-Schaum mit hoher Dichte das Gewicht gleichmäßig auf Hüften und Oberschenkel verteilt. So werden empfindliche Druckpunkte entlastet und eine gesunde, aufrechte Haltung unterstützt.' ),
  array( 'questioon' => 'Wo überall kann ich das Kissen verwenden?', 'answer' => 'Überall, wo Sie sitzen — im Auto, auf dem Bürostuhl, dem Esszimmerstuhl, im Rollstuhl oder zu Hause. Die stabile, rutschfeste Basis hält es an Ort und Stelle, sodass der Komfort Sie den ganzen Tag begleitet.' ),
  array( 'questioon' => 'Wird der Schaum mit der Zeit platt?', 'answer' => 'Nein. ErgoSit verwendet Memory-Schaum mit hoher Dichte, der auch nach langem täglichem Gebrauch Form und Festigkeit behält — im Gegensatz zu billigen Kissen, die schnell zusammensacken.' ),
  array( 'questioon' => 'Kann der Bezug gewaschen werden?', 'answer' => 'Ja. Der Bezug lässt sich abnehmen und in der Maschine waschen, sodass das Kissen frisch und sauber bleibt. Das Gewebe ist atmungsaktiv, hypoallergen und OEKO-TEX®-zertifiziert.' ),
  array( 'questioon' => 'Passt es auf meinen Stuhl oder Sitz?', 'answer' => 'ErgoSit hat eine universelle Form und passt auf die meisten Autositze, Büro- und Küchenstühle sowie Rollstühle. Es gibt keine Größen — ein Modell passt für alle.' ),
  array( 'questioon' => 'Wie schnell spüre ich einen Unterschied?', 'answer' => 'Die meisten Nutzer spüren schon ab dem ersten Tag weniger Druck auf dem Steißbein und ein bequemeres Sitzen. Für eine bessere Haltung und weniger Rückenschmerzen baut sich die Wirkung durch die regelmäßige Anwendung weiter auf.' ),
  array( 'questioon' => 'Gibt es eine Geld-zurück-Garantie?', 'answer' => 'Ja, jedes NORIKS ErgoSit kommt mit einer 60-Tage-Komfortgarantie. Wenn Sie nicht weniger Schmerzen und mehr Komfort spüren, kontaktieren Sie uns und wir finden eine Lösung.' ),
);

// KidsNest Kinderkissen — FAQ zum Produkt (NORIKS, abgeschwächte Aussagen).
$kneefix_faq = array(
  array(
    'questioon' => 'Ist KneeFix für den täglichen Gebrauch geeignet?',
    'answer'    => 'Ja. NORIKS KneeFix wurde genau für alltägliche Bewegungen entwickelt — Gehen, Arbeiten, Treppensteigen oder längeres Stehen.',
  ),
  array(
    'questioon' => 'Kann ich die Kompression selbst einstellen?',
    'answer'    => 'Ja. Mit dem integrierten Präzisions-Drehrad stellen Sie die Kompression selbst ein — so viel Halt, wie für Sie angenehm ist.',
  ),
  array(
    'questioon' => 'Rutscht die Bandage beim Gehen?',
    'answer'    => 'KneeFix hat einen rutschfesten Silikonrand, der hilft, Verrutschen und Einrollen der Bandage beim Tragen zu reduzieren.',
  ),
  array(
    'questioon' => 'Kann ich die Bandage unter der Kleidung tragen?',
    'answer'    => 'Ja. Der flexible, dünne Schnitt ermöglicht bequemes Tragen unter den meisten Alltagskleidungsstücken.',
  ),
  array(
    'questioon' => 'Passt die Bandage für beide Knie?',
    'answer'    => 'Bei der Bestellung wählen Sie die Seite (links oder rechts), damit die Bandage genau zu dem Knie passt, das Sie unterstützen möchten.',
  ),
  array(
    'questioon' => 'Kann ich die Bandage längere Zeit tragen?',
    'answer'    => 'Die Bandage ist für den täglichen Gebrauch entwickelt. Viele Kunden tragen sie bei der Arbeit, beim Spaziergang und im Alltag.',
  ),
  array(
    'questioon' => 'Wie wähle ich die Größe?',
    'answer'    => 'Die Größen richten sich nach dem Körpergewicht: M (50–75 kg), L (76–90 kg), XL (91–110 kg) und 2XL (110 kg+).',
  ),
);

$kidsnest_faq = array(
  array( 'questioon' => 'Wie schnell werde ich sehen, dass die Mundatmung aufhört?', 'answer' => 'Die meisten Eltern bemerken innerhalb der ersten 5–7 Nächte ein leiseres Atmen und weniger Aufwachen mit offenem Mund. Bis zur 14. Nacht beruhigt sich bei den meisten Kindern das Schnarchen und die Lippen bleiben geschlossen. Den vollen Unterschied — eine sichtbar bessere Position und ruhigeren Schlaf — beschreiben Eltern meist um den 21. bis 30. Tag. Verwenden Sie es jede Nacht.' ),
  array( 'questioon' => 'Für welches Alter ist KidsNest gedacht?', 'answer' => 'KidsNest gibt es in drei Größen: 1–3, 3–9 und 9–14 Jahre. Das wichtigste Zeitfenster liegt zwischen dem 3. und 9. Lebensjahr, wenn sich Gaumen und Kiefer am intensivsten entwickeln — aber jedes Alter hat seine Größe und seinen Nutzen.' ),
  array( 'questioon' => 'Ist es sicher? Was ist drin?', 'answer' => 'KidsNest besteht aus hypoallergenem, OEKO-TEX®-zertifiziertem Memory-Schaum — ohne Formaldehyd, Schwermetalle und BPA. Es ist milbenresistent und atmungsaktiv, der Bezug lässt sich abnehmen und in der Maschine waschen.' ),
  array( 'questioon' => 'Wird mein Kind es wirklich benutzen?', 'answer' => 'Ja. Die ergonomische Form fühlt sich wie Unterstützung an, nicht wie etwas Fremdes — die meisten Kinder gewöhnen sich in 1–2 Nächten daran. Eltern berichten oft, dass die Kinder nach der ersten Woche nicht mehr ohne schlafen wollen. Die 3-Zonen-Struktur nimmt den Kopf ganz natürlich auf — es gibt keine "richtige Art", keinen Kampf vor dem Schlafengehen.' ),
  array( 'questioon' => 'Wirkt es, wenn mein Kind bereits durch den Mund atmet?', 'answer' => 'Ja — genau für solche Kinder wurde es entwickelt. Die 3-Zonen-Struktur hilft zu verhindern, dass der Kopf nach hinten kippt, wodurch sich der Mund im Schlaf öffnet. Bei den meisten Kindern schließen sich die Lippen innerhalb von 7–14 Nächten auf natürliche Weise und die Nasenatmung kehrt zurück.' ),
  array( 'questioon' => 'Was, wenn es meinem Kind nicht hilft?', 'answer' => 'Lassen Sie Ihr Kind 30 Nächte auf dem KidsNest schlafen. Wenn Sie keinen Unterschied sehen — weniger Mundatmung, leisere Nächte, ruhigeren Schlaf — melden Sie sich bei uns und wir erstatten das Geld zurück. Ohne Fragen und ohne Kleingedrucktes.' ),
);

// Hallux-valgus-Korrektor — FAQ zum Produkt (Übersetzung, NORIKS).
$bunion_faq = array(
  array( 'questioon' => 'Wie schnell werde ich mich besser fühlen?', 'answer' => 'Etwa 30 Minuten — so lange dauert es, bis die Beschwerden gelindert werden. Bei regelmäßiger Anwendung über zwei Wochen werden Sie bei alltäglichen Aktivitäten wie Gehen, Stehen oder Schlafen eine deutliche Linderung spüren.' ),
  array( 'questioon' => 'Wie schnell bemerke ich einen Unterschied am Ballenzeh?', 'answer' => 'Je nach Schweregrad des Hallux valgus bemerken die meisten Kunden eine sichtbare Verbesserung nach 4–8 Wochen. Leichter Hallux: 4 Wochen. Mittlerer Hallux: 4 Wochen. Schwerer Hallux: 8 Wochen.' ),
  array( 'questioon' => 'Kann man ihn in Schuhen tragen? Kann ich damit gehen?', 'answer' => 'Nein, in den Schuh passt er nicht. Ja, Sie können damit gehen. Er ist jedoch für Ruhephasen gedacht — wenn Sie auf dem Sofa liegen, fernsehen, lesen oder schlafen.' ),
  array( 'questioon' => 'Was, wenn es sich unangenehm anfühlt?', 'answer' => 'Das ist völlig normal! Der NORIKS Korrektor ist fest genug konzipiert, um das Zehengelenk auszurichten, die Entzündung zu stoppen und die Beschwerden zu verringern. Vielleicht brauchen Sie 1–2 Anwendungen, um sich daran zu gewöhnen, danach werden Sie sich viel besser fühlen!' ),
  array( 'questioon' => 'Wie lange sollte ich ihn anwenden?', 'answer' => 'Wir empfehlen, mit 30 Minuten pro Tag zu beginnen und die Anwendung schrittweise auf 1 bis 3 Stunden zu steigern. Wenn Sie sich wohlfühlen, können Sie ihn auch während des Schlafs tragen. Tragen Sie ihn beim Entspannen — auf dem Sofa, vor dem Fernseher, beim Lesen oder Schlafen.' ),
  array( 'questioon' => 'Hilft er bei meinem speziellen Zustand?', 'answer' => 'Der NORIKS Korrektor ist ideal für: die Linderung von Beschwerden, die alltägliche Aktivitäten wie Gehen oder Stehen beeinträchtigen; die Linderung von Hallux-Beschwerden beim Ausruhen oder Schlafen; die Behandlung eines Hallux valgus im Frühstadium, der möglicherweise fortschreitet; einen nach einer Operation zurückgekehrten Hallux; die Unterstützung bei schwerem, operationsreifem Hallux; sowie als wirksame nicht-chirurgische Option.' ),
  array( 'questioon' => 'Passt er an meinen Fuß? Gibt es eine linke und rechte Seite?', 'answer' => 'Unabhängig von der Fußgröße — vom kleinsten Kinderfuß bis zum großen Fuß eines Erwachsenen — passt sich der NORIKS Korrektor bequem an. Es gibt keine Seiten! Dank des flexiblen Designs passt er sich gleichermaßen leicht an den linken oder rechten Fuß an.' ),
);

// Orthopädischer Rückengurt — FAQ zum Produkt (Übersetzung, NORIKS).
$ortopas_faq = array(
  array( 'questioon' => 'Wie schnell spüre ich eine Schmerzlinderung?', 'answer' => 'Viele Nutzer spüren unmittelbar nach dem Anlegen des NORIKS-Gurts eine merkliche Linderung von Ischias und Kreuzschmerzen. Die gezielte Kompression bietet sofortige Unterstützung, stabilisiert die Wirbelsäule und verringert den Druck auf die Nerven. Für eine langanhaltende Wirkung empfehlen wir, den Gurt gemäß Anleitung mindestens zwei Wochen konsequent zu tragen. Mit der Zeit können Sie bei richtiger Anwendung und gesunden Gewohnheiten eine dauerhafte Linderung und bessere Beweglichkeit erfahren.' ),
  array( 'questioon' => 'Wie lege ich den Gurt richtig an?', 'answer' => 'Tragen Sie den NORIKS-Gurt um die Hüften, etwas unterhalb der Taille. Er sollte sich über dem Kreuzbeinbereich (unterer Rücken, direkt über dem Gesäß) und unter dem Beckenkamm (oberer Bereich der seitlichen Hüften) befinden. Weitere Informationen finden Sie in der Gebrauchsanleitung.' ),
  array( 'questioon' => 'Schwächt der Gurt meine Muskeln?', 'answer' => 'Nein, der NORIKS-Gurt schwächt die Muskeln nicht wie ein Rückenkorsett. Er hilft lediglich, die ISG-Gelenke zusammenzuhalten, und stellt die normale Bandspannung wieder her. Sie können ihn wochen- oder monatelang tragen, ohne Muskelschwund befürchten zu müssen.' ),
  array( 'questioon' => 'Kann ich den Gurt auch beim Schlafen tragen?', 'answer' => 'Ja, Sie können den Gurt auch nachts tragen. Die Tragedauer ist nicht begrenzt, und längeres Tragen hat keine negativen Auswirkungen.' ),
  array( 'questioon' => 'Wie eng sollte ich ihn anlegen?', 'answer' => 'Der Gurt sollte eng anliegen, aber nicht zu eng, um Beschwerden zu vermeiden. Sie sollten sich problemlos bewegen können, ohne dass der Gurt einschneidet oder verrutscht. Die Spannung lässt sich mit den elastischen Bändern leicht einstellen.' ),
  array( 'questioon' => 'Wem empfehlen Sie ihn?', 'answer' => 'Allen, die mit Kreuzschmerzen, Ischias, Muskelverspannungen, Bandscheibenvorfall, Hüft- oder Beckenschmerzen sowie Problemen mit dem ISG-Gelenk zu kämpfen haben. Unabhängig von Alter, Geschlecht, Größe und Gewicht.' ),
  array( 'questioon' => 'Gibt es eine Geld-zurück-Garantie?', 'answer' => 'Wir bieten eine Zufriedenheitsgarantie! Wenn Sie mit dem NORIKS-Gurt nicht zufrieden sind, kontaktieren Sie uns unter info@noriks.com für eine Rückgabe und Erstattung innerhalb von 30 Tagen. Die Frist beginnt mit dem Erhalt des Gurts.' ),
);

// FisioRest — FAQ zum Produkt (Übersetzung, NORIKS).
$fisiorest_faq = array(
  array( 'questioon' => 'Wie wirkt NORIKS FisioRest?', 'answer' => 'FisioRest kombiniert Traktion, Wärme und Vibrationsmassage mit einem ergonomischen Design aus Memory-Schaum. Diese Technologie dehnt den Nacken im genau richtigen Winkel und entlastet die Halswirbelsäule. Anschließend fördert die beruhigende warme Massage den Zufluss von sauerstoff- und nährstoffreichem Blut in die Muskeln und unterstützt so die Geweberegeneration.' ),
  array( 'questioon' => 'Wodurch ist FisioRest besser als andere Geräte?', 'answer' => 'NORIKS FisioRest ist besonders, weil es <strong>drei Therapien in einem</strong> vereint — Wärme, Massage und sanfte Traktion — die die Muskeln entspannen und den Nacken für eine langanhaltende Linderung neu ausrichten. Zudem ist es <strong>kabellos, sicher zum Schlafen und mit kühlender Seide umhüllt</strong> für einen Komfort, den Sie anderswo nicht finden.' ),
  array( 'questioon' => 'Wie wird FisioRest angewendet?', 'answer' => '1. Laden Sie es mit dem mitgelieferten USB-C-Kabel und Ladegerät etwa 4 bis 6 Stunden. 2. Halten Sie die Massage- oder Wärmetaste 5 Sekunden gedrückt, bis die Leuchte aufleuchtet. 3. Durch erneutes Drücken der Tasten ändern Sie die Massagegeschwindigkeit und die Wärmeeinstellungen. 4. Genießen Sie die entspannende Massage!' ),
  array( 'questioon' => 'Wie lange sollte ich FisioRest anwenden?', 'answer' => 'Wir empfehlen, mit 15 Minuten zu beginnen, damit sich der Nacken daran gewöhnt. Mit der Zeit können Sie zu einer vollen Anwendung übergehen. Zur Orientierung: Ein Zyklus aus sanfter Wärme, Massage und Traktion dauert 30 Minuten, was in der Regel die ideale Zeit ist, damit sich der Nacken entspannt und seine natürliche Krümmung zurückgewinnt.' ),
  array( 'questioon' => 'Ist FisioRest kabellos?', 'answer' => 'Ja! NORIKS FisioRest ist vollständig kabellos und für den täglichen Gebrauch wiederaufladbar.' ),
  array( 'questioon' => 'Wie wird FisioRest gereinigt?', 'answer' => 'Der Stoff ist öl- und staubabweisend, wir empfehlen jedoch, FisioRest nach der Anwendung mit einem Desinfektionstuch abzuwischen, da der Kissenbezug nicht waschbar ist.' ),
  array( 'questioon' => 'Ist es für alle sicher?', 'answer' => 'NORIKS FisioRest ist so konzipiert, dass es für alle geeignet ist, unabhängig von Alter oder Geschlecht. Jede Situation ist jedoch anders. Für detaillierte, auf Ihre Bedürfnisse zugeschnittene Empfehlungen raten wir zu einer Rücksprache mit einem Arzt.' ),
  array( 'questioon' => 'Kann ich es zurückgeben, wenn ich keine Ergebnisse sehe?', 'answer' => 'Selbstverständlich! Wir bieten eine volle Geld-zurück-Garantie innerhalb von 30 Tagen ab Lieferung, falls Sie mit dem Produkt nicht zufrieden sind. Schreiben Sie uns an info@noriks.com und wir antworten innerhalb von 12 Stunden nach Erhalt Ihrer Nachricht!' ),
);

// NORIKS HERS — FAQ zum Produkt (Übersetzung, NORIKS).
$norikshers_faq = array(
  array( 'questioon' => 'Worin unterscheidet es sich von herkömmlichen Faltenpflastern oder Narbencremes?', 'answer' => 'Die meisten Faltenpflaster bestehen aus Papier oder Hydrokolloid, und Narbencremes bleiben oft nur an der Hautoberfläche. NORIKS HERS verwendet Silikon in klinischer Qualität, auf das Dermatologen seit Jahren vertrauen, um die Textur von Narben und die Elastizität der Haut sichtbar zu verbessern — und das nun auch zur Reduzierung von Falten.' ),
  array( 'questioon' => 'Kann ein einziger Streifen wirklich gegen Falten und Narben helfen?', 'answer' => 'Ja, denn Falten und Narben sind beide Zeichen von Kollagenabbau oder schwacher Hautregeneration. Silikon unterstützt die Feuchtigkeitsspeicherung, den Kollagenaufbau und die Glättung der Hauttextur, was beidem zugutekommt.' ),
  array( 'questioon' => 'Wie lange dauert es, bis ich Ergebnisse sehe?', 'answer' => 'Die meisten Anwenderinnen bemerken bereits nach 1–3 Anwendungen eine sichtbare Glättung bei feinen Linien, und das Erscheinungsbild von Narben verbessert sich nach 2–3 Wochen regelmäßiger Anwendung. Tiefere Narben und Falten können länger brauchen, aber die Ergebnisse bauen sich mit der Zeit auf.' ),
  array( 'questioon' => 'Ist es für empfindliche oder zu Unreinheiten neigende Haut sicher?', 'answer' => 'Absolut. NORIKS HERS ist hypoallergen, latexfrei und sanft genug für empfindliche Bereiche wie um die Augen oder den Mund, sogar für heilende Aknenarben. Wenn Ihre Haut sehr reaktiv ist, testen Sie es zuerst immer an einer kleinen Stelle.' ),
  array( 'questioon' => 'Wie lange kann ich es tragen?', 'answer' => 'Für die besten Ergebnisse empfehlen wir, NORIKS HERS 6–8 Stunden über Nacht zu tragen. Sie können es auch tagsüber verwenden — achten Sie nur darauf, dass die Haut darunter sauber sowie öl- und serumfrei ist.' ),
  array( 'questioon' => 'Wie lange hält eine Rolle?', 'answer' => 'Je nachdem, wie oft und wo Sie es verwenden, kann eine Rolle 3–6 Wochen halten. Da es wiederverwendbar ist, ist es deutlich kosteneffizienter als Einwegpflaster oder Cremes.' ),
  array( 'questioon' => 'Bleibt es an Ort und Stelle, während ich schlafe?', 'answer' => 'Ja! NORIKS HERS ist mit einem hautfreundlichen, langlebigen Klebstoff hergestellt, der Ihren Bewegungen folgt. Es ist atmungsaktiv und bleibt an Ort und Stelle, selbst bei Seitenschläferinnen.' ),
  array( 'questioon' => 'An welchen Stellen kann ich es verwenden?', 'answer' => 'Überall! Die meisten Kundinnen verwenden NORIKS HERS an: Stirnfalten, Zornesfalten, Lachfalten, Halsfalten, Aknenarben, Kaiserschnittnarben, Dehnungsstreifen sowie Operations- oder Verletzungsnarben.' ),
  array( 'questioon' => 'Warum ist NORIKS HERS besser als billige Online-Pflaster?', 'answer' => 'Viele online verkaufte Pflaster verwenden minderwertiges, dünnes Material oder schlechten Klebstoff. NORIKS HERS verwendet Premium-Silikon, ist im Labor auf Sicherheit und Haltbarkeit getestet und bleibt die ganze Nacht an Ort und Stelle. Zudem bieten wir einen engagierten Kundenservice und schnelleren Ersatz, falls Sie Hilfe benötigen.' ),
  array( 'questioon' => 'Gibt es eine Geld-zurück-Garantie?', 'answer' => 'Ja, wir bieten eine 30-tägige risikofreie Garantie. Wenn Sie nicht zufrieden sind, kontaktieren Sie uns einfach und wir finden eine Lösung.' ),
);

// Swap ONLY the product-info FAQ container ("...Produkt...") for the orto
// products; delivery/returns containers stay untouched.
$faq_pick = function( $title, $list ) use ( $is_ortopas_faq, $ortopas_faq, $is_bunion_faq, $bunion_faq, $is_fisiorest_faq, $fisiorest_faq, $is_norikshers_faq, $norikshers_faq, $is_leakboxers_faq, $leakboxers_faq, $is_kompmajice_faq, $kompmajice_faq, $is_jastuk_faq, $jastuk_faq, $is_kidsnest_faq, $kidsnest_faq, $is_kneefix_faq, $kneefix_faq ) {
  $is_info = ( stripos( (string) $title, 'Produkt' ) !== false );
  if ( $is_kneefix_faq && $is_info )    { return $kneefix_faq; }
  if ( $is_kidsnest_faq && $is_info )   { return $kidsnest_faq; }
  if ( $is_jastuk_faq && $is_info )     { return $jastuk_faq; }
  if ( $is_leakboxers_faq && $is_info ) { return $leakboxers_faq; }
  if ( $is_kompmajice_faq && $is_info ) { return $kompmajice_faq; }
  if ( $is_norikshers_faq && $is_info ) { return $norikshers_faq; }
  if ( $is_fisiorest_faq && $is_info ) { return $fisiorest_faq; }
  if ( $is_bunion_faq && $is_info )    { return $bunion_faq; }
  if ( $is_ortopas_faq && $is_info )   { return $ortopas_faq; }
  return $list;
};
?>





<section class="faq-section">
  <h2><?php echo get_field("singlepp_content_part_faq_h1","options"); ?></h2>
  

   <!-- first faq container --> 
      <div class="faq-container">
         <h4 style="text-align:left; font-size: 1rem;
            font-weight: 700;
            color: #222223;
            margin-bottom: 10px; "><?php echo get_field('faq_title_1', 'option'); ?></h4>
            <?php
              $faq_list = $faq_pick( get_field('faq_title_1', 'option'), $faq_list );
              if( $faq_list && is_array($faq_list) ):
                      foreach( $faq_list as $faq_item ):
              ?>
                    <div class="faq-item">
                      <button class="faq-question">
                         <?php echo $faq_item["questioon"]; ?>
                        <span class="arrow">&#9660;</span>
                      </button>
                      <div class="faq-answer">
                        <p>  <?php echo $faq_item["answer"]; ?></p>
                      </div>
                    </div>
          <?php endforeach;
            endif;
            ?>
      </div>
    <!-- first faq container --> 
  
     <!-- 2 faq container --> 
      <div class="faq-container">
          <br/>
         <h4 style="text-align:left; font-size: 1rem;
            font-weight: 700;
            color: #001e36;
            margin-bottom: 10px; "><?php echo get_field('faq_title_2', 'option'); ?></h4>
            <?php
              $faq_list2 = $faq_pick( get_field('faq_title_2', 'option'), $faq_list2 );
              if( $faq_list2 && is_array($faq_list2) ):
                      foreach( $faq_list2 as $faq_item ):
              ?>
                    <div class="faq-item">
                      <button class="faq-question">
                         <?php echo $faq_item["questioon"]; ?>
                        <span class="arrow">&#9660;</span>
                      </button>
                      <div class="faq-answer">
                        <p>  <?php echo $faq_item["answer"]; ?></p>
                      </div>
                    </div>
          <?php endforeach;
            endif;
            ?>
      </div>
        <!-- 2 faq container --> 
  
     <!-- 3 faq container --> 
      <div class="faq-container">
          <br/>
         <h4 style="text-align:left; font-size: 1rem;
            font-weight: 700;
            color: #001e36;
            margin-bottom: 10px; "><?php echo get_field('faq_title_3', 'option'); ?></h4>
            <?php
              $faq_list3 = $faq_pick( get_field('faq_title_3', 'option'), $faq_list3 );
              if( $faq_list3 && is_array($faq_list3) ):
                      foreach( $faq_list3 as $faq_item ):
              ?>
                    <div class="faq-item">
                      <button class="faq-question">
                         <?php echo $faq_item["questioon"]; ?>
                        <span class="arrow">&#9660;</span>
                      </button>
                      <div class="faq-answer">
                        <p>  <?php echo $faq_item["answer"]; ?></p>
                      </div>
                    </div>
          <?php endforeach;
            endif;
            ?>
      </div>
  <!-- 3 faq container --> 
  
</section>

<script>
  document.querySelectorAll('.faq-question').forEach(button => {
    button.addEventListener('click', () => {
      const faqAnswer = button.nextElementSibling;
      const arrow = button.querySelector('.arrow');

      if (faqAnswer.style.maxHeight) {
        faqAnswer.style.maxHeight = null;
        arrow.style.transform = 'rotate(0deg)';
      } else {
        document.querySelectorAll('.faq-answer').forEach(item => {
          item.style.maxHeight = null;
        });
        document.querySelectorAll('.arrow').forEach(item => {
          item.style.transform = 'rotate(0deg)';
        });
        faqAnswer.style.maxHeight = faqAnswer.scrollHeight + 'px';
        arrow.style.transform = 'rotate(180deg)';
      }
    });
  });
</script>
		
