<?php

require_once "../database/connection.php";

// DELETE ENTRY
if (isset($_GET["id"])) {
  $id = $_GET["id"];
  $statement = $conn->prepare("DELETE FROM products WHERE id = :id");
  $statement->bindValue(":id", $id);
  $statement->execute();
  header("Location: ../index.php");
}

?>