<?php

$conn = oci_connect('system', 'dosk', 'localhost/XE');

// SELECT DE LA BASE DE DATOS 
$stid = oci_parse($conn, 'SELECT * FROM EMPLEADOS');
oci_execute($stid);//sentencia que ejecuta la variavle $stid 

// fomato de la tabla en la que apareceran los datos
//----------------------------------------------------------------//
echo "<table border='1'>\n"; 
//sentencia para comprobar datos nulos dentro de la tabla 

while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) { 
    echo "<tr>\n";
    foreach ($row as $item) {
        //string de entrada que convierte elementos a formato html 
        echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "") . "</td>\n";
    }
    echo "</tr>\n";
}

?>