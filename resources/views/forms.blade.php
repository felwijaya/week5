<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>
</head>
<body>
	<form>
		Nama <input type="text" name="nama">
		Email <input type="email" name="email">
		<button type="submit">Submit</button>
	</form>
	@if(isset($nama))
	Halo, {{$nama}}
	@endif
	<br>
	@if(isset($email))
	feliciawijaya25@gmail.com {{$email}}
	@endif
</body>
</html>