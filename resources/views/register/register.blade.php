@extends('layouts.main')

@section('container')
<!doctype html>
<html lang="en">
  <head>
  	<title>Make An Account</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(https://i.pinimg.com/originals/71/4c/93/714c9373e922654f394fa8fff35fef36.gif);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Make An Account</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<form action="/register" class="signin-form" method="post">
              	@csrf
		      		<div class="form-group">
		      			<input type="text" class="form-control @error('username')is-invalid @enderror" placeholder="Username" name="username" id="username">
						@error('username')
						<div class="invalid-feedback">
							Bro, Just Insert Any Name
						  </div>
						@enderror
		      		</div>
              <div class="form-group">
		      			<input type="text" class="form-control @error('email')is-invalid @enderror" placeholder="Email" name="email" id="email">
						  @error('email')
						  <div class="invalid-feedback">
							  You should be have an email don't you?
							</div>
						  @enderror
		      		</div>
	            <div class="form-group">
	              <input id="password" type="password" class="form-control @error('password')is-invalid @enderror" placeholder="Password" name="password">
				  @error('password')
				  <div class="invalid-feedback">
					  Oh yeah, you need atleast 8 Characters
					</div>
				  @enderror
	              <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
              <div class="w-50">
              </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Register</button>
	            </div>
	          </form>
			   <small class="d-block text-center"> Oh You Misclick? <a href="/login"> Here You Go </a> </small>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>


@endsection