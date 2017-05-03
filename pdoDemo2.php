<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2017/5/2
 * Time: 15:15
 */


/**
 *[PDO]
 * pdo.dsn.mysqlpdo = "mysql:host=localhost;dbname=jsp_db"
 *
 */

//$mysqli = new mysqli("localhost","user","password","dbname");
try{
//    1.$pdo = new PDO("mysql:host=localhost;dbname=jsp_db","root","");
//    2.$pdo = new PDO("uri:mysqlpdo.ini","root","");
//    3.$pdo = new PDO("mysqlpdo","root","");
    $pdo = new PDO("mysqlpdo","root","");
    $pdo->setAttribute(PDO::ATTR_AUTOCOMMIT,0);
}catch (PDOException $e){
    die("数据库连接失败".$e->getMessage());
}
    //echo $pdo->getAttribute(PDO::ATTR_CLIENT_VERSION);
    //echo $pdo->getAttribute(PDO::ATTR_SERVER_INFO);
    echo $pdo->getAttribute(PDO::ATTR_AUTOCOMMIT);
    echo "<br>";
print_r($pdo);