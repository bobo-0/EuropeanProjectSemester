<?php
 require_once("model/connect.php");
$mail = new PHPMailer;
                    $mail->SMTPDebug = 3;                               // Enable verbose debug output

                    $mail->isSMTP();                                      // Set mailer to use SMTP
                    $mail->Host = 'tlamatiliztli.net';  // Specify main and backup SMTP servers
                    $mail->SMTPAuth = true;                               // Enable SMTP authentication   
                    $mail->Username = 'soporte2017@tlamatiliztli.net';                 // SMTP username
                    $mail->Password = '147896325';                           // SMTP password

                    $mail->Port = 25;                                    // TCP port to connect to

                    $mail->setFrom('soporte2017@tlamatiliztli.net', 'NoReply: Trust+ Moerwijk Confirmation Email');
                    $mail->addAddress('zildjianremo@gmail.com');     // Add a recipient


                    $mail->Subject = 'Trust+ Moerwijk Confirmation for posting the job: ';
                    $mail->Body    = '
                    <style type="text/css">
                      body,
                      html, 
                      .body {
                        background: #f3f3f3 !important;
                      }

                      .container.header {
                        background: #f3f3f3;
                      }

                      .body-border {
                        border-top: 8px solid #ed7a43;
                      }
                    </style>

                    <container class="header">
                      <row>
                        <columns>
                          <h1 class="text-center"><center>Trust+ Moerwijk</center></h1>


                        </columns>
                      </row>
                    </container>

                    <container class="body-border">
                      <row>
                        <columns>

                          <spacer size="32"></spacer>

                          <center>
                            <img src="http://moerwijk.tlamatiliztli.net/img/logo/trustmoerwijk.png">
                          </center>

                          <spacer size="16"></spacer>

                          
                                

                          


                            <p>For further details feel free to contact us</p>


                        </columns>
                      </row>

                      <spacer size="16"></spacer>
                    </container>
                    ';
                    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                    if(!$mail->send()) {
                       // echo 'Message could not be sent.';
                        echo 'Mailer Error: ' . $mail->ErrorInfo;
                    } else {
                            //echo 1;
                            echo "<script>location.replace('../publish.php');</script>";
                        }
                    
?>