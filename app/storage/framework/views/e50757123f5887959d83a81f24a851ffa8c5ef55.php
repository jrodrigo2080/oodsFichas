<?php echo $__env->make('template._includes.cabecalho', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('template._includes.rodape', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp2\htdocs\odd_fichas\resources\views/template/layout.blade.php ENDPATH**/ ?>