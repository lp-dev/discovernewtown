<?php include 'header.php'; ?>

    <div class="container conmarg">
	  
<?php include 'menu/addpremium.php'; ?>

	  <div class="col-md-6 middlebtmpad" id="col2">

	  	<h1>Add details to database.</h1><hr>

	  	<h4 class="titlepad"><img class="requiredimg" data-toggle="modal" data-target="#requiredmodal" src="img/menu/required.png" alt="requiredmodal"></img> = Required detail.</h4>

		<form id="addform" method="post" action="added.php" >

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

				<br>
				<!-- <div class="col-lg-12 fieldbuffer">
					<input type="submit" class="btn btn-default" value="Send">
					<input type="reset" class="btn btn-default" value="Reset">
				</div> -->

				<button type="submit" value="Apply" class="btn btn-default headerelement stretch twentypad"><img class="joinimg" src="img/btns/confirm.png" alt="confirm">Send signup</img></button>
	        	<button type="reset" value="Reset" class="btn btn-default headerelement stretch"><img class="joinimg" src="img/btns/close.png" alt="reset">Reset signup</img></button>

		</form>

		<?php include 'modal/premium.php'; ?>
		<?php include 'modal/required.php'; ?>

		<?php include 'modal/t&c.php'; ?>

	  </div>

	  <div class="col-md-3 middlebtmpad" id="col3">

	
<?php include 'footer.php'; ?>