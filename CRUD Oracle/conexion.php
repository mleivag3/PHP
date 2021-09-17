<DOCTYPE HTML>
<meta charset = "utf8" />
<?php  
// crear conexion con oracle con oci_connect como extencion para la conexion.

$conexion = oci_connect("system", "dosk", "localhost/xe"); 

//--------------------------------------------//
 //sentencia para comporbar que la conexion es valida por medio de un if y la variable $conexion
if (!$conexion) {    
  $m = oci_error();    
  echo $m['message'], "n";    
  exit; 
} else {    
  echo "CONEXION EXITOSA YA FUCNCIONO JEJE"; } 
 
?>
