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