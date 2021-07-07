<?php
include_once("Includes/body.inc.php");
top(HOME);
$sql ="select * from marcas;";
$result = mysqli_query($con, $sql);
?>


<div id="fh5co-content-section" class="fh5co-section-gray"><p></p>
    <div class="container">
        <div class="row">
            <a class="sub-title-admin"><i class="fas fa-th"></i><strong> Marcas - </strong>ADICIONAR</a>
            <div class="col text-center">
                <div class="desc animate-box">
                    <button class="btn btn-primary" style="height: 60px; width: 300px" onclick="location.href='marcas.php'"><strong> VOLTAR </strong></a><i class="fas fa-arrow-left"></i></i></button>
                </div>
            </div>
        </div>
    </div>

    <p></p>
    <div class="active">
        <div class="container">
            <div class="row">
                <div class="desc animate-box">
                    <table id="t01" style="margin-left: -345px">
                        <tbody>
                        <tr>
                            <th><a class="btn btn-outline" style="cursor: default; width: 130px"><strong>Marca </strong></a></th>
                            <th><a class="btn btn-outline" style="cursor: default; width: 130px"><strong>Cavalagem </strong></a></th>
                            <th><a class="btn btn-outline" style="cursor: default; width: 130px"><strong>Motor </strong></a></th>
                            <th><a class="btn btn-outline" style="cursor: default; width: 200px"><strong>Diâmetro / Curso </strong></a></th>
                            <th><a class="btn btn-outline" style="cursor: default; width: 130px"><strong>Binário </strong></a></th>
                            <th><a class="btn btn-outline" style="cursor: default; width: 130px"><strong>Transmissão </strong></a></th>
                            <th><a class="btn btn-outline" style="cursor: default; width: 200px"><strong>Caixa de Velocidades </strong></a></th>
                            <th><a class="btn btn-outline" style="cursor: default; width: 130px"><strong>Imagem </strong></a></th>
                        </tr>
                        <form action="confirm-add-marcas.php" method="post" enctype="multipart/form-data">
                            <tr class="active" data-number="1">
                                <td><a class="nolink"></a><input class="btn btn-outline" type="text" name="nomeMarcas" style="cursor: text; width: 150px"></td>
                                <td><a class="nolink"></a><input class="btn btn-outline" type="text" name="cavalagemMarcas" style="cursor: text; width: 150px"></td>
                                <td><a class="nolink"></a><input class="btn btn-outline" type="text" name="" style="cursor: text; width: 150px"></td>
                                <td><a class="nolink"></a><input class="btn btn-outline" type="text" name="nomeMarca" style="cursor: text; width: 150px"></td>
                                <td><a class="nolink"></a><input class="btn btn-outline" type="text" name="nomeMarca" style="cursor: text; width: 150px"></td>
                                <td><a class="nolink"></a><input class="btn btn-outline" type="text" name="nomeMarca" style="cursor: text; width: 180px"></td>
                                <td><a class="nolink"></a><input class="btn btn-outline" type="text" name="nomeMarca" style="cursor: text; width: 150px"></td>
                                <td><a class="nolink"></a><input class="btn btn-outline" type="file" name="nomeMarca" style="cursor: pointer; width: 170px"></td>
                            </tr


                        </tbody>
                        </table><p></p>
                            <div class="col text-center">
                                <div class="desc animate-box">
                                    <button class="btn btn-success" type="submit" style="height: 60px; width: 300px; border-color: #3f3f3f" onclick="location.href='marcas.php'"><strong> ADICIONAR </strong></a></button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    #img1 {
        width: 80px;
        height: 80px;
        border: 3px solid #3f3f3f;
    }
</style>





<?php
botabout();
?>
