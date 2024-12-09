<?php
            include "koneksi.php";
            $nip = $_GET['nip'];
            $query = "SELECT * FROM tutor WHERE nip = '$nip'";
            $result = mysqli_query($connect, $query);
        ?>
 <div class="card-header py-3">
    <div class="m-0 font-weight-bold text-primary">Edit Data Tutor</div>
</div>
<div class="card-body">
<table>
		<form method="POST" action="ProsesEditTutor.php">
		<?php
                    while ($row = mysqli_fetch_array($result)) {
                ?>
				<tr>
					<!-- <td> id_tutor: </td> -->
					<td> <input type="text" name="id" value="<?php echo $row['nip'];?>" hidden></td>
				</tr>
			<tr>
				<td> Nama: </td>
				<td> <input type="text" name="nama" value="<?php echo $row['nama'];?>"></td>
			</tr>
			<tr>
				<td> Email: </td>
				<td> <input type="text" name="email" value="<?php echo $row['email'];?>"></td>
			</tr>
			<tr>
                <td> Telp </td>
				<td> <input type="text" name="telp" value="<?php echo $row['telp'];?>"></td>
                
			</tr>
       
			<tr>
            <td> status: </td>
				<td><input type="radio" name="status_pengajar" id="status_pengajar" value="Aktif" <?php echo  ($row['status_pengajar']=='Aktif')?'checked':'' ?>>Aktif
				 <input type="radio" name="status_pengajar" id="status_pengajar" value="Tidak Aktif" <?php echo ($row['status_pengajar']=='Tidak aktif')?'checked':'' ?>>Tidak </td>
			</tr>
			
				<td> <input type="submit" name="kirim" value="Kirim"> </td>
			</tr>
			<?php
                }
                ?>
		</form>
	</table>
    </div>