<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ponsianus Jopi Tugas DPW</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('style2s.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>

    <!-- Bagian NAVIGASI -->
    <header>
        <a href="#" class="logo">BOBA GARDEN<span>.</span></a>
        <ul class="navigation">
            <li><a href="/">ADMIN WEB</a></li>
            <li><a href="home#about">TENTANG</a></li>
            <li><a href="home#menu">PRODUK</a></li>
            <li><a href="home#expert">GARDEN</a></li>
            <li class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">LOGOUT</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
            <li><a href="#service"> <i class="fas fa-mobile"></i></a></li>
        </ul>
    </header>

    <section class="menu" id="menu">
        <div class="title">
            <h2 class="tittleText"><span>DETAIL</span>PRODUK</h2>
        </div>

        <div id="content" class="right">
            <h2>{{ $produk->nama }}</h2>
            <div class="content_half left">
                <a rel="lightbox" href=""><img src="{{ asset($produk->foto) }}" alt="yellow flowers"></a>
            </div>
            <div class="content_half right">
                <table>
                    <tbody>
                        <tr>
                            <td width="130">Price:</td>
                            <td width="84">Rp. {{ $produk->harga }}</td>
                        </tr>
                        <tr>
                            <td>Availability:</td>
                            <td><strong>{{ $produk->stok }}</strong></td>
                        </tr>
                        <tr>
                            <td>Quantity</td>
                            <td><input type="text" value="1" size="6" maxlength="2"></td>
                        </tr>
                    </tbody>
                </table>
                <div class="cleaner h20"></div>
                <a href="shoppingcart.html" class="button">Add to Cart</a>
            </div>
            <div class="cleaner h40"></div>

            <h4>Product Description</h4>
            <p>
                {{ $produk->deskripsi }}
            </p>
            <div class="cleaner h40"></div>

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
