<?php
class WPSII_Smart_Insightly_Field_Mappings {

	var $customer_fields;
	
	public function __construct(){
    	$this->wpsii_delete_mapping_row_from_table();
    }

    public function wpsii_process_mappings_form($POST = array()){
       	global $wpdb;
       	if(isset($_REQUEST['add_mapping'])){

       		extract($_POST);

       		$record_exists = $wpdb->get_row( 
       			$wpdb->prepare(
       				"SELECT * FROM ".$wpdb->prefix ."smart_insightly_field_mapping  WHERE wp_module = %s AND wp_field = %s  AND insightly_module = %s AND insightly_field = %s" ,
       				$wp_module, $wp_field, $insightly_module, $insightly_field
       				)
       			
       		);

			if ( null !== $record_exists ) {
				
			  $reccord_id 		= $record_exists->id;
			  $is_predefined 	= $record_exists->is_predefined;
			  

			  	$wpdb->update(
					$wpdb->prefix . 'smart_insightly_field_mapping', 
					array( 
					    'wp_module' 	=> sanitize_text_field($wp_module),
					    'wp_field' 		=> sanitize_text_field($wp_field),
					    'insightly_module' 	=> sanitize_text_field($insightly_module),
					    'insightly_field'	=> sanitize_text_field($insightly_field), 
					    'status' 		=> sanitize_text_field($status),
					    'description' 	=> sanitize_text_field($description), 
					    'is_predefined' => sanitize_text_field($is_predefined), 
					), 
					array( 'id' => $reccord_id ), 
					array( 
					    '%s', 
					    '%s', 
					    '%s', 
					    '%s', 
					    '%s', 
					    '%s', 
					    '%s'
					),
					array( '%d' )
				);

			}else{

				$wpdb->insert(
					$wpdb->prefix . 'smart_insightly_field_mapping', 
					array( 
					    'wp_module' 		=> sanitize_text_field($wp_module),
					    'wp_field' 			=> sanitize_text_field($wp_field),
					    'insightly_module' 	=> sanitize_text_field($insightly_module),
					    'insightly_field'	=> sanitize_text_field($insightly_field), 
					    'status' 			=> sanitize_text_field($status),
					    'description' 		=> sanitize_text_field($description), 
					    'is_predefined' 	=> 'no', 
					), 
					array(
					    '%s', 
					    '%s', 
					    '%s', 
					    '%s', 
					    '%s', 
					    '%s', 
					    '%s'
					) 
				);	
			}
       	}
    }

    public function wpsii_delete_mapping_row_from_table(){
		if( isset( $_REQUEST['action'] ) && isset( $_REQUEST['id'] ) &&  $_REQUEST['action'] == 'trash' ){
			global $wpdb;
	   		$wpdb->delete(
				$wpdb->prefix . 'smart_insightly_field_mapping', 
				array( 
				    'id' 	=> sanitize_text_field($_REQUEST['id']),
				), 
				array(
				    '%d'
				)
			);
			wp_redirect(admin_url('admin.php?page=wpsii-smart-insightly-mappings'));
			exit();
		}    	
    }

    public function wpsii_display_mappings_form(){
        $wp_module 		= isset($_GET['wp_module']) ? sanitize_text_field($_GET['wp_module']) : false;
        $insightly_module 	= isset($_GET['insightly_module']) ? sanitize_text_field($_GET['insightly_module']) : false;

        $smart_insightly_obj = new WPSII_Smart_Insightly();
        $wp_modules 	= $smart_insightly_obj->wpsii_get_wp_modules();
        $getListModules = $smart_insightly_obj->wpsii_get_insightly_modules();
        
       	require_once WPSII_PLUGIN_PATH . 'admin/partials/field-mappings.php';	
    }

    public function wpsii_display_mappings_field_list(){

       	require_once WPSII_PLUGIN_PATH . 'admin/partials/mappings-field-list.php';	
    }
}
?>