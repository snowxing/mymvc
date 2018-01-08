<?php

/**
 * 公共模型
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/5 0005
 * Time: 14:20
 */
class Model
{
    protected $db = null;

    public $data = null; //当前所有数据

    public function __construct()
    {
        $this->init();
    }

    private function init()
    {
        $dbConfig = [
            'user' => 'zcx',
            'pass' => '123456',
            'dbname' => 'edu'
        ];

        $this->db = Db::getInstance($dbConfig);
    }

    public function getAll($id)
    {
        $sql = "select * from student WHERE id={$id}";

        return $this->data = $this->db->fetchAll($sql);
    }

}