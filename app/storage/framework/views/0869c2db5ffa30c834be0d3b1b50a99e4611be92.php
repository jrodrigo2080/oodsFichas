<option value="" >Selecione</option>
<?php $__currentLoopData = $clubes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clube): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($clube->id); ?>"><?php echo e($clube->nome); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\xampp2\htdocs\odd_fichas\resources\views/getclube.blade.php ENDPATH**/ ?>