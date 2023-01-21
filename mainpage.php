<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<style>
    * {
        font-family: 'Montserrat', sans-serif;
        scroll-behavior: smooth;
    }

    body {
        overflow-x: hidden;
        /* Hide horizontal scrollbar */
    }

    .header {
        width: 100%;
        height: 100%;
        background-image: linear-gradient(rgba(36, 23, 22, 0.7), rgba(247, 244, 244, 0.158)), url("images/skincare17.jpg");
        background-size: cover;
        background-position: center;

        position: relative;
    }

    .header .logo {
        position: absolute;
        left: 590px;
    }

    .nav {
        margin-top: 130px;
        position: absolute;
        width: 100%;
    }

    .nav .anchor {
        position: relative;
        left: 440px;
        padding: 10px 15px;
        text-decoration: none;
        color: white;
        transition: ease-out 0.3s;
        z-index: 1;
    }

    .nav .anchor :hover {
        background-color: #ee9696;
        cursor: pointer;
    }

    .nav .anchor:before {
        transition: 0.5s all ease;
        position: absolute;
        top: 0;
        left: 50%;
        right: 50%;
        bottom: 0;
        opacity: 0;
        content: "";
        background-color: #ee9696;
    }

    .nav .anchor:hover:before {
        transition: 0.5s all ease;
        left: 0;
        right: 0;
        opacity: 1;
        z-index: -1;
    }

    /* Dropdown Button */
    .dropbtn {
        background-color: transparent;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {
        background-color: #ddd;
    }

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
        display: block;
    }

    /* Change the background color of the dropdown button when the dropdown content is shown */
    .dropbtn:hover {
        cursor: pointer;
        background-color: #ee9696;
    }
    .dropbtn :before{
        transition: 0.5s all ease;
        position: absolute;
        top: 0;
        left: 50%;
        right: 50%;
        bottom: 0;
        opacity: 0;
        content: "";
        background-color: #ee9696;
    }
    .dropbtn :hover:before{
        transition: 0.5s all ease;
        left: 0;
        right: 0;
        opacity: 1;
        z-index: -1;
    }

    .active {
        position: absolute;
        margin-top: 130px;
        margin-left: 400px;
        text-decoration: none;
        color: white;
    }

    .text-a {
        color: white;
        position: absolute;
        width: 85%;
        top: 60%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: left;
    }

    .text-a1 {
        font-size: 23px;
    }

    .text-a2 {
        padding: 0%;
        font-size: 75px;
        margin-block-start: 0px;
        margin-block-end: 0px;
    }

    .text-a4 {
        font-size: 20px;
    }

    .sec-a {
        background-color: #ee9696;
        height: 600px;
    }

    .text-baba {
        display: inline-block;
        font-size: 50px;
        color: white;
        margin-top: 50px;
        margin-left: 520px;
        letter-spacing: 0.5rem;
    }

    .main-div {
        background-color: #ee9696;
        width: 70%;
        height: 400px;
        position: absolute;
        margin-left: 200px;
        background-image: url("images/slider1.jpg");
        background-size: 100% 100%;
        box-shadow: 1px 2px 10px white;
        animation: slider 10s infinite linear;
    }

    .section-2{
    height: 200vh;
    background-image: linear-gradient(rgb(219, 142, 137),rgb(247, 244, 244));
    /* background-color: #ee9696; */
    }
    .text-b{
        color: white;
        position: absolute;
        width: 100%;
        margin-top: 7%;
        text-align: center;
    }
    .text-b1{
        font-size: 30px;
    }
    .text-b2{
        color: #C93851;
        font-size: 50px;
    }
    .tbl{
        margin-left: 5%;
    }
    .tbl1{
        color:#C93851;
        font-size: 30px;
    }
    .p{
        color:gray
    }
    .checked{
        color:#C93851
    }


    #section-5{
    margin-top: 0%;
    background-image: linear-gradient(rgba(236, 145, 136, 0.726),rgba(247, 244, 244, 0.158)),url(images/about3.jpg);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    width:100%;
    height:120vh;
}

.container{
    background-color: white;
    width: 600px;
    margin-left: 440px;
    
}
.text-d1{
    font-size: 50px;
    color: white;
    text-align: center; 
}
.text-d2{
    margin-left: 10px;
    color: #C93851;
    font-size: 30px;
}
.text-d3{
    margin-left: 10px;
    color: rgb(61, 55, 55);
    font-size: 40px;
}
.text-d4{
    justify-content: center;
    margin-left: 10px;
    color: gray;
}
.text-d5{
    justify-content: center;
    margin-left: 10px;
    color: gray;
}
.tbl2{
    margin-top: 50px;
    color:#C93851;
    font-size: 50px;
    text-align: center;
}
.abc{
    
    justify-content: center;
}
footer{
    position: absolute;
    bottom: 0;
    height : 100px;
    width: 100%;
}

