<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="css/bulma.css">
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

    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item" href="ingreso.html">
          Inicio
        </a>

        <a class="navbar-item" href="list_products.php">
          Productos
        </a>
      </div>
      <div class="navbar-end">
        <div class="navbar-item">
        </div>
      </div>
    </div>
  </nav><br>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "1234";
  $dbname = "products";

  $product_name = $_POST["product"];
  $price = $_POST["price"];
  $is_active = $_POST["is_active"];

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, '1234');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::
    ERRMODE_EXCEPTION);
    $sql = "INSERT INTO product VALUES (null, '$product_name', '$price', '$is_active')";
    $conn->exec($sql);
    echo  "<label class='title' style='text-align: center'>Se he ingresado correctamente!</label><br><br>";

  }
  catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  $conn = null;
  header("Location: list_products.php");
  ?>
</body>
</html>
