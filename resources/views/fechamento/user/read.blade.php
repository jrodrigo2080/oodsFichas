@extends('template.layout')

@section('title', 'Usuarios')

@section('content')
   <!--Grid-->
    <div class="container-x1" style="padding: 3%;">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-10">
                    <h2>Listagem de <b>Usuarios</b></h2>
                </div>
                <div class="col-sm-2">
                    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add Novo Usuario</span></a>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
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
                            <td>{{$users ->id}}</td>
                            <td>{{$users->name}}</td>
                            <td>{{$users->email}}</td>
                            <td>
                                <a type="button" class="btn btn-primary" href="{{route('fechamento.user.edit',$users->id)}}" >Editar</a>
                                <button href="#deleteEmployeeModal" data-toggle="modal" class="btn btn-danger" >Deletar</button>
                            </td>
                        </tr>
                    @endforeach
            </tbody>
        </table>
    </div>

   <!-- Delete Modal HTML -->
   <div id="deleteEmployeeModal" class="modal fade">
       <div class="modal-dialog">
           <div class="modal-content">
               <form action="" method="POST">
                   @csrf
                   @method('delete')
                   <div class="modal-header">
                       <h4 class="modal-title">Deletar Agente</h4>
                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                   </div>
                   <div class="modal-body">
                       <p>Tem certeza que deseja excluir este registro?</p>
                       <p class="text-warning"><small>Essa ação não pode ser desfeita.</small></p>
                   </div>
                   <div class="modal-footer">
                       <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                       <input type="submit" class="btn btn-danger" value="Apagar">
                   </div>
               </form>
           </div>
       </div>
   </div>
   <!-- Adicionar Modal HTML -->
   <div id="addEmployeeModal" class="modal fade">
       <div class="modal-dialog">
           <div class="modal-content">
               <form action="{{route('fechamento.user.save')}}" method="post">
                   @csrf
                    @include('fechamento.user._form')
                   <div class="modal-footer">
                       <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                       <input type="submit" class="btn btn-success" value="Add">
                   </div>
               </form>
           </div>
       </div>
   </div>
@endsection
