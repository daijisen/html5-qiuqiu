<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {

    public function index(){
    	$this->display();
    }
    /*
	* 添加数据
    */
    public function create(){
    	// 1、分配客房分类数据

    	// 实例化User模型
    	$categoryModel = M('users');
    	// 取到所有对象
    	$data = $categoryModel -> select();
    	//分配数据
    	$data = $this->assign('users',$data);

    	//2、显示视图文件
    	$this->display();
    }
	/*
	* 添加数据到数据库
    */
    public function store(){
    	//生成模型对象
    	$usersModel = M('users');
    	// 根据表单提交的POST数据创建数据对象
    	$data = $usersModel->create();
    	//dump($data);
    	//exit;
    	if($usersModel->add($data))
    	{
    		$this->success('数据添加成功','index');
    	}
    	else{
    		$this->error('数据添加失败');
    	}
    }

    public function edit(){
        $rid = I('id');
        $usersModel = M('users');
        $select=$usersModel->join('categorys ON rooms.cid = categorys.id')->select();
        $data = $roomModel->find($rid);
        $this->assign('rooms',$data);
        $this->assign('select',$select);
        $this->display();
    }

    public function update(){
        $roomModel = M('users');
        $data = $roomModel->create();
        if($roomModel->save($data))
        {
            $this->success('数据更新成功！','index');
        }
        else{
            $this->error('数据更新失败');
        }
    }

    public function destory(){
        $rid = I('pid');
        $roomModel = M('users');
        if($roomModel->where("pid=$pid")->delete())
        {
            $this->success('数据删除成功!');
        }
        else{
            $this->error('数据删除失败！');
        }

    }


}