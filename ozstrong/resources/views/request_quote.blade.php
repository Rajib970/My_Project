<!DOCTYPE html>
<html>
<head>
	<!--  Meta   -->
	<meta name="aucklandgaragedoors" content=" Best Garage Doors in Auckland">
	<meta name="Request a Quote" content="Book You Garage Door service">
	<!--  End of Meta  -->

	<!-- External Style Sheet -->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('public/css/request_quote.css')}}">
	<!-- End external style sheet -->


	<!-- header -->
	@include('includes/header')
	<!-- End header -->

	<title> Request a Quote | Auckland Garage Doors </title>
</head>

<body>
	<!-- Home page 1st section -->
	<section id="fst_sec" style="">
		<div class="row d-flex justify-content-center" id="fst_sec_row1">
			<div class="col-xl-7">
			</div>
			<div class="col-xl-3 card shadow-lg d-flex justify-content-center  p-3 " style="margin-top:6%; background-image:linear-gradient(to bottom, #fbfcfc      ,#f2f3f4, #e5e7e9 );" id="fst_sec_row1_col2">
				<p class="h3 p-2 text-center fw-normal fs-3" > Get a Free Quote  </p>
				<form class="" id="form_1" method="POST">

					<div class="mb-3">
						<input type="text" class="form-control rounded-pill" id="name" aria-describedby="emailHelp" placeholder="Name" required>
					</div>
					<div class="mb-3">
						<input type="tel" pattern="[1-9]{1}[0-9]{9}" class="form-control rounded-pill" id="phone" aria-describedby="emailHelp" placeholder="Phone No" required>
					</div>
					<div class="mb-3">
						<input type="email" class="form-control rounded-pill" id="email" aria-describedby="emailHelp" placeholder="Email" required>
					</div>
					<div class="mb-3">
						<input type="text" class="form-control rounded-pill" id="subrub" aria-describedby="emailHelp" placeholder="Address" required>
					</div>
					<div  class="mb-3">
						<select class="form-select rounded-pill" aria-label="Default select example" id="product" required>
							<option value="0">Select Product</option>
							<option value="new-garage-door"> New Garage Door </option>
							<option value="new-garage-door-motor">  New Garage Door Motor  </option>
							<option value="garage-door-repairs"> Garage Door Repairs </option>
							<option value="genral-enquiry"> General Enquiry </option>

						</select>
					</div>
					<div class="mb-3">
						<input type="text" class="form-control rounded-pill" id="message" aria-describedby="emailHelp" placeholder="Enter Message" required>
					</div>
					<input type="hidden" id="csrf" value="{{ csrf_token() }}" />
					<button type="submit" class="btn btn-primary w-25 text-white container mx-2">Send</button>
				</form>
			</div>
		</div>
	</section>
	<!-- End of 1st section -->
	<div class="p-2" style="background-color:#5d6d7e ;">
	</div>
</body>
<!-- footer -->
@include('includes/footer')
<!-- end of footer -->
</html>