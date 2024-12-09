 <!-- DataTales Example -->
 <div class="card-header py-3">
    <div class="m-0 font-weight-bold text-primary">Riwayat Transaksi</div>
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
                    <th>id_transaksi</th>
                    <th>Kelas</th>
                    <th>id_user</th>
                    <th>Date</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                
            </tfoot>
            <tbody>
                <?php
                include 'koneksi.php';

                $query = "SELECT m.id_transaksi,n.nama as kelas,m.id_user,m.Tanggal,m.Total,m.Status
                FROM transaksi as m INNER JOIN mata_kuliah as n
                ON m.id_kelas = n.id";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result)>0) {
                    while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td> <?php echo $row["id_transaksi"] ?> </td>
                    <td> <?php echo $row["kelas"] ?> </td>
                    <td> <?php echo $row["id_user"] ?> </td>
                    <td> <?php echo $row["Tanggal"] ?> </td>
                    <td> <?php echo $row["Total"] ?> </td>
                    <td> <?php echo $row["Status"] ?> </td>
                    <td>
                            <a href="hapusTransaksi.php?id_transaksi=<?php echo $row['id_transaksi'];?>".>Hapus</a>
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