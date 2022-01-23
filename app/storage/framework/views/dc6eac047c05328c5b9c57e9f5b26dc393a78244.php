<?php $__env->startSection('title', 'Odds Fichas'); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('template._includes.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                        <form action="<?php echo e(route('fechamento.clubes.save')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                                <div class="row">
                                    <input type="hidden" name="id" value="<?php echo e($clube->id??''); ?>">
                                    <div class="col-2">
                                        <label for="exampleInputEmail1" class="form-label">Codigo</label>
                                        <input required type="text" value="<?php echo e($clube->codigo ?? ''); ?>" autocomplete="off" name="codigo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-5">
                                        <label for="exampleInputEmail1" class="form-label">Nome</label>
                                        <input  required type="text" autocomplete="off" value="<?php echo e($clube->nome ?? ''); ?>" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"><br>
                                    </div>
                                    <div class="col-3">
                                        <label for="exampleInputEmail1" class="form-label">Logo do clube</label>
                                        <input required type="file" autocomplete="off" value="<?php echo e($clube->logo ?? ''); ?>" name="logo" class="form-control-file" id="exampleInputEmail1" aria-describedby="emailHelp"><br>
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
                                <th scope="col-1">#</th>
                                <th scope="col-1">Código</th>
                                <th scope="col-6">Nome</th>
                                <th scope="col-6">Logo</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $clubes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clube): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($clube->id); ?></td>
                                    <td><?php echo e($clube->codigo); ?></td>
                                    <td><?php echo e($clube->nome); ?></td>
                                    <td>
                                        <?php if($clube->logo): ?>
                                            <img src="<?php echo e(url('storage/'.$clube->logo)); ?>" style="max-width: 150px; align: center;">
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a type="button" id="btEditar" class="btn btn-primary"  href="<?php echo e(route('fechamento.clubes.edit',$clube->id)); ?>" >Editar</a>
                                        <a type="button" class="btn btn-primary" onclick="return confirm('Deseja realmente deletar este usuário?')" href="<?php echo e(route('fechamento.clubes.delete',$clube->id)); ?>" >Deletar</a>
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

<?php echo $__env->make('template.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\odd_fichas\resources\views/clubes.blade.php ENDPATH**/ ?>