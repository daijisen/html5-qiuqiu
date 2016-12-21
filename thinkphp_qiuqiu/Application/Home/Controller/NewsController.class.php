<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends Controller {
    public function index(){
    //新闻内容获取

        $nid = I('nid');
        $sql = "select news.*,name from news,newstype where news.type = newstype.type and nid=$nid order by nid desc";
        $new1Data = M()->query($sql);
        $this->assign('newsContent',$new1Data[0]);

        $this->display();
    }


}