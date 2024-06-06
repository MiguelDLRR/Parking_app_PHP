


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //Verificar si se ha enviado el formulario de Aparcar Coche
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if( isset($_POST["tipo"]) && isset($_POST["numero"])) {
         
             session_start();
             $tipo = $_POST["tipo"];
             $numero = $_POST["numero"];
             include("operaciones.php");
             retirarCoche($tipo, $numero);
             echo "<br>";
             echo"<a href='index.php'>Volver al inicio</a>";
             
             
             
             
         }else{
             
             
             echo "Debes completar todos los campos";
             header("refresh:2;url=index.php");
         
         }
 
     } 
   
    ?>
    
</body>
</html>