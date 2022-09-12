<?php
/* Template Name: Modele pour detail article */
?>
<?php get_header()?>
<div class="container-fluid">

    <div class="row justify-content-center my-3">
            <div class="col col-lg-6">
                <div class="card">
                    <img src=<?php the_post_thumbnail_url(); ?> class="card-img-top" alt="Vaccin">
                    <div class="card-body">
                        <p class="card-text"><?php the_content('suite')?></p>
                    </div>
                </div>
            </div>
    </div>

   <?php if ( get_next_post() ) :?>
    <div class="row justify-content-center my-3">
        <?php $next_post =get_next_post();
        $next_post_id = $next_post->ID;
        $next_url = get_the_post_thumbnail_url($next_post_id);
        $next_content = get_the_content('suite',false,$next_post_id); ?>
        <div class="col col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title"> POINT SITUATION</h1>
                    <p class="card-text"><?= $next_content?></p>
                </div>
                <img src=<?=$next_url ?> class="card-img-bottom" alt="image article">

            </div>
        </div>
    </div>
    <?php endif; ?>


</div>
<?php
get_footer() ?>