<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <title>CRUD</title>
</head>

<body>
    <div class="container mt-5">
        <form action="" method="POST">
            <div class=" form-group">
                <label for="title">product name</label>
                <input type="text" class="form-control form-control-lg" id="title" name="title"
                    placeholder="Enter Product Name">
            </div>
            <div class="form-group">
                <label for="prize">prize</label>
                <input type="number" class="form-control" name="prize" id="prize" placeholder="Enter Product Prize">
            </div>
            <button type="submit" name="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>
</body>

</html>