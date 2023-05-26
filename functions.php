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
  	
  	    $meowicp = new Typecho_Widget_Helper_Form_Element_Text('meowicp', NULL, NULL, _t('<center>萌ICP备案号</center>'), _t('<center><p class="description"><style>.center{color:#999;font-size:.92857em;}</style>在这里填入萌ICP备案号, 留空则默认不显示(只需输入数字)</p></center>'));
  	$form->addInput($meowicp);
    
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
					<center><span>加入我的Kook服务器进行交流： <a style="text-decoration: none;color:#e30e8c;" href="https://kook.top/KX4cQx">点击加入Kook服务器频道</a></span>
					<br /><span>加入我的QQ群进行交流： <a style="text-decoration: none;color:#e30e8c;" href="http://qm.qq.com/cgi-bin/qm/qr?_wv=1027&k=5PwThDNZPcUkYu-t1Ltk735AgIUn7Pf2&authKey=WiVtQ%2BB6uPURqupbfpHkbf0hk2AbffVokTQsz%2Flt4KN7zSq8MI9ydR9VtPzpzJwd&noverify=0&group_code=740328933">点击加入QQ群</a></span>
					</center>
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
	var simversion="<?php echo(themeVersion()); ?>";
function update_detec() {
	var container=document.getElementById("Island");
	if(!container) {
		return
	}
	var ajax=new XMLHttpRequest();
	container.style="text-decoration: none;color: black;"
	ajax.open("get","https://api.github.com/repos/Inon1y/Island/releases/latest");
	ajax.send();
	ajax.onreadystatechange=function() {
		if(ajax.readyState===4&&ajax.status===200) {
			var obj=JSON.parse(ajax.responseText);
			var newest=obj.tag_name;
			if(newest>simversion) {
				container.innerHTML="发现新版本："+obj.name+'<a style="text-decoration: none;color: #e30e8c;" href="'+obj.zipball_url+'">  点击下载</a>'
			} else {
				container.innerHTML=" 最新版本："+String(simversion)
			}
		}
	}
}
;
update_detec();
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
        echo 'http://font.nonly.cn/SmileySans-Oblique.otf.woff2';
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
