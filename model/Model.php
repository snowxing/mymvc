<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/5 0005
 * Time: 14:20
 */
class Model
{
    protected $db = null;

    public function __construct()
    {
        $this->init();
    }

    private function init()
    {
        $dbConfig = [
          'user' => 'zcx'
        ];
    }

}