
<?php
include_once ("includes/body.inc.php");

$nome=($_POST['nomeCalendario']);
$data=($_POST['dataCalendario']);
$vencedor=($_POST['vencedorCalendario']);
$segundo=($_POST['segundoCalendario']);
$terceiro=($_POST['terceiroCalendario']);
$quarto=($_POST['quartoCalendario']);
$nacionalidade=($_POST['nacionalidadeCalendario']);


$sql="insert into calendario (calendarioNome,calendarioData,calendarioVencedor,calendarioSegundo,calendarioTerceiro,calendarioNacionalidade, calendarioQuarto)";
$sql .= " values('".$nome."','".$data."','".$vencedor."','".$segundo."','".$terceiro."','".$nacionalidade."','".$quarto."');";
mysqli_query($con,$sql);

header("location:calendario.php");
?>
