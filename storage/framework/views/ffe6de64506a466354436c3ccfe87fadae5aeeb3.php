<!DOCTYPE html>
<!--[if lt IE 7 ]><html dir="ltr" lang="vi-VN" class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html dir="ltr" lang="vi-VN" class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="vi-VN" class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="vi-VN" class="no-js ie ie9 lte9"><![endif]-->
<!--[if IE 10 ]><html dir="ltr" lang="vi-VN" class="no-js ie ie10 lte10"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="vn">
<head>
	<title><?php echo $__env->yieldContent('title'); ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="robots" content="index,follow"/>
    <meta http-equiv="content-language" content="en"/>
    <meta name="description" content="<?php echo $__env->yieldContent('site_description'); ?>"/>
    <meta name="keywords" content="<?php echo $__env->yieldContent('site_keywords'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <link rel="shortcut icon" href="<?php echo e(URL::asset('public/assets/images/favicon.png')); ?>" type="image/x-icon"/>
    <link rel="canonical" href="<?php echo e(url()->current()); ?>"/>        
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $__env->yieldContent('title'); ?>" />
    <meta property="og:description" content="<?php echo $__env->yieldContent('site_description'); ?>" />
    <meta property="og:url" content="<?php echo e(url()->current()); ?>" />
    <meta property="og:site_name" content="muanhanhgiatot.vn" />
    <?php $socialImage = isset($socialImage) ? $socialImage : $settingArr['banner']; ?>
    <meta property="og:image" content="<?php echo e(Helper::showImage($socialImage)); ?>" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="<?php echo $__env->yieldContent('site_description'); ?>" />
    <meta name="twitter:title" content="<?php echo $__env->yieldContent('title'); ?>" />        
    <meta name="twitter:image" content="<?php echo e(Helper::showImage($socialImage)); ?>" />	
	<!-- <link rel="shortcut icon" href="<?php echo e(URL::asset('public/assets/images/favicon.ico')); ?>" type="image/x-icon">
	<link rel="icon" href="<?php echo e(URL::asset('public/assets/images/favicon.ico')); ?>" type="image/x-icon"> -->

	<!-- ===== Style CSS ===== -->
	<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('public/assets/css/style.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('public/assets/css/font-hd.css')); ?>">
	<!-- ===== Responsive CSS ===== -->
	<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('public/assets/css/responsive.css')); ?>">

  	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<link href='css/animations-ie-fix.css' rel='stylesheet'>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<style type="text/css" media="screen">
		/* cosmetic */
		.box-products.cosmetic .box-product-head {
			border-top: 1px solid #d66784;
		}
		.box-products.cosmetic .box-title {
			border-color: #d66784;
			background: #d66784;
		}
		.box-products.cosmetic .box-tabs li>a:before {
			background: #d66784;
		}
		.box-products.cosmetic .box-tabs li>a:after {
			color: #d66784;
		}
		/* food */
		.box-products.food .box-product-head {
			border-top: 1px solid #71be0f;
		}
		.box-products.food .box-title {
			border-color: #71be0f;
			background: #71be0f;
		}
		.box-products.food .box-tabs li>a:before {
			background: #71be0f;
		}
		.box-products.food .box-tabs li>a:after {
			color: #71be0f;
		}
		/* family */
		.box-products.family .box-product-head {
			border-top: 1px solid #F77807;
		}
		.box-products.family .box-title {
			border-color: #F77807;
			background: #F77807;
		}
		.box-products.family .box-tabs li>a:before {
			background: #F77807;
		}
		.box-products.family .box-tabs li>a:after {
			color: #F77807;
		}
		/* gift */
		.box-products.gift .box-product-head {
			border-top: 1px solid #1cb1a8;
		}
		.box-products.gift .box-title {
			border-color: #1cb1a8;
			background: #1cb1a8;
		}
		.box-products.gift .box-tabs li>a:before {
			background: #1cb1a8;
		}
		.box-products.gift .box-tabs li>a:after {
			color: #1cb1a8;
		}
		.dropdown-menu>li>a{
			padding: 10px 20px !important;
		}
	</style>
</head>
<body class="home">
<?php if($routeName == "product" || $routeName == "news-detail"): ?>
<div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=567408173358902";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));</script>
<?php endif; ?>
	<?php echo $__env->make('frontend.partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<?php echo $__env->yieldContent('content'); ?>

	<?php echo $__env->make('frontend.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div id="editContentModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Cập nhật nội dung</h4>
	      </div>
	      <form method="POST" action="<?php echo e(route('save-content')); ?>">
	      <?php echo e(csrf_field()); ?>

	      <input type="hidden" name="id" id="txtId" value="">
	      <div class="modal-body">
	        <textarea rows="5" class="form-control" name="content" id="txtContent"></textarea>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-primary" id="btnSaveContent">Save</button>
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	      </form>
	    </div>

	  </div>
	</div>
	<input type="hidden" id="route-add-to-cart" value="<?php echo e(route('add-product')); ?>" />
	<input type="hidden" id="route-short-cart" value="<?php echo e(route('short-cart')); ?>" />
	<input type="hidden" id="route-update-product" value="<?php echo e(route('update-product')); ?>" />	
	<input type="hidden" id="route-cart" value="<?php echo e(route('cart')); ?>" />	
	<input type="hidden" id="route-save-content" value="<?php echo e(route('save-content')); ?>" />	
	<input type="hidden" id="route-newsletter" value="<?php echo e(route('newsletter')); ?>" />
	<input type="hidden" id="route-ajax-login-fb" value="<?php echo e(route('ajax-login-by-fb')); ?>">
	<input type="hidden" id="fb-app-id" value="<?php echo e(env('FACEBOOK_APP_ID')); ?>">
	<a id="return-to-top" class="td-scroll-up" href="javascript:void(0)">
  		<i class="fa fa-angle-up" aria-hidden="true"></i>
	</a><!-- return to top -->

	<!-- ===== JS ===== -->
	<script src="<?php echo e(URL::asset('public/assets/js/jquery.min.js')); ?>"></script>
	<!-- ===== JS Bootstrap ===== -->
	<script src="<?php echo e(URL::asset('public/assets/lib/bootstrap/bootstrap.min.js')); ?>"></script>
	<!-- ===== carousel ===== -->
	<script src="<?php echo e(URL::asset('public/assets/lib/owl.carousel/owl.carousel.min.js')); ?>"></script>
	<!-- ===== Bxslider ===== -->
	<script src="<?php echo e(URL::asset('public/assets/lib/bxslider/jquery.bxslider.min.js')); ?>"></script>
	<!-- ===== Bootstrap Select ===== -->
    <script src="<?php echo e(URL::asset('public/assets/lib/bootstrap-select/js/bootstrap-select.min.js')); ?>"></script>
    <!-- ===== Countdown ===== -->
    <script type="text/javascript" src="<?php echo e(URL::asset('public/assets/js/jquery.plugin.js')); ?>"></script>
	<!-- ===== Sticky ===== -->
    <script src="<?php echo e(URL::asset('public/assets/lib/sticky/jquery.sticky.js')); ?>"></script>
    <!-- ===== Js Common ===== -->
	<script src="<?php echo e(URL::asset('public/assets/js/common.js')); ?>"></script>
	<?php echo $__env->yieldContent('js'); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111231507-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-111231507-1');
	</script>
</body>
</html>