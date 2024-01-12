<?php
class WPSII_Smart_Insightly_API {
    
    var $url;
    var $api_key;
    var $token;
    
    function __construct() {

        $wpsii_smart_insightly_settings     = get_option( 'wpsii_smart_insightly_settings' );

        $api_key = isset($wpsii_smart_insightly_settings['api_key']) ? esc_attr($wpsii_smart_insightly_settings['api_key']) : '';
   
        $this->url              = 'https://accounts.insightly.com';
        $this->api_key        = $api_key;
        $this->token            = get_option( 'wpsii_smart_insightly' );

        // Get any existing copy of our transient data
        if ( false === ( $wpsii_smart_insightly_expire = get_transient( 'wpsii_smart_insightly_expire' ) ) ) {
        
            $this->getRefreshToken($this->token);
        }

        $this->loadAPIFiles();
    }
    
    function loadAPIFiles(){
        require_once WPSII_PLUGIN_PATH . 'includes/class.getListofModules.php';
        require_once WPSII_PLUGIN_PATH . 'includes/class.getFieldsMetaData.php';
    }

    function getListModules(){
        return (new GetListofModules())->execute($this->token);
    }

    function getFieldsMetaData( $module_name = NULL ){
        return (new GetFieldsMetaData())->execute($this->token, $module_name);
    }

    function getToken( $code, $redirect_uri ) {
        
        $data = array(
            'api_key'     => $this->api_key,
            'client_secret' => $this->client_secret,
            'code'          => $code,
            'grant_type'    => 'authorization_code',
            'redirect_uri'  => $redirect_uri,
        );
        $data = http_build_query( $data );
        
        $url = $this->url.'/oauth/v2/token';
        $ch = curl_init( $url );
        curl_setopt( $ch, CURLOPT_HEADER, false );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );        
        curl_setopt( $ch, CURLOPT_POST, true );
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $data );
        $json_response = curl_exec( $ch ); 
        curl_getinfo( $ch, CURLINFO_HTTP_CODE );
        curl_close( $ch );
        
        $response = json_decode( $json_response );
        
        return $response;
    }
    
    function getRefreshToken( $token ) {
        
        if (!is_object($token)) {
            return null; 
        }
        
        $data = array(
            'api_key'     => $this->api_key,
            
            'grant_type'    => 'refresh_token',
            'refresh_token' => $token->refresh_token,
        );
        $data = http_build_query( $data );
        
        $url = $this->url.'/oauth/v2/token';
        $ch = curl_init( $url );
        curl_setopt( $ch, CURLOPT_HEADER, false );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );        
        curl_setopt( $ch, CURLOPT_POST, true );
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $data );
        $json_response = curl_exec( $ch ); 
        curl_getinfo( $ch, CURLINFO_HTTP_CODE );
        curl_close( $ch );
        
        $response = json_decode( $json_response );
        
        if ( isset( $response->access_token ) ) {
            $token->access_token = $response->access_token;

            $wpsii_smart_insightly_expire = 'Expire_Management';
            set_transient( 'wpsii_smart_insightly_expire', $wpsii_smart_insightly_expire, 3500 );
            update_option( 'wpsii_smart_insightly', $token );

        }
        
        return $response;
    }
    
    function manageToken( $token ){
        $old_token = get_option( 'wpsii_smart_insightly' );
        if ( ! isset( $token->refresh_token ) && $old_token ) {
            $old_token->access_token = $token->access_token;
            $token = $old_token;
        }
        
        $wpsii_smart_insightly_expire = 'Expire_Management';
        set_transient( 'wpsii_smart_insightly_expire', $wpsii_smart_insightly_expire, 3500 );
        update_option( 'wpsii_smart_insightly', $token );
        return true;
    }

    function getModuleFields( $token, $module ) {
        
        $header = array(
            'Authorization: Zoho-oauthtoken '.$token->access_token,
            'Content-Type: application/json',
        );
        
        $url = $token->api_domain.'/crm/v2/settings/fields?module='.$module;
        $ch = curl_init( $url );
        curl_setopt( $ch, CURLOPT_HTTPHEADER, $header );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
        $json_response = curl_exec( $ch );
        curl_getinfo( $ch, CURLINFO_HTTP_CODE );
        curl_close( $ch );
        
        $response = json_decode( $json_response );
        $fields = array();
        if ( isset( $response->fields ) && $response->fields != null ) {
            foreach ( $response->fields as $field ) {
                if ( isset( $field->view_type->create ) && $field->view_type->create ) {
                    $fields[$field->api_name] = array(
                        'label'     => $field->field_label,
                        'type'      => $field->data_type,
                    );
                }
            }
        }
        return $fields;
    }
    
    function addRecord( $module, $data ) {
        
        $data = array(
            'data'  => array(
                $data,
            ),
        );

        $data = json_encode( $data );
        $header = array(
            'Authorization: Zoho-oauthtoken '.$this->token->access_token,
        );
        
        $url = WPSII_INSIGHTLY_APIS_URL.'/crm/v2/'.$module;
        
        $ch = curl_init( $url );
        curl_setopt( $ch, CURLOPT_HTTPHEADER, $header );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( $ch, CURLOPT_POST, true );
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $data );
        $json_response = curl_exec( $ch );
        curl_getinfo( $ch, CURLINFO_HTTP_CODE );
        curl_close( $ch );
        
        $response = json_decode( $json_response );
        
        if ( isset( $response->data[0]->status ) && $response->data[0]->status == 'error' ) {
            $log = "errorCode: ".$response->data[0]->code."\n";
            $log .= "message: ".$response->data[0]->message."\n";
            $log .= "Date: ".date( 'Y-m-d H:i:s' )."\n\n";                            

            file_put_contents( WPSII_PLUGIN_PATH.'debug.log', $log, FILE_APPEND );
        }
        
        return $response;
    }
    
    function updateRecord( $module, $data, $record_id ) {
        
        $data = array(
            'data'  => array(
                $data,
            ),
        );
        
        $data = json_encode( $data );
        $header = array(
            'Authorization: Zoho-oauthtoken '.$this->token->access_token,
        );
        
        $url = WPSII_INSIGHTLY_APIS_URL.'/crm/v2/'.$module.'/'.$record_id;
        
        $ch = curl_init( $url );
        curl_setopt( $ch, CURLOPT_HTTPHEADER, $header );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'PUT' );
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $data );
        $json_response = curl_exec( $ch );
        curl_getinfo( $ch, CURLINFO_HTTP_CODE );
        curl_close( $ch );
        
        $response = json_decode( $json_response );
        if ( isset( $response->data[0]->status ) && $response->data[0]->status == 'error' ) {
            $log = "errorCode: ".$response->data[0]->code."\n";
            $log .= "message: ".$response->data[0]->message."\n";
            $log .= "Date: ".date( 'Y-m-d H:i:s' )."\n\n";                            

            file_put_contents( WPSII_PLUGIN_PATH.'debug.log', $log, FILE_APPEND );
        }
        
        return $response;
    }
}
?>