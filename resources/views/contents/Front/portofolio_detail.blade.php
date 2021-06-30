@extends('layouts.template-front')

@section('content')
    
    <section class="bg-half bg-light d-table w-100 bg-bread" style="background-image: url('{{ asset('assets/img/custom/mufid-majnun-CAtdHwUK3qc-unsplash.jpg') }}');">
        <div class="olay-dark"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h4 class="title text-white"> Infografis </h4>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <!-- <ul class="breadcrumb bg-white rounded shadow mb-0 cust">
                                    <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                                    <i class="fa fa-chevron-right mx-2 small"></i>
                                    <li class="breadcrumb-item active" aria-current="page">Infografis</li>
                                </ul> -->
                            </nav>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
        
    <section class="section">
        <img src="{{ asset('assets/img/bg-top-right.png') }}" class="olay-top-right-inf">
        <img src="{{ asset('assets/img/bg-left-lg.png') }}" class="olay-top-left-inf">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <img src="{{ asset('assets/images/work/single.jpg') }}" class="img-fluid rounded" alt="">
                </div>

                <div class="col-md-10 mt-4 pt-2">
                    <div class="bg-light rounded p-4">
                        <p class="text-muted fst-italic mb-0">" One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others - which creates a distinct visual impression. Moreover, in Latin only words at the beginning of sentences are capitalized; this means that Lorem Ipsum cannot accurately represent, for example, German, in which all nouns are capitalized. Thus, Lorem Ipsum has only limited suitability as a visual filler for German texts. If the fill text is intended to illustrate the characteristics of different typefaces, it sometimes makes sense to select texts containing the various letters and symbols specific to the output language. "</p>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mt-4 pt-2">
                            <img src="{{ asset('assets/images/work/2.jpg') }}" class="img-fluid rounded" alt="">
                        </div>

                        <div class="col-md-6 mt-4 pt-2">
                            <img src="{{ asset('assets/images/work/3.jpg') }}" class="img-fluid rounded" alt="">
                        </div>
                    </div>

                    <div class="bg-light rounded p-4 mt-4 pt-2">
                        <p class="text-muted fst-italic mb-0">" There is now an abundance of readable dummy texts. These are usually used when a text is required purely to fill a space. These alternatives to the classic Lorem Ipsum texts are often amusing and tell short, funny or nonsensical stories. "</p>
                        
                        <ul class="list-unstyled text-muted mt-4">
                            <li class="mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                            <li class="mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Our Talented & Experienced Marketing Agency</li>
                            <li class="mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Create your own skin to match your brand</li>
                            <li class="mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                            <li class="mb-0"><span class="text-primary h5 me-2"><i class="uil uil-check-circle align-middle"></i></span>Our Talented & Experienced Marketing Agency</li>
                        </ul>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-lg-6 mt-4 pt-2">
                            <div class="card work-details rounded bg-light border-0">
                                <div class="card-body">
                                    <h5 class="card-title border-bottom pb-3 mb-3">Project Info :</h5>
                                    <dl class="row mb-0">
                                        <dt class="col-md-4 col-5">Client :</dt>
                                        <dd class="col-md-8 col-7 text-muted">Calvin Carlo</dd>

                                        <dt class="col-md-4 col-5">Category :</dt>
                                        <dd class="col-md-8 col-7 text-muted">Web Design</dd>

                                        <dt class="col-md-4 col-5">Date :</dt>
                                        <dd class="col-md-8 col-7 text-muted">23rd Sep, 2019</dd>

                                        <dt class="col-md-4 col-5">Website :</dt>
                                        <dd class="col-md-8 col-7 text-muted">www.yourdomain.com</dd>

                                        <dt class="col-md-4 col-5">Location :</dt>
                                        <dd class="col-md-8 col-7 text-muted">3/2/64 Mongus Street, UK</dd>
                                    </dl>  
                                </div>                     
                            </div>
                        </div>
    
                        <div class="col-lg-6 mt-4 pt-2">
                            <img src="{{ asset('assets/images/work/6.jpg') }}" class="img-fluid rounded" alt="">
                        </div>
                    </div>

                    <!-- Comment Areas start -->
                    <div class="card shadow rounded border-0 mt-4">
                        <div class="card-body">
                            <h5 class="card-title mb-0">Comments :</h5>

                            <ul class="media-list list-unstyled mb-0">
                                <li class="mt-4">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <a class="pe-3" href="#">
                                                <img src="{{ asset('assets/images/client/01.jpg') }}" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                            </a>
                                            <div class="flex-1 commentor-detail">
                                                <h6 class="mb-0"><a href="javascript:void(0)" class="text-dark media-heading">Lorenzo Peterson</a></h6>
                                                <small class="text-muted">15th August, 2019 at 01:25 pm</small>
                                            </div>
                                        </div>
                                        <a href="#" class="text-muted"><i class="mdi mdi-reply"></i> Reply</a>
                                    </div>
                                    <div class="mt-3">
                                        <p class="text-muted fst-italic p-3 bg-light rounded">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                                    </div>
                                </li>

                                <li class="mt-4">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <a class="pe-3" href="#">
                                                <img src="{{ asset('assets/images/client/02.jpg') }}" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                            </a>
                                            <div class="flex-1 commentor-detail">
                                                <h6 class="mb-0"><a href="javascript:void(0)" class="media-heading text-dark">Tammy Camacho</a></h6>
                                                <small class="text-muted">15th August, 2019 at 05:44 pm</small>
                                            </div>
                                        </div>
                                        <a href="#" class="text-muted"><i class="mdi mdi-reply"></i> Reply</a>
                                    </div>
                                    <div class="mt-3">
                                        <p class="text-muted fst-italic p-3 bg-light rounded">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                                    </div>
                                </li>
                                
                                <li class="mt-4">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <a class="pe-3" href="#">
                                                <img src="{{ asset('assets/images/client/03.jpg') }}" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                            </a>
                                            <div class="flex-1 commentor-detail">
                                                <h6 class="mb-0"><a href="javascript:void(0)" class="media-heading text-dark">Tammy Camacho</a></h6>
                                                <small class="text-muted">16th August, 2019 at 03:44 pm</small>
                                            </div>
                                        </div>
                                        <a href="#" class="text-muted"><i class="mdi mdi-reply"></i> Reply</a>
                                    </div>
                                    <div class="mt-3">
                                        <p class="text-muted fst-italic p-3 bg-light rounded">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                                    </div>

                                    <ul class="list-unstyled ps-4 ps-md-5 sub-comment">
                                        <li class="mt-4">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <a class="pe-3" href="#">
                                                        <img src="{{ asset('assets/images/client/01.jpg') }}" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                                    </a>
                                                    <div class="flex-1 commentor-detail">
                                                        <h6 class="mb-0"><a href="javascript:void(0)" class="text-dark media-heading">Lorenzo Peterson</a></h6>
                                                        <small class="text-muted">17th August, 2019 at 01:25 pm</small>
                                                    </div>
                                                </div>
                                                <a href="#" class="text-muted"><i class="mdi mdi-reply"></i> Reply</a>
                                            </div>
                                            <div class="mt-3">
                                                <p class="text-muted fst-italic p-3 bg-light rounded">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Comments -->
                    <div class="card shadow rounded border-0 mt-4">
                        <div class="card-body">
                            <h5 class="card-title mb-0">Leave A Comment :</h5>

                            <form class="mt-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Your Comment</label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                                <textarea id="message" placeholder="Your Comment" rows="5" name="message" class="form-control ps-5" required=""></textarea>
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Name <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input id="name" name="name" type="text" placeholder="Name" class="form-control ps-5" required="">
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input id="email" type="email" placeholder="Email" name="email" class="form-control ps-5" required="">
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-12">
                                        <div class="send d-grid">
                                            <button type="submit" class="btn btn-primary">Send Comment</button>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </form><!--end form-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero End -->

@endsection