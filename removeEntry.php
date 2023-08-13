<?php
    session_start();
    include("connection.php");

    if(isset($_GET['entryNum'])){
        $entryNum = $_GET['entryNum'];

        $sql = "DELETE FROM blogEntries WHERE entryNum = '$entryNum'";
        $queryResult = mysqli_query($connection, $sql);

        if($queryResult === false){
            alert("Failed. Try again."); 
        }
        echo '<script>
        window.location.href = "Blog.php";
        </script>';
    }

    if(isset($_GET['commNum'])){
        $commNum = $_GET['commNum'];

        $sql = "DELETE FROM blogComments WHERE commNum = '$commNum'";
        $queryResult = mysqli_query($connection, $sql);

        if($queryResult === false){
            alert("Failed. Try again."); 
        }
        echo '<script>
        window.location.href = "Comments.php";
        </script>';
    }
?>