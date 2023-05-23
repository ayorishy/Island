<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
function themeVersion(): string
{
    return '0.1.1';
}
	

function themeConfig($form): void
{
    
    $HeaderLogourl = new \Typecho\Widget\Helper\Form\Element\Text(
        'HeaderLogourl',
        null,
        null,
        _t('<center>顶部Logo地址</center>'),
        _t('<center><p class="description"><style>.center{color:#999;font-size:.92857em;}</style>在这里填入一个图片 URL 地址, 以在网站底部显示Logo，留空则显示默认头像</p></center>')
    );
    $form->addInput($HeaderLogourl);

    $CustomRandomPictures = new \Typecho\Widget\Helper\Form\Element\Text(
        'CustomRandomPictures',
        null,
        null,
        _t('<center>自定义电脑端随机图片API</center>'),
        _t('<center><p class="description"><style>.center{color:#999;font-size:.92857em;}</style>在这里填入一个图片 URL 地址，留空则显示默认背景</p></center>')
    );
    $form->addInput($CustomRandomPictures);
    
    $FooterLogoUrl = new \Typecho\Widget\Helper\Form\Element\Text(
        'FooterLogoUrl',
        null,
        null,
        _t('<center>底部Logo地址</center>'),
        _t('<center><p class="description"><style>.center{color:#999;font-size:.92857em;}</style>在这里填入一个图片 URL 地址, 以在网站底部显示Logo，留空则显示默认头像</p></center>')
    );
    $form->addInput($FooterLogoUrl);

    $WebFavicon = new \Typecho\Widget\Helper\Form\Element\Text(
        'WebFavicon',
        null,
        null,
        _t('<center>网站Favicon地址</center>'),
        _t('<center><p class="description"><style>.center{color:#999;font-size:.92857em;}</style>网站Favicon将显示在网页标签的头部,留空则不显示</p></center>')
    );
    $form->addInput($WebFavicon);

        $CustomFont = new Typecho_Widget_Helper_Form_Element_Radio('CustomFont', array(
        '软萌欧字体' => '软萌欧字体',
        '得意黑字体' => '得意黑字体',
        '幼稚园字体' => '幼稚园字体',
        '漫画字体' => '漫画字体',
        '果酱字体' => '果酱字体',
        'CustomModeUser' => '自定字体'
    ), _t('<center>自定字体模式</center>'));
    $form->addInput($CustomFont);
    $CustomFont_User = new \Typecho\Widget\Helper\Form\Element\Text(
        'CustomFont_User',
        null,
        null,
        _t('<center>自定字体</center>'),
        _t('<center><p class="description"><style>.center{color:#999;font-size:.92857em;}</style>选择自定义字体即可填写字体资源链接</p></center>')
    );
    $form->addInput($CustomFont_User);
    
    $icp = new Typecho_Widget_Helper_Form_Element_Text('icp', NULL, NULL, _t('<center>工信部ICP备案号</center>'), _t('<center><p class="description"><style>.center{color:#999;font-size:.92857em;}</style>在这里填入工信部ICP备案号, 留空则默认不显示</p></center>'));
  	$form->addInput($icp);
    
    $CustomStyle = new Typecho_Widget_Helper_Form_Element_Textarea('CustomStyle', NULL, NULL, _t('<center>自定义全局Style</center>'));
    $form->addInput($CustomStyle);
    
    $CustomJavascript = new Typecho_Widget_Helper_Form_Element_Textarea('CustomJavascript', NULL, NULL, _t('<center>自定义全局Javascript</center>'));
    $form->addInput($CustomJavascript);
    
    $CustomFooter = new Typecho_Widget_Helper_Form_Element_Textarea('CustomFooter', NULL, NULL, _t('<center>自定义footer内容</center>'));
    $form->addInput($CustomFooter);
    ?>    
    
<!-- 配置中心=>CSS [Start] -->
<link rel="dns-prefetch" href="//cdn.staticfile.org" />
<link rel="dns-prefetch" href="//npm.sourcegcdn.com" />
<link rel="stylesheet preload" href="//cdn.staticfile.org/mdui/1.0.2/css/mdui.min.css" as="style">
<link rel="stylesheet preload" href="//npm.sourcegcdn.com/mdui@1.0.2/dist/css/mdui.min.css" as="style">
<!-- 配置中心=>CSS [End] -->

<style>
	.mdui-tab .mdui-tab-active {
	            color: rgb(74 69 62 / 70%);
	            opacity: 2;
	        }
	
	        .mdui-tab-indicator {
	            background-color: rgb(74 69 62 / 70%);
	        }
	
	        .fillet-A1 {
	            border-radius: .5rem
	        }
	
	        .shadow-A1 {
	            box-shadow: .5rem .875rem 2.375rem rgba(39, 44, 49, .06), .0625rem .1875rem .5rem rgba(39, 44, 49, .03)
	        }
	
	        .button-ts {
	            position: relative
	        }
	
	        .button-ts:active {
	            transform: translateY(2px);
	            -webkit-transition: box-shadow 2.5s;
	            box-shadow: .5rem .875rem 2.375rem rgba(255, 255, 255, .12),
	            .0625rem .1875rem .5rem transparent
	        }
	
	        .primary {
	            border: none;
	            background-color: #d8d8d8;
	            cursor: pointer;
	            border-radius: 2px;
	            color: #FFF;
	        }
	
	        .primary:hover {
	            transition-duration: 1.5s;
	            background-color: rgb(74 69 62 / 70%);
	        }
	
	        .primary:disabled {
	            background-color: #edecec;
	            cursor: default;
	        }
</style>
<div class="mdui-card">

	<!-- 配置中心=>头部 [Start]-->
	<div class="mdui-card-primary">
		<center><div class="mdui-card-primary-title">Island 配置中心</div></center>
		<center><div class="mdui-card-primary-subtitle">Version: <?php echo(themeVersion()); ?></div></center>
	</div>
	<!-- 配置中心=>头部 [End]-->

	<!-- 配置中心=>导航 [Start]-->
	<div class="mdui-tab mdui-tab-centered" mdui-tab>
		<a href="#example3-tab1" class="mdui-ripple">模板信息</a>
	</div>
	<!-- 配置中心导航 [End]-->

	<!-- 配置中心=>模板信息 [Start]-->
	<div id="example3-tab1" class="mdui-p-a-2">
		<div class="mdui-card-content">
			<div class="mdui-row-xs-2">
				<div class="mdui-col">
					<div class="mdui-card shadow-A1 button-ts" style="background-color: rgb(130 123 123 / 14%);">
						<div class="mdui-card-header">
							<img class="mdui-card-header-avatar"
								 src="https://thirdqq.qlogo.cn/g?b=qq&nk=1139074074&s=100"
								 alt="" />
							<div class="mdui-card-header-title">Island theme</div>
							<div class="mdui-card-header-subtitle">
								<?php echo(themeVersion()); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="mdui-col">
					<div class="mdui-card shadow-A1 button-ts" mdui-dialog="{target: '#exampleDialog'}"
						 style="background-color: rgb(130 123 123 / 14%);">
						<div class="mdui-card-header">
							<img class="mdui-card-header-avatar"
								 src="https://thirdqq.qlogo.cn/g?b=qq&nk=1139074074&s=100"
								 alt="" />
							<div class="mdui-card-header-title">Web devs</div>
							<div class="mdui-card-header-subtitle">everything is fake.</div>
						</div>
					</div>
				</div>
			</div>
			<br />

			<div class="mdui-card shadow-A1" style="background-color: rgb(130 123 123 / 14%);">
				<center><div class="mdui-card-content">
					<img alt="GitHub "
						 src="https://img.shields.io/github/stars/Inon1y/typecho-Island-theme?style=for-the-badge"
						 alt="">
					<img alt="GitHub all releases"
						 src="https://img.shields.io/github/downloads/Inon1y/typecho-Island-theme/total?style=for-the-badge"
						 alt="">
					<img alt="GitHub last commit"
						 src="https://img.shields.io/github/last-commit/Inon1y/typecho-Island-theme?style=for-the-badge"
						 alt="">
					<img alt="GitHub code size in bytes"
						 src="https://img.shields.io/github/languages/code-size/Inon1y/typecho-Island-theme?style=for-the-badge"
						 alt="">
				</div></center>
			</div>
			<br />

			<div class="mdui-card shadow-A1" style="background-color: rgb(130 123 123 / 14%);">
				<div class="mdui-card-content">
				<a style="color:black;" id="Island">版本检测中..</a>
					<div class="mdui-float-right">当前版本：
						<?php echo(themeVersion()); ?>
					</div>
				</div>
			</div>
			<br />
	
			<div class="mdui-card shadow-A1" style="background-color: rgb(130 123 123 / 14%);">
				<div class="mdui-card-content">
					<center><span>加入我的Kook服务器进行交流： <a style="text-decoration: none;color:#e30e8c;" href="https://kook.top/KX4cQx">点击加入Kook服务器频道</a></span></center>
				</div>
			</div>
		</div>
	</div>
	<!-- 配置中心=>模板信息 [End]-->

	<!-- 配置中心=>弹窗:开发者列表 [Start]-->
	<div class="mdui-card-content">
		<div class="mdui-dialog" id="exampleDialog">
			<div class="mdui-dialog-title">开发者列表</div>
			<div class="mdui-dialog-content">
				<div class="mdui-row-xs-2">
				    
				    <div class="mdui-col">
						<div class="mdui-card shadow-A1 button-ts"
							 style="background-color: rgb(130 123 123 / 14%);">
							<div class="mdui-card-header">
								<img class="mdui-card-header-avatar"
									 src="https://www.wikimoe.com/content/templates/black_memory%20v1.1/about/about_tx.jpg" />
								<div class="mdui-card-header-title">广树</div>
								<div class="mdui-card-header-subtitle">Island主题创始人</div>
							</div>
						</div>
						<br />
					</div>
				    
					<div class="mdui-col">
						<div class="mdui-card shadow-A1 button-ts"
							 style="background-color: rgb(130 123 123 / 14%);">
							<div class="mdui-card-header">
								<img class="mdui-card-header-avatar"
									 src="https://q2.qlogo.cn/headimg_dl?dst_uin=1139074074@qq.com&spec=640" />
								<div class="mdui-card-header-title">1nonly</div>
								<div class="mdui-card-header-subtitle">爱捣鼓代码的在校生</div>
							</div>
						</div>
						<br />
					</div>

				</div>
			<div class="mdui-dialog-actions">
				<button class="mdui-btn mdui-ripple" mdui-dialog-confirm>确认</button>
			</div>
		</div>
	</div>
	<!-- 配置中心=>弹窗:开发者列表 [End]-->
	<!-- 配置中心=>JS [Start] -->
<script>
var version_='jsjiami.com.v7';var _0x4c71d5=_0x578c;function _0x578c(_0x48aae6,_0x4558b0){var _0x2ff77e=_0x2ff7();return _0x578c=function(_0x578c39,_0x5ce5bf){_0x578c39=_0x578c39-0x1cf;var _0x1286b0=_0x2ff77e[_0x578c39];if(_0x578c['VvdyAd']===undefined){var _0x3f54b0=function(_0x335a1b){var _0x4518ff='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789+/=';var _0x5d8602='',_0x1b43b0='';for(var _0x1520e4=0x0,_0x40db6a,_0x183089,_0x522f45=0x0;_0x183089=_0x335a1b['charAt'](_0x522f45++);~_0x183089&&(_0x40db6a=_0x1520e4%0x4?_0x40db6a*0x40+_0x183089:_0x183089,_0x1520e4++%0x4)?_0x5d8602+=String['fromCharCode'](0xff&_0x40db6a>>(-0x2*_0x1520e4&0x6)):0x0){_0x183089=_0x4518ff['indexOf'](_0x183089);}for(var _0x18d02a=0x0,_0x2cd894=_0x5d8602['length'];_0x18d02a<_0x2cd894;_0x18d02a++){_0x1b43b0+='%'+('00'+_0x5d8602['charCodeAt'](_0x18d02a)['toString'](0x10))['slice'](-0x2);}return decodeURIComponent(_0x1b43b0);};var _0x255bf5=function(_0x2f776f,_0x57c0b7){var _0x2c6244=[],_0x13ed64=0x0,_0x1e55b8,_0x2aee07='';_0x2f776f=_0x3f54b0(_0x2f776f);var _0x5ec463;for(_0x5ec463=0x0;_0x5ec463<0x100;_0x5ec463++){_0x2c6244[_0x5ec463]=_0x5ec463;}for(_0x5ec463=0x0;_0x5ec463<0x100;_0x5ec463++){_0x13ed64=(_0x13ed64+_0x2c6244[_0x5ec463]+_0x57c0b7['charCodeAt'](_0x5ec463%_0x57c0b7['length']))%0x100,_0x1e55b8=_0x2c6244[_0x5ec463],_0x2c6244[_0x5ec463]=_0x2c6244[_0x13ed64],_0x2c6244[_0x13ed64]=_0x1e55b8;}_0x5ec463=0x0,_0x13ed64=0x0;for(var _0x43c52=0x0;_0x43c52<_0x2f776f['length'];_0x43c52++){_0x5ec463=(_0x5ec463+0x1)%0x100,_0x13ed64=(_0x13ed64+_0x2c6244[_0x5ec463])%0x100,_0x1e55b8=_0x2c6244[_0x5ec463],_0x2c6244[_0x5ec463]=_0x2c6244[_0x13ed64],_0x2c6244[_0x13ed64]=_0x1e55b8,_0x2aee07+=String['fromCharCode'](_0x2f776f['charCodeAt'](_0x43c52)^_0x2c6244[(_0x2c6244[_0x5ec463]+_0x2c6244[_0x13ed64])%0x100]);}return _0x2aee07;};_0x578c['sCmVyW']=_0x255bf5,_0x48aae6=arguments,_0x578c['VvdyAd']=!![];}var _0x39512d=_0x2ff77e[0x0],_0x93b854=_0x578c39+_0x39512d,_0x23dc14=_0x48aae6[_0x93b854];return!_0x23dc14?(_0x578c['FumloM']===undefined&&(_0x578c['FumloM']=!![]),_0x1286b0=_0x578c['sCmVyW'](_0x1286b0,_0x5ce5bf),_0x48aae6[_0x93b854]=_0x1286b0):_0x1286b0=_0x23dc14,_0x1286b0;},_0x578c(_0x48aae6,_0x4558b0);}function _0x2ff7(){var _0x2b27eb=(function(){return[version_,'SgjeIsSjJIkiaWBmHiNp.McNoMmuF.JHvCD7VRJO==','W6npgsfEzSkCWQuCW7n9W6tdPG','W7dMNQFMLyxNIBVMNlZVVBe','5yYm54Y15PwO54UZ5P2+77++','u0iej3ud','WRiUWRC','d8o/aGz2pSklEZytW6nFuG','k8kbWRhcTmkA','f8olWR9/vq','W63dLZSOWOiheXldSqDfyG','r2NcOGfu','WQ/cG3/cI8kc','W50OWQGwx8o5u8kvrZD6W67dGYO','W6NdMdyRWOqgrXldUGTJzSoi','WPdcOmk1WRnDWQVcVrLHse3dUSkH','W45RyYpdUd8TW5mmCmkUzW','udusW5hcUmk8oCoz','W6eYW791WQuvWQ3cLCokgx5SFfzJWO/cGCkuy3FdOSkjxLrVue9QthLTc8oFuCkFbNtcQ8o0WP/dJ35yW5lcL0ZcIaBdUeXkWRxcHmkDqW','W5u9WRK9'].concat((function(){return['CCocs23cUG','xvrgh8o5WR/cSGS','W6WXWQ53WQa6WPa','CSkCWQFdMN/cJxrWeZmSa8kf','WR5jsGnCoSogcmotW5XpWQON','vSkRqNSd','WR7dHSkyvG','umoLWRPBuWRdSa','W6tdIa/dUCoaW7BcQ8khW5GtWOSCW6O','W6WiWRCkDq','WOLkW6ZcHWy','WPGzWP5nWRa','d8oWdajYmCogvaekW69/','DSoRW5hcKY7dUIS','WPRdLCkFCxe','mmoyW6VcJYW','W4CpW45K54oR5ywd5lUz6l2qsv/cNCog','WQFcT8ohW6JdTCoDW40WW4u','WRPyWPxcRmkIt8kGWRL4tSo7','uJmsW7TEW7dcJe3dSa'].concat((function(){return['nmkOy1FcQWBdUcS','dwvjWQSEWO/cTgRdKhr7W50','t8oQEfBcNG','W67cS8kDW5mLWRbuna','Dmk7vLeSBa','W5hdTCoZW7ubW7ZdVZn6sNVdMq','dSo7u3ilwCogFW','WO3dRmkRdghdPSoYoG','xCk+W4/cQ8k0jKOMWOZcSIxcV8k9','hGldHM4S','WRpcUmodc8oi','bCkxvwJcUCosW5mSvmowWRhdGSk+WQqIW51aW4GkWRFdPSk7WOfBkqtcSLZdIsONW73cMmk0WQq','W4TbxHHL','xdr8W6JdGq','W6ZcTCoTWOjKW5WnlCkEASo7nxS','W5BcRSkAfgxcImkWxe52W6ddISkuWOFdQCkwvSkEhu/dKLKdWO9xl8okzCkTW5aHW5TzWR7cNSoJW4XWxa4rWRtdUt9MW7moWOa9iSoqxXBdRrFdLqioWPBdVv5uW60uWRhdV8keW7BdImomWOtcIG','CSkyWQtdLxNcJxHjddyNfmk7','W7VcKmkVl3C'];}()));}()));}());_0x2ff7=function(){return _0x2b27eb;};return _0x2ff7();};(function(_0x1af8d5,_0x13102e,_0x1d6615,_0x21384a,_0x28a114,_0x308130,_0x55f827){return _0x1af8d5=_0x1af8d5>>0x3,_0x308130='hs',_0x55f827='hs',function(_0x5a13d5,_0x1bf9b2,_0x469421,_0x3738fe,_0x55c16d){var _0x434115=_0x578c;_0x3738fe='tfi',_0x308130=_0x3738fe+_0x308130,_0x55c16d='up',_0x55f827+=_0x55c16d,_0x308130=_0x469421(_0x308130),_0x55f827=_0x469421(_0x55f827),_0x469421=0x0;var _0x3a95ff=_0x5a13d5();while(!![]&&--_0x21384a+_0x1bf9b2){try{_0x3738fe=-parseInt(_0x434115(0x1f9,'TZ7Z'))/0x1*(parseInt(_0x434115(0x1fb,'qhvh'))/0x2)+-parseInt(_0x434115(0x1ed,'&o!I'))/0x3+-parseInt(_0x434115(0x1ea,'SrmR'))/0x4*(-parseInt(_0x434115(0x204,'J6cN'))/0x5)+parseInt(_0x434115(0x1da,'nmf^'))/0x6*(parseInt(_0x434115(0x1f3,'@x0&'))/0x7)+parseInt(_0x434115(0x1e3,'J6cN'))/0x8+-parseInt(_0x434115(0x1db,'[Qnz'))/0x9*(-parseInt(_0x434115(0x1d3,'02s8'))/0xa)+parseInt(_0x434115(0x1d9,'SrmR'))/0xb*(-parseInt(_0x434115(0x1e1,'divH'))/0xc);}catch(_0x332169){_0x3738fe=_0x469421;}finally{_0x55c16d=_0x3a95ff[_0x308130]();if(_0x1af8d5<=_0x21384a)_0x469421?_0x28a114?_0x3738fe=_0x55c16d:_0x28a114=_0x55c16d:_0x469421=_0x55c16d;else{if(_0x469421==_0x28a114['replace'](/[FBVRIHkgNuWSDeCOpJM=]/g,'')){if(_0x3738fe===_0x1bf9b2){_0x3a95ff['un'+_0x308130](_0x55c16d);break;}_0x3a95ff[_0x55f827](_0x55c16d);}}}}}(_0x1d6615,_0x13102e,function(_0x2982eb,_0x40f922,_0x13cb8f,_0x247379,_0x1c53dc,_0x577ee6,_0x1f0a23){return _0x40f922='\x73\x70\x6c\x69\x74',_0x2982eb=arguments[0x0],_0x2982eb=_0x2982eb[_0x40f922](''),_0x13cb8f='\x72\x65\x76\x65\x72\x73\x65',_0x2982eb=_0x2982eb[_0x13cb8f]('\x76'),_0x247379='\x6a\x6f\x69\x6e',(0x12d471,_0x2982eb[_0x247379](''));});}(0x658,0x5c380,_0x2ff7,0xcd),_0x2ff7)&&(version_=_0x2ff7);var simversion=_0x4c71d5(0x1dc,'FTq5');function update_detec(){var _0x87d83f=_0x4c71d5,_0x352c79={'JrjBa':_0x87d83f(0x1e6,'Hn9j'),'LAfAa':function(_0x44cc4e,_0x9a3659){return _0x44cc4e(_0x9a3659);},'EJAKa':function(_0x428764,_0x40c1ec){return _0x428764===_0x40c1ec;},'uXldw':function(_0x53e7db,_0x2c43ff){return _0x53e7db>_0x2c43ff;},'PfFLq':function(_0x33e76e,_0x5efa32){return _0x33e76e+_0x5efa32;},'kcxKA':function(_0x16b048,_0xf302df){return _0x16b048+_0xf302df;},'hnazt':function(_0x352975,_0x408daf){return _0x352975+_0x408daf;},'tZYyE':_0x87d83f(0x1e7,'divH'),'clsWK':_0x87d83f(0x1f5,'TZ7Z'),'VEkYF':_0x87d83f(0x1cf,'3M$p'),'iEUAI':function(_0x3be723,_0x308a43){return _0x3be723(_0x308a43);},'wNTOt':function(_0x41446b,_0x20ff53){return _0x41446b!==_0x20ff53;},'Keylo':'PSpaf','XlAlL':_0x87d83f(0x1eb,'rk8R'),'riFTa':_0x87d83f(0x1de,'bZaj'),'zzHEp':_0x87d83f(0x1e9,'lh4X')},_0x5d4d26=document[_0x87d83f(0x1f0,'4WJs')](_0x87d83f(0x1d7,'SrmR'));if(!_0x5d4d26){if(_0x352c79[_0x87d83f(0x1dd,'4Qv%')](_0x352c79['Keylo'],_0x352c79['XlAlL']))return;else _0x7ade4a['innerHTML']=_0x352c79[_0x87d83f(0x205,'Hn9j')]+_0x352c79['LAfAa'](_0x2a825f,_0x5cad7a);}var _0x262e84=new XMLHttpRequest();_0x5d4d26[_0x87d83f(0x206,'J6cN')]=_0x352c79[_0x87d83f(0x1ec,'GQU]')],_0x262e84[_0x87d83f(0x1f6,'4WJs')](_0x352c79[_0x87d83f(0x1ef,'KgeJ')],_0x87d83f(0x1e2,'nmf^')),_0x262e84['send'](),_0x262e84['onreadystatechange']=function(){var _0x42fb77=_0x87d83f;if(_0x352c79[_0x42fb77(0x202,'TZ7Z')](_0x262e84['readyState'],0x4)&&_0x352c79[_0x42fb77(0x1e4,'nmf^')](_0x262e84[_0x42fb77(0x1e8,'m8h1')],0xc8)){var _0x3561af=JSON['parse'](_0x262e84[_0x42fb77(0x1d8,'@3xR')]),_0x5673b5=_0x3561af[_0x42fb77(0x1f8,'4j)9')];_0x352c79['uXldw'](_0x5673b5,simversion)?_0x5d4d26[_0x42fb77(0x1d2,'g^!X')]=_0x352c79[_0x42fb77(0x1e0,'K7Rn')](_0x352c79[_0x42fb77(0x1fc,'SrmR')](_0x352c79[_0x42fb77(0x201,'q6f*')](_0x352c79[_0x42fb77(0x1f7,'02s8')],_0x3561af[_0x42fb77(0x1fd,'Hn9j')]),_0x352c79['clsWK']),_0x3561af[_0x42fb77(0x1d1,'d9pV')])+_0x352c79[_0x42fb77(0x200,'4WJs')]:_0x5d4d26[_0x42fb77(0x1d0,'(*md')]=_0x352c79[_0x42fb77(0x1df,'M]36')](_0x352c79[_0x42fb77(0x1d5,'02s8')],_0x352c79[_0x42fb77(0x1ee,'FTq5')](String,simversion));}};};update_detec();var version_ = 'jsjiami.com.v7';
</script>
	<script rel="preload" src="//cdn.staticfile.org/jquery/3.6.0/jquery.min.js" as="script"></script>
	<script rel="preload" src="//npm.sourcegcdn.com/jquery@3.6.0/dist/jquery.min.js" as="script"></script>
	<script rel="preload" src="//cdn.staticfile.org/mdui/1.0.2/js/mdui.min.js" as="script"></script>
	<script rel="preload" src="//npm.sourcegcdn.com/mdui@1.0.2/dist/js/mdui.min.js" as="script"></script>
	<!-- 配置中心=>JS [End] -->

</div>
<br />
<br />
<?php
//备份开始
    $db = Typecho_Db::get();
    $sjdq = $db->fetchRow($db->select()->from('table.options')->where('name = ?', 'theme:Island'));
    $ysj = $sjdq['value'];
    if (isset($_POST['type'])) {
        if ($_POST["type"] == "备份模板数据") {
            if ($db->fetchRow($db->select()->from('table.options')->where('name = ?', 'theme:Island'))) {
                $update = $db->update('table.options')->rows(array('value' => $ysj))->where('name = ?', 'theme:Island');
                $updateRows = $db->query($update);
                echo '<div class="tongzhi">备份已更新，请等待自动刷新！如果等不到请点击';
                ?>
<a href="<?php Helper::options()->adminUrl('options-theme.php'); ?>">这里</a>
</div>
<script language="JavaScript">
	window.setTimeout("location=\'<?php Helper::options()->adminUrl('options-theme.php'); ?>\'", 2500);
</script>
<?php
            } else {
                if ($ysj) {
                    $insert = $db->insert('table.options')
                        ->rows(array('name' => 'theme:Island', 'user' => '0', 'value' => $ysj));
                    $insertId = $db->query($insert);
                    echo '<div class="tongzhi">备份完成，请等待自动刷新！如果等不到请点击';
                    ?>
<a href="<?php Helper::options()->adminUrl('options-theme.php'); ?>">这里</a>
</div>
<script language="JavaScript">
	window.setTimeout("location=\'<?php Helper::options()->adminUrl('options-theme.php'); ?>\'", 2500);
</script>
<?php
                }
            }
        }
        if ($_POST["type"] == "还原模板数据") {
            if ($db->fetchRow($db->select()->from('table.options')->where('name = ?', 'theme:Island'))) {
                $sjdub = $db->fetchRow($db->select()->from('table.options')->where('name = ?', 'theme:Island'));
                $bsj = $sjdub['value'];
                $update = $db->update('table.options')->rows(array('value' => $bsj))->where('name = ?', 'theme:Island');
                $updateRows = $db->query($update);
                echo '<div class="tongzhi">检测到模板备份数据，恢复完成，请等待自动刷新！如果等不到请点击';
                ?>
<a href="<?php Helper::options()->adminUrl('options-theme.php'); ?>">这里</a>
</div>
<script language="JavaScript">
	window.setTimeout("location=\'<?php Helper::options()->adminUrl('options-theme.php'); ?>\'", 2000);
</script>
<?php
            } else {
                echo '<div class="tongzhi">没有模板备份数据，恢复不了哦！</div>';
            }
        }
        if ($_POST["type"] == "删除备份数据") {
            if ($db->fetchRow($db->select()->from('table.options')->where('name = ?', 'theme:Island'))) {
                $delete = $db->delete('table.options')->where('name = ?', 'theme:Island');
                $deletedRows = $db->query($delete);
                echo '<div class="tongzhi">删除成功，请等待自动刷新，如果等不到请点击';
                ?>
<a href="<?php Helper::options()->adminUrl('options-theme.php'); ?>">这里</a>
</div>
<script language="JavaScript">
	window.setTimeout("location=\'<?php Helper::options()->adminUrl('options-theme.php'); ?>\'", 2500);
</script>
<?php
            } else {
                echo '<div class="tongzhi">不用删了！备份不存在！！！</div>';
            }
        }
    }
    echo '<center><form class="protected" action="?Island" method="post">
    <input type="submit" name="type" class="btn btn-s" value="备份模板数据" />&nbsp;&nbsp;<input type="submit" name="type" class="btn btn-s" value="还原模板数据" />&nbsp;&nbsp;<input type="submit" name="type" class="btn btn-s" value="删除备份数据" /></form></center><br />';
    //备份结束

}

