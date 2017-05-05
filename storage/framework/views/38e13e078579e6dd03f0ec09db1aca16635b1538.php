<?php
/**
 * Created by PhpStorm.
 * User: ciceromoura
 * Date: 03/05/17
 * Time: 09:20
 */
?>



<?php $__env->startSection('conteudo'); ?>

    <h1>Alteração do produto</h1>


    <form action="/produtos/alterado/<?php echo e($produto->id); ?>" method="post">
        <input type="hidden"
               name="_token" value="<?php echo e(csrf_token()); ?>" />

        <div class="form-group">
            <label>Nome</label>
            <input name="nome" class="form-control" value="<?php echo e($produto->nome); ?>"/>
        </div>
        <div class="form-group">
            <label>Descricao</label>
            <input name="descricao" class="form-control" value="<?php echo e($produto->descricao); ?>"/>
        </div>
        <div class="form-group">
            <label>Valor</label>
            <input name="valor" class="form-control" value="<?php echo e($produto->valor); ?>"/>
        </div>
        <div class="form-group">
            <label>Quantidade</label>
            <input type="number" name="quantidade" class="form-control" value="<?php echo e($produto->quantidade); ?>"/>
        </div>
        <button type="submit"
                class="btn btn-primary btn-block">Alterar</button>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>