.leftbox {
    float:left; 
    background:black;
    color: white;
    width:25%;
    height:280px;
}
.middlebox{
    float:left; 
    background:black;
    width:50%;
    height:280px;
}
.center {
    position: relative;
    display: block;
    margin-left: auto;
    margin-right: auto;
    top: 25%;
    width: 50%;
  }
.rightbox{
    float:right;
    background:black;
    color: white;
    width:25%;
    height:280px;
}
.rightbox h3{
    /* position: relative; */
    margin-right: 2%;
}
.jj{
    margin-left: 10px;
}

    @keyframes slider {
        10% {
            background-image: url(images/slider1.jpg);
        }

        30% {
            background-image: url(images/slider2.jpg);
        }

        50% {
            background-image: url(images/slider3.jpg);
        }

        70% {
            background-image: url(images/slider4.png);
        }

        90% {
            background-image: url(images/slider5.jpg);
        }
    }
</style>

<script>
        function setNewImage(){
            document.getElementById("img1").src = "images/lip oil.jpg";
        }
        function setOldImage(){
            document.getElementById("img1").src = "images/lip.jpg";
        }
        function setNewImage2(){
            document.getElementById("img2").src = "images/pixi.jpg";
        }
        function setOldImage2(){
            document.getElementById("img2").src = "images/rose.jpg";
        }
        function setNewImage3(){
            document.getElementById("img3").src = "images/wrinkle2.jpg";
        }
        function setOldImage3(){
            document.getElementById("img3").src = "images/product2.jpg";
        }
        function setNewImage4(){
            document.getElementById("img4").src = "images/cleanser2.jpg";
        }
        function setOldImage4(){
            document.getElementById("img4").src = "images/cleanser.jpg";
        }
        function setNewImage5(){
            document.getElementById("img5").src = "images/mask2.jpg";
        }
        function setOldImage5(){
            document.getElementById("img5").src = "images/mask.jpg";
        }
        function setNewImage6(){
            document.getElementById("img6").src = "images/neutrogena2.jpg";
        }
        function setOldImage6(){
            document.getElementById("img6").src = "images/serum.jpg";
        }
        function setNewImage7(){
            document.getElementById("img7").src = "images/skin2.jpg";
        }
        function setOldImage7(){
            document.getElementById("img7").src = "images/skin.jpg";
        }
        function setNewImage8(){
            document.getElementById("img8").src = "images/lotion2.jpg";
        }
        function setOldImage8(){
            document.getElementById("img8").src = "images/mos.jpg";
        }
</script>

