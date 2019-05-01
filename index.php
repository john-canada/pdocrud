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
// $stmt=$pdo->query('Select * from posts');

// while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
//      echo $row['title'] .'<br>';
// }

// while($row=$stmt->fetch()){
//     echo $row->title .'<br>';
//     echo $row->body .'<br>';
// }

# prepared statements(prepare && execute)

//positional params

$author = 'John';
$is_publish=true;
$id=1;

//  $sql = 'Select * from posts where author = ?';
// $stmt = $pdo->prepare($sql); 
// $stmt->execute([$author]); 
// $posts = $stmt->fetchAll();

//name params

$sql = 'Select * from posts where author = :author && is_publish=:is_publish';
$stmt = $pdo->prepare($sql); 
$stmt->execute(['author'=>$author, 'is_publish'=>$is_publish]); 
$posts = $stmt->fetchAll();


foreach($posts as $post){
    echo $post->id.'<br>';
    echo $post->title.'<br>';
    echo $post->body.'<br>';
    echo $post->author.'<br>';
}

// FETCH single

// $sql = 'Select * from posts where id = : id';
// $stmt = $pdo->prepare($sql); 
// $stmt->execute(['id' => $id]); 
// $post = $stmt->fetch();

// echo $post->body;
  

// row count

// $stmt=$pdo->prepare('Select * from posts where author = ? ');
// $stmt->execute([$author]);
// $postCount=$stmt->rowCount();

// echo $postCount;

// insert data
// $title='Post five';
// $body='This is post five';
// $author='John';

// $sql = 'INSERT INTO posts(title,body,author)VALUES(:title, :body, :author)';
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['title'=>$title, 'body'=>$body, 'author'=>$author]);

// echo 'Post added';


//update data
// $id=4;
// $title='Post four';
// $body='This is post four updated';


// $sql = 'UPDATE posts SET body = :body , title = :title where id = :id';
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['id'=>$id, 'body'=>$body, 'title'=>$title]);

// echo 'Post updated';


// delete data
//  $id=3;

//  $sql = 'DELETE FROM posts where id = :id';
//  $stmt = $pdo->prepare($sql);
//  $stmt->execute(['id'=>$id]);

//  echo 'Post deleted';

// search data
echo '<hr>';
$search="%i%";

$sql='Select * from posts where title like ?';
$stmt=$pdo->prepare($sql);
$stmt->execute([$search]);
$posts=$stmt->fetchAll();

foreach($posts as $post){
    echo $post->title .'<br>';
}

echo '<hr>';



// limit post
$author = 'JOhn';
$is_publish=true;
$id=1;
$limit=1;

$sql = 'Select * from posts where author = ? && is_publish= ? LIMIT ?';
$stmt = $pdo->prepare($sql); 
$stmt->execute([$author,$is_publish,$limit]); 
$posts = $stmt->fetchAll();

foreach($posts as $post){
    echo $post->id.'<br>';
    echo $post->title.'<br>';
    echo $post->body.'<br>';
    echo $post->author.'<br>';
}