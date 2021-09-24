<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Boba Garden</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2s.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

    <!-- Bagian NAVIGASI -->
    <header>
        <a href="#" class="logo">BOBA GARDEN<span>.</span></a>
        <ul class="navigation">
            <li><a href="#banner">BERANDA</a></li>
            <li><a href="#about">TENTANG</a></li>
            <li><a href="#menu">PRODUK</a></li>
            <li><a href="#expert">GARDEN</a></li>
            <li><a href="#login">LOGIN</a></li>
            <li><a href="#service"> <i class="fas fa-mobile"></i></a></li>
        </ul>
    </header>
    
   <!-- Bagian BANNER -->
    <section class="banner" id="banner">
        <div class="content">
            <div class="texture">
                <p>SELAMAT DATANG DI BOBA GARDEN</p>
            </div>
            
            <p>TOKO BUNGA KETAPANG | FLORIST KETAPANG LENGKAP DAN MURAH</p>
                <a href="produk.html" class="btn">ALL PRODUK</a>
                <a href="#login" class="btn">REGISTER</a>
                <a href="404.html" class="btn">KERANJANG</a>
        </div>
    </section>
 
    @yield('content')

<!-- Bagian Servis/SosialMedia -->
<section class="service">
    <div class="container">
        <div class="tittleText2"><span>SOCIAL</span>MEDIA</div>
        <div class="box">
            <div class="col-4">
                <div class="icon"> <a href="#"><i class="fab fa-facebook"></i></div>
                <h4>Facebook</h4>
            </div>
            <div class="col-4">
                <div class="icon"><i class="fab fa-youtube"></i></div>
                <h4>Youtube</h4>
            </div>
            <div class="col-4">
                <div class="icon"><i class="fab fa-instagram"></i></div>
                <h4>Instagram</h4>
            </div>
            <div class="col-4">
                <div class="icon"><i class="fab fa-twitter"></i></div>
                <h4>Twitter</h4></a>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="copyrightText">
        <p>Copyright 2022 <a href="#">BOBA GARDEN. All Right Reserved</a></p>
    </div>
</footer>

    

<script type="text/javascript">
window.addEventListener('scroll', function(){
    const header = document.querySelector('header');
    header.classList.toggle("sticky", window.scrollY > 0);
});
</script>

</body>
</html>