<?php $__env->startSection('title', 'Odds Fichas'); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('template._includes.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                        <form action="<?php echo e(route('fechamento.agente.save')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <input type="hidden" name="id" value="<?php echo e($agente->id??''); ?>">
                                <div class="col-5">
                                    <label for="exampleInputEmail1" class="form-label">Nome</label>
                                    <input required type="text" value="<?php echo e($agente->nome ?? ''); ?>" autocomplete="off" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="col-3">
                                    <label for="exampleFormControlSelect1">Tipos de Agente</label>
                                    <select  class="form-control" name="tipoAgente" id="exampleFormControlSelect1" value="<?php echo e($agente->tipoAgente ?? ''); ?>">
                                        <option value="<?php echo e($agente->tipoAgente??''); ?>"><?php echo e($agente->tipoAgente??'Selecione'); ?></option>
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
                            <th scope="col-6">Tipo</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $agentes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($agente->id); ?></td>
                                <td><?php echo e($agente->nome); ?></td>
                                <td><?php echo e($agente->tipoAgente); ?></td>
                                <td>
                                    <a type="button" id="btEditar" class="btn btn-primary"  href="<?php echo e(route('fechamento.agente.edit',$agente->id)); ?>" >Editar</a>
                                    <a type="button" class="btn btn-primary" onclick="return confirm('Deseja realmente deletar este usuário?')" href="<?php echo e(route('fechamento.agente.delete',$agente->id)); ?>" >Deletar</a>
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

<?php echo $__env->make('template.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\odd_fichas\resources\views/agentes.blade.php ENDPATH**/ ?>