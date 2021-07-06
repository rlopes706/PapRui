<?php
include_once("config.inc.php");
$con = mysqli_connect(HOST, USER, PWD, DATABASE);
$con->set_charset("utf8");
function top($menu = HOME){
?>
    <!DOCTYPE html>
    <!--[if lt IE 7]>
    <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>
    <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>
    <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rally Javali</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO"/>
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive"/>
    <meta name="author" content="FREEHTML5.CO"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Superfish -->
    <link rel="stylesheet" href="css/superfish.css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="shortcut icon" href="site_icon.ico">


    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div id="fh5co-wrapper">
    <div id="fh5co-page">
        <div id="fh5co-header">
            <header id="fh5co-header-section">
                <div class="container">
                    <div class="nav-header">
                        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
                        <h1 id="fh5co-logo"><a><strong><i class="fab fa-grunt"></i> Rally Javali</strong></a></h1>
                        <!-- START #fh5co-menu-wrap -->
                            <ul class="sf-menu" id="fh5co-primary-menu">
                                <!--<div class="fh5co-barra">-->
                                <li <?php if ($menu == HOME) echo "class=\"active\""; ?>>
                                    <a href="index.php"><i class="icon-home3"></i> Início</a>
                                </li>
                                <li <?php if ($menu == PORTO) echo "class=\"active\""; ?>>
                                    <a href="portfolio.php"><i class="fas fa-th"></i> Marcas</a>
                                </li>
                                <li <?php if ($menu == PERCURSO) echo "class=\"active\""; ?>>
                                    <a href="percursos.php"><i class="icon-flow-branch"></i> Percursos</a>
                                </li>
                                <li <?php if ($menu == ABOUT) echo "class=\"active\""; ?>>
                                    <a href="about.php"><i class="icon-calendar"></i> Calendário</a>
                                </li>
                                <!-- </div> -->
                            </ul>
                        </nav>
                    </div>
                </div>

            </header>
        </div>
        <?php
        }
        function bot (){
        ?>
        <footer>
            <div id="footer" class="fh5co-copyright text-center">
                <p>
                    &copy; 2016 Free HTML5 template. All Rights Reserved.
                    <span>Designed with <i class="icon-heart"></i> by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a>
								Demo Images by <a href="http://unsplash.com/" target="_blank">Unsplash</a></span>
                </p>
            </div>
        </footer>

    </div>
    <!-- END fh5co-page -->
    <!-- </div> -->
</div>
<!-- END fh5co-wrapper -->

<!-- jQuery -->


<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Stellar -->
<script src="js/jquery.stellar.min.js"></script>
<!-- Superfish -->
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.js"></script>
<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>

<!-- Main JS -->
<script src="js/main.js"></script>

</body>
</html>
<?php
}
?>

<?php
function botport()
{
    ?>

    <footer>
        <div id="footer" class="fh5co-copyright text-center">
            <p>
                &copy; 2016 Free HTML5 template. All Rights Reserved.
                <span>Designed with <i class="icon-heart"></i> by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a>
								Demo Images by <a href="http://unsplash.com/" target="_blank">Unsplash</a></span>
            </p>
        </div>
    </footer>

    </div>
    <!-- END fh5co-page -->

    </div>
    <!-- END fh5co-wrapper -->


    <!-- Modal -->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document" style="background-color: #2F3032; border-radius: 40px" >
                <div class="modal-header" >
                    <div class="text-color-white">
                        <h5 class="modal-title" id="exampleModalLabel" style="color: white"><strong>HYUNDAI</strong></h5>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="display-1"></div>
                    <div class="row">
                        <div class="col-2">
                            <!-- INICIO - MENUS INFORMATIVO DE MARCAS -->
                            <!-- Site para ir buscar info de carros ->  https://www.razaoautomovel.com/2017/05/maquinas-rally-portugal-wrc-2017  -->
                            <table >
                                <tr>
                                    <td style="color: white"> <strong>Cavalagem</strong></td>
                                    <td> 380cv</td>
                                </tr>
                                <tr>
                                    <td style="color: white"> <strong>Motor</strong></td>
                                    <td> 4 cilindros em linha, Turbo</td>
                                </tr>
                                <tr>
                                    <td style="color: white"> <strong>Diâmetro / Curso</strong></td>
                                    <td> 83.0 mm / 73.9 mm</td>
                                </tr>
                                <tr>
                                    <td style="color: white"> <strong>Binário</strong></td>
                                    <td> 450 Nm às 5500 rpm</td>
                                </tr>
                                <tr>
                                    <td style="color: white"> <strong>Transmissão</strong></td>
                                    <td> 4 rodas</td>
                                </tr>
                                <tr>
                                    <td style="color: white"> <strong>Cx. de Velocidades</strong></td>
                                    <td> Sequencial | Seis velocidades | Accionamento por patilhas</td>
                                </tr>
                            </table><p></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                    <!-- FIM - MENUS INFORMATIVO DE MARCAS -->
                </div>
            </div>
        </div>
    </div>

    <style>
        table, th, td {
            border: 2px solid #848484;
            border-collapse: collapse;
            border-right: none;
            border-left: none;
        }

        th, td {
            padding: 20px;
            text-align: center;
        }
    </style>
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Stellar -->
    <script src="js/jquery.stellar.min.js"></script>
    <!-- Superfish -->
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.js"></script>

    <!-- Main JS (Do not remove) -->
    <script src="js/main.js"></script>

    </body>
    </html>


    <?php
}

?>

