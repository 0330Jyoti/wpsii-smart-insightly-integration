<?php
class GetFieldsMetaData{
    public function execute($module = NULL){
        if ($module == 'leads') {
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
                                                        'IMAGE_URL' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Image url ',
                                                                    'api_name' => 'IMAGE_URL'
                                                                ),
                                                        'BACKGROUND' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Background',
                                                                    'api_name' => 'BACKGROUND'
                                                                ),
                                                        'OWNER_USER_ID' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Owner User ID',
                                                                    'api_name' => 'OWNER_USER_ID'
                                                                ),
                                                        'DATE_UPDATED_UTC' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Date Update UTC',
                                                                    'api_name' => 'DATE_UPDATED_UTC'
                                                                ),
                                                         'SOCIAL_LINKEDIN' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Social Linkedin',
                                                                    'api_name' => 'SOCIAL_LINKEDIN'
                                                                ),
                                                        'SOCIAL_FACEBOOK' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Social Facebook',
                                                                    'api_name' => 'SOCIAL_FACEBOOK'
                                                                ),
                                                        'SOCIAL_TWITTER' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Social Twitter' => 'SOCIAL_TWITTER'
                                                                ),
                                                        'DATE_OF_BIRTH' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Date Of Birth',
                                                                    'api_name' => 'DATE_OF_BIRTH'
                                                                ),
                                                        'PHONE_OTHER' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Phone Other',
                                                                    'api_name' => 'PHONE_OTHER'
                                                                ),
                                                        'PHONE_ASSISTANT' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Phone Assistant',
                                                                    'api_name' => 'PHONE_ASSISTANT'
                                                                ),
                                                        'PHONE_FAX' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Phone Fax',
                                                                    'api_name' => 'PHONE_FAX'
                                                                ),
                                                         'ASSISTANT_NAME' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Assistant Name',
                                                                    'api_name' => 'ASSISTANT_NAME'
                                                                ),
                                                        'ADDRESS_MAIL_CITY' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Address Mail City',
                                                                    'api_name' => 'ADDRESS_MAIL_CITY'
                                                                ),
                                                        'ADDRESS_MAIL_STATE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Address Mail State' => 'ADDRESS_MAIL_STATE'
                                                                ),
                                                        'ADDRESS_MAIL_POSTCODE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Address Mail Postcode',
                                                                    'api_name' => 'ADDRESS_MAIL_POSTCODE'
                                                                ),
                                                        'ADDRESS_MAIL_COUNTRY' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Address Mail Country',
                                                                    'api_name' => 'ADDRESS_MAIL_COUNTRY'
                                                                ),
                                                        'ADDRESS_OTHER_STREET' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Address Other Street',
                                                                    'api_name' => 'ADDRESS_OTHER_STREET'
                                                                ),
                                                        'ADDRESS_OTHER_CITY' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Address Other City',
                                                                    'api_name' => 'ADDRESS_OTHER_CITY'
                                                                ),
                                                         'ADDRESS_OTHER_POSTCODE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Address Other Postcode',
                                                                    'api_name' => 'ADDRESS_OTHER_POSTCODE'
                                                                ),
                                                        'ORGANISATION_ID' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Organisation ID',
                                                                    'api_name' => 'ORGANISATION_ID'
                                                                ),
                                                        'TITLE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Title',
                                                                    'api_name' => 'TITLE'
                                                                ),
                                                        'TAGS' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Tags',
                                                                    'api_name' => 'TAGS'
                                                                ),
                                                        'CONTACT_ID' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Contact ID',
                                                                    'api_name' => 'CONTACT_ID'
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
                }elseif($module == 'organizations'){
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
                                                         'BACKGROUND' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Background',
                                                                    'api_name' => 'BACKGROUND'
                                                                ),
                                                        'IMAGE_URL' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Image urlL',
                                                                    'api_name' => 'IMAGE_URL'
                                                                ),
                                                        'DATE_CREATED_UTC' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Date Created UTC',
                                                                    'api_name' => 'DATE_CREATED_UTC'
                                                                ),
                                                        'LAST_ACTIVITY_DATE_UTC' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Last Activity Date UTC',
                                                                    'api_name' => 'LAST_ACTIVITY_DATE_UTC'
                                                                ),
                                                        'PHONE_FAX' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Phone Fax',
                                                                    'api_name' => 'PHONE_FAX'
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
                                                        'STATUS' => array(
                                                                    'system_mandatory' => 1,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Status',
                                                                    'api_name' => 'STATUS'
                                                                ),
                                                        'STARTED_DATE' => array(
                                                                    'system_mandatory' => 0,
                                                                    'field_read_only' => '',
                                                                    'display_label' => 'Start Date',
                                                                    'api_name' => 'STARTED_DATE'
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

