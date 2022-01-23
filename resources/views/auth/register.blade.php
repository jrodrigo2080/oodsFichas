@extends('template.layout')

@section('content')
    <div class="app-content">
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
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <input type="hidden" name="id" value="{{$usuario->id??''}}">
                                <div class="col">
                                    <label for="exampleInputEmail1" class="form-label">Nome</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$usuario->name ?? ''}}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$usuario->email ?? ''}}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="exampleInputEmail1" class="form-label">Senha</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label for="password-confirm" class="form-label">Confirmar senha</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"><br>
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
                            <th scope="col-6">Email</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a type="button" id="btEditar" class="btn btn-primary"  href="" >Editar</a>
                                    <a type="button" class="btn btn-primary" onclick="return confirm('Deseja realmente deletar este usuário?')" href="" >Deletar</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </main>
@endsection
