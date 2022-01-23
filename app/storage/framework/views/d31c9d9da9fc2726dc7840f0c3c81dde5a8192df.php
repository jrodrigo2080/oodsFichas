<?php $__env->startSection('title', 'Odds Fichas'); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('template._includes.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
                            <form action="<?php echo e(route('fechamento.user.save')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <input type="hidden" name="id" value="<?php echo e($usuario->id??''); ?>">
                                    <div class="col">
                                        <label for="exampleInputEmail1" class="form-label">Nome</label>
                                        <input required type="text" value="<?php echo e($usuario->name ?? ''); ?>" autocomplete="off" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input required type="email" autocomplete="off" value="<?php echo e($usuario->email ?? ''); ?>" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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

                <?php echo csrf_field(); ?>
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
                                <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($users->id); ?></td>
                                        <td><?php echo e($users->name); ?></td>
                                        <td><?php echo e($users->email); ?></td>
                                        <td>
                                            <a type="button" id="btEditar" class="btn btn-primary"  href="<?php echo e(route('fechamento.user.edit',$users->id)); ?>" >Editar</a>
                                            <a type="button" class="btn btn-primary" onclick="return confirm('Deseja realmente deletar este usuário?')" href="<?php echo e(route('fechamento.user.delete',$users->id)); ?>" >Deletar</a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\odd_fichas\resources\views/usuario.blade.php ENDPATH**/ ?>