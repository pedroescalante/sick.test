<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sick Test!</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

	<div class="contact1">
		<div class="container-contact1">

			@include('flash-message')

			<div class="contact1-pic js-tilt" data-tilt>
				<img src="images/img-01.png" alt="IMG">
			</div>

			{{ Form::open(array('url' => 'message', 'class'=>'contact1-form validate-form', 'method'=>'post')) }}

				<a href="numbers"> 
					Numbers Details
						<i class="fa fa-phone" aria-hidden="true"></i>
				</a>

				<span class="contact1-form-title">
					Get in touch, send a Message!
				</span>

				<div class="wrap-input1 validate-input" data-validate = "Valid Phone is required: +15551234567">
					<select class="input1" type="text" name="from">
						<option value="">Click to select number </option>
						@foreach($numbers as $number)
						<option value="{{ $number->phoneNumber}}"> {{ $number->phoneNumber }} </option>
						@endforeach
					</select>
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Valid Phone is required: +15551234567">
					<input class="input1" type="text" name="to" placeholder="Phone">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Message is required">
					<textarea class="input1" name="message" placeholder="Message"></textarea>
					<span class="shadow-input1"></span>
				</div>

				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn">
						<span>
							Send a sick SMS!
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			{{ Form::close() }}
		</div>
	</div>




	<script src="js/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="js/main.js"></script>

</body>
</html>
