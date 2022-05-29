<?php
session_start();
//echo "<script>alert('".getcwd() ."');</script>";


try {

if (! @include_once( 'PHPMailer-master/PHPMailerAutoload.php' )) // @ - to suppress warnings, 
// you can also use error_reporting function for the same purpose which may be a better option
  throw new Exception ('mailer does not exist');
// or 
if (!file_exists('PHPMailer-master/PHPMailerAutoload.php' ))
  throw new Exception ('mailer does not exist');
else
 require_once('PHPMailer-master/PHPMailerAutoload.php' );
}
catch(Exception $e) {    
    
    try {

    if (! @include_once( '../PHPMailer-master/PHPMailerAutoload.php' )) // @ - to suppress warnings, 
    // you can also use error_reporting function for the same purpose which may be a better option
      throw new Exception ('mailer does not exist');
    // or 
    if (!file_exists('../PHPMailer-master/PHPMailerAutoload.php' ))
      throw new Exception ('mailer does not exist');
    else
     require_once('../PHPMailer-master/PHPMailerAutoload.php' );
    }
    catch(Exception $e) {    




      echo "Message : " . $e->getMessage();
      echo "Code : " . $e->getCode();
    }
    
    
}


	class connection{
		/****************CONNECTION ATRIBUTES****************************/
		private $server;
		private $bd;
		private $user;
		private $pwd;
		private $conn;
		/****************************************************/
		/*************Results of the consult******************/
		private $result;
        private $result2;
		private $total_rows;
		/****************************************************/
		
		public function connection(){ 
				/*************************************************************/
				$this->server = "mssql.tlamatiliztli.net";
				$this->user = "tlama_Moerwijk";
				$this->pwd = "12345";
				$this->bd = "tlamatil_TrustMoerwijk";
				/*************************************************************
				$this->server = "localhost";
				$this->user = "root";
				$this->pwd = "";
				$this->bd = "4mat";
				/*************************************************************/
		}
		
        public function getInfoOf($id){
            $stmt=$this->conn->prepare("SELECT U_First_Name, U_Last_Name FROM user WHERE ID=?");
			//echo "SELECT U_Email, U_Password FROM users WHERE U_Email=? AND U_Password=?";
			if($stmt){
                  
				//$password=md5($password);
				$stmt->bind_param("s",$id);
				$stmt->execute();
				
				
                $result=$stmt->get_result();
             
                //echo $num_of_rows;
                
        
				if($result->num_rows == 1){
                   
					while($row = $result->fetch_assoc()){
						 
					
                        $nom['a']=$row['U_First_Name'];
                        $nom['b']=$row['U_Last_Name'];
                        
                        return $nom;
                        
						
						
					}
				}
				else {
					return 0;
				}
				$stmt->close();
			}
            else{
                return 0;
            }
        }
        
        public function giveStarsTo($id,$stars){
            
            $stmt2 = $this->conn->prepare("insert into stars (id,val) values (?,?)");
            if($stmt2){
                $stmt2->bind_param("ss",$id,$stars);
                
                $stmt2->execute();
                return 1;
            }
            else{
                return 0;
            }
            
        }
        
        public function giveBadgesTo($id,$badges){
            
            $stmt2 = $this->conn->prepare("UPDATE user SET badges=? where id=?");
            if($stmt2){
                $stmt2->bind_param("ss",$badges,$id);
                
                $stmt2->execute();
                return 1;
            }
            else{
                return 0;
            }
            
        }
		public function connect(){
			$this->conn = new mysqli($this->server, $this->user, $this->pwd, $this->bd);
                    
			//mysqli_select_db($this->conn,$this->bd);
			if (mysqli_connect_errno()) {
                printf("Error de conexión: %s\n", mysqli_connect_error());
                exit();
                }
		}
		
		public function disconnect(){
			$this->conn->close();
			//echo "Desconectado<br>";
		}
        
         public function DeleteObsoleteJobs(){ 
            $stmt3 = $this->conn->prepare("DELETE from job WHERE Time < DATE_SUB(NOW(), INTERVAL 15 MINUTE)"); 
            if($stmt3){ 
               $stmt3->execute(); 
               $m=$stmt3->affected_rows;
               $stmt3->close();  
               return $m;
            
            } 
             
             
        } 
        
        public function Register($name,$lname,$email,$psw,$phone){
            $stmt2 = $this->conn->prepare("INSERT INTO USER (U_First_Name,U_Last_Name,U_Email,U_Password,U_Phone,Loged) VALUES (?,?,?,?,?,1)");
            if($stmt2){
                $stmt2->bind_param("sssss",$name,$lname,$email,$psw,$phone);
                
                $stmt2->execute();
                return 1;
            }
            else{
                return 0;
            }
        }
		
        public function Apply4Job($IDdm, $Fname, $Lname, $Email, $JID,$logged){
                
                if($logged){
                    
                    $stmt2 = $this->conn->prepare("SELECT ID from user_job where Job_ID like ?");
                    
                    if($stmt2){
                        //echo "si pude preparar el primer query\n";
                        $NJID="%".$JID."%";
                        $stmt2->bind_param("s",$NJID);
                        $stmt2->execute();
                        $stmt2->store_result();
                        /* Get the number of rows */
                        $num_of_rows = $stmt2->num_rows;
                        //echo "el numero de filas fue:".$num_of_rows;
                        //lets notify the user that will loose the job :c
                        
                        //echo "aun no verifico el numero de rows\n";
                       
                         
                        
                            if($num_of_rows>0){
                                //echo "\n estoy en new cafe";
                                //new cafe
                                $stmt2->bind_result($IDss);
                                 while ($stmt2->fetch()) {
                                        $iddd=$IDss;
                                        //echo "el ID de mi victima es:".$iddd;
                                   }
                        
                                        $stmt3 = $this->conn->prepare("SELECT U_Email from user where ID like ?");
                                        if($stmt3){
                                           // echo "si pude poner el query para el email";
                                            $NJIDd="%".$iddd."%";
                                            $stmt3->bind_param("s",$NJIDd);
                                            $stmt3->execute();
                                            $stmt3->store_result();
                                            $stmt3->bind_result($Email_OldUser);
                                            while ($stmt3->fetch()) {
                                               $OldEmail=$Email_OldUser;
                                                //echo "\n el email es:";
                                                echo $OldEmail;
                                           }


                                    //require '../PHPMailer-master/PHPMailerAutoload.php';

                                    $mail = new PHPMailer;
                                    //$mail->SMTPDebug = 3;                               // Enable verbose debug output

                                    $mail->isSMTP();                                      // Set mailer to use SMTP
                                    $mail->Host = 'tlamatiliztli.net';  // Specify main and backup SMTP servers
                                    $mail->SMTPAuth = true;                               // Enable SMTP authentication   
                                    $mail->Username = 'soporte2017@tlamatiliztli.net';                 // SMTP username
                                    $mail->Password = '147896325';                           // SMTP password

                                    $mail->Port = 25;                                    // TCP port to connect to

                                    $mail->setFrom('soporte2017@tlamatiliztli.net', 'NoReply: Trust+ Moerwijk Confirmation Email');
                                    $mail->addAddress($OldEmail);     // Add a recipient


                                    $mail->Subject = 'Trust+ Moerwijk Cancelation of '.$_SESSION["J_Name"];
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
                                            <img src="http://moerwijk.tlamatiliztli.net/img/logo/trust.png"  width="420" height="142">
                                          </center>

                                          <spacer size="16"></spacer>

                                          <h4>Dear: User</h4>
                                          <p>We have to sadly inform you that the job you applied for has been taken by other person. If you want to prevent this to happend again we encourage you to register on our webpage. Is free.


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
                                    } 
                            
                            
                            
                         //fin del IF stmt3    
                        }
                    
                    
                    
                    
                           
                                //someone had this job before
                                $stmt = $this->conn->prepare("UPDATE user_job set ID=? where Job_ID =?");
                                echo "roc";
                                if($stmt){
                                    echo "i prepared the stat";
                                    echo "el id es ".$IDdm;
                                    echo "\n UPDATE user_job set ID=".$IDdm." where Job_ID =".$JID; 
                                    $stmt->bind_param("ss",$IDdm, $JID);
                                    $stmt->execute();
                                    $stmt->close();
                                }
                                else{

                                    $error = $this->conn->errno . ' ' . $this->conn->error;
                                    //echo $error; // 1054 Unknown column 'foo' in 'field list'
                                }
                            }
                            else{
                                //this job has not been claimed
                                $stmt = $this->conn->prepare("INSERT INTO user_job (ID, Job_ID) VALUES (?,?)");
                                if($stmt){
                                    $stmt->bind_param("ss",$ID, $JID);
                                    $stmt->execute();
                                    $stmt->close();
                                }
                                else{

                                    $error = $this->conn->errno . ' ' . $this->conn->error;
                                    //echo $error; // 1054 Unknown column 'foo' in 'field list'
                                }
                                
                            }
                        /* free results */
                       $stmt2->free_result();
                       /* close statement */
                       $stmt2->close();
                    }
                    else{
                        echo $this->conn->error;
                    }
                    
                    
                    
                    
                    //end new thing
                    $stmt = $this->conn->prepare("INSERT INTO user_job (ID, Job_ID) VALUES (?,?)");
                    if($stmt){
                        $stmt->bind_param("ss",$ID, $JID);
                        $stmt->execute();
                        $stmt->close();
                    }
                    else{

                        $error = $this->conn->errno . ' ' . $this->conn->error;
                        //echo $error; // 1054 Unknown column 'foo' in 'field list'
                    }
                    
                    
                    /// adding the status
                     $stmt = $this->conn->prepare("UPDATE job set status=? where Job_ID =?");
                                if($stmt){
                                    $dos=2;
                                    $stmt->bind_param("ss",$dos, $JID);
                                    $stmt->execute();
                                    $stmt->close();
                                }
                                else{

                                    $error = $this->conn->errno . ' ' . $this->conn->error;
                                    //echo $error; // 1054 Unknown column 'foo' in 'field list'
                                }
                    
                    return 1;
                    
                }
                else{
                    $stmt3 = $this->conn->prepare("INSERT INTO user (U_First_Name, U_Last_Name, U_Email) VALUES (?,?,?)");
                    if($stmt3){
                        $stmt3->bind_param("sss", $Fname,$Lname, $Email);
                        $stmt3->execute();
                        $stmt3->close();

                    }
                   // echo "miau1 \n";
                    //then I get the ID of the new job
                    $stmt2 = $this->conn->prepare("SELECT ID from user where U_First_Name like ? and U_Last_Name like ? and U_Email like ?");
                    if($stmt2){
                        $Fname="%".$Fname."%";
                        $Lname="%".$Lname."%";
                        $Email="%".$Email."%";
                        $stmt2->bind_param("sss",$Fname,$Lname,$Email);
                        $stmt2->execute();
                        $stmt2->store_result();
                        /* Get the number of rows */
                        $num_of_rows = $stmt2->num_rows;
                        //echo "rows=".$num_of_rows;
                        $stmt2->bind_result($idd);
                        while ($stmt2->fetch()) {
                            $ID=$idd;
                            echo $ID;
                       }
                        /* free results */
                       $stmt2->free_result();
                       /* close statement */
                       $stmt2->close();
                    }
                    else{
                        //echo "jjj";
                        echo $this->conn->error;
                    }
                    
                    
                   // echo "miau2 \n";
                    
                    $stmt = $this->conn->prepare("INSERT INTO user_job (ID, Job_ID) VALUES (?,?)");
                    if($stmt){
                        $stmt->bind_param("ss",$ID, $JID);
                        $stmt->execute();
                        $stmt->close();
                        echo $ID;
                    }
                    else{

                        $error = $this->conn->errno . ' ' . $this->conn->error;
                        echo $error; // 1054 Unknown column 'foo' in 'field list'
                         echo "mistake \n";
                    }
                    
                    
                echo "miau4 \n";
                    
                    /// adding the status
                     $stmt = $this->conn->prepare("UPDATE job set status=? where Job_ID =?");
                                if($stmt){
                                    $uno=1;
                                    $stmt->bind_param("ss", $uno, $JID);
                                    $stmt->execute();
                                    $stmt->close();
                                }
                                else{

                                    $error = $this->conn->errno . ' ' . $this->conn->error;
                                    echo $error; // 1054 Unknown column 'foo' in 'field list'
                                }
                    

                    return 1;
                }
            
                
                
                
            
            
            
        }
        public function Apply4JobP($ID,$Fname, $Lname, $Email, $JID,$Phone,$logged){
            
            if($logged==1){
                        //echo "estoy loggeado\n";
                    $stmt2 = $this->conn->prepare("SELECT ID from user_job where Job_ID like ?");
                    
                    if($stmt2){
                        //echo "si pude preparar el primer query\n";
                        $NJID="%".$JID."%";
                        $stmt2->bind_param("s",$NJID);
                        $stmt2->execute();
                        $stmt2->store_result();
                        /* Get the number of rows */
                        $num_of_rows = $stmt2->num_rows;
                        //echo "el numero de filas fue:".$num_of_rows;
                        //lets notify the user that will loose the job :c
                        
                        //echo "aun no verifico el numero de rows\n";
                       
                         
                        
                            if($num_of_rows==1){
                                //echo "\n estoy en new cafe";
                                //new cafe
                                $stmt2->bind_result($IDss);
                                 while ($stmt2->fetch()) {
                                        $iddd=$IDss;
                                        //echo "el ID de mi victima es:".$iddd;
                                   }
                        
                                        $stmt3 = $this->conn->prepare("SELECT U_Email from user where ID like ?");
                                        if($stmt3){
                                           // echo "si pude poner el query para el email";
                                            $NJIDd="%".$iddd."%";
                                            $stmt3->bind_param("s",$NJIDd);
                                            $stmt3->execute();
                                            $stmt3->store_result();
                                            $stmt3->bind_result($Email_OldUser);
                                            while ($stmt3->fetch()) {
                                               $OldEmail=$Email_OldUser;
                                                //echo "\n el email es:";
                                                echo $OldEmail;
                                           }


                                    //require '../PHPMailer-master/PHPMailerAutoload.php';

                                    $mail = new PHPMailer;
                                    //$mail->SMTPDebug = 3;                               // Enable verbose debug output

                                    $mail->isSMTP();                                      // Set mailer to use SMTP
                                    $mail->Host = 'tlamatiliztli.net';  // Specify main and backup SMTP servers
                                    $mail->SMTPAuth = true;                               // Enable SMTP authentication   
                                    $mail->Username = 'soporte2017@tlamatiliztli.net';                 // SMTP username
                                    $mail->Password = '147896325';                           // SMTP password

                                    $mail->Port = 25;                                    // TCP port to connect to

                                    $mail->setFrom('soporte2017@tlamatiliztli.net', 'NoReply: Trust+ Moerwijk Confirmation Email');
                                    $mail->addAddress($OldEmail);     // Add a recipient


                                    $mail->Subject = 'Trust+ Moerwijk Cancelation of '.$_SESSION["J_Name"];
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
                                            <img src="http://moerwijk.tlamatiliztli.net/img/logo/trust.png"  width="420" height="142">
                                          </center>

                                          <spacer size="16"></spacer>

                                          <h4>Dear: User</h4>
                                          <p>We have to sadly inform you that the job you applied for has been taken by other person. If you want to prevent this to happend again we encourage you to register on our webpage. Is free.


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
                                    } 
                            
                            
                            
                         //fin del IF stmt3    
                        }
                                 
                                //someone had this job before
                                $stmt = $this->conn->prepare("UPDATE user_job set ID=? where Job_ID =?");
                                if($stmt){
                                    $stmt->bind_param("ss",$ID, $JID);
                                    $stmt->execute();
                                    $stmt->close();
                                }
                                else{
                                     
                                    $error = $this->conn->errno . ' ' . $this->conn->error;
                                    echo $error; // 1054 Unknown column 'foo' in 'field list'
                                    return 0;
                                    //
                                }
                            }
                            else{
                                //this job has not been claimed
                                
                                $stmt = $this->conn->prepare("INSERT INTO user_job (ID, Job_ID) VALUES (?,?)");
                                if($stmt){
                                    echo "\n..".$_SESSION['ID']."\n";
                                    $stmt->bind_param("ss",$ID, $JID);
                                    $stmt->execute();
                                    $stmt->close();
                                }
                                else{
                                    echo "22nooo";
                                    $error = $this->conn->errno . ' ' . $this->conn->error;
                                    echo $error; // 1054 Unknown column 'foo' in 'field list'
                                    return 0;
                                }
                                
                            }
                        /* free results */
                       $stmt2->free_result();
                       /* close statement */
                       $stmt2->close();
                    }
                    else{
                        echo $this->conn->error;
                        return 0;
                    }
                
                    /// adding the status
                     $stmt = $this->conn->prepare("UPDATE job set status=? where Job_ID =?");
                                if($stmt){
                                    //echo "si";
                                     $dos=2;
                                    $stmt->bind_param("ss", $dos, $JID);
                                    $stmt->execute();
                                    $stmt->close();
                                }
                                else{

                                    $error = $this->conn->errno . ' ' . $this->conn->error;
                                    echo $error; // 1054 Unknown column 'foo' in 'field list'
                                    return 0;
                                }    
                    
                    return 1;
                    
                }
                else{
                    $stmt3 = $this->conn->prepare("INSERT INTO user (U_First_Name, U_Last_Name, U_Email, U_Phone) VALUES (?,?,?,?)");
                    if($stmt3){
                        $stmt3->bind_param("ssss", $Fname,$Lname, $Email,$Phone);
                        $stmt3->execute();
                        $stmt3->close();

                    }

                    //then I get the ID of the new job
                    $stmt2 = $this->conn->prepare("SELECT ID from user where U_First_Name like ? and U_Last_Name like ? and U_Email like ?");
                    if($stmt2){
                        $Fname="%".$Fname."%";
                        $Lname="%".$Lname."%";
                        $Email="%".$Email."%";
                        $stmt2->bind_param("sss",$Fname,$Lname,$Email);
                        $stmt2->execute();
                        $stmt2->store_result();
                        /* Get the number of rows */
                        $num_of_rows = $stmt2->num_rows;
                        $stmt2->bind_result($idd);
                        while ($stmt2->fetch()) {
                            $ID=$idd;
                       }
                        /* free results */
                       $stmt2->free_result();
                       /* close statement */
                       $stmt2->close();
                    }
                    else{
                        echo $this->conn->error;
                        return 0;
                    }
                    
                    
                    
                    
                    $stmt = $this->conn->prepare("INSERT INTO user_job (ID, Job_ID) VALUES (?,?)");
                    if($stmt){
                        $stmt->bind_param("ss",$ID, $JID);
                        $stmt->execute();
                        $stmt->close();
                    }
                    else{

                        $error = $this->conn->errno . ' ' . $this->conn->error;
                        echo $error; // 1054 Unknown column 'foo' in 'field list'
                        return 0;
                    }
                    
                    /// adding the status
                     $stmt = $this->conn->prepare("UPDATE job set status=? where Job_ID =?");
                                if($stmt){
                                    $uno=1;
                                    $stmt->bind_param("ss", $uno, $JID);
                                    $stmt->execute();
                                    $stmt->close();
                                }
                                else{

                                    $error = $this->conn->errno . ' ' . $this->conn->error;
                                    echo $error; // 1054 Unknown column 'foo' in 'field list'
                                    return 0;
                                }
                   

                    return 1;
                }
            
                
            
            
            
        }
        
        public function registerPaymentWorker($idJob, $idWorker){
            $stmt = $this->conn->prepare("UPDATE payment set target=? where concept =? and done=?");
                                if($stmt){
                                    $cero=0;
                                    $stmt->bind_param("sss", $idWorker, $idJob,$cero);
                                    $stmt->execute();
                                    $stmt->close();
                                    return 1;
                                }
                                else{

                                    $error = $this->conn->errno . ' ' . $this->conn->error;
                                    echo $error; // 1054 Unknown column 'foo' in 'field list'
                                    return 0;
                                }

            
        }
        
        
        public function registerPaymentWorker2($idJob, $email){
            $stmt = $this->conn->prepare("UPDATE payment set target=(select ID from user where U_Email like ? ) where concept =? and done=?");
                                if($stmt){
                                    $cero=0;
                                    $email="%".$email."%";
                                    $stmt->bind_param("sss", $email, $idJob,$cero);
                                    $stmt->execute();
                                    $stmt->close();
                                    return 1;
                                }
                                else{

                                    $error = $this->conn->errno . ' ' . $this->conn->error;
                                    echo $error; // 1054 Unknown column 'foo' in 'field list'
                                    return 0;
                                }

            
        }
        
        
        
        public function GetStarsOf($id){
            //then I get the ID of the new job
                $stmt2 = $this->conn->prepare("SELECT AVG(stars.val) as prom FROM stars, user WHERE stars.id=user.ID AND user.ID=? ");
                
                $stmt2->bind_param("s",$id);
                $stmt2->execute();
                $stmt2->store_result();
                /* Get the number of rows */
                $num_of_rows = $stmt2->num_rows;
                $stmt2->bind_result($prom);
                while ($stmt2->fetch()) {
                    $n=$prom;
               }
                /* free results */
               $stmt2->free_result();
               /* close statement */
               $stmt2->close();
            
            
            return $n;
        }
        
        public function login($email, $password, $remember){
			$stmt=$this->conn->prepare("SELECT * FROM user WHERE U_Email=? AND U_Password=?");
			//echo "SELECT U_Email, U_Password FROM users WHERE U_Email=? AND U_Password=?";
			if($stmt){
                  
				$password=md5($password);
				$stmt->bind_param("ss",$email,$password);
				$stmt->execute();
				
				
                $result=$stmt->get_result();
             
                //echo $num_of_rows;
                
        
				if($result->num_rows == 1){
                   
					while($row = $result->fetch_assoc()){
						 
						$_SESSION['Logged']=1;
						$_SESSION['email']=$row['U_Email'];
                        $_SESSION['ID']=$row['ID'];
                        $_SESSION['name']=$row['U_First_Name'];
                        $_SESSION['lname']=$row['U_Last_Name'];
                        $_SESSION['phone']=$row['U_Phone'];
                        $_SESSION['stars']=(int)$this->GetStarsOf($_SESSION['ID']);
                        //echo  $_SESSION['stars'];
                      
                        
						if($remember==true){
							//TODO find a way to set a secure login cookie, or other persistent login.
						}
						return 1;
					}
				}
				else {
					return 0;
				}
				$stmt->close();
			}
            else{
                return 0;
            }
		}
        
        
        public function GetCategory($ID){
            //then I get the ID of the new job
                $stmt2 = $this->conn->prepare("SELECT name from category where id_cat = ? ");
                $IDN=$ID;
                
                $stmt2->bind_param("s",$IDN);
                $stmt2->execute();
                $stmt2->store_result();
                /* Get the number of rows */
                $num_of_rows = $stmt2->num_rows;
                $stmt2->bind_result($name);
                while ($stmt2->fetch()) {
                    $newname=$name;
               }
                /* free results */
               $stmt2->free_result();
               /* close statement */
               $stmt2->close();
            return $newname;
        }
        
        public function NotifyRefoundRequestClient($JID){
            $stmt2 = $this->conn->prepare("SELECT DISTINCT user.U_Email as email, job.Name as name from payment, job, user, user_job where payment.concept=job.Job_ID and job.Job_ID=user_job.Job_ID and user.ID=user_job.ID and job.Job_ID=? ");

                if($stmt2){
                    $stmt2->bind_param("s",$JID);
                    $stmt2->execute();
                    $result=$stmt2->get_result();
             
                //echo $num_of_rows;
                
        
				if($result->num_rows == 1){
                   
					while($row = $result->fetch_assoc()){
                        $nemail=$row["email"];
                        $title=$row["name"];
                        
                        
                        
                        
                    }}
                    else{
                        return 0;
                    }
                    /* free results */
                   $stmt2->free_result();
                   /* close statement */
                   $stmt2->close();
                    //ahora envio el email
                    
                    $mail = new PHPMailer;
                    //$mail->SMTPDebug = 3;                               // Enable verbose debug output

                    $mail->isSMTP();                                      // Set mailer to use SMTP
                    $mail->Host = 'tlamatiliztli.net';  // Specify main and backup SMTP servers
                    $mail->SMTPAuth = true;                               // Enable SMTP authentication   
                    $mail->Username = 'soporte2017@tlamatiliztli.net';                 // SMTP username
                    $mail->Password = '147896325';                           // SMTP password

                    $mail->Port = 25;                                    // TCP port to connect to

                    $mail->setFrom('soporte2017@tlamatiliztli.net', 'NoReply: Trust+ Moerwijk Claim for refound');
                    $mail->addAddress($nemail);     // Add a recipient


                    $mail->Subject = 'Trust+ Moerwijk Claim for refound request ';
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
                            <img src="http://moerwijk.tlamatiliztli.net/img/logo/trust.png"  width="420" height="142">
                          </center>

                          <spacer size="16"></spacer>

                          <h4>Dear user,</h4>
                          <p> We are sorry to inform you that the person who published the gig '.$title.' has filed a request to claim a refund. We will need to analyze the situation to see if the request is valid and Trust+Moerwijk will need to reimburse the amount to the claimant. 
                          
                          <p>This means that we will hold back the payment for now. If the refund is not categorized as valid you will receive your payment immediately after this process. 
                          
                          <p> We are sorry for the inconvenience caused. 


                            <p>For further information, please feel free to contact us. 
                            <br>
                            <p>Best Regards</p>
                            <br>
                            <p>Trust+Moerwijk phone
                            <p>Trust+Moerwijk email
                            
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
                            return 1;
                        }
                    
                    
                }
            else{
                return 0;
            }
                
            
            
            
            
            
        }
        
        public function AddReclamationOf($JID,$text){
            $stmt2 = $this->conn->prepare("update payment set done=2 , reclamation=? WHERE issuer=? and concept=?");
            if($stmt2){
                $pink=2;
                $stmt2->bind_param("sss",$text,$pink,$JID);
                $stmt2->execute();
                return 1;
            }
            else{
                return 0;
            }
            
            
        }
        
        public function MoneyOf($ID){
            
                $stmt2 = $this->conn->prepare("select sum(amount) as Money from payment WHERE target=? and done=1 ");
               
                $stmt2->bind_param("s",$ID);
                $stmt2->execute();
                $stmt2->store_result();
                /* Get the number of rows */
                $num_of_rows = $stmt2->num_rows;
                $stmt2->bind_result($Money);
                while ($stmt2->fetch()) {
                    $Mony=$Money;
               }
                /* free results */
               $stmt2->free_result();
               /* close statement */
               $stmt2->close();
            return $Mony;
            
        }
        
        
		public function CreateJob($title, $date, $amount, $street, $city, $postno, $houseno,$description, $category,$etime,$comision,$payid){
            try{
                //first I insert the address
                $stmt3 = $this->conn->prepare("INSERT INTO address (Street, City, Post_No, House_No) VALUES (?,?,?,?)");
                if($stmt3){
                    $stmt3->bind_param("ssss",$street, $city,$postno, $houseno);
                    $stmt3->execute();
                    $stmt3->close();

                }
                else{
                
                    $error = $this->conn->errno . ' ' . $this->conn->error;
                    echo $error; // 1054 Unknown column 'foo' in 'field list'
                }
                

                //then I get the ID of the new address
                $stmt2 = $this->conn->prepare("SELECT Addr_ID from address where street like ? and city like ? and post_no like ? and house_no like ? ");
                $nstreet="%".$street."%";
                $ncity="%".$city."%";
                $npostno="%".$postno."%";
                $nhouseno="%".$houseno."%";
                $stmt2->bind_param("ssss",$nstreet,$ncity,$npostno,$nhouseno);
                $stmt2->execute();
                $stmt2->store_result();
                /* Get the number of rows */
                $num_of_rows = $stmt2->num_rows;
                $stmt2->bind_result($Addr_ID);
                while ($stmt2->fetch()) {
                    $newid=$Addr_ID;
               }
                /* free results */
               $stmt2->free_result();
               /* close statement */
               $stmt2->close();

                // I insert the Job
                $stmt = $this->conn->prepare("INSERT INTO job (Name, J_Des_Long, J_Salary, Time, Addr_ID, Poster_ID,id_cat, EndTime) VALUES (?,?,?,?,?,?,?,?)");
                if($stmt){
                    $mrid=$_SESSION['ID'];
                    $stmt->bind_param("ssssssss",$title, $description,$amount, $date,$newid,$mrid,$category,$etime);
                    $stmt->execute();
                    $stmt->close();
                }
                else{
                
                    $error = $this->conn->errno . ' ' . $this->conn->error;
                    echo $error; // 1054 Unknown column 'foo' in 'field list'
                }
                
                //I ask for the ID of the new job
                
                $stmt2 = $this->conn->prepare("SELECT Job_ID from job where name like ? and poster_ID like ? and Time like ? ");
                $names="%".$title."%";
                $post="%".$mrid."%";
                $times="%".$date."%";
               
                $stmt2->bind_param("sss",$names,$post,$times);
                $stmt2->execute();
                $stmt2->store_result();
                /* Get the number of rows */
                $num_of_rows = $stmt2->num_rows;
                $stmt2->bind_result($Job_ID);
                while ($stmt2->fetch()) {
                    $idjobs=$Job_ID;
               }
                /* free results */
               $stmt2->free_result();
               /* close statement */
               $stmt2->close();
                
                
                
                //then I insert the payment
                 $stmt = $this->conn->prepare("INSERT INTO payment (Payment_ID, issuer, concept,amount,target,date,comission,done) values (?,?,?,?,?,?,?,?);");
                if($stmt){
                    $is="2";
                    $el="1";
                    $p =new DateTime();
                    $dia=$p->format('Y-m-d H:i:s');
                    $stmt->bind_param("ssssssss",$payid,$mrid, $idjobs,$amount, $is,$dia,$comision,$el);
                    $stmt->execute();
                    $stmt->close();
                }
                else{
                
                    $error = $this->conn->errno . ' ' . $this->conn->error;
                    echo $error; // 1054 Unknown column 'foo' in 'field list'
                }
                
                
                //then now I insert an apply for a future payment
                 $stmt = $this->conn->prepare("INSERT INTO payment (Payment_ID, issuer, concept,amount,date,comission,done) values (?,?,?,?,?,?,?);");
                if($stmt){
                    $is="2";
                    $Pi=uniqid();
                    $el="0";
                    $p = date_create_from_format('Y-m-d H:i:s', $etime);
                    $p->modify('+1 hour');
                    $paytime=$p->format('Y-m-d H:i:s');

                    $dia=$p->format('Y-m-d H:i:s');
                    $stmt->bind_param("sssssss",$Pi,$is, $idjobs,$amount,$paytime,$comision,$el);
                    $stmt->execute();
                    $stmt->close();
                }
                else{
                
                    $error = $this->conn->errno . ' ' . $this->conn->error;
                    echo $error; // 1054 Unknown column 'foo' in 'field list'
                }
                
                
                
                return 1;
            
            }
            catch (Exception $e) {
                echo 'Excepción capturada: ',  $e->getMessage(), "\n";
            }
            
			//$this->result = mysqli_query($this->conn, $query) or die(mysqli_error());
            
		}

	

        public function myQuery($query){
            $this->result = mysqli_query($this->conn, $query) or die(mysqli_error());
        }
         public function my2ndQuery($query){
            $this->result2 = mysqli_query($this->conn, $query) or die(mysqli_error());
        }
		
		public function getRows(){
			return mysqli_num_rows($this->result);
		}
        public function getRows2(){
			return mysqli_num_rows($this->result2);
		}
		
		public function getArrayRow(){
			return mysqli_fetch_assoc($this->result);
		}
        public function getArrayRow2(){
			return mysqli_fetch_assoc($this->result2);
		}
	}
	// HOW TO USE ---------------------------------------------------------------------------------------------------------

    
	
    //FIRST I CREATE A NEW OBJECT
    $a = new connection();
    
    //THEN I CONNECT WITH THE DB
	$a->connect();
	//THEN I WILL DO A QUERY BY USING:
	/*$a->myQuery("SELECT * FROM user");
	
    //HERE IM PRINTING THE NUMBER OF ROWS AFFECTED BY THE LAST QUERRY
    echo($a->getRows()."<br>");
    
    //NOW IM GETTING ALL THE ROWS:
	while ($rowEmp = $a->getArrayRow()) {
			      	echo "<strong>".$rowEmp['Social_No']."</strong><br>";
    	  			echo "Direccion: ".$rowEmp['U_First_Name']."<br>";
	      			echo "Telefono: ".$rowEmp['U_Last_Name']."<br><br>";
   				}*/
    
?>
