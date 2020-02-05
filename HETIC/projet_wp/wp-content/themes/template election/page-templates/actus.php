<?php
/*
Template Name: Gabarit Actu.
*/
?><?php get_header(); ?>

<main>
    <section>
        <div class="section-title">
            <?php 
            if(have_posts()){
                while (have_posts()){
                    the_post();
            ?>
            <h1><?php the_title(); ?></h1>
            <div class="bar-title"></div>
            <?php the_content(); ?>
        </div>
        <?php
            }
        }
        ?>

    <div class="actu-thumbnail-image">

    <?php
$args = array( 'post_type' => 'actualites' );

$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {

    while ( $the_query->have_posts() ) {
        $the_query->the_post();

        $count++;
        $even_odd_class = ( ($count % 2 ) == 0 ) ? "even" : "odd";
        ?>
        <div class="<?php echo $even_odd_class; ?>">
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
        </main> 

<?php get_footer(); ?>
