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


$id=$_POST['id'];
$title=$_POST['title'];
$body=$_POST['body'];
$author=$_POST['author'];

$sql = 'UPDATE posts SET body = :body , title = :title where id = :id';
$stmt = $pdo->prepare($sql);
$stmt->execute(['id'=>$id, 'body'=>$body, 'title'=>$title]);

echo 'Post updated';

 