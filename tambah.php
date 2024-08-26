<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Penjualan</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH Penjualan
            </div>
            <div class="card-body">
              <form action="tambah1.php" method="POST">
                
                <div class="form-group">
                  <label>Tanggal Penjualan</label>
                  <input type="date" name="tanggal_penjualan" placeholder="Masukkan Tanggal Penjualan" class="form-control">
                </div>

                <div class="form-group">
                  <label>Total Harga</label>
                  <input type="number" name="totalharga" placeholder="Masukkan Total Harga" class="form-control">
                </div>

                <div class="form-group">
                  <label>Id Pelanggan</label>
                  <input type="number" name="idpelanggan" placeholder="Masukkan Id Pelanggan" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-success">SIMPAN</button>
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