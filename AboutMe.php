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
    <link rel="stylesheet" href="AboutMe.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300&family=Raleway:wght@200&display=swap" rel="stylesheet">
    <title>About Me</title>
</head>
<body>
    <div class="body">
        <header><!--1-->
            <nav class="header"><!--2-->
                <a href="AboutMe.php">About Me</a>
                <a href="Experience.php">Experience</a>
                <a href="SkillsAchievements.php">Skills/Achievements</a>
                <a href="Projects.php">Projects</a>
                <a href="Blog.php">Blog</a>
            </nav>
        </header>

        <main class="main">
            <a href="front.php" id="back">&larr;return</a>
            <article><!--3-->
                <figure id="MyPic"><img src="RochakSharma.png" width="20%"></figure><!--4-->
                <section><!--5-->
                    <h1 id="AboutMe"><span>A</span>bout <span>M</span>e</h1>
                    <p id="p1">My name is Rochak Sharma. I am a first year Computer Science at the Queen Mary University of London. 
                                I am an international student from India. Upon the completion of my Bachelor's I aim to acquire a Master's 
                                in Data Science and Machine Learning. These are the two fields that most intrigue me and I believe will equip 
                                me with the skills and knowledge to make an impactful career.
                    </p>
                    <p id="p2">I plan to return to India with enough knowledge and experience of my field so as to efectively contribute to the recent 
                                techno-economic revolutions like the UPI and e-Rupee.
                    </p>
                    <p id="p3"><ul>
                        <li>BSc Computer Science [Queen Mary University of London] - Currently enrolled.</li>
                        <li>Billabong High International School, Bhopal, Madhya Pradesh, India - Batch of 2022.</li>
                    </ul></p>
                </section>
            </article>
        </main>

        <footer class="footer"><!--6-->
            <a href="https://teams.microsoft.com/l/chat/0/0?users=r.sharma@se22.qmul.ac.uk">Teams</a>
            <a href="https://www.linkedin.com/in/rchkshrma/">LinkedIn</a>
            <a href="https://wa.me/447436361520">WhatsApp</a>
        </footer>
    </div>
</body>
</html>