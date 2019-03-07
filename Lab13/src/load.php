<?php
if(isset($_POST['submitImage'])) { 
    $filepath = "../image/" . $_FILES["file"]["name"];
    if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath))
        echo "<img src=".$filepath." height=480 width=720 />";
    else echo "We couldn't upload your image";
}
?>