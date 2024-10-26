<?php
    include 'db.php';

    if (isset($_GET['id'])){
        $id =$_GET['id'];

        $sql = "DELETE FROM contacts WHERE id=$id"
        if ($conn->query($sql)==TRUE){
            echo "Contact Deleted Successfully";
        }else{
            echo "Error deleting record";
        }
    }

    header("location: index.php")
?>
