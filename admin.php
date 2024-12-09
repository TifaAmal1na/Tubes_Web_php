 <!-- DataTales Example -->
 <div class="card-header py-3">
    <div class="m-0 font-weight-bold text-primary">Data Admin</div>
    <div class="float-right">
    <a href="home.php?page=formInsertAdmin" class=" btn btn-sm btn-primary shadow-sm">
        <!-- <i class="fas fa-download fa-sm text-white-50"></i>  -->
        ADD</a>
    </div>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>id_admin</th>
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                
            </tfoot>
            <tbody>
                <?php
                include 'koneksi.php';

                $query = "SELECT * FROM  user ";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result)>0) {
                    while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td> <?php echo $row["id"] ?> </td>
                    <td> <?php echo $row["username"] ?> </td>
                    <td>
                    <a href="home.php?page=editAdmin&id=<?php echo $row['id']; ?>"> Edit </a>
                            <a href="hapusAdmin.php?id=<?php echo $row['id'];?>".>Hapus</a>
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