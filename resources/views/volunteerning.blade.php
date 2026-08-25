@extends('layouts.app')
@section('title','Akino Foundation | Our Volunteers ')
@section('style')

<link rel="stylesheet" href="{{url('/assets/css/style.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/theme.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/index.css')}}">
<style>
  .tab-container {
      display: inline-flex;
      background-color: #f8f9fa;
      border: 1px solid #e9ecef;
      border-radius: 50px;
      padding: 6px;
      margin-bottom: 2rem;
      box-shadow: inset 0 2px 4px rgba(0,0,0,0.03);
  }
  .tab-btn {
      border: none;
      background: none;
      padding: 12px 30px;
      font-size: 14px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.8px;
      color: #6c757d;
      border-radius: 50px;
      cursor: pointer;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      outline: none !important;
  }
  .tab-btn:hover {
      color: #333;
      background-color: rgba(249, 202, 62, 0.08);
  }
  .tab-btn.active {
      color: #333 !important;
      background-color: #f9ca3e !important;
      box-shadow: 0 4px 15px rgba(249, 202, 62, 0.35);
  }
</style>
@stop
@section('content')

@include('common.navigation')
<div class="position-sticky top-0 taxbenifits bg-yellow tax-hide" onscroll="scrollTop()" id="scrollTop">
    <h1 class="text-center text-white p-2">Save tax upto 50%</h1>
</div>

  <main class="my-2">
<div class="container-fluid ps-0 pr-0">
    <div id="carouselExampleDark" class="carousel carousel-dark slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <!--<div class="carousal-over"></div>-->
            <img src="{{url('/assets/img/volenter3.webp')}}" class="d-block w-100 carousel-img image-aspect" alt="..." >
            <!--<div class="carousel-caption d-none d-md-block ">-->
            <!--    <h2 class="w-50 m-auto text-center">Unsung Heroes: <br><span class="text-yellow">The Power of Volunteerism in Our Communities</span></h2>-->
            
            <!--</div>-->
          </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    

