@extends('template.layout')

@section('title', 'Odds Fichas')

@section('content')
    <main class="app-content">
        <div class="app-title">
            <div class="div">
                <h1><i class="fa fa-laptop"></i> Usuários</h1>
            </div>

        </div>
        <div class="tile mb-1">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-10">
                        <h2 class="mb-3 line-head" id="buttons">Dados do Usuário</h2>
                        <form action="{{route('fechamento.user.save')}}" method="post">
                            @csrf
                                <div class="row">
                                    <div class="col">
                                        <label for="exampleInputEmail1" class="form-label">Nome</label>
                                        <input required type="text" autocomplete="off" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input required type="email" autocomplete="off" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1" class="form-label">Senha</label>
                                        <input required type="password" name="password" class="form-control" id="exampleInputEmail1" autocomplete="off" ><br>
                                        <button type="submit" class="btn" style="float: right;">Salvar</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div><br>
            <form>
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
                                <th scope="col-6">Email</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($user as $users)
                                <tr>
                                    <td>{{$users->id}}</td>
                                    <td>{{$users->name}}</td>
                                    <td>{{$users->email}}</td>
                                    <td>
                                        <a type="button" id="btEditar" class="btn btn-primary"  href="{{route('fechamento.user.edit',['id'=>$users->id])}}" >Editar</a>
                                        <a type="button" class="btn btn-primary" onclick="return confirm('Deseja realmente deletar este usuário?')" href="{{route('fechamento.user.delete',$users->id)}}" >Deletar</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </main>

@endsection
