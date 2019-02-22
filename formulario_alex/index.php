<html>
<head>
  <title>Panel de Control</title>
</head>
<body>
<meta charset="utf-8" /><script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" rel="stylesheet" /><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script><script src="https://code.jquery.com/jquery-3.2.1.min.js"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <CENTER><td colspan="2" align="center"><h1>Opciones</h1></td></CENTER>
  <table align="center" width="225" cellspacing="2" cellpadding="2" border="0">
   

    <tr>
      <td><form action="mainConsult.php" method="POST">
        <input type="Submit" value="Consultar ideas">
       
        <input type="hidden" name="table" value="ideas">
        </form></td>
    </tr>

    <tr>
      <td><form action="mainAdd.php" method="POST">
        <input type="Submit" value="Añadir ideas">
       
        <input type="hidden" name="table" value="ideas">
        </form></td>
    </tr>

    <tr>
      <td><form action="mainErase.php" method="POST">
        <input type="Submit" value="Eliminar ideas">
        
        <input type="hidden" name="table" value="ideas">
        </form></td>
    </tr>

  </table>







</form>
</div>

<div class="container" style="display: flex;justify-content:  center; margin-bottom: 30px;">
<div class="g-recaptcha" data-sitekey="6LdtiWoUAAAAAJz8Y6sMQqF2ahfDiSOUIretjdO6">&nbsp;</div>
</div>

</html>