?>
<?php
//自定义字体
function CustomFont_url()
{
    $options = Helper::options();
    if ($options->CustomFont == "软萌欧字体") {
        echo 'https://cloudpan.nonly.cn/%E4%B9%9F%E5%AD%97%E5%B7%A5%E5%8E%82%E8%BD%AF%E8%90%8C%E6%AC%A7%E5%8C%85%E4%BD%93.woff2';
    } elseif ($options->CustomFont == "得意黑字体") {
        echo 'https://cloudpan.nonly.cn/SourceHanSansHWSC-VF.otf.woff2';
    } elseif ($options->CustomFont == "漫画字体") {
        echo 'https://cloudpan.nonly.cn/%E4%B9%9F%E5%AD%97%E5%B7%A5%E5%8E%82%E6%BC%AB%E7%94%BB%E4%BD%93.woff2';
    } elseif ($options->CustomFont == "幼稚园字体") {
        echo 'https://cloudpan.nonly.cn/%E4%B9%9F%E5%AD%97%E5%B7%A5%E5%8E%82%E5%B9%BC%E7%A8%9A%E5%9B%AD%E4%BD%93.woff2';
    } elseif ($options->CustomFont == "果酱字体") {
        echo 'https://cloudpan.nonly.cn/%E4%B9%9F%E5%AD%97%E5%B7%A5%E5%8E%82%E6%9E%9C%E9%85%B1%E4%BD%93.woff2';
    } elseif ($options->CustomFont == "CustomModeUser") {
        $CustomFont = $options->CustomFont_User;
        echo($CustomFont);
    }
}

