<?php
$db = mysqli_connect("localhost", "root", "", "web");

$data = mysqli_query($db, "SELECT * FROM matakuliah");

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Homepage</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>FLO's SAFE SPACE</h1>

    <nav>
        <a href="#" onclick="showPage('home')">Home</a>
        <a href="#" onclick="showPage('gallery')">Gallery</a>
        <a href="#" onclick="showPage('blog')">Articles</a>
        <a href="#" onclick="showPage('contact')">Contact</a>
    </nav>
    
    <div id="home" class="content">
        <div class="home-content">
            <div class="description"> 
                <h2>Hello!</h2>
                <p>My name is Florence Lowing, an 18-year-old engineering student who loves coffee too much.</p>
            </div>
            <div class="photo-container">
                <img src="images/flo_almet.png" alt="Flo" class="profile-photo">
            </div>
        </div>
    </div>

    <div id="gallery" class="content">
        <div class="gallery">
            <img src="images/image1.jpg" alt="HME">
            <img src="images/image2.jpeg" alt="Finishing Well">
            <img src="images/image3.jpeg" alt="HPR 2023">
            <img src="images/image4.jpeg" alt="Sweet 17th">
            <img src="images/image5.jpeg" alt="Baksos HME">
            <img src="images/image6.jpeg" alt="Confirmation Day">
            <img src="images/image7.jpg" alt="IAJTE">
            <img src="images/image8.jpeg" alt="GF Ignite">
            <img src="images/image9.jpeg" alt="Graduation">
            <img src="images/image10.jpeg" alt="Praktikum">
            <img src="images/image11.jpeg" alt="HPR">
            <img src="images/image12.jpeg" alt="SKS">
            <img src="images/image13.jpeg" alt="25dec2023">
            <img src="images/image14.jpeg" alt="GF PPFT">
            <img src="images/image15.jpeg" alt="Timker Resoka">
            <img src="images/image16.jpeg" alt="HPR 2024">
        </div>
    </div>

    <div id="blog" class="content">
        <div class="article">
            <h3>Pentingnya Membangun Keterampilan Empati dalam Komunikasi</h3>
            <p>Keterampilan empati adalah kemampuan untuk memahami dan merasakan perasaan serta perspektif orang lain. Dalam konteks komunikasi, membangun keterampilan empati sangatlah penting. Artikel ini akan membahas mengapa membangun keterampilan empati diperlukan dalam komunikasi interpersonal yang efektif. Empati membantu kita untuk lebih baik dalam mendengarkan orang lain, membantu kita menghindari prasangka, dan memperkuat hubungan antarpribadi. Ketika seseorang merasa dipahami dan didengarkan, mereka cenderung lebih terbuka dan kooperatif dalam komunikasi. Dengan demikian, keterampilan empati dapat mengurangi konflik dan meningkatkan kerjasama. Dalam konteks profesional, kemampuan untuk memahami perspektif klien atau rekan kerja dapat meningkatkan kualitas layanan dan kolaborasi tim. Oleh karena itu, penting bagi individu untuk secara aktif memperkuat keterampilan empati mereka melalui latihan mendengarkan aktif, mengajukan pertanyaan terbuka, dan meningkatkan kesadaran akan perasaan dan perspektif orang lain.</p>
        </div>
        
        <div class="article">
            <h3>Manfaat Yoga untuk Kesehatan Mental dan Fisik</h3>
            <p>Yoga adalah praktik kuno yang menggabungkan gerakan tubuh, pernapasan, dan meditasi untuk meningkatkan kesejahteraan fisik dan mental. Dalam artikel ini, akan dibahas tentang manfaat yoga yang luas untuk kesehatan mental dan fisik. Secara fisik, praktik yoga teratur dapat meningkatkan fleksibilitas, kekuatan otot, dan postur tubuh. Selain itu, teknik pernapasan dalam yoga dapat membantu mengurangi stres, meningkatkan energi, dan meningkatkan kualitas tidur. Dari segi kesehatan mental, yoga telah terbukti efektif dalam mengurangi gejala kecemasan, depresi, dan stres. Latihan meditasi dalam yoga membantu seseorang menjadi lebih sadar akan pikiran dan emosi mereka, sehingga meningkatkan ketenangan batin dan konsentrasi. Dengan demikian, yoga adalah cara yang holistik dan berkelanjutan untuk meningkatkan kesejahteraan secara keseluruhan, baik secara fisik maupun mental.</p>
        </div>
        
        <div class="article">
            <h3>Tantangan dan Peluang dalam Era Digital untuk Pendidikan Anak</h3>
            <p>Perkembangan teknologi telah mengubah lanskap pendidikan anak secara dramatis. Artikel ini akan membahas tantangan dan peluang yang dihadapi dalam era digital ini. Salah satu tantangan utama adalah mengelola paparan anak-anak terhadap teknologi yang terus berkembang dengan cepat. Peningkatan penggunaan perangkat digital dapat mengarah pada kurangnya waktu yang dihabiskan di luar ruangan, kurangnya interaksi sosial langsung, dan risiko paparan konten yang tidak pantas. Namun, di sisi lain, teknologi juga membawa peluang besar untuk meningkatkan pembelajaran anak-anak. Aplikasi pendidikan, platform pembelajaran daring, dan alat pembelajaran berbasis teknologi lainnya dapat memperluas akses ke pendidikan, mempersonalisasi pembelajaran, dan meningkatkan keterlibatan siswa. Oleh karena itu, penting bagi orang tua dan pendidik untuk menghadapi tantangan ini dengan bijaksana dan memanfaatkan peluang yang ditawarkan oleh teknologi untuk mendukung pembelajaran anak-anak dalam era digital ini.</p>
        </div>
    </div>

    <div id="contact" class="content">
        <div class="contact-icons">
            <a href="https://www.instagram.com/flrncsl_" target="_blank">
                <img src="https://png.pngtree.com/png-vector/20221018/ourmid/pngtree-instagram-icon-png-image_6315974.png" alt="Instagram">
                <span>Instagram</span>
            </a>
            <a href="mailto:florencelowing026@student.unsrat.ac.id">
                <img src="https://w7.pngwing.com/pngs/712/520/png-transparent-google-mail-gmail-logo-icon.png" alt="Email">
                <span>Email</span>
            </a>
            <a href="https://wa.me/089520819719" target="_blank">
                <img src="https://png.pngtree.com/png-vector/20221018/ourmid/pngtree-whatsapp-phone-icon-png-image_6315989.png" alt="WhatsApp">
                <span>Whatsapp</span>
            </a>
        </div>
    <script src="script.js"></script>

    </body>
</html>

<table id="matakuliah">
                <tr>
                    <th>Matakuliah</th>
                    <th>SKS</th>
                    <th>Hari</th>
                </tr>

                <?php while ($row = mysqli_fetch_array($data)) : ?>
                    <tr>
                        <td><?= $row["Matakuliah"]; ?></td>
                        <td><?= $row["SKS"]; ?></td>
                        <td><?= $row["Hari"]; ?></td>
                    </tr>
                <?php endwhile; ?>
</table>

