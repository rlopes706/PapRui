<?php
include_once("Includes/body.inc.php");
top(HOME);
$con = mysqli_connect(HOST, USER, PWD, DATABASE);
$sql ="select * from marcas;";
$result = mysqli_query($con, $sql);
//---
?>


        <div id="fh5co-content-section" class="fh5co-section-gray"><p></p>
            <div class="container">
                <div class="row">
                    <a class="sub-title-admin"><i class="fa fa-car"></i><strong> Carros</strong></a>
                    <div class="col text-center">
                        <div class="desc animate-box">
                            <button class="btn btn-primary" style="height: 60px; width: 400px" onclick="location.href='adicionar_marcas.php'"><strong>ADICIONAR </strong></a><i class="icon-plus3"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <p></p>
            <div class="active">
                <div class="container">
                    <div class="row">
                        <div class="desc animate-box">
                            <table id="t01">
                                <tbody>
                                    <tr>
                                        <th><a class="nolink"><strong>ID </strong></a></th>
                                        <th><a class="nolink"><strong>Marca </strong></a></th>
                                        <th><a class="nolink"><strong>Cavalagem </strong></a></th>
                                        <th><a class="nolink"><strong>Motor </strong></a></th>
                                        <th><a class="nolink"><strong>Diâmetro / Curso </strong></a></th>
                                        <th><a class="nolink"><strong>Binário </strong></a></th>
                                        <th><a class="nolink"><strong>Imagem </strong></a></th>
                                        <th><a class="nolink"><strong> Opções </strong></a></th>
                                    </tr>

                                    <?php
                                    while ($dados = mysqli_fetch_array($result)) {
                                    ?>

                                    <tr class="active" data-number="1">
                                        <td><a class="nolink"><?php echo $dados['marcasId'] ?></a></td>
                                        <td><a class="nolink"><?php echo $dados['marcasNome'] ?></a></td>
                                        <td><a class="nolink"><?php echo $dados['marcasCavalagem'] ?> cv</a></td>
                                        <td><a class="nolink"><?php echo $dados['marcasMotor'] ?></a></td>
                                        <td><a class="nolink"><?php echo $dados['marcasDiam'] ?> mm</a></td>
                                        <td><a class="nolink"><?php echo $dados['marcasBinario'] ?> rpm</a></td>
                                        <td><img id="img1" src="../<?php echo $dados['marcasImgUrl'] ?>"></td>
                                        <td><a href="editar_marcas.php?id=<?php echo $dados['marcasId'] ?>"><i class="btn btn-primary fas fa-edit text-primary"></i></a><p></p>
                                            <a href="#" onclick="confirmaEliminaM(<?php echo $dados['marcasId'] ?>)"><i class="btn btn-danger fas fa-trash  text-danger" ></i></a></td>
                                    </tr

                                        <?php
                                    }

                                    ?>

                                </tbody>
                            </table>
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
botper();
?>