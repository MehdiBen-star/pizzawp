<?php 
 /*
 Plugin Name: Mehdi Simplon
 Description: Un simple plugin permettant d'ajouter l'info partenaire.
 Version: 1.0
 Author: Bogota & Casa
 License: GPL2
 License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

 add_shortcode('simplon', 'simplon_shortcode');

 if (!function_exists('simplon_shortcode')) {
 	function simplon_shortcode() {
 		$text = '<hr/>';
 		$text .= '<p>';
 		$text .= 'Destinée aux chercheurs d\'emplois en situation de reconversion, la formation Référent(e) Numérique Entreprise prépare en 8 mois aux métiers du numérique et est couronnée par l\'obtention de 3 certifications.';
        $text .= '<hr/>';
        $text .= 'Le métier de référent(e) numérique consiste à acoompagner les structures dans la mise en place de solutions numériques adaptées à leurs besoins.';
        $text .= '<hr/>';
        $text .= 'La formation est menée conjointement par :';
 		$text .= '</p>';
 		$text .= '<hr/>';
        $text .= '<ul>';
        $text .= '<li>';
        $text .= '<a href="https://www.insa-rouen.fr/">L\'INSA Rouen Normandie</a>';
        $text .= '</li>';
        $text .= '<li>';
        $text .= '<a href="https://rouen.cesi.fr/">Le CESI</a>';
        $text .= '</li>';
        $text .= '<li>';
        $text .= '<a href="https://simplon.co/">Simplon.co</a>';
        $text .= '</li>';
        $text .= '</hr>';

 		return $text;
 	}
 }
