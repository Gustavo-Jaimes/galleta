<?php
$conn = mysqli_connect("db5006942344.hosting-data.io", "dbu2251743", "GalletaMKT%77%2022", "dbs5732168");

$vacante = $_POST['vacante'];

$sql = "SELECT * FROM vacantes WHERE id= ".$vacante;
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result)){
?>

<h3 class="text-center"><?php echo $row['titulo']; ?></h3>
<?php echo $row['descripcion']; ?>


<?php }?>