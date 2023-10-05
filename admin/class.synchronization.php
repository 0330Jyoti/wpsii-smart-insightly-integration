<?php
class WPSII_Smart_Insightly_Admin_Synchronization {

    public function processSynch($POST = array()){
       
       	if ( isset( $_POST['submit'] ) ) {

            if(isset($_REQUEST['tab']) && $_REQUEST['tab'] == "general"){
                $api_key                  = sanitize_text_field($_REQUEST['wpsii_smart_insightly_settings']['api_key']);
            }
                        
            $wpsii_smart_insightly_settings  = !empty(get_option( 'wpsii_smart_insightly_settings' )) ? get_option( 'wpsii_smart_insightly_settings' ) : array();

            $wpsii_smart_insightly_settings = array_merge($wpsii_smart_insightly_settings, $_REQUEST['wpsii_smart_insightly_settings']);
            
            update_option( 'wpsii_smart_insightly_settings', $wpsii_smart_insightly_settings );
            
        }


        /*Synch product*/
        if( isset( $_POST['smart_synch'] ) && $_POST['smart_synch'] == 'zoho' ){

           
            $id = $_POST['id'];

            switch ($_POST['wp_module']) {
                
                case 'products':
                    
                    $WPSZI_Smart_Zoho_Public = new WPSZI_Smart_Zoho_Public();
                    $WPSZI_Smart_Zoho_Public->addProductToZoho( $id );

                    break;

                case 'orders':
                    
                    $WPSZI_Smart_Zoho_Public = new WPSZI_Smart_Zoho_Public();
                    $WPSZI_Smart_Zoho_Public->addOrderToZoho( $id );

                    break;

                case 'customers':
                    
                    $WPSZI_Smart_Zoho_Public = new WPSZI_Smart_Zoho_Public();
                    $WPSZI_Smart_Zoho_Public->addUserToZoho( $id );

                    break;    
                
                default:
                    # code...
                    break;
            }
            
        }
        

    }

    public function displaySynchData(){
        require_once WPSII_PLUGIN_PATH . 'admin/partials/synchronization.php';
    }
}
?>