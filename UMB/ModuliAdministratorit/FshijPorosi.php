<?php
//including the database connection file
include("konfigurimi.php");

//getting uid of the data from url
$id_porosia = $_GET['id_porosia'];

//deleting the row from table
$result = mysqli_query($conn,"DELETE FROM umb_porosit_barna WHERE id_porosia=$id_porosia");

//redirecting to the display page (index.php in our case)
header("Location:fshij_porosi.php");
?>