<?php
class GetListofModules{
    
    public function execute($token){
        $getListModules = array(
                        'modules' => array(
                                            'lead' => array(
                                                        'creatable' => 1,
                                                        'deletable' => 1,
                                                        'api_name' =>  'Lead',
                                                        'plural_label' =>  'Lead',
                                                        ),
                                            'contacts' => array(
                                                        'creatable' => 1,
                                                        'deletable' => 1,
                                                        'api_name' =>  'Contacts',
                                                        'plural_label' =>  'Contacts',
                                                        ),
                                            'deal' => array(
                                                        'creatable' => 1,
                                                        'deletable' => 1,
                                                        'api_name' =>  'Deal',
                                                        'plural_label' =>  'Deal',
                                                        ),
                                            'organization' => array(
                                                        'creatable' => 1,
                                                        'deletable' => 1,
                                                        'api_name' =>  'Organization',
                                                        'plural_label' =>  'Organization',
                                                        ),
                                            'project' => array(
                                                        'creatable' => 1,
                                                        'deletable' => 1,
                                                        'api_name' =>  'Project',
                                                        'plural_label' =>  'Project',
                                                        ),
                                        )
        );
        return $getListModules;
    }
}