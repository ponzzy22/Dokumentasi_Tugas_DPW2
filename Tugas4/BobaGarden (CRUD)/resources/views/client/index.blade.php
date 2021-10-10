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
        <a href="index.html" class="logo">BOBA GARDEN<span>.</span></a>
        <ul class="navigation">
            <li><a href="index.html">BERANDA</a></li>
            <li><a href="#">TENTANG</a></li>
            <li><a href="#">PRODUK</a></li>
            <li><a href="#">GARDEN</a></li>
            <li><a href="#">LOGIN</a></li>
            <li><a href="#"> <i class="fas fa-mobile"></i></a></li>
        </ul>
    </header>

    <!-- Bagian All Produk -->
    <section class="all" id="all">
        <div class="title">
        <h2 class="tittleText">SEMUA<span>PRODUK</span></h2>
        </div>

    
    <div class="product-center container">
        @foreach ($data as $produk )
        <div class="product">
          <div class="product-header">
            <img src="pict/a.jpg" alt="product">
          </div>
          <div class="product-footer">
            <h3>{{ $produk->nama }}</h3>
            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="product-price">
              <h4>{{ $produk->harga }}</h4>
            </div>
          </div>
          <ul>
            <li>
              <a href="{{url('produk', $produk->id)}}">
                <i class="far fa-eye"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="far fa-heart"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fas fa-sync"></i>
              </a>
            </li>
          </ul>
        </div>
        @endforeach
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