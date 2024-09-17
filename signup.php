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
								<h1 class="text-white font-weight-bold mb-4 h2Large">Sign Up</h1>
								<ul class="list-unstyled cbbPageList text-capitalize d-flex align-items-center justify-content-center flex-wrap mb-0 p-0">
									<li><a href="index.html">Home</a></li>
									<li>Sign Up</li>
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
				<div class="col-12 col-sm-10 col-md-7">
					<form action="#" class="welcome-card">
						<h2 class="text-center mb-5">Sign Up</h2>
						<div class="row justify-content-center">
							<div class="col-md-6">
								<div class="form-group">
									<label for="email">Full Name <span class="text-danger">*</span></label>
									<input type="text" id="email" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="pass">Country</label>
									<!-- <span class="fLabel text-capitalize d-block">Country</span> -->
									<div class="coolSelectWrapper">
										<select class="coolSelect form-control" id="country">
											<option value="1" disabled="">Select an Account</option>
											<option value="2">Personal</option>
											<option value="5">Business</option>
											<option value="5">Car Seller</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="email">Email Address <span class="text-danger">*</span></label>
							<input type="email" id="email" class="form-control">
						</div>
						<div class="form-group">
							<label for="pass">Password <span class="text-danger">*</span></label>
							<input type="password" id="pass" class="form-control">
						</div>
						<div class="form-group">
							<label for="pass">Confirm Password <span class="text-danger">*</span></label>
							<input type="password" id="pass" class="form-control">
						</div>

						<div class="d-flex justify-content-between">
				            <div class="form-group mb-0" style="display: flex; align-items: baseline;">
				            	<input type="checkbox" name="cstatus" id="toption" value="0">
				            	<label for="option" class="mb-0">
				                  <span>I have read, understood and agree the</span>
				              <div class="invalid-tooltip" style="color: red;" id="tcheck_validate"></div>
				            <a href="#" target="_blank">Terms &amp; Conditions</a></label>
				            </div>
							<div class="">
								<a href="login.php" class="text-primary txtLink">Login</a>
							</div>
				        </div>

						<button type="submit" class="btn btnThemeAlt fwMedium w-50 mx-auto d-block text-capitalize position-relative border-0 mt-5 p-0" data-hover="Sign Up">
						<span class="d-block btnText">Sign Up</span>
						</button>
					</form>
				</div>
			</div>
		</div>
	</section>
</main>
<?php include 'includes/footer.php';?>
<?php include 'includes/script.php';?>