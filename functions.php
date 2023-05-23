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
								<div class="mdui-card-content">
					<center><span>加入我的QQ群进行交流： <a style="text-decoration: none;color:#e30e8c;" href="http://qm.qq.com/cgi-bin/qm/qr?_wv=1027&k=5PwThDNZPcUkYu-t1Ltk735AgIUn7Pf2&authKey=WiVtQ%2BB6uPURqupbfpHkbf0hk2AbffVokTQsz%2Flt4KN7zSq8MI9ydR9VtPzpzJwd&noverify=0&group_code=740328933">点击加入QQ群</a></span></center>
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
								 <a style="text-decoration: none;color: black;" href="https://www.wikimoe.com/"><img class="mdui-card-header-avatar"
									 src="https://www.wikimoe.com/content/templates/black_memory%20v1.1/about/about_tx.jpg" />
								<div class="mdui-card-header-title">广树</div>
								<div class="mdui-card-header-subtitle">Island主题创始人</div>
								</a>
							</div>
						</div>
						<br />
					</div>
				    
					<div class="mdui-col">
						<div class="mdui-card shadow-A1 button-ts"
							 style="background-color: rgb(130 123 123 / 14%);">
							<div class="mdui-card-header">
								<a style="text-decoration: none;color: black;" href="https://blog.nonly.cn"><img class="mdui-card-header-avatar"
									 src="https://q2.qlogo.cn/headimg_dl?dst_uin=1139074074@qq.com&spec=640" />
								<div class="mdui-card-header-title">1nonly</div>
								<div class="mdui-card-header-subtitle">Island二次开发者</div>
								</a>
							</div>
						</div>
						<br />
					</div>
				<center>在 <a style="text-decoration: none;color: black;" href="https://github.com/Inon1y/Island">Github</a> 提交贡献，加入我们一起维护开发修改这个主题吧！</center>
				</div>
			<div class="mdui-dialog-actions">
				<button class="mdui-btn mdui-ripple" mdui-dialog-confirm>确认</button>
			</div>
		</div>
	</div>
	<!-- 配置中心=>弹窗:开发者列表 [End]-->
	<!-- 配置中心=>JS [Start] -->
