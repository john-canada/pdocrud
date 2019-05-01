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
echo "<div class='container'>";
echo "<h1>Update file</h1>";
echo "<form method='post' action='pdoupdated.php'>";
 foreach($posts as $post){
    echo " <input type='hidden' name='id' value='".$post->id."'><br>";  
    echo " <input type='text' name='title' value='".$post->title."'></br>";
    echo " <input type='text' name='body' value='".$post->body."'></br>";
    echo " <input type='text' name='author' value='".$post->author."'></br>";
    echo "<input type='submit'>";
   }
echo "</form>";
 echo "</div>";