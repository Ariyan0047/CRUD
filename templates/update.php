<?php

require_once "../database/connection.php";

$title = $prize = "";
$id = $_GET["id"] ?? null;

if (isset($_POST["submit"])) {
  if (isset($_POST["title"])) {
    $title = $_POST["title"];
  }

  if (isset($_POST["prize"])) {
    $prize = $_POST["prize"];
  }

  $statement = $conn->prepare(
    "UPDATE products SET product_name = :product_name, product_prize = :product_prize WHERE id = :id"
  );
  $statement->bindValue(":id", $id);
  $statement->bindValue(":product_name", $title);
  $statement->bindValue(":product_prize", $prize);
  $statement->execute();
  header("Location: ../index.php");
}

include_once "../templates/form.php";

?>