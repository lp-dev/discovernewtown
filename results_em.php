<?php include 'header.php'; ?>

    <div class="container conmarg">

      <div class="col-md-3" id="col1">
        <a  href="emergency.php"><button type="button" class="btn btn-default headerelement stretch"><img class="filterimg" src="img/menu/e.png" alt="filter"></img>Emergency</button></a>
      </div>

		<div class="col-md-9" id="col2">

			<h1>Results</h1><hr> 

				<?php

					include 'connect.php';

			        if($db->connect_errno > 0){
			            die('Unable to connect to database [' . $db->connect_error . ']');
			        }

			        //$searchterm = "active";
			        $active = "yes";
			        $premium = "yes";
			      	$category = "Emergency";

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

					$sql = "SELECT * FROM `dnlistings` WHERE `Active` LIKE '%$active%' AND `Premium` LIKE '%$premium%' AND `Category` LIKE '%$category%'AND ".implode(' OR ', $searchTermBits)."";
					

					if(!$result = $db->query($sql)){
			            //die('Error, that\'s not good!<br> Please let us know and quote this:<br><br> [' . $db->error . ']');
			        	die('');
			        } 

			        // while($row = $result->fetch_assoc()){
			        //  echo "<b>" .$row ['name'] . " - </b>" .$row ['about'] . " <i>" . $row['tags'] . "</i><div class=\"feedspacer\"></div>" ;
			        // }

			        while($row = $result->fetch_assoc()){
			            // echo "<p>" . $row ['Business'] . " </p><br/>";

					include 'listings/hybrid.php';

			        }

			        $result = $db->query("SELECT COUNT(*) AS totalentries FROM `dnlistings` WHERE '$active' = !true;");
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
			      	$category = "Emergency";

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

					$sql2 = "SELECT * FROM `dnlistings` WHERE `Active` LIKE '%$active%' AND `Premium` LIKE '%$premium%' AND `Category` LIKE '%$category%'AND ".implode(' OR ', $searchTermBits)."";
					
					if(!$result = $db->query($sql2)){
			            //die('Error, that\'s not good!<br> Please let us know and quote this:<br><br> [' . $db->error . ']');
			            die('');
			        } 

			        // while($row = $result->fetch_assoc()){
			        //  echo "<b>" .$row ['name'] . " - </b>" .$row ['about'] . " <i>" . $row['tags'] . "</i><div class=\"feedspacer\"></div>" ;
			        // }

			        while($row = $result->fetch_assoc()){
			            // echo "<p>" . $row ['Business'] . " </p><br/>";

					include 'listings/hybrid.php';

			        }

			        $result = $db->query("SELECT COUNT(*) AS totalentries FROM `dnlistings` WHERE '$active' = !true;");
			        $row = $result->fetch_assoc();
			        //echo "<br><hr>".$row['totalentries']." entries in database (<b>FIX THIS FEATURE LATER - # RESULTS</b>)";

			        $result->close();

			        $db->close();

				?> 

				<?php include "filtertest.php"; ?>

		</div>	

	</div>

<?php include 'footer.php'; ?>

  </body>
</html>