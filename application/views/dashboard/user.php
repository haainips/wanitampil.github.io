<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wanitampil Cloth</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="<?= base_url('asset'); ?>/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/ css2?family=Poppins:wght@500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
    
<!-- header section starts  -->

<header class="header" style="height: 100px;">

    <a href="#" class="logo">
        <img src="<?= base_url('asset') ?>/image/lg.png" alt="" style="height: 8rem">
    </a>

    <nav class="navbar" style="font-size: 10sp;">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#menu">products</a>
        <a href="#contact">contact</a>
    </nav>

    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </div>

    <div class="cart-items-container">
        <a href="#" class="btn">checkout now</a>
    </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home" style="background-image:url(<?= base_url('asset') ?>/image/hm.jpg) ">

    <div class="content">
        <h3 style="margin-top:8rem;">Tampilanmu menambah percaya dirimu</h3>
        <a href="#" class="btn">Upgrade Yourself</a>
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="<?= base_url('asset') ?>/image/ab.jpg" alt="">
        </div>

        <div class="content">
            <h3>Mengapa harus produk kami ?</h3>
            <p>Karena produk yang kami produksi dibuat dengan bahan yang berkualitas dan murah,tetapi tidak murahan.Produk kami mengangkat tema anak muda,
            yang membuat tampilan tidak monoton. </p>
            <p>Maka dari itu,pertimbangkanlah tampilan anda untuk menambah percaya dirimu.  </p>
            <a href="#" class="btn">learn more</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- menu section starts  -->

<section class="menu" id="menu">

    <h1 class="heading"> our <span>products</span> </h1>
    
    <div class="box-container">
    <?php 
    $i =1;
    foreach ( $katalog as $ktgr) { ?>

        <div class="box">
            <img src="<?= $ktgr["url"];  ?>" style="height: 20rem;"  alt="">
            <h3><?= $ktgr["nama"] ?></h3>
            <div class="price" style="font-size: 20px;">Rp<?= $ktgr["harga"];  ?></div>
            <a href="#" class="btn">Detail</a>
        </div>
    <?php $i++; } ?>
    </div>

</section>



<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <div class="row">

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d415.53761010526466!2d110.40909494089091!3d-7.759860269558747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a599bd3bdc4ef%3A0x6f1714b0c4544586!2sUniversitas%20Amikom%20Yogyakarta!5e0!3m2!1sid!2sid!4v1657617951392!5m2!1sid!2sid" allowfullscreen="" loading="lazy"></iframe>

        <form action="">
            <h3>get in touch</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="name">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" placeholder="email">
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <input type="number" placeholder="number">
            </div>
            <input type="submit" value="contact now" class="btn">
        </form>

    </div>

</section>

<!-- contact section ends -->



<!-- footer section starts  -->

<section class="footer">

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="links">
        <a href="#">home</a>
        <a href="#">about</a>
        <a href="#">menu</a>
        <a href="#">products</a>
        <a href="#">review</a>
        <a href="#">contact</a>
        <a href="#">blogs</a>
    </div>

    <div class="credit">created by <span>WANI TAMPIL</span> | all rights reserved</div>

</section>

<!-- footer section ends -->

















<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>