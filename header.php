<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 header">
                <div class="row nav">
                    <div class="col-lg-1 col-md-1 d-flex justify-content-center align-items-center">
                        <!-- leftside -->
                        <img src="media/glogo.png">
                    </div>
                    <div class="col-lg-10 col-md-10 d-flex justify-content-center align-items-center">
                        <ul>
                            <li><a href="#skills">vaardigheden</a></li>
                            <li><a href="#about">over ons</a></li>
                            <li><a href="#partners">partners</a></li>
                            <li>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        contact
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">FAQ</a>
                                        <a class="dropdown-item" href="#contact">Email</a>
                                        <a class="dropdown-item" href="#">Telefoon</a>
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
                <div class="row settingsmenu">
                    <div class="sidebar">
                        <div class="content">
                            <p>settings</p>
                            <ul>
                                <li class="top">Kleuren Schema:</li>
                                <li><br></li>
                                <li><a href="home.php?id=1">Business <img src="media/kleurenschema1.png" alt="business"></a></li>
                                <li><a href="home.php?id=2">Friendly <img src="media/kleurenschema2.png" alt="friendly"></a></li>
                                <li><a href="home.php?id=3">Warm <img src="media/kleurenschema3.png" alt="warm"></a></li>
                            </ul>
                            <ul class="languages">
                                <li class="top">Taal:</li>
                                <li><br></li>
                                <li class="option"><button class="language dutch selected"><img src="media/nl.png" alt="Nederlands"></button></li>
                                <li class="option"><button class="language english"><img src="media/uk.png" alt="English"></button></li>
                                <li class="option"><button class="language german"><img src="media/de.png" alt="Deutsch"></button></li>   
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row front">
                    <div class="col-lg-4 col-md-4"></div>
                    <div class="col-lg-4 col-md-4">
                        <h1>INITIATIVE™</h1>
                        Want met teamwork kom je het verst!
                        <div class="button" style="background-color: <?php echo $color2; ?>; border: 2px solid <?php echo $row['color3']; ?>;">
                            <a href="#contact">Start Meteen</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4"></div>
                </div>
                <img src="media/background.png" alt="header image">
            </div>
        </div>
    </div>
</header>