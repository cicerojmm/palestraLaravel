<?php
/**
 * Created by PhpStorm.
 * User: ciceromoura
 * Date: 02/05/17
 * Time: 11:46
 */
?>



<?php $__env->startSection("title"); ?>
    Listagem de Produtos
<?php $__env->stopSection(); ?>

<?php $__env->startSection("conteudo"); ?>
    <h1>Listagem de Produtos</h1>

    <?php if(empty($produtos)): ?>
        <div>Você não tem nenhum produto cadastrado.</div>

    <?php else: ?>

        <table class="table">
            <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($produto->nome); ?></td>
                    <td><?php echo e($produto->valor); ?></td>
                    <td>
                        <a href="<?php echo e(url('produtos/detalhes/'.$produto->id)); ?>">
                            <span class="glyphicon glyphicon-search"></span>
                        </a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    <?php endif; ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make("template", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>