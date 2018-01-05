<?php

/**
 * Created by PhpStorm.
 * 数据库基本操作
 * User: Administrator
 * Date: 2018/1/4 0004
 * Time: 14:35
 */
class Db
{
    private $dbConfig = [
        'db' => 'mysql',
        'host' => 'localhost',
        'port' => '3306',
        'user' => 'root',
        'pass' => 'root',
        'charset' => 'utf8',
        'dbname' => 'edu'
    ];

    //新增主键Id
    public $insertId = null;

    public $num = 0;

    private static $instance = null;

    private $conn = null;

    private function __construct($config)
    {
        $this->dbConfig = array_merge($this->dbConfig,$config);

        $this->connent();
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public static function getInstance($config=[])
    {
        if(!self::$instance instanceof self){
            self::$instance = new self($config);
        }

        return self::$instance;
    }

    private function connent(){
        try{
            $dsn = "{$this->dbConfig['db']}:host={$this->dbConfig['host']};port={$this->dbConfig['port']};
            dbname={$this->dbConfig['dbname']};charset={$this->dbConfig['charset']}";

            $this->conn = new PDO($dsn, $this->dbConfig['user'], $this->dbConfig['pass']);

            $this->conn->query("SET NAMES {$this->dbConfig['charset']}");

        }catch(PDOException $e){
            die('数据库链接失败'.$e->getMessage());
        }
    }

    /**
     * 添加修改操作
     * @param $sql
     */
    public function exec($sql){
        $num = $this->conn->exec($sql);
        if($num > 0){
            if(null !==$this->conn->lastInsertId()){
                $this->insertId = $this->conn->lastInsertId();
            }
            $this->num = $num;
        }else{
            $error = $this->conn->errorInfo();
            print '操作失败'.$error[0].$error[1].$error[2];
        }
    }

    /**
     * @param $sql
     * 查询一条
     * @return mixed
     */
    public function fetch($sql){

        return $this->conn->query($sql)->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * @param $sql
     * 查询多条
     * @return mixed
     */
    public function fetchAll($sql){

        return $this->conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
}