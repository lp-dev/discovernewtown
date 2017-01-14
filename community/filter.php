<?php include '../headerp.php'; ?>

    <div class="container conmarg">
	  
	  <div class="col-md-3 middlebtmpad" id="col1">
	  	<?php include '../menu/addsearchp.php'; ?>
 		<?php include '../menu/addmenup.php'; ?>
        <a  href="../community"><button type="button" class="btn btn-default headerelement stretch"><img class="filterimg" src="../img/menu/c.png" alt="filter"></img>Community</button></a>
      </div>

	  <div class="col-md-6 middlebtmpad" id="col2">

	  	<h1>Filter listings</h1><hr>

		<form id="filterform" name="filterform" role="search" method="POST" action="results.php" >

				<h4>Please choose any filters to apply.</h4>

				<div id='communityfilter'>

				    <div class="col-md-12 twentyunderpad">

				        <div class="col-md-6">

				            <h2 class="titlepad">Subcategories</h2>

				            <input type='checkbox' name="filters[]" value="Church Religion" id="ChurchReligion"> Church / Religion</input><br>
				            <input type='checkbox' name="filters[]" value="Charity" id="Charity"> Charity</input><br>
				            <input type='checkbox' name="filters[]" value="Citizens advice bureau" id="CitizensAdviceBureau"> Citizens Advice Bureau</input><br>
				            <input type='checkbox' name="filters[]" value="Community centre" id="CommunityCentre"> Community centre</input><br>
				            <input type='checkbox' name="filters[]" value="Culture" id="Culture"> Culture</input><br>
				            <input type='checkbox' name="filters[]" value="Event" id="Event"> Event</input><br>
				            <input type='checkbox' name="filters[]" value="Foundation" id="Foundation"> Foundation</input><br>
				            <input type='checkbox' name="filters[]" value="Government" id="Government"> Government</input><br>
				            <input type='checkbox' name="filters[]" value="Group" id="Group"> Group</input><br>
				            <input type='checkbox' name="filters[]" value="Library" id="Library"> Library</input><br>
				            <input type='checkbox' name="filters[]" value="Learning" id="Learning"> Learning</input><br>
				            <input type='checkbox' name="filters[]" value="Public service" id="Public service"> Public service</input><br>
				            <input type='checkbox' name="filters[]" value="Meeting hall" id="MeetingHall"> Meeting hall</input><br>
				            <input type='checkbox' name="filters[]" value="Organisation" id="Organisation"> Organisation</input><br>
				            <input type='checkbox' name="filters[]" value="Public toilet Restroom" id=""> Public toilet / Restroom</input><br>
				            <input type='checkbox' name="filters[]" value="Retirement homes" id="RetirementHomes"> Retirement home</input><br>
				            <input type='checkbox' name="filters[]" value="Support Guidance" id="SupportGuidance"> Support / Guidance</input><br>
				            <input type='checkbox' name="filters[]" value="Venue" id="Venue"> Venue</input><br>
				            <input type='checkbox' name="filters[]" value="Work & Income" id="WorkIncome"> Work & Income</input><br>

				        </div>

				        <div class="col-md-6">

				            <h2 class="titlepad">Features</h2>

				            <input type='checkbox' name="filters[]" value="Wifi" id="wifi"> Free Wifi</input><br>
				            <input type='checkbox' name="filters[]" value="Wheelchair friendly" class="wheelchairfriendly"> Wheelchair friendly</input><br>
				            <input type='checkbox' name="filters[]" value="Children friendly" class="childrenfriendly"> Children friendly</input><br>
				            <input type='checkbox' name="filters[]" value="Dog friendly" class="dogfriendly"> Dog friendly</input><br>
				            <input type='checkbox' name="filters[]" value="Bike friendly" class="bikefriendly"> Bike friendly</input><br>
				            <input type='checkbox' name="filters[]" value="Accessible toilet" class="accesibletoilet"> Accessible toilet</input><br>
				            <input type='checkbox' name="filters[]" value="Female toilet" class="femaletoilet"> Female toilet</input><br>
				            <input type='checkbox' name="filters[]" value="Male toilet" class="maletoilet"> Male toilet</input><br> 

				        </div>

				    </div>

				</div>

				<button type="submit" value="Apply" class="btn btn-default headerelement stretch twentypad"><img class="joinimg" src="../img/btns/confirm.png" alt="confirm">Apply filters</img></button>
	        	<button type="reset" value="Reset" class="btn btn-default headerelement stretch"><img class="joinimg" src="../img/btns/close.png" alt="reset">Reset filters</img></button>

		</form>

	  </div>

	  <div class="col-md-3 middlebtmpad" id="col3">


	  </div>
		
<?php include '../footerp.php'; ?>