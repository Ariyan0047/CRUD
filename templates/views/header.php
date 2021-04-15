<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>CRUD</title>
</head>

<body>
    <header class="header-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <h1>crud</h1>
                </div>
                <div class="col-6">
                    <button class="btn btn-outline-info w-100">add</button>
                </div>
            </div>
        </div>
    </header>

    <section class="data-section container mt-5">
        <table class="table table-warning table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">product name</th>
                    <th scope="col">product prize</th>
                    <th scope="col">created at</th>
                    <th scope="col">update / delete</th>
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
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>