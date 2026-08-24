<footer class="bg-dark container-fluid w-max px-0 ">
    <div class="row px-md-5 mx-0">
        <div class=" col-md-6 py-5">
            <a href="{{url('/')}}">

                <img src="{{url('/assets/img/logo.png')}}" alt="" srcset="" width="180">
            </a>
            <p class=" mt-4 fs-18 text-secondary">Akinofoundation: The Rising Sun Foundation is committed to empowering individuals and communities through education, healthcare, and sustainable development. We believe in creating opportunities that uplift lives, fostering a future where everyone has the resources to thrive. </p>
            {{-- <p class=" mt-4 fs-18 text-secondary"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p> --}}
          
        </div>
        
        <div class="col-md-6 d-none d-lg-block">
            <div class="bg-secondary w-50 m-auto rounded-bottom-4">
                <div class="py-5">

                    <h5 class="fw-bold ps-4">Who we are?</h5>
                    <ul class="list-style-none fs-5 text-capitalize">
                        {{-- <li><a href="{{url('/')}}" class="d-inline-block py-2 text-decoration-none text-body-secondary fw-semibold">Home</a></li> --}}
                        <li><a href="{{url('activities')}}" class="d-inline-block py-2 text-decoration-none text-body-secondary fw-semibold">Activity</a></li>
                        <li><a href="{{url('volunteering')}}" class="d-inline-block py-2 text-decoration-none text-body-secondary fw-semibold">volunteer</a></li>
                        <li><a href="{{url('donate')}}" class="d-inline-block py-2 text-decoration-none text-body-secondary fw-semibold">Donate Now</a></li>
                        <li><a href="{{url('contact')}}" class="d-inline-block py-2 text-decoration-none text-body-secondary fw-semibold">Contact us</a></li>
                      
                    </ul>
                    <ul class="d-flex gap-3 list-style-none">
                        <li><a href="https://www.facebook.com/akinofoundationofficial" class="d-inline-block py-2 text-decoration-none fw-bold fs-5 text-dark"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="https://www.instagram.com/akino__foundation/" class="d-inline-block py-2 text-decoration-none fw-bold fs-5 text-dark"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="https://x.com/akinofoundation" class="d-inline-block py-2 text-decoration-none fw-bold fs-5 text-dark"><i class="fa-brands fa-x-twitter"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/akino-foundation/" class="d-inline-block py-2 text-decoration-none fw-bold fs-5 text-dark"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a href="https://www.youtube.com/results?search_query=akinofoundation" class="d-inline-block py-2 text-decoration-none fw-bold fs-5 text-dark"><i class="fa-brands fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6 d-block d-lg-none">
            <div class=" w-50 m-auto rounded-bottom-4">
                <div class="">

                    <h5 class="fw-bold ps-4">Who we are?</h5>
                    <ul class="list-style-none fs-5 text-capitalize">
                        <li><a href="{{url('activities')}}" class="d-inline-block py-2 text-decoration-none text-secondary fw-semibold">Activity</a></li>
                        <li><a href="{{url('volunteering')}}" class="d-inline-block py-2 text-decoration-none text-secondary fw-semibold">volunteer</a></li>
                        <li><a href="{{url('donate')}}" class="d-inline-block py-2 text-decoration-none text-secondary fw-semibold">donate</a></li>
                        <li><a href="{{url('contact')}}" class="d-inline-block py-2 text-decoration-none text-secondary fw-semibold">contact us</a></li>
                      
                    </ul>
                    <ul class="d-flex gap-3 list-style-none">
                        <li><a href="https://www.facebook.com/akinofoundationofficial" class="d-inline-block py-2 text-decoration-none fw-bold fs-5 text-dark"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="https://www.instagram.com/akino__foundation/" class="d-inline-block py-2 text-decoration-none fw-bold fs-5 text-dark"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="https://x.com/akinofoundation" class="d-inline-block py-2 text-decoration-none fw-bold fs-5 text-dark"><i class="fa-brands fa-x-twitter"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/akino-foundation/" class="d-inline-block py-2 text-decoration-none fw-bold fs-5 text-dark"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a href="https://www.youtube.com/results?search_query=akinofoundation" class="d-inline-block py-2 text-decoration-none fw-bold fs-5 text-dark"><i class="fa-brands fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9 col-lg-6">
            <form action="" method="post" class="mt-5 pe-4">
                <h5 class="text-white">Sign Up for Newletter</h5>
                <div class="d-flex gap-2 gap-md-3 mt-3">
                    <input type="email" name="" id="" placeholder="please enter your email" class="form-control py-2 py-md-3 rounded-1 w-full border border-white bg-dark text-white">
                    <input type="submit" class="bg-yellow rounded-1 text-dark fw-md-semibold px-2 px-md-4 py-1 py-md-2" value="Subscribe">
                </div>
            </form>
        </div>
        <div class="col-12">
            <div class="bg-dark py-2 d-flex flex-wrap justify-content-between">
                <div >  <a href="#" class="text-white fs-14 nav-link">Copyright © <script>document.write(/\d{4}/.exec(Date())[0])</script> Akino Foundation, All Rights
                    Reserved.</a></div>
                <div class="d-flex my-2">  <a href="{{url('/privacy')}}" class="nav-link text-white fs-14 ps-3">Privacy Policy |</a>
                    <a href="{{url('/condition')}}" class="nav-link text-white fs-14 ps-3">Terms & Conditions</a></div>
               
            </div>
        </div>
    </div>
    
</footer>