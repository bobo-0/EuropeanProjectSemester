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
        <script>
    $(function(){
        $("#header").load("header.php");
    })
</script>
        <div id="header"></div>
        <br><br><br>
        <div class="jumbotron">
            <h1 class="text-center" > Criteria for Badges </h1>
            
        </div>
        <br><br><br>


            <div id="container">
                <div class="row">
                    <div class="col-12 text-center">
                      <h3 class="section-heading" data-localize="badge_translations.arts_culture"> Arts and Culture  </h3>
                      <hr class="my-4">
                    </div>

                    <div class="col-3"></div>
                    <div class="col-2">
                      <img src="img/badges/art.png" class="img-fluid" style="width: 100% \9;">
                  	</div>
                    <div class="col-5">
                          <p>
                            <dt>Description</dt>
                            <dd data-localize="criteria.arts_culture_desc">This person has experience in a field of Music/Theatre/Opera/Painting etc.</dd></p>
                          <p>
                            <dt>Criteria</dt> 
                            <dd data-localize="criteria.arts_culture_criteria">Received when a gig in the category of Arts/Culture has been done successfully.</dd> </p>
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>

            <br><br><br>
        
            <div id="container">
                <div class="row">
                    <div class="col-12 text-center">
                    <h3 class="section-heading"  data-localize="badge_translations.bicycle_repair"> Bicycle Repair </h3>
                    <hr class="my-4">
                    </div>

        			<div class="col-2"></div>
        			<div class="col-5">
                        <p>
                            <dt class="text-right">Description</dt>
                            <dd class="text-right" data-localize="criteria.bicycle_repair_desc">This person is experienced with bicycle repairs.</dd></p>
                        <p>
                            <dt class="text-right">Criteria</dt> 
                            <dd class="text-right" data-localize="criteria.bicycle_repair_crit">Received after a gig in the category of Crafts/Manufacturing/Hobbies is done successfully.</dd></p>
                    </div>
                    <div class="col-2">
                        <img src="img/badges/bicycle.png" class="img-fluid" style="width: 100% \9;">
                    </div>
                    <div class="col-3"></div>
				</div>
            </div>

            <br><br><br>

            <div id="container">
                <div class="row">
                    <div class="col-12 text-center">
                      <h3 class="section-heading"  data-localize="badge_translations.chores_cleaning"> Chores/Cleaning </h3>
                      <hr class="my-4">
                    </div>

                    <div class="col-3"></div>
                    <div class="col-2">
                      <img src="img/badges/cleaning.png" class="img-fluid" style="width: 100% \9;">
                  	</div>
                    <div class="col-5">
                        <p>
                            <dt>Description</dt>
                            <dd data-localize="criteria.chores_cleaning_desc">This person can help around the house with cleaning and other basic chores.</dd></p>
                        <p>
                            <dt>Criteria</dt>
                            <dd data-localize="criteria.chores_cleaning_crit">Received when a gig in the category of Chores/Cleaning has been done successfully.</dd></p>
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>

            <br><br><br>

            <div id="container">
                <div class="row">
                    <div class="col-12 text-center">
                    <h3 class="section-heading"  data-localize="badge_translations.it_expert"> IT Expert </h3>
                    <hr class="my-4">
                    </div>

        			<div class="col-2"></div>
        			<div class="col-5">
                        <p>
                            <dt class="text-right" >Description</dt> 
                            <dd class="text-right" data-localize="criteria.IT_expert_desc">This person has experience in the field of information Technologies/Computer Science/Software engineering.</dd></p>
                        <p>
                            <dt class="text-right">Criteria</dt> 
                            <dd class="text-right" data-localize="criteria.IT_expert_crit">Received when a gig in the category of Computer/Internet is done successfully.</dd></p>
                    </div>
                    <div class="col-2">
                        <img src="img/badges/computer.png" class="img-fluid" style="width: 100% \9;">
                    </div>
                    <div class="col-3"></div>
				</div>
            </div>

            <br><br><br>

            <div id="container">
                <div class="row">
                    <div class="col-12 text-center">
                      <h3 class="section-heading"  data-localize="badge_translations.admin"> Admin </h3>
                      <hr class="my-4">
                    </div>

                    <div class="col-3"></div>
                    <div class="col-2">
                      <img src="img/badges/consultant.png" class="img-fluid" style="width: 100% \9;">
                  	</div>
                    <div class="col-5">
                          <p>
                            <dt>Description</dt> 
                            <dd data-localize="criteria.admin_desc">This person has experience in Organizing/Advising/Supporting an administrative Task/Event.</dd></p>
                          <p>
                            <dt>Criteria</dt>
                            <dd data-localize="criteria.admin_crit">Received when a gig in the category of Management/Organization/Consultancy/Support.</dd></p>
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
            
            <br><br><br>

            <div id="container">
                <div class="row">
                    <div class="col-12 text-center">
                    <h3 class="section-heading"  data-localize="badge_translations.handyman"> Handyman </h3>
                    <hr class="my-4">
                    </div>

        			<div class="col-2"></div>
        			<div class="col-5">
                        <p>
                            <dt class="text-right">Description</dt>
                            <dd class="text-right" data-localize="criteria.handyman_desc">This person is particularly good in a specific craftsmanship and has experience within a specific field of Manufacturing/Crafts/Hobbies.</dd></p>
                        <p>
                            <dt class="text-right">Criteria</dt> 
                            <dd class="text-right" data-localize="criteria.handyman_crit">Received when a gig in the category of Crafts/Manufacturing/Hobbies.</dd></p>
                    </div>
                    <div class="col-2">
                        <img src="img/badges/craft.png" class="img-fluid" style="width: 100% \9;">
                    </div>
                    <div class="col-3"></div>
				</div>
            </div>
            
            <br><br><br>

            <div id="container">
                <div class="row">
                    <div class="col-12 text-center">
                      <h3 class="section-heading"  data-localize="badge_translations.teaching_education"> Teaching/Education </h3>
                      <hr class="my-4">
                    </div>

                    <div class="col-3"></div>
                    <div class="col-2">
                      <img src="img/badges/education.png" class="img-fluid" style="width: 100% \9;">
                  	</div>
                    <div class="col-5">
                          <p>
                            <dt>Description</dt> 
                            <dd data-localize="criteria.teachingeducation_desc">This person has experience in Teaching/Education and sharing knowledge.</dd></p>
                          <p>
                            <dt>Criteria</dt>
                            <dd data-localize="criteria.teachingeducation_crit">Received when a gig in the category of Teaching/Education is done successfully.</dd></p>
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
            
            <br><br><br>

            <div id="container">
                <div class="row">
                    <div class="col-12 text-center">
                    <h3 class="section-heading"  data-localize="badge_translations.food_catering_eating"> Food Services/Catering/Eating  </h3>
                    <hr class="my-4">
                    </div>

        			<div class="col-2"></div>
        			<div class="col-5">
                        <p>
                            <dt class="text-right">Description</dt> 
                            <dd class="text-right" data-localize="criteria.foodservices_desc">This person has experience in preparing a meal and assisting in the kitchen.</dd></p>
                        <p>
                            <dt class="text-right">Criteria</dt> 
                            <dd class="text-right" data-localize="criteria.foodservices_crit">Received when a gig in the category of Food Services/Catering/Eating has been done successfully.</dd></p>
                    </div>
                    <div class="col-2">
                        <img src="img/badges/food.png" class="img-fluid" style="width: 100% \9;">
                    </div>
                    <div class="col-3"></div>
				</div>
            </div>

            <br><br><br>

            <div id="container">
                <div class="row">
                    <div class="col-12 text-center">
                      <h3 class="section-heading"  data-localize="badge_translations.buddy"> Buddy  </h3>
                      <hr class="my-4">
                    </div>

                    <div class="col-3"></div>
                    <div class="col-2">
                      <img src="img/badges/health.png" class="img-fluid" style="width: 100% \9;">
                    </div>
                    <div class="col-5">
                          <p>
                            <dt>Description</dt> 
                            <dd data-localize="criteria.buddy_desc">This person has experience with patients/elderly people/people with disabilities and assisting them in their daily life.</dd></p>
                          <p>
                            <dt>Criteria</dt> 
                            <dd data-localize="criteria.buddy_crit">Received when a gig in the category of Health and Care/Social Assistance is done successfully.</dd></p>
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
            
            <br><br><br>

            <div id="container">
                <div class="row">
                    <div class="col-12 text-center">
                    <h3 class="section-heading"  data-localize="badge_translations.host_hostess"> Host/Hostess </h3>
                    <hr class="my-4">
                    </div>
                    <div class="col-2"></div>
                    <div class="col-5">
                        <p>
                            <dt class="text-right">Description</dt> 
                            <dd class="text-right" data-localize="criteria.host_desc">This person has experiences in Hosting/Assisting in Conventions/Events.</dd></p>

                        <p>
                            <dt class="text-right">Criteria</dt> 
                            <dd class="text-right" data-localize="criteria.host_crit">Received after a gig in the category of host/hostess is done successfully.</dd></p>
                    </div>
                    <div class="col-2">
                        <img src="img/badges/host.png" class="img-fluid" style="width: 100% \9;">
                    </div>
                    <div class="col-3"></div>
                </div>
            </div>
            
            <br><br><br>

            <div id="container">
                <div class="row">
                    <div class="col-12 text-center">
                      <h3 class="section-heading"  data-localize="badge_translations.labourer"> Labourer  </h3>
                      <hr class="my-4">
                    </div>

                    <div class="col-3"></div>
                    <div class="col-2">
                      <img src="img/badges/labouring.png" class="img-fluid" style="width: 100% \9;">
                    </div>
                    <div class="col-5">
                          <p>
                            <dt>Description</dt> 
                            <dd data-localize="criteria.labourer_desc">This person has experience in Labouring.</dd></p>
                          <p>
                            <dt>Criteria</dt>
                            <dd data-localize="criteria.labourer_crit">Received when a gig in the category of Landscaping/Gardening/Labouring is done successfully.</dd></p>

                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
            
            <br><br><br>

            <div id="container">
                <div class="row">
                    <div class="col-12 text-center">
                    <h3 class="section-heading"  data-localize="badge_translations.landscaping_gardening">  Landscaping/Gardening </h3>
                    <hr class="my-4">
                    </div>
                    <div class="col-2"></div>
                    <div class="col-5">
                        <p>
                            <dt class="text-right">Description</dt> 
                            <dd class="text-right" data-localize="criteria.landscaping_desc">This person is experienced in Landscaping/Gardening.</dd></p>

                        <p>
                            <dt class="text-right">Criteria</dt> 
                            <dd class="text-right" data-localize="criteria.landscaping_crit">Received after a gig in the category of Landscaping/Gardening/Labouring is done successfully.</dd></p>
                    </div>
                    <div class="col-2">
                        <img src="img/badges/landscaping.png" class="img-fluid" style="width: 100% \9;">
                    </div>
                    <div class="col-3"></div>
                </div>
            </div>
            
            <br><br><br>


            <div id="container">
                <div class="row">
                    <div class="col-12 text-center">
                      <h3 class="section-heading"  data-localize="badge_translations.mechanic"> Mechanic </h3>
                      <hr class="my-4">
                    </div>

                    <div class="col-3"></div>
                    <div class="col-2">
                      <img src="img/badges/mechanic.png" class="img-fluid" style="width: 100% \9;">
                    </div>
                    <div class="col-5">
                          <p>
                            <dt>Description</dt>
                            <dd data-localize="criteria.mechanic_desc">This person is experienced with automotive.</dd></p>
                          <p>
                            <dt>Criteria</dt> 
                            <dd data-localize="criteria.mechanic_crit">Received after a gig in the category of Crafts/Manufacturing/Hobbies is done successfully.</dd> </p>
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
            
            <br><br><br>

            <div id="container">
                <div class="row">
                    <div class="col-12 text-center">
                    <h3 class="section-heading"  data-localize="badge_translations.orderly">  Orderly </h3>
                    <hr class="my-4">
                    </div>
                    <div class="col-2"></div>
                    <div class="col-5">
                        <p>
                            <dt class="text-right">Description</dt> 
                            <dd class="text-right" data-localize="criteria.orderly_desc">This person is a clean worker and will make sure that there is no mess left behind.</dd></p>
                        <p>
                            <dt class="text-right">Criteria</dt>
                            <dd class="text-right" data-localize="criteria.orderly_crit">Received after x different users gave this badge to this person.</dd></p>
                    </div>
                    <div class="col-2">
                        <img src="img/badges/orderly.png" class="img-fluid" style="width: 90% \9;">
                    </div>
                    <div class="col-3"></div>
                </div>
            </div>
            
            <br><br><br>

            <div id="container">
                <div class="row">
                    <div class="col-12 text-center">
                      <h3 class="section-heading"  data-localize="badge_translations.polite"> Polite </h3>
                      <hr class="my-4">
                    </div>
                    <div class="col-3"></div>
                    <div class="col-2">
                      <img src="img/badges/polite.png" class="img-fluid" style="width: 90% \9;">
                    </div>
                    <div class="col-5">
                          <p>
                            <dt>Description</dt> 
                            <dd data-localize="criteria.polite_desc">This person has a very friendly and welcoming attitude and treats it’s surrounding with respect.</dd></p>
                          <p>
                            <dt>Criteria</dt>
                            <dd data-localize="criteria.polite_crit">Only appears after x different users gave this badge to this person.</dd></p>
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
            
            <br><br><br>

            <div id="container">
                <div class="row">
                    <div class="col-12 text-center">
                    <h3 class="section-heading"  data-localize="badge_translations.punctual"> Punctual </h3>
                    <hr class="my-4">
                    </div>
                    <div class="col-2"></div>
                    <div class="col-5">
                        <p>
                            <dt class="text-right">Description</dt>
                            <dd class="text-right" data-localize="criteria.punctual_desc">This person has been on time.</dd></p>
                        <p>
                            <dt class="text-right">Criteria</dt> 
                            <dd class="text-right" data-localize="criteria.punctual_crit">Received when x times punctual.</dd></p>
                    </div>
                    <div class="col-2">
                        <img src="img/badges/punctual.png" class="img-fluid" style="width: 90% \9;">
                    </div>
                    <div class="col-3"></div>
                </div>
            </div>
            
            <br><br><br>

            <div id="container">
                <div class="row">
                    <div class="col-12 text-center">
                      <h3 class="section-heading"  data-localize="badge_translations.recreation_entertainment"> Recreation/Entertainment </h3>
                      <hr class="my-4">
                    </div>

                    <div class="col-3"></div>
                    <div class="col-2">
                      <img src="img/badges/recreation.png" class="img-fluid" style="width: 90% \9;">
                    </div>
                    <div class="col-5">
                          <p>
                            <dt>Description</dt>
                            <dd data-localize="criteria.recreation_desc">This person has experience in working with kids in the fields of Recreation/Entertainment.</dd></p>
                          <p>
                            <dt>Criteria</dt>
                            <dd data-localize="criteria.recreation_crit">Received when a gig in the category of Recreation/Entertainment is done successfully.</dd> </p>
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
            
            <br><br><br>

            <div id="container">
                <div class="row">
                    <div class="col-12 text-center">
                    <h3 class="section-heading"  data-localize="badge_translations.reliable"> Reliable</h3>
                    <hr class="my-4">
                    </div>
                    <div class="col-2"></div>
                    <div class="col-5">
                        <p>
                            <dt class="text-right">Description</dt>
                            <dd class="text-right" data-localize="criteria.reliable_desc">This person has attended all gigs.</dd></p>
                        <p>
                            <dt class="text-right">Criteria</dt>
                            <dd class="text-right" data-localize="criteria.reliable_crit">Received when x gigs finished successfully.</dd></p>
                    </div>
                    <div class="col-2">
                        <img src="img/badges/reliable.png" class="img-fluid" style="width: 90% \9;">
                    </div>
                    <div class="col-3"></div>
                </div>
            </div>
            
            <br><br><br>

            <div id="container">
                <div class="row">
                    <div class="col-12 text-center">
                      <h3 class="section-heading"  data-localize="badge_translations.sales">Sales  </h3>
                      <hr class="my-4">
                    </div>
                    <div class="col-3"></div>
                    <div class="col-2">
                      <img src="img/badges/sales.png" class="img-fluid" style="width: 100% \9;">
                    </div>
                    <div class="col-5">
                          <p>
                            <dt>Description</dt>
                            <dd data-localize="criteria.sales_desc">This person has experience in sales.</dd></p>
                          <p>
                            <dt>Criteria</dt>
                            <dd data-localize="criteria.sales_crit">Received when a gig in the category of sales is done successfully.</dd> </p>
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
            
            <br><br><br>

            <div id="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h3 class="section-heading"  data-localize="badge_translations.transport_warehousing"> Transport/Warehousing </h3>
                        <hr class="my-4">
                    </div>

                    <div class="col-2"></div>
                    <div class="col-5">
                        <p>
                            <dt class="text-right">Description</dt>
                            <dd class="text-right" data-localize="criteria.transport_desc"> This person has experience in Moving / Transporting / Warehousing. </dd> </p>
                        <p>
                            <dt class="text-right">Criteria</dt>
                            <dd class="text-right" data-localize="criteria.transport_crit">Received when a gig in the category of Transport/Warehousing is done successfully.</dd></p>
                    </div>
                    <div class="col-2">
                        <img src="img/badges/transport.png" class="img-fluid" style="width: 100% \9;">
                    </div>
                    <div class="col-3"></div>
                </div>
            </div>
            
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
