window.onscroll = () =>{
    var scroll =  document.querySelector(".scroll-top");
    let documentElement = document.documentElement.scrollTop;
    let documentBody = document.body.scrollTop;
    let isScrollTop = (documentBody > 40 || documentElement > 40);

    isScrollTop ?  scroll.style.display = "block" : scroll.style.display = "none";

    var scrollbtn = document.querySelector(".scroll-top-btn");

    scrollbtn.onclick = () =>{
        scrollTop();
    }

    function scrollTop(){
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
}
for(var i = 0; i<a.length; i++){
    a[i].onclick = () =>{
        document.querySelector("#humberger").click();
    } 
}
function fetchAPI(resourceApi){
    var a, b, c, d, e;
    a = document.getElementsByTagName("*");
    for (b = 0; b < a.length; b++) {
        c = a[b];
        d = c.getAttribute(resourceApi);
        if(d){
            e = new XMLHttpRequest();
            e.onreadystatechange = function(){
                if(this.readyState == 4){
                    if(this.status == 200){c.innerHTML = this.responseText;}
                    if(this.status == 404){c.innerHTML = "Failed to fetch ......Report error";}
                }
                c.removeAttribute(resourceApi);
                fetchAPI(resourceApi);
            }
            e.open("GET", d, true);
            e.send();
            return;
        }    
    }
}
