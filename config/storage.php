<?php
  function createXML($type){
    $xml = fopen($type . ".xml", "w") or die ("Error to create file " . $type . ".xml");
    $newString = "<?xml version='1.0' encoding='UTF-8'?>
                  <{$type}s></{$type}s>";
    fwrite($xml, $newString);
  }

  function writeXML($xmlString, $type){
    $xml = "";
    if ($type === "admin") {
      $xml = fopen("./storage/admin.xml", "a") or die ("Falha ao abrir arquivo!");
    } else if ($type === "doctors"){
      $xml = fopen("./storage/doctors.xml", "a") or die ("Falha ao abrir arquivo!");
    }else if ($type === "patients") {
      $xml = fopen("./storage/patients.xml", "a") or die ("Falha ao abrir arquivo!");
    }else {
      $xml = fopen("./storage/laboratories.xml", "a") or die ("Falha ao abrir arquivo!");
    }

    fwrite($xml, $xmlString);
    fclose($xml);
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