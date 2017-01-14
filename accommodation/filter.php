<?php include '../headerp.php'; ?>

    <div class="container conmarg">
	  
	  <div class="col-md-3 middlebtmpad" id="col1">
	  	<?php include '../menu/addsearchp.php'; ?>
 		<?php include '../menu/addmenup.php'; ?>
        <a  href="../accommodation"><button type="button" class="btn btn-default headerelement stretch"><img class="filterimg" src="../img/menu/a.png" alt="filter"></img>Accommodation</button></a>
      </div>

	  <div class="col-md-6 middlebtmpad" id="col2">

	  	<h1>Filter listings</h1><hr>

		<form id="filterform" name="filterform" role="search" method="POST" action="results.php" >

				<h4>Please choose any filters to apply.</h4>

				<div id='accommodationfilter'>

				    <div class="col-md-12">

				        <div class="col-md-6">

				            <h2 class="titlepad">Subcategories</h2>

				            <input type='checkbox' name="filters[]" value="Backpackers" id="Backpackers"> Backpackers</input><br>
				            <input type='checkbox' name="filters[]" value="B&B" id="B&B"> Bed & Breakfast</input><br>
				            <input type='checkbox' name="filters[]" value="Camping" id="Camping"> Camping</input><br>
				            <input type='checkbox' name="filters[]" value="Homestay" id="Homestay"> Homestay</input><br>
				            <input type='checkbox' name="filters[]" value="Hostel" id="Hostel"> Hostel</input><br>
				            <input type='checkbox' name="filters[]" value="Hotel" id="Hotel"> Hotel</input><br>
				            <input type='checkbox' name="filters[]" value="Inn" id="Inn"> Inn</input><br>
				            <input type='checkbox' name="filters[]" value="Lodge" id="Lodge"> Lodge</input><br>
				            <input type='checkbox' name="filters[]" value="Motel" id="Motel"> Motel</input><br>
				            <input type='checkbox' name="filters[]" value="Motor Lodge" id="Motor Lodge"> Motor Lodge</input><br>

				        </div>

				        <div class="col-md-6">

				            <h2 class="titlepad">Type</h2>

				            <input type='checkbox' name="filters[]" value="Single bed" id="Single bed"> Single bed</input><br>
				            <input type='checkbox' name="filters[]" value="Double bed" id="Double bed"> Double bed</input><br>
				            <input type='checkbox' name="filters[]" value="Queen bed" id="Queen bed"> Queen bed</input><br>
				            <input type='checkbox' name="filters[]" value="King bed" id="King bed"> King bed</input><br>
				            <input type='checkbox' name="filters[]" value="Private room" id="Private room"> Private room</input><br>
				            <input type='checkbox' name="filters[]" value="Shared room" id="Shared room"> Shared room</input><br>
				            <input type='checkbox' name="filters[]" value="Short term" id="Short term"> Short term</input><br>
				            <input type='checkbox' name="filters[]" value="Long term" id="Long term"> Long term</input><br>
				            <input type='checkbox' name="filters[]" value="1 night minimum" id="1 night minimum"> 1 night minimum</input><br>
				            <input type='checkbox' name="filters[]" value="2 nights minimum" id="2 nights minimum"> 2 nights minimum</input><br>
				            <input type='checkbox' name="filters[]" value="3 nights minimum" id="3 nights minimum"> 3 nights minimum</input><br>
				            <input type='checkbox' name="filters[]" value="4+ nights minimum" id="4+ nights minimum"> 4 or more nights minimum</input><br>

				        </div>

				    </div>
				    <div class="col-md-12">

				        <div class="col-md-6">

				            <h2 class="titlepad">Cost</h2>

				            <input type='checkbox' name="filters[]" value="under $50, under fifty dollars, under 50 dollars" id="under50"> Under $50 per night</input><br>
				            <input type='checkbox' name="filters[]" value="under $100, under one hundred dollars, under 100 dollars" id="under100"> Under $100 per night</input><br>
				            <input type='checkbox' name="filters[]" value="under $200, under two hundred dollars, under 200 dolars" id="under200"> Under $200 per night</input><br>
				            <input type='checkbox' name="filters[]" value="over $200, over two hundred dollars, over 200 dolars" id="over200"> Over $200 per night</input><br>
				            <input type='checkbox' name="filters[]" value="under $100 per week, under one hundred dollars per week, under 100 dollars per week" id="under100"> Under $100 per week</input><br>
				            <input type='checkbox' name="filters[]" value="under $200 per week, under two hundred dollars per week, under 200 dollars per week" id="under200"> Under $200 per week</input><br>
				            <input type='checkbox' name="filters[]" value="under $300 per week, under three hundred dollars per week, under 300 dollars per week" id="under300"> Under $300 per week</input><br>
				            <input type='checkbox' name="filters[]" value="over $300 per week, over three hundred dollars per week, over 300 dollars per week" id="over300"> Over $300 per week</input><br>
				            <input type='checkbox' name="filters[]" value="Single" id="Single"> Single</input><br>
				            <input type='checkbox' name="filters[]" value="Twin-share" id="Twin-share"> Twin-share</input><br>

				        </div>

				        <div class="col-md-6">

				            <h2 class="titlepad">Extras</h2>

				            <input type='checkbox' name="filters[]" value="Bedding" id="Bedding"> Bedding</input><br>
				            <input type='checkbox' name="filters[]" value="Breakfast" id="Breakfast"> Breakfast available</input><br>
				            <input type='checkbox' name="filters[]" value="Closet Drawers" id="Closet Drawers"> Closet / Drawers</input><br>
				            <input type='checkbox' name="filters[]" value="Cot Highchair" id="Cot Highchair"> Cot / Highchair</input><br>
				            <input type='checkbox' name="filters[]" value="Desk Chair" id="Desk Chair"> Desk / Chair</input><br>
				            <input type='checkbox' name="filters[]" value="Dinner" id="Dinner"> Dinner available</input><br>
				            <input type='checkbox' name="filters[]" value="Fridge" id="Fridge"> Fridge</input><br>
				            <input type='checkbox' name="filters[]" value="Kettle Toaster" id="Kettle Toaster"> Kettle / Toaster</input><br>
				            <input type='checkbox' name="filters[]" value="Laundry" id="Laundry"> Laundry</input><br> 
				            <input type='checkbox' name="filters[]" value="Plates Cups Cutlery" id="Plates Cups Cutlery"> Plates / Cups / Cutlery</input><br>
				            <input type='checkbox' name="filters[]" value="Microwave" id="Microwave"> Microwave</input><br>  
				            <input type='checkbox' name="filters[]" value="Oven Stove" id="Oven Stove"> Oven / Stove</input><br>           
				            <input type='checkbox' name="filters[]" value="Parking" id="Parking"> Parking</input><br>
				            <input type='checkbox' name="filters[]" value="Pool Spa" id="Pool Spa"> Pool / Spa</input><br>
				            <input type='checkbox' name="filters[]" value="Room service" id="Room service"> Room service</input><br>
				            <input type='checkbox' name="filters[]" value="Secure bicycle storage" id="Secure bicycle storage"> Secure bicycle storage</input><br>
				            <input type='checkbox' name="filters[]" value="Shower" id="Shower"> Shower</input><br>
				            <input type='checkbox' name="filters[]" value="Telephone" id="Telephone"> Telephone</input><br>
				            <input type='checkbox' name="filters[]" value="Television" id="Television"> Television</input><br>
				            <input type='checkbox' name="filters[]" value="Television channels" id="Television channels"> Television channels</input><br>
				            <input type='checkbox' name="filters[]" value="Storage" id="Storage"> Storage</input><br>
				            <input type='checkbox' name="filters[]" value="Toilet" id="Toilet"> Toilet</input><br>
				            <input type='checkbox' name="filters[]" value="Towels" id="Towels"> Towels</input><br>

				        </div>

				    </div>
				    <div class="col-md-12 twentyunderpad">

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