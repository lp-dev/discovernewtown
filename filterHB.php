<?php include 'header.php'; ?>

    <div class="container conmarg">
	  
	  <div class="col-md-3 middlebtmpad" id="col1">
	  	<?php include 'menu/addsearch.php'; ?>
 		<?php include 'menu/addmenu.php'; ?>
        <a  href="food+drink.php"><button type="button" class="btn btn-default headerelement stretch"><img class="filterimg" src="img/menu/f.png" alt="filter"></img>Food & Drink</button></a>
      </div>

	  <div class="col-md-6 middlebtmpad" id="col2">

	  	<h1>Filter listings</h1><hr>

		<form id="filterform" name="filterform" role="search" method="POST" action="resultsHB.php" >
		<!-- <form id="filterform" name="filterform" role="search" method="POST" action="resultsFD.php" onsubmit="openWin()"> -->
		<!-- <form id="filterform" name="filterform" role="search" method="POST" action="resultsFD.php" onsubmit="return storeValues(this);"> -->

				<h4>Please choose any filters to apply.</h4>

				<div id='fooddrinkfilter'>

				    <div class="col-md-12">

				        <div class="col-md-6">

				            <h2 class="titlepad">Subcategories</h2>

				            <input type='checkbox' name="filters[]" value="Massage" id="Massage"> Massage</input><br>

				        </div>

				        <div class="col-md-6">

				            <h2 class="titlepad">Type</h2>

				            

				        </div>

				    </div>
				    <div class="col-md-12">

				        <div class="col-md-6">

				            <h2 class="titlepad">Cost</h2>
				            

				        </div>

				        <div class="col-md-6">

				            <h2 class="titlepad">Extras</h2>

				            

				        </div>

				    </div>
				    <div class="col-md-12 twentyunderpad">

				        <div class="col-md-6">

				        <h2 class="titlepad">Features</h2>

				            

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