<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Tous vax anti covid</title>
    <meta name="description"  content="bloc 1">
    <meta http-equiv="refresh" content="43200"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">


<?php wp_head() ?>
</head>

<body>
<!-- header -->
<div class="row">
    <div class="col border-bottom border-secondary">
        <img src="http://wp.localhost/wp-content/uploads/2022/09/logo-gouv.png" alt="logo gouvernement" height="80" >

    </div>
</div>

<!-- menu -->
<div class="row">
    <div class="col">
        <nav class="navbar navbar-expand">
            <div class="container-fluid text-center">
                <div class="row collapse navbar-collapse" id="navbarSupportedContent">
                    <?php wp_nav_menu([
                        'theme_location'=>'header',
                        'container' => false,
                        'menu_class' => 'row navbar-nav mb-2 mb-lg-0'
                    ]) ?>

                </div>
            </div>
        </nav>
    </div>
</div>