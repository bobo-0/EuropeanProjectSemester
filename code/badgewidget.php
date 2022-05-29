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
    .imgcenter{
            display: block;
            margin-left: auto;
            margin-right: auto;
    
    
}
</style>



<?php //include('inc/header.php'); 
    $user=$_POST['user'];
    //echo "<script>alert('".$_POST["group"]."');</script>"; //$_POST["group"];
    list($group,$name) = explode(".",$_POST["group"]);
    //echo '<script>alert("var url = http://beta.openbadges.org/displayer/' . $user . '/group/' . $group . '.json");</script>';
    
//echo 'var url = "http://beta.openbadges.org/displayer/' . $user . '/group/' . $group . '.json";';
?>
<body onload="loadBadges();">
<div id="header"></div>
<br><br><br>

<div class="jumbotron"> 
    <h1 class="text-center" data-localize="badgewidget.badgewidget_title">  Badges  </h1>
</div>
<br>


<br><br>



<div class="container-narrow">
<div class="masthead">
	<h1 class="muted text-center" data-localize="badgewidget.badgewidget_explain">See your earned badges here!</h1>
</div>
<div class="carousel-item active">
<div id="preview" style="text-align: center">. . .</div></div>

<div id="footer"></div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
function loadBadges() {

<?php
//$user = $_POST["user"];
//list($group,$name) = explode(".",$_POST["group"]);
echo 'var url = "http://beta.openbadges.org/displayer/' . $user . '/group/' . $group . '.json";';
echo 'var widgetcode = "<table>"';
?>
    
    $.getJSON(url,
        function(data) {
            var i=0;
            while (i < data.badges.length < 4)
            {
                widgetcode = widgetcode + "<tr><td align='center'>";
                badgeName = data.badges[i].assertion.badge.name;
                imgUrl = data.badges[i].assertion.badge.image;
  			if (imgUrl.indexOf("http") == -1)
				{ imgUrl = data.badges[i].assertion.badge.issuer.origin + imgUrl; }
  		critUrl = data.badges[i].assertion.badge.criteria;
                assertUrl = data.badges[i].hostedUrl;
                widgetcode = widgetcode + "<a href='" + assertUrl + "'><img src='"+imgUrl+"' alt='First slide' class='img-fluid mx-auto' width='50' height='50' border='0' /></a><br /><a href='" + critUrl + "'>" + badgeName + "</a>";                
                widgetcode = widgetcode + "</td></tr>";
                i = i+1;
                if (i === data.badges.length || i === 4) {
                widgetcode = widgetcode + "</table>";
                document.getElementById("preview").innerHTML=widgetcode;
                return;
                }
            }
        }
    );

}
</script>
</html>


