<?php
class Home extends Controller{

    function default(){
        $this->view("landing", [
            "Title"=>"Hutech Test - Hệ thống thi trực tuyến",
            "Script"=>"landing",
            "Plugin" => [
                "jq-appear" => 1,
                "slick" => 1
            ]
        ]);
    }

}
?>