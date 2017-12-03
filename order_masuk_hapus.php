<?php
    include "connect.php";
    $query = "DELETE FROM `order` WHERE id = $_GET[id]";
    $sql = mysqli_query($db,$query) or die("Query fail : ".mysqli_error());
    header("Location: order_masuk.php"); 
?>