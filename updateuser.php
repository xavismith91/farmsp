<?php
     if(!empty($_POST["btn_enviarinfo"])) {
      if(!empty($_POST["nombrec"]) and !empty($_POST["apellidos"]) and !empty($_POST["usuario"]) and !empty($_POST["contrasena"]) and !empty($_POST["telefono"]) and !empty($_POST["direccion"]) and !empty($_POST["ciudad"]) and !empty($_POST["municipio"]) and !empty($_POST["cp"])) {
        $id_user=$_POST["id"];            
        $nombrec=$_POST["nombrec"];
        $apellidos=$_POST["apellidos"];
        $usuario=$_POST["usuario"];
        $contrasena=$_POST["contrasena"];
        $telefono=$_POST["telefono"];
        $direccion=$_POST["direccion"];
        $ciudad=$_POST["ciudad"];
        $municipio=$_POST["municipio"];
        $cp=$_POST["cp"];
        $sql=$conexion->query(" update userspharmacy set nombrec = '$nombrec', apellidos='$apellidos', usuario='$usuario', contrasena='$contrasena', telefono='$telefono', direccion='$direccion', ciudad='$ciudad', municipio='$municipio', cp='$cp' where id_user = $id_user ");        
        if ($sql==1) {
            header("location:viewusers.php");
        }else {
            echo "<div class='alert alert-danger'>Error, revisa la información</div>";
        }

       } else {
        echo "<div class='alert alert-warning'>Campo vacio</div>";
    }
       
      }
 
 ?>