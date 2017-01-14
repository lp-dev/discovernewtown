<?php include 'header.php'; ?>

    <div class="container conmarg">
	  
<?php include 'menu/add.php'; ?>

<?php

		//$db = new mysqli('localhost', 'besthai1_dnuser', 'dn_15Connect', 'besthai1_dnlistings');
		//$db = new mysqli('localhost', 'root', '', 'besthai1_dnlistings');

        include 'connect.php';

		if (mysqli_connect_errno()) {
		    printf("Connect failed: %s\n", mysqli_connect_error());
		    exit();
		}

		// $name = $mysqli->real_escape_string($_POST["namefield"]);
		
		//$contactname       = $_POST ['contactname'];
        //$contactphone   = $_POST ['contactphone'];
        //$contactmobile   = $_POST ['contactmobile'];
        //$contactemail      = $_POST ['contactemail'];
        $businessname       = $_POST ['businessname'];
        $address     = $_POST ['address'];
        $businessphone   = $_POST ['businessphone'];
        $businessemail      = $_POST ['businessemail'];
        $subcategory = $_POST ['subcategory'];
        $website   = $_POST ['website'];
        $faceb       = $_POST ['faceb'];
        $extralinks      = $_POST ['extralinks'];
        $shortdescription    = $_POST ['shortdescription'];
        
        //$addpremium    = $_POST ['addpremium'];
        //$buildwebsite    = $_POST ['buildwebsite'];
        //$buildfacebook    = $_POST ['buildfacebook'];

        //$longdescription       = $_POST ['longdescription'];

        //$extramessage    = $_POST ['extramessage'];
        //$agree    = $_POST ['agree'];

        $category = $_POST ['filterpreference'];

        // foreach($_POST['category'] as $value) {
        //     $category .= "$value, ";
        // }

        foreach($_POST['subcategory'] as $value) {
            $subcategory .= "$value, ";
        }

        foreach($_POST['type'] as $value) {
            $type .= "$value, ";
        }

        foreach($_POST['cost'] as $value) {
            $cost .= "$value, ";
        }

        foreach($_POST['extras'] as $value) {
            $extras .= "$value, ";
        }

        foreach($_POST['features'] as $value) {
            $features .= "$value, ";
        }


		// $query = "INSERT INTO dnlistings (one) VALUES (Contact name: ' . $contactname . ". \n" . 'Contact phone: ' . $contactphone . ". \n" . 'Contact mobile: ' . $contactmobile . ". \n" . 'Contact email: ' . $contactemail . ". \n" . 'Business name: ' . $businessname . ". \n" . 'Street address: ' . $address . ". \n" . 'Business phone: ' . $businessphone . ". \n" . 'Business email: ' . $businessemail . ". \n" . 'Category: ' . $category . ". \n" . 'Subcategory: ' . $subcategory . ". \n" . 'Type: ' . $type . ". \n" . 'Cost: ' . $cost . ". \n" . 'Extras: ' . $extras . ". \n" . 'Features: ' . $features . ". \n" . 'Website: ' . $website . ". \n" . 'Facebook: ' . $faceb . ". \n" . 'Extra links: ' . $extralinks . ". \n" . 'Short description: ' . $shortdescription . ". \n" . 'Extra message: ' . $extramessage . ". \n" . 'Upgrade to premium: ' . $addpremium . ". \n" . 'Build a website: ' . $buildwebsite . ". \n" . 'Build a Facebook page: ' . $buildfacebook . ". \n" . 'Agreed to T&Cs: ' . $agree);"		
		// $query = "INSERT INTO dnlistings (Personal, Business, Extras, SDescription, LDescription, Category, Filters, Premium, Comments, TC) VALUES ('$contactname, $contactphone, $contactmobile, $contactemail','$businessname, $address, $businessphone, $businessemail','$website, $faceb, $extralinks','$shortdescription','Add manually',$category','$subcategory, $type, $cost, $extras, $features','$website, $faceb, $extralinks','$extramessage','$agree')";
		
        // JOIN QUERY ---> $query = "INSERT INTO dnlistings (Personal, Business, Extras, SDescription, LDescription, Category, Filters, Premium, Comments, TC) VALUES ('$contactname, $contactphone, $contactmobile, $contactemail','$businessname, $address, $businessphone, $businessemail','$website, $faceb, $extralinks','$shortdescription','Add manually','$category','$subcategory, $type, $cost, $extras, $features','$addpremium, $buildwebsite, $buildfacebook','$extramessage','$agree')";
        

        // ACTIVE QUERY ---> $query = "INSERT INTO dnlistings (Active, Premium, Name, Address, Phone, Email, Website, Facebook, Extras, Category, Filters, Summary) VALUES ('no','no','$businessname','$address','$businessphone','$businessemail','$website','$faceb','$extralinks','$category','$subcategory, $type, $cost, $extras, $features','$businessname, $address, $businessphone, $businessemail')";


        $query = "INSERT INTO dnlistings (Active, Premium, Name, Address, Phone, Email, Website, Facebook, Extras, Category, Filters, TC, Summary, Searches) VALUES ('no','no','$businessname','$address','$businessphone','$businessemail','$website','$faceb','$extralinks','$category','$subcategory, $type, $cost, $extras, $features','$agree','$businessname, $address, $businessphone, $businessemail','$businessname, $address, $subcategory, $type, $cost, $extras, $features')";

       
        // $query = "INSERT INTO `markermake` VALUES ('$name','$about','$tags','$contact','$email','$lat','$long','$location','$fb','$fb2','$url','$markertype','$theme','');";

		$db->query($query) or die($query.'<br />'.$db->error);

		$db->close();

