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
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/solid.css" integrity="sha384-Rw5qeepMFvJVEZdSo1nDQD5B6wX0m7c5Z/pLNvjkB14W6Yki1hKbSEQaX9ffUbWe"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/fontawesome.css" integrity="sha384-GVa9GOgVQgOk+TNYXu7S/InPTfSDTtBalSgkgqQ7sCik56N9ztlkoTr2f/T44oKV"
        crossorigin="anonymous">

        <!-- Plugin CSS -->
        <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/creative.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/locale/nl.js"></script>
        
        
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
.tab {
    overflow: hidden;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #fff;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border-top: none;
}
dt,
dd{
  font-family: 'Open Sans', 'Helvetica Neue', Arial, sans-serif;
}
</style>

<script>
    $(function(){
        $("#header").load("header.php");
        
        
    })
    
    $(document).ready(function() {
        var ispast=0;
        
        $('.nopresent').hide();
        
        $("#joblist_jobcategory").on('change', function() {
                //alert($('#joblist_date').val());
               if(this.value==0){
                   $('.subclase').show();
                   if(ispast==0)
                                $('.nopresent').hide();
                                else
                               $('.present').hide();
               }
                else{
                     var str1=".clase"
                     
                    $('.subclase').hide();
                    $(str1.concat(this.value)).show();
                    if(ispast==0)
                                $('.nopresent').hide();
                                else
                               $('.present').hide();
                }
                
        });
        
        $("#past").on('click', function() {
                $("#datecontainer").hide();
                $('.subclase').show();
                $('.present').hide();
                ispast=1;
                
        });
        
        $("#defaultOpen").on('click', function() {
                $("#datecontainer").show();
                 //$('.subclase').hide();
                $('.nopresent').hide();
            
                $.ajax({
                    type: "post",
                    url: "controller/filterDate.php",
                    data: $("#joblistdateform").serialize(),
                    success: function(response) {
                        //alert(response);
                        // var flag = isJSON(response);
                        //alert(flag);        
                        response = JSON.parse(response); 
                         //alert(response);
                            //Iterate the Array using for each loop of jquery
                            $.each(response, function( index, value ) {
                              //alert( "Index : " + index + "Value : " + value );
                                var str1=".idclase"
                                
                               
                                
                                
                                
                                $(str1.concat(value)).show();
                            });
                          if($("#joblist_jobcategory").value()==0){
                              //alert("entre1");
                               $('.subclase').show();
                              
                        
                              if(ispast==0)
                                $('.nopresent').hide();
                                else
                               $('.present').hide();
                              
                           }
                            else{
                                //alert($("#joblist_jobcategory").value());
                                 var str1=".clase"
                                $('.subclase').hide();
                                $(str1.concat($("#joblist_jobcategory").value)).show();
                                 $('.nopresent').hide();
                                if(ispast==0)
                                $('.nopresent').hide();
                                else
                               $('.present').hide();
                            }
                        
                        
                    //    $("#porfecha").html(response);
                        //lert(resp);
                        //$body.removeClass("loading");
                        //location.replace("end.php");
                    }
                });

                return false;
                
        });
        
        //alert($('#joblist_date').val());
        //alert($('#joblistdateform').serialize());
        
        $("#joblist_date").on('change', function() {
                
              $('.subclase').hide();
            
                $.ajax({
                    type: "post",
                    url: "controller/filterDate.php",
                    data: $("#joblistdateform").serialize(),
                    success: function(response) {
                        //alert(response);
                        // var flag = isJSON(response);
                        //alert(flag);        
                        response = JSON.parse(response); 
                         //alert(response);
                            //Iterate the Array using for each loop of jquery
                            $.each(response, function( index, value ) {
                              //alert( "Index : " + index + "Value : " + value );
                                var str1=".idclase"
                                
                                $(str1.concat(value)).show();
                                
                            });
                          if($("#joblist_jobcategory").value()==0){
                              //alert("entre1");
                               $('.subclase').show();
                                if(ispast==0)
                                $('.nopresent').hide();
                                else
                               $('.present').hide();
                           }
                            else{
                                alert($("#joblist_jobcategory").value());
                                 var str1=".clase"
                                $('.subclase').hide();
                                $(str1.concat($("#joblist_jobcategory").value)).show();
                                if(ispast==0)
                                $('.nopresent').hide();
                                else
                               $('.present').hide();
                                //if(ispast==0)
                                //$('.nopresent').hide();
                            }
                        
                        
                    //    $("#porfecha").html(response);
                        //lert(resp);
                        //$body.removeClass("loading");
                        //location.replace("end.php");
                    }
                });

                return false;
            
            
            
              
              
                
        });
        
        //$('#defaultOpen').click();
        
    });
    
