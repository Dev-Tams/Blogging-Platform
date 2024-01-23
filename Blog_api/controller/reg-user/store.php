<?php

use Core\Validator;

$email =$_POST['email'];
$password =$_POST['password'];

//validate inputs
$errors = [];

if (Validator::email($email)){
    $errors['email'] = "Please provide a valid email";
}

if (Validator::password($password)){
    $errors['password'] = "Use a strong password";
}


//if errors are empty e return a view
if (! empty($errors)){
    return view("reg-user/create.php", [
        'errors' => $errors
    ]);


//check if email exists already 
$db = App::resolve(Database::class);

$db->query('select * from usere where email:email', [
    "email" => $email
    ])->find();


    //if yes, redirect to a login page.
    if($user){
        
        header('location: /login');
    }else{
        $db->query('INSERT INTO users(email, password) VALUES(:email, :password)', [
            'email' => $email,
            'password'=> password_hash($password, PASSWORD_DEFAULT)
        ]);

        $_SESSION['user']=[
            'email' => $email
        ];

        header('location:/login');
        exit();
    }
};