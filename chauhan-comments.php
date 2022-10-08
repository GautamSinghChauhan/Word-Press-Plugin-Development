<?php
/**
 * Plugin Name:       Chauhan Comments 
 * Plugin URI:        https://netoyed.com/
 * Description:       It is for Only test
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Gautam
 * Author URI:        netoyed.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        netoyed.com
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */
if ( ! defined( 'ABSPATH' ) ) {
    header("Location: /Youtube");
	die( "can not access");
}


/**
 * Activate the plugin.
 */
function pluginprefix_activate() { 
    global $wpdb, $table_prefix;
$wp_emp = $table_prefix. 'emp';

$q = "CREATE TABLE IF NOT EXISTS `$wp_emp` ( `ID` INT NOT NULL AUTO_INCREMENT,
`name` VARCHAR (50) NOT NULL, `email` VARCHAR(100) NOT NULL, `status` BOOLEAN NOT
NULL, PRIMARY KEY (`ID`)) ENGINE=MyISAM;";
$wpdb->query($q);
// $q = "INSERT INTO `$wp_emp` (`name`, `email`, `status`) VALUES ('Tanuj','tanujpatra@gmail.com', 1);";

$data = array(

'name' => 'Akshay',
'email' => 'akshay@gmail.com',
'status' => 1
);

$wpdb->insert($wp_emp, $data);
	
}
register_activation_hook( __FILE__, 'pluginprefix_activate' );

/**
 * Deactivation hook.
 */
function pluginprefix_deactivate() {

        global $wpdb, $table_prefix;
        $wp_emp = $table_prefix.'emp';

        $q = "TRUNCATE `$wp_emp`";
        $wpdb->query($q);

}
register_deactivation_hook( __FILE__, 'pluginprefix_deactivate' );

// // function that runs when shortcode is called
// function wpb_demo_shortcode() { 
  
//     // Things that you want to do.
//     $message = 'Hello world!'; 
      
//     // Output needs to be return
//     return $message;
//     }
//     // register shortcode
//     add_shortcode('greeting', 'wpb_demo_shortcode');

