<?php include '../headerp.php'; ?>

    <div class="container conmarg">
	  
	  <div class="col-md-3 middlebtmpad" id="col1">
	  	<?php include '../menu/addsearchp.php'; ?>
 		<?php include '../menu/addmenup.php'; ?>
        <a  href="../retail+shopping"><button type="button" class="btn btn-default headerelement stretch"><img class="filterimg" src="../img/menu/r.png" alt="filter"></img>Retail & Shopping</button></a>
      </div>

	  <div class="col-md-6 middlebtmpad" id="col2">

	  	<h1>Filter listings</h1><hr>

		<form id="filterform" name="filterform" role="search" method="POST" action="results.php" >

				<h4>Please choose any filters to apply.</h4>

				<div id='retail+shoppingfilter'>

					<div class="col-md-12">

				      	<div class="col-md-6">

				            <h2 class="titlepad">Subcategories</h2>

				            <input type='checkbox' name="filters[]" value="Books Magazines" id="BooksMagazines"> Books / Magazines</input><br>
				             <input type='checkbox' name="filters[]" value="Building" id="Building"> Building</input><br>
				            <input type='checkbox' name="filters[]" value="Clothing" id="Clothing"> Clothing</input><br>
				            <input type='checkbox' name="filters[]" value="Computers" id="Computers"> Computers</input><br>
				             <input type='checkbox' name="filters[]" value="Electrical" id="Electrical"> Electrical</input><br>
				            <input type='checkbox' name="filters[]" value="Electronics" id="Electronics"> Electronics</input><br>
				            <input type='checkbox' name="filters[]" value="Equipment" id="Equipment"> Equipment</input><br>
				            <input type='checkbox' name="filters[]" value="Florist" id="Florist"> Florist</input><br>
				            <input type='checkbox' name="filters[]" value="Footwear" id="Footwear"> Footwear</input><br>
				            <input type='checkbox' name="filters[]" value="Furnishings" id="Furnishings"> Furnishings</input><br>
				            <input type='checkbox' name="filters[]" value="General store" id="GeneralStore"> General store</input><br>
				            <input type='checkbox' name="filters[]" value="Hardware" id="Hardware"> Hardware</input><br>
				            <input type='checkbox' name="filters[]" value="Hire" id="Hire"> Hire</input><br>
				            <input type='checkbox' name="filters[]" value="Hobby Crafts" id="HobbyCrafts"> Hobby / Crafts</input><br>
				            <input type='checkbox' name="filters[]" value="Jewellers" id="Jewellers"> Jewellers</input><br>
				            <input type='checkbox' name="filters[]" value="Paint" id="Paint"> Paint</input><br>
				            <input type='checkbox' name="filters[]" value="Pharmacy" id="Pharmacy"> Pharmacy</input><br>
				             <input type='checkbox' name="filters[]" value="Plumbing" id="Plumbing"> Plumbing</input><br>
				            <input type='checkbox' name="filters[]" value="Safety" id="Safety"> Safety</input><br>
				            <input type='checkbox' name="filters[]" value="Sports" id="Sports"> Sports</input><br>
				            <input type='checkbox' name="filters[]" value="Tools" id="Tools"> Tools</input><br>
				            <input type='checkbox' name="filters[]" value="Secondhand Antiques" id="SecondhandAntiques"> Secondhand / Antiques</input><br>
				            <input type='checkbox' name="filters[]" value="Whiteware" id="Whiteware"> Whiteware</input><br>
			
				        </div>

				        <div class="col-md-6">

				            <h2 class="titlepad">Features</h2>

				            <input type='checkbox' name="features[]" value="Wifi" id="wifi"> Free Wifi</input><br>
				            <input type='checkbox' name="features[]" value="Wheelchair friendly" class="wheelchairfriendly"> Wheelchair friendly</input><br>
				            <input type='checkbox' name="features[]" value="Children friendly" class="childrenfriendly"> Children friendly</input><br>
				            <input type='checkbox' name="features[]" value="Dog friendly" class="dogfriendly"> Dog friendly</input><br>
				            <input type='checkbox' name="features[]" value="Bike friendly" class="bikefriendly"> Bike friendly</input><br>
				            <input type='checkbox' name="features[]" value="Accessible toilet" class="accesibletoilet"> Accessible toilet</input><br>
				            <input type='checkbox' name="features[]" value="Female toilet" class="femaletoilet"> Female toilet</input><br>
				            <input type='checkbox' name="features[]" value="Male toilet" class="maletoilet"> Male toilet</input><br> 

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