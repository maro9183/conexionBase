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
    echo "Connection OK";
}else{
    echo "se conectó joya";
}

//Consulta en MySQL
//$consultas = mysqli_query($conexion,"SELECT * FROM empleados");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link type="text/css" href="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/css/dataTables.checkboxes.css" rel="stylesheet">
    <link href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <title>Tabla</title>
</head>
<body>
    <nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Navbar</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

    </nav>

<div class="table-responsive">
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col sorting">id_empleado</th>
      <th scope="col">Apellido</th>
      <th scope="col">Nombre</th>
      <th scope="col">DNI</th>
      <th scope="col">Departamento</th>
      <th scope="col">Presupuesto</th>
    </tr>
  </thead>

<?php
$consulta_Empleados = "SELECT * FROM empleados";
$consultaINNER_Dep = "SELECT * FROM empleados INNER JOIN departamentos ON empleados.id_departamento = departamentos.id_departamento ";

$resultado = mysqli_query($conexion,$consultaINNER_Dep);

while ($show = mysqli_fetch_array($resultado)){
?>
  <tbody >
    <tr>
      
      <td><?php echo $show ['id_empleado'] ?></td>
      <td><?php echo $show ['Apellido'] ?></td>
      <td><?php echo $show ['Nombre'] ?></td>
      <td><?php echo $show ['DNI'] ?></td>
      <td><?php echo $show ['Departamento'] ?></td>
      <td><?php echo $show ['Presupuesto'] ?></td>
    </tr>
<?php
}

?>

  </tbody>
</table>

</div>
    
</body>
</html>