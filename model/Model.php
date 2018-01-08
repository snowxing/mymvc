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
            'db' => 'mysql',
            'host' => 'PC-20170512FUIH',
            'port' => '3307',
            'user' => 'zcx',
            'pass' => '123456',
            'charset' => 'utf8',
            'dbname' => 'edu'
        ];

        $this->db = Db::getInstance($dbConfig);
    }

    /**
     * 获得多条数据
     * @return mixed
     */
    public function getAll()
    {
        $sql = "select * from student";

        return $this->data = $this->db->fetchAll($sql);
    }

    /**
     * 获得1条数据
     * @param $id
     *
     * @return mixed
     */
    public function get($id)
    {
        $sql = "select * from student WHERE id={$id}";

        return $this->data = $this->db->fetch($sql);
    }

}