<?php echo $__env->make('frontend.partials.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="block-breadcrumb">
        <ol class="breadcrumb">
            <li><a href="<?php echo e(route('home')); ?>" title="Trở về trang chủ">Trang chủ</a></li>
            <li><a href="<?php echo e(route('cate-parent', $loaiDetail->slug)); ?>" title="<?php echo $loaiDetail->name; ?>"><?php echo $loaiDetail->name; ?> </a></li>            
            <li class="active"><?php echo $detail->name; ?></li>
        </ol>
    </div>
</div><!-- /.breadcrumb -->

<main class="main-content clearfix">
    <div class="container">
        <div class="product product-details clearfix">
            <div class="product_gallery gallery ">
                <div class="gallery_image">
                    <div class="block block-slide-detail">
                        <!-- Place somewhere in the <body> of your page -->
                        <div id="slider" class="flexslider">
                            <ul class="slides slides-large">
                                <?php foreach( $hinhArr as $hinh ): ?>
                                <li><img src="<?php echo e(Helper::showImage($hinh['image_url'])); ?>" alt=" hinh anh <?php echo $detail->name; ?>" /></li>
                                <?php endforeach; ?>                                  
                            </ul>
                        </div>
                        <div id="carousel" class="flexslider">
                            <ul class="slides">
                                <?php $i = 0; ?>
                                <?php foreach( $hinhArr as $hinh ): ?>
                                <li><img src="<?php echo e(Helper::showImageThumb($hinh['image_url'])); ?>" alt="thumb <?php echo $detail->name; ?>"  /></li>
                                <?php $i++; ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div><!-- /block-slide-detail -->
                </div>
            </div><!-- /.gallery_image -->
            <div class="product_details">
                <div class="product_header">
                    <h1 class="product_title"><?php echo $detail->name; ?></h1>
                    <div class="block block-share" id="share-buttons" style="margin-bottom:10px">
                        <div class="share-item">
                            <div class="fb-like" data-href="<?php echo e(url()->current()); ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
                        </div>
                        <div class="share-item" style="max-width: 65px;">
                            <div class="g-plus" data-action="share"></div>
                        </div>
                        <div class="share-item">
                            <a class="twitter-share-button"
                          href="https://twitter.com/intent/tweet?text=<?php echo $detail->title; ?>">
                        Tweet</a>
                        </div>
                        <div class="share-item">
                            <div class="addthis_inline_share_toolbox"></div>
                        </div>
                    </div><!-- /block-share--> 
                     
                </div>
                <?php if( $detail->description ): ?>
                <div class="product_description" style="border-bottom: 1px solid #eaeaea;">
                    <p><?php echo $detail->description; ?></p>
                </div>
                <?php endif; ?>
                <div class="product_price-info clearfix">
                    <div class="box-price-detail">                                        
                        <?php if( $detail->is_sale == 1): ?>
                        <div class="product_price product_price-list-price _product_price_old">
                            <span class="price price-list-price">
                                <span class="hidden-xs hidden-sm">Giá gốc:&nbsp;</span>
                                <span class="price_value"><?php echo number_format($detail->price); ?></span>
                                <span class="price_symbol">đ</span>
                            </span>
                        </div>
                        <div class="product_price _product_price">
                            <span class="price">
                                <span class="price_value" itemprop="price"><?php echo number_format($detail->price_sale); ?></span><span class="price_symbol">đ</span>
                                <span class="price_discount">-<?php echo number_format($detail->sale_percent); ?>%</span>
                            </span>
                        </div>
                        <?php else: ?>
                        <div class="product_price _product_price">
                            
                            <span class="price">
                                <span class="price_value" itemprop="price"><span class="price_txt"><?php if(Helper::isShared(Session::get('userId'), $detail->id) == true): ?> Giá ưu đãi: <?php else: ?> Giá: <?php endif; ?> </span> <?php echo Helper::isShared(Session::get('userId'), $detail->id) == true ? number_format($detail->price_share) : number_format($detail->price); ?></span><span class="price_symbol">đ</span>
                            </span>

                            <div class="clearfix"></div>
                            <?php if($detail->is_fbshare == 1): ?>
                                <?php if(Helper::isShared(Session::get('userId'), $detail->id) == false): ?>
                                <a id="btnShare" class="save-price" href="javascript:;"><i class="fa fa-facebook" aria-hidden="true"></i> Share để giảm <?php echo e(number_format($detail->price - $detail->price_share)); ?></a>

                                <?php endif; ?>
                            <?php endif; ?>
                        </div>

                        <?php endif; ?>

                    </div>
                </div>
                <div class="product_add-to-cart border-top clearfix">
                    
                        
                        <div class="add-to-cart_actions add-to-cart-buttons">
                            <button data-id="<?php echo e($detail->id); ?>" class="btn-addcart-product btn btn-primary btn-buy-now-x2">
                               <i class="fa fa-shopping-cart"></i> &nbsp; MUA NGAY
                            </button>                            
                        </div>
                    
                </div>
            </div><!-- /.breadcrumb -->
        </div><!-- /.product=details -->        
        <div class="content-sidebar clearfix" style="margin-bottom: 10px">
            <div class="content">
                <div class="block-tabs">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#infodetail" aria-controls="infodetail" role="tab" data-toggle="tab">Thông tin chi tiết</a></li>                        
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="infodetail">                            
                            <div class="block_content clearfix">
                                <div class="wysiwyg">
                                    <?php echo $detail->content; ?>

                                </div>
                                
                            </div>
                        </div>
                        <div class="fb-comments" data-href="<?php echo e(url()->current()); ?>" data-width="100%" data-numposts="5"></div>
                    </div>
                </div>
                <div class="clearfix" style="margin-top:20px"></div>
                <?php if(!empty((array)$tagSelected)): ?>
                <?php $countTag = count($tagSelected);?>
                <article class="block block-news-with-region">
                    <u>Tags</u>:
                    <?php $i = 0; ?>
                    <?php foreach($tagSelected as $tag): ?>
                    <?php $i++; ?>
                    <a href="<?php echo e(route('tag', $tag->slug)); ?>" title="<?php echo $tag['name']; ?>"><?php echo $tag['name']; ?></a><?php if($i< $countTag): ?>, <?php endif; ?>
                    <?php endforeach; ?>     
                </article>
                <?php endif; ?>
            </div>

            <?php if($otherList->count() > 0): ?>
            <div class="sidebar" style="margin-top: 20px">
                <div class="block block-normal">
                    <div class="block_header">
                        <h3 class="block_title">Sản phẩm liên quan</h3>
                    </div>
                    <div class="block_content clearfix">
                        <div class="products products-list">
                            <?php $i = 0;?>
                            <?php foreach($otherList as $obj): ?>
                            <?php $i++; ?>
                            <div class="product-wrapper product-auto-resize product-image-padding">
                                
                                <div class="product">
                                    <div class="product_image">
                                        <a href="<?php echo e(route('product', [$obj->slug])); ?>" title="<?php echo $obj->name; ?>">
                                            <img class="img-responsive" alt="<?php echo $obj->name; ?>" src="<?php echo Helper::showImageThumb($obj->image_url); ?>" />
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

                                                    <?php endif; ?>
                                                </span><span class="price_symbol">đ</span>
                                                <?php if( $obj->is_sale == 1 && $obj->sale_percent > 0 ): ?>                                                        
                                                <span class="price_discount">-<?php echo e($obj->sale_percent); ?>%</span>
                                                <?php endif; ?>
                                            </span>
                                        </div>
                                        <?php if( $obj->is_sale == 1 && $obj->sale_percent > 0 ): ?>
                                        <div class="product_price product_price-list-price _product_price_old " style="display: inline-block;">
                                            <span class="price price-list-price">
                                            <span class="price_value"><?php echo e(number_format($obj->price)); ?></span><span class="price_symbol">đ</span>
                                            </span>
                                        </div>
                                        <?php endif; ?>
                                        <div class="product_views">
                                            <i class="fa fa-user-o"></i> 101
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div><!-- /.sidebar -->
            <?php endif; ?>
        </div><!-- /.content-sidebar -->
    </div>
</main><!-- /.main -->
<style type="text/css">
    .nav-top-menu1, .btn-primary, .header-cart .circle{
            background: <?php echo e($loaiDetail->color_code); ?>;

    }
    .menu .navbar-nav>li> a:hover, .menu .navbar-nav>li>a.active{
        background: <?php echo e($loaiDetail->color_active); ?>;
    }
    .filter_title i.filter_icon, .filter .filter_button> a, .product_price, .hotline_number, .block-breadcrumb .breadcrumb li.active,.contact_email a,.contact_email, .block-breadcrumb .breadcrumb li a:hover{
        color: <?php echo e($loaiDetail->color_code); ?>;
    }
    .filter {
        border-top: 2px solid <?php echo e($loaiDetail->color_code); ?>;
    }
    .td-scroll-up:hover, .td-scroll-up{
        background: <?php echo e($loaiDetail->color_code); ?>;
    }
    .btn-primary:hover{
        background-color: <?php echo e($loaiDetail->color_active); ?>;
        border-color: <?php echo e($loaiDetail->color_active); ?>;
    }
.btn-primary{
    border-color: <?php echo e($loaiDetail->color_active); ?>;
}
.save-price {
font-size: 15px;    
   
    color: white;
    background: #006fba;
    padding: 5px 10px;
    border-radius: 3px;
    margin: 0;
}
a.save-price:hover, a.save-price:focus{
    color:#FFF !important;
}
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

<!-- Js zoom -->
<script src="<?php echo e(URL::asset('public/assets/lib/jquery.zoom.min.js')); ?>"></script>
<!-- Flexslider -->
<script src="<?php echo e(URL::asset('public/assets/lib/flexslider/jquery.flexslider-min.js')); ?>"></script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-59b215c2a2658a8a"></script> 
<script src="https://apis.google.com/js/platform.js" async defer></script>

<script type="text/javascript">
$(document).ready(function () {
    $('#carousel').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: true,
            slideshow: false,
            itemWidth: 50,
            itemMargin: 25,
            nextText: "",
            prevText: "",
            asNavFor: '#slider'
        });

        $('#slider').flexslider({
            animation: "fade",
            controlNav: false,
            directionNav: false,
            animationLoop: false,
            slideshow: false,
            animationSpeed: 500,
            sync: "#carousel"
        });

        $('.slides-large li').each(function () {
            $(this).zoom();
        });
    });
    <?php if(!Session::get('userId')): ?>
        $('#btnShare').click(function(){            
            if(confirm("Bạn muốn đăng nhập website bằng tài khoản Facebook ?")){
                FB.login(function(response){
                  if(response.status == "connected")
                  {
                     // call ajax to send data to server and do process login
                    var token = response.authResponse.accessToken;
                    $.ajax({
                      url: $('#route-ajax-login-fb').val(),
                      method: "POST",
                      data : {
                        token : token
                      },
                      success : function(data){                                    
                        FB.ui(
                           {
                             method: 'feed',
                             name: 'Facebook Dialogs',
                             link: '<?php echo url()->current(); ?>',          
                           },
                           function(response) {            
                             
                               $.ajax({
                                url : "<?php echo e(route('share-success')); ?>",
                                type  : "POST",
                                data : {
                                    mod : 'courses',
                                    product_id : <?php echo e($detail->id); ?>  
                                },
                                success : function(data){
                                        alert('Cảm ơn bạn đã chia sẻ. Bạn sẽ được mua sản phẩm với giá ưu đãi là : ' + '<?php echo e(number_format($detail->price_share)); ?>' + ' trong HÔM NAY.');
                                        window.location.reload();
                                    }
                                    
                                
                               });
                             
                           }
                         );
                      }
                    });

                  }
                }, {scope: 'public_profile,email,user_friends'});
            }
        });
    <?php else: ?>
        $('#btnShare').click(function(){
            FB.ui(
               {
                 method: 'feed',
                 name: 'Facebook Dialogs',
                 link: '<?php echo url()->current(); ?>',          
               },
               function(response) {            
                    if(response){
                        $.ajax({
                            url : "<?php echo e(route('share-success')); ?>",
                            type  : "POST",
                            data : {
                                mod : 'courses',
                                product_id : <?php echo e($detail->id); ?>  
                            },
                            success : function(data){
                                    alert('Cảm ơn bạn đã chia sẻ. Bạn sẽ được mua sản phẩm với giá ưu đãi là : ' + '<?php echo e(number_format($detail->price_share)); ?>' + ' trong HÔM NAY.');
                                    window.location.reload();
                                }
                                
                            
                           });    
                    }else{
                        alert('Share không thành công!!!')
                    }
                   
                 
               }
             );
        });
    <?php endif; ?>
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>