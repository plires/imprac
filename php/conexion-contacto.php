<?php

$dsn = 'mysql:host=localhost;dbname=impracco_imprac;port:3306';
$db_user = 'impracco_plires';
$db_pass = 'perezzs7478';

$db = new PDO($dsn, $db_user, $db_pass);

$sql = "INSERT INTO contacts values(default, :name, :email, :comments, :origen, :date)";
$stmt = $db->prepare($sql);

$stmt->bindValue(":name", $name, PDO::PARAM_STR);
$stmt->bindValue(":email", $email, PDO::PARAM_STR);
$stmt->bindValue(":comments", $comments, PDO::PARAM_STR);
$stmt->bindValue(":origen", $origen, PDO::PARAM_STR);
$stmt->bindValue(":date", $date, PDO::PARAM_STR);

$stmt->execute();

$db = null;

?>
