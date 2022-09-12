<?php
get_header()
?>
    <!-- can add search on worpress? -->

<?php get_search_form() ?>
<?php $max_article_nb =get_field ('max_article_nb');?>



    <!-- articles -->

<?php $the_query = new WP_Query( array( 'post_type' => 'post','posts_per_page' => -1 ) ); ?>
<?php if ( $the_query->have_posts() ) : ?>
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-sm-2  row-cols-md-3 g-4 my-3 mx-3">
            <?php $article_nb=0; ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <?php if (get_the_ID() != 41 && get_the_ID() != 39 && $article_nb<$max_article_nb) : ?>

                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="card-title">POINT DE SITUATION</h1>
                                <p class="card-text"><?php the_content('suite')?></p>
                            </div>
                            <img src=<?php the_post_thumbnail_url(); ?> class="card-img-bottom" alt="image article">
                        </div>
                    </div>
                    <?php $article_nb+=1; ?>

                <?php endif; ?>

            <?php endwhile; ?>
        </div>
    </div>

<?php endif; ?>

    <a href="<?php echo esc_url( get_page_link( 140 ) ); ?>">Tous les articles</a>


<?php
get_footer()
?>