<?php
    /*
    Template Name: formulaire
    */

    get_header()
?>
<section class="container-form">

    <div class="form-box1">
        <h2>informations de contact</h2>
        
        <div class="info-box">
        <i class="fa-regular fa-envelope"></i>
        <P>digidoug@gmail.com</P>
        </div>

        <div class="info-box">
            <i class="fa-solid fa-phone"></i>
            <P>07 81 79 55 01</P>
        </div>

        <div class="info-box">
        <i class="fa-solid fa-location-dot"></i>
        <P>Lorient</P>
        </div>

    </div>

    <div class="form-box2">
        <h2> Contacter DigidouG </h2>
    <?php
		// On insère le formulaire de demandes de renseignements
		echo do_shortcode('[contact-form-7 id="36adab6" title="Contact form 1"]');
		?>

    </div>
  


</section>





<?php get_footer(); ?>