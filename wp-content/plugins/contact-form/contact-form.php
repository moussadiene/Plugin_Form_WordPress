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



add_shortcode('formulaire_contact', 'contactForm');

function contactForm()
{
    $content = '';

    $content .= '<div class="jumbotron jumbotron-sm">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 col-lg-12">
                                    <h1 class="h1">
                                        Formulaire de contact <small>Vous pouvez nous contacter ici</small></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="card">
                            <div class="col-md-12 pt-4 pb-4">
                                <div class="col-md-12">
                                    <div class="well well-sm">
                                        <form>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">
                                                        Nom </label>
                                                    <input type="text" class="form-control" id="nom" placeholder="Entrer votre nom" required="required" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">
                                                        Prenom </label>
                                                    <input type="text" class="form-control" id="prenom" placeholder="Entrer votre prenom" required="required" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">
                                                        Addresse email</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                                        </span>
                                                        <input type="email" class="form-control" id="email" placeholder="Entrer votre email" required="required" /></div>
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <div class="form-group mb-10">
                                                    <label for="name">
                                                        Object </label>
                                                    <input type="text" class="form-control" id="object" placeholder="Entrer l\'object " required="required" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">
                                                        Message</label>
                                                    <textarea name="message" id="message" class="form-control" rows="4,5" cols="25" required="required"
                                                        placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary float-right" id="btnContactUs">
                                                    Send Message</button>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
    ';
    $content .= '<div>';

    return $content;
}


// add_action('wp_footer', 'testhello');

// add_filter('the_content', 'formulaire');

// function testhello()
// {
//     echo ('<p> Hello plugin form</p>');
// }

// function formulaire()
// {
//     echo ('<h1>tester</h1>');
// }
