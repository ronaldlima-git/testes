


<?php $__env->startSection('content'); ?>
    <h2>Atualizar um Veículo</h2>
    
    <form class="form" id="update-form" method="POST" action="<?php echo e(route('veiculos.update', $veiculo->id)); ?>">
        
        <?php echo csrf_field(); ?>
        
        <?php echo method_field('PUT'); ?>
        <label for="Nome">Nome:</label>
        <input type="text" name="name" id="name" required value="<?php echo e($veiculo->name); ?>">
        <label for="Nome">Ano:</label>
        <input type="number" name="year" id="year" required value="<?php echo e($veiculo->year); ?>">
        <label for="Nome">Cor:</label>
        <input type="text" name="color" id="color" required value="<?php echo e($veiculo->color); ?>">
    </form>
    
    <button form="update-form" type="submit">Salvar</button>
    <button form="delete-form" type="submit" value="Excluir" >Excluir</button>
    
    <form method="POST" class="form" id="delete-form" action="<?php echo e(route('veiculos.destroy', $veiculo->id)); ?>">
        <?php echo csrf_field(); ?>
        
        <?php echo method_field('DELETE'); ?>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\06943040936\Documents\Ambiente_Teste\Projetos\projeto_crud\resources\views/edit.blade.php ENDPATH**/ ?>