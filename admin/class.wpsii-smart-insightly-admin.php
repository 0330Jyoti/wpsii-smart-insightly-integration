<?php
class WPSII_Smart_Insightly_Admin {

    public function __construct() {
        $this->load();
        $this->menu();
    }

    private function load() {
        require_once WPSII_PLUGIN_PATH . 'admin/class.settings.php';
        require_once WPSII_PLUGIN_PATH . 'admin/class.fields-mappings.php';
        require_once WPSII_PLUGIN_PATH . 'admin/class.synchronization.php';
        require_once WPSII_PLUGIN_PATH . 'admin/class.customers-list.php';
        require_once WPSII_PLUGIN_PATH . 'admin/class.orders-list.php';
        require_once WPSII_PLUGIN_PATH . 'admin/class.products-list.php';
    }

    private function menu() {
        add_action( 'admin_enqueue_scripts', array($this, 'wpsii_smart_insightly_scripts_callback') );
        add_action( 'wp_ajax_wp_field', array($this, 'wpsii_smart_insightly_wp_field_callback') );
        add_action( 'wp_ajax_insightly_field', array($this, 'wpsii_smart_insightly_insightly_field_callback') );
        add_action( 'admin_menu', array($this, 'wpsii_smart_insightly_main_menu_callback') );
    }

    public function wpsii_smart_insightly_scripts_callback(  $hook ) {
        
        $hook_array = array(
                            'toplevel_page_wpsii-smart-insightly-integration',
                            'smart-insightly_page_wpsii-smart-insightly-mappings'
                        );
        if (  ! in_array($hook, $hook_array)  ) {
            return;
        }

        // Register the script

        wp_register_script( 
                    'jquery-dataTables-min-js', 
                    WPSII_PLUGIN_URL . 'admin/js/jquery.dataTables.min.js', 
                    array(), 
                    time() 
                );

        wp_register_script( 
                    'wpsii-smart-insightly-js', 
                    WPSII_PLUGIN_URL . 'admin/js/wpsii-smart-insightly.js', 
                    array(), 
                    time() 
                );

        wp_register_style( 
                    'jquery-dataTables-min-css', 
                    WPSII_PLUGIN_URL . 'admin/css/jquery.dataTables.min.css', 
                    array(), 
                    time() 
                );

        wp_register_style( 
                    'wpsii-smart-insightly-style', 
                    WPSII_PLUGIN_URL . 'admin/css/wpsii-smart-insightly.css', 
                    array(), 
                    time() 
                );
        

        // Localize the script with new data
        $localize_array = array(
            'ajaxurl'       => admin_url( 'admin-ajax.php' ),
        );

        wp_localize_script( 'wpsii-smart-insightly-js', 'smart_insightly_js', $localize_array );
         
        // Enqueued script with localized data.

        wp_enqueue_script( 'jquery-dataTables-min-js' );
        wp_enqueue_script( 'wpsii-smart-insightly-js' );
        
        wp_enqueue_style( 'jquery-dataTables-min-css' );
        wp_enqueue_style( 'wpsii-smart-insightly-style' );
    }

    public function wpsii_smart_insightly_wp_field_callback() {
       ob_start(); 
       $wp_fields = array();

       if( isset( $_REQUEST['wp_module_name'] ) ){

            switch ( $_REQUEST['wp_module_name'] ) {
                case 'customers':
                    $wp_fields = WPSII_Smart_Insightly::get_customer_fields();
                    break;

                case 'orders':
                    $wp_fields = WPSII_Smart_Insightly::get_order_fields();
                    break;

                case 'products':
                    $wp_fields = WPSII_Smart_Insightly::get_product_fields();
                    break;

                default:
                    # code...
                    break;
            }
       }
       
       $wp_fields_options = "<option>".esc_html__('Select WP Fields', 'wpsii-smart-insightly')."</option>";
       
       if($wp_fields){
            foreach ($wp_fields as $option_value => $option_label) {
                $wp_fields_options .=  "<option value='".$option_value."'>".esc_html__($option_label, 'wpsii-smart-insightly')."</option>";
            }
       }
       
       ob_get_clean();
       echo $wp_fields_options;
       wp_die(); 
    }

