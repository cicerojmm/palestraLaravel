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

    <h1>Detalhes do produto: <?php echo e($produto->nome); ?> </h1>

    <ul>
        <li>
            <b>Valor:</b> R$ <?php echo e($produto->valor); ?>

        </li>
        <li>
            <b>Descrição:</b> <?php echo e($produto->descricao); ?>

        </li>
        <li>
            <b>Quantidade em estoque:</b> <?php echo e($produto->quantidade); ?>

        </li>
    </ul>

<?php $__env->stopSection(); ?>



<?php echo $__env->make("template", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>