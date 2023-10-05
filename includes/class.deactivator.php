<?php

class WPSII_Smart_Zoho_Deactivator
{
    public function deactivate() {
		global $wpdb;
		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		
		$smart_insightly_report_table_name 			= $wpdb->prefix . 'smart_insightly_report';
		$smart_insightly_field_mapping_table_name 	= $wpdb->prefix . 'smart_insightly_field_mapping';

		delete_option('wpsii_smart_insightly_settings');
		delete_option('wpsii_smart_insightly');
		delete_option('wpsii_smart_insightly_modules_fields');
	}
}
?>