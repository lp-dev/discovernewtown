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
			        $name = "The Beijing";
		
					$sql = "SELECT * FROM `dnlistings` WHERE (
			            `Active` LIKE '%$active%'
			            AND `Premium` LIKE '%$premium%' AND `Name` LIKE '%$name%');";

			        if(!$result = $db->query($sql)){
			            die('Error, that\'s not good!<br> Please let us know and quote this:<br><br> [' . $db->error . ']');
			        } 

			        while($row = $result->fetch_assoc()){
			            // echo "<p>" . $row ['Business'] . " </p><br/>";

			        $extra1 = 'Visit Twitter page';
			        $extra2 = 'View gallery';
			        $extra3 = 'View menu';

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
									<p>Mon: Closed</p>
									<p>Tue - Sun: 5:30pm - 10:00pm</p>
								</div>
							</div>

				            <a href=\"" . $row ['Website'] . "\" target=\"_blank\"><button type=\"button\" class=\"btn btn-default buttonmenu buttonbuffer\"><img class=\"menuimg\" src=\"img/menu/link.png\" alt=\"link\">Visit website</img></button></a>
				            <a href=\"" . $row ['Facebook'] . "\" target=\"_blank\"><button type=\"button\" class=\"btn btn-default buttonmenu buttonbuffer\"><img class=\"menuimg\" src=\"img/menu/link.png\" alt=\"link\">Visit Facebook page</img></button></a>
				            <a href=\"" . $row ['Extra1'] . "\" target=\"_blank\"><button type=\"button\" class=\"btn btn-default buttonmenu buttonbuffer\"><img class=\"menuimg\" src=\"img/menu/link.png\" alt=\"link\">". $extra1 ."</img></button></a>
				            <a href=\"" . $row ['Extra2'] . "\" target=\"_blank\"><button type=\"button\" class=\"btn btn-default buttonmenu buttonbuffer\"><img class=\"menuimg\" src=\"img/menu/link.png\" alt=\"link\">". $extra2 ."</img></button></a>
				            <a href=\"" . $row ['Extra3'] . "\" target=\"_blank\"><button type=\"button\" class=\"btn btn-default buttonmenu buttonbuffer\"><img class=\"menuimg\" src=\"img/menu/link.png\" alt=\"link\">". $extra3 ."</img></button></a>

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







		<!-- <div class="col-md-3 middlebtmpad" id="col3">

			<h1>About</h1><hr>

			<div class="media">
				<div class="media-left">
					<a href="#">
						<img class="media-object signimg" src="img/btns/contact.png" alt="contact">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">Contact information</h4>
					<p>64 Riddiford Street</p>
					<p>(04) 389 7988</p>
					<p>No email address.</p>
				</div>
			</div>

			<div class="media">
				<div class="media-left">
					<a href="#">
						<img class="media-object signimg" src="img/btns/hours.png" alt="hours">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">Hours</h4>
					<p>Mon: Closed</p>
					<p>Tue - Sun: 5:30pm - 10:00pm</p>
				</div>
			</div>

            <a href="https://www.google.co.nz" target="_blank"><button type="button" class="btn btn-default buttonmenu buttonbuffer"><img class="menuimg" src="img/menu/link.png" alt="link">Visit website</img></button></a>
            <a href="https://www.facebook.com" target="_blank"><button type="button" class="btn btn-default buttonmenu buttonbuffer"><img class="menuimg" src="img/menu/link.png" alt="link">Visit Facebook page</img></button></a>
            

            <a href="thebeijing/gallery.php" target="_blank"><button type="button" class="btn btn-default buttonmenu buttonbuffer"><img class="menuimg" src="img/menu/link.png" alt="link">View gallery</img></button></a>
            <a href="thebeijing/menu.pdf" target="_blank"><button type="button" class="btn btn-default buttonmenu buttonbuffer"><img class="menuimg" src="img/menu/link.png" alt="link">View menu</button></img></a>


		</div> -->

		<!-- <div class="col-md-6 middlebtmpad" id="col2">

			<h1>The Beijing</h1><hr>

			<div id="carouselpremium" class="carousel slide" data-ride="carousel">
			  
			  <ol class="carousel-indicators">
			    <li data-target="#carouselpremium" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselpremium" data-slide-to="1"></li>
			    <li data-target="#carouselpremium" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <img src="thebeijing/slide1.jpg" alt="slide1">
			      <div class="carousel-caption">
				    <h4>Special 1</h4>
				    <p>Duck...</p>
				  </div>
			    </div>
			    <div class="item">
			      <img src="thebeijing/slide2.jpg" alt="slide2">
			      <div class="carousel-caption">
				    <h4>Special 2</h4>
				    <p>Duck...</p>
				  </div>
			    </div>
			     <div class="item">
			      <img src="thebeijing/slide3.jpg" alt="slide3">
			      <div class="carousel-caption">
				    <h4>Special 3</h4>
				    <p>Goose!</p>
				  </div>
			    </div>
			  </div>
			  <a class="left carousel-control" href="#carouselpremium" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carouselpremium" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>

			<p>Learning his craft serving government and VIPs in top hotels in Beijing, Le Zhong Yin set up The Beijing in 1996 and it has been a Newtown destination ever since. Serving up Northern Chinese food, it is hard to visit The Beijing without having their incredible Peking Duck pancakes. Wafer thin pancakes, thinly sliced spring onion, cucumber and deliciously savoury slices of duck in a rich sauce.</p>
			
			<div class="google-maps">
				<iframe class="mapbuffer" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2996.782839362211!2d174.7796563!3d-41.3135876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d38affb48fed799%3A0xfe678d6b1165b520!2sBeijing+Restaurant!5e0!3m2!1sen!2snz!4v1441848513968" width="300" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>

		</div> -->

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
						<img class="media-object languageimg" src="img/sign/chinese.png" alt="chinese">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">Chinese Language</h4>
					<p>Fluent ... is spoken in this business.</p>
				</div>
			</div>
			<!-- <div class="media">
				<div class="media-left">
					<a href="#">
						<img class="media-object signimg" src="img/sign/wheelchair.png" alt="wheelchair">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">Wheelchair Friendly</h4>
					<p>Front door has ramp access option and...</p>
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
					<p>Baby and young children seating options as well as changing facilities are available. Ask for more information.</p>
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
					<p>...</p>
				</div>
			</div>
			<div class="media">
				<div class="media-left">
					<a href="#">
						<img class="media-object signimg" src="img/sign/accessiblewc.png" alt="accessibleWC">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">Accessible Toilet</h4>
					<p>One seperate accessible toilet is available for use. Customers only.</p>
				</div>
			</div>
			<div class="media">
				<div class="media-left">
					<a href="#">
						<img class="media-object signimg" src="img/sign/femalewc.png" alt="femaleWC">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">Female Toilet</h4>
					<p>One shared female and male toilet is available for customers to use.</p>
				</div>
			</div>
			<div class="media">
				<div class="media-left">
					<a href="#">
						<img class="media-object signimg" src="img/sign/malewc.png" alt="maleWC">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">Male Toilet</h4>
					<p>One shared female and male toilet is available for customers to use.</p>
				</div>
			</div> -->
			
     	</div>

	</div>

<?php include 'footer.php'; ?>