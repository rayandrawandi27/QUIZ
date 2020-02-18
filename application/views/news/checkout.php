<h2><?php echo $title; ?></h2>   

	<?php echo validation_errors(); ?>   
	<?php echo form_open('news/create'); ?>     

<form action="">		
	<table>         
		<tr>             
			<td><label for="kode">Kode Barang</label></td>             
			<td><input type="input" name="kode" value="<?= $this->input->post('kode'); ?>"></td>         
		</tr>         
		<tr>             
			<td><label for="nama">Nama Barang</label></td>             
			<td><input type="input" name="nama" value="<?= $this->input->post('nama'); ?>"></td>         
		</tr>
		<tr>             
			<td><label for="jumlah">Jumlah Barang</label></td>             
			<td><input type="input" name="jumlah" value="<?= $this->input->post('jumlah'); ?>"></td>         
		</tr> 
		<tr>             
			<td><label for="harga">Harga Barang</label></td>             
			<td><input type="input" name="harga" value="<?= $this->input->post('harga'); ?>"></td>         
		</tr> 
		<tr>             
			<td><label for="total">Total Barang</label></td>             
			<td><input type="input" name="total" value="<?= $total; ?>"></td>         
		</tr> 
		<tr>             
			<td></td>             
			<td><input type="submit" name="submit" value="Checkout" /></td>         
		</tr>     
	</table> 
</form> 
 