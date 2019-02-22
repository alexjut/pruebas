<html>
<head></head>
<meta charset="utf-8" /><script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" rel="stylesheet" /><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script><script src="https://code.jquery.com/jquery-3.2.1.min.js"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<BR>
  <body>
  <div class="container">
      <div class="row">
          <form action="index.php" method="POST" style="width: 100%">
            <center> 
           <a href="exportar_ecxel.php" target="_blank">Descaragar Ideas</a>
           
          </center> 
          </form>
      </div>
    </div>
    <?php
    
      $v_tabla=$_POST['table'];

      $conexion=pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=password");
      echo '<div class="container">
      <div class="row"><h1>';
      echo"Datos de la tabla $v_tabla";
      echo "</h1><BR></div></div>"; 
      $sql="select * from $v_tabla";
      $resultado_set = pg_query($conexion, $sql);
      if($v_tabla=="ideas"){
        echo '<div class="container" id="informacion"><div class="py-5 text-center">';
        echo '<table align="center" width="600" cellspacing="7" cellpadding="7" border="0" class="table table-bordered">';
        echo '<tr><td>Identificación</td><td>Idea</td><td>celualr</td><td>Empresa/Entidad/Sede Educativa</td><td>Telefono</td><td>Correo</td><td>Cargo</td><td>Nombre Persona</td></tr>';
        while($row=pg_fetch_array($resultado_set)){
            echo "<tr>";
            echo "<td>".$row["idea_id"] . "</td><td>" . $row["idea_nombre"] .  "</td><td>" . $row["idea_celular"]. "</td><td>" . $row["idea_entidad"] . "</td><td>" . $row["idea_telefono"]. "</td><td>" . $row["idea_correo"]. "</td><td>" . $row["idea_cargo"]. "</td><td>" . $row["idea_nombre_cliente"] . "</td>" ;
            echo "</tr>";
        }
        echo "</table>";
         echo "</div>";
          echo "</div>";
      };
     
      pg_close($conexion);
    ?>
    
    <div class="container">
      <div class="row">
          <form action="index.php" method="POST" style="width: 100%">
            <center> 
            <input type="Submit" value="Regresar" class=" btn btn-info btn-responsive  centrado">
           
          </center> 
          </form>
      </div>
    </div>
  </body>
</html>
