@extends('user.includes.index')
@section('content')
<div class="container-fluid" style="background-color: #f1f6f9; margin-top:100px;">
    <div class="container" >

    <div class="row" style="padding-top: 50px">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
            <div class="sr-section-title">
                                    <span class="sr-sub-title">
                    <span>
                        Our Services						</span>
                </span>
                                    <h4 class="sr-colored-heading">
                                        Garbage Collections
                </h4>
                                </div>
        </div>
    </div>
</div>
</div>
<div class="container-fluid" >
<h4>Garbage Collection</h4>
<p>We have regular garbage collection schedules for our clients ranging from Residential to Corporates. We ensure Timely, Efficient and Effective Services.</p>
<p>    We offer full range of containers to suit your waste production. Our skips and large containers are accustomed to fit client’s available space and we ensure prompt collection services

With us be sure your waste will be taken care of legally, environmentally and minimal disturbance to your business. You will access efficient, responsible and competitive services using the latest disposal technologies.

We customized waste pickup programs for the following;

 Curbside Pickup/ residential collections
Commercial and industrial collections
Yard Waste Pickup Bulk Waste Pickup
Food & Organic PickupScheduled
 Waste Pickup Dumpsters

<p>We offer full range of
containers to suit your waste production. Our skips and large containers are
accustomed to fit client’s available space and we ensure prompt collection
services</p>

<p>With us be sure your waste
will be taken care of legally, environmentally and minimal disturbance to your
business. You will access efficient, responsible and competitive services using
the latest disposal technologies.</p>

<p>We customized waste pickup
programs for the following;</p><p></p><ol><li>&nbsp;Curbside
Pickup/ residential collections</li><li>Commercial
and industrial collections</li><li>Yard
Waste Pickup Bulk
Waste Pickup</li><li>Food
&amp; Organic PickupScheduled</li><li>&nbsp;Waste Pickup Dumpsters<br></li></ol><p></p>

<p> The waste journey after collection <a href="/recycling">Recycling</a></p>
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