<?php
//Conexion a base de datos
//Donde está la base : localhost 
//Nombre de usuario administrador con Xampp: "root" 
//Contraseña. En Xampp: "no tiene"
//Nombre base de datos: 
// 
$conexion = mysqli_connect("localhost","root","","desafío");


//mysqli_connect_errno prueba la conexión de forma booleana
if(mysqli_connect_errno()){
    echo "No se conectó a la base de datos";
}else{
    echo "se conectó joya";
}

//Consulta en MySQL
$consultas = mysqli_query($conexion,"SELECT * FROM empleados");

echo "<pre>";
var_dump($consultas);
echo "</pre>";

//Para comprobar un dato
//$listado =mysqli_fetch_assoc($consultas);

//echo "<pre>";
//var_dump($listado);
//echo "</pre>";

while ($listado = mysqli_fetch_array($consultas)){

    echo $listado ['id_empleado']." ".$listado ['Apellido']." ".$listado ['Nombre']." ".$listado ['DNI']."<br>";
}


?>



