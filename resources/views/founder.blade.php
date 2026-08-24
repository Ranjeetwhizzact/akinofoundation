@extends('layouts.app')
@section('title','Akino Foundation | ')
@section('style')

<link rel="stylesheet" href="{{url('/assets/css/style.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/theme.css')}}">
<link rel="stylesheet" href="{{url('/assets/css/index.css')}}">

@stop
@section('content')

@include('common.navigation')

    {{-- <div class="container-fluid px-0 mx-0">
        <div class="row py-1 py-md-5 position-relative justify-content-between px-0 mx-0">
            <img src="{{url('/assets/img/indexbanner/bacground.webp')}}" alt="" class="img-fluid position-absolute w-100 min-h-650 top-0 translate-middle-y px-0 -z-1">
            <img src="{{url('/assets/img/indexbanner/bg-yellowwhite.webp')}}" alt="" class="-trans-75 -z-1 img-fluid position-absolute w-100 min-h-250 bottom-0 px-0">
            <div class="col-12 col-lg-6">
                <div class="p-4">
                    <h5 class="about-ceo display-5 fw-semibold" style="margin-bottom: 80px;"><span class="text-white">Founder</span> <br> Pritesh Dilip Kamble </h5>
                    <p class="fs-17">After years of engaging closely with communities, witnessing the profound challenges faced by the underserved areas in education, women's issues, healthcare, and skill development, I was compelled to drive change. </p><p> This led to the creation of our NGO, with a mission to collaborate extensively and foster societal transformation. Our endeavor is to bridge gaps, uplift communities, and ignite hope, empowering individuals to unlock their full potential. Join us in our journey towards making a lasting impact. </p><p> After years of engaging closely with communities, witnessing the profound challenges faced by the underserved areas in education, women's issues, healthcare, and skill development, I was compelled to drive change. This led to the creation of our NGO, with a mission to collaborate extensively and foster societal transformation. Our endeavor is to bridge gaps, uplift communities, and ignite hope, empowering individuals to unlock their full potential. Join us in our journey towards making a lasting impact.</p>
                </div>
              </div>
            <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center">
                <div class="founder-img-div w-100 h-100">
                    <img src="{{url('/assets/img/indexbanner/pritash-dinkar-kamla.webp')}}" alt="" class="img-fluid h-100 w-100 object-fit-contain px-0">
                </div>
            </div>
        </div>
        <div class="row justify-content-center position-relative px-0 mx-0">
            <img src="{{url('/assets/img/indexbanner/bg-yelllow.webp')}}" alt="" class="img-fluid position-absolute w-100 min-h-250 bottom-0 start-0" style="transform: translateY(85%); z-index: calc(-1);">
            <div class="col-12 col-lg-5 d-flex justify-content-center justify-content-lg-end order-1 order-lg-0 mt-5">
                <div class="founder-img-div">
                    <img src="{{url('/assets/img/indexbanner/omkar-sahani.webp')}}" alt="" class="img-fluid h-100 w-100 max-w-400 z-3 object-fit-cover">
                </div>
            </div>
            <div class="col-12 col-lg-6 mt-5 order-0 order-lg-1">
                <div class="p-2 px-md-5">
                    <div class="mb-4">
                        <h5 class="about-ceo display-5 fw-semibold mb-2 mb-md-5"><span class="text-white">Co-Founder</span>  <br> Mamta Omprakash Sahan</h5>
                        <h2 class="fs-33 fw-600">Welcome to Akino</h2>
                        <p class="fs-20 fw-600">We're so Happy you're a part of akino family!</p>
                    </div>
                    <p></p>
                    <p>Our mission is rooted in the belief that through collective effort and strategic partnerships, we can catalyze societal transformation. We are dedicated to closing the gaps that divide us, elevating the spirit of communities, and kindling a flame of hope and empowerment. By enabling individuals to realize their inherent potential, we are not just dreaming of a better future.</p>
                    <p class="mb-0"> we are actively constructing it. Join our movement to make a profound difference.</p>                       
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container-fluid w-max ">
        <div class="row px-0 ">
            <div class="col-12  founder-meassage-con px-0">
        <div class="container px-3 px-sm-0">

       
                   <div class="row" >
   
                    <div class="col-12 col-lg-6 px-1">
                        <h2 class="display-6 fw-medium mt-5 mb-5 px-1"><span class="text-white">Founder</span><br>Pritesh Dilip Kamble </h2>
                
                        <p class="mt-5 pt-3 px-1"><p>The Akino Foundation is an organization founded with a deep commitment to advancing education, healthcare, and environmental conservation. Drawing inspiration from our own experience, the foundation tackles skill development challenges. We have an unwavering passion for creating meaningful change.</p>
                        <p class="px-1">Since its inception on September 14, 2019, the Akino Foundation has achieved several key milestones. These accomplishments testify to the dedication and innovative approach to education and development. The foundation envisions a world where every initiative and program has a transformative impact, and this vision shapes the foundation's ongoing work.
                        </p>
                        <p class="px-1">The foundation believes that "Your generosity is the light that can dispel the darkness of despair and empower communities to rise above flood-related challenges," which serves as the guiding principle behind the foundation's efforts. Through initiatives like the "Shiksha-na-ruke" and "Padhna-Jaruri-hai" campaigns, along with other targeted projects, the foundation continues to inspire change, leading with a clear focus on the cause and driving sustainable, positive impact.</p>
                     </div>


                  
                    <div class="col-12 col-lg-6 d-flex px-1 align-items-center py-5">
                        <img src="{{url('/assets/img/volunteers/founder_pritash.png')}}" alt="" height="650" srcset="" class="w-100 object-fit-cover rounded-2">
                    </div>
                </div>
        </div>
            <div class="col-12 founder-meassage-con1 px-0">
        <div class="container px-3 px-sm-0">
            <div class="row mt-5" >
                <div class="col-12 col-lg-6 d-none d-lg-block ">
                    <img src="{{url('/assets/img/volunteers/cofounder-omkar.jpeg')}}" alt="" height="650" srcset="" class="w-100  object-fit-cover mt-3 ">
                </div>
                <div class="col-12 col-lg-6 px-1  ">
                    <h2 class="display-6 fw-medium mt-5 mb-5"><span class="text-white">Co Founder</span><br>Mamta Omprakash sahani </h2>
            
                    <p class="mt-5 pt-3 px-1">Mr. Pritesh Kamble, a visionary hardware engineer, founded Akino The Rising Sun Foundation. The seeds of this organization were sown in 2015 when a group of like- minded hardware engineers, including Mr. Kamble and Ms. Mamta, embarked on a grassroots campaign to support orphaned & underprivileged children. As the initiative gained momentum, Mr. Kamble took the lead, formalizing the organization's structure and registering it in 2022. Today, Akino The Rising Sun Foundation is a formidable force in civil society, championing the rights and welfare of marginalized communities, with Mr. Kamble at the lead, driving positive change.</p>
                </div>
                <div class="col-12 col-lg-6 d-block px-1 d-lg-none">
                    <img src="{{url('/assets/img/volunteers/cofounder-omkar.jpeg')}}" alt="" srcset="" class="w-100 object-fit-cover mt-3 ">
                </div>

              
             
            </div>
        </div>
               
            </div>
        </div>
        </div>
    </div>

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