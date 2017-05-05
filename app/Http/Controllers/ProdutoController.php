<?php
/**
 * Created by PhpStorm.
 * User: ciceromoura
 */

namespace estoque\Http\Controllers;

use DB;
use Request;
use estoque\Produto;
use estoque\Categoria;
use estoque\Http\Requests\ProdutoRequest;

class ProdutoController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function listar() {
        $produtos = Produto::all();

        return view('produto/listagem_produtos')->with('produtos', $produtos);
    }

    public function detalhes($id) {
        //$id = Request::route('id');

        $produto = Produto::find($id);

        if(empty($produto)) {
            return "Esse produto não existe";
        }

        return view('produto/detalhes_produto')->with('produto', $produto);
    }

    public function remove($id) {
        $produto = Produto::find($id);

        $produto->delete();

        if(empty($produto)) {
            return "Esse produto não existe";
        }

        return redirect()->action('ProdutoController@listar');
    }

    public function altera($id) {
        $produto = Produto::find($id);

        if(empty($produto)) {
            return "Esse produto não existe";
        }

        return view("produto/altera_produto")->with("produto", $produto);
    }

    public function novo() {

        return view('produto/formulario_produto')->with('categorias', Categoria::all());
    }

    public function adiciona(ProdutoRequest $request) {
        $params = $request->all();

        Produto::create($params);

        return redirect()->action('ProdutoController@listar')->withInput(Request::only('nome'));
    }

    public function alterado($id) {
        $params = Request::all();

        $produto = Produto::find($id);

        $produto->update($params);

        return redirect()->action('ProdutoController@listar');
    }

}