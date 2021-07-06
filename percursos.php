<?php
include_once ("../Includes/body.inc.php");
top(PERCURSO);
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

        <!-- Animação percurso-->
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
                        <p>Percursos do Rally Javali é um menu onde pode obter bastante informação
                            sobre varios percursos predefenidos e também adicionar vários percursos de acordo com as
                            restrições apresentadas.</p>
                    </div>
                </div>

            <!--  FALTA POR A IMAGEM A EXPANDIR E DE LADO A DIZER OS KM'S DO PERCURSO-->
                <div class="row row-bottom-padded-md">
                    <div class="col-md-12">
                        <section class="home_gallery_area p_120">
                            <div class="container box_1620">
                                <div class="gallery_f_inner row imageGallery1">

                                    <div class="col-lg-3 col-md-4 col-sm-6 unv">
                                        <div class="h_gallery_item">
                                            <img src="images/percurso-1.png" alt="">
                                            <div class="hover">
                                                <a href="#"><h4>Spreading Peace to world</h4></a>
                                                <a class="light" href="images/percurso-1.png"><i class="fa fa-expand"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-sm-6 unv">
                                        <div class="h_gallery_item">
                                            <img src="images/percurso-1.png" alt="">
                                            <div class="hover">
                                                <a href="#"><h4>Spreading Peace to world</h4></a>
                                                <a class="light" href="images/percurso-1.png"><i class="fa fa-expand"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>


        </div>
        </div>





    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById("myImg");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>

<?php
botper();
?>