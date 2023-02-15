<html>
	<head>
	 <title>Tabel tampil</title>
	 <center>
	 <h1>From peminjaman</h1>
	</head>
	<body>
	
	    <table border="1">
	      <tr>
	      <td>No.</td>
	      <td>Nama</td>
	      <td>Alamat</td>
	      <td>genre</td>
	      <td>judul</td>
	      <td>tahun</td>
	      <td>tnggl sewa</td>
	      <td>tnggl kembali</td>
	      <td>harga</td>
	  </tr>
	  
	  <?php
	  include 'koneksi.php';
	
	    $query = mysqli_query($koneksi, "SELECT * FROM tb_penyewa INNER JOIN tb_dvd ON tb_penyewa.id_dvd =
	    tb_dvd.id_dvd");
	
	    $no = 1;
	    foreach ($query as $row) :
	        ?>
	
	        <tr>
	            <td><?= $no++; ?></td>
	            <td><?= $row['nama_penyewa']; ?></td>
	            <td><?= $row['alamat']; ?></td>
	            <td><?= $row['genre_film']; ?></td>
	            <td><?= $row['judul_film']; ?></td>
	            <td><?= $row['tahun_film']; ?></td>
	            <td><?= $row['tanggal_sewa']; ?></td>
	            <td><?= $row['tanggal_kembali']; ?></td>
	            <td><?= $row['harga']; ?></td>
	
	        <td><a href="edit.php?id_penyewa=<?= $row['id_penyewa']; ?>">Edit</a> ||
	        <a href="hapus.php?id_penyewa=<?= $row['id_penyewa']; ?>">Hapus</a>
	  </tr>
	    <?php endforeach; ?>
	 <a href="tambah.php"><input type="button" value="Tambah"/></a>
	    </center>
	    </table>
	    </body>
	    </html>