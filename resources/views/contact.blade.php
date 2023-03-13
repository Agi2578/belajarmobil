<!DOCTYPE html>
<html>
<head>
	<title>Halaman Kontak</title>
	<style>
		@keyframes tari {
		  0% {transform: translateY(0);}
		  50% {transform: translateY(-20px);}
		  100% {transform: translateY(0);}
		}

		body {
			margin: 0;
			padding: 0;
			background-color: #eee;
			font-family: Arial, sans-serif;
		}

		.container {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			height: 100vh;
			animation: tari 2s ease-in-out infinite;
		}

		h1 {
			font-size: 4rem;
			margin-bottom: 2rem;
			color: #333;
		}

		form {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			background-color: #fff;
			padding: 2rem;
			border-radius: 10px;
			box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
		}

		label {
			font-size: 1.5rem;
			margin-bottom: 0.5rem;
			color: #333;
			text-align: center;
			width: 100%;
		}

		input[type="text"], textarea {
			padding: 1rem;
			font-size: 1.5rem;
			border-radius: 5px;
			border: 1px solid #ccc;
			margin-bottom: 1.5rem;
			width: 100%;
		}

		.btn {
			background-color: #333;
			color: #fff;
			font-size: 1.5rem;
			padding: 1rem 2rem;
			border-radius: 5px;
			border: none;
			cursor: pointer;
			transition: background-color 0.3s ease-in-out;
		}

		.btn:hover {
			background-color: #444;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Kontak Kami</h1>
		<form>
			<label for="name">Nama</label>
			<input type="text" id="name" name="name" placeholder="Masukkan nama Anda">

			<label for="email">Email</label>
			<input type="text" id="email" name="email" placeholder="Masukkan alamat email Anda">

			<label for="message">Pesan</label>
			<textarea id="message" name="message" rows="5" placeholder="Tulis pesan Anda"></textarea>
			
			<label for="location">Lokasi Latihan</label>
			<input type="text" id="location" name="location" placeholder="Jalan Tebet Raya No 27.Jakarta Selatan">
			
			<button type="submit" class="btn">Kirim</button>
		</form>
	</div>
</body>
</html>
