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
            <link rel="stylesheet" href="lab1.css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <header>
                <?php
                    $newimages=file_get_contents("images.json");
                    $newmaterial=file_get_contents("material.json");
                    $images=json_decode($newimages,true);
                    $material=json_decode($newmaterial,true);
                ?>
                <div class="logo">
                    <img src="img/<?php echo $images[0]["imgurl"];?>">
                </div>
                <nav class="first">
                    <a href="<?php echo $material[0]["hrl"]; ?>">Link 1</a>
                    <a href="<?php echo $material[0]["hrl"]; ?>">Link 2</a>
                    <a href="<?php echo $material[0]["hrl"]; ?>">Link 3</a>
                    <a href="<?php echo $material[0]["hrl"]; ?>">Link 4</a>
                    <a href="<?php echo $material[0]["hrl"]; ?>">Link 5</a>
                    <a href="<?php echo $material[0]["hrl"]; ?>">Link 6</a>
                    <a href="<?php echo $material[0]["hrl"]; ?>">Link 7</a>
                    <input type="text" placeholder="Search">
                    <img src="img/<?php echo $images[3]["imgurl"];?>">
                </nav>
                <nav class="second">
                    <a href="<?php echo $material[0]["hrl"]; ?>">Link 1</a>
                    <a href="<?php echo $material[0]["hrl"]; ?>">Link 2</a>
                    <a href="<?php echo $material[0]["hrl"]; ?>">Link 3</a>
                    <a href="<?php echo $material[0]["hrl"]; ?>">Link 4</a>
                    <a href="<?php echo $material[0]["hrl"]; ?>">Link 5</a>
                    <a href="<?php echo $material[0]["hrl"]; ?>">Link 6</a>
                    <a href="<?php echo $material[0]["hrl"]; ?>">Link 7</a>
                    <a href="<?php echo $material[0]["hrl"]; ?>">Link 8</a>
                    <a href="<?php echo $material[0]["hrl"]; ?>">Link 9</a>
                </nav>
            </header>

            <div class="main">
                <div class="first_part">
                    <div class="news">
                        <div class="new active">
                            <h1>Itsuki lonely</h1>
                        </div>
                        <?php
                            $newnews=$_POST["category"];
                            $json = file_get_contents($newnews);
                            $news = json_decode($json, true);
                        ?>
                        <div class="new">
                            <h2><?php echo $news[0]["title"]; ?></h2>
                            <p><?php echo $news[0]["content"]; ?></p>
                            <img src="img/<?php echo $news[0]["imgurl"]; ?>">
                        </div>
                        <div class="new">
                            <h2><?php echo $news[1]["title"]; ?></h2>
                            <p><?php echo $news[1]["content"]; ?></p>
                            <img src="img/<?php echo $news[1]["imgurl"]; ?>">
                        </div>
                        <div class="new">
                            <h2><?php echo $news[2]["title"]; ?></h2>
                            <p><?php echo $news[2]["content"]; ?></p>
                            <img src="img/<?php echo $news[2]["imgurl"]; ?>">
                        </div>
                    </div>
                </div>
                <div class="second_part">
                    <div class="menu">
                        <?php 
                        $newlist=file_get_contents("menu.json");
                        $list = json_decode($newlist, true);
                        ?>
                        <section>
                            <header>
                                <h3><?php echo $list[0]["title"]; ?></h3>
                            </header>
                            <hr>
                            <ul>
                                <li><?php echo $list[1]["first"]; ?></li>
                                <li><?php echo $list[1]["second"]; ?></li>
                                <li><?php echo $list[1]["third"]; ?></li>
                                <li><?php echo $list[1]["fourth"]; ?></li>
                                <li><?php echo $list[1]["fifth"]; ?></li>
                                <li><?php echo $list[1]["sixth"]; ?></li>
                                <li><?php echo $list[1]["seventh"]; ?></li>
                                <li><?php echo $list[1]["eighth"]; ?></li>
                                <li><?php echo $list[1]["nineth"]; ?></li>
                                <li><?php echo $list[1]["tenth"]; ?></li>
                            </ul>
                            <hr>
                            <footer>
                                <a href=<?php echo $list[2]["hrl"]; ?>>View the photos</a>
                                <a href=<?php echo $list[2]["hrl"]; ?>>View the reviews</a>
                            </footer>
                        </section>
                    </div>
                    <div class="image">
                        <img src="img/<?php echo $images[2]["imgurl"]; ?>">
                        <div id="info">
                            <?php 
                            $newinfo=file_get_contents("info.json");
                            $info=json_decode($newinfo, true);
                            ?>
                            <section>
                                <header>
                                    <h3><?php echo $info[0]["title"]; ?></h3>
                                </header>
                                <p><?php echo $info[0]["content"]; ?></p>
                            </section>
                        </div>
                    </div>
                    <div class="complement">
                        <img src="img/<?php echo $images[1]["imgurl"]; ?>">
                        <section>
                            <header>
                                <h3><?php echo $info[1]["title"]; ?></h3>
                            </header>
                            <p>
                                <?php echo $info[1]["content"] ?>
                            </p>
                            <footer>
                                <a href=<?php echo $info[1]["hrl"] ?>>View the photos</a>
                                <a href=<?php echo $info[1]["hrl"] ?>>View the reviews</a>
                            </footer>
                        </section>
                        
                    </div>
                </div>

                <div class="third_part">
                    <div class="image">
                        <img src="img/<?php echo $images[4]["imgurl"]; ?>">
                    </div>
                    <div class="video">
                        <video controls>
                            <source src="videos/<?php echo $images[5]["videourl"];?>" type="video/mp4">
                        </video>
                    </div>
                    <div class="reviews">
                        <h2>Reviews</h2>
                        <?php
                        $newreviews= file_get_contents("reviews.json");
                        $reviews=json_decode($newreviews,true);
                        ?>
                        <hr>
                        <article>
                            <div class="icon">
                                <div class="persona"></div>
                                <h3><?php echo $reviews[0]["title"]; ?></h3>
                            </div>
                            <p><?php echo $reviews[0]["content"]; ?></p>
                        </article>
                        <hr>
                        <article>
                            <div class="icon">
                                <div class="persona"></div>
                                <h3><?php echo $reviews[1]["title"]; ?></h3>
                            </div>
                            <p><?php echo $reviews[1]["content"]; ?></p>
                        </article>
                        <hr>
                        <article>
                            <div class="icon">
                                <div class="persona"></div>
                                <h3><?php echo $reviews[2]["title"]; ?></h3>
                            </div>
                            <p><?php echo $reviews[2]["content"]; ?></p>
                        </article>
                    </div>

                </div>
            </div>
            <script src="script.js"></script>
            <?php ?>
        </body>