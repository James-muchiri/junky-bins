@extends('user.includes.index')
@section('content')

<section class="page_breadcrumbs ds parallax section_padding_top_65 section_padding_bottom_65" style="background-position: 50% 2px;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="highlight">Contact</h2>
                <ol class="breadcrumb darklinks">
                    <li>
                        <a href="/">
                Home
            </a>
                    </li>

                    <li class="active">Contact Us</li>
                </ol>
            </div>
        </div>
    </div>
</section>


<div class="sr-why-us-wrapper top-spacer bottom-spacer">
    <div class="sr-section-bg-arrows sr-left-bg-arrows">
            </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="sr-why-us-info mb-comman">
                    <div class="sr-section-title">
                                                <span class="sr-sub-title">
                            <span>
                            Why Choose Us							</span>
                        </span>
                                                <h4 class="sr-colored-heading">We Are Here To Give You The Best
                                                                              <span>SERVICE WITH INTEGRITY</span>
                        </h4>
                                            </div>
                    <span class="sr-why-us-desc"><p>We provide Residential, Commercial, Hospitality and Industrial Waste Collection, Transportation and Disposal of the waste. Junky Bins encourages recycling, reducing waste and reusing the waste.
                        We use modern technology in providing our clients with tailor-made Waste Management Solutions.</p></span>					<div class="sr-why-section">
                        <div class="sr-why-inner">
                            <div class="sr-why-icon">
                                <img src="//kamleshyadav.com/wp/sunrays/home-one/wp-content/uploads/sites/2/2021/02/target.svg" alt="image">							</div>
                            <div class="sr-why-info">
                                <h4>Our Mission</h4><p></p><p>To provide our clients with a one-stop shop in waste-management to achieve a conducive working and leisure environment with zero waste and zero landfill.</p><p></p>							</div>
                        </div>
                    </div>
                                        <div class="sr-why-section">
                        <div class="sr-why-inner">
                            <div class="sr-why-icon">
                                <img src="//kamleshyadav.com/wp/sunrays/home-one/wp-content/uploads/sites/2/2021/02/vision.svg" alt="image">							</div>
                            <div class="sr-why-info">
                                <h4>Our Vision</h4><p></p><p>With our infinite imagination and passion, we are committed to becoming the Melting Pot of solutions towards Zero waste and Zero land fill.
                                    We embrace concern about Environmentalism and action aimed at
                                    protecting theEnvironment. </p><p></p>							</div>
                        </div>
                    </div>
                                    </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 pics-slide">

                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <img src="{{ asset('images/12/Consultancy.jpg') }}" alt="Los Angeles" style="width:100%;">
                    </div>

                    <div class="item">
                      <img src="{{ asset('images/12/Garbage-collection.jpg') }}" alt="Chicago" style="width:100%;">
                    </div>

                    <div class="item">
                      <img src="{{ asset('images/12/gardening.jpg') }}" alt="New york" style="width:100%;">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/12/hedge-cutting.jpg') }}" alt="New york" style="width:100%;">
                      </div>
                      <div class="item">
                        <img src="{{ asset('images/12/21.jpeg') }}" alt="New york" style="width:100%;">
                      </div>
                      <div class="item">
                        <img src="{{ asset('images/12/22.jpeg') }}" alt="New york" style="width:100%;">
                      </div>
                      <div class="item">
                        <img src="{{ asset('images/12/23.jpeg') }}" alt="New york" style="width:100%;">
                      </div>
                      <div class="item">
                        <img src="{{ asset('images/12/24.jpeg') }}" alt="New york" style="width:100%;">
                      </div>
                      <div class="item">
                        <img src="{{ asset('images/12/25.jpeg') }}" alt="New york" style="width:100%;">
                      </div>
                      <div class="item">
                        <img src="{{ asset('images/12/26.jpeg') }}" alt="New york" style="width:100%;">
                      </div>
                      <div class="item">
                        <img src="{{ asset('images/12/27.jpeg') }}" alt="New york" style="width:100%;">
                      </div>
                      <div class="item">
                        <img src="{{ asset('images/12/28.jpeg') }}" alt="New york" style="width:100%;">
                      </div>
                      <div class="item">
                        <img src="{{ asset('images/12/29.jpeg') }}" alt="New york" style="width:100%;">
                      </div>
                  </div>

                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>

                            </div>
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>

<script type="text/javascript" src="{{ asset('js/vendor/jquery-3.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script>

/*=========== Mobile Menu ===========*/

$('nav.mainmenu__nav').meanmenu({
meanMenuClose: 'X',
meanMenuCloseSize: '18px',
meanScreenWidth: '991',
meanExpandableChildren: true,
meanMenuContainer: '.mobile-menu',
onePage: true
});



</script>
@include("user.includes.footer")
@endsection
