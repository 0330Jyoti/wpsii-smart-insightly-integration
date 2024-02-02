<?php
class GetFieldsMetaData{
    public function execute($token, $module = NULL){
        if ($module == 'Leads') {
        $GetFieldsMetaData = array(
                                    'fields' => array(
                                                        'LEAD_ID' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Lead ID',
                                                                    'api_name' => 'LEAD_ID'
                                                                ),
                                                        'FIRST_NAME' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'First Name',
                                                                    'api_name' => 'FIRST_NAME'
                                                                ),
                                                        'LAST_NAME' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Last Name',
                                                                    'api_name' => 'LAST_NAME'
                                                                ),
                                                        'PHONE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Phone Number',
                                                                    'api_name' => 'PHONE'
                                                                ),
                                                        'EMAIL' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Email',
                                                                    'api_name' => 'EMAIL'
                                                                ),
                                                 
                                                        'LEAD_DESCRIPTION' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Lead Description',
                                                                    'api_name' => 'LEAD_DESCRIPTION'
                                                                ),
                                                         'ADDRESS_CITY' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Address City',
                                                                    'api_name' => 'ADDRESS_CITY'
                                                                ),
                                                       
                                        ),
                                ); 
                }elseif ($module == 'Contacts') {
                     
                     $GetFieldsMetaData = array(
                                        'fields' => array(
                                                        'EMAIL_ADDRESS' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Email',
                                                                    'api_name' => 'EMAIL_ADDRESS'
                                                                ),
                                                        'FIRST_NAME' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'First Name',
                                                                    'api_name' => 'FIRST_NAME'
                                                                ),
                                                        'LAST_NAME' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Last Name',
                                                                    'api_name' => 'LAST_NAME'
                                                                ),
                                                        'PHONE_MOBILE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Phone Number',
                                                                    'api_name' => 'PHONE_MOBILE'
                                                                ),
                                                         'TITLE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Title',
                                                                    'api_name' => 'TITLE'
                                                                ),
                                                        'ADDRESS_MAIL_STREET' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Address Mail Street',
                                                                    'api_name' => 'ADDRESS_MAIL_STREET'
                                                                ),

                                                    ),
                                    );
                }elseif($module == 'Deals'){
                     $GetFieldsMetaData = array(
                                    'fields' => array(
                                                        'FIRST_NAME' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Firstname',
                                                                    'api_name' => 'FIRST_NAME'
                                                                ),
                                                         'DESCRIPTION' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Description',
                                                                    'api_name' => 'DESCRIPTION'
                                                                ),
                                                        'PROBABILITY' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Probability',
                                                                    'api_name' => 'PROBABILITY'
                                                                ),
                                                        'VALUE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Value',
                                                                    'api_name' => 'VALUE'
                                                                ),
                                                    ),
                                );
                }elseif($module == 'Organisations'){
                     $GetFieldsMetaData = array(
                                    'fields' => array(
                                                        'ORGANISATION_NAME' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Organisation Name',
                                                                    'api_name' => 'ORGANISATION_NAME'
                                                                ),
                                                        'ORGANISATION_ID' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Organisation ID',
                                                                    'api_name' => 'ORGANISATION_ID'
                                                                ),
                                                        'PHONE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Phone Number',
                                                                    'api_name' => 'PHONE'
                                                                ),
                                                        'WEBSITE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Website',
                                                                    'api_name' => 'WEBSITE'
                                                                ),
                                                        'ADDRESS_BILLING_STREET' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Address Street',
                                                                    'api_name' => 'ADDRESS_BILLING_STREET'
                                                                ),
                                            
                                                    ),
                                );   
                 }elseif($module == 'Projects'){
                     $GetFieldsMetaData = array(
                                    'fields' => array(
                                                         'PROJECT_ID' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Project ID',
                                                                    'api_name' => 'PROJECT_ID'
                                                                ),
                                                        'PROJECT_NAME' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Project Name',
                                                                    'api_name' => 'PROJECT_NAME'
                                                                ),
                                                        'PROJECT_DETAILS' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Project Description',
                                                                    'api_name' => 'PROJECT_DETAILS'
                                                                ),
                                                        'STARTED_DATE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Start Date',
                                                                    'api_name' => 'STARTED_DATE'
                                                                ),
                                                        'COMPLETED_DATE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Complete Date',
                                                                    'api_name' => 'COMPLETED_DATE'
                                                                ),
                                                        'OWNER_USER_ID' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Owner User ID',
                                                                    'api_name' => 'OWNER_USER_ID'
                                                                ),
                                                       
                                            
                                                    ),
                                ); 
                        }  
                return $GetFieldsMetaData;
            }
        }

