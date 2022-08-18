<?php if(Session::has('success')): ?>
<div class="alert alert-success">
    <strong>Success!</strong> <?php echo e(Session::get('success')); ?>

  </div>
<?php elseif(Session::has('failed')): ?>
  <div class="alert alert-danger">
    <strong></strong> <?php echo e(Session::get('failed')); ?>

  </div>
<?php endif; ?><?php /**PATH /home2/tossamba/public_html/youngman/software/resources/views/admin/layouts/adminError.blade.php ENDPATH**/ ?>