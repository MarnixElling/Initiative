<!--
  _____ _   _ _____ _______ _____       _______ _______      ________ 
 |_   _| \ | |_   _|__   __|_   _|   /\|__   __|_   _\ \    / /  ____|
   | | |  \| | | |    | |    | |    /  \  | |    | |  \ \  / /| |__   
   | | | . ` | | |    | |    | |   / /\ \ | |    | |   \ \/ / |  __|  
  _| |_| |\  |_| |_   | |   _| |_ / ____ \| |   _| |_   \  /  | |____ 
 |_____|_| \_|_____|  |_|  |_____/_/    \_\_|  |_____|   \/   |______|
                                                                      
-->
<!DOCTYPE html>
<html lang="nl">
    <?php
    require('common/connect.php');
    require('links.php');
    ?>
    <body>
        <?php
        $sql = "SELECT * FROM colorschemes WHERE id=".$_COOKIE['colorscheme']; // hier gebruik je de value die je op heb geslaan in cookie ipv GET
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                $color1 = $row['color1'];
                $color2 = $row['color2'];
                $color3 = $row['color3'];
                $color4 = $row['color4'];
                $current = $row['id'];
            }
        } else {
            echo "Something went wrong while fetching colorschemes data.";
        }
        ?>
            <?php include ('header.php'); ?>
            <div class="container-fluid main-content">
                <div class="row shadow carbon">
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-10 col-md-10">
                        <div class="row" id="skills">
                            <div class="col-lg-3 col-md-3 skill">
                                <div class="circle shadow" style="background-color: <?php echo $color3 ?>;">
                                    <div class="circle2">
                                        <i class="fas fa-laptop-code"></i>
                                    </div>
                                </div><br>
                                <h2>front end</h2>
                                <div class="showmore frontend"><span class="lang" key="zie">Zie meer</span> <i class="fas fa-chevron-down arrow1"></i></div>
                            </div>
                            <div class="col-lg-3 col-md-3 skill">
                                <div class="circle shadow" style="background-color: <?php echo $color3 ?>;">
                                    <div class="circle2">
                                        <i class="far fa-file-code"></i>
                                    </div>
                                </div><br>
                                <h2>back end</h2>
                                <div class="showmore backend"><span class="lang" key="zie">Zie meer</span> <i class="fas fa-chevron-down arrow2"></i></div>
                            </div>
                            <div class="col-lg-3 col-md-3 skill">
                                <div class="circle shadow" style="background-color: <?php echo $color3 ?>;">
                                    <div class="circle2">
                                        <i class="fas fa-paint-brush"></i>
                                    </div>
                                </div><br>
                                <h2>design</h2>
                                <div class="showmore design class"><span class="lang" key="zie">Zie meer</span> <i class="fas fa-chevron-down arrow3"></i></div>
                            </div>
                            <div class="col-lg-3 col-md-3 skill">
                                <div class="circle shadow" style="background-color: <?php echo $color3 ?>;">
                                    <div class="circle2">
                                        <i class="fas fa-user-tie"></i>
                                    </div>
                                </div><br>
                                <h2 class="lang" key="prof">Professionaliteit</h2>
                                <div class="showmore prof"><span class="lang" key="zie">Zie meer</span> <i class="fas fa-chevron-down arrow4"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-1"></div>
                </div>
                <div class="row details1">
                    <div class="a-details">
                        <div class="col-lg-2 col-md-2"></div>
                        <div class="col-lg-8 col-md-8">
                            <div class="graph">
                                <h2 class="lang" key="kennis">De kennis die wij bezitten om te maken wat jij nodig hebt.</h2>
                                <?php include ('common/frontend.php'); ?>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2"></div>
                    </div>
                </div>
                <div class="row details2">
                    <div class="b-details">
                        <div class="col-lg-2 col-md-2"></div>
                        <div class="col-lg-8 col-md-8">
                            <div class="graph">
                                <h2 class="lang" key="kennis">De kennis die wij bezitten om te maken wat jij nodig hebt.</h2>
                                <?php include ('common/backend.php'); ?>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2"></div>
                    </div>
                </div>
                <div class="row details3">
                    <div class="c-details">
                        <div class="col-lg-2 col-md-2"></div>
                        <div class="col-lg-8 col-md-8">
                            <div class="graph">
                                <h2 class="lang" key="designtitle">Interactieve vormgeving.</h2>
                                <span class="lang" key="designtekst">Een ontwerp is veel belangrijker dan veel mensen zouden denken. Zo krijgt een bezoeker al gelijk bij zijn eerste blik een indruk over de website. Is het professioneel, is het te vetrouwen? Of misschien vergelijkt een potentiële klant uw website wel met een website van een ander bedrijf. Daarom is een goed design dus belangrijk voor de bezoeker. En wij kunnen u daarbij helpen!</span><br><br>
                                <span class="lang" key="designtekst2">Wij snappen dat een goed design niet alleen ligt bij het uiterlijk maar ook bij overzichtelijkheid en verduidelijking van functionaliteit. Gelukkig zijn wij binnen ons team heel erg bekend met goede en slechte onderdelen van websites, daarnaast zijn we ook creatief en zullen we 'outside the box' denken. Voor een uniek en schoon ontwerp.</span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2"></div>
                    </div>
                </div>
                <div class="row details4">
                    <div class="d-details">
                        <div class="col-lg-2 col-md-2"></div>
                        <div class="col-lg-8 col-md-8">
                            <div class="graph">
                                <h2 class="lang" key="proftitle">Professionaliteit en ondernemend gedrag.</h2>
                                <span class="lang" key="proftekst">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</span><br><br>
                                <span class="lang" key="proftekst2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2"></div>
                    </div>
                </div>
                <div class="row" id="about">
                    <div class="col-lg-3 col-md-3"></div>
                    <div class="col-lg-6 col-md-6">
                        <h1 style="color: <?php echo $color3; ?>;" class="lang" key="wie" data-aos="fade-up">Wie zijn wij?</h1><br>
                        <hr style="background-color: <?php echo $color2; ?>;">
                        <span style="color: <?php echo $color3; ?>;" data-aos="fade-up">Wij van INITIATIVE zijn webdevelopers die u kunnen helpen uw website van droom tot realiteit te maken. Wij realiseren maatwerk websites en kunnen ook zelf een design ontwikkelen. We zijn jong en leergierig en zullen dan ook niet bang zijn om nieuwe oplossingen te utaliseren. Wij zijn ook van mening dat goede communicatie een van de grootste factoren is voor succes. Zo komen we samen tot een prachtig eindproduct!</span>
                    </div>
                    <div class="col-lg-3 col-md-3"></div>
                </div>
                <div class="row employees">
                    <div class="col-lg-2 col-md-2"></div>
                    <div class="col-lg-8 col-md-8">
                        <h2 style="color: <?php echo $color3; ?>;" class="lang" key="team" data-aos="fade-up">Het team:</h2><br>
                        <hr><br>
                        <div class="d-flex justify-content-around">
                            <?php
                                $sql = "SELECT * FROM employees";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()){
                                        ?>
                                        <div class="employee" style="border: 2px solid <?php echo $color2; ?> ; color: <?php echo $color2; ?>;" data-aos="<?php echo $row['animation']; ?>" <?php echo $row['setting']; ?>>
                                            <img src="<?php echo $row['img']; ?>" alt="<?php echo $row['name']; ?>">
                                            <h2><?php echo $row['name']; ?></h2>
                                            
                                            <span><?php echo $row['description']; ?></span>
                                        </div>
                                        <?php
                                    }
                                } else {
                                    echo "Something went wrong while fetching employees data.";
                                }
                            ?>
                        </div>
                        <br><hr>
                    </div>
                    <div class="col-lg-2 col-md-2"></div>
                </div>
                <div class="row contact" id="contact">
                    <div class="col-lg-2 col-md-2"></div>
                    <div class="col-lg-8 col-md-8 test">
                        <h2 style="color: <?php echo $color3; ?>;" class="lang" key="Email sturen" data-aos="fade-up">Email sturen:</h2><br>
                        <form id="form" action="common/contact.php" method="post">
                            <input data-aos="zoom-in-up" tabindex="1" class="name lang" key="voornaam" type="text" name="name" placeholder="Voornaam" required>
                            <input data-aos="zoom-in-up" tabindex="2" class="surname lang" key="achternaam" type="text" name="name" placeholder="Achternaam" required><br>
                            <input data-aos="zoom-in-up" tabindex="4" class="mail email2 lang" key="herhaal" type="email" name="email2" placeholder="Herhaal Email" required>
                            <input data-aos="zoom-in-up" tabindex="3" class="mail email1 lang" key="email" type="email" name="email1" placeholder="Email" required><br>
                            <div class="error"></div>
                            <input data-aos="zoom-in-up" tabindex="5" class="message lang" key="bericht" type="textarea" name="message" placeholder="Bericht" required><br>
                            <button data-aos="zoom-in-up" type="submit" style="color: <?php echo $color3 ?>; border: 1px solid <?php echo $color3 ?>;" class="button" type="submit" value="submit"><span class="lang" key="versturen">Verstuur bericht</span></button>
                            <style>
                                .button:hover {
                                    background-color: <?php echo $color3; ?> !important;
                                    cursor: pointer;
                                }
                            </style>
                        </form>
                    </div>
                    <div class="col-lg-2 col-md-2"></div>
                </div>
                <div class="row" id="partners">
                    <div class="col-lg-2 col-md-2"></div>
                    <div class="col-lg-8 col-md-8">
                        <h2 style="color: <?php echo $color3 ?>;" class="lang" key="partners" data-aos="fade-up">Partners:</h2><br><br>
                        <div class="row" class="d-flex justify-content-center">
                            <div class="col-lg-3 col-md-3" data-aos="zoom-out">
                                <a href="http://supafresh.nl"><img src="media/logo-SupaFresh.png" alt="SupaFresh" width="35%"></a>
                            </div>
                            <div class="col-lg-3 col-md-3" data-aos="zoom-in">
                                <a href="http://bitbenders.gluweb.nl"><img src="media/logo-BitBenders.png" alt="BitBenders" width="25%"></a>
                            </div>
                            <div class="col-lg-3 col-md-3" data-aos="zoom-out">
                                <a href="http://bwire.nl"><img src="media/logo-BWire.png" alt="BWire" width="35%"></a>
                            </div>
                            <div class="col-lg-3 col-md-3" data-aos="zoom-in">
                                <a href="http://lentjesunlimited.nl"><img src="media/logo-Lentjes.png" alt="LentjesUnlimited" width="25%"></a>
                            </div>
                        </div>
                        <br><br>
                    </div>
                    <div class="col-lg-2 col-md-2"></div>
                </div>
            <?php 
            include ('footer.php');
            $conn->close();
            ?>
        <!-- script links STARTS -->
        <script src="http://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="common/script.js"></script>
        <script src="lang.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <script>var isReply = false, commentID = 0, max = <?php echo $numComments ?>;</script>
        <script src="common/login.js"></script>
        <!-- script links END -->
    </body>
</html>
