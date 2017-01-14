<?php include '../headerp.php'; ?>

    <div class="container conmarg">
	  
	  <div class="col-md-3 middlebtmpad" id="col1">
	  	<?php include '../menu/addsearchp.php'; ?>
 		<?php include '../menu/addmenup.php'; ?>
        <a  href="../health+beauty"><button type="button" class="btn btn-default headerelement stretch"><img class="filterimg" src="../img/menu/h.png" alt="filter"></img>Health & Beauty</button></a>
      </div>

	  <div class="col-md-6 middlebtmpad" id="col2">

	  	<h1>Filter listings</h1><hr>

		<form id="filterform" name="filterform" role="search" method="POST" action="results.php" >

				<h4>Please choose any filters to apply.</h4>

				<div id='healthbeautyfilter'>

				    <div class="col-md-12">

				        <div class="col-md-6">

				            <h2 class="titlepad">Subcategories</h2>

				            <input type='checkbox' name="filters[]" value="Beauty" id="Beauty"> Beauty</input><br>
				            <input type='checkbox' name="filters[]" value="Eyebrow" id="Eyebrow"> Eyebrow</input><br>
				            <input type='checkbox' name="filters[]" value="Eyelash" id="Eyelash"> Eyelash</input><br>
				            <input type='checkbox' name="filters[]" value="Facial" id="Facial"> Facial</input><br>
				            <input type='checkbox' name="filters[]" value="General health" id="General health"> General health</input><br>
				            <input type='checkbox' name="filters[]" value="Hairdresser" id="Hairdresser"> Hairdresser</input><br>
				            <input type='checkbox' name="filters[]" value="Manicure" id="Manicure"> Manicure</input><br>
				            <input type='checkbox' name="filters[]" value="Massage" id="Massage"> Massage</input><br>
				            <input type='checkbox' name="filters[]" value="Pedicure" id="Pedicure"> Pedicure</input><br>
				            <input type='checkbox' name="filters[]" value="Prescription" id="Prescription"> Prescription</input><br>
				            <input type='checkbox' name="filters[]" value="Pharmacy" id="Pharmacy"> Pharmacy</input><br>
				            <input type='checkbox' name="filters[]" value="Products Supplies" id="ProductsSupplies"> Products / Supplies</input><br>
				            <input type='checkbox' name="filters[]" value="Nails" id="Nails"> Nails</input><br>
				            <input type='checkbox' name="filters[]" value="Skincare" id="Skincare"> Skincare</input><br>
				            <input type='checkbox' name="filters[]" value="Spray tan" id="SprayTan"> Spray tan</input> <br>         
				            <input type='checkbox' name="filters[]" value="Sunbed" id="Sunbed"> Sunbed</input><br>
				            <input type='checkbox' name="filters[]" value="Supplements Nutrition" id="SupplementsNutrition"> Supplements / Nutrition</input><br>
				            <input type='checkbox' name="filters[]" value="Waxing" id="Waxing"> Waxing</input><br>
				            

				        </div>

				        <div class="col-md-6">

				            <h2 class="titlepad">Extras</h2>

				            <input type='checkbox' name="filters[]" value="Appointment" id="Appointment"> Appointment</input><br>
				            <input type='checkbox' name="filters[]" value="Walk-in" id="Walk-in"> Walk-in</input><br>
				            

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