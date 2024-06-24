<?php

    // Cookie in PHP

    // Creating a cookie in php

    $cookie_name = "user";
    $cookie_value = "Arpit Mishra";

    setcookie($cookie_name,$cookie_value,time() + (86400*30),"/");


    // checking if cookie is set 
    if(!isset($_COOKIE[$cookie_name])){
        echo "Cookie Name: {$cookie_name} is not yet set!";
    }
    else{
        echo "Cookie is: {$cookie_name} is set now!" ."<br>";
        echo "Cookie Value is: {$cookie_value} is also set!" . "<br>"; 
    }
