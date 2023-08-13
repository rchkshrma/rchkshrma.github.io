<?php
    session_start();
    include("connection.php");
    if(isset($_POST['Create'])){
        $comm = addslashes($_POST['Comm']);
        date_default_timezone_set('Europe/London');
        $dateTime = date("Y-m-d"." "."H:i:s".".000000");//time in London
        $username = $_SESSION['username'];

        $sql = "INSERT INTO blogComments (commNum, commDate, commName, comm) VALUES (NULL, '$dateTime', '$username', '$comm')";
        $queryResult = mysqli_query($connection, $sql);
        if($queryResult === false){
            alert("Failed. Try again.");    
        }
        echo'
            <script>
            window.location.href = "Comments.php";
            </script>';
    }
?>