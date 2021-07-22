<?php
include_once("Includes/body.inc.php");
top(HOME);
$sql ="select * from calendario;";
$result = mysqli_query($con, $sql);
?>

<div id="fh5co-content-section" class="fh5co-section-gray"><p></p>
    <div class="container">
        <div class="row">
            <a class="sub-title-admin"><i class="icon-calendar3"></i><strong> calendário - </strong>adicionar</a>
            <div class="col text-center">
                <div class="desc animate-box">
                    <button class="btn btn-primary" style="height: 50px; width: 200px" onclick="location.href='calendario.php'"><strong>VOLTAR </strong><i class="fas fa-arrow-left"></i></button>
                </div>
            </div>
        </div>
    </div><p></p>
    <div class="active">
        <div class="container">
            <div class="row">
                <div class="desc animate-box">
                    <table id="t01" style="margin-left: -350px">
                        <tbody>
                        <tr>
                            <th><a class="btn btn-outline" style="cursor: default; width: 200px"><strong>Localidade </strong></a></th>
                            <th><a class="btn btn-outline" style="cursor: default; width: 230px"><strong>Data do Começo </strong></a></th>
                            <th><a class="btn btn-outline" style="cursor: default; width: 200px""><strong>Vencedor </strong></a></th>
                            <th><a class="btn btn-outline" style="cursor: default; width: 230px"><strong>Nacionalidade </strong></a></th>
                            <th><a class="btn btn-outline" style="cursor: default; width: 200px""><strong>Segundo </strong></a></th>
                            <th><a class="btn btn-outline" style="cursor: default; width: 200px""><strong>Terceiro </strong></a></th>
                            <th><a class="btn btn-outline" style="cursor: default; width: 200px""><strong>Quarto </strong></a></th>
                            <th><a class="nolink"><strong> <!-- Espaço --> </strong></a></th>
                        </tr>
                        <form action="confirm-add-calendario.php" method="post" enctype="multipart/form-data">
                            <tr class="active" data-number="1">
                                <td><a class="nolink"></a><input class="btn btn-outline" type="text" name="nomeCalendario"style="cursor: text; width: 200px""></td>
                                <td><a class="nolink"></a><input class="btn btn-outline" type="date" name="dataCalendario" style="cursor: pointer; width: 200px""></td>
                                <td><a class="nolink"></a><input class="btn btn-outline" type="text" name="vencedorCalendario" style="cursor: text; width: 200px""></td>
                                <td><a class="nolink"></a><input class="btn btn-outline" type="text" name="nacionalidadeCalendario" style="cursor: text; width: 200px""></td>
                                <td><a class="nolink"></a><input class="btn btn-outline" type="text" name="segundoCalendario" style="cursor: text; width: 200px""></td>
                                <td><a class="nolink"></a><input class="btn btn-outline" type="text" name="terceiroCalendario" style="cursor: text; width: 200px""></td>
                                <td><a class="nolink"></a><input class="btn btn-outline" type="text" name="quartoCalendario" style="cursor: text; width: 200px""></td>
                                <td><a class="nolink"></a><input class="btn btn-success" type="submit" value="Adicionar" style="height: 45px; width: 150px; border-color: #3f3f3f""></td>
                          </tr
                        </form>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><p></p>
    </div><p></p>
</div>

<?php
botabout();
?>
