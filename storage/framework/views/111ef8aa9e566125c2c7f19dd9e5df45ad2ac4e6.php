<?php
/**
 * Created by PhpStorm.
 * User: ciceromoura
 * Date: 02/05/17
 * Time: 14:52
 */
?>



<?php $__env->startSection('conteudo'); ?>

    <h1>Novo produto</h1>

    <?php if(count($errors) > 0): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="/produtos/adiciona" method="post">
        <input type="hidden"
               name="_token" value="<?php echo e(csrf_token()); ?>" />

        <div class="form-group">
            <label>Nome</label>
            <input name="nome" class="form-control" value="<?php echo e(old('nome')); ?>" />
        </div>
        <div class="form-group">
            <label>Descricao</label>
            <input name="descricao" class="form-control" value="<?php echo e(old('descricao')); ?>" />
        </div>
        <div class="form-group">
            <label>Valor</label>
            <input name="valor" class="form-control" value="<?php echo e(old('valor')); ?>" />
        </div>
        <div class="form-group">
            <label>Quantidade</label>
            <input type="number" name="quantidade" class="form-control" value="<?php echo e(old('quantidade')); ?>" />
        </div>
        <div class="form-group">
            <label>Categoria</label>
            <select name="categoria_id" class="form-control">
                <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($categoria->id); ?>"> <?php echo e($categoria->nome); ?> </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <button type="submit"
                class="btn btn-primary btn-block">Submit</button>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>