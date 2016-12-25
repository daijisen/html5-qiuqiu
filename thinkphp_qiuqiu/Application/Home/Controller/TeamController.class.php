<?php
namespace Home\Controller;
use Think\Controller;
class TeamController extends Controller {
    public function index(){

    $aid = I('aid');
    dump($aid);
    $indexData = M()->query("select x.username,x.signature,x.head,y.class,y.ncontent,y.uploadpic,y.num,y.aid
                             from users x,acts y
                             where x.pid = y.pid and aid = $aid");
    $this->assign('indexdata',$indexData[0]);

    $this->display();

    }


}