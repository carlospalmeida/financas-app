<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movimento;

class MovimentoController extends Controller
{
    //Escrever aqui os métodos para o CRUD

    //CREATE
    public function store(Request $request){
        // dd($request);
        // dd(auth()->user());


        //Instancia o Model Movimento
        $movimento = new Movimento;
        
        $movimento->descricao = $request->descricao;
        $movimento->tipo = $request->tipo;
        $movimento->valor = $request->valor;
        $movimento->user_id = auth()->user()->id;

        //Grava na tabela do BD
        $movimento->save();
       
        //Redireciona para o Dashboard
        return redirect('dashboard');

    }

    //READ
    public function read(){
        $user = auth()->user()->id;

        //Carrega as despesas na variável
        //SELECT WHERE
        //Carrega as despesas
        $despesas = Movimento::where('tipo','Despesas')->where('user_id',$user)->get();

        //Carrega as receitas
        $receitas = Movimento::where('tipo','Receita')->where('user_id',$user)->get();

        //Carrega a view passando os dados
        $dados = [
            'despesas' => $despesas,
            'receitas' => $receitas,

        ];

        return view('dashboard',$dados);

    }

    //UPDATE - carrega os dados
    public function form_update($id){
        $dado = Movimento::findOrFail($id);
        return view('form_update', ['dado' => $dado]);

    }


}
