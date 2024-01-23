<?php

namespace Core\Middleware

classs Guest{
    public function handler(){

        if(! $_SESSION['user'] ?? false){
            header('location:'/)
            exit();
        }

    }
}