<?php
/* Template Name: Modèle page liste des articles */
?>
<?php
get_header()
?>

    <!-- can add search on worpress? -->

<?php get_search_form() ?>




    <!-- articles -->

<?php $the_query = new WP_Query( array( 'post_type' => 'post','posts_per_page' => -1 ) ); ?>
<?php if ( $the_query->have_posts() ) : ?>
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-sm-2  row-cols-md-3 g-4 my-3 mx-3">

            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>



                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="card-title">POINT DE SITUATION</h1>
                                <p class="card-text"><?php the_content('suite')?></p>
                            </div>
                            <img src=<?php the_post_thumbnail_url(); ?> class="card-img-bottom" alt="image article">
                        </div>
                    </div>




            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>


<?php
get_footer()
?>