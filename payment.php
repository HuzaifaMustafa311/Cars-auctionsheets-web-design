<?php include 'includes/head.php';?>
<?php include 'includes/header.php';?>
<style type="text/css">
	.nav-tabs {
    	border-bottom: 1px solid #0078b4;
	}
	.nav .nav-item .navWidth{
		width: 235px !important;
	}
	.nav .nav-item{
	}

	.nav .nav-item .fakeRadioInput {
    	max-width: 215px;
	}
	.nav-tabs .nav-link {

		padding: 0.5rem 0.5rem;
	}
	.nav-tabs .nav-link.active {
	    border-bottom: 1px solid transparent;
	    border-top: 1px solid #0078b4;
	    border-left: 1px solid #0078b4;
	    border-right: 1px solid #0078b4;
	}
	.nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
    	/*border-color: #2db7ff #2db7ff #2db7ff;
    	border-bottom: none;*/
	}
	.shippingRow .col02{
		text-align: end;
		vertical-align: middle;
	}
	.payPal-img{
		height: 40px;
	}
	.soonCard{
		height: 280px;
		display: flex;
		justify-content: center;
		align-items: center;
	}
	.userPayment-card{
		border: 1px solid #e5e5e5;
    	padding: 20px;
    	border-radius: 9px;
	}
