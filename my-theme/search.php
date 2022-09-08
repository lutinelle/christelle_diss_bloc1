<?php get_header(); ?>
<?php get_sidebar('search'); ?>
<?php
$s=get_search_query();
$args = array(
    's' =>$s
);
// The Query
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
    _e("<h2 style='font-weight:bold;color:#000'>Resultat de recherche pour: ".get_query_var('s')."</h2>");
    ?>
    <div class="row row-cols-1 row-cols-sm-2  row-cols-md-3 g-4 my-3 mx-3">
    <?php
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        ?>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title"><?php the_title()?></h1>
                    <p class="card-text"><?php the_content('suite')?></p>
                </div>
                <img src=<?php the_post_thumbnail_url(); ?> class="card-img-bottom" alt="image article">
            </div>
        </div>
        <?php
    }
    ?>
    </div>
    <?php

}else{
    ?>
    <h2 style='font-weight:bold;color:#000'>Aucun résultat</h2>
    <div class="alert alert-info">
        <p>Désolé, aucune réponse ne correspond a votre critère de recherche. Merci d'essayer a nouveau avec un mot clef différent.</p>
    </div>
<?php } ?>


<?php get_footer();