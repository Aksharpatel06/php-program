<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php

    include("config/config.php");

    $c1 = new Config();
    $c1->connectDatabase();
    $result = $c1->selectDatabase();

    ?>
    <div class="row mt-5">
        <div class="col-lg-10 mx-auto">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="card-title text-center mb-4">Product List</h3>
                    <table class="table table-striped table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Product Title</th>
                                <th scope="col">Price</th>
                                <th scope="col">Category</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($res = mysqli_fetch_assoc($result)) { ?>
                                <tr>
                                    <th scope="row"><?php echo $res['id']; ?></th>
                                    <td><?php echo $res['name']; ?></td>
                                    <td><?php echo $res['prize']; ?></td>
                                    <td><?php echo $res['category']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <center>
                        <button name="show" onclick="location.href='main.php'" class="btn btn-success">Back to home
                            page</button>
                    </center>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>