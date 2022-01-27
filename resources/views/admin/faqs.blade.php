@extends('admin.include.index')  
@section('content')  


<div class="container-fluid" id="grad1" style="padding: 30px;">
    <div class="row">
        <div class="col-sm-6">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            New FAQS Question
          </button>
      
        </div>
        <div class="col-sm-6">
       
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" data-search>
              
          
            </div>
    </div>
       
    
    
    
<div class="row">
    <div class="col-sm-12">
    <div class="panel-group" id="accordion">
        @foreach ($faqs as $faq )
        <div class="panel panel-default" data-filter-item data-filter-name="{{$faq['question']}}" id="faqs_tab">
            <div class="panel-heading">
              <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#col{{$faq['id']}}">
                    {{$faq['question']}}
                    </a>
              </h4>
            </div>
        
            <div id="col{{$faq['id']}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                
              <div class="card-body">  
                  <div style="float: right;">
                <a type="button" onclick="getfaqs({{$faq['id']}})" class="btn btn-primary" data-toggle="modal" data-target="#editfaqs">Edit</a>
                <button type="button" class="btn btn-danger">Delete</button>
                <button type="button" class="btn btn-secondary">Hide</button> 
            </div>
            <br />
            <div>
                <p> {{$faq['answer']}}</p>
            </div>
                         </div>
            </div>
          </div>
        @endforeach
          </div>
    </div>
</div>
   
</div>
   <!-- Modal -->
   <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Add New FAQS</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div id="faqs_saved" style="display:none;">
                <p id="faqs_message"></p>
            </div>
            <form>
                @csrf <!-- {{ csrf_field() }} -->
                <div class="form-group">
                  <label for="question" class="col-form-label">Question:</label>
                  <input type="text" class="form-control"  id="question" required>
                </div>
                <div class="form-group">
                <label class="col-form-label" for="">Answer</label>
                <textarea class="form-control" id="answer" name="blog_description" 
                maxlength="200" placeholder="Type in your message" rows="5"></textarea>
             <span class="pull-right label label-default" id="count_message"></span>
                </div>
           
        

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="hidden" id="_token" value="{{ csrf_token() }}">
          <a type="submit" class="btn btn-primary" onclick="faqsubmit()">Save FAQS</a>
        </form>
        </div>
      </div>
    </div>
  </div>

     <!-- Modal -->
     <div class="modal fade" id="editfaqs" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Add New FAQS</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div id="faqs_saved" style="display:none;">
                <p id="faqs_message"></p>
            </div>
            <form>
            <div class="modal-body editfaqs">
           
               
            

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <input type="hidden" id="_token" value="{{ csrf_token() }}">
              <a type="submit" class="btn btn-primary" onclick="faqupdate()">Save FAQS</a>
            </form>
            </div>
          </div>
        </div>
      </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    (function($) {
     var pagify = {
         items: {},
         container: null,
         totalPages: 1,
         perPage: 3,
         currentPage: 0,
         createNavigation: function() {
             this.totalPages = Math.ceil(this.items.length / this.perPage);
 
             $('.pagination', this.container.parent()).remove();
             var pagination = $('<div class="pagination p-center"></div>').append('<a class="nav prev disabled" data-next="false"><</a>');
 
             for (var i = 0; i < this.totalPages; i++) {
                 var pageElClass = "page";
                 if (!i)
                     pageElClass = "page current";
                 var pageEl = '<a class="' + pageElClass + '" data-page="' + (
                 i + 1) + '">' + (
                 i + 1) + "</a>";
                 pagination.append(pageEl);
             }
             pagination.append('<a class="nav next" data-next="true">></a>');
 
             this.container.after(pagination);
 
             var that = this;
             $("body").off("click", ".nav");
             this.navigator = $("body").on("click", ".nav", function() {
                 var el = $(this);
                 that.navigate(el.data("next"));
             });
 
             $("body").off("click", ".page");
             this.pageNavigator = $("body").on("click", ".page", function() {
                 var el = $(this);
                 that.goToPage(el.data("page"));
             });
         },
         navigate: function(next) {
             // default perPage to 5
             if (isNaN(next) || next === undefined) {
                 next = true;
             }
             $(".pagination .nav").removeClass("disabled");
             if (next) {
                 this.currentPage++;
                 if (this.currentPage > (this.totalPages - 1))
                     this.currentPage = (this.totalPages - 1);
                 if (this.currentPage == (this.totalPages - 1))
                     $(".pagination .nav.next").addClass("disabled");
                 }
             else {
                 this.currentPage--;
                 if (this.currentPage < 0)
                     this.currentPage = 0;
                 if (this.currentPage == 0)
                     $(".pagination .nav.prev").addClass("disabled");
                 }
 
             this.showItems();
         },
         updateNavigation: function() {
 
             var pages = $(".pagination .page");
             pages.removeClass("current");
             $('.pagination .page[data-page="' + (
             this.currentPage + 1) + '"]').addClass("current");
         },
         goToPage: function(page) {
 
             this.currentPage = page - 1;
 
             $(".pagination .nav").removeClass("disabled");
             if (this.currentPage == (this.totalPages - 1))
                 $(".pagination .nav.next").addClass("disabled");
 
             if (this.currentPage == 0)
                 $(".pagination .nav.prev").addClass("disabled");
             this.showItems();
         },
         showItems: function() {
             this.items.hide();
             var base = this.perPage * this.currentPage;
             this.items.slice(base, base + this.perPage).show();
 
             this.updateNavigation();
         },
         init: function(container, items, perPage) {
             this.container = container;
             this.currentPage = 0;
             this.totalPages = 1;
             this.perPage = perPage;
             this.items = items;
             this.createNavigation();
             this.showItems();
         }
     };
 
     // stuff it all into a jQuery method!
     $.fn.pagify = function(perPage, itemSelector) {
         var el = $(this);
         var items = $(itemSelector, el);
 
         // default perPage to 5
         if (isNaN(perPage) || perPage === undefined) {
             perPage = 3;
         }
 
         // don't fire if fewer items than perPage
         if (items.length <= perPage) {
             return true;
         }
 
         pagify.init(el, items, perPage);
     };
 })(jQuery);
 
 $(".panel-group").pagify(6, ".panel"); 
 </script>


@stop