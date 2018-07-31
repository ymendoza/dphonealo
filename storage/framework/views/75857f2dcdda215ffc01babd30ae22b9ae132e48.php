<?php $__env->startSection('titulo'); ?>
   <?php 
     echo "Bienvenido(a): ";
   ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>