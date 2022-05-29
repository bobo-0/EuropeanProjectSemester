<?php
 session_start();

    if($_SESSION["Logged"]==1){
        if($_SESSION["ID"]==2){
            require_once("model/connect.php");
?><!DOCTYPE html>
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

<style type="text/css">
    .jumbotron {
        background-image: url('img/bg.jpg');
        background-size: cover;
        text-shadow: black 0.2em 0.2em 0.2em;
        color: white;
    }

    .element {
        font-size: 110%;
    }
</style>


   <script>
       $(document).ready(function () {
          $body = $("body");
        $(function() {
            $("#header").load("header.php");
        });
       });

    </script>
    <div id="header"></div>

    <br><br><br>
    <div class="jumbotron"> 
        <h1 class="text-center" data-localize="admin.complaints_title">  All filed complaints </h1>   
    </div> <br>


    <div class="container">
       
       <?php
        $a->myQuery("select payment.reclamation, payment.Payment_ID,user.ID, payment.amount ,payment.comission, job.Job_ID, job.Name, user.U_First_Name, user.U_Last_Name, user.U_Phone, user.U_Email, job.Time, address.Street, address.House_No, address.City, address.Post_No from payment, job, address, user where payment.concept=job.Job_ID and job.Addr_ID=address.Addr_ID and job.Poster_ID=user.ID and payment.done=2;");
            $i=0;
            while ($rowEmp = $a->getArrayRow()) {
                
               
                
                
                echo '<div class="row"> 
            <div class="col-lg-2"> </div>
            <div class="col-lg-8" id="admin_complaintitle" name="admin_complaintitle">
                <h2> <dt data-localize="admin.refund_title"> Refund for '.$rowEmp["Name"].'</dt></h2> <br>
            </div>
            <div class="col-lg-2"> </div>
            
            <br><br>
            
            <div class="col-lg-2"> </div>
            <div class="col-lg-5 col-sm-">
                <dt class="element" data-localize="admin.refund_email"> Contact e-mail </dt> <dd id="admin_mail" name="admin_mail">'.$rowEmp["U_Email"].' </dd>
            </div>
            <div class="col-lg-3">
                <dt class="element" data-localize="admin.refund_number"> Contact number </dt> <dd id="admin_number" name="admin_number">'.$rowEmp["U_Phone"].' </dd>
            </div>
            <div class="col-lg-2"> </div>
            
            <br><br><br>

            <div class="col-lg-2"> </div>
            <div class="col-lg-5" >
                <dt class="element" data-localize="admin.refund_name_employer"> Employer name </dt> <dd id="admin_employername" name="admin_employername"> '.$rowEmp["U_First_Name"].' '.$rowEmp["U_Last_Name"].' </dd>
            </div>';
            
            
                $a->my2ndQuery("select user.U_Email, user.U_First_Name, user.U_Last_Name from user, user_job where user.ID=user_job.ID and user_job.Job_ID=".$rowEmp["Job_ID"]);
                
                    while ($rowEmp2 = $a->getArrayRow2()) {
                        
                     echo '<script>
                    $(document).ready(function() {
                    
                    $("#admin_accept'.$i.'").click(function(e) { 
                            //alert("haha");
                            
                            $body.addClass("loading");
                            $.ajax({
                                type: "post",
                                url: "controller/payRefound.php",
                                data: {"email":"'.$rowEmp["U_Email"].'",
                                "email2":"'.$rowEmp2["U_Email"].'",
                                "amount":"'.$rowEmp["amount"].'",
                                "com":"'.$rowEmp["comission"].'",
                                "isrefound":"1",
                                "payID":"'.$rowEmp["Payment_ID"].'",
                                "targetID":"'.$rowEmp["ID"].'"
                                },
                                success: function(resp) {
                                    alert("The refound was succesfully done");
                                    $body.removeClass("loading");
                                    location.replace(reload);
                                }
                            });

                        });
                        
                        
                    
                        });
                    </script>';    
                        
                    echo '<script>
                    $(document).ready(function() {
                    
            
                        
                        
                     $("#admin_deny'.$i.'").click(function(e) { 
                            $body.addClass("loading");
                            $.ajax({
                                type: "post",
                                url: "controller/payRefound.php",
                                data: {"email":"'.$rowEmp2["U_Email"].'",
                                "email2":"'.$rowEmp["U_Email"].'",
                                "amount":"'.$rowEmp["amount"].'",
                                "com":"'.$rowEmp["comission"].'",
                                "isrefound":"0",
                                "payID":"'.$rowEmp["Payment_ID"].'",
                                "targetID":"'.$rowEmp["ID"].'"
                                },
                                success: function(resp) {
                                    alert("The refound was succesfully done");
                                    $body.removeClass("loading");
                                    location.replace(reload);
                                }
                            });
                        });
                        });
                    </script>';
                        
                        
                        echo '<div class="col-lg-3">
                <dt class="element" data-localize="admin.refund_name_employee"> Employee name </dt> <dd id="admin_employeename" name="admin_employeename"> '.$rowEmp2["U_First_Name"].' '.$rowEmp2["U_Last_Name"].'</dd>
            </div>
            <div class="col-lg-2"> </div>';
                    }
                
            
            
            
            
            
            
            echo '<br><br><br>

            <div class="col-lg-2"> </div>
            <div class="col-lg-5" >
                <dt class="element"> Location </dt> <dd id="admin_location" name="admin_location"> '.$rowEmp["Street"].' '.$rowEmp["House_No"].' '.$rowEmp["City"].' '.$rowEmp["Post_No"].' </dd>
            </div>
            <div class="col-lg-3">
                <dt class="element"> Work date </dt> <dd id="admin_workdate" name="admin_workdate"> '.$rowEmp["Time"].' </dd>
            </div>
            <div class="col-lg-2"> </div>
            
            <br><br><br>

            <div class="col-lg-2"> </div>
            <div class="col-lg-8">
                <dt class="element" data-localize="admin.refund_description"> Description </dt> 
                <dd id="admin_description" name="admin_description"> '.$rowEmp["reclamation"].'
                <br><br><br></dd>
            </div>
            <div class="col-lg-2"> </div>

            <div class="col-lg-2"> </div>
            <div class="col-lg-8" style="text-align:right;"> 
                <button class="btn btn-warning" type="submit" id="admin_accept'.$i.'" data-localize="admin.btn_yes">Accept</button>
                <button class="btn btn-danger" type="submit" id="admin_deny'.$i.'" data-localize="admin.btn_no">Deny</button>
            </div>
            <div class="col-lg-2"> </div>

        </div>';
                $i++;
                
            }
            
       ?>
       
        
        
    </div>

 


<div id="footer"></div>







    <!-- Bootstrap core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
  

</body>

</html>
<?php
        }
        else{
            echo "<script>location.replace('index.php');</script>";
        }
    }else{
        echo "<script>location.replace('index.php');</script>";
    }
?>