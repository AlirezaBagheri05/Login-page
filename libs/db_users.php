<?php

function add_tb_User($table_name){
    $link = mysqli_connect(SERVER_NAME,USER_NAME,USER_PASSWORD,db_name);
    $qrd = "create table $table_name(
            id int primary key auto_increment,
            name LONGTEXT not null,
            family LONGTEXT not null,
            phone LONGTEXT not null,
            date LONGTEXT not null,
            date_user LONGTEXT not null,
            model LONGTEXT not null,
            ip LONGTEXT not null,
            resulotion LONGTEXT not null
            )";
     mysqli_query($link,$qrd);
     mysqli_close($link);    
    
}
function add_tb_admin($table_name){
    $link = mysqli_connect(SERVER_NAME,USER_NAME,USER_PASSWORD,db_name);
    $qrd = "create table $table_name(
            id int primary key auto_increment,
            name varchar(30) not null,
            password varchar(30) not null
            )";
     mysqli_query($link,$qrd);
     mysqli_close($link);    
    
}
function get_dates($table_name){
    $link = mysqli_connect(SERVER_NAME,USER_NAME,USER_PASSWORD,db_name);
    $qrd = "SELECT * FROM `$table_name` ";
    $result = mysqli_query($link, $qrd);
    $dates = array();
    while($row = mysqli_fetch_array($result)){
        $dates[]= $row;
    }
    return $dates;
    mysqli_close($link);
}

function get_admin($table_name,$name){
    $link = mysqli_connect(SERVER_NAME,USER_NAME,USER_PASSWORD,db_name);
    $qrd = "SELECT * FROM `$table_name` WHERE `name` = '$name' ";
    $result = mysqli_query($link, $qrd);
     $row = mysqli_fetch_array($result);
    return $row;
    mysqli_close($link);
}

function get_fara_user($table_name,$email){
    $link = mysqli_connect(SERVER_NAME,USER_NAME,USER_PASSWORD,db_name);
    $qrd = "SELECT * FROM `$table_name` WHERE `email` = '$email' ";
    $result = mysqli_query($link, $qrd);
     $row = mysqli_fetch_array($result);
    return $row;
    mysqli_close($link);
}
function get_phone_user($table_name,$phone){
    $link = mysqli_connect(SERVER_NAME,USER_NAME,USER_PASSWORD,db_name);
    $qrd = "SELECT * FROM `$table_name` WHERE `phone` = '$phone' ";
    $result = mysqli_query($link, $qrd);
     $row = mysqli_fetch_array($result);
    return $row;
    mysqli_close($link);
}


function add_fara_User($table_name){
    $link = mysqli_connect(SERVER_NAME,USER_NAME,USER_PASSWORD,db_name);
    $qrd = "create table $table_name(
            id int primary key auto_increment,
            email varchar(100) not null,
            password varchar(100) not null
            )";
     mysqli_query($link,$qrd);
     mysqli_close($link);    
    
}