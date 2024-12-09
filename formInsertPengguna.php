 <!-- DataTales Example -->
 <div class="card-header py-3">
    <div class="m-0 font-weight-bold text-primary">Inset Data Pengguna</div>
</div>
<div class="card-body">
<table>
		<form method="POST" action="insertProsesPengguna.php">
			<tr>
				<td> id_pengguna: </td>
				<td> <input type="text" name="nim"> </td>
			</tr>
			<tr>
				<td> Nama: </td>
				<td> <input type="text" name="nama"></td>
			</tr>
			<tr>
				<td> Email: </td>
				<td> <input type="text" name="email"></td>
			</tr>
			<tr>
                <td> Telp </td>
				<td> <input type="text" name="telp"></td>
                
			</tr>
            <td> Id_kelas: </td>
			<td> <select name="id_kelas" id="id_kelas">
			<?php
                include 'koneksi.php';

                $query = "SELECT * FROM  mata_kuliah";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result)>0) {
                    while ($row = mysqli_fetch_array($result)) {
                ?>
					<option value="<?php echo $row["id"] ?> "><?php echo $row["id"] . "-" . $row["nama"] ?></option> 
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
				<td><input type="radio" name="status" id="status" value="Aktif">Aktif
				 <input type="radio" name="status" id="status" value="Tidak Aktif">Tidak </td>
			</tr>
			
				<td> <input type="submit" name="kirim" value="Kirim"> </td>
			</tr>
		</form>
	</table>
    </div>