<?php $__env->startSection('title', 'Odds Fichas'); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('template._includes.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="app-content">
        <div class="app-title">
            <div class="div">
                <h1><i class="fa fa-laptop"></i> Relatorio de Fechamento</h1>
            </div>
        </div>
        <div class="tile mb-1">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-10">
                        <h2 class="mb-3 line-head" id="buttons">Dados do Relatorio</h2>
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
                            <th scope="col-1">Agente</th>
                            <th scope="col-6">Clube</th>
                            <th scope="col-6">Taxa Total</th>
                            <th scope="col-6">Ganho</th>
                            <th scope="col-6">Resultado</th>
                            <th scope="col-6">Rake Total</th>
                            <th scope="col-6">Rack Back</th>
                            <th scope="col-6">Comissão</th>
                            <th scope="col-6">Final</th>
                            <th scope="col-6">Data</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $fechamentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fechamento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($fechamento->id); ?></td>
                                <td><?php echo e($fechamento->agente); ?></td>
                                <td><?php echo e($fechamento->clube); ?></td>
                                <td><?php echo e($fechamento->taxaTotal); ?></td>
                                <td><?php echo e($fechamento->totalGanho); ?></td>
                                <td><?php echo e($fechamento->resultado); ?></td>
                                <td><?php echo e($fechamento->rakeTotal); ?></td>
                                <td><?php echo e($fechamento->rackBack); ?></td>
                                <td><?php echo e($fechamento->comissao); ?></td>
                                <td><?php echo e($fechamento->final); ?></td>
                                <td><?php echo e($fechamento->data); ?></td>
                                <td>
                                    <a type="button" id="btEditar" class="btn btn-primary" >Editar</a>
                                    <a type="button" class="btn btn-primary" onclick="return confirm('Deseja realmente deletar este usuário?')" >Deletar</a>
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

<?php echo $__env->make('template.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\odd_fichas\resources\views/relatoriofechamento.blade.php ENDPATH**/ ?>