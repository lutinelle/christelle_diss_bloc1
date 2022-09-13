<?php

?>
<?php
get_header()
?>

    <!-- search -->

<?php get_search_form() ?>

    <!-- articles -->

<?php if ( have_posts() ) : ?>
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-sm-2  row-cols-md-3 g-4 my-3 mx-3">

            <?php while ( have_posts() ) : the_post(); ?>

                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title"><?php the_title() ?></h1>
                            <p class="card-text"><?php the_content('suite')?></p>
                        </div>
                        <img src=<?php the_post_thumbnail_url(); ?> class="card-img-bottom" alt="image article">
                    </div>
                </div>

            <?php endwhile; ?>
        </div>
        <div class="row my-3 mx-3">
            <div class="col">
                <?php the_posts_pagination(); ?>
            </div>
        </div>
    </div>

<?php endif; ?>

<?php
get_footer()
?>