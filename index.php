<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> pdf form </title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>


		<div class="container mt-5">

			<form action="makepdf.php" method="post" class="offset-md-3 col-md-6">

				<h1> Create your own PDF<h1>
					<h5> Fill out he details below and the PDF will download</h5>

					<div class="row mb-2">

					<div class="col-md-6">
						<input type="test" name="fname" placeholder="First Name" class="form-control" required>
					</div>

					<div class="col-md-6">
						<input type="test" name="lname" placeholder="Last Name" class="form-control" required>
					</div>

					</div>

					<div class="mb-2">
						<input type="email" name="email" placeholder="Email" class="form-control" required>
					</div>

					<div class="mb-2">
						<input type="phone" name="phone" placeholder="Phone" class="form-control" required>
					</div>

					<div class="mb-2">
						<textarea name="message" placeholder="Your message" class="form-control"></textarea>
					</div>

					<button type="submit" class="btn btn-success btn-lg btn-block">Click to Create PDF</button>



</body>
</html>