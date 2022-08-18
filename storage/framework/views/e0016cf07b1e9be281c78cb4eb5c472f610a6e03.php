<?php if(Session::has('success')): ?>
<div class="alert alert-success">
    <strong>Success!</strong> <?php echo e(Session::get('success')); ?>

  </div>
<?php elseif(Session::has('failed')): ?>
  <div class="alert alert-danger">
    <strong>Danger!</strong> <?php echo e(Session::get('failed')); ?>

  </div>
<?php endif; ?><?php /**PATH /home4/seoagencyindia/public_html/healthcare/resources/views/hr/layouts/adminError.blade.php ENDPATH**/ ?>