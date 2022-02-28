@extends('user.includes.index')
@section('content')

<style>

.panel-heading .accordion-toggle:after {
    /* symbol for "opening" panels */
    font-family: 'Glyphicons Halflings';  /* essential for enabling glyphicon */
    content: "\e114";    /* adjust as needed, taken from bootstrap.css */
    float: right;        /* adjust as needed */
    color: grey;         /* adjust as needed */
}
.panel-heading .accordion-toggle.collapsed:after {
    /* symbol for "collapsed" panels */
    content: "\e080";    /* adjust as needed, taken from bootstrap.css */
}

</style>



<div class = "container">
    <div class="row text-center"> 
 <div class="col-sm-12"> 

<div class="section__title--call text-center">
    <h3>Frequently Asked Questions</h3>
</div>
    </div>

    </div>

  
    <div class="panel-group" id="accordion">
        @if ($faqs->count()<1)
        <p> no Faqs Questions addded for {{$data}}</p>
            
        @else
            
        @endif
      @foreach ( $faqs as $faq)
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
            {{$faq->question}}
          </a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse ">
        <div class="panel-body">
          {{$faq->answer}}
        </div>
      </div>
    </div>
    @endforeach
 
   
  </div>
    
    
  </div> <!-- end container -->





  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>

    
<script type="text/javascript" src="{{ asset('js/vendor/jquery-3.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>    

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