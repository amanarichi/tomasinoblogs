<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>TomasinoBlogs</title>
    <link rel="stylesheet" href="style_AboutUs.css">
    <link rel="icon" href="Images/tb_icon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php 
        include ("header.php");
    ?>

<style>
        .responsive-container-block.rightSide {
            display: flex;
            flex-wrap: wrap;
        }

        .square-image {
            width: 240px;
            height: 240px; 
            object-fit: cover;
            margin: 20px; 
            transition: transform 0.3s ease-in-out;
        }

        .square-image {
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Adding transitions for smoother effects */
}

.square-image:hover {
    transform: scale(1.2);
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.9); /* Modify shadow properties as needed */
}
    </style>

            <div class="responsive-container-block bigContainer">
                <div class="responsive-container-block Container">
                  <div class="responsive-container-block leftSide">
                    <p class="text-blk heading">
                      Meet the TomasinoBlogs Team
                    </p>
                    <p class="text-blk subHeading">
                        Welcome to TomasinoBlogs, an online platform that showcases the diverse and insightful perspectives of the bright minds at the University of Santo Tomas. Founded on the belief that every student has a unique story to tell, TomasinoBlogs serves as a dynamic hub for the creative and intellectual expression of our university community. Here, students from various disciplines come together to share their experiences, insights, and passions through engaging and thought-provoking blogs. Whether it's exploring academic pursuits, delving into personal journeys, or addressing pressing societal issues, TomasinoBlogs is a testament to the rich tapestry of voices within our university. Join us in celebrating the vibrant and ever-evolving narratives of the UST community, as we strive to foster connection, understanding, and a sense of shared identity through the power of words.
                    </p>
                  </div>
                  <div class="responsive-container-block rightSide">
                    
    <img class="square-image" src="https://drive.google.com/uc?export=view&id=10dKGpLDC6jO2eNxtyaQX4i7jcamG9ftC">
    <img class="square-image" src="https://drive.google.com/uc?export=view&id=1aM479FPrglk7l1FfKXqzWhP2Htmof0Z7">
    <img class="square-image" src="https://drive.google.com/uc?export=view&id=1mOSaoqsmY75BNwYGZ-FKBed3imnOzylI">
    <img class="square-image" src="https://drive.google.com/uc?export=view&id=17E1WdIK2X3U-eutHpIb8aDoEicJwCvx_">
    <img class="square-image" src="https://drive.google.com/uc?export=view&id=1j8oX5_hUEuEqGj_rdp8rYq49_SXriRKq">
    <img class="square-image" src="https://drive.google.com/uc?export=view&id=1xJFIZB6bpLWvXKTtISZdBDXisQIS0_Iv">
</div>

                </div>
              </div>

    <footer>
        @ All Rights Reserved TomasinoBlogs 2023
    </footer>



</body>
</html>