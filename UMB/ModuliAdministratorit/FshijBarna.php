<?php
include("konfigurimi.php");

$id_barna = $_GET['id_barna'];

$result = mysqli_query($conn,"DELETE FROM umb_barna WHERE id_barna=$id_barna");

header("Location:ballina_admin.php");
?>
