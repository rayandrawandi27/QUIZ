<html>
    <head>
        <title>Smileys</title>
        <?php echo smiley_js(); ?>
		<style>
		body {
			background-color: lightgrey;
			padding-left: 50px;
			padding-right: 50px;
			padding-top: 50px;
			padding-down: 50px;
		}
		
		p, h2{
			color : white;
		}
		
		h1{
			color : black;
		}
		
		.emoji td {
			height : 100px;
			width : 100px;
		}
	</style>
    </head>
    <body>
        <center>
		<h1>EMOTICON</h1>
			<form action="" method="POST" name="form1">
				<textarea name="komentar" id="komentar" cols="40" rows="4"></textarea><br><br>
				<input type="submit" value="Komen gan">
			</form>
			
			<p>Klik Untuk Menambahkan Kode Emot!</p>
			
			<div class="emoji">
				<?php echo $smiley_table; ?>
			</div>
			
			<div class="kom">
				<marquee scrollamount="30" behavior="alternate" bgcolor="black"><b><h2><?= $komentar ?></b></h2></marquee>
			</div>
		</center>
	</body>
</html>