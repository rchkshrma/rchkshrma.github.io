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
    <title>Blog</title>
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
                <a href="Comments.php" id="back">comments section</a>
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
                <h1 id="Blog"><span>B</span>log
                    <?php
                        if(isset($_SESSION['username']) && $_SESSION['adminAccess'] == 1){
                            echo '<sup><a href="AddEntry.php" id="plus">add</a></sup>';
                        }
                    ?>
                </h1>
                <form method="POST" id="selectForm">
                    <select id="monthSelect" name="monthSelect">
                        <option value="none">none</option>
                        <?php
                            $sql = "SELECT DATE_FORMAT(entryDate, '%Y-%M') AS entryMonth FROM blogEntries";
                            $queryResult = mysqli_query($connection, $sql);

                            if(mysqli_num_rows($queryResult) > 0){
                                $options = array();//creates empty array
                                while($assocArray =  mysqli_fetch_assoc($queryResult)){
                                    $options[] = $assocArray['entryMonth'];
                                }//copies required data into empty array
                                $options = array_unique($options);//removes duplicates
                                $options = array_values($options);//removes empty indices
                                //Sorting algorithm
                                function compareByEntryMonth($a, $b) {
                                    return strtotime($b) - strtotime($a);
                                }
                                usort($options, 'compareByEntryMonth');
                                ////// array sorted in descending order i.e. latest at index = 0
                                for ($i=0; $i < count($options); $i++) { 
                                    echo '<option value="'.$options[$i].'">'.$options[$i].'</option>';
                                }
                            }
                    echo '</select>
                    <input type="submit" id="submit" value="Go">
                </form>
                <ul>';
                        if(isset($_POST['monthSelect']) && $_POST['monthSelect'] !== "none"){
                            $monthYear = $_POST['monthSelect'];
                            $sql1 = "SELECT *  FROM blogEntries WHERE (DATE_FORMAT(entryDate, '%Y-%M') = '$monthYear')";
                            $queryResult1 = mysqli_query($connection, $sql1);
                            
                            if(mysqli_num_rows($queryResult1) > 0){

                                $entry = array();
                                
                                
                                while($assocArray = mysqli_fetch_assoc($queryResult1)){
                                    $entry[] = $assocArray;
                                }
                                //Sorting algorithm
                                function compareByEntryDate($a, $b) {
                                    return strtotime($b['entryDate']) - strtotime($a['entryDate']);
                                }
                                usort($entry, 'compareByEntryDate');
                                ////// array sorted in descending order i.e. latest at index = 0


                                for($i=0; $i < count($entry); $i++){
                                    if(isset($_SESSION['username']) && $_SESSION['username']==="one"){    
                                        echo '
                                            <li class="oneEntry">
                                                <h2 class="blogHeading">'.$entry[$i]['entryHeading'].'<sup>  <a href="removeEntry.php? entryNum='.$entry[$i]["entryNum"].'" onclick="return confirmation()" class="minus">delete</a></sup></h2>
                                                <p class="date">Date Uploaded: '.$entry[$i]['entryDate'].'</p>
                                                <div class="blogContent">
                                                    '.nl2br($entry[$i]['entryContent']).'
                                                </div>
                                            </li>    
                                        ';
                                    }
                                    else{
                                        echo '
                                            <li class="oneEntry">
                                                <h2 class="blogHeading">'.$entry[$i]['entryHeading'].'</h2>
                                                <p class="date">Date Uploaded: '.$entry[$i]['entryDate'].'</p>
                                                <div class="blogContent">
                                                    '.nl2br($entry[$i]['entryContent']).'
                                                </div>
                                            </li>    
                                        ';
                                    }
                                }
                            }
                        }
                        else{
                            echo '<h2 class="blogHeading">Select a month to start reading.</h2>';
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