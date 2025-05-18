<?php
$avukatAdi = "Av. Murat Berkay Atmaca";
$telefon = "0546 137 23 06";
$email = "iletisim@mberkayatmacahukuk.com";
$adres = "Kızılay, Ankara";
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Hakkımızda | <?php echo $avukatAdi; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1><?php echo $avukatAdi; ?></h1>
    <p>Hukuk ve Danışmanlık Bürosu</p>
</header>
<nav>
    <a href="index.php">Ana Sayfa</a>
    <a href="hakkimizda.php">Hakkımızda</a>
    <a href="hizmetler.php">Hizmetlerimiz</a>
    <a href="sss.php">SSS</a>
    <a href="iletisim.php">İletişim</a>
</nav>
<main>
    <h2>Merhaba, ben Murat Berkay Atmaca. Hukuk alanındaki bilgi ve tecrübemle müvekkillerime en iyi hizmeti sunmayı hedefleyen bir avukatım. Mesleki kariyerimde dürüstlük, gizlilik ve profesyonellik en temel değerlerimdir. Müvekkillerimin haklarını en iyi şekilde korumak ve adaletin sağlanmasına katkıda bulunmak en büyük önceliklerimden biridir.

Hukukun farklı alanlarında geniş bir bilgi birikimine sahibim ve müvekkillerime ihtiyaç duydukları hukuki desteği sağlamak için sürekli kendimi geliştirmekteyim. Her bir davayı titizlikle ele alır, çözüm odaklı bir yaklaşımla müvekkillerimin haklarını korumak için çalışırım.</p><img class='banner' src='https://images.unsplash.com/photo-1588776814546-bebdbf9d0f5d' alt='Hakkımızda görseli'>
</main>
<footer>
    &copy; <?php echo date("Y"); ?> <?php echo $avukatAdi; ?> - Tüm Hakları Saklıdır.
</footer>
</body>
</html>
