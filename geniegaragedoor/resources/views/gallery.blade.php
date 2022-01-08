<!DOCTYPE html>
<html>
<head>
	<!-- head -->
	@include('includes/head')
	<!-- End of head -->

	<!-- External stylesheet -->
	<link  rel="stylesheet" type="text/css" href="{{URL::asset('public/css/about.css')}}">
	<!-- End of External stylesheet -->

	<!-- External stylesheet for slider -->
	<link rel="stylesheet" href="{{URL::asset('public/css/accordion-slider.min.css')}}">
	<!-- End of Externla Stylesheet -->

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
				<p class="text-center fs-2 fw-normal text-white " style="color:;"> OUR GARAGE DOORS GALLERY </p>
				<center>
					<hr class="w-50"/> 
				</center>
				<p class="text-center fs-4 fw-normal text-white " style="color:;"> Some Of Our Garage Door Works. </p>
			</div>

		</div>
		<br/><br/>

		<div class="row">
			<div class="col-xl-2">
				<p class="text-center text-drak fs-4 bg-white" style="background:;">  </p>
			</div>
			<div class="col-xl-8">
				<p class="text-center text-drak fs-4 bg-white" style="background:;"> Speciality Doors </p>
			</div>
			<div class="col-xl-2">
				<p class="text-center text-drak fs-4 bg-white" style="background:;">  </p>
			</div>
		</div>

		<!-- Accordion Slider -->
		<div class="row">
			<div class="col-xl-2">
			</div>
			<div class='col-xl-8'>
				<div id="example1" class="accordion-slider">
					<div class="as-panels">

						<!-- Panel 1 -->
						<div class="as-panel">
							<img class="as-background" src="{{URL::asset('public/img/door1.webp')}}"/>
							<div class="as-layer" 
							data-position="bottomLeft" data-horizontal="20" data-vertical="20" data-width="100%">

							<p class="as-layer as-opened as-white as-padding fs-5 fst-italic"
							data-position="bottomLeft"
							data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
							Garage Doors Sydney
						</p>
					</div>
				</div>

				<!-- Panel 2 -->
				<div class="as-panel">
					<img class="as-background" src="{{URL::asset('public/img/door2.webp')}}"/>
					<div class="as-layer" 
					data-position="bottomLeft" data-horizontal="20" data-vertical="20" data-width="100%">

					<p class="as-layer as-opened as-white as-padding fs-5 fst-italic"
					data-position="bottomLeft"
					data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
					Garage Doors Sydney
				</p>
			</div>
		</div>

		<!-- Panel 3 -->
		<div class="as-panel">
			<img class="as-background" src="{{URL::asset('public/img/door3.webp')}}"/>
			<div class="as-layer" 
			data-position="bottomLeft" data-horizontal="20" data-vertical="20" data-width="100%">

			<p class="as-layer as-opened as-white as-padding fs-5 fst-italic"
			data-position="bottomLeft"
			data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
			Garage Doors Sydney
		</p>
	</div>
</div>

<!-- Panel 4 -->
<div class="as-panel">
	<img class="as-background" src="{{URL::asset('public/img/door4.webp')}}"/>
	<div class="as-layer" 
	data-position="bottomLeft" data-horizontal="20" data-vertical="20" data-width="100%">

	<p class="as-layer as-opened as-white as-padding fs-5 fst-italic"
	data-position="bottomLeft"
	data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
	Garage Doors Sydney
</p>
</div>
</div>

<!-- Panel 5 -->
<div class="as-panel">
	<img class="as-background" src="{{URL::asset('public/img/door5.webp')}}"/>
	<div class="as-layer" 
	data-position="bottomLeft" data-horizontal="20" data-vertical="20" data-width="100%">

	<p class="as-layer as-opened as-white as-padding fs-5 fst-italic"
	data-position="bottomLeft"
	data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
	Garage Doors Sydney
</p>
</div>
</div>

<!-- Panel 6 -->
<div class="as-panel">
	<img class="as-background" src="{{URL::asset('public/img/door6.webp')}}"/>
	<div class="as-layer" 
	data-position="bottomLeft" data-horizontal="20" data-vertical="20" data-width="100%">

	<p class="as-layer as-opened as-white as-padding fs-5 fst-italic"
	data-position="bottomLeft"
	data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
	Garage Doors Sydney
</p>
</div>
</div>

