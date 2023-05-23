<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<script type="text/javascript">
        function button_search(){
            var G=document.getElementById('input_search').value;
            G="http://"+window.location.host+"/index.php/search/"+G+"/";
            window.location.href=G;
        }
        function key_search(e){
          var evt = window.event || e; 
          if (evt.keyCode == 13){
            var G=document.getElementById('input_search').value;
            G="http://"+window.location.host+"/index.php/search/"+G+"/";
            window.location.href=G;
          }
        }
    </script>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/reset.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/common.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/js/highlight/styles/arduino-light.css'); ?>">
    <link rel="shortcut icon" href="<?php $this->options->WebFavicon(); ?>" type="image/x-icon"/>
    <script src="<?php $this->options->themeUrl('assets/js/jquery-1.12.4.min.js'); ?>" type="text/javascript"></script>

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
<style>
@font-face {
    font-family: CustomFont;
    src: url(<?php CustomFont_url();?>);
    }
body {
    font-family: CustomFont, serif;
    }
<?php $this->options->CustomStyle(); ?>
</style>
	   <header id="masthead" class="site-header" role="banner">
  <div class="navigation-top">
    <ul class="hdr_menu">
      <li class="island_logo_box">
      <?php if ($this->options->HeaderLogourl): ?>
        <a id="logo" href="<?php $this->options->siteUrl(); ?>">
            <img src="<?php $this->options->HeaderLogourl(); ?>" alt="<?php $this->options->title() ?>" />
        </a>
      <?php else: ?>
        <a id="logo" href="<?php $this->options->siteUrl(); ?>">
            <img src="<?php $this->options->themeUrl('assets/img/ftr_logo.png'); ?>" />
        </a>
      <?php endif; ?>
      </li>

      <li class="menu-item menu-item-type-post_type menu-item-object-page">
        <a href="<?php $this->options->siteUrl(); ?>">
          <p class="ja">首页</p>
          <p class="en">home</p>
          <div class="line"></div>
        </a>
      </li>

      <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
      <?php while($pages->next()): ?>
      <li class="menu-item menu-item-type-post_type menu-item-object-page">
        <a href="<?php $pages->permalink(); ?>">
          <p class="ja"><?php $pages->title(); ?></p>
          <p class="en">
          <?php
          if(isset($pages->fields->en)){
            echo $pages->fields->en;
            }else{
            echo 'page';
            }
            ?>
          </p>
          <div class="line"></div>
        </a>
      </li>
      <?php endwhile; ?>
      
    <li class="menu-item menu-item-type-post_type menu-item-object-page">
        <a href="https://travellings.cn/go.html">
          <p class="ja">开往</p>
          <p class="en">travellings</p>
          <div class="line"></div>
        </a>
      </li>
      
      <li class="island_logo_box">
      <div class="search">
            <input type="text" placeholder="请输入..." name="" id="input_search" value="" onkeydown="key_search(event);"/>
            <button onclick="button_search()"><i>搜索</i></button>
        </div>
        </li>
    </ul>
  </div>
  <?php $this->need('sidebar.php'); ?>
</header>
<div id="menu_btn" class="sp">
  <a href="#">
    <span></span><span></span><span></span>
  </a>
</div>
<div id="bg_can"></div>
<div id="body">
    <div class="container">
        <div class="row">

    
    
