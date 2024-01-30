<?php
class GetFieldsMetaData{
    public function execute($token, $module = NULL){
        if ($module == 'Lead') {
        $GetFieldsMetaData = array(
                                    'fields' => array(
                                                        'SALUTATION' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Salutation',
                                                                    'api_name' => 'Salutation'
                                                                ),
                                                        'FIRST_NAME' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'First Name',
                                                                    'api_name' => 'First Name'
                                                                ),
                                                        'LAST_NAME' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Lastname',
                                                                    'api_name' => 'Lastname'
                                                                ),
                                                        'PHONE_NUMBER' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Phone Number',
                                                                    'api_name' => 'Phone Number'
                                                                ),
                                                        'IMAGE_URL' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Image url',
                                                                    'api_name' => 'Image url'
                                                                ),
                                                 
                                                        'ADDRESS_OTHER_CITY' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Address Other City',
                                                                    'api_name' => 'Address Other City'
                                                                ),
                                                       
                                        ),
                                ); 
                }elseif ($module == 'Contact') {
                     
                     $GetFieldsMetaData = array(
                                        'fields' => array(
                                                        'EMAIL' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Email',
                                                                    'api_name' => 'Email'
                                                                ),
                                                        'FIRST_NAME' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Firstname',
                                                                    'api_name' => 'Firstname'
                                                                ),
                                                        'LAST_NAME' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Leadname',
                                                                    'api_name' => 'Leadname'
                                                                ),
                                                        'PHONE_NUMBER' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Phone Number',
                                                                    'api_name' => 'Phone Number'
                                                                ),
                                                        'SOURCE_ID' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Source ID',
                                                                    'api_name' => 'Source ID'
                                                                ),
                                                        'STATUS_ID' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Status ID',
                                                                    'api_name' => 'Status ID'
                                                                ),
                                                    ),
                                    );
                }elseif($module == 'Deal'){
                     $GetFieldsMetaData = array(
                                    'fields' => array(
                                                        'DESCRIPTION' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Description',
                                                                    'api_name' => 'Description'
                                                                ),
                                                        'FIRST_NAME' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Firstname',
                                                                    'api_name' => 'Firstname'
                                                                ),
                                                        'PROBABILITY' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Probability',
                                                                    'api_name' => 'Probability'
                                                                ),
                                                        'VALUE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Value',
                                                                    'api_name' => 'Value'
                                                                ),
                                                    ),
                                );
                }elseif($module == 'Organization'){
                     $GetFieldsMetaData = array(
                                    'fields' => array(
                                                        'FIRST_NAME' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Firstname',
                                                                    'api_name' => 'Firstname'
                                                                ),
                                                        'PHONE_NUMBER' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Phone Number',
                                                                    'api_name' => 'Phone Number'
                                                                ),
                                                        'WEBSITE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Website',
                                                                    'api_name' => 'Website'
                                                                ),
                                            
                                                    ),
                                );   
                 }elseif($module == 'Project'){
                     $GetFieldsMetaData = array(
                                    'fields' => array(
                                                         'FIRST_NAME' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'First Name',
                                                                    'api_name' => 'First Name'
                                                                ),
                                                        'DESCRIPTION' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Description',
                                                                    'api_name' => 'Description'
                                                                ),
                                                        'START_DATE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Start Date',
                                                                    'api_name' => 'Start Date'
                                                                ),
                                                        'END_DATE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'End Date',
                                                                    'api_name' => 'End Date'
                                                                ),
                                                       
                                            
                                                    ),
                                ); 
                        }  
                return $GetFieldsMetaData;
            }
        }

