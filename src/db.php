<?php

$servername = "db";
$username = "root";
$password = "123456";
$database = "test";

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Tests Base de datos</title>
</head>
<body>

<div>
  <h2>MYSQLi</h2>
  <div>
<?php
    $mysqli = mysqli_connect($servername, $username, $password, $database);
    if (mysqli_connect_errno()) {
      echo 'Fallo al contenctar a mysql: ';
      echo mysqli_connect_error();
    } else echo 'Conectado correctamente';
?>
  </div>
</div>

<div>
  <h2>PDO</h2>
  <div>

<?php
    try {
      $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo 'Conectado correctamente';
    } catch(PDOException $e) {
      echo 'Connection failed: ';
      echo $e->getMessage();
    }

?>
  </div>

  <a href="index.php">Volver</a>
</div>

</body>
</html>