<body>

    <section class="header">
        
        <img class="logo" height="120" width="280" src="images/skincarelogo.png" />

        <div class="nav">
            <a class="anchor" href="mainpage.php">HOME</a>
            <a class="anchor" href="clogin.php">SHOP</a>
            <a class="anchor" href="#section-5">ABOUT US</a>
            <a class="anchor" href="#section-6">TESTIMONIALS</a>
            <a class="anchor" href="index.php">SKIN QUIZ</a>
            <!-- <a class="anchor" href="">CONTACT</a> -->
            <span style="left :450px; margin-top:0px;" class="dropdown">
                <button class="dropbtn">ACCOUNT<i class="fa fa-chevron-down"></i></button>
                <div class="dropdown-content">
                    <a href="login.php">ADMIN</a>
                    <a href="clogin.php">CUSTOMER</a>
                </div>
            </span>     
        </div>

        <div class="text-a">
            <!-- <p class="text-a1">SELF CARE STARTS WITH SKINCARE.</p> -->
            <h1 class="text-a2">SKINVESTMENT</h1>
            <h3 class="text-a3">noun.</h3>
            <p class="text-a4">The action or process of investing time and money with the </p>
            <p class="text-a4">expectation of achieving healthy, youthful, glowing skin.</p>
        </div>
    </section>

    <section class="section-2">
        <div class="text-b">
            <p class="text-b1">PRODUCTS OF PERFECTION</p>
            <h1 class="text-b2">ADD FLAVOUR TO BEING A GIRL</h1>
            <p class="text-b3">SELF CARE STARTS WITH SKINCARE.</p><br><br><br>
            <div class="tbl">
                <table>
                    
                    <tr>
                        <td><img id="img7" onmouseover="setNewImage7()" onmouseout="setOldImage7()" src="images/skin.jpg" width="300" height="300"/></td>
                        <td><img id="img6" onmouseover="setNewImage6()" onmouseout="setOldImage6()" src="images/serum.jpg" width="300" height="300"/></td>
                        <td><img id="img1" onmouseover="setNewImage()" onmouseout="setOldImage()" src="images/lip.jpg" width="300" height="300"/></td>
                        <td><img id="img2" onmouseover="setNewImage2()" onmouseout="setOldImage2()" src="images/rose.jpg" width="300" height="300"/></td>
                    </tr>
    
                    <tr>
                        <td>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </td>
                        <td>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </td>
                        <td>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </td>
                        <td>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </td>
                    </tr>
    
                    <tr>
                        <td><div class="p">Kylie Skin</div>Clayrifying Serum</td>
                        <td><div class="p">Neutrogena</div>Hyaluronic Acid</td>
                        <td><div class="p">Kylie Skin</div>Watermelon Lip Oil</td>
                        <td><div class="p">Pixie Beauty</div>Rose Mask</td>
                    </tr>
    
                </table>
            </div><br>
            <div class="tbl">
                <table>
                    
                    <tr>
                        <td><img onmouseover="setNewImage3()" onmouseout="setOldImage3()" id="img3" src="images/product2.jpg" width="300" height="300"/></td>
                        <td><img onmouseover="setNewImage8()" onmouseout="setOldImage8()"  id="img8" src="images/mos.jpg" width="300" height="300"/></td>
                        <td><img onmouseover="setNewImage5()" onmouseout="setOldImage5()" id="img5" src="images/mask.jpg" width="300" height="300"/></td>
                        <td><img onmouseover="setNewImage4()" onmouseout="setOldImage4()" id="img4" src="images/cleanser.jpg" width="300" height="300"/></td>
                    </tr>
    
                    <tr>
                        <td>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </td>
                        <td>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </td>
                        <td>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </td>
                        <td>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </td>
                    </tr>
    
                    <tr>
                        <td><div class="p">Clinique</div>Wrinkle Correcting Cream</td>
                        <td><div class="p">Kylie Skin</div>Coconut Lotion</td>
                        <td><div class="p">Glow Recipe</div>Clay-Pore Tight Facial</td>
                        <td><div class="p">Glow Recipe</div>Blueberry Cleanser</td>
                    </tr>
    
                </table>
            </div>
        </div>
        
    </section>
    
    <section class="sec-a">
        <h1 class="text-baba">OUR BRANDS</h1>
        <div class="main-div">

        </div>
    </section>

    <section id="section-5">
        <div class="text-d">
            <h1 style="margin-block-start: 0em;" class="text-d1">ABOUT US</h1>
            <div style="text-align:center;" class="container">
                <h5 class="text-d2">HELPING YOU LOOK GOOD</h5>
                <h3 class="text-d3">LET'S TALK ABOUT SKINVESTMENT</h3>
                <p class="text-d4">Pakistan has numerous amazing local skincare brands, but people have a liking for international skincare brands. Many renowned and famous, luxurious products are not easily available in Pakistan as these brands have not opened their outlet here. For ease and better experience of our people, we order these skincare products for you guys and ship it nationwide.<div class="text-d5">Also, you can order place your order personally for any specific perfume by contacting us through email or phone number!</div></p>
                <h5 class="text-d2">FEATURES OF OUR PRODUCTS</h5>
                <ul class="text-d4">
                    <li>100% original</li>
                    <li>Safe and secure packaging</li>
                    <li>Stored in consistent temperature</li>
                </ul>
            </div>  
        </div>
    </section>

    <section id="section-6">
        <table>
            <tr colspan="4"><h2 class="tbl2">TESTIMONIALS</h2></tr>
            <tr>
                <td class="abc">"I am very satisfied with the packaging. Very few services deliver the product in one piece"</td>
                <td class="abc">"The authenticity of the website is great. The quality is just as promised."</td>
                <td class="abc">"Living in Pakistan very few stores offer perfumes from around the world. This is a great platform to find famous perfumes of great brands."</td>
                <td class="abc">"The products are 100% original. Highly recommend this website to order international perfumes."</td>
            </tr>
            <tr>
                <td>-Aliza Suhail</td>
                <td>-Maham Arshad</td>
                <td>-Rafia Shakeel</td>
                <td>-Zainab Kashif</td>
            </tr>
            <tr></tr>
        </table>
    </section>

    <section class="footer">
        <div class = "boxes">
            <div class = "leftbox">
                <h3 class="jj">CONTACT DETAILS</h3>
                <p class="jj">0333-9392929</p>
                <p class="jj">contact@info.com</p>
                <p class="jj">Copyright © 2022 Parfums de Luxe | Powered by Parfums de Luxe</p>
            </div> 
            <div class = "middlebox">
                <img src="images/skincarelogo.png" class="center"/>
            </div>
            <div class="rightbox">
                <h3 class="jj">ADDRESS</h3>
                <p class="jj">3rd floor, Lucky one mall, Karachi, Pakistan.</p>
            </div>
        </div>
    </section>
</body>

</html>