<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-4">Product Management</h1>
            <p class="lead">Add and view your products seamlessly.</p>
        </div>
        <?php

        include("config/config.php");

        $c1 = new Config();
        $c1->connectDatabase();
        $result = $c1->selectDatabase();

        if (isset($_REQUEST['submit'])) {
            $product = $_REQUEST['name'];
            $price = $_REQUEST['price'];
            $category = $_REQUEST['category'];

            $c1->insertDatabase($product, $price, $category);
        }

        ?>

        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Add New Product</h3>
                        <form method="POST" action="">
                            <div class="mb-3">
                                <label for="name" class="form-label">Product Name</label>
                                <input id="name" class="form-control" name="name" type="text" placeholder="Product name"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input id="price" class="form-control" name="price" type="number" placeholder="Price"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="category" class="form-label">Category</label>
                                <input id="category" class="form-control" name="category" type="text"
                                    placeholder="Category" required>
                            </div>

                            <div class="row">
                                <div class="col text-center">
                                    <button name="submit" class="btn btn-primary">Submit</button>
                                    <button name="show" onclick="location.href='showdata.php'" class="btn btn-secondary">Show Data</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>