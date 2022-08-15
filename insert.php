
<?php

    include 'connection.php';

    if (isset($_POST['submit'])) {
      
        $uname = $_POST['name'];
        $uphone = $_POST['phoe'];
        $uemail = $_POST['email'];
        $upass = $_POST['password'];

        $q = " INSERT INTO `signing` (`id`, `Name`, `Phone`, `Email`, `password`) VALUES (NULL, '$uname', '$uphone', '$uemail', '$upass') ";

        $quary = mysqli_query($conn,$q);

        header('location:insert.php');
    }

?>


<!doctype html>
<html lang="en">

<head>
    <title>Insert</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <form method="post">
        <div class="d-flex ">
            <div class="col-md-4"></div>
            <div class="col-md-4 col border border-primary mt-25" style="margin-top: 50px;">
                <h1 class="text-center " style="margin-top: 12px;">Fill Your Data</h1>
                <div class="pap p-4">
                    <div class="mb-2 ">
                        <label for="exampleInputEmail1" class="form-label">Enter Your Name</label>
                        <input type="text" class="form-control " required name="name" id="exampleInputName" >
                    </div>
                    <div class="mb-2 ">
                        <label for="exampleInputEmail1" class="form-label">Phone</label>
                        <input type="tel" class="form-control" required name="phoe" id="exampleInputEmail1" >
                    </div>
                    <div class="mb-2 ">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" required name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" required name="password" id="exampleInputPassword1">
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
        crossorigin="anonymous"></script>
</body>

</html>