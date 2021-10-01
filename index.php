<!DOCTYPE html>
<html>
  <body>

  <?php include ('app/register.php');
    $data = array(
      "name" => "BATATA",
      "email" => "aaa@aaa.com"
    );
  register($data, 'DOCTOR');

  ?>

  <h1>Welcome to my home page!</h1>
  <p>Some text.</p>
  <p>Some more text.</p>

  </body>
</html>