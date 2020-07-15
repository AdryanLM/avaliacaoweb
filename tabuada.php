<?php
if (isset($_GET['numero'])) { 
    $tabuada = $_GET['numero'];
    if (is_numeric($tabuada)) { 
        echo "tabuada do " . $tabuada;
        echo "<br><br>";
        for ($i = 1; $i <= 10; $i++) {
            echo $tabuada . "*" . $i . "=" . $tabuada * $i;
            echo "<br>";
        }
    }
}
