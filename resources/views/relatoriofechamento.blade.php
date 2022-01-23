@extends('template.layout')
@section('title', 'Odds Fichas')
@section('content')
    @include('template._includes.style')
    <div class="app-content">
        <div class="app-title">
            <div class="div">
                <h1><i class="fa fa-laptop"></i> Relatorio de Fechamento</h1>
            </div>
        </div>
        <div class="tile mb-1">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-10">
                        <h2 class="mb-3 line-head" id="buttons">Dados do Relatorio</h2>
                    </div>
                </div>
            </div><br>
            @csrf
            <div class="clearfix"></div>
            <div class="col-md-10">
                <div class="tile">
                    <h3 class="tile-title">Listagem</h3>
                    <div class="row">
                        <div class="col-12">
                                <form action="{{ route('relatorio.tipo') }}"  method="post">
                                @csrf
                                    <div class="row">
                                       <div class="col-2">
                                           <div>
                                               <label for="exampleFormControlSelect1">Escolha o Fechamento</label>
                                               <select  class="form-control" name="tipo_fechamento" id="tipo_fechamento" value="{{$tipoFechamento??''}}">
                                                   <option value="">Selecione</option>
                                                   <option value="por-banca">POR BANCA</option>
                                                   <option value="profit&loss" >PROFIT&LOSS</option>
                                               </select>
                                           </div>
                                       </div>
                                        <div class="col-3">
                                            <label>Agente:</label>
                                            <input class="form-control" name="agente" id="agente" type="text" value="{{$agente??''}}">
                                        </div>
                                        <div class="col-3">
                                            <label>Clube:</label>
                                            <input class="form-control" name="clube" id="clube" type="text" value="{{$clube??''}}">
                                        </div>

                                        <div class="col-2">
                                            <label>Data Inicial:</label>
                                            <input class="form-control" name="data_inicial" id="data_inicial" type="date" value="{{$data_inicial??''}}">
                                        </div>
                                        <div class="col-2">
                                                <label>Data Final:</label>
                                                <input class="form-control" name="data_final" id="data_final" type="date" value="{{$data_final??''}}">
                                        </div>

                                       <div class="col-1">
                                           <div class="row">
                                               <div class="col-4">
                                                   <button style="display: block; margin-top: 30px; margin-left: -10%; font-size: 12px;" type="submit" id="btBuscaClube" class="mb-2 btn btn-lg btn-warning"
                                                           >Buscar</button>
                                               </div>
                                           </div>
                                       </div>
                                    </div>
                                </form>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-10">

                            <div class="tile">
                                <h3 class="tile-title">Listagem</h3>
                                <div class="row">
                                    @csrf
                                    <div class="col-8">
                                        <input class="form-control" autocomplete="off" type="search" name="buscar" placeholder="Pesquisar" aria-label="Search">
                                    </div>
                                    <div class="col-2">
                                        <form action="{{route('relatorio.pdf')}}" method="get">
                                            <input type="hidden"  id="data_inicial_pdf" name="data_inicial_pdf" value="{{$data_inicial??''}}">
                                            <input type="hidden"  id="data_final_pdf" name="data_final_pdf" value="{{$data_final??''}}">
                                            <input type="hidden"  id="tipo_fechamento_pdf" name="tipo_fechamento_pdf" value="{{$tipoFechamento??''}}">
                                            <input type="hidden"  id="clube_pdf" name="clube_pdf" value="{{$clube??''}}">
                                            <input type="hidden"  id="agente_pdf" name="agente_pdf" value="{{$agente??''}}">
                                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">PDF</button>
                                        </form>
                                    </div>
                                </div><br>
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col-1">#</th>
                                        <th scope="col-6">Agente</th>
                                        <th scope="col-6">Clube</th>
                                        <th scope="col-6">Rake Total</th>
                                        <th scope="col-6">Resultado</th>
                                        <th scope="col-6">Rake Back</th>
                                        <th scope="col-6">Comissao</th>
                                        <th scope="col-6">Final</th>
                                        <th scope="col-6">Tipo</th>
                                        <th scope="col-6">Data</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($fechamentos as $fechamento)
                                        <tr>
                                            <td>{{$fechamento->id}}</td>
                                            <td>{{$fechamento->agente}}</td>
                                            <td>{{$fechamento->clube}}</td>
                                            <td>{{'R$ '.number_format($fechamento->total_rake, 2, ',', '.') }}</td>
                                            <td>{{'R$ '.number_format( $fechamento->total_resultado, 2, ',', '.')}}</td>
                                            <td>{{$fechamento->rack_back}}%</td>
                                            <td>{{'R$ '.number_format($fechamento->comissao, 2, ',', '.')}}</td>
                                            <td>{{'R$ '.number_format($fechamento->final, 2, ',', '.')}}</td>
                                            <td>{{$fechamento->tipoFechamento}}</td>
                                            <td>{{\Carbon\Carbon::parse($fechamento->dataFechamento)->format('d-m-Y')}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    </main>

@include('template._includes.script')
@endsection
