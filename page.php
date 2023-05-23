<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('public/header.php'); ?>

<div class="wrap">
    <div class="post_body type_page" id="main" role="main">
        <article class="post">
            <h1 class="post-title"><?php $this->title() ?></h1>
            <div class="post-content">
                <?php $this->content(); ?>
            </div>
        </article>

        <?php $this->need('public/comments.php'); ?>
    </div><!-- end #main-->
</div>

<?php $this->need('public/footer.php'); ?>
