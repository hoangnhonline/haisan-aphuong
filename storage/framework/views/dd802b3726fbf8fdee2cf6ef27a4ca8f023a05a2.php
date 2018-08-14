<?php echo $__env->make('frontend.partials.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="block-breadcrumb">
        <ol class="breadcrumb">
            <li><a href="<?php echo e(route('home')); ?>">Trang chủ</a></li>
            <li class="active"><?php echo $parentDetail->name; ?></li>
        </ol>
    </div>
</div><!-- /.breadcrumb -->

<main class="main-content clearfix">
    <div class="container">
        <div class="row" id="block-main-container">
            <?php echo $__env->make('frontend.cate.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="col-md-9 category-content">
                <!--<div class="cate-on-slide">
                    <ul class="owl-carousel nav-center" data-items="1" data-dots="false" data-autoplay="true" data-loop="true" data-nav="true">
                        <li><a href="#" title=""><img src="images/cate-slide/59c48b6c59b53-hnangi-cate.jpg" alt=""></a></li>
                        <li><a href="#" title=""><img src="images/cate-slide/59dc842e9722d-880x330.jpg" alt=""></a></li>
                        <li><a href="#" title=""><img src="images/cate-slide/59ddc46c468b5-880x330-10.jpg" alt=""></a></li>
                        <li><a href="#" title=""><img src="images/cate-slide/59f9466a96444-cotedazur-880x330.jpg" alt=""></a></li>
                        <li><a href="#" title=""><img src="images/cate-slide/59fae88c2c29f-880x330-17.jpg" alt=""></a></li>
                    </ul>
                </div><!-- /.cate-on-slide -->
                <div class="block branding category-header">
                    <div class="block_header has-branding">
                        <h1 class="block_title category-header-heading" style="text-transform: uppercase;">
                            <span class="block_branding" style="background-color: <?php echo e($parentDetail->color_code); ?>"><img src="<?php echo e(Helper::showImage($parentDetail->icon_url)); ?>" style="display: inline-block; vertical-align: middle;margin-top: -4px;" alt="<?php echo $parentDetail->name; ?>"></span><?php echo $parentDetail->name; ?></h1>
                    </div>
                </div><!-- /.header -->
                <!--<div class="filter-inline current-filter">
                    <div class="filter_title">Tìm kiếm được 174 deals theo chọn lọc:</div>
                    <div class="filter_body">
                        <div id="current-filter-tag">
                            <label class="filter_button active">
                                Bình Chánh <i class="fa fa-times"></i>
                            </label>
                        </div>
                    </div>
                </div><!-- /.current-filter -->
                <div id="category_content">
                   <div class="row products products-cate">
                        <?php if($productList): ?>
                            <?php foreach($productList as $obj): ?>
                            <div class="col-md-4 product-item">
                                <div class="product product-kind-1">
                                    <div class="product_image">
                                        <a href="<?php echo e(route('product', [$obj->slug])); ?>" title="<?php echo $obj->name; ?>">
                                            <img class="img-responsive" alt="<?php echo $obj->name; ?>" src="<?php echo e(Helper::showImageThumb($obj->image_url)); ?>" />
                                        </a>
                                    </div>
                                    <div class="product_header">
                                        <h3 class="product_title">
                                            <a href="<?php echo e(route('product', [$obj->slug])); ?>" title="<?php echo $obj->name; ?>"><?php echo $obj->name; ?></a>
                                        </h3>
                                    </div>
                                    <div class="product_info">
                                        <div class="product_price _product_price">
                                            <span class="price">
                                                <span class="price_value" itemprop="price">
                                                    <?php if($obj->is_sale == 1 && $obj->price_sale > 0): ?>
                                                    <?php echo e(number_format($obj->price_sale)); ?>

                                                    <?php else: ?>
                                                        <?php echo e(number_format($obj->price)); ?>

                                                    <?php endif; ?>  </span><span class="price_symbol">đ</span>
                                                <?php if( $obj->is_sale == 1 && $obj->sale_percent > 0 ): ?>                                                        
                                                <span class="price_discount">-<?php echo e($obj->sale_percent); ?>%</span>
                                                <?php endif; ?>
                                                
                                            </span>
                                        </div>
                                        <?php if($obj->is_fbshare == 1): ?>
                                        <div class="product_price">
                                        <span class="price price_fb" style="font-size: 15px;color:red">
                                            <span class="price_value" title="Giá sau khi share Facebook" itemprop="price"><i class="fa-facebook-official fa" style="color:#1f6284" title="Giá sau khi share Facebook"></i> <?php echo number_format($obj->price_share); ?></span><span class="price_symbol">đ</span>
                                        </span>      
                                        </div>                          
                                        <?php else: ?>
                                        <?php if( $obj->is_sale == 1 && $obj->sale_percent > 0 ): ?>
                                        <div class="product_price product_price-list-price _product_price_old " style="display: inline-block;">
                                            <span class="price price-list-price">
                                            <span class="price_value"><?php echo e(number_format($obj->price)); ?></span><span class="price_symbol">đ</span>
                                            </span>
                                        </div>
                                        <?php endif; ?>
                                        <?php endif; ?>
                                        <div class="product_views">
                                            <i class="fa fa-user-o"></i> <?php echo e(number_format(Helper::slm($obj->id))); ?>

                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.product-item -->                                    
                            <?php endforeach; ?>
                        <?php endif; ?>
                        
                    </div>
                </div><!-- /.category_content -->
                <div style="text-align:center">
                    <?php echo e($productList->links()); ?>

                  </div>  
                <!--<div class="block-pagination pull-right">
                    <span class="pagination_text mmm">Trang 1/2</span>
                    <ul class="pagination">
                        <li class="page-number active"><a href="#" title="">1</a></li>
                        <li class="page-number"><a href="#" title="">2</a></li>
                        <li class="page-next"><a href="#" title=""><i class="fa fa-chevron-right"></i></a></li>
                        <li class="page-last"><a href="#" title="">Cuối</a></li>
                    </ul>
                </div><!-- /.block-pagination -->
            </div><!-- /.col-md-9 -->
        </div>
    </div>
</main><!-- /.main -->
<style type="text/css">
    .nav-top-menu1, .btn-primary, .header-cart .circle{
            background: <?php echo e($parentDetail->color_code); ?>;

    }
    .menu .navbar-nav>li> a:hover, .menu .navbar-nav>li>a.active{
        background: <?php echo e($parentDetail->color_active); ?>;
    }
    .filter_title i.filter_icon, .filter .filter_button> a, .product_price, .hotline_number, .block-breadcrumb .breadcrumb li.active, .contact_email a, .contact_email, .block-breadcrumb .breadcrumb li a:hover{
        color: <?php echo e($parentDetail->color_code); ?>;
    }
    .filter {
        border-top: 2px solid <?php echo e($parentDetail->color_code); ?>;
    }
    .td-scroll-up:hover, .td-scroll-up{
        background: <?php echo e($parentDetail->color_code); ?>;
    }
    .btn-primary:hover{
        background-color: #17a7ef;
    border-color: #10a0e8;
    }
     .btn-primary:hover{
        background-color: <?php echo e($parentDetail->color_active); ?>;
        border-color: <?php echo e($parentDetail->color_active); ?>;
    }
    .btn-primary{
        border-color: <?php echo e($parentDetail->color_active); ?>;
    }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>