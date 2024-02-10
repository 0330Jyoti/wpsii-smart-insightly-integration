<?php
class WPSII_Smart_Insightly {

	protected $plugin_name;

	protected $version;

	public function __construct() {
		$this->version = '1.0.0';
		$this->plugin_name = 'wpsii-smart-insightly';
	}

	public function run() {
		/*
			Load all class files
		*/
		require_once WPSII_PLUGIN_PATH . 'includes/class-wpsii-smart-insightly-api.php';
        require_once WPSII_PLUGIN_PATH . 'admin/class.wpsii-smart-insightly-admin.php';
		require_once WPSII_PLUGIN_PATH . 'public/class.wpsii-smart-insightly-public.php';
	}

	public function get_plugin_name() {
		return $this->plugin_name;
	}
	
	public function get_version() {
		return $this->version;
	}

	public function wpsii_get_wp_modules(){
		return array(
                'customers' => esc_html__('Customers','wpsii-smart-insightly'),
                'orders'    => esc_html__('Orders','wpsii-smart-insightly'),
                'products'  => esc_html__('Products','wpsii-smart-insightly'),
            );
	}

	public function wpsii_get_insightly_modules(){

		$insightly_api_obj   = new WPSII_Smart_Insightly_API();
       
        /*get list modules*/
        $getListModules = $insightly_api_obj->getListModules();
        
        return $getListModules;
	}

	public static function wpsii_get_customer_fields(){
    	
    	global $wpdb;
		$wc_fields = array(
		    'first_name'            => esc_html__('First Name', 'wpsii-smart-insightly'),
		    'last_name'             => esc_html__('Last Name', 'wpsii-smart-insightly'),
		    'user_email'            => esc_html__('Email', 'wpsii-smart-insightly'),
		    'billing_first_name'    => esc_html__('Billing First Name', 'wpsii-smart-insightly'),
		    'billing_last_name'     => esc_html__('Billing Last Name', 'wpsii-smart-insightly'),
		    'billing_company'       => esc_html__('Billing Company', 'wpsii-smart-insightly'),
		    'billing_address_1'     => esc_html__('Billing Address 1', 'wpsii-smart-insightly'),
		    'billing_address_2'     => esc_html__('Billing Address 2', 'wpsii-smart-insightly'),
		    'billing_city'          => esc_html__('Billing City', 'wpsii-smart-insightly'),
		    'billing_state'         => esc_html__('Billing State', 'wpsii-smart-insightly'),
		    'billing_postcode'      => esc_html__('Billing Postcode', 'wpsii-smart-insightly'),
		    'billing_country'       => esc_html__('Billing Country', 'wpsii-smart-insightly'),
		    'billing_phone'         => esc_html__('Billing Phone', 'wpsii-smart-insightly'),
		    'billing_email'         => esc_html__('Billing Email', 'wpsii-smart-insightly'),
		    'shipping_first_name'   => esc_html__('Shipping First Name', 'wpsii-smart-insightly'),
		    'shipping_last_name'    => esc_html__('Shipping Last Name', 'wpsii-smart-insightly'),
		    'shipping_company'      => esc_html__('Shipping Company', 'wpsii-smart-insightly'),
		    'shipping_address_1'    => esc_html__('Shipping Address 1', 'wpsii-smart-insightly'),
		    'shipping_address_2'    => esc_html__('Shipping Address 2', 'wpsii-smart-insightly'),
		    'shipping_city'         => esc_html__('Shipping City', 'wpsii-smart-insightly'),
		    'shipping_postcode'     => esc_html__('Shipping Postcode', 'wpsii-smart-insightly'),
		    'shipping_country'      => esc_html__('Shipping Country', 'wpsii-smart-insightly'),
		    'shipping_state'        => esc_html__('Shipping State', 'wpsii-smart-insightly'),
		    'user_url'              => esc_html__('Website', 'wpsii-smart-insightly'),
		    'description'           => esc_html__('Biographical Info', 'wpsii-smart-insightly'),
		    'display_name'          => esc_html__('Display name publicly as', 'wpsii-smart-insightly'),
		    'nickname'              => esc_html__('Nickname', 'wpsii-smart-insightly'),
		    'user_login'            => esc_html__('Username', 'wpsii-smart-insightly'),
		    'user_registered'       => esc_html__('Registration Date', 'wpsii-smart-insightly')
		);

		return $wc_fields;
    }


