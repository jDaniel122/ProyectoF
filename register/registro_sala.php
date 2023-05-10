<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>registro estudiante</title>
</head>
<body>
    <div class="container">
        <form action="registro_sala.php" method="post">
        <input type="text" placeholder="0" id="id_estudiante" name="estudiante" class="ingreso">
        
        <input type="button" onclick="del()" value="<--" class="eliminar">

        <div id="fila">
            <input type="button" class="tecla" onclick="display('1')" id="1" value="1">
            <input type="button" class="tecla" onclick="display('2')" id="2" value="2">
            <input type="button" class="tecla" onclick="display('3')" id="3" value="3">
          
        </div>

        <div id="fila">
            <input type="button" class="tecla" onclick="display('4')" id="4" value="4">
            <input type="button" class="tecla" onclick="display('5')" id="5" value="5">
            <input type="button" class="tecla" onclick="display('6')" id="6" value="6">
        </div>

        <div id="fila">
        <input type="button" class="tecla" onclick="display('7')" id="7" value="7">
        <input type="button" class="tecla" onclick="display('8')" id="8" value="8">
        <input type="button" class="tecla" onclick="display('9')" id="9" value="9">
        </div>

        <div id="fila">
        <input type="button" class="tecla cero" onclick="display('0')" id="0" value="0">
        <input type="submit" value="registrar" name="registrar_registro">
        </form>
        </div>
    </div>
        <script src="script.js"></script>
</body>
</html>


<?php 
if(isset($_POST['registrar_registro'])){
    $numero = $_POST["estudiante"];
    echo "numero registrado " . $numero;
}

?>

