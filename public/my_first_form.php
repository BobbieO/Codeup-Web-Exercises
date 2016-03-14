<?php
	var_dump($_GET);
	var_dump($_POST);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Playing Around with Forms</title>
	</head>
	<body>	
		<div id="wrapper">
		<a id="top"></a>
			
			<h2>User Login</h2>
			<form method="POST" action="/my_first_form.php">
				<p>
					<label for="username">Username</label>
					<input id="username" name="username" type="text" placeholder="Username">
				</p>
				<p>
					<label for="password">Password</label>
					<input id="password" name="password" type="password" placeholder="Password">
				</p>
				<p>
					<button type="submit">Login</button>
				</p>
			</form>

			<h2>Compose an Email</h2>
			<form method="POST" action="/my_first_form.php">
			<p>
				<label for="to">To</label>
				<input id="to" name="to" type="email" placeholder="To">
			</p>
			<p>
				<label for="from">From</label>
				<input id="from" name="from" type="email" placeholder="From">
			</p>
			<p>
				<label for="subject">Subject</label>
				<input id="subject" name="subject" type="text" placeholder="Subject">
			</p>
			<p>
				<label for="body">Email Content</label>
				<input id="body" name="body" type="textarea" placeholder="Type Here!">
			</p>
			<p>
				<input type="checkbox" id="savemail" name="savemail" value="yes" checked>
				<label for="savemail">Save My Email!</label>
			</p>
			<p>
				<button type="submit">Send Email</button>
			</p>
			</form>

			<h2>Multiple Choice Test</h2>
			<form method="POST" action="/my_first_form.php">
			<form>
			<p>What is your favorite color?</p>
			<label>
				<input type="radio" name="color" value="red">
				Red
			</label>
			<label>
				<input type="radio" name="color" value="purple">
				Purple
			</label>
			<label>
				<input type="radio" name="color" value="black">
				Black
			</label>
			
			<p>What is your favorite pet?</p>
			<label>
				<input type="radio" name="pet" value="dog">
				Dog
			</label>
			<label>
				<input type="radio" name="pet" value="cat">
				Cat
			</label>
			<label>
				<input type="radio" name="pet" value="hedgehog">
				Hedgehog
			</label>

			<p>What MMOs have you played?</p>
			<label><input type="checkbox" id="mmo1" name="mmo[]" value="WoW">WoW</label>
			<label><input type="checkbox" id="mmo2" name="mmo[]" value="SWtOR">SWtOR</label>
			<label><input type="checkbox" id="mmo3" name="mmo[]" value="Secret">Secret World</label>
			<label><input type="checkbox" id="mmo4" name="mmo[]" value="Terra">Terra</label>

			<p>
				<label for="vacation">Where would you like to go on vacation?</label>
				<select id="vacation" name="vacation[]" multiple>
					<option value="iceland">Iceland</option>
					<option value="spain">Spain</option>
					<option value="peru">Peru</option>
					<option value="japan">Japan</option>
				</select>
			</p>

			<p>
			<button type="submit">Finish Test</button>
			</p>
			</form>

			<h2>Select Testing</h2>
			<form method="POST" action="/my_first_form.php">
			<form>
				<label for="breakfast">Do you eat breakfast every morning?</label>
				<select id="breakfast" name="breakfast">
					<option selected value="1">Yes</option>
					<option value="0">No</option>
				</select>
				<p>
				<button type="submit">Submit Answer</button>
				</p>
			</form>
			
			<a href="#top">Go to the top of the page</a>
		</div>
	</body>
</html>