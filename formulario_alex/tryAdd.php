<html>
  <head>
    <title>Inserción</title>
  </head>
<meta charset="utf-8" /><script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" rel="stylesheet" /><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script><script src="https://code.jquery.com/jquery-3.2.1.min.js"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <body>
    <?php
 
      $v_tabla=$_POST['table'];

      $conexion=pg_connect("host=localhost port=5432 dbname=postgres user='postgres' password='password'");

      if($v_tabla=="ideas"){
        $idea_nombre="'".$_POST['idea_nombre']."'";
        $idea_entidad="'".$_POST['idea_entidad']."'";
        $idea_celular="'".$_POST['idea_celular']."'";
        $idea_telefono="'".$_POST['idea_telefono']."'";
        $idea_correo="'".$_POST['idea_correo']."'";
        $idea_cargo="'".$_POST['idea_cargo']."'";
        $idea_nombre_cliente="'".$_POST['idea_nombre_cliente']."'";
        $estado="'".$_POST['estado']."'";
        $municipio="'".$_POST['municipio']."'";
        $idea_dir="'".$_POST['idea_dir']."'";
        $sql ="INSERT INTO public.ideas(idea_nombre, idea_celular, idea_entidad, idea_telefono, idea_correo, idea_cargo, idea_nombre_cliente, idea_departamento, idea_ciudad, idea_dir) 
              VALUES($idea_nombre, $idea_entidad, $idea_celular, $idea_telefono, $idea_correo, $idea_cargo, $idea_nombre_cliente, $estado, $municipio, $idea_dir)";
        $result = pg_Exec($conexion, $sql);
      };
  print_r($result);
    ?>  
   <div class="container">
     <div class="row">
      <h4></h4>
       <a  class="btn btn-success" href="http://localhost/bd_cpe/index.php">regresar a la pagina</a>
     </div>
   </div>
  </body>
</html>
