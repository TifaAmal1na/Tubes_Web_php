<div class="alert alert-dark">
  <strong>Selamat Datang <?php 
 
 if (isset($_SESSION['username'])) {
  echo $_SESSION['username'];
     } ?> !</strong> <BR>
  Silahkan melihat pembaruan dari seluruh data </strong> 
</div>

<div class="row">
<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-left-warning shadow h-100 py-2">
<div class="card-body">
    <div class="row no-gutters align-items-center">
        <div class="col mr-2">
            <div class="text-xl font-weight-bold text-warning text-uppercase mb-1">
                Total Tutor</div>
                <?php
                include 'koneksi.php';

                $query = "SELECT COUNT(nip) AS jumlah_tutor FROM tutor";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result)>0) {
                    while ($row = mysqli_fetch_array($result)) {
                ?>
                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $row["jumlah_tutor"] ?></div>
                    
                    <?php
                        }
                    }
                    else{
                        echo "0 result";
                    }			 
                ?>
                </div>
                <div class="col-auto">
                    
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-left-warning shadow h-100 py-2">
<div class="card-body">
    <div class="row no-gutters align-items-center">
        <div class="col mr-2">
            <div class="text-xl font-weight-bold text-warning text-uppercase mb-1">
                Total pengguna</div>
                <?php
                include 'koneksi.php';

                $query = "SELECT COUNT(nim) AS total_pengguna FROM mahasiswa";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result)>0) {
                    while ($row = mysqli_fetch_array($result)) {
                ?>
                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $row["total_pengguna"] ?></div>
                    
                    <?php
                        }
                    }
                    else{
                        echo "0 result";
                    }			 
                ?>
                </div>
                <div class="col-auto">
                    
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-left-warning shadow h-100 py-2">
<div class="card-body">
    <div class="row no-gutters align-items-center">
        <div class="col mr-2">
            <div class="text-xl font-weight-bold text-warning text-uppercase mb-1">
                Data Admin</div>
                <?php
                include 'koneksi.php';

                $query = "SELECT COUNT(id) AS total_admin FROM user";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result)>0) {
                    while ($row = mysqli_fetch_array($result)) {
                ?>
                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $row["total_admin"] ?></div>
                    
                    <?php
                        }
                    }
                    else{
                        echo "0 result";
                    }			 
                ?>
                </div>
                <div class="col-auto">
                    
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-left-warning shadow h-100 py-2">
<div class="card-body">
    <div class="row no-gutters align-items-center">
        <div class="col mr-2">
            <div class="text-xl font-weight-bold text-warning text-uppercase mb-1">
               Transaksi</div>
                <?php
                include 'koneksi.php';

                $query = "SELECT COUNT(id_transaksi) AS total_transaksi FROM transaksi";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result)>0) {
                    while ($row = mysqli_fetch_array($result)) {
                ?>
                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $row["total_transaksi"] ?></div>
                    
                    <?php
                        }
                    }
                    else{
                        echo "0 result";
                    }			 
                ?>
                </div>
                <div class="col-auto">
                    
                </div>
            </div>
        </div>
    </div>
</div>