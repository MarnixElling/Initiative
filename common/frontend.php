<?php
$sql = "SELECT * FROM frontend";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
?>
<div class="graph-bar" style="width: <?php echo $row['kennis']; ?>%">
    <?php echo $row['taal']; ?> - <?php echo $row['kennis']; ?>%
</div>
<?php
    }
} else {
    echo "Something went wrong.";
}
?>