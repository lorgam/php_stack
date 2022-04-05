<?php

$servername = "db";
$username = "root";
$password = getenv('MARIADB_ROOT_PASSWORD');
$database = "local";

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Database tests</title>
</head>
<body>

<div>
  <h2>MYSQLi</h2>
  <div>
<?php
    $mysqli = mysqli_connect($servername, $username, $password, $database);
    if (mysqli_connect_errno()) {
      echo 'Database connection error: ';
      echo mysqli_connect_error();
    } else echo 'Succesfully connected';
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
      echo 'Succesfully connected';
    } catch(PDOException $e) {
      echo 'Connection failed: ';
      echo $e->getMessage();
    }

?>
  </div>

  <a href="index.php">Go back</a>
</div>

</body>
</html>
