<?php
    include "connect.php";
    $query = "UPDATE `order` SET order_status = 1 WHERE id = $_GET[id]";
    $sql = mysqli_query($db,$query) or die("Query fail : ".mysqli_error());
    header("Location: order_selesai.php"); 
?>