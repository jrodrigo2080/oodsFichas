<?php

namespace App\Http\Controllers\Fechamento;

use App\Model\Fechamento\Agente;
use App\Model\Fechamento\AgentesClube;
use App\Model\Fechamento\Clube;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VinculacaoController extends Controller
{
    public function __construct(Agente $agente, Clube $clube){
        $this->agente = $agente;
        $this->clube = $clube;
    }

    public function index(Request $request)
    {
        if($request->buscar){
            $agentes = $this->agente
                ->where('nome','',$request->buscar)
                ->orderby('nome','asc')->get();

            $clubes = $this->clube
                ->orderby('nome','asc')->get();

            $agenteClubes = DB::table('agentes_clubes')
                ->select('*')
                ->paginate('15');
        }else{
            $agentes = $this->agente
                ->orderby('nome','asc')->get();

            $clubes = $this->clube
                ->orderby('nome','asc')->get();

            $agenteClubes = DB::table('agentes_clubes')
                ->select('*')
                ->paginate('15');
        }
        return view('vinculacao',['agentes'=>$agentes, 'clubes'=>$clubes, 'agenteClubes'=>$agenteClubes]);
    }

    public function show(){
        $agentes = DB::table('agentes')->get();

        $clubes = DB::table('clubes')->get();

        $agenteClubes = DB::select('SELECT agtclb.id, agt.nome as agente, cbl.nome as clube, agtclb.porcentagem FROM agentes_clubes agtclb
                                          INNER join agentes agt ON agt.id = agtclb.agente_id
                                          INNER JOIN clubes cbl ON  cbl.id = agtclb.clube_id');

        return view('vinculacao',['agentes'=>$agentes, 'clubes'=>$clubes, 'agenteClubes'=>$agenteClubes]);
    }

    public function create(Request $request){
        //dd($request);
        if($request->id){
            $dados = [
                'agente_id'=>$request->agente_id,
                'clube_id'=>$request->clube_id,
                'porcentagem'=>$request->porcentagem
            ];
            AgentesClube::where('id',$request->id)->update($dados);
            return redirect()->action('Fechamento\VinculacaoController@show');
        }else{
            $valida = DB::table('agentes_clubes')
                ->select('*')
                ->where('agente_id','=',$request->agente_id)
                ->where('clube_id','=',$request->clube_id)
                ->count();
            if($valida > 0){
                return redirect()->action('Fechamento\VinculacaoController@show')->with('delete','Essa vinculação já se encontra em nossa base');
            }else {
                $dados = [
                    'agente_id' => $request->agente_id,
                    'clube_id' => $request->clube_id,
                    'porcentagem' => $request->porcentagem
                ];
                AgentesClube::create($dados);
                return redirect()->action('Fechamento\VinculacaoController@show')->with('msg','Vinculação realizada com sucesso.');
            }
        }
    }

    public function store(Request $request)
    {
        //
    }

    public function edit($id)
    {
        $agenteclube = AgentesClube::where('id',$id)->first();
        if(!empty($agenteclube)){
            $clubes = Clube::all();
            $agentes = Agente::all();
            $agenteClubes = DB::select('SELECT agtclb.id as id, agt.nome as agente, agt.id as id_agente,cbl.nome as clube,cbl.id as id_clube, agtclb.porcentagem as porcentagem FROM agentes_clubes agtclb
                                          INNER join agentes agt ON (agt.id = agtclb.agente_id)
                                          INNER JOIN clubes cbl ON (cbl.id = agtclb.clube_id)
                                          WHERE agtclb.id ='.$id);

            return view('vinculacaoedit',compact('clubes','agentes','agenteClubes'));
        }else{
            return redirect()->action('Fechamento\VinculacaoController@show');
        }
    }

    public function destroy($id)
    {
        AgentesClube::findOrFail($id)->delete();
        return redirect()->action('Fechamento\VinculacaoController@show');
    }
}
