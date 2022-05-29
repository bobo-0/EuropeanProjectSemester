<!DOCTYPE html>
<?php
    require_once("model/connect.php");
    session_start();
    if($_SESSION['Logged']==1){
?>
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/solid.css" integrity="sha384-Rw5qeepMFvJVEZdSo1nDQD5B6wX0m7c5Z/pLNvjkB14W6Yki1hKbSEQaX9ffUbWe"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/fontawesome.css" integrity="sha384-GVa9GOgVQgOk+TNYXu7S/InPTfSDTtBalSgkgqQ7sCik56N9ztlkoTr2f/T44oKV"
        crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    
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

        .tit {
                color: #ED7A43
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
        
            
            $("#publish_success").click(function(e) {
              
                
                $.ajax({
                                type: "post",
                                url: "controller/saveDetails.php",
                                data: $("#form-publish").serialize(),
                                success: function(resp) {
                                    //alert($("#form-publish").serialize());
                                    location.replace("controller/payment.php");

                                    //$body.removeClass("loading");

                                }
                            });
                
                /*
                 $.ajax({
                                type: "post",
                                url: "controller/postJob.php",
                                data: $("#form-publish").serialize(),
                                success: function(resp) {
                                    if(resp==1){
                                      location.replace("publish.php");  
                                    }
                                    else{
                                       alert(resp); 
                                    }

                                    //$body.removeClass("loading");

                                }
                            });

                            
                            
                            
                          location.replace("publish.php");
                */

            });
            
             $("#btn-publish").click(function(e) {
                //alert($("#form-publish").serialize());
                $.ajax({
                    type: "post",
                    url: "controller/verifyOffer.php",
                    data: $("#form-publish").serialize(),
                    success: function(resp) {
                        //alert(resp);
                        if(resp==1){
                            
                            jQuery.noConflict(); 
                            $('#publishmodal').modal('show'); 
                        }
                        else{
                           alert(resp); 
                        }
                        
                        //$body.removeClass("loading");
                        
                    }
                });
                
                return false;

            });
            
            $("#publish_cancel").click(function(e) {
                //alert("daeun!");
                 $("#publishmodal").modal("hide");
                
            });
            
        });
        
        
    </script>
    <body id="page-top">
