
<?php
include_once ("includes/body.inc.php");

$nome=($_POST['nomeCalendario']);
$data=($_POST['dataCalendario']);
$vencedor=($_POST['vencedorCalendario']);
$segundo=($_POST['segundoCalendario']);
$terceiro=($_POST['terceiroCalendario']);
$nacionalidade=($_POST['nacionalidadeCalendario']);


$sql="insert into calendario (calendarioNome,calendarioData,calendarioVencedor,calendarioSegundo,calendarioTerceiro,calendarioNacionalidade)";
$sql .= " values('".$nome."','".$data."','".$vencedor."','".$segundo."','".$terceiro."','".$nacionalidade."');";
mysqli_query($con,$sql);

header("location:calendario.php");
?>
