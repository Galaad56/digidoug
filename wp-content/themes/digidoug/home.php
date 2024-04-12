<?php get_header(); ?>

<section class="home-section" id="section-bandeau">

    <img id="section-bandeau__img"src="<?php echo get_stylesheet_directory_uri() . '/assets/images/image-bandeau.avif';?>" alt='logo'>
    <div id="section-bandeau__txt">
       <h1>Développeur Web</h1> 
       <h2>Spécialisé Wordpress</h2>
       <p>Création de sites internet sur mesure</p>
       <p>Sites vitrines ou évenementiels</p>
       <p>  je m'adapte à vos besoins</p>
       <p>Morbihan - Finistère Sud</p>
    </div>
</section >


<section class="home-section" id="section-comp">

    <H2>Mes compétences</H2>  

    <div class="container-comp">
        <div class=box-comp id="section-box1">

        <img class="box-comp__img" id="wordpress-logo"src="<?php echo get_stylesheet_directory_uri() . '/assets/images/wordpress.webp';?>" alt='logo wordpress'>
        <img class="box-comp__img" id="html5-logo"src="<?php echo get_stylesheet_directory_uri() . '/assets/images/html.png';?>" alt='logo html'>
        <img class="box-comp__img" id="css3-logo"src="<?php echo get_stylesheet_directory_uri() . '/assets/images/css.png';?>" alt='logo css'>
        <img class="box-comp__img" id="js-logo"src="<?php echo get_stylesheet_directory_uri() . '/assets/images/javascript.png';?>" alt='logo JS'>
        <img class="box-comp__img" id="php-logo"src="<?php echo get_stylesheet_directory_uri() . '/assets/images/php.png';?>" alt='logo PHP'>
 

    <!--     <div>logo</div>
        <div>logo</div>
        <div>logo</div>
        <div>logo</div>
        <div>logo</div> -->
        </div>
        <div class="box-comp" id="section-box2">
            <div class="line-comp">
                <div class="item-comp">
                    <h3>Développement</h3>
                    <P> </P>

                </div>
                <div class="item-comp">
                    <h3>SEO</h3>
                </div>
            </div>
            <div class="line-comp">
                <div class="item-comp">
                    <h3>Langages</h3>
                    <p>HTML</p>
                    <p>CSS</p>
                    <p>PHP</p>
                    <p>JavaScript</p>
        
                </div>
                <div class="item-comp">
                    <h3>Outils</h3>
                    <p>Wordpress</p>
                    <p>Elementor</p>
                    <p>Gutenberg</p>
                    <p>Sass</p>
                    <p>Git & GitHub</p>
                </div>
            </div>

        </div>
    </div>

</section>


<?php get_template_part('assets/templates_parts/slider');  ?>

<?php get_footer(); ?>