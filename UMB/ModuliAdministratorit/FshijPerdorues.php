<?php

include("konfigurimi.php");


$id = $_GET['id'];


$result = mysqli_query($conn,"DELETE FROM umb_perdoruesit WHERE id=$id");


header("Location:perdoruesit.php");
?>