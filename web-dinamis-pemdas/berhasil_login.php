<?php 
 
session_start(); 
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NATURE WEBSITE</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <!-- ========== SPLASH SCREEN ========== -->
    <div class="intro">
        <h1 class="logo-header">
            <span class="logo">Na</span><span class="logo">ture.</span>
        </h1>
    </div>
    <!-- ========== END SPLASH SCREEN ========== -->

    <!--  ========== NAVBAR ========== -->
    <nav>
        <div class="nav-logo">Nature.</div>
        <div class="logout">
            <a href="logout.php">LOG OUT</a>
        </div>
    </nav>
    <!--  ========== END NAVBAR ========== -->


    <!--  ========== CONTENT ========== -->
    <section class="landpage">
    <section class="layer"></section>
        <!-- LEFT CONTENT -->
        <div class="left-text-content">
            <div class="grouping-text">
                <li class="name">
                    <form action="" method="POST" class="login-email">
                        <?php echo "<h1>Hi, " . $_SESSION['username'] ."!". "</h1>"; ?>
                    </form>
                </li>
                <li class="description">Kami adalah siswa dan siswi dari SMKN 26 Jakarta. Dalam platform ini, kami membuat tentang website sosial media yang menyedia kan berbagai fitur-fitur seperti sosial media pada umumnya. Platform ini bertujuan untuk para Traveler ataupun para Explorer Alam yang ingin menceritakan pengalamannya maupun mencari informasi tentang suatu alam yang ingin di kunjungi maupun di jelajahi serta juga dapat memesan suatu penginapan yang berkaitan dengan alam yang ingin di kunjungi.</li>
                <div class="btn-group">
                    <li class="btn-contact">
                        <a href="#contact-menu">CONTACT US</a>
                    </li>

                    <li class="btn-contact">
                        <a href="social-media.html">SOCIAL MEDIA</a>
                    </li>
                </div>

            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="container">

            <div class="contact-menu" id="contact-menu">
                <div class="title-contact">Need Help??</div>
                <div class="grouping-contact">
                    <form>
                        <div class="input-name">
                            <label for="input-name"></label>
                            <input id="input-name" type="text" name="input-name" placeholder="Nama">
                        </div>
                        <div class="input-email">
                            <label for="input-email"></label>
                            <input id="input-email" type="text" name="input-email" placeholder="Email">
                        </div>
                        <div class="input-number">
                            <label for="input-number"></label>
                            <input id="input-number" type="text" name="input-number" placeholder="Nomor Telepon">
                        </div>
                        <div class="input-message">
                            <label for="input-textarea"></label>
                            <textarea id="input-textarea" name="input-textarea" placeholder="Pesan"></textarea>
                        </div>
                        <button class="btn-send" onclick="submitForm()">KIRIM</button>
                    </form>
                </div>
            </div>

            <div class="content-footer">
                <div class="footer-sm">
                    <div class="about">
                        <div class="grp">
                            <div class="title-sm">FOLLOW US</div>
                            <div class="icon-sm">INSTAGRAM</div>
                            <div class="icon-sm">FACEBOK</div>
                            <div class="icon-sm">TWITTER</div>
                            <div class="icon-sm">TIKTOK</div>
                        </div>
                    </div>
                    <div class="about">
                        <div class="grp">
                            <div class="title-sm">ABOUT</div>
                            <div class="icon-sm">TRAVEL</div>
                            <div class="icon-sm">EXPLORER</div>
                            <div class="icon-sm">NATURE</div>
                            <div class="icon-sm">SCIENCE</div>
                            <div class="icon-sm">DESTINATION</div>
                            <div class="icon-sm">HOTELS</div>
                            <div class="icon-sm">SCIENCE</div>
                        </div>
                    </div>
                    
                </div>

                <div class="footer-sm">
                    <div class="about">
                            <div class="grp">
                                <div class="title-sm">OUR TEAM</div>
                                <div class="icon-sm">ALMIVIANA NADIA ZAHRA</div>
                                <div class="icon-sm">ARYA DIRA HERNANDA</div>
                                <div class="icon-sm">HARIS ALFI FEBRIAWAN</div>
                                <div class="icon-sm">ZIDANE ALFARISI</div>
                            </div>
                        </div>
                        <div class="about">
                            <div class="grp">
                                <div class="title-sm">COUNTRY</div>
                                <div class="icon-sm">INDONESIAN</div>
                                <div class="icon-sm">MALAYSIA</div>
                                <div class="icon-sm">SINGAPORE</div>
                                <div class="icon-sm">BRUNEI</div>
                                <div class="icon-sm">THAILAND</div>
                                <div class="icon-sm">VIETNAM</div>
                                <div class="icon-sm">FILIPINA</div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </footer>
    <!--  ========== END CONTENT ========== -->

    <!-- JS -->
    <script src="js/script.js"></script>
    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>