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
                                            'contact' => array(
                                                        'creatable' => 1,
                                                        'deletable' => 1,
                                                        'api_name' =>  'Contact',
                                                        'plural_label' =>  'Contact',
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