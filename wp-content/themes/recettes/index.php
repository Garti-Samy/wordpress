<?php get_header() ?>
<?php
// 1 définir les arguments/filtres de la requête
$args = array(
    'post_type' => 'recette'
);
?>
<div class="container" >
<?php
// 2  exécuter la requête et lancer la boucle
$the_query = new WP_Query($args);
if ($the_query->have_posts()) {
    while ($the_query->have_posts()) {
        $the_query->the_post();
?>


        <article >
        <h2><?php the_title(); ?> </h2>
        <?php the_post_thumbnail(); ?>
        <a href="<?php the_permalink(); ?>">Lien vers l'article</a>
        </article>
        

<?php
    } // end while
} // end if
?>
<?
wp_reset_query(); ?>
</div>
<?php get_footer() ?>