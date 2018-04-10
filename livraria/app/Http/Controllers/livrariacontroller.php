<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use AppLivraria ;

class livrariacontroller extends Controller
{

    public function index(){
        return view('cadastrar');
    }


    public function save(Request $request)
    {
        //$_POST['nome']
        //cria um novo acesso a model do laravel
        $livro = new Livraria();
        //coloca na model os dados vindos do formulario
        $livro->nome = $request->nome;
        $livro->autor = $request->autor;
        $livro->editora = $request->editora;
        $livro->descricao = $request->descricao;
        
        //grava no banco (persistir os dados)
        $livro->save();
        //substitui o Location
        return redirect('/cadastro') -> with('message', "Livraria $request->nome adicionado com sucesso");
        
        
    }


    public function lista()
    {
        $dados = Livraria::all();
        return view('livros', compact('dados'));
    }


    public function editaLista(Livraria $dados)
    {
        return view('editar', compact('dados'));
    
    }


    public function update(Request $request)
    {
        //$_POST['nome']
        //busca os dados do livro requisitado 
        $livro = Livraria::find($request->id);
        //coloca na model os dados vindos do formulario
        $livro->descricao = $request->descricao;
        
        //grava no banco (persistir os dados)
        $livro->save();
        //substitui o Location
        return redirect('/');
        
        
    }


    public function delete(Livraria $livro)
    {
        $livro->delete();
        return redirect('/');
        
        //return 'ok';
    }

}