</style>
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
										<h1 class="text-white font-weight-bold mb-4 h2Large">Payment</h1>
										<ul class="list-unstyled cbbPageList text-capitalize d-flex align-items-center justify-content-center flex-wrap mb-0 p-0">
											<li><a href="index.html">Home</a></li>
											<li><a href="about.html">Pages</a></li>
											<li>Payment</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<span class="bgCover ibsBgWrap w-100 h-100 position-absolute" style="background-image: url(assets/images/m-2-r.png);"></span>
				</article>
			</div>
			<!-- ItemfullBlock -->
			<article class="ItemfullBlock py-7 py-md-10 pb-md-9 pt-lg-14 pb-lg-13 pt-xl-19 pb-xl-19">
				<div class="container">
					
					<div class="row">
						<div class="col-md-12">
							<ul class="nav nav-tabs mb-10 d-flex flex-wrap align-items-center" role="tablist">
								<li class="nav-item ">
									<a class="nav-link active navWidth" data-toggle="tab" href="#login1" role="tab" aria-controls="login" aria-selected="true">
										<div class="fakeRadioInput position-relative mb-0 flex-shrink-0">
											<input type="radio" id="ssOption1" class="fakeInput" name="select-service" value="option1">
											<label for="ssOption1" class="fake_label mb-0">
												<span class="icnWrap d-flex justify-content-center mb-2">
													<i class="icomoon-document"></i>
												</span>
												Auction Sheet
											</label>
										</div>
									</a>
								</li>
								<li class="nav-item ">
									<a class="nav-link navWidth" data-toggle="tab" href="#login2" role="tab" aria-controls="login" aria-selected="true">
										<div class="fakeRadioInput position-relative mb-0 flex-shrink-0">
											<input type="radio" id="ssOption2" class="fakeInput" name="select-service" value="option2">
											<label for="ssOption2" class="fake_label mb-0">
												<span class="icnWrap d-flex justify-content-center mb-2">
													<i class="icn icomoon-information1"></i>
												</span>
												English Translation
											</label>
										</div>
									</a>
								</li>
								<li class="nav-item ">
									<a class="nav-link navWidth" data-toggle="tab" href="#login3" role="tab" aria-controls="login" aria-selected="true">	
										<div class="fakeRadioInput position-relative mb-0 flex-shrink-0">
											<input type="radio" id="ssOption3" class="fakeInput" name="select-service" value="option3">
											<label for="ssOption3" class="fake_label mb-0">
												<span class="icnWrap d-flex justify-content-center mb-2">
													<i class="icn icomoon-repair"></i>
												</span>
												Export Cert. Translation
											</label>
										</div>
									</a>		
								</li>
							</ul>		
						</div> 
					</div>


					
					<div class="tab-content">
						<div class="tab-pane fade show active" id="login1" role="tabpanel" aria-labelledby="login-tab">
							<form class="checkoutForm">
								<!-- bilingDetailsWrap -->
								<div class="bilingDetailsWrap pt-lg-5 pt-xl-8 mb-4 mb-lg-5 fontAlter">
									<div class="row mx-lg-n4">
										<div class="col-12 col-lg-7 px-lg-4 mb-8 mb-lg-0">
											<div class="confirmationBoxWrap mb-7">
												<h5 class="h2vii text-capitalize mb-6">YOU ARE GOING TO PAY FOLLOWING AMOUNT:</h5>
												<div class="table-responsive tableWrap">
													<!-- checkoutCountTable -->
													<table class="table checkoutCountTable fontAlter">
														<tbody>
															<tr class="shippingRow">
																<td class="col01">
																	<div class="tdWrap">
																		<div>
																			<span class="customRadioBtnLabel">
																				<strong class="fwMedium price d-block">True Report</strong>
																			</span>
																		</div>
																		<div>
																			<span class="customRadioBtnLabel">
																				True Report of the chassis KSP130-2214833
																			</span>
																		</div>
																	</div>
																</td>
																<td class="col02">
																	<div class="tdWrap">
																		<strong class="fwMedium price d-block">$9</strong>
																	</div>
																</td>
															</tr>
															<tr class="shippingRow">
																<td class="col01">
																	<div class="tdWrap">
																		<div>
																			<span class="customRadioBtnLabel">
																				<strong class="fwMedium price d-block">True Report</strong>
																			</span>
																		</div>
																		<div>
																			<span class="customRadioBtnLabel">
																				True Report of the chassis KSP130-2214833
																			</span>
																		</div>
																	</div>
																</td>
																<td class="col02">
																	<div class="tdWrap">
																		<strong class="fwMedium price d-block">$9</strong>
																	</div>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>

											<div class="mx-lg-n4">
												<div class=" px-lg-4 mb-8 mb-lg-0">
													<h5 class="h2vii h5 text-capitalize mb-5">ENTER YOUR DETAILS WHERE WE SEND REPORT</h5>
													<div class="userPayment-card">
														<div class="form-row">
															<div class="formCol formCol50">
																<div class="form-group">
																	<span class="fLabel text-capitalize d-block">First Name <em class="req">*</em></span>
																	<input type="text" class="form-control d-block w-100">
																</div>
															</div>
															<div class="formCol formCol50">
																<div class="form-group">
																	<span class="fLabel text-capitalize d-block">Phone</span>
																	<input type="text" class="form-control d-block w-100">
																</div>
															</div>
															
															<div class="formCol">
																<div class="form-group">
																	<span class="fLabel text-capitalize d-block">Email Address</span>
																	<input type="text" class="form-control d-block w-100">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-5 px-lg-4 mb-8 mb-lg-0">
											<div class="p-4 order mb-4 card">
												<h5 class="h2vii pb-2 border-bottom text-uppercase ">Order Summary</h5>
												<p class="py-2 border-bottom ">Chassis no <br> <b>KSP130-2214833</b></p>
												<p class="pt-3 text-right font-weight-bold">Total Today: $18</p>
											</div>

											<div class="widget mb-0 mb-md-3 mb-lg-6 mb-xl-10 widgetHelp bg-primary rounded-lg pt-8 px-6 pb-8 position-relative text-center text-white">
												<div class="captionHolder">
													<i class="icn icomoon-information1 text-secondary d-block mb-3"><span class="sr-only">icon</span></i>
													<h3 class="h3 h3Large text-white mb-2">Need any help?</h3>
													<p>Here you can get your perfect answer for your problem.</p>
													<a href="contact.html" class="btn btnThemeAlt text-capitalize position-relative border-0 p-0 btnMinMedium" data-hover="Contact now">
														<span class="d-block btnText">Contact now</span>
													</a>
													<i class="whWatermarkIcn icomoon-helpc position-absolute"><span class="sr-only">icon</span></i>
												</div>
												<span class="bgCover bgImg w-100 h-100 position-absolute" style="background-image: url(assets/images/bgPattern02.png);"></span>
											</div>
										</div>	
									</div>
								</div>
								<!-- confirmationBoxWrap -->
								
								<!-- pmsWrap -->
								<div class="pmsWrap">
									<!-- pmSlctList -->
									<ul class="list-unstyled pmSlctList mb-0">
										<li>
											<span class="customRadioBtnLabel">
												<input class="form-check-input fakeInput" type="radio" name="paymentMethod" checked="" id="pay-meth-cp" value="02">
												<label class="form-check-label cuFakeLabel fwSemi" for="pay-meth-cp">Direct Bank Transfer</label>
												<!-- pmNotePop -->
												<strong class="pmNotePop w-100 position-relative">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the fun have cleared in our account.</strong>
											</span>
										</li>
										<li>
											<span class="customRadioBtnLabel">
												<input class="form-check-input fakeInput" type="radio" name="paymentMethod" id="pay-meth-pp" value="03">
												<label class="form-check-label cuFakeLabel fwSemi" for="pay-meth-pp">Paypal</label>
												<img src="assets/images/paypal.png" class="ml-2 img-fluid payPal-img" alt="image description">
												<a href="javascript:void(0);" class="fwSemi fontAlter float-right mt-1 payPalLink">What is PayPal?</a>
												<!-- pmNotePop -->
												<strong class="pmNotePop w-100 position-relative">Make your payment by your paypal account. You can pay with your credit card if you don’t have a PayPal account.</strong>
											</span>
										</li>
									</ul>
									<div class="placeOrder overflow-hidden">
										<button type="button" class="btn btnThemeAlt text-capitalize position-relative border-0 p-0 float-right btnMinLarge" data-hover="Place Order">
											<span class="d-block btnText">Place Order</span>
										</button>
									</div>
								</div>
							</form>
						</div>
						<div class="tab-pane fade mt-9" id="login2" role="tabpanel" aria-labelledby="login-tab">
							<div class="pmsWrap">
								<div class="soonCard">
									<h6>Coming Soon</h6>
								</div>
							</div>
						</div>
						<div class="tab-pane fade mt-9" id="login3" role="tabpanel" aria-labelledby="login-tab">
							<div class="pmsWrap">
								<div class="soonCard">
									<h6>Coming Soon</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</article>
		</main>
		
		<?php include 'includes/footer.php';?>
<?php include 'includes/script.php';?>