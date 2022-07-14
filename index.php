<?php
    require_once 'validacao.php';
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
    <div class="cpf">
        <?php
        if ($submeteuCpf) {
            if ($cpfValido) {
                echo formatarCpf($cpfCompleto);
            } else {
                echo formatarCpf($numeroCpf);
            }
        }
        ?>
    </div>
    <div class="submeterCpf">
    <?php
    if ($submeteuCpf) {
            if ($cpfValido) {
                echo "<span style=\"color:#003768;\">CPF Válido</span>";
            } else {
                echo "<span style=\"color:rgb(226, 27, 27);\">CPF Inválido</span>";
            }
    }
    ?>
    </div>

</body>
</html>