<!DOCTYPE html>
<?php
    session_start();
    require_once("model/connect.php");
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
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.css" rel="stylesheet">
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libe/jquery/1.12/0/jquery.min.js"></script>
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
        .page-header{
            padding-bottom:9px;
            margin:40px 0 20px;
            border-bottom:1px solid #eee
        }

        #profileimage {
            font-size : 200px;
            color: white;
        }
        .icon-stack {
          position: relative;
          display: inline-block;
          width: 2em;
          height: 5em;
          line-height: 4em;
          vertical-align: middle;

        }
        .icon-stack-1x,
        .icon-stack-2x,
        .icon-stack-3x {
          position: absolute;
          left: 0;
          width: 100%;
          text-align: center;
        }
        .icon-stack-1x {
          line-height: 1.9em;
        }
        .icon-stack-2x {
          font-size: 1.5em;
        }
        .icon-stack-3x {
          font-size: 2em;
        }
    </style>

<script>
    $(function(){
        $("#header").load("header.php");
    })
</script>
    <script>
        $(document).ready(function () {
          
            $body = $("body");
            $body.removeClass("loading");

            $("#mypage_badgeagree").click(function (e) {
               
                location.replace("groupBadges.php");
            });
            
            $("#mypage_refundsend").click(function(e){
                    $body.addClass("loading");
                    jQuery.noConflict(); 
                    $("#refoundmodal").modal("hide");
                    //alert($("#textrefound").serialize());
                    $.ajax({
                                type: "post",
                                url: "controller/askRefund.php",
                                data: $("#textrefound").serialize(),
                                success: function(resp) {
                                    //alert(resp);
                                    if(resp){
                                        //alert(resp);
                                        $body.removeClass("loading");
                                       alert("We have processed your request for a refound, we will solve it as soon as possible"); location.replace("index.php");
                                    }
                                    else{
                                        $body.removeClass("loading");
                                        alert("There was a mistake during your request, please try again later"); 
                                        //alert(resp);
                                    }

                                    //$body.removeClass("loading");

                                }
                            });
                
            });
        });

    </script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDE6wNUqXOwfcTGHRenxRlqx2lJDqJFWHI&callback=initMap">
    </script>
    <div id="header"></div>

    <br><br>
    <br>


    <div class="jumbotron text-center" style="background-color:orange;">
        <div class="row justify-content-center">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-3">
                    <i class="fa fa-4x fas fa-euro-sign"></i> &nbsp; <font size="30" face='Open Sans'> <?php
                        echo $a->MoneyOf($_SESSION['ID']);
                    ?> </font> <h6> Total amount earned </h6>
                </div>
                <div class="col-md-4">
                    <a href="profile.php"><i class="fas fa-user" id="profileimage" ></i></a>
                    <h2 class="section-heading" style="color:white;" face="Open Sans" ><?php
                        echo $_SESSION['name']." ".$_SESSION['lname'];
                    ?></h2>
                </div>
                <div class="col-md-3">
                    <i class="fa fa-4x fas fa-certificate" data-toggle="modal" data-target="#badgemodal" style="cursor:pointer;"></i>
                    <h6 data-localize="my_page.mypage_badges"> Check badges </h6>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>



    <!--Applied-->
    <div class="container" id="mypage_applied" name="mypage_applied">

        <div class="page-header">
            <h2 style="color:orange;" data-localize="my_page.mypage_jobs_applied"> Your current Gigs </h2>
        </div>

        <div class="row mb-5">

            
            
            <?php
                $a->myQuery("select job.* from job, user, user_job where job.Job_ID=user_job.Job_ID and user_job.ID=user.ID and user.ID=".$_SESSION['ID']." and job.Time>CURRENT_DATE(); ");
        
                 while ($rowEmp = $a->getArrayRow()) {
                     
                     echo '<div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                            <div class="card card-inverse card-info">
                                <div class="card-block">
                                    <blockquote class="card-blockquote p-3"><b> '.$rowEmp["Name"].'</b> </blockquote>
                                     <p class="p-3">';
                     $a->my2ndQuery("select * from address where Addr_ID=".$rowEmp['Addr_ID']);
                     
                     while($wo=$a->getArrayRow2()){
                         echo '<a href="https://www.google.com/maps/search/?api=1&query='.str_replace(" ","+",$wo["Street"]).'+'.$wo["House_No"].'+'.$wo["Post_No"].'+'.$wo["City"].'">Location in Google Maps</a>';
                     }
                     
                     
                     echo '</p>
                                </div>
                                <div class="card-footer" style="text-align:right;">
                                    <i class="fa fa-1x fas fa-euro-sign" id="mypage_money" name="mypage_money"> '.$rowEmp["J_Salary"].' </i> &nbsp;
                                    <a href="#">
                                        <i class="fa fa-1x far fa-calendar-alt" id="mypage_date" name="mypage_date"> '.$rowEmp["Time"].' </i>
                                    </a> &nbsp;
                                    
                                </div>
                            </div>
                        </div>';
                     
                     
                 }
                
            ?>
            
            
        
           

        </div>
    </div> <br>

 <br>

 <!--posted-->
 <div class="container" id="mypage_posted" name="mypage_posted">

