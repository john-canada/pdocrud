<?php

$host='localhost';
$dbname='pdopost';
$user='root';
$pass='';

//set DSN
$dsn='mysql:host='.$host.';dbname='.$dbname;

// create PDO instance
$pdo = new PDO($dsn,$user,$pass);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);

//insert delete

$id=$_POST['id'];
$sql = 'DELETE FROM posts where id=:id';
$stmt = $pdo->prepare($sql);
$stmt->execute(['id'=>$id]);
echo "record deleted";
