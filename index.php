<!DOCTYPE html>
<html lang="en">
<head>
	<title>Questionaire</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<style type="text/css">
	body,html{
		height:100%;
		background: #0e3997;
	}
	.button {
		background-color: #4881ff;
		border: none;
		color: white;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		text-transform: uppercase;
		font-weight: bolder;
		display: inline-block;
		font-size: 16px;
		box-shadow: 0px 8px 15px #0e2351;
		transition: all 0.3s ease 0s;
		cursor: pointer;
		outline: none;
	}
	.button:hover {
		background-color: #4881ff;
		box-shadow: 0px 15px 20px #1c46a3;
		color: #fff;
		transform: translateY(-3px);
	}
	.bg-dark{
		background-color: #fff !important;

	}
</style>

</head>
<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
		<a class="navbar-brand" href="index.php"><h1>Exam</h1></a>
		<!-- <ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="#">Link</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Link</a>
			</li>
		</ul> -->
	</nav>
	<div class="row h-100 justify-content-center align-items-center">
		<a href="question.php"><button class="button">Start Quiz</button></a>
		
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
