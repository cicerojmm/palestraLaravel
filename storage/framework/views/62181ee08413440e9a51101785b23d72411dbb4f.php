<?php
/**
 * Created by PhpStorm.
 * User: ciceromoura
 * Date: 02/05/17
 * Time: 14:55
 */
?>



<?php $__env->startSection('conteudo'); ?>
    <div class="alert alert-success">
        <strong>Sucesso!</strong> O produto <?php echo e($nome); ?> foi adicionado.
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>