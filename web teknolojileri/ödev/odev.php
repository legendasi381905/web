<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ödev</title>
    <style>
        #table{
            margin: auto;
            border: 5px solid orangered;
            border-radius: 10px;
            text-align: center;
            background-color: burlywood;
            width: 700px;
            height: 350px;
            font-style: italic;
            font-weight: bold;
        }
        #tr{
            font-size: 20px;
            font-style: normal;
        }
        #samet{
            margin-left: 1000px;
            font-weight: bold;
            font-size: 25px;
            font-style: italic;
        }
    </style>
</head>
<body>
    <?php
        $ogrencidetaylari = array(
            "ogr1" => array(
                "id"      => 1,
                "adi"     => "Havvanur",
                "soyadi"  => "Yıldız",
                "bolum"   => "Bilgisayar",
                "yas"     => 20,
                "dersler" => array(
                    "Web Programlama",
                    "Veri Tabanı",
                    "Mobil Programlama"
                ),
                "sınıf"    => 1,
                "memleket" => "İzmir"
            ),
            "ogr2" => array(
                "id"      => 2,
                "adi"     => "Kemal",
                "soyadi"  => "Güner",
                "bolum"   => "İşletme",
                "yas"     => 21,
                "dersler" => array(
                    "İktisada Giriş",
                    "İşletme İlkeleri",
                    "Genel Matematik"
                ),
                "sınıf"    => 2,
                "memleket" => "Kayseri"
            ),
            "ogr3" => array(
                "id"      => 3,
                "adi"     => "İsmet",
                "soyadi"  => "Yanık",
                "bolum"   => "Elektrik",
                "yas"     => 20,
                "dersler" => array(
                    "Ölçme Tekniği",
                    "Doğru Akım Devreleri",
                    "Temel Elektronik"
                ),
                "sınıf"    => 1,
                "memleket" => "Bursa"
            ),
            "ogr4" => array(
                "id"      => 4,
                "adi"     => "Hacer",
                "soyadi"  => "Yılmaz",
                "bolum"   => "Makine",
                "yas"     => 21,
                "dersler" => array(
                    "Termodinamik",
                    "Ölçme Ve Kontrol",
                    "Mukavemet"
                ),
                "sınıf"    => 2,
                "memleket" => "Samsun"
            )
        );
        $sayi = rand(1,100);
        if ($sayi %2 == 0)
            echo "$sayi sayısı çifttir.";
        else 
            echo "$sayi sayısı tektir.";
        echo "<br>";
        $sayi2 = rand(1,100);
        if ($sayi < 50)
            echo "notunuz $sayi2 kaldınız.";
        else 
            echo "notunuz $sayi2 geçtiniz.";
        
        
    ?>
    <form action="odev.php" method="get">
        Doğum Tarihinizi Giriniz: <input type="number" name="dogum">
        <input type="submit">
    </form>
    <?php 
        $yıl = 2022;
        if ($_GET["dogum"] > 2004)
            echo $yıl-$_GET["dogum"] . " Yaşındasınız Ehliyet Alamazsınız.";
        else
            echo $yıl-$_GET["dogum"] . " Yaşındasınız Ehliyet Alabilirsiniz.";
    ?>
    <table id="table" border="1">
        <tr id="tr">
            <td>#id</td>
            <td>#Adı</td>
            <td>#Soyadı</td>
            <td>#Bölüm</td>
            <td>#Yaş</td>
            <td>#Dersler</td>
            <td>#Sınıf</td>
            <td>#Memleket</td>
        </tr> 
        <tr>
            <td><?php echo $ogrencidetaylari["ogr1"]["id"] ?></td>
            <td><?php echo $ogrencidetaylari["ogr1"]["adi"] ?></td>
            <td><?php echo $ogrencidetaylari["ogr1"]["soyadi"] ?></td>
            <td><?php echo $ogrencidetaylari["ogr1"]["bolum"] ?></td>
            <td><?php echo $ogrencidetaylari["ogr1"]["yas"] ?></td>
            <td><?php for ($i=0; $i < 3  ; $i++) { 
                echo $ogrencidetaylari["ogr1"]["dersler"][$i];
                echo "<br>";
            } ?></td>
            <td><?php echo $ogrencidetaylari["ogr1"]["sınıf"] ?></td>
            <td><?php echo $ogrencidetaylari["ogr1"]["memleket"] ?></td>
        </tr>
        <tr>
            <td><?php echo $ogrencidetaylari["ogr2"]["id"] ?></td>
            <td><?php echo $ogrencidetaylari["ogr2"]["adi"] ?></td>
            <td><?php echo $ogrencidetaylari["ogr2"]["soyadi"] ?></td>
            <td><?php echo $ogrencidetaylari["ogr2"]["bolum"] ?></td>
            <td><?php echo $ogrencidetaylari["ogr2"]["yas"] ?></td>
            <td><?php for ($i=0; $i < 3  ; $i++) { 
                echo $ogrencidetaylari["ogr2"]["dersler"][$i];
                echo "<br>";
            } ?></td>
            <td><?php echo $ogrencidetaylari["ogr2"]["sınıf"] ?></td>
            <td><?php echo $ogrencidetaylari["ogr2"]["memleket"] ?></td>
        </tr>
        <tr>
            <td><?php echo $ogrencidetaylari["ogr3"]["id"] ?></td>
            <td><?php echo $ogrencidetaylari["ogr3"]["adi"] ?></td>
            <td><?php echo $ogrencidetaylari["ogr3"]["soyadi"] ?></td>
            <td><?php echo $ogrencidetaylari["ogr3"]["bolum"] ?></td>
            <td><?php echo $ogrencidetaylari["ogr3"]["yas"] ?></td>
            <td><?php for ($i=0; $i < 3  ; $i++) { 
                echo $ogrencidetaylari["ogr3"]["dersler"][$i];
                echo "<br>";
            } ?></td>
            <td><?php echo $ogrencidetaylari["ogr3"]["sınıf"] ?></td>
            <td><?php echo $ogrencidetaylari["ogr3"]["memleket"] ?></td>
        </tr>
        <tr>
            <td><?php echo $ogrencidetaylari["ogr4"]["id"] ?></td>
            <td><?php echo $ogrencidetaylari["ogr4"]["adi"] ?></td>
            <td><?php echo $ogrencidetaylari["ogr4"]["soyadi"] ?></td>
            <td><?php echo $ogrencidetaylari["ogr4"]["bolum"] ?></td>
            <td><?php echo $ogrencidetaylari["ogr4"]["yas"] ?></td>
            <td><?php for ($i=0; $i < 3  ; $i++) { 
                echo $ogrencidetaylari["ogr4"]["dersler"][$i];
                echo "<br>";
            } ?></td>
            <td><?php echo $ogrencidetaylari["ogr4"]["sınıf"] ?></td>
            <td><?php echo $ogrencidetaylari["ogr4"]["memleket"] ?></td>
        </tr>

    </table>
    <br>
    <div id="samet">
        Abdulsamet İslamoğlu <br> 216029035
    </div>
</body>
</html>
