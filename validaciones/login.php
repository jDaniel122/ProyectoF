<?php
error_reporting(0);
if(!empty($_POST["login"])){ //Me indica que si no esta vacio todo lo que se envie en la variable va a ejecutar toda la accion
     if(empty($_POST["user"]) && empty($_POST["password"])){ //esta linea me valua si los campos estan vacios
        echo "los campos estan vacios";
     }else{
       $user = $_POST["user"];
       $password = $_POST["passwords"];
      $validate =$conexion->query("select * from user where user='$user' and passwords='$password'"); //nos ahorramos una linea de codigo 
      /*$result = mysqli_query($conexion, $validate);*/ // me conecta la conexion de bd, realiza la consulta
      /*$filas = mysqli_num_rows($validate); // esta linea me obtiene el numero de filas y valida si el campo de la linea 12 es valido */
      $filas = mysqli_fetch_array($validate); //utilizamos este metodo de verificacion si en el login tenemos mas de un ROL
      if($filas['id_cargo']== 1 ){ //administrador
         header("location:../inicio/modulos_admin.php");
      }else if($filas['id_cargo']== 2 ){ //empleado
         header("location:../inicio/modulos_emp.php");
         }
      else{
         echo 'los campos ingresados estan incorrectos';
      }      
  // OTRA FORMA DE HACER LA CONSULTA 
      /*if($date = $validate->fetch_object()){ // en esta linea me valua si los datos ingresados son correctos 
         header("location:../inicio/modulos.php");
      }else{
         echo"los campos ingresados estan incorrectos";
      }*/
      
   mysqli_free_result($validate); //libera los resultados
   mysqli_close($conexion); 
     }   
}


?>