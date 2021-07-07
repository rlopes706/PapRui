<?php
include_once ("includes/body.inc.php");


$nome=($_POST['nomeMarcas']);
$cavalagem=($_POST['cavalagemMarcas']);
$motor=($_POST['motorMarcas']);
$diam=($_POST['diamMarcas']);
$binario=($_POST['binarioMarcas']);
$trans=($_POST['transMarcas']);
$caixa=($_POST['caixaMarcas']);
$img=$_FILES['imagemPercursos']['name'];

if($img!=''){
    copy($_FILES['imagemMarcas']['tmp_name'], '../'.$img);
}

$sql="insert into marcas (marcasNome,marcasCavalagem,marcasMotor,marcasDiam,marcasBinario,marcasTrans,marcasCaixa,marcasImgUrl)";
$sql .= " values('".$nome."','".$cavalagem."','".$motor."','".$diam."','".$binario."','".$trans."','".$caixa."','".$img."');";
mysqli_query($con,$sql);// or die(mysqli_error($con));
header("location:marcas.php");


