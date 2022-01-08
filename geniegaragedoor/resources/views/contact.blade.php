<!DOCTYPE html>
<html>
<head>
	<!-- head -->
	@include('includes/head')
	<!-- End of head -->

	<!-- External stylesheet -->
	<link  rel="stylesheet" type="text/css" href="{{URL::asset('public/css/contact.css')}}">
	<!-- End of External stylesheet -->

	<title> geniegaragedoors </title>  
</head>

<body>
	<!-- header -->
	@include('includes/header')
	<!--  End of header -->

	<!-- =============== 1st Section ============ -->
	<section class="" id="sec_1">
		<div class="row">
			<div class="col-xl-12">
				<p class="text-center text-white fs-2"> Contact Us To Know The Services </p>
				<center>
					<hr class="w-75"/>
				</center>
			</div>
		</div>

		<div class="row">
			<div class="col-xl-2">
			</div>

			<div class="col-xl-8">
				<p class="text-center fs-5 fw-normal text-white"> Here at Genie Garage Doors, we are always happy to help with any query you may have. Get in touch with us today via phone, email or the contact form below. </p>
			</div>

			<div class="col-xl-2">
			</div>
		</div>
		<br/> <br/>

		<div class="row ">
			<div class="col-xl-1 mx-4">
			</div>
			<div class="col-xl-3 mx-2 p-2">
				<div class="card" style="width: ;">
					<span class="text-center p-2"> 
						<img src="{{URL::asset('public/img/location.webp')}}" class=" img-thumbnail rounded-pill border-0" height="80" width="80" alt="...">
					</span>
					<div class="">
						<a href="#map_location" class="btn btn-none text-center text-dark fst-italic"> 
							Genie Garage Doors, 
							Brighton-Le-Sands,
							<br/>
							NSW 2216
						</a>
					</div>
				</div>
			</div>
			<div class="col-xl-3 mx-2 p-2">
				<div class="card" style="width: ;">
					<span class="text-center p-2"> 
						<img src="{{URL::asset('public/img/email.webp')}}" class=" img-thumbnail rounded-pill border-0" height="80" width="80" alt="...">
					</span>
					<div class="">
						<p class="text-center text-dark fst-italic"> 
							<a href="mailto:info@geniegaragedoors.com.au" class="btn btn-none fs-6">  info@geniegaragedoors.com.au </a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 mx-2 p-2">
				<div class="card" style="width: ;">
					<span class="text-center p-2"> 
						<img src="{{URL::asset('public/img/call.webp')}}" class=" img-thumbnail rounded-pill border-0" height="80" width="80" alt="...">
					</span>
					<div class="">
						<p class="text-center text-dark fst-italic"> 
							<a href="tel:0435 128 222" class="btn btn-none fs-6">  0435 128 222 </a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-xl-2">
			</div>
		</div>

		<div class="row my-5">
			<div class="col-xl-1">
			</div>
			<div class="col-xl-4 h-100 border border-dark border-2" style="background:#9FE2BF;">
				<div class="row">
					<div class="col-xl-5 bg-white">
						<img src="{{URL::asset('public/img/contact_us.webp')}}" class="img-thumbnail border-0 d-xxl-block d-xl-block d-none d-sm-none d-md-none d-lg-none  h-100 ">
						<img src="{{URL::asset('public/img/contact_us_mob.webp')}}" class="img-thumbnail border-0  d-sm-block d-md-block d-lg-block d-xxl-none d-xl-none  h-100 ">

					</div>
					<div class="col-xl-7 p-2">
				<form class="p-1">
					<div class="mb-3">
						<input type="text" class="form-control rounded-pill p-2" id="" aria-describedby="" placeholder="Name">
					</div>
					<div class="mb-3">
						<input type="text" class="form-control rounded-pill p-2" id="" aria-describedby="" placeholder="Phone">
					</div>
					<div class="mb-3">
						<input type="email" class="form-control rounded-pill p-2" id="" aria-describedby="" placeholder="Email">
					</div>
					<div class="mb-3">
						<input type="Address" class="form-control rounded-pill p-2" id="" aria-describedby="" placeholder="Address">
					</div>
					<div class="mb-3">
						<input type="text" class="form-control rounded-pill p-2" id="" aria-describedby="" placeholder="Type Your Message">
					</div>
					<button type="submit" class="btn btn-primary rounded-pill w-50 p-2">Submit</button>
				</form>
			</div>
			</div>
				</div>

			<div class="col-xl-1">
			</div>

			<div class="col-xl-5 my-3 d-flex justify-content-center" id="map_location">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6619.229301663337!2d151.155135!3d-33.951038!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7f1c4523b7cc98e7!2sGenie%20Garage%20Doors!5e0!3m2!1sen!2sin!4v1628756759282!5m2!1sen!2sin" width="600" height="340" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
			<div class="col-xl-1">
			</div>
		</div>
		
	</section>

	<!-- ================= End of 1st Section =========== -->

	<!-- footer -->
	@include('includes/footer')
	<!-- end of footer -->
</body>
</html>