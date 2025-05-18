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
    <title>Ana Sayfa | <?php echo $avukatAdi; ?></title>
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
    <h2>Hoş Geldiniz</h2><p>Av. Ahmet Yılmaz olarak müvekkillerimize ceza hukuku, aile hukuku, ticaret hukuku ve daha birçok alanda profesyonel destek sağlamaktayız.</p><img class="banner" src="https://images.unsplash.com/photo-1555374018-13a8994ab246" alt="avukatlık görseli">
</main>
<footer>
    &copy; <?php echo date("Y"); ?> <?php echo $avukatAdi; ?> - Tüm Hakları Saklıdır.
</footer>
</body>
</html>
