<div class="col-xl-3 my-3" id="sidebar">
				<form class="p-2 bg-primary" id="form_1" style="margin-top:-2%;">
					<p class="text-white fs-5 text-center"> Get a Free Quote </p>
					<p class="text-center" style="margin-top:-3%;"> 
						 <a href="tel:092977714" class="btn btn-none text-white fs-3 "> 
						 	<i class="fas fa-phone-alt text-white"> 092977714  </i> </a> </p>
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
				<div class="card">
					<img src="{{URL::asset('public/img/gurantee.webp')}}" class="img img-thumbnail p-3 border-0">
				</div>
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
							<li class="list-group-item bg-primary text-white"> <i class="fas fa-caret-right"></i> &nbsp; <a href="/gallery" class="btn btn-default text-white p-0"> 
							PHOTO GALLERY  </a></li>
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
				<div class="card bg-primary my-2">
					<a href="garage-door-remotes" class="btn btn-default text-white fs-5"> 
					Garage Door Remotes</a>
					<a href="repair-service" class="btn btn-default text-white fs-5"> 
					Repair & Service </a>
				</div>
				<!-- <div class="card bg-primary my-2">
					<p class="fs-5 text-white mx-3"> Service Areas </p>
					<ul class="list-group list-group-flush">
						<li class="list-group-item bg-primary text-white"> <i class="fas fa-caret-right"></i> &nbsp; <a href="" class="btn btn-default text-white p-0"> 
						Garage Doors Hills District </a></li>
						<li class="list-group-item bg-primary text-white"> <i class="fas fa-caret-right"></i> &nbsp; <a href="" class="btn btn-default text-white p-0"> 
						Garage Doors Inner West Sydney </a></li>
						<li class="list-group-item bg-primary text-white"> <i class="fas fa-caret-right"></i> &nbsp; <a href="" class="btn btn-default text-white p-0"> 
						Garage Doors North Shore </a></li>
						<li class="list-group-item bg-primary text-white"> <i class="fas fa-caret-right"></i> &nbsp; <a href="" class="btn btn-default text-white p-0"> 
						Garage Doors Eastern Subrubs  </a></li>
						<li class="list-group-item bg-primary text-white"> <i class="fas fa-caret-right"></i> &nbsp; <a href="" class="btn btn-default text-white p-0"> 
						Garage Doors South West Sydney </a></li>
						<li class="list-group-item bg-primary text-white"> <i class="fas fa-caret-right"></i> &nbsp; <a href="" class="btn btn-default text-white p-0"> 
						Garage Doors Sutherland Shire </a></li>
						<li class="list-group-item bg-primary text-white"> <i class="fas fa-caret-right"></i> &nbsp; <a href="" class="btn btn-default text-white p-0"> 
						Garage Doors Northern Beaches  </a></li>
						<li class="list-group-item bg-primary text-white"> <i class="fas fa-caret-right"></i> &nbsp; <a href="" class="btn btn-default text-white p-0"> 
						Garage Doors Western Sydney </a></li>
						<li class="list-group-item bg-primary text-white"> <i class="fas fa-caret-right"></i> &nbsp; <a href="" class="btn btn-default text-white p-0"> 
						Garage Doors Campbelltown  </a></li>
					</ul>
				</div> -->

			</div>