 <!-- DataTales Example -->
 <div class="card-header py-3">
    <div class="m-0 font-weight-bold text-primary">Data Pengguna</div>
    <div class="float-right">
    <a href="home.php?page=formInsertPengguna" class=" btn btn-sm btn-primary shadow-sm">
        <!-- <i class="fas fa-download fa-sm text-white-50"></i>  -->
        ADD</a>
    <!-- <a href="tables.php?page=formInsertPengguna" class=" btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i>  -->
        <!-- ADD</a> -->
    </div>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>id_user</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telp</th>
                    <th>id_kelas</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                
            </tfoot>
            <tbody>
                <?php
                include 'koneksi.php';

                $query = "SELECT * FROM  mahasiswa ";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result)>0) {
                    while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td> <?php echo $row["nim"] ?> </td>
                    <td> <?php echo $row["nama"] ?> </td>
                    <td> <?php echo $row["email"] ?> </td>
                    <td> <?php echo $row["telp"] ?> </td>
                    <td> <?php echo $row["id_kelas"] ?> </td>
                    <td> <?php echo $row["status"] ?> </td>
                    <td>
                    <a href="home.php?page=formEditPengguna&nim=<?php echo $row['nim']; ?>"> Edit </a>
                            <a href="hapusPengguna.php?nim=<?php echo $row['nim'];?>".>Hapus</a>
                        </td>
                            </tr>
                    <?php
                        }
                    }
                    else{
                        echo "0 result";
                    }			 
                ?>
                </tr>
            </tbody>
        </table>
    </div>
</div>