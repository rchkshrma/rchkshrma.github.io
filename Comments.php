<!-- js in separate file -->
<?php
    session_start();
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css" type="text/css">
    <link rel="stylesheet" href="Blog.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300&family=Raleway:wght@200&display=swap" rel="stylesheet">
    <title>Comments</title>
    <script>
        function confirmation(){
            return confirm("Are you sure?");
        }
    </script>
</head>
<body>
    <div class="body">
        <header>
            <nav class="header">
                <a id="tester" href="AboutMe.php">About Me</a>
                <a href="Experience.php">Experience</a>
                <a href="SkillsAchievements.php">Skills/Achievements</a>
                <a href="Projects.php">Projects</a>
                <a href="Blog.php">Blog</a>
            </nav>
        </header>

        <main class="main">
            <div id="linkFlex">
                <a href="front.php" id="back">&larr;return</a>
                <?php 
                    if(isset($_SESSION['username'])){
                        echo '<a id="logout" href="logout.php" onclick="return confirmation()">logout&rarr;</a>';
                    }
                    else{
                        echo '<a id="login" href="index.php">login&rarr;</a>';
                    }
                ?>
            </div>
            <article>
                <h1 id="Blog"><span>C</span>omments
                    <?php
                        if(isset($_SESSION['username'])){
                            echo '<sup><a href="AddComm.php" id="plus">add</a></sup>';
                        }
                        else{
                            echo '<sup><a href="index.php" id="plus">add</a></sup>';
                        }
                    ?>
                </h1>
                <ul>
                    <?php

                        $sql = "SELECT * FROM blogComments";
                        $queryResult = mysqli_query($connection, $sql);
                        if(mysqli_num_rows($queryResult) > 0){

                            $entry = array();//creates empty array
                            
                            while($assocArray = mysqli_fetch_assoc($queryResult)){
                                $entry[] = $assocArray;
                            }//copies required data into empty array
                            //Sorting algorithm
                            function compareByEntryDate($a, $b) {
                                return strtotime($b['commDate']) - strtotime($a['commDate']);
                            }
                            usort($entry, 'compareByEntryDate');
                            ////// array sorted in descending order i.e. latest at index = 0


                            for($i=0; $i < count($entry); $i++){
                                if(isset($_SESSION['username']) && $_SESSION['adminAccess'] == 1){    
                                    echo '
                                        <li class="oneEntry">
                                            <h2 class="commName">User: '.$entry[$i]['commName'].'<sup>  <a href="removeEntry.php? commNum='.$entry[$i]["commNum"].'" onclick="return confirmation()" class="minus">delete</a></sup></h2>
                                            <p class="date">'.$entry[$i]['commDate'].'</p>
                                            <div class="comm">
                                                '.nl2br($entry[$i]['comm']).'
                                            </div>
                                        </li>    
                                    ';
                                }
                                else{
                                    echo '
                                        <li class="oneEntry">
                                            <h2 class="commName">User: '.$entry[$i]['commName'].'</h2>
                                            <p class="date">'.$entry[$i]['commDate'].'</p>
                                            <div class="comm">
                                                '.nl2br($entry[$i]['comm']).'
                                            </div>
                                        </li>    
                                    ';
                                }
                            }
                        }
                    ?>
                </ul>
            </article>
        </main>

        <footer class="footer">
            <a href="https://teams.microsoft.com/l/chat/0/0?users=r.sharma@se22.qmul.ac.uk">Teams</a>
            <a href="https://www.linkedin.com/in/rchkshrma/">LinkedIn</a>
            <a href="https://wa.me/447436361520">WhatsApp</a>
        </footer>
    </div>
</body>
</html>