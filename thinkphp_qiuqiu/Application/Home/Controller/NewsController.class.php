<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends Controller {
    public function index(){
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



        $this->display();
    }

}