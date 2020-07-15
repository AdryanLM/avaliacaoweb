<?php
if (isset($_GET['codigo']) && isset($_GET['valor'])) { 
    $codigo = $_GET['codigo'];
    $valor = $_GET['valor'];
    if (is_numeric($codigo) && is_numeric($valor)) { 
        if ($codigo >= 1 && $codigo <= 4) { 
            echo "preço etiqueta: R$" . $valor ;
            echo "<br>";
            echo "novo preço: R$";
            switch ($codigo) {
                case 1:
                    echo  $valor * 0.85;
                    break;
                case 2:
                    echo  $valor * 0.90;
                    break;
                case 3:
                    echo  $valor;
                    break;
                case 4:
                    echo  $valor * 1.10;
                    break;
            }
        } else {
            echo "codigo invalido";
        }
    }
}
