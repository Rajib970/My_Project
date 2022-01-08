<!DOCTYPE html>
<html>
<head>
	<!-- head -->
	@include('includes/head')
	<!-- End of head -->

	<!-- External stylesheet -->
	<link  rel="stylesheet" type="text/css" href="{{URL::asset('public/css/home_page.css')}}">
	<!-- End of External stylesheet -->

	<!-- header -->
	@include('includes/header')
	<!--  End of header -->


	<title> geniegaragedoors </title>  
</head>

<body>


	<!-- =============== 1st Section ============ -->
	<section id="sec_1">
		<div class="row" id="sec_1_row_1">
			<div class="col-xl-1" id="sec_1_row_1_col_1">
			</div>
			<div class="col-xl-10" id="sec_1_row_1_col_2">
				<p class="" style="margin-top:5%;"> </p>
				<p class="text-center" id="">
					<span class="text-white text-center fs-2 fw-bold"> Welcome To  </span>
					<br/>
					<span class="text-white text-center fs-2 fw-bold"> Garage Doors in Sydney  </span>
					
				</p>

				<p class="text-center text-white fs-3 fw-bold" id="">
					To enjoy the convenience and durability of our Australian made products for yourself, get in touch today. 
				</p>
				<p class="text-center">
					<a href="/gallery" class="btn btn-primary btn-lg text-white fs-6 rounded-pill "> &nbsp; View Our Gallery &nbsp; </a>
					&nbsp; &nbsp;
					<button class="btn btn-info btn-lg text-white fs-6 rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal"> &nbsp; &nbsp; Get In Touch &nbsp; &nbsp; </button>
					<!-- ================== Contact form ================= -->
					<!-- Modal -->
					<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered modal-lg">
							<div class="modal-content" style="background:#CCCCFF;">
								<div class="modal-header border-0">
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body ">
									<div class="row">
										<!-- <div class="col-md-1">
										</div> -->
										<div class="col-md-6">
											<img src="{{URL::asset('public/img/get_in_touch.webp')}}" class="img-thumbnail h-100 border-0" style="background:none">
										</div>
										<div class="col-md-6">
											<form id="form1">
												<div class="mb-3">
													<input type="text" class="form-control rounded-pill" id="name" aria-describedby="" placeholder="Name">
												</div>
												<div class="mb-3">
													<input type="text" class="form-control rounded-pill" id="phone" aria-describedby="" placeholder="Phone">
												</div>
												<div class="mb-3">
													<input type="email" class="form-control rounded-pill" id="email" aria-describedby="" placeholder="Email">
												</div>
												<div class="mb-3">
													<input type="Address" class="form-control rounded-pill" id="address" aria-describedby="" placeholder="Address">
												</div>
												<div class="mb-3">
													<input type="text" class="form-control rounded-pill" id="message" aria-describedby="" placeholder="Type Your Message">
												</div>
												<input type="hidden" id="csrf" value="{{csrf_token()}}"/>
												<button type="submit" class="btn btn-primary rounded-pill w-50" id="form_submit_btn">Submit</button>
											</form>
										</div>
										<!-- <div class="col-md-1">
										</div> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- ================= End of Contact Form ============= -->
				<p class="" style="margin-top:20%;"> </p>
				<div class="col-xl-1" id="sec_1_row_1_col_3">
				</div>
			</div>
		</section>

	</section>

	<!-- ================= End of 1st Section =========== -->

	<!-- =========== 2nd section ========== -->
	<section id="sec_2">
		<div class="row" id="sec_2_row_1">
			<div class="col-xl-3">
			</div>
			<div class="col-xl-6 my-4">
				<p class="text-center text-white bg-dark fs-4 p-1"> KNOW ABOUT GENIE GARAGE DOORS  </p>
			</div>
			<div class="col-xl-3">
			</div>

		</div>

		<div class="row" id="sec_2_row_2">
			<div class="col-xl-1">
			</div>

			<div class="col-xl-10 bg-white ">
				<p class="text-center text-dark fs-5 my-2"> 
					Here at Genie Garage Doors, we understand just how stressful driving through traffic can be.

					You certainly don’t want to spend additional time getting in and out of your vehicle to open and close your garage door! Thanks to our huge range of reliable garage doors, you can make coming back home an easier experience at the end of a long day. From Newcastle to Wollongong to Canberra and everywhere in between, we are available in every suburb at your request.
				</p>

				<p class="text-center text-dark fs-5"> 
					To enjoy the convenience and durability of our Australian made products for yourself, get in touch today. We can set up a complimentary measure and quote for your garage to protect your home and family. Our quotes are completely obligation-free.
				</p>

				<p class="text-center text-dark fs-5"> 
					You can buy with confidence knowing that you are dealing directly with the team that will be installing your door. We offer a personalised service that ensures you can contact us at any time should you require our help.
				</p>

				<p class="text-center text-dark fs-5"> 
					With more than a decade of experience under our belt, we have been able to stock quality garage doors for commercial and residential use. The garage doors & door openers that we install are made using top-quality materials and the latest design components. Whether you own a Victorian home or a contemporary-styled home, our garage doors can enhance your home’s value and design. Not just that! They can also add a new dimension to your property. So what are you waiting for? Browse through our range to know more about our products.
				</p>
			</div>

			<div class="col-xl-1">
			</div>
		</div>

		<div class="row my-3" id="sec_2_row_3" style="margin-top: px;">
			<p class="text-center fs-1 text-primary">
				Quality Garage Doors in Sydney
			</p>

			<div class="col-xl-1">
			</div>

			<div class="col-xl-10 bg- bg-gradient shadow-sm my-3" id="sec_2_row_3_col_2">
				<p class="fst-italic text-dark text-center fs-5">
					Your home’s garage door makes for almost 40% of your home’s facade. Yes, that’s right!     It’s one of the first things that people notice about your property. This means it’s an important part of your home’s curb appeal, and you cannot take it for granted.
				</p>

				<p class="fst-italic text-dark text-center fs-5">
					When choosing a professional company for garage door installation, it’s easy to feel overwhelmed. With so many suppliers to choose from, the search for quality garage doors in Sydney can become confusing. But not anymore. At Genie Garage Doors, you can expect nothing but the best quality garage doors manufactured by the leading names in the Australian Market. From elegant looking sectional garage doors to roller garage doors, we stock an extensive selection of garage doors that are backed up with a 5-year warranty. Our range combines secure, smooth and reliable garage door control with our warranty peace-of-mind. We also have public liability insurance to ensure you have absolutely nothing to worry about when you work with us.
				</p>

				<p class="fst-italic text-dark text-center fs-5">
					We are able to offer highly competitive prices when compared to other brands in the business. Also, did we tell you that we are happy to offer you a free, no-obligation quote so that you can compare prices and choose what’s best for you?
				</p>

				<p class="fst-italic text-dark text-center fs-5">
					When you hire us for garage door installation in Sydney, you get quality service from technicians that are Health & Safety compliant and get the job done the correct way
				</p>
			</div>

			<div class="col-xl-1">
			</div>
		</div>

		<div class="row" id="sec_2_row_4">
			<div class="col-xl-2">
			</div>

			<div class="col-xl-8">

				<p class="text-center text-dark fs-5">  When you hire us for garage door installation in Sydney, you get quality service from technicians that are Health & Safety compliant and get the job done the correct way</p>
			</div>

			<div class="col-xl-2">
			</div>
		</div>

		<div class="row my-3" id="sec_2_row_5">
			<div class="col-xl-2">
			</div>

			<div class="col-xl-8 d-flex justify-content-center my-2">
				<a href="tel:0435128222" class="btn btn-primary text-white text-center fs-5">
					Ask Your Query
					&nbsp;
					<i class="fas fa-phone-alt text-white"></i> 
				0435128222 </a>
			</div>

			<div class="col-xl-2">
			</div>
		</div>
	</section>

	<!-- =============== End of 2nd section ========= -->

	<!-- ============= 3rd section ============== -->
	<section class="" id="sec_3">
		<div class="row bg-light my-5" id="sec_3_row_1">
			<div class="col-xl-2 ">
			</div>

			<div class="col-xl-8">
				<p class="text-center fs-3"> Garage Door Specialists Sydney </p>

				<p class="text-center fs-5"> What makes Genie Garage Doors your top pick for all your garage door needs in Sydney cannot be summed up in a single reason. But if we had to, we’d say it’s our exceptional customer service, top-quality products and safe installation procedure. We boast a team of trained technicians that have immense knowledge about different kinds of garage doors and do everything they can to help clients pick the best garage doors for their requirements. </p>

			</div>

			<div class="col-xl-2">
			</div>
		</div>

		<div class="row"  id="sec_3_row_1">
			<div class="col-xl-1 mx-5">
			</div>
			<div class="col-xl-2 p-2">
				<div class="card shadow-lg" style="border-left: 4px solid  #177fff;">
					<div class="card-body text-center">
						<span>
							<i class="fas fa-wrench fs-4 text-primary "></i>
						</span>
						&nbsp;
						<span class="fw-bold"> Quality Materials </span>
					</div>
				</div>
			</div>
			<br/>

			<div class="col-xl-2 p-2">
				<div class="card shadow-lg" style="border-left: 4px solid  #00ffd1;">
					<div class="card-body text-center">
						<span>
							<i class="far fa-check-circle fs-4 text-info"></i>
						</span>
						&nbsp;
						<span class="fw-bold">Satisfaction</span>
					</div>
				</div>
			</div>

			<br/>

			<div class="col-xl-2 p-2">
				<div class="card shadow-lg" style="border-left: 4px solid  #ffc900;">
					<div class="card-body text-center">
						<span>
							<i class="fas fa-hand-holding-usd fs-4 text-warning"></i>
						</span>
						&nbsp;
						<span class="fw-bold"> Affordable Price </span>
					</div>
				</div>
			</div>

			<br/>

			<div class="col-xl-2 p-2">
				<div class="card shadow-lg" style="border-left: 4px solid #42e900;">
					<div class="card-body text-center">
						<span>
							<i class="fas fa-tools fs-4" style="color:#42e900;"></i>
						</span>
						&nbsp;
						<span class="fw-bold"> Reapir & Service </span>
					</div>
				</div>
			</div>

			<br/>

			<div class="col-xl-2">
			</div>

		</div>

	</section>
	<!-- =============== End of 3rd section ============ -->

	<!-- ================ 4th Section ================ -->
	<section id="" class="my-3">
		<div class="row my-5">
			<div class="col-xl-2">
			</div>

			<div class="col-xl-8">
				<p class="text-primary text-center fs-2"> Our Services Include </p>
				<p class="text-center text-dark fs-5"> Colorbond® | Dulux Powder Coatings | Sectional | Roller | New Motors | Cedar | Aluminium Composite | Perspex / Opal | New Remotes | Servicing</p>
			</div>

			<div class="col-xl-2">
			</div>
		</div>
	</section>

	<!-- ============== End of 4th Section ============== -->

	<!-- =================== 5th Section ==================== -->
	<section id="sec_5">
		<div class="row d-flex justify-content-center">
			<div class="col-xl-3">
				<div class="card" style="">
					<img src="{{URL::asset('public/img/padors101.webp')}}" class="img-thumbnail" alt="...">
					<div class="card-body">
						<div class="card-title"> 
							<span class="fs-4 fw-normal"> PADORS PDS101 </span>
							<br/>
							<small class="text-primary fst-italic"> PANEL LIFT MOTOR </small>
						</div>
						<p class="card-text fw-normal fs-5 my-1">Automate your existing door or replace your motor for $500 + gst.</p>

						<p class="my-2">
							<span class="text-primary fs-5">
								<i class="fas fa-dollar-sign text-primary"></i>
								500
							</span> 

							<span class="" style="margin-left: 100px;">
								<a href="" class="btn btn-primary">
									<i class="fas fa-shopping-bag"></i> 
									Order Now
								</a>

							</span> 
						</p>
					</div>
				</div>
			</div>

			<div class="col-xl-3">
				<div class="card" style="">
					<img src="{{URL::asset('public/img/merlin105.webp')}}" class="img-thumbnail" alt="...">
					<div class="card-body">
						<div class="card-title"> 
							<span class="fs-4 fw-normal"> MERLIN MS105MYQ </span>
							<br/>
							<small class="text-primary fst-italic"> PANEL LIFT MOTOR </small>
						</div>
						<p class="card-text fw-normal fs-5 my-1">Automate your existing door or replace your motor for $650 + gst.</p>

						<p class="my-2">
							<span class="text-primary fs-5">
								<i class="fas fa-dollar-sign text-primary"></i>
								500
							</span> 

							<span class="" style="margin-left: 100px;">
								<a href="" class="btn btn-primary">
									<i class="fas fa-shopping-bag"></i> 
									Order Now
								</a>

							</span> 
						</p>
					</div>
				</div>
			</div>

			<div class="col-xl-3">
				<div class="card" style="">
					<img src="{{URL::asset('public/img/padors106.webp')}}" class="img-thumbnail" alt="...">
					<div class="card-body">
						<div class="card-title"> 
							<span class="fs-4 fw-normal"> PADORS PDS101 </span>
							<br/>
							<small class="text-primary fst-italic"> PANEL LIFT MOTOR </small>
						</div>
						<p class="card-text fw-normal fs-5 my-1">Automate your existing door or replace your motor for $500 + gst.</p>

						<p class="my-2">
							<span class="text-primary fs-5">
								<i class="fas fa-dollar-sign text-primary"></i>
								500
							</span> 

							<span class="" style="margin-left: 100px;">
								<a href="" class="btn btn-primary">
									<i class="fas fa-shopping-bag"></i> 
									Order Now
								</a>

							</span> 
						</p>
					</div>
				</div>
			</div>

			<div class="col-xl-3">
				<div class="card" style="">
					<img src="{{URL::asset('public/img/merlin855.webp')}}" class="img-thumbnail" alt="...">
					<div class="card-body">
						<div class="card-title"> 
							<span class="fs-4 fw-normal"> PADORS PDS101 </span>
							<br/>
							<small class="text-primary fst-italic"> PANEL LIFT MOTOR </small>
						</div>
						<p class="card-text fw-normal fs-5 my-1">Automate your existing door or replace your motor for $500 + gst.</p>

						<p class="my-2">
							<span class="text-primary fs-5">
								<i class="fas fa-dollar-sign text-primary"></i>
								500
							</span> 

							<span class="" style="margin-left: 100px;">
								<a href="" class="btn btn-primary">
									<i class="fas fa-shopping-bag"></i> 
									Order Now
								</a>

							</span> 
						</p>
					</div>
				</div>
			</div>		
		</div>

	</section>

	<!-- ================ End of 5th section =============== -->

	<!-- footer -->
	@include('includes/footer')
	<!-- end of footer -->
</body>
</html>