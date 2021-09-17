<?php 

//conexion a la base de datos 
$conn = oci_connect('system', 'dosk', 'localhost/XE');

//--------------------------------------------------------------------//
// sentencia para validar la conexion a la base de datos (puede ser opcional)
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}else{
    echo"conexion realizada";
}

//query para hacer un update a la base de datos, esto puede realizarse con variables tambien.

$query = "UPDATE EMPLEADOS SET PUESTO= 'DEVELOPER' WHERE EMP_ID = '1'";

$stid = oci_parse($conn, $query);
oci_execute($stid);

?>