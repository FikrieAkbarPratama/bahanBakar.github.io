<?php 
require "proses.php";

if(isset($_POST['beli'])) {
    $proses = new Beli();
    $proses->setHarga(15200, 16400, 18300, 17500);
    $proses->jenis = $_POST['jenis'];
    $proses->jumlah = $_POST['jumlah'];
    $proses->hargaBeli();
    $proses->cetakPembelian();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahan Bakar</title>
</head>
<body>
    <form action="" method="post">
        <center>
        <table>
        <tr>
            <td>
                <label for="jumlah">Masukkan liter :</label>
                <input type="number" name="jumlah" id="jumlah">
            </td>
        </tr>
        <tr>
            <td>
                <label for="jenis">Masukkan jenis shell : </label>
                <select name="jenis" id="jenis">
                    <option disabled>--Pilih Shell--</option>
                    <option value="SSuper">SSuper</option>
                    <option value="SVPower">SVPower</option>
                    <option value="SVPowerDiesel">SVPowerDiesel</option>
                    <option value="SVPowerNitro">SVPowerNitro</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit" name='beli'>Beli</button>
            </td>
        </tr>
    </form>
    </table>
    </center>
</body>
</html>