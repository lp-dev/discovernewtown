<?php include 'header.php'; ?>

    <div class="container conmarg">

<?php include 'menu/main.php'; ?>

		<div class="col-md-9" id="col2">

			<h1>Search results</h1><hr>


				<?php

					include 'connect.php';

			        if($db->connect_errno > 0){
			            die('Unable to connect to database [' . $db->connect_error . ']');
			        }

			        //$searchterm = "active";
			        $active = "yes";
			        $premium = "promote";
			        //$category = "Food+Drink";

			        $searchterm = $db->real_escape_string($_POST["searchterm"]);

					// $sql = "SELECT * FROM `dnlistings` 
					// WHERE (`Active` LIKE '%$active%' AND `Premium` LIKE '%$premium%' AND `SDescription` LIKE '%$searchterm%'
					// OR `SDescription` LIKE '% $searchterm %'
					// OR `SDescription` LIKE '% $searchterm'
					// OR `SDescription` LIKE '$searchterm %'
					// OR `SDescription` LIKE '%$searchterm');";

					//$sql = "SELECT * FROM `dnlistings` WHERE ( `Active` LIKE '%$active%' AND `Premium` LIKE '%$premium%' AND `Name` LIKE '%$searchterm%' OR `SDescription` LIKE '%$searchterm%' OR `Address` LIKE '%$searchterm%');";
					//$sql = "SELECT * FROM `dnlistings` WHERE ( `Active` LIKE '%$active%' AND `Premium` LIKE '%$premium%' AND `Name` LIKE '%$searchterm%' OR `SDescription` LIKE '%$searchterm%');";
					$sql4 = "SELECT * FROM `dnlistings` WHERE ( `Active` LIKE '%$active%' AND `Premium` LIKE '%$premium%' AND `Searches` LIKE '%$searchterm%') ORDER BY RAND();";
					//$sql = "SELECT * FROM `dnlistings` WHERE ( `Active` LIKE '%$active%' AND `Premium` LIKE '%$premium%' AND `Summary` LIKE '%$searchterm%');";

			        // $sql = "SELECT * FROM `dnlistings` WHERE (
			        //     `Active` LIKE '%$searchterm%'
			        //     OR `Active` LIKE '% $searchterm %'
			        //     OR `Active` LIKE '% $searchterm'
			        //     OR `Active` LIKE '$searchterm %'
			        //     OR `Active` LIKE '%$searchterm');";
					
					// $sql = "SELECT * FROM `dnlistings` WHERE (
			 		// `Active` LIKE '%$active%'
			 		// AND `Premium` LIKE '%$premium%' AND `Category` LIKE '%$category%');";

			        if(!$result = $db->query($sql4)){
			            die('Error, that\'s not good!<br> Please let us know and quote this:<br><br> [' . $db->error . ']');
			        } 

			        // while($row = $result->fetch_assoc()){
			        //  echo "<b>" .$row ['name'] . " - </b>" .$row ['about'] . " <i>" . $row['tags'] . "</i><div class=\"feedspacer\"></div>" ;
			        // }

			        while($row = $result->fetch_assoc()){
			            // echo "<p>" . $row ['Business'] . " </p><br/>";


						include 'listings/premium.php';

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
			        $premium = "special";
			        //$category = "Food+Drink";

			        $searchterm = $db->real_escape_string($_POST["searchterm"]);

					// $sql = "SELECT * FROM `dnlistings` 
					// WHERE (`Active` LIKE '%$active%' AND `Premium` LIKE '%$premium%' AND `SDescription` LIKE '%$searchterm%'
					// OR `SDescription` LIKE '% $searchterm %'
					// OR `SDescription` LIKE '% $searchterm'
					// OR `SDescription` LIKE '$searchterm %'
					// OR `SDescription` LIKE '%$searchterm');";

					//$sql = "SELECT * FROM `dnlistings` WHERE ( `Active` LIKE '%$active%' AND `Premium` LIKE '%$premium%' AND `Name` LIKE '%$searchterm%' OR `SDescription` LIKE '%$searchterm%' OR `Address` LIKE '%$searchterm%');";
					//$sql = "SELECT * FROM `dnlistings` WHERE ( `Active` LIKE '%$active%' AND `Premium` LIKE '%$premium%' AND `Name` LIKE '%$searchterm%' OR `SDescription` LIKE '%$searchterm%');";
					$sql3 = "SELECT * FROM `dnlistings` WHERE ( `Active` LIKE '%$active%' AND `Premium` LIKE '%$premium%' AND `Searches` LIKE '%$searchterm%') ORDER BY RAND();";
					//$sql = "SELECT * FROM `dnlistings` WHERE ( `Active` LIKE '%$active%' AND `Premium` LIKE '%$premium%' AND `Summary` LIKE '%$searchterm%');";

			        // $sql = "SELECT * FROM `dnlistings` WHERE (
			        //     `Active` LIKE '%$searchterm%'
			        //     OR `Active` LIKE '% $searchterm %'
			        //     OR `Active` LIKE '% $searchterm'
			        //     OR `Active` LIKE '$searchterm %'
			        //     OR `Active` LIKE '%$searchterm');";
					
					// $sql = "SELECT * FROM `dnlistings` WHERE (
			 		// `Active` LIKE '%$active%'
			 		// AND `Premium` LIKE '%$premium%' AND `Category` LIKE '%$category%');";

			        if(!$result = $db->query($sql3)){
			            die('Error, that\'s not good!<br> Please let us know and quote this:<br><br> [' . $db->error . ']');
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

					//$db = new mysqli('localhost', 'besthai1_dnuser', 'dn_15Connect', 'besthai1_dnlistings');
			        //$db = new mysqli('localhost', 'root', '', 'besthai1_dnlistings');
					
					include 'connect.php';

			        if($db->connect_errno > 0){
			            die('Unable to connect to database [' . $db->connect_error . ']');
			        }

			        //$searchterm = "active";
			        $active = "yes";
			        $premium = "yes";
			        //$category = "Food+Drink";

			        $searchterm = $db->real_escape_string($_POST["searchterm"]);

					// $sql = "SELECT * FROM `dnlistings` 
					// WHERE (`Active` LIKE '%$active%' AND `Premium` LIKE '%$premium%' AND `SDescription` LIKE '%$searchterm%'
					// OR `SDescription` LIKE '% $searchterm %'
					// OR `SDescription` LIKE '% $searchterm'
					// OR `SDescription` LIKE '$searchterm %'
					// OR `SDescription` LIKE '%$searchterm');";

					//$sql = "SELECT * FROM `dnlistings` WHERE ( `Active` LIKE '%$active%' AND `Premium` LIKE '%$premium%' AND `Name` LIKE '%$searchterm%' OR `SDescription` LIKE '%$searchterm%' OR `Address` LIKE '%$searchterm%');";
					//$sql = "SELECT * FROM `dnlistings` WHERE ( `Active` LIKE '%$active%' AND `Premium` LIKE '%$premium%' AND `Name` LIKE '%$searchterm%' OR `SDescription` LIKE '%$searchterm%');";
					$sql2 = "SELECT * FROM `dnlistings` WHERE ( `Active` LIKE '%$active%' AND `Premium` LIKE '%$premium%' AND `Searches` LIKE '%$searchterm%') ORDER BY RAND();";
					//$sql = "SELECT * FROM `dnlistings` WHERE ( `Active` LIKE '%$active%' AND `Premium` LIKE '%$premium%' AND `Summary` LIKE '%$searchterm%');";

			        // $sql = "SELECT * FROM `dnlistings` WHERE (
			        //     `Active` LIKE '%$searchterm%'
			        //     OR `Active` LIKE '% $searchterm %'
			        //     OR `Active` LIKE '% $searchterm'
			        //     OR `Active` LIKE '$searchterm %'
			        //     OR `Active` LIKE '%$searchterm');";
					
					// $sql = "SELECT * FROM `dnlistings` WHERE (
			 		// `Active` LIKE '%$active%'
			 		// AND `Premium` LIKE '%$premium%' AND `Category` LIKE '%$category%');";

			        if(!$result = $db->query($sql2)){
			            die('Error, that\'s not good!<br> Please let us know and quote this:<br><br> [' . $db->error . ']');
			        } 

			        // while($row = $result->fetch_assoc()){
			        //  echo "<b>" .$row ['name'] . " - </b>" .$row ['about'] . " <i>" . $row['tags'] . "</i><div class=\"feedspacer\"></div>" ;
			        // }

			        while($row = $result->fetch_assoc()){
			            // echo "<p>" . $row ['Business'] . " </p><br/>";


					include 'listings/premium.php';

			        }

			        $result = $db->query("SELECT COUNT(*) AS totalentries FROM `dnlistings` WHERE '$active' = !true;");
			        $row = $result->fetch_assoc();
			        //echo "<br><hr>".$row['totalentries']." entries in database (<b>FIX THIS FEATURE LATER - # RESULTS</b>)";

			        $result->close();

			        $db->close();

				?>  

				<?php

					//$db = new mysqli('localhost', 'besthai1_dnuser', 'dn_15Connect', 'besthai1_dnlistings');
			        //$db = new mysqli('localhost', 'root', '', 'besthai1_dnlistings');
					
					include 'connect.php';

			        if($db->connect_errno > 0){
			            die('Unable to connect to database [' . $db->connect_error . ']');
			        }

			        //$searchterm = "active";
			        $active = "yes";
			        $premium = "no";
			        //$category = "Food+Drink";

			        $searchterm = $db->real_escape_string($_POST["searchterm"]);

					// $sql2 = "SELECT * FROM `dnlistings` 
					// WHERE (`SDescription` LIKE '%$searchterm%'
					// OR `SDescription` LIKE '% $searchterm %'
					// OR `SDescription` LIKE '% $searchterm'
					// OR `SDescription` LIKE '$searchterm %'
					// OR `SDescription` LIKE '%$searchterm');";

					//$sql2 = "SELECT * FROM `dnlistings` WHERE ( `Active` LIKE '%$active%' AND `Premium` LIKE '%$premium%' AND `Name` LIKE '%$searchterm%' OR `SDescription` LIKE '%$searchterm%');";
					$sql1 = "SELECT * FROM `dnlistings` WHERE ( `Active` LIKE '%$active%' AND `Premium` LIKE '%$premium%' AND `Searches` LIKE '%$searchterm%') ORDER BY RAND();";
					//$sql2 = "SELECT * FROM `dnlistings` WHERE ( `Active` LIKE '%$active%' AND `Premium` LIKE '%$premium%' AND `Summary` LIKE '%$searchterm%');";


			        // $sql = "SELECT * FROM `dnlistings` WHERE (
			        //     `Active` LIKE '%$searchterm%'
			        //     OR `Active` LIKE '% $searchterm %'
			        //     OR `Active` LIKE '% $searchterm'
			        //     OR `Active` LIKE '$searchterm %'
			        //     OR `Active` LIKE '%$searchterm');";
					
					// $sql = "SELECT * FROM `dnlistings` WHERE (
			  		// `Active` LIKE '%$active%'
			  		// AND `Premium` LIKE '%$premium%' AND `Category` LIKE '%$category%');";

			        if(!$result = $db->query($sql1)){
			            die('Error, that\'s not good!<br> Please let us know and quote this:<br><br> [' . $db->error . ']');
			        } 

			        // while($row = $result->fetch_assoc()){
			        //  echo "<b>" .$row ['name'] . " - </b>" .$row ['about'] . " <i>" . $row['tags'] . "</i><div class=\"feedspacer\"></div>" ;
			        // }

			        while($row = $result->fetch_assoc()){
			            // echo "<p>" . $row ['Business'] . " </p><br/>";


					include 'listings/basic.php';

			        }

			        $result = $db->query("SELECT COUNT(*) AS totalentries FROM `dnlistings` WHERE '$active' = !true;");
			        $row = $result->fetch_assoc();
			        //echo "<br><hr>".$row['totalentries']." entries in database (<b>FIX THIS FEATURE LATER - # RESULTS</b>)";

			        $result->close();

			        $db->close();

				?>  

		</div>	

	</div>

<?php include 'footer.php'; ?>

  </body>
</html>