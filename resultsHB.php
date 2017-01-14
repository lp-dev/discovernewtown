<?php include 'header.php'; ?>

    <div class="container conmarg">

      <div class="col-md-3" id="col1">
        <!-- <a  href="food+drink.php"><button type="button" class="btn btn-default headerelement stretch"><img class="filterimg" src="img/menu/f.png" alt="filter"></img>Food & Drink</button></a> -->
           	<?php include 'menu/addsearch.php'; ?>
 			<?php include 'menu/addmenu.php'; ?>
			<!-- <a  href="filterFD.php"><button type="button" class="btn btn-default headerelement stretch"><img class="filterimg" src="img/btns/filter.png" alt="filter"></img>Refine results</button></a> -->
			<!-- <button type="button" class="btn btn-default headerelement stretch"><img class="filterimg" src="img/btns/filter.png" alt="filter"></img>Refine results</button> -->
<!-- 			<button type="button" class="btn btn-default headerelement stretch" onclick="closeWin()"><img class="filterimg" src="img/btns/filter.png" alt="filter"></img>Refine results</button>
 -->

     </div>

		<div class="col-md-9" id="col2">

			<h1>Exact match results</h1><hr> 

				<?php

					include 'connect.php';

			        if($db->connect_errno > 0){
			            die('Unable to connect to database [' . $db->connect_error . ']');
			        }

			        //$searchterm = "active";
			        $active = "yes";
			        $premium = "special";
			      	$category = "Health+Beauty";

			        $searchTerms = $_POST['filters'];
			        // DOESN'T WORK WITH ARRAYS ---> $searchTerms = mysqli_real_escape_string($_POST['subcategory']);


					// DON'T HAVE TO EXPLODE BECAUSE IT'S AN ARRAY ---> $searchTerms = explode(' ', $subcategory);
					$searchTermBits = array();
					foreach ($searchTerms as $term) {
					    $term = trim($term);
					    if (!empty($term)) {
					        $searchTermBits[] = "Filters LIKE '%$term%'";
					    }
					}

					$sql3 = "SELECT * FROM `dnlistings` WHERE `Active` LIKE '%$active%' AND `Premium` LIKE '$premium' AND `Category` LIKE '%$category%' AND ".implode(' AND ', $searchTermBits)." ORDER BY RAND();";

			        //$sql = " SELECT * FROM `dnlistings` WHERE ( `Active` LIKE '%$active%'
			        //AND `Premium` LIKE '%$premium%' AND `Category` LIKE '%$category%' );
			        //AND ".implode(' OR ', $searchTermBits)." ";


					//if(!$result = $db->query($sql)){
			        //    die('Error, that\'s not good!<br> Please let us know and quote this:<br><br> [' . $db->error . ']');
			        //} 

			        if(!$result = $db->query($sql3)){
			            //die('<h4>No premium listings found.</h4>');
			            die('');
			        } 

			        // while($row = $result->fetch_assoc()){
			        //  echo "<b>" .$row ['name'] . " - </b>" .$row ['about'] . " <i>" . $row['tags'] . "</i><div class=\"feedspacer\"></div>" ;
			        // }

			        while($row = $result->fetch_assoc()){
			            // echo "<p>" . $row ['Business'] . " </p><br/>";

					include 'listings/premium.php';

			        }

			        $result = $db->query("SELECT COUNT(*) AS totalentries FROM `dnlistings` WHERE '$active' = !true AND '$premium' = !true;");
			        $row = $result->fetch_assoc();
			        //echo "<br><hr>".$row['totalentries']." entries in database (<b>FIX THIS FEATURE LATER - # RESULTS</b>)";

			       	$result->close();

			        $db->close();

				?> 

				<?php

					include 'connect.php';

			        if($db->connect_errno > 0){
			            die('Unable to connect to database [' . $db->connect_error . ']');
			        }

			        //$searchterm = "active";
			        $active = "yes";
			        $premium = "yes";
			      	$category = "Health+Beauty";

			        $searchTerms = $_POST['filters'];
			        // DOESN'T WORK WITH ARRAYS ---> $searchTerms = mysqli_real_escape_string($_POST['subcategory']);


					// DON'T HAVE TO EXPLODE BECAUSE IT'S AN ARRAY ---> $searchTerms = explode(' ', $subcategory);
					$searchTermBits = array();
					foreach ($searchTerms as $term) {
					    $term = trim($term);
					    if (!empty($term)) {
					        $searchTermBits[] = "Filters LIKE '%$term%'";
					    }
					}

					$sql = "SELECT * FROM `dnlistings` WHERE `Active` LIKE '%$active%' AND `Premium` LIKE '$premium' AND `Category` LIKE '%$category%' AND ".implode(' AND ', $searchTermBits)." ORDER BY RAND();";

			        //$sql = " SELECT * FROM `dnlistings` WHERE ( `Active` LIKE '%$active%'
			        //AND `Premium` LIKE '%$premium%' AND `Category` LIKE '%$category%' );
			        //AND ".implode(' OR ', $searchTermBits)." ";


					//if(!$result = $db->query($sql)){
			        //    die('Error, that\'s not good!<br> Please let us know and quote this:<br><br> [' . $db->error . ']');
			        //} 

			        if(!$result = $db->query($sql)){
			            //die('<h4>No premium listings found.</h4>');
			            die('');
			        } 

			        // while($row = $result->fetch_assoc()){
			        //  echo "<b>" .$row ['name'] . " - </b>" .$row ['about'] . " <i>" . $row['tags'] . "</i><div class=\"feedspacer\"></div>" ;
			        // }

			        while($row = $result->fetch_assoc()){
			            // echo "<p>" . $row ['Business'] . " </p><br/>";

					include 'listings/premium.php';

			        }

			        $result = $db->query("SELECT COUNT(*) AS totalentries FROM `dnlistings` WHERE '$active' = !true AND '$premium' = !true;");
			        $row = $result->fetch_assoc();
			        //echo "<br><hr>".$row['totalentries']." entries in database (<b>FIX THIS FEATURE LATER - # RESULTS</b>)";

			       	$result->close();

			        $db->close();

				?> 

				<?php

					include 'connect.php';

			        if($db->connect_errno > 0){
			            die('Unable to connect to database [' . $db->connect_error . ']');
			        }

			        //$searchterm = "active";
			        $active = "yes";
			        $premium = "no";
			      	$category = "Health+Beauty";

			        $searchTerms = $_POST['filters'];
			        // DOESN'T WORK WITH ARRAYS ---> $searchTerms = mysqli_real_escape_string($_POST['subcategory']);


					// DON'T HAVE TO EXPLODE BECAUSE IT'S AN ARRAY ---> $searchTerms = explode(' ', $subcategory);
					$searchTermBits = array();
					foreach ($searchTerms as $term) {
					    $term = trim($term);
					    if (!empty($term)) {
					        $searchTermBits[] = "Filters LIKE '%$term%'";
					    }
					}

					$sql2 = "SELECT * FROM `dnlistings` WHERE `Active` LIKE '%$active%' AND `Premium` LIKE '$premium' AND `Category` LIKE '%$category%'AND ".implode(' AND ', $searchTermBits)." ORDER BY RAND();";

					//$sql2 = " SELECT * FROM `dnlistings` WHERE ( `Active` LIKE '%$active%'
			        //AND `Premium` LIKE '%$premium%' AND `Category` LIKE '%$category%' );
			        //AND ".implode(' OR ', $searchTermBits)." ";

					//if(!$result = $db->query($sql2)){
			        //    die('Error, that\'s not good!<br> Please let us know and quote this:<br><br> [' . $db->error . ']');
			        //} 

			        if(!$result = $db->query($sql2)){
			            //die('<h4>No basic listings found.</h4>');
			            die('');
			        } 

			        // while($row = $result->fetch_assoc()){
			        //  echo "<b>" .$row ['name'] . " - </b>" .$row ['about'] . " <i>" . $row['tags'] . "</i><div class=\"feedspacer\"></div>" ;
			        // }

			        while($row = $result->fetch_assoc()){
			            // echo "<p>" . $row ['Business'] . " </p><br/>";

					include 'listings/basic.php';

			        }

			        $result = $db->query("SELECT COUNT(*) AS totalentries FROM `dnlistings` WHERE ('$active' = !true AND '$premium' = !true) ;");
			        $row = $result->fetch_assoc();
			        //echo "<br><hr>".$row['totalentries']." entries in database (<b>FIX THIS FEATURE LATER - # RESULTS</b>)";
					
					$result->close();

			        $db->close();

				?> 

		<!--  -->

			<h1>Partial match results</h1><hr> 

				<?php

					include 'connect.php';

			        if($db->connect_errno > 0){
			            die('Unable to connect to database [' . $db->connect_error . ']');
			        }

			        //$searchterm = "active";
			        $active = "yes";
			        $premium = "special";
			      	$category = "Health+Beauty";

			        $searchTerms = $_POST['filters'];
			        // DOESN'T WORK WITH ARRAYS ---> $searchTerms = mysqli_real_escape_string($_POST['subcategory']);


					// DON'T HAVE TO EXPLODE BECAUSE IT'S AN ARRAY ---> $searchTerms = explode(' ', $subcategory);
					$searchTermBits = array();
					foreach ($searchTerms as $term) {
					    $term = trim($term);
					    if (!empty($term)) {
					        $searchTermBits[] = "Filters LIKE '%$term%'";
					    }
					}

					$sql13 = "SELECT * FROM `dnlistings` WHERE `Active` LIKE '%$active%' AND `Premium` LIKE '$premium' AND `Category` LIKE '%$category%' AND (".implode(' OR ', $searchTermBits).") ORDER BY RAND();";

			        //$sql = " SELECT * FROM `dnlistings` WHERE ( `Active` LIKE '%$active%'
			        //AND `Premium` LIKE '%$premium%' AND `Category` LIKE '%$category%' );
			        //AND ".implode(' OR ', $searchTermBits)." ";


					//if(!$result = $db->query($sql)){
			        //    die('Error, that\'s not good!<br> Please let us know and quote this:<br><br> [' . $db->error . ']');
			        //} 

			        if(!$result = $db->query($sql13)){
			            //die('<h4>No premium listings found.</h4>');
			            die('');
			        } 

			        // while($row = $result->fetch_assoc()){
			        //  echo "<b>" .$row ['name'] . " - </b>" .$row ['about'] . " <i>" . $row['tags'] . "</i><div class=\"feedspacer\"></div>" ;
			        // }

			        while($row = $result->fetch_assoc()){
			            // echo "<p>" . $row ['Business'] . " </p><br/>";

					include 'listings/premium.php';

			        }

			        $result = $db->query("SELECT COUNT(*) AS totalentries FROM `dnlistings` WHERE '$active' = !true AND '$premium' = !true;");
			        $row = $result->fetch_assoc();
			        //echo "<br><hr>".$row['totalentries']." entries in database (<b>FIX THIS FEATURE LATER - # RESULTS</b>)";

			       	$result->close();

			        $db->close();

				?> 

				<?php

					include 'connect.php';

			        if($db->connect_errno > 0){
			            die('Unable to connect to database [' . $db->connect_error . ']');
			        }

			        //$searchterm = "active";
			        $active = "yes";
			        $premium = "yes";
			      	$category = "Health+Beauty";

			        $searchTerms = $_POST['filters'];
			        // DOESN'T WORK WITH ARRAYS ---> $searchTerms = mysqli_real_escape_string($_POST['subcategory']);


					// DON'T HAVE TO EXPLODE BECAUSE IT'S AN ARRAY ---> $searchTerms = explode(' ', $subcategory);
					$searchTermBits = array();
					foreach ($searchTerms as $term) {
					    $term = trim($term);
					    if (!empty($term)) {
					        $searchTermBits[] = "Filters LIKE '%$term%'";
					    }
					}

					$sql11 = "SELECT * FROM `dnlistings` WHERE `Active` LIKE '%$active%' AND `Premium` LIKE '$premium' AND `Category` LIKE '%$category%' AND (".implode(' OR ', $searchTermBits).") ORDER BY RAND();";

			        //$sql = " SELECT * FROM `dnlistings` WHERE ( `Active` LIKE '%$active%'
			        //AND `Premium` LIKE '%$premium%' AND `Category` LIKE '%$category%' );
			        //AND ".implode(' OR ', $searchTermBits)." ";


					//if(!$result = $db->query($sql)){
			        //    die('Error, that\'s not good!<br> Please let us know and quote this:<br><br> [' . $db->error . ']');
			        //} 

			        if(!$result = $db->query($sql11)){
			            //die('<h4>No premium listings found.</h4>');
			            die('');
			        } 

			        // while($row = $result->fetch_assoc()){
			        //  echo "<b>" .$row ['name'] . " - </b>" .$row ['about'] . " <i>" . $row['tags'] . "</i><div class=\"feedspacer\"></div>" ;
			        // }

			        while($row = $result->fetch_assoc()){
			            // echo "<p>" . $row ['Business'] . " </p><br/>";

					include 'listings/premium.php';

			        }

			        $result = $db->query("SELECT COUNT(*) AS totalentries FROM `dnlistings` WHERE '$active' = !true AND '$premium' = !true;");
			        $row = $result->fetch_assoc();
			        //echo "<br><hr>".$row['totalentries']." entries in database (<b>FIX THIS FEATURE LATER - # RESULTS</b>)";

			       	$result->close();

			        $db->close();

				?> 

				<?php

					include 'connect.php';

			        if($db->connect_errno > 0){
			            die('Unable to connect to database [' . $db->connect_error . ']');
			        }

			        //$searchterm = "active";
			        $active = "yes";
			        $premium = "no";
			      	$category = "Health+Beauty";

			        $searchTerms = $_POST['filters'];
			        // DOESN'T WORK WITH ARRAYS ---> $searchTerms = mysqli_real_escape_string($_POST['subcategory']);


					// DON'T HAVE TO EXPLODE BECAUSE IT'S AN ARRAY ---> $searchTerms = explode(' ', $subcategory);
					$searchTermBits = array();
					foreach ($searchTerms as $term) {
					    $term = trim($term);
					    if (!empty($term)) {
					        $searchTermBits[] = "Filters LIKE '%$term%'";
					    }
					}

					// $sql12 = "SELECT * FROM `dnlistings` WHERE `Active` LIKE '%$active%' AND `Premium` LIKE '$premium' AND `Category` LIKE '%$category%' AND (".implode(' OR ', $searchTermBits).")";

					$sql12 = "SELECT * FROM `dnlistings` WHERE `Active` LIKE '%$active%' AND `Premium` LIKE '$premium' AND `Category` LIKE '%$category%' AND (".implode(' OR ', $searchTermBits).") ORDER BY RAND();";

					//$sql2 = " SELECT * FROM `dnlistings` WHERE ( `Active` LIKE '%$active%'
			        //AND `Premium` LIKE '%$premium%' AND `Category` LIKE '%$category%' );
			        //AND ".implode(' OR ', $searchTermBits)." ";

					//if(!$result = $db->query($sql2)){
			        //    die('Error, that\'s not good!<br> Please let us know and quote this:<br><br> [' . $db->error . ']');
			        //} 

			        if(!$result = $db->query($sql12)){
			            //die('<h4>No basic listings found.</h4>');
			            die('');
			        } 

			        // while($row = $result->fetch_assoc()){
			        //  echo "<b>" .$row ['name'] . " - </b>" .$row ['about'] . " <i>" . $row['tags'] . "</i><div class=\"feedspacer\"></div>" ;
			        // }

			        while($row = $result->fetch_assoc()){
			            // echo "<p>" . $row ['Business'] . " </p><br/>";

					include 'listings/basic.php';

			        }

			        $result = $db->query("SELECT COUNT(*) AS totalentries FROM `dnlistings` WHERE ('$active' = !true AND '$premium' = !true) ;");
			        $row = $result->fetch_assoc();
			        //echo "<br><hr>".$row['totalentries']." entries in database (<b>FIX THIS FEATURE LATER - # RESULTS</b>)";
					
					$result->close();

			        $db->close();

				?> 

				<?php 
				// include "filtertest2.php"; 
				?>

		</div>	

	</div>

<?php include 'footer.php'; ?>

  </body>
</html>