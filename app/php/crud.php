<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");
date_default_timezone_set('America/Mexico_City');

include_once 'conexion.php';

$objeto = new Conexion();
$conexion = $objeto->Conectar();


$_POST = json_decode(file_get_contents("php://input"), true);

$data= '';

$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : 4;
// $opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';


$id = (isset($_POST['id'])) ? $_POST['id'] : '';
$fechaIngre = (isset($_POST['fechaIngre'])) ? $_POST['fechaIngre'] : '';
$horaIngre = (isset($_POST['horaIngre'])) ? $_POST['horaIngre'] : '';
$ordenRepIngre = (isset($_POST['ordenRepIngre'])) ? $_POST['ordenRepIngre'] : '';
$gestorOperIngre = (isset($_POST['gestorOperIngre'])) ? $_POST['gestorOperIngre'] : '';
$numEcoIngre = (isset($_POST['numEcoIngre'])) ? $_POST['numEcoIngre'] : '';
$placasIngre = (isset($_POST['placasIngre'])) ? $_POST['placasIngre'] : '';
$tipoIngre = (isset($_POST['tipoIngre'])) ? $_POST['tipoIngre'] : '';
$anoIngre = (isset($_POST['anoIngre'])) ? $_POST['anoIngre'] : '';
$ramalIngre = (isset($_POST['ramalIngre'])) ? $_POST['ramalIngre'] : '';
$nomAccionistaIngre = (isset($_POST['nomAccionistaIngre'])) ? $_POST['nomAccionistaIngre'] : '';
$operaEntreUnidadIngre = (isset($_POST['operaEntreUnidadIngre'])) ? $_POST['operaEntreUnidadIngre'] : '';
$decripDanosRep1Ingre = (isset($_POST['decripDanosRep1Ingre'])) ? $_POST['decripDanosRep1Ingre'] : '';
$decripDanosRep2Ingre = (isset($_POST['decripDanosRep2Ingre'])) ? $_POST['decripDanosRep2Ingre'] : '';
$decripDanosRep3Ingre = (isset($_POST['decripDanosRep3Ingre'])) ? $_POST['decripDanosRep3Ingre'] : '';
$decripDanosRep4Ingre = (isset($_POST['decripDanosRep4Ingre'])) ? $_POST['decripDanosRep4Ingre'] : '';
$decripDanosRep5Ingre = (isset($_POST['decripDanosRep5Ingre'])) ? $_POST['decripDanosRep5Ingre'] : '';
$decripDanosRep6Ingre = (isset($_POST['decripDanosRep6Ingre'])) ? $_POST['decripDanosRep6Ingre'] : '';
$decripDanosRep7Ingre = (isset($_POST['decripDanosRep7Ingre'])) ? $_POST['decripDanosRep7Ingre'] : '';
$decripDanosRep8Ingre = (isset($_POST['decripDanosRep8Ingre'])) ? $_POST['decripDanosRep8Ingre'] : '';
$imgIzquIngre = (isset($_POST['imgIzquIngre'])) ? $_POST['imgIzquIngre'] : '';
$imgDereIngre = (isset($_POST['imgDereIngre'])) ? $_POST['imgDereIngre'] : '';
$imgSupIngre = (isset($_POST['imgSupIngre'])) ? $_POST['imgSupIngre'] : '';
$imgDelaIngre = (isset($_POST['imgDelaIngre'])) ? $_POST['imgDelaIngre'] : '';
$imgTrasIngre = (isset($_POST['imgTrasIngre'])) ? $_POST['imgTrasIngre'] : '';
$idSocioChofIngre = (isset($_POST['idSocioChofIngre'])) ? $_POST['idSocioChofIngre'] : '';
$idJefeTallerIngre = (isset($_POST['idJefeTallerIngre'])) ? $_POST['idJefeTallerIngre'] : '';
$idRepResponIngre = (isset($_POST['idRepResponIngre'])) ? $_POST['idRepResponIngre'] : '';



switch ($opcion) {
	case 1:
		$consulta = "INSERT INTO ordenIngreso (fechaIngre, horaIngre, ordenRepIngre, gestorOperIngre, numEcoIngre, placasIngre, tipoIngre, anoIngre, ramalIngre, nomAccionistaIngre, operaEntreUnidadIngre, decripDanosRep1Ingre, decripDanosRep2Ingre, decripDanosRep3Ingre, decripDanosRep4Ingre, decripDanosRep5Ingre, decripDanosRep6Ingre, decripDanosRep7Ingre, decripDanosRep8Ingre, imgIzquIngre, imgDereIngre, imgSupIngre, imgDelaIngre, imgTrasIngre, idSocioChofIngre, idJefeTallerIngre, idRepResponIngre) VALUES('$fechaIngre', '$horaIngre', '$ordenRepIngre', '$gestorOperIngre', '$numEcoIngre', '$placasIngre', '$tipoIngre', '$anoIngre', '$ramalIngre', '$nomAccionistaIngre', '$operaEntreUnidadIngre', '$decripDanosRep1Ingre', '$decripDanosRep2Ingre', '$decripDanosRep3Ingre', '$decripDanosRep4Ingre', '$decripDanosRep5Ingre', '$decripDanosRep6Ingre', '$decripDanosRep7Ingre', '$decripDanosRep8Ingre', '$imgIzquIngre', '$imgDereIngre', '$imgSupIngre', '$imgDelaIngre', '$imgTrasIngre', '$idSocioChofIngre', '$idJefeTallerIngre', '$idRepResponIngre')";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
		break;

	case 2:
		$consulta = "UPDATE ordenIngreso SET fechaIngre='$fechaIngre', horaIngre='$horaIngre', ordenRepIngre='$ordenRepIngre', gestorOperIngre='$gestorOperIngre', numEcoIngre='$numEcoIngre', placasIngre='$placasIngre', tipoIngre='$tipoIngre', anoIngre='$anoIngre', ramalIngre='$ramalIngre', nomAccionistaIngre='$nomAccionistaIngre', operaEntreUnidadIngre='$operaEntreUnidadIngre', decripDanosRep1Ingre='$decripDanosRep1Ingre', decripDanosRep2Ingre='$decripDanosRep2Ingre', decripDanosRep3Ingre='$decripDanosRep3Ingre', decripDanosRep4Ingre='$decripDanosRep4Ingre', decripDanosRep5Ingre='$decripDanosRep5Ingre', decripDanosRep6Ingre='$decripDanosRep6Ingre', decripDanosRep7Ingre='$decripDanosRep7Ingre', decripDanosRep8Ingre='$decripDanosRep8Ingre' WHERE id='$id'";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
		break;

	case 3:
		$consulta = "DELETE FROM ordenIngreso WHERE id='$id'";	
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
		break;

	case 4:
		$consulta = "SELECT * FROM ordenIngreso";
	    $resultado = $conexion->prepare($consulta);
	    $resultado->execute();
	    $data=$resultado->fetchAll(PDO::FETCH_ASSOC);

		break;
}

echo json_encode($data);

$conexion = NULL;

 ?>