<?php
  function validadeData($data, $type) {
    $regex = '';

    if ($type === 'name'){
      $regex = "/^[a-zA-Z]+$/";
    } else if ($type === 'email'){
      $regex = "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
    } else if ($type === 'phone') {
      $regex = "/(\d{2})\D*(\d{5}|\d{4})\D*(\d{4})$/";
    } else if ($type === 'crm') {
      $regex = "/^\d+$/";
    } else if ($type === 'cpf') {
      $regex = "/^\d{3}\.\d{3}\.\d{3}\-\d{2}$/";
    } else if ($type === 'cnpj') {
      $regex = "/^\d{2}\.\d{3}\.\d{3}\/\d{4}\-\d{2}$/";
    } 

    if (preg_match($regex, $data)) {
      return true;
    } 
    return $type;
  }
?>