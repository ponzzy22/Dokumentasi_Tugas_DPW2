<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ponsianus Jopi Tugas DPW</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2s.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>

    <!-- Bagian NAVIGASI -->
    <header>
        <a href="#" class="logo">BOBA GARDEN<span>.</span></a>
        <ul>
            <a href="#login" class="logo">LOGIN DULU BUJANG</a>
        </ul>
    </header>


    <!-- Bagian BANNER -->
    <section class="banner" id="banner">
        <div class="content">
            <div class="texture">
                <p>SELAMAT DATANG DI BOBA GARDEN</p>
            </div>

            <p>TOKO BUNGA KETAPANG | FLORIST KETAPANG LENGKAP DAN MURAH</p>
            <a href="#login" class="btn">LOGIN</a>
            <a href="#login" class="btn">REGISTER</a>
        </div>
    </section>


    <!-- Bagian ABOUT -->
    <section class="about" id="about">
        <div class="row">
            <div class="col150">
                <h2 class="tittleText">TENTANG<span>KAMI</span></h2>
                <p>BOBA GARDEN didirikan pada tahun 2021. Saat ini, BOBA GARDEN merupakan retail ( Marketplace ) online
                    yang menyediakan aneka macam tanaman hias.
                    Produk tanaman hias berasal dari budidaya tumbuhan yang ditanam dikebun kami yang tersebar di
                    beberapa kota di Indonesia. Kami menawarkan aneka tanaman seperti tanaman hias, tanaman liar, dan
                    benih tanaman!
                    Hal inilah yang membuat kami menjadi tujuan utama transaksi tanaman online di Indonesia. Lebih dari
                    ribuan jenis tanaman, kami sangat ambisius dan akan terus berkembang. Kabar baiknya adalah, kami
                    memberikan Anda banyak sekali pilihan untuk tetap menjadi konsumen dan penjual bunga.
                    Kami adalah sarana penyedia bunga online yang diimbangi dengan teknologi terkini yang akan
                    memberikan Anda pengalaman berbelanja bunga online yang tak tertandingi.
                    Mengapa berbelanja di tempat lain ketika BOBA GARDEN adalah toko Bunga online yang melayani segala
                    kebutuhan Tanaman.
                    Hubungi kami melalui Facebook, ikuti Instagram untuk informasi terbaru seputar perkembangan bunga
                    online.</p>
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
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="contactForm">
                        <h3>Login</h3>
                        <div class="inputBox">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="inputBox">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="inputBox">
                            <input type="submit" value="masuk">
                        </div>
                    </div>
                </form>
            </div>

            <div class="rowo">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="contactForm">
                        <h3>Register</h3>

                        <div class="inputBox">
                            <input id="name" placeholder="Nama Lengkap" type="text"
                                class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="inputBox">
                            <input id="email" placeholder="Email" type="email"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="inputBox">
                            <input id="password" placeholder="Password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="inputBox">
                            <input id="password-confirm" placeholder="Password" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="inputBox">
                            <input type="submit" value="masuk">
                        </div>
                    </div>
                </form>

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
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            header.classList.toggle("sticky", window.scrollY > 0);
        });
    </script>

</body>

</html>
