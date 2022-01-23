@extends('template.layout')

@section('title', 'Odds Fichas')
@section('content')
    @include('template._includes.style')
    <div class="app-content">
        <div class="app-title">
            <div class="div">
                <h1><i class="fa fa-laptop"></i> Clubes</h1>
            </div>

        </div>
        <div class="tile mb-1">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-10">
                        <h2 class="mb-3 line-head" id="buttons">Dados do Clube</h2>
                        @if($errors->any())
                            @foreach($errors->all() as $erro)
                                <div class="alert alert-danger" role="alert">
                                    <li>{{$erro}}</li>
                                </div>
                            @endforeach
                        @endif
                        <form action="{{route('fechamento.clubes.save')}}" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="row">
                                    <input type="hidden" name="id" value="{{$clube->id??''}}">
                                    <div class="col-2">
                                        <label for="exampleInputEmail1" class="form-label">Codigo</label>
                                        <input style="text-transform: uppercase" required type="text" value="{{$clube->codigo ?? ''}}" autocomplete="off" name="codigo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-5">
                                        <label for="exampleInputEmail1" class="form-label">Nome</label>
                                        <input style="text-transform: uppercase" required type="text" autocomplete="off" value="{{$clube->nome ?? ''}}" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"><br>
                                    </div>
                                    <div class="col-3">
                                        <label for="exampleInputEmail1" class="form-label">Logo do clube</label>
                                        <input  type="file" autocomplete="off" value="{{$clube->logo ?? ''}}" name="logo" class="form-control-file" id="exampleInputEmail1" aria-describedby="emailHelp"><br>
                                        <button type="submit" class="btn" style="float: right;">Salvar</button>
                                        <a type="submit" class="btn" style="float: right; margin-right: 10px;" href="/clubes">Cancelar</a>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div><br>
                @csrf
                <div class="clearfix"></div>
                <div class="col-md-10">
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
                    <form action="{{route('fechamento.clube.search')}}" method="POST">
                        <div class="tile">
                            <h3 class="tile-title">Listagem</h3>
                            <div class="row">
                                @csrf
                                <div class="col-8">
                                    <input style="text-transform: uppercase" class="form-control" autocomplete="off" type="search" name="buscar" placeholder="Pesquisar" aria-label="Search">
                                </div>
                                <div class="col-2">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                </div>
                            </div><br>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col-1">#</th>
                                    <th scope="col-1">Código</th>
                                    <th scope="col-6">Nome</th>
                                    <th scope="col-6">Logo</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($clubes as $clube)
                                    <tr>
                                        <td>{{$clube->id}}</td>
                                        <td>{{$clube->codigo}}</td>
                                        <td>{{$clube->nome}}</td>
                                        <td>
                                            @if($clube->logo)
                                                <img src="{{url('storage/'.$clube->logo)}}" style="max-width: 150px; align: center;">
                                            @endif
                                        </td>
                                        <td>
                                            <a type="button" id="btEditar" class="btn btn-primary"  href="{{route('fechamento.clubes.edit',$clube->id)}}" >Editar</a>
                                            <a type="button" class="btn btn-primary" onclick="return confirm('Deseja realmente deletar este usuário?')" href="{{route('fechamento.clubes.delete',$clube->id)}}" >Deletar</a>
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
