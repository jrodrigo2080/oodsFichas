@extends('template.layout')

@section('title', 'Odds Fichas')
@section('content')
    @include('template._includes.style')
    <div class="app-content">
        <div class="app-title">
            <div class="div">
                <h1><i class="fa fa-laptop"></i> Agentes</h1>
            </div>
        </div>
        <div class="tile mb-1">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-10">
                        <h2 class="mb-3 line-head" id="buttons">Dados dos Agentes</h2>
                        <form action="{{route('fechamento.agente.save')}}" method="post">
                            @csrf
                            <div class="row">
                                <input type="hidden" name="id" value="{{$agente->id??''}}">
                                <div class="col-5">
                                    <label for="exampleInputEmail1" class="form-label">Nome</label>
                                    <input type="text" value="{{$agente->nome ?? ''}}" autocomplete="off" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="col-3">
                                    <label for="exampleFormControlSelect1">Tipos de Agente</label>
                                    <select  class="form-control" name="tipoAgente" id="exampleFormControlSelect1" value="{{$agente->tipoAgente ?? ''}}">
                                        <option value="selecione">Selecione</option>
                                        <option value="profit&loss">Profit&Loss</option>
                                        <option value="por-banca">Por banca</option>
                                    </select><br>
                                    <button type="submit" class="btn" style="float: right;">Salvar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div><br>
            @csrf
            <div class="clearfix"></div>
            <div class="col-md-10">
                <div class="tile">
                    <h3 class="tile-title">Listagem</h3>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col-1">Código</th>
                            <th scope="col-6">Nome</th>
                            <th scope="col-6">Tipo</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($agentes as $agente)
                            <tr>
                                <td>{{$agente->id}}</td>
                                <td>{{$agente->nome}}</td>
                                <td>{{$agente->tipoAgente}}</td>
                                <td>
                                    <a type="button" id="btEditar" class="btn btn-primary"  href="{{route('fechamento.agente.edit',$agente->id)}}" >Editar</a>
                                    <a type="button" class="btn btn-primary" onclick="return confirm('Deseja realmente deletar este usuário?')" href="{{route('fechamento.agente.delete',$agente->id)}}" >Deletar</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </main>
@endsection
