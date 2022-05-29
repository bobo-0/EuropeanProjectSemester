<?php
require_once("model/connect.php");
$nom=$a->getInfoOf($_GET["idem"]);
$nom2=$a->getInfoOf($_GET["id"]);
session_start();
$_SESSION["daft"]=$_GET["id"];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Trust+ Moerwijk</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

        <!-- Custom styles for this template -->
    <link href="css/creative.css" rel="stylesheet">
    <script src="vendor/jquery/jquery.min.js"></script>

</head>


<script>
$(document).ready(function () {
          
            
            $("#rateemployer_send").click(function (e) {
               
                //alert("hi");
               //alert($("#badges").serialize());
                $.ajax({
                        type: "post",
                        url: "controller/setBadges.php",
                        data: $("#badges").serialize(),
                        success: function(resp) {
                                location.replace("endrate.php");
                            
                            //alert(resp);
                            //$body.removeClass("loading");
                            //location.replace("end.php");
                        }
                    });
            });
            
            
        });    
</script>
<body id="page-top">

    <style type="text/css">
        .jumbotron {
            background-image: url('img/bg.jpg');
            background-size: cover;
            text-shadow: black 0.2em 0.2em 0.2em;
            color: white;
        }

        .forgetpassword {
            color: #ED7A43;
        }

        span.forgetpassword:hover {
            color: #ED7A43;
            text-decoration: underline;
        }
    </style>
    <script>
        $(function () {
            $("#header").load("header.php");
        })

    </script>

    <div id="header"></div>

    <br>
    <br>
    <br>

    <div class="jumbotron">
        <h1 class="text-center">
            <strong data-localize="rate_employer.employer_hello"> Hi, <?php
                echo $nom['a']." ".$nom['b'];
                
            ?> </strong>
        </h1>
        <br>
        <h3 class="text-center">
            <strong data-localize="rate_employer.givebadges_part1"> Would you give one of these badges to <?php
                echo $nom2['a']." ".$nom2['b'];
                
            ?>?</strong>
        </h3>
        <br>
    </div>

    <div class="row">
                        
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <center>
                        <h3 class="text-center">
            <p data-localize="rate_employer.givebadges_part1"> Which badge would you like to assign?</p>
        </h3>
                        <p data-localize="rate_employer.badge_explanation">Do you want to know more about the badges? <a href="criteria.php" data-localize="rate_employer.badge_explanation_link">Click here</a></p></center>
                        </div>
                        <div class="col-lg-2"></div>
                </div>