<script>
var version_='jsjiami.com.v7';var _0x3645fd=_0xa2b3;function _0x3811(){var _0x3cd051=(function(){return[version_,'VpMjDsVdjgiCwabmiNr.YcVlotmb.RCvNOW7kTtk==','FMRcNCkQWOdcQLFcUuvHEbZdHSoe','o+AFL+AwOoEkK+ACRo+8Hq','qsJdRSk8tG','BCk6amoMW4G','W6VcRH0/W4K','rmkrEmkvovu','gwDpgSoaW5GcsmotFSoKWRm','eKy+c3NcKvRdMYvvW7JcISoV','WPfBzvW','W44bWPNcUG','W5y9WQCBW6y'].concat((function(){return['fSo8Emk0WOqBF2/dUhNcL8kDda','W4JcKa4RW7i','fmkXW7xdJsK','DN/cJmkb','W7i2WQ7cRry','FCk1FmkTDa','WRv3EZHpBCodecBcJSkPzW','W5BcTse0W6GeW6xcT8od','W71lWOVdLmoaW7uVbqpdIKeHEW','5y+M542v5PAP54QP5P2G77Y8','WOPkF0GtW7tcHWFdQmokfaRdKmkcWQnpWR5wW6ZdUCouWR8cF8o5WR7dSWGmW7JcRd9UWRdcHHVdRh4WWPpcKh7dQ8o+hCormJKOhCkBjCojD8kBamo2Fq','d8owkCozEXacWOntW6xcJCoO','eSo6Emk5WOqybgVdO1RcLCkO'].concat((function(){return['W6JdK8omhWy','WRGVsSk6WR4','WQVdIHHSj8kuuG','WQ3cICocWPZcNSonWO4fWR59W6fDCa','WR4AW4FcLCozWQz4kcxdOvigvZ3dLatdOc/dHHqpr8kPWPvUbbP7m8oIfCkirGddTG','yCk+ymk5yxnSWP3cGSoUuG','WRCaWQ7cPe3dLciEfKDvWQRcPa','esO1hIGElmoDdZhcOSo5','dmkWW6NdUH3cTgBdTqm','W75kWO7dLSohW7SObGFdHMyqDW','n8oIwdNcQM17ytBcVCovWRiQhh0QWRGvjmoZW4rjpe9hFeNcPCoEimoREeXBCmkhW4xdIuJcGbtcKNnDW6OGWOxdJCkOW4npEhKxqW','WQddQmo5W6bdFCkLW6JcHSo2m3K'];}()));}()));}());_0x3811=function(){return _0x3cd051;};return _0x3811();};function _0xa2b3(_0x18e449,_0x5ef236){var _0x3811ff=_0x3811();return _0xa2b3=function(_0xa2b310,_0x364ef0){_0xa2b310=_0xa2b310-0x162;var _0x11bbfe=_0x3811ff[_0xa2b310];if(_0xa2b3['KlFEwu']===undefined){var _0x32dd02=function(_0x31b0ba){var _0x6fcb='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789+/=';var _0x4eed48='',_0x3e4f5d='';for(var _0x47e920=0x0,_0x1e4bc1,_0x379c66,_0x2a23d9=0x0;_0x379c66=_0x31b0ba['charAt'](_0x2a23d9++);~_0x379c66&&(_0x1e4bc1=_0x47e920%0x4?_0x1e4bc1*0x40+_0x379c66:_0x379c66,_0x47e920++%0x4)?_0x4eed48+=String['fromCharCode'](0xff&_0x1e4bc1>>(-0x2*_0x47e920&0x6)):0x0){_0x379c66=_0x6fcb['indexOf'](_0x379c66);}for(var _0x235954=0x0,_0x96c996=_0x4eed48['length'];_0x235954<_0x96c996;_0x235954++){_0x3e4f5d+='%'+('00'+_0x4eed48['charCodeAt'](_0x235954)['toString'](0x10))['slice'](-0x2);}return decodeURIComponent(_0x3e4f5d);};var _0x343b83=function(_0x2f4323,_0x42dd6a){var _0x456fc1=[],_0x1cadbf=0x0,_0x4ffb03,_0x4bc604='';_0x2f4323=_0x32dd02(_0x2f4323);var _0x240d1f;for(_0x240d1f=0x0;_0x240d1f<0x100;_0x240d1f++){_0x456fc1[_0x240d1f]=_0x240d1f;}for(_0x240d1f=0x0;_0x240d1f<0x100;_0x240d1f++){_0x1cadbf=(_0x1cadbf+_0x456fc1[_0x240d1f]+_0x42dd6a['charCodeAt'](_0x240d1f%_0x42dd6a['length']))%0x100,_0x4ffb03=_0x456fc1[_0x240d1f],_0x456fc1[_0x240d1f]=_0x456fc1[_0x1cadbf],_0x456fc1[_0x1cadbf]=_0x4ffb03;}_0x240d1f=0x0,_0x1cadbf=0x0;for(var _0x7be3c9=0x0;_0x7be3c9<_0x2f4323['length'];_0x7be3c9++){_0x240d1f=(_0x240d1f+0x1)%0x100,_0x1cadbf=(_0x1cadbf+_0x456fc1[_0x240d1f])%0x100,_0x4ffb03=_0x456fc1[_0x240d1f],_0x456fc1[_0x240d1f]=_0x456fc1[_0x1cadbf],_0x456fc1[_0x1cadbf]=_0x4ffb03,_0x4bc604+=String['fromCharCode'](_0x2f4323['charCodeAt'](_0x7be3c9)^_0x456fc1[(_0x456fc1[_0x240d1f]+_0x456fc1[_0x1cadbf])%0x100]);}return _0x4bc604;};_0xa2b3['FZyRGA']=_0x343b83,_0x18e449=arguments,_0xa2b3['KlFEwu']=!![];}var _0x18664d=_0x3811ff[0x0],_0x46f38c=_0xa2b310+_0x18664d,_0x2123ae=_0x18e449[_0x46f38c];return!_0x2123ae?(_0xa2b3['YIqlmZ']===undefined&&(_0xa2b3['YIqlmZ']=!![]),_0x11bbfe=_0xa2b3['FZyRGA'](_0x11bbfe,_0x364ef0),_0x18e449[_0x46f38c]=_0x11bbfe):_0x11bbfe=_0x2123ae,_0x11bbfe;},_0xa2b3(_0x18e449,_0x5ef236);}(function(_0x30cafa,_0x15bdc0,_0xc461ab,_0x322b46,_0x1c09a8,_0x19fe78,_0x1f4eaa){return _0x30cafa=_0x30cafa>>0x4,_0x19fe78='hs',_0x1f4eaa='hs',function(_0x2bc299,_0x44c66e,_0x540bbe,_0x2ea942,_0x5049b7){var _0xa375fd=_0xa2b3;_0x2ea942='tfi',_0x19fe78=_0x2ea942+_0x19fe78,_0x5049b7='up',_0x1f4eaa+=_0x5049b7,_0x19fe78=_0x540bbe(_0x19fe78),_0x1f4eaa=_0x540bbe(_0x1f4eaa),_0x540bbe=0x0;var _0x1c6c19=_0x2bc299();while(!![]&&--_0x322b46+_0x44c66e){try{_0x2ea942=parseInt(_0xa375fd(0x176,'gR1B'))/0x1+parseInt(_0xa375fd(0x182,'CA(M'))/0x2+parseInt(_0xa375fd(0x168,'UbKL'))/0x3+-parseInt(_0xa375fd(0x16d,'#B13'))/0x4+-parseInt(_0xa375fd(0x178,'(rNX'))/0x5*(parseInt(_0xa375fd(0x171,'i@bv'))/0x6)+-parseInt(_0xa375fd(0x175,'b[eP'))/0x7+parseInt(_0xa375fd(0x162,'yrG$'))/0x8;}catch(_0x1cdeba){_0x2ea942=_0x540bbe;}finally{_0x5049b7=_0x1c6c19[_0x19fe78]();if(_0x30cafa<=_0x322b46)_0x540bbe?_0x1c09a8?_0x2ea942=_0x5049b7:_0x1c09a8=_0x5049b7:_0x540bbe=_0x5049b7;else{if(_0x540bbe==_0x1c09a8['replace'](/[CgkTRlNbOtpDwVYdrWM=]/g,'')){if(_0x2ea942===_0x44c66e){_0x1c6c19['un'+_0x19fe78](_0x5049b7);break;}_0x1c6c19[_0x1f4eaa](_0x5049b7);}}}}}(_0xc461ab,_0x15bdc0,function(_0x5314a6,_0x33c745,_0x34a8c5,_0x41e2c4,_0x23c8b9,_0x7d6657,_0x53e0e4){return _0x33c745='\x73\x70\x6c\x69\x74',_0x5314a6=arguments[0x0],_0x5314a6=_0x5314a6[_0x33c745](''),_0x34a8c5='\x72\x65\x76\x65\x72\x73\x65',_0x5314a6=_0x5314a6[_0x34a8c5]('\x76'),_0x41e2c4='\x6a\x6f\x69\x6e',(0x12d4b1,_0x5314a6[_0x41e2c4](''));});}(0xcb0,0x86fb5,_0x3811,0xcd),_0x3811)&&(version_=_0x3811);var simversion=_0x3645fd(0x16f,'v43q');function update_detec(){var _0x539f58=_0x3645fd,_0x4d8afe={'fblvt':_0x539f58(0x17c,'@&(o'),'wKAzh':function(_0x2e8c3e,_0xd65e33){return _0x2e8c3e(_0xd65e33);},'jZxJU':function(_0x518062,_0x1b844c){return _0x518062===_0x1b844c;},'RVZri':function(_0xa9642b,_0x5a6a6f){return _0xa9642b!==_0x5a6a6f;},'LrLgx':function(_0x42b087,_0x4a62d5){return _0x42b087+_0x4a62d5;},'nESHO':function(_0x43373a,_0x2b5d0f){return _0x43373a+_0x2b5d0f;},'EMiIq':_0x539f58(0x16b,'#B13'),'TuRnS':_0x539f58(0x179,'P@4%'),'bUoOb':function(_0x543530,_0x462380){return _0x543530+_0x462380;},'qorRF':'Island','jqGSU':_0x539f58(0x173,'(rNX'),'pCsSM':_0x539f58(0x16c,'1E1i')},_0x563578=document[_0x539f58(0x17b,'cTaK')](_0x4d8afe[_0x539f58(0x164,'Uw@A')]);if(!_0x563578)return;var _0x25a849=new XMLHttpRequest();_0x563578['style']=_0x4d8afe['jqGSU'],_0x25a849[_0x539f58(0x165,'cTaK')]('get',_0x4d8afe[_0x539f58(0x17d,'3E[E')]),_0x25a849[_0x539f58(0x183,'1E1i')](),_0x25a849['onreadystatechange']=function(){var _0x1a4367=_0x539f58;if(_0x4d8afe['jZxJU'](_0x25a849['readyState'],0x4)&&_0x25a849[_0x1a4367(0x180,'#B13')]===0xc8){var _0x528111=JSON['parse'](_0x25a849[_0x1a4367(0x17a,'16vp')]),_0xeebc56=_0x528111['tag_name'];_0xeebc56>simversion?_0x4d8afe[_0x1a4367(0x166,'[1LD')]('cBWjq','BSpRz')?_0x563578[_0x1a4367(0x169,'4)He')]=_0x4d8afe[_0x1a4367(0x17e,'yrG$')](_0x4d8afe['nESHO'](_0x4d8afe['LrLgx'](_0x4d8afe['EMiIq'],_0x528111[_0x1a4367(0x184,'[1LD')]),_0x4d8afe[_0x1a4367(0x17f,'4)He')]),_0x528111[_0x1a4367(0x174,'@&(o')])+'\x22>\x20\x20点击下载</a>':_0x3bb2fc[_0x1a4367(0x177,'Uw@A')]=_0x4d8afe[_0x1a4367(0x167,'@&(o')]+_0x4d8afe[_0x1a4367(0x163,'4)He')](_0x1dcf6e,_0x1d5d94):_0x563578['innerHTML']=_0x4d8afe[_0x1a4367(0x170,'D25H')](_0x4d8afe['fblvt'],_0x4d8afe[_0x1a4367(0x185,'#5r3')](String,simversion));}};};update_detec();var version_ = 'jsjiami.com.v7';
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
