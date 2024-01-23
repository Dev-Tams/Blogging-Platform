<?php

//static sites for Blog App
$router->get("/","controller/index.php");
$router->get("/about","controller/about.php");


$router->get("/blog","controller/blog/index.php")->only('guest');
$router->get("/blog/create", "controller/blog/create.php")->only('auth');



$router->patch("/post","controller/blog/update.php")->only('auth');
$router->post("/posts","controller/blog/store.php")->only('auth');
$router->delete("/post","controller/blog/destroy.php")->only('auth');

$router->get("/register", "controller/reg-user/create.php");
$router->post("/register", "controller/reg-user/store.php");

$router->get("/login", "controller/user/store.php");

