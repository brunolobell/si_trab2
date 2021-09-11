<?php
    class admin {
        private $username, $password;
        
        function __construct($username, $password){
            $this->name = $username;
            $this->address = $password;
          }
        
        function fstart (){
            $xml_filename='\config\storage\storage.xml';
            if(file_exists($xml_filename)) {
                fopen('\config\storage\storage.xml','r');
            }
            if (filesize($xml_filename)==0){
                //create tags of xml
            }
        }
    }

?>