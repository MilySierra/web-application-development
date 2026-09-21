<doctype html>
    <html>
        <head>
            <link rel="stylesheet" href="lab1.css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <header>
                <?php
                    $newimages=file_get_contents("images.json");
                    $images=json_decode($newimages,true);
                ?>
                <div class="logo">
                    <img src="img/<?php echo $images[0]["imgurl"];?>">
                </div>
                <nav class="first">
                    <a href="https://youtu.be/7QU1nvuxaMA?si=e-6bGOzF39hSnVZM">Link 1</a>
                    <a href="https://youtu.be/7QU1nvuxaMA?si=e-6bGOzF39hSnVZM">Link 2</a>
                    <a href="https://youtu.be/7QU1nvuxaMA?si=e-6bGOzF39hSnVZM">Link 3</a>
                    <a href="https://youtu.be/7QU1nvuxaMA?si=e-6bGOzF39hSnVZM">Link 4</a>
                    <a href="https://youtu.be/7QU1nvuxaMA?si=e-6bGOzF39hSnVZM">Link 5</a>
                    <a href="https://youtu.be/7QU1nvuxaMA?si=e-6bGOzF39hSnVZM">Link 6</a>
                    <a href="https://youtu.be/7QU1nvuxaMA?si=e-6bGOzF39hSnVZM">Link 7</a>
                    <input type="text" placeholder="Search">
                    <img src="img/<?php echo $images[3]["imgurl"];?>">
                </nav>
                <nav class="second">
                    <a href="https://youtu.be/7QU1nvuxaMA?si=e-6bGOzF39hSnVZM">Link 1</a>
                    <a href="https://youtu.be/7QU1nvuxaMA?si=e-6bGOzF39hSnVZM">Link 2</a>
                    <a href="https://youtu.be/7QU1nvuxaMA?si=e-6bGOzF39hSnVZM">Link 3</a>
                    <a href="https://youtu.be/7QU1nvuxaMA?si=e-6bGOzF39hSnVZM">Link 4</a>
                    <a href="https://youtu.be/7QU1nvuxaMA?si=e-6bGOzF39hSnVZM">Link 5</a>
                    <a href="https://youtu.be/7QU1nvuxaMA?si=e-6bGOzF39hSnVZM">Link 6</a>
                    <a href="https://youtu.be/7QU1nvuxaMA?si=e-6bGOzF39hSnVZM">Link 7</a>
                    <a href="https://youtu.be/7QU1nvuxaMA?si=e-6bGOzF39hSnVZM">Link 8</a>
                    <a href="https://youtu.be/7QU1nvuxaMA?si=e-6bGOzF39hSnVZM">Link 9</a>
                </nav>
            </header>

            <div class="main">
                <div class="first_part">
                    <div class="news">
                        <div class="new active">
                            <h1>Itsuki lonely</h1>
                        </div>
                        <?php
                        $json=file_get_contents("prueba.json");
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
                        <section>
                            <header>
                                <h3>Our best meals</h3>
                            </header>
                            <hr>
                            <ul>
                                <li>Pasta with sauce and cheese</li>
                                <li>Chocolate cake</li>
                                <li>Burguer</li>
                                <li>Pepperoni pizza</li>
                                <li>Rice with eggs</li>
                                <li>Chicken rice</li>
                                <li>Milkshake</li>
                                <li>Beans with rice and eggs</li>
                                <li>Fika</li>
                                <li>Cookies</li>
                            </ul>
                            <hr>
                            <footer>
                                <a href="https://asone.udea.edu.co/movi-conv-front/#/detalle-convocatoria/4010">View the photos</a>
                                <a href="https://asone.udea.edu.co/movi-conv-front/#/detalle-convocatoria/4010">View the reviews</a>
                            </footer>
                        </section>
                    </div>
                    <div class="image">
                        <img src="img/<?php echo $images[2]["imgurl"]; ?>">
                        <div id="info">
                            <section>
                                <header>
                                    <h3>One of our customer's favorite meal</h3>
                                </header>
                                <p>Pastas a la candura: Our most tipical meal because it is caracterized because your sweet and salty savour.</p>
                            </section>
                        </div>
                    </div>
                    <div class="complement">
                        <img src="img/<?php echo $images[1]["imgurl"]; ?>">
                        <section>
                            <header>
                                <h3>Pablo Neruda</h3>
                            </header>
                            <p>
                                Tú sabes cómo es esto: si miro la luna de cristal, la rama roja del lento otoño en mi ventana, si toco junto al fuego la impalpable ceniza o el arrugado cuerpo de la leña, todo me lleva a ti, como si todo lo que existe, aromas, luz, metales, fueran pequeños barcos que navegan hacia las islas tuyas que me aguardan. Ahora bien, si poco a poco dejas de quererme dejaré de quererte poco a poco. Si de pronto me olvidas no me busques, que ya te habré olvidado. Si consideras largo y loco el viento de banderas que pasa por mi vida y te decides a dejarme a la orilla del corazón en que tengo raíces.
                            </p>
                            <footer>
                                <a href="https://asone.udea.edu.co/movi-conv-front/#/detalle-convocatoria/4010">View the photos</a>
                                <a href="https://asone.udea.edu.co/movi-conv-front/#/detalle-convocatoria/4010">View the reviews</a>
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
                        <hr>
                        <article>
                            <div class="icon">
                                <div class="persona"></div>
                                <h3>Leopold</h3>
                            </div>
                            <p>Everything is amazing</p>
                        </article>
                        <hr>
                        <article>
                            <div class="icon">
                                <div class="persona"></div>
                                <h3>Camila</h3>
                            </div>
                            <p>Is cheaper than other restaurants!</p>
                        </article>
                        <hr>
                        <article>
                            <div class="icon">
                                <div class="persona"></div>
                                <h3>Elena</h3>
                            </div>
                            <p>Beans with rice is my favorite food starting today!!!</p>
                        </article>
                    </div>

                </div>
            </div>
            <script src="script.js"></script>
            <?php ?>
        </body>