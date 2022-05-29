<!DOCTYPE html>
<?php
    session_start();
    if($_SESSION['Logged']==1){
        echo "<script>location.replace('index.php');</script>";
    }
    else{
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
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.css" rel="stylesheet">
   
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>


  <body>
<script>
    $(function(){
        $("#header").load("header.php");
    })
</script>
    <script>


        $(document).ready(function() {
            //alert($("#register").serialize());
            
             $("#btns").click(function(e) {
                        //alert($("#register").serialize());
                         $.ajax({
                                type: "post",
                                url: "controller/register.php",
                                data: $("#register").serialize(),
                                success: function(resp) {
                                    //alert(resp);
                                    if(resp){
                                        //alert(resp);
                                       alert("Now you are registered"); location.replace("index.php");
                                    }
                                    else{
                                        alert("There was a mistake during your registration, please try again later"); 
                                        //alert(resp);
                                    }

                                    //$body.removeClass("loading");

                                }
                            });
                        

                });
            //alert("hi");
            
            });
       

    </script>
    <script>
        $(function() {
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
          text-decoration:underline;
        }
     
    </style>



   <!-- Navigation -->
       <div id="header"></div>

    <br><br>
    <div class="jumbotron"> 
        <h1 class="text-center" data-localize="registerform.register_title">  Welcome to Trust+Moerwijk </h1>   
    </div>

<div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading" data-localize="registerform.register" >Register</h2>
            <hr class="my-4">
            <p class="mb-5" data-localize="registerform.description">Ready to start your first gig with us? </br>With minimum personal information, you can use our platform and experience the benefits of badges and publishing Gigs!</p>
          </div>
        </div>
<form id="register">
<table class="register" align="center" width="80%" cellpadding="10px">

                    <tr>
                        <td width="20%" style="text-align:right"  data-localize="registerform.firstname">
                           First Name
                        </td>
                        <td width="60%">
                             <input class="form-control" data-validation="required" data-validation-error-msg="You haven't filled in your first name." id="FirstName" name="FirstName" type="text" placeholder="Your First name"/>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align:right" data-localize="registerform.lastname">
                          Last Name
                        </td>
                        <td style="text-align:right">
                            <input class="form-control" id="LastName" name="LastName" data-validation="required" data-validation-error-msg="You haven't filled in your last name." type="text" placeholder="Your Last name">
                        </td>
                    </tr>
                    <tr>
                      <td style="text-align:right" data-localize="registerform.email">
                        E-mail
                      </td>
                      <td>
                        <input class="form-control" name="E-mail" id="E-mail" type="E-mail" data-validation="email" required="required" data-validation-error-msg="Please fill in a valid e-mail address." placeholder="ex) Moerwijk@gmail.com" />
                      </td>

                    </tr>

                    <tr>
                        <td width="20%" style="text-align:right" data-localize="registerform.phonenumber">
                           Phone Number
                        </td>
                        <td width="60%">
                             <input class="form-control" id="phone" name="phone" type="text" placeholder="Your Phone Number"/>
                        </td>
                    </tr>

                    <tr>
                      <td style="text-align:right" data-localize="registerform.password">
                        Password
                      </td>
                      <td>
                        <input class="form-control" id="password" name="password" type="password" data-validation="length" data-validation-length="min8" placeholder="at least 8 characters" data-validation-error-msg="Password is too short." />
                      </td>
                    </tr>
                    <tr>
                      <td style="text-align:right" data-localize="registerform.password_repeat">
                        Confirm Password
                      </td>
                      <td>
                        <input class="form-control" id="password_confirm" name="password_confirm" type="password" data-validation="confirmation" data-validation-confirm="password" placeholder="Confirm password" data-validation-error-msg="Password confirmation is not the same as Password." />
                      </td>
		    </tr>
                </table>
        
 <hr>
        

 <center>
          <div class="form-group">
              <p align="center">
                <input type="checkbox" name="chk_agree" id="chk_agree" data-validation="required" value="Agree"> 
                &nbsp; <label data-localize="registerform.terms_checkbox"> I have read the Privacy and Policy and I agree. </label> 
              </p>
          </div>

        <div class="form-group">
          <div class="col-sm-12 text-center">
            <button class="btn btn-warning disabled" type="submit"  id="btns" data-localize="registerform.button_signup">Sign up</button>
            <button class="btn btn-default" type="submit" onclick="location.href='index.php' " data-localize="registerform.button_cancel">Cancel</button>
          </div>
        </div>
</center>  <hr>

        </div>
</div>
</form>


<!--Modal for register-->
<div class="modal fade" id="registermodal" name="registermodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold" data-localize="job_application_page.application_badges_warning_title">Please read!</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p style="text-align:center;">
                        <p class="tit"> <center> <h5> <b> Privacy Policy </b> </h5> </center>
                        <img class="img-fluid" src="img/PP/pp1.jpg">
                        <img class="img-fluid" src="img/PP/pp2.jpg">
                        <img class="img-fluid" src="img/PP/pp3.jpg">
                        <img class="img-fluid" src="img/PP/pp4.jpg">
                        <img class="img-fluid" src="img/PP/pp5.jpg">
                        <img class="img-fluid" src="img/PP/pp6.jpg">
                        <img class="img-fluid" src="img/PP/pp7.jpg">
                        <img class="img-fluid" src="img/PP/pp8.jpg">
                        <img class="img-fluid" src="img/PP/pp9.jpg">
                        <img class="img-fluid" src="img/PP/pp10.jpg">
                        </p>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="reg_agree" name="reg_agree" href="#" data-localize="job_application_page.application_badges_warning_btn_agree">Agree</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal" id="reg_close" name="reg_close" data-localize="job_application_page.application_badges_warning_btn_close">Cancel</button>
                    
                </div>
            </div>
        </div>
    </div>




    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="vendor/form-validator/jquery.form-validator.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

    <!-- Initialize the validator script -->
    <script>
$.validate({
modules: 'html5, security, toggleDisabled', 
//	onModulesLoaded: function() {
//		alert('Loaded modules');
//	}
});
</script>
   
<div id="footer"></div>


  </body>

</html>
<?php
    }
?>
