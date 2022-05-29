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
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.css" rel="stylesheet">
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libe/jquery/1.12/0/jquery.min.js"></script>    
</head>


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

    a[href*="overview.php"] { 
        color: black; 
    }

</style>
<!--Using Google maps-->
<script>
    $(function(){
        $("#header").load("header.php");
    })
</script>

<script>
    $(document).ready(function() {
                $('.parallax').parallax();

                $('.modal').modal();

                $("#btn-send").click(function(e) {
                    // alert($("#example").serialize());

                });

                $(".btn-pref .btn").click(function () {
                  $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
                  // $(".tab").addClass("active"); // instead of this do the below 
                  $(this).removeClass("btn-default").addClass("btn-primary");   
                });
                });


</script>
<div id="header"></div>
<br><br><br>

<div class="jumbotron"> 
    <h1 class="text-center" data-localize="application_landing.application_landing_title">  Thank you for helping!  </h1>
</div>
<br>

<div>
<h5 class="text-center" data-localize="application_landing.application_landing_thanks"> If you are a member, you can now see the gig details in My Page.  </h5> 
</div>

<br><br>
<div class="row">
<div class="col-lg-3"></div>
<div class="col-lg-3 text-center">
<a class="btn btn-primary btn-xl" href="index.php" data-localize="application_landing.application_landing_btn">Go to Home</a> </div>

<div class="col-lg-3 text-center">
<a class="btn btn-primary btn-xl" href="mypage.php" data-localize="application_landing.application_landing_mypage">Go to My Page</a>
</div> 
<div class="col-lg-3"></div>
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
