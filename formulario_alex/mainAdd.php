 <html>
<head>
<title>Añadir Elemento</title>
<meta charset="utf-8" /><script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" rel="stylesheet" /><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script><script src="https://code.jquery.com/jquery-3.2.1.min.js"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>
<body>
  <div >
    <img src="banners_idea.png" style="width: 100%;">
  </div>
  <?php
    
    ?>
  <div class="container" id="informacion">
        <div class="py-5 text-center">
          <p class="lead">“Las limitaciones solo habitan en nuestra mente. Pero si usamos nuestra imaginación, nuestras posibilidades son ilimitadas” (Jamie Paolinetti).
           En Computadores para Educar hemos dispuesto el siguiente formulario para todas tus ideas y aportes.
           <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;"> 
           </font>
          </font>
        </p>
        </div>
      
        <div class="col-md-12 mb-3">Los campos con (*) son requeridos</div>
          <form  class="needs-validation" id="pqr" method="post">
              <center><h1>Adicionar idea</h1></center>
              <table align="center" width="255" cellspacing="2" cellpadding="2" border="0">
      </form>

          <form method="POST" action="tryAdd.php">
            <div class="row">
                <div class="col-md-6 mb-3"><label for="lastName">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Idea(*)</font> 
                    </font> 
                  </label>
                  <textarea name="idea_nombre" class="form-control" id="description" placeholder="Escriba su requerimiento" required="" type="text"></textarea>
                </div>
                <div class="col-md-6 mb-3"><label for="lastName">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Nombre(*)</font>
                  </font> 
                  </label> <input name="idea_nombre_cliente"  class="form-control" id="name" placeholder="Nombre" required="" type="text" value="" />
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 mb-3"><label for="lastName">
                  <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Identificación(*)</font> 
                  </font> </label>
                  <input class="form-control" id="cedula" placeholder="Identificación" required="" type="number" />
               </div>
               <div class="col-md-6 mb-3"><label for="lastName">
                  <font style="vertical-align: inherit;">
                   <font style="vertical-align: inherit;">Correo(*)</font> 
                  </font> </label> 
                  <input name="idea_correo" class="form-control" id="mail" placeholder="Correo" required="" type="email" />
              </div>
           </div>

          <div class="row">
            <div class="col-md-6 mb-3"><label for="lastName"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Teléfono(*)</font> </font> </label> <input name="idea_telefono" class="form-control" id="phone" placeholder="Teléfono" required="required" type="number" /></div>

            <div class="col-md-6 mb-3"><label for="lastName"><font style="vertical-align: inherit;">Celular&nbsp;</font> </label> <input  name="idea_celular" class="form-control" id="fax" placeholder="Celular" type="number" /></div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3"><label for="lastName"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dirección (*)</font> </font> </label> <input name="idea_dir" class="form-control" id="dir" placeholder="Dirección" required="required" type="text" /></div>

            <div class="col-md-6 mb-3">
              <div style="width: 100%;">
                <label for="lastName">
                  <div style=" width: 50%;display: table-cell;">
                      <label>Departamento:</label> 
                         <select  class="form-control" id="estados" name="estado"> </select> 
                  </div>
                  <div style="width: 50%; display: table-cell;">
                      <label>Municipio:</label> 
                         <select class="form-control" id="city" name="municipio"> </select>
                          </label>
                  </div>
               
              </div>
          </div>
           </div>

           <div class="row">
              <div class="col-md-6 mb-3"><label for="lastName"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cargo/ocupación (*)</font> </font> </label> <input name="idea_cargo" class="form-control" id="cargo" placeholder="Docente" required="" type="text" /></div>

              <div class="col-md-6 mb-3"><label for="lastName">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Empresa / Entidad / Sede Educativa</font>  
                  </font> </label> 
                  <input class="form-control" id="entidad" placeholder="Empresa/Entidad" type="text" name="idea_entidad"/>
              </div>
           </div>

          <p><input id="verificacion" name="vehicle1" required="required" type="checkbox" />&nbsp; Acepto(*)&nbsp; &nbsp;&nbsp;He leído y acepto las políticas y condiciones de uso de Computadores para Educar <a href="http://www.computadoresparaeducar.gov.co/es/contactanos/politicas-y-condiciones-de-uso" target="_blank">Ver términos y condiciones</a></p>

          
              <input type="submit" value="Enviar" class="btn btn-primary btn-lg btn-block" id="idBoton" style="
                                                                                                                display: flex;
                                                                                                                width: 47%;
                                                                                                                justify-content: center;
                                                                                                                margin-left: 25%;
                                                                                                                margin-right: 25%;">
             
              <input type="hidden" name="table" value="ideas">
      </form>
  </div>
    
    <?php
    
    ?>

  <!--<form action="controlPanel.php" method="POST">
    <input type="Submit" value="Regresar" class="btn btn-primary btn-lg btn-block" id="idBoton">
   
  </form>-->
