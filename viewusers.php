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
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://kit.fontawesonme.comm/646sc4fad6.js" crossorigin="anonymous"></script>

  
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="logo">
                <a href="index.html"><img src="img/logosinfondo.png" alt="San Pablo Farmacia Logo"></a>
            </div>
            <div class="search">
                <input type="text" placeholder="¿Qué estás buscando?">
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
                  <a href="medicamentos.html" class="dropdown-item">Medicamentos</a>
                      <a href="botiquin.html" class="dropdown-item">Equipo y Botiquín</a>
                      <a href="vitaminasysuplementos.html" class="dropdown-item">Vitaminas y Suplementos</a>
                      <a href="derocosmeticos.html" class="dropdown-item">Dermocosméticos</a>
                      <a href="personalybelleza.html" class="dropdown-item">Cuidado Personal y Belleza</a>
                      <a href="bebes.html" class="dropdown-item">Bebés</a>
                      <a href="alimentosybebidas.html" class="dropdown-item">Alimentos y bebidas</a>
                      <a href="saludsexual.html" class="dropdown-item">Salud Sexual</a>
                  </div>
              </div>
                  <li><a href="ofertas.html">Ofertas</a></li>
                  <li><a href="contacto.html">Contacto</a></li>

                  <li><a href="login.html" class="btn btn-danger my-0">Cerrar sesión</a></li>
              </ul>
          </nav>
      </div>
    </header>
    <br>
</body>
 
 
  <div class="table-responsive-mf">
        <table class="display table table-bordered" id="mitabla">
          <thead>
          <center><a href="registrer.html" class="btn btn-primary">Nuevo Registro</a></center>
          <?php         
          include "conexion.php";
          include "eliminar_persona.php";
          ?>
            <tr class="table-dark">
              <th scope = "col">Nombres</th>
              <th scope = "col">Apellido</th>
              <th scope = "col">Usuario</th>
              <th scope = "col">Contraseña</th>
              <th scope = "col">Teléfono</th>
              <th scope = "col">Dirección</th>
              <th scope = "col">Ciudad</th>
              <th scope = "col">Municipio</th>
              <th scope = "col">CP</th>
              <th scope = "col"></th>
            </tr>
          </thead>
  
          <tbody class="table-success">
            <?php 
             
              $sql = $conexion->query("select * from userspharmacy");
              while($datos=$sql->fetch_object()) { ?>

              <tr>
                <td><?= $datos-> nombrec?></td>
                <td><?= $datos-> apellidos?></td>
                <td><?= $datos-> usuario?></td>
                <td><?= $datos-> contrasena?></td>
                <td><?= $datos-> telefono?></td>
                <td><?= $datos-> direccion?></td>
                <td><?= $datos-> ciudad?></td>
                <td><?= $datos-> municipio?></td>
                <td><?= $datos-> cp?></td>
                <td>
                  <a href="updateusers.php?id=<?=$datos-> id_user?>" class="btn btn-small btn-warning"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAP5JREFUSEvFlf0VgjAMxMMmuomO4iSMopvoKG6i/HyEV0LTD0qf/adQwl3ukraDdB5DZ3w5iuAkIhcRediELQFB9ymQH1LjOgG+5oDnDM7rW0T4xvwbliAM9ghi4ApIYjyfPYKPQxwj02QUEHDWmG9ql1VQSuDZoutNBGHmKFNbUEINd1sEEA0QgoS2aJEX/2NF9iyKgWtdbC1W9SqpQS04CrWFN21qFXjg3jrgKFoSzymIyU8p2licIyhVpL43EaQybyYIO2PV52aL71agOClwYqoJaq+L/xOUHNc5VWwyjvTofcBGGYMLJAdmv1MjTlJ3J9cCZuOPupNdou4EX5hRUxlWng/uAAAAAElFTkSuQmCC"/></a>
                  <a href="eliminar_persona.php?id=<?=$datos-> id_user?>"  class="btn btn-small btn-danger"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAIJJREFUSEtjZKAxYKSx+QzEWODAwMCwH4dDGoHiDfgcScgCfIaDzH3AwMCQyMDAcACXJegW/KdSkMHNpbsFVPIAwhhccUBuUGGYN2oBepyNBhHBVDwaRKNBhAgBmpdFoBoMVNmQAkCVjiPBrA1VADK8ngRLcNZshKpMUnyAVS3NLQAA6kwZGR1E8YsAAAAASUVORK5CYII="/></a>
                </td>
              </tr>
             <?php }
            ?>
              
  
  
  
          </tbody>
        </table>
      </div>
          
         
      </table>
  
    
  </div>
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




<script src="js/app.js"></script>
</html>
