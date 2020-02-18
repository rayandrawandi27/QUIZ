<html>
	<head>
		<title>Add Data</title>
	</head>
	<style>
		header {
			background-color: #666;
			padding: 30px;
			text-align: center;
			font-size: 35px;
			color: white;
		}
		
		header h4 {
			margin: 0;
			padding: 0;
		}
		
		body {
			background-color: #333;
			padding-left: 50px;
			padding-right: 50px;
			padding-top: 50px;
			padding-down: 50px;
		}
 		
		input[type=number], input[type=text], select {
			width: 170px;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}

		input[type=submit] {
			width: 100%;
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		input[type=submit]:hover {
			background-color: #45a049;
		}

		div {
			border-radius: 5px;
			background-color: #f2f2f2;
			padding: 20px;
		}
		
		td {
			color : white;
		}
		
		.bck {
			background-color: blue;
		}
		
		footer {
			background-color: #777;
			padding: 10px;
			text-align: center;
			color: white;
		}
	</style>
	<body class="container">
		<header>
			<h4>Hitung Luas Persegi Panjang</h4>
		</header>
		<nav>
			<form action="http://localhost/CI32020/index.php/Welcome/hitung_luas" method="post" name="form1">
				<table width="25%" border="0">
					<tr>
						<td>Panjang</td>
						<td><input type="number" name="panjang" placeholder="Masukan Panjang"></td>
					</tr>
					<tr>
						<td>Lebar</td>
						<td><input type="number" name="lebar" placeholder="Masukan Lebar"></td>
					</tr>
					<tr>
					<td></td>
					<td><input type="submit" name="Submit" value="Hitung"></td>
					</tr>
					<tr>
						<td>Hasil</td>
						<td><input type="text" name="hasil" value="<?php echo isset($luaspp)? $luaspp : 0; ?>" readonly></td>
					</tr>
				</table>
			</form>
		</nav>
		<footer>
			<p>@RWM</p>
		</footer>
	</body>
</html> 
 
 