<?php include '../headerp.php'; ?>

    <div class="container conmarg">
	  
	  <div class="col-md-3 middlebtmpad" id="col1">
	  	<?php include '../menu/addsearchp.php'; ?>
 		<?php include '../menu/addmenup.php'; ?>
        <a  href="../entertainment"><button type="button" class="btn btn-default headerelement stretch"><img class="filterimg" src="../img/menu/e.png" alt="filter"></img>Entertainment</button></a>
      </div>

	  <div class="col-md-6 middlebtmpad" id="col2">

	  	<h1>Filter listings</h1><hr>

		<form id="filterform" name="filterform" role="search" method="POST" action="results.php" >

				<h4>Please choose any filters to apply.</h4>

				<div id='entertainmentfilter'>

				<div class="col-md-12">

			        <div class="col-md-12">

				        <div class="col-md-6">

				            <h2 class="titlepad">Subcategories</h2>

				            <input type='checkbox' name="filters[]" value="Attraction" id="Attraction"> Attraction</input><br>
				            <input type='checkbox' name="filters[]" value="Biking" id="Biking"> Biking</input><br>
				            <input type='checkbox' name="filters[]" value="Event" id="Event"> Event</input><br>
				            <input type='checkbox' name="filters[]" value="Music" id=""> Music</input><br>
				            <input type='checkbox' name="filters[]" value="Park" id="Park"> Park</input><br>
				            <input type='checkbox' name="filters[]" value="Performance" id="Performance"> Performance</input><br>
				            <input type='checkbox' name="filters[]" value="Sport" id="Sport"> Sport</input><br>
				            <input type='checkbox' name="filters[]" value="Walkways" id="Walkways"> Walkways</input><br>
				            <input type='checkbox' name="filters[]" value="Venue" id="Venue"> Venue</input><br>
				            <input type='checkbox' name="filters[]" value="Zoo" id="Zoo"> Zoo</input><br>

				        </div>

				        <div class="col-md-6">

				            <h2 class="titlepad">Type</h2>

				            <input type='checkbox' name="filters[]" value="Public holiday" id="Public holiday"> Public holiday</input><br>
				            <input type='checkbox' name="filters[]" value="Weekday" id="Weekday"> Weekday</input><br>
				            <input type='checkbox' name="filters[]" value="Weekend" id="Weekend"> Weekend</input><br>

				        </div>

				    </div>
				    <div class="col-md-12 twentyunderpad">

				        <div class="col-md-6">

				            <h2 class="titlepad">Cost</h2>

				            <input type='checkbox' name="filters[]" value="Cost" id="Cost"> Cost</input><br>
				            <input type='checkbox' name="filters[]" value="Free" id="Free"> Free</input><br>

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

				</div>

				<button type="submit" value="Apply" class="btn btn-default headerelement stretch twentypad"><img class="joinimg" src="../img/btns/confirm.png" alt="confirm">Apply filters</img></button>
	        	<button type="reset" value="Reset" class="btn btn-default headerelement stretch"><img class="joinimg" src="../img/btns/close.png" alt="reset">Reset filters</img></button>

		</form>

	  </div>

	  <div class="col-md-3 middlebtmpad" id="col3">


	  </div>
		
<?php include '../footerp.php'; ?>