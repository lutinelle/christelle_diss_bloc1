<?php
/* Template Name: Modèle page Merci */
?>
<?php get_header()?>

    <div class="container-fluid">

    <div class="row justify-content-center my-3">
        <div class="col col-lg-6">
            <div class="card">
                <div class="card-body text-center">
                    <h1 class="card-title"> <?php the_title() ?></h1>
                    <p class="card-text"><?php the_content() ?></p>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer()
?>