<?php
/**
 *Plugin Name: Form plugin
 * Description: plugin to create and submit form
 **/
function form_plugin()
{
    $content = '';
    $content .= '<form method="post" action="'.plugin_dir_url(__FILE__).'process/">';
    $content .= '<div class="mb-3">';

    $content .= '<label for="inputLastname" class="form-label">Nom</label>';
    $content .= '<input type="text" class="form-control" id="inputLastname" name ="lastname">';
    $content .= '</div>';

    $content .= '<div class="mb-3">';
    $content .= '<label for="inputName" class="form-label">Prénom</label>';
    $content .= '<input type="text" class="form-control" id="inputName" name ="name">';
    $content .= '</div>';
    $content .= '<div class="mb-3">';
    $content .= '<label for="InputEmail" class="form-label">Email</label>';
    $content .= '<input type="email" class="form-control" id="InputEmail" name ="email">';
    $content .= '</div>';
    $content .= '<div class="mb-3">';
    $content .= '<label for="inputNb" class="form-label">Numero de securité social</label>';
    $content .= '<input type="text" class="form-control" id="inputNb" name ="nb">';
    $content .= '</div>';
    $content .= '<div class="mb-3 text-center">';
    $content .= '<input type="submit" class="btn btn-info" name="submit_btn" value="Soumettre">';
    $content .= '</div>';
    $content .= '</form>';

    return $content;
}
add_shortcode('form', 'form_plugin' );

