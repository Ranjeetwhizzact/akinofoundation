@extends('layouts.app')
@section('title','Akino Foundation | AKINO THE RISING SUN FOUNDATION ')
@section('style')

<link rel="stylesheet" href="{{url('/assets/css/style.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/theme.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/index.css')}}">
@stop
@section('content')
<div class="modal-overlay"></div>
<div class="custom-modal">
    <div class="position-relative">
@if($offer)
@foreach ($offer as $offer )
    
<img src="{{url($offer->banner)}}" alt="" srcset="" class="top-0 left-0 rounded-3  w-100 h-100 img-cover position-absolute z-1" >
@endforeach
        @endif
         <button class="close-modal position-absolute z-2"><i class="fa-solid fa-xmark"></i></button>
    </div>
</div>
@include('common.navigation')




<div class="position-sticky top-0 taxbenifits bg-yellow tax-hide" onscroll="scrollTop()" id="scrollTop">
    <h1 class="text-center text-white p-2">Save tax upto 50%</h1>
</div>
<div class="walpaper-img w-max position-relative" data-aos="fade-up" data-aos-duration="2000">

    <div id="carouselExample" class="carousel slide"  data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner index_banner">
            @if($home)
            @foreach ($home as $item)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <a href="{{ url($item->link) }}">
                        <img src="{{ url($item->main_img) }}" alt="" class="w-100 img-content">       
                    </a>
                </div>
            @endforeach
        @endif
           
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container-fluid ">
        <div>
            <div class=" px-md-3 px-2 mt-5 w-1280" data-aos="fade-up" data-aos-duration="500">
                <div class="d-flex align-items-center">
                   
                </div>
                <p class="fs-30 col-xl-7 col-md-10 col-12 ps-2 pt-2  fw-600 lh-sm">How Do We Help Our Bharat Today?</p>
                <p class="fs-12 ps-2 col-xl-8 mb-70">
                    AKINO, Representing the Rising Sun, actively uplifts Bharat by promoting child education and empowering women to cultivate future leaders. With a strong focus on supporting the vulnerable and creating a positive impact, AKINO demonstrates unwavering compassion and dedication to societal growth.</p>
                <div class="owl-carousel owl-theme faculty-carousel " id="campaigninactive">
                    {{-- @if(isset($directCamp) )
                    @foreach ($directCamp as $item)
                        <div class="inactive_campaign position-relative m-auto">
                            @php
                                $subcategory = \App\Models\Subcategory::find($item->campiagn_type);
                            @endphp
                            @if($subcategory)
                                <img src="{{url($subcategory->banner)}}" alt="{{$subcategory->name}}" class="position-absolute z-1">
                                <div class="position-absolute bottom-0 end-0 z-3 rounded-4 h-50 w-100">
                                    <a href="{{url('/campaign/'.encrypt($item->id))}}" class="text-decoration-none"> <h5 class=" text-white fw-medium fs-20 mt-5 mb-4 ps-3 ">{{$subcategory->name}}</h5></a>
                                   
                                    <div class="inactive_content mb-2">
                                        <p class="fs-14 text-white ps-3">{{$item->short_description}}{{$item->id}}  </p>
                                    </div>
                                    <a href="{{url('/campaign/'.encrypt($item->id))}}" class="text-white fs-12 ps-3">Read more</a>
                                </div>
                            @endif
                        </div>
                    @endforeach
                @endif --}}
                
                  @if(isset($directCamp) )
                    @foreach ($directCamp as $item)
                    @php
                    $subcategory = \App\Models\Subcategory::find($item->campiagn_type);
                @endphp
                @if($subcategory)
                <div class="row  px-4">
                    <div class="d-flex justify-content-between">

                        <div class="d-none d-lg-block  newcampaign newcampwidth bg-yellow rounded-5 position-relative">
                          <div class="position-absolute z-1 start-0 w-100 h-100 rounded-5">
                              <img src="{{url($subcategory->banner)}}" alt="" srcset="" class="w-100 h-100 img-cover rounded-5">
                          </div>
                          <div class="position-absolute z-2 h-50 bottom-0 ">
                              <div class="d-flex gap-2 align-items-end w-100 h-100 py-4 px-3">
      
                                  <a href="{{url('/campaign/'. $item->hashed_id)}}" class="px-4 py-2 bg-yellow rounded-2 fs-14 fw-semibold text-dark text-decoration-none ">Make Donation</a>
                                  <a href="{{url('/campaign/'. $item->hashed_id)}}" class="bg-white px-3 py-2 text-decoration-none fs-14 rounded-2 text-dark">Learn More</a>
                              </div>
                          </div>
                        </div>
                        <div class="m-auto m-lg-0   ">
                          <div class="m-auto pt-4 bg-linear-yellow rounded-5  newcampaign newcampaign-card">
      
                              <div class="d-flex gap-3 mx-4">
                                  <div class="pt-1">
                                      <img src="{{url('assets/img/icon-education.png')}}" alt="" srcset="" width="44" height="48"></div>
                                  <div >
                                     <a href="#" class="text-decoration-none text-dark"> <h5 class="text-capitalize fw-semibold fs-4">{{$subcategory->name}}</h5></a>
                                  </div>
                              </div>
                              <div class="mt-2 new-campaign-content px-4">
          
                                  <p class="fs-14 fw-medium">{{$item->short_description}}</p>
                              </div>
                              <a href="{{url('/campaign/'. $item->hashed_id)}}">
      
                                  <img src="{{$subcategory->icon}}" alt="" srcset="" width="250" class="mt-3 px-5" >
                              </a>
                          </div>
                       </div>
                    </div>
                </div>
                @endif
                @endforeach
                @endif 
    
                </div>
        </div>
        <div class="row ">
            <div class="mt-5 mb-3">
                <div
                 class=" gray-div d-flex justify-content-center flex-lg-row flex-column gap-xl-5 gap-3 align-items-center position-static">
                 <div class="col-lg-3 col-sm-6 col-8 px-xxl-5 px-3 d-flex justify-content-center " data-aos="fade-up"
                     data-aos-duration="500">
                     <img src="{{url('/assets/img/s1.png')}}" alt="Akino-image" height="36" class="me-2">
                     <p class=" fs-12 text-capitalize">Give Hope, Create Impact. Support Our Mission with Your
                         Donation</p>
                 </div>
         
                 <div class="col-lg-3 col-sm-6 col-8 px-xxl-5 px-3 d-flex justify-content-center " data-aos="fade-up"
                     data-aos-duration="500">
                     <img src="{{url('/assets/img/s2.png')}}" alt="Akino-image" height="36" class="me-2">
                     <p class=" fs-12 text-capitalize">Your Donation Makes a Difference! Plus, Enjoy Tax Benefits by
                         Giving.</p>
                 </div>
                 <div class="col-lg-3 col-sm-6 col-8 px-xxl-5 px-3 d-flex justify-content-center " data-aos="fade-up"
                     data-aos-duration="500">
                     <img src="{{url('/assets/img/s3.png')}}" alt="Akino-image" height="36" class="me-2">
                     <p class=" fs-12 text-capitalize">Support Our Cause, Get Tax Benefits, and Change Lives Through
                         Your Donation!
                     </p>
                 </div>
             </div>
         </div>
        </div>
    </div>
    <div class="container-fluid w-1280">
        <div class="row  mission-container">
            <div class="col-lg-6 p-4">
                <h5 class=" ps-md-5 pt-2 pt-md-5 fs-2 text-white fw-semibold">At Akino, our mission is to cradle the forgotten dreams, transforming them into vibrant realities</h5>
                <p class="pt-4 ps-md-5 text-white">With unwavering compassion, we embrace the underprivileged, nurturing their aspirations through education, empowerment, and unwavering support. Our hands reach out to lift those struck by disaster, weaving threads of hope into shattered lives. Together, we paint stories of courage, resilience, and triumph, rekindling faith and igniting the spark of transformation. You Too Have A Stake In This Collective Responsibility. Click Here To Contribute.</p>
                <a href="" class="text-capitalize fw-medium px-3 py-2 bg-white rounded-2 text-decoration-none text-dark d-inline-block ms-5 my-5">Read More</a>
            </div>
            <div class="col-lg-6 d-none d-lg-flex">
                <div class="row overflow-scroll-container  "> 
           

                        <div class="col-4 scroll-content  py-1 ">
                            <div class="">
    
                                <div class="grid-img-container">
        
                                    <img src="{{url('/assets/img/recent-activity/recent-activity1.jpg')}}" alt="" srcset=""   class=" img-cover rounded-3">
                                </div>
                                <div class="grid-img-container">
        
                                    <img src="{{url('/assets/img/gallery/akino_child_education1.png')}}" alt="" srcset=""   class=" img-cover rounded-3">
                                </div>
                                <div class="grid-img-container">
        
                                    <img src="{{url('/assets/img/gallery/akino_diserter_img4.jpg')}}" alt="" srcset=""   class=" img-cover rounded-3">
                                </div>
                                <div class="grid-img-container">
        
                                    <img src="{{url('/assets/img/gallery/akino_child_education3.png')}}" alt="" srcset=""   class=" img-cover rounded-3">
                                </div>
                                <div class="grid-img-container">
        
                                    <img src="{{url('/assets/img/recent-activity/recent-activity5.jpg')}}" alt="" srcset=""   class=" img-cover rounded-3">
                                </div>
    
                                <div class="grid-img-container">
        
                                    <img src="{{url('/assets/img/recent-activity/recent-activity6.jpg')}}" alt="" srcset=""   class=" img-cover rounded-3">
                                </div>
                                <div class="grid-img-container">
        
                                    <img src="{{url('/assets/img/recent-activity/recent-activity7.jpg')}}" alt="" srcset=""   class=" img-cover rounded-3">
                                </div>
                                <div class="grid-img-container">
        
                                    <img src="{{url('/assets/img/recent-activity/recent-activity16.jpg')}}" alt="" srcset=""   class=" img-cover rounded-3">
                                </div>
                                <div class="grid-img-container">
        
                                    <img src="{{url('/assets/img/recent-activity/recent-activity9.jpg')}}" alt="" srcset=""   class=" img-cover rounded-3">
                                </div>
                                <div class="grid-img-container">
        
                                    <img src="{{url('/assets/img/recent-activity/recent-activity19.jpg')}}" alt="" srcset=""   class=" img-cover rounded-3">
                                </div>
                            </div>
                        </div>
                        <div class="col-4 scroll-content1  py-1">
                            <div class="">
    
                                <div class="grid-img-container2">
        
                                    <img src="{{url('/ourwork/1705310739akino_child_education5.jpg')}}" alt="" srcset=""   class=" img-cover rounded-3">
                                </div>
                                <div class="grid-img-container2">
        
                                    <img src="{{url('/assets/img/gallery/akino_doctor1.jpg')}}" alt="" srcset=""   class=" img-cover rounded-3">
                                </div>
                                <div class="grid-img-container2">
        
                                    <img src="{{url('/assets/img/gallery/akino_doctor2.jpg')}}" alt="" srcset=""   class=" img-cover rounded-3">
                                </div>
                                <div class="grid-img-container2">
        
                                    <img src="{{url('/assets/img/gallery/akino_doctor8.jpg')}}" alt="" srcset=""   class=" img-cover rounded-3">
                                </div>
                                <div class="grid-img-container2">
        
                                    <img src="{{url('/assets/img/gallery/akino_doctor9.jpg')}}" alt="" srcset=""   class=" img-cover rounded-3">
                                </div>
                                <div class="grid-img-container2">
        
                                    <img src="{{url('assets/img/gallery/akino_health_img1.jpg')}}" alt="" srcset=""   class=" img-cover rounded-3">
                                </div>
                                <div class="grid-img-container2">
        
                                    <img src="{{url('assets/img/gallery/akino_health_img2.png')}}" alt="" srcset=""   class=" img-cover rounded-3">
                                </div>
                                <div class="grid-img-container2">
        
                                    <img src="{{url('/assets/img/gallery/akino_child_education7.jpg')}}" alt="" srcset=""   class=" img-cover rounded-3">
                                </div>
                                <div class="grid-img-container2">
        
                                    <img src="{{url('/assets/img/gallery/akino_child_education8.jpg')}}" alt="" srcset=""   class=" img-cover rounded-3">
                                </div>
                                <div class="grid-img-container2">
        
                                    <img src="{{url('/assets/img/gallery/akino_child_education9.jpg')}}" alt="" srcset=""   class=" img-cover rounded-3">
                                </div>
                                <div class="grid-img-container3">
        
                                    <img src="{{url('/assets/img/gallery/akino_child_education10.jpg')}}" alt="" srcset=""   class=" img-cover rounded-3">
                                </div>
                            </div>
                        </div>
                        <div class="col-4 scroll-content2 py-1">
                            <div class="">
    
                                <div class="grid-img-container">
        
                                    <img src="{{url('/assets/img/gallery/akino_doctor1.jpg')}}" alt="" srcset=""   class=" img-cover rounded-3">
                                </div>
                                <div class="grid-img-container">
        
                                    <img src="{{url('/assets/img/gallery/akino_doctor2.jpg')}}" alt="" srcset=""   class=" img-cover rounded-3">
                                </div>
                                <div class="grid-img-container">
        
                                    <img src="{{url('/assets/img/gallery/akino_doctor8.jpg')}}" alt="" srcset=""   class=" img-cover rounded-3">
                                </div>
                                <div class="grid-img-container">
        
                                    <img src="{{url('/assets/img/gallery/akino_doctor9.jpg')}}" alt="" srcset=""   class=" img-cover rounded-3">
                                </div>
                                <div class="grid-img-container">
        
                                    <img src="{{url('/ourwork/1705310739akino_child_education5.jpg')}}" alt="" srcset=""   class=" img-cover rounded-3">
                                </div>
                                <div class="grid-img-container">
        
                                    <img src="{{url('/assets/img/recent-activity/recent-activity6.jpg')}}" alt="" srcset=""   class=" img-cover rounded-3">
                                </div>
                                <div class="grid-img-container">
        
                                    <img src="{{url('/assets/img/recent-activity/recent-activity7.jpg')}}" alt="" srcset=""   class=" img-cover rounded-3">
                                </div>
                                <div class="grid-img-container">
        
                                    <img src="{{url('/assets/img/recent-activity/recent-activity16.jpg')}}" alt="" srcset=""   class=" img-cover rounded-3">
                                </div>
                                <div class="grid-img-container">
        
                                    <img src="{{url('/assets/img/recent-activity/recent-activity9.jpg')}}" alt="" srcset=""   class=" img-cover rounded-3">
                                </div>
                                <div class="grid-img-container">
        
                                    <img src="{{url('/assets/img/recent-activity/recent-activity19.jpg')}}" alt="" srcset=""   class=" img-cover rounded-3">
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid w-max px-xl-5 px-3 my-5 pt-md-3 pt-5 ">
        {{-- <p class="fs-12 px-4 mb-2">Fundraising for Extreme needs</p> --}}
        <div class="col-lg-5 px-4 mb-4 m-auto">
          <h3 class="text-center fs-2 fw-semibold" style="height: 86px;">Join Our Mission by Supporting Our Causes</h3>
        </div>
        <div class="owl-carousel owl-theme" id="card-carousel2" data-aos="fade-up" data-aos-duration="500">
            @if ($campaigns)
            @foreach ($campaigns as $item)

            <div class="item" data-aos="fade-up" data-aos-duration="500">
                <div class="card p-3 img-rounded campaign-card m-auto">
                    <div class="h-10">
                        <a href="{{url('/campaign/'. $item->hashed_id)}}"><img src="{{url($item->main_image)}}"
                                class="card-img-top img-cover img-rounded" alt="{{$item->title}}"></a>
                    </div>
                    <div class="card-body px-0">
                        <h4 class="card-title fs-22 m-0 p-0 heading-content"><a href="{{url('/campaign/'.$item->hashed_id)}}"
                                class="text-decoration-none text-dark text-dark" >{{$item->title}}</a></h4>
                        {{-- <p class="text-justify card-text fs-15 py-3 lh-1  m-0 text-dark-gray truncate">
                            {{$item->short_description}}</p> --}}
                        <p class="pt-4"> <span class="fw-bold fs-18  text-dark">₹{{$item->raise_fund}} </span><span
                                class="text-dark-gray ps-2">Raised of ₹
                                {{$item->fund_amount}} goal</span></p>
                        <div class="range my-3">
                            <div class="range-width" style="width:{{$item->fund_percentage}}%"></div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <img src="{{url('/assets/img/hurt.png')}}" alt="Akino-image" class="hurt me-2">
                                <p class="span text-dark-gray fs-12"></p>{{$item->count_total}} supporter's</p>
                            </div>
                            <a href="{{url('/campaign/'. $item->hashed_id)}}" class="btn bg-warning-subtle text-warning-emphasis fw-medium rounded-pill py-1 px-3" style="width: 114px;
                            height: 29px;
                            overflow: hidden;font-size:13px;">Donate Now</a>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
            @endif

        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9 col-xl-9 m-auto">
                <div class="row  ">
                    @if ($impact)
                    @foreach ($impact as $item)
                    <div class="col-6  col-lg-3  my-2 conter-container counter-container"   data-ceil="{{$item->total_number}}">
                        <h2 class="text-linear-yellow fs-50 fw-bold text-center " ><span class="counter" data-ceil="{{$item->total_number}}">0</span>K+</h2>
                        <p class="fs-6 fs-md-6 text-center">{{$item->name}}</p>
                    </div>
                    @endforeach
                    @endif
                  
                   
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid w-max ">
        <div class="row " >
            <img src="{{url('/assets/img/indexbanner/sectionpng.webp')}}" alt="" srcset=""  class=" z-5 px-0 w-100">
        </div>
    </div>
 
    
        <div class=" px-md-3 px-2 mt-5" data-aos="fade-up" data-aos-duration="500">
            <div class="d-flex align-items-center">
               
            </div>
            <p class="fs-30 col-xl-7 col-md-10 col-12 ps-2 pt-2  fw-600 lh-sm">How Do We Help Our Bharat Today?</p>
            <p class="fs-12 ps-2 col-xl-8 mb-70">
                AKINO, Representing the Rising Sun, actively uplifts Bharat by promoting child education and empowering women to cultivate future leaders. With a strong focus on supporting the vulnerable and creating a positive impact, AKINO demonstrates unwavering compassion and dedication to societal growth.</p>
            <div class="owl-carousel owl-theme faculty-carousel" id="campaigninactive">
                @if(isset($directCamp) )
                @foreach ($directCamp as $item)
                    <div class="inactive_campaign position-relative m-auto">
                        @php
                            $subcategory = \App\Models\Subcategory::find($item->campiagn_type);
                        @endphp
                        @if($subcategory)
                            <img src="{{url($subcategory->banner)}}" alt="{{$subcategory->name}}" class="position-absolute z-1">
                            <div class="position-absolute bottom-0 end-0 z-3 rounded-4 h-50 w-100">
                                <a href="{{url('/campaign/'.encrypt($item->id))}}" class="text-decoration-none"> <h5 class=" text-white fw-medium fs-20 mt-5 mb-4 ps-3 ">{{$subcategory->name}}</h5></a>
                               
                                <div class="inactive_content mb-2">
                                    <p class="fs-14 text-white ps-3">{{$item->short_description}}{{$item->id}}  </p>
                                </div>
                                <a href="{{url('/campaign/'.encrypt($item->id))}}" class="text-white fs-12 ps-3">Read more</a>
                            </div>
                        @endif
                    </div>
                @endforeach
            @endif

            </div>
        </div>
     
    
     <section>
        <div class="container-fluid w-max d-none">
            <div class="row">
                <div class="col-lg-5 ps-5">
                    <p class="mt-5"> <span class="fw-bold">At Akino</span>, our mission is to cradle the forgotten dreams, transforming them into vibrant realities. With unwavering compassion, we embrace the underprivileged, nurturing their aspirations through education, empowerment, and unwavering support.</p>
                    <p>Our hands reach out to lift those struck by disaster, weaving threads of hope into shattered lives. Together, we paint stories of courage, resilience, and triumph, rekindling faith and igniting the spark of transformation.</p>
                    <p> You Too Have A Stake In This Collective Responsibility. Click Here To Contribute.</p>
                </div>
            <div class="col-lg-7 px-0">
                <img src="{{url('/assets/img/indexbanner/akinophoto.webp')}}" alt="" srcset="" class="img-fluid">
            </div>
            </div>
        </div>
     </section>
  
        


    <div class="container my-0 bg-danger">
        <div class="row">
            <div class="col-6 text-center">
              
            </div>
        </div>
    </div>

     @if($activity)
    <section>
        <div class="container-fluid w-max">
            <div class="row">
                <div class="col-12 position-relative px-0 blog-container">
                    <div class="active-container position-absolute z-1 w-100">

                    </div>
                    <div class="position-absolute z-2 my-5 w-100 overflow-hidden">
                        {{-- <p class="fs-12 px-4">Updates And News</p> --}}
                      <div class="col-12 px-4 mb-4 d-flex " style="height: 50px;">
                        <h3 class="text-md-center"> Check out Our Blogs</h3>
                      </div>
                        <div class="owl-carousel owl-theme" id="blogslider" data-aos="fade-up" data-aos-duration="500">
                                    @php
                                    $colors = ['bg-orange', 'bg-purple', 'bg-indigo'];
                                     @endphp
                            @foreach ($activity  as $index => $item)
                            <div class="blog-card " >
                                @php
                                $colorClass = $colors[$index % count($colors)];
                            @endphp
                                <div class="row {{ $colorClass }} rounded-3">
                                    <div class="col-12 px-0"><img src="{{$item->index_banner}}" alt="" srcset="" class="img-cover w-100 rounded-top-3">
                                    </div>
                                    <div class="col-12 py-4 px-5 h-320 rounded-bottom-2">
                                        <a href="{{ url('/activitydetail', ['id' => $item->hashed_id]) }}" class="text-decoration-none"><h4 class="text-white fs-20 heading-content">{{$item->title}},</h4></a>
                                        
                                        <p class="fs-14 text-white fw-light mt-3 para2">{{$item->description}}</p>
                                        <div class="d-flex H-75">
    
                                            <a href="{{ url('/activitydetail', ['id' => $item->hashed_id]) }}" class="text-white glass-effect text-decoration-none py-2 px-5 rounded-pill align-self-end"> Read More</a>
                                        </div>
                                    </div>
                                </div>
                               </div>
                            @endforeach
                           
                    
                        </div>
                        {{-- <div class="w-100 overflow-hidden"> --}}

                        
                        {{-- <div class="owl-carousel owl-theme faculty-carousel" id="campaigninactive">
                            <div class="inactive_campaign position-relative m-auto">
                              <img src="{{url('/assets/img/indexbanner/childeren.webp')}}" alt="" srcset="" class="position-absolute z-1">
                              <div class="position-absolute bottom-0  end-0 z-3 rounded-4  h-50 w-100 ">
                                  <h5 class="text-white fw-medium fs-18  mt-5 mb-2 ps-3">Child Education</h5>
                                  <div class="inactive_content mb-2">
                                      <p class="fs-12 text-white ps-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, reiciendis.</p>
                                  </div>
                                  <a href="#" class="text-white fs-12 ps-3">Read more</a>
                              </div>
                            </div>
                            <div class="inactive_campaign position-relative  m-auto">
                              <img src="{{url('/assets/img/indexbanner/doctor.webp')}}" alt="" srcset="">
                              <div class="position-absolute bottom-0  end-0 z-3 rounded-4  h-50 w-100 ">
                                  <h5 class="text-white fw-medium fs-18  mt-5 mb-2 ps-3">Health Care</h5>
                                  <div class="inactive_content mb-2">
                                      <p class="fs-12 text-white ps-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, reiciendis.</p>
                                  </div>
                                  <a href="#" class="text-white fs-12 ps-3">Read more</a>
                              </div>
                            </div>
                            <div class="inactive_campaign position-relative  m-auto">
                              <img src="{{url('/assets/img/indexbanner/skill.webp')}}" alt="" srcset="">
                              <div class="position-absolute bottom-0  end-0 z-3 rounded-4  h-50 w-100 ">
                                  <h5 class="text-white fw-medium fs-18  mt-5 mb-2 ps-3">Skill Development</h5>
                                  <div class="inactive_content mb-2">
                                      <p class="fs-12 text-white ps-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, reiciendis.</p>
                                  </div>
                                  <a href="#" class="text-white fs-12 ps-3">Read more</a>
                              </div>
                            </div>
                            <div class="inactive_campaign position-relative  m-auto">
                              <img src="{{url('/assets/img/indexbanner/women.webp')}}" alt="" srcset="">
                                              <div class="position-absolute bottom-0  end-0 z-3 rounded-4  h-50 w-100 ">
                                  <h5 class="text-white fw-medium fs-18  mt-5 mb-2 ps-3">Women Empowerment</h5>
                                  <div class="inactive_content mb-2">
                                      <p class="fs-12 text-white ps-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, reiciendis.</p>
                                  </div>
                                  <a href="#" class="text-white fs-12 ps-3">Read more</a>
                              </div>
                            </div>
                            <div class="inactive_campaign position-relative  m-auto">
                              <img src="{{url('/assets/img/indexbanner/women.webp')}}" alt="" srcset="">
                            </div>
                          
                          </div>
                    </div> --}}
                {{-- </div> --}}
                 </div>
            </div>
        </div>
    </section>
 @endif 
 
 <section class="my-5 container-fluid w-max  ">
    @if($socialmedia)
    <div class="row socalmedia_container">
         <div class="col-12 col-md-6 col-lg-4 px-2 ">
         
            @foreach($socialmedia as $item)
            @if($item->socialmediatype === 'instagram')
                
                   {!! $item->embed_code !!}
                    
            
            @endif
        @endforeach 
       

         </div>
         <div class="col-12 col-md-6 col-lg-4 px-5 iframe-container gap-3">
            @foreach($socialmedia as $item)
            @if($item->socialmediatype === 'facebook')
            {!! $item->embed_code !!}
            @endif
            @endforeach 
           
        </div>
         <div class="col-12 col-md-6 col-lg-4 px-5">
            @foreach($socialmedia as $item)
            @if($item->socialmediatype === 'twiter')
            {!! $item->embed_code !!}
            @endif
            @endforeach 
        </div>
      
       
       
    


    
    </div>
    @endif
    <div class="row my-5 d-flex justify-content-center">
        <ul class="list-style-none d-flex gap-4 my-5 mx-auto justify-content-center">
            <li><a href="https://www.facebook.com/akinofoundationofficial" class="text-decoration-none  fs-5  bg-linear-yellow text-white rounded-circle icon-size"><i class="fa-brands fa-facebook-f"></i></a></li>
            <li><a href="https://www.instagram.com/akino__foundation/" class="text-decoration-none fs-5   bg-linear-yellow text-white rounded-circle icon-size"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="https://x.com/akinofoundation" class="text-decoration-none fs-5  bg-linear-yellow text-white rounded-circle icon-size"><i class="fa-brands fa-x-twitter"></i></a></li>
            <li><a href="https://www.linkedin.com/company/akino-foundation/" class="text-decoration-none fs-5  bg-linear-yellow text-white rounded-circle icon-size"><i class="fa-brands fa-linkedin-in"></i></a></li>
            <li><a href="https://www.youtube.com/results?search_query=akinofoundation" class="text-decoration-none fs-5 icon-size bg-linear-yellow text-white rounded-circle"> <i class="fa-brands fa-youtube"></i></a></li>
        </ul>
    </div>
 </section>
 
 <section class="my-3">
    <div class="container px-0 d-none">
    
        <p class="fs-30 col-xl-7 col-md-10 col-12 ps-2 pt-2  fw-600 lh-sm">Our Supporting Partner's</p>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <img src="{{url('/assets/img/indexbanner/bg-yelllow.webp')}}" alt="" width="250"  srcset="" class="img-fluid my-2">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <img src="{{url('/assets/img/indexbanner/bg-yelllow.webp')}}" alt="" width="250"  srcset="" class="img-fluid my-2">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <img src="{{url('/assets/img/indexbanner/bg-yelllow.webp')}}" alt="" width="250"  srcset="" class="img-fluid my-2">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <img src="{{url('/assets/img/indexbanner/bg-yelllow.webp')}}" alt="" width="250"  srcset="" class="img-fluid my-2">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <img src="{{url('/assets/img/indexbanner/bg-yelllow.webp')}}" alt="" width="250"  srcset="" class="img-fluid my-2">
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <img src="{{url('/assets/img/indexbanner/bg-yelllow.webp')}}" alt="" width="250"  srcset="" class="img-fluid my-2">
            </div>
   
        </div>

    </div>
