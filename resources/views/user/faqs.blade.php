@extends('user.includes.index')
@section('content')

<div class="faqs service--2 pb--20 pt--40 text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form class="uk-search uk-search-default uk-width-1-1 awesomplete">
                        <a href="" class="uk-search-icon-flip uk-search-icon uk-icon" data-uk-search-icon=""><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="search-icon"><circle fill="none" stroke="#000" stroke-width="1.1" cx="9" cy="9" r="7"></circle><path fill="none" stroke="#000" stroke-width="1.1" d="M14,14 L18,18 L14,14 Z"></path></svg></a>
                        <input id="search" class="uk-search-input uk-search-default uk-width-1-1 uk-form-large" type="search" placeholder="Search" autocomplete="off" data-minchars="1" data-maxitems="30" aria-owns="awesomplete_list_1" role="combobox" aria-activedescendant="awesomplete_list_1_item_0">
  </form> 
                </div>
            </div>
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
                        <a href="/FAQS-group/General">
                            <i class="fa fa-gears" style="font-size:36px"></i>
                            <p>General</p>
                        </a>
                    </div>
                </div>
                <!-- End Single Service -->
                <!-- Start Single Service -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 xs__mt--40">
                    <div class="service">
                      <a href="/FAQS-group/Recycling">
                       
                        <i class="fa fa-trash-o" style="font-size:36px"></i>
                            <p>Recycling</p>
                        </a>
                    </div>
                </div>
                <!-- End Single Service -->
                <!-- Start Single Service -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 md__mt--40 sm__mt--40">
                    <div class="service">
              <a href="/FAQS-group/Garbage_Collection">
                       
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
                <a href="/FAQS-group/Gardening">
                       
                    <i class="fa fa-trash-o" style="font-size:36px"></i>
                            <p>Gardening</p>
                        </a>
                    </div>
                </div>
                <!-- End Single Service -->
                <!-- Start Single Service -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 xs__mt--40">
                    <div class="service">
                   <a href="/FAQS-group/Gardening">
                          
                    <i class="fa fa-trash-o" style="font-size:36px"></i>
                    <p>Gardening</p>
                        </a>
                    </div>
                </div>
                <!-- End Single Service -->
                <!-- Start Single Service -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 md__mt--40 sm__mt--40">
                    <div class="service">
            <a href="/FAQS-group/Other">
                  
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