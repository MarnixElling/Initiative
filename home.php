<!DOCTYPE html>
<html lang="nl">
    <?php
    require('common/connect.php');
    require('links.php');
    ?>
    <body>
        <?php
        $sql = "SELECT * FROM colorschemes WHERE id=".$_GET['id'];
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                $color1 = $row['color1'];
                $color2 = $row['color2'];
                $color3 = $row['color3'];
                $color4 = $row['color4'];
            }
        } else {
            echo "Something went wrong while fetching colorschemes data.";
        }
        ?>
            <?php include ('header.php'); ?>
            <div class="container-fluid main-content">
                <div class="row shadow" style="background-color: <?php echo $color1 ?>;">
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-10 col-md-10">
                        <div class="row" id="skills">
                            <div class="col-lg-3 col-md-3 skill">
                                <div class="circle" style="background-color: <?php echo $color3 ?>;">
                                    <div class="circle2">
                                        <i class="fas fa-laptop-code"></i>
                                    </div>
                                </div><br>
                                <h2>front end</h2>
                                <div class="showmore frontend">Zie meer <i class="fas fa-chevron-down arrow1"></i></div>
                            </div>
                            <div class="col-lg-3 col-md-3 skill">
                                <div class="circle" style="background-color: <?php echo $color3 ?>;">
                                    <div class="circle2">
                                        <i class="far fa-file-code"></i>
                                    </div>
                                </div><br>
                                <h2>back end</h2>
                                <div class="showmore backend">Zie meer <i class="fas fa-chevron-down arrow2"></i></div>
                            </div>
                            <div class="col-lg-3 col-md-3 skill">
                                <div class="circle" style="background-color: <?php echo $color3 ?>;">
                                    <div class="circle2">
                                        <i class="fas fa-paint-brush"></i>
                                    </div>
                                </div><br>
                                <h2>design</h2>
                                <div class="showmore design">Zie meer <i class="fas fa-chevron-down arrow3"></i></div>
                            </div>
                            <div class="col-lg-3 col-md-3 skill">
                                <div class="circle" style="background-color: <?php echo $color3 ?>;">
                                    <div class="circle2">
                                        <i class="fas fa-user-tie"></i>
                                    </div>
                                </div><br>
                                <h2>Professionaliteit</h2>
                                <div class="showmore prof">Zie meer <i class="fas fa-chevron-down arrow4"></i></div>
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
                                <h2>De kennis die wij bezitten om te maken wat jij nodig hebt.</h2>
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
                                <h2>De kennis die wij bezitten om te maken wat jij nodig hebt.</h2>
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
                            
                        </div>
                        <div class="col-lg-2 col-md-2"></div>
                    </div>
                </div>
                <div class="row details4">
                    <div class="d-details">
                        <div class="col-lg-2 col-md-2"></div>
                        <div class="col-lg-8 col-md-8">
                            
                        </div>
                        <div class="col-lg-2 col-md-2"></div>
                    </div>
                </div>
                <div class="row" id="about">
                    <div class="col-lg-3 col-md-3"></div>
                    <div class="col-lg-6 col-md-6">
                        <h1 style="color: <?php echo $color3 ?>;">Wie zijn wij?</h1><br>
                        <hr style="background-color: <?php echo $color2 ?>;">
                        <span style="color: <?php echo $color3 ?>;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</span>
                    </div>
                    <div class="col-lg-3 col-md-3"></div>
                </div>
                <div class="row employees">
                    <div class="col-lg-2 col-md-2"></div>
                    <div class="col-lg-8 col-md-8">
                        <h2 style="color: <?php echo $color3; ?>;">Het team:</h2><br>
                        <hr><br>
                        <div class="d-flex justify-content-around">
                            <?php
                                $sql = "SELECT * FROM employees";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()){
                                        ?>
                                        <div class="employee" style="border: 2px solid <?php echo $color2; ?> ; color: <?php echo $color2; ?>;">
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
                        <h2 style="color: <?php echo $color3; ?>;">Email sturen:</h2><br>
                        <form id="form" action="common/contact.php" method="post">
                            <input tabindex="1" class="name" type="text" name="name" placeholder="Voornaam" required>
                            <input tabindex="2" class="surname" type="text" name="name" placeholder="Achternaam" required><br>
                            <input tabindex="4" class="mail email2" type="email" name="email2" placeholder="Herhaal Email" required>
                            <input tabindex="3" class="mail email1" type="email" name="email1" placeholder="Email" required><br>
                            <div class="error"></div>
                            <input tabindex="5" class="message" type="textarea" name="message" placeholder="Bericht" required><br>
                            <button type="submit" style="color: <?php echo $color3 ?>; border: 1px solid <?php echo $color3 ?>;" class="button" type="submit" value="submit">Send your message</button>
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
                        <h2 style="color: <?php echo $color3 ?>;">Partners:</h2><br><br>
                        <div class="row" class="d-flex justify-content-center">
                            <div class="col-lg-3 col-md-3">
                                <a href="http://supafresh.nl"><img src="media/logo-SupaFresh.png" alt="SupaFresh" width="35%"></a>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <a href="http://bitbenders.gluweb.nl"><img src="media/logo-BitBenders.png" alt="BitBenders" width="25%"></a>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <a href="http://bwire.nl"><img src="media/logo-BWire.png" alt="BWire" width="35%"></a>
                            </div>
                            <div class="col-lg-3 col-md-3">
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
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="common/script.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- script links END -->
    </body>
</html>
