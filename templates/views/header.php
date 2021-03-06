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
                    <a href="./templates/insert.php" class="btn btn-outline-info w-100">add</a>
                </div>
            </div>
        </div>
    </header>

    <?php include_once "./templates/data.php"; ?>