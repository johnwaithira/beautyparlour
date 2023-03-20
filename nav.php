
 <nav>
    <div class="beauty-pala-nav">
        <div class="beauty-pala-nav-wrapper">
            <input type="checkbox" name="checkNavBar"  id="checkNavBar">
            <div class="logo">
                <h2>BeautyPala</h2>
            </div>
            <div class="navigators">
                <div class="nav-items">
                    <ul>
                        <li><a id="a" href="<?php echo BASE_URL;?>/">Home</a></li>
                        <li><a id="a" href="<?php echo BASE_URL;?>#pricing">Pricing</a></li>
                        <li><a id="a" href="<?php echo BASE_URL;?>/services/">Services</a></li>
                        <li><a id="a" href="<?php echo BASE_URL;?>/about-us/">About</a></li>
                        <li><a id="a" href="<?php echo BASE_URL;?>/contact/">Contact</a></li>
                    </ul>
                </div>
                <div class="clients">
                    <li><button id="book">Book</button></li>
                </div>
            </div>
            <label id="humberger" for="checkNavBar">
                <div class="menu"></div>
                <div class="menu mid"></div>
                <div class="menu"></div>
            </label>
        </div>
    </div>
</nav>
<script>
    var book = document.getElementById("book");
    book.onclick = () =>{
        if(!(window.location == "<?php echo BASE_URL;?>/book/")){
            setInterval(() => {
                window.location.assign("<?php echo BASE_URL;?>/book");
            }, 1000);
        }
    }
</script>