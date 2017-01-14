$(window).load(function(){

	$('#newslettermodal').modal('show');

	$('#filterpreference').on('change', function() {
		if ( this.value == 'Emergency')
		{
		$("#emergencyfilter").show();
		$("#accommodationfilter").hide();
		$("#automotivefilter").hide();
		$("#bankingfinancefilter").hide();
		$("#communityfilter").hide();
		$("#computersitfilter").hide();
		$("#educationfilter").hide();
		$("#entertainmentfilter").hide();
		$("#fooddrinkfilter").hide();
		$("#healthbeautyfilter").hide();
		$("#medicalfilter").hide();
		$("#retailshoppingfilter").hide();
		$("#sportsrecreationfilter").hide();
		$("#tradesservicesfilter").hide();
		$("#otherfilter").hide();
		}
		else
		{
		$("#emergencyfilter").hide();
		}

	});

	$('#filterpreference').on('change', function() {
		if ( this.value == 'Accommodation')
		{
		$("#emergencyfilter").hide();
		$("#accommodationfilter").show();
		$("#automotivefilter").hide();
		$("#bankingfinancefilter").hide();
		$("#communityfilter").hide();
		$("#computersitfilter").hide();
		$("#educationfilter").hide();
		$("#entertainmentfilter").hide();
		$("#fooddrinkfilter").hide();
		$("#healthbeautyfilter").hide();
		$("#medicalfilter").hide();
		$("#retailshoppingfilter").hide();
		$("#sportsrecreationfilter").hide();
		$("#tradesservicesfilter").hide();
		$("#otherfilter").hide();
		}
		else
		{
		$("#accomodationfilter").hide();
		}

	});

	$('#filterpreference').on('change', function() {
		if ( this.value == 'Automotive')
		{
		$("#emergencyfilter").hide();
		$("#accommodationfilter").hide();
		$("#automotivefilter").show();
		$("#bankingfinancefilter").hide();
		$("#communityfilter").hide();
		$("#computersitfilter").hide();
		$("#educationfilter").hide();
		$("#entertainmentfilter").hide();
		$("#fooddrinkfilter").hide();
		$("#healthbeautyfilter").hide();
		$("#medicalfilter").hide();
		$("#retailshoppingfilter").hide();
		$("#sportsrecreationfilter").hide();
		$("#tradesservicesfilter").hide();
		$("#otherfilter").hide();
		}
		else
		{
		$("#automotivefilter").hide();
		}
	});

	$('#filterpreference').on('change', function() {
		if ( this.value == 'Banking+Finance')
		{
		$("#emergencyfilter").hide();
		$("#accommodationfilter").hide();
		$("#automotivefilter").hide();
		$("#bankingfinancefilter").show();
		$("#communityfilter").hide();
		$("#computersitfilter").hide();
		$("#educationfilter").hide();
		$("#entertainmentfilter").hide();
		$("#fooddrinkfilter").hide();
		$("#healthbeautyfilter").hide();
		$("#medicalfilter").hide();
		$("#retailshoppingfilter").hide();
		$("#sportsrecreationfilter").hide();
		$("#tradesservicesfilter").hide();
		$("#otherfilter").hide();
		}
		else
		{
		$("#bankingfinancefilter").hide();
		}
	});

	$('#filterpreference').on('change', function() {
		if ( this.value == 'Community')
		{
		$("#emergencyfilter").hide();
		$("#accommodationfilter").hide();
		$("#automotivefilter").hide();
		$("#bankingfinancefilter").hide();
		$("#communityfilter").show();
		$("#computersitfilter").hide();
		$("#educationfilter").hide();
		$("#entertainmentfilter").hide();
		$("#fooddrinkfilter").hide();
		$("#healthbeautyfilter").hide();
		$("#medicalfilter").hide();
		$("#retailshoppingfilter").hide();
		$("#sportsrecreationfilter").hide();
		$("#tradesservicesfilter").hide();
		$("#otherfilter").hide();
		}
		else
		{
		$("#communityfilter").hide();
		}
	});

	$('#filterpreference').on('change', function() {
		if ( this.value == 'Computers+IT')
		{
		$("#emergencyfilter").hide();
		$("#accommodationfilter").hide();
		$("#automotivefilter").hide();
		$("#bankingfinancefilter").hide();
		$("#communityfilter").hide();
		$("#computersitfilter").show();
		$("#educationfilter").hide();
		$("#entertainmentfilter").hide();
		$("#fooddrinkfilter").hide();
		$("#healthbeautyfilter").hide();
		$("#medicalfilter").hide();
		$("#retailshoppingfilter").hide();
		$("#sportsrecreationfilter").hide();
		$("#tradesservicesfilter").hide();
		$("#otherfilter").hide();
		}
		else
		{
		$("#computersitfilter").hide();
		}
	});

	$('#filterpreference').on('change', function() {
		if ( this.value == 'Education')
		{
		$("#emergencyfilter").hide();
		$("#accommodationfilter").hide();
		$("#automotivefilter").hide();
		$("#bankingfinancefilter").hide();
		$("#communityfilter").hide();
		$("#computersitfilter").hide();
		$("#educationfilter").show();
		$("#entertainmentfilter").hide();
		$("#fooddrinkfilter").hide();
		$("#healthbeautyfilter").hide();
		$("#medicalfilter").hide();
		$("#retailshoppingfilter").hide();
		$("#sportsrecreationfilter").hide();
		$("#tradesservicesfilter").hide();
		$("#otherfilter").hide();
		}
		else
		{
		$("#educationfilter").hide();
		}
	});

	$('#filterpreference').on('change', function() {
		if ( this.value == 'Entertainment')
		{
		$("#emergencyfilter").hide();
		$("#accommodationfilter").hide();
		$("#automotivefilter").hide();
		$("#bankingfinancefilter").hide();
		$("#communityfilter").hide();
		$("#computersitfilter").hide();
		$("#educationfilter").hide();
		$("#entertainmentfilter").show();
		$("#fooddrinkfilter").hide();
		$("#healthbeautyfilter").hide();
		$("#medicalfilter").hide();
		$("#retailshoppingfilter").hide();
		$("#sportsrecreationfilter").hide();
		$("#tradesservicesfilter").hide();
		$("#otherfilter").hide();
		}
		else
		{
		$("#entertainmentfilter").hide();
		}
	});

	$('#filterpreference').on('change', function() {
		if ( this.value == 'Food+Drink')
		{
		$("#emergencyfilter").hide();
		$("#accommodationfilter").hide();
		$("#automotivefilter").hide();
		$("#bankingfinancefilter").hide();
		$("#communityfilter").hide();
		$("#computersitfilter").hide();
		$("#educationfilter").hide();
		$("#entertainmentfilter").hide();
		$("#fooddrinkfilter").show();
		$("#healthbeautyfilter").hide();
		$("#medicalfilter").hide();
		$("#retailshoppingfilter").hide();
		$("#sportsrecreationfilter").hide();
		$("#tradesservicesfilter").hide();
		$("#otherfilter").hide();
		}
		else
		{
		$("#fooddrinkfilter").hide();
		}
	});

	$('#filterpreference').on('change', function() {
		if ( this.value == 'Health+Beauty')
		{
		$("#emergencyfilter").hide();
		$("#accommodationfilter").hide();
		$("#automotivefilter").hide();
		$("#bankingfinancefilter").hide();
		$("#communityfilter").hide();
		$("#computersitfilter").hide();
		$("#educationfilter").hide();
		$("#entertainmentfilter").hide();
		$("#fooddrinkfilter").hide();
		$("#healthbeautyfilter").show();
		$("#medicalfilter").hide();
		$("#retailshoppingfilter").hide();
		$("#sportsrecreationfilter").hide();
		$("#tradesservicesfilter").hide();
		$("#otherfilter").hide();
		}
		else
		{
		$("#healthbeautyfilter").hide();
		}
	});

	$('#filterpreference').on('change', function() {
		if ( this.value == 'Medical')
		{
		$("#emergencyfilter").hide();
		$("#accommodationfilter").hide();
		$("#automotivefilter").hide();
		$("#bankingfinancefilter").hide();
		$("#communityfilter").hide();
		$("#computersitfilter").hide();
		$("#educationfilter").hide();
		$("#entertainmentfilter").hide();
		$("#fooddrinkfilter").hide();
		$("#healthbeautyfilter").hide();
		$("#medicalfilter").show();
		$("#retailshoppingfilter").hide();
		$("#sportsrecreationfilter").hide();
		$("#tradesservicesfilter").hide();
		$("#otherfilter").hide();
		}
		else
		{
		$("#medicalfilter").hide();
		}
	});

	$('#filterpreference').on('change', function() {
		if ( this.value == 'Retail+Shopping')
		{
		$("#emergencyfilter").hide();
		$("#accommodationfilter").hide();
		$("#automotivefilter").hide();
		$("#bankingfinancefilter").hide();
		$("#communityfilter").hide();
		$("#computersitfilter").hide();
		$("#educationfilter").hide();
		$("#entertainmentfilter").hide();
		$("#fooddrinkfilter").hide();
		$("#healthbeautyfilter").hide();
		$("#medicalfilter").hide();
		$("#retailshoppingfilter").show();
		$("#sportsrecreationfilter").hide();
		$("#tradesservicesfilter").hide();
		$("#otherfilter").hide();
		}
		else
		{
		$("#retailshoppingfilter").hide();
		}
	});

	$('#filterpreference').on('change', function() {
		if ( this.value == 'Sports+Recreation')
		{
		$("#emergencyfilter").hide();
		$("#accommodationfilter").hide();
		$("#automotivefilter").hide();
		$("#bankingfinancefilter").hide();
		$("#communityfilter").hide();
		$("#computersitfilter").hide();
		$("#educationfilter").hide();
		$("#entertainmentfilter").hide();
		$("#fooddrinkfilter").hide();
		$("#healthbeautyfilter").hide();
		$("#medicalfilter").hide();
		$("#retailshoppingfilter").hide();
		$("#sportsrecreationfilter").show();
		$("#tradesservicesfilter").hide();
		$("#otherfilter").hide();
		}
		else
		{
		$("#sportsrecreationfilter").hide();
		}
	});

	$('#filterpreference').on('change', function() {
		if ( this.value == 'Trades+Services')
		{
		$("#emergencyfilter").hide();
		$("#accommodationfilter").hide();
		$("#automotivefilter").hide();
		$("#bankingfinancefilter").hide();
		$("#communityfilter").hide();
		$("#computersitfilter").hide();
		$("#educationfilter").hide();
		$("#entertainmentfilter").hide();
		$("#fooddrinkfilter").hide();
		$("#healthbeautyfilter").hide();
		$("#medicalfilter").hide();
		$("#retailshoppingfilter").hide();
		$("#sportsrecreationfilter").hide();
		$("#tradesservicesfilter").show();
		$("#otherfilter").hide();
		}
		else
		{
		$("#tradesservicesfilter").hide();
		}
	});

	$('#filterpreference').on('change', function() {
		if ( this.value == 'Other')
		{
		$("#emergencyfilter").hide();
		$("#accommodationfilter").hide();
		$("#automotivefilter").hide();
		$("#bankingfinancefilter").hide();
		$("#communityfilter").hide();
		$("#computersitfilter").hide();
		$("#educationfilter").hide();
		$("#entertainmentfilter").hide();
		$("#fooddrinkfilter").hide();
		$("#healthbeautyfilter").hide();
		$("#medicalfilter").hide();
		$("#retailshoppingfilter").hide();
		$("#sportsrecreationfilter").hide();
		$("#tradesservicesfilter").hide();
		$("#otherfilter").show();
		}
		else
		{
		$("#otherfilter").hide();
		}
	});

	$('.showmenu').click(function() {
	    $('.catmenu').slideToggle("fast");
	});

	$('.showindexinfo').click(function() {
	    $('.indexinfo').slideToggle("fast");
	    $(".showindexinfo").hide();
	    $('.hideindexinfo2').show();
	});

	$('.hideindexinfo2').click(function() {
	    $('.indexinfo').slideToggle("fast");
	    $(".showindexinfo").show();
	    $('.hideindexinfo2').hide();
	});

	$('.showmap').click(function() {
	    $('.mapshow').slideToggle("fast");
	});


	$('.showfb').click(function() {
	    $('.fbmenu').slideToggle("fast");
	});

	$('.showlinks').click(function() {
	    $('.linksmenu').slideToggle("fast");
	});

	$('.websiteenquiry').click(function() {
	    $("#emailsubject").val("Website building enquiry");
	});

	$('.newenquiry').click(function() {
	    $("#emailsubject").val("-- Choose email subject here --");
	});

	$('.eventenquiry').click(function() {
	    $("#emailsubject").val("Event enquiry");
	});


	// $('#savefilters').click(function() {
	//     // $("#emailsubject").val("-- Choose email subject here --");

	// });

	// var today = new Date();
 //  	var expiry = new Date(today.getTime() + 30 * 24 * 3600 * 1000);
 //  	//30 DAYS

	// function setCookie(name, value)
	// 	{
	// 	document.cookie=name + "=" + escape(value) + "; path=/; expires=" + expiry.toGMTString();
	// 	}

	// function storeValues(form)  
	// 	{
	// 	setCookie("bakery", filterform.bakery.value);
	// 	// setCookie("field2", form.field2.value);
	// 	// setCookie("field3", form.field3.value);
	// 	// setCookie("field4", form.field4.value);
	// 	return true;
	// 	}

	// if(bakery = getCookie("bakery")) document.filterform.bakery.value = bakery;
	// // if(field2 = getCookie("field2")) document.myForm.field2.value = field2;
	// // if(field3 = getCookie("field3")) document.myForm.field3.value = field3;
	// // if(field4 = getCookie("field4")) document.myForm.field4.value = field4;

	// function getCookie(name)
	// 	{
	// 	var re = new RegExp(name + "=([^;]+)");
	// 	var value = re.exec(document.cookie);
	// 	return (value != null) ? unescape(value[1]) : null;
	// 	}

	// document.write(getCookie("bakery"));

	var myWindow;
	var URL = "resultsFD.php";

	function openWin() {
	    myWindow = window.open(URL, "_blank", "");
	}

	function closeWin() {
	    myWindow.close();
	}

});