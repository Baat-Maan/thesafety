<?php if(Session::has('success')): ?>
<div class="alert alert-success">
    <strong>Success!</strong> <?php echo e(Session::get('success')); ?>

  </div>
<?php elseif(Session::has('failed')): ?>
  <div class="alert alert-danger">
    <strong></strong> <?php echo e(Session::get('failed')); ?>

  </div>
  <?php elseif(Session::has('warning')): ?>
  <div class="alert alert-warning">
    <strong> <?php echo e(Session::get('warning')); ?></strong>
  </div>

<?php endif; ?><?php /**PATH /home2/ssashealthcare/public_html/Tos/resources/views/employee/layouts/adminError.blade.php ENDPATH**/ ?>