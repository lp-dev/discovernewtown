		<div class="modal fade" id="contact" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">

					<form class="form-horizontal" action='' id="contactform" method='post' >

						<div class="modal-header">
							<h3>Contact Discover Newtown</h3>
						</div>
						<div class="modal-body">
							<div>
								<h4>Email address</h4>
								<p>contact@discovernewtown.co.nz</p>
							</div>
							<div>
								<h4>Send email from website</h4>
								<select class="form-control" id="emailsubject" name="emailsubject">
									<option>-- Choose email subject here --</option>
									<option name="emailsubject" value="General enquiry">General enquiry</option>
									<option name="emailsubject" value="Discover Newtown enquiry">Discover Newtown enquiry</option>
									<option name="emailsubject" value="Event enquiry">Event enquiry</option>
									<option name="emailsubject" value="Feedback / Suggestion">Feedback / Suggestion</option>
									<option name="emailsubject" value="Website building enquiry">Website building enquiry</option>
									<option name="emailsubject" value="Other enquiry">Other enquiry</option>
								</select>
							</div><br>

							<div class="form-group">
								<div class="col-lg-12">
									<input type="text" class="form-control" id="emailname" name="emailname" placeholder="First and last name">
								</div>
							</div>

							<div class="form-group">
								<div class="col-lg-12">
									<input type="text" class="form-control" id="emailbusiness" name="emailbusiness" placeholder="Business / Organisation">
								</div>
							</div>

							<div class="form-group">
								<div class="col-lg-12">
									<input type="email" class="form-control" id="emailemail" name="emailemail" placeholder="Email address">
								</div>
							</div>

							<div class="form-group">
								<div class="col-lg-12">
									<input type="text" class="form-control" id="emailphone" name="emailphone" placeholder="Phone number">
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-12">
									<input type="text" class="form-control" id="emailmobile" name="emailmobile" placeholder="Mobile number">
								</div>
							</div>

							<div class="form-group">
								<div class="col-lg-12">
									<textarea class="form-control limit" rows="8" id="emailmessage" name="emailmessage" placeholder="Message"></textarea>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<a class="btn btn-default" data-dismiss="modal">Close</a>
							<input type="submit" class="btn btn-primary" value="Send">
							<!-- <button class="btn btn-primary" type="submit">Send Message</a> -->
						</div>
					</form>

				</div>
			</div>
		</div>

	</div>
<!-- 	<nav class="navbar navbar-default navbar-fixed-bottom">
		<div class="container">
			<a  href="index.php"><button type="button" class="btn btn-default footerbuttons"><img class="homeimg" src="img/btns/home.png" alt="home"></img>Home</button></a>
			<button type="button" class="btn btn-default footerbuttons" data-toggle="modal" data-target="#contact"><img class="contactimg" src="img/btns/contact.png" alt="contact"></img>Contact</button>
		</div>
	</nav> -->
  </body>
</html>