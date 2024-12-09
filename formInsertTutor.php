 <!-- DataTales Example -->
 <div class="card-header py-3">
    <div class="m-0 font-weight-bold text-primary">Inset Data Tutor</div>
</div>
<div class="card-body">
<table>
		<form method="POST" action="insertProsesTutor.php">
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
       
			<tr>
            <td> status: </td>
				<td><input type="radio" name="status_pengajar" id="status_pengajar" value="Aktif">Aktif
				 <input type="radio" name="status_pengajar" id="status_pengajar" value="Tidak Aktif">Tidak </td>
			</tr>
			
				<td> <input type="submit" name="kirim" value="Kirim"> </td>
			</tr>
		</form>
	</table>
    </div>