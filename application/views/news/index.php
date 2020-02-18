<h2><?php echo $title; ?></h2>   

<?php echo anchor(site_url('news/create'), "TAMBAH BARANG"); ?>
<table border='1' cellpadding='4'>     
	<tr>         
		<td><strong>Kode</strong></td>         
		<td><strong>Nama</strong></td>  
		<td><strong>Jumlah</strong></td>  
		<td><strong>Harga</strong></td>  
		<td><strong>Total</strong></td>
		<td><strong>Aksi</strong></td>
	</tr> 
	<?php foreach ($news as $news_item): ?> 
    <tr>             
		<td><?php echo $news_item['kode']; ?></td>             
		<td><?php echo $news_item['nama']; ?></td>
		<td><?php echo $news_item['jumlah']; ?></td>
		<td><?php echo $news_item['harga']; ?></td>
		<td><?php echo $news_item['total']; ?></td>
		<td><a href="<?php echo site_url('news/edit/'.$news_item['kode']); ?>">Edit</a> | <a href="<?php echo site_url('news/delete/'.$news_item['kode']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a> </td>
	</tr> 
	<?php 
		endforeach; 
		
		/*<td><a href="<?php echo site_url('news/view/'.$news_item['slug']); ?>">View</a> | <a href="<?php echo site_url('news/edit/'.$news_item['id']); ?>">Edit</a> | <a href="<?php echo site_url('news/delete/'.$news_item['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a> </td>        */
	?> 
</table>