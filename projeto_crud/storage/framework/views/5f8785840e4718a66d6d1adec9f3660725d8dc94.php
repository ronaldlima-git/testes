<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Acesso Negado</title><!-- Título da página -->
    <style>
        body { font-family: sans-serif; text-align: center; padding: 50px; }
        .container_error { border: 1px solid #ffdddd; background-color: #fff0f0; padding: 30px; border-radius: 8px; max-width: 600px; margin: 0 auto; }
        h1 { color: #d9534f; }
        p { color: #555; }
        .cod { font-size: 2em; color: #d9534f; margin-bottom: 20px; }
        a { color: #337ab7; text-decoration: none; }
    </style>
</head>
<body>
    <div class="container_error">
        <!-- <div class="cod">403</div> -->
        <h1>Erro/Falha</h1>
        
            <!-- Componente Elvis (  ?: ), onde se a parte da esquerda não for null, exibe apenas ela, se não, a segunda-->
        <p><?php echo e($exception->getMessage() . $msg ?: 'Não foi possível concluir a solicitação'); ?></p>
        <!-- Habilita um link para direcionar para a Index
        <p><a href="<?php echo e(url('/veiculos')); ?>">Voltar para a página inicial</a></p>
    </div>
</body>
</html><?php /**PATH C:\Users\06943040936\Documents\Ambiente_Teste\Projetos\projeto_crud\resources\views/errors/error.blade.php ENDPATH**/ ?>