<!-- Panel 7 -->
<div class="as-panel">
	<img class="as-background" src="{{URL::asset('public/img/door7.webp')}}"/>
	<div class="as-layer" 
	data-position="bottomLeft" data-horizontal="20" data-vertical="20" data-width="100%">

	<p class="as-layer as-opened as-white as-padding fs-5 fst-italic"
	data-position="bottomLeft"
	data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
	Garage Doors Sydney
</p>
</div>
</div>

<!-- Panel 8 -->
<div class="as-panel">
	<img class="as-background" src="{{URL::asset('public/img/door8.webp')}}"/>
	<div class="as-layer" 
	data-position="bottomLeft" data-horizontal="20" data-vertical="20" data-width="100%">

	<p class="as-layer as-opened as-white as-padding fs-5 fst-italic"
	data-position="bottomLeft"
	data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
	Garage Doors Sydney
</p>
</div>
</div>


</div>
</div>
<div class="col-xl-2">
</div>
</div>
</div>

<!-- End of Accordion Slider -->
<br/><br/>

<div class="row">
	<div class="col-xl-2">
		<p class="text-center text-drak fs-4 bg-white" style="background:;">  </p>
	</div>
	<div class="col-xl-8">
		<p class="text-center text-drak fs-4 bg-white" style="background:;"> Colorbond Doors </p>
	</div>
	<div class="col-xl-2">
		<p class="text-center text-drak fs-4 bg-white" style="background:;">  </p>
	</div>
</div>


<!-- Accordion Slider 2 -->
<div class="row">
	<div class="col-xl-2">
	</div>
	<div class='col-xl-8'>
		<div id="example1" class="accordion-slider">
			<div class="as-panels">

				
				<!-- Panel 1 -->
				<div class="as-panel">
					<img class="as-background" src="{{URL::asset('public/img/door9.webp')}}"/>
					<div class="as-layer" 
					data-position="bottomLeft" data-horizontal="20" data-vertical="20" data-width="100%">

					<p class="as-layer as-opened as-white as-padding fs-5 fst-italic"
					data-position="bottomLeft"
					data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
					Garage Doors Sydney
				</p>
			</div>
		</div>

		<!-- Panel 2 -->
		<div class="as-panel">
			<img class="as-background" src="{{URL::asset('public/img/door10.webp')}}"/>
			<div class="as-layer" 
			data-position="bottomLeft" data-horizontal="20" data-vertical="20" data-width="100%">

			<p class="as-layer as-opened as-white as-padding fs-5 fst-italic"
			data-position="bottomLeft"
			data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
			Garage Doors Sydney
		</p>
	</div>
</div>

<!-- Panel 3 -->
<div class="as-panel">
	<img class="as-background" src="{{URL::asset('public/img/door13.webp')}}"/>
	<div class="as-layer" 
	data-position="bottomLeft" data-horizontal="20" data-vertical="20" data-width="100%">

	<p class="as-layer as-opened as-white as-padding fs-5 fst-italic"
	data-position="bottomLeft"
	data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
	Garage Doors Sydney
</p>
</div>
</div>

<!-- Panel 4 -->
<div class="as-panel">
	<img class="as-background" src="{{URL::asset('public/img/door14.webp')}}"/>
	<div class="as-layer" 
	data-position="bottomLeft" data-horizontal="20" data-vertical="20" data-width="100%">

	<p class="as-layer as-opened as-white as-padding fs-5 fst-italic"
	data-position="bottomLeft"
	data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
	Garage Doors Sydney
</p>
</div>
</div>

<!-- Panel 5 -->
<div class="as-panel">
	<img class="as-background" src="{{URL::asset('public/img/door15.webp')}}"/>
	<div class="as-layer" 
	data-position="bottomLeft" data-horizontal="20" data-vertical="20" data-width="100%">

	<p class="as-layer as-opened as-white as-padding fs-5 fst-italic"
	data-position="bottomLeft"
	data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
	Garage Doors Sydney
</p>
</div>
</div>

<!-- Panel 6 -->
<div class="as-panel">
	<img class="as-background" src="{{URL::asset('public/img/door16.webp')}}"/>
	<div class="as-layer" 
	data-position="bottomLeft" data-horizontal="20" data-vertical="20" data-width="100%">

	<p class="as-layer as-opened as-white as-padding fs-5 fst-italic"
	data-position="bottomLeft"
	data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
	Garage Doors Sydney
</p>
</div>
</div>

