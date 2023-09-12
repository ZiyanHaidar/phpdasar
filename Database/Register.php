<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <style>
    body {
        background-image: url("https://p4.wallpaperbetter.com/wallpaper/557/54/518/anime-night-city-starry-night-city-lights-hd-wallpaper-preview.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container ">
        <div class="card mt-5 w-50 justify-content-center mx-auto">
            <h5 class="card-header mx-auto">register</h5>
            <div class="card-body">
                </style>
                <div class="card-body">
                    <form action="connect_register.php" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email </label>
                            <input type="email" class="form-control" id="examplformControlInput1" placeholder="email"
                                name="email">
                            <div id="email" class="form-text"></div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleForControlInput1" class="form-label">username</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="username"
                                name="username">
                        </div>
                        <div class="mb-3">
                            <label for="exampleForControlInput1" class="form-label">password</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="password"
                                name="password">
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit" class="btn btn-primary text-bg-success">Sign-in</button>
                        </div>
                </div>
                </form>
                <br>
                <p class="text-center">Sudah punya akun? <a href="login.php">login akun</a></p>
</body>

</html>