<header id="header" class="header">
		<div class="header_top top-bar clearfix">
			<div class="container">
				<div class="row">					
					<nav class="top-bar_item top-bar_item-nav navigation navigation-inline pull-right">
						<ul id="user_info_header" class="navbar-right">
							<?php if(!Session::get('username')): ?>
							<li>
								<a data-url="javascript:;" title="Đăng nhập bằng Facebook" class="user-name-loginfb login-by-facebook-popup"><i class="fa fa-facebook-square"></i>Đăng nhập bằng Facebook</a>
							</li>
							<?php else: ?>
							<li class="dropdown dropdown-arrow">
								<a href="/thong-tin-tai-khoan.html" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
		                            <i class="hd hd-user"></i> <?php echo e(Session::get('username')); ?> <i class="fa fa-caret-down"></i>
		                        </a>
		                        <ul class="dropdown-menu" role="menu">
		                        	<li class="show-in-checkout">
		                         		<a href="<?php echo e(route('account-info')); ?>" title="Thông tin tài khoản"> Thông tin tài khoản</a>
		                         	</li>
		                         	<li class="show-in-checkout">
		                         		<a href="<?php echo e(route('order-history')); ?>" title="Đơn hàng của tôi"> Đơn hàng của tôi</a>
		                         	</li>
		                            <li class="show-in-checkout"><a href="<?php echo e(route('logout')); ?>" rel="nofollow" class="underlined">Đăng xuất</a></li>
		                        </ul>
							</li>
							<?php endif; ?>
						</ul>
					</nav>
					<nav class="top-bar_item top-bar_item-nav navigation navigation-inline pull-right" style="border-right: 1px solid #fff;">

					    <ul id="user_support" class="navbar-right">
					        <li><a href="callto:19006760">
					            <i class="hd hd-phone"></i> Hotline:&nbsp;<span class="hotline_number <?php if($isEdit): ?> edit <?php endif; ?>" data-text="17"><?php echo $textList[17]; ?></span></a>
					        </li>
					    </ul>
					</nav>
				</div>
			</div>
		</div><!-- /.header -->

		<div class="header_main  clearfix">
			<div class="container">
				<div class="row">
					<a class="toggle-nav visible-xs visible-sm">
							<i class="hd hd-nav"></i>
						</a><!-- /.toggle-nav -->
					<a class="toggle-search visible-xs visible-sm" data-target="#main-search">
						<i class="hd hd-search"></i>
					</a><!-- /.toggle-search -->
					<div class="logo-wrapper col-md-4">
					    <a href="<?php echo e(route('home')); ?>" title="muanhanhgiatot.vn">
					        <img src="<?php echo e(Helper::showImage($settingArr['logo'])); ?>" alt="logo muanhanhgiatot.vn">
					    </a>
					</div><!-- /.logo-wrapper -->
					<div class="search-area col-md-6" id="main-search">
						<form action="<?php echo e(route('search')); ?>" method="GET">
							<div class="search-box form-inline clearfix">
								<div class="search-box_category">
									<select class="selectpicker" id="pid" name="pid">
										<option value="">Tất cả danh mục</option>
										<?php foreach($cateParentList as $parent): ?>
										<option value="<?php echo $parent->id; ?>" <?php echo e(isset($parent_id) && $parent_id == $parent->id ? "selected" : ""); ?>><?php echo $parent->name; ?></option>
										<?php endforeach; ?>
									</select>
								</div>
								<div class="search-box_input">
									<span class="twitter-typeahead">
										<input type="text" class="form-control input-search tt-hint txtSearch" value="<?php echo e(isset($tu_khoa) ? $tu_khoa : ""); ?>" autocomplete="off" name="keyword" placeholder="Tìm kiếm sản phẩm...">
									</span>
									<button class="btn btn-primary">
					                    <i class="hd hd-search"></i>
					                    <span class="sr-only">Tìm kiếm</span>
					                  </button>
								</div>
							</div>
						</form>
					</div><!-- /.search-area -->
					<div class="col-md-2 header-cart-wrapper">
						<ul class="header-cart">
							<li class="nav-cart">
								<a href="<?php echo e(route('cart')); ?>">
									<i class="hd hd-cart"></i>
									<span class="circle"><?php echo e(Session::get('products') ? array_sum(Session::get('products')) : 0); ?></span>
									<span class="hidden-xs hidden-sm">Giỏ hàng</span>
								</a>								
							</li>
						</ul><!-- /.header-cart -->
					</div><!-- /.header-cart-wrapper -->
				</div>
			</div>
		</div><!-- /.header_main -->
		<div class="fix-header">
		<nav id="mainNav" class="navbar navbar-default navbar-custom nav-top-menu1 mid-header">
      <div class="container" id="main-menu">
		
				<div class="collapse navbar-collapse menu" id="menu-navbar-collapse">
					<ul class="nav navbar-nav navbar-left">
						<li class="level0"><a <?php if($routeName=="home"): ?> class="active" <?php endif; ?> href="<?php echo e(route('home')); ?>" title="Trang chủ">Trang chủ</a></li>
						<?php foreach($cateParentList as $parent): ?>
						<li class="level0 parent">
							<a <?php if( (isset($parentDetail) && $parentDetail->id == $parent->id) || (isset($loaiDetail) && $loaiDetail->id == $parent->id)   ): ?> class="active" <?php endif; ?> href="<?php echo e(route('cate-parent', $parent->slug )); ?>" title="<?php echo $parent->name; ?>"><?php echo $parent->name; ?></a>							
						</li>
						<?php endforeach; ?>
						<li><a <?php if($routeName == "news-list" || $routeName == "news-detail"): ?> class="active" <?php endif; ?> href="<?php echo route('news-list', 'cam-nang'); ?>" title="Cẩm nang">Cẩm nang</a></li>
						
						<li><a <?php if($routeName == "contact" ): ?> class="active" <?php endif; ?> href="<?php echo e(route('contact')); ?>" title="Liên hệ">Liên hệ</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
	        </div>
    	</nav><!-- END NAVIGATION -->
    	</div>
	</header><!-- /.header -->	