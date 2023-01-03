<?php
/**
 * Plugin Name: Event tickets system
 * Plugin URI: https://github.com/Stefano-Mazziotta/riverplatecircus-ecommerce
 * Description: Event management with tickets
 * Author: Stefano Mazziotta
 * Author URI: https://github.com/Stefano-Mazziotta
 * Text Domain: event-ticket
 * Requires PHP: 7.3
 * Version: 0.0.1
*/

function create_tables() {
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();

    $tableNameBuyers = $wpdb->prefix . 'eveticsys_buyers';

    $sqlBuyers = "CREATE TABLE $tableNameBuyers (
        buyer_id INT NOT NULL AUTO_INCREMENT,
        email TEXT NOT NULL,
        `name` TEXT NOT NULL,
        lastname TEXT NOT NULL,
        PRIMARY KEY (buyer_id)
    ) $charset_collate";

    $tableNameTickets = $wpdb->prefix . 'eveticsys_tickets';
    $sqlTickets = "CREATE TABLE `$tableNameTickets` (
        ticket_id INT NOT NULL AUTO_INCREMENT,
        buyer_id INT NOT NULL,
        `type` CHAR NOT NULL,
        price FLOAT NOT NULL,
        stock INT NOT NULL,
        SKU TEXT NOT NULL,
        PRIMARY KEY(ticket_id),
        FOREIGN KEY (buyer_id) REFERENCES $tableNameBuyers(buyer_id)
    ) $charset_collate;";

    $tableNameEvents = $wpdb->prefix . 'eveticsys_events';
    $sqlEvents = "CREATE TABLE `$tableNameEvents` (
        event_id INT NOT NULL AUTO_INCREMENT,
        ticket_id INT NOT NULL,
        title TEXT NOT NULL,
        `description` TEXT NOT NULL,        
        PRIMARY KEY(event_id),
        FOREIGN KEY (ticket_id) REFERENCES $tableNameTickets(ticket_id)
    ) $charset_collate;";

    $existBuyersTable = $wpdb->get_var("SHOW TABLES LIKE '$tableNameBuyers'") == $tableNameBuyers;
    $existTicketsTable = $wpdb->get_var("SHOW TABLES LIKE '$tableNameTickets'") == $tableNameTickets;
    $existEventsTable = $wpdb->get_var("SHOW TABLES LIKE '$tableNameEvents'") == $tableNameEvents;
    
    if($existTicketsTable && $existEventsTable && $existBuyersTable){
        return;
    }

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    
    if(!$existBuyersTable){
        dbDelta($sqlBuyers);
    }

    if(!$existTicketsTable){
        dbDelta($sqlTickets);
    }

    if(!$existEventsTable){
        dbDelta($sqlEvents);
    }
}
register_activation_hook(__FILE__, 'create_tables');

function deactivate(){
    flush_rewrite_rules();
}


register_deactivation_hook(__FILE__, 'deactivate');

add_action('admin_menu', 'createAdminMenu');
function createAdminMenu(){
    add_menu_page(
        'Eventos',
        'Eventos',
        'manage_options',
        'event-admin-menu',
        'event_admin_content',
        'dashicons-calendar-alt',
        "2"
    );

    add_menu_page(
        'Tickets',
        'Tickets',
        'manage_options',
        'ticket-admin-menu',
        'event_admin_content',
        'dashicons-tickets-alt',
        "3"
    );

    // add_submenu_page(
    //     'event-admin-menu',
    //     'Ajustes',
    //     'Ajustes',
    //     'manage_options',
    //     'event-admin-ajustes',
    //     'submenu'
    // );
    // add_submenu_page(
    //     'event-admin-menu',
    //     'Ajustes',
    //     'Ajustes',
    //     'manage_options',
    //     'event-admin-ajustes',
    //     'submenu'
    // );
}

function event_admin_content(){
    echo "<h1> hello world </h1>";
}
function submenu(){
    echo "<h1> hello world </h1>";
}

// function tutsplus_register_post_type() {
//     // movies 
//     $labels = array( 
//         'name' => __( 'Movies' , 'tutsplus' ),
//         'singular_name' => __( 'Movie' , 'tutsplus' ),
//         'add_new' => __( 'New Movie' , 'tutsplus' ),
//         'add_new_item' => __( 'Add New Movie' , 'tutsplus' ),
//         'edit_item' => __( 'Edit Movie' , 'tutsplus' ),
//         'new_item' => __( 'New Movie' , 'tutsplus' ),
//         'view_item' => __( 'View Movie' , 'tutsplus' ),
//         'search_items' => __( 'Search Movies' , 'tutsplus' ),
//         'not_found' =>  __( 'No Movies Found' , 'tutsplus' ),
//         'not_found_in_trash' => __( 'No Movies found in Trash' , 'tutsplus' ),
//     );
//     $args = array(
//         'labels' => $labels,
//         'has_archive' => true,
//         'public' => true,
//         'hierarchical' => false,
//         'supports' => array(
//             'title', 
//             'editor', 
//             'excerpt', 
//             'custom-fields', 
//             'thumbnail',
//             'page-attributes'
//         ),
//         'rewrite'   => array( 'slug' => 'movies' ),
//         'show_in_rest' => true
//     );
// }