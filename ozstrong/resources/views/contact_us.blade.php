<head>
	<!--  Meta   -->
	<meta>

	<!--  End of Meta -->

	<!-- External style sheet -->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('public/css/contact_us.css')}}">
	<!-- End external style sheet -->


	<!-- header -->
	@include('includes/header')
	<!-- End header -->

	<title> For Best Garage Doors Contact Us | Auckland Garage Doors </title>
</head>

<body>
	<!-- section 1 -->
	<section id="sec_1">
		<div class="">
			<div class="row d-flex justify-content-center  ">
				<div class="">
				</div>

				<div class="col-xl-8 card border border-0 mx-0 " id="col_1">
					<div class="card-body">
						<p class="text-dark text-center fs-2" id="p_1"> Contact Us </p>
						<p class="text-dark text-center fs-5" style="margin-top:-1%;"> -------------- <i class="fas fa-door-open text-info"></i> --------------</p>

						<p class="text-dark fw-normal fs-5 text-justify my-2  mx-1"> Here at Auckland Garage Doors, we are always happy to help with any query you may have.

							Get in touch with us today via phone, email or the contact form below.
						</p>
						
						<div class="row my-5">
							<div class="col-xl-4 card d-flex justify-content-center border border-0" style="width: rem;">
								<div class="card-body">
									<p class="text-white text-center" style=""> <i class="fas fa-phone-alt display-3  p-4 rounded-circle" style="background-color:#ff00a6;"></i></p>

									<p class="fs-4 text-dark fw-normal fw-bold text-center p-0"> Phone </p>

									<p class="fs-5 text-dark fw-normal text-center p-0">  0277766000 / 092977714  </p>

								</div>
							</div>

							<div class="col-xl-4 card d-flex justify-content-center border border-0" style="width: rem;">
								<div class="card-body">
									<p class="text-white text-center" style=""> <i class="far fa-envelope-open display-3  p-4 rounded-circle" style="background-color:#ff00a6"></i></p>

									<p class="fs-4 text-dark fw-normal fw-bold text-center p-0"> Email </p>

									<p class="fs-5 text-dark fw-normal text-center p-0">   sales@aucklandgaragedoors.co.nz </p>

								</div>
							</div>
							<div class="col-xl-4 card d-flex justify-content-center border border-0" style="width: rem;">
								<div class="card-body">
									<p class="text-white text-center" style=""> <i class="fas fa-search-location display-3  p-4 rounded-circle" style="background-color:#ff00a6"></i></p>

									<p class="fs-4 text-dark fw-normal fw-bold text-center p-0"> Address </p>

									<p class="fs-5 text-dark fw-normal text-center p-0">   9/375 East Tamaki Road, East Tamaki, Auckland, 2013, New Zealand  </p>

								</div>
							</div>
						</div>

						<hr>

						<br/>

						<div class="row">
							<div class="col-xl-6">
								<p class="text-center text-dark fs-4 fw-bold">
								Follow Us On </p>

								<p class="text-center fs-4">
									<a href="https://www.facebook.com/AUCKLANDGARAGEDOORS/"><i class="fab fa-facebook text-white bg-primary  rounded-3 fs-3 p-3"></i></a>
								</p>

							</div>
							<div class="col-xl-6">
								<a href="https://www.google.com/maps/place/Auckland+Garage+Doors/@-36.953813,174.895647,13z/data=!4m5!3m4!1s0x0:0x862dcbd2ccde2a56!8m2!3d-36.9538425!4d174.8956682?hl=en" target="_blank" class="">
									<img src="{{URL::asset('public/img/google_map_loc.webp')}}" class="img-thumbnail border-0">
								</a>
							</div>
						</div>

						
					</div>
				</div>
				<!-- Sidebar -->
				<div class="col-xl-3 my-3" id="sidebar">
					<form class="p-2 bg-primary" id="form_1" style="margin-top:-3%;">
						<p class="text-white fs-5 text-center"> Get a Free Quote </p>
						<p class="text-white fs-3 text-center" style="margin-top:%;">
							<a href="tel:092977714" class="btn btn-none text-white fs-3 "> 
								<i class="fas fa-phone-alt text-white"> 092977714  </i>
							</a>
						</p>
						<p class="text-white fs-5 text-center p-0" style="margin-top:%;"> Or we'll call you </p>
						<hr class="fs-4 text-dark" style="height: 3px; margin-top:%;"/>
						<p class="text-white fs-4 text-center p-0" style="margin-top:-2%;"> Request a Quote  </p>
						<div class="mb-3">
							<input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Name" required>
						</div>
						<div class="mb-3">
							<input type="text" class="form-control" id="phone" aria-describedby="emailHelp" placeholder="Phone No." required>
						</div>
						<div class="mb-3">
							<input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email" required>
						</div>
						<div class="mb-3">
							<input type="text" class="form-control" id="subrub" aria-describedby="emailHelp" placeholder="Address" required>
						</div>
						<div  class="mb-3">
							<select class="form-select" aria-label="Default select example" id="product">
								<option selected>Select Product</option>
								<option value="new-garage-door"> New Garage Door </option>
								<option value="new-garage-door-motor">  New Garage Door Motor  </option>
								<option value="garage-door-repairs"> Garage Door Repairs </option>
								<option value="genral-enquiry"> General Enquiry </option>
							</select>
						</div>
						<div class="mb-3">
							<input type="text" class="form-control" id="message" aria-describedby="emailHelp" placeholder="Enter Message">
						</div>
						<input type="hidden" value={{csrf_token()}} id="csrf">
						<button type="submit" class="btn btn-danger w-25 text-white container mx-0">Send</button>
					</form>
					<div class="card bg-primary my-2">
						<p class="fs-5 text-white mx-3"> Garage Doors </p>
						<ul class="list-group list-group-flush">
							<li class="list-group-item bg-primary text-white"> <i class="fas fa-caret-right"></i> &nbsp; <a href="auckland-garage-doors" class="btn btn-default text-white p-0"> 
							AUCKLAND GARAGE DOORS </a></li>
							<li class="list-group-item bg-primary text-white"> <i class="fas fa-caret-right"></i> &nbsp; <a href="new-garage-doors" class="btn btn-default text-white p-0"> 
							NEW GARAGE DOORS </a></li>
							<li class="list-group-item bg-primary text-white"> <i class="fas fa-caret-right"></i> &nbsp; <a href="new-garage-doors-auckland" class="btn btn-default text-white p-0"> 
							NEW GARAGE DOORS AUCKLAND </a></li>
							<li class="list-group-item bg-primary text-white"> <i class="fas fa-caret-right"></i> &nbsp; <a href="garage-door-repair" class="btn btn-default text-white p-0"> 
							GARAGE DOOR REAPIR  </a></li>
						</ul>
					</div>
					<div class="card bg-primary my-2">
						<p class="fs-5 text-white mx-3"> Garage Door Openers </p>
						<ul class="list-group list-group-flush">
							<li class="list-group-item bg-primary text-white"> <i class="fas fa-caret-right"></i> &nbsp; <a href="sectional-door-openers" class="btn btn-default text-white p-0"> 
							Sectional Doors Openers</a></li>
							<li class="list-group-item bg-primary text-white"> <i class="fas fa-caret-right"></i> &nbsp; <a href="roller-door-openers" class="btn btn-default text-white p-0"> 
							Roller Door Openers</a></li>
						</ul>
					</div>
				</div>
				<!-- End of sidebar -->

			</div>
		</div>
		<div class="my-3">
		</div>
	</section>
</body>

<!-- footer -->
@include('includes/footer')
<!-- end footer -->