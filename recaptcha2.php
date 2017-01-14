<?php

    //CHANGE INFO

    // Site
    // 6LeN0wcUAAAAADZ-LGKkbe72eRLDCjsIZA-3yjoS

    // Sec
    // 6LeN0wcUAAAAAClwNlc2Le1FBUR-sfKXZ9cEbucq


    // <script src='https://www.google.com/recaptcha/api.js'></script>

    // Recaptcha widget
    // <div class="g-recaptcha" data-sitekey="6LeN0wcUAAAAADZ-LGKkbe72eRLDCjsIZA-3yjoS"></div>

?>

<?php include 'header.php'; ?>

    <div class="container conmarg">
      
<?php include 'menu/main.php'; ?>

<div class="col-md-6 middlebtmpad" id="col2">

    <form action="" method="POST">
        <input type="text" name="name" value="" />
        <input type="text" name="email" value="" />
        <textarea type="text" name="message"></textarea>
        <div class="g-recaptcha" data-sitekey="6LeN0wcUAAAAADZ-LGKkbe72eRLDCjsIZA-3yjoS"></div>
        <input type="submit" name="submit" value="SUBMIT">
    </form>

    <?php

    if(isset($_POST['submit']) && !empty($_POST['submit'])):
        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])):
            //your site secret key
            $secret = '6LeN0wcUAAAAAClwNlc2Le1FBUR-sfKXZ9cEbucq';
            //get verify response data
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
            $responseData = json_decode($verifyResponse);
            if($responseData->success):
                //contact form submission code
                $name = !empty($_POST['name'])?$_POST['name']:'';
                $email = !empty($_POST['email'])?$_POST['email']:'';
                $message = !empty($_POST['message'])?$_POST['message']:'';
                
                $to = 'test@discovernewtown.co.nz';
                $subject = 'New contact form have been submitted';
                $htmlContent = "
                    <h1>Contact request details</h1>
                    <p><b>Name: </b>".$name."</p>
                    <p><b>Email: </b>".$email."</p>
                    <p><b>Message: </b>".$message."</p>
                ";
                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                // More headers
                $headers .= 'From:'.$name.' <'.$email.'>' . "\r\n";
                //send email
                @mail($to,$subject,$htmlContent,$headers);
                
                $succMsg = 'Your contact request have submitted successfully.';
            else:
                $errMsg = 'Robot verification failed, please try again.';
            endif;
        else:
            $errMsg = 'Please click on the reCAPTCHA box.';
        endif;
    else:
        $errMsg = '';
        $succMsg = '';
    endif;

    ?>
   
</div>

<?php include 'menu/blank.php'; ?>
    
<?php include 'footer.php'; ?>
