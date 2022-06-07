<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tienda de ropa</h1>
    <br>
    <button type="submit"><a href="adiddas.php">Addidas</a></button>
    <button type="submit"><a href="supreme.php">Supreme</a></button>
    <button type="submit"><a href="nike.php">Nike</a></button>
    <button type="submit"><a href="menosde500.php">Precio menor a 500</a></button>
    <h2>Lista de ropa</h2>
    <p>La siguiente lista muestra los datos de la ropa actualmente en stock.</p>

    <table border="1">

    <tr>
        <th>ID</th>
        <th>TIPO DE PRENDA</th>
        <th>MARCA</th>
        <th>TALLE</th>
        <th>PRECIO</th>
        <th>IMAGEN</th>
        <th>EDITAR</th>
        <th>BORRAR</th>
    </tr>

    <?php
    // 1) Conexion
    $conexion = mysqli_connect("127.0.0.1", "root", "");

    // 2) Preparar la orden SQL
    $consulta= "SELECT * FROM `ropa`";
    

    // 3) Ejecutar la orden y obtenemos los registros
    mysqli_select_db($conexion, "local de ropa"); // esta función la podemos poner acá o debajo de la conexión
    $datos= mysqli_query($conexion, $consulta);

    // 4) Mostrar los datos del registro -
     while ($reg=mysqli_fetch_array($datos)) { ?>

        <tr>

        <td><?php echo $reg['id']; ?></td>
        <td><?php echo $reg['Marca']; ?></td>
        <td><?php echo $reg['Precio']; ?></td>
        <td><?php echo $reg['Talle']; ?></td>
        <td><?php echo $reg['Tipo de prenda']; ?></td>
        <td><img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($reg['Imagen'])?>" alt="" width="100px" height="100px"></td>

        </tr>
    <?php } ?>
  </table>

</body>
</html>
