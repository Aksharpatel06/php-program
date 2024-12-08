<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Images</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container my-5">
        <h1 class="text-center mb-4">Image Gallery</h1>

        <?php
        include("../config/config.php");
        $c1 = new Config();
        $data = $c1->fetchImages();

        if (isset($_REQUEST["button"])) {
            $id = $_REQUEST['id'];
            $c1->deleteImage($id);
            header('Refresh:0');
        }
        ?>

        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($res = mysqli_fetch_array($data)) { ?>
                    <tr>
                        <th scope="row"><?php echo $res['id'] ?></th>
                        <td><?php echo $res['name'] ?></td>
                        <td>
                            <img src="../<?php echo $res['path'] ?>" width="150" class="img-thumbnail">
                        </td>
                        <td>
                            <form method="POST"
                                class="d-flex justify-content-center align-items-center gap-2">
                                <input type="hidden" name="id" value="<?php echo $res['id'] ?>">
                                <button type="submit" name="button" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>