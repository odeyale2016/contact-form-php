<?php 

//print_r($_POST)
$firstname=$_POST["first_name"];
$lastname=$_POST["last_name"];
$email=$_POST["email"];
$department=$_POST["department"];
$gender=$_POST["gender"];
$message=$_POST["message"];
$myfile = fopen($lastname.".txt", "w") or die("Unable to open file!");
$txt = $firstname."\n";
fwrite($myfile, $txt);
$txt = $lastname."\n";
fwrite($myfile, $txt);
$txt = $email."\n";
fwrite($myfile, $txt);
$txt = $department."\n";
fwrite($myfile, $txt);
$txt = $gender."\n";
fwrite($myfile, $txt);
$txt = $message."\n";
fwrite($myfile, $txt);
fclose($myfile);
echo "Message save successfully!";
?>