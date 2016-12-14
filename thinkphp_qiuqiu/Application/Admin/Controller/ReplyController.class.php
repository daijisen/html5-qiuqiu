<?php
namespace Admin\Controller;
use Think\Controller;
class ReplyController extends Controller {

        public function index(){

            $replyModel = M('reply');
             // 取到所有对象

            // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
             $list = $replyModel->order('repid desc')->page($_GET['p'],'4')->select();
             dump($list);
             $this->assign('list',$list);
             // 赋值数据集
             $count = $replyModel->count();
             // 查询满足要求的总记录数
             $Page = new \Think\Page($count,4);
             // 实例化分页类 传入总记录数和每页显示的记录数
             $show = $Page->show();
             // 分页显示输出
             $this->assign('page',$show);
             // 输出模板带入查询条件

            //分配数据
        	$this->display();
        }



        public function store(){
        	//生成模型对象
        	$replyModel = M('reply');
        	// 根据表单提交的POST数据创建数据对象
        	$data = $replyModel->create();
             $time = date("Y-m-d H:i:s");
             $data['time'] = $time;
        	if($replyModel->add($data))
        	{
                 $this->success('数据添加成功','index');
        	}
        	else{
        		$this->error('数据添加失败');
        	}
        }


         public function destoryBatch(){
                $replyModel = M('reply');
               $getid = I('id'); //获取选择的复选框的值

               if (!$getid) $this->error('未选择记录'); //没选择就提示信息

               $getids = implode(',', $getid); //选择一个以上，就用,把值连接起来(1,2,3)这样

               $id = is_array($getid) ? $getids : $getid; //如果是数组，就把用,连接起来的值覆给$id,否则就覆获取到的没有,号连接起来的值

               if($replyModel->where("repid IN ($id )")->delete())
               {
                     $this->success('数据删除成功!');
               }
               else{
                     $this->error('数据删除失败！');
               }


            }

        public function destory(){
            $repid = I('repid');
            $replyModel = M('reply');
            if($replyModel->where("repid=$repid")->delete())
            {
                $this->success('数据删除成功!');
            }
            else{
                $this->error('数据删除失败！');
            }

        }






}