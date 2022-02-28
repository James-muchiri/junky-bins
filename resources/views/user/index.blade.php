@extends('user.includes.index')
@section('content')


<style>

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

</style>

        <body>


        <div class="container-fluid carosel">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="https://cdn.pixabay.com/photo/2015/05/31/10/51/technology-791029_960_720.jpg" alt="">
                    <div class="cover">
                        <div class="container">
                            <div class="header-content">
                                <div class="line"></div>
                                <h2>Turning waste in to resource.</h2>
                                <h1>Our Global and Integrated Solutions</h1>
                                <h4>  Our reliable services protect the environment while allowing your home or
                                    business to run like clockwork</h4>
                            </div>
                        </div>
                     </div>
                </div>
                <div class="item">
                    <img src="https://cdn.pixabay.com/photo/2017/10/17/19/11/fantasy-2861815_960_720.jpg" alt="">
                    <div class="cover">
                        <div class="container">
                            <div class="header-content">
                                <div class="line animated bounceInLeft"></div>
                                <h2>Turning waste in to resource.</h2>
                                <h1>Our Global and Integrated Solutions</h1>
                                <h4>  Our reliable services protect the environment while allowing your home or
                                    business to run like clockwork</h4>
                            </div>
                        </div>
                     </div>
                </div>
                <div class="item">
                    <img src="https://cdn.pixabay.com/photo/2017/07/17/23/51/wormhole-2514312_960_720.jpg" alt="">
                    <div class="cover">
                        <div class="container">
                            <div class="header-content">
                                <div class="line animated bounceInLeft"></div>
                                <h2>Turning waste in to resource.</h2>
                                <h1>Our Global and Integrated Solutions</h1>
                                <h4>  Our reliable services protect the environment while allowing your home or
                                    business to run like clockwork</h4>
                            </div>
                        </div>
                     </div>
                </div>
            </div>

        </div>

        <div class="container-fluid" style="background-color: #f1f6f9;">
            <div class="container" >

            <div class="row" style="padding-top: 50px">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                    <div class="sr-section-title">
                                            <span class="sr-sub-title">
                            <span>
                                Our Services						</span>
                        </span>
                                            <h4 class="sr-colored-heading">We Are Providing Best					  <span> Waste Solutions</span>
                        </h4>
                                        </div>
                </div>
            </div>
        </div>


        <div class="container" >
            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 colored">
                        <div class="sr-service-section">
                            <div class="sr-service-inner">
                                                            <div class="sr-service-icon">
                                    <span>
                                        <img src="https://kamleshyadav.com/wp/sunrays/home-one/wp-content/uploads/sites/2/2020/11/Solar-Plants-1.svg" alt="Solar Plants">
                                    </span>
                                </div>
                                                            <h4>Garbage Collection</h4>
                                <p>We have regular garbage collection schedules for our clients ranging from Residential to Corporates. We ensure Timely, Efficient and Effective Services.</p>
                                <a href="/garbage_collection" class="sr-read-more-link">
                                    Read More
                                <span class="sr-arrow"></span>
                                </a>
                                                        </div>
                        </div>
                    </div>
                         
                   
                      
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 colored">
                        <div class="sr-service-section">
                            <div class="sr-service-inner">
                                                            <div class="sr-service-icon">
                                    <span>
                                        <img src="https://kamleshyadav.com/wp/sunrays/home-one/wp-content/uploads/sites/2/2020/11/Power-Energy-1-1.svg" alt="Power Energy">
                                    </span>
                                </div>
                                                            <h4>Recycling</h4>
                                <p>The garbage collected is converted into various resources after sorting and separation. We recycle organic waste into Poultry, pig and Fish feeds. From the residue we produce Organic manure and Fertilizer.
                                   .</p>
                                <a href="/recycling/" class="sr-read-more-link">
                                    Read More
                                <span class="sr-arrow"></span>
                                </a>
                                                        </div>
                        </div>
                    </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 colored">
                        <div class="sr-service-section">
                            <div class="sr-service-inner">
                                                            <div class="sr-service-icon">
                                    <span>
                                        <img src="https://kamleshyadav.com/wp/sunrays/home-one/wp-content/uploads/sites/2/2020/11/Reduced-Costs-1-1.svg" alt="Reduced Costs">
                                    </span>
                                </div>
                                                            <h4>Consultancy</h4>
                                <p>We at Junky Bins guide enterprises in implementing recycling initiatives, negotiate garbage hauling contracts, review past invoices for billing errors, obtain credits for overcharges, and assist with resolving all service issues that relate to Solid Waste Management and recycling.
                                   </p>
                                <a href="/consultancy" class="sr-read-more-link">
                                    Read More
                                <span class="sr-arrow"></span>
                                </a>
                                                        </div>
                        </div>
                    </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                        <div class="sr-btn-wrap">
                            <a href="/our_services" class="sr-btn sr-lg-btn">
                                View All Services						</a>
                        </div>
                    </div>
                        </div>
        </div>
    </div>


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

