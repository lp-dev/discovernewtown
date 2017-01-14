<?php include '../headerp.php'; ?>

    <div class="container conmarg">
	  
	  <div class="col-md-3 middlebtmpad" id="col1">
	  	<?php include '../menu/addsearchp.php'; ?>
 		<?php include '../menu/addmenup.php'; ?>
        <a  href="../sports+recreation"><button type="button" class="btn btn-default headerelement stretch"><img class="filterimg" src="../img/menu/s.png" alt="filter"></img>Sports & Recreation</button></a>
      </div>

	  <div class="col-md-6 middlebtmpad" id="col2">

	  	<h1>Filter listings</h1><hr>

		<form id="filterform" name="filterform" role="search" method="POST" action="results.php" >

				<h4>Please choose any filters to apply.</h4>

				<div id='sportsrecreationfilter'>

					<div class="col-md-12">

				        <div class="col-md-6">

				            <h2 class="titlepad">Subcategories</h2>

				            <input type='checkbox' name="filters[]" value="Athletics" id="Athletics"> Athletics</input><br>
				            <input type='checkbox' name="filters[]" value="Basketball" id="Basketball"> Basketball</input><br>
				            <input type='checkbox' name="filters[]" value="Biking" id="Biking"> Biking</input><br>
				            <input type='checkbox' name="filters[]" value="Bowling" id="Bowling"> Bowling</input><br>
				            <input type='checkbox' name="filters[]" value="Clubs" id="Clubs"> Clubs</input><br>
				            <input type='checkbox' name="filters[]" value="Croquet" id="Croquet"> Croquet</input><br>
				            <input type='checkbox' name="filters[]" value="Dance" id="Dance"> Dance</input><br>
				            <input type='checkbox' name="filters[]" value="Golf" id="Golf"> Golf</input><br>
				            <input type='checkbox' name="filters[]" value="Gym" id="Gym"> Gym</input><br>
				            <input type='checkbox' name="filters[]" value="Gymnastics" id="Gymnastics"> Gymnastics</input><br>
				            <input type='checkbox' name="filters[]" value="Hockey" id="Hockey"> Hockey</input><br>
				            <input type='checkbox' name="filters[]" value="Martial arts" id="Martialarts"> Martial arts</input><br>
				            <input type='checkbox' name="filters[]" value="Rugby" id="Rugby"> Rugby</input><br>
				            <input type='checkbox' name="filters[]" value="Shooting" id="Shooting"> Shooting</input><br>
				            <input type='checkbox' name="filters[]" value="Soccer Football" id="SoccerFootball"> Soccer / Football</input><br>
				            <input type='checkbox' name="filters[]" value="Table tennis" id="Tabletennis"> Table Tennis</input><br>
				            <input type='checkbox' name="filters[]" value="Tennis" id="Tennis"> Tennis</input><br>
				            <input type='checkbox' name="filters[]" value="Volleyball" id="Volleyball"> Volleyball</input><br>
				            <input type='checkbox' name="filters[]" value="Walkways" id="Walkways"> Walkways</input><br>

				        </div>

				        <div class="col-md-6">

				            <h2 class="titlepad">Type</h2>

				            <input type='checkbox' name="filters[]" value="Indoor" id="Indoor"> Indoor</input><br>
				            <input type='checkbox' name="filters[]" value="Outdoor" id="Outdoor"> Outdoor</input><br>
				            <input type='checkbox' name="filters[]" value="Covered" id="Covered"> Covered</input><br>
				            <input type='checkbox' name="filters[]" value="Uncovered" id="Uncovered"> Uncovered</input><br>
				            <input type='checkbox' name="filters[]" value="Club" id="Club"> Club</input><br>
				            <input type='checkbox' name="filters[]" value="Course" id="Course"> Course</input><br>
				            <input type='checkbox' name="filters[]" value="Court" id="Court"> Court</input><br>
				            <input type='checkbox' name="filters[]" value="Field" id="Field"> Field</input><br>
				            <input type='checkbox' name="filters[]" value="Park" id="Park"> Park</input><br>
				            <input type='checkbox' name="filters[]" value="Stadium" id="Stadium"> Stadium</input><br>
				            <input type='checkbox' name="filters[]" value="Track" id="Track"> Track</input><br>
				            <input type='checkbox' name="filters[]" value="Trail" id="Trail"> Trail</input><br>
				            <input type='checkbox' name="filters[]" value="Store Supplies" id="StoreSupplies"> Store / Supplies</input><br>

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

				<button type="submit" value="Apply" class="btn btn-default headerelement stretch twentypad"><img class="joinimg" src="../img/btns/confirm.png" alt="confirm">Apply filters</img></button>
	        	<button type="reset" value="Reset" class="btn btn-default headerelement stretch"><img class="joinimg" src="../img/btns/close.png" alt="reset">Reset filters</img></button>

		</form>

	  </div>

	  <div class="col-md-3 middlebtmpad" id="col3">


	  </div>
		
<?php include '../footerp.php'; ?>