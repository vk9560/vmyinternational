<?php include('./inc/env.php')?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Photo Gallery - <?php echo $hostname ?></title>
	<?php include('./inc/css.php')?>
	<style>
		.photo-gallery .content{
			display:none;
		}
	</style>
</head>

<body>
	<div id="preloader">
		<div id="status"></div>
	</div>
	<?php include('./inc/header.php')?>
	<section class="breadcrumb-main" style="background-image: url(images/breadcrumb/gallery.jpg);">
		<div class="container">
			<div class="breadcrumb-inner">
				<h2>Photo Gallery</h2>
				<ul class="breadcrumb-url py-1">
					<li class="mr-3"><a href="http://<?php echo $host?>">Home</a></li>
					<li>Photo Gallery</li>
				</ul>
			</div>
		</div>
	</section>
	<section class="photo-gallery px-0 py-5">
		<div class="container">
			<div class="row match-height">
				<div class="col-lg-4 col-md-6 col-12 mb-3 content">
					<div class="card">
						<div class="card-body p-1">
							<a href="images/gallery/1.webp" data-lightbox="gallery">
								<img src="images/gallery/1.webp" alt="<?php echo $hostname ?>" class="demo-image" />
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 mb-3 content">
					<div class="card">
						<div class="card-body p-1">
							<a href="images/gallery/2.webp" data-lightbox="gallery">
								<img src="images/gallery/2.webp" alt="<?php echo $hostname ?>" class="demo-image" />
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 mb-3 content">
					<div class="card">
						<div class="card-body p-1">
							<a href="images/gallery/3.webp" data-lightbox="gallery">
								<img src="images/gallery/3.webp" alt="<?php echo $hostname ?>" class="demo-image" />
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 mb-3 content">
					<div class="card">
						<div class="card-body p-1">
							<a href="images/gallery/4.webp" data-lightbox="gallery">
								<img src="images/gallery/4.webp" alt="<?php echo $hostname ?>" class="demo-image" />
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 mb-3 content">
					<div class="card">
						<div class="card-body p-1">
							<a href="images/gallery/5.webp" data-lightbox="gallery">
								<img src="images/gallery/5.webp" alt="<?php echo $hostname ?>" class="demo-image" />
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 mb-3 content">
					<div class="card">
						<div class="card-body p-1">
							<a href="images/gallery/6.webp" data-lightbox="gallery">
								<img src="images/gallery/6.webp" alt="<?php echo $hostname ?>" class="demo-image" />
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 mb-3 content">
					<div class="card">
						<div class="card-body p-1">
							<a href="images/gallery/7.webp" data-lightbox="gallery">
								<img src="images/gallery/7.webp" alt="<?php echo $hostname ?>" class="demo-image" />
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 mb-3 content">
					<div class="card">
						<div class="card-body p-1">
							<a href="images/gallery/8.webp" data-lightbox="gallery">
								<img src="images/gallery/8.webp" alt="<?php echo $hostname ?>" class="demo-image" />
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 mb-3 content">
					<div class="card">
						<div class="card-body p-1">
							<a href="images/gallery/9.webp" data-lightbox="gallery">
								<img src="images/gallery/9.webp" alt="<?php echo $hostname ?>" class="demo-image" />
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 mb-3 content">
					<div class="card">
						<div class="card-body p-1">
							<a href="images/gallery/10.webp" data-lightbox="gallery">
								<img src="images/gallery/10.webp" alt="<?php echo $hostname ?>" class="demo-image" />
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 mb-3 content">
					<div class="card">
						<div class="card-body p-1">
							<a href="images/gallery/11.webp" data-lightbox="gallery">
								<img src="images/gallery/11.webp" alt="<?php echo $hostname ?>" class="demo-image" />
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 mb-3 content">
					<div class="card">
						<div class="card-body p-1">
							<a href="images/gallery/12.webp" data-lightbox="gallery">
								<img src="images/gallery/12.webp" alt="<?php echo $hostname ?>" class="demo-image" />
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 mb-3 content">
					<div class="card">
						<div class="card-body p-1">
							<a href="images/gallery/13.webp" data-lightbox="gallery">
								<img src="images/gallery/14.webp" alt="<?php echo $hostname ?>" class="demo-image" />
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 mb-3 content">
					<div class="card">
						<div class="card-body p-1">
							<a href="images/gallery/15.webp" data-lightbox="gallery">
								<img src="images/gallery/15.webp" alt="<?php echo $hostname ?>" class="demo-image" />
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 mb-3 content">
					<div class="card">
						<div class="card-body p-1">
							<a href="images/gallery/16.webp" data-lightbox="gallery">
								<img src="images/gallery/16.webp" alt="<?php echo $hostname ?>" class="demo-image" />
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 mb-3 content">
					<div class="card">
						<div class="card-body p-1">
							<a href="images/gallery/17.webp" data-lightbox="gallery">
								<img src="images/gallery/17.webp" alt="<?php echo $hostname ?>" class="demo-image" />
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 mb-3 content">
					<div class="card">
						<div class="card-body p-1">
							<a href="images/gallery/18.webp" data-lightbox="gallery">
								<img src="images/gallery/18.webp" alt="<?php echo $hostname ?>" class="demo-image" />
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 mb-3 content">
					<div class="card">
						<div class="card-body p-1">
							<a href="images/gallery/19.webp" data-lightbox="gallery">
								<img src="images/gallery/19.webp" alt="<?php echo $hostname ?>" class="demo-image" />
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 mb-3 content">
					<div class="card">
						<div class="card-body p-1">
							<a href="images/gallery/20.webp" data-lightbox="gallery">
								<img src="images/gallery/20.webp" alt="<?php echo $hostname ?>" class="demo-image" />
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 mb-3 content">
					<div class="card">
						<div class="card-body p-1">
							<a href="images/gallery/21.webp" data-lightbox="gallery">
								<img src="images/gallery/21.webp" alt="<?php echo $hostname ?>" class="demo-image" />
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 mb-3 content">
					<div class="card">
						<div class="card-body p-1">
							<a href="images/gallery/22.webp" data-lightbox="gallery">
								<img src="images/gallery/22.webp" alt="<?php echo $hostname ?>" class="demo-image" />
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 mb-3 content">
					<div class="card">
						<div class="card-body p-1">
							<a href="images/gallery/23.webp" data-lightbox="gallery">
								<img src="images/gallery/23.webp" alt="<?php echo $hostname ?>" class="demo-image" />
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 mb-3 content">
					<div class="card">
						<div class="card-body p-1">
							<a href="images/gallery/24.webp" data-lightbox="gallery">
								<img src="images/gallery/24.webp" alt="<?php echo $hostname ?>" class="demo-image" />
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 mb-3 content">
					<div class="card">
						<div class="card-body p-1">
							<a href="images/gallery/25.webp" data-lightbox="gallery">
								<img src="images/gallery/25.webp" alt="<?php echo $hostname ?>" class="demo-image" />
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 mb-3 content">
					<div class="card">
						<div class="card-body p-1">
							<a href="images/gallery/26.webp" data-lightbox="gallery">
								<img src="images/gallery/26.webp" alt="<?php echo $hostname ?>" class="demo-image" />
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 mb-3 content">
					<div class="card">
						<div class="card-body p-1">
							<a href="images/gallery/27.webp" data-lightbox="gallery">
								<img src="images/gallery/27.webp" alt="<?php echo $hostname ?>" class="demo-image" />
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 mb-3 content">
					<div class="card">
						<div class="card-body p-1">
							<a href="images/gallery/28.webp" data-lightbox="gallery">
								<img src="images/gallery/28.webp" alt="<?php echo $hostname ?>" class="demo-image" />
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 mb-3 content">
					<div class="card">
						<div class="card-body p-1">
							<a href="images/gallery/29.webp" data-lightbox="gallery">
								<img src="images/gallery/29.webp" alt="<?php echo $hostname ?>" class="demo-image" />
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 mb-3 content">
					<div class="card">
						<div class="card-body p-1">
							<a href="images/gallery/30.webp" data-lightbox="gallery">
								<img src="images/gallery/30.webp" alt="<?php echo $hostname ?>" class="demo-image" />
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 mb-3 content">
					<div class="card">
						<div class="card-body p-1">
							<a href="images/gallery/31.webp" data-lightbox="gallery">
								<img src="images/gallery/31.webp" alt="<?php echo $hostname ?>" class="demo-image" />
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 mb-3 content">
					<div class="card">
						<div class="card-body p-1">
							<a href="images/gallery/32.webp" data-lightbox="gallery">
								<img src="images/gallery/32.webp" alt="<?php echo $hostname ?>" class="demo-image" />
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 mb-3 content">
					<div class="card">
						<div class="card-body p-1">
							<a href="images/gallery/33.webp" data-lightbox="gallery">
								<img src="images/gallery/33.webp" alt="<?php echo $hostname ?>" class="demo-image" />
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 mb-3 content">
					<div class="card">
						<div class="card-body p-1">
							<a href="images/gallery/34.webp" data-lightbox="gallery">
								<img src="images/gallery/34.webp" alt="<?php echo $hostname ?>" class="demo-image" />
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 mb-3 content">
					<div class="card">
						<div class="card-body p-1">
							<a href="images/gallery/35.webp" data-lightbox="gallery">
								<img src="images/gallery/35.webp" alt="<?php echo $hostname ?>" class="demo-image" />
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 mb-3 content">
					<div class="card">
						<div class="card-body p-1">
							<a href="images/gallery/36.webp" data-lightbox="gallery">
								<img src="images/gallery/36.webp" alt="<?php echo $hostname ?>" class="demo-image" />
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 mb-3 content">
					<div class="card">
						<div class="card-body p-1">
							<a href="images/gallery/37.webp" data-lightbox="gallery">
								<img src="images/gallery/37.webp" alt="<?php echo $hostname ?>" class="demo-image" />
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 mb-3 content">
					<div class="card">
						<div class="card-body p-1">
							<a href="images/gallery/38.webp" data-lightbox="gallery">
								<img src="images/gallery/38.webp" alt="<?php echo $hostname ?>" class="demo-image" />
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 mb-3 content">
					<div class="card">
						<div class="card-body p-1">
							<a href="images/gallery/39.webp" data-lightbox="gallery">
								<img src="images/gallery/39.webp" alt="<?php echo $hostname ?>" class="demo-image" />
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12 mb-3 content">
					<div class="card">
						<div class="card-body p-1">
							<a href="images/gallery/40.webp" data-lightbox="gallery">
								<img src="images/gallery/40.webp" alt="<?php echo $hostname ?>" class="demo-image" />
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-2 col-12 mt-4 text-center mx-auto">
					  <a href="#" id="loadMore" class="btn payment-btn">Load More</a>
				</div>
			</div>
		</div>
	</section>
	<?php include('./inc/footer.php')?>
	<?php include('./inc/js.php')?>
	<script>
		$(document).ready(function(){
			$(".content").slice(0, 9).show();
			$("#loadMore").on("click", function(e){
				e.preventDefault();
				$(".content:hidden").slice(0, 9).slideDown();
				if($(".content:hidden").length == 0) {
				$("#loadMore").text("No Content").addClass("noContent");
				}
			});
		})
	</script>
</body>

</html>
