<?php

$dsn = "mysql:host=localhost;dbname=crud";

try {
  // SETTING PDO INSTANCE
  $conn = new PDO($dsn, "localhost", "");
  // SETTING PDO ERROR MODE TO EXCEPTION
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $error) {
  echo "Connection Failed: " . $error->getMessage();
}

?>