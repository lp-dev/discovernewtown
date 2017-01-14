<?php include 'header.php'; ?>

<?php include 'alertemail.php'; ?>

     <div class="container conmarg">

							

     	<?php

					//$db = new mysqli('localhost', 'besthai1_dnuser', 'dn_15Connect', 'besthai1_dnlistings');
			        //$db = new mysqli('localhost', 'root', '', 'besthai1_dnlistings');
					
					include 'connect.php';

			        if($db->connect_errno > 0){
			            die('Unable to connect to database [' . $db->connect_error . ']');
			        }

			        $active = "yes";
			        $premium = "yes";
			        $name = "Amadeus Hair";
		
					$sql = "SELECT * FROM `dnlistings` WHERE (
			            `Active` LIKE '%$active%'
			            AND `Premium` LIKE '%$premium%' AND `Name` LIKE '%$name%');";

			        if(!$result = $db->query($sql)){
			            die('Error, that\'s not good!<br> Please let us know and quote this:<br><br> [' . $db->error . ']');
			        } 

			        while($row = $result->fetch_assoc()){
			            // echo "<p>" . $row ['Business'] . " </p><br/>";

			        $extra1 = 'View services';

			        $caption1 = "";
			        $subcaption1 = "";
			        $caption2 = "";
			        $subcaption2 = "";
			        $caption3 = "";
			        $subcaption3 = "";

			  		// include 'menu/addsearch.php';
 					// include 'menu/addmenu.php';

					echo "

						<div class=\"col-md-3 middlebtmpad\" id=\"col3\">

					";

							include 'menu/addsearch.php';
 							include 'menu/addmenu.php';

 					echo "

							

							<div class=\"media\">
								<div class=\"media-left\">
									<a href=\"#\">
										<img class=\"media-object signimg\" src=\"img/btns/contact.png\" alt=\"contact\">
									</a>
								</div>
								<div class=\"media-body\">
									<h4 class=\"media-heading\">Contact information</h4>
									<p>" . $row ['Address'] . "</p>
									<p>" . $row ['Phone'] . "</p>
									<p>" . $row ['Email'] . "</p>
								</div>
							</div>

							<div class=\"media\">
								<div class=\"media-left\">
									<a href=\"#\">
										<img class=\"media-object signimg\" src=\"img/btns/hours.png\" alt=\"hours\">
									</a>
								</div>
								<div class=\"media-body\">
									<h4 class=\"media-heading\">Hours</h4>
									<p>Mon-Thu: 9:30am - 6:30pm</p>
									<p>Fri: 9:30am - 7:30pm</p>
									<p>Sat & Sun: 9:30pm - 5:00pm</p>
								</div>
							</div>

				            <a href=\"" . $row ['Website'] . "\" target=\"_blank\"><button type=\"button\" class=\"btn btn-default buttonmenu buttonbuffer\"><img class=\"menuimg\" src=\"img/menu/link.png\" alt=\"link\">Visit website</img></button></a>
				            <a href=\"" . $row ['Facebook'] . "\" target=\"_blank\"><button type=\"button\" class=\"btn btn-default buttonmenu buttonbuffer\"><img class=\"menuimg\" src=\"img/menu/link.png\" alt=\"link\">Visit Facebook page</img></button></a>
				            <a href=\"" . $row ['Extra1'] . "\" target=\"_blank\"><button type=\"button\" class=\"btn btn-default buttonmenu buttonbuffer\"><img class=\"menuimg\" src=\"img/menu/link.png\" alt=\"link\">". $extra1 ."</img></button></a>

						</div>

						<div class=\"col-md-6 middlebtmpad\" id=\"col2\">

							<h1>" . $row ['Name'] . "</h1><hr>

							<div id=\"carouselpremium\" class=\"carousel slide\" data-ride=\"carousel\">
							  
							  <ol class=\"carousel-indicators\">
							    <li data-target=\"#carouselpremium\" data-slide-to=\"0\" class=\"active\"></li>
							    <li data-target=\"#carouselpremium\" data-slide-to=\"1\"></li>
							    <li data-target=\"#carouselpremium\" data-slide-to=\"2\"></li>
							  </ol>
							  <div class=\"carousel-inner\" role=\"listbox\">
							    <div class=\"item active\">
							      <img src=\"" . $row ['Folder'] . "/slide1.jpg\" alt=\"slide1\">
							      <div class=\"carousel-caption\">
								    <h4>" . $caption1 . "</h4>
								    <p>" . $subcaption1 . "</p>
								  </div>
							    </div>
							    <div class=\"item\">
							      <img src=\"" . $row ['Folder'] . "/slide2.jpg\" alt=\"slide1\">
							      <div class=\"carousel-caption\">
								    <h4>" . $caption2 . "</h4>
								    <p>" . $subcaption2 . "</p>
								  </div>
							    </div>
							    <div class=\"item\">
							      <img src=\"" . $row ['Folder'] . "/slide3.jpg\" alt=\"slide1\">
							      <div class=\"carousel-caption\">
								    <h4>" . $caption3 . "</h4>
								    <p>" . $subcaption3 . "</p>
								  </div>
							    </div>
							  </div>
							  <a class=\"left carousel-control\" href=\"#carouselpremium\" role=\"button\" data-slide=\"prev\">
							    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
							    <span class=\"sr-only\">Previous</span>
							  </a>
							  <a class=\"right carousel-control\" href=\"#carouselpremium\" role=\"button\" data-slide=\"next\">
							    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
							    <span class=\"sr-only\">Next</span>
							  </a>
							</div>

							<p>" . $row ['LDescription'] . "</p>
							
							<div class=\"google-maps\">
								<iframe class=\"mapbuffer\" src=\"" . $row ['Map'] . "\" width=\"300\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
							</div>

						</div>

					";


			        }

			        $result = $db->query("SELECT COUNT(*) AS totalentries FROM `dnlistings` WHERE '$name' = !true;");
			        $row = $result->fetch_assoc();
			        //echo "<br><hr>".$row['totalentries']." entries in database (<b>FIX THIS FEATURE LATER - # RESULTS</b>)";

			        $result->close();

			        $db->close();

			?> 





		<div class="col-md-3 middlebtmpad" id="col3">
	  	
	  	<h1>Features</h1><hr>

     		<div class="media">
				<div class="media-left">
					<a href="#">
						<img class="media-object signimg" src="img/sign/p60.png" alt="parking60">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">Riddiford Street</h4>
					<p>Free 60 minute parking on street outside.</p>
				</div>
			</div>
			<div class="media">
				<div class="media-left">
					<a href="#">
						<img class="media-object languageimg" src="img/sign/english.png" alt="english">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">English Language</h4>
					<p>Fluent English is spoken in this business.</p>
				</div>
			</div>
			<div class="media">
				<div class="media-left">
					<a href="#">
						<img class="media-object languageimg" src="img/sign/malay.png" alt="english">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">Malay Language</h4>
					<p>Fluent Malay is spoken in this business.</p>
				</div>
			</div>
			<div class="media">
				<div class="media-left">
					<a href="#">
						<img class="media-object languageimg" src="img/sign/chinese.png" alt="english">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">Chinese Language (multiple dialects)</h4>
					<p>Fluent Chinese is spoken in this business.</p>
				</div>
			</div>
			<div class="media">
				<div class="media-left">
					<a href="#">
						<img class="media-object languageimg" src="img/sign/samoan.png" alt="english">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">Samoan Language</h4>
					<p>Conversational Samoan is spoken in this business.</p>
				</div>
			</div>
			<div class="media">
				<div class="media-left">
					<a href="#">
						<img class="media-object signimg" src="img/sign/children.png" alt="children">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">Children Friendly</h4>
					<p>Babies and children are welcome to accompany adults.</p>
				</div>
			</div>
			<div class="media">
				<div class="media-left">
					<a href="#">
						<img class="media-object signimg" src="img/sign/dog.png" alt="dog">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">Dog Friendly</h4>
					<p>Guide dogs and private pets are allowed in this business.</p>
				</div>
			</div>
			<div class="media">
				<div class="media-left">
					<a href="#">
						<img class="media-object signimg" src="img/sign/bicycle.png" alt="bicycle">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">Bike Friendly</h4>
					<p>Bikes are allowed in this business.</p>
				</div>
			</div>
			
     	</div>

	</div>

<?php include 'footer.php'; ?>