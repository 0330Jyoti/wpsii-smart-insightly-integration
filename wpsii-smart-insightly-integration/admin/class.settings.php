<?php
class WPSII_Smart_Insightly_Admin_Settings {

    public function processSettingsForm($POST = array()){
       
        $client_id = $client_secret = "";
        
       	if ( isset( $_POST['submit'] ) ) {

            if(isset($_REQUEST['tab']) && $_REQUEST['tab'] == "general"){
                $client_id                  = sanitize_text_field($_REQUEST['wpsii_smart_insightly_settings']['client_id']);
                $client_secret              = sanitize_text_field($_REQUEST['wpsii_smart_insightly_settings']['client_secret']);
                $wpsii_smart_insightly_data_center  = sanitize_text_field($_REQUEST['wpsii_smart_insightly_settings']['data_center']);    
            }
                        
            $wpsii_smart_insightly_settings  = !empty(get_option( 'wpsii_smart_insightly_settings' )) ? get_option( 'wpsii_smart_insightly_settings' ) : array();

            $wpsii_smart_insightly_settings = array_merge($wpsii_smart_insightly_settings, $_REQUEST['wpsii_smart_insightly_settings']);
            
            update_option( 'wpsii_smart_insightly_settings', $wpsii_smart_insightly_settings );
            
            if ( $client_id && $client_secret ) {
                $redirect_uri = esc_url(WPSII_REDIRECT_URI);
                $redirect_url = "$wpsii_smart_insightly_data_center/oauth/v2/auth?client_id=$client_id&redirect_uri=$redirect_uri&response_type=code&scope=ZohoCRM.modules.all,ZohoCRM.settings.all&access_type=offline";

                ?>

<script>window.location='<?php echo $redirect_url; ?>'</script>
                <?php

                if ( wp_redirect( $redirect_url ) ) {
				    exit;
				}
            }
            
        }
    }

    public function displaySettingsForm(){
        require_once WPSII_PLUGIN_PATH . 'admin/partials/settings.php';
    }
}
?>