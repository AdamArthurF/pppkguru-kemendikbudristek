@extends('layouts.template-front')

@section('content')
    
    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100" id="home">
        <img src="{{ asset('assets-front/img/bg-top-right.png') }}" class="olay-top-right">
        <img src="{{ asset('assets-front/img/bg-left-lg.png') }}" class="olay-top-left">
        <div class="container bg-right-sm bg-left-lg cust-top">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="title-heading mt-4">
                        <h1 class="heading cust"><span class="text-primary-darker">{{ $deskripsi->program }}</span></h1>
                        <!-- <img src="https://appt.demoo.id/guru_blast/assets-front/img/custom/guru-dark.png" style="width:50%"> -->
                        <p class="para-desc text-muted" style="padding-top:15px;text-align: justify;">{!! $deskripsi->informasi_singkat !!}</p>
                        <div class="preview-video mt-4 pt-2">
                            <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="m-1 lightbox">
                                <i class="fas fa-play btn btn-icon btn-secondary-light rounded-circle" style="padding: 0 12px;"></i>
                                <span class="text-secondary-light fst-italic align-middle ms-2">Lihat Video</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 d-none d-lg-block mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <img src="{{ asset('assets-front/img/custom/Ilustrasi-Guru-Inspiratif-Header.png') }}" alt="" class="w-100">
                </div>
            </div>
        </div>
    </section>
    <!-- Hero End -->
    
    <!-- Counter Suara Start -->
    <section class="section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="features text-center">
                        <div class="position-relative d-inline-block">
                            <img src="{{ asset('assets-front/img/custom/Icon-Jumlah-Suara-Masuk.png') }}" class="img-3" alt="">
                        </div>

                        <div class="content mt-4">
                            <h3 class="text-secondary mb-0">{{ round($jml_suara) }}</h3>
                            <h5 class="text-uppercase text-muted mb-0">Jumlah Suara Masuk</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="features text-center">
                        <div class="position-relative d-inline-block">
                            <img src="{{ asset('assets-front/img/custom/Icon-Presentase-Suara-Masuk.png') }}" class="img-3" alt="">
                        </div>

                        <div class="content mt-4">
                            <h3 class="text-secondary mb-0">{{ $persen_suara }}%</h3>
                            <h5 class="text-uppercase text-muted mb-0">Prosentase Suara Masuk</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="features text-center">
                        <div class="position-relative d-inline-block">
                            <img src="{{ asset('assets-front/img/custom/Icon-Total-Partisipan.png') }}" class="img-3" alt="">
                        </div>

                        <div class="content mt-4">
                            <h3 class="text-secondary mb-0">{{ round($jml_partisipan) }}</h3>
                            <h5 class="text-uppercase text-muted mb-0">Total Partisipan</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mt-5">
                    <div class="features text-center">
                        <div class="position-relative d-inline-block">
                            <img src="{{ asset('assets-front/img/custom/Prosentase Laki-laki.png') }}" class="img-3" alt="">
                        </div>

                        <div class="content mt-4">
                            <div class="data-responden row">
                                <div class="col-md-6">
                                    <h3 class="text-secondary mb-0">
                                        <span>{{ round($partisipan_lelaki) }}</span>
                                    </h3>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="text-secondary mb-0">
                                        <span>{{ round($partisipan_lelaki/$jml_partisipan*100, 2) }}
                                            <span class="percent-respondent">%</span></span>
                                    </h3>
                                </div>
                            </div>
                            <h5 class="text-uppercase text-muted mb-0">Jumlah dan Prosentasi <br> Responden Laki-Laki</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mt-5">
                    <div class="features text-center">
                        <div class="position-relative d-inline-block">
                            <img src="{{ asset('assets-front/img/custom/Prosentase Perempuan.png') }}" class="img-3" alt="">
                        </div>
                        
                        <div class="content mt-4">
                            <div class="data-responden row">
                                <div class="col-md-6">
                                    <h3 class="text-secondary mb-0">
                                        <span>{{ round($partisipan_perempuan) }}</span>
                                    </h3>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="text-secondary mb-0">
                                        <span>{{ round($partisipan_perempuan/$jml_partisipan*100, 2) }}
                                            <span class="percent-respondent">%</span></span>
                                    </h3>
                                </div>
                            </div>
                            <h5 class="text-uppercase text-muted mb-0">Jumlah dan Prosentasi <br> Responden Perempuan</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Suara End -->

    <section class="section">
        <div class="container bg-right-sm bg-left-lg cust-top">
            <div class="row align-items-center">
                <div class="col-lg-4 d-none d-lg-block mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <img src="{{ asset('assets-front/img/custom/4-FGD-Kunci-Keberhasilan-Guru-Inspiratif.png') }}" alt="" class="w-100">
                </div>

                <div class="col-lg-8 ps-md-5">
                    <div class="title-heading mt-4">
                        <h1 class="heading cust">Mengapa diadakan program<br>
                            <span class="text-primary-darker">Guru Inspiratif ?</span></h1>
                        <p class="para-desc text-muted">
                            <ul class="ps-4 pt-2">
                                @foreach($alasan as $al)
                                <li>{{ $al->alasan }}</li>
                                @endforeach
                            </ul>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="custom-shape-divider-bottom-1621254498">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>
    <!-- Main Content Start -->
    <section class="section" id="tata-cara">
        <div class="container bg-100-intersect">
            <div class="section-title text-center py-4">
                <h1>Bagaimana <span class="text-primary-darker">Tahapannya?</span></h1>
                <!-- <p class="text-uppercase">Berikut adalah tahapan yang dilaksanakan pada Program ini</p> -->
            </div>
            
            <div class="row align-items-center my-5">
                <div class="col-md-3 order-1 text-center order-md-1 mb-2">
                    <div class="main-image">
                        <img src="{{ asset('assets-front/img/custom/1-Survey-Suara-Murid.png') }}" class="img-fluid img-tahap" alt="">
                    </div>
                </div>
                <div class="col-md-9 order-1 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title title-left me-lg-5">
                        <h2 class="text-secondary title">Tahap 1 - Survei Suara Murid</h2>
                            <p class="text-muted">
                                <p>Tujuan</p>
                                <ul>
                                    <li>Mendapatkan sudut pandang murid tentang guru yang menginspirasi perubahan dalam diri murid</li>
                                    <li>Mendapatkan sosok guru inspiratif yang telah terbukti menginspirasi perubahan dalam diri murid</li>
                                </ul>
                                <p>Ketentuan</p>
                                <ul>
                                    <li>Penyebaran dan pengumpulan survei menggunakan teknologi Robot WhatsApp</li>
                                    <li>Pemilihan responden berdasarkan <i>Proportional Random Sampling</i></li>
                                    <li>Survei diberikan kepada murid kelas akhir pada setiap jenjang</li>
                                    <li>Hasil survei akan dipilih 5 guru per sekolah yang paling inspiratif dari sudut pandang murid</li>
                                </ul>
                                <!-- <h5>Instrumen Survey Suara Murid</h5>
                                <p>Survei ditujukan kepada</p>
                                <ul>
                                    <li>Murid kelas 12 yang sudah lulus</li>
                                    <li>Murid kelas 11 yang akan naik kelas 12</li>
                                </ul> -->
                                <!-- <p>Kami dari Ditjen GTK Kemendikbud sedang melakukan survei guru inspiratif. Kami mohon, kamu menjawab pertanyaan di bawah ini dengan jujur.</p>
                                <ul>
                                    <li>Siapa guru paling inspiratif menurut kamu?(muncul daftar guru di sekolah tersebut)</li>
                                    <li>Apa alasan kamu memilih guru tersebut sebagai guru yang paling menginspirasi kamu? </li>
                                    <div><a href="javascript:void(0)" type="button" class="btn btn-outline-primary btn-sm my-1" data-bs-toggle="modal" data-bs-target="#modaltable">Lihat data</a></div>
                                    <li>Apa perubahan yang kamu rasakan atau peroleh akibat dari inspirasi guru tersebut?</li>
                                    <div><a href="javascript:void(0)" type="button" class="btn btn-outline-primary btn-sm my-1" data-bs-toggle="modal" data-bs-target="#modaltable">Lihat data</a></div>
                                </ul> -->
                            </p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center my-5">
                <div class="col-md-9 order-2 order-md-2 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title me-lg-5">
                        <h2 class="text-secondary title">Tahap 2 - Survei Suara Guru</h2>
                        <p class="text-muted">
                            <p>Tujuan</p>
                            <ul>
                                <li>Melakukan konfirmasi hasil survei sudut pandang murid dengan penilaian guru dan rekan sejawat</li>
                                <li>Mendapatkan konfirmasi dari sudut pandang guru terhadap hasil survei suara murid</li>
                            </ul>
                            <p>Ketentuan</p>
                            <ul>
                                <li>Penyebaran dan pengumpulan survei menggunakan teknologi Robot WhatsApp</li>
                                <li>Responden adalah seluruh guru dari sekolah yang telah mengikuti survei Suara Murid</li>
                                <li>Responden guru mengisi survei untuk melakukan konfirmasi 5 (lima) kandidat guru hasil survei suara murid</li>
                                <li>Hasil survei suara guru dan suara murid akan digabungkan untuk mendapatkan satu guru paling inspiratif dari sekolah tersebut</li>
                            </ul>
                            <!-- <h5>Instrumen Survey Suara Murid</h5>
                            <p>Direktorat Jenderal Guru dan Tenaga Kependidikan, Kementerian Pendidikan dan Kebudayaan  sedang melakukan survey Guru Inspiratif. Survei ditujukan kepada sesama kolega guru</p>
                            <p>Jawablah pertanyaan ini dengan memilih salah satu jawaban yang sesuai dengan pilihan anda. Tidak ada jawaban yang benar atau salah. Jawaban anda akan dirahasiakan dan digunakan sesuai dengan etika dan kepentingan penelitian</p>
                            <ul>
                                <li>Pilihlah guru teman sejawat Bapak/Ibu/saudara yang paling menginspirasi ? (Muncul pilihan nama guru)</li>
                                <li>Apa alasan Anda memilih teman sejawat tersebut sebagai guru yang paling menginspirasi?</li>
                                <div><a href="javascript:void(0)" type="button" class="btn btn-outline-primary btn-sm my-1" data-bs-toggle="modal" data-bs-target="#modaltable">Lihat data</a></div>
                                <li>Apa perubahan yang kamu rasakan atau peroleh akibat dari inspirasi guru tersebut?</li>
                                <div><a href="javascript:void(0)" type="button" class="btn btn-outline-primary btn-sm my-1" data-bs-toggle="modal" data-bs-target="#modaltable">Lihat data</a></div>
                            </ul> -->
                        </p>
                    </div>
                </div>
                
                <div class="col-md-3 order-1 text-center order-md-1 mb-2">
                    <img src="{{ asset('assets-front/img/custom/2-Survey-Konfirmasi-Suara-Guru.png') }}" class="img-fluid img-tahap" alt="">
                </div>
            </div>
            <div class="row align-items-center my-5">
                <div class="col-md-9 order-2 order-md-2 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title me-lg-5">
                        <h2 class="text-secondary title">Tahap 3 - Survei Penilaian Diri</h2>
                        <p class="text-muted">
                            <p>Tujuan</p>
                            <ul>
                                <li>Melakukan identifikasi faktor-faktor yang menjadi penentu keberhasilan sebagai guru inspiratif</li>
                                <li>Mendapatkan konfirmasi dari guru inspiratif terhadap hasil survei suara murid yang sudah dikonfirmasi rekan sejawat</li>
                            </ul>
                            <p>Ketentuan</p>
                            <ul>
                                <li>Penyebaran dan pengumpulan survei menggunakan teknologi Robot WhatsApp dan website</li>
                                <li>Responden adalah guru paling inspiratif terpilih pada setiap sekolah sasaran</li>
                                <li>Responden diminta mengisi survei penilaian diri untuk melakukan konfirmasi terhadap hasil survei murid dan hasil survei guru</li>
                                <li>Responden diminta mengisi deskripsi diri melalui website</li>
                                <li>Hasil survei penilaian diri digunakan untuk memilih 3 (tiga) guru paling inspiratif di provinsi</li>
                            </ul>
                            <!-- <h5>Instrumen Survey Suara Murid</h5>
                            <ul>
                                <li>Pilihlah guru teman sejawat Bapak/Ibu/saudara yang paling menginspirasi ? (Muncul pilihan nama guru)</li>
                                <li>Apa alasan Anda memilih teman sejawat tersebut sebagai guru yang paling menginspirasi?</li>
                                <div><a href="javascript:void(0)" type="button" class="btn btn-outline-primary btn-sm my-1" data-bs-toggle="modal" data-bs-target="#modaltable">Lihat data</a></div>
                                <li>Apa perubahan yang kamu rasakan atau peroleh akibat dari inspirasi guru tersebut?</li>
                                <div><a href="javascript:void(0)" type="button" class="btn btn-outline-primary btn-sm my-1" data-bs-toggle="modal" data-bs-target="#modaltable">Lihat data</a></div>
                            </ul> -->
                        </p>
                    </div>
                </div>
                
                <div class="col-md-3 order-1 text-center order-md-1 mb-2">
                    <img src="{{ asset('assets-front/img/custom/3-Survey-Penilaian-Diri.png') }}" class="img-fluid img-tahap" alt="">
                </div>
            </div>
            
            <!-- <div class="row align-items-center my-5">
                <div class="col-md-9 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title title-right me-lg-5">
                        <h2 class="text-secondary title">Lorem ipsum dolor sit amet consectetur adipisicing.</h2>
                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum nisi earum molestias sequi laudantium necessitatibus iste ad repudiandae saepe quibusdam? Quisquam reiciendis laborum quos sunt, repudiandae nam excepturi doloremque cupiditate!</p>
                    </div>
                </div>
                <div class="col-md-3 order-1 text-center order-md-2 mb-2">
                    <img src="{{ asset('assets-front/img/img-dummy-brown.png') }}" class="img-fluid" alt="">
                </div>
            </div> -->
        </div>
    </section>
    <div class="custom-shape-divider-top-1621255370">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>


    <!-- Main Content End -->
    <div id="tester" class="modal">
        <h2 class="text-secondary">Alur Pengambilan Data</h2>
        <div class="wrapper">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam blanditiis tempora, molestias ex sed reiciendis enim dignissimos impedit incidunt natus, quibusdam, doloremque optio provident! Velit, magnam quas. Ex, asperiores dicta!</div>
        <a href="#" rel="modal:close">Close</a>
    </div>
    <!-- Info Live Data Start -->
    <section class="section" id="info-data">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="lh-11"><span class="text-secondary-light">Live Data</span> yang terus diperbaharui</h2>
                    <p>{{ $deskripsi->informasi_live_data }}</p>
                </div>
                <div class="col-md-4 btn-col">
                    <a type="button" class="btn btn-custnya" href="{{ route('data') }}"><span>Lihat Data</span><i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Info Live Data End -->

    <!-- Modal Contoh-->
    <div class="modal fade" id="modaltable" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
            <h5 class="modal-title" id="exampleModalLabel">Judul Data</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body cust">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                        </tr>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                        </tr>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                        </tr>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                        </tr>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                        </tr>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                        </tr>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                        </tr>
                    </tbody>
                    </table>
            </div>
        </div>
        </div>
    </div>
    

@endsection
