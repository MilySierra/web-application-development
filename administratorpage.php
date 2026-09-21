<doctype html>
    <html>
        <?php
            session_start();
            if (!isset($_SESSION["loggedIn"])){
                header("Location: login.php");
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
                    <h1 class="admin">Welcome to the administrator page</h1>
                    <form action="lab1.php" method="post">
                        <label class="admin">Chose your favorite menu:</label>
                        <select name="category">
                            <option value="news.json">Japonaise</option>
                            <option value="newnews.json">Colombian and traditional</option>
                        </select>
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
            
        </body>
    </html>