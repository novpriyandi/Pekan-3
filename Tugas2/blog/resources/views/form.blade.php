<!DOCTYPE html>

<!DOCTYPE html>
<html>
	<head>
		<title>Buat Account Baru</title>
		<meta charset="utf-8">
	</head>
	
	<body>
		<div>
			<h1> Buat Account Baru </h1>
			<h2> Sign Up Form</h2>
		</div>

		<!-- membuat form-->
		<div>
			<form>
				<label for="Fist_Name">Fist Name</label>
				<div><br><input type="text" placeholder="User Name" id="Fist_Name"></div>
				<br><br>
				<label for="Last_Name">Last_Name</label>
				<div><br><input type="text" placeholder="User Name" id="Last_Name"></div>
				<br>
			<!-- membuat hanya bisa dipiih salah satu-->
				<label>Gender :</label><br>
				<input type="radio" name="Gender"> Male <br>
				<input type="radio" name="Gender"> Female <br>
				<br>
			<!-- membuat selec option, pilihan ke bawah-->
				<label>Nationality</label><br>
				<select>
					<option value="0">Indonesia</option>
					<option value="1">Germany</option>
					<option value="2">Malaysia</option>
					<option value="3">USA</option>
				</select>
				<br><br>
			<!-- membuat bisa dipiih lebih satu-->
				<label> Language Spoken :</label><br>
				<input type="checkbox" name="Language_Spoken" value="0"> Bahasa Indonesia <br>
				<input type="checkbox" name="Language_Spoken" value="1"> English <br>
				<input type="checkbox" name="Language_Spoken" value="2"> Other <br>
				<br>
				<label for="Bio">Bio</label>
				<div><br><textarea cols="80" rows="8" id="Bio"></textarea></div>
				<br>
			</form>

			<form action="finish.blade.php" method="post">
				<button type="submit">Sign Up</button>
			</form>
		</div>


	</body>
</html>