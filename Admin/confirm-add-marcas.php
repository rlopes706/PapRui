<?php
include_once ("includes/body.inc.php");

$nome=($_POST['nomeMarcas']);
$cavalagem=($_POST['cavalagemMarcas']);
$motor=($_POST['motorMarcas']);
$diam=($_POST['diamMarcas']);
$binario=($_POST['binarioMarcas']);
$img=$_FILES['imagemMarcas']['name'];

if($img!=''){
    copy($_FILES['imagemMarcas']['tmp_name'], '../'.$img);
}

$sql="insert into marcas (marcasNome,marcasCavalagem,marcasMotor,marcasDiam,marcasBinario,marcasImgUrl)";
$sql .= " values('".$nome."','".$cavalagem."','".$motor."','".$diam."','".$binario."','".$img."');";
mysqli_query($con,$sql); //or die(mysqli_error($con))
header("location:marcas.php");

?>


