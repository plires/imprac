<?php

$origen="Download";
$email= $_POST['email_download'];
$date = date("d-M-y H:i");

$dsn = 'mysql:host=localhost;dbname=impracco_imprac;port:3306';
$db_user = 'impracco_plires';
$db_pass = 'perezzs7478';

$db = new PDO($dsn, $db_user, $db_pass);

$sql = "INSERT INTO downloads values(default, :email, :origen, :date)";
$stmt = $db->prepare($sql);

$stmt->bindValue(":email", $email, PDO::PARAM_STR);
$stmt->bindValue(":origen", $origen, PDO::PARAM_STR);
$stmt->bindValue(":date", $date, PDO::PARAM_STR);

$stmt->execute();

$db = null;

include_once('download.php');


?>
