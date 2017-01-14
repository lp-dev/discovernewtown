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
                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                // More headers
                // $headers .= 'From:'.$name.' <'.$email.'>' . "\r\n";
                $headers .= 'From:'.$emailemail.' '. "\r\n";

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
                                <select class="form-control" id="emailsubject" name="emailsubject">
                                    <option>-- Choose email subject here --</option>
                                    <option name="emailsubject" value="General enquiry">General enquiry</option>
                                    <option name="emailsubject" value="Discover Newtown enquiry">Discover Newtown enquiry</option>
                                    <option name="emailsubject" value="Event enquiry">Event enquiry</option>
                                    <option name="emailsubject" value="Feedback / Suggestion">Feedback / Suggestion</option>
                                    <option name="emailsubject" value="Website building enquiry">Website building enquiry</option>
                                    <option name="emailsubject" value="Other enquiry">Other enquiry</option>
                                </select>
                            </div><br>

                            <div class="form-group">
                                <div class="col-lg-12">
                                    <input type="text" class="form-control" id="emailname" name="emailname" placeholder="First and last name">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-12">
                                    <input type="text" class="form-control" id="emailbusiness" name="emailbusiness" placeholder="Business / Organisation">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-12">
                                    <input type="email" class="form-control" id="emailemail" name="emailemail" placeholder="Email address">
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
                                    <textarea class="form-control limit" rows="8" id="emailmessage" name="emailmessage" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="g-recaptcha" data-sitekey="6LeN0wcUAAAAADZ-LGKkbe72eRLDCjsIZA-3yjoS"></div>
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-default" data-dismiss="modal">Close</a>
                            <!-- <input type="submit" class="btn btn-primary" value="Send"> -->
                            <!-- <input type="submit" name="submit" value="SUBMIT"> -->
                            <input type="submit" name="submit" class="btn btn-primary" value="Send">                            

                        </div>
                    </form>



   
   
</div>

<?php include 'menu/blank.php'; ?>
    
<?php include 'footer.php'; ?>

