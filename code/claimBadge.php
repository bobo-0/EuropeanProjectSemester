<!doctype html>
<?php
    $idbad=$_GET["idbagde"];
?>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Titulo</title>
    <meta name="description" content="Una descripcion">
    <meta name="author" content="Abraham Garcia">
    <script src="https://backpack.openbadges.org/issuer.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <?php
        echo "<script>
     $(document).ready(function() {
         alert('hello');
         OpenBadges.issue(['http://moerwijk.tlamatiliztli.net/OpenBadges/badges/".$idbad.".json'], function(errors, successes) {
             ";
        echo '$.ajax({
                        type: "post",
                        url: "controller/removeBadges.php",
                        data: {"name":"'.$idbad.'"},
                        success: function(resp) {
                                location.replace("index.php");
                            
                            //alert(resp);
                            //$body.removeClass("loading");
                            //location.replace("end.php");
                        }
                    });';
    
    echo "
            });
         
     });
        
    
    </script>";
    ?>

</head>

<body>
     
</body>
</html>
