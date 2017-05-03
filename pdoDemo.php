<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2017/5/2
 * Time: 15:15
 */
//$mysqli = new mysqli("localhost","user","password","dbname");
try{
//    $pdo = new PDO("mysql:host=localhost;dbname=jsp_db","root","");
    $pdo = new PDO("mysql:host=localhost;dbname=jsp_db","root","");
}catch (PDOException $e){
    die("数据库连接失败".$e->getMessage());
}

print_r($pdo);