<?php
    $name = $email = $number = $facebook = $gender = $nameError = $emailError = $numberError = $facebookError = $genderError = "";
    
    function test_input($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
      if (empty($_POST["name"])) $nameErr = "You need to write your name";
      else 
      {
        $name = test_input($_POST["name"]);
        if (strlen($name) > 30) $nameErr = "You writed more than the chracters allowed (50)"; $name="";
        if (!preg_match("/^[A-Z ]*$/",$name)) $nameErr = "Only capital letters allowed"; $name="";
      }
      
      if (empty($_POST["email"])) $emailErr = "Email required";
      else 
      {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $emailErr = "Seems like your email is wrong"; $email="";
      }
        
      if (empty($_POST["number"])) $numcErr = "It is required your phone number";
      else 
      {
        $numc = test_input($_POST["number"]);
        if (!preg_match("/^[0-9]*$/",$numc)) $numcErr = "Only numbers allowed"; $numc="";
        if (strlen($numc) != 10) $numcErr = "It must be a 10 digit number"; $numc="";
      }
      
      if (empty($_POST["facebook"])) $facebookError = "You must add your facebook link";
      else 
      {
          $facebook = test_input($_POST["facebook"]);
          if (!filter_var($facebook, FILTER_VALIDATE_URL)) $facebookError = "You need to insert a valid url"; $facebook = "";
      }
    
      if (empty($_POST["gender"])) $genderErr = "You need to select a gender"; 
      else $gender = test_input($_POST["gender"]); 
    }
    
    function formInfoToTable($name, $email, $number, $gender, $facebook) {
        echo "
        <table border = '1'>
            <tr>
                <td>Name: </td>
                <td>".$name."</td>
            </tr>
            <tr>
                <td>Email: </td>
                <td>".$email."</td>
            </tr>
            <tr>
                <td>Number: </td>
                <td>".$number."</td>
            </tr>
            <tr>
                <td>Gender: </td>
                <td>".$gender."</td>
            </tr>
            <tr>
                <td>Facebook url: </td>
                <td>".$facebook."</td>
            </tr>
        <table>";
    }
?>