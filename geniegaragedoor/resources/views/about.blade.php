<!DOCTYPE html>
<html>
<head>
	<!-- head -->
	@include('includes/head')
	<!-- End of head -->

	<!-- External stylesheet -->
	<link  rel="stylesheet" type="text/css" href="{{URL::asset('public/css/about.css')}}">
	<!-- End of External stylesheet -->

	<title> geniegaragedoors </title>  
</head>

<body>
	<!-- header -->
	@include('includes/header')
	<!--  End of header -->

	<!-- =============== 1st Section ============ -->
	<section class="" id="sec_1">
		<div class="row" id="sec_1_row_1">
			<div class="col-xl-4">
			</div>
			<div class="col-xl-4 d-flex justify-content-center" id="sec_1_row_1_col_1">
				<p class=""> 
				</p>
			</div>
			<div class="col-xl-4">
			</div>
		</div>

		<div class="row" id="sec_1_row_2">
			<div class="col-xl-12" id="sec_1_row_2_col_1">
				<p class="text-center fs-2 fw-normal text-light" style="color:;"> KNOW MORE ABOUT US </p>
				<center>
				<hr class="w-50"/> 
			</center>
			</div>
			
		</div>

		<div class="row p-4" id="sec_1_row_3">
			<div class="col-xl-1" id="sec_1_row_3_col_1">
			</div>
			<div class="col-xl-5" id="part_1">
				<img src="https://static.wixstatic.com/media/nsplsh_57334a6c336a5245704459~mv2.jpg/v1/fill/w_621,h_364,al_c,q_80,usm_0.66_1.00_0.01/Image%20by%20LinkedIn%20Sales%20Navigator.webp" class="img img-thumbnail border-0">
			</div>

			<div class="col-xl-5" id="part_2">
				<p class="text-center fs-4" style="background:#F0FFFF;"> Personalized Approach </p>

				<p class="text-dark fs-5 fst-italic">
					For over a decade, Genie Garage Doors has been supplying top quality Australian made garage doors and automation to the greater Sydney market. We provide a personalised garage doors Sydney service that keeps you informed from the quotation stage right through to completion of your installation.  
				</p>

			</div>

			<div class="col-xl-1">
			</div>
		</div>


		<div class="row my-2" id="sec_1_row_4">
			<div class="col-xl-1">
			</div>

			<div class="col-xl-5 my-5"  id="part_1">
				<p class="text-center fs-4" style="background:#F0FFFF;"> Products and Warranty </p>

				<p class="text-dark fs-5 fst-italic"> 
				We only source products from suppliers with extremely high quality and automation that will give you the peace of mind knowing that we have trade tested them for years. We stand by our products 100% and give a 5 year warranty* on all purchases. All of our doors are manufactured in Sydney.  </p>
			</div>

			<div class="col-xl-5"  id="part_2">
				<img src="https://static.wixstatic.com/media/16d80d_4e55dbbb509946afb68081467895b2f8~mv2.jpg/v1/fill/w_626,h_360,al_c,q_80,usm_0.66_1.00_0.01/93835904_2401124413320340_12018710235410.webp" class="img img-thumbnail  border-0">
			</div>

			<div class="col-xl-1">
			</div>
		</div>

		<div class="row" id="sec_1_row_5">
			<div class="col-xl-1">
			</div>

			<div class="col-xl-5"  id="part_1">
				<img src="https://static.wixstatic.com/media/523cf885560e2e97c24a642a188003a7.jpg/v1/fill/w_621,h_370,al_c,q_80,usm_0.66_1.00_0.01/Insurance%20Agent.webp" class="img img-thumbnail  border-0">
			</div>

			<div class="col-xl-5 my-5"  id="part_2">
				<p class="text-center fs-4" style="background:#F0FFFF;"> Insured and Guaranteed </p>

				<p class="text-dark fs-5 fst-italic"> 
				Genie Garage Doors has public liability insurance to protect you and our team whilst we are either at your house or on your site. We are Health & Safety compliant and ensure that we can get the job done the correct way and safely.</p>
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