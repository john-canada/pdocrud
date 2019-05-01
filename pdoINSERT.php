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

//insert data
$title=$_POST['title'];
$body=$_POST['body'];
$author=$_POST['author'];

$sql = 'INSERT INTO posts(title,body,author)VALUES(:title, :body, :author)';
$stmt = $pdo->prepare($sql);
$stmt->execute(['title'=>$title, 'body'=>$body, 'author'=>$author]);
echo "record add";
