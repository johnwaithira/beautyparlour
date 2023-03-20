<?php
require "../server/configure.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Pala</title>
    <link rel="stylesheet" href="../static/css/index.css">
</head>
<body>
    <div class="scroll-top">
        <p class="scroll-top-btn">
            <span>&#10096;</span>
        </p>
    </div>
    <?php include "../nav.php";?>
    <div class="container top-110">
        <div class="container-2">
            <div class="image-fluid">
                <h1>About Us</h1>
            </div>
        </div>
    </div>
    <div class="more-info">
        <div class="info-wrapper-1">
            <div class="my-info display-flex-ordinary">
                <div class="col-4 col-s-6">
                    <div class="info-container">
                        <div class="image-holder-1 ">
                            <img src="../assets/h2-icon-w-text-1-1.png" alt="">
                        </div>
                        <div class="details">
                            <p>We trim your nails straight across. 
                                This help you avoid ingrown nails.
                                Avoid harsh nail polishes</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-s-6">
                    <div class="info-container">
                        <div class="image-holder-1 ">
                            <img src="../assets/h2-icon-w-text-2-1.png" alt="">
                        </div>
                        <div class="details">
                            <p>Get you nails splashed with colourful inks from our shop. From Sponge Bobbing to Nail Art Decals and stickers</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-s-6">
                    <div class="info-container">
                        <div class="image-holder-1 ">
                            <img src="../assets/h2-icon-w-text-3-1.png" alt="">
                        </div>
                        <div class="details">
                            <p>Get latest styles and high quality nail art from BeautyPala. Don't rule out the natural look this year, either </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <div class="page-1 booking">
        <div class="booking-wrapper">
            <div class="booking-inner-wrapper display-flex">
                <div class="col-6 col-s-6 col-m-6">
                    <div class="booking-desc">
                        <div class="booking-title">
                            <p class="banner">Nail. Hand. Care</p>
                            <h1>Contact Our Salon</h1>
                        </div>
                        <style>
                            .contact{
                                display: flex;
                                flex-direction: column;
                            }
                            .contact .img-text img{
                                width: 40px;
                            }
                            .img-text{
                                margin-top: 20px;
                                display: flex;
                                align-items: center;
                            }
                            .img-text p{
                                padding-left: 20px;
                            }
                            .contact a{
                                text-decoration: none;
                                color: inherit;
                            }
                        </style>
                        <div class="contact">
                            <div class="contact-desc">
                                <p class="p col-8">Have any query concerning our services? Don't hesitate to contact us and we'll get back to you as soon as possible.</p>
                            </div>
                            
                            <div class="image-links">
                                <div class="img-text">
                                    <img src="../assets/inner-4-icon-2.png" alt="">
                                    <p><a href="mailto:services@beautypala.com">services@beautypala.com</a></p>
                                </div>
                                <div class="img-text">
                                    <img src="../assets/inner-4-icon-3.png" alt="">
                                    <p><a href="tel:+2547123456789">+(254)0 7 12 3456 789</a></p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-6 col-s-6 col-m-6">
                    <div class="booking-img-1 adjust">
                        <img src="../assets/h1-img-6.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require "../insights.php";?>
   
    <?php require "../footer.php";?>
    <script src="../static/script/index.js"></script>
</body>
</html>