<?php
namespace Admin\Controller;
use Think\Controller;
class NewsController extends Controller {
    public function index(){
    	$newsModel = M('news');
    	$data = $newsModel->select();
    	$this->assign('news',$data);
    	$this->display();
    }

    public function create(){
    	$this->display();
    }

    public function store(){
    	$newsModel=M('news');
    	// 根据表单提交的POST数据创建数据对象
    	$data = $newsModel->create();
    	$data['inputtime'] = time();
    	$data['updatetime'] = $data['inputtime'];

    	if($newsModel->add($data))
    	{
    		$this->success('数据添加成功了哈  ^_^','index');
    	}
    	else
    	{
    		$this->error('很不幸的告诉你..数据添加失败了呢 TAT');
    	}
    }

    public function edit(){
    	$id = I('id');
    	$newsModel = M('news');
    	$data = $newsModel->find($id);
    	$this->assign('news',$data);
    	$this->display();
    }

    public function update(){
    	$newsModel = M('news');
    	$data = $newsModel->create();
    	if($newsModel->save($data))
    	{
    		$this->success('数据编辑成功了哈  ^_^','index');
    	}
    	else{
    		$this->error('很不幸的告诉你..数据编辑失败了呢 TAT');
    	}
    }

    public function destory(){
    	$id = I('id');
    	 $newsModel = M('news');
    	if($newsModel->where("id=$id")->delete())
    	{
    		$this->success('数据删除成功了哈  ^_^');
    	}
    	else
    	{
    		$this->error('很不幸的告诉你..数据删除失败了呢 TAT');
    	}
    }


  


}