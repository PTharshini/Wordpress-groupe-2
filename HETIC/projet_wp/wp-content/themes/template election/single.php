<?php get_header(); ?>

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
        </div>
        <?php
            }
        }
        ?>
        <div class="info-publication">
        <?php the_field('auteur_article'); ?>
        <?php the_field('date'); ?>
        </div>
        <div class="content-page">
            <?php the_content(); ?>
        </div>

    </section>
</main>


<?php get_footer(); ?>