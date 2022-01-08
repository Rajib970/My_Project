<!-- ==================== Footer =================== -->
<p class="my-5">
</p>
<footer class="bg-dark">
	<div class="row">
		<div class="col-xl-1">
		</div>

		<div class="col-xl-2 my-3">
			<p class="text-center">
				<img src="{{URL::asset('public/img/logo.webp')}}" class="img-thumbnail text-center" height="" width="">
			</p>
			<p class="text-center d-xxl-block d-xl-block d-none d-sm-none d-md-none d-lg-none">
				<img src="{{URL::asset('public/img/au_made.webp')}}" class="img-thumbnail text-center border-0"  height="" width="" style="background:none;">
			</p>
		</div>

		<div class="col-xl-5 ">
			<p class="text-white text-center fs-4 fw-light ">
				Get a free Quote.
				<br/>
				In need of a garage door?
				<br/>
				Call Now:<a href="tel:0435 128 222" class="btn btn-none text-white fs-4"> 0435 128 222 </a>
			</p>
			<!--<p class="text-white text-center fs-4 ">-->
			<!--	<a href="" class="btn btn-primary border-0 rounded-pill w-50"> Review Us </a>-->
			<!--</p>-->
			
			<div class="star-rating">
            <div class="thanks-msg">Thanks for your feedback !!!</div>
            <div class="star-input">
                <input type="radio" name="rating" id="rating-5">
                <label for="rating-5" class="fas fa-star"></label>
                <input type="radio" name="rating" id="rating-4">
                <label for="rating-4" class="fas fa-star"></label>
                <input type="radio" name="rating" id="rating-3">
                <label for="rating-3" class="fas fa-star"></label>
                <input type="radio" name="rating" id="rating-2">
                <label for="rating-2" class="fas fa-star"></label>
                <input type="radio" name="rating" id="rating-1">
                <label for="rating-1" class="fas fa-star"></label>

                <!-- Rating Submit Form -->
                <form>
                    <span class="rating-reaction"></span>
                    <button type="submit" class="submit-rating">Submit</button>
                </form>
            </div>
        </div>
			
			
			
			<p class=" text-center ">
				<a href="#" class="fa fa-facebook"></a>
				<a href="#" class="fa fa-twitter"></a>
				<a href="#" class="fa fa-instagram"></a>
			</p>
			
			
		</div>

		<div class="col-xl-4">
			<p class="text-white fs-4 fw-light mx-3"> Get In Touch : </p> 
			<p class="text-white fw-light fs-5 mx-4">
				<span class="text-center">
					<i class="fas fa-globe-asia text-info"></i>
				</span>
				Genie Garage Doors
				<br/>
				<span class="mx-4">
					Brighton-Le-Sands, NSW 2216
				</span>

			</p>

			<p class="mx-3">
				<a href="mailto:info@geniegaragedoors.com.au" class="btn btn-none text-white fw-light fs-5">
					<i class="far fa-envelope text-info"></i>
					info@geniegaragedoors.com.au
				</a>
			</p>


			<p class="mx-3">
				<a href="tel:0435 128 222" class="btn btn-none text-white fw-light fs-5">
					<i class="fas fa-phone-alt text-info"></i>
					0435 128 222
				</a>
			</p>
		
			
			
		</div>

	</div>
	<hr class="text-light"/>
	<div class="row">

		<p class="text-white text-center fs-5">  © 2021 by GENIE GARAGE DOORS. </p>
	</div>
</footer>



<!-- ===================== End of Footer ============= -->

<!-- jquery -->
<script type="text/javascript" src="{{URL::asset('public/js/jquery/jquery.js')}}"></script>
<!-- End of jquery -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Boosttrap js -->
<script type="text/javascript" src="{{URL::asset('public/js/bootstrap/bootstrap.js')}}"> </script>
<!-- End of Bootstrap js -->

<!--  ============= Javascript and jquery code ================ -->
<script type="text/javascript">
	$(document).ready(function(){
		// Code to open the dropdown list
		$('.dropdown-toggle').dropdown();
        // Code to show dropdown list on hover
        $("#nav_desk_lap .dropdown").mouseover(function(){
        	$("#nav_desk_lap .dropdown-menu").show();
        });
        $("#nav_desk_lap .dropdown").mouseleave(function(){
        	$("#nav_desk_lap .dropdown-menu").hide();
        });
        // Code to send form data to the controller
        $("#form1 #form_submit_btn").on('click',function(e){
        	e.preventDefault();
        	var name = $("#form1 #name").val();
        	var phone = $("#form1 #phone").val();
        	var email = $("#form1 #email").val();
        	var address = $("#form1 #address").val();
        	var csrf = $("#form1 #csrf").val();
        	var message = $("#form1 #message").val();
        	var check = /^[0-9]{1,10}$/;
        	if(name == '' || phone == '' || email == '' || address == ''){
        		alert("Please Enter The Data Properly!");
        	}
        	else if(check.test(phone) == false){
        		alert("Please enter 10 Digit Phone number!");
        	}
        	else{
        		$.ajax({
        			url:"lead",
        			method: "POST",
        			data:{name:name, phone:phone, email:email, address:address, message:message, _token:csrf},
        			success:function(data){
        				if(data){
        					alert("Thank You For Reaching Us. We Will Call You After Sometime!");
        					$("#form1 :input").prop('readonly',true);
        					$("#form1 #form_submit_btn").prop('disabled',true);
        				}else{
        					alert("Something Went Wrong!");
        				}
        			}
        		});
        	}

        }); 
    });
</script>

  <!--review us-->
  <script type="text/javascript">
  const btn = document.querySelector(".submit-rating");
const thanksmsg = document.querySelector(".thanks-msg");
const starRating = document.querySelector(".star-input");
// Success msg show/hide
btn.onclick = () => {
    starRating.style.display = "none";
    thanksmsg.style.display = "table";
    return false;
};
</script>
  <!--review us-->


