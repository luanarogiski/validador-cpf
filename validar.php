<?php

$submeteuCpf = isset($_POST['verificar']);

if ($submeteuCpf) {
    $numeroCPF = $_POST['verificar'];
    $arrayCpf = str_split($numeroCPF);
    $cpfValido = false;

    if ($submeteuCpf == $submeteuCpf) {
        for ($n = 1; $n <= 9; $n++) {
            $multiplicador = $arrayCpf[$n - 1] * $n;
            $soma += $multiplicador;
            echo '<br>' . $arrayCpf[$n - 1] . " * $n = " . $multiplicador;
        }
            echo '<br>' . $soma;
            $primeiroDv = $soma % 11;
            //$arrayCpf[9] = $primeiroDv;

            echo '<br>' . $primeiroDv;


    if ($primeiroDv == $primeiroDv) {
        for ($num = 0; $num < 10; $num++) {
            $multiplicador2 = $arrayCpf[$num] * $num;
            $soma2 += $multiplicador2;
            echo '<br>' . $arrayCpf[$num] . " * $num = " . $multiplicador2;
        }
        echo '<br>' . $soma2;
        echo '<br>' . $soma2 % 11;
    }

    }

}

  //  if ($soma % 11 == 1) {
    //    $cpfValido = true;
    //}




