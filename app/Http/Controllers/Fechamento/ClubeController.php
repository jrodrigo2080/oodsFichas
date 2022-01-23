<?php

namespace App\Http\Controllers\Fechamento;

use App\Http\Requests\ClubeRequest;
use App\Model\Fechamento\Clube;
use App\Http\Controllers\Controller;
use App\Model\Fechamento\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Isset_;

class ClubeController extends Controller
{
    public function read(Request $request)
    {
        if($request->buscar){
            $clubes = DB::table('clubes')
                ->select('*')
                ->where('nome','like','%'.$request->buscar.'%')
                ->orderBy('nome')
                ->paginate('15');
        }else{
            $clubes = DB::table('clubes')
                ->select('*')
                ->orderBy('nome')
                ->paginate('15');
        }
        return view('clubes', compact('clubes'));
    }

    public function save(ClubeRequest $request)
    {
        if($request->hasFile('logo') && $request->logo->isValid()){
            $nome= $request->nome;
            $nameLogo = $request->logo->storeAs('clube',$nome);
        }else{
            $nameLogo = "";
        }

        $clube = new Clube();
        $clube->id      = $request->id;
        $clube->codigo  = $request->codigo;
        $clube->nome    = $request->nome;
        $clube->logo    = $nameLogo;

        if($request->id){

            if($nameLogo == ""){
                $dados = [
                    'codigo'=>$request->codigo,
                    'nome'=>$request->nome,
                ];
            }else{
                $dados = [
                    'codigo'=>$request->codigo,
                    'nome'=>$request->nome,
                    'logo'=>$clube->logo
                ];
            }
            Clube::where('id',$request->id)->update($dados);
            return redirect('/clubes')->with('msg','Clube alterado com sucesso!');
        }else{
            if($nameLogo == ""){
                $dados = [
                    'codigo'=>$request->codigo,
                    'nome'=>$request->nome,
                ];
            }else{
                $dados = [
                    'codigo'=>$request->codigo,
                    'nome'=>$request->nome,
                    'logo'=>$clube->logo
                ];
            }
            Clube::create($dados);
            return redirect('/clubes')->with('msg','Clube cadastrado com sucesso!');
        }

    }

    public function edit($id){
        $clube = Clube::where('id',$id)->first();
        $clubes = Clube::all();
        if(!empty($clube)){
            return view('clubes',compact('clube','clubes'));
        }else{
            return redirect()->action('Fechamento\ClubeController@read');
        }
    }

    public function delete(Request $request, $id){
        //dd($request->id);
        if(empty($id)){
            return redirect('/clubes');
        }
        Clube::findOrFail($id)->delete();
        return redirect('/clubes')->with('delete','Clube deletado com sucesso!');
    }

    public function update(Request  $request, $id){
        if(empty($request->id)){
            return $this->read();
        }
        $dados = [
            'nome'=>$request->nome,
            'codigo'=>$request->codigo
        ];
        Clube::where('id',$id)->update($dados);
        return redirect('/clubes');
    }
}
