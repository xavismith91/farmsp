<?php

    $nombre =$_POST["nombre"];
    $correo = $_POST["correo"]; // correo que ingresan en el formulario
    $telefono = $_POST['telefono']; // Telefono de cliente o prospecto
    $mensaje = $_POST["message"];
    $correo2 = 'sistemas@ce2000.mx';// correo en donde van a llegar los datos del formulario 
    
    // $tiposervicio = $_POST['servicio'];
    $remitente= "Pharmacy 2024";
    // $asunto=$_POST["subject"];
    $cuerpo="
    <html> 
    <meta charset='UTF-8'>
    <body>

    <h1>Estimado/a Colaborador</h1>
    <h2>Nos complace informarle que ha  recibido la siguiente solicitud que a continuación, encontrará los detalles.</h2>
      <h3> Cliente: $nombre</h3>
      <h3> Correo: $correo </h3> 
      <h3> Teléfono de Contacto: $telefono</h3>
      <br>
      <br>
      <p> $mensaje <p>
      <p> $mensaje <p>
      <br>
      <br>
      <h3>
      Por favor, confirme el pedido respondiendo a los datos proporcionados.
      </h3>
      
    </body> 
    </html> 
    ";
    $sheader="From:".$remitente."\n";
    $sheader=$sheader."X-Mailer:PHP/".phpversion()."\n";
    $sheader=$sheader."Mime-Version: 1.0\n";
    $sheader=$sheader."Content-Type: text/html; charset=utf-8\n";
   
    // mail($correo2,$asunto,$cuerpo,$sheader,$mensaje); 


    //   header("Location: ../index.html");
      


    if (mail($correo2,$asunto,$cuerpo,$sheader,$mensaje)) {
      echo '<script>alert("Su solicitud ha sido enviada correctamente, espere la su confirmación.");</script>';
    }else {
      echo '<script>alert("Verifique su información e intente de nuevo");</script>';
    }

    echo '<script>window.location.href = "../index.html";</script>';
    
?>
 
