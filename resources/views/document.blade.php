@extends('layouts.app')
@section('title','Akino Foundation | Privacy Policy ')

@section('style')
<link rel="stylesheet" href="{{url('/assets/css/style.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/about.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/theme.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/index.css')}}">
<style>
    .object-fit-cover {
    object-fit: cover;
}

.swiper-slide:hover {
    transform: scale(1.02);
    transition: transform 0.3s ease;
}
    </style>
@stop
@section('content')
@include('common.navigation')
<div class="container">

    <div class="row my-5">
        <h3 class="fs-3 fw-bold text-center mb-4">Our Documents</h3>
    
        <!-- Document Card Start -->
        <div class="col-md-6 col-lg-4 col-xxl-3 galler-swiper mb-5">
            <a data-fslightbox href="#registration" class="text-decoration-none">
                <div class="swiper-slide bg-yellow d-flex flex-column align-items-center shadow border rounded-3 p-2 h-100">
                    <div style="height: 250px" class="w-100 overflow-hidden">
                        <img id="registration" src="{{url('/assets/img/documents/certification_of_registration.PNG')}}" alt="Certification of Registration" class="img-fluid h-100 w-100 object-fit-cover rounded-2">
                    </div>
                    <p class="text-center mt-3 fw-semibold">Certification of Registration</p>
                </div>
            </a>
        </div>
        <!-- Document Card End -->
    
        <div class="col-md-6 col-lg-4 col-xxl-3 galler-swiper mb-5">
            <a data-fslightbox href="#form10ac" class="text-decoration-none">
                <div class="swiper-slide bg-yellow d-flex flex-column align-items-center shadow border rounded-3 p-2 h-100">
                    <div style="height: 250px" class="w-100 overflow-hidden">
                        <img id="form10ac" src="{{url('/assets/img/documents/form10_ac_pg180G.PNG')}}" alt="Form 10AC (Pg180G)" class="img-fluid h-100 w-100 object-fit-cover rounded-2">
                    </div>
                    <p class="text-center mt-3 fw-semibold">Form No 10AC 80G (pg1) </p>
                </div>
            </a>
        </div>
    
        <div class="col-md-6 col-lg-4 col-xxl-3 galler-swiper mb-5">
            <a data-fslightbox href="#niti" class="text-decoration-none">
                <div class="swiper-slide bg-yellow d-flex flex-column align-items-center shadow border rounded-3 p-2 h-100">
                    <div style="height: 250px" class="w-100 overflow-hidden">
                        <img id="niti" src="{{url('/assets/img/documents/form_no10ac_pg212A.PNG')}}" alt="Form No 10AC (Pg212A)" class="img-fluid h-100 w-100 object-fit-cover rounded-2">
                    </div>
                    <p class="text-center mt-3 fw-semibold">Form No 10AC 80G (pg2)</p>
                </div>
            </a>
        </div>
   
    
        <div class="col-md-6 col-lg-4 col-xxl-3 galler-swiper mb-5">
            <a data-fslightbox href="#form1012a" class="text-decoration-none">
                <div class="swiper-slide bg-yellow d-flex flex-column align-items-center shadow border rounded-3 p-2 h-100">
                    <div style="height: 250px" class="w-100 overflow-hidden">
                        <img id="form1012a" src="{{url('/assets/img/documents/form_no1012Apg1.PNG')}}" alt="Form No 1012A (Pg1)" class="img-fluid h-100 w-100 object-fit-cover rounded-2">
                    </div>
                    <p class="text-center mt-3 fw-semibold">Form No 10AC 12A (Pg1)</p>
                </div>
            </a>
        </div>
    
        <div class="col-md-6 col-lg-4 col-xxl-3 galler-swiper mb-5">
            <a data-fslightbox href="#form10ac12a" class="text-decoration-none">
                <div class="swiper-slide bg-yellow d-flex flex-column align-items-center shadow border rounded-3 p-2 h-100">
                    <div style="height: 250px" class="w-100 overflow-hidden">
                        <img id="form10ac12a" src="{{url('/assets/img/documents/form_no_10AC12Apg2.PNG')}}" alt="Form No 10AC 12A (Pg2)" class="img-fluid h-100 w-100 object-fit-cover rounded-2">
                    </div>
                    <p class="text-center mt-3 fw-semibold">Form No 10AC 12A (Pg2)</p>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-lg-4 col-xxl-3 galler-swiper mb-5">
            <a data-fslightbox href="#pan_card" class="text-decoration-none">
                <div class="swiper-slide bg-yellow d-flex flex-column align-items-center shadow border rounded-3 p-2 h-100">
                    <div style="height: 250px" class="w-100 overflow-hidden">
                        <img id="pan_card" src="{{url('/assets/img/documents/pan_card.PNG')}}" alt="Form No 10AC (Pg212A)" class="img-fluid h-100 w-100 object-fit-cover rounded-2">
                    </div>
                    <p class="text-center mt-3 fw-semibold">PAN Card</p>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-lg-4 col-xxl-3 galler-swiper mb-5">
            <a data-fslightbox href="#pancard" class="text-decoration-none">
                <div class="swiper-slide bg-yellow d-flex flex-column align-items-center shadow border rounded-3 p-2 h-100">
                    <div style="height: 250px" class="w-100 overflow-hidden">
                        <img id="pancard" src="{{url('/assets/img/documents/incometax.PNG')}}" alt="PAN Card" class="img-fluid h-100 w-100 object-fit-cover rounded-2">
                    </div>
                    <p class="text-center mt-3 fw-semibold">TAN Certificate</p>
                </div>
            </a>
        </div>
    
        <div class="col-md-6 col-lg-4 col-xxl-3 galler-swiper mb-5">
            <a data-fslightbox href="#csrf" class="text-decoration-none">
                <div class="swiper-slide bg-yellow d-flex flex-column align-items-center shadow border rounded-3 p-2 h-100">
                    <div style="height: 250px" class="w-100 overflow-hidden">
                        <img id="csrf" src="{{url('/assets/img/documents/approval_certificate.PNG')}}" alt="Approval Certificate" class="img-fluid h-100 w-100 object-fit-cover rounded-2">
                    </div>
                    <p class="text-center mt-3 fw-semibold">CSR1 Certificate</p>
                </div>
            </a>
        </div>
    
        <div class="col-md-6 col-lg-4 col-xxl-3 galler-swiper mb-5">
            <a data-fslightbox href="#eaudaan" class="text-decoration-none">
                <div class="swiper-slide bg-yellow d-flex flex-column align-items-center shadow border rounded-3 p-2 h-100">
                    <div style="height: 250px" class="w-100 overflow-hidden">
                        <img id="eaudaan" src="{{url('/assets/img/documents/e-anudaan.PNG')}}" alt="E-Anudaan" class="img-fluid h-100 w-100 object-fit-cover rounded-2">
                    </div>
                    <p class="text-center mt-3 fw-semibold">E-Anudaan</p>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-lg-4 col-xxl-3 galler-swiper mb-5">
            <a data-fslightbox href="#DARPAN" class="text-decoration-none">
                <div class="swiper-slide bg-yellow d-flex flex-column align-items-center shadow border rounded-3 p-2 h-100">
                    <div style="height: 250px" class="w-100 overflow-hidden">
                        <img id="DARPAN" src="{{url('/assets/img/documents/nam.PNG')}}" alt="E-Anudaan" class="img-fluid h-100 w-100 object-fit-cover rounded-2">
                    </div>
                    <p class="text-center mt-3 fw-semibold">NGO -DARPAN</p>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-lg-4 col-xxl-3 galler-swiper mb-5">
            <a data-fslightbox href="#Certificate_of_Incorporation" class="text-decoration-none">
                <div class="swiper-slide bg-yellow d-flex flex-column align-items-center shadow border rounded-3 p-2 h-100">
                    <div style="height: 250px" class="w-100 overflow-hidden">
                        <img id="Certificate_of_Incorporation" src="{{url('/assets/img/documents/Certificate_of_Incorporation.PNG')}}" alt="E-Anudaan" class="img-fluid h-100 w-100 object-fit-cover rounded-2">
                    </div>
                    <p class="text-center mt-3 fw-semibold">Certificate of Incorporation</p>
                </div>
            </a>
        </div>
    </div>
    
</div>








@include('common.footer')
@section('script')

@stop
@stop