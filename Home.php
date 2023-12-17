<?php
include("LoginPageConnection.php");
include("header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>TomasinoBlogs</title>
    <link rel="stylesheet" href="style_Home.css">
    <link rel="icon" href="Images/tb_icon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>

<body>

    <section id="blog">
        <div class="blog-heading">

           <img src = "Images/tb_logo.png" class = "logo_Home">

           <div class="blog-container">
            <div class="vid-box">
                <div class="blogs-img">
        
                <iframe width="1000" height="562.2" src="https://www.youtube.com/embed/Spqb8U5dsSc" title="Welcome to TomasinoBlogs!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>          
                  </br>
                    </a>
                </div>


                <div class="blog-text">
                    <span>Watch this Video!</span>
                    <a href="https://www.youtube.com/watch?v=Spqb8U5dsSc" class="blog-title">Welcome to Tomasino Blogs!</a>
                  
                </div>
            </div>
        </div>

        <div class = "ust-spot">
            <span> UST - Spot </span>
        </div>
        
        <div class="blog-container">
            <div class="blog-box">
                <div class="blogs-img">
                    <a href="USTMainBuilding.php">
                        <img src="https://newsinfo.inquirer.net/files/2016/04/UST-Main-building-INQ.jpg" alt="Main Building">
                    </a>
                </div>


                <div class="blog-text">
                    <span>University of Santo Tomas</span>
                    <a href="USTMainBuilding.php" class="blog-title">UST Main Building</a>
                    <p>The University of Santo Tomas Main Building, an iconic symbol of academic excellence in Manila,
                        stands as a testament to centuries of rich history and architectural grandeur.</p>
                    <a href="USTMainBuilding.php">Read More</a>
                </div>
            </div>

            <div class="blog-box2">
                <div class="blogs-img2">
                    <img src="https://philstarlife.s3.ap-east-1.amazonaws.com/photos/Pat/ust%20paskuhan%20lighting%202022/UST%20paskuhan%20lighting%202022%2010.png"
                        alt="Grandstand">
                </div>

                <div class="blog-text">
                    <span>University of Santo Tomas</span>
                    <a href="USTGrandstand.php" class="blog-title">UST Grandstand</a>
                    <p>The University of Santo Tomas (UST) Grandstand, a prominent landmark within the university
                        campus, serves as a versatile venue for various events, including sports competitions, cultural
                        festivities, and significant academic ceremonies.</p>
                    <a href="USTGrandstand.php">Read More</a>
                </div>
            </div>

            <div class="blog-box3">
                <div class="blogs-img3">
                    <img src="https://planetofhotels.com/guide/sites/default/files/styles/paragraph__hero_banner__hb_image__1880bp/public/hero_banner/Arch-of-the-Centuries.jpg" alt="UST Arch of the Centuries">
                </div>

                <div class="blog-text">
                    <span>University of Santo Tomas</span>
                    <a href="UST_Arch.php" class="blog-title">UST Arch of the Centuries</a>
                    <p>The UST Arch of the Centuries, a historic gateway at the University of Santo Tomas, encapsulates
                        the passage of time and serves as a poignant monument to the institution's enduring legacy since
                        its establishment in 1611.</p>
                    <a href="UST_Arch.php">Read More</a>
                </div>
            </div>

            <br>
            <div class="blog-box4">
                <div class="blogs-img4">
                    <img src="https://live.staticflickr.com/7159/6525995883_50686555ff_b.jpg"
                        alt="Lover's Lane">
                </div>

                <div class="blog-text">
                    <span>University of Santo Tomas</span>
                    <a href="USTLoverslane.php" class="blog-title">UST Lover's Lane</a>
                    <p>UST Lovers Lane is an attractive path decorated with lush leaves, making it an ideal site for
                        cherished moments and peaceful encounters. Nestled within the quaint University of Santo Tomas
                        campus, UST Lovers Lane comes with its romantic atmosphere.</p>
                    <a href="USTLoverslane.php">Read More</a>
                </div>
            </div>


            <div class="blog-box5">
                <div class="blogs-img5">
                    <img src="https://photos.wikimapia.org/p/00/00/58/40/24_big.jpg" alt="Quadricentennial Square">
                </div>

                <div class="blog-text">
                    <span>University of Santo Tomas</span>
                    <a href="USTQuadricentennialSquare.php" class="blog-title">UST Quadricentennial Square</a>
                    <p>UST Quadricentennial Square stands as a vibrant focal point at the heart of the University of
                        Santo Tomas, commemorating four centuries of academic excellence with its architectural
                        grandeur, inviting spaces, and a pulsating energy that encapsulates the rich history and dynamic
                        spirit of the institution.</p>
                    <a href="USTQuadricentennialSquare.php">Read More</a>
                </div>
            </div>

            <div class="blog-box6">
                <div class="blogs-img6">
                    <img src="https://philippinechurches.com/wp-content/uploads/2020/02/santisimo-rosario-parish.jpg"
                        alt="Santísimo Rosario Parish">
                </div>

                <div class="blog-text">
                    <span>University of Santo Tomas</span>
                    <a href="USTSantisimoRosario.php" class="blog-title">Santísimo Rosario Parish</a>
                    <p>UST Santísimo Rosario Parish, situated within the hallowed grounds of the University of Santo
                        Tomas, serves as a sacred haven where worshippers gather to experience spiritual tranquility,
                        architectural splendor, and the timeless traditions of faith.</p>
                    <a href="USTSantisimoRosario.php">Read More</a>
                </div>
            </div>

        </div>
    </section>

    <footer>
        @ All Rights Reserved TomasinoBlogs 2023
    </footer>

</body>

</html>