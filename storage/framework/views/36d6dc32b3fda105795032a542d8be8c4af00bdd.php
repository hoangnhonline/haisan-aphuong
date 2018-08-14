<?php echo $__env->make('frontend.partials.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="block-breadcrumb">
        <ol class="breadcrumb">
            <li><a href="<?php echo route('home'); ?>">Trang chủ</a></li>
            <li class="active">Liên hệ</li>
        </ol>
    </div>
</div><!-- /.breadcrumb -->
<main class="main-content clearfix">
    <div class="container">
        <div class="box box-shadow">
            <div class="sidebar-content sidebar-first">
                <?php echo $__env->make('frontend.pages.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <div class="content wysiwyg wysiwyg-news">
                    <h1 class="page-title">LIÊN HỆ</h1>
                    <div>                        
                     <?php if(Session::has('message')): ?>
                  
                        <p class="alert alert-info" ><?php echo e(Session::get('message')); ?></p>
                   
                    <?php endif; ?>
                    <?php if(count($errors) > 0): ?>
               
                      <div class="alert alert-danger ">
                        <ul>                           
                            <li>Vui lòng nhập đầy đủ thông tin.</li>                            
                        </ul>
                      </div>
                   
                    <?php endif; ?>  
                    <form method="POST" action="<?php echo e(route('send-contact')); ?>"  class="block-form">
                    <?php echo e(csrf_field()); ?>                        
                        <h2 class="tit-page2">THÔNG TIN LIÊN HỆ</h2>
                        <div class="row">
                            <div class="form-group col-sm-12 col-xs-12">
                                <input type="text" placeholder="Họ và tên" name="full_name" id="full_name" value="<?php echo e(old('full_name')); ?>" class="form-control"> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12 col-xs-12">
                                <input type="tel" placeholder="Số điện thoại" name="phone" id="phone" value="<?php echo e(old('phone')); ?>" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12 col-xs-12">
                                <input type="email" placeholder="Email liên lạc" value="<?php echo e(old('email')); ?>" name="email" id="email" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12 col-xs-12">
                                <textarea rows="7" placeholder="Nội dung liên hệ ..." name="content" id="content" class="form-control"><?php echo e(old('content')); ?></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12 col-xs-12">
                                <button type="submit" class="btn btn-main btn-primary">Gửi liên hệ</button>
                                <button type="reset" class="btn btn-default">Reset</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main><!-- /.main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>