<!-- Panel 7 -->
<div class="as-panel">
	<img class="as-background" src="{{URL::asset('public/img/door17.webp')}}"/>
	<div class="as-layer" 
	data-position="bottomLeft" data-horizontal="20" data-vertical="20" data-width="100%">

	<p class="as-layer as-opened as-white as-padding fs-5 fst-italic"
	data-position="bottomLeft"
	data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
	Garage Doors Sydney
</p>
</div>
</div>

<!-- Panel 8 -->
<div class="as-panel">
	<img class="as-background" src="{{URL::asset('public/img/door18.webp')}}"/>
	<div class="as-layer" 
	data-position="bottomLeft" data-horizontal="20" data-vertical="20" data-width="100%">

	<p class="as-layer as-opened as-white as-padding fs-5 fst-italic"
	data-position="bottomLeft"
	data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
	Garage Doors Sydney
</p>
</div>
</div>
<!-- Panel 9 -->
<div class="as-panel">
	<img class="as-background" src="{{URL::asset('public/img/door19.webp')}}"/>
	<div class="as-layer" 
	data-position="bottomLeft" data-horizontal="20" data-vertical="20" data-width="100%">

	<p class="as-layer as-opened as-white as-padding fs-5 fst-italic"
	data-position="bottomLeft"
	data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
	Garage Doors Sydney
</p>
</div>
</div>
<!-- Panel 10 -->
<div class="as-panel">
	<img class="as-background" src="{{URL::asset('public/img/door20.webp')}}"/>
	<div class="as-layer" 
	data-position="bottomLeft" data-horizontal="20" data-vertical="20" data-width="100%">

	<p class="as-layer as-opened as-white as-padding fs-5 fst-italic"
	data-position="bottomLeft"
	data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
	Garage Doors Sydney
</p>
</div>
</div>
<!-- Panel 11 -->
<div class="as-panel">
	<img class="as-background" src="{{URL::asset('public/img/door21.webp')}}"/>
	<div class="as-layer" 
	data-position="bottomLeft" data-horizontal="20" data-vertical="20" data-width="100%">

	<p class="as-layer as-opened as-white as-padding fs-5 fst-italic"
	data-position="bottomLeft"
	data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
	Garage Doors Sydney
</p>
</div>
</div>
<!-- Panel 11 -->
<div class="as-panel">
	<img class="as-background" src="{{URL::asset('public/img/door22.webp')}}"/>
	<div class="as-layer" 
	data-position="bottomLeft" data-horizontal="20" data-vertical="20" data-width="100%">

	<p class="as-layer as-opened as-white as-padding fs-5 fst-italic"
	data-position="bottomLeft"
	data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
	Garage Doors Sydney
</p>
</div>
</div>
<!-- Panel 12 -->
<div class="as-panel">
	<img class="as-background" src="{{URL::asset('public/img/door23.webp')}}"/>
	<div class="as-layer" 
	data-position="bottomLeft" data-horizontal="20" data-vertical="20" data-width="100%">

	<p class="as-layer as-opened as-white as-padding fs-5 fst-italic"
	data-position="bottomLeft"
	data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
	Garage Doors Sydney
</p>
</div>
</div>
<!-- Panel 13 -->
<div class="as-panel">
	<img class="as-background" src="{{URL::asset('public/img/door24.webp')}}"/>
	<div class="as-layer" 
	data-position="bottomLeft" data-horizontal="20" data-vertical="20" data-width="100%">

	<p class="as-layer as-opened as-white as-padding fs-5 fst-italic"
	data-position="bottomLeft"
	data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
	Garage Doors Sydney
</p>
</div>
</div>
<!-- Panel 14 -->
<div class="as-panel">
	<img class="as-background" src="{{URL::asset('public/img/door25.webp')}}"/>
	<div class="as-layer" 
	data-position="bottomLeft" data-horizontal="20" data-vertical="20" data-width="100%">

	<p class="as-layer as-opened as-white as-padding fs-5 fst-italic"
	data-position="bottomLeft"
	data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
	Garage Doors Sydney
</p>
</div>
</div>
<!-- Panel 15 -->
<div class="as-panel">
	<img class="as-background" src="{{URL::asset('public/img/door26.webp')}}"/>
	<div class="as-layer" 
	data-position="bottomLeft" data-horizontal="20" data-vertical="20" data-width="100%">

	<p class="as-layer as-opened as-white as-padding fs-5 fst-italic"
	data-position="bottomLeft"
	data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
	Garage Doors Sydney
