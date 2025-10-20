


<?php $__env->startSection('content'); ?>
    <h2>Veículos Cadastrados</h2>
    
    <?php if(!isset($veiculos)): ?>
        <h3 style="color: red">Nenhum Registro Encontrado!</h3>
        
    <?php else: ?>
        <table class="data-table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Ano</th>
                    <th>Cor</th>
                    <th colspan="2">Opções</th>
                </tr>
            </thead>
            <tbody>
                
                <?php $__currentLoopData = $veiculos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($v->name); ?> </td>
                        <td> <?php echo e($v->year); ?> </td>
                        <td> <?php echo e($v->color); ?> </td>
                        
                        <td> <a href="<?php echo e(route('veiculos.show', $v->id)); ?>">Exibir</a> </td>
                        <td> <a href="<?php echo e(route('veiculos.edit', $v->id)); ?>">Editar</a> </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            <tfoot>
                <tr>
                    
                    <td colspan="5">Veículos Cadastrados: <?php echo e($veiculos->count()); ?></td>
                </tr>
            </tfoot>
        </table>
    <?php endif; ?>
    <?php if(isset($msg)): ?>
        <script>
            alert("<?php echo e($msg); ?>");
        </script>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\06943040936\Documents\Ambiente_Teste\Projetos\projeto_crud\resources\views/index.blade.php ENDPATH**/ ?>