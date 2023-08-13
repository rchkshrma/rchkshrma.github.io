<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css" type="text/css">
    <link rel="stylesheet" href="login.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="index.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300&family=Raleway:wght@200&display=swap" rel="stylesheet">
    <title>Login</title>
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
            <a href="front.php" id="back">&larr;return</a>
            <article>
                <h1 id="Login"><span>L</span>ogin</h1>
                <form id="Form" method="POST" action="login.php">
                    <fieldset>
                        <div>
                            <input type="text" id="Username" name="Username"  placeholder="Username">
                            <p id="usernameError" class="Error">Field is required!</p>
                        </div>
                        <div>
                            <input type="password" id="Password" name="Password"  placeholder="Password">
                            <p id="passwordError" class="Error">Field is required!</p>
                        </div>
                        <input id="Button" type="submit" name="submit" value="Login">
                    </fieldset>
                </form>
                <a id="signup" href="SignUpIndex.php">Not Registered? Sign Up.</a>
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