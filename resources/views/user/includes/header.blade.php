
      <header class="header">
        <div class="container-fluid sr-header" style="padding: 0px">

                <div class="col-md-12 header-juu" style="color: white;">




                    <strong id="strip">
                        <a href="/About_us">About us</a>
                        <a href="/contact_us">Contact us</a>
                        <a href="/FAQs">FAQs</a>
            </strong>
                        <strong style="float:right;" id="supp">


                        <a>  Call us on:  <i class="fa fa-phone ml-2"></i>  0722 206 260    </a>  &nbsp;&nbsp;
                        <a>  Whatsapp:    </a>
                        <a style="" class="fbc" href="https://api.whatsapp.com/send?phone=254722206260 ">  <i class="fa fa-whatsapp" style="font-size:20px;color:white" id="whatsapp" aria-hidden="true">  </i></a>
                        &nbsp;&nbsp;


                    </strong>
                </div>






            <div class="container-fluid headr" id="header">

        <div class="row align-items-center full_size header_v">
            <div class="col-lg-3" >
                <div class="logo" >
                    <a href="{{ url('/') }}" >
                        <img src="{{ asset('images/12/JUNKY-LOGO-NEW-1.png') }}" alt="junky bins">
                    </a>
                </div>
            </div>
            <div class="col-lg-9">

                <nav class="mainmenu__nav" style="float:left; padding-top:30px;">
                <ul class="mainmenu">
                <!-- <li><a href="{{ url('/home') }}"><span class="d-none d-sm-block d-sm-none "><i class="fa fa-home"></i></span><span class="d-lg-none d-xl-none d-md-none">Home</span> </a></li> -->


                    <li class="drop">
                    <a class="" href="{{ url('/') }}">Home</a>

                    </li>
                    <li class="drop" >
                                            <a class="" href="{{ url('/our_services') }}">Our Services</a>
                                            <ul class="dropdown__menu">
                        <li><a class=""  href="{{ url('/garbage_collection') }}">Garbage Collection</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class=""  href="{{ url('/coming-soon') }}">Gardening</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="" href="{{ url('/coming-soon') }}">Landscaping</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="" href="{{ url('/coming-soon') }}">Clearing Hedge Cutting</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="" href="{{ url('/recycling') }}">Recycling</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="" href="{{ url('/coming-soon') }}">Consultancy</a></li>


                    </ul>
                                        </li>
                    <li><a class="" href="{{ url('/blogs') }}">Blogs</a></li>
                    <li><a class="" href="{{ url('/pricing') }}">Pricing</a></li>
                    <li><a class="" href="{{ url('/recycling') }}">Recycling</a></li>




                </ul>
                </nav>

                <div class="header-one__right">
                    <a href="contact.html">
                        <i class="wastey-icon-9"></i>
                        Request pickup
                    </a>
                </div>

                                </div>


    </div>

     <!-- Mobile Menu -->
     <div class="mobile-menu mobile_size">
        <div class="logo">
            <a href="{{ url('/') }}" style="height: 50px;width:50px;"><img src="{{ asset('images/12/JUNKY-LOGO-NEW-1.png') }}" alt="junky bins" ></a>
        </div>

    </div>
    <!-- Mobile Menu -->
</div>
</div>




      </header>
