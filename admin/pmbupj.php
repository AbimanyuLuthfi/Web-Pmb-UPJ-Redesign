
    <?php
        include "koneksi.php";
        if (isset($_POST['nama'])) {
            $nama = $_POST['nama'];
            $querySQL = "INSERT INTO pmbupj (nama) VALUES ($nama)";
            $execSQL = mysqli_query($koneksi, $querySQL);
        }
    ?>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
            <div class="container">
            <!-- Nav Brand UPJ-->
            <div class="row"></div>
            <a class="navbar-brand" href="index.php"><img src="assets/upjlogo.png" alt="UpjLogo" style="max-width:100%;"></a>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                <ul class="navbar-nav">
                <li class="nav-item btn btn-outline-light text-white">
                    <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
                </li>
                <!-- Nav Item About -->
                <li class="nav-item btn btn-outline-light text-white">
                    <a class="nav-link" href="about.html">Jalur Seleksi</a>
                </li>
                <!-- Nav Item Fakultas -->
                <li class="nav-item dropdown btn btn-outline-light text-white">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                    data-mdb-toggle="dropdown" aria-expanded="false">
                    Informasi
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Program Studi</a></li>
                        <li><a class="dropdown-item" href="#">Pengumuman</a></li>
                        <li><a class="dropdown-item" href="#">Informasi Pendaftaran</a></li>
                    </ul>
                </li>
                </ul>
            </div>
            <!-- Form Pendaftaran -->
            <form class="d-flex">
                <!-- Button Pendaftaran -->
                <button class="btn btn-outline-dark text-white" type="submit">
                <a href="konfirmasipmb.php" style="text-decoration: none; color:black;">Pendaftaran</a>
                </button>
            </form>
            <!-- Hamburger -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            </div>
        </nav>

            <!-- Background image -->
            <div
            class="bg-image"
            style="
            background-image: url('assets/gallery751.png');
            height: 400px;
            background-repeat: no-repeat;
            ">
            <div class="container">
                <div class="row text-center justify-content-center">
                <div class="col-sm-3 border border-dark  rounded-pill ms-5 pointUPJ">
                    <h3>INTEGRITY</h3>
                </div>
                <div class="col-sm-3 border border-dark rounded-pill ms-5 pointUPJ">
                    <h3>PROFFESIONALISM</h3>
                </div>
                <div class="col-sm-3 border border-dark rounded-pill ms-5 pointUPJ">
                    <h3>ENTREPRENEURSHIP</h3>
                </div>
                </div>
            </div>
            </div>
            <!-- Background image -->
            
            

        <!--Berita Terbaru-->
        <div class="container mt-4">
            <div class="row">
                <h2 class="text-center" style="font-weight:bold; font-family: 'Poppins';
                font-size:30px;">Jalur Seleksi</h2>
                <h3 class="text-center mt-2 mb-3" style="font-family: 'Poppins';
                font-size:20px;">Daftar Jalur Seleksi Masuk</h3>
                <hr>
            </div>
        </div>
        <!--Berita Terbaru-->
        
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <!-- Pendaftaran Pertama -->
                    <div class="card border-dark mb-3 newsImage">
                    <img src="https://adv.kompas.id/wp-content/uploads/2021/06/Gedung-UPJ.png" class="imageCard" alt="pendaftaran_1">
                        <div class="card-body">
                            <h5 class="card-title">PMB - REGULER RAPOR</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto nemo quia, esse,</p>
                            <a href="konfirmasipmb.php" class="btn btn-primary">Daftar Sekarang</a>
                        </div>
                    <!-- Pendaftaran Pertama -->
                    </div>
                </div>

                <div class="col-sm-4">
                    <!-- Pendaftaran Pertama -->
                    <div class="card border-dark mb-3 newsImage">
                    <img src="https://adv.kompas.id/wp-content/uploads/2021/06/Gedung-UPJ.png" class="imageCard" alt="pendaftaran_1">
                        <div class="card-body">
                            <h5 class="card-title">PMB - REGULER PERINGKAT KELAS</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto nemo quia, esse,</p>
                            <a href="konfirmasipmb.php" class="btn btn-primary">Daftar Sekarang</a>
                        </div>
                    <!-- Pendaftaran Pertama -->
                    </div>
                </div>
                <div class="col-sm-4">
                    <!-- Pendaftaran Pertama -->
                    <div class="card border-dark mb-3 newsImage">
                    <img src="https://adv.kompas.id/wp-content/uploads/2021/06/Gedung-UPJ.png" class="imageCard" alt="pendaftaran_1">
                        <div class="card-body">
                            <h5 class="card-title">PMB - REGULER UJIAN SARINGAN</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto nemo quia, esse,</p>
                            <a href="konfirmasipmb.php" class="btn btn-primary">Daftar Sekarang</a>
                        </div>
                    <!-- Pendaftaran Pertama -->
                    </div>
                </div>
                <div class="col-sm-4">
                    <!-- Pendaftaran Pertama -->
                    <div class="card border-dark mb-3 newsImage2">
                    <img src="https://adv.kompas.id/wp-content/uploads/2021/06/Gedung-UPJ.png" class="imageCard" alt="pendaftaran_1">
                        <div class="card-body">
                            <h5 class="card-title">PMB-REGULER-ANAK KARYAWAN TETAP JAYA GRUP</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto nemo quia, esse,</p>
                            <a href="konfirmasipmb.php" class="btn btn-primary">Daftar Sekarang</a>
                        </div>
                    <!-- Pendaftaran Pertama -->
                    </div>
                </div>
                <div class="col-sm-4">
                    <!-- Pendaftaran Pertama -->
                    <div class="card border-dark mb-3 newsImage2">
                    <img src="https://adv.kompas.id/wp-content/uploads/2021/06/Gedung-UPJ.png" class="imageCard" alt="pendaftaran_1">
                        <div class="card-body">
                            <h5 class="card-title">PMB-REGULER-ANAK KARYAWAN TETAP JAYA GRUP</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto nemo quia, esse,</p>
                            <a href="konfirmasipmb.php" class="btn btn-primary">Daftar Sekarang</a>
                        </div>
                    <!-- Pendaftaran Pertama -->
                    </div>
                </div>
                <div class="col-sm-4">
                    <!-- Pendaftaran Pertama -->
                    <div class="card border-dark mb-3 newsImage2">
                    <img src="https://adv.kompas.id/wp-content/uploads/2021/06/Gedung-UPJ.png" class="imageCard" alt="pendaftaran_1">
                        <div class="card-body">
                            <h5 class="card-title">PMB-ANAK KARYAWAN TETAP YAYASAN PENDIDIKAN JAYA</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto nemo quia, esse,</p>
                            <a href="konfirmasipmb.php" class="btn btn-primary">Daftar Sekarang</a>
                        </div>
                    <!-- Pendaftaran Pertama -->
                    </div>
                </div>
                <div class="col-sm-4">
                    <!-- Pendaftaran Pertama -->
                    <div class="card border-dark mb-3 newsImage">
                    <img src="https://adv.kompas.id/wp-content/uploads/2021/06/Gedung-UPJ.png" class="imageCard" alt="pendaftaran_1">
                        <div class="card-body">
                            <h5 class="card-title">PMB - EARLY BIRD</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto nemo quia, esse,</p>
                            <a href="konfirmasipmb.php" class="btn btn-primary">Daftar Sekarang</a>
                        </div>
                    <!-- Pendaftaran Pertama -->
                    </div>
                </div>


                <div class="col-sm-4">
                    <!-- Berita Kedua -->
                    <div class="card border-dark mb-3 newsImage">
                    <img src="https://adv.kompas.id/wp-content/uploads/2021/06/Gedung-UPJ.png" class="imageCard" alt="pendaftaran_1">
                    <div class="card-body">
                        <h5 class="card-title">PMB - REGULER RAPOR</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto nemo quia, esse,</p>
                        <a href="konfirmasipmb.php" class="btn btn-primary">Daftar Sekarang</a>
                    </div>
                    <!-- Berita Kedua -->
                    </div>
                </div>
                <div class="col-sm-4">
                    <!-- Berita Kedua -->
                    <div class="card border-dark mb-3 newsImage">
                    <img src="https://adv.kompas.id/wp-content/uploads/2021/06/Gedung-UPJ.png" class="imageCard" alt="pendaftaran_1">
                    <div class="card-body">
                        <h5 class="card-title">PMB - EARLY BIRD KELAS XI</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto nemo quia, esse,</p>
                        <a href="konfirmasipmb.php" class="btn btn-primary">Daftar Sekarang</a>
                    </div>
                    <!-- Berita Kedua -->
                    </div>
                </div>
                
            </div>
        </div>

        <!--Footer-->
        <footer class="footer-distributed">

            <div class="footer-left">
                <img src="https://www.upj.ac.id/web/templates/assets/images/logo-footer.png" class="hover-zoom">
            <h2 class="text-white">Universitas Pembangunan Jaya</h2>
    
            <p class="footer-links">
                <a href="#">Home</a>
                |
                <a href="#">About</a>
                |
                <a href="#">Contact Us</a>
                |
                <a href="#">Fakultas</a>
            </p>
    
            <p class="footer-company-name">© 2017 - Universitas Pembangunan Jaya</p>
            </div>
    
            <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>B7/P, Jl. Cendrawasih Raya, Sawah Baru, Ciputat,</span>
                    South Tangerang City, Banten 15413</p>
            </div>
    
            <div>
                <i class="fa fa-phone"></i>
                <p> (021) 7455555</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="https://www.upj.ac.id">info@upj.ac.id</a></p>
            </div>
            </div>
            <div class="footer-right">
            <p class="footer-company-about">
                <span>About Pembangunan Jaya University</span>
                We offer training and skill building courses across Technology, Design, Management, Science and Humanities.</p>
            <div class="footer-icons">
                <a href="https://www.facebook.com/universitas.pembangunan.jaya"><i class="fa fa-facebook"></i></a>
                <a href="https://twitter.com/upj_bintaro"><i class="fa fa-twitter"></i></a>
                <a href="https://www.instagram.com/upj_bintaro/"><i class="fa fa-instagram"></i></a>
                <a href="https://www.youtube.com/user/UPJBIntaro"><i class="fa fa-youtube"></i></a>
            </div>
            </div>
        </footer>