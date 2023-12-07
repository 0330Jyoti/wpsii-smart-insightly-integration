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
                                        )
        );
        return $getListModules;
    }
}