</body>
<script type="text/javascript">	
      $(document).ready(function() {
       $('#idBoton').click(function(){
      
         if($("#mail").val().indexOf('@', 0) == -1 || $("#mail").val().indexOf('.', 0) == -1 ) {
      
           
             alert('El correo electrónico introducido no es correcto.');
           
             return false;
         }
         
      
      
       else if ($('#verificacion').prop('checked') == false   ) {
            alert('Se debe aceptar Terminos y Condiciones' );
             
      }  
      
      
      else{    
            var order_name = $('#name').val();
            var order_cedula = $('#cedula').val();
            var order_mail = $('#mail').val();
            var order_phone = $('#phone').val();
            var order_fax = $('#fax').val();
            var order_dir = $('#dir').val();
            var order_city = $('#city').val();
            var order_cargo = $('#cargo').val();
            var order_description =  $('#description').val();  
      
            	var miBody={
            		"auth_key": "47b3b11cba6bc16e550a6f37a9abe960",
            		"entity_number" : "4006",
            		"contact_name" :order_name,
            		"contact_phone": order_phone,
            		"description" : order_description,
            		"contact_identification": order_cedula,
            		"contact_email":  order_mail,
            		"contact_phone":  order_phone,
            		"contact_fax": order_fax,
            		"contact_address": order_dir,
            		"city_name":  order_city,
            		"contact_position_name": order_cargo,
            		"description": order_description
               }
              
               console.log(miBody);      
      
      }
      
      });
      });
      
      
      // ID del Select Estados
      var estadosdom = $("#estados");
      // ID del Select Municipio
      var munidom = $("#city");
      
      
      for (estados = "34|;0|Amazonas;1|Antioquia;2|Arauca;3|Atl\u00e1ntico;4|Bol\u00edvar;5|Boyac\u00e1;6|Caldas;7|Caquet\u00e1;8|Casanare;9|Cauca;10|Cesar;11|Choc\u00f3;12|Cundinamarca;13|C\u00f3rdoba;14|Guain\u00eda;15|Guaviare;16|Huila;17|La Guajira;18|Magdalena;19|Meta;20|Nari\u00f1o;21|Norte de Santander;22|Putumayo;23|Quind\u00edo;24|Risaralda;25|San Andr\u00e9s y Providenci;26|Santander;27|Sucre;28|Tolima;29|Valle del Cauca;30|Vaup\u00e9s;31|Vichada;32|Bogota DC".split(";"), totalestados = 34, i = 0; i < totalestados; i++) {
      var data = estados[i].split("|");
      estadosdom.append('<option value="' + data[0] + '">' + data[1] + "</option>")
      };
      estadosdom.change(function() {
      estado = $(this).val();
      munidom.html("");
      if (0 == estado) var a = "1|Leticia;2|Puerto Nari\u00f1o".split(
                                 ";"
                         );
         else 1 ==
                 estado ?
                 a = [
                         "1|Abejorral",
      	"2|Abriaqu\u00ed",
      	"3|Alejandr\u00eda",
      	"4|Amag\u00e1",
      	"5|Amalfi",
      	"6|Andes",
      	"7|Angel\u00f3polis",
      	"8|Angostura",
      	"9|Anor\u00ed",
      	"10|Anz\u00e1",
      	"11|Apartad\u00f3",
      	"12|Arboletes",
      	"13|Argelia",
      	"14|Armenia",
      	"15|Barbosa",
      	"16|Bello",
      	"17|Belmira",
      	"18|Betania",
      	"19|Betulia",
      	"20|Brice\u00f1o",
      	"21|Buritic\u00e1",
      	"22|C\u00e1ceres",
      	"23|Caicedo",
      	"24|Caldas",
      	"25|Campamento",
      	"26|Ca\u00f1asgordas",
      	"27|Caracol\u00ed",
      	"28|Caramanta",
      	"29|Carepa",
      	"30|Carolina del Pr\u00edncipe",
      	"31|Caucasia",
      	"32|Chigorod\u00f3",
      	"33|Cisneros",
      	"34|Ciudad Bol\u00edvar",
      	"35|Cocorn\u00e1",
      	"36|Concepci\u00f3n",
      	"37|Concordia",
      	"38|Copacabana",
      	"39|Dabeiba",
      	"40|Donmat\u00edas",
      	"41|Eb\u00e9jico",
      	"42|El Bagre",
      	"43|El Carmen de Viboral",
      	"44|El Pe\u00f1ol",
      	"45|El Retiro",
      	"46|El Santuario",
      	"47|Entrerr\u00edos",
      	"48|Envigado",
      	"49|Fredonia",
      	"50|Frontino",
      	"51|Giraldo",
      	"52|Girardota",
      	"53|G\u00f3mez Plata",
      	"54|Granada",
      	"55|Guadalupe",
      	"56|Guarne",
      	"57|Guatap\u00e9",
      	"58|Heliconia",
      	"59|Hispania",
      	"60|Itag\u00fc\u00ed",
      	"61|Ituango",
      	"62|Jard\u00edn",
      	"63|Jeric\u00f3",
      	"64|La Ceja",
      	"65|La Estrella",
      	"66|La Pintada",
      	"67|La Uni\u00f3n",
      	"68|Liborina",
      	"69|Maceo",
      	"70|Marinilla",
      	"71|Medell\u00edn",
      	"72|Montebello",
      	"73|Murind\u00f3",
      	"74|Mutat\u00e1",
      	"75|Nari\u00f1o",
      	"76|Nech\u00ed",
      	"77|Necocl\u00ed",
      	"78|Olaya",
      	"79|Peque",
      	"80|Pueblorrico",
      	"81|Puerto Berr\u00edo",
      	"82|Puerto Nare",
      	"83|Puerto Triunfo",
      	"84|Remedios",
      	"85|Rionegro",
      	"86|Sabanalarga",
      	"87|Sabaneta",
      	"88|Salgar",
      	"89|San Andr\u00e9s de Cuerquia",
      	"90|San Carlos",
      	"91|San Francisco",
      	"92|San Jer\u00f3nimo",
      	"93|San Jos\u00e9 de la Monta\u00f1a",
      	"94|San Juan de Urab\u00e1",
      	"95|San Luis",
      	"96|San Pedro de Urab\u00e1",
      	"97|San Pedro de los Milagros",
      	"98|San Rafael",
      	"99|San Roque",
      	"100|San Vicente",
      	"101|Santa B\u00e1rbara",
      	"102|Santa Fe de Antioquia",
      	"103|Santa Rosa de Osos",
      	"104|Santo Domingo",
      	"105|Segovia",
      	"106|Sons\u00f3n",
      	"107|Sopetr\u00e1n",
      	"108|T\u00e1mesis",
      	"109|Taraz\u00e1",
      	"110|Tarso",
      	"111|Titirib\u00ed",
      	"112|Toledo",
      	"113|Turbo",
      	"114|Uramita",
      	"115|Urrao",
      	"116|Valdivia",
      	"117|Valpara\u00edso",
      	"118|Vegach\u00ed",
      	"119|Venecia",
      	"120|Vig\u00eda del Fuerte",
      	"121|Yal\u00ed",
      	"122|Yarumal",
      	"123|Yolomb\u00f3",
      	"124|Yond\u00f3",
      	"125|Zaragoza"
      
                 ] : 2 ==
                 estado ?
                 a = [
                         "1|Arauca",
      	"2|Arauquita",
      	"3|Cravo Norte",
      	"4|Fortul",
      	"5|Puerto Rond\u00f3n",
      	"6|Saravena",
      	"7|Tame"
      
                 ] : 3 ==
                 estado ?
                 a = [
                     "1|Baranoa",
      "2|Barranquilla",
      "3|Campo de la Cruz",
      "4|Candelaria",
      "5|Galapa",
      "6|Juan de Acosta",
      "7|Luruaco",
      "8|Malambo",
      "9|Manat\u00ed",
      "10|Palmar de Varela",
      "11|Pioj\u00f3",
      "12|Polonuevo",
      "13|Ponedera",
      "14|Puerto Colombia",
      "15|Repel\u00f3n",
      "16|Sabanagrande",
      "17|Sabanalarga",
      "18|Santa Luc\u00eda",
      "19|Santo Tom\u00e1s",
      "20|Soledad",
      "21|Su\u00e1n",
      "22|Tubar\u00e1",
      "23|Usiacur\u00ed"
      
                 ] : 4 ==
                 estado ?
                 a =
                 [ "1|Ach\u00ed",
      	"2|Altos del Rosario",
      	"3|Arenal",
      	"4|Arjona",
      	"5|Arroyohondo",
      	"6|Barranco de Loba",
      	"7|Brazuelo de Papayal",
      	"8|Calamar",
      	"9|Cantagallo",
      	"10|Cartagena de Indias",
      	"11|Cicuco",
      	"12|Clemencia",
      	"13|C\u00f3rdoba",
      	"14|El Carmen de Bol\u00edvar",
      	"15|El Guamo",
      	"16|El Pe\u00f1\u00f3n",
      	"17|Hatillo de Loba",
      	"18|Magangu\u00e9",
      	"19|Mahates",
      	"20|Margarita",
      	"21|Mar\u00eda la Baja",
      	"22|Momp\u00f3s",
      	"23|Montecristo",
      	"24|Morales",
      	"25|Noros\u00ed",
      	"26|Pinillos",
      	"27|Regidor",
      	"28|R\u00edo Viejo",
      	"29|San Crist\u00f3bal",
      	"30|San Estanislao",
      	"31|San Fernando",
      	"32|San Jacinto del Cauca",
      	"33|San Jacinto",
      	"34|San Juan Nepomuceno",
      	"35|San Mart\u00edn de Loba",
      	"36|San Pablo",
      	"37|Santa Catalina",
      	"38|Santa Rosa",
      	"39|Santa Rosa del Sur",
      	"40|Simit\u00ed",
      	"41|Soplaviento",
      	"42|Talaigua Nuevo",
      	"43|Tiquisio",
      	"44|Turbaco",
      	"45|Turban\u00e1",
      	"46|Villanueva",
      	"47|Zambrano"
      
                 ] : 5 ==
                 estado ?
                 a = [
                       "1|Almeida",
      		"2|Aquitania",
      	"3|Arcabuco",
      	"4|Bel\u00e9n",
      	"5|Berbeo",
      	"6|Bet\u00e9itiva",
      	"7|Boavita",
      	"8|Boyac\u00e1",
      	"9|Brice\u00f1o",
      	"10|Buenavista",
      	"11|Busbanz\u00e1",
      	"12|Caldas",
      	"13|Campohermoso",
      	"14|Cerinza",
      	"15|Chinavita",
      	"16|Chiquinquir\u00e1",
      	"17|Ch\u00edquiza",
      	"18|Chiscas",
      	"19|Chita",
      	"20|Chitaraque",
      	"21|Chivat\u00e1",
      	"22|Chivor",
      	"23|Ci\u00e9nega",
      	"24|C\u00f3mbita",
      	"25|Coper",
      	"26|Corrales",
      	"27|Covarach\u00eda",
      	"28|Cubar\u00e1",
      	"29|Cucaita",
      	"30|Cu\u00edtiva",
      	"31|Duitama",
      	"32|El Cocuy",
      	"33|El Espino",
      	"34|Firavitoba",
      	"35|Floresta",
      	"36|Gachantiv\u00e1",
      	"37|G\u00e1meza",
      	"38|Garagoa",
      	"39|Guacamayas",
      	"40|Guateque",
      	"41|Guayat\u00e1",
      	"42|G\u00fcic\u00e1n",
      	"43|Iza",
      	"44|Jenesano",
      	"45|Jeric\u00f3",
      	"46|La Capilla",
      	"47|La Uvita",
      	"48|La Victoria",
      	"49|Labranzagrande",
      	"50|Macanal",
      	"51|Marip\u00ed",
      	"52|Miraflores",
      	"53|Mongua",
      	"54|Mongu\u00ed",
      	"55|Moniquir\u00e1",
      	"56|Motavita",
      	"57|Muzo",
      	"58|Nobsa",
      	"59|Nuevo Col\u00f3n",
      	"60|Oicat\u00e1",
      	"61|Otanche",
      	"62|Pachavita",
      	"63|P\u00e1ez",
      	"64|Paipa",
      	"65|Pajarito",
      	"66|Panqueba",
      	"67|Pauna",
      	"68|Paya",
      	"69|Paz del R\u00edo",
      	"70|Pesca",
      	"71|Pisba",
      	"72|Puerto Boyac\u00e1",
      	"73|Qu\u00edpama",
      	"74|Ramiriqu\u00ed",
      	"75|R\u00e1quira",
      	"76|Rond\u00f3n",
      	"77|Saboy\u00e1",
      	"78|S\u00e1chica",
      	"79|Samac\u00e1",
      	"80|San Eduardo",
      	"81|San Jos\u00e9 de Pare",
      	"82|San Luis de Gaceno",
      	"83|San Mateo",
      	"84|San Miguel de Sema",
      			"85|San Pablo de Borbur",
      			"86|Santa Mar\u00eda",
      			"87|Santa Rosa de Viterbo",
      			"88|Santa Sof\u00eda",
      			"89|Santana",
      			"90|Sativanorte",
      			"91|Sativasur",
      			"92|Siachoque",
      			"93|Soat\u00e1",
      			"94|Socha",
      			"95|Socot\u00e1",
      			"96|Sogamoso",
      			"97|Somondoco",
      			"98|Sora",
      			"99|Sorac\u00e1",
      			"100|Sotaquir\u00e1",
      			"101|Susac\u00f3n",
      			"102|Sutamarch\u00e1n",
      			"103|Sutatenza",
      			"104|Tasco",
      			"105|Tenza",
      			"106|Tiban\u00e1",
      			"107|Tibasosa",
      			"108|Tinjac\u00e1",
      			"109|Tipacoque",
      			"110|Toca",
      			"111|Tog\u00fc\u00ed",
      			"112|T\u00f3paga",
      			"113|Tota",
      			"114|Tunja",
      			"115|Tunungu\u00e1",
      			"116|Turmequ\u00e9",
      			"117|Tuta",
      			"118|Tutaz\u00e1",
      			"119|\u00dambita",
      			"120|Ventaquemada",
      			"121|Villa de Leyva",
      			"122|Viracach\u00e1",
      			"123|Zetaquira"
                 ] : 6 ==
                 estado ?
                 a =
                 "1|Aguadas;2|Anserma;3|Aranzazu;4|Belalc\u00e1zar;5|Chinchin\u00e1;6|Filadelfia;7|La Dorada;8|La Merced;9|Manizales;10|Manzanares;11|Marmato;12|Marquetalia;13|Marulanda;14|Neira;15|Norcasia;16|P\u00e1cora;17|Palestina;18|Pensilvania;19|Riosucio;20|Risaralda;21|Salamina;22|Saman\u00e1;23|San Jos\u00e9;24|Sup\u00eda;25|Victoria;26|Villamar\u00eda;27|Viterbo"
      
                 .split(
                         ";"
                 ) : 7 ==
                 estado ?
                 a =
                 "1|Albania;2|Bel\u00e9n de los Andaqu\u00edes;3|Cartagena del Chair\u00e1;4|Curillo;5|El Doncello;6|El Paujil;7|Florencia;8|La Monta\u00f1ita;9|Mil\u00e1n;10|Morelia;11|Puerto Rico;12|San Jos\u00e9 del Fragua;13|San Vicente del Cagu\u00e1n;15|Solita;15|Solita;16|Valpara\u00edso"
      
                 .split(
                         ";"
                 ) : 8 ==
                 estado ?
                 a =
                 "1|Aguazul;2|Ch\u00e1meza;3|Hato Corozal;4|La Salina;5|Man\u00ed;6|Monterrey;7|Nunch\u00eda;8|Orocu\u00e9;9|Paz de Ariporo;10|Pore;11|Recetor;12|Sabanalarga;13|S\u00e1cama;14|San Luis de Palenque;15|T\u00e1mara;16|Tauramena;17|Trinidad;18|Villanueva;19|Yopal"
      
                 .split(
                         ";"
                 ) : 9 ==
                 estado ?
                 a =
                 "1|Almaguer;3|Balboa;3|Balboa;4|Bol\u00edvar;5|Buenos Aires;6|Cajib\u00edo;7|Caldono;8|Caloto;9|Corinto;10|El Tambo;11|Florencia;12|Guachen\u00e9;13|Guap\u00ed;14|Inz\u00e1;15|Jambal\u00f3;16|La Sierra;17|La Vega;18|L\u00f3pez de Micay;19|Mercaderes;20|Miranda;21|Morales;22|Padilla;23|P\u00e1ez;24|Pat\u00eda;25|Piamonte;26|Piendam\u00f3;27|Popay\u00e1n;28|Puerto Tejada;29|Purac\u00e9;30|Rosas;31|San Sebasti\u00e1n;32|Santa Rosa;33|Santander de Quilichao;34|Silvia;35|Sotar\u00e1;36|Su\u00e1rez;37|Sucre;38|Timb\u00edo;39|Timbiqu\u00ed;40|Torib\u00edo;42|Villa Rica"
      
                 .split(
                         ";"
                 ) : 10 ==
                 estado ?
                 a =
                 "1|Aguachica;2|Agust\u00edn Codazzi;3|Astrea;4|Becerril;5|Bosconia;6|Chimichagua;7|Chiriguan\u00e1;8|Curuman\u00ed;9|El Copey;10|El Paso;11|Gamarra;12|Gonz\u00e1lez;13|La Gloria (Cesar);14|La Jagua de Ibirico;15|La Paz;16|Manaure Balc\u00f3n del Cesar;17|Pailitas;18|Pelaya;19|Pueblo Bello;20|R\u00edo de Oro;21|San Alberto;22|San Diego;23|San Mart\u00edn;24|Tamalameque;25|Valledupar"
      
                 .split(
                         ";"
                 ) : 11 ==
                 estado ?
                 a =
                 "1|Acand\u00ed;2|Alto Baud\u00f3;3|Bagad\u00f3;4|Bah\u00eda Solano;5|Bajo Baud\u00f3;6|Bojay\u00e1;7|Cant\u00f3n de San Pablo;8|C\u00e9rtegui;9|Condoto;10|El Atrato;11|El Carmen de Atrato;12|El Carmen del Dari\u00e9n;13|Istmina;14|Jurad\u00f3;15|Litoral de San Juan;16|Llor\u00f3;17|Medio Atrato;18|Medio Baud\u00f3;19|Medio San Juan;20|N\u00f3vita;21|Nuqu\u00ed;22|Quibd\u00f3;23|R\u00edo Ir\u00f3;24|R\u00edo Quito;25|Riosucio;26|San Jos\u00e9 del Palmar;27|Sip\u00ed;28|Tad\u00f3;29|Uni\u00f3n Panamericana;30|Ungu\u00eda"
      
                 .split(
                         ";"
                 ) : 12 ==
                 estado ?
                 a =
                 "1|Agua de Dios;2|Alb\u00e1n;3|Anapoima;4|Anolaima;5|Apulo;6|Arbel\u00e1ez;7|Beltr\u00e1n;8|Bituima;9|Bogot\u00e1;10|Bojac\u00e1;11|Cabrera;12|Cachipay;13|Cajic\u00e1;14|Caparrap\u00ed;15|C\u00e1queza;16|Carmen de Carupa;17|Chaguan\u00ed;18|Ch\u00eda;19|Chipaque;20|Choach\u00ed;21|Chocont\u00e1;22|Cogua;23|Cota;24|Cucunub\u00e1;25|El Colegio;26|El Pe\u00f1\u00f3n;27|El Rosal;28|Facatativ\u00e1;29|F\u00f3meque;30|Fosca;31|Funza;32|F\u00faquene;33|Fusagasug\u00e1;34|Gachal\u00e1;35|Gachancip\u00e1;36|Gachet\u00e1;37|Gama;38|Girardot;40|Guachet\u00e1;40|Guachet\u00e1;41|Guaduas;42|Guasca;43|Guataqu\u00ed;44|Guatavita;45|Guayabal de S\u00edquima;46|Guayabetal;47|Guti\u00e9rrez;48|Jerusal\u00e9n;49|Jun\u00edn;50|La Calera;51|La Mesa;52|La Palma;53|La Pe\u00f1a;54|La Vega;55|Lenguazaque;56|Machet\u00e1;57|Madrid;58|Manta;59|Medina;60|Mosquera;61|Nari\u00f1o;62|Nemoc\u00f3n;63|Nilo;64|Nimaima;65|Nocaima;66|Pacho;67|Paime;68|Pandi;69|Paratebueno;70|Pasca;71|Puerto Salgar;72|Pul\u00ed;73|Quebradanegra;74|Quetame;75|Quipile;76|Ricaurte;77|San Antonio del Tequendama;78|San Bernardo;79|San Cayetano;80|San Francisco;81|San Juan de Rioseco;82|Sasaima;83|Sesquil\u00e9;84|Sibat\u00e9;85|Silvania;86|Simijaca;87|Soacha;88|Sop\u00f3;89|Subachoque;90|Suesca;91|Supat\u00e1;93|Sutatausa;93|Sutatausa;94|Tabio;95|Tausa;96|Tena;97|Tenjo;98|Tibacuy;99|Tibirita;100|Tocaima;101|Tocancip\u00e1;102|Topaip\u00ed;103|Ubal\u00e1;104|Ubaque;105|Ubat\u00e9;106|Une;107|\u00datica;108|Venecia;109|Vergara;110|Vian\u00ed;111|Villag\u00f3mez;112|Villapinz\u00f3n;113|Villeta;114|Viot\u00e1;115|Yacop\u00ed;116|Zipac\u00f3n;117|Zipaquir\u00e1"
      
                 .split(
                         ";"
                 ) : 13 ==
                 estado ?
                 a =
                 "1|Ayapel;2|Buenavista;3|Canalete;4|Ceret\u00e9;5|Chim\u00e1;6|Chin\u00fa;7|Ci\u00e9naga de Oro;8|Cotorra;9|La Apartada;10|Lorica;11|Los C\u00f3rdobas;12|Momil;13|Montel\u00edbano;14|Monter\u00eda;15|Mo\u00f1itos;16|Planeta Rica;17|Pueblo Nuevo;18|Puerto Escondido;19|Puerto Libertador;20|Pur\u00edsima;21|Sahag\u00fan;22|San Andr\u00e9s de Sotavento;23|San Antero;24|San Bernardo del Viento;25|San Carlos;26|San Jos\u00e9 de Ur\u00e9;27|San Pelayo;28|Tierralta;29|Tuch\u00edn;30|Valencia"
      
                 .split(
                         ";"
                 ) : 14 ==
                 estado ?
                 a =
                 "1|In\u00edrida"
      
                 .split(
                         ";"
                 ) : 15 ==
                 estado ?
                 a =
                 "1|Calamar;2|El Retorno;3|Miraflores;4|San Jos\u00e9 del Guaviare"
      
                 .split(
                         ";"
                 ) : 16 ==
                 estado ?
                 a =
                 "1|Acevedo;2|Agrado;3|Aipe;4|Algeciras;5|Altamira;6|Baraya;7|Campoalegre;8|Colombia;9|El Pital;10|El\u00edas;11|Garz\u00f3n;12|Gigante;13|Guadalupe;14|Hobo;15|\u00cdquira;16|Isnos;17|La Argentina;18|La Plata;19|N\u00e1taga;20|Neiva;21|Oporapa;22|Paicol;23|Palermo;24|Palestina;25|Pitalito;26|Rivera;27|Saladoblanco;28|San Agust\u00edn;29|Santa Mar\u00eda;30|Suaza;31|Tarqui;32|Tello;33|Teruel;34|Tesalia;35|Timan\u00e1;36|Villavieja;37|Yaguar\u00e1"
      
                 .split(
                         ";"
                 ) : 17 ==
                 estado ?
                 a =
                 "1|Albania;2|Barrancas;3|Dibulla;4|Distracci\u00f3n;5|El Molino;6|Fonseca;7|Hatonuevo;8|La Jagua del Pilar;9|Maicao;10|Manaure;11|Riohacha;12|San Juan del Cesar;13|Uribia;14|Urumita;15|Villanueva"
      
                 .split(
                         ";"
                 ) : 18 ==
                 estado ?
                 a =
                 "1|Algarrobo;2|Aracataca;3|Ariguan\u00ed;4|Cerro de San Antonio;5|Chibolo;6|Chibolo;7|Ci\u00e9naga;8|Concordia;9|El Banco;10|El Pi\u00f1\u00f3n;11|El Ret\u00e9n;12|Fundaci\u00f3n;13|Guamal;14|Nueva Granada;15|Pedraza;16|Piji\u00f1o del Carmen;17|Pivijay;18|Plato;19|Pueblo Viejo;20|Remolino;21|Sabanas de San \u00c1ngel;22|Salamina;23|San Sebasti\u00e1n de Buenavista;24|San Zen\u00f3n;25|Santa Ana;26|Santa B\u00e1rbara de Pinto;27|Santa Marta;28|Sitionuevo;29|Tenerife;30|Zapay\u00e1n;31|Zona Bananera"
      
                 .split(
                         ";"
                 ) : 19 ==
                 estado ?
                 a =
                 "1|Acac\u00edas;2|Barranca de Up\u00eda;3|Cabuyaro;4|Castilla la Nueva;5|Cubarral;6|Cumaral;7|El Calvario;8|El Castillo;9|El Dorado;10|Fuente de Oro;11|Granada;12|Guamal;13|La Macarena;14|La Uribe;15|Lejan\u00edas;16|Mapirip\u00e1n;17|Mesetas;18|Puerto Concordia;19|Puerto Gait\u00e1n;20|Puerto Lleras;21|Puerto L\u00f3pez;22|Puerto Rico;23|Restrepo;24|San Carlos de Guaroa;25|San Juan de Arama;26|San Juanito;27|San Mart\u00edn;28|Villavicencio;29|Vista Hermosa"
      
                 .split(
                         ";"
                 ) : 20 ==
                 estado ?
                 a =
                 "1|Aldana;2|Ancuy\u00e1;3|Arboleda;4|Barbacoas;5|Bel\u00e9n;6|Buesaco;7|Chachag\u00fc\u00ed;8|Col\u00f3n;9|Consac\u00e1;10|Contadero;11|C\u00f3rdoba;12|Cuaspud;13|Cumbal;14|Cumbitara;15|El Charco;16|El Pe\u00f1ol;17|El Rosario;18|El Tabl\u00f3n;19|El Tambo;20|Francisco Pizarro;21|Funes;22|Guachucal;23|Guaitarilla;24|Gualmat\u00e1n;25|Iles;26|Imu\u00e9s;27|Ipiales;28|La Cruz;29|La Florida;30|La Llanada;31|La Tola;32|La Uni\u00f3n;33|Leiva;34|Linares;35|Los Andes;36|Mag\u00fc\u00ed Pay\u00e1n;37|Mallama;38|Mosquera;39|Nari\u00f1o;40|Olaya Herrera;41|Ospina;42|Pasto;43|Policarpa;44|Potos\u00ed;45|Providencia;46|Puerres;47|Pupiales;48|Ricaurte;49|Roberto Pay\u00e1n;50|Samaniego;51|San Bernardo;52|San Jos\u00e9 de Alb\u00e1n;53|San Lorenzo;54|San Pablo;55|San Pedro de Cartago;56|Sandon\u00e1;57|Santa B\u00e1rbara;58|Santacruz;59|Sapuyes;60|Taminango;61|Tangua;62|Tumaco;63|T\u00faquerres;64|Yacuanquer"
      
                 .split(
                         ";"
                 ) : 21 ==
                 estado ?
                 a =
                 "1|\u00c1brego;2|Arboledas;3|Bochalema;4|Bucarasica;5|C\u00e1chira;6|C\u00e1cota;7|Chin\u00e1cota;8|Chitag\u00e1;9|Convenci\u00f3n;10|C\u00facuta;11|Cucutilla;12|Duran\u00eda;13|El Carmen;14|El Tarra;15|El Zulia;16|Gramalote;17|Hacar\u00ed;18|Herr\u00e1n;19|La Esperanza;20|La Playa de Bel\u00e9n;21|Labateca;22|Los Patios;23|Lourdes;24|Mutiscua;25|Oca\u00f1a;26|Pamplona;27|Pamplonita;28|Puerto Santander;29|Ragonvalia;30|Salazar de Las Palmas;31|San Calixto;32|San Cayetano;33|Santiago;34|Santo Domingo de Silos;35|Sardinata;36|Teorama;37|Tib\u00fa;38|Toledo;39|Villa Caro;40|Villa del Rosario"
      
                 .split(
                         ";"
                 ) : 22 ==
                 estado ?
                 a =
                 "1|Col\u00f3n;2|Mocoa;3|Orito;4|Puerto As\u00eds;5|Puerto Caicedo;6|Puerto Guzm\u00e1n;7|Puerto Legu\u00edzamo;8|San Francisco;9|San Miguel;10|Santiago;11|Sibundoy;12|Valle del Guamuez;13|Villagarz\u00f3n"
      
                 .split(
                         ";"
                 ) : 23 ==
                 estado ?
                 a =
                 "1|Armenia;2|Buenavista;3|Calarc\u00e1;4|Circasia;5|C\u00f3rdoba;6|Filandia;7|G\u00e9nova;8|La Tebaida;9|Montenegro;10|Pijao;11|Quimbaya;12|Salento"
      
                 .split(
                         ";"
                 ) : 24 ==
                 estado ?
                 a =
                 "1|Ap\u00eda;2|Balboa;3|Bel\u00e9n de Umbr\u00eda;4|Dosquebradas;5|Gu\u00e1tica;6|La Celia;7|La Virginia;8|Marsella;9|Mistrat\u00f3;10|Pereira;11|Pueblo Rico;12|Quinch\u00eda;13|Santa Rosa de Cabal;14|Santuario"
      
                 .split(
                         ";"
                 ) : 25 ==
                 estado ?
                 a =
                 "1|Providencia y Santa Catalina Islas;2|San Andr\u00e9s"
      
                 .split(
                         ";"
                 ) : 26 ==
                 estado ?
                 a =
                 "1|Aguada;2|Albania;3|Aratoca;4|Barbosa;5|Barichara;6|Barrancabermeja;7|Betulia;8|Bol\u00edvar;9|Bucaramanga;10|Cabrera;11|California;12|Capitanejo;13|Carcas\u00ed;14|Cepit\u00e1;15|Cerrito;16|Charal\u00e1;17|Charta;18|Chima;19|Chipat\u00e1;20|Cimitarra;21|Concepci\u00f3n;22|Confines;23|Contrataci\u00f3n;24|Coromoro;25|Curit\u00ed;26|El Carmen de Chucur\u00ed;27|El Guacamayo;28|El Pe\u00f1\u00f3n;29|El Play\u00f3n;30|El Socorro;31|Encino;32|Enciso;33|Flori\u00e1n;34|Floridablanca;35|Gal\u00e1n;36|G\u00e1mbita;37|Gir\u00f3n;38|Guaca;39|Guadalupe;40|Guapot\u00e1;41|Guavat\u00e1;42|G\u00fcepsa;43|Hato;44|Jes\u00fas Mar\u00eda;45|Jord\u00e1n;46|La Belleza;47|La Paz;48|Land\u00e1zuri;49|Lebrija;50|Los Santos;51|Macaravita;52|M\u00e1laga;53|Matanza;54|Mogotes;55|Molagavita;56|Ocamonte;57|Oiba;58|Onzaga;59|Palmar;60|Palmas del Socorro;61|P\u00e1ramo;62|Piedecuesta;63|Pinchote;64|Puente Nacional;65|Puerto Parra;66|Puerto Wilches;67|Rionegro;68|Sabana de Torres;69|San Andr\u00e9s;70|San Benito;71|San Gil;72|San Joaqu\u00edn;73|San Jos\u00e9 de Miranda;74|San Miguel;75|San Vicente de Chucur\u00ed;76|Santa B\u00e1rbara;77|Santa Helena del Op\u00f3n;78|Simacota;79|Suaita;80|Sucre;81|Surat\u00e1;82|Tona;83|Valle de San Jos\u00e9;84|V\u00e9lez;85|Vetas;86|Villanueva;87|Zapatoca"
      
                 .split(
                         ";"
                 ) : 27 ==
                 estado ?
                 a =
                 "1|Buenavista;2|Caimito;3|Chal\u00e1n;4|Colos\u00f3;5|Corozal;6|Cove\u00f1as;7|El Roble;8|Galeras;9|Guaranda;10|La Uni\u00f3n;11|Los Palmitos;12|Majagual;13|Morroa;14|Ovejas;15|Sampu\u00e9s;16|San Antonio de Palmito;17|San Benito Abad;18|San Juan de Betulia;19|San Marcos;20|San Onofre;21|San Pedro;22|Sinc\u00e9;23|Sincelejo;24|Sucre;25|Tol\u00fa;26|Tol\u00fa Viejo"
      
                 .split(
                         ";"
                 ) : 28 ==
                 estado ?
                 a =
                 "1|Alpujarra;2|Alvarado;3|Ambalema;4|Anzo\u00e1tegui;5|Armero;6|Ataco;7|Cajamarca;8|Carmen de Apical\u00e1;9|Casabianca;10|Chaparral;11|Coello;12|Coyaima;13|Cunday;14|Dolores;15|El Espinal;16|Fal\u00e1n;17|Flandes;18|Fresno;19|Guamo;20|Herveo;21|Honda;22|Ibagu\u00e9;23|Icononzo;24|L\u00e9rida;25|L\u00edbano;26|Mariquita;27|Melgar;28|Murillo;29|Natagaima;30|Ortega;31|Palocabildo;32|Piedras;33|Planadas;34|Prado;35|Purificaci\u00f3n;36|Rioblanco;37|Roncesvalles;38|Rovira;39|Salda\u00f1a;40|San Antonio;41|San Luis;42|Santa Isabel;43|Su\u00e1rez;44|Valle de San Juan;45|Venadillo;46|Villahermosa;47|Villarrica"
      
                 .split(
                         ";"
                 ) : 29 ==
                 estado ?
                 a =
                 "1|Alcal\u00e1;2|Andaluc\u00eda;3|Ansermanuevo;4|Argelia;5|Bol\u00edvar;6|Buenaventura;7|Buga;8|Bugalagrande;9|Caicedonia;10|Cali;11|Calima;12|Candelaria;13|Cartago;14|Dagua;15|El \u00c1guila;16|El Cairo;17|El Cerrito;18|El Dovio;19|Florida;20|Ginebra;21|Guacar\u00ed;22|Jamund\u00ed;23|La Cumbre;24|La Uni\u00f3n;25|La Victoria;26|Obando;27|Palmira;28|Pradera;29|Restrepo;30|Riofr\u00edo;31|Roldanillo;32|San Pedro;33|Sevilla;34|Toro;35|Trujillo;36|Tulu\u00e1;37|Ulloa;38|Versalles;39|Vijes;40|Yotoco;41|Yumbo;42|Zarzal"
      
                 .split(
                         ";"
                 ) : 30 ==
                 estado ?
                 a =
                 "1|Carur\u00fa;2|Mit\u00fa;3|Taraira"
      
                 .split(
                         ";"
                 ) : 31 ==
                 estado ?
                 a =
                   "1|Cumaribo;2|La Primavera;3|Puerto Carre\u00f1o;4|Santa Rosal\u00eda"
      
                         .split(
                                 ";"
                    ): 32 ==
                 estado &&
                 (a =
                         "1|Bogotá"
                         .split(
                                 ";"
                         )
                 );
         for (var b = 0; b <
                 a.length; b++
         ) {
                 var c =
                         a[
                                 b
                         ]
                         .split(
                                 "|"
                         );
                 munidom
                         .append(
                                 '<option value="' +
                                 c[
                                         0
                                 ] +
                                 '">' +
                                 c[
                                         1
                                 ] +
                                 "</option>"
                         )
         }
      });
   </script><script src='https://www.google.com/recaptcha/api.js'></script></p>

<p><em>La respuesta a su requerimiento será enviada por correo electrónico o a la dirección de correspondencia indicada, por lo tanto, verifique que los datos que diligenció estén correctos.</em></p>

</html>
