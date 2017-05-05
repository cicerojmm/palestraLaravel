<?php
/**
 * Created by PhpStorm.
 * User: ciceromoura
 *
 */
?>

@extends("template")

@section("title")
    Listagem de Produtos
@stop

@section("conteudo")
    <h1>Listagem de Produtos</h1>

    @if(empty($produtos))
        <div>Você não tem nenhum produto cadastrado.</div>

    @else

        @if(old('nome'))
            <div class="alert alert-success">
                <strong>Sucesso!</strong> O produto {{ old('$nome') }} foi adicionado.
            </div>
        @endif


        <table class="table">
            @foreach($produtos as $produto)
                <tr>
                    <td>{{$produto->nome}}</td>
                    <td>{{$produto->valor}}</td>
                    <td>{{$produto->categoria->nome}}</td>
                    <td>
                        <a href="{{url('produtos/detalhes/'.$produto->id)}}">
                            <span class="glyphicon glyphicon-search"></span>
                        </a>
                    </td>
                    <td>
                        <a href="{{url('produtos/remove/'.$produto->id)}}">
                            <span class="glyphicon glyphicon-trash"></span>
                        </a>
                    </td>
                    <td>
                        <a href="{{url('produtos/altera/'.$produto->id)}}">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif
<li>


    <ul class="nav navbar-nav navbar-right">
        <li>
            <a href="{{action('ProdutoController@listar')}}">
                Listagem
            </a>
        </li>
        <li>
            <a href="{{action('ProdutoController@novo')}}">
                Novo
            </a>
        </li>
    </ul>

@stop

