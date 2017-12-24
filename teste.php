<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios WHERE idusuario = :ID"); 

$id = 2;

$stmt->bindParam(":ID",$id);
$stmt->execute();



var_dump($stmt->fetchALL(PDO::FETCH_ASSOC));


?>
