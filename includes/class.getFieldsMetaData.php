<?php
class GetFieldsMetaData{
    public function execute($token, $module = NULL){
        if ($module == 'Lead') {
        $GetFieldsMetaData = array(
                                    'fields' => array(
                                                        'SALUTATION' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'SALUTATION',
                                                                    'api_name' => 'SALUTATION'
                                                                ),
                                                        'FIRST_NAME' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'FIRST_NAME',
                                                                    'api_name' => 'FIRST_NAME'
                                                                ),
                                                        'LAST_NAME' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'LAST_NAME',
                                                                    'api_name' => 'LAST_NAME'
                                                                ),
                                                        'PHONE_NUMBER' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'PHONE_NUMBER',
                                                                    'api_name' => 'PHONE_NUMBER'
                                                                ),
                                                        'IMAGE_URL' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'IMAGE_URL',
                                                                    'api_name' => 'IMAGE_URL'
                                                                ),
                                                        'ADDRESS_MAIL_CITY' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'ADDRESS_MAIL_CITY',
                                                                    'api_name' => 'ADDRESS_MAIL_CITY'
                                                                ),
                                                        'ADDRESS_MAIL_COUNTRY' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'ADDRESS_MAIL_COUNTRY',
                                                                    'api_name' => 'ADDRESS_MAIL_COUNTRY'
                                                                ),
                                                        'ADDRESS_MAIL_POSTCODE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'ADDRESS_MAIL_POSTCODE',
                                                                    'api_name' => 'ADDRESS_MAIL_POSTCODE'
                                                                ),
                                                        'ADDRESS_OTHER_CITY' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'ADDRESS_OTHER_CITY',
                                                                    'api_name' => 'ADDRESS_OTHER_CITY'
                                                                ),
                                                       
                                        ),
                                ); 
                }elseif ($module == 'Contact') {
                     
                     $GetFieldsMetaData = array(
                                        'fields' => array(
                                                        'EMAIL' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'EMAIL',
                                                                    'api_name' => 'EMAIL'
                                                                ),
                                                        'FIRST_NAME' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'FIRST_NAME',
                                                                    'api_name' => 'FIRST_NAME'
                                                                ),
                                                        'LAST_NAME' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'LEAD_DESCRIPTION',
                                                                    'api_name' => 'LEAD_DESCRIPTION'
                                                                ),
                                                        'PHONE_NUMBER' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'PHONE_NUMBER',
                                                                    'api_name' => 'PHONE_NUMBER'
                                                                ),
                                                        'SOURCE_ID' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'SOURCE_ID',
                                                                    'api_name' => 'SOURCE_ID'
                                                                ),
                                                        'STATUS_ID' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'STATUS_ID',
                                                                    'api_name' => 'STATUS_ID'
                                                                ),
                                                    ),
                                    );
                }elseif($module == 'Deal'){
                     $GetFieldsMetaData = array(
                                    'fields' => array(
                                                        'DESCRIPTION' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'DESCRIPTION',
                                                                    'api_name' => 'DESCRIPTION'
                                                                ),
                                                        'FIRST_NAME' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'FIRST_NAME',
                                                                    'api_name' => 'FIRST_NAME'
                                                                ),
                                                        'PROBABILITY' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'PROBABILITY',
                                                                    'api_name' => 'PROBABILITY'
                                                                ),
                                                        'VALUE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'VALUE',
                                                                    'api_name' => 'VALUE'
                                                                ),
                                                    ),
                                );
                }elseif($module == 'Organization'){
                     $GetFieldsMetaData = array(
                                    'fields' => array(
                                                        'FIRST_NAME' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'FIRST_NAME',
                                                                    'api_name' => 'FIRST_NAME'
                                                                ),
                                                        'PHONE_NUMBER' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'PHONE_NUMBER',
                                                                    'api_name' => 'PHONE_NUMBER'
                                                                ),
                                                        'WEBSITE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'WEBSITE',
                                                                    'api_name' => 'WEBSITE'
                                                                ),
                                            
                                                    ),
                                );   
                 }elseif($module == 'Project'){
                     $GetFieldsMetaData = array(
                                    'fields' => array(
                                                        'DESCRIPTION' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'DESCRIPTION',
                                                                    'api_name' => 'DESCRIPTION'
                                                                ),
                                                        'START_DATE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'START_DATE',
                                                                    'api_name' => 'START_DATE'
                                                                ),
                                                        'END_DATE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'END_DATE',
                                                                    'api_name' => 'END_DATE'
                                                                ),
                                                        'FIRST_NAME' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'FIRST_NAME',
                                                                    'api_name' => 'FIRST_NAME'
                                                                ),
                                            
                                                    ),
                                ); 
                        }  
                return $GetFieldsMetaData;
            }
        }

