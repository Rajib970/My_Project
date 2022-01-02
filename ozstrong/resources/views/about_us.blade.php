<head>
	<!-- Meta   -->
	<meta>

	<!--  End of Meta  -->

	<!-- External style sheet -->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('public/css/about_us.css')}}">
	<!-- End external style sheet -->


	<!-- header -->
	@include('includes/header')
	<!-- End header -->

	<title> New Garage Doors | Roller Doors | Auckland Garage Doors </title>
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
						<p class="text-dark text-center fs-2" id="p_1"> About Us </p>
						<p class="text-dark text-center fs-5" style="margin-top:-1%;"> -------------- <i class="fas fa-door-open text-info"></i> --------------</p>

						<p class="text-dark fw-normal fs-5 text-justify my-2  mx-1"> Auckland Garage Doors has been testing various motors for many years so that you can have peace of mind and security for your home. We only sell the best! We also provide garage door repair.

						</p>

						<p class="text-dark fw-normal fs-5 text-justify my-2  mx-1"> We offer Sectional Garage Doors in a wide range of styles and colours as well as materials.Whether you are looking for Aluminium Composite, Colorsteel® or Cedar garage doors, we can find the right option to suit your home.
						</p>

						<p class="text-dark fw-normal fs-5 text-justify my-2  mx-1"> Auckland Garage Doors also offer quality New Zealand made roller doors in a variety of colours and sizes to suit your needs with the option to have a manual lock as well as automation with remotes.
						</p>

						<p class="text-dark fw-normal fs-3  text-justify " id="hd" style="margin-top:3%;"> <i class="far fa-hand-point-right text-primary"></i>
						Personalised Approach </p>
						<p class="text-dark fs-5 fw-normal text-justify" style="margin-left:4%;"> For over a decade, Auckland Garage Doors has been supplying top quality New Zealand made garage doors and automation to the greater Auckland market. We provide a personalised service that keeps you informed from the quotation stage right through to completion of your installation.  </p>

						<p class="text-dark fw-normal fs-3  text-justify " id="hd" style="margin-top:3%;"> <i class="far fa-hand-point-right text-primary"></i>
						Products and Warranty </p>
						<p class="text-dark fs-5 fw-normal text-justify" style="margin-left:4%;"> FWe only source products from suppliers with extremely high quality and automation that will give you the peace of mind knowing that we have trade tested them for years. We stand by our products 100% and give a 5 year warranty* on all purchases. All of our doors are manufactured in New Zealand.  </p>

						
						<p class="text-dark fw-normal fs-3  text-justify " id="hd" style="margin-top:3%;"> <i class="far fa-hand-point-right text-primary"></i>
						Insured and Guaranteed </p>
						<p class="text-dark fs-5 fw-normal text-justify" style="margin-left:4%;"> Auckland Garage Doors has public liability insurance to protect you and our team whilst we are either at your house or on your site. We are Health & Safety compliant and ensure that we can get the job done the correct way and safely.  </p>

					</div>
				</div>
				<!-- Sidebar -->
				<div class="col-xl-3 my-3" id="sidebar">
					<form class="p-2 bg-primary" id="form_1" style="margin-top:-2%;">
						<p class="text-white fs-5 text-center"> Get a Free Quote </p>
						<p class="text-white fs-3 text-center" style="margin-top:-3%;"> 
							<a href="tel:092977714" class="btn btn-none text-white fs-3 "> 
								<i class="fas fa-phone-alt text-white"> 092977714  </i>
							</a> 
						</p>
						<p class="text-white fs-5 text-center p-0" style="margin-top:-3%;"> Or we'll call you </p>
						<hr class="fs-4 text-dark" style="height: 3px; margin-top:-3%;"/>
						<p class="text-white fs-4 text-center p-0" style="margin-top:-4%;"> Request a Quote  </p>
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