<?php
include "conexion.php";
$id=$_GET['id'];
$sql= $conexion->query("select * from userspharmacy where id_user = $id ")
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmacia Mayito</title>
    <link rel="stylesheet" href="css/style.css">

    <link href="img/logosinfondo.png" rel="icon">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="logo">
                <a href="index.html"><img src="img/logosinfondo.png" alt="San Pablo Farmacia Logo"></a>
            </div>
            <div class="search">
                <input type="text-center" size="25" placeholder="¿Qué estás buscando?">
                <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                  </svg></button>
            </div>
           
            <div class="user-options">
                <a href="login.html"><svg xmlns="http://www.w3.org/2000/svg" width="140" height="40" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                  </svg></a>
                <a href="ofertas.html"><svg xmlns="http://www.w3.org/2000/svg" width="140" height="40" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l1.25 5h8.22l1.25-5zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                  </svg></a>
            </div>
        </div>
        <div class="menu">
          <nav>
              <ul>
                <li><a href="index.html">Inicio</a></li>
                <div class="nav-item dropdown">
                  <li><a  href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Categorías</a></li>
                  <div class="dropdown-menu bg-light m-0">
                      <a href="" class="dropdown-item">Medicamentos</a>
                      <a href="" class="dropdown-item">Equipo y Botiquín</a>
                      <a href="" class="dropdown-item">San Pablo Natural</a>
                      <a href="" class="dropdown-item">Vitaminas y Suplementos</a>
                      <a href="" class="dropdown-item">Dermocosméticos</a>
                      <a href="" class="dropdown-item">Cuidado Personal y Belleza</a>
                      <a href="" class="dropdown-item">Bebés</a>
                      <a href="" class="dropdown-item">Alimentos y bebidas</a>
                      <a href="" class="dropdown-item">Salud Sexual</a>
                  </div>
              </div>
                  <li><a href="ofertas.html">Ofertas</a></li>
                  <li><a href="contacto.html">Contacto</a></li>
              </ul>
          </nav>
      </div>
    </header>
    <br><br>
    <form method="post" role="form" name="form">     
      <center><div class="col-lg-7">
                <div class="bg-light rounded p-4 p-sm-5 " data-wow-delay="0.1s">
                  <h1>Editar Usuario</h1>
                  <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
                  <br>
                  <?php
                 include "conexion.php";
                  while($datos = $sql->fetch_object()){ ?>
                  <br><br>
                    <div class="row g-3">
                      <div class="col-md-6">
                        <label class="form-label">Nombres</label>
                        <input type="text" class="form-control"  name="nombrec" value="<?= $datos-> nombrec?>">
                      </div>
                      <div class="col-md-6">
                        <label class="form-label">Apellidos</label>
                        <input type="text" class="form-control"  name="apellidos" value="<?= $datos->apellidos ?>">
                      </div>
                      <div class="col-md-6">
                        <label class="form-label">Correo(Usuario)</label>
                        <input type="email" class="form-control" name="usuario" value="<?= $datos->usuario ?>">
                      </div>
                      <div class="col-md-6">
                        <label class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="contrasena" value="<?= $datos->contrasena ?>">
                      </div>
                      <div class="col-md-6">
                        <label class="form-label">Teléfono</label>
                        <input type="text" class="form-control"  name="telefono" value="<?= $datos->telefono ?>">
                      </div>                      
                      <div class="col-lg-6">
                        <label class="form-label">Dirección (Referencias y Calles )</label>
                        <input type="text" class="form-control" name="direccion" value="<?= $datos->direccion ?>">
                      </div>
                      <div class="col-md-6">
                        <label class="form-label">Ciudad</label>
                        <input type="text" class="form-control" name="ciudad" value="<?= $datos->ciudad ?>">
                      </div>
                      <div class="col-md-4">
                        <label class="form-label">Municipio</label>
                        <select id="municipio" class="form-select"  name="municipio" value="<?= $datos->municipio?>">
                          <option selected>Colonia...</option>
                          <option value="Sin Municipio">Sin Municipio</option>
                          <option value="Matamoros">Abejones</option>
                          <option value="Satelite">Acatlán de Pérez Figueroa</option>
                          <option value="Asunción Cacalotepec">Asunción de Cacalotepec</option>
                          <option value="Asunción Ocotlán">Asunción Ocotlán</option>
                          <option value="Ayotzindepec">Ayotzindepec</option>
                          <option value="Calihualá">Calihuala</option>
                          <option value="Candelaria Loxicha">Candelaria Loxicha</option>
                          <option value="Ciénega de Zimatlán"">Ciénega de Zimatlán</option>
                          <option value="Ciudad Iztepec">Ciudad Ixtepec</option>
                          <option value="Coatecas Atlas">Coatecas Atlas</option>
                          <option value="Colcoyán de las Flores">Colcoyán de las FLores</option>
                          <option value="La Compañia">La Compañia</option>
                          <option value="Concepción Buenavista">Concepción Buenavista</option>
                          <option value="Concepcion Pápalo">Concepción Pápalo</option>
                          <option value="Constancia del Rosario">Constancia del Rosario</option>
                          <option value="Cosolapa">Cosolapa</option>
                          <option value="Cosoltepec">Cosoltepec</option>
                          <option value="Cuilápam de Guerrero">Cuilápan de Guerrero</option>
                          <option value="Cuyamealco Villa de Zaragoza">Cuyamealco Villa de Zaragoza</option>
                          <option value="El Barrio de la Soledad">Barrio de la Soledad</option>
                          <option value="El Espinal">El Espinal</option>
                          <option value="Eloxochitlán de Flores Magón">Eloxochitlán de Flores Magón</option>
                          <option value="Fresnillo de Trujano">Fresnillo de Trujano</option>
                          <option value="Guadalupe de Ramirez">Guadalupe de Ramirez</option>
                         <option value="Guadalupe Etla">Guadalupe Etla</option>
                         <option value="Guelatao de Juárez">Guelatao de Juárez</option>
                         <option value="Guevea de Humboldt">Guevea de Humboldt</option>
                         <option value="Heroica Ciudad de Ejutla de Crespo">Heroica Ciudad de Ejutla de Crespo</option>
                         <option value="Heroica Ciudad de Huajuapan de León">Heroica Ciudad de Huajuapan de León</option>
                         <option value="Heroica Ciudad de Tlaxiaco">Heroica Ciudad de Tlaxiaco</option>
                         <option value="Heroica Villa Tezoatlán de Segura y Luna, Cuna de la Independencia de Oaxaca">Heroica Villa Tezoatlán de Segura y Luna, Cuna de la Independencia de Oaxaca</option>
                         <option value="Huautepec">Huautepec</option>
                         <option value="Huautla de Jiménez">Huautla de Jiménez</option>
                         <option value="Ixpantepec Nieves">Ixpantepec Nieves</option>
                         <option value="Ixtlán de Juárez">Ixtlán de Juárez</option>
                         <option value="Juchitán de Zaragoza">Juchitán de Zaragoza</option>
                         <option value="La Compañía">La Compañía</option>
                         <option value="La Reforma">La Reforma</option>
                         <option value="La Trinidad Vista Hermosa">La Trinidad Vista Hermosa</option>
                         <option value="La Pe">La Pe</option>
                         <option value="Loma Bonita">Loma Bonita</option>
                         <option value="Magdalena Apasco">Magdalena Apasco</option>
                         <option value="Magdalena Jaltepec">Magdalena Jaltepec</option>
                         <option value="Magdalena Mixtepec">Magdalena Mixtepec</option>
                         <option value="Magdalena Ocotlán">Magdalena Ocotlán</option>
                         <option value="Magdalena Peñasco">Magdalena Peñasco</option>
                         <option value="Magdalena Teitipac">Magdalena Teitipac</option>
                         <option value="Magdalena Tequisistlán">Magdalena Tequisistlán</option>
                         <option value="Magdalena Tlacotepec">Magdalena Tlacotepec</option>
                         <option value="Magdalena Yodocono de Porfirio Díaz">Magdalena Yodocono de Porfirio Díaz</option>
                         <option value="Magdalena Zahuatlán">Magdalena Zahuatlán</option>
                         <option value="Mariscala de Juárez">Mariscala de Juárez</option>
                         <option value="Matías Romero Avendaño">Matías Romero Avendaño</option>
                         <option value="Mazatlán Villa de Flores">Mazatlán Villa de Flores</option>
                         <option value="Mesones Hidalgo">Mesones Hidalgo</option>
                         <option value="Miahuatlán de Porfirio Díaz">Miahuatlán de Porfirio Díaz</option>
                         <option value="Mixistlán de la Reforma">Mixistlán de la Reforma</option>
                         <option value="Monjas">Monjas</option>
                         <option value="Mártires de Tacubaya">Mártires de Tacubaya</option>
                         <option value="Natividad">Natividad</option>
                         <option value="Nazareno Etla">Nazareno Etla</option>
                         <option value="Nejapa de Madero">Nejapa de Madero</option>
                         <option value="Nuevo Zoquiápam">Nuevo Zoquiápam</option>
                         <option value="Oaxaca de Juárez">Oaxaca de Juárez</option>
                         <option value="Ocotlán de Morelos">Ocotlán de Morelos</option>
                         <option value="Pinotepa de Don Luis">Pinotepa de Don Luis</option>
                         <option value="Pluma Hidalgo">Pluma Hidalgo</option>
                         <option value="Putla Villa de Guerrero">Putla Villa de Guerrero</option>
                         <option value="Reforma de Pineda">Reforma de Pineda</option>
                         <option value="Reyes Etla">Reyes Etla</option>
                         <option value="Rojas de Cuauhtémoc">Rojas de Cuauhtémoc</option>
                         <option value="Salina Cruz">Salina Cruz</option>
                         <option value="San Agustín Amatengo">San Agustín Amatengo</option>
                         <option value="San Agustín Atenango">San Agustín Atenango</option>
                         <option value="San Agustín Chayuco">San Agustín Chayuco</option>
                         <option value="San Agustín de las Juntas">San Agustín de las Juntas</option>
                         <option value="San Agustín Etla">San Agustín Etla</option>
                         <option value="San Agustín Loxicha">San Agustín Loxicha</option>
                         <option value="San Agustín Tlacotepec">San Agustín Tlacotepec</option>
                         <option value="San Agustín Yatareni">San Agustín Yatareni</option>
                         <option value="San Andrés Cabecera Nueva">San Andrés Cabecera Nueva</option>
                         <option value="San Andrés Dinicuiti">San Andrés Dinicuiti</option>
                         <option value="San Andrés Huaxpaltepec">San Andrés Huaxpaltepec</option>
                         <option value="San Andrés Huayápam">San Andrés Huayápam</option>
                         <option value="San Andrés Ixtlahuaca">San Andrés Ixtlahuaca</option>
                         <option value="San Andrés Lagunas">San Andrés Lagunas</option>
                         <option value="San Andrés Nuxiño">San Andrés Nuxiño</option>
                         <option value="San Andrés Paxtlán">San Andrés Paxtlán</option>
                         <option value="San Andrés Sinaxtla">San Andrés Sinaxtla</option>
                         <option value="San Andrés Solaga">San Andrés Solaga</option>
                         <option value="San Andrés Teotilálpam">San Andrés Teotilálpam</option>
                         <option value="San Andrés Tepetlapa">San Andrés Tepetlapa</option>
                         <option value="San Andrés Yaá">San Andrés Yaá</option>
                         <option value="San Andrés Zabache">San Andrés Zabache</option>
                         <option value="San Andrés Zautla">San Andrés Zautla</option>
                         <option value="San Antonino Castillo Velasco">San Antonino Castillo Velasco</option>
                         <option value="San Antonino el Alto">San Antonino el Alto</option>
                         <option value="San Antonino Monte Verde">San Antonino Monte Verde</option>
                         <option value="San Antonio Acutla">San Antonio Acutla</option>
                         <option value="San Antonio de la Cal">San Antonio de la Cal</option>
                         <option value="San Antonio Huitepec">San Antonio Huitepec</option>
                         <option value="San Antonio Nanahuatípam">San Antonio Nanahuatípam</option>
                         <option value="San Antonio Sinicahua">San Antonio Sinicahua</option>
                         <option value="San Antonio Tepetlapa">San Antonio Tepetlapa</option>
                         <option value="San Baltazar Chichicápam">San Baltazar Chichicápam</option>
                         <option value="San Baltazar Loxicha">San Baltazar Loxicha</option>
                         <option value="San Baltazar Yatzachi el Bajo">San Baltazar Yatzachi el Bajo</option>
                         <option value="San Bartolo Coyotepec">San Bartolo Coyotepec</option>
                         <option value="San Bartolo Soyaltepec">San Bartolo Soyaltepec</option>
                         <option value="San Bartolo Yautepec">San Bartolo Yautepec</option>
                         <option value="San Bartolomé Ayautla">San Bartolomé Ayautla</option>
                         <option value="San Bartolomé Loxicha">San Bartolomé Loxicha</option>
                         <option value="San Bartolomé Quialana">San Bartolomé Quialana</option>
                         <option value="San Bartolomé Yucuañe">San Bartolomé Yucuañe</option>
                         <option value="San Bartolomé Zoogocho">San Bartolomé Zoogocho</option>
                         <option value="San Bernardo Mixtepec">San Bernardo Mixtepec</option>
                         <option value="San Carlos Yautepec">San Carlos Yautepec</option>
                         <option value="San Cristóbal Amatlán">San Cristóbal Amatlán</option>
                         <option value="San Cristóbal Amoltepec">San Cristóbal Amoltepec</option>
                         <option value="San Cristóbal Lachirioag">San Cristóbal Lachirioag</option>
                         <option value="San Cristóbal Suchixtlahuaca">San Cristóbal Suchixtlahuaca</option>
                         <option value="San Dionisio del Mar">San Dionisio del Mar</option>
                         <option value="San Dionisio Ocotepec">San Dionisio Ocotepec</option>
                         <option value="San Dionisio Ocotlán">San Dionisio Ocotlán</option>
                         <option value="San Esteban Atatlahuca">San Esteban Atatlahuca</option>
                         <option value="San Felipe Jalapa de Díaz">San Felipe Jalapa de Díaz</option>
                         <option value="San Felipe Tejalápam">San Felipe Tejalápam</option>
                         <option value="San Felipe Usila">San Felipe Usila</option>
                         <option value="San Francisco Cahuacuá">San Francisco Cahuacuá</option>
                         <option value="San Francisco Cajonos">San Francisco Cajonos</option>
                         <option value="San Francisco Chapulapa">San Francisco Chapulapa</option>
                         <option value="San Francisco Chindúa">San Francisco Chindúa</option>
                         <option value="San Francisco del Mar">San Francisco del Mar</option>
                         <option value="San Francisco Huehuetlán">San Francisco Huehuetlán</option>
                         <option value="San Francisco Ixhuatán">San Francisco Ixhuatán</option>
                         <option value="San Francisco Jaltepetongo">San Francisco Jaltepetongo</option>
                         <option value="San Francisco Lachigoló">San Francisco Lachigoló</option>
                         <option value="San Francisco Logueche">San Francisco Logueche</option>
                         <option value="San Francisco Nuxaño">San Francisco Nuxaño</option>
                         <option value="San Francisco Ozolotepec">San Francisco Ozolotepec</option>
                         <option value="San Francisco Sola">San Francisco Sola</option>
                         <option value="San Francisco Telixtlahuaca">San Francisco Telixtlahuaca</option>
                         <option value="San Francisco Teopan">San Francisco Teopan</option>
                         <option value="San Francisco Tlapancingo">San Francisco Tlapancingo</option>
                         <option value="San Gabriel Mixtepec">San Gabriel Mixtepec</option>
                         <option value="San Ildefonso Amatlán">San Ildefonso Amatlán</option>
                         <option value="San Ildefonso Sola">San Ildefonso Sola</option>
                         <option value="San Ildefonso Villa Alta">San Ildefonso Villa Alta</option>
                         <option value="San Jacinto Amilpas">San Jacinto Amilpas</option>
                         <option value="San Jacinto Tlacotepec">San Jacinto Tlacotepec</option>
                         <option value="San Jerónimo Coatlán">San Jerónimo Coatlán</option>
                         <option value="San Jerónimo Silacayoapilla">San Jerónimo Silacayoapilla</option>
                         <option value="San Jerónimo Sosola">San Jerónimo Sosola</option>
                         <option value="San Jerónimo Taviche">San Jerónimo Taviche</option>
                         <option value="San Jerónimo Tecóatl">San Jerónimo Tecóatl</option>
                         <option value="San Jerónimo Tlacochahuaya">San Jerónimo Tlacochahuaya</option>
                         <option value="San Jorge Nuchita">San Jorge Nuchita</option>
                         <option value="San Lorenzo">San Lorenzo</option>
                         <option value="San Lorenzo Albarradas">San Lorenzo Albarradas</option>
                         <option value="San Lorenzo Cacaotepec">San Lorenzo Cacaotepec</option>
                         <option value="San Lorenzo Cuaunecuiltitla">San Lorenzo Cuaunecuiltitla</option>
                         <option value="San Lorenzo Texmelúcan">San Lorenzo Texmelúcan</option>
                         <option value="San Lorenzo Victoria">San Lorenzo Victoria</option>
                         <option value="San Lucas Camotlán">San Lucas Camotlán</option>
                         <option value="San Lucas Ojitlán">San Lucas Ojitlán</option>
                         <option value="San Lucas Quiaviní">San Lucas Quiaviní</option>
                         <option value="San Lucas Zoquiápam">San Lucas Zoquiápam</option>
                         <option value="San Marcial Ozolotepec">San Marcial Ozolotepec</option>
                         <option value="San Marcos Arteaga">San Marcos Arteaga</option>
                         <option value="San Martín de los Cansecos">San Martín de los Cansecos</option>
                         <option value="San Martín Huamelúlpam">San Martín Huamelúlpam</option>
                         <option value="San Martín Itunyoso">San Martín Itunyoso</option>
                         <option value="San Martín Lachilá">San Martín Lachilá</option>
                         <option value="San Martín Peras">San Martín Peras</option>
                         <option value="San Martín Tilcajete">San Martín Tilcajete</option>
                         <option value="San Martín Toxpalan">San Martín Toxpalan</option>
                         <option value="San Martín Zacatepec">San Martín Zacatepec</option>
                         <option value="San Mateo Cajonos">San Mateo Cajonos</option>
                         <option value="San Mateo del Mar">San Mateo del Mar</option>
                         <option value="San Mateo Etlatongo">San Mateo Etlatongo</option>
                         <option value="San Mateo Nejápam">San Mateo Nejápam</option>
                         <option value="San Mateo Peñasco">San Mateo Peñasco</option>
                         <option value="San Mateo Piñas">San Mateo Piñas</option>
                         <option value="San Mateo Río Hondo">San Mateo Río Hondo</option>
                         <option value="San Mateo Sindihui">San Mateo Sindihui</option>
                         <option value="San Mateo Tlapiltepec">San Mateo Tlapiltepec</option>
                         <option value="San Mateo Yoloxochitlán">San Mateo Yoloxochitlán</option>
                         <option value="San Mateo Yucutindoo">San Mateo Yucutindoo</option>
                         <option value="San Melchor Betaza">San Melchor Betaza</option>
                         <option value="San Miguel Achiutla">San Miguel Achiutla</option>
                         <option value="San Miguel Ahuehuetitlán">San Miguel Ahuehuetitlán</option>
                         <option value="San Miguel Aloápam">San Miguel Aloápam</option>
                         <option value="San Miguel Amatitlán">San Miguel Amatitlán</option>
                         <option value="San Miguel Amatlán">San Miguel Amatlán</option>
                         <option value="San Miguel Chicahua">San Miguel Chicahua</option>
                         <option value="San Miguel Chimalapa">San Miguel Chimalapa</option>
                         <option value="San Miguel Coatlán">San Miguel Coatlán</option>
                         <option value="San Miguel del Puerto">San Miguel del Puerto</option>
                         <option value="San Miguel del Río">San Miguel del Río</option>
                         <option value="San Miguel Ejutla">San Miguel Ejutla</option>
                         <option value="San Miguel el Grande">San Miguel el Grande</option>
                         <option value="San Miguel Huautla">San Miguel Huautla</option>
                         <option value="San Miguel Mixtepec">San Miguel Mixtepec</option>
                         <option value="San Miguel Panixtlahuaca">San Miguel Panixtlahuaca</option>
                         <option value="San Miguel Peras">San Miguel Peras</option>
                         <option value="San Miguel Piedras">San Miguel Piedras</option>
                         <option value="San Miguel Quetzaltepec">San Miguel Quetzaltepec</option>
                         <option value="San Miguel Santa Flor">San Miguel Santa Flor</option>
                         <option value="San Miguel Soyaltepec">San Miguel Soyaltepec</option>
                         <option value="San Miguel Suchixtepec">San Miguel Suchixtepec</option>
                         <option value="San Miguel Tecomatlán">San Miguel Tecomatlán</option>
                         <option value="San Miguel Tenango">San Miguel Tenango</option>
                         <option value="San Miguel Tequixtepec">San Miguel Tequixtepec</option>
                         <option value="San Miguel Tilquiápam">San Miguel Tilquiápam</option>
                         <option value="San Miguel Tlacamama">San Miguel Tlacamama</option>
                         <option value="San Miguel Tlacotepec">San Miguel Tlacotepec</option>
                         <option value="San Miguel Tulancingo">San Miguel Tulancingo</option>
                         <option value="San Miguel Yotao">San Miguel Yotao</option>
                         <option value="San Nicolás">San Nicolás</option>
                         <option value="San Nicolás Hidalgo">San Nicolás Hidalgo</option>
                         <option value="San Pablo Coatlán">San Pablo Coatlán</option>
                         <option value="San Pablo Cuatro Venados">San Pablo Cuatro Venados</option>
                         <option value="San Pablo Etla">San Pablo Etla</option>
                         <option value="San Pablo Huitzo">San Pablo Huitzo</option>
                         <option value="San Pablo Huixtepec">San Pablo Huixtepec</option>
                         <option value="San Pablo Macuiltianguis">San Pablo Macuiltianguis</option>
                         <option value="San Pablo Tijaltepec">San Pablo Tijaltepec</option>
                         <option value="San Pablo Villa de Mitla">San Pablo Villa de Mitla</option>
                         <option value="San Pablo Yaganiza">San Pablo Yaganiza</option>
                         <option value="San Pedro Amuzgos">San Pedro Amuzgos</option>
                         <option value="San Pedro Apóstol">San Pedro Apóstol</option>
                         <option value="San Pedro Atoyac">San Pedro Atoyac</option>
                         <option value="San Pedro Cajonos">San Pedro Cajonos</option>
                         <option value="San Pedro Comitancillo">San Pedro Comitancillo</option>
                         <option value="San Pedro Coxcaltepec Cántaros">San Pedro Coxcaltepec Cántaros</option>
                         <option value="San Pedro el Alto">San Pedro el Alto</option>
                         <option value="San Pedro Huamelula">San Pedro Huamelula</option>
                         <option value="San Pedro Huilotepec">San Pedro Huilotepec</option>
                         <option value="San Pedro Ixcatlán">San Pedro Ixcatlán</option>
                         <option value="San Pedro Ixtlahuaca">San Pedro Ixtlahuaca</option>
                         <option value="San Pedro Jaltepetongo">San Pedro Jaltepetongo</option>
                         <option value="San Pedro Jicayán">San Pedro Jicayán</option>
                         <option value="San Pedro Jocotipac">San Pedro Jocotipac</option>
                         <option value="San Pedro Juchatengo">San Pedro Juchatengo</option>
                         <option value="San Pedro Mixtepec">San Pedro Mixtepec</option>
                         <option value="San Pedro Mixtepec">San Pedro Mixtepec</option>
                         <option value="San Pedro Molinos">San Pedro Molinos</option>
                         <option value="San Pedro Mártir">San Pedro Mártir</option>
                         <option value="San Pedro Mártir Quiechapa">San Pedro Mártir Quiechapa</option>
                         <option value="San Pedro Mártir Yucuxaco">San Pedro Mártir Yucuxaco</option>
                         <option value="San Pedro Nopala">San Pedro Nopala</option>
                         <option value="San Pedro Ocopetatillo">San Pedro Ocopetatillo</option>
                         <option value="San Pedro Ocotepec">San Pedro Ocotepec</option>
                         <option value="San Pedro Pochutla">San Pedro Pochutla</option>
                         <option value="San Pedro Quiatoni">San Pedro Quiatoni</option>
                         <option value="San Pedro Sochiápam">San Pedro Sochiápam</option>
                         <option value="San Pedro Tapanatepec">San Pedro Tapanatepec</option>
                         <option value="San Pedro Taviche">San Pedro Taviche</option>
                         <option value="San Pedro Teozacoalco">San Pedro Teozacoalco</option>
                         <option value="San Pedro Teutila">San Pedro Teutila</option>
                         <option value="San Pedro Tidaá">San Pedro Tidaá</option>
                         <option value="San Pedro Topiltepec">San Pedro Topiltepec</option>
                         <option value="San Pedro Totolápam">San Pedro Totolápam</option>
                         <option value="San Pedro y San Pablo Ayutla">San Pedro y San Pablo Ayutla</option>
                         <option value="San Pedro y San Pablo Teposcolula">San Pedro y San Pablo Teposcolula</option>
                         <option value="San Pedro y San Pablo Tequixtepec">San Pedro y San Pablo Tequixtepec</option>
                         <option value="San Pedro Yaneri">San Pedro Yaneri</option>
                         <option value="San Pedro Yucunama">San Pedro Yucunama</option>
                         <option value="San Pedro Yólox">San Pedro Yólox</option>
                         <option value="San Raymundo Jalpan">San Raymundo Jalpan</option>
                         <option value="San Sebastián Abasolo">San Sebastián Abasolo</option>
                         <option value="San Sebastián Coatlán">San Sebastián Coatlán</option>
                         <option value="San Sebastián Ixcapa">San Sebastián Ixcapa</option>
                         <option value="San Sebastián Nicananduta">San Sebastián Nicananduta</option>
                         <option value="San Sebastián Río Hondo">San Sebastián Río Hondo</option>
                         <option value="San Sebastián Tecomaxtlahuaca">San Sebastián Tecomaxtlahuaca</option>
                         <option value="San Sebastián Teitipac">San Sebastián Teitipac</option>
                         <option value="San Sebastián Tutla">San Sebastián Tutla</option>
                         <option value="San Simón Almolongas">San Simón Almolongas</option>
                         <option value="San Simón Zahuatlán">San Simón Zahuatlán</option>
                         <option value="San Vicente Coatlán">San Vicente Coatlán</option>
                         <option value="San Vicente Lachixío">San Vicente Lachixío</option>
                         <option value="San Vicente Nuñú">San Vicente Nuñú</option>
                         <option value="San Blas Atempa">San Blas Atempa</option>
                         <option value="San José Ayuquila">San José Ayuquila</option>
                         <option value="San José Chiltepec">San José Chiltepec</option>
                         <option value="San José del Peñasco">San José del Peñasco</option>
                         <option value="San José del Progreso">San José del Progreso</option>
                         <option value="San José Estancia Grande">San José Estancia Grande</option>
                         <option value="San José Independencia">San José Independencia</option>
                         <option value="San José Lachiguiri">San José Lachiguiri</option>
                         <option value="San José Tenango">San José Tenango</option>
                         <option value="San Juan Achiutla">San Juan Achiutla</option>
                         <option value="San Juan Atepec">San Juan Atepec</option>
                         <option value="San Juan Bautista Atatlahuca">San Juan Bautista Atatlahuca</option>
                         <option value="San Juan Bautista Coixtlahuaca">San Juan Bautista Coixtlahuaca</option>
                         <option value="San Juan Bautista Cuicatlán">San Juan Bautista Cuicatlán</option>
                         <option value="San Juan Bautista Guelache">San Juan Bautista Guelache</option>
                         <option value="San Juan Bautista Jayacatlán">San Juan Bautista Jayacatlán</option>
                         <option value="San Juan Bautista Lo de Soto">San Juan Bautista Lo de Soto</option>
                         <option value="San Juan Bautista Suchitepec">San Juan Bautista Suchitepec</option>
                         <option value="San Juan Bautista Tlachichilco">San Juan Bautista Tlachichilco</option>
                         <option value="San Juan Bautista Tlacoatzintepec">San Juan Bautista Tlacoatzintepec</option>
                         <option value="San Juan Bautista Tuxtepec">San Juan Bautista Tuxtepec</option>
                         <option value="San Juan Bautista Valle Nacional">San Juan Bautista Valle Nacional</option>
                         <option value="San Juan Cacahuatepec">San Juan Cacahuatepec</option>
                         <option value="San Juan Chicomezúchil">San Juan Chicomezúchil</option>
                         <option value="San Juan Chilateca">San Juan Chilateca</option>
                         <option value="San Juan Cieneguilla">San Juan Cieneguilla</option>
                         <option value="San Juan Coatzóspam">San Juan Coatzóspam</option>
                         <option value="San Juan Colorado">San Juan Colorado</option>
                         <option value="San Juan Comaltepec">San Juan Comaltepec</option>
                         <option value="San Juan Cotzocón">San Juan Cotzocón</option>
                         <option value="San Juan de los Cués">San Juan de los Cués</option>
                         <option value="San Juan del Estado">San Juan del Estado</option>
                         <option value="San Juan del Río">San Juan del Río</option>
                         <option value="San Juan Diuxi">San Juan Diuxi</option>
                         <option value="San Juan Evangelista Analco">San Juan Evangelista Analco</option>
                         <option value="San Juan Guelavía">San Juan Guelavía</option>
                         <option value="San Juan Guichicovi">San Juan Guichicovi</option>
                         <option value="San Juan Ihualtepec">San Juan Ihualtepec</option>
                         <option value="San Juan Juquila Mixes">San Juan Juquila Mixes</option>
                         <option value="San Juan Juquila Vijanos">San Juan Juquila Vijanos</option>
                         <option value="San Juan Lachao">San Juan Lachao</option>
                         <option value="San Juan Lachigalla">San Juan Lachigalla</option>
                         <option value="San Juan Lajarcia">San Juan Lajarcia</option>
                         <option value="San Juan Lalana">San Juan Lalana</option>
                         <option value="San Juan Mazatlán">San Juan Mazatlán</option>
                         <option value="San Juan Mixtepec">San Juan Mixtepec</option>
                         <option value="San Juan Mixtepec.">San Juan Mixtepec.</option>
                         <option value="San Juan Ozolotepec">San Juan Ozolotepec</option>
                         <option value="San Juan Petlapa">San Juan Petlapa</option>
                         <option value="San Juan Quiahije">San Juan Quiahije</option>
                         <option value="San Juan Quiotepec">San Juan Quiotepec</option>
                         <option value="San Juan Sayultepec">San Juan Sayultepec</option>
                         <option value="San Juan Tabaá">San Juan Tabaá</option>
                         <option value="San Juan Tamazola">San Juan Tamazola</option>
                         <option value="San Juan Teita">San Juan Teita</option>
                         <option value="San Juan Teitipac">San Juan Teitipac</option>
                         <option value="San Juan Tepeuxila">San Juan Tepeuxila</option>
                         <option value="San Juan Teposcolula">San Juan Teposcolula</option>
                         <option value="San Juan Yaeé">San Juan Yaeé</option>
                         <option value="San Juan Yatzona">San Juan Yatzona</option>
                         <option value="San Juan Yucuita">San Juan Yucuita</option>
                         <option value="San Juan Ñumí">San Juan Ñumí</option>
                         <option value="San Luis Amatlán">San Luis Amatlán</option>
                         <option value="Santa Ana">Santa Ana</option>
                         <option value="Santa Ana Ateixtlahuaca">Santa Ana Ateixtlahuaca</option>
                         <option value="Santa Ana Cuauhtémoc">Santa Ana Cuauhtémoc</option>
                         <option value="Santa Ana del Valle">Santa Ana del Valle</option>
                         <option value="Santa Ana Tavela">Santa Ana Tavela</option>
                         <option value="Santa Ana Tlapacoyan">Santa Ana Tlapacoyan</option>
                         <option value="Santa Ana Yareni">Santa Ana Yareni</option>
                         <option value="Santa Ana Zegache">Santa Ana Zegache</option>
                         <option value="Santa Catalina Quierí">Santa Catalina Quierí</option>
                         <option value="Santa Catarina Cuixtla">Santa Catarina Cuixtla</option>
                         <option value="Santa Catarina Ixtepeji">Santa Catarina Ixtepeji</option>
                         <option value="Santa Catarina Juquila">Santa Catarina Juquila</option>
                         <option value="Santa Catarina Lachatao">Santa Catarina Lachatao</option>
                         <option value="Santa Catarina Loxicha">Santa Catarina Loxicha</option>
                         <option value="Santa Catarina Mechoacán">Santa Catarina Mechoacán</option>
                         <option value="Santa Catarina Minas">Santa Catarina Minas</option>
                         <option value="Santa Catarina Quiané">Santa Catarina Quiané</option>
                         <option value="Santa Catarina Quioquitani">Santa Catarina Quioquitani</option>
                         <option value="Santa Catarina Tayata">Santa Catarina Tayata</option>
                         <option value="Santa Catarina Ticuá">Santa Catarina Ticuá</option>
                         <option value="Santa Catarina Yosonotú">Santa Catarina Yosonotú</option>
                         <option value="Santa Catarina Zapoquila">Santa Catarina Zapoquila</option>
                         <option value="Santa Cruz Acatepec">Santa Cruz Acatepec</option>
                         <option value="Santa Cruz Amilpas">Santa Cruz Amilpas</option>
                         <option value="Santa Cruz de Bravo">Santa Cruz de Bravo</option>
                         <option value="Santa Cruz Itundujia">Santa Cruz Itundujia</option>
                         <option value="Santa Cruz Mixtepec">Santa Cruz Mixtepec</option>
                         <option value="Santa Cruz Nundaco">Santa Cruz Nundaco</option>
                         <option value="Santa Cruz Papalutla">Santa Cruz Papalutla</option>
                         <option value="Santa Cruz Tacache de Mina">Santa Cruz Tacache de Mina</option>
                         <option value="Santa Cruz Tacahua">Santa Cruz Tacahua</option>
                         <option value="Santa Cruz Tayata">Santa Cruz Tayata</option>
                         <option value="Santa Cruz Xitla">Santa Cruz Xitla</option>
                         <option value="Santa Cruz Xoxocotlán">Santa Cruz Xoxocotlán</option>
                         <option value="Santa Cruz Zenzontepec">Santa Cruz Zenzontepec</option>
                         <option value="Santa Gertrudis">Santa Gertrudis</option>
                         <option value="Santa Inés de Zaragoza">Santa Inés de Zaragoza</option>
                         <option value="Santa Inés del Monte">Santa Inés del Monte</option>
                         <option value="Santa Inés Yatzeche">Santa Inés Yatzeche</option>
                         <option value="Santa Lucía del Camino">Santa Lucía del Camino</option>
                         <option value="Santa Lucía Miahuatlán">Santa Lucía Miahuatlán</option>
                         <option value="Santa Lucía Monteverde">Santa Lucía Monteverde</option>
                         <option value="Santa Lucía Ocotlán">Santa Lucía Ocotlán</option>
                         <option value="Santa Magdalena Jicotlán">Santa Magdalena Jicotlán</option>
                         <option value="Santa María Alotepec">Santa María Alotepec</option>
                         <option value="Santa María Apazco">Santa María Apazco</option>
                         <option value="Santa María Atzompa">Santa María Atzompa</option>
                         <option value="Santa María Camotlán">Santa María Camotlán</option>
                         <option value="Santa María Chachoápam">Santa María Chachoápam</option>
                         <option value="Santa María Chilchotla">Santa María Chilchotla</option>
                         <option value="Santa María Chimalapa">Santa María Chimalapa</option>
                         <option value="Santa María Colotepec">Santa María Colotepec</option>
                         <option value="Santa María Cortijo">Santa María Cortijo</option>
                         <option value="Santa María Coyotepec">Santa María Coyotepec</option>
                         <option value="Santa María del Rosario">Santa María del Rosario</option>
                         <option value="Santa María del Tule">Santa María del Tule</option>
                         <option value="Santa María Ecatepec">Santa María Ecatepec</option>
                         <option value="Santa María Guelacé">Santa María Guelacé</option>
                         <option value="Santa María Guienagati">Santa María Guienagati</option>
                         <option value="Santa María Huatulco">Santa María Huatulco</option>
                         <option value="Santa María Huazolotitlán">Santa María Huazolotitlán</option>
                         <option value="Santa María Ipalapa">Santa María Ipalapa</option>
                         <option value="Santa María Ixcatlán">Santa María Ixcatlán</option>
                         <option value="Santa María Jacatepec">Santa María Jacatepec</option>
                         <option value="Santa María Jalapa del Marqués">Santa María Jalapa del Marqués</option>
                         <option value="Santa María Jaltianguis">Santa María Jaltianguis</option>
                         <option value="Santa María la Asunción">Santa María la Asunción</option>
                         <option value="Santa María Lachixío">Santa María Lachixío</option>
                         <option value="Santa María Mixtequilla">Santa María Mixtequilla</option>
                         <option value="Santa María Nativitas">Santa María Nativitas</option>
                         <option value="Santa María Nduayaco">Santa María Nduayaco</option>
                         <option value="Santa María Ozolotepec">Santa María Ozolotepec</option>
                         <option value="Santa María Petapa">Santa María Petapa</option>
                         <option value="Santa María Peñoles">Santa María Peñoles</option>
                         <option value="Santa María Pápalo">Santa María Pápalo</option>
                         <option value="Santa María Quiegolani">Santa María Quiegolani</option>
                         <option value="Santa María Sola">Santa María Sola</option>
                         <option value="Santa María Tataltepec">Santa María Tataltepec</option>
                         <option value="Santa María Tecomavaca">Santa María Tecomavaca</option>
                         <option value="Santa María Temaxcalapa">Santa María Temaxcalapa</option>
                         <option value="Santa María Temaxcaltepec">Santa María Temaxcaltepec</option>
                         <option value="Santa María Teopoxco">Santa María Teopoxco</option>
                         <option value="Santa María Tepantlali">Santa María Tepantlali</option>
                         <option value="Santa María Texcatitlán">Santa María Texcatitlán</option>
                         <option value="Santa María Tlahuitoltepec">Santa María Tlahuitoltepec</option>
                         <option value="Santa María Tlalixtac">Santa María Tlalixtac</option>
                         <option value="Santa María Tonameca">Santa María Tonameca</option>
                         <option value="Santa María Totolapilla">Santa María Totolapilla</option>
                         <option value="Santa María Xadani">Santa María Xadani</option>
                         <option value="Santa María Yalina">Santa María Yalina</option>
                         <option value="Santa María Yavesía">Santa María Yavesía</option>
                         <option value="Santa María Yolotepec">Santa María Yolotepec</option>
                         <option value="Santa María Yosoyúa">Santa María Yosoyúa</option>
                         <option value="Santa María Yucuhiti">Santa María Yucuhiti</option>
                         <option value="Santa María Zacatepec">Santa María Zacatepec</option>
                         <option value="Santa María Zaniza">Santa María Zaniza</option>
                         <option value="Santa María Zoquitlán">Santa María Zoquitlán</option>
                         <option value="Santiago Amoltepec">Santiago Amoltepec</option>
                         <option value="Santiago Apoala">Santiago Apoala</option>
                         <option value="Santiago Apóstol">Santiago Apóstol</option>
                         <option value="Santiago Astata">Santiago Astata</option>
                         <option value="Santiago Atitlán">Santiago Atitlán</option>
                         <option value="Santiago Ayuquililla">Santiago Ayuquililla</option>
                         <option value="Santiago Cacaloxtepec">Santiago Cacaloxtepec</option>
                         <option value="Santiago Camotlán">Santiago Camotlán</option>
                         <option value="Santiago Choápam">Santiago Choápam</option>
                         <option value="Santiago Comaltepec">Santiago Comaltepec</option>
                         <option value="Santiago del Río">Santiago del Río</option>
                         <option value="Santiago Huajolotitlán">Santiago Huajolotitlán</option>
                         <option value="Santiago Huauclilla">Santiago Huauclilla</option>
                         <option value="Santiago Ihuitlán Plumas">Santiago Ihuitlán Plumas</option>
                         <option value="Santiago Ixcuintepec">Santiago Ixcuintepec</option>
                         <option value="Santiago Ixtayutla">Santiago Ixtayutla</option>
                         <option value="Santiago Jamiltepec">Santiago Jamiltepec</option>
                         <option value="Santiago Jocotepec">Santiago Jocotepec</option>
                         <option value="Santiago Juxtlahuaca">Santiago Juxtlahuaca</option>
                         <option value="Santiago Lachiguiri">Santiago Lachiguiri</option>
                         <option value="Santiago Lalopa">Santiago Lalopa</option>
                         <option value="Santiago Laollaga">Santiago Laollaga</option>
                         <option value="Santiago Laxopa">Santiago Laxopa</option>
                         <option value="Santiago Llano Grande">Santiago Llano Grande</option>
                         <option value="Santiago Matatlán">Santiago Matatlán</option>
                         <option value="Santiago Miltepec">Santiago Miltepec</option>
                         <option value="Santiago Minas">Santiago Minas</option>
                         <option value="Santiago Nacaltepec">Santiago Nacaltepec</option>
                         <option value="Santiago Nejapilla">Santiago Nejapilla</option>
                         <option value="Santiago Niltepec">Santiago Niltepec</option>
                         <option value="Santiago Nundiche">Santiago Nundiche</option>
                         <option value="Santiago Nuyoó">Santiago Nuyoó</option>
                         <option value="Santiago Pinotepa Nacional">Santiago Pinotepa Nacional</option>
                         <option value="Santiago Suchilquitongo">Santiago Suchilquitongo</option>
                         <option value="Santiago Tamazola">Santiago Tamazola</option>
                         <option value="Santiago Tapextla">Santiago Tapextla</option>
                         <option value="Santiago Tenango">Santiago Tenango</option>
                         <option value="Santiago Tepetlapa">Santiago Tepetlapa</option>
                         <option value="Santiago Tetepec">Santiago Tetepec</option>
                         <option value="Santiago Texcalcingo">Santiago Texcalcingo</option>
                         <option value="Santiago Textitlán">Santiago Textitlán</option>
                         <option value="Santiago Tilantongo">Santiago Tilantongo</option>
                         <option value="Santiago Tillo">Santiago Tillo</option>
                         <option value="Santiago Tlazoyaltepec">Santiago Tlazoyaltepec</option>
                         <option value="Santiago Xanica">Santiago Xanica</option>
                         <option value="Santiago Xiacuí">Santiago Xiacuí</option>
                         <option value="Santiago Yaitepec">Santiago Yaitepec</option>
                         <option value="Santiago Yaveo">Santiago Yaveo</option>
                         <option value="Santiago Yolomécatl">Santiago Yolomécatl</option>
                         <option value="Santiago Yosondúa">Santiago Yosondúa</option>
                         <option value="Santiago Yucuyachi">Santiago Yucuyachi</option>
                         <option value="Santiago Zacatepec">Santiago Zacatepec</option>
                         <option value="Santiago Zoochila">Santiago Zoochila</option>
                         <option value="Santo Domingo Albarradas">Santo Domingo Albarradas</option>
                         <option value="Santo Domingo Armenta">Santo Domingo Armenta</option>
                         <option value="Santo Domingo Chihuitán">Santo Domingo Chihuitán</option>
                         <option value="Santo Domingo de Morelos">Santo Domingo de Morelos</option>
                         <option value="Santo Domingo Ingenio">Santo Domingo Ingenio</option>
                         <option value="Santo Domingo Ixcatlán">Santo Domingo Ixcatlán</option>
                         <option value="Santo Domingo Nuxaá">Santo Domingo Nuxaá</option>
                         <option value="Santo Domingo Ozolotepec">Santo Domingo Ozolotepec</option>
                         <option value="Santo Domingo Petapa">Santo Domingo Petapa</option>
                         <option value="Santo Domingo Roayaga">Santo Domingo Roayaga</option>
                         <option value="Santo Domingo Tehuantepec">Santo Domingo Tehuantepec</option>
                         <option value="Santo Domingo Teojomulco">Santo Domingo Teojomulco</option>
                         <option value="Santo Domingo Tepuxtepec">Santo Domingo Tepuxtepec</option>
                         <option value="Santo Domingo Tlatayápam">Santo Domingo Tlatayápam</option>
                         <option value="Santo Domingo Tomaltepec">Santo Domingo Tomaltepec</option>
                         <option value="Santo Domingo Tonaltepec">Santo Domingo Tonaltepec</option>
                         <option value="Santo Domingo Tonalá">Santo Domingo Tonalá</option>
                         <option value="Santo Domingo Xagacía">Santo Domingo Xagacía</option>
                         <option value="Santo Domingo Yanhuitlán">Santo Domingo Yanhuitlán</option>
                         <option value="Santo Domingo Yodohino">Santo Domingo Yodohino</option>
                         <option value="Santo Domingo Zanatepec">Santo Domingo Zanatepec</option>
                         <option value="Santo Tomás Jalieza">Santo Tomás Jalieza</option>
                         <option value="Santo Tomás Mazaltepec">Santo Tomás Mazaltepec</option>
                         <option value="Santo Tomás Ocotepec">Santo Tomás Ocotepec</option>
                         <option value="Santo Tomás Tamazulapan">Santo Tomás Tamazulapan</option>
                         <option value="Santos Reyes Nopala">Santos Reyes Nopala</option>
                         <option value="Santos Reyes Pápalo">Santos Reyes Pápalo</option>
                         <option value="Santos Reyes Tepejillo">Santos Reyes Tepejillo</option>
                         <option value="Santos Reyes Yucuná">Santos Reyes Yucuná</option>
                         <option value="Silacayoápam">Silacayoápam</option>
                         <option value="Sitio de Xitlapehua">Sitio de Xitlapehua</option>
                         <option value="Soledad Etla">Soledad Etla</option>
                         <option value="Tamazulápam del Espíritu Santo">Tamazulápam del Espíritu Santo</option>
                         <option value="Tanetze de Zaragoza">Tanetze de Zaragoza</option>
                         <option value="Taniche">Taniche</option>
                         <option value="Tataltepec de Valdés">Tataltepec de Valdés</option>
                         <option value="Teococuilco de Marcos Pérez">Teococuilco de Marcos Pérez</option>
                         <option value="Teotitlán de Flores Magón">Teotitlán de Flores Magón</option>
                         <option value="Teotitlán del Valle">Teotitlán del Valle</option>
                         <option value="Teotongo">Teotongo</option>
                         <option value="Tepelmeme Villa de Morelos">Tepelmeme Villa de Morelos</option>
                         <option value="Tlacolula de Matamoros">Tlacolula de Matamoros</option>
                         <option value="Tlacotepec Plumas">Tlacotepec Plumas</option>
                         <option value="Tlalixtac de Cabrera">Tlalixtac de Cabrera</option>
                         <option value="Totontepec Villa de Morelos">Totontepec Villa de Morelos</option>
                         <option value="Trinidad Zaachila">Trinidad Zaachila</option>
                         <option value="Unión Hidalgo">Unión Hidalgo</option>
                         <option value="Valerio Trujano">Valerio Trujano</option>
                         <option value="Villa Díaz Ordaz">Villa Díaz Ordaz</option>
                         <option value="Villa Hidalgo">Villa Hidalgo</option>
                         <option value="Villa Sola de Vega">Villa Sola de Vega</option>
                         <option value="Villa Talea de Castro">Villa Talea de Castro</option>
                         <option value="Villa Tejúpam de la Unión">Villa Tejúpam de la Unión</option>
                         <option value="Villa de Chilapa de Díaz">Villa de Chilapa de Díaz</option>
                         <option value="Villa de Etla">Villa de Etla</option>
                         <option value="Villa de Santiago Chazumba">Villa de Santiago Chazumba</option>
                         <option value="Villa de Tamazulápam del Progreso">Villa de Tamazulápam del Progreso</option>
                         <option value="Villa de Tututepec">Villa de Tututepec</option>
                         <option value="Villa de Zaachila">Villa de Zaachila</option>
                         <option value="Yaxe">Yaxe</option>
                         <option value="Yogana">Yogana</option>
                         <option value="Yutanduchi de Guerrero">Yutanduchi de Guerrero</option>
                         <option value="Zapotitlán Lagunas">Zapotitlán Lagunas</option>
                         <option value="Zapotitlán Palmas">Zapotitlán Palmas</option>
                         <option value="Zimatlán de Álvarez">Zimatlán de Álvarez</option>
                         <option value="Ánimas Trujano">Ánimas Trujano</option>
                        </select>
                      </div>
                      <div class="col-md-2">
                        <label class="form-label">CP</label>
                        <input type="text" class="form-control" id="cp" name="cp" value="<?= $datos->cp ?>">
                      </div>
                      <?php }
                      ?>
                      <!-- <div class="col-12">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="gridCheck">
                          <label class="form-check-label" for="gridCheck">
                            Acepto Términos y Condiciones
                          </label>
                        </div>
                      </div> -->
                      <br>
                      <br>
                      <div class="col-12">
                        <button type="submit" class="btn btn-warning" name="btn_enviarinfo">Modificar</button>
                      </div>                  
                    </div>
                </div>
            </div>
            
          </center>
        </form>
