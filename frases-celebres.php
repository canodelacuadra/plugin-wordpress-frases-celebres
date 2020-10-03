<?php
/*
Plugin Name: Frases Celebres
Description: Una frase célebre de un autor célebre cuando en cada carga de página
Author: José Antonio Cano
*/
// Incluimos mfp-functions.php, usamos require_once para detener el script si no se encuentra mfp-functions.php
require_once plugin_dir_path(__FILE__) . 'includes/fc-functions.php';

// nos cercioriamos que el widget de texto soporte shortcodes
add_filter('widget_text', 'do_shortcode');

// Creamos un shortcode para mostrar el plugin
add_shortcode('fc-frases', 'frases_celebres');

// función para cargarlo con un hook  de footer que la tenemos desactivada por defecto

// 

