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

$stmt=$pdo->query('Select * from posts');

while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
     echo $row['id'] .'<br>';
     echo $row['title'] .'<br>';
     echo $row['body'] .'<br>';
     echo $row['author'] .'<br>';
}
