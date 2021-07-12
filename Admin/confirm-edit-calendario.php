<?php
include_once ("includes/body.inc.php");
$id=intval($_POST['idCalendario']);
$nome=addslashes($_POST['nomeCalendario']);
$data=($_POST['dataCalendario']);
$vencedor=($_POST['vencedorCalendario']);
$nacionalidade=($_POST['nacionalidadeCalendario']);

$sql="Update calendario set calendarioNome='".$nome."',calendarioDara='".$data."',calendarioVencedor='".$vencedor."', calendarioNacionalidade='".$nacionalidade."'";

$sql.=" where calendarioId=".$id;

mysqli_query($con,$sql);
header("location:calendario.php");

?>
