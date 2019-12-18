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
        $sql = "SELECT * FROM colorschemes WHERE id=".$_GET['id'];
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
        <header>
            <div class="col-lg-12 col-md-12 header">
                <div class="grow shadow alwaysvisible faqheader">
                    <ul>
                        <li class="back"><a href="home.php?id=<?php echo $current; ?>"><i class="fas fa-long-arrow-alt-left"></i> terug naar home</a></li>
                        <li><a href="#skills" class="lang" key="vaardigheden">vaardigheden</a></li>
                        <li><a href="#about" class="lang" key="over">over ons</a></li>
                        <li><a href="#partners" class="lang" key="partners">partners</a></li>
                        <li>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    contact
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="">> FAQ <</a>
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
                <div class="settings d-flex justify-content-center align-items-center faqcog">
                    <button class="cogmenu"><i class="fa fa-cog"></i></button>
                </div>
            </div>
        </div>
        <div class="row settingsmenu">
                <div class="sidebar shadow faqsettings">
                    <div class="content">
                        <p class="lang" key="settings">instellingen</p>
                        <ul>
                            <li class="top"><span class="lang" key="kleuren">Kleuren Schema:</span></li>
                            <li><br></li>
                            <li><a href="faq.php?id=1" class="lang" key="business">Business </a><img src="media/kleurenschema1.png" alt="business"></li>
                            <li><a href="faq.php?id=2" class="lang" key="friendly">Friendly </a><img src="media/kleurenschema2.png" alt="friendly"></li>
                            <li><a href="faq.php?id=3" class="lang" key="warm">Warm </a><img src="media/kleurenschema3.png" alt="warm"></li>
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
        </header>
        <div class="container-fluid maintcontent">
            <div class="row questions">
                <div class="col-lg-2 col-md-2"></div>
                <div class="col-lg-8 col-md-8">
                <h1 style="color: <?php echo $color3 ?>;">Veel gestelde vragen</h1><br>
                <?php
                $sql = "SELECT * FROM faq";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()){
                        ?>
                        <div data-aos="fade-up" class="question" <?php echo $row['animation']; ?>>
                            <h3 style="color: <?php echo $color2 ?>;"><?php echo $row['question']; ?></h3><br>
                            <a class="giveanswer" style="color: <?php echo $color3 ?>;"><span class="lang" key="bekijk">Bekijk meer</span>&nbsp; <i class="fas fa-chevron-right"></i><br><div class="answer"><hr><?php echo $row['answer']; ?></div></a>
                            
                        </div>
                        <?php
                        }
                    } else {
                        echo "Something went wrong while fetching colorschemes data.";
                    }
                    ?>
                </div>
            </div>
            <div class="col-lg-2 col-md-2"></div>
            <?php 
            include ('footer.php');
            $conn->close();
            ?>
        </div>
        <!-- script links STARTS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="common/script.js"></script>
        <script src="lang.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <!-- script links END -->
    </body>
</html>