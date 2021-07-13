<?php
include_once ("Includes/body.inc.php");
top(ABOUT);
$con = mysqli_connect(HOST, USER, PWD, DATABASE);
$sql ="select * from calendario;";
$result = mysqli_query($con, $sql);
    ?>
        <!-- ///////////////////////// CALENDARIO \\\\\\\\\\\\\\\\\\\\\\\\\-->

        <div class="fh5co-hero fh5co-hero-2">
            <div class="fh5co-overlay"></div>
            <div class="fh5co-cover fh5co-cover_2 text-center" data-stellar-background-ratio="0.5"
                 style="background-image: url(images/cover_bg_2.jpg);">
                <div class="desc animate-box">
                    <h2>Calendário do Javali</h2>
                </div>
            </div>
        </div>


        <div id="fh5co7-partner">
            <div class="container">
                <div class="partner-wrap">
                    <div class="wrap">
                        <div class="partner animate-box">
                            <div class="inner">
                                <img class="img-responsive" src="images/icon-1.png" alt="">
                            </div>
                        </div>
                        <div class="partner animate-box">
                            <div class="inner">
                                <img class="img-responsive" src="images/icon-1.png" alt="">
                            </div>
                        </div>
                        <div class="partner animate-box">
                            <div class="inner">
                                <img class="img-responsive" src="images/trans.png" alt="">
                            </div>
                        </div>
                        <div class="partner animate-box">
                            <div class="inner">
                                <img class="img-responsive" src="images/icon-1.png" alt="">
                            </div>
                        </div>
                        <div class="partner animate-box">
                            <div class="inner">
                                <img class="img-responsive" src="images/icon-1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p></p>


        <!-- end:header-top -->
        <div id="fh5co-about">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                        <h3><strong>Calendário</strong> do Rally Javali</h3>
                        <p>Neste menu pode observar alguns dos novos eventos que irão acontecer em todo o país, tanto
                            como
                            adicionar e modificar com as respectivas restrições.</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row row-bottom-padded-md">
                    <div class="col-md-12 animate-box">
                        <div id="principal">
                            <div class="loc" style="  left: 365px; top:215px;">
                                <div class="hoverWrapper">
                                    <a href="#">
                                        <div class="galeria">
                                            <img src="images/loc.png" width="28"
                                                 onclick="smoothScroll(document.getElementById('fh5co-content-section'))">
                                        </div>
                                    </a>
                                    <div id="hoverShow1" class="text-color-1"><strong>Rally de portugal</strong></div>
                                </div>
                            </div>

                            <div class="loc" style="left: 395px; top:200px;">
                                <div class="hoverWrapper">
                                    <a href="#">
                                        <div class="galeria">
                                            <img src="images/loc.png" width="28"
                                                 onclick="smoothScroll(document.getElementById('fh5co-content-section'))">
                                        </div>
                                    </a>
                                    <div id="hoverShow2" class="text-color-1"><strong>Rally de Monte-Carlo</strong>
                                    </div>
                                </div>
                            </div>

                            <div class="loc" style="left: 425px; top: 200px;">
                                <div class="hoverWrapper">
                                    <a href="#">
                                        <div class="galeria">
                                            <img src="images/loc.png" width="28"
                                                 onclick="smoothScroll(document.getElementById('fh5co-content-section'))">
                                        </div>
                                    </a>
                                    <div id="hoverShow4" class="text-color-1"><strong>Rally da Croácia</strong></div>
                                </div>
                            </div>

                            <div class="loc" style="left: 435px; top: 145px;">
                                <div class="hoverWrapper">
                                    <a href="#">
                                        <div class="galeria">
                                            <img src="images/loc.png" width="28"
                                                 onclick="smoothScroll(document.getElementById('fh5co-content-section'))">
                                        </div>
                                    </a>
                                    <div id="hoverShow5" class="text-color-1"><strong>Rally da Filândia</strong></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- END fh5co-about	-->


            <div id="fh5co-content-section" class="fh5co-section-gray">

                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <div class="desc animate-box">
                                <button class="btn btn-outline" style="height: 60px; width: 400px; cursor: default" onclick="smoothScroll(document.getElementById('fh5co-content-section'))">
                                    <strong>Resultados Finais</strong>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <p></p>
                <div class="center">
                    <div class="container">
                        <div class="row">
                            <div class="desc animate-box">
                                <table id="t01" style="margin-left: 80px">
                                    <!--<tr class="active">
                                        <th><a class="active"><strong>Nome Rally</strong></a></th>
                                        <th><a class="active"><strong>Dia de Começo</strong></a></th>
                                        <th><a class="active"><strong>Vencedor</strong></a></th>
                                        <th><a class="active"><strong>Nacionalidade</strong></a></th>
                                        <th><a class="active"><strong>ESPAÇO</strong></a></th>
                                    </tr> -->
                                    <tbody>
                                    <tr class="active" data-number="1">
                                        <td><a class="nolink"> Rally de Portugal</a></td>
                                        <td class="aright"><a>02.06.2019</a></td>
                                        <td>Vencedor: <a> O. Tänak</a></td>
                                        <td><i class="icon-globe2"></i><a> Estonia</a></td>
                                        <td><a style="color: rgba(0, 4, 202, 0.71);"><i class="icon-arrow-left22"></i> Resultados Finais</a></td>
                                    </tr>
                                    <tr class="active" data-number="1">
                                        <td><a class="nolink"> Rally de Monte-Carlo</a></td>
                                        <td class="aright"><a>27.01.2019</a></td>
                                        <td>Vencedor: <a> S. Ogier</a></td>
                                        <td><i class="icon-globe2"></i><a> França</a></td>
                                        <td><a style="color: rgba(0, 4, 202, 0.71);"><i class="icon-arrow-left22"></i> Resultados Finais</a></td>
                                    </tr>
                                    <tr class="active" data-number="1">
                                        <td><a class="nolink"> Rally da Croácia</a></td>
                                        <td class="aright"><a>25.04.2021</a></td>
                                        <td>Vencedor: <a> S. Ogier</a></td>
                                        <td><i class="icon-globe2"></i><a> França</a></td>
                                        <td><a style="color: rgba(0, 4, 202, 0.71);"><i class="icon-arrow-left22"></i> Resultados Finais</a></td>
                                    </tr>
                                    <tr class="active" data-number="1">
                                        <td><a class="nolink"> Rally da Filândia</a></td>
                                        <td class="aright"><a>28.02.2021</a></td>
                                        <td>Vencedor: <a> O. Tãnak</a></td>
                                        <td><i class="icon-globe2"></i><a> Estonia</a></td>
                                        <td><a style="color: rgba(0, 4, 202, 0.71);"><i class="icon-arrow-left22"></i> Resultados Finais</a></td>
                                    </tr>
                                    <?php
                                    while ($dados = mysqli_fetch_array($result)) {
                                        ?>
                                     <tr class="active" data-number="1">
                                        <td><a class="nolink">Rally de  <?php echo $dados['calendarioNome'] ?></a></td>
                                        <td class="aright"><a> <?php echo $dados['calendarioData'] ?></a></td>
                                        <td>Vencedor: <a> <?php echo $dados['calendarioVencedor'] ?></a></td>
                                        <td><i class="icon-globe2"></i><a> <?php echo $dados['calendarioNacionalidade'] ?></a></td>
                                        <td><a style="color: rgba(0, 4, 202, 0.71);"><i class="icon-arrow-left22"></i> Resultados Finais</a></td>
                                    </tr>

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



          <?php
botabout();
?>