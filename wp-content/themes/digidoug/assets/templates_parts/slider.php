<section class="home-section" id="section-real">
    <h2>REALISATIONS</h2>
    
    <div class="slider">
    <?php
                    $args = array(
                        'post_type' => 'projet',
                        'posts_per_page' => 4,
                        'orderby' => 'date', // Tri par date de publication
                        'order' => 'ASC' // Ordre descendant (du plus récent au plus ancien)

                    );
                    $projet_query = new WP_Query($args);
                    

        // Boucle WordPress pour récupérer les données du custom post type
        if ($projet_query->have_posts()) :
            while ($projet_query->have_posts()) : $projet_query->the_post(); 

        // Récupérer les métadonnées
                $theme_projet = get_post_meta(get_the_ID(), 'theme_projet', true);
                $description_projet = get_post_meta(get_the_ID(), 'description_projet', true);
                $lien_projet=get_post_meta(get_the_ID(), 'lien_git', true);

    ?>
            <div class="projet-content">
                <?php $nom_projet = get_the_title(); ?>
                <?php the_post_thumbnail('full', [
                    'class' => 'img-projet',
                    'data-nom-projet' => esc_attr($nom_projet),
                    'data-theme-projet' => esc_attr($theme_projet),
                    'data-description-projet' => esc_attr($description_projet),
                    'data-lien-projet' => esc_attr($lien_projet)
                ]); ?>
            </div>
                        
            <?php endwhile;
        endif;?>

    </div>
         
</section>
<!-- Fenêtre modale -->
<div class="modal" id="projet-modal">
    <div class="modal-content"></div>
</div>