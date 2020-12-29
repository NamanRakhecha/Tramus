

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">.login-form{
	position: fixed;
	width: 300px;
	height: 300px;
	left: 50%;
	top: 50%;
	background: #fff;
	transform: translateX(-50%) translateY(-50%);
	border-radius: 5px;
	padding: 20px;
	box-sizing: border-box;
	overflow: hidden;
}
.front-face{
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	background: #3b5998;
	z-index: 12;
	transition: width 0.2s ease-in-out;
}
.login-form:hover .front-face, .login-form.focused > .front-face{
	width: 30px;
}
.login-form:hover .front-face>.text, .login-form.focused > .front-face > .text{
	font-size: 1rem;
	transform: rotate(-90deg);
}
.login-form.loading > .front-face{
	width: 100%;
}
.login-form.loading > .front-face > .text{
	display: none;
}

.front-face>.text{
	font-size: 5rem;
	font-family: sans-serif,Arial;
	color: #fff;
	text-align: center;
	display: block;
	line-height: 300px;
	transition: all 0.2s ease-in-out;
}
.login-form>form{
	width: 200px;
	margin: 0 auto;
}
.login-form>form>.input{
	width: 100%;
	height: 50px;
	outline: none;
	border: 0px;
	font-size: 20px;
	font-family: sans-serif,Arial;
	border-bottom: 2px solid #3b5998;
	color: #3b5998;
}
.input-btn{
	width: 70px;
	height: 70px;
	background: #3b5998;
	position: absolute;
	bottom: 15px;
	right: 15px;
	z-index: 1;
	outline: none;
	border: 5px solid transparent;
	border-radius: 50%;
	cursor: pointer;
	transition: all 0.2s ease-in-out;
}
.input-btn:after{
	content: "";
	position: absolute;
	width: 0;
	height: 0;
	border-left: 30px solid transparent;
	border-right: 30px solid #fff;
	border-bottom: 30px solid transparent;
	left: -15px;
    transform: rotate(45deg);
    top: 5px;
    transition: all 0.2s ease-in-out;
}
.input-btn:hover,.input-btn:focus,.input-btn:active{
	border: 5px solid #3b5998;
	background: #fff;
}
.input-btn:hover:after,.input-btn:focus:after,.input-btn:active:after{
	border-right: 30px solid #3b5998;
}
#reset-login{
	 bottom: 15px;
    right: 60%;
}

</style>
<body>
	  <!-- Logo --><center>
                            <div >
                                <a href='index.php' >
                                    <img  src='img/logo.png' alt='Tramus Logo'>
                                   
                                </a>
                            </div>
                            <!-- End Logo --></center>


	<div id=hidden-login><div class="login-form">
	<div class="front-face">
		<span class="text">LOGIN</span>
	</div>
	<form id="formform" action="getSymbol.php"  method="POST">	
		<input type="text" placeholder="Username" name="userN" class="input" required/>
		<input type="password" placeholder="Password" name="passW" class="input" required/>
		
		<input type="button" onclick="submit()" value=login class="input-btn"/>
		<input type="reset" id="reset-login" value=reset class="input-btn"/>
		
	</form>

</div></div>

</body>
</html>