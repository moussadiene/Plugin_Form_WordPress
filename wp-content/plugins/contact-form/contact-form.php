<?php

/**
 * @package Contact_Form
 * @version 1.0.0
 */
/*
Plugin Name: Contact Form
Plugin URI: http://github.com/moussadiene
Description: dans le cadre de la mise en place un plugin formulaire sur WordPress
Author: Moussa DIENE
Version: 1.0.0
Author URI: http://linkedin.com/moussadiene
*/

add_action('wp_footer','contactForm');

add_filter('the_content','formulaire');
function contactForm(){
    echo ('<p> Formulaire de contact</p>');
}

function formulaire(){
    echo ('<h1>tester</h1>');  
}
