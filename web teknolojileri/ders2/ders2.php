<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ders-2</title>
</head>
<body>
    <?php 
        /* php versiyon ve detay bilgisini gösterir. */
        //echo phpinfo(); 
        echo "<h4> Tırnak İşaretleri Arasındaki Farklar </h4>";
        $uni = "Adnan Menderes Üniversitesi";
        echo "Değişken İçeriği: $uni";
        echo "<br>";
        echo "<br>";

        /* Değişken İsminin Yazdırılması */
        echo "1- Kazandığınız Üniversite: \$uni";
        echo "<br>";
        echo "2- Kazandığınız Üniversite:" . '$uni';
        echo "<br>";
        echo '3- Kazandığınız Üniversite: $uni';

        /* Değişkenin İçeriğinin Yazdırılması */
        echo "<br>";
        echo "<br>";
        echo "1- Kazandığınız Üniversite: $uni";
        echo "<br>";
        echo "2- Kazandığınız Üniversite:" . $uni;
        echo "<br>";
        echo "3- Kazandığınız Üniversite:" . "$uni";
        echo "<br>";
        echo '4- Kazandığınız Üniversite:' . "$uni";

        echo "<hr> <h4>Temel Matematiksel İşlemler</h4>";
        echo "<h5> Toplama İşlemi</h5>";
        $sayi1 = 20;
        $sayi2 = 10;
        echo "\$sayi1 + \$sayi2 = " . ($sayi1+$sayi2);
        echo "<br>";
        echo "$sayi1 + $sayi2 = " . ($sayi1+$sayi2);
        echo "<br>";
        $sonuc = $sayi1+$sayi2;
        echo "$sayi1 + $sayi2 = $sonuc";

        echo "<hr> <h4>Temel Matematiksel İşlemler</h4>";
        echo "<h5> Çıkarma İşlemi</h5>";
        $sayi1 = 20;
        $sayi2 = 10;
        echo "\$sayi1 - \$sayi2 = " . ($sayi1-$sayi2);
        echo "<br>";
        echo "$sayi1 - $sayi2 = " . ($sayi1-$sayi2);
        echo "<br>";
        $sonuc = $sayi1-$sayi2;
        echo "$sayi1 - $sayi2 = $sonuc";

        echo "<hr> <h4>Temel Matematiksel İşlemler</h4>";
        echo "<h5> Çarpma İşlemi</h5>";
        $sayi1 = 20;
        $sayi2 = 10;
        echo "\$sayi1 * \$sayi2 = " . ($sayi1*$sayi2);
        echo "<br>";
        echo "$sayi1 * $sayi2 = " . ($sayi1*$sayi2);
        echo "<br>";
        $sonuc = $sayi1*$sayi2;
        echo "$sayi1 * $sayi2 = $sonuc";

        echo "<hr> <h4>Temel Matematiksel İşlemler</h4>";
        echo "<h5> Bölme İşlemi</h5>";
        $sayi1 = 20;
        $sayi2 = 10;
        echo "\$sayi1 / \$sayi2 = " . ($sayi1/$sayi2);
        echo "<br>";
        echo "$sayi1 / $sayi2 = " . ($sayi1/$sayi2);
        echo "<br>";
        $sonuc = $sayi1/$sayi2;
        echo "$sayi1 / $sayi2 = $sonuc";

        echo "<hr> <h4>Temel Matematiksel İşlemler</h4>";
        echo "<h5> Üst Alma İşlemi (pow(x,y))</h5>";
        $x = 4;
        $y = "2";
        //$y = (int)"2"; // Dönüşüm İşlemi
        echo "Değişken Tipi: " . gettype($x) ."<br>";
        echo "Değişken Tipi: " . gettype($y) ."<br>";
        echo "$x <sup>$y</sup> = ". pow($x, $y);

        echo "<h5> Karekök Alma İşlemi (sqrt(x))</h5>";
        $x = 123;
        $karekok = sqrt($x);
        echo "$x sayısının karekökü: $karekok";

        echo "<h5> Mutlak  Değer İşlemi (abs(x))</h5>";
        $x = (-12);
        $mutlak = abs($x);
        echo "|$x| sayısının mutlak değeri: $mutlak";

        echo "<h5> Taban Değişim İşlemi (base_convert(x,taban1,taban2))</h5>";
        echo "28 sayısının 2'lik tabandaki karşılığı: ". base_convert(27,10,2);
        echo "<br>";
        $sayi = 50;
        $taban = 10;
        $yenitaban = 2;
        $sonuc = base_convert($sayi,$taban,$yenitaban);
        echo "$sayi<sub>10</sub> = $sonuc<sub>2</sub>";

        echo "<h5> Mod İşlemi (fmod(x,y))</h5>";
        $x = 20;
        $y = 4;
        $mod = fmod($x, $y);
        echo "$x mod $y : $mod";
        echo "<br> $x sayısı: " . (fmod($x, 2) == 0 ? "çifttir" : "tektir");

        echo "<h5> Yuvarlama İşlemleri (round(x,y))</h5>";
        $x = 15.313;
        $y = 15.385;
        echo "$x Bir ondalık basamak yuvarlaması sonucu: " . round($x,1) . "<br>"; 
        echo "$x Bir ondalık basamak yuvarlaması sonucu: " . round($y,1) . "<br>"; 
        echo "$x İki ondalık basamak yuvarlaması sonucu: " . round($x,2) . "<br>"; 
        echo "$x İki ondalık basamak yuvarlaması sonucu: " . round($y,2) . "<br>";

        echo "<h5> Yuvarlama İşlemleri (floor(x))</h5>";
        // en yakın en küçük tam sayıya yuvarlar
        $x = 15.913;
        $y = 15.213;
        echo "$x Floor yuvarlaması sonucu: " . floor($x) . "<br>";
        echo "$x Floor yuvarlaması sonucu: " . floor($y) . "<br>";

        echo "<h5> Yuvarlama İşlemleri (ceil(x))</h5>";
        // en yakın en büyük tam sayıya yuvarlar
        $x = 15.913;
        $y = 15.213;
        echo "$x Floor yuvarlaması sonucu: " . ceil($x) . "<br>";
        echo "$x Floor yuvarlaması sonucu: " . ceil($y) . "<br>";
        
        echo "<h5> Rastgele Sayı Üretme İşlemi (rand(x,y))</h5>";
        echo "10-100 Arasında Rastgele Sayı Üretildi " . rand(10,100);
        echo "<br>";
        echo "<br>";
        for ($i=1; $i <= 10; $i++) { 
           echo "$i. Sayı: ". rand(0,100) ."<br>";
        }
    ?>
</body>
</html>