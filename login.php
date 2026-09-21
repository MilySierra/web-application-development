<doctype html>
    <html>
        <?php
            session_start();
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $_SESSION["loggedIn"] = true;
                header("Location: administratorpage.php");
                exit;
            }
        ?>
        <head>
            <link rel="stylesheet" href="login.css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <div class="main">
                <div class="form">
                    <h1>Login</h1>
                    <form action="login.php" method="post">
                        <label for="user">User name:</label>
                        <input type="text" name="user" id="user">
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password">
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </body>
    </html>
</doctype>