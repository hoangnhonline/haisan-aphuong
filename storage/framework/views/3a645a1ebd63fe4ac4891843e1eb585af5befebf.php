<?php echo $__env->make('frontend.partials.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="block-breadcrumb">
        <ol class="breadcrumb">
            <li><a href="<?php echo e(route('home')); ?>" title="Trở về trang chủ">Trang chủ</a></li>
      		<li class="active"><?php echo $cateDetail->name; ?></li>
        </ol>
    </div>
</div><!-- /.breadcrumb -->
<main class="main-content clearfix">
    <div class="container">
        <div class="row" id="block-main-container">
            <?php echo $__env->make('frontend.cate.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="col-md-9 category-content">
                <div class="box box-shadow" style="padding-top: 5px">    
                	<div class="wysiwyg wysiwyg-news">                
                    <h1 class="page-title"><?php echo $cateDetail->name; ?></h1>
					<div class="block-article-list">
						<ul class="article-list-news">
						    <?php if($articlesList): ?>
      						<?php foreach($articlesList as $obj): ?>
						    <li class="article-news-item">
						        <div class="article-news-item-head">
						            <a href="<?php echo e(route('news-detail', [ $obj->cate->slug, $obj->slug, $obj->id ])); ?>">
						                <img src="<?php echo e($obj->image_url ? Helper::showImageThumb($obj->image_url, 2) : URL::asset('public/assets/images/no-img.jpg')); ?>" alt="<?php echo $obj->title; ?>">
						              </a>
						        </div>
						        <div class="article-news-item-description">
						            <a href="<?php echo e(route('news-detail', [ $obj->cate->slug, $obj->slug, $obj->id ])); ?>" title="<?php echo $obj->title; ?>"><?php echo $obj->title; ?></a>
						            <div class="nd-time"><?php echo date( 'd/m/Y H:i', strtotime($obj->created_at) ); ?></div>
						            <p><?php echo $obj->description; ?></p>
						        </div>
						    </li>
						    <?php endforeach; ?>
						    <?php endif; ?>						   
						</ul>
					</div><!-- /."block-article-list -->
					<div class="block-pagination pull-right">						
						<?php echo e($articlesList->links()); ?>

					</div><!-- /.block-pagination -->
					<div class="clearfix"></div>
				</div>
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