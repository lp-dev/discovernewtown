<?php include 'header.php'; ?>

<?php include 'alertemail.php'; ?>

	<div class="container conmarg">

<?php include 'menu/other.php'; ?>
		<div class="col-md-9">

	  	<h1>Other</h1><hr>

	  		  	<?php

					//$db = new mysqli('localhost', 'besthai1_dnuser', 'dn_15Connect', 'besthai1_dnlistings');
			        //$db = new mysqli('localhost', 'root', '', 'besthai1_dnlistings');
					
					include 'connect.php';

			        if($db->connect_errno > 0){
			            die('Unable to connect to database [' . $db->connect_error . ']');
			        }

			        //$searchterm = "active";
			        $active = "yes";
			        $premium = "special";
			        $category = "Other";

			        // $sql = "SELECT * FROM `dnlistings` WHERE (
			        //     `Active` LIKE '%$searchterm%'
			        //     OR `Active` LIKE '% $searchterm %'
			        //     OR `Active` LIKE '% $searchterm'
			        //     OR `Active` LIKE '$searchterm %'
			        //     OR `Active` LIKE '%$searchterm');";
					
					$sql3 = "SELECT * FROM `dnlistings` WHERE (
			            `Active` LIKE '%$active%'
			            AND `Premium` LIKE '%$premium%' AND `Category` LIKE '%$category%');";

			        if(!$result = $db->query($sql3)){
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
			        // $db = new mysqli('localhost', 'root', '', 'besthai1_dnlistings');

					include 'connect.php';

			        if($db->connect_errno > 0){
			            die('Unable to connect to database [' . $db->connect_error . ']');
			        }

			        //$searchterm = "active";
			        $active = "yes";
			        $premium = "yes";
			        $category = "Other";

			        // $sql = "SELECT * FROM `dnlistings` WHERE (
			        //     `Active` LIKE '%$searchterm%'
			        //     OR `Active` LIKE '% $searchterm %'
			        //     OR `Active` LIKE '% $searchterm'
			        //     OR `Active` LIKE '$searchterm %'
			        //     OR `Active` LIKE '%$searchterm');";
					
					$sql = "SELECT * FROM `dnlistings` WHERE (
			            `Active` LIKE '%$active%'
			            AND `Premium` LIKE '%$premium%' AND `Category` LIKE '%$category%');";

			        if(!$result = $db->query($sql)){
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
			        $category = "Other";

			        // $sql = "SELECT * FROM `dnlistings` WHERE (
			        //     `Active` LIKE '%$searchterm%'
			        //     OR `Active` LIKE '% $searchterm %'
			        //     OR `Active` LIKE '% $searchterm'
			        //     OR `Active` LIKE '$searchterm %'
			        //     OR `Active` LIKE '%$searchterm');";
		
					$sql = "SELECT * FROM `dnlistings` WHERE (
			            `Active` LIKE '%$active%'
			            AND `Premium` LIKE '%$premium%' AND `Category` LIKE '%$category%');";

			        if(!$result = $db->query($sql)){
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


			<?php

			        // //$db = new mysqli('localhost', 'besthai1_dnuser', 'dn_15Connect', 'besthai1_dnlistings');
			        // $db = new mysqli('localhost', 'root', '', 'besthai1_dnlistings');


			        // if($db->connect_errno > 0){
			        //     die('Unable to connect to database [' . $db->connect_error . ']');
			        // }

			        // //$searchterm = "active";
			        // $searchterm = "";

			        // $sql = "SELECT * FROM `dnlistings` WHERE (
			        //     `Active` LIKE '%$searchterm%'
			        //     OR `Active` LIKE '% $searchterm %'
			        //     OR `Active` LIKE '% $searchterm'
			        //     OR `Active` LIKE '$searchterm %'
			        //     OR `Active` LIKE '%$searchterm');";

			        // if(!$result = $db->query($sql)){
			        //     die('Error, that\'s not good!<br> Please let us know and quote this:<br><br> [' . $db->error . ']');
			        // } 

			        // // while($row = $result->fetch_assoc()){
			        // //  echo "<b>" .$row ['name'] . " - </b>" .$row ['about'] . " <i>" . $row['tags'] . "</i><div class=\"feedspacer\"></div>" ;
			        // // }

			        // while($row = $result->fetch_assoc()){
			        //     echo "<p>" . $row ['Business'] . " </p><br/>";
			        // }

			        // $result = $db->query("SELECT COUNT(*) AS totalentries FROM `dnlistings` WHERE '$searchterm' = !true;");
			        // $row = $result->fetch_assoc();
			        // //echo "<br><hr>".$row['totalentries']." entries in database (<b>FIX THIS FEATURE LATER - # RESULTS</b>)";

			        // $result->close();

			        // $db->close();

			?> 


		</div>				

	</div>

<?php include 'footer.php'; ?>