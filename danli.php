<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/4 0004
 * Time: 11:36
 */

class Danli
{
    private $name;
    //静态私有属性，记录当前类的实例
    private static $instance = null;

    //构造方法私有化，禁用外部new
    private function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    //禁用clone
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public static function getInstance()
    {
        if(!self::$instance instanceof self){
            self::$instance = new self();
        }

        return self::$instance;
    }

}

$obj1 = Danli::getInstance();
$obj1->setName('zhang');
$a = $obj1->getName();
$obj2 = Danli::getInstance();
$obj2->setName('chang');
$b = $obj2->getName();
var_dump($a, $b);