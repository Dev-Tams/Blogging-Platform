<?php
use Core\App;
use Core\Database;



$db = App::resolve(Database::class);
 

$currentuser=1;

//fetxh posts to show
$note = $db->query ("SELECT * FROM posts WHERE id = :id" ,
[
 'id' =>$_GET['id']
 ])->findorfail();


 //authorize user 

 authorize($note['user_id']==$currentuser);

//if vlidated, returns result

 view('blog/show.php',
['post' => $post]);

