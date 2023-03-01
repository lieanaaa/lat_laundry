<?php

$datapaket = array (
    array("Paket A", "cuci kering biasa",40000),
    array("Paket B ", "Cuci kering dan lipat",45000),
    array("Paket C"," Cuci kering, setrika, dan lipat",50000),
    array("Paket D","Cuci kering, setrika, pengharum,lipat",55000)
)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav>
        <ul>
           <li><a href="landing.php" style="text-decoration: none; color: black;">Home</a></li>
           <li><a href="transaksi.php" style="text-decoration: none; color: black;">Transaksi</a></li>
           <li><a href="login.php" style="text-decoration: none; color: black;">Logout</a></li>
        </ul>
    </nav><br>
    <nav>
        <ul>
            <center>
            <img src="img/banner.png">
        </ul>
    </nav><br>
    <h2>Daftar Paket Laundry</h2>
    <body>
    <div class="tutup">
        <?php foreach ($datapaket as $pakets=> $paket) { ?>
            <div class="tutup-box">
                <div class="box">
                    <div class="text-1"><?php echo $paket['0'] ?></div>
                    <div class="text-2"><?php echo $paket['1'] ?></div>
                    <div class="text-2">Rp.<?php echo $paket['2'] ?></div>
                </div>
                <form action="transaksi.php" method="POST">
                    <input type="hidden" name="data1" id="data" value="<?php echo $paket[0] ?>">
                    <input type="hidden" name="data2" id="data" value="<?php echo $paket[1] ?>">
                    <input type="hidden" name="data3" id="data" value="<?php echo $paket[2] ?>">
                    <button class=" btn btn-primary mt-2">
                        Pilih Paket
                    </button>
                </form>
            </div>
        <?php } ?>
    </div>
    <footer>  
          <a class="">@copyright lianasalsabila</a>
    </fotter>
</body>
</html>