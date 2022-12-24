<?php
namespace app\admin\model;
use think\Model;

class Log extends Model{

    protected $name = 'member_log';

    public function getMemberNameAttr($value,$data){
        $MemberModel=model('Member');
        $member=$MemberModel->info($data['member_id']);
        return $member['username'];
    }

    public function lists(){
        $list = Log::order('id desc')->paginate(config('web.list_rows'));
        return $list;
    }

    public function del(){
        $week = strtotime(date("Y-m-d H:i:s", strtotime("-1 week")));
        $map[] = ['time' ,'<', $week];
        $result = Log::where($map)->delete();
        if(false === $result){
            $this->error=Log::getError();
            return false;
        }else{
            return $result;
        }
    }
}