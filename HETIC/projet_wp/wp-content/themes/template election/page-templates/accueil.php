<?php 
/*
Template Name: Accueil
*/?><?php get_header(); ?>

<main>

    <section class="banner">
        <div class="cover-black"></div>
            <?php the_post_thumbnail('full'); ?>
        <div class="background-text-home">
            <p class="candidate"><?php the_title(); ?></p>

                <div class="text-image">
                    <p class="punchlines"><?php the_field('slogan'); ?></p>
                    <button class="cta"><a href="<?php echo get_permalink(20); ?>">Découvrez nos premières propositions</a></button>
                </div>
        </div>  

    </section>

    <section class="program">
        <div class="section-title">
            <?php 
            if(have_posts()){
                while (have_posts()){
                    the_post();
            ?>
            <h2><?php echo get_the_title( $ID= 20); ?></h2>
            <div class="bar-title"></div>
        </div>
        <?php
            }
        }
        ?>
    </section>

    <section class="program-text">
        <div class="left">
            <?php the_field('description_programme'); ?>
        </div>

        <div class="right">
            <?php the_content(); ?>
        </div>
    </section>

    <p class="ready"><?php the_field('baseline_button');?></p>

    <div class="program-button">
        <button><a href="<?php the_permalink(20); ?>">Découvrez notre projet</a></button>
    </div>

    </section>
    

    <section>
        <div class="section-title">
            <?php 
            if(have_posts()){
                while (have_posts()){
                    the_post();
            ?>
            <h2><?php echo get_the_title( $ID= 27); ?></h2>
            <div class="bar-title"></div>
        </div>
        <?php
            }
        }
        ?>

<div class="thumbnails">
<?php
$args = array( 'post_type' => 'evenements', 
               'posts_per_page' => 3 );

$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
    
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        ?>    
        <div class="article">
            <?php
                if(has_post_thumbnail()){
                    the_post_thumbnail( 'single_thumbnail');
                }
            ?>
            <article>
                <div class="image-thumbnails">
                    <div class="info-content">
                        <div class="date">
                            <p class="day"><?php the_time('d F Y'); ?></p>
                        </div>
                        <div class="title">
                            <h2 class="month"><?php the_title(); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="description">
                    <?php the_excerpt(); ?>
                    <button><a href="<?php the_permalink(); ?>">Lire +</a></button>
                </div>
            </article> 
        </div>
    <?php 

    }
    /* Restore original Post Data */
    wp_reset_postdata();
} else {
    // no posts found
}
?>
</div>
    </section>

    <div class="see-more-event">
        <button class="more-event"><a href="<?php echo get_permalink(27); ?>">Voir tous les événements ></a></button>
    </div>

    <section>
        <div class="section-title">
            <?php 
            if(have_posts()){
                while (have_posts()){
                    the_post();
            ?>
            <h2><?php echo get_the_title( $ID= 7); ?></h2>
            <div class="bar-title"></div>
        </div>
        <?php
            }
        }
        ?>
    <div class="actu-thumbnail-image">

<?php
$args = array( 'post_type' => 'actualites', 
               'posts_per_page' => 3 );

$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {

while ( $the_query->have_posts() ) {
    $the_query->the_post();
    ?>
        <div class="actu-article">
            <div class="actu-thumbnail">
            <?php
                if(has_post_thumbnail()){
                    the_post_thumbnail( 'single_thumbnail');
                }
            ?>
            </div>
            <div class="actu-text">
                <div class="actu-title">
                    <h2><?php the_title(); ?></h2>
                </div>

            
            <p class="actu-info"><?php the_time('d F Y'); ?></p>

            
            <div class="actu-content">
                <?php the_excerpt(); ?>
                <button><a href="<?php the_permalink(); ?>">Lire +</a></button>
            </div>

            </div>
        </div>

<?php 

}
/* Restore original Post Data */
wp_reset_postdata();
} else {
// no posts found
}
?>

</section>
<div class="see-more-actu">
    <button class="more-actu"><a href="<?php echo get_permalink(27); ?>">Voir toutes les actualités ></a></button>
</div>



<?php get_footer(); ?>