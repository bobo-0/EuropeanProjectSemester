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
    <!--Using Google maps-->
    <style>
        #map {
            height: 400px;
            width: 100%;
        }

    </style>


    <script>
        $(document).ready(function() {
                    $('.parallax').parallax();

                    $('.modal').modal();

                    $("#btn-send").click(function(e) {
                        // alert($("#example").serialize());

                    });
                    });

    </script>

<script>
        function initMap() {
            var markerIcon = {
            url: 'img/maps/maps.png',
            scaledSize: new google.maps.Size(30, 30),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(32, 65),
            labelOrigin: new google.maps.Point(15, 13)
        };
        var uluru = {
            lat: 52.050480,
            lng: 4.289566
        };
        var uluru2 = {
            lat: 52.046082,
            lng: 4.292862
        };
        var uluru3 = {
            lat: 52.055582,
            lng: 4.297154
        };
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 14,
            center: uluru
        });
        var marker = new google.maps.Marker({
            animation: google.maps.Animation.DROP,
            position: uluru,
            icon: markerIcon,
            label: {
                text: '3',
                color: "#f47a2f",
                fontSize: "9px",
                fontWeight: "bold"
            },
            map: map,
            title: "Air Conditioning Technician"
        });

        var marker2 = new google.maps.Marker({
            position: uluru2,
            animation: google.maps.Animation.DROP,
            icon: markerIcon,
            label: {
                text: '1',
                color: "#f47a2f",
                fontSize: "9px",
                fontWeight: "bold"
            },
            map: map,
            title: "EOI:MEch/Ele Technicians and Specialists"
        });


        var marker3 = new google.maps.Marker({
            position: uluru3,
            icon: markerIcon,
            animation: google.maps.Animation.DROP,
            label: {
                text: '2',
                color: "#f47a2f",
                fontSize: "9px",
                fontWeight: "bold"
            },
            map: map,
            title: "Construction Labourers"
        });

        marker2.setMap(map);
        marker3.setMap(map);
        }

    </script>
    
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDE6wNUqXOwfcTGHRenxRlqx2lJDqJFWHI&callback=initMap">
    </script>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index.php"><img class="img" src="img/logo/trustmoerwijk.png" width="150px" height="50px"></a>
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#services">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#Job">Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#Map">Map</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#Being">Partner</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" style="cursor:pointer">
                            <p data-toggle="modal" data-target="#login"> Login </p>
                        </a>
                    </li>
                    <li class="nav-item">
                     <a href="index.php"> <img src="./img/flag/USA.jpeg" width="30px" height="20px" vspace="10" hspace="15" /> </a> </img>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <header class="masthead text-center text-white d-flex">
    
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto"> 
            <h1 class="text-uppercase">
              <strong>Welkom </br> bij jouw nieuwe baan!</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">We hebben een lijst met klussen bij jou in de buurt</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#services">Over ons</a>
          </div>
        </div>
    </header>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Onze service</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa fa-qrcode text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Scan</h3>
              <p class="text-muted mb-0">Scan: Onze QR code’s zijn overal te vinden.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa fa-search text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Zoeken</h3>
              <p class="text-muted mb-0">Gebruik onze pagina om snel en eenvoudig werk in de buurt te vinden.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-pencil-square-o text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Aanmelden</h3>
              <p class="text-muted mb-0">Meld je aan voor jouw klus.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-certificate text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Badges</h3>
              <p class="text-muted mb-0"> Ontvang badges na een klus om uw werkervaring te tonen.</p>
            </div>
          </div>
        </div>
    </section>
    <div  id="Job"></div>
    <br>
    <br>
    <section class="p-0" >
      <div class="col-lg-12 text-center">
            <h2 class="section-heading">Jobs</h2>
            <hr class="my-4">
          </div>
          <div class="col-lg-8 mx-auto text-center">
          Je kunt de nieuwste vacatures hier vinden! </br></br>
            <i class="fa fa-1x fa-plus-square"> &nbsp; <a href="#">Oppassen op dieren</a> </i>  &nbsp; &nbsp;
            <i class="fa fa-1x fa-plus-square"> &nbsp; <a href="#">Auto wassen</a> </i>  &nbsp; &nbsp;
            <i class="fa fa-1x fa-plus-square"> &nbsp; <a href="#">Zorg voor de baby</a> </i> &nbsp; &nbsp;
          </div>
        </br>
      <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/1.jpg">
              <img class="img-fluid" src="img/1.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                  Wassen
                  </div>
                  <div class="project-name">
                  Afwassen in een restaurant
                  </div>
                </div>
                
              </div>

            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="img/2.jpg">
                        <img class="img-fluid" src="img/2.jpg" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                Opvang
                                </div>
                                <div class="project-name">
                                Oppassen op dieren
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/3.jpg">
              <img class="img-fluid" src="img/3.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                  Wassen
                  </div>
                  <div class="project-name">
                  De was doen 
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/4.jpg">
              <img class="img-fluid" src="img/4.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                  Schoonmaak
                  </div>
                  <div class="project-name">
                  Bank schoonmaken met vacuüm machine
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/5.jpg">
              <img class="img-fluid" src="img/5.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                  Reparaties
                  </div>
                  <div class="project-name">
                  Desktop computer repareren
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/6.jpg">
              <img class="img-fluid" src="img/6.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                  Verhuizen
                  </div>
                  <div class="project-name">
                  Bankstel verhuizen
                  </div>
                </div>
            </div>
              </a>
        </div>

    </section>



    <section id="Map">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Vind werk op de kaart</h2>
            <hr class="my-4">
            <p class="mb-5">Vind hier de dichtstbijzijnde klus!</p>
            <div id="map" style="align-items: middle"></div>
          </div>
        </div>
    </section>

    <section class="bg-dark text-white" id="Being">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Wordt onze lidmaat</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4"> Wil je een baan aanbieden of aannemen?</p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-3"></div>
            <div class="col-lg-3 text-center">
            <a class="btn btn-light btn-xl sr-button" href="#Signup_"> Bied een baan aan</a> </br></br>
            </div>
            <div class="col-lg-3 text-center">
            <a class="btn btn-light btn-xl sr-button" href="register.php">Een baan nemen</a>
            </div>
            <div class="col-lg-3"></div>
      </div>
    </section>

    <section id="Footer">
      <div class="container">  <center> 
        <div class="col-lg-8 mx-auto text-center">
        <h2 class="section-heading">Onze partners</h2>
        <hr class="my-4">
        </div>
        <span class="image fit">
          
                    <a href="https://www.denhaag.nl/nl.htm" target="_blank"><img src="img/logo/partner1.png" vspace="15" hspace="15"></a>
                    <a href="https://mrdh.nl/rne-naslag" target="_blank"><img src="img/logo/partner2.png" vspace="15" hspace="15"></a>
                    <a href="https://www.haagsemakers.nl/" target="_blank"><img src="img/logo/partner3.png" vspace="15" hspace="15"></a>
                    <a href="http://socosoco.cc/" target="_blank"><img src="img/logo/partner4.png" vspace="15" hspace="15"></a>
                    <a href="http://www.madeinmoerwijk.nl/" target="_blank"><img src="img/logo/partner5.png" vspace="15" hspace="15"></a>
                    <a href="https://wunderpeople.com/" target="_blank"><img src="img/logo/partner6.png" vspace="15" hspace="15"></a>
          
          </span>  </center> 
        </div>

    </section>

<div id="copyright">
            <center><ul>&copy; Trust+Moerwijk</ul></center>
        </div>

    <!--MODAL-->

    <div class="modal" id="login" tabindex=-1 role="dialog" aria-labelledby="loginLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginLabel"> Welkom in TrustMoerwijk </h5>
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
                            <span class="input-group-addon" id="Password"> Wachtwoord</span> &nbsp;&nbsp;
                            <input type="password" class="form-control" placeholder="Your wachtwoord" aria-describedby="Password">
                        </div>
                   <br>
                        <p align="right">
                        <input type="checkbox" name="chk_remeberme" value="Remember_me"> &nbsp; Onthoud me &nbsp; &nbsp; 
                        </p>         
            
                <br>
                    <center>
                    <button type=button class="btn btn-warning" data-dismiss=modal> Log In </button>
                    <br>
                    <hr>
                    Nog niet geregistreerd? 
                        <a href="register.php" class="tooltip-test" title="Go to register page"> Meld je nu aan! </a> 
                    <br><br>
                    <span class="forgetpassword">
                       <p data-toggle="modal" data-target="#forgetmodal"> Wachtwoord vergeten ? </p>
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