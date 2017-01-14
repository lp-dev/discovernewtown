<!-- +++ -->

<?php include 'header.php'; ?>

    <div class="container conmarg">
      
<?php include 'menu/main.php'; ?>

<div class="col-md-6 middlebtmpad" id="col2">

<!--     <form action="" method="POST">
        <input type="text" name="name" value="" />
        <input type="text" name="email" value="" />
        <textarea type="text" name="message"></textarea>
        <div class="g-recaptcha" data-sitekey="6LeN0wcUAAAAADZ-LGKkbe72eRLDCjsIZA-3yjoS"></div>
        <input type="submit" name="submit" value="SUBMIT">
    </form>
 -->

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
                $enquiry = !empty($_POST['enquiry'])?$_POST['enquiry']:'';
                
                $to = 'test@discovernewtown.co.nz';
                $subject = ''.$enquiry.'';
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
                // $headers .= 'From:'.$name.' <'.$email.'>' . "\r\n";
                $headers .= 'From:'.$email.' '. "\r\n";

                //send email
                @mail($to,$subject,$htmlContent,$headers);
                
                echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button><h4>Your email was sent!</h4></div>';



                // $succMsg = 'Your contact request have submitted successfully.';
            else:
                // $errMsg = 'Robot verification failed, please try again.';
                echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button><h4>Robot verification failed, please try again.</h4></div>';
            endif;
        else:
            // $errMsg = 'Please click on the reCAPTCHA box.';
            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button><h4>Please click on the reCAPTCHA box.</h4></div>';
        endif;
    else:
        $errMsg = '';
        $succMsg = '';
    endif;

    ?>


                    <form class="form-horizontal" action='' id="contactform" method='post' >

                        <div class="modal-header">
                            <h3>Contact Discover Newtown</h3>
                        </div>
                        <div class="modal-body">

                            <div>
                                <h4>Email address</h4>
                                <p>contact@discovernewtown.co.nz</p>
                            </div>

                            <div>
                                <h4>Send email from website</h4>
                                <select class="form-control" id="emailsubject" name="enquiry">
                                    <option>-- Choose email subject here --</option>
                                    <option name="enquiry" value="General enquiry">General enquiry</option>
                                    <option name="enquiry" value="Discover Newtown enquiry">Discover Newtown enquiry</option>
                                    <option name="enquiry" value="Event enquiry">Event enquiry</option>
                                    <option name="enquiry" value="Feedback / Suggestion">Feedback / Suggestion</option>
                                    <option name="enquiry" value="Website building enquiry">Website building enquiry</option>
                                    <option name="enquiry" value="Other enquiry">Other enquiry</option>
                                </select>
                            </div><br>

                            <div class="form-group">
                                <div class="col-lg-12">
                                    <input type="text" class="form-control" id="emailname" name="name" placeholder="First and last name">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-12">
                                    <input type="text" class="form-control" id="emailbusiness" name="emailbusiness" placeholder="Business / Organisation">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-12">
                                    <input type="email" class="form-control" id="emailemail" name="email" placeholder="Email address">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-12">
                                    <input type="text" class="form-control" id="emailphone" name="emailphone" placeholder="Phone number">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <input type="text" class="form-control" id="emailmobile" name="emailmobile" placeholder="Mobile number">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-12">
                                    <textarea class="form-control limit" rows="8" id="emailmessage" name="message" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="g-recaptcha" data-sitekey="6LeN0wcUAAAAADZ-LGKkbe72eRLDCjsIZA-3yjoS"></div>
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-default" data-dismiss="modal">Close</a>
                            <!-- <input type="submit" class="btn btn-primary" value="Send"> -->
                            <input type="submit" name="submit" value="SUBMIT">
                        </div>
                    </form>



   
   
</div>

<?php include 'menu/blank.php'; ?>
    
<?php include 'footer.php'; ?>