</script>


       

    <div id="header"></div>
        <br><br><br>

        <div class="jumbotron">
            <h1 class="text-center"  data-localize="joblist.joblist_title">Our Gig List</h1>
            <br>
        </div>



    <br>
    <br>
    <div id="container">
                <div class="row">
        <div class="col-lg-3"></div>
    <div class="col-lg-7 tab">
        <button class="tablinks" onclick="openJob(event, 'Available')" id="defaultOpen"  data-localize="joblist.joblist_available">Available Gigs</button>
        <button class="tablinks" onclick="openJob(event, 'Past')" id="past"  data-localize="joblist.joblist_past">Past or Taken Gigs</button>
</div>






<div class="col-lg-2"></div>
</div>
</div>
<br>
<br>
<div class="container">
    <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-4">
            <p  data-localize="joblist.joblist_category"> Gig category</p>
            <select class="form-control" id="joblist_jobcategory" name="joblist_jobcategory">
                <option value="0">See All</option>
               <?php
                $a->myQuery("SELECT * from category;");
                while ($rowEmp = $a->getArrayRow()) {
			  
                    echo '<option value="'.$rowEmp['id_cat'].'">'.$rowEmp['name'].'</option>';
   				}
               ?>
            </select></div>
            
            <div class="col-lg-3" id="datecontainer">
                <p  data-localize="joblist.joblist_date">Date</p>
             <form action="" id="joblistdateform">
                 <input class="form-control" id="joblist_date" name="joblist_date" type="datetime-local" value="<?php
               
                    echo date("Y-m-d");
                    echo "T";
                    echo date("h:i:s");
                    
            ?>" min="<?php
                    echo date("Y-m-d");
                    echo "T";
                    echo date("h:i:s");
            ?>" />
             </form>   
            
            
            </div>
            
                
                
            
            
            <div class="col-lg-2"></div>
        </div>
</div>

<div id="Available" class="tabcontent">
    <div class="container">
        <div id="porfecha"></div>

        <?php
        if($_SESSION['Logged']==1){
            $a->myQuery("SELECT Job_ID, Name, J_Salary, J_Des_Long, Time, Addr_ID, Poster_ID, id_cat FROM job WHERE Time > DATE_SUB(NOW(), INTERVAL 15 MINUTE) and status BETWEEN 0 AND 1 ORDER by Time");
        }else{
            $a->myQuery("SELECT Job_ID, Name, J_Salary, J_Des_Long, Time, Addr_ID, Poster_ID, id_cat FROM job WHERE Time > DATE_SUB(NOW(), INTERVAL 15 MINUTE) and status=0 ORDER by Time");
            
        }
        
        
        $num=0;
        echo "<div id='loco'>";
        while ($rowEmp = $a->getArrayRow()) {
                    
                    echo '<script>
                    $(document).ready(function() {
                    $("#btn-apply'.$num.'").click(function(e) { 
                            //alert($("#selected_job'.$num.'").serialize());
                            $.ajax({
                                type: "post",
                                url: "controller/setJobSession.php",
                                data: $("#selected_job'.$num.'").serialize(),
                                success: function(resp) {
                                    //alert(resp);
                                    //$body.removeClass("loading");
                                    location.replace("info.php");
                                }
                            });

                            return false;

                        });
                        });
                    </script>';
                    echo '<div class="container clase'.$rowEmp["id_cat"].' subclase idclase'.$rowEmp["Job_ID"].' present"><hr class="my-4"><div class="row"><div class="col-lg-2"></div><div class="col-lg-7"><h4><dt>';
                  echo $rowEmp['Name'];
                 
                  echo '</dt></h4><p><strong>Category:</strong> <em>';
                    
                    echo $a->GetCategory($rowEmp["id_cat"]);
                    echo'</em><p>';
                    //printing the stars  
                    echo'<b>Employer rate </b>';
                    for ($x = 1; $x <=(int) $a->GetStarsOf($rowEmp['Poster_ID']); $x++) {
                        echo '<i class="fas fa-star"></i>';
                        
                    } 
            
                    // end of displaying the stars
                    echo  '<dd>';
                    echo $rowEmp['Time'];
                    echo '</dd></div><div class="col-lg-2"><dt>Total Rate</dt> <dd>';
                    echo  $rowEmp['J_Salary'];
                    echo ' euros </dd></div><div class="col-lg-1"></div><br><div class="col-lg-2"></div><div class="col-lg-7"><dt>Description</dt><dd>';
                    echo $rowEmp["J_Des_Long"];
                    echo '</div><div class="col-lg-2"><dt>Location</dt><dd>';
                    //echo "Select * from Address where Addr_ID=".$rowEmp['Addr_ID'];
                    $a->my2ndQuery("Select * from Address where Addr_ID=".$rowEmp["Addr_ID"]);
                
                    while ($rowEmp2 = $a->getArrayRow2()) {
                        echo $rowEmp2['Street']." ".$rowEmp2['House_No']."<br>".$rowEmp2['Post_No'].$rowEmp2['City'].'</dd></div><div class="col-lg-1"></div><br><div class="col-lg-2"></div><div class="col-lg-3"><dt>Start time</dt> <dd>';
                    }
                    echo '17:00</dd></div><div class="col-lg-4"><dt>Approximate end time</dt><dd>';
                    echo '19:00</dd></div>';
                    echo '<form id="selected_job'.$num.'"> <textarea name="jobid" style="display:none;">'.$rowEmp['Job_ID'].'</textarea></form>';
                    echo '<div class="col-lg-2"><a class="btn btn-warning" id="btn-apply'.$num.'">Get this gig</a></div><div class="col-lg-1"></div><br></div> </div><div class="col-lg-1"></div><br></div>';
                    $num++;
               }
        echo "</div>";
   
      ?>
