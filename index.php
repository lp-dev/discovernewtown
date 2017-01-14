<?php include 'header.php'; ?>

<?php include 'alertemail.php'; ?>

    <div class="container conmarg">

<?php //include 'menu/main.php'; ?>
<div class="col-md-3" id="col1">
	<?php include 'menu/addsearch.php'; ?>
	<?php include 'menu/addmenu.php'; ?>
</div>

		<div class="col-md-6 middlebtmpad" id="col2">

			<!-- <h1>Welcome to Discover Newtown</h1><hr> -->

			<!-- <img src="img/home-image.jpg" class="img-responsive" alt="Home banner image"> -->
			<div id="carouselcommunity" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
<!-- 			  <ol class="carousel-indicators">
			    <li data-target="#carouselcommunity" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselcommunity" data-slide-to="1"></li>
			    <li data-target="#carouselcommunity" data-slide-to="2"></li>
			  </ol>
 -->
<?php
	echo "
			<div class=\"carousel-inner\" role=\"listbox\">
			    <div class=\"item active\">
					<a href=\"thebeijing\"><img src=\"thebeijing/listing.jpg\" alt=\"slide1\"></img></a>
					<div class=\"slidetext\">
					  <h4>The Beijing</h4>
					  <p>Serving up Northern Chinese food, it is hard to visit The Beijing without having their incredible Peking Duck pancakes.</p>
					  <a href=\"thebeijing\"><button type=\"button\" class=\"btn btn-default tenpad listingbtn\"><img class=\"listingimg\" src=\"img/btns/webpage.png\" alt=\"webpage\">More info</button></a>
					</div>
			    </div>
			    <div class=\"item\">
					<a href=\"amadeushair\"><img src=\"amadeushair/listing.jpg\" alt=\"slide2\"></img></a>
					<div class=\"slidetext\">
					  <h4>Amadeus Hair</h4>
					  <p>Amadeus Hair and Beauty is the premier hair salon in Wellington and caters for all your hair style requirements.</p>
					  <a href=\"amadeushair\"><button type=\"button\" class=\"btn btn-default tenpad listingbtn\"><img class=\"listingimg\" src=\"img/btns/webpage.png\" alt=\"webpage\">More info</button></a>
					</div>
			    </div>
			</div>
	";

				// <div class=\"item\">
			 //        <img src=\"notices/slide1.jpg\" alt=\"slide3\">
			 //        <div class=\"slidetext\">
				//       <h4>Premium example</h4>
				//       <p>Description</p>
				//       <a href=\"premium.php\"><button type=\"button\" class=\"btn btn-default tenpad listingbtn\"><img class=\"listingimg\" src=\"img/btns/webpage.png\" alt=\"webpage\">More info</button></a>
			 //      	</div>
			 //    </div>
?>

<!-- 			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <img src="notices/slide1.jpg" alt="slide1">
			      <h4>Business name 1</h4>
			      <p>A description could go here...</p>
			    </div>
			    <div class="item">
			      <img src="notices/slide2.jpg" alt="slide2">
			      <h4>Business name 1</h4>
			      <p>A description could go here...</p>
			    </div>
			     <div class="item">
			      <img src="notices/slide3.jpg" alt="slide3">
			      <h4>Business name 1</h4>
			      <p>A description could go here...</p>
			    </div>
			  </div> -->

<!-- 			  <a class="left carousel-control" href="#carouselcommunity" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carouselcommunity" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a> -->

			</div>


<?php
	// echo "
	// 	<div class=\"col-md-12 listingpadding middlebtmpad\">

	// 		<div class=\"col-md-4 listingpadding\">
	// 			<a href=\"" . $row ['Page'] . "\"><img src=\"" . $row ['Photo'] . "\" class=\"img-responsive listimg\" alt=\"premiumlisting\"></a>
	// 		</div>

	// 		<div class=\"col-md-4 middlebtmpad\">
	// 			<h4 class=\"list-group-item-heading\">" . $row ['Name'] . "</h4>
	// 			<p class=\"list-group-item-text\">" . $row ['Address'] . "</p>
	// 			<p class=\"list-group-item-text\">" . $row ['Phone'] . "</p>
	// 		</div>

	// 		<div class=\"col-md-4 middlebtmpad\">
	// 			<p class=\"list-group-item-text\">" . $row ['SDescription'] . "</p>
	// 			<a href=\"" . $row ['Page'] . "\"><button type=\"button\" class=\"btn btn-default tenpad listingbtn\"><img class=\"listingimg\" src=\"img/btns/webpage.png\" alt=\"webpage\">More info</button></a>
	// 		</div>

	// 		<div class=\"col-md-12\">
	// 			<h6 class=\"list-group-item-heading\">Filters: " . $row ['Filters'] . "</h6>
	// 		</div>

	// 	</div>
	// ";
?>



			<h2 class="titlepad">Your online guide to Newtown.</h2><hr> 
			
			<p>Discover Newtown offers residents, business owners, community organisations, local clubs and visitors an online hub, where you can connect with the wider Newtown community and promote what Newtown has to offer.</p>
			
		    

	        <div class="indexinfo hideindexinfo">
	           
	           <p>We offer a wide variety of resources for the Newtown community including:</p>
				<ul class="">
				    <li>Newtown Business Directory.</li>
				    <li>Newtown Organisation Directory.</li>
				    <li>Community noticeboard with For Sale, Wanted, Public Notices and Events.</li>
				    <li>Emergency listings e.g. Wellington Hospital Emergency Department, after hours pharmacy, after hours doctors.</li>
				    <li>Community listings e.g. local clubs, Residents Association.</li>
				    <li>Trades and Services listings e.g. plumbers, builders, electricians.</li>
				    <li>Food and Drink listings e.g. restaurants, cafes, bars.</li>
				    <li>Plus more.</li>
				</ul>
				<p>Start taking advantage now of Discover Newtowns free services to find helpful information and also share with others in the community.</p>
				<p>Do you have anything you would like to suggest? We appreciate ideas to improve what we can offer to our Newtown community.</p><br>

				<button type="button" class="btn btn-default footerbuttons stretch newenquiry" data-toggle="modal" data-target="#contact"><img class="contactimg" src="img/btns/contact.png" alt="contact"></img>Contact us</button>
           
	        </div>

	        <button type="button" class="btn btn-default headerelement stretch showindexinfo"><img class="joinimg " src="img/btns/menu.png" alt="category menu">More info</img></button>
	        <button type="button" class="btn btn-default headerelement stretch hideindexinfo hideindexinfo2"><img class="joinimg " src="img/btns/minus.png" alt="category menu">Hide info</img></button>

		    
		</div>

		<div class="col-md-3 middlebtmpad" id="col3">

<?php include 'menu/links.php'; ?>

<!-- NEWSLETTER -- >

		<!-- <div class="modal fade" id="newslettermodal" tabindex="-1" role="dialog" aria-labelledby="newslettermodallabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h3 class="modal-title" id="newslettermodallabel">Welcome to Discover Newtown.</h3>
					</div>
					<div class="modal-body">
						<h4>Would you like to subscribe to our newsletter?</h4>
						<form class="form-horizontal">
							<div class="form-group">

							   	<div class="col-sm-12 newsletterinput">
							    	<input type="text" class="form-control" id="exampleInputName2" placeholder="First & Last names">
							    </div>
								<div class="col-sm-12 newsletterinput">
									<input type="email" class="form-control" id="inputEmail3" placeholder="Email address">
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Dismiss</button>
						<button type="button" class="btn btn-primary">Subscribe</button>
					</div>
				</div>
			</div>
		</div> -->
		
<?php include 'footer.php'; ?>