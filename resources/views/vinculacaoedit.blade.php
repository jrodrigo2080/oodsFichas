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
                            <div class="row">
                                <div class="col-6">
                                    <input type="hidden" name="id"  id="id" value="{{$agenteClubes[0]->id}}">
                                    <label for="exampleFormControlSelect1">Agente</label>
                                    <select  class="form-control" name="agente_id" value="{{$agente->id??''}}" id="agente_id">
                                        <option value="{{$agente->id??''}}">{{$agente->nome??'Selecione'}}</option>
                                        @foreach($agentes as $agente)
                                            <option value="{{$agente->id}}" {{$agenteClubes[0]->id_agente == $agente->id ? "selected = 'selected'":""}}>{{$agente->nome}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-3">
                                    <label for="exampleInputEmail1" class="form-label">Clube</label>
                                    <select  class="form-control" name="clube_id" id="clube_id">
                                        <option value="selecione">Selecione</option>
                                        @foreach($clubes as $clube)
                                            <option value="{{$clube->id}}" {{$agenteClubes[0]->id_clube == $clube->id ? "selected = 'selected'":""}}>{{$clube->nome}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-3">
                                    <label for="exampleInputEmail1" class="form-label">Porcentagem</label>
                                    <input type="number" value="{{ $agenteClubes[0]->porcentagem ?? ''}}" name="porcentagem" class="form-control" id="porcentagem" autocomplete="off"><br>
                                    <button type="submit" class="btn" style="float: right;">Salvar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div><br>
        </div>
    </div>
    </main>
    @include('template._includes.script')
@endsection
