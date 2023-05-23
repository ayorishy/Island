<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->
<footer id="colophon" class="site-footer" role="contentinfo">
  <hr class="pc">
  <hr class="pc">
  <hr class="pc">
  <div class="wrpr">
      <ul class="ftr_menu pc">
          
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
      
</ul>
    <div id="to_top" style="right:-9.5px;" class="pc">
    <img src="<?php $this->options->themeUrl('assets/img/backtop.png'); ?>" width="130px" title="返回顶部~">
    </div>
        <div class="pc ftr_logo">
    <?php if ($this->options->FooterLogoUrl): ?>
      <a href="<?php $this->options->siteUrl(); ?>">
            <img src="<?php $this->options->FooterLogoUrl() ?>" alt="<?php $this->options->title() ?>" width="151" height="auto" />
        </a>
      <?php else: ?>
        <a href="<?php $this->options->siteUrl(); ?>">
            <img src="<?php $this->options->themeUrl('assets/img/ftr_logo.png'); ?>" width="151" height="auto" />
        </a>
      <?php endif; ?>
    </div>
    <div class="copyright">
      <div class="wrpr">
        <p>
          <span>
          <?php echo "网站勉强运行了"; echo getBuildTime(); ?>
           <br>
           Powered by<a href="https://typecho.org/" target="_blank" data-pjax-state=""> Typecho </a> Theme -<a href="https://blog.nonly.cn/island.html" data-pjax-state=""> Island </a>
           <br>
           &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>
           <?php _e(''); ?> All rights reserved.
           </p>
        <p><span>
            <a href="https://beian.miit.gov.cn/" target="_blank" style="color: inherit;"><?php $this->options->icp() ?></a>
            <?php $this->options->CustomFooter(); ?>
        </span></p>
      </div>
    </div>
  </div>
  <!-- .wrap --></footer>
<script type="text/javascript">
		$(function(){
		  $("#BackToTop").click(function() {
			  $("html,body").animate({scrollTop:0}, 500);
		  }); 
		 })
</script>	
<script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php $this->options->themeUrl('assets/js/jquery.easing.js'); ?>" type="text/javascript"></script>
<script src="<?php $this->options->themeUrl('assets/js/pixi.min.js'); ?>" type="text/javascript"></script>
<script src="<?php $this->options->themeUrl('assets/js/background.js'); ?>" type="text/javascript"></script>
<script src="<?php $this->options->themeUrl('assets/js/common.js'); ?>" type="text/javascript"></script>
<script src="<?php $this->options->themeUrl('assets/js/highlight/highlight.pack.js'); ?>"></script>
<script>hljs.initHighlightingOnLoad();</script>
<script>
<?php $this->options->CustomJavascript() ?>
</script>
<?php $this->footer(); ?>
</body>
</html>
