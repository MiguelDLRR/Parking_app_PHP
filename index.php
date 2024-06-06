
    <?php
   session_start();
   include("formulario.html");
  
  
    //Verificar si se ha enviado el formulario de Aparcar Coche
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["tipo"])) {
        $tipo = $_POST["tipo"];
        // Redirigir a aparcar.php con el tipo de coche
        header("Location: aparcar.php?tipo=$tipo");
        exit();
    }if(empty($_POST["tipo"])){

        $_SESSION["empty_tipo"] = "<p style ='color:red'>Debes seleccionar el tamaño del vehículo</p>";
    }

    // Verificar si se ha enviado el formulario de Retirar Coche
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["tipo"]) && isset($_POST["numero"]) && !empty($_POST["numero"])) {
        $tipo = $_POST["tipo"];
        $numero = $_POST["numero"];
        // Redirigir a retirar_coche.php con el tipo de plaza y número de plaza
        header("Location: retirar_coche.php");
        exit();
    }if(empty($_POST["tipo"]) || empty($_POST["numero"])){

        $_SESSION["empty_tipo_numero"] = "<p style ='color:red'>Debes seleccionar el tamaño del vehículo e introducir el número de la plaza</p>";
    }
    ?>
   