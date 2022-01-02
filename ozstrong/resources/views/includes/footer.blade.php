<!-- footer start -->
<footer>
    <div class="row bg-dark p-3">
        <div class="col-xl-3">
            <img src="{{URL::asset('public/img/logo.png')}}" class="img-thumbnail  my-2">
            <p class="text-center my-4">
                <a href="mailto:sales@aucklandgaragedoors.co.nz"><i class="fas fa-envelope-square text-white bg-primary fs-3 p-3"></i></a>
                <a href="https://www.facebook.com/AUCKLANDGARAGEDOORS/"><i class="fab fa-facebook text-white bg-primary fs-3 p-3"></i></a>
            </p>
            <p class="text-center">
                <a href="https://www.facebook.com/AUCKLANDGARAGEDOORS/">
                    <img src="{{URL::asset('public/img/fb_review.webp')}}" class="img-thumbnail  border-0 bg-dark w-75 my-2" >
                </a>
            </p>

            <p class="text-center text-light fw-light"> Sitemap </p>
        </div>
        <div class="col-xl-3">
         <p class="fs-5 text-white my-2 mx-4"> Products </p>
         <ul class="list-group list-group-flush mx-3 ">
            <li class="list-group-item bg-dark text-white p-0 border-0"> <a href="auckland-garage-doors" class="text-white fs-light btn btn-default"> AUCKLAND GARAGE DOORS </a></li>
            <li class="list-group-item bg-dark text-white p-0 border-0"> <a href="new-garage-doors" class="text-white fs-light btn btn-default"> NEW GARAGE DOORS </a></li>
            <li class="list-group-item bg-dark text-white p-0 border-0"> <a href="new-garage-doors-auckland" class="text-white fs-light btn btn-default"> NEW GARAGE DOORS AUCKLAND</a></li>
            <li class="list-group-item bg-dark text-white p-0 border-0"> <a href="garage-door-repair" class="text-white fs-light btn btn-default"> GARAGE DOOR REPAIR </a></li>
        </ul>
    </div>
    <div class="col-xl-3">
       <p class="fs-5 text-white my-2 mx-3"> Service Location </p>
       <ul class="list-group list-group-flush mx-2">
         <li class="list-group-item bg-dark text-white p-0"> <a href="new-garage-doors-auckland" class="text-white fs-light btn btn-default">   AUCKLAND, NEW ZELAND </a></li>
     </ul>
 </div>
 <div class="col-xl-3">
    <p class="fs-5 text-white my-2 mx-2"> Contact Us </p>
    <ul class="list-group">
        <li class="list-group-item bg-dark text-white border-0"> <i class="fa fa-map-marker text-primary" aria-hidden="true"></i> &nbsp;
        9/375 East Tamaki Road, East Tamaki, Auckland, 2013, New Zealand </li>
        <li class="list-group-item bg-dark text-white border-0"> <a href="tel: 092977714" class="btn btn-none text-white"> <i class="fas fa-phone-alt text-primary"></i> 092977714 </a> </li>
        <li class="list-group-item bg-dark text-white border-0"> <a href="tel:0277766000" class="btn btn-none text-white"> <i class="fas fa-phone-alt text-primary"></i> 0277766000 </a></li>
        <li class="list-group-item bg-dark text-white border-0"><i class="fas fa-envelope text-primary"></i>
            &nbsp; 
            <a href="mailto:sales@aucklandgaragedoors.co.nz" class="text-white">sales@aucklandgaragedoors.co.nz</a>

        </li>
        <li class="list-group-item bg-dark text-white border-0"> 
            <a class="fs-6 fw-bold btn btn-default  text-white" aria-current="page" href="/learn-more"> LEARN  MORE  </a> 
            <a class="fs-6 fw-bold btn btn-default  text-white" aria-current="page" href="/about-us"> ABOUT US </a> 
        </li>
        <li class="list-group-item bg-dark text-white d-none d-sm-block d-sm-none d-md-block d-md-none d-lg-block d-lg-none d-xl-block border-0"> <img src="{{URL::asset('public/img/logo.png')}}" class="img-thumbnail my-2">
        </li>
    </ul>
