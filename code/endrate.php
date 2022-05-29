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
    <h1 class="text-center"  data-localize="rate_end.success_msg">  Thank you for your feedback  </h1>
</div>
<br>

<br><br>


<center> <div class="col-lg-4 text-center">
<a class="btn btn-primary btn-xl" href="index.php"  data-localize="rate_end.goto_index">Go to Home</a>
</div> </center>

<div id="footer"></div>




<!--MODAL-->

<div class="modal" id="login" tabindex=-1 role="dialog" aria-labelledby="loginLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginLabel"> Welcome to Moerwijk </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>

            <div class="modal-body">

                    <div class="input-group input-group-sm">
                    <i class="fa fa-user prefix grey-text"></i> &nbsp;&nbsp;
                        <span class="input-group-addon" id="E-mail"> E-mail </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" class="form-control" placeholder="ex) Moerwijk@gmail.com" aria-describedby="E-mail">
                    </div>
                <br>
                    <div class="input-group input-group-sm">
                    <i class="fa fa-lock prefix grey-text"></i> &nbsp;&nbsp;
                        <span class="input-group-addon" id="Password"> Password </span> &nbsp;&nbsp;
                        <input type="password" class="form-control" placeholder="Your password" aria-describedby="Password">
                    </div>
               <br>
                    <p align="right">
                    <input type="checkbox" name="chk_remeberme" value="Remember_me"> &nbsp; Remember me &nbsp; &nbsp; 
                    </p>         
        
            <br>
                <center>
                <button type=button class="btn btn-warning" data-dismiss=modal data-target=overview.php> Log In </button>
                <br>
                <hr>
                Don't have an ID yet,
                    <a href="register.php" class="tooltip-test" title="Go to register page"> SIGN UP </a> now! 
                <br><br>
                <span class="forgetpassword">
                   <p data-toggle="modal" data-target="#forgetmodal"> Forgot password? </p>
                </span>
                </center>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="forgetmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Forgot your password?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body mx-3">
            <div class="md-form mb-5">
                <i class="fa fa-envelope prefix grey-text"></i>
                <label data-error="wrong" data-success="right" for="forget_E-mail">Input your E-mail</label>
                <input type="text" id="forget_E-mail" class="form-control validate">
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-default">Send</button>
            </div>
        </div>
    </div>
</div>









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
