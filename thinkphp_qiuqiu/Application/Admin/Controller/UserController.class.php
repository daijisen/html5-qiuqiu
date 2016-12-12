<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {

    public function index(){

        $userModel = M('users');
         // 取到所有对象


        // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
         $list = $userModel->order('pid')->page($_GET['p'].',2')->select();
         $this->assign('list',$list);
         // 赋值数据集
         $count = $userModel->count();
         // 查询满足要求的总记录数
         $Page = new \Think\Page($count,2);
         // 实例化分页类 传入总记录数和每页显示的记录数
         $show = $Page->show();
         // 分页显示输出
         $this->assign('page',$show);
         // 输出模板带入查询条件

        //分配数据
    	$this->display();
    }
    /*
	* 添加数据
    */
    public function create(){
    	// 1、分配用户分类数据

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
            $pid = I('pid');
            $userModel = M('users');
            $data = $userModel->find($pid);
            $this->assign('users',$data);
        $this->display();
    }

    public function update(){
        $userModel = M('users');
        $data = $userModel->create();
        if($userModel->save($data))
        {
            $this->success('数据更新成功！','index');
        }
        else{
            $this->error('数据更新失败');
        }
    }



    public function destory(){
        $pid = I('pid');
        $userModel = M('users');
        if($userModel->where("pid=$pid")->delete())
        {
            $this->success('数据删除成功!');
        }
        else{
            $this->error('数据删除失败！');
        }

    }


}