</div>
<hr class="text-light"/>
<p class="text-center text-white fs-6">
    © 2021 AUCKLANDGARAGEDOORS.CO.NZ
</p>
</div>
</footer>
<!-- footer end -->

<!-- jquery -->
<script src="{{URL::asset('public/js/jquery.js')}}"></script>
<!-- Bootstrap -->
<script  src="{{URL::asset('public/js/bootstrap.js')}}"></script>

<!-- javascript -->
<script>
    $(document).ready(function(){
    // Code to open the dropdown list
    $('.dropdown-toggle').dropdown();

    // dropdown list on hover
    $("#hdr_sec_1 .hdd1").mouseover(function(){
        $("#hdr_sec_1 .hdm1").show();
    });
    $("#hdr_sec_1 .hdd1").mouseleave(function(){
        $("#hdr_sec_1 .hdm1").hide();
    });
    $("#hdr_sec_2 .dd1").mouseover(function(){
        $("#hdr_sec_2 .dm1").show();
    });
    $("#hdr_sec_2 .dd1").mouseleave(function(){
        $("#hdr_sec_2 .dm1").hide();
    });
    $("#hdr_sec_2 .dd2").mouseover(function(){
        $("#hdr_sec_2 .dm2").show();
    });
    $("#hdr_sec_2 .dd2").mouseleave(function(){
        $("#hdr_sec_2 .dm2").hide();
    });
    // Caraousel
    $('.carousel').carousel({
        interval: 1000 * 4
    });

    // Common Form data
    $("#form_1 button").on('click', function(e){
       e.preventDefault();
       var name = $("#form_1 #name").val();
       var phone = $("#form_1 #phone").val();
       var email = $("#form_1 #email").val();
       var subrub = $("#form_1 #subrub").val(); 
       var product = $("#form_1 #product").val();
       var message = $("#form_1 #message").val();
       var csrf = $("#form_1 #csrf").val();
       var check = /^[0-9]{1,10}$/; 

       if( name == '' || email == '' || subrub == '' || product == ''){
        alert("Please enter all the fields!");
    }
    else if(check.test(phone) == false){
     alert("Please enter 10 Digit Phone number!");
 }
 else{
   $.ajax({
     url:"lead",
     type:"POST",
     data:{name:name, phone: phone, email: email, subrub:subrub, product: product, message: message, _token:csrf } ,
     success:function(data){
        if(data == true){
            alert("Your Quote Submitted Successfully!");
            $("#form_1 :input").prop('readonly', true);
            $("#form_1 #product").prop('disabled', true);
            $("#form_1 button").prop('disabled', true);
        }
        else{
            alert("Try Again!")

        }
    }

});
}
});

    // Second form data
    $("#form_2 button").on('click',function(e){
        e.preventDefault();
        var name = $("#form_2 #name").val();
        var email = $("#form_2 #email").val();
        var csrf = $("#form_2 #csrf").val();
        if(name == '' || email == ''){
            alert("Please Fill all the Fields!");
        } 
        else{
            $.ajax({
                url:'subscribe',
                type:'POST',
                data:{name:name, email:email, _token:csrf},
                success:function(data){
                    if(data == true){
                        alert('Your Subscription request submitted successfully!');
                        $("#form_2 :input").prop('readonly',true);
                        $("#form_2 button").prop('disabled', true);
                    }
                    else{
                        alert('Try again!');
                    }
                }
            })
        }
    });

    // recaptcha icon content showing on hover in home page
    $("#thirnth_sec_col_4 img").mouseover(function(){
        $("#thirnth_sec_col_4 span").show(1000);
    });
    $("#thirnth_sec_col_4").mouseleave(function(){
        $("#thirnth_sec_col_4 span").hide(800);
    });
});
</script>

