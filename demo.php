<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/5 0005
 * Time: 11:14
 */

require "model/Db.php";

$db = Db::getInstance();//获得db类
$sql = "UPDATE STUDENT SET grade=99 where id =1 ";

$db->exce($sql);
echo "成功{$db->num}条记录";