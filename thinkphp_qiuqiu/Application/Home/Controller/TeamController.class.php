<?php
namespace Home\Controller;
use Think\Controller;
class TeamController extends Controller {
    public function index(){

    $aid = I('aid');
    $indexData = M()->query("select x.username,x.signature,x.head,y.class,y.ncontent,y.uploadpic,y.num,y.aid
                             from users x,acts y
                             where x.pid = y.pid and aid = $aid");
    $this->assign('indexdata',$indexData[0]);
    //团队人员
    $teamData = M()->query("select users.username,users.head,users.signature
                           from users,team
                           where team.aid = $aid and team.mid = users.pid");

    $this->assign('team',$teamData);
    //活动评论
    $replyData = M()->query("select x.content,y.username,y.signature,y.head
                           from reply x,users y
                           where aid = $aid and x.pid = y.pid");

    $this->assign('reply',$replyData);

    $this->display();

    }


}