    public static  function wpsii_get_order_fields(){
    	
    	global $wpdb;


        $wc_fields =  array(
                'get_id'                       => esc_html__('Order Number', 'wpsii-smart-insightly'),
                'get_order_key'                => esc_html__('Order Key', 'wpsii-smart-insightly'),
                'get_billing_first_name'       => esc_html__('Billing First Name', 'wpsii-smart-insightly'),
                'get_billing_last_name'        => esc_html__('Billing Last Name', 'wpsii-smart-insightly'),
                'get_billing_company'          => esc_html__('Billing Company', 'wpsii-smart-insightly'),
                'get_billing_address_1'        => esc_html__('Billing Address 1', 'wpsii-smart-insightly'),
                'get_billing_address_2'        => esc_html__('Billing Address 2', 'wpsii-smart-insightly'),
                'get_billing_city'             => esc_html__('Billing City', 'wpsii-smart-insightly'),
                'get_billing_state'            => esc_html__('Billing State', 'wpsii-smart-insightly'),
                'get_billing_postcode'         => esc_html__('Billing Postcode', 'wpsii-smart-insightly'),
                'get_billing_country'          => esc_html__('Billing Country', 'wpsii-smart-insightly'), 
                'get_billing_phone'            => esc_html__('Billing Phone', 'wpsii-smart-insightly'),
                'get_billing_email'            => esc_html__('Billing Email', 'wpsii-smart-insightly'),
                'get_shipping_first_name'      => esc_html__('Shipping First Name', 'wpsii-smart-insightly'),
                'get_shipping_last_name'       => esc_html__('Shipping Last Name', 'wpsii-smart-insightly'),
                'get_shipping_company'         => esc_html__('Shipping Company', 'wpsii-smart-insightly'),
                'get_shipping_address_1'       => esc_html__('Shipping Address 1', 'wpsii-smart-insightly'),
                'get_shipping_address_2'       => esc_html__('Shipping Address 2', 'wpsii-smart-insightly'),
                'get_shipping_city'            => esc_html__('Shipping City', 'wpsii-smart-insightly'),
                'get_shipping_state'           => esc_html__('Shipping State', 'wpsii-smart-insightly'),
                'get_shipping_postcode'        => esc_html__('Shipping Postcode', 'wpsii-smart-insightly'),
                'get_shipping_country'         => esc_html__('Shipping Country',  'wpsii-smart-insightly'),
                'get_formatted_order_total'     => esc_html__('Formatted Order Total', 'wpsii-smart-insightly'),
                'get_cart_tax'                  => esc_html__('Cart Tax', 'wpsii-smart-insightly'),
                'get_currency'                  => esc_html__('Currency', 'wpsii-smart-insightly'),
                'get_discount_tax'              => esc_html__('Discount Tax', 'wpsii-smart-insightly'),
                'get_discount_to_display'       => esc_html__('Discount to Display', 'wpsii-smart-insightly'),
                'get_discount_total'            => esc_html__('Discount Total', 'wpsii-smart-insightly'),
                'get_shipping_tax'              => esc_html__('Shipping Tax', 'wpsii-smart-insightly'),
                'get_shipping_total'            => esc_html__('Shipping Total', 'wpsii-smart-insightly'),
                'get_subtotal'                  => esc_html__('SubTotal', 'wpsii-smart-insightly'),
                'get_subtotal_to_display'       => esc_html__('SubTotal to Display', 'wpsii-smart-insightly'),
                'get_total'                     => esc_html__('Get Total', 'wpsii-smart-insightly'),
                'get_total_discount'            => esc_html__('Get Total Discount', 'wpsii-smart-insightly'),
                'get_total_tax'                 => esc_html__('Total Tax', 'wpsii-smart-insightly'),
                'get_total_refunded'            => esc_html__('Total Refunded', 'wpsii-smart-insightly'),
                'get_total_tax_refunded'        => esc_html__('Total Tax Refunded', 'wpsii-smart-insightly'),
                'get_total_shipping_refunded'   => esc_html__('Total Shipping Refunded', 'wpsii-smart-insightly'),
                'get_item_count_refunded'       => esc_html__('Item count refunded', 'wpsii-smart-insightly'),
                'get_total_qty_refunded'        => esc_html__('Total Quantity Refunded', 'wpsii-smart-insightly'),
                'get_remaining_refund_amount'   => esc_html__('Remaining Refund Amount', 'wpsii-smart-insightly'),
                'get_item_count'                => esc_html__('Item count', 'wpsii-smart-insightly'),
                'get_shipping_method'           => esc_html__('Shipping Method', 'wpsii-smart-insightly'),
                'get_shipping_to_display'       => esc_html__('Shipping to Display', 'wpsii-smart-insightly'),
                'get_date_created'              => esc_html__('Date Created', 'wpsii-smart-insightly'),
                'get_date_modified'             => esc_html__('Date Modified', 'wpsii-smart-insightly'),
                'get_date_completed'            => esc_html__('Date Completed', 'wpsii-smart-insightly'),
                'get_date_paid'                 => esc_html__('Date Paid', 'wpsii-smart-insightly'),
                'get_customer_id'               => esc_html__('Customer ID', 'wpsii-smart-insightly'),
                'get_user_id'                   => esc_html__('User ID', 'wpsii-smart-insightly'),
                'get_customer_ip_address'       => esc_html__('Customer IP Address', 'wpsii-smart-insightly'),
                'get_customer_user_agent'       => esc_html__('Customer User Agent', 'wpsii-smart-insightly'),
                'get_created_via'               => esc_html__('Order Created Via', 'wpsii-smart-insightly'),
                'get_customer_note'             => esc_html__('Customer Note', 'wpsii-smart-insightly'),
                'get_shipping_address_map_url'  => esc_html__('Shipping Address Map URL', 'wpsii-smart-insightly'),
                'get_formatted_billing_full_name'   => esc_html__('Formatted Billing Full Name', 'wpsii-smart-insightly'),
                'get_formatted_shipping_full_name'  => esc_html__('Formatted Shipping Full Name', 'wpsii-smart-insightly'),
                'get_formatted_billing_address'     => esc_html__('Formatted Billing Address', 'wpsii-smart-insightly'),
                'get_formatted_shipping_address'    => esc_html__('Formatted Shipping Address', 'wpsii-smart-insightly'),
                'get_payment_method'            => esc_html__('Payment Method', 'wpsii-smart-insightly'),
                'get_payment_method_title'      => esc_html__('Payment Method Title', 'wpsii-smart-insightly'),
                'get_transaction_id'            => esc_html__('Transaction ID', 'wpsii-smart-insightly'),
                'get_checkout_payment_url'      => esc_html__( 'Checkout Payment URL', 'wpsii-smart-insightly'),
                'get_checkout_order_received_url'   => esc_html__('Checkout Order Received URL', 'wpsii-smart-insightly'),
                'get_cancel_order_url'          => esc_html__('Cancel Order URL', 'wpsii-smart-insightly'),
                'get_cancel_order_url_raw'      => esc_html__('Cancel Order URL Raw', 'wpsii-smart-insightly'),
                'get_cancel_endpoint'           => esc_html__('Cancel Endpoint', 'wpsii-smart-insightly'),
                'get_view_order_url'            => esc_html__('View Order URL', 'wpsii-smart-insightly'),
                'get_edit_order_url'            => esc_html__('Edit Order URL', 'wpsii-smart-insightly'),
                'get_status'                    => esc_html__('Status', 'wpsii-smart-insightly'),
            );
        
        return $wc_fields;
    }


