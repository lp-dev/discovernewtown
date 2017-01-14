<?php include 'header.php'; ?>

    <div class="container conmarg">
	  
<?php include 'menu/addbasic.php'; ?>

	  <div class="col-md-6 middlebtmpad" id="col2">

	  	<div class="alert alert-danger alert-dismissable">
			<button type="button" class="close" data-dismiss="alert"></button>
			<h4>OUT OF DATE - PLEASE USE <a href="signup.php">SIGNUP PAGE</a> INSTEAD.</h4>
		</div>

		<h1>Add premium details to database.</h1><hr>
  	

	  	<h1>WARNING! CONFIRMATION EMAILS ARE SENT TO THE CONTACT EMAIL ADDRESS AUTOMATICALLY.</h1><hr>

	  	<h4 class="titlepad"><img class="requiredimg" data-toggle="modal" data-target="#requiredmodal" src="img/menu/required.png" alt="requiredmodal"></img> = Required detail.</h4>

		<form id="addform" method="post" action="added+.php" >

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


				<!-- <h4>Short description about your business/organisation<img class="helpimg" data-toggle="modal" data-target="#shortdescmodal" src="img/menu/help.png" alt="shortdescriptionhelp"></img></h4> -->
				<h2 class="titlepad">Short description about the business/organisation<img class="requiredimg" data-toggle="modal" data-target="#requiredmodal" src="img/menu/required.png" alt="requiredmodal"></img></h2>
				<p>What makes your business/organisation unique and stand out from the rest? Explain in 50 characters or less.</p>
				<div class="col-lg-12 fieldbuffer">
					<textarea class="form-control limit" rows="4" id="shortdescription" name="shortdescription"></textarea>
				</div>

				<h2 class="titlepad">Long description about the business/organisation<img class="helpimg" data-toggle="modal" data-target="#longdescmodal" src="img/menu/help.png" alt="longdescriptionhelp"></img></h2>
				<p>What makes your business/organisation unique? Unique services, products etc. Explain in 200 characters or less.</p>
				<div class="col-lg-12 fieldbuffer">
					<textarea class="form-control limit" rows="8" id="longdescription" name="longdescription"></textarea>
				</div>
				
				<!-- <h2 class="titlepad">Are you interested in including <a href="premium.php" target="_blank">premium features</a> to promote your business/organisation?</h2>
				<p>Have your own cost effective webpage listed on Discover Newtown and receive more views (visits) by being part of our destination website Discover Newtown.</p>
				
				<div class="col-lg-12 fieldbuffer">
					<input type='checkbox' name="addpremium" value="premiumupgrade" id="addpremium"> I am interested in upgrading my free classified listing to include premium features.</input>
				</div>

				<h2 class="titlepad">Are you interested in more options to promote your business/organisation?</h2>
				<p>Do you need help with:</p>

				<div class="col-lg-12 fieldbuffer">
					<input type='checkbox' name="buildwebsite" value="buildwebsite" id="buildwebsite">Building your own customisable and cost effective business/organisation website?</input>
				</div>

				<div class="col-lg-12 fieldbuffer">
					<input type='checkbox' name="buildfacebook" value="buildfacebook" id="buildfacebook">Building a facebook page to promote your business/organisation?</input>
				</div>

				<h2 class="titlepad">Is there anything else you would like to add or ask?</h2>

				<div class="col-lg-12 fieldbuffer">
					<textarea class="form-control limit" rows="4" id="extramessage" name="extramessage"></textarea>
				</div> -->

				<h2 class="titlepad">Terms & conditions<img class="requiredimg" data-toggle="modal" data-target="#requiredmodal" src="img/menu/required.png" alt="requiredmodal"></img><img class="helpimg" data-toggle="modal" data-target="#tcmodal" src="img/menu/help.png" alt="t&chelp"></img></h2>
				
				<div class="col-lg-12 fieldbuffer">
					<input type='checkbox' name="agree" value="Yes" id="agree"> I agree to the Discover Newtown terms & conditions.</input>
				</div>

				<br>
				<!-- <div class="col-lg-12 fieldbuffer">
					<input type="submit" class="btn btn-default" value="Send">
					<input type="reset" class="btn btn-default" value="Reset">
				</div>
 -->
				<button type="submit" value="Apply" class="btn btn-default headerelement stretch twentypad"><img class="joinimg" src="img/btns/confirm.png" alt="confirm">Send signup</img></button>
	        	<button type="reset" value="Reset" class="btn btn-default headerelement stretch"><img class="joinimg" src="img/btns/close.png" alt="reset">Reset signup</img></button>

		</form>

		<?php include 'modal/premium.php'; ?>
		<?php include 'modal/required.php'; ?>

		<?php include 'modal/t&c.php'; ?>

	  </div>

	  <div class="col-md-3 middlebtmpad" id="col3">

<?php include 'footer.php'; ?>