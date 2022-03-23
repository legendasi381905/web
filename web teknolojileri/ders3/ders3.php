<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders 3</title>
</head>
<body>
    <?php

use function PHPSTORM_META\type;

        $not = rand(10,100);
        if ($not >= 50){
            echo "Geçtiniz Notunuz:$not";            
        }
        else{
            echo "Kaldınız Notunuz:$not";   
        }

        echo "<hr>";
        echo "<h3> Sık Kullanılan String Fonksiyonlar</h3>";
        $yazi = "Aydın Adnan Menderes Üniversitesi";
        echo "<br> Değişken İçeriği: $yazi (". gettype($yazi) . ")";

        // İçeriğin Büyük Harfe Dönüştürülmesi

        echo "<br> \$yazi İçeriğinin Büyük Harfle Yazılması -----> " . $buyuk_yazi = strtoupper($yazi); 
        echo "<br> \$yazi İçeriğinin Büyük Harfle Yazılması -----> " . $buyuk_yazi = mb_strtoupper($yazi); 

        // İçeriğin Büyük Harfe Dönüştürülmesi

        echo "<br> \$yazi İçeriğinin Küçük Harfle Yazılması -----> " . $kucuk_yazi = strtolower($buyuk_yazi); 
        echo "<br> \$yazi İçeriğinin Küçük Harfle Yazılması -----> " . $kucuk_yazi = mb_strtolower($buyuk_yazi);
        
        // İçeriğin İlk Harfinin Büyük Harfe Dönüştürülmesi

        echo "<br> \$yazi İlk Harfinin, Büyük Harfle Yazılması -----> " . $ilk_yazi = ucfirst($kucuk_yazi);

        // İçeriğin Tüm Kelimelerinin İlk Harfinin Büyük Harfe Dönüştürülmesi
        echo "<br> \$yazi Tüm Kelimelerinin, İlk Harfinin Büyük Harfle Yazılması -----> " . $kelime = ucwords($kucuk_yazi);
        
        // İçeriğin Harf Sayısı:
        echo "<br> \$yazi İçerisindeki Harf Sayısı: " . strlen($yazi);

        //Ascii Char Karşılığı
        echo "<br>Karakter Karşılığı:" . chr(109);
        echo "<br>Karakter Karşılığı:" . chr(64);
        //Uygulama 32-127 char karşılıkları:
        echo "<br>Ascii  Karakterleri: ";
        for ($i=32; $i <= 127; $i++) { 
            echo "$i ".chr($i) . "-";
        }


        //Metnin Parçalanarak Diziye Dönüştürülmesi (explode)
        $dizi = explode(" ",$yazi);
        echo "<br>";
        print_r($dizi);

        //Uygulama paragraftaki kelime ve cümle sayılarını alt alta yazdırınız.
        $metin="Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti dignissimos sequi ea 
        quibusdam laborum vero, cupiditate veniam odit, a quod voluptatem eveniet laboriosam eos. Voluptatibus 
        quasi repellendus illum exercitationem voluptates!Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Deleniti dignissimos sequi ea quibusdam laborum vero, cupiditate veniam odit, a quod voluptatem eveniet 
        laboriosam eos. Voluptatibus quasi repellendus illum exercitationem voluptates!";

        $kelimelerDizisi=explode(" ",$metin);
        $cumlelerDizisi=explode(".",$metin);

        echo "<br>Kelime Sayısı: " . count($kelimelerDizisi);
        echo "<br>Cümle Sayısı: " . count($cumlelerDizisi);

        /*  Uygulama 
            Veri tabanından gelen 2021-12-25 değerini 25-12-2021 şeklinde ekrana yazdırınız.
        */
        echo "<br>";
        $tarih="2021-12-25";
        $yenitarih=explode("-",$tarih);
        echo "$yenitarih[2] - $yenitarih[1] - $yenitarih[0]";
        
        //Dizinin Metne Dönüştürülmesi (implode)
        echo "<br>";
        $aylar=["Ocak, Şubat, Mart, Nisan, Mayıs"];
        print_r($aylar);
        $aylarString=implode(" ", $aylar);
        echo"<br> String: $aylarString";

        /*  str.split()
        Verilen Bir Metni Belirten Sayı Kadar Ayrılarak Bir Dizi İçeriğine Aktarılması. Eğer Sayı Belirtilmezse Metni 
        Harf Harf Böler.
        */
        echo "<br>";
        $iban="TR0010002000300040005000";
        $ibanYeni = str_split($iban, 4);
        print_r($ibanYeni);
        echo "<br>";

        foreach ($ibanYeni as $parca) {
            echo "$parca ";
        }
        
        /* Trim - Substr - str_replace - md5 - -sha1/*






    ?>
</body>
</html>