
<?php
    //o root é sempre o de onde esta o index
  include ('class/admin.php');
  include ('class/doctors.php');
  include ('class/patients.php');
  include ('class/laboratories.php');
  include ('config/validations.php');
 
  function register($data, $type){
    foreach ($data as $key => $value) {
      $validation = validadeData($value, $key);
      if ($validation != true){
        return "Error: {$key}";
      }
    }

    switch ($type) {
      case 'DOCTOR':
        $newData = new Doctor(data['name'], data['address'], data['phone'], data['email'], data['CRM'], data['experetise'], data['password']);  
        echo "Doctor {data['name']} was registred!";
        break;

      case 'PATIENTS':
        $newData = new Patient(data['name'], data['address'], data['phone'], data['email'], data['CPF']);  
        echo "Patient {data['name']} was registred!";
        break;
      
      case 'LABORATORIES':
        $newData = new Laboratory(data['name'], data['address'], data['phone'], data['email'], data['CNPJ'], data['password']);  
        echo "Doctor {data['name']} was registred!";
        break;

      default:
        echo "Error: The passed type was not supported!"
        break;
    }
    return $newData;
  }
?>