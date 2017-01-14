<?php

	// echo "
	// 	<div class=\"col-md-12 listingpadding\">

	// 		<div class=\"col-md-4 listingpadding middlebtmpad\">
	// 			<a href=\"" . $row ['Page'] . "\" target=\"_blank\"><img src=\"" . $row ['Photo'] . "\" class=\"img-responsive listimg\" alt=\"premiumlisting\"></a>
	// 		</div>

	// 		<div class=\"col-md-4 middlebtmpad\">
	// 			<h4 class=\"list-group-item-heading\">" . $row ['Name'] . "</h4>
	// 			<p class=\"list-group-item-text\">" . $row ['Address'] . "</p>
	// 			<p class=\"list-group-item-text\">" . $row ['Phone'] . "</p>
	// 		</div>

	// 		<div class=\"col-md-4 middlebtmpad\">
	// 			<p class=\"list-group-item-text\">" . $row ['SDescription'] . "</p>
	// 			<a href=\"" . $row ['Page'] . "\" target=\"_blank\"><button type=\"button\" class=\"btn btn-default tenpad listingbtn\"><img class=\"listingimg\" src=\"img/btns/webpage.png\" alt=\"webpage\">More info</button></a>
	// 		</div>

	// 		<div class=\"col-md-12 middlebtmpad\">
	// 			<h4 class=\"list-group-item-heading\">" . $row ['Filters'] . "</h4>
	// 			<h5 class=\"list-group-item-heading\">" . $row ['Filters'] . "</h5>
	// 		</div>

	// 	</div>
	// ";

	echo "
		<div class=\"col-md-12 listingpadding middlebtmpad\">

			<div class=\"col-md-4 listingpadding\">
				<a href=\"" . $row ['Page'] . "\"><img src=\"" . $row ['Photo'] . "\" class=\"img-responsive listimg\" alt=\"premiumlisting\"></a>
			</div>

			<div class=\"col-md-4 middlebtmpad\">
				<h4 class=\"list-group-item-heading\">" . $row ['Name'] . "</h4>
				<p class=\"list-group-item-text\">" . $row ['Address'] . "</p>
				<p class=\"list-group-item-text\">" . $row ['Phone'] . "</p>
			</div>

			<div class=\"col-md-4 middlebtmpad\">
				<p class=\"list-group-item-text\">" . $row ['SDescription'] . "</p>
				<a href=\"" . $row ['Page'] . "\"><button type=\"button\" class=\"btn btn-default tenpad listingbtn\"><img class=\"listingimg\" src=\"img/btns/webpage.png\" alt=\"webpage\">More info</button></a>
			</div>

			<div class=\"col-md-12\">
				<h6 class=\"list-group-item-heading\">Filters: " . $row ['Filters'] . "</h6>
			</div>

		</div>
	";


?>