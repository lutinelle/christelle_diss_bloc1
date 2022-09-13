<?php
/* Template Name: Modèle page sauver des vies */
?>
<?php get_header()?>

    <div class="container-fluid">

    <div class="row justify-content-center my-3">
        <div class="col col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title"> Comment sauver une vie</h1>
                    <p class="card-text">Le vaccin protège vos proches et l’ensemble de votre entourage car il réduit le nombre de cas asymptomatiques et donc la transmission du virus
                        Le vaccin réduit le nombre de personnes nécessitant d’une hospitalisation et participe ainsi au désengorgement des hôpitaux

                        Se vacciner contre le covid c'est donc se protéger mais aussi protéger les autres, c'est sauver des vies.</p>

                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center my-3 ">
        <div class="col col-lg-6">
            <div class="card pb-3">
                <div class="card-body">
                    <h1 class="card-title"> Je m'inscrit</h1>
                    <p class="card-text">Grace a ce formulaire vous déclarez votre souhait de vous faire vacciner</p>

                        <?php the_content()?>
                    <div class="text-center">
                        <p class="to-notice">OU</p>
                        <p class="to-notice">je m'identifie avec France Connect</p>
                        <img class="m-3" src="<?= wp_get_attachment_image_url(155) ?>" alt="logo gouvernement" height="80" >
                        <h3>Qu’est-ce que le service FranceConnect ?</h3>
                        <p>France Connect est un service sécurisé d’accès à plus de 900 démarches en ligne. Pour vous
                            identifier avec FranceConnect, vous aurez besoin de vos codes d’accès à votre compte ameli,
                            ou à votre espace MSA, ou à votre espace impôts…</p>

                    </div>
                </div>
            </div>
        </div>
    </div>




<?php
get_footer()
?>