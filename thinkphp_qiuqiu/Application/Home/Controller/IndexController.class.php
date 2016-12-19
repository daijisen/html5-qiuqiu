<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    //新闻获取
        $newModel = M('news');
        $newData = $newModel->select();
        $this->assign('news',$newData);


    //首页信息获取
        $indexData = M()->query("select x.username,x.signature,x.head,y.class,y.ncontent,y.uploadpic
                                 from users x,acts y
                                 where x.pid = y.pid ");

        $this->assign('indexdata',$indexData);



        $this->display();
    }

}