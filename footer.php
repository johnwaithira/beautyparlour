  <footer>
    <div class="footer-wrapper">
        <div class="footer-inner-wrapper">
            <div class="footer-content">
                <div class="upper-footer display-flex">
                    <div class="col-3 col-m-4 col-s-6">
                        <div class="footer-box">
                            <div class="inner-box">
                                <div class="footer-title">
                                    <h2>BeautyPala</h2>
                                </div>
                                <div class="footer-logo-desc">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. fugiat nam laborum quis ea, eos id totam cum, similique error, vitae vero!</p>
                                    <div class="socials"><span>FB-</span><span>TW-</span><span>IG</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-m-4 col-s-6">
                        <div class="footer-box">
                            <div class="inner-box">
                                <div class="footer-title">
                                    <h2>Company</h2>
                                </div>
                                <ul class="ul">
                                    <li><a href="">Location and Favourite place</a></li>
                                    <li><a href="">Our History</a></li>
                                    <li><a href="<?php echo BASE_URL;?>/services">Services</a></li>
                                    <li><a href="<?php echo BASE_URL;?>/contact">Reach us</a></li>
                                    <li><a href="">FAQ + Policies</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-m-4 col-s-6">
                        <div class="footer-box">
                            <div class="inner-box">
                                <div class="footer-title">
                                    <h2>Working Hours</h2>
                                </div>
                                <ul class="ul">
                                    <li>Monday - Friday</li>
                                    <li>09:00 - 22:00</li>
                                    <span class="gap"></span>
                                    <li>Monday - Friday</li>
                                    <li>09:00 - 22:00</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 col-m-4 col-s-6">
                        <div class="footer-box">
                            <div class="inner-box">
                                <div class="footer-title">
                                    <h2>Contact</h2>
                                </div>
                                <ul class="ul">
                                    <li><a href="tel:+2547123456789">+(254)0 7 12 3456 789</a></li>
                                    <li><a href="mailto:services@beautypala.com">services@beautypala.com</a></li>
                                    <li><a href="mailto:query@beautypala.com">query@beautypala.com</a></li>
                                    <li><button id="bookn" class="book-appointment">BOOK APPOINTMENT</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>   
                    <div class="col-3 col-m-4 col-s-6">
                        <div class="footer-box">
                            <div class="inner-box">
                                <ul class="ul">
                                    <li><a href="">MAKEUP</a></li>
                                    <li><a href="">MASSAGE</a></li>
                                    <li><a href="">SKIN CARE</a></li>
                                    <li><a href="">HAIR CARE</a></li>
                                    <li><a href="">FOOT, HAND & NAIL CARE</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>  
                    <div class="col-3 col-m-4 col-s-6">
                        <div class="footer-box">
                            <div class="inner-box">
                                <ul class="ul">
                                    <li>PO BOX 17239 VICTORIA STREET WESTLANDS  8077 KENYA</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lower-footer">
                    <hr class="line">
                    <div class="lower-inner-wrapper">
                        <div class="col-6">
                            <p>&copy; <span id="currentYear"><?php echo date("Y"). "  ";?></span>BeautyPala. All rights Reserved</p>
                        </div>
                        <div class="col-6">
                            <p>Developed By <a href="">Zawadi</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script>
    var bookn = document.getElementById("bookn");
        bookn.onclick = () =>{
            setInterval(() => {
                window.location.assign("<?php echo BASE_URL;?>/book")
            }, 500);
        }
</script>
<script src="./static/script/index.js"></script>

