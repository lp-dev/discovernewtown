<?php include 'header.php'; ?>

    <div class="container conmarg">

      <div class="col-md-3" id="col1">
        <a  href="food+drink.php"><button type="button" class="btn btn-default headerelement stretch"><img class="filterimg" src="img/menu/f.png" alt="filter"></img>Food & Drink</button></a>
      </div>

		<div class="col-md-9" id="col2">

			<h1>Food & Drink</h1><hr> 

				<?php

				$db = new mysqli('localhost', 'besthai1_dnuser', 'dn_15Connect', 'besthai1_dnfilter');
				//$db = new mysqli('localhost', 'root', '', 'new_besthai1_dnsearch');

				if($db->connect_errno > 0){
				    die('Unable to connect to database [' . $db->connect_error . ']');
				}

				//Checkboxes not text = ?
				$searchterm = $db->real_escape_string($_POST["subcategory"]);

				$sql = "SELECT * FROM `dnlistings` WHERE (
					`filter` LIKE '%$searchterm%'
					OR `filter` LIKE '% $searchterm %'
					OR `filter` LIKE '% $searchterm'
					OR `filter` LIKE '$searchterm %'
					OR `filter` LIKE '%$searchterm');";

				if(!$result = $db->query($sql)){
				    die('Error, that\'s not good!<br> Please let us know and quote this:<br><br> [' . $db->error . ']');
				} 

				// while($row = $result->fetch_assoc()){
				// 	echo "<b>" .$row ['name'] . " - </b>" .$row ['about'] . " <i>" . $row['tags'] . "</i><div class=\"feedspacer\"></div>" ;
				// }

				while($row = $result->fetch_assoc()){
					echo $row ['Code'] . "<hr>";
				}



				$result = $db->query("SELECT COUNT(*) AS totalentries FROM `dnlistings` WHERE '$searchterm' = !true;");
				$row = $result->fetch_assoc();
				//echo "<br><hr>".$row['totalentries']." entries in database (<b>FIX THIS FEATURE LATER - # RESULTS</b>)";

				$result->close();

				$db->close();

				?> 

		</div>	

		<?php include 'modalsignup.php'; ?>

	</div>

<?php include 'footer.php'; ?>

  </body>
</html>