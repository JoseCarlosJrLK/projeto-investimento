<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Login | DatInvest</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/stylesheet.css')); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fredoka+One">
</head>
<body>
    <div class="background"></div>
    <section id="conteudo-view" class="login">

        <h1>DatInvest</h1>
        <h3>O nosso DATI do coração</h3>

        <?php echo Form::open(['route' =>'user.login','method' =>'post']); ?>

        <p>Acesse o Sistema</p>

        <label>
            <?php echo Form::text('username', null, ['class'=>'input', 'placeholder'=>'usuario'] ); ?>

        </label>

        <label>
            <?php echo Form::password('password',['placeholder'=>'senha'] ); ?>


        </label>

            <?php echo Form::submit('Entrar'); ?>


        <?php echo Form::close(); ?>


    </section>
</body>
</html>
<?php /**PATH /home/zejr/PhpstormProjects/projeto-investimento/resources/views/user/login.blade.php ENDPATH**/ ?>