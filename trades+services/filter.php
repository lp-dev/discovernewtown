<?php include '../headerp.php'; ?>

    <div class="container conmarg">
	  
	  <div class="col-md-3 middlebtmpad" id="col1">
	  	<?php include '../menu/addsearchp.php'; ?>
 		<?php include '../menu/addmenup.php'; ?>
        <a  href="../trades+services"><button type="button" class="btn btn-default headerelement stretch"><img class="filterimg" src="../img/menu/t.png" alt="filter"></img>Trades & Services</button></a>
      </div>

	  <div class="col-md-6 middlebtmpad" id="col2">

	  	<h1>Filter listings</h1><hr>

		<form id="filterform" name="filterform" role="search" method="POST" action="results.php" >

				<h4>Please choose any filters to apply.</h4>

				<div id='tradesservicesfilter'>

					<div class="col-md-12">

				        <div class="col-md-6">

				            <h2 class="titlepad">Subcategories</h2>

				            <input type='checkbox' name="filters[]" value="Architecture" id="Architecture"> Architecture</input><br>
				            <input type='checkbox' name="filters[]" value="Bicycle mechanic" id="Bicycle mechanic"> Bicycle mechanic</input><br>
				            <input type='checkbox' name="filters[]" value="Builder" id="Builder"> Builder</input><br>
				            <input type='checkbox' name="filters[]" value="Carpenter" id="Carpenter"> Carpenter</input><br>
				            <input type='checkbox' name="filters[]" value="Citizens Advice Bureau" id="Citizens Advice Bureau"> Citizens Advice Bureau</input><br>
				            <input type='checkbox' name="filters[]" value="Cleaning" id="Cleaning"> Cleaning</input><br>
				            <input type='checkbox' name="filters[]" value="Design" id="Design"> Design</input><br>
				            <input type='checkbox' name="filters[]" value="Electrical" id="Electrical"> Electrical</input><br>
				            <input type='checkbox' name="filters[]" value="Florist" id="Florist"> Florist</input><br>
				            <input type='checkbox' name="filters[]" value="Glass" id="Glass"> Glass</input><br>
				            <input type='checkbox' name="filters[]" value="Government" id="Government"> Government</input><br>
				            <input type='checkbox' name="filters[]" value="Hire" id="Hire"> Hire</input><br>
				            <input type='checkbox' name="filters[]" value="Laundry Drycleaners" id="LaundryDrycleaners"> Laundry / Drycleaners</input><br>
				            <input type='checkbox' name="filters[]" value="Lawyer" id="Lawyer"> Lawyer</input><br>
				            <input type='checkbox' name="filters[]" value="Maintenance Property" id="Maintenance Property"> Maintenance / Property</input><br>
				            <input type='checkbox' name="filters[]" value="Painters Decorators" id="Painters Decorators"> Painters / Decorators</input><br>
				            <input type='checkbox' name="filters[]" value="Pet care" id="Pet care"> Pet care</input><br>
				            <input type='checkbox' name="filters[]" value="Photography" id="Photography"> Photography</input><br>
				            <input type='checkbox' name="filters[]" value="Plumbing" id="Plumbing"> Plumbing</input><br>
				            <input type='checkbox' name="filters[]" value="Post" id="Post"> Post</input><br>
				            <input type='checkbox' name="filters[]" value="Printing" id="Printing"> Printing</input><br>
				            <input type='checkbox' name="filters[]" value="Property" id="Property"> Property</input><br>
				            <input type='checkbox' name="filters[]" value="Property services" id="Property services"> Property services</input><br>
				            <input type='checkbox' name="filters[]" value="Public service" id="Public service"> Public service</input><br>
				            <input type='checkbox' name="filters[]" value="RealEstate" id="RealEstate"> Real Estate</input><br>
				            <input type='checkbox' name="filters[]" value="Roofing" id="Roofing"> Roofing</input><br>
				            <input type='checkbox' name="filters[]" value="Storage" id="Storage"> Storage</input><br>
				            <input type='checkbox' name="filters[]" value="Travel agency" id="Travel agency"> Travel agency</input><br>

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