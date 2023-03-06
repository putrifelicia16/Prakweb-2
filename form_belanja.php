<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
   <div class="container-fluid">
       <div class="row mt-5">
           <div class="col-8">
           <form method="POST" action="form_belanja.php">
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="customer" name="customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="pilihproduk" id="pilihproduk_0" type="radio" class="custom-control-input" value="Vinyl"> 
        <label for="pilihproduk_0" class="custom-control-label">Vinyl</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="pilihproduk" id="pilihproduk_1" type="radio" class="custom-control-input" value="Gramofon"> 
        <label for="pilihproduk_1" class="custom-control-label">Gramofon</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="pilihproduk" id="pilihproduk_2" type="radio" class="custom-control-input" value="Turntable"> 
        <label for="pilihproduk_2" class="custom-control-label">Turntable</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>
           </div>
            
           <div class="col-4">
             <ul class="list-group">
              <li class="list-group-item active" aria-current="true">Daftar Harga</li>
              <li class="list-group-item">Vinyl : 350.000</li>
              <li class="list-group-item">Gramofon : 720.000</li>
              <li class="list-group-item">Turntable : 4.750.000</li>
              <li class="list-group-item active" aria-current="true">Harga Dapat Berubah Setiap Saat</li>
             </ul>
           </div>
       </div>
   </div> 

   <hr>

   <?php if(  isset ($_POST['submit']) &&  isset ($_POST['pilihproduk']) ) :    ?>
      Nama Customer : <?=$_POST['customer']  ?>
      <br>
      Produk Pilihan : <?= $_POST['pilihproduk'] ?>
      <br>
      Jumlah Beli : <?= $_POST['jumlah'] ?>
      <br>


      <?php
        if($_POST['pilihproduk'] == "Vinyl" && $_POST['jumlah'] >=1){
            $harga = 3500000 * $_POST['jumlah'];
            echo 'TOTAL BELANJA :' . $harga;

        } elseif ($_POST['pilihproduk'] == "Gramofon" && $_POST['jumlah'] >=1) {
            $harga = 7200000 * $_POST['jumlah'];
            echo 'TOTAL BELANJA :' . $harga;

        } elseif ($_POST['pilihproduk'] == "Turntable" && $_POST['jumlah'] >=1) {
            $harga = 4750000 * $_POST['jumlah'];
            echo 'TOTAL BELANJA :' . $harga;
        }

       
      ?>


   <?php  endif; ?>
</body>
</html>