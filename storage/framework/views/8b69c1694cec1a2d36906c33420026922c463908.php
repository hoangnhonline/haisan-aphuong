<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Khách hàng
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="<?php echo e(route( 'customer.index')); ?>">Khách hàng</a></li>
    <li class="active">Danh sách</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <?php if(Session::has('message')): ?>
      <p class="alert alert-info" ><?php echo e(Session::get('message')); ?></p>
      <?php endif; ?>     
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Bộ lọc</h3>
        </div>
        <div class="panel-body">
          <form class="form-inline" role="form" method="GET" action="<?php echo e(route('customer.index')); ?>" id="frmContact">  <div class="form-group">
              <label for="name">Họ tên :</label>
              <input type="text" class="form-control" name="full_name" value="<?php echo e($full_name); ?>">
            </div>                                                 
            <div class="form-group">
              <label for="name">Email :</label>
              <input type="text" class="form-control" name="email" value="<?php echo e($email); ?>">
            </div>
            <div class="form-group">
              <label for="name">&nbsp;&nbsp;Điện thoại :</label>
              <input type="text" class="form-control" name="phone" value="<?php echo e($phone); ?>">
            </div>
            <button type="submit" class="btn btn-default">Lọc</button>
          </form>         
        </div>
      </div>
      <div class="box">

        <div class="box-header with-border">
          <h3 class="box-title">Danh sách ( <span class="value"><?php echo e($items->total()); ?> khách hàng )</span></h3>
        </div>
        
        <!-- /.box-header -->
        <div class="box-body">        
          <a href="<?php echo e(route('customer.export')); ?>" class="btn btn-info btn-sm" style="margin-bottom:5px;float:left" target="_blank">Export</a>
          <div style="text-align:center">
            <?php echo e($items->appends( ['status' => $status, 'email' => $email, 'phone' => $phone, 'full_name' => $full_name] )->links()); ?>

          </div>  
          <table class="table table-bordered" id="table-list-data">
            <tr>
              <th style="width: 1%">#</th>                            
              <th>Thông tin liên hệ</th>
              <th>Cấp bậc</th>              
              <th class="text-right">Tổng tiền đã mua</th>              
              <th width="10%">Thời gian tạo</th>
              <th width="1%;white-space:nowrap">Thao tác</th>
            </tr>
            <tbody>
            <?php if( $items->count() > 0 ): ?>
              <?php $i = 0; ?>
              <?php foreach( $items as $item ): ?>
                <?php $i ++; ?>
              <tr id="row-<?php echo e($item->id); ?>">
                <td><span class="order"><?php echo e($i); ?></span></td>                       
                <td>                  
                  <?php if($item->full_name != ''): ?>
                  <?php echo e($item->full_name); ?></br>
                  <?php endif; ?>
                  <?php if($item->email != ''): ?>
                  <a href="<?php echo e(route( 'customer.edit', [ 'id' => $item->id ])); ?>"><?php echo e($item->email); ?></a> -
                  <?php endif; ?>
                  <?php if($item->phone != ''): ?>
                  <?php echo e($item->phone); ?></br>
                  <?php endif; ?>
                </td>     
                <td>
                  <?php if( $item->cap_bac == 1): ?>
                  Hạng Bạc
                  <?php elseif( $item->cap_bac == 2): ?>
                  Hạng vàng
                  <?php elseif( $item->cap_bac == 3): ?>
                  Hạng Platinium
                  <?php else: ?>
                  Thành viên thường
                  <?php endif; ?>
                </td>
                <td class="text-right">
                  <?php 
                  $total = DB::table('orders')->where(['customer_id' => $item->id, 'status' => 3])->whereRaw("YEAR(created_at)=".date('Y'))->sum('total_payment');
                  ?>
                  <strong><?php echo e(number_format($total)); ?></strong>
                </td>         
                <td><?php echo e(date('d-m-Y', strtotime($item->created_at))); ?></td>
                <td style="white-space:nowrap">                                  
                  
                  <a onclick="return callDelete('<?php echo e($item->email); ?>','<?php echo e(route( 'customer.destroy', [ 'id' => $item->id ])); ?>');" class="btn btn-danger">Xóa</a>
                  
                </td>
              </tr> 
              <?php endforeach; ?>
            <?php else: ?>
            <tr>
              <td colspan="9">Không có dữ liệu.</td>
            </tr>
            <?php endif; ?>

          </tbody>
          </table>
          <div style="text-align:center">
            <?php echo e($items->appends( ['status' => $status, 'email' => $email, 'phone' => $phone, 'full_name' => $full_name] )->links()); ?>

          </div>  
        </div>        
      </div>
      <!-- /.box -->     
    </div>
    <!-- /.col -->  
  </div> 
</section>
<!-- /.content -->
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('javascript_page'); ?>
<script type="text/javascript">
function callDelete(name, url){  
  swal({
    title: 'Bạn muốn xóa "' + name +'"?',
    text: "Dữ liệu sẽ không thể phục hồi.",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes'
  }).then(function() {
    location.href= url;
  })
  return flag;
}
$(document).ready(function(){
  $('#type').change(function(){
    $('#frmContact').submit();
  });
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>