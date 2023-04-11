<?php 
    ini_set('display_errors', true);
    session_start();

    $email ="";
    $password = "";
    // Checking for a POST request
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = test_input($_POST["email"]?? null);
        validate_input(['data'=>$email, 'name'=>'email']);

        $password = test_input($_POST["password"] ?? null);
        validate_input(['data'=>$password, 'name'=>'password']);

        $_SESSION['auth'] = [
          'name' => 'Edward Muhammed',
          'email' => $email,
      ];
        header('Location: ../dashboard.php');
        exit;
      }

      // Removing the redundant HTML characters if any exist.
      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      function validate_input($input=['data'=>null, 'name'=>'name']){
        if(is_null($input['data']))
        $_SESSION['errors'] = array_merge($_SESSION['errors'],['The'.$input['name'].' field is requred']);
      }
?>