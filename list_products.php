<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bulma.css">
    <title></title>
  </head>
  <body>
  <nav class="navbar is-dark" role="navigation" aria-label="main navigation">
<div class="navbar-brand">
  <a class="navbar-item" href="https://bulma.io">
  </a>

  <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
    <span aria-hidden="true"></span>
    <span aria-hidden="true"></span>
    <span aria-hidden="true"></span>
  </a>
</div>
<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "products";

$product_name = $_POST["product"];
$price = $_POST["price"];

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "select * from product";

  if($conn){
    $result = $conn->query($sql);

  }else{
    echo "nothig";
  }

}
catch(PDOException $e)
{
  echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>
<div id="navbarBasicExample" class="navbar-menu">
  <div class="navbar-start">
    <a href="ingreso.html" class="navbar-item">
      Inicio
    </a>

    <a href="list_products.php" class="navbar-item">
      Productos
    </a>
  </div>
  <div class="navbar-end">
    <div class="navbar-item">
    </div>
  </div>
</div>
</nav><br>
<h1 class="title" style="text-align: center">Lista de Productos</h1>
<div class="container is-fluid">
  <table class="table is-fullwidth is-hoverable">
      <th>Nombre</th>
    <th>Precio</th>
    <th>Estado</th>
    <th></th>
    <?php   foreach ($result as $value){  ?>
    <tr>
      <td><?php echo "<br>" . $value["product_name"];?></td>
      <td><?php echo "<br>" . $value["price"];?></td>
      <td><?php echo "<br>" . $value["is_active"];?></td>
      <td><?php echo "<a style='position: absolute; left:85%' class='button is-link is-rounded' href='update.php?id=" .$value["id"]
                    ."&precio=".$value["price"]."&nombre=".$value["product_name"]."&active=".$value["is_active"]."'>Editar</a>" ?>
        <?php echo "<a style='position: absolute; left:20%%' class='button is-danger is-rounded' href='delete.php?id=".$value["id"]."'>Eliminar</a></td>"?>
    </tr>
  <?php } ?>
  </table>
</div>
</body>
</html>
