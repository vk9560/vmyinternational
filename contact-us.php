<?php include('./inc/env.php')?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Contact Us - <?php echo $hostname ?></title>
	<?php include('./inc/css.php')?>
</head>

<body>
	<div id="preloader">
		<div id="status"></div>
	</div>
	<?php include('./inc/header.php')?>
	<section class="breadcrumb-main" style="background-image: url(images/breadcrumb/contact.jpg);">
		<div class="container">
			<div class="breadcrumb-inner">
				<h2>Contact Us</h2>
				<ul class="breadcrumb-url py-1">
					<li class="mr-3"><a href="http://<?php echo $host?>">Home</a></li>
					<li>Contact Us</li>
				</ul>
			</div>
		</div>
	</section>
	<section class="contact-us px-0 bg-theme">
		<div class="container">
			<div class="row match-height">
				<div class="col-lg-6 mb-3">
					<div class="card p-4">
						<div class="card-body">
							<div class="address">
								<h3 class="mb-4"><?php echo $hostname ?></h3>
								<ul>
									<li class="pb-2">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										<p><?php echo $address ?></p>
									</li>
									<li>
										<i class="fa fa-envelope" aria-hidden="true"></i>
										<p><a href="mailto:<?php echo $email1 ?>"><?php echo $email1 ?></a> / <a href="mailto:<?php echo $email2 ?>"><?php echo $email2 ?></a></p>
									</li>
									<li>
										<i class="fa fa-phone fa-flip-horizontal" aria-hidden="true"></i>
										<p><a href="tel:+91<?php echo $mobile ?>">+91 <?php echo $mobile ?></a></p>
									</li>
									<li>
										<i class="fa fa-globe" aria-hidden="true"></i>
										<p><a href="http://<?php echo $host ?>">www.<?php echo $host ?></a></p>
									</li>
									<li>
										<i class="fa fa-certificate" aria-hidden="true"></i>
										<p>CBSE Affilation No.<?php echo $CBSEAffilation ?></p>
									</li>
								</ul>
								<h3>Social Media</h3>
								<div class="socialLinks">
									<ul>
										<li class="pr-2">
											<a href="<?php echo $facebook ?>" target="_blank" class="bg-fb"><i class="fab fa-facebook-f"></i></a>
										</li>
										<li class="pr-2">
											<a href="<?php echo $whatsApp ?><?php echo $mobile ?>" class="bg-whatsapp"><i class="fab fa-whatsapp"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>							
				</div>						
				<div class="col-lg-6 mb-3">
					<div class="card p-4">
						<div class="card-body">
							<div class="contact-form">
								<h3>GET IN TOUCH</h3>
								<form class="m-auto text-center" method="post" action="javascript:void(0)">
									<div class="row mb-4">
										<div class="col">
											<div class="form-outline">
												<input type="text" id="name" name="name" class="form-control"
													placeholder="Name" required />
											</div>
										</div>
									</div>
									<div class="form-outline mb-4">
										<div class="row">
											<div class="col-md-6">
												<input type="email" id="email" name="email" class="form-control"
												placeholder="Email" required />
											</div>
											<div class="col-md-6">
												<input type="tel" id="mobile" name="mobile" class="form-control"
												placeholder="Mobile No" required />
											</div>
										</div>
									</div>
									<div class="form-outline mb-4">
										<textarea class="form-control" id="message" name="message" placeholder="Message"
											rows="4"></textarea>
									</div>
									<button type="submit" class="btn">Send Message</button>
								</form>
							</div>
						</div>
					</div>		
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-md-12">
				    <div class="card">
						<div class="card-body">
						   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3580.6794406726012!2d83.70093637604853!3d26.17456739142084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39922e974ed1ee6b%3A0x716d3da0cb25a299!2sVMY%20INTERNATIONAL%20SCHOOL!5e0!3m2!1sen!2sin!4v1683184788128!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include('./inc/footer.php')?>
	<?php include('./inc/js.php')?>

</body>

</html>
