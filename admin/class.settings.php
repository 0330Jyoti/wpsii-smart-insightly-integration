<?php
class WPSII_Smart_Insightly_Admin_Settings {

    public function processSettingsForm($POST = array()){
       
        if ( isset( $_POST['submit'] ) ) {
            $wpsii_smart_insightly_settings  = !empty(get_option( 'wpsii_smart_insightly_settings' )) ? get_option( 'wpsii_smart_insightly_settings' ) : array();

            $wpsii_smart_insightly_settings = array_merge($wpsii_smart_insightly_settings, $_REQUEST['wpsii_smart_insightly_settings']);
            
            update_option( 'wpsii_smart_insightly_settings', $wpsii_smart_insightly_settings );
        }
    }

    public function displaySettingsForm(){
        require_once WPSII_PLUGIN_PATH . 'admin/partials/settings.php';
    }
}
?>