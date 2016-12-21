<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

        if(isset($_SESSION['username'])){

            //首页信息获取
                $indexData = M()->query("select x.username,x.signature,x.head,y.class,y.ncontent,y.uploadpic
                                         from users x,acts y
                                         where x.pid = y.pid ");

                $this->assign('indexdata',$indexData);

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
                                         where x.pid = y.pid ");

                $this->assign('indexdata',$indexData);

            //账户管理
                $pid = '0';
                $userModel = M("users");
                $userData = $userModel->where("pid=$pid")->select();
                $this->assign('user',$userData[0]);
        }

        $this->display();
    }

}