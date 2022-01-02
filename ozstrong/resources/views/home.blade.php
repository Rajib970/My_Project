<!DOCTYPE html>
<html>
<head>
	<!--  Meta   -->
	<meta name="aucklandgaragedoors" content=" Best Garage Doors in Auckland">
	<!--  End of Meta  -->

	<!-- External Style Sheet -->
	<link rel="stylesheet" type="text/css" href="{{URL::asset('public/css/home_page.css')}}">
	<!-- End external style sheet -->


	<!-- header -->
	@include('includes/header')
	<!-- End header -->

	<title> Best Garage Doors Auckland | Auckland Garage Doors </title>
	
	<style>
	</style>
	
	
</head>

<body>
	<!-- Home page 1st section -->
	<section id="fst_sec" style="">
		<div class="row d-flex justify-content-center" id="fst_sec_row1">
			<div class="col-xl-7" style="padding: 5%">
			</div>
			<div class="col-xl-3 card shadow-lg d-flex justify-content-center  p-3 d-xl-block d-xxl-block d-none d-sm-none d-md-none d-lg-none" style="max-height:500px;margin-top:4%;" id="fst_sec_row1_col2">
				

				
				<form class="" id="form_1" method="POST">
					<p class="h3 p-2 text-center fw-normal fs-3" > Get a Free Quote  </p>
					<div class="mb-3">
						<input type="text" class="form-control rounded-pill p-2" id="name" aria-describedby="emailHelp" placeholder="Name" required>
					</div>
					<div class="mb-3">
						<input type="tel" pattern="[1-9]{1}[0-9]{9}" class="form-control rounded-pill p-2" id="phone" aria-describedby="emailHelp" placeholder="Phone No" required>
					</div>
					<div class="mb-3">
						<input type="email" class="form-control rounded-pill p-2" id="email" aria-describedby="emailHelp" placeholder="Email" required>
					</div>
					<div class="mb-3">
						<input type="text" class="form-control rounded-pill p-2" id="subrub" aria-describedby="emailHelp" placeholder="Address" required>
					</div>
					<div  class="mb-3">
						<select class="form-select rounded-pill p-2" aria-label="Default select example" id="product" required>
							<option value="0">Select Product</option>
							<option value="new-garage-door"> New Garage Door </option>
							<option value="new-garage-door-motor">  New Garage Door Motor  </option>
							<option value="garage-door-repairs"> Garage Door Repairs </option>
							<option value="genral-enquiry"> General Enquiry </option>

						</select>
					</div>
					<div class="mb-3">
						<input type="text" class="form-control rounded-pill p-2" id="message" aria-describedby="emailHelp" placeholder="Enter Message" required>
					</div>
					<input type="hidden" id="csrf" value="{{ csrf_token() }}" />
					<button type="submit" class="btn btn-primary w-25 text-white container mx-2">Send</button>
				</form>
			</div>
			<img src="{{URL::asset('public/img/backimage.webp')}}" class="img-thumbnail border-0 d-xl-none d-xxl-none d-sm-block d-md-none d-lg-none h-100 w-100">
		</div>
	</section>
	<!-- End of 1st section -->

	<!-- 2nd section -->
	<section>
		<div class="row">
			<div class="col-xl-1" style="background-color: black;">
			</div>
			<div class="col-xl-3" style="background-color: red;">
				<p class="text-white fw-normal text-center my-2"><span class="fs-5 "> Call us for Any Queries </span> <br/>
					<a href="tel:0277766000" class="btn btn-none fs-5 text-white"><i class="fas fa-phone-alt text-white" style="font-size:20px;"></i> 0277766000 </a></p>
				</div>
				<div class="col-xl-8" style="background-color: black;">
					<p class="text-center text-white fs-5 fw-normal my-4">MODERNISE YOUR HOME WITH AUTOMATIC GARAGE DOORS.</p>
				</div>
			</div>
		</section>
		<!-- End of 2nd section -->

		<!-- 3rd section -->
		<section class="" id="trd_sec">
			<div class="row" id="trd_sec_row_1">
				<div class="col-xl-12 text-center text-justify">
					<p class='text-center fs-5 fw-normal'> Auckland, NEW ZELAND </p>
					<p class="fs-2 fw-normal" style="color:balck;"> The Garage Door Specialists in Auckland </p>
				</div>
				<p class="text-center text-dark d-none d-xl-block d-xxl-block d-sm-none d-md-none d-lg-none"> ---------------------------------------------- <i class="fas fa-warehouse text-primary fs-5"></i>---------------------------------------------- </p>
				<p class="text-center fs-5 text-dark fw-light"> You can buy with confidence knowing that you are dealing directly with the team that will be installing your door. 
				</p>
			</div>
			<div class="row">
				<div class="col-xl-3">
				</div>

				<div class="col-xl-2 d-flex justify-content-center">
					<div class="card border-0" style="width: rem;">
						<div class="card-body">
							<p class="text-center">
								<i class="fas fa-shield-alt text-primary display-1"></i>
							</p>
							<p class="card-text fs-4 fw-normal text-center">It's Secure </p>
						</div>
					</div>
				</div>
				<div class="col-xl-2 d-flex justify-content-center">
					<div class="card border-0" style="width: rem;">
						<div class="card-body">
							<p class="text-center">
								<i class="fas fa-user-shield text-primary display-1"></i>
							</p>
							<p class="card-text fs-4 fw-normal text-center">It's Safe </p>
						</div>
					</div>
				</div>
				<div class="col-xl-2 d-flex justify-content-center">
					<div class="card border-0" style="width: rem;">
						<div class="card-body">
							<p class="text-center">
								<i class="fas fa-warehouse text-primary display-1"></i>
							</p>
							<p class="card-text fs-4 fw-normal text-center">It's Convenient </p>
						</div>
					</div>
				</div>

				<div class="col-xl-3 " >
				</div>

			</div>
		</section>
		<!-- End of 3rd section -->

		<!-- 4th section -->
		<section>
			<div class="row">
				<div class="col-xl-12 d-flex justify-content-center p-5">
					<a href="request-quote" class="btn btn-default border border-primary border-2">
						<i class="fas fa-id-card"></i> &nbsp; CONTACT US FOR A FREE QUOTE TODAY
					</a>
				</div>
			</div>
		</section>
		<!-- End of 4th section -->

		<!-- 5th section -->
		<section class="" id="fth_sec">
			<div class="row" id="fth_sec_row1">

				<!----------------     ---------------->
				<div class="col-md-4 ">

					


					<a href="roller-garage-doors">

						<img class="card-img" src="{{URL::asset('public/img/roller-garage-door.webp')}}" alt="roller garage goor" style="height:18rem;">

					</a>

					<a href="roller-garage-doors">
						<div class="card-body text-center" >
							<a href="roller-garage-doors" class="btn btn-light fs-5 text-center text-dark w-100 rounded-0" id="card_btn"style="margin-top:-150px;">
								ROLLER GARAGE DOORS
							</a>
						</div>
					</a>


				</div>

				<!--------------     ------------->



				<div class="col-md-4 ">
					

					<a href="sectional-door-openers"><img class="card-img" src="{{URL::asset('public/img/sectional-door.webp')}}" alt="sectional garage door" style="height:18rem;"></a>

					<div class="card-body text-center" >
						<a href="sectional-door-openers" class="btn btn-light fs-5 text-center text-dark w-100 rounded-0" id="card_btn" style="margin-top:-150px;">
							SECTIONAL GARAGE DOORS
						</a>
					</div>


				</div>
				<div class="col-md-4 ">
					

					<a href="new-garage-doors"><img class="card-img" src="{{URL::asset('public/img/garage-door-openers.webp')}}" alt="garage door openers" style="height:18rem;"></a>
					<div class="">
						<div class="card-body text-center" >
							<a href="new-garage-doors" class="btn btn-light fs-5 text-center text-dark w-100 rounded-0" id="card_btn"style="margin-top:-150px;">
								GARAGE DOOR OPENERS
							</a>
						</div>

					</div>
				</div>

				<div class="row" id="fth_sec_row2">
					<div class="col-md-4">

						
						<a href="garage-door-repair"><img class="card-img" src="{{URL::asset('public/img/garage-door-repair.webp')}}" alt="garage door repair" style="height:18rem;"></a>
						<div class="">
							<div class="card-body text-center" >
								<a href="garage-door-repair" class="btn btn-light fs-5 text-center text-dark w-100 rounded-0" id="card_btn"style="margin-top:-150px;">
									GARAGE DOOR REPAIR
								</a>
							</div>
						</div>
						

					</div>
					<div class="col-md-4">

						<a href="repair-service"><img class="card-img" src="{{URL::asset('public/img/garage-door-servicing.webp')}}" alt="garage door service" style="height:18rem;"></a>
						<div class="">
							<div class="card-body text-center" >
								<a href="repair-service" class="btn btn-light fs-5 text-center text-dark w-100 rounded-0" id="card_btn"style="margin-top:-150px;">
									GARAGE DOOR SERVICE
								</a>
							</div>
						</div>
						
					</div>
					<div class="col-md-4">

						<a href="garage-door-remotes"><img class="card-img" src="{{URL::asset('public/img/remotes.webp')}}" alt="garage door service" style="height:18rem;"></a>
						<div class="">
							<div class="card-body text-center" >
								<a href="garage-door-remotes" class="btn btn-light fs-5 text-center text-dark w-100 rounded-0" id="card_btn"style="margin-top:-150px;">
									GARAGE DOOR REMOTES
								</a>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- End of 5th section -->

			<!-- 6th section -->
			<section class="p-3">
				<div class="row" style="background-color:#005ac5;">
					<div class="col-xl-3">
						<img src="{{URL::asset('public/img/gurantee.webp')}}" class="img-thumbnail  my-1 border-0 w-75"  id="sxth_sec_img1" style="height:10rem; margin-left: 20%; background:none " alt="secure">
						<br/>

						<img src="{{URL::asset('public/img/nz_made.webp')}}" class="img-thumbnail my-1 border-0 w-75" id="sxth_sec_img2" style="height:10rem; margin-left: 20%; background:none" alt="secure">
					</div>
					<div class="col-xl-8 text-justify">
						<p class="fs-2 text-white fw-normal" id="sxth_sec_hd1"> Providing The Best Quality Garage Doors</p>
						<p class="text-white fw-normal" id="sxth_sec_p1"> <b> Garage doors </b> are not just about safety and access, they are also a statement. They are one of the most visible aspects of your home. There are many aspects to consider when choosing your garage doors, from specifications to design preferences – speak to us. </p>

						<p class="text-white fw-normal" id="sxth_sec_p2">From Warkworth to Mercer and everywhere in between, we are available in every suburb at your request.

						​ </p>

						<p class="text-white fw-normal" id="sxth_sec_p3"> To enjoy the convenience and durability of our New Zealand made products for yourself, get in touch today. </p>

						<p class="text-white fw-normal" id="sxth_sec_p3"> We can set up a complimentary measure and quote for your garage to protect your home and family. Our quotes are completely obligation-free. </p>

						<div class="col-xl-1 p-1 my-1">
							<p></p>
						</div>
					</div>
				</section>
				<!-- end of 6th section -->

				<!-- 7th section -->
				<section>
					<div class="row" id="svnth_sec_row">
						<div class="col-xl-1">
						</div>
						<div class="col-xl-8" style="">
							<p class="fs-1 fw-normal text-dark container" id="svnth_sec_p1"> Looking to start a new project, or need an estimate? Get in touch. </p>
							<p class="container" id="svnth_sec_p2">
								<a href="tel:0277766000" class="btn btn-none">
									<i class="fas fa-phone-alt text-primary fs-2 " style=""></i>
									<span class="fs-1 fw-bold"> 0277766000 </span>
								</a>
							</p>
							<p id="svnth_sec_p3"> </p>
						</div>
						<div class="col-xl-2">
						</div>
					</div>
				</section>
				<!-- End of 7th section -->

				<!-- 8th section -->
				<section>
					<div class="row bg-light bg-gradient my-2" >
						<div class="col-xl-11 container  p-4" id="eth_sec_div">
							<p class="fs-2 text-dark fw-normal "> What are the different types of garage door construction?  </p>
							<p class="text-dark d-flex justify-content-center fs-5 fw-light"> A. There are four main types of garage doors in Auckland and the basic difference between each one is in the way that they open.
								The opening style is usually determined by the physical space available in and around your garage entrance, but aesthetics can also play a part when making your decision if you are lucky enough to have a garage that can accommodate more than one style.
							Each type is available in various materials and finishes but they will generally fall into one of the following categories</p>
							<p class="text-dark d-flex justify-content-center fs-5 fw-light">
							1. Sectional - They slide upwards into the ceiling space with each section moving independently of each other in order to facilitate the way it bends through the top of the garage opening and into the runners that guide it across the ceiling. At Auckland Garage Doors, we offer sectional doors in a wide range of styles and materials to ensure that the final finish complements the overall feel of your house.</p>

							<p class="text-dark text-justify fs-5 fw-light"> 2. Roller - Similar to the sectional door in that they are guided straight up towards the ceiling, but the main difference being that they roll around themselves at the top rather than remaining flat and travelling across the ceiling space. As a result, the sections are much smaller in order to make this logistically possible. Get in touch to learn more about roller doors in Auckland and see what options you have available to you.</p>

							<p class="text-dark text-justify fs-5 fw-light"> 3. Upswing or tilting - These one-piece doors move outwards from the bottom, then swing up and remain in one flat piece as they come to rest horizontally across the ceiling.</p>

							<p class="text-dark text-justify fs-5 fw-light"> 4. Carriage - These older style doors open out from the centre in the same way barn doors would. It's becoming a less popular style of garage door, and now they are often installed as sectional sliding doors and the carriage style is simply created with aesthetic touches.</p>
						</div>
					</div>


				</section>
				<!--- End of 8th section -->

				<!-- 9th section -->
				<section>
					<div class="row my-4" id="ninth_sec_row1">
						<div class="col-xl-12">
							<p class='text-dark fs-1 fw-normal text-center'> Why Choose Us? </p>
							<p class="text-dark text-center fs-5 w-100 "> ----------------- <i class="fas fa-door-closed fs-4" style="color:#01b2e2;"></i> ----------------- </p>
						</div>
					</div>

					<div class="row mx-5" id="ninth_sec_row2">
						<div class="col-xl-4 p-1">
							<div class="card bg-light  shadow-sm" style="">
								<div class="card-body">
									<p class="text-center my-3"><i class="far fa-gem display-4 text-info"></i></p>
									<p class="text-center text-primary fs-3 fw-light"> Efficient Service </p>
								</div>
							</div>
						</div>
						<div class="col-xl-4 p-1 ">
							<div class="card bg-light bg-gradient shadow-sm" style="">
								<div class="card-body">
									<p class="text-center my-3"><i class="fas fa-comment-dollar display-4 text-info"></i></p>
									<p class="text-center text-primary fs-3 fw-light"> Best Price Guranteed </p>
								</div>
							</div>
						</div>
						<div class="col-xl-4 p-1">
							<div class="card bg-light bg-gradient shadow-sm" style="">
								<div class="card-body">
									<p class="text-center my-3"><i class="far fa-file-alt display-4 text-info"></i></p>
									<p class="text-center text-primary fs-3  fw-light"> Free Quotes </p>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End of 9th section -->

				<!-- 10th section -->
				<section class="" style="margin-top:4%; background-color: #f2f3f4;">
					<div class="container">
						<div class="row" id="tnth_sec_row1">
							<div class="col-xl-4" id="tnth_sec_row1_col1">
								<p id="p1">
								</p>
								<p class="text-center" id="">
									<i class="fas fa-quote-right display-1 text-white bg-primary rounded-pill p-4"></i>
								</p>
								<p id="p4">
								</p>
							</div>
							<div class="col-xl-8" id="tnth_sec_col2">
								<p class="display-6 fw-light text-dark text-center" style="margin-top:2%;"> <b>Customer Reviews </b></p>
								<p class="text-dark text-center d-none d-xl-block d-xxl-block d-sm-none d-md-none d-lg-none">-------------------------- <i class="fas fa-star fs-5 text-info"></i>--------------------------</p>
								<!-- Testimonial -->

								<div id="carouselExampleSlidesOnly" class="carousel slide " data-bs-ride="carousel">
									<div class="carousel-inner">
										<div class="carousel-item active rounded-pill ">
											<div class="card-body">
												<p class="text-dark fs-6 fst-italic bg-white p-3"> Rondy is nothing Short of genius. He managed to fix all our electronic issues, including one even Tesla couldn't fix.
													<br/>
													Prompt, personable and thinks outside the box. We could not be happier or recommend his skills and services highly enough.
												</p>
												<small class="text-primary p-0 mx-2 fw-bold"> Darren Robinson
													<br/> 
													<span class="mx-2"> 2 months ago </span>
												</small>
											</div>
										</div>
										<div class="carousel-item rounded-pill">
											<div class="card-body">
												<p class="text-dark fs-6 fst-italic bg-white p-3"> James is nothing Short of genius. He managed to fix all our electronic issues, including one even Tesla couldn't fix.
													<br/>
													Prompt, personable and thinks outside the box. We could not be happier or recommend his skills and services highly enough.
												</p>
												<small class="text-primary p-0 mx-2 fw-bold"> Sam Kay
													<br/> 
													<span class="mx-2"> 4 months ago </span>
												</small>
											</div>
										</div>
										<div class="carousel-item  rounded-pill">
											<div class="card-body">
												<p class="text-dark fs-6 fst-italic bg-white p-3"> Jhon is nothing Short of genius. He managed to fix all our electronic issues, including one even Tesla couldn't fix.
													<br/>
													Prompt, personable and thinks outside the box. We could not be happier or recommend his skills and services highly enough.
												</p>
												<small class="text-primary p-0 mx-2 fw-bold"> Max Gray
													<br/> 
													<span class="mx-2"> 5 months ago </span>
												</small>
											</div>
										</div>
									</div>
								</div>
								<!-- End testimonial -->
							</div>
						</div>
					</div>
				</section>
				<!-- End of 10th section -->

				<!-- 11th section -->
				<section>
					<div class="container my-5">
						<div class="row">
							<div class="col-xl-6">
								<p class="display-6  fw-light text-dark">
									Call us today for a Free Quote
								</p>
								<p class=" fs-normal fw-bold text-datk container">
									<span class="">
										<a href="tel:0277766000" class="btn btn-none"> <span class="display-4 fs-normal fw-bold "><i class="fas fa-phone-alt text-primary display-5" style=""></i>  0277766000 </span> </a></span>
									</p>

								</div>
								<div class="col-xl-6 bg-light bg-gradient shadow-lg">
									<p class="fs-1 fw-normal text-center my-2"> Subscribe Today!</p>
									<form class="p-2" id="form_2">
										<div class="mb-3">
											<input type="text" class="form-control" id="name" placeholder="Name" required >
										</div>
										<div class="mb-3">
											<input type="email" class="form-control" id="email" placeholder="Email" required>
										</div>
										<input type="hidden" id="csrf" value="{{csrf_token()}}">
										<button type="submit" class="btn btn-primary container">Submit</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End of 11th section -->

				<!-- 12th section -->
				<section class="my-0 bg-primary">
					<div class="row">
						<div class="col-xl-4" style="background-image: url('public/img/door3.webp'); background-size: cover;">

						</div>
						<div class="col-xl-7 p-4 text-white">
							<div class="">
								<p class="fs-3  fs-normal text-justify"> What is the best garage door construction? </p>

								<p class="text-white fs-5  mx-2"> A. The best garage door type for you will depend on a number of factors.</p>

								<p class="text-white fs-5 d-flex justify-content-center mx-2"> i) There's the practicality of how the door functions - this will usually depend on the space available in and around the garage entrance.</p>

								<p class="text-white fs-5 d-flex justify-content-center p-2"> ii) Materials make a difference. Auckland Garage Doors offer a range of aluminium, Colorsteel, and cedar. While wood can add curb appeal, it is also more expensive to produce and install. Colorsteel and aluminium are more durable and usually require less maintenance. Contact us for more expert advice.</p>
							</div>
						</div>
						<div class="col-xl-1 bg-primary">
						</div>
					</div>
				</section>
				<!-- End of 12th section -->

				<!-- 13th Section -->
				<section class="" id="thirnth_sec">
					<div class="row fixed-bottom">
						<div class="col-xl-3 float-end">
						</div>
						<div class="col-xl-3 float-end">
						</div>
						<div class="col-xl-3 float-end">
						</div>
						<div class="col-xl-3" id="thirnth_sec_col_4">
							<div class="fixed-bottom" style="">
								<p class="text-center bg-info text-white float-end">
									<img src="{{URL::asset('public/img/recaptcha.webp')}}" class="  " height="60" width="60">
									<span class="" style="display:none"> 
										protected by reCAPTCHA 
										&nbsp;
									</span>
								</p>
							</div>
						</div>
					</div>
				</section>


				<!-- End of 13th Section -->
			</body>

			<!-- footer -->
			@include('includes/footer')
			<!-- End of footer -->


			<script>

				var acc = document.getElementsByClassName("accordion");
				var i;

				for (i = 0; i < acc.length; i++) {
					acc[i].addEventListener("click", function() {
						this.classList.toggle("active");
						var panel = this.nextElementSibling;
						if (panel.style.maxHeight) {
							panel.style.maxHeight = null;
						} else {
							panel.style.maxHeight = panel.scrollHeight + "px";
						} 
					});
				}

			</script>


			</html>