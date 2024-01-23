<?php


use Core\App;
use Core\Database;

use Core\Validator;

require core('Validator.php');

$db = App::resolve(Database::class);


//validate the inputs
$error=[];


    if (Validator::text($_POST['body'])){
        $error['body']='this input is required';
    }

    //if no errors, inserts to DB
    if(empty($error)){
    $db->query("INSERT INTO posts (body, user_id) VALUES( :header, :user_id)",[
        'body'=> $_POST['body'],
        'user_id' => 1
    ]);
//proceeds to store if no errors
    if(!empty($error)){

        return view('blog/show.php', [
            'error' => $error,
            'post' => $post
        ]);

    
}
    }
 header('location: /posts');
  die();