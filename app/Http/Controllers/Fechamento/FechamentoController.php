<?php

namespace App\Http\Controllers\Fechamento;

use App\AgentesClube;
use App\Http\Controllers\Controller;
use App\Model\Fechamento\Agente;
use App\Model\Fechamento\Clube;
use App\Model\Fechamento\Fechamento;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function GuzzleHttp\Promise\all;

class FechamentoController extends Controller
{
    public function __contruct(Clube $clubes, AgentesClube $agentesClube){
        $this->clube = $clubes;
        $this->agentesClubes = $agentesClube;
    }

    public function index()
    {
        $agentes = Agente::all();
        $clubes = DB::select('select * from clubes where id=0');
        return view('fechamento',compact('agentes','clubes'));
    }

    public function getClubes(Request $request)
    {

        $dados = $request->all();
        $agente = $dados['agente_id'];
        $agentes = DB::select('select * from agentes where id='.$agente);
        $clubes = DB::select('SELECT a.clube_id as id,a.porcentagem,c.nome as nome, c.logo as logo FROM agentes_clubes a, clubes c where a.clube_id = c.id and a.agente_id ='.$agente);


        return view('fechamento',compact('agentes','clubes'));
    }

    public function getPorcentagem(Request $request)
    {
        dd($request);
        $dados = $request->all();
        $agente = $dados['agente_id'];
        $agentes = DB::select('select * from agentes where id='.$agente);
        $clubes = DB::select('SELECT a.clube_id as id,a.porcentagem,c.nome as nome FROM agentes_clubes a, clubes c where a.clube_id = c.id and a.agente_id ='.$agente);

        return view('fechamento',compact('agentes','clubes'));
    }

    public function create(Request $request)
    {

        if($request->id){
            $dados = [
                'nome'=>$request->nome,
                'tipoAgente'=>$request->tipoAgente
            ];
            Fechamento::where('id',$request->id)->update($dados);
            return redirect()->action('Fechamento\FechamentoController@index');
        }else{
                $dados = [
                    'agente'=>$request->agente_profit,
                    'clube'=>$request->clube_proft,
                    'tipoFechamento'=>$request->tipo_fechamento_proft,
                    'porcentagem'=>$request->porcentagem_proft,//data_fechamento_proft
                    'dataFechamento'=>Carbon::createFromFormat('d/m/Y', $request->data_fechamento_proft)->format('Y-m-d'),
                    'rake_cash'=>$request->rake_cash_proft,
                    'rake_mtt'=>$request->rake_mtt_proft,
                    'rake_uniao'=>$request->rake_uniao_proft,
                    'total_rake'=>$request->total_rake_proft,
                    'total_resultado'=>$request->total_resultado_proft,
                    'resultado_cash'=>$request->resultado_cash_proft,
                    'resultado_mtt'=>$request->resultado_mtt_proft,
                    'resultado_uniao'=>$request->resultado_uniao_proft,
                    'resultado'=>$request->resultado_proft,
                    'rake_total'=>$request->rake_total_proft,
                    'rack_back'=>$request->rake_back_proft,
                    'comissao'=>$request->comissao_proft,
                    'final'=>$request->final_proft
                ];
            Fechamento::create($dados);
            return redirect()->action('Fechamento\FechamentoController@index');
        }
    }

    public function getLogo(Request $request){
        $nome_clube = $request->id_clube;
        $logos = DB::table('clubes')->select('*')->where('nome','=',$nome_clube)->first();

        return view('fechamento',compact('logos'));
    }

}
