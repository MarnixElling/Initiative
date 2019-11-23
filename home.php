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
        ?>
            <?php include ('header.php'); ?>
            <div class="container-fluid">
                <div class="row" style="background-color: <?php echo $row['color1'] ?>;">
                    <div class="col-lg-1 col-md-1"></div>
                    <div class="col-lg-10 col-md-10">
                        <div class="row" id="skills">
                            <div class="col-lg-3 col-md-3 skill">
                                <div class="circle" style="background-color: <?php echo $row['color3'] ?>;">
                                    <div class="circle2">
                                        <i class="fas fa-laptop-code"></i>
                                    </div>
                                </div><br>
                                <h2>front end</h2>
                                Zie meer
                            </div>
                            <div class="col-lg-3 col-md-3 skill">
                                <div class="circle" style="background-color: <?php echo $row['color3'] ?>;">
                                    <div class="circle2">
                                        <i class="far fa-file-code"></i>
                                    </div>
                                </div><br>
                                <h2>back end</h2>
                                Zie meer
                            </div>
                            <div class="col-lg-3 col-md-3 skill">
                                <div class="circle" style="background-color: <?php echo $row['color3'] ?>;">
                                    <div class="circle2">
                                        <i class="fas fa-paint-brush"></i>
                                    </div>
                                </div><br>
                                <h2>design</h2>
                                Zie meer
                            </div>
                            <div class="col-lg-3 col-md-3 skill">
                                <div class="circle" style="background-color: <?php echo $row['color3'] ?>;">
                                    <div class="circle2">
                                        <i class="fas fa-user-tie"></i>
                                    </div>
                                </div><br>
                                <h2>Professionaliteit</h2>
                                Zie meer
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-1"></div>
                </div>
            </div>
            <?php include ('footer.php'); ?>
        <?php
            }
        } else {
            echo "Something went wrong.";
        }
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