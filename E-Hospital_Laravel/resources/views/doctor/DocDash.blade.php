@extends('layouts.layout4')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="css/publichome.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Welcome to Doctor Panel!</h3>
				  <form action="" method="post" class="login-form">
                  {{@csrf_field()}}
					<div class="form-group">
					<div class="form-group d-flex">
				<input type="password" class="form-control rounded-left text-center fw-bolder" name="password" placeholder="Only You got access of the" required disabled>
			</div>
				</div>
				<span>
						
				</span>
			<div class="form-group d-flex">
				<input type="password" class="form-control rounded-left text-center fw-bolder" name="password" placeholder="SYSTEM" required disabled>
			</div>
			</form>	
	        </div>
				</div>
			</div>
		</div>
    </div>
</body>
</html>
@endsection
