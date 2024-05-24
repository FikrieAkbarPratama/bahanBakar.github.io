<?php 
require "proses.php";

if(isset($_POST['submit'])) {
    $proses = new Beli();
    $proses->setHarga(15200, 16400, 18300, 17500);
    $proses->jenis = $_POST['jenis'];
    $proses->jumlah = $_POST['jumlah'];
    $proses->hargaBeli();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahan Bakar</title>
    <!-- fontAwesome -->
    <script src="https://kit.fontawesome.com/7dfe115e0d.js" crossorigin="anonymous"></script>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- googleFonts -->
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header"><p class="fw-bold fs-2 text-center">Bahan Bakar</p></div>
            <div class="card-body">
              <form action="" method="post">
                  <label for="jumlah">Jumlah Liter :</label>
                  <input class="form-control mb-2" type="text" name="jumlah" id="jumlah" >
                  <label for="jenis">Jenis Shell :</label>
                  <select class="form-select mb-4" name="jenis" id="jenis">
                      <option disabled selected>-- Jenis Shell --</option>
                      <option value="SSuper">Shell Super</option>
                      <option value="SVPower">Shell V-Power</option>
                      <option value="SVPowerDiesel">Shell V-PowerDiesel</option>
                      <option value="SVPowerNitro">Shell V-PowerNitro</option>
                  </select>
                  <button class="btn btn-primary" type="submit" name="submit">Submit</button>
              </form>
            </div>
            <?php if(isset($_POST['submit'])) : ?>
                <div class="card">
                    <div class="card-body">
                        <?= $proses->cetakPembelian(); ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>