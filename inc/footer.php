<footer id="footer">
		<div class="footer-upper">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<div class="f-maincontent">
							<img src="images/logo.webp" alt="" />
							<p><?php echo $footerText ?></p>
						</div>
					</div>
					<div class="col-lg-2 col-md-4">
						<div class="ft-lists">
							<h4 class="foo-title">QUICK LINKS</h4>
							<ul>
								<li><a href="about-the-school.html">Our School</a></li>
								<li><a href="principals-message.html">Principal's Message</a></li>
								<li><a href="chairman-message.html">Chairman's Message</a></li>
								<li><a href="manager-message.html">Manager's Message</a></li>
								<li><a href="contact-us.html">Contact Us</a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-4">
						<div class="ft-lists">
							<h4 class="foo-title">&nbsp;</h4>
							<ul>
								<li><a href="admission-procedure.html">Admission Criteria</a></li>
								<li><a href="fee-structure.html">Fee Structure</a></li>
								<li><a href="http://<?php echo $host ?>/images/VMY-International-School.pdf">School Prospectus</a></li>	
								<li><a href="admission-enquiry.html">Admission Enquiry</a></li>
								<li><a href="tc.html">Download TC</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-4">
						<div class="ft-lists">
							<h4 class="foo-title">Help?</h4>
							<ul>
								<li><a href="javascript:void(0)">FAQ'S</a></li>
								<li><a href="javascript:void(0)">Term & Condition</a></li>
								<li><a href="javascript:void(0)">Privacy Policy</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-4">
						<div class="socialLinks">
							<h4 class="foo-title">FOLLOW US</h4>
							<div class="f-maincontent">
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
			<div class="copyright-main">
				<div class="container">
					<div class="copyright-text d-flex justify-content-center">
						<p class="m-0">© <?php echo date("Y"); ?> <?php echo $hostname ?>. All rights reserved</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	
	<div id="back-to-top">
		<a href="#"></a>
	</div>
	<!--Start Floating WhatsApp-->
	<div class="whatsAppFloating">
		<a href="<?php echo $whatsApp ?><?php echo $mobile ?>">
			<i class="fab fa-whatsapp"></i>
		</a>
	</div>
	<!--END Floating WhatsApp -->
