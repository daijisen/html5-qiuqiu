<?php
namespace Home\Controller;
use Think\Controller;
class CommentController extends Controller {
    public function index(){
       $aid = I('aid');
       $data['id'] =  intval($aid);
       $this->assign('aid',$data);
       $this->display();
    }
    public function store(){
            //生成模型对象
            if(isset($_SESSION['uid'])){
                $pid = $_SESSION['uid'];
                $aid = $_GET['aid'];
                $repModel = M('reply');
                // 根据表单提交的POST数据创建数据对象
                $data = $repModel->create();

                 $time = date("Y-m-d H:i:s");
                 $data['time'] = $time;
                 $data['aid'] = $aid;
                 $data['pid'] = $pid;



                if($repModel->add($data))
                {
                     $this->redirect("Index/index");
                }
                else{
                    $this->error('数据添加失败');
                }
            }else{
                $this->error('对不起你不能评论，请先登录！！');
            }

    }


}