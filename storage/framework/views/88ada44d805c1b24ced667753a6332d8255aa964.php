<?php
/**
 * Created by PhpStorm.
 * User: ciceromoura
 * Date: 02/05/17
 * Time: 14:00
 */
?>


<html>
<head>
    <title><?php echo $__env->yieldContent("title"); ?></title>



    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">

</head>
<body>
<div class="container">

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <ul class="nav navbar-nav navbar-right">
                <?php if(Auth::guest()): ?>
                    <li><a href="/auth/login">Login</a></li>
                    <li><a href="/auth/register">Register</a></li>
                <?php else: ?>
                    <li><?php echo e(Auth::user()->name); ?> </li>
                    <li><a href="/auth/logout">Logout</a></li>
                <?php endif; ?>
            </ul>
            <div class="navbar-header">
                <a class="navbar-brand" href="/produtos">Estoque Laravel</a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="/produtos">Listagem</a></li>
            </ul>

        </div>
    </nav>

    <?php echo $__env->yieldContent('conteudo'); ?>

    <footer class="footer">
        <p>© Laravel@2016</p>
    </footer>

</div>
</body>
</html>