<?php
function botper()
{
    ?>

    <footer>
        <div id="footer" class="fh5co-copyright text-center">
            <p>
                &copy; 2016 Free HTML5 template. All Rights Reserved.
                <span>Designed with <i class="icon-heart"></i> by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a>
								Demo Images by <a href="http://unsplash.com/" target="_blank">Unsplash</a></span>
            </p>
        </div>
    </footer>

    </div>
    <!-- END fh5co-page -->

    </div>
    <!-- END fh5co-wrapper -->

    <!-- jQuery -->


    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Stellar -->
    <script src="js/jquery.stellar.min.js"></script>
    <!-- Superfish -->
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.js"></script>

    <!-- Main JS (Do not remove) -->
    <script src="js/main.js"></script>


    <script>

        //script de img modal
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById("myImg");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function () {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

    </script>

    <style>
        /*==============  TESTE 2 ==================*/

        #myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg:hover {
            opacity: 0.7;
        }

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
            background-color: rgb(0, 0, 0); /* Fallback color */
            background-color: rgba(0, 0, 0, 0.9); /* Black w/ opacity */
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
            max-width: 500px;
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
            from {
                -webkit-transform: scale(0)
            }
            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes zoom {
            from {
                transform: scale(0)
            }
            to {
                transform: scale(1)
            }
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #FFFFFF;
            font-size: 90px;
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
        @media only screen and (max-width: 700px) {
            .modal-content {
                width: 100%;
            }
        }

        /*============== FIM TESTE 2 ==================*/


        /* ================ INICIO DO TESTE =================*/
        .home_gallery_area {
            background: #f9f9ff;
        }

        .home_gallery_area .button_more {
            text-align: center;
            margin-top: 80px;
        }

        .isotope_fillter {
            background: #ffffff;
            border: 1px solid #eeeeee;
            margin-bottom: 80px;
        }

        .isotope_fillter .gallery_filter {
            text-align: center;
        }

        .isotope_fillter .gallery_filter li {
            display: inline-block;
            border-left: 1px solid #eeeeee;
            margin-right: -4px;
        }

        .isotope_fillter .gallery_filter li a {
            font-size: 12px;
            font-family: "Poppins", sans-serif;
            font-weight: 600;
            text-transform: uppercase;
            color: #222222;
            line-height: 48px;
            display: inline-block;
            padding: 0px 30px;
            margin: 0px;
        }

        .isotope_fillter .gallery_filter li:last-child {
            border-right: 1px solid #eeeeee;
            margin-right: 0px;
        }

        .isotope_fillter .gallery_filter li:hover a, .isotope_fillter .gallery_filter li.active a {
            background: #fcdc00;
            -webkit-box-shadow: 0px 10px 20px 0px rgba(0, 0, 0, 0.1);
            box-shadow: 0px 10px 20px 0px rgba(0, 0, 0, 0.1);
        }

        .gallery_f_inner {
            margin-bottom: -30px;
        }

        .h_gallery_item {
            position: relative;
            overflow: hidden;
            margin-bottom: 30px;
        }

        .h_gallery_item:before {
            content: "";
            width: 100%;
            height: 100%;
            position: absolute;
            left: 0px;
            top: 0px;
            background: rgba(0, 0, 0, 0.5);
            opacity: 0;
            -webkit-transition: all 300ms ease;
            -o-transition: all 300ms ease;
            transition: all 300ms ease;
        }

        .h_gallery_item img {
            width: 100%;
        }

        .h_gallery_item .hover {
            position: absolute;
            bottom: 30px;
            left: 0px;
            width: 100%;
            text-align: center;
            -webkit-transition: all 300ms ease;
            -o-transition: all 300ms ease;
            transition: all 300ms ease;
        }

        .h_gallery_item .hover h4 {
            color: #fff;
            font-size: 18px;
            font-weight: 600;
            font-family: "Poppins", sans-serif;
        }

        .h_gallery_item .hover .light {
            color: #fff;
            font-size: 30px;
            opacity: 0;
            -webkit-transition: all 300ms ease;
            -o-transition: all 300ms ease;
            transition: all 300ms ease;
        }

        .h_gallery_item:hover:before {
            opacity: 1;
        }

        .h_gallery_item:hover .hover {
            bottom: 50%;
            -webkit-transform: translateY(50%);
            -ms-transform: translateY(50%);
            transform: translateY(50%);
        }

        .h_gallery_item:hover .hover .light {
            opacity: 1;
        }

        .single-gallery-image {
            margin-top: 50px;
            background-repeat: no-repeat !important;
            background-position: center center !important;
            background-size: cover !important;
            height: 400px;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
        }

        .single-gallery-image:hover {
            opacity: .8;
        }


        /* ================ FIM DO TESTE =================*/
    </style>

    </body>
    </html>
    <?php

}

?>

<?php
function botabout()
{
    ?>
    <footer>
        <div id="footer" class="fh5co-copyright text-center">
            <p>
                &copy; 2016 Free HTML5 template. All Rights Reserved.
                <span>Designed with <i class="icon-heart"></i> by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a>
								Demo Images by <a href="http://unsplash.com/" target="_blank">Unsplash</a></span>
            </p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Stellar -->
    <script src="js/jquery.stellar.min.js"></script>
    <!-- Superfish -->
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.js"></script>

    <!-- Main JS (Do not remove) -->
    <script src="js/main.js"></script>

    <style>
        table, th, td {
            border: 2px solid white;
            border-collapse: collapse;
            border-right: none;
            border-left: none;
        }

        th, td {
            padding: 20px;
            text-align: center;
        }

        table#t01 tr:nth-child(even) {
            background-color: #eee;
        }

        table#t01 tr:nth-child(odd) {
            background-color: #fff;
        }

        table#t01 th {
            background-color: black;
            color: white;
        }
    </style>

    </body>
    </html>
    <?php

}

?>

