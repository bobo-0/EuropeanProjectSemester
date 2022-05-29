<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Trust+ </title>

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


    
</head>

<body id="page-top">

    <style type="text/css">
        .forgetpassword {
            color: #ED7A43;
        }
        
        span.forgetpassword:hover {
            color: #ED7A43;
            text-decoration: underline;
        }

    </style>
    <script>
        $(function() {
            $("#header").load("header.php");
        })

    </script>
    <script>
        $(document).ready(function() {
            $body = $("body");
            //$body.addClass("loading");
            $body.removeClass("loading");
             $("#offer").click(function(e) {
                    

                    $.ajax({
                        type: "post",
                        url: "controller/userIsLogged.php",
                        success: function(resp) {
                            //alert(resp);
                            if (resp == 1) {
                                
                                location.replace("offer.php");
                            } else {
                                jQuery.noConflict(); 
                                $('#login').modal('show'); 
                                //$("#login").modal();
                            }
                            //lert(resp);
                            //$body.removeClass("loading");
                            //location.replace("end.php");
                        }
                    });

                    return false;

                });
            
            $("#take").click(function(e) {
                        $body.addClass("loading");
                    location.replace("joblist.php");
                
                    

                });
            
            
                


        });

    </script>

    <div id="header"></div>

    <header class="masthead text-center text-white d-flex">

        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h1 class="text-uppercase" data-localize="index.index_welcome">
                        <strong>Welcome to </br>the Gig-Economy!</strong>
                    </h1>
                    <hr>
                </div>
                <div class="col-lg-8 mx-auto">
                   <br><br>
                    <p class="mb-5" data-localize="index.index_subtitle"> This is Trust+, a platform purely made for you to earn additional income.</p>
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="about.php">About us</a>
                </div>
            </div>
    </header>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading" data-localize="index.index_ourservice">Our Service</h2>
                    <hr class="my-4">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fa fa-4x fa fa-qrcode text-primary mb-3 sr-icons"></i>
                        <h3 class="mb-3" data-localize="index.index_scan">Scan</h3>
                        <p class="text-muted mb-0" data-localize="index.index_scan_text">Scan our QR codes for quick access</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa fa-search text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3" data-localize="index.index_find">Search</h3>
              <p class="text-muted mb-0" data-localize="index.index_find_text">Use our page to easily search gig categories</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-pencil-square-o text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3" data-localize="index.index_apply">Apply</h3>
              <p class="text-muted mb-0" data-localize="index.index_apply_text">Use our simple and fast proccess to get a gig</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-certificate text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3" data-localize="index.index_badges">Badges</h3>
              <p class="text-muted mb-0" data-localize="index.index_badges_text">Be a pioneer with a digital resume</p>
            </div>
          </div>
        </div>
          </div>
          
        <br><br>
    </section>



    <section class="bg-dark text-white" id="Member">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-heading text-white" data-localize="index.index_start" >Getting Started</h2>
                    <hr class="light my-4">
                    <p class="text-faded mb-4" data-localize="index.index_question">Help or need help?</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3"></div>
                <div class="col-lg-3 text-center">
                    <a class="btn btn-light btn-xl sr-button" href="offer.php" id="offer"  data-localize="index.index_offer">Offer a gig</a>
                    <br><br>
                </div>
                <div class="col-lg-3 text-center">
                    <a class="btn btn-light btn-xl sr-button" id="take" href="#"  data-localize="index.index_take">Look for a gig</a>
                </div>
                
                <div class="col-lg-3"></div>
            </div>
    </section>

    <section id="Partner">
        <div class="container">
            <center>
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-heading"  data-localize="index.index_partners">Our Partners</h2>
                    <hr class="my-4">
                </div>
                <span class="image fit">
          
                    <a href="https://www.denhaag.nl/nl.htm" target="_blank"><img src="img/logo/partner1.png" vspace="15" hspace="15"></a>
                    <a href="https://mrdh.nl/rne-naslag" target="_blank"><img src="img/logo/partner2.png" vspace="15" hspace="15"></a>
                    <a href="https://www.haagsemakers.nl/" target="_blank"><img src="img/logo/partner3.png" vspace="15" hspace="15"></a>
                    <a href="http://socosoco.cc/" target="_blank"><img src="img/logo/partner4.png" vspace="15" hspace="15"></a>
                    <a href="http://www.madeinmoerwijk.nl/" target="_blank"><img src="img/logo/partner5.png" vspace="15" hspace="15"></a>
                    <a href="https://wunderpeople.com/" target="_blank"><img src="img/logo/partner6.png" vspace="15" hspace="15"></a>
          
          </span> </center>
        </div>

    </section>
    <div id="footer"></div>

    <!--MODAL-->

    <div class="modal" id="login" tabindex=-1 role="dialog" aria-labelledby="loginLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginLabel"> Welcome to  </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>

                <div class="modal-body">
                    <form id="loginform">
                        <div class="input-group input-group-sm">
                            <i class="fa fa-user prefix grey-text"></i> &nbsp;&nbsp;
                            <span class="input-group-addon" id="E-mail"> E-mail </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" class="form-control" id="email" name="email" placeholder="ex) @gmail.com" aria-describedby="E-mail">
                        </div>
                        <br>
                        <div class="input-group input-group-sm">
                            <i class="fa fa-lock prefix grey-text"></i> &nbsp;&nbsp;
                            <span class="input-group-addon" id="Password"> Password </span> &nbsp;&nbsp;
                            <input type="password" class="form-control" placeholder="Your password" id="password" name="password" aria-describedby="Password">
                        </div>
                        <br>
                        <p align="right">
                            <input type="checkbox" name="chk_remeberme" id="remember" name="remember" value="Remember_me"> &nbsp; Remember me &nbsp; &nbsp;
                        </p>

                        <br>
                        <center>
                            <button type=button class="btn btn-warning" id="btn_login" data-dismiss=modal data-target=overview.php> Log In </button>
                    </form>
                    <br>
                    <hr> Don't have an ID yet,
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
