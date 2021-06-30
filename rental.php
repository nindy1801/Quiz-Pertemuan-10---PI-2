<?php
include 'header.html';
include 'model.php';
$model = new Model();

?>

<html>
    <head>
    <title> Tabel rental</title>
    </head>

    <body>
    <body align="center">
	
	<div class="tabel">
		<h1>Data rental</h1>		
		<a class="btn btn-sm btn-success" href="create_rental.php">Tambah Data</a>
		<br><br>
		<table align="center" width="800px" border="1">
			<thead align="center">
				<tr>
					<th>ID Rental</th>
					<th>ID Mobil</th>
					<th>ID member</th>
					<th>Lama Rental</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$result = $model->tampil_rental();
				if ( !empty($result) ) {
					foreach ($result as $data): ?>
							<tr>
							<td><?=$data->rental_id?></td>
							<td><?=$data->mobil_id?></td>
							<td><?=$data->member_id ?></td>
                            <td><?=$data->lama_rental?> Hari</td>
							<td>
								<a name="edit" id="edit" class="btn btn-sm btn-warning" href="edit_rental.php?rental_id=<?=$data->rental_id ?>">Edit</a>
								<a name="hapus" id="hapus" class="btn btn-sm btn-danger" href="Proses.php?rental_id=<?=$data->rental_id ?>">Delete</a>
							</td>
						</tr>
					<?php endforeach;
				} else{ ?>
					<tr>
						<td colspan="8">Belum ada data pada tabel absen.</td>
					</tr>
				<?php }?>
			</tbody>
		</table>
	</div>
</body>
    </body>


	<?php
include 'footer.html';
?>

</html>