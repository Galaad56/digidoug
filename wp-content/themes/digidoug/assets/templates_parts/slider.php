<section class="home-section" id="section-real">
    <h2>Mes réalisations</h2>
    
    <div class="slider">
        <?php
        $projet = new WP_Query(array(
            'post_type' => 'projet',
            'posts_per_page' => 1,
            'orderby' => 'rand',
        ));
        if ($projet->have_posts()) : 
            while ($projet->have_posts()) : $projet->the_post();
                the_post_thumbnail('full');
                $currentPostID = get_the_ID(); // Récupérez l'ID du post courant
                echo "le numero du post est " . $currentPostID;
            endwhile;
            wp_reset_postdata();
        endif;
        ?>

        <div class="arrow_container">
            <img class="arrow" id="prev" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/arrow_left.png'; ?>" alt="Précédent">
            <img class="arrow" id="next" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/arrow_right.png'; ?>" alt="Suivant">
        </div>
    </div>
         
</section>