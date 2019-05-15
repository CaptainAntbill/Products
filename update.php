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
  <?php echo "<h1 class='title' style='text-align: center'>Actualizar ".$_GET["nombre"]."</h1>"?>
  <div class="container is-fluid">
    <div style="background-color:; border-radius:3px; padding:6px">
      <?php echo "<form class='form' action='updateProduct.php?id=".$_GET[id]."' method='post'>"?>
        <label class="subtitle is-4">Precio Nuevo</label><br><br>
        <?php echo "<input class='input is-info' pattern='(.*[0-9])' type='text' value='". $_GET[precio]."' name='updatePrecio'><br><br>"?>
        <label class="subtitle is-4">Esta Activo?</label><br><br>
        <div class="select">
          <select name="is_active">
            <?php
            if ($_GET["active"]==1) {
              echo "<option value='1'>Si</option> <option value='0'>No</option>";
            }  else {
              echo "<option value='0'>No</option> <option value='1'>Si</option>";
            }
            ?>
          </select>
        </div>
        <input class="button is-link is-outlined" type="submit" value="Enviar"><br><br>
      </form>
    </div>
  </div>
</body>
</html>
