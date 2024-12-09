 <!-- DataTales Example -->
 <div class="card-header py-3">
    <div class="m-0 font-weight-bold text-primary">Data Kelas</div>
    <div class="float-right">
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
                    <th>id_kelas</th>
                    <th>Nama</th>
                    <th>id_tutor</th>
                    <th>jumlah Pengguna</th>
                    <th>status</th>
                </tr>
            </thead>
            <tfoot>
                
            </tfoot>
            <tbody>
                <?php
                include 'koneksi.php';

                $query = "SELECT m.id,m.nama,m.nip,m.status_kelas, 
                COUNT(n.id_kelas) as jumlah_pengguna FROM mahasiswa as n
                RIGHT JOIN mata_kuliah as m ON n.id_kelas= m.id 
                GROUP BY m.id ";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result)>0) {
                    while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td> <?php echo $row["id"] ?> </td>
                    <td> <?php echo $row["nama"] ?> </td>
                    <td> <?php echo $row["nip"] ?> </td>
                    <td> <?php echo $row["jumlah_pengguna"] ?> </td>
                    <td> <?php echo $row["status_kelas"] ?> </td>
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