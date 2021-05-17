<?php
 if(isset($_POST['submit'])){
    $file = $_FILES['file'];
    print_r($file);
    $fileName = $file['file']['name'];
    $fileTempName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileType =  $_FILES['file']['type'];
    $fileError = $_FILES['file']['error'];

    $fileExp = explode('.', $fileName);
    $fileExt = strtolower(end($fileExp));
 }

echo "<br><br><br><br>";
echo "POST:<br>";
var_dump($_POST);



?>