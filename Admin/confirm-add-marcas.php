<?php
include_once ("includes/body.inc.php");


$nome=($_POST['nomeMarcas']);
$cavalagem=($_POST['cavalagemMarcas']);
$motor=($_POST['motorMarcas']);
$diam=($_POST['diamMarcas']);
$binario=($_POST['binarioMarcas']);


$sql="insert into marcas (marcasNome,marcasCavalagem,marcasMotor,marcasDiam,marcasBinario)";
$sql .= " values('".$nome."','".$cavalagem."','".$motor."','".$diam."','".$binario."');";
mysqli_query($con,$sql) or die(mysqli_error($con));
header("location:marcas.php");

?>


