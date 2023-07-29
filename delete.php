<?php
    include 'connect.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM `coffees` WHERE id=$id";

        if (mysqli_query($conn, $sql)) {
            // echo "Product deleted successfully!";
            header("location: index.php");
        } else {
            echo "Error deleting product: " . mysqli_error($conn);
        }
          
        mysqli_close($conn);
    }
?>