<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, intial-scale=1">
        <title>PT.Perhutani Anugrah Kimia</title>
        <link  href="Admin/css/pak.png" rel="icon">
        <link rel="stylesheet" href="Admin/css/style.css" type="text/css">
        <link rel="stylesheet" href="Admin/css/slider.css" type="text/css">
        <script src="Admin/css/slider.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" type="text/css">
    </head>
    <body>
        <!-- header Website PT.Perhutani Anugrah Kimia -->
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
        <div class="slider">
            
        </div>
        <!-- header Website PT.Perhutani Anugrah Kimia -->
        <!-- Image commonfade -->
        {{-- <section >
          <div class="slider">
                <img src="Admin/css/Web PT PAK/Slide1.JPG">
                <img src="Admin/css/Web PT PAK/Slide2.JPG">
                <img src="Admin/css/Web PT PAK/Slide3.JPG">
                <img src="Admin/css/Web PT PAK/Slide4.JPG">
                <img src="Admin/css/Web PT PAK/Slide5.JPG">
          </div>
        </section> --}}
        <!-- Image commonfade -->
        <!-- berita -->
        <section>
            <div class="berita">
               <h1>Berita Terbaru</h1>
               <div class="garis">
                </div>
                 @foreach ($tampil_berita as $berita)
                <div class="card">
                    <div class="image">
                        <img src="{{asset('images/'.$berita->gambar_berita)}}" width="150px" height="200px">
                    </div>
                    <div class="title">
                        <h2 style="font-size: 16px"> Berita</h2>
                    </div>
                    <div class="des">
                        <p>{{$berita->Judul_berita}}</p>
                        <form action="/berita/{{$berita->id}}">
                            <button>Read More...</button>
                        </form>
                    </div>
                </div>
                @endforeach 
            </div>
        </section>
        <!-- berita -->
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
                            <a href=""><li>Kontak Kami</li></a>
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