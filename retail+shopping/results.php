<?php include '../headerp.php'; ?>

    <div class="container conmarg">

      <div class="col-md-3" id="col1">

          	<?php include '../menu/addsearchp.php'; ?>
 			<?php include '../menu/addmenup.php'; ?>

     </div>

		<div class="col-md-9" id="col2">

			<h1>Exact match results</h1><hr> 

				<?php

					include '../connect.php';

			        if($db->connect_errno > 0){
			            die('Unable to connect to database [' . $db->connect_error . ']');
			        }

			        //$searchterm = "active";
			        $active = "yes";
			        $premium = "promote";
			      	$category = "Retail+Shopping";

			        $searchTerms = $_POST['filters'];

					$searchTermBits = array();
					foreach ($searchTerms as $term) {
					    $term = trim($term);
					    if (!empty($term)) {
					        $searchTermBits[] = "Filters LIKE '%$term%'";
					    }
					}

					$sql4 = "SELECT * FROM `dnlistings` WHERE `Active` LIKE '%$active%' AND `Premium` LIKE '$premium' AND `Category` LIKE '%$category%' AND ".implode(' AND ', $searchTermBits)." ORDER BY RAND();";

			        if(!$result = $db->query($sql4)){
			            //die('<h4>No premium listings found.</h4>');
			            die('');
			        } 

			        while($row = $result->fetch_assoc()){

					include '../listings/promotep.php';

			        }

			        $result = $db->query("SELECT COUNT(*) AS totalentries FROM `dnlistings` WHERE '$active' = !true AND '$premium' = !true;");
			        $row = $result->fetch_assoc();

			       	$result->close();

			        $db->close();

				?> 

				<?php

					include '../connect.php';

			        if($db->connect_errno > 0){
			            die('Unable to connect to database [' . $db->connect_error . ']');
			        }

			        //$searchterm = "active";
			        $active = "yes";
			        $premium = "special";
			      	$category = "Retail+Shopping";

			        $searchTerms = $_POST['filters'];

					$searchTermBits = array();
					foreach ($searchTerms as $term) {
					    $term = trim($term);
					    if (!empty($term)) {
					        $searchTermBits[] = "Filters LIKE '%$term%'";
					    }
					}

					$sql3 = "SELECT * FROM `dnlistings` WHERE `Active` LIKE '%$active%' AND `Premium` LIKE '$premium' AND `Category` LIKE '%$category%' AND ".implode(' AND ', $searchTermBits)." ORDER BY RAND();";

			        if(!$result = $db->query($sql3)){
			            //die('<h4>No premium listings found.</h4>');
			            die('');
			        } 

			        while($row = $result->fetch_assoc()){

					include '../listings/hybridp.php';

			        }

			        $result = $db->query("SELECT COUNT(*) AS totalentries FROM `dnlistings` WHERE '$active' = !true AND '$premium' = !true;");
			        $row = $result->fetch_assoc();

			       	$result->close();

			        $db->close();

				?> 

				<?php

					include '../connect.php';

			        if($db->connect_errno > 0){
			            die('Unable to connect to database [' . $db->connect_error . ']');
			        }

			        //$searchterm = "active";
			        $active = "yes";
			        $premium = "yes";
			      	$category = "Retail+Shopping";

			        $searchTerms = $_POST['filters'];

					$searchTermBits = array();
					foreach ($searchTerms as $term) {
					    $term = trim($term);
					    if (!empty($term)) {
					        $searchTermBits[] = "Filters LIKE '%$term%'";
					    }
					}

					$sql2 = "SELECT * FROM `dnlistings` WHERE `Active` LIKE '%$active%' AND `Premium` LIKE '$premium' AND `Category` LIKE '%$category%' AND ".implode(' AND ', $searchTermBits)." ORDER BY RAND();";

			        if(!$result = $db->query($sql2)){
			            //die('<h4>No premium listings found.</h4>');
			            die('');
			        } 

			        while($row = $result->fetch_assoc()){

					include '../listings/premiump.php';

			        }

			        $result = $db->query("SELECT COUNT(*) AS totalentries FROM `dnlistings` WHERE '$active' = !true AND '$premium' = !true;");
			        $row = $result->fetch_assoc();

			       	$result->close();

			        $db->close();

				?> 

				<?php

					include '../connect.php';

			        if($db->connect_errno > 0){
			            die('Unable to connect to database [' . $db->connect_error . ']');
			        }

			        //$searchterm = "active";
			        $active = "yes";
			        $premium = "no";
			      	$category = "Retail+Shopping";

			        $searchTerms = $_POST['filters'];

					$searchTermBits = array();
					foreach ($searchTerms as $term) {
					    $term = trim($term);
					    if (!empty($term)) {
					        $searchTermBits[] = "Filters LIKE '%$term%'";
					    }
					}

					$sql1 = "SELECT * FROM `dnlistings` WHERE `Active` LIKE '%$active%' AND `Premium` LIKE '$premium' AND `Category` LIKE '%$category%'AND ".implode(' AND ', $searchTermBits)." ORDER BY RAND();";

			        if(!$result = $db->query($sql1)){
			            //die('<h4>No basic listings found.</h4>');
			            die('');
			        } 

			        while($row = $result->fetch_assoc()){

					include '../listings/basicp.php';

			        }

			        $result = $db->query("SELECT COUNT(*) AS totalentries FROM `dnlistings` WHERE ('$active' = !true AND '$premium' = !true) ;");
			        $row = $result->fetch_assoc();
					
					$result->close();

			        $db->close();

				?> 

		<!--  -->

			<h1>Partial match results</h1><hr> 

				<?php

					include '../connect.php';

			        if($db->connect_errno > 0){
			            die('Unable to connect to database [' . $db->connect_error . ']');
			        }

			        //$searchterm = "active";
			        $active = "yes";
			        $premium = "promote";
			      	$category = "Retail+Shopping";

			        $searchTerms = $_POST['filters'];

					$searchTermBits = array();
					foreach ($searchTerms as $term) {
					    $term = trim($term);
					    if (!empty($term)) {
					        $searchTermBits[] = "Filters LIKE '%$term%'";
					    }
					}

					$sql44 = "SELECT * FROM `dnlistings` WHERE `Active` LIKE '%$active%' AND `Premium` LIKE '$premium' AND `Category` LIKE '%$category%' AND (".implode(' OR ', $searchTermBits).") ORDER BY RAND();";

			        if(!$result = $db->query($sql44)){
			            //die('<h4>No premium listings found.</h4>');
			            die('');
			        } 

			        while($row = $result->fetch_assoc()){

					include '../listings/promotep.php';

			        }

			        $result = $db->query("SELECT COUNT(*) AS totalentries FROM `dnlistings` WHERE '$active' = !true AND '$premium' = !true;");
			        $row = $result->fetch_assoc();

			       	$result->close();

			        $db->close();

				?> 

				<?php

					include '../connect.php';

			        if($db->connect_errno > 0){
			            die('Unable to connect to database [' . $db->connect_error . ']');
			        }

			        //$searchterm = "active";
			        $active = "yes";
			        $premium = "special";
			      	$category = "Retail+Shopping";

			        $searchTerms = $_POST['filters'];

					$searchTermBits = array();
					foreach ($searchTerms as $term) {
					    $term = trim($term);
					    if (!empty($term)) {
					        $searchTermBits[] = "Filters LIKE '%$term%'";
					    }
					}

					$sql33 = "SELECT * FROM `dnlistings` WHERE `Active` LIKE '%$active%' AND `Premium` LIKE '$premium' AND `Category` LIKE '%$category%' AND (".implode(' OR ', $searchTermBits).") ORDER BY RAND();";

			        if(!$result = $db->query($sql33)){
			            //die('<h4>No premium listings found.</h4>');
			            die('');
			        } 

			        while($row = $result->fetch_assoc()){

					include '../listings/hybridp.php';

			        }

			        $result = $db->query("SELECT COUNT(*) AS totalentries FROM `dnlistings` WHERE '$active' = !true AND '$premium' = !true;");
			        $row = $result->fetch_assoc();

			       	$result->close();

			        $db->close();

				?> 

				<?php

					include '../connect.php';

			        if($db->connect_errno > 0){
			            die('Unable to connect to database [' . $db->connect_error . ']');
			        }

			        //$searchterm = "active";
			        $active = "yes";
			        $premium = "yes";
			      	$category = "Retail+Shopping";

			        $searchTerms = $_POST['filters'];

					$searchTermBits = array();
					foreach ($searchTerms as $term) {
					    $term = trim($term);
					    if (!empty($term)) {
					        $searchTermBits[] = "Filters LIKE '%$term%'";
					    }
					}

					$sql22 = "SELECT * FROM `dnlistings` WHERE `Active` LIKE '%$active%' AND `Premium` LIKE '$premium' AND `Category` LIKE '%$category%' AND (".implode(' OR ', $searchTermBits).") ORDER BY RAND();";

			        if(!$result = $db->query($sql22)){
			            //die('<h4>No premium listings found.</h4>');
			            die('');
			        } 

			        while($row = $result->fetch_assoc()){

					include '../listings/premiump.php';

			        }

			        $result = $db->query("SELECT COUNT(*) AS totalentries FROM `dnlistings` WHERE '$active' = !true AND '$premium' = !true;");
			        $row = $result->fetch_assoc();

			       	$result->close();

			        $db->close();

				?> 

				<?php

					include '../connect.php';

			        if($db->connect_errno > 0){
			            die('Unable to connect to database [' . $db->connect_error . ']');
			        }

			        //$searchterm = "active";
			        $active = "yes";
			        $premium = "no";
			      	$category = "Retail+Shopping";

			        $searchTerms = $_POST['filters'];

					$searchTermBits = array();
					foreach ($searchTerms as $term) {
					    $term = trim($term);
					    if (!empty($term)) {
					        $searchTermBits[] = "Filters LIKE '%$term%'";
					    }
					}

					$sql11 = "SELECT * FROM `dnlistings` WHERE `Active` LIKE '%$active%' AND `Premium` LIKE '$premium' AND `Category` LIKE '%$category%' AND (".implode(' OR ', $searchTermBits).") ORDER BY RAND();";

			        if(!$result = $db->query($sql11)){
			            //die('<h4>No basic listings found.</h4>');
			            die('');
			        } 

			        while($row = $result->fetch_assoc()){

					include '../listings/basicp.php';

			        }

			        $result = $db->query("SELECT COUNT(*) AS totalentries FROM `dnlistings` WHERE ('$active' = !true AND '$premium' = !true) ;");
			        $row = $result->fetch_assoc();
					
					$result->close();

			        $db->close();

				?> 

				<?php 
				//include "../filtertesting.php"; 
				?>

		</div>	

	</div>

<?php include '../footerp.php'; ?>

  </body>
</html>