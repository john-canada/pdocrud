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

//name params

$sql = 'Select * from posts where id = :id';
$stmt = $pdo->prepare($sql); 
$stmt->execute(['id'=>$id]); 
$posts = $stmt->fetchAll();

if(!$posts){
    echo "no record";
}

foreach($posts as $post){
    echo $post->id.'<br>';
    echo $post->title.'<br>';
    echo $post->body.'<br>';
    echo $post->author.'<br>';
}

// $search="%i%";

// $sql='Select * from posts where title like ?';
// $stmt=$pdo->prepare($sql);
// $stmt->execute([$search]);
// $posts=$stmt->fetchAll();

// foreach($posts as $post){
//     echo $post->title .'<br>';
// }

// $sql = 'Select * from posts where author = :author && is_publish=:is_publish';
//$stmt->execute(['author'=>$author, 'is_publish'=>$is_publish]); 