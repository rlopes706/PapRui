<?php
include_once ("Includes/body.inc.php");
top(PERCURSO);
$sql ="select * from percursos;";
$result = mysqli_query($con, $sql);
?>


    <style>
        body {font-family: Arial, Helvetica, sans-serif;}

        #myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg:hover {opacity: 0.7;}

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
        }

        /* Modal Content (image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        /* Caption of Modal Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        /* Add Animation */
        .modal-content, #caption {
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {-webkit-transform:scale(0)}
            to {-webkit-transform:scale(1)}
        }

        @keyframes zoom {
            from {transform:scale(0)}
            to {transform:scale(1)}
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px){
            .modal-content {
                width: 100%;
            }
        }

        #img{
            width:300px;
            height:200px;
            transition:0.6s ease;
            border: solid white 1px;
        }
        img{
            width:100%;
            height:100%;
        }
        #img:hover{
            width:500px;
            height:500px;
            position: relative;
        }
    </style>



        <div class="fh5co-hero fh5co-hero-2">
            <div class="fh5co-overlay"></div>
            <div class="fh5co-cover fh5co-cover_2 text-center" data-stellar-background-ratio="0.5"
                 style="background-image: url(images/p1.png);">
                <div class="desc animate-box">
                    <h2>Percursos do Javali</h2>
                </div>
            </div>
        </div>

        <!-- Anima????o percurso-->
        <div id="fh5co-partner">
            <div class="container">
                <div class="partner-wrap">
                    <div class="wrap">
                        <div class="partner animate-box">
                            <div class="inner">
                                <img class="img-responsive" src="images/logo-1.png" alt="">
                            </div>
                        </div>
                        <div class="partner animate-box">
                            <div class="inner">
                                <img class="img-responsive" src="images/trans.png" alt="">
                            </div>
                        </div>
                        <div class="partner animate-box">
                            <div class="inner">
                                <img class="img-responsive" src="images/trans.png" alt="">
                            </div>
                        </div>
                        <div class="partner animate-box">
                            <div class="inner">
                                <img class="img-responsive" src="images/trans.png" alt="">
                            </div>
                        </div>
                        <div class="partner animate-box">
                            <div class="inner">
                                <img class="img-responsive" src="images/logo-5.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- end:header-top -->
        <div id="fh5co-portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center heading-section animate-box">
                        <h3><strong>Percursos</strong> do Rally Javali</h3>
                        <p>Percursos do Rally Javali ?? um menu onde pode obter bastante informa????o
                            sobre varios percursos predefenidos e tamb??m adicionar v??rios percursos de acordo com as
                            restri????es apresentadas.</p>
                    </div>
                </div>
                <div class="row">
            <?php
            $contador=4;
            while ($dados = mysqli_fetch_array($result)) {
                $contador--;
                ?>
                <div class="col-lg-4 col-md-4 " style="z-index: <?php echo $contador*100?>">
                    <div class="fh5co-blog animate-box" style="width: 300px">
                        <div id="img">
                        <img src="<?php echo $dados['percursoImgUrl'] ?>" alt="">

                        <div class="blog-text">
                            <div class="prod-title" style="text-align: center; height: 80px;">
                                <h3><strong><?php echo $dados['percursoNome'] ?></strong> <br><br> <?php echo $dados['percursoKm'] ?> km</h3>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <?php
                if($contador==1){
                    $contador=4;
                    echo '</div><div class="row">';
                }

            }

            ?>
            </div>
        </div>
    </div>



<?php
botper();
?>