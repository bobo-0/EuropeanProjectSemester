<?php
    //here Im connecting with the DB
     require_once("model/connect.php");
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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libe/jquery/1.12/0/jquery.min.js"></script>
    </head>
<script>
    $(function(){
        $("#header").load("header.php");
    })
</script>

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

        .joblist {
            color: #ED7A43;
        }

        span.joblist:hover {
            color: #ED7A43;
            text-decoration: underline;
        }

        .modal-content {
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    
    width: 80%; /* Could be more or less, depending on screen size */
        }
        .imgcenter{
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 40%;
        }


        .bg-inin {
          background-color: #A8A8A8;
        }


        </style>

        <div id="header"></div>
        <br><br><br>
        <div class="jumbotron">
            <h1 class="text-center" data-localize="aboutpage.about_title" > Welcome to your new gig </h1>
        </div>

        <section id="intro">
            <div class="container">
                
                <div class="row">
                    <div class="col-12">
                        <img src="img/logo/trustmoerwijk.png" class="imgcenter">
                        <hr class="my-4">
                    </div>
                    <div class="col-1"></div>
                    <div class="col-10">
                        <h1 data-localize="aboutpage.welcome">Welcome!</h1>
                        <p  data-localize="aboutpage.welcome_text">
                            This is Trust+Moerwijk, a platform purely made for you to earn additional income. 
                            We believe that people who need help with a task they are unable to perform themselves, 
                            will find the help they need through Trust+ Moerwijk. We do not save your data, unless you register, 
                            therefore you can get started straight away!</p>


                            <p>Our platform is meant for the user. That's why our highest priority is to give you a fast, easy and secure way to score a gig and start earning additional income by helping the people around you.</p>

                            <p>A <b>Gig</b> is a so called mini or oddjob that does not necessarily requires specific qualification and can be completed in a short amount of time.</p>
                        </div>
                        <div class="col-1"></div>
                </div>
            </div>

         </section>
          <section id="badgesystem" class="bg-inin">
              <div id="container">
                <div class="row">
                    <div class="col-12 text-center">
                      <h2 class="section-heading"  data-localize="aboutpage.badge_system"><strong> Badge System </strong> </h2>
                      <hr class="my-4">
                    </div>
                    <div class="col-2"></div>
                    <div class="col-8"  data-localize="aboutpage.badge_system_text">
                        <p>
                        We would like to offer more than just an opportunity to earn additional income. We would like you to be able to display your skills and experience, although you might not have a professional qualification. Do you come from another country and your traineeship or your certificate of proficiency is not recognized/acknowledged? We would like to offer a solution to this problem.</p>

                        <p>
                        After you registered with basic personal details, you have the option to appoint key features and what your experiences/skills are.</p>

                        <p>
                        When you then finished the gig, the employer will appoint badges to you, while you will rate the other person with a 1-5 star rating. This is optional and meant as an additional feature, but keep in mind that your profile might enable you to score a full-time gig, part-time gig or internship at a company that sees your profile as an alternative resume.</p>

                        <p>
                        To ensure that you will not lose your already earned badges, we will need to save basic information to display your skills. That’s it. Nothing more. And if you ever decide to delete your account, all the data will be erased from our servers.</p>

                        </div>
                        <div class="col-2"></div>
          </section>



          <section id="values">
            <div id="container">
                <div class="row">
                    <div class="col-12 text-center">
                      <h2 class="section-heading"  data-localize="aboutpage.ourvalues"><strong>Our Values</strong></h2>
                      <hr class="my-4">
                    </div>
                </div>
                    
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-2">
                      <img src="img/data.png" class="img-fluid" style="width: 100% \9;" >
                    </div>
                    <div class="col-6">
                       <h2  data-localize="aboutpage.value_data">Data</h2>
                          <p  data-localize="aboutpage.value_data_text">We want you to know, that your data is your data alone. We do not want to earn money with selling something that does not belong to us. Actually, we are not earning any money. We see ourselves as a service from the community for the community. We depend on donations which you can deduct from your payment, max.1€ at a time. </p>
                    </div>
                    <div class="col-2"></div>
                </div>

                    <br><br>

                <div class="row">
                  <div class="col-2"></div>
                    <div class="col-6">
                       <h2  data-localize="aboutpage.value_money">Money</h2>
                          <p  data-localize="aboutpage.value_money_text">We offer a service, where you will be able to earn additional income. This is because we want to declare these small “gigs” as voluntary work. Please make sure that you check your financial background, regularly, and how much money you are actually allowed to earn additionally to your regular income to not exceed the limit. This will result in you, paying more taxes or being cut on subsidies by the government.</p>
                  </div>
                   <div class="col-2">
                      <img src="img/money.png" class="img-fluid" style="width: 100% \9;">
                  </div>
                  <div class="col-2"></div>
                </div>

                  <br><br>

                <div class="row">
                  <div class="col-2"></div>
                    <div class="col-2">
                      <img src="img/safety.png"  class="img-fluid" style="width: 100% \9;">
                  </div>
                    <div class="col-6">
                       <h2  data-localize="aboutpage.value_safety">Safety</h2>
                          <p  data-localize="aboutpage.value_safety_text">This is closely tied to Data. We want you to be sure that our site and system is safe to use. We follow all EU laws and regulations to ensure that no one but yourself will see your data. If you follow the guest account principle, none of your details will be saved. Only after registering we will save your basic details to ensure that you will receive your hard earned badges.</p>
                  </div>
                  <div class="col-2"></div>
                </div>
                  <br><br>

                <div class="row">
                  <div class="col-2"></div>  
                  <div class="col-6">
                       <h2  data-localize="aboutpage.value_trust">Trust</h2>
                          <p  data-localize="aboutpage.value_trust_text">We want to create trust. This means, once you accepted a gig, the other person relies on you to come and help. Vice versa, you would be very disappointed if you need to move out and no one will show up although promised. Be considerative about other users, it will be displayed not only by the rating but also by gratitude and strong sense of community. Imagine walking down the street and meeting all the people that you helped or that helped you. This is what makes a part of a city a neighbourhood.</p>
                  </div>
                  <div class="col-2">
                      <img src="img/trust.png" class="img-fluid" style="width: 100% \9;">
                  </div>
                  <div class="col-2"></div>
                </div>

                </div>
            </div>
            </div>
          </section>


<div id="footer"></div>


                    
  

    <!-- Bootstrap core JavaScript -->

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
    <?php
    //LAST BUT NOT LEAST, I DISCONNECT
	$a->disconnect();

?>
