 <?php
  
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "pharmacy";
  
          // Crear conexión
          $conn = new mysqli($servername, $username, $password, $dbname);
  
          // Verificar conexión
          if ($conn->connect_error) {
              die("Conexión fallida: " . $conn->connect_error);
          }
  
          $sql = "SELECT * FROM userspharmacy";
          $result = $conn->query($sql);
  
          if ($result->num_rows > 0) {
              // Salida de datos por cada fila
              while($row = $result->fetch_assoc()) {
                  echo "<br>";
  
                  echo "<tr> 
                          <td>" . $row["nombrec"]. "</td>
                          <td>" . $row["apellidos"]. "</td>
                          <td>" . $row["usuario"]. "</td>
                          <td>" . $row["contrasena"]. "</td>
                          <td>" . $row["telefono"]. "</td>
                          <td>" . $row["direccion"]. "</td>
                          <td>" . $row["ciudad"]. "</td>
                          <td>" . $row["municipio"]. "</td>
                          <td>" . $row["cp"]. "</td>
                          <td>
                              <th>Editar</th>
                              <th>Eliminar</th>
                          </td>

                          <br>
                        </tr>";
                  
                 
              }
              
          } else {
              echo "<tr><td colspan='5'>No se encontraron resultados</td></tr>";
          }
          $conn->close();
          session_abort();
          ?>         
          