<div class="page-header">
    <h2 style="color:orange;" data-localize="my_page.mypage_jobs_posted"> Gigs published by you </h2>
</div>

<div class="row mb-5">
<?php
        $a->myQuery("select job.* from job, payment where Poster_ID=".$_SESSION['ID']." and EndTime>date_sub(now(), interval 1 hour) and payment.concept=job.Job_ID and payment.done=0");
        
         while ($rowEmp = $a->getArrayRow()) {
             
             echo '<script>
             $(document).ready(function() {
             $("#refound'.$rowEmp["Job_ID"].'").on("click", function() {
                    //alert("#refound'.$rowEmp["Job_ID"].'");
                    jQuery.noConflict(); 
                    $.ajax({
                        type: "POST",
                        // make sure you respect the same origin policy with this url:
                        // http://en.wikipedia.org/wiki/Same_origin_policy
                        url: "controller/setIDRef.php",
                        data: { 
                            "RID": "'.$rowEmp["Job_ID"].'"

                        },
                        success: function(msg){
                           
                            //alert('.$_SESSION["RID"].');
                        }
                    });
                    
                    $("#refundmodal").modal("show");
                    
                
                });
            
            });
             
             </script>';
             
             echo '
                <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                    <div class="card card-inverse card-info">
                        <div class="card-block">
                            <blockquote class="card-blockquote p-3"> '.$rowEmp["Name"].' </blockquote>
                        </div>
                        <div class="card-footer" style="text-align:right;">
                            <i class="fa fa-1x fas fa-euro-sign" id="mypage_money" name="mypage_money"> '.$rowEmp["J_Salary"].' </i> &nbsp;
                            <a href="#">
                                <i class="fa fa-1x far fa-calendar-alt" id="mypage_date" name="mypage_date"> '.$rowEmp['Time'].' </i>
                            </a> &nbsp;
                            <span class="icon-stack" id="refound'.$rowEmp["Job_ID"].'" data-toggle="modal"  style="cursor:pointer;">
                               <i class="fas fa-sync-alt icon-stack-3x"></i>
                               <i class="fas fa-coins icon-stack-1x"></i>
                            </span>
                        </div>
                    </div>
                </div>



            ';
             
             
         }
?>
</div>

</div> <br>

 
 
  <div class="container" id="mypage_posted" name="mypage_posted">

<div class="page-header">
    <h2 style="color:orange;" data-localize="my_page.mypage_jobs_past"> Finished Gigs published by you </h2>
</div>

<div class="row mb-5">
<?php
        $a->myQuery("select DISTINCT job.* from job,payment where job.Poster_ID=".$_SESSION['ID']." and job.Job_ID=payment.concept AND payment.done=1  and not payment.issuer=".$_SESSION['ID']);
        
         while ($rowEmp = $a->getArrayRow()) {
             
             
             
             echo '
                <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                    <div class="card card-inverse card-info">
                        <div class="card-block">
                            <blockquote class="card-blockquote p-3"> '.$rowEmp["Name"].' </blockquote>
                        </div>
                        <div class="card-footer" style="text-align:right;">
                            <i class="fa fa-1x fas fa-euro-sign" id="mypage_money" name="mypage_money"> '.$rowEmp["J_Salary"].' </i> &nbsp;
                            <a href="#">
                                <i class="fa fa-1x far fa-calendar-alt" id="mypage_date" name="mypage_date"> '.$rowEmp['Time'].' </i>
                            </a> &nbsp;
                            
                            
                        </div>
                    </div>
                </div>



            ';
             
             
         }
?>
</div>

</div> <br>

 <!--done-->
 <div class="container" id="mypage_done" name="mypage_done">

