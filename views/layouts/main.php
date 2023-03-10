<?php

use app\core\Application;



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Home</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg text-center" style="background-color: #FFEFD5;">
        <div class="container">
            <a class="navbar-brand" href="">
                <img src="./src/images/cullianPNG.png" alt=" Cullinan" style="width: 120px;">

                <small class="fs-6 text-light px-2 py-1 bg-dark opacity-75 mx-1 rounded-3" style="font-family: 'Courgette', cursive; "><?php



                                                                                                                                        echo "No Admin" ?></small>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-4">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact us</a>
                    </li>

                </ul>
                <form action="" method="post" class="d-flex gap-3">
                    <a href="/login" class="btn btn-light" role="button">Sign in</a>
                    <a href="/register" class="btn btn-dark" role="button">Sign up</a>

                    <!-- <button class="btn btn-dark" name="login" type="button" data-bs-toggle="modal" data-bs-target="#myModal">Log in</button> -->
                    <!-- <button class="btn <?php echo  $logged ? 'd-flex' : 'd-none'; ?> btn-dark" name="logout" type="submit">Logout</button> -->
                </form>
            </div>
        </div>
    </nav>
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content py-5">
                <!-- Modal body -->
                <div class="container-fluid m-auto col-lg-8" style="font-family: 'labster', cursive;">
                    <div class="d-flex justify-content-center mb-5"><img src="./src/images/cullianPNG.png" alt=" Cullinan" style="width: 120px;"></div>
                    <form method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-5">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                        </div>
                        <div class="d-grid justify-content-center" style="font-family: 'labster', cursive;">
                            <button type="submit" name="login" class="btn btn-dark btn-lg px-4 ">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <?php if (Application::$app->session->getFlash('success')) : ?>
            <div class="alert alert-success">
                <?php echo Application::$app->session->getFlash('success');  ?>
            </div>
        <?php endif; ?>
        {{content}}
    </div>
</body>

</html>