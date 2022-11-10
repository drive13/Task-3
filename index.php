<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

	<style>
		@font-face {
			font-family: regularMonstserrat;
			src: url("Asset/Font/Montserrat/Montserrat-Regular.ttf");
		}

		@font-face {
			font-family: boldMonstserrat;
			src: url("Asset/Font/Montserrat/Montserrat-Bold.ttf");
		}

		body {
			font-family: regularMonstserrat;
			background-color: rgb(192, 247, 247);
		}

		.btn-heading1 {
			background-color: blueviolet;
			color: azure;
		}

		.btn-heading1:hover {
			background-color: rgb(159, 73, 239);
			color: rgb(168, 242, 242);
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2),
				0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}

		.heading-bold {
			font-family: boldMonstserrat;
		}

		.image-header {
			position: absolute;
			/* left: 50%; */
		}

		.image-recBot {
			position: absolute;
			z-index: 0;
			top: 0px;
			left: 0px;
			max-width: 360px;
			height: auto;
		}

		.image-recTop {
			position: absolute;
			z-index: 1;
			top: -10px;
			left: 10px;
			max-width: 360px;
			height: auto;
		}

		.image-male {
			position: absolute;
			z-index: 2;
			top: -30px;
			left: 180px;
			max-width: 246px;
			height: auto;
		}

		.image-woman {
			position: absolute;
			z-index: 3;
			top: -30px;
			left: -75px;
			max-width: 279px;
			height: auto;
		}

		@media only screen and (max-width: 763px) {
			.image-header {
				position: absolute;
				/* left: 0%; */
			}

			.col-xl-6 {
				height: auto;
				width: 100%;
			}
		}
	</style>

	<title>Test Mock UP!</title>
</head>

<body>
	<div class="container">
		<header>
			<div class="row mt-5 flex-column mx-auto">
				<!-- Text Header -->
				<div class="col-xl-6 mb-5">
					<div class="p3 mx-auto">
						<!-- Text -->
						<div class="text-heading py-4">
							<h3><b class="heading-bold">Access Practical</b></h3>
							<h3><b class="heading-bold">Online Course</b></h3>
							<h4>
								<b class="heading-bold">Explore</b>,
								<b class="heading-bold">Educate</b>, become an
								<b class="heading-bold">Expert</b>
							</h4>
						</div>
						<div class="button-heading mt-2">
							<a class="btn btn-heading1" href="#">Daftar Sekarang</a>
						</div>
					</div>
				</div>
				<!-- Image Header-->
				<div class="col-xl-6 mb-5 d-block">
					<!-- Image -->
					<div class="p3 mx-auto">
						<div class="image-header">
							<img class="image-recTop" src="Asset/Rectangle 2.png" alt="Rectangle2" />
							<img class="image-recBot" src="Asset/Rectangle 1.png" alt="Rectangle1" />
							<img class="image-male" src="Asset/Man-01.png" alt="Male" />
							<img class="image-woman" src="Asset/Woman-01.png" alt="woman" />
						</div>
					</div>
				</div>
			</div>
		</header>
	</div>

	<!-- Bootstrap 5 JS -->
	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<!-- Option 2: Separate Popper and Bootstrap JS -->
	<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>