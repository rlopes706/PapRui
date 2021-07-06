<?php
include_once ("includes/body.inc.php");
//$con=mysqli_connect(HOST,USER,PWD,DATABASE);
//$con->set_charset("utf8");
//var_dump($_POST);
//var_dump($_FILES);
$sql="Select * from percursos";
$percursos=mysqli_query($con,$sql);

$id=intval($_POST['idPercursos']);
$nome=addslashes($_POST['nomePercursos']);
$km=intval($_POST['kmPercursos']);
$img=$_FILES['imagemPercursos']['name'];
$imagemUrl="images/".$img;

$sql="Update percursos set percursoNome='".$nome."',percursoKm='".$km."',percursoImgUrl='".$img."' where percursoId=".$id;
mysqli_query($con,$sql) or die(mysqli_error($con));// or die(mysqli_error($con));

?>