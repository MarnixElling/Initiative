<?php
$sql = "SELECT * FROM frontend";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
?>
<div class="graph-bar front-end inactive" style="width: <?php echo $row['kennis']; ?>%">
    <i class="far fa-question-circle explain <?php echo $row['taal']; echo $row['id']; ?>"></i> <?php echo $row['taal']; ?> - <?php echo $row['kennis']; ?>%
</div>
<div class="code-description <?php echo $row['taal']; ?>" style="background-color: <?php echo $color3 ?>;">
    <?php echo $row['uitleg']; ?>
</div>
<?php
    }
} else {
    echo "Something went wrong.";
}
?>