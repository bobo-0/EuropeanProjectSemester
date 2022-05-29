<!DOCTYPE html>
<?php
    session_start();
    
?>
    <html lang="en">

    <head>
       
       <link rel="apple-touch-icon" sizes="57x57" href="img/logo/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="img/logo/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/logo/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="img/logo/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/logo/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="img/logo/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="img/logo/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="img/logo/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="img/logo/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="img/logo/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/logo/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="img/logo/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/logo/favicon-16x16.png">
       
        

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title data-localize="title">Trust+ Moerwijk</title>

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
      <script>
        $(function() {
           
            $("#footer").load("footer.php");
        })

    </script>
    <script>

         $(document).ready(function() {
            
    /*! Localize - v0.2.0 - 2016-10-13
 * https://github.com/coderifous/jquery-localize
 * Copyright (c) 2016 coderifous; Licensed MIT */
!function(a){var b;return b=function(a){return a=a.replace(/_/,"-").toLowerCase(),a.length>3&&(a=a.substring(0,3)+a.substring(3).toUpperCase()),a},a.defaultLanguage=b(navigator.languages&&navigator.languages.length>0?navigator.languages[0]:navigator.language||navigator.userLanguage),a.localize=function(c,d){var e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v;return null==d&&(d={}),v=this,h={},g=d.fileExtension||"json",f=a.Deferred(),k=function(a,b,c){var e;switch(null==c&&(c=1),c){case 1:return h={},d.loadBase?(e=a+("."+g),i(e,a,b,c)):k(a,b,2);case 2:return e=""+a+"-"+b.split("-")[0]+"."+g,i(e,a,b,c);case 3:return e=""+a+"-"+b.split("-").slice(0,2).join("-")+"."+g,i(e,a,b,c);default:return f.resolve()}},i=function(b,c,e,f){var g,i,j;return null!=d.pathPrefix&&(b=""+d.pathPrefix+"/"+b),j=function(b){return a.extend(h,b),q(h),k(c,e,f+1)},i=function(){return 2===f&&e.indexOf("-")>-1?k(c,e,f+1):d.fallback&&d.fallback!==e?k(c,d.fallback):void 0},g={url:b,dataType:"json",async:!0,timeout:null!=d.timeout?d.timeout:500,success:j,error:i},"file:"===window.location.protocol&&(g.error=function(b){return j(a.parseJSON(b.responseText))}),a.ajax(g)},q=function(a){return null!=d.callback?d.callback(a,e):e(a)},e=function(b){return a.localize.data[c]=b,v.each(function(){var c,d,e;return c=a(this),d=c.data("localize"),d||(d=c.attr("rel").match(/localize\[(.*?)\]/)[1]),e=u(d,b),null!=e?l(c,d,e):void 0})},l=function(b,c,d){return b.is("input")?o(b,c,d):b.is("textarea")?o(b,c,d):b.is("img")?n(b,c,d):b.is("optgroup")?p(b,c,d):a.isPlainObject(d)||b.html(d),a.isPlainObject(d)?m(b,d):void 0},o=function(b,c,d){var e;return e=a.isPlainObject(d)?d.value:d,b.is("[placeholder]")?b.attr("placeholder",e):b.val(e)},m=function(a,b){return s(a,"title",b),s(a,"href",b),t(a,"text",b)},p=function(a,b,c){return a.attr("label",c)},n=function(a,b,c){return s(a,"alt",c),s(a,"src",c)},u=function(a,b){var c,d,e,f;for(c=a.split(/\./),d=b,e=0,f=c.length;f>e;e++)a=c[e],d=null!=d?d[a]:null;return d},s=function(a,b,c){return c=u(b,c),null!=c?a.attr(b,c):void 0},t=function(a,b,c){return c=u(b,c),null!=c?a.text(c):void 0},r=function(a){var b;return"string"==typeof a?"^"+a+"$":null!=a.length?function(){var c,d,e;for(e=[],c=0,d=a.length;d>c;c++)b=a[c],e.push(r(b));return e}().join("|"):a},j=b(d.language?d.language:a.defaultLanguage),d.skipLanguage&&j.match(r(d.skipLanguage))?f.resolve():k(c,j,1),v.localizePromise=f,v},a.fn.localize=a.localize,a.localize.data={}}(jQuery);
              });
        </script>

    </head>

    <style>
        .modalhl {
            display: none;
            position: fixed;
            z-index: 1000;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: rgba( 255, 255, 255, .8) url('img/ajax-loader.gif') 50% 50% no-repeat;
        }
        
        body.loading .modalhl {
            overflow: hidden;
        }
        
        body.loading .modalhl {
            display: block;
        }

    </style>
