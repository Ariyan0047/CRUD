<?php

// DOC BLOCK
/** @var $conn \PDO */
$statement = $conn->prepare("SELECT * FROM products ORDER BY id");
$statement->execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);

?>