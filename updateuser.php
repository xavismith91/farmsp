<?php

    //incluimos las variables de conexión

    include "conexion.php";


    //delcalaracion de variables

    $id = $_POST["id"];
    $nombrec = $_POST["nombrec"];
    $apellidos = $_POST["apellidos"];
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"]; 
    $telefono = $_POST["telefono"];
    $direccion = $_POST["direccion"];
    $ciudad = $_POST["ciudad"];
    $municipio = $_POST["municipio"];
    $cp = $_POST["cp"];


    



<<<<<<< HEAD
        //declaracion de variables 
        $id=$_POST['id'];      
        $nombrec=$_POST["nombrec"];
        $apellidos=$_POST["apellidos"];
        $usuario=$_POST["usuario"];
        $contrasena=$_POST["contrasena"];
        $telefono=$_POST["telefono"];
        $direccion=$_POST["direccion"];
        $ciudad=$_POST["ciudad"];
        $municipio=$_POST["municipio"];
        $cp=$_POST["cp"];


//declaramos las variables para la conexión a la base de datos 


        $servername = "localhost"; 
        $database = "pharmacy";
        $username = "root";
        $password = "";

// creamos  el query para conexion de la base de datos 

$conn = mysqli_connect($servername, $username, $password, $database);


if(!$conn)
{
    die("Falló la conexion: ". mysqli_connect_error()); 
}else
echo "Conexion exitosa";


//hacemos el query para insertar registros 

$sql = "update userspharmacy set nombrec = '$nombrec', apellidos = '$apellidos', usuario = '$usuario', contrasena = '$contrasena', telefono = '$telefono', direccion = '$direccion', ciudad = '$ciudad', municipio = '$municipio', cp = '$cp' where id_user = '$id' ";

if (mysqli_query($conn,$sql)){
     
    header("location:viewusers.php");
}
else
{
  echo'<script type="text/javascript">
       alert("No se pudo completar el registro");
       window.location.href="updateusers.php";
       </script>';
}
mysqli_close($conn);
  
 
=======


>>>>>>> a1bd693b59de19fed294fa4d0e79fde581eb31d2
 ?>