@extends('template.layout')
@section('title', 'Odds Fichas')
@section('content')
    @include('template._includes.style2')
    <div class="app-content">
        <div class="app-title">
            <div class="div">
                <h1><i class="fa fa-laptop"></i>Fechamento</h1>
            </div>
        </div>
        <div class="tile mb-1">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-10">
                            <h2 class="mb-3 line-head" id="buttons">Dados do Fechamento</h2>
                            <div class="row">
                                <div class="col-10">
                                    <form  action="{{route('fechamento.getclubes')}}" method="post" style="margin-bottom: 10px;">
                                        @csrf
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-8">
                                                        @csrf
                                                        <label for="exampleFormControlSelect1">Escolha o Agente</label>
                                                        <select  class="form-control" name="agente_id" value="{{$agente->id??''}}" id="agente_id" action="{{route('fechamento.getclubes')}}">
                                                            <option value="{{$agente->id??''}}" disabled>{{$agente->nome??'Selecione'}}</option>
                                                            @foreach($agentes as $agente)
                                                                <option value="{{$agente->id}}">{{$agente->nome}}</option>
                                                            @endforeach
                                                        </select>
                                                        <input type="hidden" id="tipo_fechamento" name="tipo_fechamento" value="{{$agente->tipoAgente??''}}" >
                                                    </div>
                                                    <div class="col-3">
                                                        <button style="display: block; margin-top: 30px; margin-left: -10%; font-size: 12px;" type="submit" id="btBuscaClube" class="mb-2 btn btn-lg btn-warning"
                                                        >Buscar</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-3" id="divClube" style="margin-right: 2%; margin-left: -30px; width: 50%;" >
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label for="exampleFormControlSelect1">Escolha o Clube</label>
                                                        <select  class="form-control" name="clube_id" value="{{$clube->id??''}}" onchange="setNomeClube()" id="clube_id">
                                                            <option value="">Selecione</option>
                                                            @foreach($clubes as $clube)
                                                                <option value="{{$clube->id}}" >{{$clube->nome.'|'.$clube->porcentagem.'%'}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-2">
                                    <!--Botao iniciar-->
                                    <div id="btiniciar" style="display: block;">
                                        <div style="margin-top: 30px;">
                                                @csrf
                                                <input id="id_clube" type="hidden" name="id_clube">
                                                <button style="display: block; margin-top: 0%; margin-left: -120%; font-size: 12px;" class="mb-2 btn btn-lg btn-warning" onclick="mostarFechamento('divFechamento')">iniciar</button>
                                        </div>
                                    </div>
                                    <div id="btNovo" style="display: none;">
                                        <form action="{{route('fechamento.fechamento')}}" method="get">
                                            @csrf
                                            <div style="margin-top: 30px;">
                                                <button style="display: block; margin-top: 0%; margin-left: -130%; font-size: 12px;" class="mb-2 btn btn-lg btn-warning">Novo Fechamento</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div id="divFechamento" style="display: none;">
                                <div style="border: solid 1px; padding: 2%; margin-left: 1%; margin-right: 10%;">
                                    <div class="signup-form">
                                            <input type="text" style="color: black; font-size: 25px; font-family: 'Arial Black'; width: 100%; border: none; background: none;" disabled id="fechamento_title">
                                            <br>
                                            <div class="row">
                                                <div class="col-6" style="border: solid 1px; width: auto">
                                                    <input type="text" style="color: black; font-size: 20px; font-family: 'Arial Black'; width: 100%; border: none; background: none;" disabled id="agente_title">
                                                    <input type="text" style="color: black; font-size: 20px; font-family: 'Arial Black'; width: 100%; border: none; background: none;" disabled id="clube_title">
                                                    <input type="text" style="color: black; font-size: 20px; font-family: 'Arial Black'; width: 100%; border: none; background: none;" disabled id="porcentagem_title">
                                                    <input type="text" style="color: black; font-size: 20px; font-family: 'Arial Black'; width: 100%; border: none; background: none;" disabled id="tipo_title">
                                                </div>
                                                <div class="col-6" style="border: solid 1px; ">
                                                    <img  id="logo_clube" style="padding: 2%; max-width:300px;max-height:150px;width: auto;height: auto;">
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row" id="dados_fechamento" style="">
                                                    <div class="col-6">
                                                        <div class="row" >
                                                            <div class="col-6"><br>
                                                                <table style="flex-direction: row;"   class="border-estilo">
                                                                    <tr style="width: 100%">
                                                                        <th style="background-color:#CF9E33;color: white">Valores do Rake</th>
                                                                        <th style="background-color:#CF9E33;color: white">Resultados Rake</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="color: black; font-size: 15px; width: auto;">
                                                                            <input type="text" style="color: black; font-size: 15px; width: auto;" oninput="this.value = this.value.replace(/[^0-9...,-]/g, '').replace(/(\.......*?)\..*/g, '$1');" maxlength="20"  class="form-control" name="rake_cash" placeholder="Rake cash"  id="rake_cash" required="required">
                                                                        </td>
                                                                        <td style="color: black; font-size: 15px; width: 10px;">
                                                                            <input type="text" style="color: black; font-size: 15px; width: auto;" oninput="this.value = this.value.replace(/[^0-9...,-]/g, '').replace(/(\.......*?)\..*/g, '$1');" maxlength="20"  class="form-control" name="resultado_cash" placeholder="Resultado cash"  id="resultado_cash" required="required">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="color: black; font-size: 15px; width: 180%;">
                                                                            <input type="text" style="color: black; font-size: 15px; width: auto;"  oninput="this.value = this.value.replace(/[^0-9...,-]/g, '').replace(/(\.......*?)\..*/g, '$1');" maxlength="20"  class="form-control" name="rake_mtt" placeholder="Rake mtt"  id="rake_mtt" required="required">
                                                                        </td>
                                                                        <td style="color: black; font-size: 15px; width: 180%;">
                                                                            <input type="text" style="color: black; font-size: 15px; width: auto;" oninput="this.value = this.value.replace(/[^0-9...,-]/g, '').replace(/(\.......*?)\..*/g, '$1');" maxlength="20"  class="form-control" name="resultado_mtt" placeholder="Resultado mtt"  id="resultado_mtt" required="required">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="color: black; font-size: 15px; width: auto;">
                                                                            <input type="text" style="color: black; font-size: 15px; width: auto;"  oninput="this.value = this.value.replace(/[^0-9...,-]/g, '').replace(/(\.......*?)\..*/g, '$1');" maxlength="20"  class="form-control" name="rake_uniao" placeholder="Rake uniao"  id="rake_uniao" required="required">
                                                                        </td>
                                                                        <td style="color: black; font-size: 15px; width: auto;">
                                                                            <input type="text" style="color: black; font-size: 15px; width: auto;" oninput="this.value = this.value.replace(/[^0-9...,-]/g, '').replace(/(\.......*?)\..*/g, '$1');" maxlength="20"  class="form-control" name="resultado_uniao" placeholder="Resultado uniao"  id="resultado_uniao" required="required"><br>
                                                                            <button type="button" class="btn btn-warning" onclick="calculaFechamento()">Inserir</button><br>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6" >
                                                        <div class="col-6" id="fechamento_profit" style="display: block;">
                                                            <form action="{{route('fechamento.fechamento.create')}}" method="post">
                                                                @csrf
                                                                <div class="row" >
                                                                    <div class="col-8">
                                                                        <div style="flex-direction: row;" id="div1">
                                                                            <input type="hidden" id="agente_proft" name="agente_profit">
                                                                            <input type="hidden" id="clube_proft" name="clube_proft">
                                                                            <input type="hidden" id="data_fechamento_proft" name="data_fechamento_proft">
                                                                            <input type="hidden" id="porcentagem_proft" name="porcentagem_proft">
                                                                            <input type="hidden" id="tipo_fechamento_proft" name="tipo_fechamento_proft">
                                                                            <input type="hidden" id="rake_cash_proft" name="rake_cash_proft">
                                                                            <input type="hidden" id="rake_mtt_proft" name="rake_mtt_proft">
                                                                            <input type="hidden" id="rake_uniao_proft" name="rake_uniao_proft">
                                                                            <input type="hidden" id="resultado_cash_proft" name="resultado_cash_proft">
                                                                            <input type="hidden" id="resultado_mtt_proft" name="resultado_mtt_proft">
                                                                            <input type="hidden" id="resultado_uniao_proft" name="resultado_uniao_proft">
                                                                            <input type="hidden" id="total_rake_proft" name="total_rake_proft">
                                                                            <input type="hidden" id="total_resultado_proft" name="total_resultado_proft">
                                                                            <input type="hidden" id="resultado_proft" name="resultado_proft">
                                                                            <input type="hidden" id="rake_total_proft" name="rake_total_proft">
                                                                            <input type="hidden" id="rake_back_proft" name="rake_back_proft">
                                                                            <input type="hidden" id="comissao_proft" name="comissao_proft">
                                                                            <input type="hidden" id="final_proft" name="final_proft">
                                                                            <br>
                                                                            <div id="table_proft" style="display: none;">
                                                                                <table style="flex-direction: row;"   class="border-estilo">
                                                                                    <tr>
                                                                                        <th style="background-color:#CF9E33;">AGÊNCIA</th>
                                                                                        <th style="background-color:#CF9E33;" ><spam><input disabled style="width: 50%; font-size: 20px; text-align: center; border: none; color: white; background-color: transparent;" id="titulo_agencia" type="text"></spam></th>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td style="color: black; font-size: 15px; width: auto;">Resultado: <input style="color: black; font-size: 15px; width: auto;" disabled  id="tbresultado_proft" name="resultado" type="text" ></td>
                                                                                        <td style="color: black; font-size: 15px; width: 10px;">Rake Total:<input style="color: black; font-size: 15px; width: auto;" disabled  id="tbrakeTotal_proft" name="rakeTotal" type="text"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td style="color: black; font-size: 15px; width: 180%;">Rake Back:<input style="color: black; font-size: 15px; width: auto;" disabled  id="tbrakeBack_proft" name="rackBack" type="text"></td>
                                                                                        <td style="color: black; font-size: 15px; width: 180%;">Comissão:<input style="color: black; font-size: 15px; width: auto;"  disabled id="tbcomissao_proft" name="comissao" type="text"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td style="color: black; font-size: 15px; width: 180%;">Final:<input style="color: black; font-size: 15px; width: auto;"  id="tbfinal_proft" disabled name="final" type="text"></td>
                                                                                        <th> <button type="submit" class="btn" style="float: bottom; margin-top: 10px;">Salvar</button>  </th>
                                                                                    </tr>
                                                                                </table><br>
                                                                            </div>
                                                                            <div id="table_por_banca" style="display: none;">
                                                                                <table style="flex-direction: row; margin:0px; margin-top: auto; width: 50px;"   class="border-estilo">
                                                                                    <tr>
                                                                                        <th style="background-color:#CF9E33;">AGÊNCIA</th>
                                                                                        <th style="background-color:#CF9E33;" ><spam><input disabled style="width: 50%; font-size: 20px; text-align: center; border: none; color: white; background-color: transparent;" id="titulo_agencia" type="text"></spam></th>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td style="color: black; font-size: 15px; width: 10px;">Rake Total:<input style="color: black; font-size: 15px; width: auto;" disabled  id="rakeTotal_por_banca" name="rakeTotal_porbanca" type="text"></td>
                                                                                        <td style="color: black; font-size: 15px; width: 180%;">Comissão:<input style="color: black; font-size: 15px; width: auto;"  disabled id="comissao_por_banca" name="comissao_porbanca" type="text"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td style="color: black; font-size: 15px; width: 180%;">Rake Back:<input style="color: black; font-size: 15px; width: auto;" disabled  id="rakeBack_porbanca" name="rackBack_porbanca" type="text"></td>
                                                                                        <th> <button type="submit" class="btn" style="float: bottom; margin-top: 10px;">Salvar</button>  </th>
                                                                                    </tr>
                                                                                </table><br>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><br>
                                                            </form>
                                                        </div>
                                                    </div><br>
                                            </div>
                                            <hr>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                    </div>
                </div>
        </div>
        @include('template._includes.script')
    </div>
@endsection
