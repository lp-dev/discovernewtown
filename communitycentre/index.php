<?php include '../headerp.php'; ?>

<?php include '../alertemail.php'; ?>

     <div class="container conmarg">


     	<?php
					
					include '../connect.php';

			        if($db->connect_errno > 0){
			            die('Unable to connect to database [' . $db->connect_error . ']');
			        }
		
					$active = "yes";
			        $premium = "yes";
			        $name = "Newtown Community and Cultural Centre";
		
					$sql = "SELECT * FROM `dnlistings` WHERE (
			            `Active` LIKE '%$active%'
			            AND `Premium` LIKE '%$premium%' AND `Name` LIKE '%$name%');";

			        if(!$result = $db->query($sql)){
			            die('Error, that\'s not good!<br> Please let us know and quote this:<br><br> [' . $db->error . ']');
			        } 

			        while($row = $result->fetch_assoc()){
			            // echo "<p>" . $row ['Business'] . " </p><br/>";

			        $extra1 = 'News';
			        $extra2 = 'Venue Hire';
			        $extra3 = 'Contact';

			        $caption1 = "Photo 1";
			        $subcaption1 = "";
			        $caption2 = "Photo 2";
			        $subcaption2 = "";
			        $caption3 = "Photo 3";
			        $subcaption3 = "";

					echo "

						<div class=\"col-md-3 middlebtmpad\" id=\"col3\">

					";

							include '../menu/addsearchp.php';
 							include '../menu/addmenup.php';

 					echo "

							<div>
								<span class=\"st_facebook_large\" displayText=\"Facebook\"></span>
								<span class=\"st_twitter_large\" displayText=\"Tweet\"></span>
								<span class=\"st_googleplus_large\" displayText=\"Google +\"></span>
								<span class=\"st_pinterest_large\" displayText=\"Pinterest\"></span>
								<span class=\"st_email_large\" displayText=\"Email\"></span>
							</div>
							<div class=\"media\">
								<div class=\"media-left\">
									<a href=\"#\">
										<img class=\"media-object signimg\" src=\"../img/btns/contact.png\" alt=\"contact\">
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
										<img class=\"media-object signimg\" src=\"../img/btns/hours.png\" alt=\"hours\">
									</a>
								</div>
								<div class=\"media-body\">
									<h4 class=\"media-heading\">Hours</h4>
									<p>Mon - Fri: 9:00am - 4:30pm</p>
									<p>Sat - Sun: Closed</p>
								</div>
							</div>

				            <a href=\"" . $row ['Website'] . "\" target=\"_blank\"><button type=\"button\" class=\"btn btn-default buttonmenu buttonbuffer\"><img class=\"menuimg\" src=\"../img/menu/link.png\" alt=\"link\">Visit website</img></button></a>
				            <a href=\"" . $row ['Facebook'] . "\" target=\"_blank\"><button type=\"button\" class=\"btn btn-default buttonmenu buttonbuffer\"><img class=\"menuimg\" src=\"../img/menu/link.png\" alt=\"link\">Visit Facebook page</img></button></a>
				            <a href=\"" . $row ['Extra1'] . "\" target=\"_blank\"><button type=\"button\" class=\"btn btn-default buttonmenu buttonbuffer\"><img class=\"menuimg\" src=\"../img/menu/link.png\" alt=\"link\">". $extra1 ."</img></button></a>
				            <a href=\"" . $row ['Extra2'] . "\" target=\"_blank\"><button type=\"button\" class=\"btn btn-default buttonmenu buttonbuffer\"><img class=\"menuimg\" src=\"../img/menu/link.png\" alt=\"link\">". $extra2 ."</img></button></a>
				            <a href=\"" . $row ['Extra3'] . "\" target=\"_blank\"><button type=\"button\" class=\"btn btn-default buttonmenu buttonbuffer\"><img class=\"menuimg\" src=\"../img/menu/link.png\" alt=\"link\">". $extra3 ."</img></button></a>

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
							      <img src=\"../" . $row ['Folder'] . "/slide1.jpg\" alt=\"slide1\">
							      <div class=\"carousel-caption\">

								  </div>
							    </div>
							    <div class=\"item\">
							      <img src=\"../" . $row ['Folder'] . "/slide2.jpg\" alt=\"slide1\">

							    </div>
							    <div class=\"item\">
							      <img src=\"../" . $row ['Folder'] . "/slide3.jpg\" alt=\"slide1\">

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
						<img class="media-object signimg" src="../img/sign/p60.png" alt="parking60">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">Colombo and Rintoul Street</h4>
					<p>Free ... minute parking on streets outside.</p>
				</div>
			</div>
			<div class="media">
				<div class="media-left">
					<a href="#">
						<img class="media-object languageimg" src="../img/sign/english.png" alt="english">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">English Language</h4>
					<p>English is spoken by staff.</p>
				</div>
			</div>
			<div class="media">
				<div class="media-left">
					<a href="#">
						<img class="media-object signimg" src="../img/sign/wheelchair.png" alt="wheelchair">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">Wheelchair Friendly</h4>
					<p>Front door has ramp access and many rooms are accessible on the ground floor.</p>
				</div>
			</div>
			<div class="media">
				<div class="media-left">
					<a href="#">
						<img class="media-object signimg" src="../img/sign/children.png" alt="children">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">Children Friendly</h4>
					<p>Babies and young children are welcome.</p>
				</div>
			</div>
			<div class="media">
				<div class="media-left">
					<a href="#">
						<img class="media-object signimg" src="../img/sign/dog.png" alt="dog">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">Dog Friendly</h4>
					<p>Guide dogs and private pets are allowed here.</p>
				</div>
			</div>
			<div class="media">
				<div class="media-left">
					<a href="#">
						<img class="media-object signimg" src="../img/sign/bicycle.png" alt="bicycle">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">Bike Friendly</h4>
					<p>Bikes are welcome. Please lock and leave them...</p>
				</div>
			</div>
			<div class="media">
				<div class="media-left">
					<a href="#">
						<img class="media-object signimg" src="../img/sign/femalewc.png" alt="femaleWC">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">Female Toilet</h4>
					<p>One shared female and male toilet is available to use.</p>
				</div>
			</div>
			<div class="media">
				<div class="media-left">
					<a href="#">
						<img class="media-object signimg" src="../img/sign/malewc.png" alt="maleWC">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">Male Toilet</h4>
					<p>One shared female and male toilet is available to use.</p>
				</div>
			</div>

     	</div>

	</div>

<?php include '../footerp.php'; ?>