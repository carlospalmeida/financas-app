<?php

namespace App\Http\Controllers;

//Campos do formulário
use Illuminate\Http\Request;
//Campos da tabela no BD
use App\Models\Movimento;

class MovimentoController extends Controller
{
    //Escrever aqui os métodos para o CRUD

    //C do  crud
    public function store(Request $request){
        //instancia o Model Movimento
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

    //R do CRUD
    public function read(){
        $user = auth()->user()->id;
        //Carrega as despesas na variável
        //SELECT WHERE
        $despesas = Movimento::where('tipo', 'Despesas')->where('user_id', $user)->get();
        //Carrega receitas
        $receitas = Movimento::where('tipo', 'Receita')->where('user_id', $user)->get();

        $totDespesas = Movimento::where('tipo','Despesas')->where('user_id',$user)->sum('valor');
        $totReceitas = Movimento::where('tipo','Receita')->where('user_id',$user)->sum('valor');

        //Carrega a view passando os dados consultados
        $dados = [
            'despesas' => $despesas,
            'receitas' => $receitas,
            'totDespesas' => $totDespesas,
            'totReceitas' => $totReceitas
        ];

        return view('dashboard', $dados);
    }

    //U do CRUD - carrega os dados
    public function form_update($id){
        $dado = Movimento::findOrFail($id);
        return view('form_update', ['dado' => $dado]);
    }
    //U do CRUD - atualiza dados
    public function update(Request $request){
        Movimento::findOrFail($request->id)->update($request->all());
        return redirect('dashboard');
    }

    //D do CRUD
    public function deletar($id){
        Movimento::findOrFail($id)->delete();
        return redirect('dashboard');
    }

}
