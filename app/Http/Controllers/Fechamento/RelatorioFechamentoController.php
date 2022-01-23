<?php

namespace App\Http\Controllers\Fechamento;

use App\Http\Controllers\Controller;
use App\Model\Fechamento\Fechamento;
use Carbon\Carbon;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RelatorioFechamentoController extends Controller
{

    public function index()
    {
        $fechamentos  = DB::table('fechamentos')
            ->select('*')
            ->paginate('10');
        return view('relatoriofechamento', compact('fechamentos'));
    }

    public function buscaRelatorio(Request $request)
    {

       //variaveis
        $tipoFechamento = $request->tipo_fechamento;
        $agente = $request->agente;
        $clube = $request->clube;
        $data_inicial = $request->data_inicial;
        $data_final = $request->data_final;

        $busca = $request->buscar;
        $fechamentos = DB::table('fechamentos')
           ->select('*')
            ->where(function($query)use($request){
                   if($request->tipo_fechamento){
                       $query->where('tipoFechamento','=',$request->tipo_fechamento);
                   }
                   if($request->agente){
                       $query->where('agente','like','%'.$request->agente.'%');
                   }
                   if($request->clube){//dd($request);
                       $query->where('clube','like','%'.$request->clube.'%');
                   }
                   if($request->data_inicial){
                       $query->where('dataFechamento','>=',$request->data_inicial);
                   }
                   if($request->data_final){
                       $query->where('dataFechamento','<=',$request->data_final);
                   }
            })
            ->paginate(10);
        return view('relatoriofechamento',compact('fechamentos','tipoFechamento','agente','clube','data_final','data_inicial'))->with('buscar',$busca);
    }

    public function search(Request $request)
    {
        $busca = $request->buscar;
        $fechamentos = DB::table('fechamentos')
            ->select('*')
            ->where('agente','LIKE',"%{$busca}%")
            ->where('clube','LIKE',"%{$busca}%")
            ->paginate('10');
        return view('relatoriofechamento',compact('fechamentos'))->with('buscar',$busca);
    }

    public function geraPdf(Request $request)
    {

        //variaveis
        $tipoFechamento = $request->tipo_fechamento_pdf;
        $agente = $request->agente_pdf;
        $clube = $request->clube_pdf;
        $data_inicial = $request->data_inicial_pdf;
        $data_final = $request->data_final_pdf;

        $dados = DB::table('fechamentos')
            ->select('*')
            ->where(function($query)use($request){
                if($request->tipo_fechamento_pdf){
                    $query->where('tipoFechamento','=',$request->tipo_fechamento_pdf);
                }
                if($request->agente_pdf){
                    $query->where('agente','like','%'.$request->agente_pdf.'%');
                }
                if($request->clube_pdf){
                    $query->where('clube','like','%'.$request->clube_pdf.'%');
                }
                if($request->data_inicial_pdf){
                    $query->where('dataFechamento','>=',$request->data_inicial_pdf);
                }
                if($request->data_final_pdf){
                    $query->where('dataFechamento','<=',$request->data_final_pdf);
                }
            })
            ->get();
        $pdf = PDF::LoadView('pdf', compact('dados','tipoFechamento','clube','agente','data_inicial','data_final'));
        return $pdf->setPaper('A4')->stream('Relatorio_Fechamento.pdf');
    }

}
