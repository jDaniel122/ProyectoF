<?php
    include("../conexion/conexion.php");
    $consultar_est =$conexion->query("SELECT * FROM estudiante");
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consultas estudiantes</title>
</head>
<body>
     <form action="conslt_est.php" method="post">
        <label for="">numero documento a buscar</label>
        <input type="number" name="id_estudiante">
        <input type="submit" value="buscar" name="buscar_est" >
        <input type="submit" value="busqueda general" name="busqueda_genrl_est">
        
     </form>

            <?php 

            if(!empty($_POST['buscar_est'])){ //Validamos que los input dentro del formulario administrado por el submit tenga
                if(empty($_POST['id_estudiante'])){
                    echo "el campo esta vacio";                       
                }else{
                    if(isset($_POST['buscar_est'])){
                        $id_est = $_POST['id_estudiante'];
                        $valid_sing = $conexion->query("SELECT * FROM estudiante WHERE id_estudiante = '$id_est'");
                        if(mysqli_num_rows($valid_sing) == 0){
                        echo "Los datos ingresados NO coinciden";}
                        else{?>
                            <table border='1'>
                                <tr> <!--esta es una columna --> 
                                    <td>documento de identificacion</td> <!--esto una fila --> 
                                    <td>nombre completo</td>
                                    <td>nombre de la facultad</td>
                                    <td>numero celular</td>
                                    <td>correo institucional</td>        
                                </tr>
                                <?php
                                while($row2 = mysqli_fetch_array($valid_sing)){
                                ?>
                                <tr>
                                    <td><?php echo $row2['id_estudiante'];?></td>
                                    <td><?php echo $row2['nombre_estudiante'];?></td>
                                    <td><?php echo $row2['nombre_facultad'];?></td>
                                    <td><?php echo $row2['numero'];?></td>
                                    <td><?php echo $row2['correo'];?></td>
                                </tr>
                                <?php }?>
                            </table>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        <?php
    
    
        if(isset($_POST['busqueda_genrl_est'])){?>
        <table border='1'>
            <tr>
                <td>documento de identificacion</td>
                <td>nombre completo</td>
                <td>nombre de la facultad</td>
                <td>numero celular</td>
                <td>correo institucional</td>        
            </tr>    
            <?php
            while($row = mysqli_fetch_array($consultar_est)){?><!--//este metodo me valida y retorna en modo de filas lo que se pido en la variable($consultar_est)-->
            <tr>
                <td><?php echo $row['id_estudiante'];?></td>
                <td><?php echo $row['nombre_estudiante'];?></td>
                <td><?php echo $row['nombre_facultad'];?></td>
                <td><?php echo $row['numero'];?></td>
                <td><?php echo $row['correo'];?></td>
            </tr>
            <?php }?>
        </table>
        <?php }?>
        <a href="../modulos/estudiantes.php">volver</a>
    </body>
    </html>
