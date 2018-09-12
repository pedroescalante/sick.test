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
			<a href="index.php"> Back </a>
			<h3> My Numbers </h3>
			<br>
			<div>
				<table class="table table-condensed">
					<tr>
						<th> SID </th>
						<th> Number </th>
					</tr>
				@foreach($numbers as $number)
					<tr>
						<td> {{ $number->sid }} </td>
						<td> {{ $number->phoneNumber }} </td>
					</tr>
				@endforeach
				</table>
			</div>
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
