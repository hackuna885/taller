<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");
date_default_timezone_set('America/Mexico_City');

$con = new SQLite3("riesgos.db");
$cs = $con -> query("SELECT * FROM ordenIngreso");

$i = 0;

while ($result = $cs -> fetchArray()) {
	$ordeIngre[$i]['id'] = $result['id'];
	$ordeIngre[$i]['fechaIngre'] = $result['fechaIngre'];
	$ordeIngre[$i]['horaIngre']= $result['horaIngre'];
	$ordeIngre[$i]['ordenRepIngre'] = $result['ordenRepIngre'];
	$ordeIngre[$i]['gestorOperIngre'] = $result['gestorOperIngre'];
	$ordeIngre[$i]['numEcoIngre'] = $result['numEcoIngre'];
	$ordeIngre[$i]['placasIngre'] = $result['placasIngre'];
	$ordeIngre[$i]['tipoIngre'] = $result['tipoIngre'];
	$ordeIngre[$i]['anoIngre'] = $result['anoIngre'];
	$ordeIngre[$i]['ramalIngre'] = $result['ramalIngre'];
	$ordeIngre[$i]['nomAccionistaIngre'] = $result['nomAccionistaIngre'];
	$ordeIngre[$i]['operaEntreUnidadIngre'] = $result['operaEntreUnidadIngre'];
	$ordeIngre[$i]['decripDanosRep1Ingre'] = $result['decripDanosRep1Ingre'];
	$ordeIngre[$i]['decripDanosRep2Ingre'] = $result['decripDanosRep2Ingre'];
	$ordeIngre[$i]['decripDanosRep3Ingre'] = $result['decripDanosRep3Ingre'];
	$ordeIngre[$i]['decripDanosRep4Ingre'] = $result['decripDanosRep4Ingre'];
	$ordeIngre[$i]['decripDanosRep5Ingre'] = $result['decripDanosRep5Ingre'];
	$ordeIngre[$i]['decripDanosRep6Ingre'] = $result['decripDanosRep6Ingre'];
	$ordeIngre[$i]['decripDanosRep7Ingre'] = $result['decripDanosRep7Ingre'];
	$ordeIngre[$i]['decripDanosRep8Ingre'] = $result['decripDanosRep8Ingre'];
	$i++;
}

echo json_encode($ordeIngre);

 ?>