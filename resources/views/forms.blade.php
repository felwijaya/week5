<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<form action="" method="POST" class="form-horizontal">
					{{csrf_field()}}
					<div class="form-group">
						<label for="nama"> Nama</label>
						<input type="text" class="form-control" name="nama" @if(isset($nama)) value="{{ $nama }}" @endif>
					</div>
			<div class="form-group">
				<label for="email"> Email </label> 
				<input type="email" class="form-control" name="email" @if(isset($email)) value="{{ $email }}" @endif>
			</div>
			<div class="form-group">
				<label for="gender"> Jenis Kelamin </label> 
				<div class="radio"> 
					<label>
						<input type="radio" name="gender" value="m" @if(isset($gender) && $gender == "m") checked @endif>
						Laki-laki
					</label>
				</div>
					<div class="radio"> 
						<label>
							<input type="radio" name="gender" value="f" @if(isset($gender) && $gender == "f") checked @endif>
							Perempuan
						</label>
					</div>
					<div class="radio"> 
						<label>
							<input type="radio" name="gender" value="o" @if(isset($gender) && $gender == "o") checked @endif>
							Other
						</label>
					</div>
				</div>
					<div class="form-group">
						<label for="gun"> Senjata Pilihan </label>
						<br>
						<small> Bisa pilih lebih dari satu </small> 
				<div class="checkbox"> 
					<label>
						<input type="checkbox" name="gun[]" value="Muramasa" @if(isset($gun) && in_array('Muramasa', $gun)) checked @endif>
						Muramasa
					</label>
					<br>
					<label>
						<input type="checkbox" name="gun[]" value="Masamune" @if(isset($gun) && in_array('Masamune', $gun)) checked @endif>
						Masamune
					</label>
					<br>
					<label>
						<input type="checkbox" name="gun[]" value="SangeYasha" @if(isset($gun) && in_array('SangeYasha', $gun)) checked @endif>
						SangeYasha
					</label>
					<br>
					<label>
						<input type="checkbox" name="gun[]" value="Gunn" @if(isset($gun) && in_array('Gunn', $gun)) checked @endif>
						Gunn
					</label>
					<br>
					<br>
					</div>
					<button type="submit" class="btn btn-warning">Submit</button>
			</form>
			<br>
			<br>
			@if(isset($nama))
			Halo, {{$nama}}
			@endif
			<br>
			@if(isset($email))
			Email kamu : {{$email}}
			@endif
			<br>
			@if(isset($gender))
			Kamu seorang 
				@if($gender == "m") Laki-laki 
				@elseif($gender == "f") Perempuan 
				@elseif ($gender == "o") Gaje
				@endif
			@endif
			<br>
			@if(isset($gun))
			Senjata Pilihan : <br>
			@foreach($gun as $value)
			-> {{ ucwords($value) }}
			<br>
			@endforeach
			@endif
			</div>
		</div>
	</div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>