</p>
</div>
</div>
<!-- Panel 16 -->
<div class="as-panel">
	<img class="as-background" src="{{URL::asset('public/img/door27.webp')}}"/>
	<div class="as-layer" 
	data-position="bottomLeft" data-horizontal="20" data-vertical="20" data-width="100%">

	<p class="as-layer as-opened as-white as-padding fs-5 fst-italic"
	data-position="bottomLeft"
	data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
	Garage Doors Sydney
</p>
</div>
</div>
<!-- Panel 17 -->
<div class="as-panel">
	<img class="as-background" src="{{URL::asset('public/img/door28.webp')}}"/>
	<div class="as-layer" 
	data-position="bottomLeft" data-horizontal="20" data-vertical="20" data-width="100%">

	<p class="as-layer as-opened as-white as-padding fs-5 fst-italic"
	data-position="bottomLeft"
	data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
	Garage Doors Sydney
</p>
</div>
</div>
<!-- Panel 18 -->
<div class="as-panel">
	<img class="as-background" src="{{URL::asset('public/img/door29.webp')}}"/>
	<div class="as-layer" 
	data-position="bottomLeft" data-horizontal="20" data-vertical="20" data-width="100%">

	<p class="as-layer as-opened as-white as-padding fs-5 fst-italic"
	data-position="bottomLeft"
	data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
	Garage Doors Sydney
</p>
</div>
</div>
<!-- Panel 19 -->
<div class="as-panel">
	<img class="as-background" src="{{URL::asset('public/img/door30.webp')}}"/>
	<div class="as-layer" 
	data-position="bottomLeft" data-horizontal="20" data-vertical="20" data-width="100%">

	<p class="as-layer as-opened as-white as-padding fs-5 fst-italic"
	data-position="bottomLeft"
	data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
	Garage Doors Sydney
</p>
</div>
</div>
<!-- Panel 20 -->
<div class="as-panel">
	<img class="as-background" src="{{URL::asset('public/img/door31.webp')}}"/>
	<div class="as-layer" 
	data-position="bottomLeft" data-horizontal="20" data-vertical="20" data-width="100%">

	<p class="as-layer as-opened as-white as-padding fs-5 fst-italic"
	data-position="bottomLeft"
	data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
	Garage Doors Sydney
</p>
</div>
</div>
<!-- Panel 21 -->
<div class="as-panel">
	<img class="as-background" src="{{URL::asset('public/img/door32.webp')}}"/>
	<div class="as-layer" 
	data-position="bottomLeft" data-horizontal="20" data-vertical="20" data-width="100%">

	<p class="as-layer as-opened as-white as-padding fs-5 fst-italic"
	data-position="bottomLeft"
	data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
	Garage Doors Sydney
</p>
</div>
</div>
</div>
</div>
<div class="col-xl-2">
</div>
</div>
</div>
<!-- End of Accrodion Slider 2 -->

</section>

<!-- ================= End of 1st Section =========== -->

<!-- footer -->
@include('includes/footer')
<!-- end of footer -->

<!-- js for slider -->

<script type="text/javascript" src="{{URL::asset('public/js/jquery.accordionSlider.min.js')}}"></script>

<script type="text/javascript">
	jQuery(document).ready(function($) {
	// instantiate the accordion
	$('#example1, #example2').accordionSlider({
		width: 960,
		height: 400,
		responsiveMode: 'auto',
		visiblePanels: 5,
		closePanelsOnMouseOut: false,
		autoplay: true
	});

	// change the responsive mode
	$('.controls a').click(function(event) {
		event.preventDefault();

		if ($(this).hasClass('auto')) {
			// change the responsive mode to 'auto' and remove the 'custom-responsive' class
			$('#example1, #example2').removeClass('custom-responsive');
			$('#example1, #example2').accordionSlider('responsiveMode', 'auto');

			// change the arrows' visibility
			$('.auto-arrow').show();
			$('.custom-arrow').hide();
		} else if ($(this).hasClass('custom')) {
			// change the responsive mode to 'custom' and add the 'custom-responsive' 
			// class in order to use it as a reference in the CSS code
			$('#example1, #example2').addClass('custom-responsive');
			$('#example1, #example2').accordionSlider('responsiveMode', 'custom');

			// change the arrows' visibility
			$('.custom-arrow').show();
			$('.auto-arrow').hide();
		}
	});
});
</script>
<!-- End of slider js -->
</body>
</html>