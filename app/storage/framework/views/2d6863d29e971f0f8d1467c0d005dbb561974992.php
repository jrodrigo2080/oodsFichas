<?php $__env->startSection('title', 'Odds Fichas'); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('template._includes.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
                        <form action="<?php echo e(route('fechamento.vinculacao.create')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                    <div class="col-6">
                                        <input type="hidden" name="id"  id="id">
                                        <label for="exampleFormControlSelect1">Agente</label>
                                        <select  class="form-control" name="agente_id" value="<?php echo e($agente->id??''); ?>" id="agente_id">
                                            <option value="<?php echo e($agente->id??''); ?>"><?php echo e($agente->nome??'Selecione'); ?></option>
                                            <?php $__currentLoopData = $agentes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($agente->id); ?>"><?php echo e($agente->nome); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                            </div><br>
                            <div class="row">
                                <div class="col-3">
                                    <label for="exampleInputEmail1" class="form-label">Clube</label>
                                    <select  class="form-control" name="clube_id" id="clube_id">
                                        <option value="selecione">Selecione</option>
                                        <?php $__currentLoopData = $clubes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clube): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($clube->id); ?>"><?php echo e($clube->nome); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <label for="exampleInputEmail1" class="form-label">Porcentagem</label>
                                    <input type="number" name="porcentagem" class="form-control" id="porcentagem" autocomplete="off"><br>
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
                            <th scope="col-6">Porcentagem</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $agenteClubes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lista): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($lista->id); ?></td>
                                <td><?php echo e($lista->agente); ?></td>
                                <td><?php echo e($lista->clube); ?></td>
                                <td><?php echo e($lista->porcentagem); ?>%</td>
                                <td>
                                    <a type="button" id="btEditar" class="btn btn-primary" href="<?php echo e(route('fechamento.vinculacao.edit',$lista->id)); ?>">Editar</a>
                                    <a type="button" class="btn btn-primary" onclick="return confirm('Deseja realmente deletar este usuário?')" href="<?php echo e(route('fechamento.vinculacao.destroy',$lista->id)); ?>" >Deletar</a>
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

<?php echo $__env->make('template.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\odd_fichas\resources\views/vinculacao.blade.php ENDPATH**/ ?>