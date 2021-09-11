<?php
  class Doctor {
    private $name, $address, $phone, $email, $CRM, $expertise, $password;
    protected $patientsList;


    function __construct($name, $address, $phone, $email, $CRM, $expertise, $password){
      $this->name = $name;
      $this->address = $address;
      $this->phone = $phone;
      $this->email = $email;
      $this->CRM = $CRM;
      $this->expertise = $expertise;
      $this->password = $password;
    }

    public function getData(){
      return [
        "name" => $this->name,
        "address" => $this->address,
        "phone" => $this->phone,
        "email" => $this->email,
        "expertise" => $this->expertise,
        "CRM" => $this->CRM,
        "password"=>$this->password,
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
      } else if ($type === 'expertise') {
        $this->expertise = $data;
      } else if ($type==='CRM'){
        $this->CRM = $data;
      }else if ($type === 'password'){
        $this->password=$data;
      }
    }

    protected function addAppointment($newAppoitment){
      array_push($this->appointmentsList, $newAppoitment);
    }
  }
?>