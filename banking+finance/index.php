<?php include '../headerp.php'; ?>

<?php include 'alertemail.php'; ?>

	<div class="container conmarg">

<?php include '../menu/filtermenu.php'; ?>
		<div class="col-md-9">

	  	<h1>Banking & Finance</h1><hr>

	  		<?php
					
					include '../connect.php';

			        if($db->connect_errno > 0){
			            die('Unable to connect to database [' . $db->connect_error . ']');
			        }

			        //$searchterm = "active";
			        $active = "yes";
			        $premium = "promote";
			        $category = "Banking+Finance";

					$sql4 = "SELECT * FROM `dnlistings` WHERE (
			            `Active` LIKE '%$active%'
			            AND `Premium` LIKE '%$premium%' AND `Category` LIKE '%$category%') ORDER BY RAND();";

			        if(!$result = $db->query($sql4)){
			            die('Error, that\'s not good!<br> Please let us know and quote this:<br><br> [' . $db->error . ']');
			        } 

			        while($row = $result->fetch_assoc()){

			        include '../listings/promotep.php';		

			        }

			        $result = $db->query("SELECT COUNT(*) AS totalentries FROM `dnlistings` WHERE '$active' = !true;");
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
			        $category = "Banking+Finance";

					$sql3 = "SELECT * FROM `dnlistings` WHERE (
			            `Active` LIKE '%$active%'
			            AND `Premium` LIKE '%$premium%' AND `Category` LIKE '%$category%') ORDER BY RAND();";

			        if(!$result = $db->query($sql3)){
			            die('Error, that\'s not good!<br> Please let us know and quote this:<br><br> [' . $db->error . ']');
			        } 


			        while($row = $result->fetch_assoc()){

			        include '../listings/hybridp.php';		

			        }

			        $result = $db->query("SELECT COUNT(*) AS totalentries FROM `dnlistings` WHERE '$active' = !true;");
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
			        $category = "Banking+Finance";
					
					$sql2 = "SELECT * FROM `dnlistings` WHERE (
			            `Active` LIKE '%$active%'
			            AND `Premium` LIKE '%$premium%' AND `Category` LIKE '%$category%') ORDER BY RAND();";

			        if(!$result = $db->query($sql2)){
			            die('Error, that\'s not good!<br> Please let us know and quote this:<br><br> [' . $db->error . ']');
			        } 

			        while($row = $result->fetch_assoc()){

			        include '../listings/premiump.php';		

			        }

			        $result = $db->query("SELECT COUNT(*) AS totalentries FROM `dnlistings` WHERE '$active' = !true;");
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
			        $category = "Banking+Finance";
					
					$sql1 = "SELECT * FROM `dnlistings` WHERE (
			            `Active` LIKE '%$active%'
			            AND `Premium` LIKE '%$premium%' AND `Category` LIKE '%$category%') ORDER BY RAND();";

			        if(!$result = $db->query($sql1)){
			            die('Error, that\'s not good!<br> Please let us know and quote this:<br><br> [' . $db->error . ']');
			        } 

			        while($row = $result->fetch_assoc()){

			        include '../listings/basicp.php';		

			        }

			        $result = $db->query("SELECT COUNT(*) AS totalentries FROM `dnlistings` WHERE '$active' = !true;");
			        $row = $result->fetch_assoc();

			        $result->close();

			        $db->close();

			?> 

		</div>				

	</div>

<?php include '../footerp.php'; ?>