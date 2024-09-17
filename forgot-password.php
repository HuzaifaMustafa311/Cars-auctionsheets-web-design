<?php include 'includes/head.php';?>
<?php include 'includes/header.php';?>
<main>
	<!-- introBlock -->
	<div class="introBlock innerPagesBanner">
		<!-- ibsColumn -->
		<article class="ibsColumn text-center d-flex w-100 position-relative text-white fontAlter">
			<div class="alignHolder w-100 d-flex align-items-center">
				<div class="align w-100 py-8 py-md-14 py-lg-20">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<h1 class="text-white font-weight-bold mb-4 h2Large">Forgot Password</h1>
								<ul class="list-unstyled cbbPageList text-capitalize d-flex align-items-center justify-content-center flex-wrap mb-0 p-0">
									<li><a href="index.php">Home</a></li>
									<li>Forgot Password</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<span class="bgCover ibsBgWrap w-100 h-100 position-absolute" style="background-image: url(assets/images/m-2-r.png);"></span>
		</article>
	</div>
	<!-- Mmy_Account-Section -->
	<section class="login_section py-8 py-md-15 fontAlter">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">
					<div class="tab-content" id="loginTabContent">
						<form class="welcome-card">
							<h2 class="text-center mb-5">Forgot Password</h2>
							<div class="form-group mb-0">
								<label for="email">Email <span class="text-danger">*</span></label>
								<input type="email" id="email01" class="form-control">
							</div>
							<div class="d-flex justify-content-end mb-3">
								<a href="signup.php" class="text-body txtLink">Sign up</a>
							</div>
							<button type="submit" class="btn btnThemeAlt fwMedium w-100 mx-auto d-block text-capitalize position-relative border-0 p-0" data-hover="Reset Password">
							<span class="d-block btnText">Reset Password</span>
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php include 'includes/footer.php';?>
<?php include 'includes/script.php';?>