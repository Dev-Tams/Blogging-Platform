<?php

require core('Validator.php');

use Core\App;
use Core\Database;



$db = App::resolve(Database::class);
 


$currentuser=1;




$note = $db->query ("SELECT * FROM posts WHERE id = :id" ,
[
 'id' =>$_GET['id']
 ])->findorfail();

 authorize($note['user_id']==$currentuser);
 
view('posts/edit.php',
 ['error' => [],
 'post'=>$post
]);

