<?php $__env->startSection('title', 'Odds Fichas'); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('template._includes.style2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="app-content">
        <div class="app-title">
            <div class="div">
                <h1><i class="fa fa-laptop"></i> Fechamento</h1>
            </div>
        </div>
        <div class="tile mb-1">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-10">
                            <h2 class="mb-3 line-head" id="buttons">Dados do Fechamento</h2>
                            <form  action="<?php echo e(route('fechamento.getclubes')); ?>" method="post" style="margin-bottom: 10px;">
                                <div class="row">
                                   <div class="col-6">
                                       <div class="row">
                                           <div class="col-9">
                                               <?php echo csrf_field(); ?>
                                               <label for="exampleFormControlSelect1">Escolha o Agente</label>
                                               <select  class="form-control" name="agente_id" value="<?php echo e($agente->id??''); ?>" id="agente_id">
                                                   <option value="<?php echo e($agente->id??''); ?>" disabled><?php echo e($agente->nome??'Selecione'); ?></option>
                                                   <?php $__currentLoopData = $agentes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                       <option value="<?php echo e($agente->id); ?>"><?php echo e($agente->nome); ?></option>
                                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                               </select>
                                           </div>
                                           <div class="col-2">
                                               <button style="display: block; margin-top: 35px; margin-left: -10%; font-size: 10px;" type="submit" id="btBuscaClube" class="mb-2 btn btn-lg btn-warning"  >Buscar clube</button>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-6" id="divClube" >
                                        <div class="row">
                                            <div class="col-10">
                                                <label for="exampleFormControlSelect1">Escolha o Clube</label>
                                                <select  class="form-control" name="clube_id" value="<?php echo e($clube->id??''); ?>" id="clube_id">
                                                    <option >Selecione</option>
                                                    <?php $__currentLoopData = $clubes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clube): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($clube->id); ?>"><?php echo e($clube->nome.' '.$clube->porcentagem.'%'); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                   </div>
                                </div>
                            </form>
                            <?php echo csrf_field(); ?>
                        </div>
                        <div>
                            <div>
                                <div style="margin-top: 100px;">
                                    <button style="display: block; margin-top: 10%; margin-left: -10%; font-size: 10px;" class="mb-2 btn btn-lg btn-warning" onclick="mostarFechamento('divFechamento')">iniciar</button>
                                </div>
                            </div>

                            <div id="divFechamento" style="display: none; margin-top:-200px;">
                                    <form action="" method="post">
                                        <div class="row">
                                        <div class="col-4">
                                            <div style="flex-direction: row; margin-top: -20px;" id="div1">
                                                <table style="margin:0; margin-top: auto; width: max-content;"  class="border-estilo">
                                                    <tr>
                                                        <th style="background-color:#CF9E33;">PRINT-AGÊNCIA</th>
                                                        <th style="background-color:#CF9E33;">
                                                        <th style="background-color:#CF9E33;">
                                                    </tr>
                                                    <tr>
                                                        <td><span class="input-group-text">Taxa Total</span></td>
                                                        <td><input id="taxaTotal" name="taxaTotal" type="number"></td><th>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="input-group-text">Total de Ganhos</span></td>
                                                        <td><input id="totalGanho" name="totalGanho" type="number"><th>
                                                            <button type="button" class="btn btn-warning" onclick="calculaFechamento()">Inserir</button></th>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div id="div1">
                                                <table id="border-estilo">
                                                    <tr>
                                                        <th style="flex-direction:row; font-size: 30px; text-align: center;   border-radius: 8px; padding: 35px; background-color:#CF9E33;">
                                                            <input disabled style="width: auto; font-size: 20px; text-align: center; border: none; color: white; background-color: transparent;" id="labelNomeClube" type="text"></input>
                                                        </th>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-1">
                                            <div id="div1">
                                                <table id="border-estilo">
                                                    <tr>
                                                        <th  style="flex-direction:row; font-size: 40px; text-align: center; border-radius: 6px; padding: 30px; background-color:#CF9E33;">
                                                            <input disabled style="width: 100%; text-align: center; border: none; color: white; background-color: transparent;" id="porcentagem" name="porcentagem"  value="50%"></input>
                                                        </th>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        </div><br>
                                    </form>
                                <h2 class="mb-3 line-head" id="buttons"></h2>
                                <div class="card" style=" width:auto; height: auto; padding:225px; margin:auto; margin-left: auto; ">
                                    <div class="row" id="divFechamento">
                                        <div class="col-6" >
                                            <div class="card1" style =" display:block; width: auto;  margin-right:100px;  margin-top:-30%; margin-left: -200px;  padding: 3px;"  alt="">
                                                <form class="upload-imagem">
                                                    <h6>Insira uma nova imagem</h6> <img src="https://img.icons8.com/cute-clipart/40/000000/image-file.png"/>
                                                    <button class="btn btn-warning"> <input type="file" class="upload" required></button>
                                                </form>
                                                <input disabled id="titulo_agencia" class="list-group-item active" style="width: 100%;font-size: 20px; text-align: center; background-color: #004e47"/>
                                                <img class="imagem" src="http://via.placeholder.com/350x150" alt="Sua imagem" width="100%" height="442" border="solid;">
                                                <div>
                                                    <button class="btnAtualiza btn btn-lg btn-warning">Atualiza imagem</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="card1" style =" display:block;  margin-right:20px;  margin-top:-30%; margin-left: -100px;  padding: 0px;" >
                                                <form action="<?php echo e(route('fechamento.fechamento.create')); ?>" method="post">
                                                    <?php echo csrf_field(); ?>
                                                    <div>
                                                        <button type="submit" class="btn" style="float: right;">Salvar</button>
                                                    </div>

                                                    <input type="text" id="agente" name="agente">
                                                    <input type="text" id="clube" name="clube">
                                                    <input type="text" id="data" name="data">
                                                    <input type="text" id="ganho" name="totalGanho">
                                                    <input type="text" id="total" name="taxaTotal">

                                                    <li class="list-group-item active" style="width: 100%;font-size: 20px; text-align: center; background-color: #004e47">FECHAMENTO SEMANAL</li>
                                                    <img style=" flex-direction: row; float: right; width:100%; padding: 10px; margin-top: auto; margin-right: auto;";
                                                         src="images/cortada.jpeg" alt="">

                                                    <div class="div-table" style="width: auto;  margin-top: auto; margin-left: auto; margin-right: auto;">
                                                        <table style=" font-size: 20px; width: 10px; margin-right: auto; width: auto" >
                                                            <tr>
                                                                <td><span  class="input-group-text" style="font-size: 18px;">Resultado</span></td>
                                                                <td><input  id="resultado" name="resultado" type="text" ></td><th></th>
                                                            </tr>
                                                        </table><br>
                                                        <table style="margin:0; width: max-content; font-size: 20px; margin-top: -18px; "  class="border-estilo">
                                                            <tr>
                                                                <td><span class="input-group-text" style="font-size: 18px;">Rake Total</span></td>
                                                                <td><input id="rakeTotal" name="rakeTotal" type="text"></td><th></th>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="input-group-text" style="font-size: 18px;">RackBack</span></td>
                                                                <td><input id="rakeBack" name="rackBack" type="text"></td><th></th>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="input-group-text" style="font-size: 18px; color: white; background-color: black;">Comissão</span></td>
                                                                <td><input id="comissao" name="comissao" type="text"></td><th></th>
                                                            </tr>
                                                        </table><br>
                                                        <table style="margin:0; width: max-content; font-size: 18px;"  class="border-estilo">
                                                            <tr>
                                                                <td><span class="input-group-text" style="font-size: 18px; background-color: green; color: white">Final</span></td>
                                                                <td><input id="final" name="final" type="text"></td><th></th>
                                                            </tr>
                                                        </table>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><br>
                    </div>
                </div>
        </div>
        <?php echo $__env->make('template._includes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\odd_fichas\resources\views/fechamento.blade.php ENDPATH**/ ?>