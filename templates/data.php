<?php
// DOC BLOCK
/** @var $conn \PDO */
$statement = $conn->prepare("SELECT * FROM products ORDER BY id");
$statement->execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);
?>


<section class="data-section container mt-5">
    <table class="table table-striped table-hover table-bordered text-center">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">product name</th>
                <th scope="col">product prize</th>
                <th scope="col">created at</th>
                <th scope="col">update/delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
            <?php
            $id = $product["id"];
            $date = $product["created_at"];
            $name = $product["product_name"];
            $prize = $product["product_prize"];
            ?>
            <tr>
                <th scope="row"><?php echo $id; ?></th>
                <td><?php echo $name; ?></td>
                <td><?php echo $prize; ?></td>
                <td><?php echo $date; ?></td>
                <td>
                    <a href="./templates/update.php?id=<?php echo $id; ?>" class="btn1 btn btn-warning">update</a>
                    <a href="./templates/delete.php?id=<?php echo $id; ?>" class="btn1 btn btn-danger">delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</section>