    public function wpsii_smart_insightly_insightly_field_callback() {
       ob_start(); 
       $insightly_fields = array();

       if( isset($_REQUEST['insightly_module_name']) ){
            $insightly_module    = $_REQUEST['insightly_module_name'];
                $insightly_api_obj   = new WPSII_Smart_Insightly_API();
                $insightly_fields    = $insightly_api_obj->getFieldsMetaData($insightly_module);
       }
       
       $insightly_fields_options = "<option>".esc_html__('Select insightly Fields', 'wpsii-smart-insightly')."</option>";
       
       if($insightly_fields){
            foreach ($insightly_fields['fields'] as $insightly_field_key => $insightly_field_data) {
                if($insightly_field_data['field_read_only'] == NULL){

                    $system_mandatory   = ($insightly_field_data['system_mandatory'] == 1) ? " ( Required ) " : "";
                    $data_type          = isset($insightly_field_data['data_type']) ? " ( ".ucfirst($insightly_field_data['data_type'])." ) " : "";

                    echo 
                    $insightly_fields_options .= "<option value='".$insightly_field_data['api_name']."'>". esc_html__($insightly_field_data['display_label'], 'wpsii-smart-insightly') . esc_html($data_type) . esc_html($system_mandatory) . "</option>";
                }
            }
       }
       
       ob_get_clean();
       echo $insightly_fields_options;
       wp_die(); 
    }

    public function wpsii_smart_insightly_main_menu_callback() {
        add_menu_page( 
                        esc_html__('Smart Insightly', 'wpsii-smart-Insightly'), 
                        esc_html__('Smart Insightly', 'wpsii-smart-Insightly'), 
                        'manage_options', 
                        'wpsii-smart-insightly-integration', 
                        array($this, 'settings_callback'), 
                        'dashicons-migrate' 
                    );

        add_submenu_page( 
                        'wpsii-smart-insightly-integration', 
                        esc_html__( 'Smart Insightly Settings', 'wpsii-smart-Insightly' ), 
                        esc_html__( 'Smart Insightly', 'wpsii-smart-Insightly' ), 
                        'manage_options', 
                        'wpsii-smart-insightly-integration', 
                        array($this, 'settings_callback')
                    );

        add_submenu_page( 
                        'wpsii-smart-insightly-integration', 
                        esc_html__( 'Smart Insightly Fields Mappings', 'wpsii-smart-Insightly' ), 
                        esc_html__( 'Fields Mappings', 'wpsii-smart-Insightly' ), 
                        'manage_options', 
                        'wpsii-smart-insightly-mappings', 
                        array($this, 'mappings_callback')
                    );

        add_submenu_page( 
                        'wpsii-smart-insightly-integration', 
                        esc_html__( 'Smart Insightly Synchronization', 'wpsii-smart-Insightly' ), 
                        esc_html__( 'Synchronization', 'wpsii-smart-Insightly' ), 
                        'manage_options', 
                        'wpsii-smart-insightly-synchronization', 
                        array($this, 'Synchronization_callback')
                    );

        add_submenu_page( 
                        'wpsii-smart-insightly-integration', 
                        NULL, 
                        NULL, 
                        'manage_options', 
                        'wpsii_smart_insightly_process', 
                        array($this, 'insightly_process_callback')
                    );
    }

    public function insightly_process_callback(){
        
        global $wpdb;

        $smart_insightly_obj = new WPSII_Smart_Insightly();
        $smart_insightly_obj->store_required_field_mapping_data();
        
        wp_redirect(WPSII_SETTINGS_URI);
        exit();
    }

    public function settings_callback(){
        $admin_settings_obj = new WPSII_Smart_Insightly_Admin_Settings();
        $admin_settings_obj->processSettingsForm();
        $admin_settings_obj->displaySettingsForm();
    }

    public function mappings_callback(){
        $field_mapping_obj = new WPSII_Smart_Insightly_Field_Mappings();
        $field_mapping_obj->processMappingsForm();
        $field_mapping_obj->displayMappingsForm(); 
        $field_mapping_obj->displayMappingsFieldList();
    }

    public function Synchronization_callback(){
        $admin_synch_obj = new WPSII_Smart_Insightly_Admin_Synchronization();
        $admin_synch_obj->processSynch();
        $admin_synch_obj->displaySynchData();
    }
}

new WPSII_Smart_Insightly_Admin();
?>