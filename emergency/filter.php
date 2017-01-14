<?php include '../headerp.php'; ?>

    <div class="container conmarg">
	  
	  <div class="col-md-3 middlebtmpad" id="col1">
	  	<?php include '../menu/addsearchp.php'; ?>
 		<?php include '../menu/addmenup.php'; ?>
        <a  href="../emergency"><button type="button" class="btn btn-default headerelement stretch"><img class="filterimg" src="../img/menu/e.png" alt="filter"></img>Emergency</button></a>
      </div>

	  <div class="col-md-6 middlebtmpad" id="col2">

	  	<h1>Filter listings</h1><hr>

		<form id="filterform" name="filterform" role="search" method="POST" action="results.php" >

				<h4>Please choose any filters to apply.</h4>

				<div id='emergencyfilter'>

				    <div class="col-md-12">

				        <div class="col-md-6">

				            <h2 class="titlepad">Subcategories</h2>

							<input type='checkbox' name="filters[]" value="Dentist" id="Dentist"> Dentist</input><br>
				            <input type='checkbox' name="filters[]" value="Doctor" id="Doctor"> Doctor</input><br>
				            <input type='checkbox' name="filters[]" value="Pharmacy" id="Pharmacy"> Pharmacy</input><br>

				        </div>

				        <div class="col-md-6">

				            <h2 class="titlepad">Type</h2>

				            <input type='checkbox' name="filters[]" value="Daytime" id="Daytime"> Daytime hours</input><br>
				            <input type='checkbox' name="filters[]" value="Late" id="Late"> Late hours</input><br>
				            <input type='checkbox' name="filters[]" value="24 hours" id="24 hours"> 24 hours</input><br>

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

				        <div class="col-md-6">
				            <p></p>
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