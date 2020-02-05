<?php
/*
Template Name: Gabarit Event.
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
    <div class="thumbnails">
        

        <?php
$args = array( 'post_type' => 'evenements' );

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
                            <p class="day"><?php the_field('date'); ?></p>
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
    </section>
</main>

<?php get_footer(); ?>