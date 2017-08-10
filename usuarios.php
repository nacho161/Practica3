<?php  
//tomamos los datos del archivo config.php  
include('config.php');  
//se envia la consulta  
	$sql = "SELECT * FROM admin ORDER BY id ASC"; 
	$result = mysqli_query($db,$sql);

echo "<table>";  
echo "<tr>";  
echo "<th>Nombre</th>";  
echo "<th>Comentario</th>";  
echo "<th>Fecha</th>";
echo "<th>Modificar</th>";  
echo "<th>Eliminar</th>";  
echo "</tr>";  
while ($row = mysqli_fetch_array($result)){   
    echo "<tr>";  
    echo "<td>$row[0]</td>";  
    echo "<td>$row[1]</td>";  
    echo "<td><input type=text name=fname value=$row[2] disabled></td>"; 
	echo "<td>Edit</td>"; 
	echo "<td>Delete</td>"; 
    echo "</tr>";  
}  
echo "</table>";   
?>