<html>
<body onLoad="window.print();">
   <?php
   include "../conn.php";
   ?>
   
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