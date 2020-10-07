<?php session_start();

require '../Classes/PHPExcel/IOFactory.php';
require '../funciones.php';
require 'header.php';
require 'views/leer-excel-preguntas.view.php';

$conexion = conexion();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $carpeta_destino = 'excel/';
	$archivo_subido = $carpeta_destino . $_FILES['file']['name'];
	move_uploaded_file($_FILES['file']['tmp_name'], $archivo_subido);

    $nombreArchivo = $archivo_subido;

    $objPHPExcel = PHPEXCEL_IOFactory::load($nombreArchivo);

    $objPHPExcel->setActiveSheetIndex(0);

    $numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();

    $count = 0;
    echo '<br><br><div class="container border">';
    for ($i=2; $i <= $numRows ; $i++) { 
        $codigo = limpiarDatos($objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue());
        $curso = limpiarDatos($objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue());
        $pregunta =  limpiarDatos($objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue());
        $a =  limpiarDatos($objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue());
        $b =  limpiarDatos($objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue());
        $c =  limpiarDatos($objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue());
        $d =  limpiarDatos($objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue());
        $e =  limpiarDatos($objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue());
        $rpta =  limpiarDatos($objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue());

        $statement = $conexion->prepare('INSERT INTO preguntas (codigo,curso,texto,alt1,alt2,alt3,alt4,alt5,rpta) 
                                            VALUES (:codigo, :curso,:texto, :alt1,:alt2, :alt3,:alt4,:alt5,:rpta)');
        $statement->execute(array(
            ':codigo'=>utf8_decode($codigo),
            ':curso'=>utf8_decode($curso),
            ':texto'=>utf8_decode($pregunta),
            ':alt1'=>utf8_decode($a),
            ':alt2'=>utf8_decode($b), 
            ':alt3'=>utf8_decode($c), 
            ':alt4'=>utf8_decode($d),
            ':alt5'=>utf8_decode($e),
            ':rpta'=>utf8_decode($rpta)
        ));
        
        
        if ($statement->rowCount() > 0)
        {
            $count++; 
        }else{
            
            echo "<center>No se inserto el código : " . $codigo."</center>";
        } 
         
    }
    echo " <center><h4>------------------------------------------------------------</h4></center>";
    echo " <center><h4>Se insertaron $count registros :)  </h4></center>";
    echo '</div>';

}



?>