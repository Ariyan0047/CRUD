<?php

$dsn = "mysql:host=localhost;port=3306;dbname=crud";

try {
  // SETTING PDO INSTANCE
  $conn = new PDO($dsn, "root", "");
  // SETTING PDO ERROR MODE TO EXCEPTION
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $error) {
  echo "Connection Failed: " . $error->getMessage();
}

?>