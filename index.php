<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/style/style.css">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
</head>
<body>
<div id="preloader"><img src="/media/img/waiting.svg" alt="" id="loadImg"></div>

    <div id="header">
        <div id="logo">
            <img src="/media/img/logo2.png" alt="">
        </div>
        <div id="topbar">
            <a href="">Contact</a>
            <a href="">Help</a>
            <a href="">Sign in</a>
        </div>
        <div class="clear"></div>

    </div>



    <div id="content">
        <script src="/js/preloader.js"></script>
        <div id="slider">
            <button id="nextPhoto" class="buttonSlider" onclick="changePic(1)"><img src="/media/img/right-arrow-angle.svg" alt="" ></button>
            <button id="prevPhoto" class="buttonSlider" onclick="changePicReverse()"><img src="/media/img/right-arrow-angle.svg" alt="" style="transform: rotate(180deg)"></button>
            <div class="element">
                <div class="shadow">
                    <div class="shadow2">
                        <img src="/media/img/dgfbcvbxcv.jpeg" alt="">
                        <div class="textElement">
                            <span> <span id="firstWord">NBA</span> bascketball</span><br>
                            <span>Championship in New York</span><br>
                            <button>Check out</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="element">
                <div class="shadow">
                    <div class="shadow2">
                        <img src="/media/img/f1.jpg" alt="">
                        <div class="textElement">
                            <span> <span id="firstWord">F1 2018</span></span><br>
                            <span>Championship in Scotland</span><br>
                            <button>Check out</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="element">
                <div class="shadow">
                    <div class="shadow2">
                        <img src="/media/img/football.jpg" alt="">
                        <div class="textElement">
                            <span> <span id="firstWord">Football</span></span><br>
                            <span>Championship in Miamy</span><br>
                            <button>Check out</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="searchbar">
            <input type="text" placeholder="Search...">
            <button id="searchbutton">
                <img src="/media/img/search.svg">
            </button>
        </div>
        <div id="nearToYou"><img src="/media/img/placeholder.svg" alt="">Near to you</div>
        <div id="itemsNearWrapper">
            <div class="itemsNear">
                <div class="shadowBot">
                    <div class="item"><img src="/media/img/football.jpg" alt="">
                        <div class="textWrapper">
                            <span>FOOTBALL</span><br><span>April 30, New York</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="/media/img/gaga.jpg" alt="">
                    <div class="textWrapper">
                        <span>Lady Gaga</span><br><span>March 21, New York</span>
                    </div>
                </div>
                <div class="item">
                    <img src="/media/img/tenis.jpg" alt="">
                    <div class="textWrapper">
                        <span>Grand Slam Tournament</span><br><span>June 24, New York</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="seeMoreWrapper">
            <div>See more</div>
            <button id="seeMoreNear"><img src="/media/img/arrow-down-sign-to-navigate.svg" alt=""></button>
        </div>
        <hr>
        <div id="popularEvemts">Popular Events</div>
        <div id="popularEventsWrapper">
            <div class="itemsNear">
                <div class="shadowBot">
                    <div class="item"><img src="/media/img/f1.jpg" alt="">
                        <div class="textWrapper">
                            <span>Formula 1</span><br><span>June 5, London</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="/media/img/hockeyjpg.jpg" alt="">
                    <div class="textWrapper">
                        <span>Olympic games: hockey</span><br><span>Fabruary 2, Moscow</span>
                    </div>
                </div>
                <div class="item">
                    <img src="/media/img/eminem.jpg" alt="">
                    <div class="textWrapper">
                        <span>Eminem</span><br><span>December 5, Texas</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="seeMoreWrapper">
            <div>See more</div>
            <button id="seeMorePopular"><img src="/media/img/arrow-down-sign-to-navigate.svg" alt=""></button>
        </div>
    </div>

    <div id="footer">
        <div id="informationsWrapper">
            <div id="connectWithUs">
                <h2>Connect with us</h2>
                <ul>
                    <li><a href="">Facebook</a></li>
                    <li><a href="">Instagram</a></li>
                    <li><a href="">Twitter</a></li>
                </ul>
            </div>
            <div id="Company"> <h2>Company</h2>
                <ul>
                    <li><a href="">About us</a></li>
                    <li><a href="">Help</a></li>
                    <li><a href="">Terms</a></li>
                </ul></div>
            <div id="socialMedia">
                <h2>Social media</h2>
                <div id="mediasLinks">
                    <a href="http://facebook.com"><img src="/media/img/facebook.svg" alt="facebook"></a>
                    <a href="http://instagram.com"><img src="/media/img/instagram.svg" alt="instagram"></a>
                    <a href="http://twitter.com"><img src="/media/img/twitter.svg" alt="twitter"></a>
                </div>
            </div>
        </div>
        <div id="rights">© 2018 TICKET ANIMALS ALL RIGHTS RESERVED</div>
    </div>

    <script src="/js/slider.js" async></script>
</body>
</html>