    public static function wpsii_get_product_fields(){
    	global $wpdb;
		$wc_fields = array(
		    'get_id'              		=> esc_html__('Product Id', 'wpsii-smart-insightly'),
            'get_type'       			=> esc_html__('Product Type', 'wpsii-smart-insightly'),
            'get_name'       			=> esc_html__('Name', 'wpsii-smart-insightly'),
            'get_slug'          		=> esc_html__('Slug', 'wpsii-smart-insightly'),
            'get_date_created'      	=> esc_html__('Date Created', 'wpsii-smart-insightly'),
            'get_date_modified'     	=> esc_html__('Date Modified', 'wpsii-smart-insightly'),
            'get_status'            	=> esc_html__('Status', 'wpsii-smart-insightly'),
            'get_featured'          	=> esc_html__('Featured', 'wpsii-smart-insightly'),
            'get_catalog_visibility'	=> esc_html__('Catalog Visibility', 'wpsii-smart-insightly'),
            'get_description'       	=> esc_html__('Description', 'wpsii-smart-insightly'),
            'get_short_description' 	=> esc_html__('Short Description', 'wpsii-smart-insightly'),
            'get_sku'            		=> esc_html__('Sku', 'wpsii-smart-insightly'),
            'get_menu_order'      		=> esc_html__('Menu Order', 'wpsii-smart-insightly'),
            'get_virtual'       		=> esc_html__('Virtual', 'wpsii-smart-insightly'),
            'get_permalink'         	=> esc_html__('Product Permalink', 'wpsii-smart-insightly'),
            'get_price'       			=> esc_html__('Price', 'wpsii-smart-insightly'),
            'get_regular_price'       	=> esc_html__('Regular Price', 'wpsii-smart-insightly'),
            'get_sale_price'            => esc_html__('Sale Price', 'wpsii-smart-insightly'),
            'get_date_on_sale_from'     => esc_html__('Date on Sale From', 'wpsii-smart-insightly'),
            'get_date_on_sale_to'       => esc_html__('Date on Sale To', 'wpsii-smart-insightly'),
            'get_total_sales'         	=> esc_html__('Total Sales', 'wpsii-smart-insightly'),
            'get_tax_status'     		=> esc_html__('Tax Status', 'wpsii-smart-insightly'),
            'get_tax_class'           	=> esc_html__('Tax Class', 'wpsii-smart-insightly'),
            'get_manage_stock'          => esc_html__('Manage Stock', 'wpsii-smart-insightly'),
            'get_stock_quantity'        => esc_html__('Stock Quantity', 'wpsii-smart-insightly'),
            'get_stock_status'          => esc_html__('Stock Status', 'wpsii-smart-insightly'),
            'get_backorders'       		=> esc_html__('Backorders', 'wpsii-smart-insightly'),
            'get_sold_individually'     => esc_html__('Sold Individually', 'wpsii-smart-insightly'),
            'get_purchase_note'         => esc_html__('Purchase Note', 'wpsii-smart-insightly'),
            'get_shipping_class_id'     => esc_html__('Shipping Class ID', 'wpsii-smart-insightly'),
            'get_weight'               	=> esc_html__('Weight', 'wpsii-smart-insightly'),
            'get_length'              	=> esc_html__('Length', 'wpsii-smart-insightly'),
            'get_width'            		=> esc_html__('Width', 'wpsii-smart-insightly'),
            'get_height'            	=> esc_html__('Height', 'wpsii-smart-insightly'),
            'get_categories'            => esc_html__('Categories', 'wpsii-smart-insightly'),
            'get_category_ids'          => esc_html__('Categories IDs', 'wpsii-smart-insightly'),
            'get_tag_ids'            	=> esc_html__('Tag IDs', 'wpsii-smart-insightly'),
		);
        
		return $wc_fields;
    }

