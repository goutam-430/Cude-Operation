
<!doctype html>
<html lang="en">

<head>
    <title>Display</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <div class="cal-lg-12">
            <h1 class="text-center">Display Table Data</h1><br>

            <table class="table table-striped table-hover table-bordered">
             
                    <tr class="text-white text-center bg-dark">
                        <th class="text-white">Id</th>
                        <th class="text-white">Name</th>
                        <th class="text-white">Phone</th>
                        <th class="text-white">Email</th>
                        <th class="text-white">Delete</th>
                        <th class="text-white">Update</th>
                    </tr>
              
                <?php
                         include 'connection.php'; 
                    
                        $q = "SELECT * FROM `signing`";

                        $quary = mysqli_query($conn,$q);
                        while($res = mysqli_fetch_array($quary)){
                ?>

                <tbody>
                    <tr class="text-center">
                        <td><?php echo $res['id'] ?></td>
                        <td><?php echo $res['Name'] ?></td>
                        <td><?php echo $res['Phone'] ?></td>
                        <td><?php echo $res['Email'] ?></td> 
                        <td>
                            <button class=" d-grid  mx-auto btn btn-danger  text-center">
                                <a class="text-white" href="delet.php?id=<?php echo $res['id'] ?>">Delete</a>
                            </button>
                        </td>
                        <td>
                            <button class="d-grid  mx-auto btn btn-primary text-center">
                            <a class="text-white" href="update.php?id=<?php echo $res['id'] ?>">Update</a>
                            </button>
                        </td>
                    </tr>
                    <?php
                        };
                    ?>
                </tbody>
            </table>

        </div>
    </div>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
        crossorigin="anonymous"></script>
</body>

</html>