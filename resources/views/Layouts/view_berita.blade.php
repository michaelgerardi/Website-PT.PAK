<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PT.PAK|Berita</title>
    <link rel="stylesheet" href="{{asset('Admin/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('Admin/css/slider.css')}}" type="text/css">
    <script src="Admin/css/slider.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" type="text/css">
</head>
<body>
    <div class="MediaSosial">
        <div class="container">
            <ul>
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li style="float: right"><a class="login" href="/login-Admin" >Login</a></li>
            </ul>
            
        </div>
    </div>
    <header>
        <nav class="navbar">
            <div class="logo">PT.Perhutani Anugerah Kimia</div>
            <ul>
                <li><a href="/PAK.co.id|Best Solusion For All">Home</a></li>
                <li><a href="news&info.html">Profil</a>
                    <ul>
                        <li><a href="/sambutan">Sambutan Direktur Utama</a></li>
                        <li><a href="/struktur">Sturktur Organisasi</a></li>
                        <li><a href="/sejarah">Sejarah</a></li>
                        <li><a href="/Misi_Visi">Visi dan Misi</a></li>
                    </ul>
                </li>
                <li><a href="/product">Product</a></li>
                <li><a href="about.html">About</a>
                    <ul>
                        <li><a href="/sertifikat_Halal">Sertifikat Halal</a></li>
                        <li><a href="/sertifikat_ISO">Sertifikat ISO 9001:2015</a></li>
                        <li><a href="/Contac_person">Kontak Kami</a></li>
                    </ul>
               </li>
            </ul>
        </nav>
    </header>
    <!-- link -->
    <!-- breadcrumb -->
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item">
                <a href="/PAK.co.id|Best Solusion For All" class="breadcrumb__link breadcrumb__link-active">PT.Perhutani Anugerah Kimia</a>
            </li>
            <li class="breadcrumbs__item">
                <a href="#" class="breadcrumb__link breadcrumb__link-active">Berita dan Infromasi</a>
            </li>
            @foreach($view_berita as $berita)
            <li class="breadcrumbs__item">{{$berita->Judul_berita}}</li>
            @endforeach
        </ul>
   
    <!-- breadcrumb -->
    <section>
        @foreach ($view_berita as $berita)
        <div class="link_berita">
            <h1>{{$berita->Judul_berita}}</h1>
                <ul class="admin_berita">
                    <li class="admin-berita-item">
                        <a href="">Admin Berita</a>
                    </li>
                    <li class="admin-berita-item">
                        <a href="">{{$berita->Tanggal_berita}}</a>
                    </li>
                    <li class="admin-berita-item">
                        <a href="">Berita dan Informasi</a>
                    </li>
                </ul>    

        <div class="gambar_berita">
            <img src="{{asset('images/'.$berita->gambar_berita)}}" alt="">
        </div>
        <div class="artikel_berita">
            <p>{{$berita->Artikel_berita}}</p>
        </div>
        @endforeach
      
    </section>
    <!-- link -->
     <!-- footer -->
     <div class="footer">
        <div class="footer-content">
            <div class="footer-section Perusahaan">
                <div class="images"></div>
                <h1>PT. Perhutani Anugrah Kimia</h1>
                <p>Wisma Perhutani, Jl. Gatot Subroto Kav 17 – 18
                    d/a Jl. Villa no. 1 Karet Semanggi, Setiabudi
                    Jakarta Selatan – 12930</p>
                <div class="contact">
                    <span><i class="fas fa-phone">&nbsp;: +62 21 22513406</i></span>
                    <span><i class="fas fa-fax">&nbsp;: +62 21 25982858</i></span>
                </div>
                
            </div>
            <div class="footer-section Product">
                <h2>Product</h2>
                <br>
                    <ul>
                        <a href="#"><li>Rosepak A-100</li></a>
                        <a href="#"><li>Rosepak C-130</li></a>
                        <a href="#"><li> Terpentine oil</li></a>
                    </ul>
            </div>
            <div class="footer-section Profil">
                <h2>Profil</h2>
                <br>
                    <ul>
                        <a href="#"><li>Sambutan Direktur Utama</li></a>
                        <a href="#"><li>Sejarah Perusahaan</li></a>
                        <a href="#"><li>Visi & Misi</li></a>
                        <a href="#"><li>Struktur Oganisasi</li></a>
                    </ul>
            </div>
            <div class="footer-section About">
                <h2>About</h2>
                <br>
                    <ul>
                        <a href=""><li>Sertifikat ISO 9001:2015</li></a>
                        <a href=""><li>Sertifikat Halal</li></a>
                        <a href=""><li>Contac Person</li></a>
                    </ul>
            </div>
        </div>

        <div class="footer-bottom">
        &copy;Michael Gerardi.A | Designed Website
        </div>
    </div>
   <!-- footer -->
</body>
</html>