</section>
  <section class="container my-5">
<h3 class="text-center fs-1 fw-semibold">Get Involved</h3>
<div class="row mt-3">
<div class="col-12 col-md-6 col-lg-4 p-2">
    <div class="involved-box  px-4 py-3 rounded-3 m-auto bg-light">
        <img src="{{url('/assets/img/support.png')}}" alt="" width="72" height="72">
        <h5 class="fw-semibold mt-4 fs-4">Show to Support</h5>
        <div class="involved-content fs-14 mt-2 fw-medium">
            Every contribution counts! Your support helps provide essential resources to those in need. Donate, advocate, or spread the word—together, we can create a brighter future.
        </div>
        <a href="{{url('donate')}}" class="d-inline-block mt-4 text-decoration-none ">Donate now&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
    </div>
</div>
<div class="col-12 col-md-6 col-lg-4 p-2 ">
    <div class="involved-box px-4 py-3 rounded-3 m-auto bg-light">
        <img src="{{url('/assets/img/volunteer-home-icon.png')}}" alt="" width="72" height="72">
        <h5 class="fw-semibold mt-4 fs-4">Volunteer with Us</h5>
        <div class="involved-content fs-14 mt-2 fw-medium">
            Stronger together! Partner with Akinofoundation to drive meaningful change. Let’s collaborate to empower communities and build a better tomorrow.
        </div>
        <a href="{{url('volunteering')}}" class="d-inline-block mt-4 text-decoration-none ">Join Us&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
    </div>
