<?php

$duyurular = array(
    array("id" => 1, "tarih" => "12 Nisan 2024", "baslik" => "Yaz Okulu Kayıt Tarihleri", "aciklama" => "Yaz okulu kayıt işlemleri 15 Mart - 30 Mart tarihleri arasında yapılacaktır."),
    array("id" => 2, "tarih" => "10 Mart 2024", "baslik" => "Staj Başvuruları", "aciklama" => "Staj başvuruları için son gün 20 Mart 2024'tür. Detaylı bilgi için öğrenci işleriyle iletişime geçiniz."),
    array("id" => 3, "tarih" => "5 Mayıs 2024", "baslik" => "Akademik Takvim Güncellemesi", "aciklama" => "Yarıyıl arası tatil tarihleri değişmiştir. Yeni takvim öğrenci portalında yayınlanmıştır.")
);

function duyuruListele($duyurular) {
    echo '<div class="duyuru">';
    echo '<h2>Duyurular</h2>';
    echo '<div class="duyuru-kutular">';
    foreach ($duyurular as $duyuru) {
        echo '<div class="duyuru-kutu">';
        echo '<h3>' . $duyuru["baslik"] . '</h3>';
        echo '<p><strong>Tarih:</strong> ' . $duyuru["tarih"] . '</p>';
        echo '<p>' . $duyuru["aciklama"] . '</p>';
        echo '</div>';
    }
    echo '</div>';
    echo '</div>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fırat Üniversitesi</title>
    <style>
       body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
}

nav {
    background-color: #444;
    color: #fff;
    text-align: center;
    padding: 10px 0;
    display: flex;
    justify-content: space-around;
}

nav table {
    margin: auto;
    border-collapse: collapse;
}

nav td {
    padding: 10px 20px;
}

nav a {
    color: #fff;
    text-decoration: none;
    margin: 0 10px;
}

nav a:hover {
    text-decoration: underline;
}

.container {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: 20px;
    flex-wrap: wrap;
}

.school-image {
    width: 30%;
}

.school-info {
    width: 60%;
    text-align: justify;
}

p {
    font-size: large;
}

.haber {
    margin-top: 20px;
    margin-bottom: 20px;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.haber-item {
    width: 30%;
    border: 1px solid #ccc;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 20px;
}

.haber-item img {
    width: 100%;
    border-radius: 5px;
}

.duyuru {
    margin-top: 20px;
}

.duyuru-kutular {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.duyuru-kutu {
    width: calc(30% - 20px);
    background-color: #f9f9f9;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    margin-bottom: 20px;
    transition: all 0.3s ease; 
}

.duyuru-kutu:hover {
    background-color: #e0e0e0; /* Hover rengi */
    transform: translateY(-5px); /* Y ekseninde yukarı doğru kaydırma */
}

.duyuru-kutu h3 {
    margin-top: 0;
}

.duyuru-kutu p {
    margin: 0;
    margin-top: 5px;
}

.contact-info {
    margin-top: 20px;
}

.contact-info h2 {
    margin-bottom: 10px;
}

.contact-info p {
    margin-bottom: 5px;
}

form {
    width: 100%;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
    margin-top: 20px;
}

form label,
form input,
form textarea {
    display: block;
    margin-bottom: 10px;
}

form input,
form textarea {
    width: calc(100% - 22px);
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

form input[type="submit"] {
    background-color: #333;
    color: #fff;
    border: none;
    cursor: pointer;
}
    </style>
</head>
<body>
    <header>
        <h1>Fırat Üniversitesi</h1>
    </header>

    <nav>
        <table>
            <tr>
                <td><a href="anasayfa.html">Anasayfa</a></td>
                <td><a href="duyurular.html">Duyurular</a></td>
                <td><a href="akademiktakvim.html">Akademik Takvim</a></td>
            </tr>
        </table>
    </nav>

    <div class="container">
        <div class="school-image">
            <img src="fırat.png" alt="Okul Fotoğrafı">
        </div>
        <div class="school-info">
            <h2>Fırat Üniversitesi Hakkında</h2>
            <p>Fırat Üniversitesi, Elazığ, Türkiye'de bulunan köklü bir eğitim kurumudur. 1975 yılında kurulan üniversite, geniş bir akademik yelpazede eğitim vermektedir ve öğrencilerine modern olanaklar sunmaktadır.</p>
            <p>Fırat Üniversitesi, Türkiye'nin doğusunda, Elazığ şehrinde bulunan köklü bir eğitim kurumudur. Üniversite, bilim, teknoloji ve kültür alanlarında geniş bir yelpazede eğitim imkanları sunmaktadır. Fırat Üniversitesi, disiplinler arası çalışmaları teşvik eden ve öğrencilere nitelikli bir eğitim sunmayı hedefleyen bir vizyonla hareket etmektedir. Çeşitli fakülteleri, enstitüleri ve yüksekokullarıyla öğrencilere çeşitli alanlarda akademik gelişim fırsatları sunan Fırat Üniversitesi, aynı zamanda araştırma ve yenilikçi projelere önem veren bir yapıya sahiptir. Öğrenci odaklı bir eğitim anlayışıyla hareket eden üniversite, mezunlarına sağlam bir akademik altyapı ve pratik deneyim kazandırmayı amaçlamaktadır.</p>
        </div>
    </div>

    <?php duyuruListele($duyurular); ?> 

    <div class="contact-info">
        <h2>İletişim Bilgileri</h2>
        <p>Adres: Fırat Üniversitesi, Elazığ, Türkiye</p>
        <p>Telefon: 123-456-7890</p>
        <p>E-posta: info@firat.edu.tr</p>
    </div>

    <form action="#" method="post">
        <h2>İletişim Formu</h2>
        <label for="name">İsim:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">E-posta:</label>
        <input type="email" id="email" name="email" required>
        <label for="message">Mesajınız:</label>
        <textarea id="message" name="message" rows="4" required></textarea>
        <input type="submit" value="Gönder">
    </form>

</body>
</html>
