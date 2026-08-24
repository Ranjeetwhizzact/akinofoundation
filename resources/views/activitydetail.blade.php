@extends('layouts.app')
@section('title', $activity->title. ' | Akino Foundation')
@section('style')
 <meta property="og:title" content="{{$activity->title}}">
<meta property="og:description" content="{{$activity->description}}">
<meta property="og:image" content="{{$activity->Main_image}}">
<meta property="og:url" content="{{Request::fullUrl()}}">
<meta property="og:type" content="website">
<meta property="og:site_name" content="akinofoundation.org">

<link rel="stylesheet" href="{{url('/assets/css/style.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/theme.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/index.css')}}">

@stop
@section('content')

@include('common.navigation')

<main class="my-2">
<div class="container activity-detail">
    <div class="activity-detail-header mt-3 ">
         <div class="activity-banner my-5 w-max">
    <img src="{{$activity->Main_image}}" alt="{{$activity->title}}" srcset="" class="img-cover">
  </div>
        <h2 class="mt-5">{{$activity->title}}</h2>
        <p>Published on <span class="fw-bold text-yellow">December 30, 2023</span></p>
        <ul class="d-flex flex-wrap">
            <li><a href="https://www.facebook.com/sharer.php?u={{Request::url()}}&t=text" target="_blank"><i class="fa-brands fa-facebook"></i>Share</a></li>
            <li><a href="https://api.whatsapp.com/send/?text={{Request::url()}}&type=custom_url&app_absent=0" target="_blank"><i class="fa-brands fa-whatsapp"></i>Share</a></li>
            {{-- <li><a href="#" target="_blank"><i class="fa-regular fa-envelope"></i>Share</a></li> --}}
        </ul>
    </div>
 
 
 <p>&nbsp;&nbsp;&nbsp; {{$activity->description}}</p>
 
 @if($gallery)
    <div class="container my-3">
      <div class="position-relative">
        <h2 class="text-yellow fw-600 text-center my-4" >Gallery</h2>
        <a href="{{url('/gallery/'.encrypt($activity->id).'/activity')}} " class="px-3 bg-yellow rounded-pill text-decoration-none text-white py-2 position-absolute top-0 end-0">View More</a>
      </div>
      <ul class="gallery-con d-flex justify-content-between">

       <div class="owl-carousel owl-theme m-auto " id="owl-carousel5">
        
        @foreach ($gallery as $item)
            
        <div class="item m-auto owl-items h-320" data-aos="fade-up" data-aos-duration="500">
          <div class="gallery-card">
            <img src="{{url($item->image)}}" alt="{{$activity->title}}" srcset="">
          </div>
        </div>
        @endforeach

    </div>
      </ul>
    </div>
    @endif
  </section>
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
</script>
@stop
@stop