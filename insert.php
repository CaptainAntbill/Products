<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $servername = "localhost";
      $username = "root";
      $password = "1234";
      $dbname = "products";

      $product_name = $_POST["product"];
      $price = $_POST["price"];

      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, '1234');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::
            ERRMODE_EXCEPTION);
        $sql = "INSERT INTO product VALUES (null, '$product_name', '$price', true )";
        $conn->exec($sql);
        echo "New record created successfully";
      }
      catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
      $conn = null;
     ?>
  </body>
</html>
