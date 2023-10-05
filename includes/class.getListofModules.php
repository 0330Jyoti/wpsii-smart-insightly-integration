<?php
class GetListofModules{
    
    public function execute($token){
        $getListModules = array(
                        'modules' => array(
                                            'key1' => array(
                                                        'creatable' => 1,
                                                        'deletable' => 1,
                                                        'api_name' =>  'Lead',
                                                        ),
                                            'key2' => array(
                                                        'creatable' => 1,
                                                        'deletable' => 1,
                                                        'api_name' =>  'Contact',
                                                        ),
                                        )
        );
        return $getListModules;
    }
}