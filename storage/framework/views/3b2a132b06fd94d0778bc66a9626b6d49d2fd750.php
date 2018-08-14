<div class="col-md-3 category-sidebar" id="category_sidebar">
    
        <div class="product-filters box box-shadow box-no-padding">
            <div class="filter filter-listing">
                <div class="filter_title">
                    <i class="filter_icon fa fa-bars"></i> DANH MỤC
                </div>
                <div class="filter_body">
                    <?php if(isset($parentDetail)): ?>
                    <label class="filter_button">
                        
                        <a href="<?php echo route('cate-parent', $parentDetail->slug); ?>" title="<?php echo $parentDetail->name; ?>"><?php echo $parentDetail->name; ?> </a>
                        <ul>
                            <?php foreach($cateArrByLoai[$parentDetail->id] as $obj): ?>
                            <li><a href="<?php echo route('cate', [$parentDetail->slug, $obj->slug]); ?>" title="<?php echo $obj->name; ?>"><?php echo $obj->name; ?> </a></li>
                            <?php endforeach; ?>
                        </ul>                        
                        
                        
                    </label>
                    <?php else: ?>
                    <?php foreach($cateParentList as $parent): ?>
                     <label class="filter_button">                                                                      
                        
                        <a href="<?php echo route('cate-parent', $parent->slug); ?>" title="<?php echo $parent->name; ?>"><?php echo $parent->name; ?></a>
                        <ul>
                            <?php foreach($cateArrByLoai[$parent->id] as $obj): ?>
                            <li><a href="<?php echo route('cate', [$parent->slug, $obj->slug]); ?>" title="<?php echo $obj->name; ?>"><?php echo $obj->name; ?> </a></li>
                            <?php endforeach; ?>
                        </ul>
                        
                        
                    </label>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div><!-- /.filter -->                        
        </div>
        <div class="product-filters box box-shadow box-no-padding">
            <div class="filter filter-listing">
                <div class="filter_title">
                    <i class="filter_icon fa fa-bars"></i> SẢN PHẨM NỔI BẬT
                </div>
                <div class="filter_body">
                    <div class="block_content clearfix">
                        <div class="products products-list">
                            <?php $i = 0;?>
                            <?php foreach($hotProductList as $obj): ?>
                            <?php $i++; ?>
                            <div class="product-wrapper product-auto-resize product-image-padding">
                                
                                <div class="product">
                                    <div class="product_image">
                                        <a href="#" title="">
                                            <img class="img-responsive" alt="product" src="<?php echo Helper::showImageThumb($obj->image_url); ?>" />
                                        </a>
                                    </div>
                                    <div class="product_header">
                                        <h3 class="product_title">
                                            <a href="#" title=""><?php echo $obj->name; ?></a>
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
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div><!-- /.filter -->                        
        </div>
</div><!-- /.col-md-3 -->