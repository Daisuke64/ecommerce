<?php

/*
this is where we connect to the ecommerce database in the phpmyadmin
*/
function connection(){
    $servername = "localhost"; //this will point to the localhost server of phpmyadmin
    $username = "root"; //username used in accessing the phpmyadmin
    $password = ""; //for xampp it's blank; while MAMP the password is root
    $datebase = "ecommerce"; //the name of the datebase you want to connect

    //create a connection
    $conn = new mysqli($servername, $username, $password, $datebase);

    //Checking the connection
    if($conn->connect_error){
        //$conn->connect_error is a fixed variable the signals if we have an error connection
        //echo "Connection Faild";
        die("Connection faild:". $conn->connect_error);
    }else{
        //echo "successfully connected";
        return $conn;
    }
}

connection();


?>