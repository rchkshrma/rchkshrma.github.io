<?php
    session_start();
    include("connection.php");
    if(isset($_POST['Create'])){
        $entryHeading = addslashes($_POST['Title']);
        $entryContent = addslashes($_POST['Content']);
        date_default_timezone_set('Europe/London');
        $dateTime = date("Y-m-d"." "."H:i:s".".000000");//time in London

        $sql = "INSERT INTO blogEntries (entryNum, entryDate, entryHeading, entryContent) VALUES (NULL, '$dateTime', '$entryHeading', '$entryContent')";
        $queryResult = mysqli_query($connection, $sql);
        if($queryResult === false){
            echo 'failed';   
        }
        echo'
            <script>
            window.location.href = "Blog.php";
            </script>';
    }
?>