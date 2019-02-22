<?php
 require_once 'exel.php';

 activeREporoEror();
 nocli();
 

 require_once dirname(__FILE__) . '../Classes/PHPExcel.php';

 $objPHPExcel = new PHPExcel();

 $objPHPExcel->getProperties()->setCreator("cpe")
							 ->setLastModifiedBy("cpe")
							 ->setTitle("Office 2007 XLSX Test Document")
							 ->setSubject("Office 2007 XLSX Test Document")
							 ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
							 ->setKeywords("office 2007 openxml php")
                             ->setCategory("Test result file");


  $objPHPExcel->setActiveSheetIndex(0)
                             ->setCellValue('A1', 'Identificación')
                             ->setCellValue('B1', 'Idea')
                             ->setCellValue('C1', 'Celular')
                             ->setCellValue('D1', 'Empresa')
                             ->setCellValue('E1', '/Entidad/Sede Educativa')
                             ->setCellValue('F1', 'Telefono')
                             ->setCellValue('G1', 'Correo')
                             ->setCellValue('H1', 'Cargo')
                             ->setCellValue('I1', 'Nombre Persona');

    $conexion=pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=password");
    $sql="SELECT * FROM ideas";
    $resultado_set = pg_query($conexion, $sql);
    $i=2;
    while($row=pg_fetch_array($resultado_set))
    {
       $objPHPExcel->setActiveSheetIndex(0)
                             ->setCellValue("A$i", $row["idea_id"])
                             ->setCellValue("B$i", $row["idea_nombre"] )
                             ->setCellValue("C$i", $row["idea_celular"])
                             ->setCellValue("D$i", $row["idea_entidad"] )
                             ->setCellValue("E$i", $row["idea_telefono"])
                             ->setCellValue("F$i", $row["idea_correo"])
                             ->setCellValue("G$i", $row["idea_cargo"])
                             ->setCellValue("H$i", $row["idea_dir"])
                             ->setCellValue("I$i",$row["idea_nombre_cliente"]);
        $i++;
                 
    }        
    $objPHPExcel->getActiveSheet()->setTitle('Informe Ideas');

    $objPHPExcel->setActiveSheetIndex(0);

    getHeaders();

    
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
    $objWriter->save('php://output');
    exit;
                         
                            

                            