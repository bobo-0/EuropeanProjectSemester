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
</style>


<?php
session_start();
function badgewidgethack_convert_email_to_openbadges_id($email) {
	$postdata = http_build_query(
	    array(
	        'email' => $email
	    )
	);

	$opts = array('http' =>
	    array(
	        'method'  => 'POST',
	        'header'  => 'Content-type: application/x-www-form-urlencoded',
	        'content' => $postdata
	    ) 
	);

	$context  = stream_context_create($opts);
	$emailjson = file_get_contents('https://backpack.openbadges.org/displayer/convert/email', false, $context);
	$emaildata = json_decode($emailjson);
   // echo "<script>alert('".$emaildata->userId."');</script>";
	return $emaildata->userId;
}

function badgewidget_return_groups_given_badge_id($userid) {
	$url = "http://beta.openbadges.org/displayer/" . $userid . "/groups.json";
	$groupjson = file_get_contents($url);
	$groupdata = json_decode($groupjson,true);
	return $groupdata;
}

?>
<body>
<div class="container-narrow">
<div id="header"></div>
<br><br><br>

<div class="jumbotron"> 
    <h1 class="text-center" data-localize="badges.badges_title" >  Your Badges  </h1>
</div>
<br>


<br><br>
<div class="masthead">
	<img src="./bwh.png" align="right" />
	<h1 class="muted text-center" data-localize="badges.badges_selectGroup">Select a group</h1>
</div>



<?php

$userid = badgewidgethack_convert_email_to_openbadges_id($_SESSION['email']);
$data = badgewidget_return_groups_given_badge_id($userid);

if ($limit = count($data[groups])) {?>
	
	<form action="badgewidget.php" method="post">
		<br><br>

	<h5 class="text-center" data-localize="badges.badges_next" >Next, choose the group of badges you want to display in your widget.</h5><br><br>
	<br>
	
	<?php
	echo "<p class='text-center'><select name='group'><option>Select A Group</option>";

	$i = 0;
	while ($i < $limit) {
	                $group = $data[groups][$i][groupId];
	                $groupname = $data[groups][$i][name];
	                echo "<option value='" . $group . "." . $groupname . "'>" . $groupname . "</option>";
	                $i = $i + 1;
	}
	echo "</select></p>";
	echo "<input type='hidden' name='user' value='" . $userid . "'>";?>

	<center><p><h5 data-localize="badges.badges_then">And then</h5> <input type="submit" value="Continue >>>" data-localize="badges.badges_continue"></p></center>
	</form>

<?php
} else{
	echo "<br><br><h5 class='text-center'>You have no public groups in your backpack. Try making one public and adding a badge to it.</h5><br><br>";
}

echo "</div>";

?>

<center> <div class="col-lg-4 text-center">
<a class="btn btn-primary btn-xl" href="mypage.php" data-localize="badges.badges_button_mypage">Go to Mypage</a>
</div> </center>

<div id="footer"></div>

</html>