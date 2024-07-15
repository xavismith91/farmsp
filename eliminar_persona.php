<?php

include("conexion.php");


 if (!empty($_GET["id"]))   {
    $id=$_GET["id"];
    $sql=$conexion->query("delete from userspharmacy where id_user = $id");

    if ($sql==1) {
        echo'<script type="text/javascript">
        alert("Usuario eliminado correctamente");
        window.location.href="viewusers.php";
        </script>';
    }else{
        echo'<script type="text/javascript">
        alert("Error al eliminar el registro");
        window.location.href="index.html";
        </script>';
    }

}



?>