</div>
<div class="col-12 col-md-6 col-lg-4 p-2">
    <div class="involved-box  px-4 py-3 rounded-3 m-auto bg-light">
        <img src="{{url('/assets/img/partner.png')}}" alt="" width="72" height="72">
        <h5 class="fw-semibold mt-4 fs-4">Partner with Us</h5>
        <div class="involved-content fs-14 mt-2 fw-medium">
            Be the change! Volunteer with Akinofoundation and help transform lives through education, healthcare, and community support. Your time and skills can make a lasting impact.
        </div>
        <a href="{{url('volunteering')}}" class="d-inline-block mt-4 text-decoration-none ">Know more&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
    </div>
</div>
</div>
  </section>
  {{-- <section class="container px-2 my-5`">
    <div class="row rounded-4 bg-light px-4 py-4">
        <div class="col-lg-6 d-flex align-items-center">
            <h2 class="fs-1 fw-semibold">Proud to be one of the world’s highest-rated nonprofits</h2>
        </div>
        <div class="col-lg-6">
            <div class="row">
                <div class="col-md-4 col-6">
                    <img src="{{url('/assets/img/certifedlogpng.png')}}" alt="" srcset="" class="m-auto img-cover">
                </div>
                <div class="col-md-4 col-6">
                    <img src="{{url('/assets/img/certifedlogpng.png')}}" alt="" srcset="" class="m-auto img-cover">
                </div>
                <div class="col-md-4 col-6">
                    <img src="{{url('/assets/img/certifedlogpng.png')}}" alt="" srcset="" class="m-auto img-cover">
                </div>
                
            </div>
        </div>
    </div>
  </section> --}}
<section>
    <!-- Bootstrap Modal -->

   
 
    <!-- Modal -->
  
</section>




    </div>
@include('common.footer')
    @section('script')
   
    <script>



    </script>

    @stop
    @stop 