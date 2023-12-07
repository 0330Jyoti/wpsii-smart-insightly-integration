<?php

<<<<<<< HEAD
class WPSII_Smart_Insightly_Deactivator
=======
class WPSII_Smart_Zoho_Deactivator
>>>>>>> 6d6baf01fc7200e3f48317f546733600ecdcc724
{
    public static function deactivate() {
		global $wpdb;
		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		
		$smart_insightly_report_table_name 			= $wpdb->prefix . 'smart_insightly_report';
		$smart_insightly_field_mapping_table_name 	= $wpdb->prefix . 'smart_insightly_field_mapping';

		delete_option('wpsii_smart_insightly_settings');
<<<<<<< HEAD
		delete_option('wpszi_smart_zoho');
		delete_option('wpszi_smart_insightly_modules_fields');
=======
		delete_option('wpsii_smart_insightly');
		delete_option('wpsii_smart_insightly_modules_fields');
>>>>>>> 6d6baf01fc7200e3f48317f546733600ecdcc724
	}
}
?>