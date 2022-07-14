<?php

$submeteuCpf = isset($_POST['verificar']);

if ($submeteuCpf) {
    $numeroCpf = $_POST['verificar'];
    $arrayCpf = str_split($numeroCpf);
    $cpfValido = false;

    if (sizeof($arrayCpf) == 9 || sizeof($arrayCpf) == 10 || sizeof($arrayCpf) == 11) {

        $soma = 0;
        for ($n = 1; $n <= 9; $n++) {
            $multiplicador = $arrayCpf[$n - 1] * $n;
            $soma += $multiplicador;
        }
        // echo $soma . '<br>';
        $primeiroDv = $soma % 11;
        // echo $primeiroDv . '<br>';

        $arrayCpf[9] = $primeiroDv;
        var_dump($arrayCpf);
        $soma2 = 0;
        for ($num = 0; $num < 10; $num++) {
            $multiplicador2 = $arrayCpf[$num] * $num;
            $soma2 += $multiplicador2;
        }
        // echo $soma2 . '<br>';
        $segundoDv = $soma2 % 11;

        $cpfCompleto = substr($numeroCpf, 0, 9) . $primeiroDv . $segundoDv;
        echo $cpfCompleto;
    }
}






    /*
    if ($submeteuCpf == 9 || $submeteuCpf == 10 || $submeteuCpf == 11) {
        for ($n = 1; $n <= 9; $n++) {
            $multiplicador = $arrayCpf[$n - 1] * $n;
            $soma += $multiplicador;
            echo '<br>' . $arrayCpf[$n - 1] . " * $n = " . $multiplicador;
        }
        echo '<br>' . $soma;
        $primeiroDv = $soma % 11;
        //$arrayCpf[9] = $primeiroDv;

        echo '<br>' . $primeiroDv;

            for ($num = 0; $num < 10; $num++) {
                $multiplicador2 = $arrayCpf[$num] * $num;
                $soma2 += $multiplicador2;
                echo '<br>' . $arrayCpf[$num] . " * $num = " . $multiplicador2;
            }
            echo '<br>' . $soma2;
            echo '<br>' . $soma2 % 11;


    }

}
*/
//  if ($soma % 11 == 1) {
//    $cpfValido = true;
//}

//$cpfCompleto = preg_replace('^([0-9]{3})\.([0-9]{3})\.([0-9]{3})\-([0-9]{2})$');


