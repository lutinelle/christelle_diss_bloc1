<?php
$path = preg_replace('/wp-content.*$/','',__DIR__);
$path.="wp-load.php";

require_once ($path);


if (isset($_POST['submit_btn']))
{
    $data=array(
        'lastname' => $_POST['lastname'],
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'nb' => $_POST['nb'],
    );
    $table_name = 'inscription';
    $wpdb->insert($table_name, $data );
    $redirect = get_site_url()."/merci";
    
    wp_redirect($redirect);
    

}


