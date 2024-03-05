<!DOCTYPE html>
<html>

<head>
	<title>FriendsFinder</title>
	<link rel="stylesheet"
		href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
@if(session('success'))
            <div id="success-message" class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div id="error-message" class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif
<body>
	<div class="main">
		<h1>Friends Finder</h1>
		<h3>Enter your login credentials</h3>
		<form action="{{ url('auth') }}" method="post">
            @csrf
			<label for="first">
				Username:
			</label>
			<input type="text"
				id="first"
				name="email"
				placeholder="Enter your Email" required>

			<label for="password">
				Password:
			</label>
			<input type="password"
				id="password"
				name="password"
				placeholder="Enter your Password" required>

			<div class="wrap">
				<button type="submit"
						>
					Submit
				</button>
			</div>
		</form>
		<p> Not registered? 
			<a href="{{ url('newReg') }}"
			style="text-decoration: none;">
				Create an account
			</a>
		</p>
	</div>
</body>






<style>
    /*style.css*/
body {
	display: flex;
	align-items: center;
	justify-content: center;
	font-family: sans-serif;
	line-height: 1.5;
	min-height: 100vh;
	background: #f3f3f3;
	flex-direction: column;
	margin: 0;
}

.main {
	background-color: #fff;
	border-radius: 15px;
	box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
	padding: 10px 20px;
	transition: transform 0.2s;
	width: 500px;
	text-align: center;
}

h1 {
	color: #4CAF50;
}

label {
	display: block;
	width: 100%;
	margin-top: 10px;
	margin-bottom: 5px;
	text-align: left;
	color: #555;
	font-weight: bold;
}


input {
	display: block;
	width: 100%;
	margin-bottom: 15px;
	padding: 10px;
	box-sizing: border-box;
	border: 1px solid #ddd;
	border-radius: 5px;
}

button {
	padding: 15px;
	border-radius: 10px;
	margin-top: 15px;
	margin-bottom: 15px;
	border: none;
	color: white;
	cursor: pointer;
	background-color: #4CAF50;
	width: 100%;
	font-size: 16px;
}

.wrap {
	display: flex;
	justify-content: center;
	align-items: center;
}

    </style>
</html>
