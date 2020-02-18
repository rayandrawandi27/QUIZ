<h2><?php echo $title; ?></h2>   

	<?php echo validation_errors(); ?>   
	<?php echo form_open('news/edit/'.$news_item['kode']); ?>     

<form action="">		
	<table>         
		<tr>             
			<td><label for="kode">Kode Barang</label></td>             
			<td><input type="input" name="kode" value="<?php echo $news_item['kode'] ?>" /></td>         
		</tr>         
		<tr>             
			<td><label for="nama">Nama Barang</label></td>             
			<td><input type="input" name="nama" value="<?php echo $news_item['nama'] ?>" /></td>         
		</tr>
		<tr>             
			<td><label for="jumlah">Jumlah Barang</label></td>             
			<td><input type="input" name="jumlah" value="<?php echo $news_item['jumlah'] ?>" /></td>         
		</tr> 
		<tr>             
			<td><label for="harga">Harga Barang</label></td>             
			<td><input type="input" name="harga" value="<?php echo $news_item['harga'] ?>" /></td>         
		</tr> 
		<tr>             
			<td><label for="total">Total Barang</label></td>             
			<td><input type="input" name="total" value="<?php echo $news_item['total'] ?>" /></td>         
		</tr> 
		<tr>             
			<td></td>             
			<td><input type="submit" name="submit" value="Edit news item" /></td>         
		</tr>     
	</table> 
</form> 
 