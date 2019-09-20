<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="icon" type="image/png" href="./img/ico.png">
    <meta charset="utf-8">
    <title>Proyecto_0</title>
  </head>
  <body>
    <section id="navbar">
      <div class="logo">
        <a href="?page=home"><img src="./img/logo.jpg" alt=""></a>
      </div>
      <ul class="menu">
        <li><a href="?page=descripcion">Descripción</a></li>
        <li><a href="?page=temporadas">Temporadas</a></li>
        <li><a href="?page=reparto">Reparto</a></li>
        <li><a href="?page=merchandaising">Merchandising</a></li>
        <li><p id="hora_fecha"></p></li>
      </ul>
    </section>
    <section id="boody">
      <div class="container">
        <div class="banner">
          <h1>Peacky Blinders</h1>
       </div>
       <?php
          $p = $_GET["page"];
          if(isset($p)  && $p != "home") {
            $page = "views/" . $p . '.php';
          if(file_exists($page)) {
            include $page;
          } else{
            echo "Error 404, something was wrong.";
          }
          }else {
            include "views/home.php";
          }
        ?>
       </div>
      </div>
    </section>
    <!-- footer -->
    <div class="containerF">
      <p>Proyecto 0</p>
      <p>Inicio de sesión: <?php echo date("y-m-d h:i:s") ?></p>
    </div>
  </body>
  <script src="js/script.js"></script>
</html>
