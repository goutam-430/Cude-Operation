<?php 
    include 'connection.php';

    $id = $_GET['id'];
    $del = " DELETE FROM `signing` WHERE id = $id ";

    mysqli_query($conn,$del);

    header('location:display.php');
?>