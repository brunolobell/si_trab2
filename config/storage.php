<?php
  function writeXML($xmlString, $type){
    $xml = "";
    if ($type === "admin") {
      $xml = fopen("./storage/admin.xml", "w") or die ("Falha ao abrir arquivo!");
    } else if ($type === "doctors"){
      $xml = fopen("./storage/doctors.xml", "w") or die ("Falha ao abrir arquivo!");
    }else if ($type === "patients") {
      $xml = fopen("./storage/patients.xml", "w") or die ("Falha ao abrir arquivo!");
    }else {
      $xml = fopen("./storage/laboratories.xml", "w") or die ("Falha ao abrir arquivo!");
    }

    fwrite($xml, $xmlString);
  }


  function readXML($type){
    if ($type === "doctors") {
      return simplexml_load_file("./storage/doctors.xml");
    } else if ($type === "patients") {
      return simplexml_load_file("./storage/patients.xml");
    } else {
      return simplexml_load_file("./storage/laboratories.xml");
    }    
  }
?>