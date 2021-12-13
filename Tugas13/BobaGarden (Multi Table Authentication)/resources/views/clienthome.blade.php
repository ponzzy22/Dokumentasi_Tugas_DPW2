<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Boba Garden</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('style2s.css') }}">
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
 

    <!-- Bagian ABOUT -->
    <section class="about" id="about">
        <div class="row">
            <div class="col150">
                <h2 class="tittleText">TENTANG<span>KAMI</span></h2>
                <p>
                    @if (Auth::check())
                        {{ request()->user()->name }}
                    @elseif(Auth::guard('pembeli')->check())
                    {{ Auth::guard('pembeli')->user()->name }}
                    <br>Pembeli
                    @elseif(Auth::guard('penjual')->check())
                    {{ Auth::guard('penjual')->user()->name }}
                    <br>Penjual
                    @else
                        Silahkan Login
                    @endif
                </p>
            </div>

            <div class="col150">
                <div class="imgBx">
                    <img src="pict/home.jpg" alt="">
                </div>
            </div>
        </div>
    </section>


    <!-- Bagian PRODUK KAMI -->
    <section class="menu" id="menu">
        <div class="title">
        <h2 class="tittleText"><span>PRODUK</span>KAMI</h2>
        </div>

        <div class="content">
            <div class="box">
                <div class="imgBx">
                    <a href="#"><img src="pict/bunga.gif" alt="">
                </div>
                <div class="text">
                   <h3>Tanaman Hias Bunga</h3></a>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <a href="#"><img src="pict/daun.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Tanaman Hias Daun</h3></a>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <a href="#"><img src="pict/buah.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Tanaman Hias Buah</h3></a>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <a href="#"><img src="pict/akar.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Tanaman Hias Akar</h3></a>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <a href="#"><img src="pict/batang.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Tanaman Hias Batang</h3></a>
                </div>
            </div>
            <div class="box">
                <div class="imgBx">
                    <a href="#"><img src="pict/gantung.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Tanaman Hias Gantung</h3></a>
                </div>
            </div>
            <div class="tittle">
                <a href="#" class="btn">TAMPILKAN SEMUA</a>
            </div>
        </div>
    </section>


    <!-- Bagian GARDEN -->
    <section class="expert" id="expert">
        <div class="title">
        <h2 class="tittleText">DAFTAR<span>KEBUN</span></h2>
        </div>

        <div class="content">
            <div class="box">
                <div class="imgBx">
                   <a href="#"><img src="pict/g2.jpg" alt=""></a>
                </div>
                <div class="text">
                    <h3>METEOR GARDEN (Padang12)</h3>
                </div>
            </div>
           
            <div class="box">
                <div class="imgBx">
                   <a href="#"><img src="pict/g3.jpg" alt=""></a>
                </div>
                <div class="text">
                    <h3>TAMAN KOTA (Bikini Bottom)</h3>
                </div>
            </div>
            
            <div class="box">
                <div class="imgBx">
                   <a href="#"><img src="pict/g4.jpg" alt=""></a>
                </div>
                <div class="text">
                    <h3>HUTAN KOTA (Makam Pahlawan)</h3>
                </div>
            </div>
    </section>


    <!-- Bagian LOGIN DAN REGISTER -->
    <section class="login" id="login">
        <div class="row">
            <div class="col150">
                <div class="tittleText1"><span>LOGIN</span> ATAU<span> REGISTER</span></div>
                <div class="contactForm">
                    <h3>Login</h3>
                  <div class="inputBox">
                      <input type="text" placeholder="Id">
                  </div>
                  <div class="inputBox">
                      <textarea placeholder="Pasword"></textarea>
                  </div>
                  <div class="inputBox">
                      <input type="submit" value="masuk">
                  </div>
            </div>
        </div>

        <div class="rowo">
                  <div class="contactForm">
                    <h3>Register</h3>
                  <div class="inputBox">
                      <input type="text" placeholder="Nama Depan">
                  </div>
                  <div class="inputBox">
                      <input type="text" placeholder="Nama Belakang">
                  </div>
                  <div class="inputBox">
                    <input type="text" placeholder="Email">
                </div>
                <div class="inputBox">
                    <input type="text" placeholder="Alamat">
                </div>
                  <div class="inputBox">
                      <input type="text" placeholder=" No Telephone">
                  </div>
                  <div class="inputBox">
                      <textarea placeholder="Pasword"></textarea>
                  </div>
                  <div class="inputBox">
                      <input type="submit" value="masuk">
                  </div>
        </div>
        
    </section>


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