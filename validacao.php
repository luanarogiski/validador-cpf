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
                    $primeiroDv = $soma % 11;


                    $arrayCpf[9] = $primeiroDv;

                    $soma2 = 0;
                    for ($num = 0; $num < 10; $num++) {
                        $multiplicador2 = $arrayCpf[$num] * $num;
                        $soma2 += $multiplicador2;
                    }
                    $segundoDv = $soma2 % 11;


                    $cpfCompleto = substr($numeroCpf, 0, 9) . $primeiroDv . $segundoDv;
                    //echo formatarCpf($cpfCompleto);
                    return $cpfValido = true;
                }
            }


        function formatarCpf($cpfCompleto)
        {
            $cpfCompleto = preg_replace("/\D/", '', $cpfCompleto);

            //$cpfCompleto = substr($cpfCompleto, 0, 11);

            if (strlen($cpfCompleto) === 11) {
                return preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", "\$1.\$2.\$3-\$4", $cpfCompleto);
            }
            return preg_replace("/(\d{3})(\d{3})/", "\$1.\$2.", $cpfCompleto);
        }