<div class="page-header">
    <h2 style="color:orange;" data-localize="my_page.mypage_jobs_done"> Gigs finished by you </h2>
</div>

<div class="row mb-5">

   <?php
                $a->myQuery("select job.* from job, user, user_job where job.Job_ID=user_job.Job_ID and user_job.ID=user.ID and user.ID=".$_SESSION['ID']." and job.Time<CURRENT_DATE(); ");
        
                 while ($rowEmp = $a->getArrayRow()) {
                     
                     echo '<div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                            <div class="card card-inverse card-info">
                                <div class="card-block">
                                    <blockquote class="card-blockquote p-3"><b> '.$rowEmp["Name"].'</b> </blockquote>
                                     <p class="p-3">';
                     $a->my2ndQuery("select * from address where Addr_ID=".$rowEmp['Addr_ID']);
                     
                     while($wo=$a->getArrayRow2()){
                         echo '<a href="https://www.google.com/maps/search/?api=1&query='.str_replace(" ","+",$wo["Street"]).'+'.$wo["House_No"].'+'.$wo["Post_No"].'+'.$wo["City"].'">Location in Google Maps</a>';
                     }
                     
                     
                     echo '</p>
                                </div>
                                <div class="card-footer" style="text-align:right;">
                                    <i class="fa fa-1x fas fa-euro-sign" id="mypage_money" name="mypage_money"> '.$rowEmp["J_Salary"].' </i> &nbsp;
                                    <a href="#">
                                        <i class="fa fa-1x far fa-calendar-alt" id="mypage_date" name="mypage_date"> '.$rowEmp["Time"].' </i>
                                    </a> &nbsp;
                                    
                                </div>
                            </div>
                        </div>';
                     
                     
                 }
                
            ?>
</div>
</div>
<div id="footer"></div>

    <!--MODAL-->




    <!--Modal for badges-->
    <div class="modal fade" id="badgemodal" name="badgemodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold" data-localize="my_page.mypage_badges_warning_title">Caution</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body" data-localize="my_page.mypage_badges_warning">
                    <p>If you use badges, your badges would be public disclosure.
                    Are you aware of this and agree with it?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" id="mypage_badgeclose" name="mypage_badgeclose" data-localize="my_page.mypage_badges_close">Close</button>
                    <button type="button" class="btn btn-primary" id="mypage_badgeagree" name="mypage_badgeagree" href="#" data-localize="my_page.mypage_badges_agree">Agree</button>
                </div>
            </div>
        </div>
    </div>

    <!--Modal for refund-->
    <div class="modal fade" id="refundmodal" name="refundmodal">
        <div class="modal-dialog">
            <div class="modal-content">
                
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold" data-localize="refund.refund_caution">&nbsp;Caution</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>

                <div class="modal-body">
                    <p style="text-align:center;" data-localize="refund.refund_please"> Please write this form to get a refund.<br> We will check the content and proceed the refund 
                    according to our terms & condition.  
                    <br data-localize="refund.refund_handle"> We will handle it as soon as possible :) </p>
                        <br> 
                    <p data-localize="refund.refund_why"> Why you want to refund?
                    <form action="" id="textrefound">
                        <textarea class="form-control" name="mypage_refunddescription" id="mypage_refunddescription" rows="5" cols="85"  
                style="width:100%;height:100%;border:1;overflow:visible;text-overflow:ellipsis;"> </textarea>
                    </form>
                     </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" id="mypage_refundcancle" name="mypage_refundcancle" data-localize="refund.refund_cancel">Cancel</button>
                    <button type="button" class="btn btn-primary" id="mypage_refundsend" name="mypage_refundsend" href="#" data-localize="refund.refund_send">Send</button>
                </div>
            </div>
        </div>
    </div>


    <!--Modal for checking applier-->
    <!-- <div class="modal fade" id="appliermodal" name="appliermodal">
        <div class="modal-dialog">
            <div class="modal-content">
                
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">&nbsp;Information of your gig applier</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>

                <div class="modal-body">
                    <p>
                    <div id="applier_name" name="applier_name">  Name : Daeun Cho </div>
                    <div id="applier_email" name="applier_email"> E-mail : whekdms97@naver.com </div> 
                    </p>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="mypage_appliercheck" name="mypage_appliercheck" href="#">OK</button>
                </div>
            </div>
        </div>
    </div>
 -->


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

        echo "<script>location.replace('index.php');</script>";
        
    }
?>