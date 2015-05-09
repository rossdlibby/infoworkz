<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	$header = '<title>Welcome to Infoworkz Solutions Group LLC, Contact</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">';
	include_once('includes/header.php'); ?>
<!-- END HEADER -->


<!-- INNER BANNER -->
<div class="w-section inner-banner" id="top" data-ix="show-top-btn">
	<div class="w-container">
		<div class="w-row">
			<div class="w-col w-col-9">
				<div class="breadcrumb">Contact Page&nbsp;<span class="lighter"><span>|</span> <em>about this service</em></span></div>
			</div>
			<div class="w-col w-col-3 left-aglin-column cetner">
				<div><a class="bread-link" href="index.html">Home</a>&nbsp; <span><span class="gr-color-l">|&nbsp;</span></span>&nbsp;Contact Page</div>
			</div>
		</div>
	</div>
</div>
<!-- END INNER BANNER -->

<!-- CONTACT -->
<div class="w-section section">
	<div class="w-container">
		<div class="tittle-wrapper">
			<h3 class="h-minimal">Contact</h3>
			<div class="w-col w-col-2 w-col-offset-4">
				<p style="text-align: left;"><strong>Phone: </strong>410-543-4848<br>
					<strong>Fax: </strong>410-452-7088</p>
			</div>
			<div class="w-col w-col-2">
				<p style="text-align: left;"><strong>Office Address:</strong><br>1325 Mt. Hermon Road<br>Suite 16B<br>Salisbury, MD 21804<br><span class="hand-of-sean"></span></p>
			</div>
		</div>
		<div class="inner-space">
			<div class="w-row">
				<div class="w-col w-col-12">
					<div class="tittle-line">
						<h5>write us</h5>
						<div class="divider-1 small">
							<div class="divider-small"></div>
						</div>
					</div>
				<div>
			<div>
				<form id="email-form" name="email-form" method="POST" data-name="Email Form">
					<div class="w-col w-col-6">
						<div class="row">
							<div class="w-col w-col-1 contact-icon">
								<i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp;
							</div>
							<div class="w-col w-col-11">
								<input class="w-input text-field" id="name" type="text" placeholder="Enter your name" name="name" data-name="Name" required>
							</div>
						</div>
						<div class="row">
							<div class="w-col w-col-1 contact-icon">
								<i class="fa fa-building"></i>&nbsp;&nbsp;&nbsp;
							</div>
							<div class="w-col w-col-11">
								<input class="w-input text-field" id="company" type="text" placeholder="Enter your company" name="company" data-name="Company" required>
							</div>
						</div>
						<div class="row">
							<div class="w-col w-col-1 contact-icon">
								<i class="fa fa-briefcase"></i>&nbsp;&nbsp;&nbsp;
							</div>
							<div class="w-col w-col-11">
								<input class="w-input text-field" id="business" type="text" placeholder="Enter your business type" name="business" data-name="Business" required>
							</div>
						</div>
						<div class="row">
							<div class="w-col w-col-1 contact-icon">
								<i class="fa fa-link"></i>&nbsp;&nbsp;&nbsp;
							</div>
							<div class="w-col w-col-11">
								<input class="w-input text-field" id="website" type="text" placeholder="Enter your website" name="website" data-name="Website" required>
							</div>
						</div>
						<div class="row">
							<div class="w-col w-col-1 contact-icon">
								<i class="fa fa-envelope"></i>&nbsp;&nbsp;&nbsp;
							</div>
							<div class="w-col w-col-11">
								<input class="w-input text-field" id="email" type="email" name="email" placeholder="Enter your email address" data-name="Email" required>
							</div>
						</div>
					</div>
					<div class="w-col w-col-6">
						<div class="row">
							<div class="w-col w-col-1 contact-icon">
								<i class="fa fa-flag"></i>&nbsp;&nbsp;&nbsp;
							</div>
							<div class="w-col w-col-11">
								<input class="w-input text-field" id="address" type="text" placeholder="Enter your address" name="address" data-name="Address" required>
							</div>
						</div>
						<div class="row">
							<div class="w-col w-col-1 contact-icon">
								<i class="fa fa-location-arrow"></i>&nbsp;&nbsp;&nbsp;
							</div>
							<div class="w-col w-col-11">
								<input class="w-input text-field" id="city" type="text" placeholder="Enter your city" name="city" data-name="City" required>
							</div>
						</div>
						<div class="row">
							<div class="w-col w-col-1 contact-icon">
								<i class="fa fa-globe"></i>&nbsp;&nbsp;&nbsp;
							</div>
							<div class="w-col w-col-11">
								<input class="w-input text-field" id="state" type="text" placeholder="Enter your state" name="state" data-name="State" required>
							</div>
						</div>
						<div class="row">
							<div class="w-col w-col-1 contact-icon">
								<i class="fa fa-truck"></i>&nbsp;&nbsp;&nbsp;
							</div>
							<div class="w-col w-col-11">
								<input class="w-input text-field" id="zip" type="text" placeholder="Enter your zip code" name="zip" data-name="Zip" required>
							</div>
						</div>
						<div class="row">
							<div class="w-col w-col-1 contact-icon">
								<i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;
							</div>
							<div class="w-col w-col-11">
								<input class="w-input text-field" id="phone" type="text" placeholder="Enter your phone number" name="phone" data-name="Phone" required>
							</div>
						</div>
					</div>
					<?php /*<input class="w-input text-field" id="subject" type="text" name="subject" placeholder="Enter your subject" data-name="Subject">
					<textarea class="w-input text-area" id="text-area" name="message" required placeholder="Your message here..." data-name="Text Area"></textarea>*/ ?>
					<div class="space" style="text-align: right;">
						<button class="w-button button" type="submit">Submit Message</button>
					</div>
				</form>
				<div id="result"></div>
				<!--div class="w-form-done">
				<p>Thank you! Your submission has been received!</p>
				</div>
				<div class="w-form-fail">
				<p>Oops! Something went wrong while submitting the form :(</p>
				</div-->
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
<!-- END CONTACT -->

<!-- OPEN MAP -->
<div class="call-to-action">
	<div class="w-container">
		<div class="hero-center-div">
			<a class="w-inline-block map-block" href="#" data-ix="open-map">
				<div class="mp-txt">Find Us on Google Maps</div>
				<div class="map-arrow">
					<div class="w-embed"><i class="fa fa-chevron-down"></i>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>
<div class="map" data-ix="remove-map">
	<div class="w-widget w-widget-map" data-widget-latlng="38.366328,-75.56496" data-widget-style="terrain" data-widget-zoom="13" data-disable-scroll="1"></div>
</div>
<!-- END OPEN MAP -->


<!-- START FOOTER -->
<?php include_once('includes/footer.php'); ?>
<!-- END FOOTER -->

<!-- Scripts -->
<?php include_once('includes/scripts.php'); ?>
<!-- End scripts -->

</body>
</html>