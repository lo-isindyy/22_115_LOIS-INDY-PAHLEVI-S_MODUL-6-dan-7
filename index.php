<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Kalkulator</title>
</head>
<body>
    <?php
        if(isset($_POST['hitung'])){
            $bil1 = $_POST['bil1'];
            $bil2 = $_POST['bil2'];
            $operasi = $_POST['operasi'];
            switch($operasi) {
                case 'tambah':
                    $hasil = $bil1+$bil2;
                    break;
                case 'kurang':
                    $hasil = $bil1-$bil2;
                    break;
                case 'kali':
                    $hasil = $bil1*$bil2;
                    break;
                case 'bagi':
                    $hasil = $bil1/$bil2;
                    break;
            }
        }
    ?>
    <div class="kalkulator">
        <h1 class="judul"><hr>KALKULATOR<hr></h1>
        <form method="post" action="index.php">
            <input type="number" name="bil1" class="bil" autocomplete="off" placeholder="0">
            <input type="number" name="bil2" class="bil" autocomplete="off" placeholder="0">
            <select class="opt" name="operasi">
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">×</option>
                <option value="bagi">÷</option>
            </select>
            <input type="submit" name="hitung" value="    =    " class="tombol">
        </form>
        <?php if(isset($_POST['hitung'])){ ?>
            <input type="text" value="<?php echo $hasil; ?>" class="bil">
        <?php } else{ ?>
            <input type="text" placeholder="0" class="bil">
        <?php } ?><br>
        <br><a href="index.php"><button type="button" class="tombol-hapus">Clear</button></a>
    </div>
</body>
</html>