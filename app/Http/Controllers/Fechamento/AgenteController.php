<?php

namespace App\Http\Controllers\Fechamento;

use App\Http\Requests\AgenteRequest;
use App\Model\Fechamento\Agente;
use App\Http\Controllers\Controller;
use App\Model\Fechamento\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AgenteController extends Controller
{
    public function index(){
        //
    }

    public function read(Request $request)
    {
        if($request->buscar){
            $agentes = DB::table('agentes')
                ->select('*')
                ->where('nome','like','%'.$request->buscar.'%')
                ->orderBy('nome')
                ->paginate('15');
        }else{
            $agentes = DB::table('agentes')
                ->select('*')
                ->orderBy('nome')
                ->paginate('15');
        }
        return view('agentes', compact('agentes'));
    }

    public function save(AgenteRequest $request)
    {
        if($request->id){
            $dados = [
                'nome'=>$request->nome,
                'telefone'=>$request->telefone,
                'cpf'=>$request->cpf,
                'endereco'=>$request->endereco,
                'cidade'=>$request->cidade,
                'uf'=>$request->uf,
                'tipoAgente'=>$request->tipoAgente
            ];
            Agente::where('id',$request->id)->update($dados);
            return redirect('/agentes')->with('msg','Agente alterado com sucesso!');
        }else{
            $dados = $request->all();
            Agente::create($dados);
            return redirect('/agentes')->with('msg','Agente cadastrado com sucesso!');
        }
    }

    public function edit(Request $request, $id){

        $agente = Agente::where('id',$id)->first();
        $agentes= Agente::all();
        if(!empty($agente)){
            return view('agentes',compact('agente','agentes'));
        }else{
            return redirect()->action('Fechamento\AgenteController@read');
        }
    }

    public function destroy($id){
        Agente::findOrFail($id)->delete();
        return redirect('/agentes')->with('delete','Deletado com sucesso.');
    }

    public function update(Request  $request, $id){
        if(empty($request->id)){
            return $this->read();
        }
        $dados = [
            'nome'=>$request->nome,
            'tipoAgente'=>$request->tipoAgente
        ];
        Agente::where('id',$id)->update($dados);
        return $this->read();
    }

    public function search(Request $request){
        $nome = $request->buscar;
        $agente = Agente::where('nome','like','%'.$nome.'%')->get();
        $agentes= Agente::all();
        if(!empty($agente)){
            return view('agentes',compact('agente','agentes','nome'));
        }else{
            return redirect()->action('Fechamento\AgenteController@read');
        }
    }
}
