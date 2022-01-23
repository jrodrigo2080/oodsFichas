@extends('template.layout')

@section('title', 'Odds Fichas')
@section('content')
    @include('template._includes.style')

    <div class="app-content">
        <div class="app-title">
            <div class="div">
                <h1><i class="fa fa-laptop"></i> Vinculação</h1>
            </div>
        </div>

        <div class="tile mb-1">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-10">
                        <h2 class="mb-3 line-head" id="buttons">Vinculação de clubes</h2>
                        <form action="{{route('fechamento.vinculacao.create')}}" method="post">
                            @csrf
                            <main>
                                <div class="container-fluid" id="alerta_salvo">
                                    @if(session('msg'))
                                        <div class="alert alert-success" role="alert">
                                            {{session('msg')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="container-fluid">
                                    @if(session('delete'))
                                        <div class="alert alert-danger" role="alert">
                                            {{session('delete')}}
                                        </div>
                                    @endif
                                </div>
                            </main>
                            <div class="row">
                                    <div class="col-6">
                                        <input type="hidden" name="id"  id="id">
                                        <label for="exampleFormControlSelect1">Agente</label>
                                        <select  class="form-control" name="agente_id" value="{{$agente->id??''}}" id="agente_id" required>
                                            <option value="{{$agente->id??''}}">{{$agente->nome??'Selecione'}}</option>
                                            @foreach($agentes as $agente)
                                                <option value="{{$agente->id}}"
                                                >{{$agente->nome}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                            </div><br>
                            <div class="row">
                                <div class="col-3">
                                    <label for="exampleInputEmail1" class="form-label">Clube</label>
                                    <select class="form-control" name="clube_id" id="clube_id" required>
                                        <option value="">Selecione</option>
                                        @foreach($clubes as $clube)
                                            <option value="{{$clube->id}}">{{$clube->nome}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-3">
                                    <label for="exampleInputEmail1" class="form-label">Porcentagem</label>
                                    <input type="number" name="porcentagem" required class="form-control" id="porcentagem" autocomplete="off"><br>
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
                <form action="{{route('fechamento.vinculacao.search')}}" method="POST">
                    <div class="tile">
                        <h3 class="tile-title">Listagem</h3>
                        <div class="row">
                            @csrf
                        </div><br>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col-1">Código</th>
                                <th scope="col-6">Agencia</th>
                                <th scope="col-6">Clube</th>
                                <th scope="col-6">Porcentagem</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($agenteClubes as $lista)
                                <tr>
                                    <td id="listaId">{{$lista->id}}</td>
                                    <td id="listaAgente">{{$lista->agente}}</td>
                                    <td id="listaClube">{{$lista->clube}}</td>
                                    <td id="listaPorcentagem">{{$lista->porcentagem}}%</td>
                                    <td>
                                        <a type="button" id="btEditar" class="btn btn-primary"  href="{{route('fechamento.vinculacao.edit',$lista->id)}}">Editar</a>
                                        <a type="button" class="btn btn-primary" onclick="return confirm('Deseja realmente deletar este usuário?')" href="{{route('fechamento.vinculacao.destroy',$lista->id)}}" >Deletar</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </main>
    @include('template._includes.script')
@endsection
