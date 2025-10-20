<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title><?php echo e(env('APP_NAME')); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body>
    <div class="container">
        <header>
            <h1>Laravel - CRUD</h1>
        </header>
        <nav>
            <ul>
                
                <li><a href="/veiculos">Início</a></li>
                <li><a href="/veiculos/create">Cadastro de Veículos</a></li>
            </ul>
        </nav>
        <div class="content">
            
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <footer>
            <div>
                <p>Aprendendo Laravel Framework</p>
                <p><a href="http://www.laravel.com.br" target="_blank">Laravel Site</a></p>
            </div>
        </footer>
    </div>
</body>
</html><?php /**PATH C:\Users\06943040936\Documents\Ambiente_Teste\Projetos\projeto_crud\resources\views/base.blade.php ENDPATH**/ ?>