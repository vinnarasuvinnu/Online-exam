<?php
session_start();
include('auth.php');
?>
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
<script type="text/javascript">
            function countDown(secs, elem)
            {
                var element = document.getElementById(elem);
                var min = Math.trunc(secs/60);
                element.innerHTML = "<h6>You have <b>"+min+"</b> Minutes to answer the questions</h6>";
                if(secs < 1) {
                    document.quiz.submit();
                }
                else
                {
                    secs--;
                    setTimeout('countDown('+secs+',"'+elem+'")',2000);
                }
            }

            function validate() {
                return true;
            }
            </script>

</head>
<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
		<a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="Logo" style="width:70px;"></a>
		<ul class="navbar-nav ml-auto">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="color: #000 !important">
					<?php echo $_SESSION['email'];?>
				</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="backend/logout.php">Logout</a>
				</div>
			</li>
		</ul>
	</nav>
	<div class="row justify-content-center align-items-center">
		<div class="col-lg-8"  style="background: #fff !important; box-shadow: 0px 8px 15px #0e2351; padding: 40px; margin-top: 80px">
			<div id="status"></div>
            <script type="text/javascript">countDown(2000,"status");</script><br>
		<h4 style="font-weight: bold">Attempt all the questions, there is no negative marking for this Test</h4>
		<br>
		<form action="submit_question.php"  onsubmit="return validate()">
			<h5 style="font-weight: bold">Q1. What is your name?</h5>
			<input type="radio" name="name" value="tenzin">&nbsp;&nbsp;Tenzin<br>
			<input type="radio" name="name" value="tenzin">&nbsp;&nbsp;Thinley<br>
			<input type="radio" name="name" value="tenzin">&nbsp;&nbsp;Both Names<br>
			<input type="radio" name="name" value="tenzin">&nbsp;&nbsp;None of the Above<br>
			<br>
			<h4 style="font-weight: bold">Q1. What is your name?</h4>
			<input type="radio" name="name" value="tenzin">&nbsp;&nbsp;Tenzin<br>
			<input type="radio" name="name" value="tenzin">&nbsp;&nbsp;Thinley<br>
			<input type="radio" name="name" value="tenzin">&nbsp;&nbsp;Both Names<br>
			<input type="radio" name="name" value="tenzin">&nbsp;&nbsp;None of the Above<br>
			<br>
			<h4 style="font-weight: bold">Q1. What is your name?</h4>
			<input type="radio" name="name" value="tenzin">&nbsp;&nbsp;Tenzin<br>
			<input type="radio" name="name" value="tenzin">&nbsp;&nbsp;Thinley<br>
			<input type="radio" name="name" value="tenzin">&nbsp;&nbsp;Both Names<br>
			<input type="radio" name="name" value="tenzin">&nbsp;&nbsp;None of the Above<br>
			<br>
			<h4 style="font-weight: bold">Q1. What is your name?</h4>
			<input type="radio" name="name" value="tenzin">&nbsp;&nbsp;Tenzin<br>
			<input type="radio" name="name" value="tenzin">&nbsp;&nbsp;Thinley<br>
			<input type="radio" name="name" value="tenzin">&nbsp;&nbsp;Both Names<br>
			<input type="radio" name="name" value="tenzin">&nbsp;&nbsp;None of the Above<br>
			<br>
			<h4 style="font-weight: bold">Q1. What is your name?</h4>
			<input type="radio" name="name" value="tenzin">&nbsp;&nbsp;Tenzin<br>
			<input type="radio" name="name" value="tenzin">&nbsp;&nbsp;Thinley<br>
			<input type="radio" name="name" value="tenzin">&nbsp;&nbsp;Both Names<br>
			<input type="radio" name="name" value="tenzin">&nbsp;&nbsp;None of the Above<br>

		</form>
		<br>
		<br>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
