<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
       // $num = false;
       // var_dump($num); O var dump serve pra despejar o conteúdo da variável pra que se descubra o seu tipo primitivo.

       //$num = 3e2; Esse tipo de representação significa 3*10 elevado ao quadrado. Apesar do resultado 300 ser um número inteiro, o php considera um float. Sendo possível realizar a coerção como no exemplo abaixo.
       
       $num = (int) 3e2;
       var_dump($num);

    ?>
</body>
</html>