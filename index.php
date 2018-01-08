<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/8 0008
 * Time: 15:21
 */

require 'model/Db.php';
require 'model/Model.php';
require 'model/StudentModel.php';

$controller = isset($_GET['c']) ? $_GET['c'] : 'Student';
$action = isset($_GET['a']) ? $_GET['a'] : 'listAll';

$controller .= 'Controller' ;

require 'controller/'.$controller.'.php';
//实例化自定义控制器
$stu = new $controller();

$stu->$action(); //根据学生id