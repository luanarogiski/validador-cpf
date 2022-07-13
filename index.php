<?php
    require_once 'teste1.php';
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valida CPF</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Validador de CPF</h1>
    <form id="form" method="post">
        <input type="text" id="verificar" name="verificar" placeholder="Digite o CPF para Verificação"></input>
        <input type="submit" id="sub" value="Pesquisar">
    </form>
    <?php
  /*  if ($submeteuCpf) {
            if ($cpfValido) {
                echo "CPF válido";
            } else {
                echo "CPF inválido";
            }
        }*/
    ?>


</body>
</html>