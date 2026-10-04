<!DOCTYPE html>
    <html>
        <?php
            session_start();
            require "db.php";
        ?>
        <head>
            <link rel="stylesheet" href="login.css">
        </head>
        <body>
            <div class="main">
                <div class="new">
                    <?php
                        $id = $_GET["id"];
                        $news = $db->prepare("SELECT * FROM news WHERE id=?");
                        $news->execute([$id]);
                        $news = $news->fetch();
                    ?>
                    <h2><?php echo $news["name"]; ?></h2>
                    <p><?php echo $news["content"]; ?></p>
                    <img src="img/<?php echo $news["image"]; ?>">
                </div>
            </div>
        </body>
    </html>