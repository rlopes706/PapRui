<pre>
<?php
include_once ("includes/body.inc.php");

$nome=($_POST['nomeCalendario']);
$data=($_POST['dataCalendario']);
$vencedor=($_POST['vencedorCalendario']);
$nacionalidade=($_POST['nacionalidadeCalendario']);
print_r($_POST);

$sql="insert into calendario (calendarioNome,calendarioData,calendarioVencedor,calendarioNacionalidade)";
$sql .= " values('".$nome."','".$data."','".$vencedor."','".$nacionalidade."');";
mysqli_query($con,$sql);
echo mysqli_error($con);
//header("location:calendario.php");
?>
