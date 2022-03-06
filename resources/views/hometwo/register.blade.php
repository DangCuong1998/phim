<html>

<head>
  <title>Form Validation</title>
</head>
<link rel="stylesheet" href="hometwo/css/registertwo.css">
<link rel="stylesheet" href="hometwo/js/registertwo.js">
<body>
	<div class="main">
		<h1>Nightout Trip Registration</h1>
		<div class="form1">
		<!--	Registration Form<br>!-->
			<form name="simple" onsubmit="return empty();" method="POST" action="/phim/public/registertwo">
				<input type="text" id="req1" placeholder="Firstname" name="firstname"><br><br>		
				<!--<input type="text" id="req2" placeholder="Lastname"><br><br>-->
				<input type="text" id="req3" placeholder="Email address" name="email"><br><br>
				<!--<input type="text" id="req4" placeholder="Contact number" name="phone"><br><br>-->
				<input type="password" id="req5" placeholder="Password" name="password"><br>
								D.O.B<br><input type="date" name="bday"><br><br>
					  @csrf

				Gender:
				<select id="selection" name="gender">
					<option>Gender</option>
					<option>Male</option>
					<option>Female</option>
				</select>
				<br><br>
				<input type="submit" value="Submit" onclick="emailValidate(document.getElementById('req3'),'Invalid Email id.'),/*isNumeric(document.getElementById('req4'),'Enter digits in contact no.'),*/Selection(document.getElementById('selection'),'Please select gender')">


			</form>
		</div>	
	</div>


</body>
</html>
