<?php include '../headerp.php'; ?>

    <div class="container conmarg">
	  
	  <div class="col-md-3 middlebtmpad" id="col1">
	  	<?php include '../menu/addsearchp.php'; ?>
 		<?php include '../menu/addmenup.php'; ?>
        <a  href="../automotive"><button type="button" class="btn btn-default headerelement stretch"><img class="filterimg" src="../img/menu/a.png" alt="filter"></img>Automotive</button></a>
      </div>

	  <div class="col-md-6 middlebtmpad" id="col2">

	  	<h1>Filter listings</h1><hr>

		<form id="filterform" name="filterform" role="search" method="POST" action="results.php" >

				<h4>Please choose any filters to apply.</h4>

				<div id='automotivefilter'>

				<div class="col-md-12">

			        <div class="col-md-6">

			            <h2 class="titlepad">Subcategories</h2>

			            <input type='checkbox' name="filters[]" value="Audio" id="Audio"> Audio</input><br>
			            <input type='checkbox' name="filters[]" value="Customisation" id="Customisation"> Customisation</input><br>
			            <input type='checkbox' name="filters[]" value="Dealer" id=""> Dealer</input><br>
			            <input type='checkbox' name="filters[]" value="Electrical" id="Electrical"> Electrical</input><br>
			            <input type='checkbox' name="filters[]" value="Mechanic" id="Mechanic"> Mechanic</input><br>
			            <input type='checkbox' name="filters[]" value="Parts" id="Parts"> Parts</input><br>
			            <input type='checkbox' name="filters[]" value="Repair" id="Repair"> Repair</input><br>
			            <input type='checkbox' name="filters[]" value="Service station" id="Service station"> Service station</input><br>
			            <input type="text" name="filters[]" id="OtherAusubcategory" placeholder="Add own suggestion"></input>
			            <!-- <input type='checkbox' name="subcategory[]" value="OtherAuSub" id="OtherAuSub"> Other</input><br> -->

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