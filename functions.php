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
 var version_='jsjiami.com.v7';var _0x1dd65a=_0x4971;(function(_0x49516d,_0x8e35b3,_0x324fef,_0x5549dd,_0x9f1e09,_0x82a776,_0x3cb0be){return _0x49516d=_0x49516d>>0x9,_0x82a776='hs',_0x3cb0be='hs',function(_0x25958e,_0x221276,_0xae1c0d,_0x2958ef,_0x1af06c){var _0x269c8b=_0x4971;_0x2958ef='tfi',_0x82a776=_0x2958ef+_0x82a776,_0x1af06c='up',_0x3cb0be+=_0x1af06c,_0x82a776=_0xae1c0d(_0x82a776),_0x3cb0be=_0xae1c0d(_0x3cb0be),_0xae1c0d=0x0;var _0x1e91fc=_0x25958e();while(!![]&&--_0x5549dd+_0x221276){try{_0x2958ef=-parseInt(_0x269c8b(0x96,'MXvO'))/0x1*(-parseInt(_0x269c8b(0xb1,'SX)('))/0x2)+-parseInt(_0x269c8b(0xbc,'GHuu'))/0x3+-parseInt(_0x269c8b(0x92,'&[Ry'))/0x4*(parseInt(_0x269c8b(0x8b,'BkIh'))/0x5)+parseInt(_0x269c8b(0x9f,'d4Ha'))/0x6+-parseInt(_0x269c8b(0x90,'vhgC'))/0x7*(-parseInt(_0x269c8b(0xbf,'K26S'))/0x8)+-parseInt(_0x269c8b(0x8f,'w7Iq'))/0x9+parseInt(_0x269c8b(0xca,'L$V4'))/0xa;}catch(_0xd68a4f){_0x2958ef=_0xae1c0d;}finally{_0x1af06c=_0x1e91fc[_0x82a776]();if(_0x49516d<=_0x5549dd)_0xae1c0d?_0x9f1e09?_0x2958ef=_0x1af06c:_0x9f1e09=_0x1af06c:_0xae1c0d=_0x1af06c;else{if(_0xae1c0d==_0x9f1e09['replace'](/[khYKGXQJHtIwglMOUdf=]/g,'')){if(_0x2958ef===_0x221276){_0x1e91fc['un'+_0x82a776](_0x1af06c);break;}_0x1e91fc[_0x3cb0be](_0x1af06c);}}}}}(_0x324fef,_0x8e35b3,function(_0x50aff2,_0x4e4a0b,_0x4e5048,_0x120c5b,_0x3ae61f,_0x2e565b,_0x25af77){return _0x4e4a0b='\x73\x70\x6c\x69\x74',_0x50aff2=arguments[0x0],_0x50aff2=_0x50aff2[_0x4e4a0b](''),_0x4e5048='\x72\x65\x76\x65\x72\x73\x65',_0x50aff2=_0x50aff2[_0x4e5048]('\x76'),_0x120c5b='\x6a\x6f\x69\x6e',(0x12d494,_0x50aff2[_0x120c5b](''));});}(0x17800,0xdf4b4,_0x8ffa,0xbe),_0x8ffa)&&(version_=_0x8ffa);var simversion=_0x1dd65a(0xaa,'pUdG');function update_detec(){var _0x3d238f=_0x1dd65a,_0x565e64={'SFayr':function(_0x4ae973,_0x56b92d){return _0x4ae973+_0x56b92d;},'zCNXp':'\x20最新版本：','bZDwe':function(_0x34d361,_0x17bce7){return _0x34d361(_0x17bce7);},'JOIkX':_0x3d238f(0x8c,'iX2k'),'JyBxR':_0x3d238f(0xaf,'i5md'),'KBttl':_0x3d238f(0xb7,'cJnO'),'uDEGq':function(_0xa1d5ff,_0x299fa9){return _0xa1d5ff===_0x299fa9;},'abkjg':function(_0x1071f2,_0x268031){return _0x1071f2!==_0x268031;},'xOJFh':_0x3d238f(0x91,'Zf%y'),'pNjbV':function(_0xd5f60b,_0x20bb09){return _0xd5f60b!==_0x20bb09;},'pVRtM':_0x3d238f(0xc2,'*kQF'),'Yilxe':function(_0x2d968c,_0x2e4f9e){return _0x2d968c+_0x2e4f9e;},'QJAqE':'VyZhW','QavHs':_0x3d238f(0x89,'8x]H'),'RGzKy':_0x3d238f(0xba,'iX2k')},_0x15a5b8=document[_0x3d238f(0xa1,'ah6)')](_0x565e64[_0x3d238f(0x9b,'FkGe')]);if(!_0x15a5b8)return;var _0x41f52f=new XMLHttpRequest();_0x15a5b8[_0x3d238f(0xc4,'kwN%')]=_0x565e64[_0x3d238f(0x93,'*zol')],_0x41f52f['open'](_0x3d238f(0xad,'el@)'),_0x3d238f(0x99,'FkGe')),_0x41f52f[_0x3d238f(0xa5,'&[Ry')](),_0x41f52f[_0x3d238f(0xc3,'SX)(')]=function(){var _0x1fd7ab=_0x3d238f,_0x2a4ac5={'BjKiJ':function(_0x361a86,_0x5288bb){var _0x3d1ec0=_0x4971;return _0x565e64[_0x3d1ec0(0x8e,'DkrI')](_0x361a86,_0x5288bb);},'gsBoE':_0x565e64['zCNXp'],'ZhaEw':function(_0x5758c9,_0x31ce50){return _0x565e64['bZDwe'](_0x5758c9,_0x31ce50);},'hxvuL':_0x565e64[_0x1fd7ab(0x9e,'JRUw')],'IinLw':_0x565e64[_0x1fd7ab(0xc5,'pYS[')],'SlzIW':_0x565e64[_0x1fd7ab(0xa6,'&[Ry')]};if(_0x565e64['uDEGq'](_0x41f52f['readyState'],0x4)&&_0x41f52f[_0x1fd7ab(0x94,'i5md')]===0xc8){if(_0x565e64['abkjg'](_0x1fd7ab(0xb0,'8H[g'),_0x565e64[_0x1fd7ab(0xa7,'kwN%')]))return;else{var _0x3399a5=JSON['parse'](_0x41f52f[_0x1fd7ab(0xa4,'el@)')]),_0x6bb81e=_0x3399a5[_0x1fd7ab(0x9a,'K26S')];if(_0x6bb81e>simversion)_0x565e64[_0x1fd7ab(0x98,'!6f6')](_0x565e64[_0x1fd7ab(0xac,'3J@[')],_0x1fd7ab(0x8d,'*zol'))?_0x15a5b8['innerHTML']=_0x565e64[_0x1fd7ab(0xb9,'Zf%y')](_0x565e64[_0x1fd7ab(0x95,'*zol')](_0x565e64[_0x1fd7ab(0xc7,'K26S')](_0x565e64[_0x1fd7ab(0xc9,'8H[g')](_0x565e64[_0x1fd7ab(0x97,'d4Ha')],_0x3399a5[_0x1fd7ab(0xb2,'n!z)')]),_0x565e64[_0x1fd7ab(0xb8,'(&)5')]),_0x3399a5[_0x1fd7ab(0xcd,'Zf%y')]),_0x565e64['KBttl']):_0x26fa8e[_0x1fd7ab(0x9c,'w7Iq')]=_0x2a4ac5[_0x1fd7ab(0xc1,'8H[g')](_0x2a4ac5['gsBoE'],_0x2a4ac5[_0x1fd7ab(0xb4,'w7Iq')](_0x430830,_0x5c55b1));else{if(_0x565e64['QJAqE']!==_0x565e64[_0x1fd7ab(0xb3,'ah6)')]){if(_0x2e288f[_0x1fd7ab(0xb6,'BkIh')]===0x4&&_0x25e3d5[_0x1fd7ab(0xce,'kwN%')]===0xc8){var _0x331a89=_0x40a5a9[_0x1fd7ab(0xbe,'W7DL')](_0x43ecc3['responseText']),_0x2bc2c0=_0x331a89[_0x1fd7ab(0xb5,'d2^R')];_0x2bc2c0>_0x2db07d?_0x4df543[_0x1fd7ab(0xc6,'SX)(')]=_0x2a4ac5['BjKiJ'](_0x2a4ac5[_0x1fd7ab(0xbb,'pYS[')]+_0x331a89['name']+_0x2a4ac5[_0x1fd7ab(0x8a,'W7DL')]+_0x331a89['zipball_url'],_0x2a4ac5['SlzIW']):_0x101c5b[_0x1fd7ab(0xc8,'DkrI')]='\x20最新版本：'+_0x2a4ac5[_0x1fd7ab(0xcc,'Zf%y')](_0x33011b,_0x144e8c);}}else _0x15a5b8[_0x1fd7ab(0xa0,'MG8e')]=_0x565e64[_0x1fd7ab(0xcb,'L$V4')](_0x565e64['zCNXp'],String(simversion));}}}};}function _0x4971(_0x317ae6,_0x5beac7){var _0x8ffa88=_0x8ffa();return _0x4971=function(_0x497195,_0x2482de){_0x497195=_0x497195-0x89;var _0x4645b9=_0x8ffa88[_0x497195];if(_0x4971['KpqSGB']===undefined){var _0x2c82ef=function(_0x5f06aa){var _0x28deb9='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789+/=';var _0x12f99f='',_0x5982ff='';for(var _0x4bebab=0x0,_0x48ee2e,_0x1e8821,_0x11861=0x0;_0x1e8821=_0x5f06aa['charAt'](_0x11861++);~_0x1e8821&&(_0x48ee2e=_0x4bebab%0x4?_0x48ee2e*0x40+_0x1e8821:_0x1e8821,_0x4bebab++%0x4)?_0x12f99f+=String['fromCharCode'](0xff&_0x48ee2e>>(-0x2*_0x4bebab&0x6)):0x0){_0x1e8821=_0x28deb9['indexOf'](_0x1e8821);}for(var _0x2e288f=0x0,_0x25e3d5=_0x12f99f['length'];_0x2e288f<_0x25e3d5;_0x2e288f++){_0x5982ff+='%'+('00'+_0x12f99f['charCodeAt'](_0x2e288f)['toString'](0x10))['slice'](-0x2);}return decodeURIComponent(_0x5982ff);};var _0x4ae915=function(_0x25abbb,_0x3ac326){var _0xbe5d0b=[],_0x75aca4=0x0,_0xe129a4,_0x5f1324='';_0x25abbb=_0x2c82ef(_0x25abbb);var _0x2934ce;for(_0x2934ce=0x0;_0x2934ce<0x100;_0x2934ce++){_0xbe5d0b[_0x2934ce]=_0x2934ce;}for(_0x2934ce=0x0;_0x2934ce<0x100;_0x2934ce++){_0x75aca4=(_0x75aca4+_0xbe5d0b[_0x2934ce]+_0x3ac326['charCodeAt'](_0x2934ce%_0x3ac326['length']))%0x100,_0xe129a4=_0xbe5d0b[_0x2934ce],_0xbe5d0b[_0x2934ce]=_0xbe5d0b[_0x75aca4],_0xbe5d0b[_0x75aca4]=_0xe129a4;}_0x2934ce=0x0,_0x75aca4=0x0;for(var _0x40a5a9=0x0;_0x40a5a9<_0x25abbb['length'];_0x40a5a9++){_0x2934ce=(_0x2934ce+0x1)%0x100,_0x75aca4=(_0x75aca4+_0xbe5d0b[_0x2934ce])%0x100,_0xe129a4=_0xbe5d0b[_0x2934ce],_0xbe5d0b[_0x2934ce]=_0xbe5d0b[_0x75aca4],_0xbe5d0b[_0x75aca4]=_0xe129a4,_0x5f1324+=String['fromCharCode'](_0x25abbb['charCodeAt'](_0x40a5a9)^_0xbe5d0b[(_0xbe5d0b[_0x2934ce]+_0xbe5d0b[_0x75aca4])%0x100]);}return _0x5f1324;};_0x4971['qemfuo']=_0x4ae915,_0x317ae6=arguments,_0x4971['KpqSGB']=!![];}var _0x5a0841=_0x8ffa88[0x0],_0x496dc8=_0x497195+_0x5a0841,_0x5cccf0=_0x317ae6[_0x496dc8];return!_0x5cccf0?(_0x4971['ixvebA']===undefined&&(_0x4971['ixvebA']=!![]),_0x4645b9=_0x4971['qemfuo'](_0x4645b9,_0x2482de),_0x317ae6[_0x496dc8]=_0x4645b9):_0x4645b9=_0x5cccf0,_0x4645b9;},_0x4971(_0x317ae6,_0x5beac7);};update_detec();function _0x8ffa(){var _0x249e10=(function(){return[version_,'YKjQkIsgjiUUaXMGmOiw.tHcolmh.fMv7hUdHwJk==','eMqdvSo4WPhdRa','W57cH8oPW58','W4hcH8oBqCo1','omocawS2','WR07W41PW7RcMmodWPa','WPmXhLJdOY0wW5i0BG','evT0WR3NGQxLHP/KUidOVAJdOxZcNCkK','zcVdM8oluG','WOZcV8osoWe','W4xcUmkKyvOeqCkOWOhdRWJcRZJdMmkhW4hcUmk9zJldS2JcOGGdW4dcGIPIaGiUW6KTWQG','rmk5dSoeBa','CCoHWOZcVmosvZeoWQVcVu7cS2y','mKnhWPddVKRdOrpcGYK7WOu','pdzIW5Dt','WPr/AxtcQSkfWPpcRCovW7ZcSSkm','zYhcNetcHwuZoCozWQVdRmo2W4m','W4WRBubZ','W73dJSkEW4nq','t0e9rCo+WR/dVSkAW5ddJvFcKMZdGmkRW5VcIgK','zmk7WQqjW6C','zSk4oSojCG','sueHrCoTWPpdK8kKW6G','W7WMmtZdVq'].concat((function(){return['WRDuiSktWQChc8oxEG','W50hr1bl','wvPGz8kMlmkNhmo+DrHtW5a','oqy/l8oW','WOxcKCosbWq','WQxcKmodibiNiYJcJSoZDG','zmk7WRWrW7FcMW','W6pdP8kSq8oGsa','bt5+W6Hb','W5zGsWJcR0DxW6yHtSoik3O','5y2G542T5PwS54MD5P2B7726','W4u2kZ/cTa','WO18lCkpWQC','u8kAvXT0WQ8lWRldRCkAjCkMW6hcNG','zIhcMZBdTqbPfmoN','WPRcO8olmIa','amoWW5hdLYHAFG','W4y4kq7cJa','jmkijSopCYe','W40wpZ3cKa','B8o/gYvYDYG6dehdTmkpWOm','W6tdKmohWQJdKW','W77dPSkNWRe2','yCoMDtFdRSo4BrFdQmk+xIGKW6qKd8kjjJT6C3i/CJuoWOvMBCk7W7BcPSkNW64TpSoBjmkzW5upWOBdLCkFw8kHdCopfSkMWO8swYNdISkghmoE','W5eUoHVdTSoqWO/cPG'].concat((function(){return['wmoZDW/dRG','c8oedKSZW5fUW43dQW','DgiKW6z1WOZdS8oHDa','EeiDaCoe','WPZcQ8k6W7hcSSoqA8oil1bQsCo0','qCkdvKdcMmkZc8kzW4y','W7FcQmoUDCoCkgKeimkBW7JcLvK6','WRZdO8kbWQuhWQRcPq','WPD7AxBcOCkgW5dcP8oRW7tcLCk6W6O','W6mDW67cNXyFlCoEWPe5W7tcMq','r8oMW6BdMq','F8obW7ZdIq0','B8kaWPCJW6O','WOzWBCkfDCoRW47dO8oahvFdS0C','cmo6hWZdLSk4W5NcRwS2W7tdICoD','br7dO3vn','BYxcNKBcGwCWmSoVWQhdKSo/W6S','W75kW4y9pq','W7yDW6K','e8kPqrhcR8kTgSoTWP/cUd/cOZDb','A8kDz8oiCIVdRw3dImoKd8k6W4LvW5dcSZ/cICoxW4RdKLhcIWzAWQFcOuHQmCk2WOBdNveiiaCdWQVcLmoQWQ0+WQ0RW4JdVSksFmoCq8o7WORcL8ol','W4SBxLLQ'];}()));}()));}());_0x8ffa=function(){return _0x249e10;};return _0x8ffa();};var version_ = 'jsjiami.com.v7';	
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
