<?php

/**
 * 学生模块控制器
 * Date: 2018/1/8 0008
 * Time: 15:03
 */
class StudentController
{
    public function listAll()
    {
        $stu = new StudentModel();

        $data = $stu->getAll();
        print_r($data);
    }

    public function listOne($id = 2)
    {
        $id = isset($_GET['id']) ? $_GET['id'] : $id;
        $stu = new StudentModel();

        $data = $stu->get($id);
        print_r($data);
    }

}