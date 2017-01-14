<?php include '../headerp.php'; ?>

    <div class="container conmarg">
	  
	  <div class="col-md-3 middlebtmpad" id="col1">
	  	<?php include '../menu/addsearchp.php'; ?>
 		<?php include '../menu/addmenup.php'; ?>
        <a  href="../education"><button type="button" class="btn btn-default headerelement stretch"><img class="filterimg" src="../img/menu/e.png" alt="filter"></img>Education</button></a>
      </div>

	  <div class="col-md-6 middlebtmpad" id="col2">

	  	<h1>Filter listings</h1><hr>

		<form id="filterform" name="filterform" role="search" method="POST" action="results.php" >

				<h4>Please choose any filters to apply.</h4>

				<div id='educationfilter'>

					<div class="col-md-12">

				        <div class="col-md-6">

				            <h2 class="titlepad">Subcategories</h2>

				            <input type='checkbox' name="filters[]" value="Childcare" id="Childcare"> Childcare</input><br>
				            <input type='checkbox' name="filters[]" value="Early childhood" id="Early childhood"> Early childhood</input><br>
				            <input type='checkbox' name="filters[]" value="Library" id="Library"> Library</input><br>
				            <input type='checkbox' name="filters[]" value="Primary" id="Primary"> Primary</input><br>
				            <input type='checkbox' name="filters[]" value="College" id="College"> College</input><br>
				            <input type='checkbox' name="filters[]" value="Tertiary" id="Tertiary"> Tertiary</input><br>

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