</div>
<div class="container-fluid  position-relative my-3 volenter-cont d-flex align-content-center justify-content-center">
    <div class="line align-self-center position-absolute z-0"></div>
    <div class="container d-flex align-items-center">
      <div class="owl-carousel owl-theme" id="volentercarousal">
        <!--<div class="item">-->
        <!--  <div class="volentercard m-auto">-->
        <!--    <div class="volenter-img">-->
        <!--      <img src="{{url('/assets/img/volunteers/alisha.webp')}}" alt="" srcset="" class="vol-img">-->
        <!--    </div>-->
        <!--    <div class="volenter-content">-->
        <!--      <p class="lazyMonday position-relative text-white fs-30 ps-2">Alisha Wasim Shaikh</p>-->
        <!--    </div>-->
        <!--  </div>-->

        <!--</div>-->
        <!--<div class="item">-->
        <!--  <div class="volentercard m-auto">-->
        <!--    <div class="volenter-img">-->
        <!--      <img src="{{url('/assets/img/volunteers/gorakh_chavan.webp')}}" alt="" srcset="" class="vol-img">-->
        <!--    </div>-->
        <!--    <div class="volenter-content">-->
        <!--      <p class="lazyMonday position-relative text-white fs-30 ps-2">Gorakh Chavan</p>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->
        <div class="item">
          <div class="volentercard m-auto">
            <div class="volenter-img">
              <img src="{{url('/assets/img/volunteers/pratikyadav.webp')}}" alt="" srcset="" class="vol-img">
            </div>
            <div class="volenter-content">
              <p class="lazyMonday position-relative text-white fs-30 ps-2">Pratik Yadav</p>
            </div>
          </div>

        </div>
        <div class="item">
          <div class="volentercard m-auto">
            <div class="volenter-img">
              <img src="{{url('/assets/img/volunteers/reena_patak.webp')}}" alt="" srcset="" class="vol-img">
            </div>
            <div class="volenter-content">
              <p class="lazyMonday position-relative text-white fs-30 ps-2">Reena Pathak</p>
            </div>
          </div>

        </div>
        <!--<div class="item">-->
        <!--  <div class="volentercard m-auto">-->
        <!--    <div class="volenter-img">-->
        <!--      <img src="{{url('/assets/img/volunteers/sajaan-walmik.webp')}}" alt="" srcset="" class="vol-img">-->
         
        <!--    </div>-->
        <!--    <div class="volenter-content">-->
        <!--      <p class="lazyMonday position-relative text-white fs-30 ps-2">Sajan Walmiki</p>-->
        <!--    </div>-->
        <!--  </div>-->

        <!--</div>-->
        <div class="item">
          <div class="volentercard m-auto">
            <div class="volenter-img">
              <img src="{{url('/assets/img/volunteers/tridev_das.webp')}}" alt="" srcset="" class="vol-img">
            </div>
            <div class="volenter-content">
              <p class="lazyMonday position-relative text-white fs-30 ps-2">Tridev Das</p>
            </div>
          </div>
          </div>
        <!--<div class="item">-->
        <!--  <div class="volentercard m-auto">-->
        <!--    <div class="volenter-img">-->
        <!--      <img src="{{url('/assets/img/volunteers/anjali_s.jpeg')}}" alt="" srcset="" class="vol-img">-->
        <!--    </div>-->
        <!--    <div class="volenter-content">-->
        <!--      <p class="lazyMonday position-relative text-white fs-30 ps-2">Anjali sanugale</p>-->
        <!--    </div>-->
        <!--  </div>-->

        <!--</div>-->
        <div class="item">
          <div class="volentercard m-auto">
            <div class="volenter-img">
              <img src="{{url('/assets/img/volunteers/roshan_bhave.webp')}}" alt="" srcset="" class="vol-img">
            </div>
            <div class="volenter-content">
              <p class="lazyMonday position-relative text-white fs-30 ps-2">Roshan Bhave</p>
            </div>
          </div>

        </div>
        <div class="item">
          <div class="volentercard m-auto">
            <div class="volenter-img">
              <img src="{{url('/assets/img/volunteers/suresh_patel.webp')}}" alt="" srcset="" class="vol-img">
            </div>
            <div class="volenter-content">
              <p class="lazyMonday position-relative text-white fs-30 ps-2">Suresh patel</p>
            </div>
          </div>

        </div>
        <div class="item">
          <div class="volentercard m-auto">
            <div class="volenter-img">
              <img src="{{url('/assets/img/volunteers/dhanashree_gaikwad.webp')}}" alt="" srcset="" class="vol-img">
            </div>
            <div class="volenter-content">
              <p class="lazyMonday position-relative text-white fs-30 ps-2">Dhanashree Gaikwad</p>
            </div>
          </div>

        </div>
        <div class="item">
          <div class="volentercard m-auto">
            <div class="volenter-img">
              <img src="{{url('/assets/img/volunteers/ujwala_barve.webp')}}" alt="" srcset="" class="vol-img">
            </div>
            <div class="volenter-content">
              <p class="lazyMonday position-relative text-white fs-30 ps-2">Ujwala barve</p>
            </div>
          </div>

        </div>

    <div class="item">
      <div class="volentercard m-auto">
        <div class="volenter-img">
          <img src="{{url('/assets/img/volunteers/sushil_das.webp')}}" alt="" srcset="" class="vol-img">
        </div>
        <div class="volenter-content">
          <p class="lazyMonday position-relative text-white fs-30 ps-2">Sushil das</p>
        </div>
      </div>

    </div>
        
    <!--<div class="item">-->
    <!--  <div class="volentercard m-auto">-->
    <!--    <div class="volenter-img">-->
    <!--      <img src="{{url('/assets/img/volunteers/raj_chaurasiya.webp')}}" alt="" srcset="" class="vol-img">-->
    <!--    </div>-->
    <!--    <div class="volenter-content">-->
    <!--      <p class="lazyMonday position-relative text-white fs-30 ps-2">Raj Chaurasiya</p>-->
    <!--    </div>-->
    <!--  </div>-->

    <!--</div>-->
        
    <div class="item">
      <div class="volentercard m-auto">
        <div class="volenter-img">
          <img src="{{url('/assets/img/volunteers/reena_okhte.webp')}}" alt="" srcset="" class="vol-img">
        </div>
        <div class="volenter-content">
          <p class="lazyMonday position-relative text-white fs-30 ps-2">Reena Okhte</p>
        </div>
      </div>

    </div>
        
    <div class="item">
      <div class="volentercard m-auto">
        <div class="volenter-img">
          <img src="{{url('/assets/img/volunteers/danish_ahmed.webp')}}" alt="" srcset="" class="vol-img">
        </div>
        <div class="volenter-content">
          <p class="lazyMonday position-relative text-white fs-30 ps-2">Danish Ahmed</p>
        </div>
      </div>

    </div>
        
    <!--<div class="item">-->
    <!--  <div class="volentercard m-auto">-->
    <!--    <div class="volenter-img">-->
    <!--      <img src="{{url('/assets/img/volunteers/amit_chavada.webp')}}" alt="" srcset="" class="vol-img">-->
    <!--    </div>-->
    <!--    <div class="volenter-content">-->
    <!--      <p class="lazyMonday position-relative text-white fs-30 ps-2">Amit Chavada</p>-->
    <!--    </div>-->
    <!--  </div>-->

    <!--</div>-->
        
    <!--<div class="item">-->
    <!--  <div class="volentercard m-auto">-->
    <!--    <div class="volenter-img">-->
    <!--      <img src="{{url('/assets/img/volunteers/sunita_bhimrao_kusalkar.webp')}}" alt="" srcset="" class="vol-img">-->
    <!--    </div>-->
    <!--    <div class="volenter-content">-->
    <!--      <p class="lazyMonday position-relative text-white fs-30 ps-2">Sunita Bhimrao Kusalkar</p>-->
    <!--    </div>-->
    <!--  </div>-->

    <!--</div>-->
        
    <!--<div class="item">-->
    <!--  <div class="volentercard m-auto">-->
    <!--    <div class="volenter-img">-->
    <!--      <img src="{{url('/assets/img/volunteers/kumkum_kanojiya.webp')}}" alt="" srcset="" class="vol-img">-->
    <!--    </div>-->
    <!--    <div class="volenter-content">-->
    <!--      <p class="lazyMonday position-relative text-white fs-30 ps-2">Kumkum Kanojiya</p>-->
    <!--    </div>-->
    <!--  </div>-->

    <!--</div>-->
        
    <!--<div class="item">-->
    <!--  <div class="volentercard m-auto">-->
    <!--    <div class="volenter-img">-->
    <!--      <img src="{{url('/assets/img/volunteers/reshma_nair.webp')}}" alt="" srcset="" class="vol-img">-->
    <!--    </div>-->
    <!--    <div class="volenter-content">-->
    <!--      <p class="lazyMonday position-relative text-white fs-30 ps-2">Reshma Nair</p>-->
    <!--    </div>-->
    <!--  </div>-->

    <!--</div>-->
        
    <div class="item">
      <div class="volentercard m-auto">
        <div class="volenter-img">
          <img src="{{url('/assets/img/volunteers/aditya_singh.webp')}}" alt="" srcset="" class="vol-img">
        </div>
        <div class="volenter-content">
          <p class="lazyMonday position-relative text-white fs-30 ps-2">Aditya Singh</p>
        </div>
      </div>

    </div>
        
    <!--<div class="item">-->
    <!--  <div class="volentercard m-auto">-->
    <!--    <div class="volenter-img">-->
    <!--      <img src="{{url('/assets/img/volunteers/narendra_chauhan.webp')}}" alt="" srcset="" class="vol-img">-->
    <!--    </div>-->
    <!--    <div class="volenter-content">-->
    <!--      <p class="lazyMonday position-relative text-white fs-30 ps-2">Narendra Chauhan</p>-->
    <!--    </div>-->
    <!--  </div>-->

    <!--</div>-->
        
    <div class="item">
      <div class="volentercard m-auto">
        <div class="volenter-img">
          <img src="{{url('/assets/img/volunteers/vickay_keertiker.webp')}}" alt="" srcset="" class="vol-img">
        </div>
        <div class="volenter-content">
          <p class="lazyMonday position-relative text-white fs-30 ps-2">Vickay Keertiker</p>
        </div>
      </div>

    </div>
        
    <div class="item">
      <div class="volentercard m-auto">
        <div class="volenter-img">
          <img src="{{url('/assets/img/volunteers/prem_naik.webp')}}" alt="" srcset="" class="vol-img">
        </div>
        <div class="volenter-content">
          <p class="lazyMonday position-relative text-white fs-30 ps-2">Prem Naik</p>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="volentercard m-auto">
        <div class="volenter-img">
          <img src="{{url('/assets/img/volunteers/anita_patel.jpeg')}}" alt="" srcset="" class="vol-img">
        </div>
        <div class="volenter-content">
          <p class="lazyMonday position-relative text-white fs-30 ps-2">Anita Patel</p>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="volentercard m-auto">
        <div class="volenter-img">
          <img src="{{url('/assets/img/volunteers/ashok_gusaival.jpeg')}}" alt="" srcset="" class="vol-img">
        </div>
        <div class="volenter-content">
          <p class="lazyMonday position-relative text-white fs-30 ps-2">Ashok Gusaival</p>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="volentercard m-auto">
        <div class="volenter-img">
          <img src="{{url('/assets/img/volunteers/harendra_bakoliya.jpeg')}}" alt="" srcset="" class="vol-img">
        </div>
        <div class="volenter-content">
          <p class="lazyMonday position-relative text-white fs-30 ps-2">Harendra Bakoliya</p>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="volentercard m-auto">
        <div class="volenter-img">
          <img src="{{url('/assets/img/volunteers/harish_sumra.jpeg')}}" alt="" srcset="" class="vol-img">
        </div>
        <div class="volenter-content">
          <p class="lazyMonday position-relative text-white fs-30 ps-2">Harish Sumra</p>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="volentercard m-auto">
        <div class="volenter-img">
          <img src="{{url('/assets/img/volunteers/isaac_fernades.jpeg')}}" alt="" srcset="" class="vol-img">
        </div>
        <div class="volenter-content">
          <p class="lazyMonday position-relative text-white fs-30 ps-2">Isaac Fernandes</p>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="volentercard m-auto">
        <div class="volenter-img">
          <img src="{{url('/assets/img/volunteers/kajal_verma.jpeg')}}" alt="" srcset="" class="vol-img">
        </div>
        <div class="volenter-content">
          <p class="lazyMonday position-relative text-white fs-30 ps-2">Kajal Verma</p>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="volentercard m-auto">
        <div class="volenter-img">
          <img src="{{url('/assets/img/volunteers/mansi_gurkha.jpeg')}}" alt="" srcset="" class="vol-img">
        </div>
        <div class="volenter-content">
          <p class="lazyMonday position-relative text-white fs-30 ps-2">Mansi Gurkha</p>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="volentercard m-auto">
        <div class="volenter-img">
          <img src="{{url('/assets/img/volunteers/mita_dias.jpeg')}}" alt="" srcset="" class="vol-img">
        </div>
        <div class="volenter-content">
          <p class="lazyMonday position-relative text-white fs-30 ps-2">Mita Dias</p>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="volentercard m-auto">
        <div class="volenter-img">
          <img src="{{url('/assets/img/volunteers/rufhiha_mirkar.jpeg')}}" alt="" srcset="" class="vol-img">
        </div>
        <div class="volenter-content">
          <p class="lazyMonday position-relative text-white fs-30 ps-2">Rufhiha Mirkar</p>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="volentercard m-auto">
        <div class="volenter-img">
          <img src="{{url('/assets/img/volunteers/sanjay_patel.jpeg')}}" alt="" srcset="" class="vol-img">
        </div>
        <div class="volenter-content">
          <p class="lazyMonday position-relative text-white fs-30 ps-2">Sanjay Patel</p>
        </div>
      </div>
    </div>

    <div class="item">
      <div class="volentercard m-auto">
        <div class="volenter-img">
          <img src="{{url('/assets/img/volunteers/sudatta_kharat.webp')}}" alt="" srcset="" class="vol-img">
        </div>
        <div class="volenter-content">
          <p class="lazyMonday position-relative text-white fs-30 ps-2">Sudatta Kharat</p>
        </div>
      </div>
    </div>
        
    <!--<div class="item">-->
    <!--  <div class="volentercard m-auto">-->
    <!--    <div class="volenter-img">-->
    <!--      <img src="{{url('/assets/img/volunteers/priya_majhi.webp')}}" alt="" srcset="" class="vol-img">-->
    <!--    </div>-->
    <!--    <div class="volenter-content">-->
    <!--      <p class="lazyMonday position-relative text-white fs-30 ps-2">Priya Majhi</p>-->
    <!--    </div>-->
    <!--  </div>-->

    <!--</div>-->
        
  
        

        </div>
  
        </div>
    </div>
    </div>
