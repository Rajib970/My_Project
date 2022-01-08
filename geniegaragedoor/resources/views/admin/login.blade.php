<!DOCTYPE html>
<html>
<head>
	<!-- header -->
	@include('admin/includes/header')
	<!-- End of Header -->
	</head>
	<body>
	<section>
		<div class="bg-white" style="margin-top:10%;">
			<div class="row d-flex justify-content-center">
				<div class="col-xl-4 bg-light bg-gradient border border-dark border-5 shadow-lg">
					@if(session()->has('error'))
					<p class="text-danger text-center text-justify p-2"><i class="fas fa-exclamation-triangle text-danger"></i> {{session()->get('error')}} </p>
					@endif
					<p class="h4 text-info fw-normal text-center p-2"> Admin Login! </p>
					<form class="p-2" action="admin-login" method="POST">
						<div class="form-group">
							<label for="" class="text-primary">Email address</label>
							<input type="email" name="user_id" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter email" required>
						</div>
						<div class="form-group">
							<label for="" class="text-primary">Password</label>
							<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
						</div>
						@csrf
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</section>

	<!-- footer -->
	@include('admin/includes/footer');
</body>

</html>
