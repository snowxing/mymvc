<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/5 0005
 * Time: 11:14
 */

require "model/Db.php";

$dbConfig = [
    'db' => 'mysql',
    'host' => 'PC-20170512FUIH',
    'port' => '3307',
    'user' => 'zcx',
    'pass' => '123456',
    'charset' => 'utf8',
    'dbname' => 'edu'
];

$db = Db::getInstance($dbConfig);//获得db类
$sql = "UPDATE student SET grade=92 where id =1 ";
$sql2 = "select * from student ";
//echo "11";
$db->exec($sql);
var_dump($db->fetchAll($sql2)) ;
var_dump("成功{$db->num}条记录");