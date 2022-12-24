<?php
return [
	'mail_host'=>[//配置在表单中的键名 ,这个会是config[random]
		'title'=>'smtp服务器:',//表单的文字
		'type'=>'text',		 //表单的类型：text、textarea、checkbox、radio、select等
		'value'=>'',			 //表单的默认值
	],
	'mail_port'=>[//配置在表单中的键名 ,这个会是config[random]
		'title'=>'smtp服务端口:',//表单的文字
		'type'=>'text',		 //表单的类型：text、textarea、checkbox、radio、select等
		'value'=>'',			 //表单的默认值
	],
	'mail_ssl'=>[//配置在表单中的键名 ,这个会是config[random]
		'title'=>'启用ssl加密:',//表单的文字
		'type'=>'select',		 //表单的类型：text、textarea、checkbox、radio、select等
		'options'=>[		 //select 和radion、checkbox的子选项
			'0'=>'关闭',		 //值=>文字
			'1'=>'开启',
		],
		'value'=>'0',			 //表单的默认值
	],
	'mail_smtpauth'=>[//配置在表单中的键名 ,这个会是config[random]
		'title'=>'启用smtp认证:',//表单的文字
		'type'=>'select',		 //表单的类型：text、textarea、checkbox、radio、select等
		'options'=>[		 //select 和radion、checkbox的子选项
			'0'=>'关闭',		 //值=>文字
			'1'=>'开启',
		],
		'value'=>'1',			 //表单的默认值
	],
	'mail_username'=>[//配置在表单中的键名 ,这个会是config[random]
		'title'=>'邮箱名:',//表单的文字
		'type'=>'text',		 //表单的类型：text、textarea、checkbox、radio、select等
		'value'=>'',			 //表单的默认值
	],
	'mail_password'=>[//配置在表单中的键名 ,这个会是config[random]
		'title'=>'邮箱密码:',//表单的文字
		'type'=>'text',		 //表单的类型：text、textarea、checkbox、radio、select等
		'value'=>'',			 //表单的默认值
	],
	'mail_fromname'=>[//配置在表单中的键名 ,这个会是config[random]
		'title'=>'发件人姓名:',//表单的文字
		'type'=>'text',		 //表单的类型：text、textarea、checkbox、radio、select等
		'value'=>'',			 //表单的默认值
	],
	'mail_from'=>[//配置在表单中的键名 ,这个会是config[random]
		'title'=>'发件人地址:',//表单的文字
		'type'=>'text',		 //表单的类型：text、textarea、checkbox、radio、select等
		'value'=>'',			 //表单的默认值
	],
	'mail_ishtml'=>[//配置在表单中的键名 ,这个会是config[random]
		'title'=>'HTML格式:',//表单的文字
		'type'=>'select',		 //表单的类型：text、textarea、checkbox、radio、select等
		'options'=>[		 //select 和radion、checkbox的子选项
			'0'=>'关闭',		 //值=>文字
			'1'=>'开启',
		],
		'value'=>'1',			 //表单的默认值
	],
	'mail_charset'=>[//配置在表单中的键名 ,这个会是config[random]
		'title'=>'邮件编码:',//表单的文字
		'type'=>'text',		 //表单的类型：text、textarea、checkbox、radio、select等
		'value'=>'utf-8',			 //表单的默认值
	],
	'tpl_reg'=>[//配置在表单中的键名 ,这个会是config[random]
		'title'=>'注册邮件模版:',//表单的文字
		'type'=>'textarea',		 //表单的类型：text、textarea、checkbox、radio、select等
		'value'=>'<div class="wrapper" style="margin: 20px auto 0; width: 500px; padding-top:16px; padding-bottom:10px;"><br style="clear:both; height:0"><div class="content" style="background: none repeat scroll 0 0 #FFFFFF; border: 1px solid #E9E9E9; margin: 2px 0 0; padding: 30px;"><p>您好: </p><p>感谢您注册 <a href="{$web_url}">{$web_name}</a></p><p style="border-top: 1px solid #DDDDDD;margin: 15px 0 25px;padding: 15px;">验证码: <span style="color:red">{$code}</span></p><p style="border-top: 1px solid #DDDDDD; padding-top:6px; margin-top:25px; color:#838383;"><p>请勿回复本邮件, 此邮箱未受监控, 您不会得到任何回复。</p></p></div></div>',		 //表单的默认值
	],
	'tpl_passw'=>[//配置在表单中的键名 ,这个会是config[random]
		'title'=>'找回密码邮件模版:',//表单的文字
		'type'=>'textarea',		 //表单的类型：text、textarea、checkbox、radio、select等
		'value'=>'<div class="wrapper" style="margin: 20px auto 0; width: 500px; padding-top:16px; padding-bottom:10px;"><br style="clear:both; height:0"><div class="content" style="background: none repeat scroll 0 0 #FFFFFF; border: 1px solid #E9E9E9; margin: 2px 0 0; padding: 30px;"><p>您正在进行<a href="{$web_url}">{$web_name}</a>密码找回</p><p style="border-top: 1px solid #DDDDDD;margin: 15px 0 25px;padding: 15px;">验证码: <span style="color:red">{$code}</span></p><p style="border-top: 1px solid #DDDDDD; padding-top:6px; margin-top:25px; color:#838383;"><p>请勿回复本邮件, 此邮箱未受监控, 您不会得到任何回复。</p></p></div></div>',			 //表单的默认值
	],
	'tpl_bind'=>[//配置在表单中的键名 ,这个会是config[random]
		'title'=>'绑定邮箱模版:',//表单的文字
		'type'=>'textarea',		 //表单的类型：text、textarea、checkbox、radio、select等
		'value'=>'<div class="wrapper" style="margin: 20px auto 0; width: 500px; padding-top:16px; padding-bottom:10px;"><br style="clear:both; height:0"><div class="content" style="background: none repeat scroll 0 0 #FFFFFF; border: 1px solid #E9E9E9; margin: 2px 0 0; padding: 30px;"><p>您正在进行<a href="{$web_url}">{$web_name}</a>绑定邮箱</p><p style="border-top: 1px solid #DDDDDD;margin: 15px 0 25px;padding: 15px;">验证码: <span style="color:red">{$code}</span></p><p style="border-top: 1px solid #DDDDDD; padding-top:6px; margin-top:25px; color:#838383;"><p>请勿回复本邮件, 此邮箱未受监控, 您不会得到任何回复。</p></p></div></div>',			 //表单的默认值
	]
];