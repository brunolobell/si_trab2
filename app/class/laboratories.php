<?php
  class Laboratories {
    public $name, $address, $phone, $email, $CNPJ;
    private $password;

    function __construct($name, $address, $phone, $email, $CNPJ,$password){
      $this->name = $name;
      $this->address = $address;
      $this->phone = $phone;
      $this->email = $email;
      $this->CNPJ = $CNPJ;
      $this->password=$password;
    }

    public function getData(){
      return [
        "name" => $this->name,
        "address" => $this->address,
        "phone" => $this->phone,
        "email" => $this->email,
        "CNPJ" => $this->CNPJ,
        "password"=>$this->password
      ];
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
      } else if ($type==='CNPJ') {
        $this->CNPJ = $data;
      }else if ($type==='password') {
        $this->password=$data;
      }
    }
  }
?>