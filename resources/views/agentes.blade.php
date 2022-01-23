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
                        @if($errors->any())
                            @foreach($errors->all() as $erro)
                                <div class="alert alert-danger" role="alert">
                                    <li>{{$erro}}</li>
                                </div>
                            @endforeach
                        @endif
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
                        <form action="{{route('fechamento.agente.save')}}" method="post">
                            @csrf
                            <div class="row">
                                <input type="hidden" name="id" value="{{ $agente->id??'' }}">
                                <div class="col-5">
                                    <label for="exampleInputEmail1" class="form-label">Nome</label>
                                    <input style="text-transform: uppercase" required type="text" value="{{$agente->nome ?? ''}}" autocomplete="off" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="col-3">
                                    <label for="exampleInputEmail1" class="form-label">Telefone</label>
                                    <input style="text-transform: uppercase" required type="number" value="{{$agente->telefone ?? ''}}" autocomplete="off" name="telefone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="col-3">
                                    <label for="exampleInputEmail1" class="form-label">CPF</label>
                                    <input style="text-transform: uppercase" required type="number" value="{{$agente->cpf ?? ''}}" autocomplete="off" name="cpf" class="form-control cpf-mask" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-4">
                                    <label for="exampleInputEmail1" class="form-label">Endereço</label>
                                    <input style="text-transform: uppercase" required type="text" value="{{$agente->endereco ?? ''}}" autocomplete="off" name="endereco" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="col-3">
                                    <label for="exampleInputEmail1" class="form-label">Cidade</label>
                                    <input style="text-transform: uppercase" required type="text" value="{{$agente->cidade?? ''}}" autocomplete="off" name="cidade" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="col-1">
                                    <label for="exampleInputEmail1" class="form-label">UF</label>
                                    <input style="text-transform: uppercase" required type="text" value="{{$agente->uf?? ''}}" maxlength="2" autocomplete="off" name="uf" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="col-3">
                                    <label for="exampleFormControlSelect1">Tipos de Agente</label>
                                    <select  class="form-control" name="tipoAgente" id="exampleFormControlSelect1" value="{{$agente->tipoAgente ?? ''}}">
                                        <option value="{{$agente->tipoAgente??''}}">{{$agente->tipoAgente??'Selecione'}}</option>
                                        <option value="profit&loss">Profit&Loss </option>
                                        <option value="por-banca">Por banca</option>
                                    </select><br>
                                    <button type="submit" class="btn" style="float: right;">Salvar</button>
                                    <a type="submit" class="btn" style="float: right; margin-right: 10px;" href="/agentes">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div><br>
            @csrf
            <div class="clearfix"></div>
            <div class="col-md-10">
                <form action="{{route('fechamento.agente.search')}}" method="POST">
                    <div class="tile">
                        <h3 class="tile-title">Listagem</h3>
                        <div class="row">
                             @csrf
                            <div class="col-10">
                                    <input class="form-control" autocomplete="off" type="search" name="buscar" placeholder="Pesquisar" aria-label="Search">
                            </div>
                            <div class="col-2">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </div>
                        </div><br>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col-1">Código</th>
                                <th scope="col-6">Nome</th>
                                <th scope="col-6">Fone</th>
                                <th scope="col-6">CPF</th>
                                <th scope="col-6">Tipo</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($agentes as $agente)
                                <tr>
                                    <td>{{$agente->id}}</td>
                                    <td>{{$agente->nome}}</td>
                                    <td>{{$agente->telefone}}</td>
                                    <td>{{$agente->cpf}}</td>
                                    <td>{{$agente->tipoAgente}}</td>
                                    <td>
                                        <a type="button" id="btEditar" class="btn btn-primary"  href="{{route('fechamento.agente.edit',$agente->id??'')}}" >Editar</a>
                                        <a type="button" class="btn btn-primary" onclick="return confirm('Deseja realmente deletar este usuário?')" href="{{route('fechamento.agente.delete',$agente->id)}}" >Deletar</a>
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
@endsection
