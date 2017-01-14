<?php include 'header.php'; ?>

    <div class="container conmarg">
	  
	  <div class="col-md-3 middlebtmpad" id="col1">
	  	<?php include 'menu/addsearch.php'; ?>
 		<?php include 'menu/addmenu.php'; ?>
        <a  href="food+drink.php"><button type="button" class="btn btn-default headerelement stretch"><img class="filterimg" src="img/menu/f.png" alt="filter"></img>Food & Drink</button></a>
      </div>

	  <div class="col-md-6 middlebtmpad" id="col2">

	  	<h1>Filter listings</h1><hr>

		<form id="filterform" name="filterform" role="search" method="POST" action="resultsFD.php" >
		<!-- <form id="filterform" name="filterform" role="search" method="POST" action="resultsFD.php" onsubmit="openWin()"> -->
		<!-- <form id="filterform" name="filterform" role="search" method="POST" action="resultsFD.php" onsubmit="return storeValues(this);"> -->

				<h4>Please choose any filters to apply.</h4>

				<div id='fooddrinkfilter'>

				    <div class="col-md-12">

				        <div class="col-md-6">

				            <h2 class="titlepad">Subcategories</h2>

				            <input type='checkbox' name="filters[]" value="Bakery" id="bakery"> Bakery</input><br>
				            <input type='checkbox' name="filters[]" value="Bar" id="bar"> Bar</input><br>
				            <input type='checkbox' name="filters[]" value="Cafe" id="cafe"> Cafe</input><br>
				            <input type='checkbox' name="filters[]" value="Dairy" id="dairy"> Convience Store / Dairy</input><br>
				            <input type='checkbox' name="filters[]" value="Fastfood" id="fast food"> Fast food</input><br>
				            <input type='checkbox' name="filters[]" value="Restaurant" id="restaurant"> Restaurant</input><br>
				            <input type='checkbox' name="filters[]" value="Store" id="store"> Store</input><br>
				            <input type='checkbox' name="filters[]" value="Speciality" id="speciality"> Speciality</input><br>
				            <input type='checkbox' name="filters[]" value="Supermarket" id="supermarket"> Supermarket</input><br>
				            <input type='checkbox' name="filters[]" value="Takeaway" id="takeaway"> Takeaway</input><br>

				        </div>

				        <div class="col-md-6">

				            <h2 class="titlepad">Type</h2>

				            <input type='checkbox' name="filters[]" value="Africa" id="Africa"> African</input><br>
				            <input type='checkbox' name="filters[]" value="American" id="american"> American</input><br>
				            <input type='checkbox' name="filters[]" value="Asia" id="Asia"> Asia</input><br>
				            <input type='checkbox' name="filters[]" value="Australian" id="Australian"> Australian</input><br>
				            <input type='checkbox' name="filters[]" value="British" id="British"> British</input><br>
				            <input type='checkbox' name="filters[]" value="Chinese" id="chinese"> Chinese</input><br>
				            <input type='checkbox' name="filters[]" value="Columbian" id="columbian"> Columbian</input><br>
				            <input type='checkbox' name="filters[]" value="Europe" id="Europe"> Europe</input><br>
				            <input type='checkbox' name="filters[]" value="Italian" id="italian"> Italian</input><br>
				            <input type='checkbox' name="filters[]" value="Indian" id="indian"> Indian</input><br>
				            <input type='checkbox' name="filters[]" value="French" id="french"> French</input><br>
				            <input type='checkbox' name="filters[]" value="German" id="German"> German</input><br>
				            <input type='checkbox' name="filters[]" value="Japanese" id="japanese"> Japanese</input><br>
				            <input type='checkbox' name="filters[]" value="Mexican" id="mexican"> Mexican</input><br>
				            <input type='checkbox' name="filters[]" value="Middle East" id="Middle East"> Middle East</input><br>
				            <input type='checkbox' name="filters[]" value="New Zealand" id="new zealand"> New Zealand</input><br>
				            <input type='checkbox' name="filters[]" value="North America" id="North America"> North America</input><br>
				            <input type='checkbox' name="filters[]" value="Pacific" id="Pacific"> Pacific</input><br>
				            <input type='checkbox' name="filters[]" value="South America" id="South America"> South America</input><br>
				            <input type='checkbox' name="filters[]" value="South East Asia" id="South East Asia"> South East Asia</input><br>
				            <input type='checkbox' name="filters[]" value="Turkish" id="Turkish"> Turkish</input><br>
				            <input type='checkbox' name="filters[]" value="Thai" id="thai"> Thai</input><br>

				        </div>

				    </div>
				    <div class="col-md-12">

				        <div class="col-md-6">

				            <h2 class="titlepad">Cost</h2>
				            <h5>Highest cost of single dish</h5>
				            <input type='checkbox' name="filters[]" value="Under $15, under fifteen dollars, under 15 dollars" id="under15"> Under $15</input><br>
				            <input type='checkbox' name="filters[]" value="Under $25, under twenty-five dollars, under 25 dollars" id="under25"> Under $25</input><br>
				            <input type='checkbox' name="filters[]" value="Under $30, under thirty dollars, under 30 dollars" id="under30"> Under $30</input><br>
				            <input type='checkbox' name="filters[]" value="Under $40, under forty dollars, under 40 dollars" id="under40"> Under $40</input><br>
				            <input type='checkbox' name="filters[]" value="Under $50, under fifty dollars, under 50 dollars" id="under50"> Under $50</input><br>
				            <input type='checkbox' name="filters[]" value="Under $100, under one hundred dollars, under 100 dollars" id="under100"> Under $100</input><br>

				        </div>

				        <div class="col-md-6">

				            <h2 class="titlepad">Extras</h2>

				            <input type='checkbox' name="filters[]" value="B.Y.O." id="byo"> B.Y.O.</input><br>
				            <input type='checkbox' name="filters[]" value="Coffee" id="coffee"> Coffee</input><br>
				            <input type='checkbox' name="filters[]" value="Gluten Free" id="glutenfree"> Gluten Free</input><br>
				            <input type='checkbox' name="filters[]" value="Halal" id="halal"> Halal</input><br>
				            <input type='checkbox' name="filters[]" value="Licensed" id="licensed"> Licensed</input><br>
				            <input type='checkbox' name="filters[]" value="Organic" id="organic"> Organic</input><br>
				            <input type='checkbox' name="filters[]" value="Vegan" id="vegan"> Vegan</input><br>
				            <input type='checkbox' name="filters[]" value="Vegetarian" id="vegetarian"> Vegetarian</input><br>
				            <input type='checkbox' name="filters[]" value="Cash only" id="Cashonly"> Cash only</input><br>
				            <input type='checkbox' name="filters[]" value="Credit / EFTPOS cards accepted" id="CreditEFTPOS"> Credit / EFTPOS cards accepted</input><br>

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

				<button type="submit" value="Apply" class="btn btn-default headerelement stretch twentypad"><img class="joinimg" src="img/btns/confirm.png" alt="confirm">Apply filters</img></button>
	        	<button type="reset" value="Reset" class="btn btn-default headerelement stretch"><img class="joinimg" src="img/btns/close.png" alt="reset">Reset filters</img></button>

				<!-- <div class="col-lg-12 fieldbuffer twentypad"> -->
					<!-- <input type="submit" class="btn btn-default" id="savefilters" value="Apply"> --></input>
				<!-- 	<input type="submit" class="btn btn-default" id="savefilters" value="Apply"></input>
					<input type="reset" class="btn btn-default" value="Reset"></input>
				</div> -->

		</form>

<!-- 		<form class="input-group headerelement" role="search" method="POST" action="resultsfood+drink.php">
              <input type="text" class="form-control" name="searchterm" id="searchterm" placeholder="Search all listings">
              <span class="input-group-btn">
              	<button class="btn btn-default" type="submit" value="Search">Search</button>
              </span>
        </form> -->

	  </div>

	  <div class="col-md-3 middlebtmpad" id="col3">


	  </div>
		
<?php include 'footer.php'; ?>