//缩略图调用
function showThumb($obj,$link=false){
    preg_match_all( "/<[img|IMG].*?src=[\'|\"](.*?)[\'|\"].*?[\/]?>/", $obj->content, $matches );
    $thumb = '';
    $options = Typecho_Widget::widget('Widget_Options');
    $attach = $obj->attachments(1)->attachment; 
    if (isset($attach->isImage) && $attach->isImage == 1){
        $thumb = $attach->url;   //附件是图片 输出附件
    }elseif(isset($matches[1][0])){
        $thumb = $matches[1][0];  //文章内容中抓到了图片 输出链接
    }
    
	//空的话输出默认随机图
	$thumb = empty($thumb) ? $options->themeUrl .'/assets/img/blog_bg_'. mt_rand(1, 18) .'.jpg' : $thumb;

	
    if($link){
        return $thumb;
    }
	else{
		$thumb='<img src="'.$thumb.'">';
		return $thumb;
	}
}
function themeInit($archive) {
    if ($archive->is('index')) {
    $archive->parameter->pageSize = 12;
    }
}
// 缩略图调用结束

// 设置时区
date_default_timezone_set('Asia/Shanghai');
/**
 * 秒转时间，格式 年 月 日 时 分 秒
 */
function getBuildTime(){
	// 在下面按格式输入本站创建的时间
	$site_create_time = strtotime('2022-10-12 17:20:00');
	$time = time() - $site_create_time;
	if(is_numeric($time)){
		$value = array(
			"days" => 0, "hours" => 0,
			"minutes" => 0, "seconds" => 0,
		);
		if($time >= 31556926){
			$value["years"] = floor($time/31556926);
			$time = ($time%31556926);
		}
		if($time >= 86400){
			$value["days"] = floor($time/86400);
			$time = ($time%86400);
		}
		if($time >= 3600){
			$value["hours"] = floor($time/3600);
			$time = ($time%3600);
		}
		if($time >= 60){
			$value["minutes"] = floor($time/60);
			$time = ($time%60);
		}
		$value["seconds"] = floor($time);
		
		echo ''.$value['days'].'天'.$value['hours'].'小时'.$value['minutes'].'分';
	}else{
		echo '';
	}
}
//设置时区结束
