<?php
/* Template Name: Modele pour detail article */
?>
<?php get_header()?>

    <div class="row g-4 mb-3 mx-3 justify-content-center">

        <div class="col-2">
            <div class="card">

                <div class="card-body">

                    <p class="card-text">test sommaire</p>
                </div>

            </div>
        </div>
            <div class="col col-lg-6">
                <div class="card">
                    <img src=<?php the_post_thumbnail_url(); ?> class="card-img-top" alt="Vaccin">
                    <div class="card-body">

                        <p class="card-text"><?php the_content('suite')?></p>
                    </div>

                </div>
            </div>

    </div>


<?php
get_footer()
?>