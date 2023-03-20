<?php
require "./server/configure.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Pala</title>
    <link rel="stylesheet" href="./static/css/index.css">
</head>
<body>
    <div class="scroll-top">
        <p class="scroll-top-btn">
            <span>&#10096;</span>
        </p>
    </div>
    <?php include "./nav.php";?>
    <div class="container top-110">
    <div class="landing-container">
        <div class="image-fluid">
        <style>
            .image-fluid{
            min-height: calc(100vh - 100px);

            }</style>
            <h1 class="f86 f78 f56 f48 f36 f28">
            <span id="b">B</span><span id="e">e</span><span id="a">a</span><span id="u">u</span><span id="t">t</span><span id="y">y</span>
            <span id="p">P</span><span id="a">a</span><span id="l">l</span><span id="a">a</span>

            </h1>

            </div>
        </div>
    </div>
    <?php include "./banner.php";?>
    <div class="booking">
        <div class="booking-wrapper">
            <div class="booking-inner-wrapper display-flex">
                <div class="col-4 col-s-6 col-m-4">
                    <div class="booking-desc">
                        <div class="booking-title">
                            <h3>ONLINE BOOKING</h3>
                        </div>
                        <p>BeautyPala is the place where everyone can is able to find some beauty called to highlight one’s individuality! Online booking ease our operations and saves you time &#10071;  We are waiting right for you!</p>
                        <div class="trans-btn">
                            <button id="booknow">Book Now </button>
                        </div>
                    </div>
                </div>
                <div class="col-8 col-s-6 col-m-8">
                    <div class="booking-img adjust">
                        <div class="reservation">
                            <div class="reservation-desc">
                                <h2>Easy Reservation</h2>
                                <p>Make appointments to our Spas from your home online</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="qoutes-of-the-day adjust">
        <div class="quote-wrapper">
            <div class="inner-quote-wrapper">
                <div class="quote-box">
                    <div class="the-quote">
                        <span class="qoute_sy">&#10077;</span>
                        <h2>beuty is not in the face: beauty is alight in the   heart</h2>
                    </div>
                </div>
                <div class="card">
                    <div class="author-card">
                         <div class="img-card">
                            <img src="./assets/download.jpeg" alt="">
                         </div>
                         <div class="name-fluid">
                             <p>Zawadi Faith</p>
                         </div>
                    </div>
                </div>            
            </div>
        </div>
    </div>
    <div class="newsletter adjust">
        <div class="inner-news-letter-wrapper">
            <div class="stay-in-touch">
                <div class="stay-in-touch-heading">
                    <h1>Stay In Touch</h1>
                </div>
                <div class="stay-in-touch-desc">
                
                <p>Subscribe today and keep in touch with everything BeautyPala</p>
                </div>
            </div>
            <div class="centered-newsletter-form">
                <form action="" id="newsletterform" method="post">
                    <div class="form-group">
                        <input type="text" 
                       placeholder="name@company.com" name="newsletter" id="newsletteremail">
                    </div>
                    <div class="form-btn">
                        <button id="newsletteremailbtn" type="submit">Subscribe</button>
                    </div>
                </form>
        </div>
    </div>
   
    <div palaonInsta = "./footer.php"></div>
    <?php require "./insights.php";?>
    </div>
     <script>
      var booknow= document.getElementById("booknow");
            booknow.onclick = () =>{
                setInterval(() => {
                    window.location.assign("./book")
                }, 500);
            }
        const form = document.querySelector("#newsletterform"),
        newsletteremail = form.querySelector("#newsletteremail"),
        newsletteremailbtn = form.querySelector("#newsletteremailbtn");
        form.onsubmit = (e)=>{
            e.preventDefault();
        }
        newsletteremailbtn.onclick = () =>{
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "./server/newsletter.php", true);
            xhr.onload = () =>{
                if(xhr.readyState === 4){
                    if(xhr.status === 200){
                        let data = xhr.response;
                        alert(data);
                        console.log(data);
                    }
                }
            }
            let formData = new FormData(form);
            xhr.send(formData);
        }
    </script>

    <?php require "./footer.php";?>
    <script>
      fetchAPI("palaonInsta");
      fetchAPI("footer");
    </script>   