</body>
<br><br><br>
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-6 footer-links">
          <h4>Atención a Clientes</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="contacto.html">Quejas y Sugerencias</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="contacto.html">Contacto</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="contacto.html">Aclaraciones</a></li>
          </ul>
        </div>

        <div class="col-lg-6 col-md-6 footer-links">
          <h4>Políticas</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="privacidad.html">Avisos de Privacidad</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Preguntas Frecuentes</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Términos y Condiciones</a></li>
          </ul>
        </div>
        <div class="col-lg-1 col-md-6 footer-links">
          <h4>Algo Más</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Avisos de Privacidad</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Preguntas Frecuentes</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Términos y Condiciones</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div id="cookie-consent">
    <p>Este sitio utiliza cookies para mejorar su experiencia. Al continuar navegando, acepta nuestra <a href="privacidad.html">Política de Privacidad</a> y el uso de cookies.</p>
    <div>
        <button id="accept-cookies">Aceptar</button>
        <button id="decline-cookies">Denegar</button>
    </div>
</div>

  <div class="container d-md-flex py-4">

    <div class="me-md-auto text-center text-md-start">
      <div class="copyright">
        &copy; Copyright <strong><span>Farmacia Mayito</span></strong>. Todos Los Derechos Son Reservados <script>documentd.write(new Date().getFullYear());</script>
      </div>
    </div>
    <div class="social-links text-center text-md-right pt-3 pt-md-0">
      <a href="https://www.facebook.com/SanPabloFarma/?locale=es_LA" class="facebook"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAABjklEQVRIS71V7VHDMAyNN4ANygTABLQTQDdoN6AT0E7QbtAyAWUCugEwAdmAbhDey0m+1JYd50fQnS4529LTx7PsqpHFjey/6gVommaKIB6h/E4koBrfL+i7c+6YCzIJAMd3MHyBPvVkSaA5gAgaiQkA5wuc3EKvBpRwBZBdeD4CgPNncT7Atz8agVwAwDlr/JmJ/Iy9JfSEaPlfwYaZMiiVe+yxbK2EAB9YmyZCp8NZ11gA1viyVyo1ztxEAIiEzXxLOOfyEYZz3RcSMJgHaEiEJc4eLjKAwR4LiwzADkYriZoMYylT4oPxJQIADWiYEt/AAiKcEcx1mMEPFib/DeAjSQEjG/Yt7IGZgcWgEgArc9J4FpYo5DP3Sc2Wcsp7aXL3hv8a2XlCdJvcR9MhTY5pKpHlmFQKwFvMC9nedGtUsKaWlALQ+UkdWMNujc3u1dezJQC+9kkAKZU1UXMALMemaFwrsswaclwvXwqgxhnumS/bkCfzWweYPEi3cPwK5fRsG2pJL0DKsHR9dIA/apC/GfGTaGsAAAAASUVORK5CYII="/></a>
      <a href="https://www.instagram.com/sanpablofarma/?hl=es" class="instagram"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAB70lEQVRIS8WVwVEDMQxFsxWQHLktJ66kASapAFIBSQXAmQOhAkIFJBWQCmBnKAA4wY10QDpY/ltkj9c4GV8y8YxmZVvS97ckb9HZ8Sh2HL+zH4C6rk/E7FxyJikDlt1AX5te6buSPBRFwbc1/jFQ8CtZ3JoVDogLFvsDyAE4EGMikHlo1AJQcIzfLOgodaIYgbkxvpc6kPTl9+7sYoCpNi4lw9AoFdStKfiz9E/JjeRHspTvaBPAE5Rl0I+DKhCnQxiVbCqtHUv/krxqfqr5t/Su9N4mAAxwngQnLKVDn6SHg2sYSg5lDwOu6lGfseb+ZuIrchRDAFgRfCZZSEg4c0A5DCDNcABSe1pvCiMFMNfmtTkQCICZWwuCUW2A+MrJAajDYFayBDmKK0p7lCiM77Q3zWUQAxCck24D8OxyGLRyIAd3Rf6UiSuiX5a5DFJJpvHoVPIyNwCX5JXm9EyT0NwqojJ8o1h3k2j3HDgSlGmr23MAXuREo6Qabay9UnIg+ZDQsa03yhptHfrHZUpSCcR7Av3sYUxpVMrc91HqsWu6WUJ9Z4FYydLF5Iac4N+M1HMNA4wZVAfXsO25Jjel2fsm3QjAhj2/F1IHkji5ztd9STZMF65cQ4OsX6ZdQRz47wqiRMdGWQDJyJmLOwf4BSpCASiZ2gWDAAAAAElFTkSuQmCC"/></a>
      <a href="https://x.com/SanPabloFarma?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="twittter"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAABZ0lEQVRIS92V620CMRCEcQdJB5SQEqCCJCXQQaggpIJcOqCDQAUcHaSD0AF0cJlPWiNj1ufcSfxhpZXQ7WNmZ20TJje2cOP+kzsD6LruIYRwqsmmvJly3uVP8la+V11DvX6/yDexz4VESvhW8EPBnxKIct4U+3TiB30D4Ev1qxg/Axj6UQEmWChpkzexnF9r5HGgFnKQZLLLJasBALDAGks8S2bS7ErTeeQ8idAwNSbZGzPAkbFkazFfpMFUoqkCOPqyvDHWCGBZAoBd3EGUaSjIktPkAvDRTlEu0RCQeVxuLMp3gERoPEaik5o/5myungpNQXP2MBtCXblX8lDvAdC47yh6uK3Yz72A+9hpipWSeQr+Y9yT11x7dwdpN5MKkNrSubUQcs2TiCPKHp7lvDslgzm6r/vGTC8aTWHMDmr3oLXmxUexKJGkQRLYT20ScmGLb+U8xdXGRYC+ccfE7uwvc4wEtZo/Ayp5GfQ9ka4AAAAASUVORK5CYII="/></a>
    </div>
  </div>
</footer>


<script>
  // Verificar si el usuario ya ha aceptado o denegado las cookies
  if (localStorage.getItem('cookieConsent') === 'accepted' || localStorage.getItem('cookieConsent') === 'declined') {
         document.getElementById('cookie-consent').style.display = 'none';
     }

     document.getElementById('accept-cookies').addEventListener('click', function() {
         localStorage.setItem('cookieConsent', 'accepted');
         document.getElementById('cookie-consent').style.display = 'none';
     });

     document.getElementById('decline-cookies').addEventListener('click', function() {
         localStorage.setItem('cookieConsent', 'declined');
         window.location.href = 'index.html';
     });
</script>

<script src="js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>
