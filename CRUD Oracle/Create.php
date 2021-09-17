<?php


//conexion a la base de datos
$conn = oci_connect('system', 'dosk', 'localhost/XE');

//-------------------------------------------------------------------------//
//query para insertar datos, esto se puede hacer con variables, obtenidas del metodo POST 
$stid = oci_parse($conn, "INSERT INTO EMPLEADOS (EMP_ID,NOMBRE,DEPTO_ID,EMAIL,PUESTO,FECHA_CREACION) VALUES ('19','HOLA','oficina','hola.com','trabajo','12/NOV/21')");

oci_execute($stid); // La fila se inserta con execute

?>
