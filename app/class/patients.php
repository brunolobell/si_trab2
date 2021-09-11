<?php
  class Patients {
    private $name, $address, $phone, $email, $CPF;
    private $appointmentsList, $examsList;

    function __construct($name, $address, $phone, $email, $CPF){
      $this->name = $name;
      $this->address = $address;
      $this->phone = $phone;
      $this->email = $email;
      $this->CPF = $CPF;

    }

    public function getData(){
      return [
        "name" => $this->name,
        "address" => $this->address,
        "phone" => $this->phone,
        "email" => $this->email,
        "CPF" => $this->CPF,
      ];
    }

    protected function getAppountments(){
      return $this->appointmentsList;
    }

    protected function setData($data, $type) {
      if ($type === 'name'){
        $this->name = $data;
      } else if ($type === 'address') {
        $this->address = $data;
      } else if ($type === 'phone') {
        $this->phone = $data;
      } else if ($type === 'email') {
        $this->email = $data;
      } else {
        $this->CPF = $data;
      }
    }
  }
?>