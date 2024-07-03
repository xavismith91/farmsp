<?php

//declaramos las variables 
    $nombrec= $_POST['nombrec'];
    $apellidos = $_POST['apellidos'];
    $usuario = $_POST['usuario'];
    $contrasena =$_POST['contrasena'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $ciudad = $_POST['ciudad'];
    $municipio = $_POST['municipio'];
    $cp = $_POST['cp'];
    

    //con esta asignacion se encriptará la contraseña 

    // $hash = password_hash($contrasena, PASSWORD_BCRYPT);


//declaramos variables para la conexion a la base de datos

$servername = "localhost"; 
$database = "pharmacy";
$username = "root";
$password = "";


// creamos  el query para conexion de la base de datos 

$conn = mysqli_connect($servername, $username, $password, $database);

// revisamos la conexión

if(!$conn)
{
    die("Falló la conexion: ". mysqli_connect_error()); 
}else
echo "Conexion exitosa";


//hacemos el query para insertar registros 

$sql = "INSERT INTO userspharmacy (nombrec,apellidos,usuario,contrasena,telefono,direccion,ciudad,municipio,cp) VALUES ('$nombrec','$apellidos','$usuario','$contrasena','$telefono','$direccion','$ciudad','$municipio','$cp')";

if (mysqli_query($conn,$sql)){
     
    echo'<script type="text/javascript">
        alert("Usuario creado con éxito, Inicia sesión");
        window.location.href="login.html";
        </script>';
}
else
{
   echo'<script type="text/javascript">
        alert("No se pudo completar el registro, revisa tu información");
        window.location.href="index.html";
        </script>';
}
mysqli_close($conn);
?>
