 <!-- DataTales Example -->
<div class="card-header py-3">
    <div class="m-0 font-weight-bold text-primary">Data Tutor</div>
    <div class="float-right">
    <a href="home.php?page=formInsertTutor" class=" btn btn-sm btn-primary shadow-sm">
        <!-- <i class="fas fa-download fa-sm text-white-50"></i>  -->
        ADD</a>
    </div>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>id_tutor</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telp</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                
            </tfoot>
            <tbody>
                <?php
                include 'koneksi.php';

                $query = "SELECT * FROM  tutor ";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result)>0) {
                    while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td> <?php echo $row["nip"] ?> </td>
                    <td> <?php echo $row["nama"] ?> </td>
                    <td> <?php echo $row["email"] ?> </td>
                    <td> <?php echo $row["telp"] ?> </td>
                    <td> <?php echo $row["status_pengajar"] ?> </td>
                    <td>
                    <a href="home.php?page=editTutor&nip=<?php echo $row['nip']; ?>"> Edit </a>
                            <a href="hapusTutor.php?nip=<?php echo $row['nip'];?>".>Hapus</a>
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