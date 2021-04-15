<?php

require_once "../database/connection.php";

$title = $prize = "";

if (isset($_POST["submit"])) {
  if (isset($_POST["title"])) {
    $title = $_POST["title"];
  }

  if (isset($_POST["prize"])) {
    $prize = $_POST["prize"];
  }

  $statement = $conn->prepare("INSERT INTO products (product_name, product_prize)
  VALUES (:product_name, :product_prize)");
  $statement->bindValue(":product_name", $title);
  $statement->bindValue(":product_prize", $prize);
  $statement->execute();
  header("Location: ../index.php");
}

include_once "../templates/form.php";

?>