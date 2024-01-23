<?php
use Core\App;
use Core\Database;



$db = App::resolve(Database::class);



$currentuser=2;
//fetch user posts
$note = $db->query ("SELECT * FROM posts WHERE id = :id" ,
[
 'id' => $_POST['id']
 ])->findorfail();


//validates user
 authorize($note['user_id']==$currentuser);

    $db->query(" DELETE FROM posts WHERE id =:id", [
        'id' => $_POST['id'],
    ]);

    

//die session
    header('location: /notes');
    exit();
   
