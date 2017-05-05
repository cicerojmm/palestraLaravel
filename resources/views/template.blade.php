<?php
/**
 * Created by PhpStorm.
 * User: ciceromoura
 */
?>


<html>
<head>
    <title>@yield("title")</title>



    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">

</head>
<body>
<div class="container">

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="/auth/login">Login</a></li>
                    <li><a href="/auth/register">Register</a></li>
                @else
                    <li>{{ Auth::user()->name }} </li>
                    <li><a href="/auth/logout">Logout</a></li>
                @endif
            </ul>
            <div class="navbar-header">
                <a class="navbar-brand" href="/produtos">Estoque Laravel</a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="/produtos">Listagem</a></li>
            </ul>

        </div>
    </nav>

    @yield('conteudo')

    <footer class="footer">
        <p>© Laravel@2016</p>
    </footer>

</div>
</body>
</html>