<hr class="my-4">

    <br>
    <br>
    <form action="" id="badges">
    <div class="container">
        <div class="row">

            <div class="col-1 mx-auto"> </div>
            <div class="col-1" style="text-align:right;">
                <input type='radio' id="radiobtn_bicycle" name='radiobtn' value="1">
            </div>
            <div class="col-2 mx-auto text-center">
                <img src="img/badges/bicycle.png" class="img-fluid" style="width: 100% \9;" alt="bicycle_badge"> Bicycle Repairing
            </div>
            <div class="col-1 mx-auto" style="text-align:right;">
                <input type='radio' id="radiobtn_art" name='radiobtn' value="2"> </div>
            <div class="col-2  text-center">
                <img src="img/badges/art.png" class="img-fluid" style="width: 100% \9;" alt="art_badge"> Arts and Culture
            </div>
            <div class="col-1 mx-auto" style="text-align:right;">
                <input type='radio' id="radiobtn_cleaning" name='radiobtn' value="3">
            </div>
            <div class="col-2 mx-auto text-center">
                <img src="img/badges/cleaning.png" class="img-fluid" style="width: 100% \9;" alt="cleaning_badge"> Chores, Cleaning
            </div>
            <div class="col-2 mx-auto"> </div>
        </div>
        <br>
        <br>

        <div class="row">
            <div class="col-1 mx-auto"> </div>
            <div class="col-1 mx-auto" style="text-align:right;">
                <input type='radio' id="radiobtn_IT" name='radiobtn' value="4">
            </div>
            <div class="col-2 mx-auto text-center">
                <img src="img/badges/computer.png" class="img-fluid" style="width: 100% \9;" alt="IT_badge"> IT Expert
            </div>
            <div class="col-1 mx-auto" style="text-align:right;">
                <input type='radio' id="radiobtn_admin" name='radiobtn' value="5"> </div>
            <div class="col-2 text-center">
                <img src="img/badges/consultant.png" class="img-fluid" style="width: 100% \9;" alt="admin_badge"> Admin
            </div>
            <div class="col-1 mx-auto" style="text-align:right;">
                <input type='radio' id="radiobtn_handy" name='radiobtn' value="6"> </div>
            <div class="col-2 mx-auto text-center">
                <img src="img/badges/craft.png" class="img-fluid" style="width: 100% \9;" alt="handy_badge"> Handyman
            </div>
            <div class="col-2 mx-auto"> </div>
        </div>

        <br>
        <br>

        <div class="row">
            <div class="col-1 mx-auto"> </div>
            <div class="col-1 mx-auto" style="text-align:right;">
                <input type='radio' id="radiobtn_teaching" name='radiobtn' value="7">
            </div>
            <div class="col-2 mx-auto text-center">
                <img src="img/badges/education.png" class="img-fluid" style="width: 100% \9;" alt="teaching_badge"> Teaching, Education
            </div>
            <div class="col-1 mx-auto" style="text-align:right;">
                <input type='radio' id="radiobtn_food" name='radiobtn' value="8"> </div>
            <div class="col-2 text-center">
                <img src="img/badges/food.png" class="img-fluid" style="width: 100% \9;" alt="food_badge"> Catering, Eating
            </div>
            <div class="col-1 mx-auto" style="text-align:right;">
                <input type='radio' id="radiobtn_buddy" name='radiobtn' value="9"> </div>
            <div class="col-2 mx-auto text-center">
                <img src="img/badges/health.png" class="img-fluid" style="width: 100% \9;" alt="buddy_badge"> Buddy
            </div>
            <div class="col-2 mx-auto"> </div>
        </div>

        <br>
        <br>

        <div class="row">
            <div class="col-1 mx-auto"> </div>
            <div class="col-1 mx-auto" style="text-align:right;">
                <input type='radio' id="radiobtn_host" name='radiobtn' value="10">
            </div>
            <div class="col-2 mx-auto text-center">
                <img src="img/badges/host.png" class="img-fluid" style="width: 100% \9;" alt="host_badge"> Host, Hostess
            </div>
            <div class="col-1 mx-auto" style="text-align:right;">
                <input type='radio' id="radiobtn_labourer" name='radiobtn' value="11"> </div>
            <div class="col-2 text-center">
                <img src="img/badges/labouring.png" class="img-fluid" style="width: 100% \9;" alt="labourer_badge"> Labourer
            </div>
            <div class="col-1 mx-auto" style="text-align:right;">
                <input type='radio' id="radiobtn_gardening" name='radiobtn' value="12"> </div>
            <div class="col-2 mx-auto text-center">
                <img src="img/badges/landscaping.png" class="img-fluid" style="width: 100% \9;" alt="gardening_badge"> Gardening
            </div>
            <div class="col-2 mx-auto"> </div>
        </div>
        <br>
        <br>

        <div class="row">
            <div class="col-1 mx-auto"> </div>
            <div class="col-1 mx-auto" style="text-align:right;">
                <input type='radio' id="radiobtn_mechanic" name='radiobtn' value="13">
            </div>
            <div class="col-2 mx-auto text-center">
                <img src="img/badges/mechanic.png" class="img-fluid" style="width: 100% \9;" alt="mechanic_badge"> Mechanic
            </div>
            <div class="col-1 mx-auto" style="text-align:right;">
                <input type='radio' id="radiobtn_orderly" name='radiobtn' value="14"> </div>
            <div class="col-2 text-center">
                <img src="img/badges/orderly.png" class="img-fluid" style="width: 100% \9;" alt="orderly_badge"> Orderly
            </div>
            <div class="col-1 mx-auto" style="text-align:right;">
                <input type='radio' id="radiobtn_polite" name='radiobtn' value="15"> </div>
            <div class="col-2 mx-auto text-center">
                <img src="img/badges/polite.png" class="img-fluid" style="width: 100% \9;" alt="polite_badge"> Polite
            </div>
            <div class="col-2 mx-auto"> </div>
        </div>

        <br>
        <br>

        <div class="row">
            <div class="col-1 mx-auto"> </div>
            <div class="col-1 mx-auto" style="text-align:right;">
                <input type='radio' id="radiobtn_punctual" name='radiobtn' value="16">
            </div>
            <div class="col-2 mx-auto text-center">
                <img src="img/badges/punctual.png" class="img-fluid" style="width: 100% \9;" alt="punctual_badge"> Punctual
            </div>
            <div class="col-1 mx-auto" style="text-align:right;">
                <input type='radio' id="radiobtn_recreation" name='radiobtn' value="17"> </div>
            <div class="col-2 text-center">
                <img src="img/badges/recreation.png" class="img-fluid" style="width: 100% \9;" alt="recreation_badge"> Recreation, Entertainment
            </div>
            <div class="col-1 mx-auto" style="text-align:right;">
                <input type='radio' id="radiobtn_reliable" name='radiobtn' value="18"> </div>
            <div class="col-2 mx-auto text-center">
                <img src="img/badges/reliable.png" class="img-fluid" style="width: 100% \9;" alt="reliable_badge"> Reliable
            </div>
            <div class="col-2 mx-auto"> </div>
        </div>

        <br>
        <br>

        <div class="row">
            <div class="col-1 mx-auto"> </div>
            <div class="col-1 mx-auto" style="text-align:right;">
                <input type='radio' id="radiobtn_sales" name='radiobtn' value="19">
            </div>
            <div class="col-2 mx-auto text-center">
                <img src="img/badges/sales.png" class="img-fluid" style="width: 100% \9;" alt="sales_badge"> Sales
            </div>
            <div class="col-1 mx-auto" style="text-align:right;">
                <input type='radio' id="radiobtn_transport" name='radiobtn' value="20"> </div>
            <div class="col-2 text-center">
                <img src="img/badges/transport.png" class="img-fluid" style="width: 100% \9;" alt="transport_badge"> Transport, Warehousing
            </div>
            <div class="col-1 mx-auto" style="text-align:right;"> </div>
            <div class="col-2 mx-auto text-center"> </div>
            <div class="col-2 mx-auto"> </div>
        </div>

        <br>
        <br>
    </form>
        <div class="col-4 mx-auto"> </div>
        <div class="col-4 mx-auto text-center">
            <button class="btn btn-warning btn-lg" id="rateemployer_send" name="rateemployer_send" data-localize="rate_employer.employer_rating_btn_send"> Send </button>
        </div>
        <div class="col-4 mx-auto"> </div>

    </div>

<div id="footer"></div>







    <!--MODAL-->
   




        <!-- Bootstrap core JavaScript -->

        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
        <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

        <!-- Custom scripts for this template -->
        <script src="js/creative.min.js"></script>

</body>

</html>