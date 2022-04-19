<?php

include("config/db.php");


$id=$_GET['id'];

$delete = $con->query("DELETE FROM `products` WHERE `id`='$id'");

header("location:index.php");

?>