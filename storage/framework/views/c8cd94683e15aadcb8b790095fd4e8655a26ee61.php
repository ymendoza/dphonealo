<?php $__env->startSection('title', 'Phonealo'); ?>

<?php $__env->startSection('titulo'); ?>
   <?php 
     echo "Bienvenido(a): ";
   ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

<?php $__env->stopPush(); ?>



<?php echo $__env->make('frontend.layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>