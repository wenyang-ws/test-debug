<?php
namespace app\admin\controller;

class Log extends Base
{

    public function index(){
        $Log=model('Log');
        $list = $Log->lists();
        $this->assign('list', $list);
        $this->assign('meta_title','操作日志');
        return $this->fetch();
    }

    public function del(){
        $Log=model('Log');
        $res = $Log->del();
        if($res !== false){
            return $this->success('删除成功');
        } else {
            $this->error('删除失败！');
        }
    }
}