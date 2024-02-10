<?php
class WPSII_Smart_Insightly_Admin_Synchronization {

    public function wpsii_process_synch($POST = array()){
       
       	if ( isset( $_POST['submit'] ) ) {

            if(isset($_REQUEST['tab']) && $_REQUEST['tab'] == "general"){
                $api_key                  = sanitize_text_field($_REQUEST['wpsii_smart_insightly_settings']['api_key']);
                
            }
                        
            $wpsii_smart_insightly_settings  = !empty(get_option( 'wpsii_smart_insightly_settings' )) ? get_option( 'wpsii_smart_insightly_settings' ) : array();

            $wpsii_smart_insightly_settings = array_merge($wpsii_smart_insightly_settings, $_REQUEST['wpsii_smart_insightly_settings']);
            
            update_option( 'wpsii_smart_insightly_settings', $wpsii_smart_insightly_settings );
            
        }


        /*Synch product*/
        if( isset( $_POST['smart_synch'] ) && $_POST['smart_synch'] == 'insightly' ){

           
            $id = $_POST['id'];

            switch ($_POST['wp_module']) {
                
                case 'products':
                    
                    $WPSII_Smart_Insightly_Public = new WPSII_Smart_Insightly_Public();
                    $WPSII_Smart_Insightly_Public->addProductToInsightly( $id );

                    break;

                case 'orders':
                    
                    $WPSII_Smart_Insightly_Public = new WPSII_Smart_Insightly_Public();
                    $WPSII_Smart_Insightly_Public->addOrderToInsightly( $id );

                    break;

                case 'customers':
                    
                    $WPSII_Smart_Insightly_Public = new WPSII_Smart_Insightly_Public();
                    $WPSII_Smart_Insightly_Public->addUserToInsightly( $id );

                    break;    
                
                default:
                    # code...
                    break;
            }
            
        }
        

    }

    public function wpsii_display_synch_data(){
        require_once WPSII_PLUGIN_PATH . 'admin/partials/synchronization.php';
    }
}
?>