<?php
        if(isset($_SESSION['Dutch'])){
            if($_SESSION['Dutch']==1){
               
              echo '<script>
                     $(document).ready(function() {
                    $("[data-localize]").localize("mylanguage",{language:"du"}); //change "es" to be "en"
                     });
                </script>';   
            }
        }
            
?>
   
    <script>
        $(document).ready(function() {
            
            $body = $("body");
            //$body.addClass("loading");
            $body.removeClass("loading");

            $("#btn_login").click(function(e) {
                jQuery.noConflict(); 
                $("#login").modal("hide");
                //alert($("#loginform").serialize());
                
                $body.addClass("loading");
                $.ajax({
                    type: "post",
                    url: "controller/login.php",
                    data: $("#loginform").serialize(),
                    success: function(resp) {
                        //alert(resp);
                        if (resp == 1) {
                            alert("You have been logged in");
                            $body.removeClass("loading");
                            location.replace("index.php");
                        } else {
                            $body.removeClass("loading");
                            alert("Login failed");
                            
                        }
                        //lert(resp);
                        //$body.removeClass("loading");
                        //location.replace("end.php");
                    }
                });

                return false;

            });
            
            $("#offer_navbar").click(function(e) {
                    

                    $.ajax({
                        type: "post",
                        url: "controller/userIsLogged.php",
                        success: function(resp) {
                            //alert(resp);
                            if (resp == 1) {
                                
                                location.replace("offer.php");
                            } else {
                                jQuery.noConflict(); 
                                $('#login').modal('show'); 
                                //$("#login").modal();
                            }
                            //lert(resp);
                            //$body.removeClass("loading");
                            //location.replace("end.php");
                        }
                    });

                    return false;

                });
             $("#goodch").click(function(e) {
                        $body.addClass("loading");
                    location.replace("joblist.php");
                
                    

                });
            
            $("#Dutch").click(function(e) {
               //alert("du");
                $.ajax({
                        type: "post",
                        url: "controller/DutchYes.php",
                        success: function(resp) {
                            //alert(resp);
                            if (resp == 1) {
                                location.reload();
                            } else {
                                
                                alert("No dutch available");
                                
                            }
                            //lert(resp);
                            //$body.removeClass("loading");
                            //location.replace("end.php");
                        }
                    });
            });
            
            $("#English").click(function(e) {
               //alert("du");
                $.ajax({
                        type: "post",
                        url: "controller/DutchNo.php",
                        success: function(resp) {
                            //alert(resp);
                            if (resp == 1) {
                                location.reload();
                            } else {
                                
                                alert("No dutch available");
                                
                            }
                            //lert(resp);
                            //$body.removeClass("loading");
                            //location.replace("end.php");
                        }
                    });
            });


            //PARA DETECTAR EL ENTER
            $('#login').keydown(function(e) {
                

                if (e.keyCode == 13) {
                    jQuery.noConflict(); 
                        $("#login").modal("hide");
                    $body.addClass("loading");
                    //alert("hi");
                    $.ajax({
                        type: "post",
                        url: "controller/login.php",
                        data: $("#loginform").serialize(),
                        success: function(resp) {
                            //alert(resp);
                            if (resp == 1) {
                                alert("You have been logged in");
                                $body.removeClass("loading");
                                location.replace("index.php");
                            } else {
                                $body.removeClass("loading");
                                alert("Login failed");
                                
                            }
                            //lert(resp);
                            //$body.removeClass("loading");
                            //location.replace("end.php");
                        }
                    });
                }
            })


            $("#btn_logout").click(function(e) {
                //alert($("#loginform").serialize());
                
                $.ajax({
                    type: "post",
                    url: "controller/logout.php",
                    success: function(resp) {
                        //alert(resp);
                        if (resp == 1) {
                            alert("You have been logged out");
                            location.replace("index.php");
                        } else {
                            alert("Logout failed");
                        }
                        //lert(resp);
                        //$body.removeClass("loading");
                        //location.replace("end.php");
                    }
                });

                return false;

            });


        });

    </script>

    <body>


        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="index.php"><img class="img" src="img/logo/trustmoerwijk.png" width="150px" height="50px"></a>
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="index.php" data-localize="navbar.home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" id="offer_navbar" data-localize="navbar.post_gig">Offer a Gig</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" id="goodch" data-localize="navbar.gig_list">Look for a Gig</a>
                        </li>
                        <?php
                            if($_SESSION["Logged"]==1){
                                if($_SESSION["ID"]==2){
                                    echo '<li class="nav-item">
                                <a class="nav-link js-scroll-trigger" style="cursor:pointer" href="admin.php">
                                    <p id="admin" data-localize="navbar.admin_page">Admin page</p>
                                </a>
                            </li>';
                                }
                            }
                        ?>
                        
                        <?php
                        if($_SESSION['Logged']!=1){
                    ?>


                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" style="cursor:pointer">
                                    <p data-toggle="modal" data-target="#login" data-localize="navbar.login">Login</p>
                                </a>
                            </li>
                            <?php
                        }else{
                    ?>
                                <li class="nav-item">
                                    <a class="nav-link js-scroll-trigger" href="mypage.php" data-localize="navbar.check_badges">Mypage</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-scroll-trigger" href="groupBadges.php" data-localize="navbar.check_badges">Check Badges</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-scroll-trigger" href="#logout" id="btn_logout" data-localize="navbar.logout">Logout</a>
                                </li>
                                <?php
                        }
                    ?>
                                    
                                    <?php
                                        if(isset($_SESSION['Dutch'])){
                                            if($_SESSION['Dutch']==1){

                                              echo '<li class="nav-item">
                                        <a href="index.php" id="English"> <img src="./img/flag/england.png" width="30px" height="20px" vspace="10" hspace="15" /> </a>
                                        </img>
                                    </li>';   
                                            }
                                            else{
                                                echo '<li class="nav-item">
                                        <a href="#" id="Dutch"> <img src="./img/flag/Netherlands.png" width="30px" height="20px" vspace="10" hspace="15" /> </a>
                                        </img>
                                    </li>';
                                            }
                                        }
                                        else{
                                            echo '<li class="nav-item">
                                        <a href="#" id="Dutch"> <img src="./img/flag/Netherlands.png" width="30px" height="20px" vspace="10" hspace="15" /> </a>
                                        </img>
                                    </li>';
                                        }
                                    ?>
                                    
                    </ul>
                </div>
            </div>
        </nav>


        <div class="modal" id="login" tabindex=-1 role="dialog" aria-labelledby="loginLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="loginLabel" data-localize="login.login_welcome"> Welcome to Trust+Moerwijk </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                    </div>

                    <div class="modal-body">
                        <form id="loginform">
                            <div class="input-group input-group-sm">
                                <i class="fa fa-user prefix grey-text"></i> &nbsp;&nbsp;
                                <span class="input-group-addon" id="E-mail" data-localize="login.login_email"> E-mail </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="text" class="form-control" id="email" name="email" aria-describedby="E-mail">
                            </div>
                            <br>
                            <div class="input-group input-group-sm">
                                <i class="fa fa-lock prefix grey-text"></i> &nbsp;&nbsp;
                                <span class="input-group-addon" id="Password" data-localize="login.login_password"> Password </span> &nbsp;&nbsp;
                                <input type="password" class="form-control" id="password" name="password" aria-describedby="Password">
                            </div>
                            <br>
                            

                            <br>
                            <center>
                                <button type=button class="btn btn-warning" id="btn_login" data-dismiss=modal data-target=overview.php data-localize="login.login_button"> Log In </button>
                        </form>
                        <br>
                        <hr> <span data-localize="login.login_noid"> Not a member yet? </span>
                        <a href="register.php" class="tooltip-test" title="Go to register page" data-localize="login.login_noid_link"> Sign up here!</a>  
                        <br><br>
                        <span class="forgetpassword">
                       <p data-toggle="modal" data-target="#forgetmodal" data-localize="login.login_forgotpassword"> Forgot your password? </p>
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
                <h4 class="modal-title w-100 font-weight-bold" data-localize="forgotpassword.forgot_title">Forgot your password?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="forget_E-mail" data-localize="forgotpassword.forgot_question">Provide your E-mail</label>
                    <input type="text" id="forget_E-mail" class="form-control validate">
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-default" data-localize="forgotpassword.forgot_button">Send</button>
            </div>
        </div>
    </div>
</div>

        <div class="modalhl">
            <!-- Place at bottom of page -->
        </div>

    </body>

    </html>
