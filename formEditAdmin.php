<?php
            include "koneksi.php";
            $id = $_GET['id'];
            $query = "SELECT * FROM user WHERE id = '$id'";
            $result = mysqli_query($connect, $query);
        ?>
 <div class="card-header py-3">
    <div class="m-0 font-weight-bold text-primary">Edit Data Admin</div>
</div>
<div class="card-body">
<table>
		<form method="POST" action="ProsesEditAdmin.php">
        <?php
                    while ($row = mysqli_fetch_array($result)) {
                ?>
				<tr>
			<tr>
				<td> <input type="text" name="id" value="<?php echo $row['id'];?>" hidden></td>
			</tr>
            <tr>
				<td> username: </td>
				<td> <input type="text" name="username" value="<?php echo $row['username'];?>"></td>
			</tr>
			<tr>
			<tr>
				<td> password: </td>
				<td> <input type="password" name="password" value="<?php echo $row['username'];?>"></td>
			</tr>
				</td>
			</tr>
			<tr>
           
			</tr>
			
				<td> <input type="submit" name="kirim" value="Kirim"> </td>
			</tr>
            <?php
                }
                ?>
		</form>
	</table>
    </div>