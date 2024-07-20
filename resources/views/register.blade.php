<!doctype html>
<html lang="en">

<head>
	<title>Sign Up</title>
	<link rel="icon" href="/images/icon.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style.css">

</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4">Sign Up</h3>
								</div>
							</div>
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="form-group mt-4">
                                    <input type="text" id="username" name="username"  class="form-control"  required>
                                    <label for="username" class="form-control-placeholder">Username</label>
                                </div>

                                <div class="form-group mt-4">
                                    <input type="email" id="email" name="email"  class="form-control"  required>
                                    <label for="email"  class="form-control-placeholder">Email</label>
                                </div>
                                <div class="form-group mt-4">
                                    <input type="text" id="name" name="name" class="form-control" required>
                                    <label for="name" class="form-control-placeholder">Name</label>
                                </div>
                                <div class="form-group mt-4">
                                    <input type="password" id="password" name="password" class="form-control" required>
                                    <label for="password" class="form-control-placeholder">Password</label>
                                </div>
                                <div class="form-group mt-4">
                                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
                                    <label for="password_confirmation" class="form-control-placeholder">Confirm Password</label>
                                </div>
                                <div class="form-group mt-4"></div>
                                
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3">Register</button>
                            </form>
							
							<p class="text-center mt-3">Have an Account? <a href="/login">Sign In</a></p>
						</div>
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