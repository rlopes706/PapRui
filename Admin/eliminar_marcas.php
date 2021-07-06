<?php
include_once ("includes/body.inc.php");
$id=intval($_GET['id']);
echo $sql= "delete from marcas where marcaId=".$id;
$con = mysqli_connect(HOST, USER, PWD, DATABASE);
mysqli_query($con,$sql);
header("location:marcas.php");
?>