</div>
{{--  <div class="container mt-5 video-container">
  <h2 class="lazyMonday text-yellow text-center fw-bold mb-2">Why Volunteer With AkinoFoundation</h2>
  <div class="youtube-con position-relative d-flex justify-content-center">
      <div class="youtube-card">
          <div class="icon-button justify-content-center align-content-center">
              <i class="fa-solid fa-play d-block m-auto fa-play-btn"></i>
          </div>
          <img src="{{url('/assets/img/akino_child_education5.jpg')}}" alt="" class="position-absolute rounded-2 youtube-poster">
          <iframe class="youtubevideo" src="https://www.youtube.com/embed/VuXC-d5IouM?si=IUm45o4Apyyx3i3s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="rounded-2 d-none"></iframe>
      </div>
      {{--  <iframe src="{{url('/assets/img/akino_child_education5.jpg')}}"></iframe>  --}}
      
      <!-- Add more youtube-card elements as needed -->

  {{--  </div>
 
</div>  --}} 
</div>
<div class="container my-5">
  <h2 class="fw-bold mb-4 text-capitalize">What our Donar  <span class="text-yellow">have to say</span></h2>
  <div class="owl-carousel owl-theme" id="volentercarousal3">
    
    <div class="item">
      <div class="volentersay  m-auto border border-warning" >
        <div class="volentersay-img">
         <img src="{{url('/assets/img/volunteers/donar.webp')}}" alt="" srcset="">
        </div>
      <div class="volentersay-content">
        <h5 class="text-capitalize text-yellow text-center mt-3">Krupangi</h5>
        <div>
          <p class="px-3 text-center">Supporting Akino Foundation has been a transformative experience. Witnessing the impact of my contribution on the lives of students and the community has been incredibly rewarding. The foundation's commitment to education and skill development is truly making a difference.</p>
        </div>
      </div>
      </div>

    </div>
    <div class="item">
      <div class="volentersay  m-auto border border-warning" >
        <div class="volentersay-img">
         <img src="{{url('/assets/img/volunteers/manoj_sawan.webp')}}" alt="" srcset="">
        </div>
      <div class="volentersay-content">
        <h5 class="text-capitalize text-yellow text-center mt-3"> Manoj sawan</h5>
        <div>
          <p class="px-3 text-center">I chose to donate to Akino Foundation because of their transparent approach and dedication to empowering individuals through education. The 80G certificate process was seamless, and knowing that my contribution is making a positive impact on the future of these students brings me immense satisfaction.</p>
        </div>
      </div>
      </div>

    </div>
    <div class="item">
      <div class="volentersay  m-auto border border-warning" >
        <div class="volentersay-img">
         <img src="{{url('/assets/img/volunteers/Sanju_jagadankar.webp')}}" alt="" srcset="">
        </div>
      <div class="volentersay-content">
        <h5 class="text-capitalize text-yellow text-center mt-3">Sanju Jagadankar</h5>
        <div>
          <p class="px-3 text-center"> Being a part of Akino Foundation's mission has been an inspiring journey. The foundation's commitment to providing quality education and fostering skill development aligns with my values. I've seen firsthand the positive changes my support has brought to the community, and I am proud to be associated with such a impactful organization.</p>
        </div>
      </div>
      </div>

    </div>
    <div class="item">
      <div class="volentersay  m-auto border border-warning" >
        <div class="volentersay-img">
         <img src="{{url('/assets/img/volunteers/Sushobh_chavan.webp')}}" alt="" srcset="">
        </div>
      <div class="volentersay-content">
        <h5 class="text-capitalize text-yellow text-center mt-3">Sushobh chavan</h5>
        <div>
          <p class="px-3 text-center"> The Akino Foundation exemplifies compassion, dedication, and resilience. Their holistic approach to social welfare, encompassing both animals and humans, makes them a beacon of hope in times of need. Also been focusing on a girl education and empowering them.</p>
        </div>
      </div>
      </div>

    </div>
  
</div>


<div class="container my-5">
  <h2 class="fw-bold mb-4 text-capitalize">Meet Our Visionaries:  <span class="text-yellow">Akino Foundation Board of Directors</span></h2>
  <div class="owl-carousel owl-theme" id="volentercarousal4">
    
    <div class="item">
      <div class="volentersay  m-auto border border-warning" >
        <div class="volentersay-img">
         <img src="{{url('/assets/img/volunteers/pritash.webp')}}" alt="" srcset="">
        </div>
      <div class="volentersay-content">
        <h5 class="text-capitalize text-yellow text-center mt-3">Pritesh Dilip Kamble </h5>
        <h6 class="text-capitalize fs- text-center mt-0 mb-1">Founder</h6>
        <div>
          <p class="px-3 text-center">
            After years of engaging closely with communities, witnessing the profound challenges faced by the underserved areas in education, women's issues, healthcare, and skill development, I was compelled to drive change. This led to the creation of our NGO, with a mission to collaborate extensively and foster societal transformation. Our endeavor is to bridge gaps, uplift communities, and ignite hope, empowering individuals to unlock their full potential. Join us in our journey towards making a lasting impact.After years of engaging closely with communities, witnessing the profound challenges faced by the underserved areas in education, women's issues, healthcare, and skill development, I was compelled to drive change. This led to the creation of our NGO, with a mission to collaborate extensively and foster societal transformation. Our endeavor is to bridge gaps, uplift communities, and ignite hope, empowering individuals to unlock their full potential. Join us in our journey towards making a lasting impact.</p>
        </div>
      </div>
      </div>

    </div>
    <div class="item">
      <div class="volentersay  m-auto border border-warning" >
        <div class="volentersay-img">
         <img src="{{url('/assets/img/volunteers/pratikyadav.webp')}}" alt="" srcset="">
        </div>
      <div class="volentersay-content">
        <h5 class="text-capitalize text-yellow text-center mt-3">Pratik Yadav</h5>
        <h6 class="text-capitalize text-center mt-0 mb-1">CSR Director</h6>
        <div>
          <p class="px-3 text-center">Embrace a life-changing chapter by aligning with Akin Foundation. Joining Akin isn't just a choice; it's a transformative commitment to making a real impact. Your journey with us is a fusion of purpose, passion, and the power to effect positive change. Elevate your life, join Akin Foundation, and become part of a community that believes in shaping a better world together.</p>
        </div>
      </div>
      </div>

    </div>
    <div class="item">
      <div class="volentersay  m-auto border border-warning" >
        <div class="volentersay-img">
         <img src="{{url('/assets/img/volunteers/manta-omprakesh.webp')}}" alt="" srcset="">
        </div>
      <div class="volentersay-content">
        <h5 class="text-capitalize text-yellow text-center mt-3">Mamta omprakash sahani</h5>
        <h6 class="text-capitalize  text-center mt-0 mb-1">Co Founder</h6>
        <div>
          <p class="px-3 text-center">Driven by firsthand experiences with the stark realities of marginalized communities, I felt a powerful urge to contribute to meaningful change. This journey of close community engagement laid the foundation for our NGO, born out of a commitment to address the critical issues of education, gender equality, healthcare, and vocational training. Our mission is rooted in the belief that through collective effort and strategic partnerships, we can catalyze societal transformation. We are dedicated to closing the gaps that divide us, elevating the spirit of communities, and kindling a flame of hope and empowerment. By enabling individuals to realize their inherent potential, we are not just dreaming of a better future; we are actively constructing it. Join our movement to make a profound difference.</p>
        </div>
      </div>
      </div>

    </div>
</div>
 
<div class="container my-5" id="submission-section">
    <div class="col-lg-8 col-md-10 col-12 mx-auto bg-white p-md-5 p-4 rounded-4 shadow-sm border border-warning-subtle">
        
        <!-- Tab Navigation -->
        <div class="text-center">
            <div class="tab-container">
                <button class="tab-btn active" id="tab-btn-volunteer" onclick="switchTab('volunteer')">
                    Volunteer With Us
                </button>
                <button class="tab-btn" id="tab-btn-partner" onclick="switchTab('partner')">
                    Partner With Us
                </button>
            </div>
        </div>

        <!-- Success & Error Alert Messages -->
        @if(Session::has('msg'))
            <div class="alert alert-success alert-dismissible fade show rounded-3 p-3 mb-4" role="alert" style="background-color: #d4edda; border-color: #c3e6cb; color: #155724;">
                <strong>Success!</strong> {{ Session::get('msg') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(Session::has('error'))
            <div class="alert alert-danger alert-dismissible fade show rounded-3 p-3 mb-4" role="alert" style="background-color: #f8d7da; border-color: #f5c6cb; color: #721c24;">
                <strong>Error!</strong> {{ Session::get('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger rounded-3 p-3 mb-4" style="background-color: #f8d7da; border-color: #f5c6cb; color: #721c24;">
                <strong>Please fix the errors below:</strong>
                <ul class="mb-0 mt-2">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Volunteer Form -->
        <div id="form-volunteer" class="tab-content-form">
            <form action="{{ url('/submit/volunteer') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label font-sm fw-semibold">Full Name *</label>
                        <input type="text" name="full_name" class="form-control rounded-2 p-2 border" value="{{ old('full_name') }}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label font-sm fw-semibold">Email Address *</label>
                        <input type="email" name="email" class="form-control rounded-2 p-2 border" value="{{ old('email') }}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label font-sm fw-semibold">Phone Number *</label>
                        <input type="tel" name="phone" class="form-control rounded-2 p-2 border" value="{{ old('phone') }}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label font-sm fw-semibold">Location *</label>
                        <input type="text" name="location" class="form-control rounded-2 p-2 border" value="{{ old('location') }}" placeholder="City, State" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label font-sm fw-semibold">Availability *</label>
                        <select name="availability" class="form-select rounded-2 p-2 border" required>
                            <option value="">Select Availability</option>
                            <option value="weekdays" {{ old('availability') == 'weekdays' ? 'selected' : '' }}>Weekdays</option>
                            <option value="weekends" {{ old('availability') == 'weekends' ? 'selected' : '' }}>Weekends</option>
                            <option value="flexible" {{ old('availability') == 'flexible' ? 'selected' : '' }}>Flexible</option>
                            <option value="full-time" {{ old('availability') == 'full-time' ? 'selected' : '' }}>Full-Time</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label font-sm fw-semibold">Skills & Interests *</label>
                        <input type="text" name="skills_or_interests" class="form-control rounded-2 p-2 border" value="{{ old('skills_or_interests') }}" placeholder="e.g. Teaching, Event Planning, Design" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label font-sm fw-semibold">Previous Experience</label>
                    <textarea name="previous_experience" class="form-control rounded-2 p-2 border" rows="3" placeholder="Briefly describe any prior volunteering work...">{{ old('previous_experience') }}</textarea>
                </div>
                <div class="mb-4">
                    <label class="form-label font-sm fw-semibold">Why do you want to join us? *</label>
                    <textarea name="message" class="form-control rounded-2 p-2 border" rows="4" placeholder="Tell us about yourself and why you'd like to work with Akino Foundation..." required>{{ old('message') }}</textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn px-5 py-2 fw-bold text-uppercase rounded-3" style="background-color: #f9ca3e; color: #333; border: none; font-size: 16px;">
                        Submit Volunteer Application
                    </button>
                </div>
            </form>
        </div>

        <!-- Partner Form -->
        <div id="form-partner" class="tab-content-form" style="display: none;">
            <form action="{{ url('/submit/partner') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label font-sm fw-semibold">Contact Person Name *</label>
                        <input type="text" name="full_name" class="form-control rounded-2 p-2 border" value="{{ old('full_name') }}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label font-sm fw-semibold">Email Address *</label>
                        <input type="email" name="email" class="form-control rounded-2 p-2 border" value="{{ old('email') }}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label font-sm fw-semibold">Phone Number *</label>
                        <input type="tel" name="phone" class="form-control rounded-2 p-2 border" value="{{ old('phone') }}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label font-sm fw-semibold">Location *</label>
                        <input type="text" name="location" class="form-control rounded-2 p-2 border" value="{{ old('location') }}" placeholder="City, State" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label font-sm fw-semibold">Organization Name *</label>
                        <input type="text" name="organization_name" class="form-control rounded-2 p-2 border" value="{{ old('organization_name') }}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label font-sm fw-semibold">Website URL</label>
                        <input type="url" name="website" class="form-control rounded-2 p-2 border" value="{{ old('website') }}" placeholder="https://example.com">
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label font-sm fw-semibold">Partnership Type *</label>
                    <select name="partnership_type" class="form-select rounded-2 p-2 border" required>
                        <option value="">Select Partnership Type</option>
                        <option value="corporate" {{ old('partnership_type') == 'corporate' ? 'selected' : '' }}>Corporate CSR</option>
                        <option value="ngo" {{ old('partnership_type') == 'ngo' ? 'selected' : '' }}>NGO / Nonprofit</option>
                        <option value="community" {{ old('partnership_type') == 'community' ? 'selected' : '' }}>Community Group</option>
                        <option value="academic" {{ old('partnership_type') == 'academic' ? 'selected' : '' }}>Academic Institution</option>
                        <option value="other" {{ old('partnership_type') == 'other' ? 'selected' : '' }}>Other</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="form-label font-sm fw-semibold">Proposed Partnership Details / Message *</label>
                    <textarea name="message" class="form-control rounded-2 p-2 border" rows="5" placeholder="Please describe how you'd like to collaborate with Akino Foundation..." required>{{ old('message') }}</textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn px-5 py-2 fw-bold text-uppercase rounded-3" style="background-color: #f9ca3e; color: #333; border: none; font-size: 16px;">
                        Submit Partnership Request
                    </button>
                </div>
            </form>
        </div>

    </div>
</div>
 
</main>
    





@include('common.footer')


@section('script')
<script>
    const scroll = document.getElementById('scrollTop');

window.addEventListener('scroll', () => {
    // Get the scroll position
    const scrollPosition = window.scrollY || window.pageYOffset;

    if (scrollPosition > 800) {
        // When scrolled down enough, add the 'added-class' class to the box element
        scroll.classList.add('d-block');
    } else {
        // Otherwise, remove the 'added-class' class
        scroll.classList.remove('d-block');
    }
});

function switchTab(type) {
    const volunteerBtn = document.getElementById('tab-btn-volunteer');
    const partnerBtn = document.getElementById('tab-btn-partner');
    const volunteerForm = document.getElementById('form-volunteer');
    const partnerForm = document.getElementById('form-partner');

    if (type === 'volunteer') {
        volunteerBtn.classList.add('active');
        partnerBtn.classList.remove('active');

        volunteerForm.style.display = 'block';
        partnerForm.style.display = 'none';
    } else {
        partnerBtn.classList.add('active');
        volunteerBtn.classList.remove('active');

        partnerForm.style.display = 'block';
        volunteerForm.style.display = 'none';
    }
}

// Auto-switch based on URL tab parameter
document.addEventListener('DOMContentLoaded', () => {
    const params = new URLSearchParams(window.location.search);
    const tab = params.get('tab');
    if (tab === 'partner') {
        switchTab('partner');
    } else {
        switchTab('volunteer');
    }
});
</script>
@stop
@stop