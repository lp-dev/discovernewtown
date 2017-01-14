<?php include 'header.php'; ?>

    <div class="container conmarg">
	  
	  <div class="col-md-3 middlebtmpad" id="col1">
        <a  href="emergency.php"><button type="button" class="btn btn-default headerelement stretch"><img class="filterimg" src="img/menu/e.png" alt="filter"></img>Emergency</button></a>
      </div>

	  <div class="col-md-6 middlebtmpad" id="col2">

	  	<h1>Filter listings</h1><hr>

		<form id="filterform" role="search" method="POST" action="results_em.php">

				<h4>Please choose any filters to apply.</h4>

				<div id='emergencyfilter'>

					<h2 class="titlepad">Subcategories.</h2>

				    <input type='checkbox' name="filters[]" value="Hospital" id="hospital">Hospital</input>

				    <h2 class="titlepad">Additional filter options for your listing.</h2>

				    <p>Type:</p>
				    
					<p class="checkpad">Cost:</p>
				  
				    <p class="checkpad">Extras:</p>
				    
				    <p class="checkpad">Features:</p>
				    
				</div>


				<div class="col-lg-12 fieldbuffer">
					<input type="submit" class="btn btn-default" value="Apply">
					<input type="reset" class="btn btn-default" value="Reset">
				</div>

		</form>

<!-- 		<form class="input-group headerelement" role="search" method="POST" action="resultsfood+drink.php">
              <input type="text" class="form-control" name="searchterm" id="searchterm" placeholder="Search all listings">
              <span class="input-group-btn">
              	<button class="btn btn-default" type="submit" value="Search">Search</button>
              </span>
        </form> -->

	  </div>

	  <div class="col-md-3 middlebtmpad" id="col3">

<?php include 'blank.php'; ?>
		
<?php include 'footer.php'; ?>