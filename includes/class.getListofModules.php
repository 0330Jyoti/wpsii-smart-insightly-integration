<?php
class GetListofModules{
    
    public function execute($token){
        $getListModules = array(
                        'modules' => array(
                                            'leads' => array(
                                                        'creatable' => 1,
                                                        'deletable' => 1,
                                                        'api_name' =>  'leads',
                                                        'plural_label' =>  'Leads',
                                                        ),
                                            'contacts' => array(
                                                        'creatable' => 1,
                                                        'deletable' => 1,
                                                        'api_name' =>  'Contacts',
                                                        'plural_label' =>  'Contacts',
                                                        ),
                                            'deals' => array(
                                                        'creatable' => 1,
                                                        'deletable' => 1,
                                                        'api_name' =>  'Deals',
                                                        'plural_label' =>  'Deal',
                                                        ),
                                            'organizations' => array(
                                                        'creatable' => 1,
                                                        'deletable' => 1,
                                                        'api_name' =>  'organizations',
                                                        'plural_label' =>  'Organizations',
                                                        ),
                                            'projects' => array(
                                                        'creatable' => 1,
                                                        'deletable' => 1,
                                                        'api_name' =>  'Projects',
                                                        'plural_label' =>  'Projects',
                                                        ),
                                        )
        );
        return $getListModules;
    }
}