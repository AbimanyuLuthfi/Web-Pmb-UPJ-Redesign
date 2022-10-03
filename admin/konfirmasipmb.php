<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>

    <!--Poppins Font-->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleInformatika.css">
    <link rel="stylesheet" href="stylePendaftaran.css">
    <link rel="stylesheet" href="footer.css">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</head>
<body>
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
                <a href="pendaftaran.html" style="text-decoration: none; color:black;">Pendaftaran</a>
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
        background-image: url('https://www.upj.ac.id/upload/module/gallery3/gallery82.jpg');
        height: 400px;
        "
    ></div>
    <!-- Background image -->

    <!--Prosedur Pendaftaran-->
        <div class="container-fluid mt-3">
            <h2 class="text-center" style="font-weight: bold;font-family: 'Poppins';font-size: 38px; margin-top:10px;">Prosedur Pendaftaran</h2>
            <hr>
            <div class="prosedur">
                <h4>Prosedur dan Persyaratan Pendaftaran:</h4>
                <p style="font-weight: bold;">1. Proses Pendaftaran</p>
                <p>Pendaftaran online klik link berikut, <a href="http://upj.ac.id/pmb">Pendaftaran Online</a></p>
                <p style="font-weight: bold;">Biaya pendaftaran sebesar Rp 200.000,- (dua ratus ribu rupiah)</p>
                <p>Pembayaran dapat dilakukan melalui Shopee, Tokopedia, dan BNI dengan nomor VA yang tertera pada aplikasi MyUPJ saat pendaftaran.</p>
                <p style="font-weight: bold;">3. Konfirmasi
                    Kirim bukti pembayaran disertai nama calon mahasiswa melalui email ke info@upj.ac.id</p>
                <p style="font-weight: bold;">4. Proses Seleksi</p>
                <p>Panitia Penerimaan Mahasiswa Baru (PMB) akan menghubungi calon mahasiswa melalui telepon atau email mengenai proses seleksi melalui jalur rapor atau Ujian Saringan Masuk UPJ.
                <br>
                (*tanpa bukti setoran, berkas tidak dapat diproses)</p>
                <p style="font-weight: bold;">5. Lokasi Kampus</p>
                <p>Kampus UPJ sangat MUDAH diakses melalui JORR, lanjutkan ke toll Bintaro / BSD, keluar di Gerbang Keluar Pondok Ranji / Bintaro (Ambil beberapa lajur / gerbang di sebelah kiri), dan belok kiri ambil arah Bintaro Jaya Xchange. Lewati flyover mengarah Sawah Baru, lewati jembatan dan Kampus UPJ terletak di kiri jalan.
                    <br>
                    Klik untuk lihat/download <a href="https://www.upj.ac.id/userfiles/files/img-map-upj-denah.jpg">Denah Lokasi</a>.
                </p>
            </div>
        </div>
    <!--Prosedur Pendaftaran-->

    <!-- Pendaftaran -->
    <div class="container-fluid bg-light mt-4">
        <!-- Heading -->
        <h2 class="text-center" style="font-weight: bold;font-family: 'Poppins';font-size: 38px; margin-top:10px;">Pendaftaran</h2>
        <!-- Deskripsi -->
        <p class="text-center">Silahkan Lengkapi Biodata Anda Sebagai Calon Mahasiswa Baru Universitas Pembangunan Jaya</p>
        <hr>
        <!--Peta UPJ-->
        <div class="dv">
            
        </div>
        <div class="row">
            <!-- Forumulir -->
            <div class="col-sm-9">
                <form name="contact-form" action="mail.php" method="post">
                    <!--Nama dan Email-->
                    <div class="row"> 
                        <!-- Nama -->
                        <div class="col-sm-6">
                            <div class="form-floating mt-3 mb-3">
                                <input 
                                class="form-control" 
                                type = "text" 
                                id = "name" 
                                name="name" 
                                placeholder="Enter Name">
                                <label for = "nama">Nama Lengkap</label>
                            </div>
                        </div>
                        
                        <!-- Email -->
                        <div class="col-sm-6">
                            <div class="form-floating mt-3 mb-3">
                                <input 
                                class="form-control" 
                                type = "text" 
                                id = "Email" 
                                name="Email" 
                                placeholder="Enter Email">
                                <label for = "Email">Email</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- Subject -->
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Jenis Kelamin</option>
                                    <option value="1">Laki - Laki</option>
                                    <option value="2">Perempuan</option>
                                </select>
                        </div>
                        <div class="col-sm-6">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Agama</option>
                                <option value="1">Islam</option>
                                <option value="2">Hindu</option>
                                <option value="3">Budha</option>
                                <option value="4">Kristen Protestan</option>
                                <option value="5">Kristen Katolik</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-floating mt-3 mb-3">
                                <input 
                                class="form-control" 
                                type = "text" 
                                id = "noTelp" 
                                name="noTelp" 
                                placeholder="Enter noTelp">
                                <label for = "Telp">No. Telp</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <select class="form-select mt-3 mb-3 p-3" aria-label="Default select example">
                                <option selected>Kota</option>
                                <option value="1">Jakarta Barat</option>
                                <option value="2">Jakarta Pusat</option>
                                <option value="3">Jakarta Selatan</option>
                                <option value="4">Kristen Timur</option>
                                <option value="5">Kristen Utara</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-floating mb-3">
                                <input 
                                class="form-control" 
                                type = "text" 
                                id = "tinggiBadan" 
                                name="tinggiBadan" 
                                placeholder="Enter TB">
                                <label for = "nama">Tinggi Badan (Cm)</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-floating mb-3">
                                <input 
                                class="form-control" 
                                type = "text" 
                                id = "beratBadan" 
                                name="beratBadan" 
                                placeholder="Enter BB">
                                <label for = "nama">Berat Badan (Kg)</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <select class="form-select p-3" aria-label="Default select example">
                                <option selected>Golongan Darah</option>
                                <option value="1">O</option>
                                <option value="2">A</option>
                                <option value="3">B</option>
                                <option value="4">AB</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-floating  mb-3">
                                <textarea
                                class="form-control" 
                                style="height: 120px;"
                                rows = "5" 
                                id = "message" 
                                name="message" 
                                placeholder="Leave a comment here"></textarea>
                                <label for = "message">Alamat</label>
                            </div>
                        </div>
                    </div>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Submit
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Verifikasi Data Diri Anda</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            Apakah anda yakin dengan biodata yang sudah anda isi???
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">
                                Kembali
                            </button>
                            <button type="button" class="btn btn-primary">
                                <a href="homePage.html" style="text-decoration: none; color: white;">Simpan</a>
                            </button>
                            </div>
                        </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Peta, No-telp, Email -->
            <div class="col-sm-3">
                <!-- Peta -->
                <div class="row p-4 text-center">
                    <i class="fa fa-map-marker" style="font-size:36px"></i>
                    <p>UPJ</p>
                </div>
                <div class="row p-4 mt-4 text-center">
                    <i class="fa fa-phone" style="font-size:36px"></i>
                    <p>(021) 7455555</p>
                </div>
                <div class="row p-4 mt-4 text-center">
                    <i class="fa fa-envelope" style="font-size:36px"></i>
                    <p>info@upj.ac.id</p>
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
            <a href="#">JSDP</a>
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
    <!-- footer -->
</body>
</html>