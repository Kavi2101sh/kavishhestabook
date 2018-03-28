<!DOCTYPE html>
<html>
<head>
	<title>forgot password</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/connect.css">
</head>
<body>
<form>
	<div class="container">
		<div class="row">
			<div class="col-md-offset-4 col-md-4">
				<div class="panel-body">
				<form class="form">
					  <div class="form-group">
                    <input type="email" name="email" id="Email" class="form-control" placeholder="Email">
                       </div>
				</form>
			</div>
		</div>
	</div>
</form>
</body>
<script type="text/javascript">
	function validateEmail(){
            var reg =/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;;
		var email= document.getElementByClassName("email");
        console.log(email);
                if (reg.test(email) === true) 
                    {
                        return true;
                    }
                alert("wrong email");
                return false;

                }
</script>
</html>