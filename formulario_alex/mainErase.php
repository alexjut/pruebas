<html>
<head>
<title>Eliminar Elemento</title>
<meta charset="utf-8" /><script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" rel="stylesheet" /><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script><script src="https://code.jquery.com/jquery-3.2.1.min.js"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
  <?php
   
    $v_tabla=$_POST['table'];
    echo 'Eliminar '.$v_tabla.'<br>
    <form method="POST" action="tryErase.php">
    Identificación: <input type="int" name="id">
    <br>
    <input type="submit" value="ok">
   
    <input type="hidden" name="table" value='.$v_tabla.'>
    </form>
    ';

  ?>



  <form action="index.php" method="POST">
    <input type="Submit" value="Regresar">
  
  </form>
</body>
<html>
