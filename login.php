<?php
    session_start();
    include("connection.php");
    if(isset($_POST['submit'])){
        $username = $_POST['Username'];
        $password = $_POST['Password'];
        $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
        $queryResult = mysqli_query($connection, $sql);
        $assocArray = mysqli_fetch_assoc($queryResult);
        $count = mysqli_num_rows($queryResult);
        if($count>0){
            $_SESSION['username'] = $username;
            $_SESSION['adminAccess'] = $assocArray['adminAccess'];
            echo'
            <script>
            window.location.href = "Blog.php";
            alert("Welcome!")
            </script>';
        }
        else{
            echo'
            <script>
            window.location.href = "index.php";
            alert("Login Failed. Invalid Username or Password.")
            </script>';
        }
    }
?>