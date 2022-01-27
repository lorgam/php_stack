<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Test Mail</title>
</head>
<body>

<div>
  <h2>Test MailHog</h2>
  <div>

<?php

$projectName = getenv('PROJECT_NAME');
$success = mail('to@example.com', 'Test message', 'This is a text message', 'From: from@example.com');
if (!$success) {
	echo 'Error check the logs for more info';
} else {
	echo 'Success';
}
?>
</div>

<div>
	<a href="http://<?= $projectName ?>.mail.localhost/" target="_blank">View in MailHog</a>
</div>

<div>
  <a href="index.php">Go back</a>
</div>

</div>
</body>
</html>
