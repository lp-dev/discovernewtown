<?php include 'header.php'; ?>

    <div class="container conmarg">

 			  
<?php include 'menu/signup.php'; ?>

	  <div class="col-md-6 middlebtmpad" id="col2">

	  	

















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





                    include 'connect.php';

                    if (mysqli_connect_errno()) {
                        printf("Connect failed: %s\n", mysqli_connect_error());
                        exit();
                    }

                    $contactname       = $_POST ['contactname'];
                    $contactphone   = $_POST ['contactphone'];
                    $contactmobile   = $_POST ['contactmobile'];
                    $contactemail      = $_POST ['contactemail'];
                    $businessname       = $_POST ['businessname'];
                    $address     = $_POST ['address'];
                    $businessphone   = $_POST ['businessphone'];
                    $businessemail      = $_POST ['businessemail'];
                    $subcategory = $_POST ['subcategory'];
                    $website   = $_POST ['website'];
                    $faceb       = $_POST ['faceb'];
                    $extralinks      = $_POST ['extralinks'];
                    $shortdescription    = $_POST ['shortdescription'];
                    
                    $addpremium    = $_POST ['addpremium'];
                    // $nopremium    = $_POST ['nopremium'];
                    $buildwebsite    = $_POST ['buildwebsite'];
                    $buildfacebook    = $_POST ['buildfacebook'];

                    $longdescription       = $_POST ['longdescription'];

                    $extramessage    = $_POST ['extramessage'];
                    $agree    = $_POST ['agree'];

                    $category = $_POST ['filterpreference'];

                    foreach($_POST['subcategory'] as $value) {
                        $subcategory .= "$value, ";
                    }

                    foreach($_POST['type'] as $value) {
                        $type .= "$value, ";
                    }

                    foreach($_POST['cost'] as $value) {
                        $cost .= "$value, ";
                    }

                    foreach($_POST['extras'] as $value) {
                        $extras .= "$value, ";
                    }

                    foreach($_POST['features'] as $value) {
                        $features .= "$value, ";
                    }

                    $query = "INSERT INTO dnlistings (Active, Premium, Upgrade, BuildWebsite, BuildFacebook, Name, Address, Phone, Email, Website, Facebook, Extras, Category, SDescription, LDescription, Filters, TC, Summary, Searches) VALUES ('no','no','$addpremium','$buildwebsite','$buildfacebook','$businessname','$address','$businessphone','$businessemail','$website','$faceb','$extralinks','$category','$shortdescription','$longdescription','$subcategory, $type, $cost, $extras, $features','$agree','$businessname, $address, $businessphone, $businessemail','$businessname, $address, $subcategory, $type, $cost, $extras, $features')";

                    $db->query($query) or die($query.'<br />'.$db->error);

                    $db->close();

                    mail('contact@discovernewtown.co.nz', 'Discover Newtown Sign Up', 'Contact name: ' . $contactname . ". \n" . 'Contact phone: ' . $contactphone . ". \n" . 'Contact mobile: ' . $contactmobile . ". \n" . 'Contact email: ' . $contactemail . ". \n" . 'Business name: ' . $businessname . ". \n" . 'Street address: ' . $address . ". \n" . 'Business phone: ' . $businessphone . ". \n" . 'Business email: ' . $businessemail . ". \n" . 'Category: ' . $category . ". \n" . 'Subcategory: ' . $subcategory . ". \n" . 'Type: ' . $type . ". \n" . 'Cost: ' . $cost . ". \n" . 'Extras: ' . $extras . ". \n" . 'Features: ' . $features . ". \n" . 'Extra message: ' . $extramessage . ". \n" . 'Upgrade to premium: ' . $addpremium . ". \n" . 'Build a website: ' . $buildwebsite . ". \n" . 'Build a Facebook page: ' . $buildfacebook . ". \n" . 'Agreed to T&Cs: ' . $agree . ".", 'From: contact@discovernewtown.co.nz');





                    // $emailname = !empty($_POST['emailname'])?$_POST['emailname']:'';
                    // $emailemail = !empty($_POST['emailemail'])?$_POST['emailemail']:'';
                    // $emailbusiness = !empty($_POST['emailbusiness'])?$_POST['emailbusiness']:'';
                    // $emailphone = !empty($_POST['emailphone'])?$_POST['emailphone']:'';
                    // $emailmobile = !empty($_POST['emailmobile'])?$_POST['emailmobile']:'';
                    // $emailmessage = !empty($_POST['emailmessage'])?$_POST['emailmessage']:'';

                    // $emailsubject = !empty($_POST['emailsubject'])?$_POST['emailsubject']:'';
                    
                    // $to = 'test@discovernewtown.co.nz';
                    // $subject = ''.$emailsubject.'';
                    // $htmlContent = "
                    //     <h2>Discover Newtown enquiry</h2>
                    //     <p><b>Name: </b>".$emailname."</p>
                    //     <p><b>Business / Organisation: </b>".$emailbusiness."</p>
                    //     <p><b>Email: </b>".$emailemail."</p>
                    //     <p><b>Phone number: </b>".$emailphone."</p>
                    //     <p><b>Mobile number: </b>".$emailmobile."</p>
                    //     <p><b>Message: </b>".$emailmessage."</p>

                    // ";
                    // // Always set content-type when sending HTML email
                    // $headers = "MIME-Version: 1.0" . "\r\n";
                    // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    // // More headers
                    // // $headers .= 'From:'.$name.' <'.$email.'>' . "\r\n";
                    // $headers .= 'From:'.$emailemail.' '. "\r\n";

                    // //send email
                    // @mail($to,$subject,$htmlContent,$headers);
                    
                    echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button><h4>Sign up completed. We will respond to your enquiry shortly to confirm your classified listing.</h4></div>';



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


















	  	<h1>Discover Newtown signup</h1><hr>

 		<a  href="premium" target="_blank"><button type="button" class="btn btn-default headerelement stretch"><img class="contactimg" src="img/btns/premium.png" alt="premium button"></img>View example</button></a>

		<!-- <form id="addform" method="post" action="signedup.php" > -->
		<form id="addform" method="post" action="" >

			<p>Please complete the following details to receive your free classified listing on Discover Newtown.</p>

				<h4 class="titlepad"><img class="requiredimg" data-toggle="modal" data-target="#requiredmodal" src="img/menu/required.png" alt="requiredmodal"></img> = Required detail.</h4>

				<h2 class="titlepad">Personal details.</h2>

				<p>First & last name:<img class="requiredimg" data-toggle="modal" data-target="#requiredmodal" src="img/menu/required.png" alt="requiredmodal"></img></p>	
				<div class="col-lg-12 fieldbuffer">
					<input type="text" class="form-control" id="contactname" name="contactname" placeholder="">
				</div>
				<p>Phone number:<img class="requiredimg" data-toggle="modal" data-target="#requiredmodal" src="img/menu/required.png" alt="requiredmodal"></img></p>	
				<div class="col-lg-12 fieldbuffer">
					<input type="text" class="form-control" id="contactphone" name="contactphone" placeholder="">
				</div>
				<p>Mobile number:</p>
				<div class="col-lg-12 fieldbuffer">
					<input type="text" class="form-control" id="contactmobile" name="contactmobile" placeholder="">
				</div>
				<p>Email address:<img class="requiredimg" data-toggle="modal" data-target="#requiredmodal" src="img/menu/required.png" alt="requiredmodal"></img></p>	<div class="col-lg-12 fieldbuffer">
					<input type="email" class="form-control" id="contactemail" name="contactemail" placeholder="youremail@example.com">
					<input type='checkbox' name="contactemail" value="No email address" id="contactemail"> I don't have an email address</input>
				</div>

				<h2 class="titlepad">Business or organisation details.</h2>

				<p>Business/Organisation name:<img class="requiredimg" data-toggle="modal" data-target="#requiredmodal" src="img/menu/required.png" alt="requiredmodal"></img></p>	
				<div class="col-lg-12 fieldbuffer">
					<input type="text" class="form-control" id="businessname" name="businessname" placeholder="">
				</div>
				<p>Street address:<img class="requiredimg" data-toggle="modal" data-target="#requiredmodal" src="img/menu/required.png" alt="requiredmodal"></img></p>
				<div class="col-lg-12 fieldbuffer">
					<input type="text" class="form-control" id="address" name="address" placeholder="101 Example Street">
				</div>
				<p>Phone number:<img class="requiredimg" data-toggle="modal" data-target="#requiredmodal" src="img/menu/required.png" alt="requiredmodal"></img></p>
				<div class="col-lg-12 fieldbuffer">
					<input type="text" class="form-control" id="businessphone" name="businessphone" placeholder="">
				</div>
				<p>Email address:<img class="requiredimg" data-toggle="modal" data-target="#requiredmodal" src="img/menu/required.png" alt="requiredmodal"></img></p>
				<div class="col-lg-12 fieldbuffer">
					<input type="email" class="form-control" id="businessemail" name="businessemail" placeholder="businessemail@example.com">
					<input type='checkbox' name="businessemail" value="No email address" id="businessemail"> I don't have a business or organisation email address</input>
				</div> 				
 				<p>Website address:</p>
				<div class="col-lg-12 fieldbuffer">
					<input type="text" class="form-control" id="website" name="website" placeholder="www.example.com">
				</div>
				<p>Facebook Address:</p>
				<div class="col-lg-12 fieldbuffer">
					<input type="text" class="form-control" id="faceb" name="faceb" placeholder="facebook.com/example">
				</div>
				<p>Extra links:</p>
				<div class="col-lg-12 fieldbuffer">
					<input type="text" class="form-control" id="extralinks" name="extralinks" placeholder="@twitterexample, pinterest.com/example">
				</div>

				<h2 class="titlepad">Choose a category:<img class="requiredimg" data-toggle="modal" data-target="#requiredmodal" src="img/menu/required.png" alt="requiredmodal"></img></h2>

				<select class="form-control" id="filterpreference" name="filterpreference">
					<option>-- Click for category list --</option>
					<option name="category[]" value="Emergency">Emergency</option>
					<option name="category[]" value="Accommodation">Accommodation</option>
					<option name="category[]" value="Automotive">Automotive</option>
					<option name="category[]" value="Banking+Finance">Banking & Finance</option>
					<option name="category[]" value="Community">Community</option>
					<option name="category[]" value="Computers+IT">Computers & I.T.</option>
					<option name="category[]" value="Education">Education</option>
					<option name="category[]" value="Entertainment">Entertainment</option>
					<option name="category[]" value="Food+Drink">Food & Drink</option>
					<option name="category[]" value="Health+Beauty">Health & Beauty</option>
					<option name="category[]" value="Medical">Medical</option>
					<option name="category[]" value="Retail+Shopping">Retail & Shopping</option>
					<option name="category[]" value="Sports+Recreation">Sports & Recreation</option>
					<option name="category[]" value="Trades+Services">Trades & Services</option>
					<option name="category[]" value="Other">Other</option>
				</select>

				<?php include 'join/emergency.php'; ?>
				<?php include 'join/accommodation.php'; ?>
				<?php include 'join/automotive.php'; ?>
				<?php include 'join/banking+finance.php'; ?>
				<?php include 'join/community.php'; ?>
				<?php include 'join/computers+it.php'; ?>
				<?php include 'join/education.php'; ?>
				<?php include 'join/entertainment.php'; ?>
				<?php include 'join/food+drink.php'; ?>
				<?php include 'join/health+beauty.php'; ?>
				<?php include 'join/medical.php'; ?>
				<?php include 'join/retail+shopping.php'; ?>
				<?php include 'join/sports+recreation.php'; ?>
				<?php include 'join/trades+services.php'; ?>
				<?php include 'join/other.php'; ?>


				
				<h2 class="titlepad">Short description about the business/organisation<img class="requiredimg" data-toggle="modal" data-target="#requiredmodal" src="img/menu/required.png" alt="requiredmodal"></img></h2>
				<p>What makes your business/organisation unique and stand out from the rest? Explain in 50 characters or less.</p>
				<div class="col-lg-12 fieldbuffer">
					<textarea class="form-control limit" rows="4" id="shortdescription" name="shortdescription"></textarea>
				</div>

				

				<h2 class="titlepad">Are you interested in including <a href="premium.php" target="_blank">premium features</a> to promote your business/organisation?<img class="requiredimg" data-toggle="modal" data-target="#requiredmodal" src="img/menu/required.png" alt="requiredmodal"></img></h2>
				<p>Have your own dedicated and cost effective webpage created on Discover Newtown which helps people connect with your business/organisation easier.</p>
				
				<div class="col-lg-12 fieldbuffer">
					<input type='checkbox' name="addpremium" value="premiumupgrade" id="addpremium"> I am interested in upgrading my free classified listing to include premium features.</input>
				</div>
				<div class="col-lg-12 fieldbuffer">
					<input type='checkbox' name="addpremium" value="noupgrade" id="addpremium"> I am only interested in a free classified listing.</input>
				</div>

				<!-- <h4>Long description<img class="helpimg" data-toggle="modal" data-target="#longdescmodal" src="img/menu/help.png" alt="longdescriptionhelp"></img><img class="premiumimg" data-toggle="modal" data-target="#premiummodal" src="img/menu/premium.png" alt="premiummodal"></img></h4> -->

				<h2 class="titlepad">Upload photos for premium listing</h2>
				<p>Click the button below to upload photos. 3 photos are required - one of the outside of your business or organisation, one of the inside, and one extra image of your choosing. Please name the photos so we can easily find them.</p>
				<a  href="https://www.dropbox.com/request/61uUvRIZgEe7LpueP2Ax" target="_blank"><button type="button" class="btn btn-default headerelement stretch"><img class="contactimg" src="img/btns/join.png" alt="premium button"></img>Upload photos</button></a>

				<h2 class="titlepad">Long description about the business/organisation<img class="helpimg" data-toggle="modal" data-target="#longdescmodal" src="img/menu/help.png" alt="longdescriptionhelp"></img></h2>
				<p>What makes your business/organisation unique? Unique services, products etc. Explain in 200 characters or less.</p>
				<div class="col-lg-12 fieldbuffer">
					<textarea class="form-control limit" rows="8" id="longdescription" name="longdescription"></textarea>
				</div>

				<h2 class="titlepad">Are you interested in more options to promote your business/organisation?</h2>
				<p>Do you need help with:</p>

				<div class="col-lg-12 fieldbuffer">
					<input type='checkbox' name="buildwebsite" value="buildwebsite" id="buildwebsite"> Building your own customisable and cost effective business/organisation website?</input>
				</div>

				<div class="col-lg-12 fieldbuffer">
					<input type='checkbox' name="buildfacebook" value="buildfacebook" id="buildfacebook"> Building a Facebook page to promote your business/organisation?</input>
				</div>

				<h2 class="titlepad">Is there anything else you would like to add or ask?</h2>

				<div class="col-lg-12 fieldbuffer">
					<textarea class="form-control limit" rows="4" id="extramessage" name="extramessage"></textarea>
				</div>

				<h2 class="titlepad">Terms & conditions<img class="requiredimg" data-toggle="modal" data-target="#requiredmodal" src="img/menu/required.png" alt="requiredmodal"></img><img class="helpimg" data-toggle="modal" data-target="#tcmodal" src="img/menu/help.png" alt="t&chelp"></img></h2>
				
				<div class="col-lg-12 fieldbuffer">
					<input type='checkbox' name="agree" value="Yes" id="agree" > I agree to the Discover Newtown terms & conditions.</input>
				</div>

				<br>

                <div class="g-recaptcha" data-sitekey="6LeN0wcUAAAAADZ-LGKkbe72eRLDCjsIZA-3yjoS"></div>

     			<br/>

				<!-- <div class="col-lg-12 fieldbuffer">
					<input type="submit" class="btn btn-default" value="Send">
					<input type="reset" class="btn btn-default" value="Reset">
				</div>
				 -->
				 <button type="submit" value="Apply" name="submit" class="btn btn-default headerelement stretch twentypad"><img class="joinimg" src="img/btns/confirm.png" alt="confirm">Send signup</img></button>
	        	<button type="reset" value="Reset" class="btn btn-default headerelement stretch"><img class="joinimg" src="img/btns/close.png" alt="reset">Reset signup</img></button>
		</form>





		<?php include 'modal/premium.php'; ?>
		<?php include 'modal/required.php'; ?>

		<?php include 'modal/t&c.php'; ?>

	  </div>

	  <div class="col-md-3 middlebtmpad" id="col3">

	  	<h1>Premium</h1><hr>

	  	<!-- <div class="media">
				<div class="media-left">
					<a href="#">
						<img class="media-object signimg" src="img/btns/add.png" alt="add1">
					</a>
				</div>
				<div class="media-body">
					<h3 class="media-heading">Additional features available.</h3>
					<h4 class="media-heading">Premium webpages include:</h4>
					<ol>
						<li>Multiple images – Shows off your products and services.</li>
						<li>Map location – Makes it simple for customers to find your business / organisation.</li>
						<li>Opening hours – Lets customers know when your open for business online.</li>
						<li>Customisable links to your existing website, facebook etc.</li>
						<li>Search features – Finding your business / organisation is made easier for customers.</li>
						<li>List your amenities e.g. car parking, disabled toilets, child friendly.</li>
					</ol>
				</div>
		</div> -->

		<h2>Included features:</h2><br>
			<ul>
				<li>Multiple images – Shows off your products and services.</li>
				<li>Map location – Makes it simple for customers to find your business / organisation.</li>
				<li>Opening hours – Lets customers know when your open for business.</li>
				<li>Customisable links to your existing website, facebook etc.</li>
				<li>Search features – Finding your business / organisation is made easier for customers.</li>
				<li>List of your amenities e.g. car parking, disabled toilets, child friendly.</li>
			</ul>
	
<?php include 'footer.php'; ?>