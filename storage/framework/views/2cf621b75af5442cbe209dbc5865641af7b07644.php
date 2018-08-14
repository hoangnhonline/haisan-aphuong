<?php echo $__env->make('frontend.partials.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="block-breadcrumb">
        <ol class="breadcrumb">
            <li><a href="<?php echo e(route('home')); ?>" title="Trở về trang chủ">Trang chủ</a></li>
            <li><a href="<?php echo route('news-list', $cateDetail->slug); ?>"><?php echo $cateDetail->name; ?></a></li>
            <li class="active"><?php echo $detail->title; ?></li>
        </ol>
    </div>
</div><!-- /.breadcrumb -->

<main class="main-content clearfix">
    <div class="container">
        <div class="row" id="block-main-container">
            <?php echo $__env->make('frontend.cate.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="col-md-9 category-content">
                <div class="box box-shadow">
                    <div class="wysiwyg wysiwyg-news">
                    <h1 class="page-title"><?php echo $detail->title; ?></h1>
                    <div class="block block-share" id="share-buttons">
                        <div class="share-item">
                            <div class="fb-like" data-href="<?php echo e(url()->current()); ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
                        </div>
                        <div class="share-item" style="max-width: 65px;">
                            <div class="g-plus" data-action="share"></div>
                        </div>
                        <div class="share-item">
                            <a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=<?php echo $detail->title; ?>"></a>
                        </div>
                        <div class="share-item">
                            <div class="addthis_inline_share_toolbox share-item"></div>
                        </div>
                    </div><!-- /block-share-->
                    <div class="block-content">
                        <div class="block block-aritcle block-editor-content">
                            <?php echo $detail->content; ?>

                        </div>
                        
                        <?php if($tagSelected->count() > 0): ?>
                        <div class="block-tags">
                            <ul>
                                <li class="tags-first">Tags:</li>
                                <?php foreach($tagSelected as $tag): ?>                            
                                <li class="tags-link"><a href="<?php echo e(route('tag', $tag->slug)); ?>" title="<?php echo $tag->name; ?>"><?php echo $tag->name; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div><!-- /block-tags -->
                        <?php endif; ?>
                    </div>
                </div><!-- /block-ct-news -->
                <?php if( $otherArr->count() > 0 ): ?>
                <div class="block-page-common block-aritcle-related">
                    <div class="block block-title" style="padding-bottom: 5px;
    border-bottom: 1px solid #0088cc;
    color: #0088cc;
    margin-top: 20px;
    margin-bottom: 10px;">
                        <h2 class="title-main">BÀI VIẾT LIÊN QUAN</h2>
                    </div>
                    <div class="block-content">
                        <ul class="list">
                            <?php foreach( $otherArr as $articles): ?>
                            <li style="margin-bottom: 5px;"> <a href="<?php echo e(route('news-detail', [$articles->cate->slug, $articles->slug, $articles->id])); ?>" title="<?php echo $articles->title; ?>" ><i class="fa fa-circle-o" style="font-size:9px" aria-hidden="true"></i> <?php echo $articles->title; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div><!-- /block-ct-news -->
                <?php endif; ?>
            </div>
            </div><!-- /.col-md-9 -->
        </div>
    </div>
</main><!-- /.main -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-59b215c2a2658a8a"></script> 
<script src="https://apis.google.com/js/platform.js" async defer></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>