<!DOCTYPE html>
<html lang="en">
<head>
	<title>Questionaire</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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

	@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0px 8px 15px #0e2351;
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
.button_log {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #0e3997 !important;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #fff;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
  font-weight: bolder;
}

</style>
<script type="text/javascript">


  $(document).ready(function(){

    


    $('form').submit(function(e){
       var form = $(this);
    var url = form.attr('action');

    $.ajax({
           type: "POST",
           url: url,
           data: form.serialize(), // serializes the form's elements.
           success: function(data)
           {
            if(data != 1){

               alert(data); // show response from the php script.
            }
            else{
              location.href="ins.php";
            }
           }
         });

    e.preventDefault();
    })
  })
</script>
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
		<a class="navbar-brand" href="index.php"><img src="admin/images/logo.png" alt="Logo" style="width:70px;"></a>
	</nav>
	<div class="col-lg-12 d-none .d-none .d-sm-block">
		<br><br><br><br>
	</div>
	<div class="row h-100 justify-content-center align-items-center">
		<div class="col-lg-5" style="padding: 8% 0 0;">
  <div class="form">
    <form class="login-form" action="login_b.php" method="POST">
      <input type="email" placeholder="email" name="email" />
      <input type="date" placeholder="" name="password" />
      <input type="submit" name="submit" value="Login" class="button_log">
      <p class="message">Not registered? <a href="register.php" style="color: #0e3997">Create an account</a></p>
    </form>
  </div>
</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
