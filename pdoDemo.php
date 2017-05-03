<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2017/5/3
 * Time: 15:22
 */


//1.连接数据库
try{
    $pdo=new PDO("mysql:host=localhost;dbname=jsp_db","root","");
}catch (PDOException $e){
    die("数据库连接失败".$e->getMessage());
}
//print_r($pdo);


//2.执行query(查询)返回的是一个预处理对象
    $sql = "select * from tbl_user";
    $stmt = $pdo->query($sql);
//    $list = $stmt->fetchAll();
//    $list = $stmt->fetchAll(PDO::FETCH_COLUMN);
    $list = $stmt->fetchAll(PDO::FETCH_ASSOC);

//3.解析数据（一次把所有的数据解析完）
    foreach($list as $val){
        echo $val['id']."-------".$val['name']."<br>";
    }
//4.释放资源
    $stmt = null;
    $pdo = null;


///////////////////////////////////////////////////////////////////////////////////////////
//pdoDemo2↓↓↓↓↓↓↓↓↓

//1.连接数据库
try{
    $pdo = new PDO("mysql:host=localhost;dbname=jikexueyuan","root","");
}catch(PDOException $e){
    die("数据库连接失败".$e->getMessage());
}

//这是一种快捷的方法
/* $sql = "select * from stu";
foreach($pdo->query($sql) as $val){
	echo $val['id']."-----".$val['name']."<br>";
} */

//$sql = "insert into stu values(null,'oracle','w',44)";
//$sql = "delete from stu where id=11";
$sql = "update stu set name='js' where id=3";
$res = $pdo->exec($sql);
if($res){
    echo "success";
}

