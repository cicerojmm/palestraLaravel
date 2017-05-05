<?php
/**
 * Created by PhpStorm.
 * User: cicero.moura
 * Date: 02/05/17
 * Time: 12:37
 */

?>




<?php $__env->startSection("title"); ?>
    Detalhes de Produtos
<?php $__env->stopSection(); ?>

<?php $__env->startSection("conteudo"); ?>

<h1>Detalhes do Produto <?php echo e($produto->nome); ?></h1>

<?php $__env->stopSection(); ?>



<?php echo $__env->make("template", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>