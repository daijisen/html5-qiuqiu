<?php
namespace Admin\Controller;
use Think\Controller;
class TeamController extends Controller {
    public function index(){
    	$meetModel = M('team');
    	$data = $meetModel->select();
    	$this->assign('meet',$data);
    	$this->display();
    }

    public function create(){
    	$this->display();
    }

    public function store(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize=3145728 ;// 设置附件上传大小
        $upload->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  = THINK_PATH; // 设置附件上传根目录
        $upload->savePath  ='../Public/uploads/'; // 设置附件上传（子）目录
        // 上传文件 
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功
            
            $meetModel = M('meetings');
            
            $data = $meetModel->create();
            $data['thumb']=$info['thumb']['savepath'].$info['thumb']['savename'];
        
            //添加
            if($meetModel->add($data)){
                $this->success('数据添加成功了呀', 'index');
            }else{
                $this->showError('数据添加失败');
            }
        }
    }

    public function edit(){
        $id = I('id');
        $meetModel = M('meetings');
        $data = $meetModel->find($id);

        $this->assign('meet',$data);
        $this->display();
        
    }

    public function update(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize=3145728 ;// 设置附件上传大小
        $upload->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  = THINK_PATH; // 设置附件上传根目录
        $upload->savePath  ='../Public/uploads/'; // 设置附件上传（子）目录
        // 上传文件 
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功
            //$this->success('上传成功！');
            //创建模型
            $meetModel = M('meetings');
            //组织数据
            $data = $meetModel->create();

            //设置thumb字段属性(目录+名字)
            $data['thumb']=$info['thumb']['savepath'].$info['thumb']['savename'];
        
            //添加
            if($meetModel->save($data)){
                $this->success('数据更新成功', 'index');
            }else{
                $this->showError('数据更新失败');
            }
        }
    }

    public function destory(){
    	$id = I('id');
    	$meetModel = M('meetings');
    	if($meetModel->where("id=$id")->delete())
    	{
    		$this->success('数据删除成功了哈  ^_^');
    	}
    	else{
    		$this->error('很不幸的告诉你..删除失败了 TAT');
    	}
    }



}






