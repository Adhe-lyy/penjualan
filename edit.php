<?php 
  
  include('koneksi.php');
  
  $id = $_GET ['id'];
  
  $query = "SELECT * FROM penjualan WHERE penjualanid = '$id' LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Pelanggan</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT Penjualan
            </div>
            <div class="card-body">
              <form action="update.php" method="POST">
                
                <div class="form-group">
                  <label>tanggal_penjualan</label>
                  <input type="date" name="tanggal_penjualan" value="<?php echo $row['tanggal_penjualan'] ?>" placeholder="Masukkan Tanggal Penjualan" class="form-control">
                  <input type="hidden" name="penjualanid" value="<?php echo $row['penjualanid'] ?>">
                </div>

                <div class="form-group">
                  <label>Total Harga</label>
                  <input type="number" name="totalharga" value="<?php echo $row['totalharga'] ?>" placeholder="Masukkan Total Harga" class="form-control" >
                </div>

                <div class="form-group">
                  <label>Id Pelanggan</label>
                  <input type="number" class="form-control" name="pelangganid"value="<?php echo $row['pelangganid'] ?>" placeholder="Masukkan Id Pelanggan" rows="4">
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>