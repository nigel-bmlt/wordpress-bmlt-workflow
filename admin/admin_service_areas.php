<?php

if (!defined('ABSPATH')) exit; // die if being called directly

if (!class_exists('BMLTIntegration')) {
	require_once(BMAW_PLUGIN_DIR . 'admin/bmlt_integration.php');
}

wp_nonce_field('wp_rest', '_wprestnonce');

$change['admin_action']='get_service_body_info';
$bmlt_integration = new BMLTIntegration;

$response = $bmlt_integration->postConfiguredRootServerRequestSemantic('local_server/server_admin/json.php', $change);
if( is_wp_error( $response ) ) {
    wp_die("BMLT Configuration Error - Unable to retrieve meeting formats");
}

$arr = json_decode($response['body'],true);

var_dump($arr);

?>