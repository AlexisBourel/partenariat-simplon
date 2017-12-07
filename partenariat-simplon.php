<?php
/*
Description: Un plugin ajoutant du texte sous WordPress
Version: 0.1
Author: Alexis BOUREL
*/
function SimplonShortcode() {
	return '<p>La publication de cet article est possible grâce à mon super partenaire <a href="https://simplon.co">simplon.co</a> - une entreprise de
	l’économie sociale et solidaire et un réseau de « fabriques » (écoles) qui propose
	des formations GRATUITES pour devenir développeur web.</p>';
	}
add_shortcode('simplon', 'SimplonShortcode');
?>