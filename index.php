<?php 
session_start();
if(isset($_SESSION['mail'])){
    header("location:connect.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login with registration</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="#" class="active" id="login-form-link">Login</a>
                            </div>
                            <div class="col-xs-6">
                                <a href="#" id="SignUp-form-link">SignUp</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                        <form id="login-form" action="login.php" method="post" role="form" style="display: block;">
                                    <div class="form-group">
                    <input type="email" name="email" id="Email" class="form-control" placeholder="Email" >
                                    </div>
                                <div class="form-group">
                <input type="password" name="password" id="passwordlogin" class="form-control" placeholder="Password"  >
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                        <div class=" col-sm-offset-3 col-sm-6">
        <input type="submit" name="loginsubmit" id="login-submit" class="form-control btn btn-login" value="Log In" onsubmit="validateEmail();">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <div class="row">
                                               <div class="col-lg-12">
                                                <div class="text-center">
                                         <a href="forget.php" class="forgot-password">Forgot Password?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                        <form id="SignUp-form" action="signup.php" method="POST" role="form" style="display: none;" enctype="multipart/form-data">
                                    <div class="form-group">
            <input type="text" name="name" id="name" class="form-control" placeholder="name" required="">
                                    </div>
                                    <div class="form-group">
            <input type="email" name="email" id="email" class="form-control" placeholder="email" required="">
                                    </div>
                                    <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="password" minlength="6" required="">
                                    </div>                                    
                            
                                    <div class="form-group">
                <input type="address" name="addr" id="address" class="form-control" placeholder="address" required="">
                                    </div>  
                                <div class="form-group">
                <input type="text" name="mobile" id="number" class="form-control" required="" placeholder="Mobile No." >
                                    </div>
                                    <div class="form-group">
                <input type="date" name="dateofbirth" id="dateofbirth" class="form-control" placeholder="D.O.B - yyyy/mm/dd" required="">
                                    </div>
                                     <div class="form-group">
            <input type="text" name="description" id="description" class="form-control" placeholder="description" value="">
                                     </div>
                                      <div class="form-group">
            <select  name="gender" class="form-control">
	<option value="M">Male</option>
	<option value="E">Female</option>
	<option value="O">Other</option>
	<option value="N">Dont want to declare</option>
	</select>
                                     </div>
                                    <div class="form-group">
            <input type="file" name="image" class="form-control">
                                     </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
<input type="submit" name="btn_upload" id="SignUp-submit" class="form-control btn btn-SignUp" value="SignUp Now">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
$(function() {

    $('#login-form-link').click(function(e) {
        $("#login-form").delay(100).fadeIn(100);
         $("#SignUp-form").fadeOut(100);
        $('#SignUp-form').css('display:none;');
        $('#login-form').css("display:block;");
	$('#login-form-link').css({'color': '#029f5b','font-size': '18px'});
	$('#SignUp-form-link').css({'color': '#666','font-size': '14px'});
        e.preventDefault();
    });
    $('#SignUp-form-link').click(function(e) {
        $("#SignUp-form").delay(100).fadeIn(100);
         $("#login-form").fadeOut(100);
        $('#login-form').css('display:none;');
        $('#SignUp-form').css({'display':'block'});
	$('#SignUp-form-link').css({'color': '#029f5b','font-size': '18px'});
	$('#login-form-link').css({'color': '#666','font-size': '14px'});
        e.preventDefault();
    });

});
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
function checkDOB() {
       var dateString = document.getElementById('dateofbirth').value;
       var myDate = new Date(dateString);
       var today = new Date();
       if ( myDate > today ) {
           $('#dateofbirth').after('<p>You cannot enter a date in the future!.</p>');
           return false;
       }
       return true;
   }

</script>
</body>
</html>


