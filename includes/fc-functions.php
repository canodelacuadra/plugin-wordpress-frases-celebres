<?php
function frases_celebres()
{
    include plugin_dir_path(__FILE__) . 'frases.php';
    //var_dump($frascel);
    // saber el número de elementos que tiene
    $numarray = count($frascel) - 1;

    // generar un número aleatorio entre el 0 y el numero total del array -1
    $aleatorio = rand(0, $numarray);
    //imprimir el array por pantalla
    return $frascel[$aleatorio];
}

// Hook the 'admin_menu' action hook, run the function named 'mfp_Add_My_Admin_Link()'
add_action('admin_menu', 'fc_agregar_link_admin');

/*
 * Añade un nuevo menú en el panel de administración
 */

// Agrega un menu administracion
function fc_agregar_link_admin()
{
    // My code goes here
    add_menu_page(
        'Página de Frases celebres', // Title of the page
        'Frases Célebres', // Text to show on the menu link
        'manage_options', // Capability requirement to see the link
        plugin_dir_path(__FILE__) . '/pagina_admin_frases.php' // The 'slug' - file to display when clicking the link
    );
}
