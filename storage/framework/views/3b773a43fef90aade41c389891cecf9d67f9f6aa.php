<?php echo $__env->make('frontend.partials.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="block-breadcrumb">
        <ol class="breadcrumb">
            <li><a href="<?php echo route('home'); ?>">Trang chủ</a></li>
            <li class="active"><?php echo $detailPage->title; ?></li>
        </ol>
    </div>
</div><!-- /.breadcrumb -->
<main class="main-content clearfix">
	<div class="container">
		<div class="box box-shadow">
			<div class="sidebar-content sidebar-first">
				<?php echo $__env->make('frontend.pages.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				<div class="content wysiwyg wysiwyg-news">
				    <h1 class="page-title"><?php echo $detailPage->title; ?></h1>
				    <div>
				    	<?php echo $detailPage->content; ?>

				    </div>
				</div>
			</div>
		</div>
	</div>
</main><!-- /.main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>