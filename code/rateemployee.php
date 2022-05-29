<?php
require_once("model/connect.php");
$nom=$a->getInfoOf($_GET["id"]);
$nom2=$a->getInfoOf($_GET["idemp"]);
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
          
           
           $("#rateemployer_send").click(function(e) {
               //alert("hi");
                  

                    $.ajax({
                        type: "post",
                        url: "controller/giveStars.php",
                        data: $("#stars").serialize(),
                        success: function(resp) {
                            location.replace("endrate.php");
                            
                            //lert(resp);
                            //$body.removeClass("loading");
                            //location.replace("end.php");
                        }
                    });

                    return false;

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
        .rating {
            unicode-bidi: bidi-override;
            direction: rtl;
            width: 4x;
        }

        .rating input {
            position: absolute;
            left: -999999px;
        }

        .rating label {
            display: inline-block;
            font-size: 0;
        }

        .rating > label:before {
            position: relative;
            font: 60px FontAwesome;
            display: block;
            content: "\f005";
            color: #ED7A43;
            background: -webkit-linear-gradient(-45deg, #d9d9d9 0%, #b3b3b3 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .rating > label:hover:before,
        .rating > label:hover ~ label:before,
        .rating > label.selected:before,
        .rating > label.selected ~ label:before {
            color: #f0ad4e;
            background: -webkit-linear-gradient(-45deg, #fcb551 0%, #d69a45 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }


    </style>
    <script src="starrate.js"></script>
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
            <strong data-localize="rate_employee.employee_hello"> Hello, <?php
                echo $nom['a']." ".$nom['b'];
            ?> </strong>
        </h1>
        
    </div>
<div class="row">
                        
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <center>
                        <p data-localize="rate_employee.please_rate">With how many stars would you rate <?php
                            echo $nom2['a']." ".$nom2['b'];
                        ?>?</p></center>
                        </div>
                        <div class="col-lg-2"></div>
                </div>


    <br>
    <br>
<form action="" id="stars">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            
            <div class="rating col-lg-8 text-center">
               
                 <label>
                   <input type="radio" name="rating" value="5" title="5 stars"> 5
                 </label>
                 <label>
                   <input type="radio" name="rating" value="4" title="4 stars"> 4
                 </label>
                 <label>
                   <input type="radio" name="rating" value="3" title="3 stars"> 3
                 </label>
                 <label>
                   <input type="radio" name="rating" value="2" title="2 stars"> 2
                 </label>
                 <label>
                   <input type="radio" name="rating" value="1" title="1 star"> 1
                 </label>
                 
               
            </div>
            
            <div class="col-lg-2"></div>
        </div>
    </div>
    <input type="hidden" name="id" value="<?php
        echo $_GET["idemp"];
    ?>" >
    </form>
    <br>
    <br>
    <div class="row">
        <div class="col-4 mx-auto"> </div>
        <div class="col-4 mx-auto text-center">
            <button class="btn btn-warning btn-lg" id="rateemployer_send" name="rateemployer_send" data-localize="rate_employee.rating_button_send"> Send </button>
        </div>
        <div class="col-4 mx-auto"> </div>
    </div>

    
<div id="footer"></div>



        <!-- Bootstrap core JavaScript -->

        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
        <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

        <!-- Custom scripts for this template -->
        <script src="js/creative.min.js"></script>
        <script type="text/javascript">
            $('.rating input').change(function () {
              var $radio = $(this);
              $('.rating .selected').removeClass('selected');
              $radio.closest('label').addClass('selected');
            });
        </script>
</body>

</html>