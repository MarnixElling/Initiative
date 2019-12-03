<!DOCTYPE html>
<html>
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
            echo "Something went wrong.";
        }
        ?>
            <?php include ('header.php'); ?>
            <div class="container-fluid">
                <div class="row" style="background-color: <?php echo $color1 ?>;">
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