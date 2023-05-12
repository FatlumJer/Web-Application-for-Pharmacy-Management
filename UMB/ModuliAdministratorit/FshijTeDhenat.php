<?php
include("konfigurimi.php");

$ID_Data = $_GET['ID_Data'];

$result = mysqli_query($conn,"DELETE FROM umb_tedhenat WHERE ID_Data=$ID_Data");

header("Location:ballina_admin.php");
?>

