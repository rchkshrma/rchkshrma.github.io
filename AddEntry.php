<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css" type="text/css"> 
    <link rel="stylesheet" href="AddEntry.css" type="text/css">
    <script src="AddPost.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300&family=Raleway:wght@200&display=swap" rel="stylesheet">
    <title>AddToBlog</title>
</head>
<body>
    <div class="body">
        <header>
            <nav class="header">
                <a href="AboutMe.php">About Me</a>
                <a href="Experience.php">Experience</a>
                <a href="SkillsAchievements.php">Skills/Achievements</a>
                <a href="Projects.php">Projects</a>
                <a href="Blog.php">Blog</a>
            </nav>
        </header>

        <main class="main">
            <a href="Blog.php" id="back">&larr;blog</a>
            <article>
                <h1 id="H1Title"><span>C</span>reate <span>P</span>ost</h1>
                <form id="Form" method="POST" action="AddPost.php">
                    <fieldset>
                        <div id="div1">
                            <input type="text" id="Title" name="Title"  placeholder="Title">
                            <p class="Error" id="titleError">Field is required!</p>
                        </div>
                        <div id="div2">
                            <textarea name="Content" id="Content" name="Content" cols="30" rows="10" placeholder="Enter Text Here...." ></textarea>
                            <p class="Error" id="contentError">Field is required!</p>
                        </div>
                        <div id="Button">
                            <input id="Create" type="submit" name="Create" value="Create">
                            <input id="Clear" type="button" name="Clear" value="Clear"> 
                        </div>
                    </fieldset>
                </form>
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