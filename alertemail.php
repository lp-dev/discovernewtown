    <?php

    if(isset($_POST['submit']) && !empty($_POST['submit'])):
        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])):

            $secret = '6LeN0wcUAAAAAClwNlc2Le1FBUR-sfKXZ9cEbucq';

            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
            $responseData = json_decode($verifyResponse);
            if($responseData->success):

                $emailname = !empty($_POST['emailname'])?$_POST['emailname']:'';
                $emailemail = !empty($_POST['emailemail'])?$_POST['emailemail']:'';
                $emailbusiness = !empty($_POST['emailbusiness'])?$_POST['emailbusiness']:'';
                $emailphone = !empty($_POST['emailphone'])?$_POST['emailphone']:'';
                $emailmobile = !empty($_POST['emailmobile'])?$_POST['emailmobile']:'';
                $emailmessage = !empty($_POST['emailmessage'])?$_POST['emailmessage']:'';

                $emailsubject = !empty($_POST['emailsubject'])?$_POST['emailsubject']:'';
                
                $to = 'test@discovernewtown.co.nz';
                $subject = ''.$emailsubject.'';
                $htmlContent = "
                    <h2>Discover Newtown enquiry</h2>
                    <p><b>Name: </b>".$emailname."</p>
                    <p><b>Business / Organisation: </b>".$emailbusiness."</p>
                    <p><b>Email: </b>".$emailemail."</p>
                    <p><b>Phone number: </b>".$emailphone."</p>
                    <p><b>Mobile number: </b>".$emailmobile."</p>
                    <p><b>Message: </b>".$emailmessage."</p>

                ";
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                $headers .= 'From:'.$emailemail.' '. "\r\n";

                @mail($to,$subject,$htmlContent,$headers);
                
                echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button><h4>Your email was sent!</h4></div>';




            else:

                echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button><h4>Robot verification failed, please try again.</h4></div>';
            endif;
        else:

            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button><h4>Please click on the reCAPTCHA box.</h4></div>';
        endif;
    else:
        $errMsg = '';
        $succMsg = '';
    endif;

    ?>