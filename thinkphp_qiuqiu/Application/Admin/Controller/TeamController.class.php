<?php
namespace Admin\Controller;
use Think\Controller;
class TeamController extends Controller {
    public function index(){


             // 取到所有对象

//查询每个队伍中的总人数
             $teamModel = new \Think\Model();
             $sql = "select y.*,num from team y,(select *,count(*) num from team group by aid) x where y.aid = x.aid order by tid";
             $list = $teamModel->page($_GET['p'],'4')->query($sql);
            // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
             //$list = $list->order('tid desc')->page($_GET['p'],'4')->select();
             $this->assign('list',$list);
             // 赋值数据集
             $teamModel2 = M('team');
             $count = $teamModel2->count();
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

        public function create(){

        	$this->display();
        }

        public function store(){
        	//生成模型对象
        	$teamModel = M('team');
        	// 根据表单提交的POST数据创建数据对象
        	$data = $teamModel->create();

        	//上传图片

            $upload = new \Think\Upload();
            // 实例化上传类
            $upload->maxSize = 3145728 ;
            // 设置附件上传大小
            $upload->ext  = array('jpg', 'gif', 'png', 'jpeg');
            // 设置附件上传类型
            $upload->rootPath = './Public/uploads/';
             // 设置附件上传根目录
            $upload->savePath = '/headPic/';
             // 设置附件上传（子）目录 // 上传文件
            $info = $upload->upload();

            if(!$info) {
                              $this->error($upload->getError());
            }else{
                // 上传成功
                 foreach($info as $file){
                    $data["head"] = $file['savepath'].$file['savename'];
                 };

             }
             $time = date("Y-m-d H:i:s");
             $data['updatetime'] = $time;




        	if($teamModel->add($data))
        	{
                 $this->success('数据添加成功','index');
        	}
        	else{
        		$this->error('数据添加失败');
        	}
        }


        public function edit(){
                $tid = I('tid');
                $teamModel = M('team');
                $data = $teamModel->find($tid);
                $this->assign('team',$data);

                $actModel = M('acts');
                $data2 = $actModel->select();
                $this->assign('act',$data2);

                $userModel = M('users');
                $data3 = $userModel->select();
                $this->assign('user',$data3);
                $this->display();
        }

        public function update(){
            $teamModel = M('team');
            $data = $teamModel->create();

            $time = date("Y-m-d H:i:s");
            $data['updatetime'] = $time;

            if($teamModel->save($data) )
            {
                $this->success('数据更新成功！','index');
            }
            else{
                $this->error('数据更新失败');
            }
        }

         public function destoryBatch(){
                $teamModel = M('team');
               $getid = I('id'); //获取选择的复选框的值

               if (!$getid) $this->error('未选择记录'); //没选择就提示信息

               $getids = implode(',', $getid); //选择一个以上，就用,把值连接起来(1,2,3)这样

               $id = is_array($getid) ? $getids : $getid; //如果是数组，就把用,连接起来的值覆给$id,否则就覆获取到的没有,号连接起来的值

               if($userModel->where("tid IN ($id )")->delete())
               {
                     $this->success('数据删除成功!');
               }
               else{
                     $this->error('数据删除失败！');
               }


            }

        public function destory(){
            $tid = I('tid');
            $teamModel = M('team');

            if($teamModel->where("tid=$tid")->delete())
            {
                $this->success('数据删除成功!');
            }
            else{
                $this->error('数据删除失败！');
            }

        }



}






