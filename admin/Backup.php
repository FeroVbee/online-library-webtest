<html>
<body onLoad="window.print();">

   <?php
   include "../conn.php";
   ?>
   <style type="text/css">
body {
	font-size:12px;
	font-family:Arial, Helvetica, sans-serif;
}
.style1{
	font-size:12px;
	font-family:Arial, Helvetica, sans-serif;
}
</style>
<p align="center">LAPORAN DATA ANGGOTA PERPUSTAKAAN ONLINE E-LIB4SHARED</p>
   	      <table width="100%" cellspacing="0" cellpadding="2" border="1px" class="style1">
   	      
   	          <tr>
   	            <th width="5%" align="center" class="style1" bgcolor="#CCCCCC">No</th>
   	            <th width="13%" align="center" class="style1" bgcolor="#CCCCCC">No Induk	</th>
   	            <th width="26%" align="center" class="style1" bgcolor="#CCCCCC">Nama Lengkap</th>
                <th width="14%" align="center" class="style1" bgcolor="#CCCCCC">Alamat</th>
                <th width="11%" align="center" class="style1" bgcolor="#CCCCCC">Tempat Tanggal Lahir</th>
                <th width="9%" align="center" class="style1" bgcolor="#CCCCCC">Jenis Kelamin</th>
                <th width="14%" align="center" class="style1" bgcolor="#CCCCCC">Kelas</th>
              </tr>
          
            <?php
				$query = "SELECT * FROM data_anggota ORDER by id";
				$sql = mysql_query($query);
				$total = mysql_num_rows($sql);
				$no = 1;
				
				while ($data=mysql_fetch_array($sql)) {
			?>
   	        <tbody>
   	          <tr>
   	            <td align="center"><?php echo $no; ?></td>
   	            <td ><?php echo $data['no_induk']; ?></td>
   	            <td ><?php echo $data['nama']; ?></td>
                <td align="center"><?php echo $data['alamat']; ?></td>
                <td align="center"><?php echo $data['ttl']; ?></td>
                <td align="center"><?php echo $data['jk']; ?></td>                
                <td align="center"><?php echo $data['kelas']; ?></td>
                
              </tr>
              
            <?php $no++; } ?>
            
            </tbody>
          </table>
		  
<p align="center">LAPORAN DATA BUKU PERPUSTAKAAN ONLINE E-LIB4SHARED</p>
   			<table width="100%" align="center" cellspacing="0" cellpadding="2" border="1px" class="style1">
   	    
   	          <tr>
   	            <td width="4%" height="34" align="center" bgcolor="#CCCCCC">No</td>
   	            <td width="20%" bgcolor="#CCCCCC" align="center">Judul Buku</td>
   	            <td width="12%" bgcolor="#CCCCCC" align="center">Pengarang</td>
   	            <td width="12%" bgcolor="#CCCCCC" align="center">Penerbit</td>
                <td width="7%" bgcolor="#CCCCCC" align="center">Tahun Terbit</td>
                <td width="8%" bgcolor="#CCCCCC" align="center">Kode ISBN</td>
				<td width="7%" bgcolor="#CCCCCC" align="center">Kategori</td>
                <td width="5%" bgcolor="#CCCCCC" align="center">Jumlah Buku</td>
                <td width="10%" bgcolor="#CCCCCC" align="center">Asal</td>
   	            <td width="7%" bgcolor="#CCCCCC" align="center">Lokasi</td>
                <td width="8%" bgcolor="#CCCCCC" align="center">Tanggal Input</td>
              </tr>
            <?php
				$query = "SELECT * FROM data_buku ORDER by tgl_input";
				$sql = mysql_query($query);
				$total = mysql_num_rows($sql);
				$no = 1;
				
				while ($data=mysql_fetch_array($sql)) {
			?>
   	        <tbody>
   	          <tr>
   	            <td height="27" align="center"><?php echo $no; ?></td>
   	            <td align="center"><?php echo $data['judul']; ?></a>
   	            <td align="center"><?php echo $data['pengarang']; ?></td>
   	            <td align="center"><?php echo $data['penerbit']; ?></td>
                <td align="center"><?php echo $data['th_terbit']; ?></td>
                <td align="center"><?php echo $data['isbn']; ?></td>
				<td align="center"><?php echo $data['kategori']; ?></td>
                <td align="center"><?php echo $data['jumlah_buku']; ?></td>
				<td align="center"><?php echo $data['asal']; ?></td>
               	<td align="center"><?php echo $data['lokasi']; ?></td>
               	<td align="center"><?php echo $data['tgl_input']; ?></td>
                
              </tr>
            <?php $no++; } ?>
            
            </tbody>
          </table>		

<p align="center">LAPORAN DATA TRANSAKSI PERPUSTAKAAN ONLINE E-LIB4SHARED</p>
   	      <table width="100%" align="center" cellspacing="0" cellpadding="2" border="1px" class="style1">
   	       
   	          <tr>
   	            <th width="5%" align="center" class="style1" bgcolor="#CCCCCC">No</th>
   	            <th width="30%" align="center" class="style1" bgcolor="#CCCCCC">Judul Buku</th>
   	            <th width="19%" align="center" class="style1" bgcolor="#CCCCCC">Peminjam</th>
   	            <th width="18%" align="center" class="style1" bgcolor="#CCCCCC">Tgl Pinjam</th>
   	            <th width="18%" align="center" class="style1" bgcolor="#CCCCCC">Tgl Kembali</th>
                <th width="10%" align="center" class="style1" bgcolor="#CCCCCC">Status</th>
              </tr>

            <?php
				$query = "SELECT * FROM trans_pinjam ORDER by status";
				$sql = mysql_query($query);
				$no = 1;
				while ($data=mysql_fetch_array($sql)) {
			?>
   	        <tbody>
   	          <tr>
   	            <td align="center"><?php echo $no; ?></td>
   	            <td><?php echo $data['judul_buku']; ?></td>
   	            <td><?php echo $data['nama_peminjam']; ?></td>
   	            <td align="center"><?php echo $data['tgl_pinjam']; ?></td>
   	            <td align="center"><?php echo $data['tgl_kembali']; ?></td>  
   	            <td align="center"><?php echo $data['Status']; ?></td>      
              </tr>    
            <?php $no++; } ?>
           
            </tbody>
          </table>		  
          
</body>
</html>