    public function wpsii_store_required_field_mapping_data(){

        global $wpdb;
        $insightly_api_obj   = new WPSII_Smart_Insightly_API();
        $wp_modules     = $this->wpsii_get_wp_modules();
        $getListModules = $this->wpsii_get_insightly_modules();

        if($getListModules['modules']){
            foreach ($getListModules['modules'] as $key => $singleModule) {
                if( $singleModule['deletable'] &&  $singleModule['creatable'] ){
        
                    $insightly_fields = $insightly_api_obj->getFieldsMetaData( $singleModule['api_name'] );
        
                    if($insightly_fields){
                        foreach ($insightly_fields['fields'] as $insightly_field_key => $insightly_field_data) {
                            if($insightly_field_data['field_read_only'] == NULL){
                                if( $insightly_field_data['system_mandatory'] == 1 ){
                                    if($wp_modules){
                                        foreach ($wp_modules as $wpModuleSlug => $wpModuleLabel) {
        
                                            switch ( $wpModuleSlug ) {
                                                case 'customers':
                                                    $wp_field = "first_name";
                                                    break;
                                                
                                                case 'orders':
                                                    $wp_field = "get_id";
                                                    break;

                                                case 'products':
                                                    $wp_field = "get_name";
                                                    break;

                                                default:
                                                    $wp_field = "";
                                                    break;
                                            }

                                            $status         = 'active';
                                            $description    = '';

                                            $record_exists = $wpdb->get_row( 
                                                $wpdb->prepare(
                                                    "
                                                    SELECT * FROM ".$wpdb->prefix ."smart_insightly_field_mapping  WHERE wp_module = %s AND wp_field = %s  AND insightly_module = %s AND insightly_field = %s
                                                    " ,
                                                    $wpModuleSlug, $wp_field, $singleModule['api_name'], $insightly_field_data['api_name']
                                                    )
                                                
                                            );

                                            if ( null !== $record_exists ) {
                                                
                                              $reccord_id       = $record_exists->id;
                                              $is_predefined    = $record_exists->is_predefined;
                                              

                                                $wpdb->update(
                                                    $wpdb->prefix . 'smart_insightly_field_mapping', 
                                                    array( 
                                                        'wp_module'     => sanitize_text_field($wpModuleSlug),
                                                        'wp_field'      => sanitize_text_field($wp_field),
                                                        'insightly_module'   => sanitize_text_field($singleModule['api_name']),
                                                        'insightly_field'    => sanitize_text_field($insightly_field_data['api_name']), 
                                                        'status'        => sanitize_text_field($status),
                                                        'description'   => sanitize_text_field($description), 
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
                                                        'wp_module'     => sanitize_text_field($wpModuleSlug),
                                                        'wp_field'      => sanitize_text_field($wp_field),
                                                        'insightly_module'   => sanitize_text_field($singleModule['api_name']),
                                                        'insightly_field'    => sanitize_text_field($insightly_field_data['api_name']), 
                                                        'status'        => sanitize_text_field($status),
                                                        'description'   => sanitize_text_field($description), 
                                                        'is_predefined' => 'yes', 
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
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
?>