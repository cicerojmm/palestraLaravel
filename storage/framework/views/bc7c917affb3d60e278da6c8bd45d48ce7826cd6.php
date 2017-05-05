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

        <?php if(old('nome')): ?>
            <div class="alert alert-success">
                <strong>Sucesso!</strong> O produto <?php echo e(old('$nome')); ?> foi adicionado.
            </div>
        <?php endif; ?>


        <table class="table">
            <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($produto->nome); ?></td>
                    <td><?php echo e($produto->valor); ?></td>
                    <td><?php echo e($produto->categoria->nome); ?></td>
                    <td>
                        <a href="<?php echo e(url('produtos/detalhes/'.$produto->id)); ?>">
                            <span class="glyphicon glyphicon-search"></span>
                        </a>
                    </td>
                    <td>
                        <a href="<?php echo e(url('produtos/remove/'.$produto->id)); ?>">
                            <span class="glyphicon glyphicon-trash"></span>
                        </a>
                    </td>
                    <td>
                        <a href="<?php echo e(url('produtos/altera/'.$produto->id)); ?>">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    <?php endif; ?>
<li>


    <ul class="nav navbar-nav navbar-right">
        <li>
            <a href="<?php echo e(action('ProdutoController@listar')); ?>">
                Listagem
            </a>
        </li>
        <li>
            <a href="<?php echo e(action('ProdutoController@novo')); ?>">
                Novo
            </a>
        </li>
    </ul>

<?php $__env->stopSection(); ?>


<?php echo $__env->make("template", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>