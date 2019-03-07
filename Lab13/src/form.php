<!DOCTYPE html>
<?php
session_start();
if(!$_SESSION['name']) logout();
if(isset($_POST['logout'])) logout();
function logout(){
  session_unset();
  session_destroy();
  header("location: https://daw-bd-maneroto.c9users.io/Lab13/login.php");
}
?>
<html>
    <head>
        <title>Lab 13 DAW-BD</title>
        <meta charset = "utf-8">
    </head>
    <body>
        <?php require_once("validation.php")?>
        <h1>Form que valida información del usuario</h1>
        <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "post">
            <label for="name">Nombre: </label><input type="text" name="name" value = "<?php echo $name;?>"/>
            <span class = "error"><?php echo $nameError;?></span><br>
            <label for="email">Email: </label><input type="email" name="email" value = "<?php echo $email;?>"/>
            <span class = "error"><?php echo $emailError;?></span><br>
            <label for="number">Number: </label><input type="number" name="number value = "<?php echo $number;?>""/>
            <span class = "error"><?php echo $numberError;?></span><br>
            <label for="facebook">Facebook url: </label><input type="url" name="facebook" value = "<?php echo $facebook;?>"/>
            <span class = "error"><?php echo $facebookError;?></span><br>
            <label for="gender">Gender: </label>
            <input type="radio" name="gender" <?php if(isset($gender) && $gender == "male") echo "checked";?> value = "male"/> Male
            <input type="radio" name="gender" <?php if(isset($gender) && $gender == "female") echo "checked";?> value = "female"/> Female
            <input type="submit" value="Submit"/><br>
            <span class = "error"><?php echo $genderError;?></span>
        </form>
        <?php echo formInfoToTable($name, $email, $number, $gender, $facebook)?>
        <h1>Load Image</h1>
        <form action="load.php" enctype="multipart/form-data" method="post">
          <input type="file" name="file"><br/>
          <input type="submit" name="submitImage" value="Submit"> <br/>
        </form>
    </body>
</html>