<?php
namespace addons\SendEmail;
use app\common\addons\Addon;

class SendEmail extends Addon{

    public $info = [
        'name'=>'SendEmail',
        'title'=>'发送Email',
        'description'=>'发送Email接口',
        'status'=>1,
        'author'=>'kyxscms',
        'version'=>'1.0.1',
        'group'=>'email',
        'mold'=>'web,wap,wechat',
        'sort'=>0
    ];

    public function install(){
        return true;
    }

    public function uninstall(){
        return true;
    }

    public function SendEmail($param){
        $addon_config=$this->getConfig();
        require_once(dirname(__FILE__).'/PHPMailer/PHPMailerAutoload.php');
        $mail = new \PHPMailer();
        try{
            $mail->IsSMTP(); // 启用SMTP
            if($addon_config['mail_ssl']){
                $mail->SMTPSecure = 'ssl';
            }
            $mail->Host=$addon_config['mail_host']; //smtp服务器的名称（这里以QQ邮箱为例）
            $mail->Port=$addon_config['mail_port'];
            $mail->SMTPAuth = $addon_config['mail_smtpauth']; //启用smtp认证
            $mail->Username = $addon_config['mail_username']; //你的邮箱名
            $mail->Password = $addon_config['mail_password']; //邮箱密码
            $mail->From = $addon_config['mail_from']; //发件人地址（也就是你的邮箱地址）
            $mail->FromName = $addon_config['mail_fromname']; //发件人姓名
            $mail->AddAddress($param['to'],"尊敬的客户");
            $mail->WordWrap = 50; //设置每行字符长度
            $mail->IsHTML($addon_config['mail_ishtml']); // 是否HTML格式邮件
            $mail->CharSet=$addon_config['mail_charset']; //设置邮件编码
            $mail->Subject = $param['title']; //邮件主题
            $mail->Body = $param['content']; //邮件内容
            $mail->AltBody = "这是一个纯文本的身体在非营利的HTML电子邮件客户端"; //邮件正文不支持HTML的备用显示
            // $mail->ErrorInfo;
            return $mail->Send();
        }catch(\Exception $e){
            return false;
        }
    }
}