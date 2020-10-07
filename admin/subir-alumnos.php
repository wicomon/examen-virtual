<?php session_start();

require '../Classes/PHPExcel/IOFactory.php';
require '../funciones.php';
require 'header.php';
require 'views/subir-alumnos.view.php';

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
        $a_paterno = limpiarDatos($objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue());
        $a_materno =  limpiarDatos($objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue());
        $nombre =  limpiarDatos($objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue());
        $dni =  limpiarDatos($objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue());

        $statement = $conexion->prepare('INSERT INTO alumnos (codigo,a_paterno,a_materno,nombre,dni) 
                                            VALUES (:codigo, :a_paterno,:a_materno, :nombre,:dni)');
        $statement->execute(array(
            ':codigo'=>utf8_decode($codigo),
            ':a_paterno'=>utf8_decode($a_paterno),
            ':a_materno'=>utf8_decode($a_materno),
            ':nombre'=>utf8_decode($nombre),
            ':dni'=>utf8_decode($dni)
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