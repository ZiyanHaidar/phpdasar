<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
    .body {
        background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQ9MKjFp25n8wVNo7wQ53yyTDWsZmVsp6DcmiYNIBxeBPiF-TiJv4qdoY9vlPNnIzJ4HA&usqp=CAU");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }
    </style>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body class="body">
    <div class="container ">

        <div class="card mt-5 w-50 justify-content-center mx-auto">
            <h5 class="card-header mx-auto">Login</h5>
            <div class="card-body">
                <form action="connect_login.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit" class="btn btn-primary text-bg-info">Login</button>
                            <div class="text-center">
                                <p>Belum punya akun? <a href="Register.php">Register</a></p>
                            </div>
                </form>
            </div>
        </div>
    </div>
    </div>

</body>

</html>