<header id="top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 header">
                <div class="row nav">
                    <div class="col-lg-1 col-md-1 d-flex justify-content-center align-items-center">
                        <!-- leftside -->
                        <img src="media/glogo.png">
                    </div>
                    <div class="col-lg-10 col-md-10 d-flex justify-content-center align-items-center navigation">
                        <ul>
                            <li><a href="#skills" class="lang" key="vaardigheden">vaardigheden</a></li>
                            <li><a href="#about" class="lang" key="over">over ons</a></li>
                            <li><a href="#partners" class="lang" key="partners">partners</a></li>
                            <li>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        contact
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="faq.php?id=<?php echo $current; ?>">FAQ</a>
                                        <a class="dropdown-item" href="#contact" class="lang" key="email">Email</a>
                                        <a class="dropdown-item" href="#call" class="lang" key="telefoon">Telefoon</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-1 col-md-1">
                        <!-- rightside -->
                        <div class="settings d-flex justify-content-center align-items-center">
                            <button class="cogmenu"><i class="fa fa-cog"></i></button>
                        </div>
                    </div>
                </div>
                <div class="grow shadow">
                    <ul>
                        <li><a href="#skills" class="lang" key="vaardigheden">vaardigheden</a></li>
                        <li><a href="#about" class="lang" key="over">over ons</a></li>
                        <li><a href="#partners" class="lang" key="partners">partners</a></li>
                        <li>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    contact
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="faq.php?id=<?php echo $current; ?>">FAQ</a>
                                    <a class="dropdown-item" href="#contact" class="lang" key="email">Email</a>
                                    <a class="dropdown-item" href="#call" class="lang" key="telefoon">Telefoon</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="navcolor">
                        <style>
                            .navcolor {
                                background-color: <?php echo $color1; ?> !important;
                            }
                        </style>
                    </div>
                </div>
                <div class="row settingsmenu">
                    <div class="sidebar shadow">
                        <div class="content">
                            <p class="lang" key="settings">instellingen</p>
                            <ul>
                                <li class="top"><span class="lang" key="kleuren">Kleuren Schema:</span></li>
                                <li><br></li>
                                <li><a href="home.php?id=1" class="lang" key="business">Business </a><img src="media/kleurenschema1.png" alt="business"></li>
                                <li><a href="home.php?id=2" class="lang" key="friendly">Friendly </a><img src="media/kleurenschema2.png" alt="friendly"></li>
                                <li><a href="home.php?id=3" class="lang" key="warm">Warm </a><img src="media/kleurenschema3.png" alt="warm"></li>
                            </ul>
                            <ul class="languages">
                                <li class="top"><span class="lang" key="taal">Taal:</span></li>
                                <li><br></li>
                                <li class="option"><button class="translate language dutch selected" id="nl"><img src="media/nl.png" alt="Nederlands"></button></li>
                                <li class="option"><button class="translate language english" id="en"><img src="media/uk.png" alt="English"></button></li>
                                <li class="option"><button class="translate language german" id="de"><img src="media/de.png" alt="Deutsch"></button></li>   
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row front">
                    <div class="col-lg-4 col-md-4"></div>
                    <div class="col-lg-4 col-md-4">
                        <h1>INITIATIVE™</h1>
                        <p class="lang" key="slogan">Want met teamwork kom je het verst!</P>
                        <div class="button shadow" style="border: 2px solid <?php echo $color3; ?>;">
                            <a href="#contact" class="lang" key="start">Start meteen</a>
                        </div>
                        <div class="mouse d-flex justify-content-center">
                            <a href="#skills">
                                <div class="mouse-icon shadow">
                                    <span class="mouse-wheel shadow"></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4"></div>
                </div>
                <a href="#top">
                    <button id="scrolltop" style="border: 2px solid <?php echo $color3 ?>; color: <?php echo $color3 ?>;">
                        <i class="fas fa-angle-up"></i>
                    </button>
                </a>
                <video autoplay muted loop post="media/background.png" class="background">
                    <source src="media/background2.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
</header>
