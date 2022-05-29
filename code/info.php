<?php
    session_start();
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
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

        <!-- Plugin CSS -->
        <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/creative.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libe/jquery/1.12/0/jquery.min.js"></script>

    </head>


    <body>
<script>
    $(function(){
        $("#header").load("header.php");
        
    })
</script>
        <script>
            $(document).ready(function() {
                
                $("#cancel").click(function(e) {
                    location.replace("index.php");
                });
                
                
                $("#info_badgeagree").click(function(e) {
                  //alert($("#form-user").serialize());
                    jQuery.noConflict(); 
                    $("#publishmodal").modal('hide');
                    $body.addClass("loading");
                    $.ajax({
                        type: "post",
                        url: "controller/applyJob.php",
                        data: $("#form-user").serialize(),
                        success: function(resp) {
                            //alert(resp);
                            if(resp){
                                $body.removeClass("loading");
                                location.replace("end.php");
                            }
                            else{
                                $body.removeClass("loading");
                                alert(resp);
                            }
                    
                            //$body.removeClass("loading");
                            
                        }
                    });

                    return false;

                });
            });

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

            .tit {
                color: #ED7A43
            }

        </style>

        <div id="header"></div>
        <br><br><br>
        
    <form action="" id="form-user">
        <div class="jumbotron">
            <h1 class="text-center" data-localize="job_application_page.application_page_title"> Welcome to Trust+Moerwijk </h1>
            <br>
        </div>

        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading" data-localize="job_application_page.application_subtitle1">Get your gig <b><?php echo $_SESSION["J_Name"];?></b></h2>
                <hr class="my-4">
                <p class="mb-5" data-localize="job_application_page.application_subtitle2">Just provide basic information to get this gig</p>
            </div>
        </div>

            <table class="register" align="center" width="80%" cellpadding="10px">

                <tr>
                    <td width="20%" style="text-align:right" data-localize="job_application_page.application_firstname">
                        First Name
                    </td>
                    <td width="80%">
                       <?php
                        if($_SESSION['Logged']==1){
                       ?>
                        <input class="form-control" id="FirstName" name="FisrtName" type="text" placeholder="Your First name" required="required" <?php
                    echo "value='".$_SESSION['name']."'";
                ?>/>
                   <?php
                        }
                        else{
                   ?>
                       <input class="form-control" id="FirstName" name="FisrtName" type="text" placeholder="Your First name" required="required" />
                       <?php
                        }
                       ?>
                   
                    </td>
                </tr>

                <tr>
                    <td style="text-align:right" data-localize="job_application_page.application_lastname">
                        Last Name
                    </td>
                    <td style="text-align:right">
                        <?php
                        if($_SESSION['Logged']==1){
                       ?>
                        <input class="form-control" id="LastName" name="LastName" type="text" placeholder="Your Last name" required="required" <?php
                    echo "value='".$_SESSION['lname']."'";
                ?>>
                   <?php
                        }
                        else{
                   ?>
                       <input class="form-control" id="LastName" name="LastName" type="text" placeholder="Your Last name" required="required">
                       <?php
                        }
                       ?>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:right" data-localize="job_application_page.application_email">
                        E-mail
                    </td>
                    <td>
                       <?php
                        if($_SESSION['Logged']==1){
                       ?>
                        <input class="form-control" id="Email" name="Email" type="E-mail" placeholder="example: Moerwijk@gmail.com" <?php
                    echo "value='".$_SESSION['email']."'";
                ?> />
                   <?php
                        }
                        else{
                   ?>
                   <input class="form-control" id="Email" name="Email" type="E-mail" placeholder="example: Moerwijk@gmail.com" />
                   <?php
                        }
                   ?>
                    </td>
                    

                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="checkbox" name="chk_agree" id="chk_agree" value="Agree" data-localize="job_application_page.application_checkbox"> &nbsp; Tick this box, if you would like to receive more detailed information on this gig via email (e.g. location, time, money)
                    </td>
                </tr>

                <tr>
                    <td width="20%" style="text-align:right" data-localize="job_application_page.application_phonenumber">
                        Phone Number
                    </td>
                    <td width="60%">
                       <?php
                        if($_SESSION['Logged']==1){
                       ?>
                        <input class="form-control" id="Phone" name="Phone" type="text" placeholder="Your Phone Number" data-localize="job_application_page.application_phonenumber_example" <?php
                    echo "value='".$_SESSION['phone']."'";
                ?> />
                   <?php
                        }else{
                   ?>
                   <input class="form-control" id="Phone" name="Phone" type="text" placeholder="Your Phone Number"  />
                   <?php
                        }
                    ?>
                    </td>
                </tr>
            </table>
             </form>
     <hr>
            <center>
                <div class="form-group">
                    <div class="col-sm-12 text-center">
                        <button class="btn btn-warning" id="apply" data-toggle="modal" data-target="#publishmodal" data-localize="job_application_page.application_apply">I'm ready to help</button>
                        <button class="btn btn-default" type="submit" id="cancel" data-localize="job_application_page.application_cancel">Cancel</button>
                    </div>
                </div>
            </center>
            
       
        </div>
        </div>


    <!--Modal for publish-->
    <div class="modal fade" id="publishmodal" name="publishmodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold" data-localize="job_application_page.application_badges_warning_title">Please read!</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p style="text-align:center;"> Thank you for helping. <br>
                    Please have a look at our Terms and Conditions <br><br>
                        
                        <p class="tit"> <center> <h5> <b> Terms and Conditions for Employee </b> </h5> </center>
                        <img class="img-fluid" src="img/tc_a/a1.jpg">
                        <img class="img-fluid" src="img/tc_a/a2.jpg">
                        <img class="img-fluid" src="img/tc_a/a3.jpg">
                        <img class="img-fluid" src="img/tc_a/a4.jpg">
                        <img class="img-fluid" src="img/tc_a/a5.jpg">
                         </p> <br><br>
                        
                        
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="info_badgeagree" name="info_badgeagree" href="#" data-localize="job_application_page.application_badges_warning_btn_agree">Agree</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal" id="info_badgeclose" name="info_badgeclose" data-localize="job_application_page.application_badges_warning_btn_close">Cancel</button>
                    
                </div>
            </div>
        </div>
    </div>
    
<div id="footer"></div>


        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
        <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

        <!-- Custom scripts for this template -->
        <script src="js/creative.min.js"></script>

      



    </body>

    </html>
