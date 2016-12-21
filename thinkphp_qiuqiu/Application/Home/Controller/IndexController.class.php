<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

        if(isset($_SESSION['username'])){
            //首页信息获取
                $indexData = M()->query("select x.username,x.signature,x.head,y.class,y.ncontent,y.uploadpic
                                         from users x,acts y
                                         where x.pid = y.pid
                                         order by aid desc");

                $this->assign('indexdata',$indexData);
                //团队人数统计
                //$sqlTeam = "select y.*,num from team y,(select *,count(*) num from team group by aid) x where y.aid = x.aid order by tid";
                //$tnum = M()->query($sqlTeam);
                //dump($tnum);

            //新闻获取
               //NBA
                $new1Model = M('news');
                $new1Data = $new1Model->where("type=1")->select();
                $this->assign('newsNBA',$new1Data);
                //CBA
                $new2Model = M('news');
                $new2Data = $new2Model->where("type=2")->select();
                $this->assign('newsCBA',$new2Data);
                //中超
                $new3Model = M('news');
                $new3Data = $new3Model->where("type=3")->select();
                $this->assign('newsZhong',$new3Data);
                //西甲
                $new4Model = M('news');
                $new4Data = $new4Model->where("type=4")->select();
                $this->assign('newsXi',$new4Data);
                //英超
                $new5Model = M('news');
                $new5Data = $new5Model->where("type=5")->select();
                $this->assign('newsYing',$new5Data);

            //账户管理
                $pid = $_SESSION['uid'];
                $userModel = M("users");
                $userData = $userModel->where("pid=$pid")->select();
                $this->assign('user',$userData[0]);

                //有人叫我 界面
                $yrSql1 = "select x.username pname,x.head phead,acts.class,acts.ncontent,y.head rhead,y.username rname,y.signature rsignature,reply.content
                                          from users x,users y,acts,reply
                                          where reply.aid = acts.aid and reply.pid = y.pid and acts.pid = x.pid and x.pid = $pid";
                $yrData1 = M()->query($yrSql1);
                                $this->assign('yrData1',$yrData1);
                $yrSql2 = "select x.username pname,x.head phead,acts.class,acts.ncontent,y.head rhead,y.username rname,y.signature rsignature,reply.content,count(y.pid) num
                          from users x,users y,acts,reply
                          where reply.aid = acts.aid and reply.pid = y.pid and acts.pid = x.pid and x.pid = $pid";
                $yrData2 = M()->query($yrSql2);
                if($yrData2[0][num] == 0){
                    $this->assign('yrData2',null);
                }else{
                    $this->assign('yrData2',$yrData2[0]);
                }



        }else{


        //新闻获取
            //NBA
                $new1Model = M('news');
                $new1Data = $new1Model->where("type=1")->select();
                $this->assign('newsNBA',$new1Data);
                //CBA
                $new2Model = M('news');
                $new2Data = $new2Model->where("type=2")->select();
                $this->assign('newsCBA',$new2Data);
                //中超
                $new3Model = M('news');
                $new3Data = $new3Model->where("type=3")->select();
                $this->assign('newsZhong',$new3Data);
                //西甲
                $new4Model = M('news');
                $new4Data = $new4Model->where("type=4")->select();
                $this->assign('newsXi',$new4Data);
                //英超
                $new5Model = M('news');
                $new5Data = $new5Model->where("type=5")->select();
                $this->assign('newsYing',$new5Data);


            //首页信息获取
                $indexData = M()->query("select x.username,x.signature,x.head,y.class,y.ncontent,y.uploadpic
                                         from users x,acts y
                                         where x.pid = y.pid
                                         order by aid desc");

                $this->assign('indexdata',$indexData);

            //账户管理
                $pid = '0';
                $userModel = M("users");
                $userData = $userModel->where("pid=$pid")->select();
                $this->assign('user',$userData[0]);

                //有人叫我 界面

                $this->assign('yrData',null);


        }

    $this->display();
    }

    public function update(){
            $userModel = M('users');
            $data = $userModel->create();

            if($userModel->save($data) )
            {
                $this->success('数据更新成功！','index');
            }
            else{
                $this->error('数据更新失败');
            }
        }

    public function store(){
            //生成模型对象
            $actModel = M('acts');
            // 根据表单提交的POST数据创建数据对象
            $data = $actModel->create();

            //上传图片

            $upload = new \Think\Upload();
            // 实例化上传类
            $upload->maxSize = 3145728 ;
            // 设置附件上传大小
            $upload->ext  = array('jpg', 'gif', 'png', 'jpeg');
            // 设置附件上传类型
            $upload->rootPath = './Public/uploads/';
             // 设置附件上传根目录
            $upload->savePath = '/actPic/';
             // 设置附件上传（子）目录 // 上传文件
            $info = $upload->upload();

            if(!$info) {
                              $this->error($upload->getError());
            }else{
                // 上传成功
                 foreach($info as $file){
                    $data["uploadpic"] = $file['savepath'].$file['savename'];
                 };

             }
             $time = date("Y-m-d H:i:s");
             $data['sendtime'] = $time;



            if($actModel->add($data))
            {
                 $actModel =
                 $this->success('数据添加成功','index');
            }
            else{
                $this->error('数据添加失败');
            }
    }

}