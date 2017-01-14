<?php include 'header.php'; ?>

<?php include 'alertemail.php'; ?>

	<div class="container conmarg">

<?php include 'menu/food+drink.php'; ?>
		<div class="col-md-9">

	  	<h1>Food & Drink</h1><hr>

			<!-- <div class="col-md-12 listingpadding">
				<div class="col-md-4 listingpadding middlebtmpad">
	  				<a href="thebeijing.php"><img src="thebeijing/listing.jpg" class="img-responsive listimg" alt="thebeijinglisting"></a>
		  		</div>
		  		<div class="col-md-4 middlebtmpad">
		  			<h4 class="list-group-item-heading">The Beijing</h4>
    				<p class="list-group-item-text">164 Riddiford Street</p>
    				<p class="list-group-item-text">(04) 389 7988</p>
		  		</div>
		  		<div class="col-md-4 middlebtmpad">
		  			<p class="list-group-item-text">Serving up Northern Chinese food, it is hard to visit The Beijing without having their incredible Peking Duck pancakes.</p>
		  	-->

		  			<!-- <button type="button" class="btn btn-default tenpad listingbtn" data-toggle="modal" data-target="#featuresmodal"><img class="listingimg" src="img/btns/features.png" alt="features">View features</button> -->
		  	
		  	<!-- 		<a href="thebeijing.php"><button type="button" class="btn btn-default tenpad listingbtn"><img class="listingimg" src="img/btns/webpage.png" alt="webpage">More info</button></a>
		  		</div>
			</div>
			<div class="col-md-12 listingpadding twentypad">
				<div class="col-md-4 listingpadding middlebtmpad">
	  				<a href="join.php"><img src="img/basic/listingimg.jpg" class="img-responsive listimg" alt="basiclisting"></a>
		  		</div>
		  		<div class="col-md-4 middlebtmpad">
					<h4 class="list-group-item-heading">Cicio Cacio</h4>
					<p class="list-group-item-text">191 Riddiford Street</p>
					<p class="list-group-item-text">(04) 389 2263</p>
		  		</div>
		  		<div class="col-md-4 middlebtmpad">
		  			<button type="button" class="btn btn-default tenpad listingbtn"><img class="listingimg" src="img/btns/nowebpage.png" alt="nowebpage">More info</button>
		  		</div>
			</div>
			-->

			<?php

					//$db = new mysqli('localhost', 'besthai1_dnuser', 'dn_15Connect', 'besthai1_dnlistings');
			        //$db = new mysqli('localhost', 'root', '', 'besthai1_dnlistings');
					
					include 'connect.php';

			        if($db->connect_errno > 0){
			            die('Unable to connect to database [' . $db->connect_error . ']');
			        }

			        //$searchterm = "active";
			        $active = "yes";
			        $premium = "promote";
			        $category = "Food+Drink";

			        // $sql = "SELECT * FROM `dnlistings` WHERE (
			        //     `Active` LIKE '%$searchterm%'
			        //     OR `Active` LIKE '% $searchterm %'
			        //     OR `Active` LIKE '% $searchterm'
			        //     OR `Active` LIKE '$searchterm %'
			        //     OR `Active` LIKE '%$searchterm');";
					
					$sql4 = "SELECT * FROM `dnlistings` WHERE (
			            `Active` LIKE '%$active%'
			            AND `Premium` LIKE '%$premium%' AND `Category` LIKE '%$category%') ORDER BY RAND();";

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

					//$db = new mysqli('localhost', 'besthai1_dnuser', 'dn_15Connect', 'besthai1_dnlistings');
			        //$db = new mysqli('localhost', 'root', '', 'besthai1_dnlistings');
					
					include 'connect.php';

			        if($db->connect_errno > 0){
			            die('Unable to connect to database [' . $db->connect_error . ']');
			        }

			        //$searchterm = "active";
			        $active = "yes";
			        $premium = "special";
			        $category = "Food+Drink";

			        // $sql = "SELECT * FROM `dnlistings` WHERE (
			        //     `Active` LIKE '%$searchterm%'
			        //     OR `Active` LIKE '% $searchterm %'
			        //     OR `Active` LIKE '% $searchterm'
			        //     OR `Active` LIKE '$searchterm %'
			        //     OR `Active` LIKE '%$searchterm');";
					
					$sql3 = "SELECT * FROM `dnlistings` WHERE (
			            `Active` LIKE '%$active%'
			            AND `Premium` LIKE '%$premium%' AND `Category` LIKE '%$category%') ORDER BY RAND();";

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
			        $category = "Food+Drink";

			        // $sql = "SELECT * FROM `dnlistings` WHERE (
			        //     `Active` LIKE '%$searchterm%'
			        //     OR `Active` LIKE '% $searchterm %'
			        //     OR `Active` LIKE '% $searchterm'
			        //     OR `Active` LIKE '$searchterm %'
			        //     OR `Active` LIKE '%$searchterm');";
					
					$sql2 = "SELECT * FROM `dnlistings` WHERE (
			            `Active` LIKE '%$active%'
			            AND `Premium` LIKE '%$premium%' AND `Category` LIKE '%$category%') ORDER BY RAND();";

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
			        $category = "Food+Drink";

			        // $sql = "SELECT * FROM `dnlistings` WHERE (
			        //     `Active` LIKE '%$searchterm%'
			        //     OR `Active` LIKE '% $searchterm %'
			        //     OR `Active` LIKE '% $searchterm'
			        //     OR `Active` LIKE '$searchterm %'
			        //     OR `Active` LIKE '%$searchterm');";
					
					$sql1 = "SELECT * FROM `dnlistings` WHERE (
			            `Active` LIKE '%$active%'
			            AND `Premium` LIKE '%$premium%' AND `Category` LIKE '%$category%') ORDER BY RAND();";

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