</div>
</div>

<!--TRABAJOS PASADOS-->
<div id="Past" class="tabcontent">
    <div class="container">
        
        <?php
        if($_SESSION['Logged']==1){
            $a->myQuery("SELECT Job_ID, Name, J_Salary, J_Des_Long, Time, Addr_ID, Poster_ID, id_cat FROM job WHERE Time < DATE_SUB(NOW(), INTERVAL 15 MINUTE) or status=2");
        }else{
            $a->myQuery("SELECT Job_ID, Name, J_Salary, J_Des_Long, Time, Addr_ID, Poster_ID, id_cat FROM job WHERE Time < DATE_SUB(NOW(), INTERVAL 15 MINUTE) or status between 1 and 2");
        }
        
        
        
        $num=0;
        echo "<div id='locos'>";
        while ($rowEmp = $a->getArrayRow()) {
                   
                    echo '<div class="container clase'.$rowEmp["id_cat"].' subclase nopresent idclase'.$rowEmp["Job_ID"].'"><hr class="my-4 subclase"><div class="row"><div class="col-lg-2"></div><div class="col-lg-7"><h4><dt>';
                  echo $rowEmp['Name'];
                   echo '</dt></h4><p><strong data-localize="joblist.joblist_listing_category">Category:</strong> <em>';
                    echo $a->GetCategory($rowEmp["id_cat"]);
                    echo'</em><p>';
                    //printing the stars  
                    
                    for ($x = 1; $x <=(int) $a->GetStarsOf($rowEmp['Poster_ID']); $x++) {
                        echo '<i class="fas fa-star"></i>';
                        
                    } 
            
                    // end of displaying the stars
                    echo  '<dd>';
                    echo $rowEmp['Time'];
                    echo '</dd></div><div class="col-lg-2"><dt data-localize="joblist.joblist_listing_rate">Rate</dt> <dd>';
                    echo  $rowEmp['J_Salary'];
                    echo ' euros </dd></div><div class="col-lg-1"></div><br><div class="col-lg-2"></div><div class="col-lg-7"><dt data-localize="joblist.joblist_listing_description">Description</dt><dd>';
                    echo $rowEmp["J_Des_Long"];
                    echo '</div><div class="col-lg-2"><dt data-localize="joblist.joblist_listing_location">Location</dt><dd>';
                    //echo "Select * from Address where Addr_ID=".$rowEmp['Addr_ID'];
                    $a->my2ndQuery("Select * from Address where Addr_ID=".$rowEmp["Addr_ID"]);
                
                    while ($rowEmp2 = $a->getArrayRow2()) {
                        echo $rowEmp2['Street']." ".$rowEmp2['House_No']."<br>".$rowEmp2['Post_No'].$rowEmp2['City'].'</dd></div><div class="col-lg-1"></div><br><div class="col-lg-2"></div><div class="col-lg-3"><dt data-localize="joblist.joblist_listing_starttime">Start time</dt> <dd>';
                    }
                    echo '17:00</dd></div><div class="col-lg-4"><dt data-localize="joblist.joblist_listing_endtime">Approximate end time</dt><dd>';
                    echo '19:00</dd></div>';
                   
                    echo '<div class="col-lg-2"></div><div class="col-lg-1"></div><br></div> </div><div class="col-lg-1"></div><br></div>';
                    $num++;
               }
        echo "</div>";
   
      ?>
        

<!-- here I will print dinamycally -->
        
</div>
</div>
        
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

                <script>
function openJob(evt, jobName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(jobName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

    </body>

    </html>
    <?php
    //LAST BUT NOT LEAST, I DISCONNECT
   $a->disconnect();

?>