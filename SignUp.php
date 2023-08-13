<?php
    session_start();
    include("connection.php");
    if(isset($_POST['submit'])){
        $username = addslashes($_POST['Username']);
        $password = addslashes($_POST['Password']);

        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count>0){
            echo'
            <script>
            window.location.href = "SignUpIndex.php";
            alert("Username already exists.");
            </script>';
        }
        else{
            $sql = "INSERT INTO users VALUES (NUll, '$username', '$password', 0)";
            $queryResult = mysqli_query($connection, $sql);
            if($queryResult === false){
                echo'
                <script>
                window.location.href = "SignUpIndex.php";
                alert("Sign up Failed. Try again.");
                </script>';  
            }
            echo'
                <script>
                window.location.href = "index.php";
                alert("Sign up Successful. Please login.");
                </script>'; 
        }
    }
?>



        
