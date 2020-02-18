<h2><?php echo $title; ?></h2>  
 
	<?php echo validation_errors(); ?>   
	<?php echo form_open('news/checkout'); ?>         
	
<form action="news/checkout">
	<table>         
		<tr>             
			<td><label for="title">Kode Barang</label></td>             
			<td><input type="input" name="kode"></td>         
		</tr>         
		<tr>             
			<td><label for="text">Nama Barang</label></td>             
			<td><input type="input" name="nama"></textarea></td>         
		</tr>
		<tr>             
			<td><label for="text">Jumlah Pesanan</label></td>             
			<td><input type="input" name="jumlah"></textarea></td>         
		</tr>
		<tr>             
			<td><label for="text">Harga</label></td>             
			<td><input type="input" name="harga"></textarea></td>         
		</tr>
		<tr>             
			<td></td>             
			<td><input type="submit" name="submit" value="Kirim" ></td>         
		</tr>     
	</table>     
</form> 
 