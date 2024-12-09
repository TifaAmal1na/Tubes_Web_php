 <!-- DataTales Example -->
 <div class="card-header py-3">
    <div class="m-0 font-weight-bold text-primary">Inset Data Admin</div>
</div>
<div class="card-body">
<table>
		<form method="POST" action="insertProsesAdmin.php">
			<tr>
				<td> username: </td>
				<td> <input type="text" name="username"></td>
			</tr>
			<tr>
				<td> password: </td>
				<td> <input type="password" name="password"></td>
			</tr>
			<?php
                include 'koneksi.php';

                $query = "SELECT * FROM  user";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result)>0) {
                    while ($row = mysqli_fetch_array($result)) {
                ?>
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
           
			</tr>
			
				<td> <input type="submit" name="kirim" value="Kirim"> </td>
			</tr>
		</form>
	</table>
    </div>