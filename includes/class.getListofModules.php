<?php
class GetListofModules{
    
    public function execute($token){
        $getListModules = array(
                        'modules' => array(
                                            'lead' => array(
                                                        'creatable' => 1,
                                                        'deletable' => 1,
                                                        'api_name' =>  'Lead',
                                                        ),
                                            'contact' => array(
                                                        'creatable' => 1,
                                                        'deletable' => 1,
                                                        'api_name' =>  'Contact',
                                                        ),
                                        )
        );
        return $getListModules;
    }
}