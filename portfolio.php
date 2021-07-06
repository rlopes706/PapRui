<?php
include_once("../Includes/body.inc.php");
top(PORTO);
$con = mysqli_connect(HOST, USER, PWD, DATABASE);
$sql ="select * from calendario;";
$result = mysqli_query($con, $sql);
?>


<div class="fh5co-hero fh5co-hero-2">
    <div class="fh5co-overlay"></div>
    <div class="fh5co-cover fh5co-cover_2 text-center" data-stellar-background-ratio="0.5"
         style="background-image: url(images/cover_bg_2.jpg);">
        <div class="desc animate-box">
            <h2>Marcas do Javali</h2>
        </div>
    </div>
</div>
<!-- end:header-top -->

<!-- BARRA -->

<div id="fh5co6-partner">
    <div class="container">
        <div class="partner-wrap">
            <div class="wrap">
                <div class="partner animate-box">
                    <div class="inner">
                        <img class="img-responsive" src="images/logo-2.png" alt="">
                    </div>
                </div>
                <div class="partner animate-box">
                    <div class="inner">
                        <img class="img-responsive" src="images/logo-3.png" alt="">
                    </div>
                </div>
                <div class="partner animate-box">
                    <div class="inner">
                        <img class="img-responsive" src="images/trans.png" alt="">
                    </div>
                </div>
                <div class="partner animate-box">
                    <div class="inner">
                        <img class="img-responsive" src="images/logo-7.png" alt="">
                    </div>
                </div>
                <div class="partner animate-box">
                    <div class="inner">
                        <img class="img-responsive" src="images/logo-8.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- END of BARRA -->



<div id="fh5co-portfolio">
    <div class="container">

        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center heading-section animate-box">
                <h3><strong>Marcas</strong> do Rally Javali</h3>
                <p>Marcas do Rally Javali é um menu onde voce pode visualizar algumas informações sobre alguns carros e
                    adicionar também novos carros e respetivas informações!</p>
            </div>
        </div>

        <div class="row row-bottom-padded-md">
            <div class="col-md-12">
                <ul id="fh5co-portfolio-list">

                    <!-- Hyundai -->
                    <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/work-4.jpg); ">
                        <a href="#" class="color-4" data-toggle="modal" data-target="#exampleModal">
                            <div class="case-studies-summary">
                                <h2>Hyundai</h2>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>


        <?php
        while ($dados = mysqli_fetch_array($result)) {
            ?>

        <div class="row row-bottom-padded-md">
            <div class="col-md-12">
                <ul id="fh5co-portfolio-list">


                    <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/work-4.jpg); ">
                        <a href="#" class="color-4" data-toggle="modal" data-target="#exampleModal">
                            <div class="case-studies-summary">
                                <h2>Hyundai</h2>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

            <?php
        }

        ?>
    </div>
</div>


<?php
botport();
?>

