@extends('user.includes.index')
@section('content')

<div class="faqs service--2 pb--20 pt--40 text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section__title--call text-center">
                        <h3>Frequently Asked Questions</h3>
                    </div>
                </div>
            </div>
            <div class="row mt--20 align-items-center">
                <!-- Start Single Service -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 text-center">
                    <div class="service ">
                        <a href="/FAQS-group">
                            <i class="fa fa-gears" style="font-size:36px"></i>
                            <p>General</p>
                        </a>
                    </div>
                </div>
                <!-- End Single Service -->
                <!-- Start Single Service -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 xs__mt--40">
                    <div class="service">
                      <a href="/FAQS-group">
                       
                        <i class="fa fa-trash-o" style="font-size:36px"></i>
                            <p>Recycling</p>
                        </a>
                    </div>
                </div>
                <!-- End Single Service -->
                <!-- Start Single Service -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 md__mt--40 sm__mt--40">
                    <div class="service">
              <a href="/FAQS-group">
                       
                <i class="fa fa-gears" style="font-size:36px"></i>
                            <p>
                                Waste-Management
                            </p>
                        </a>
                    </div>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="row mt--50 align-items-center">
                <!-- Start Single Service -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 text-center">
                    <div class="service">
                <a href="/FAQS-group">
                       
                    <i class="fa fa-trash-o" style="font-size:36px"></i>
                            <p>Gardening</p>
                        </a>
                    </div>
                </div>
                <!-- End Single Service -->
                <!-- Start Single Service -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 xs__mt--40">
                    <div class="service">
                   <a href="/FAQS-group">
                          
                    <i class="fa fa-trash-o" style="font-size:36px"></i>
                    <p>Gardening</p>
                        </a>
                    </div>
                </div>
                <!-- End Single Service -->
                <!-- Start Single Service -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 md__mt--40 sm__mt--40">
                    <div class="service">
            <a href="/FAQS-group">
                  
                <i class="fa fa-trash-o" style="font-size:36px"></i>
                            <p>Other</p>
                        </a>
                    </div>
                </div>
                <!-- End Single Service -->
            </div>
        </div>
    </div>













    
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