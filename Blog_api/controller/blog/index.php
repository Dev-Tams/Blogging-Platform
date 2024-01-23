<?php

require '../controller/nav.controller.php';

use Core\App;
use Core\Database;


//DB instantiation
$db = App::resolve(Database::class);


//query to fetch blog posts
$query= "SELECT * from posts where user_id = 1";
$post = $db->query($query)->get();

view('post/error.php', [
     'posts' => $post
] );

require '../views/blog/index.php';




