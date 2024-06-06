<?php

// Función para inicializar el estado del parking si no existe
function inicializarParking() {
    if (!isset($_SESSION['parking'])) {
        $_SESSION['parking'] = [
            'pequenas' => array_fill(0, 10, 0), // 10 plazas pequeñas
            'grandes' => array_fill(0, 14, 0)  // 14 plazas grandes
        ];
    }
}


// Función para aparcar un coche
function aparcarCoche($tipo) {
    inicializarParking();

    if ($tipo == 'pequeno') {
        $plazas = &$_SESSION['parking']['pequenas'];
    } elseif ($tipo == 'grande') {
        $plazas = &$_SESSION['parking']['grandes'];
    } else {
        echo "Tipo de coche inválido.";
        return;
    }

    $index = array_search(0, $plazas); // Buscar la primera plaza libre

    if ($index !== false) {
        $plazas[$index] = 1; // Aparcar en la primera plaza libre
        echo "Coche aparcado en la plaza $index.";
    } else {
        echo "El parking está completo.";
    }
}



// Función para retirar un coche
function retirarCoche($tipo, $numero) {
    inicializarParking();

    if (($tipo == 'pequeno' && $numero < 10) || ($tipo == 'grande' && $numero < 14)) {
        $plazas = &$_SESSION['parking'][$tipo . 's'];

        if ($plazas[$numero] == 1) {
            $plazas[$numero] = 0; // Marcar la plaza como libre
            echo "Coche retirado de la plaza $numero.";
        } else {
            echo "La plaza $numero no está ocupada.";
        }
    } else {
        echo "Número de plaza inválido.";
    }
}

// Función para visualizar el estado del parking
function visualizarParking() {
    inicializarParking();

    echo "Estado del parking:<br>";
    echo "Plazas libre = 0 <br>";
    echo "Plazas ocupadas = 1 <br>";
    echo "Plazas pequeñas: " . implode(', ', $_SESSION['parking']['pequenas']) . "<br>";
    echo "Plazas grandes: " . implode(', ', $_SESSION['parking']['grandes']) . "<br>";
}





?>