<div class="container-fluid" style="background-color: #f1f6f9;">
        <div class="sr-testimonials-wrapper sr-has-background top-spacer bottom-padder-80">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                        <div class="sr-section-title">
                                                <span class="sr-sub-title">
                                <span>
                                 Our Team				</span>
                            </span>
                                                <h4 class="sr-colored-heading">Expirienced team
                                                     <span>what they have to say </span>
                            </h4>
                                            </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6  text-center">
                        <div class="sr-section-team">
<div class="team team1">
    <img id="image-456-24" alt="" src="https://junkybins.org/wp-content/uploads/2020/12/WhatsApp-Image-2020-12-08-at-00.18.35.jpeg" class="team-image">
    <div  class="team-name">Lucy Ngorongo</div>
</div>
<div class="team team2">
    <img id="image-456-24" alt="" src="https://junkybins.org/wp-content/uploads/2020/12/WhatsApp-Image-2020-12-08-at-00.18.35.jpeg" class="team-image">
    <div id="" class="team-block">
        <div id="text_block-474-24" class="team-name">Kelvin Muchiri<br></div>
        <div id="text_block-893-11" class="team-text-block">"The environment is where we all meet;where we all have a mutual interest;it is the one thing all of us share"
            </div>
        </div>
    </div>

<div class="team team3">
    <img id="image-456-24" alt="" src="https://junkybins.org/wp-content/uploads/2020/12/WhatsApp-Image-2020-12-08-at-00.18.35.jpeg" class="team-image">
    <div id="" class="team-block">
        <div id="text_block-474-24" class="team-name">Robert Nyabuto<br></div>
        <div id="text_block-893-11" class="team-text-block">"I only feel angry when I see waste.When I see people throwing away things we can Re-use"
            </div>
        </div>
    </div>


                                            </div>
                    </div>
                    <div class="col-sm-6  text-center">
                        <div  class="ceo-block">
                            <img id="image-193-24" alt="" src="https://junkybins.org/wp-content/uploads/2020/12/WhatsApp-Image-2020-12-08-at-00.18.35-300x225.jpeg" class="ct-image" srcset="" sizes="(max-width: 300px) 100vw, 300px">
                            <div id="div_block-905-11" class="ct-div-block"><h2 id="headline-196-24" class="ct-headline dentist-heading-two">Lucy&nbsp; &nbsp;Ngorongo,&nbsp;</h2>
                                <div id="text_block-194-24" class="ct-text-block dentist-subheading">CEO</div></div>
                                <div id="text_block-199-24" class="ct-text-block ">
                                    Junky Bins Company Limited is an independent Private Limited company that specializes in waste collection, transportation and disposal from both residential as well as corporate clients.
                            </div></div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                        <div class="sr-btn-wrap">
                            <a href="/our_services" class="sr-btn sr-lg-btn">
                                More about Our Team						</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>










        <div class="sr-blog-wrapper top-spacer bottom-spacer">
            <div class="sr-section-bg-arrows sr-left-bg-arrows">
                    </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                        <div class="sr-section-title">
                                                <span class="sr-sub-title">
                                <span>
                                    Recent Post						</span>
                            </span>
                                                <h4 class="sr-colored-heading">Read The Our Latest					  <span>Blog Posts</span>
                            </h4>
                                            </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row blog-style-one blogs-slick" data-nav="#slick-nav-2">
                    @foreach ($blogs as $blog )
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="sr-blog-thumb-section">

                                <a class="sr-blog-img" href="/blogbyid/{{$blog['id']}} ">
                                    <div class="sr-blog-img-inner">
                                        <img src="{{ asset('blogtest') }}/{{$blog['header_image']}}" alt="blog image." title="blog image.">
                                    </div>
                                    <span class="sr-blog-date">
                                        <span>02</span>Jan                                </span>
                                    </a>
                                                                    <div class="sr-blog-details">
                                        <div class="sr-blog-data">
                                            <ul>
                                              <li>
                                                <span class="sr-sm-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid" viewBox="0 0 15 15">
                                                          <path d="M12.821,9.696 C12.001,8.879 11.026,8.274 9.962,7.908 C11.114,7.117 11.867,5.787 11.850,4.286 C11.823,1.899 9.838,-0.032 7.443,-0.001 C5.071,0.030 3.151,1.963 3.151,4.335 C3.151,5.816 3.899,7.126 5.039,7.908 C3.975,8.274 3.000,8.879 2.180,9.696 C0.910,10.962 0.150,12.600 0.003,14.363 C-0.026,14.705 0.242,15.000 0.586,15.000 L0.591,15.000 C0.897,15.000 1.149,14.764 1.175,14.460 C1.450,11.222 4.182,8.671 7.500,8.671 C10.819,8.671 13.550,11.222 13.826,14.460 C13.852,14.764 14.104,15.000 14.410,15.000 L14.414,15.000 C14.758,15.000 15.027,14.705 14.998,14.363 C14.850,12.600 14.090,10.962 12.821,9.696 ZM4.328,4.440 C4.268,2.613 5.772,1.113 7.606,1.173 C9.269,1.227 10.619,2.572 10.673,4.230 C10.732,6.058 9.228,7.557 7.395,7.498 C5.732,7.444 4.382,6.098 4.328,4.440 Z"></path>
                                            </svg>
                                            </span>
                                            <a class="sr-blog-authore" href="/blogbyid/{{$blog['id']}} ">
                                            By                                        {{$blog['authorname']}}                                       </a>
                                            </li>
                                            <li>
                                            <span class="sr-sm-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid" viewBox="0 0 20 16">
                                            <path d="M19.208,11.276 C18.679,12.068 17.953,12.736 17.032,13.282 C17.106,13.464 17.182,13.630 17.260,13.781 C17.339,13.934 17.432,14.079 17.539,14.220 C17.647,14.360 17.731,14.470 17.790,14.549 C17.850,14.629 17.947,14.740 18.080,14.884 C18.214,15.028 18.300,15.122 18.337,15.168 C18.345,15.176 18.359,15.193 18.382,15.219 C18.404,15.245 18.421,15.265 18.432,15.276 C18.443,15.287 18.458,15.307 18.476,15.333 C18.495,15.359 18.508,15.380 18.516,15.395 L18.543,15.451 C18.543,15.451 18.551,15.474 18.566,15.520 C18.580,15.565 18.582,15.590 18.571,15.594 C18.560,15.597 18.557,15.622 18.560,15.667 C18.538,15.773 18.489,15.856 18.415,15.917 C18.341,15.978 18.258,16.004 18.169,15.997 C17.798,15.944 17.477,15.883 17.210,15.815 C16.064,15.512 15.030,15.027 14.107,14.360 C13.437,14.481 12.783,14.543 12.143,14.543 C10.126,14.543 8.370,14.043 6.875,13.043 C7.306,13.073 7.634,13.088 7.857,13.088 C9.055,13.088 10.205,12.918 11.305,12.577 C12.406,12.236 13.389,11.747 14.252,11.111 C15.182,10.413 15.897,9.611 16.395,8.703 C16.894,7.794 17.143,6.831 17.143,5.817 C17.143,5.233 17.057,4.658 16.886,4.089 C17.846,4.627 18.605,5.301 19.163,6.111 C19.721,6.922 20.000,7.794 20.000,8.725 C20.000,9.634 19.736,10.484 19.208,11.276 ZM11.802,10.856 C10.594,11.375 9.278,11.634 7.857,11.633 C7.217,11.633 6.562,11.573 5.893,11.452 C4.970,12.118 3.936,12.603 2.790,12.906 C2.522,12.974 2.203,13.035 1.831,13.088 L1.797,13.088 C1.715,13.088 1.639,13.058 1.568,12.997 C1.498,12.937 1.455,12.857 1.439,12.759 C1.432,12.736 1.429,12.711 1.429,12.685 C1.429,12.659 1.431,12.634 1.434,12.611 C1.438,12.588 1.445,12.565 1.456,12.543 L1.484,12.486 C1.484,12.486 1.498,12.466 1.524,12.424 C1.549,12.383 1.565,12.363 1.568,12.367 C1.572,12.371 1.589,12.352 1.619,12.311 C1.648,12.269 1.663,12.252 1.663,12.259 C1.700,12.214 1.786,12.119 1.920,11.975 C2.053,11.831 2.151,11.720 2.210,11.640 C2.270,11.561 2.353,11.451 2.461,11.310 C2.569,11.170 2.662,11.024 2.740,10.873 C2.818,10.722 2.894,10.555 2.969,10.373 C2.046,9.828 1.321,9.158 0.793,8.362 C0.264,7.567 0.000,6.718 0.000,5.817 C0.000,4.764 0.350,3.791 1.050,2.897 C1.749,2.004 2.703,1.297 3.912,0.778 C5.121,0.259 6.436,-0.001 7.857,-0.001 C9.279,-0.001 10.594,0.259 11.802,0.778 C13.012,1.297 13.966,2.003 14.665,2.897 C15.364,3.791 15.714,4.764 15.714,5.817 C15.714,6.870 15.364,7.844 14.665,8.737 C13.966,9.631 13.012,10.337 11.802,10.856 ZM13.410,3.647 C12.826,2.973 12.039,2.439 11.049,2.044 C10.059,1.651 8.996,1.454 7.857,1.454 C6.719,1.454 5.655,1.651 4.665,2.044 C3.676,2.439 2.889,2.973 2.305,3.647 C1.721,4.320 1.429,5.044 1.429,5.817 C1.429,6.438 1.626,7.036 2.020,7.612 C2.415,8.188 2.969,8.688 3.683,9.112 L4.766,9.748 L4.375,10.702 C4.628,10.551 4.859,10.403 5.067,10.259 L5.558,9.907 L6.150,10.021 C6.730,10.126 7.300,10.179 7.857,10.179 C8.996,10.179 10.059,9.983 11.049,9.589 C12.039,9.196 12.826,8.661 13.410,7.987 C13.994,7.313 14.286,6.590 14.286,5.817 C14.286,5.044 13.994,4.320 13.410,3.647 Z"></path>
                                            </svg>
                                            </span>
                                            <a href="/blogbyid/{{$blog['id']}} "> {{$blog['comments_count']}}   Comments                    					    </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a  href="/blogbyid/{{$blog['id']}} ">
                                        <h4 class="sr-blog-title">
                                            {{$blog['bloginfo']}}                                  </h4>
                                    </a>
                                    <p>  {{$blog['blog_description']}} </p>
                                    <a  href="/blogbyid/{{$blog['id']}} " class="sr-read-more-link">
                                        Read More    								<span class="sr-arrow"></span>
                                    </a>
                                   </div>
                                </div>
                            </div>
                    @endforeach


                    </div>
                    <div class="row">
                        <div class="col-sm-9 text-center">
                            <div class="sr-btn-wrap">
                                <a href="blogs/" class="sr-btn sr-lg-btn">
                                    View All Blogs						</a>
                            </div>
                        </div>
                        <div class="col-sm-3 align-items-center next-button">
                            <div id="slick-nav-2" class="products-slick-nav"></div>

                        </div>
                    </div>


            </div>

        </div>

        <div class="container-fluid" style="background-color: #f1f6f9;">
            <div class="sr-testimonials-wrapper sr-has-background top-spacer bottom-padder-80">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                            <div class="sr-section-title">
                                                    <span class="sr-sub-title">
                                    <span>
                                     FAQS				</span>
                                </span>
                                                    <h4 class="sr-colored-heading">FREQUENTLY ASKED QUESTIONS
                                                         <span>Answered </span>
                                </h4>
                                                </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="products-slick" data-nav="#slick-nav-1">
                            <!-- product -->
                            @foreach ( $faqs as $faq)
                            <div class="faqs">

                                <div class="faqs-body">
                                    <h3 style="text-align: center;" class="faqs-h4"><a target="_self" data-action="url" class="moto-link" href="/faqs/{{$faq->faqs_group}}">
                                        {{$faq->question}}
                                    </a>
                                </h3>
                                <p style="text-align: center;" class="moto-text_normal">&nbsp;</p>
                                <p style="text-align: center;" class="moto-text_normal">{{$faq->answer}}</p>                                    </div>

                            </div>
                            <!-- /product -->

@endforeach






                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-9 text-center">
                            <div class="sr-btn-wrap">
                                <a href="/FAQs" class="sr-btn sr-lg-btn">
                                    FAQs					</a>
                            </div>
                        </div>
                        <div class="col-sm-3 align-items-center next-button">
                            <div id="slick-nav-1" class="products-slick-nav"></div>

                        </div>
                    </div>


        </div>
            </div>
        </div>

    </body>

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
