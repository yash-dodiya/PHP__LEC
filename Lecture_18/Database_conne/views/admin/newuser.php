
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new user</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Raleway');

body {
	background: #d2d6de;
	width: 100vw;
	height: 100vh;
	font-family: 'Raleway', sans-serif;
}

.info-text {
	font-size: 1rem;
}

.wrapper {
	width: 100%;
	height: 100%;
	display: flex;
	align-items: center;
	justify-content: center;
}

.login-box {
		background: #fff;
		width: 300px;
		height: 400px;
		box-shadow: 5px 5px 5px 1px rgba(0,0,0,0.1);
		text-align: center;
		padding: 20px;
}

.form-container {
	display: flex;
	flex-direction: column;
}

.form-container .input-addon {
	margin-top: .5rem;
}

.form-element {
	margin-top: 1.8rem;
	height: 1.5rem;
	border: 1px solid #d2d6de;
	padding: 5px;
	font-size: .9rem;
}

.form-element:focus {
	outline: 1px solid #673ab7;
}

.form-element::placeholder {
	font-family: 'Raleway', sans-serif;
	font-size: .8rem;
}

.form-element.is-submit {
	height: 3rem;
	font-size: 1rem;
	line-height: normal;
	font-family: 'Raleway', sans-serif;
	background: #673ab7;
	color: #fff;
}

.input-addon {
	display: flex;
}

.input-addon > .form-element {
	margin-top: 0;
}

.input-field {
	flex: 1;
}

.input-addon-item {
	padding: 8px;
	width: 40px;
	border: 1px solid #d2d6de;
	border-left: 0;
	background: #fff;
	color: #6a6b6d;
    display:flex;
}





    </style>
</head>
<body>
    
</body>
</html>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add New User</h1>
        <a href="allusers" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-left fa-sm text-white-50"></i> back</a>
    </div>
    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Body -->
                <div class="card-body"> 

                <div class="wrapper">
	<div class="login-box">
		<h3 class="info-text">User Registration</h3>
		<form  method="post" class="form-container">
			<div class="input-addon">
				<input class="form-element input-field" require="" placeholder="username" name="username" type="text">
				<button class="input-addon-item">
					<span class="fa fa-user"></span>
				</button>
				
			</div>
			<div class="input-addon">
				<input class="form-element input-field" require="" placeholder="email" name="email" type="email">
				<button class="input-addon-item">
					<span class="fa fa-envelope"></span>
				</button>
			</div>
			<div class="input-addon">
				<input class="form-element input-field" require="" placeholder="password_" name="password_" type="password">
				<button class="input-addon-item">
					<span class="fa fa-lock"></span>
				</button>
			</div>
			<div class="input-addon">
                <div class="redio">
                <p style = "padding-right: 20px;">gender</p>
                <div class="a">
                    <input type="radio" id="male" require="" name="gender" value="male">
                    <label for="male">Male</label>
                
                    <input type="radio" id="css" require="" name="gender" value="female">
                    <label for="female">Female</label>
                    </a>
                </div>
            </div>
            </div>
			<div class="input-addon">
            <p>hobby</p>
                <div class="a">
                    <input type="checkbox" id="" require="" name="hobby[]";  value="reading">
                    <label for="">reading</label>
                </div>
                <div class="a">
                    <input type="checkbox" id="" require="" name="hobby[]";  value="writting">
                    <label for="">writting</label>
                </div>
                <div class="a">
                    <input type="checkbox" id="" require="" name="hobby[]"; value="learning">
                    <label for="">learning</label>
                </div>
            </div>

			<input type="submit" class="form-element is-submit" name="log" ></input>
		</form>
		<p>Or if you already have an user <a href="http://localhost/PHP___LEC/Lecture_18/login">login here.</a></p>
	</div>
</div>



            </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->