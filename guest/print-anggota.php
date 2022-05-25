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
          
</body>
</html>