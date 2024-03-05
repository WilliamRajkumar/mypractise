<!DOCTYPE html> 
<html> 

<head> 
	<title>FriendsFinder signup</title> 
	<link rel="stylesheet"
		href="style.css"> 
</head> 

<body> 
	<div class="main"> 
		<h1>Friends Finder signup</h1> 
		<form action="{{ url('storeuser') }}" method="post"  enctype="multipart/form-data">
        @csrf 
			<label for="first">First Name:</label> 
			<input type="text" id="first"
				name="name"
				placeholder="Enter your Name" required> 
                

			
			<label for="email">Email:</label> 
			<input type="email" id="email"
				name="email"
				placeholder="Enter your email" required> 

			<label for="dob">Date of Birth:</label> 
			<input type="date"
				id="dob" name="dob"
				placeholder="Enter your DOB" required> 

			
                    <label for="repassword"> Password:</label> 
            <input type="password" id="repassword" 
                   name="password" 
                   placeholder="Re-Enter your password" required> 
            <span id="pass"></span> 
			

			<label for="designation">Designation</label> 
			<input type="text" id="mobile"
				name="designation"
				placeholder="Enter your Designation" required 
				maxlength="20"> 
                <label for="designation">country</label> 
			<input type="text" id="mobile"
				name="country"
				placeholder="" required 
				maxlength="10"> 

			<label for="gender">Gender:</label> 
			<select id="gender" name="gender" required> 
				<option value="1">Male</option> 
				<option value="2">Female</option> 
				<option value="3">Other</option> 
			</select> 


            <label for=" favourite_color">Favourite Color</label> 
			<input type="text" id="mobile"
				name="favourite_color"
				placeholder="Favourite Colour" required 
				maxlength="10"> 
                <label for=" favourite_color">Favourite Actor</label> 
			<input type="text" id="mobile"
				name="favourite_actor"
				placeholder="Favourite Actor" required 
				maxlength="10"> 

                <label for="first">Profile image:</label> 
                <input name="profile_image" id="img" class="form-control filestyle margin images" data-input="false" type="file"  />
           
			<div class="wrap"> 
				<button type="submit"> 
				Submit 
				</button> 
			</div> 
		</form> 
	</div> 
    <style>
        /* style.css */
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

#pass { 
	color: red; 
	font-size: 12px; 
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

select { 
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
	
</body> 

</html>