?>

	  <div class="col-md-6 middlebtmpad" id="col2">

		<!-- <div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert"></button><h4>Sign up was successful!</h4></div> -->

	  	<h1>Submitted to database</h1><hr>

		<h3>Database entries:</h3><br /><br />

<?php

        //$db = new mysqli('localhost', 'besthai1_dnuser', 'dn_15Connect', 'besthai1_dnlistings');
        //$db = new mysqli('localhost', 'root', '', 'besthai1_dnlistings');
        
        include 'connect.php';

        if($db->connect_errno > 0){
            die('Unable to connect to database [' . $db->connect_error . ']');
        }

        //$searchterm = "active";
        $searchterm = "";

        $sql = "SELECT * FROM `dnlistings` WHERE (
            `Active` LIKE '%$searchterm%'
            OR `Active` LIKE '% $searchterm %'
            OR `Active` LIKE '% $searchterm'
            OR `Active` LIKE '$searchterm %'
            OR `Active` LIKE '%$searchterm') ORDER BY `Number` DESC ;";

        if(!$result = $db->query($sql)){
            die('Error, that\'s not good!<br> Please let us know and quote this:<br><br> [' . $db->error . ']');
        } 

        // while($row = $result->fetch_assoc()){
        //  echo "<b>" .$row ['name'] . " - </b>" .$row ['about'] . " <i>" . $row['tags'] . "</i><div class=\"feedspacer\"></div>" ;
        // }

        while($row = $result->fetch_assoc()){
            echo "<p>" . $row ['Summary'] . " </p><hr>";
        }

        $result = $db->query("SELECT COUNT(*) AS totalentries FROM `dnlistings` WHERE '$searchterm' = !true;");

        $row = $result->fetch_assoc();
        //echo "<br><hr>".$row['totalentries']." entries in database (<b>FIX THIS FEATURE LATER - # RESULTS</b>)";

        $result->close();

        $db->close();

        //mail($businessemail, 'Discover Newtown Confirmation', 'Test', 'From: contact@discovernewtown.co.nz');
        
        //mail('contact@discovernewtown.co.nz', 'Discover Newtown Sign Up', 'Contact name: ' . $contactname . ". \n" . 'Contact phone: ' . $contactphone . ". \n" . 'Contact mobile: ' . $contactmobile . ". \n" . 'Contact email: ' . $contactemail . ". \n" . 'Business name: ' . $businessname . ". \n" . 'Street address: ' . $address . ". \n" . 'Business phone: ' . $businessphone . ". \n" . 'Business email: ' . $businessemail . ". \n" . 'Category: ' . $category . ". \n" . 'Subcategory: ' . $subcategory . ". \n" . 'Type: ' . $type . ". \n" . 'Cost: ' . $cost . ". \n" . 'Extras: ' . $extras . ". \n" . 'Features: ' . $features . ". \n" . 'Website: ' . $website . ". \n" . 'Facebook: ' . $faceb . ". \n" . 'Extra links: ' . $extralinks . ". \n" . 'Short description: ' . $shortdescription . ". \n" . 'Extra message: ' . $extramessage . ". \n" . 'Upgrade to premium: ' . $addpremium . ". \n" . 'Build a website: ' . $buildwebsite . ". \n" . 'Build a Facebook page: ' . $buildfacebook . ". \n" . 'Agreed to T&Cs: ' . $agree . ".", 'From: contact@discovernewtown.co.nz');
        //mail($businessemail, 'Discover Newtown Confirmation', 'Thank you for your interest in Discover Newtown.' . "\n" . 'We will respond to your enquiry shortly to confirm your free classified listing.', 'From: contact@discovernewtown.co.nz');
        
        //mail($contactemail

        // header('Location: ../build/done.php');

?> 

	  </div>

<?php include 'menu/blank.php'; ?>
	
<?php include 'footer.php'; ?>