<div id="header"></div>
    <br>
    <br>
    <br>

    <div class="jumbotron">
        <h1 class="text-center" data-localize="joboffer.offer_title"> Welcome to Trust+Moerwijk </h1>
        <br>
        
    </div>
    </br>
    <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 data-localize="joboffer.offer_subtitle1">Offer a Gig</h2>
                <hr class="my-4">
                <p class="text-center" data-localize="joboffer.offer_subtitle"> Provide basic information as seen below to ask for help with your gigs</p>
            </div>
        </div>
        <br><br>
    <form action="" id="form-publish">
    <div class="container" id="div-publish">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-2" style="text-align:center" data-localize="joboffer.offer_field_email">Your e-mail</div>
            <div class="col-6">
                <input class="form-control" id="offer_employermail" name="offer_employermail" type="text" <?php
                    echo "value='".$_SESSION['email']."'";
                ?>
                    placeholder="input your mail" /></div>
        </div> <div class="col-2"></div><br>

        <div class="row">
            <div class="col-2"></div>
            <div class="col-2" style="text-align:center" data-localize="joboffer.offer_field_title">Gig title</div>
            <div class="col-6">
                <input class="form-control" id="offer_jobtitle" name="offer_jobtitle" type="text"
                    placeholder="Name your gig" data-localize="joboffer.offer_field_title_example" /> </div>
        </div><div class="col-2"></div> <br>

        <div class="row">
        <div class="col-2"></div>
        <div class="col-2" style="text-align:center" data-localize="joboffer.offer_field_category">Gig category</div>
        <div class="col-6">
            <select class="form-control" id="offer_jobcategory" name="offer_jobcategory">
                 <?php
                $a->myQuery("SELECT * from category;");
                while ($rowEmp = $a->getArrayRow()) {
			  
                    echo '<option value="'.$rowEmp['id_cat'].'">'.$rowEmp['name'].'</option>';
   				}
               ?>
            </select>
        </div>
        </div> <div class="col-2"></div> <br>


        <div class="row">
            <div class="col-2"></div>
            <div class="col-2" style="text-align:center" data-localize="joboffer.offer_field_location">Location</div>
            <div class="col-6">
                <b data-localize="joboffer.offer_field_street">Street</b><input class="form-control" id="offer_streetname" name="offer_streetname" type="text" > <br> 
                <b data-localize="joboffer.offer_field_cityname">City </b><input class="form-control" id="offer_cityname" name="offer_cityname" type="text"> <br> 
                <b data-localize="joboffer.offer_field_post">Postal code </b><input class="form-control" id="offer_postnum" name="offer_postnum" type="text" > <br> 
                <b data-localize="joboffer.offer_field_housenr">House number</b> <input class="form-control" id="offer_housenum" name="offer_housenum" type="text" > </div>
        </div> <div class="col-2"></div><br>

        <div class="row">
            <div class="col-2"></div>
            <div class="col-2" style="text-align:center" data-localize="joboffer.offer_field_date">Date</div>
            <div class="col-6">
            
           
            
            
            <input class="form-control" id="offer_date" name="offer_date" type="datetime-local" value="<?php
               
                    echo date("Y-m-d");
                    echo "T";
                    echo date("h:i:s");
                    
            ?>" min="<?php
                    echo date("Y-m-d");
                    echo "T";
                    echo date("h:i:s");
            ?>" /> </div>
        </div><div class="col-2"></div> <br>

        <div class="row">
            <div class="col-2"></div>
            <div class="col-2" style="text-align:center" data-localize="joboffer.offer_field_starttime">Start time</div>
            <div class="col-2">
            <input class="form-control" id="offer_stime" name="offer_stime" type="time" /> </div>
        
            <div class="col-2" style="text-align:right" data-localize="joboffer.offer_field_endtime">End time</div>
            <div class="col-2">
            <input class="form-control" id="offer_etime" name="offer_etime" type="time" /> </div>
        </div> <div class="col-2"></div><br>
        
        <div class="row">
            <div class="col-2"></div>
            <div class="col-2" style="text-align:center;" data-localize="joboffer.offer_field_pay">Total rate</div>
            <div class="col-1" stye="text-align:center;">
            <i class="fa fa-2x fas fa-euro-sign"></i> </div>
            <div class="col-5">
            <input class="form-control" id="offer_payment" name="offer_payment" type="text" /> 
            <p style="color:red;"> We will take 2 euros for commission fee. </p> </div>
        </div> <div class="col-2"></div><br>

        <div class="row">
            <div class="col-2"></div>
            <div class="col-2" style="text-align:center" data-localize="joboffer.offer_field_explanation">Description</div>
            <div class="col-6">
            <textarea class="form-control" name="offer_description" rows="5" cols="85" placeholder="Describe your gig shortly in here" 
                style="width:100%;height:100%;border:1;overflow:visible;text-overflow:ellipsis;"> </textarea> </div><div class="col-2"></div>
        </div> 
    </div>
    </form>
    <br>

    <center>
        <div class="col-lg-4 text-center" id="btn-publish">
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#publishmodal" id="btn-publish" data-localize="joboffer.offer_field_button_publish"> publish </button>
        </div>
    </center>

<div id="footer"></div>



    <!-- Modals for publish button -->
    <div class="modal fade" id="publishmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold" data-localize="offer_modal.modal_title">Please read carefully!</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>

                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <p data-localize="offer_modal.modal_warning"> If you publish once, you CANNOT edit MONEY, LOCATION and TIME. You should DOUBLE check this information for successful gig. <br> <br> In order to maintain our service, we charge a small fee of <b>2 euros.</b> This fee will be added by the system on top of the total amount. The fee will only be charged once a gig is completed successfully.
                        If you finish the double check, press "Accept" button. </p> <br> <br>

                        <p class="tit"> <center> <h5> <b> Terms and Condition for Employer  </b> </h5> </center>
                        <img class="img-fluid" src="img/tc_o/o1.jpg">
                        <img class="img-fluid" src="img/tc_o/o3.jpg">
                        <img class="img-fluid" src="img/tc_o/o4.jpg">
                        <img class="img-fluid" src="img/tc_o/o5.jpg">
                        <img class="img-fluid" src="img/tc_o/o6.jpg">
                        </p> <br> <br>
                        To proceed, press the "Publish" button.<br>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">

                        <button class="btn btn-primary" id="publish_success" data-localize="offer_modal.modal_btn_accept">Publish</button>
                        <button class="btn btn-default" id="publish_cancel" data-localize="offer_modal.modal_btn_cancel">Cancel</button>
                    </div>
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
<?php
    }else{

        echo "<script>alert('You must be loged in to offer a job'); location.replace('index.php');</script>";
        
    }
?>
