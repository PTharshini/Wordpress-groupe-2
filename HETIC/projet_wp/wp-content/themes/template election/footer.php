<footer>
        <?php // SYNTAXE : wp_nav_menu( array $args = array() )
$args=array(
    'theme_location' => 'footer', // nom du slug
    'menu' => 'footer_fr', // nom à donner cette occurence du menu
    'menu_class' => 'menu_footer', // class à attribuer au menu
    'menu_id' => 'menu_id' // id à attribuer au menu
    // voir les autres arguments possibles sur le codex
);
wp_nav_menu($args);
?>
    </footer>

<?php wp_footer(); ?>
</body>
</html>