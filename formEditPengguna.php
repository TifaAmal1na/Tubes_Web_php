<?php
            include "koneksi.php";
            $nim = $_GET['nim'];
            $query = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
            $result = mysqli_query($connect, $query);
        ?>
 <div class="card-header py-3">
    <div class="m-0 font-weight-bold text-primary">Edit Data Pengguna</div>
</div>
<div class="card-body">
<table>
		<form method="POST" action="ProsesEditPengguna.php">
		<?php
                    while ($row = mysqli_fetch_array($result)) {
                ?>
				<tr>
					<td> nim: </td> 
					<td> <input type="text" name="nim" value="<?php echo $row['nim'];?>"></td>
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
			<td> Id_kelas: </td>
			<td> <select name="id_kelas" id="id_kelas">
				<option values="<?php echo $row["id_kelas"] ?> "><?php echo $row["id_kelas"]?></option>
			<?php
                include 'koneksi.php';

                $query = "SELECT * FROM  mata_kuliah";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result)>0) {
                    while ($row1 = mysqli_fetch_array($result)) {
                ?>
					<option value="<?php echo $row1["id"] ?> "><?php echo $row1["id"] . "-" . $row1["nama"] ?></option> 
				<?php
                        }
                    }
                    else{
                        echo "0 result";
                    }			 
                ?>
				</td>
			</tr>
       
			<tr>
            <td> status: </td>
				<td><input type="radio" name="status" id="status" value="Aktif" <?php echo  ($row['status']=='Aktif')?'checked':'' ?>>Aktif
				 <input type="radio" name="status" id="status" value="Tidak Aktif" <?php echo ($row['status']=='Tidak Aktif')?'checked':'' ?>>Tidak</td>
			</tr>
			
				<td> <input type="submit" name="kirim" value="Kirim"> </td>
			</tr>
			<?php
                }
                ?>
		</form>
	</table>
    </div>