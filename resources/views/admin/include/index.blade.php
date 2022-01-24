<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard | Bootstrap Simple Admin Template</title>
    <script>document.getElementsByTagName("html")[0].className += " js";</script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link href="{{ asset('css/bootstrap.min2.css') }}" rel="stylesheet">

        <link href="{{ asset('css/adintest.css') }}" rel="stylesheet">     
        <link href="{{ asset('css/testtest.css') }}" rel="stylesheet">  

</head>
<header class="cd-main-header js-cd-main-header">
    <div class="cd-logo-wrapper">
      <a href="#0" class="cd-logo"><img style="height: 40px;" src="{{ asset('images/logo/logo1.jpeg') }}" alt="Logo"></a>
    </div>
    
    <div class="cd-search js-cd-search">
      <form>
        <input class="reset" type="search" placeholder="Search...">
      </form>
    </div>
    <div class="dropdown">
       
      <a href="#" class="notification dropdown dropbtn" aria-haspopup="true" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="false">
          <i class="icon text-danger fa fa-bell"></i>
           <span class="badge">3</span>
         </a>

      <div class="dropdown-content">

          <div class="dropdown-menu-header mb-0">
              <div class="dropdown-menu-header-inner bg-deep-blue">
                  <div class="menu-header-image opacity-1" style="background-image: url('assets/images/dropdown-header/city3.jpg');"></div>
                  <div class="menu-header-content text-dark">
                      <h5 class="menu-header-title">Notifications</h5>
                      <h6 class="menu-header-subtitle">You have <b>21</b> unread messages</h6>
                  </div>
              </div>
          </div>

          <div class="tab">
              <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Quotes</button>
              <button class="tablinks" onclick="openCity(event, 'Paris')">Messages</button>
              <button class="tablinks" onclick="openCity(event, 'Tokyo')">Emails</button>
            </div>
            
            <div id="London" class="tabcontent">
              <h3>London</h3>
              <p>London is the capital city of England.</p>
              <div class="viewall"> 
                  <button class="btn-shadow btn-wide btn-pill btn btn-focus btn-sm">View Latest Changes</button>
                
              </div>
            </div>
            
            <div id="Paris" class="tabcontent">
              <h3>Paris</h3>
              <p>Paris is the capital of France.</p> 
              <div class="viewall"> 
                  <button class="btn-shadow btn-wide btn-pill btn btn-focus btn-sm">View Latest Changes</button>
                
              </div>
            </div>
            
            <div id="Tokyo" class="tabcontent">
              <h3>Tokyo</h3>
              <p>Tokyo is the capital of Japan.</p>
              <div class="viewall"> 
                  <button class="btn-shadow btn-wide btn-pill btn btn-focus btn-sm">View Latest Changes</button>
                
              </div>
            </div>

            
      </div>
    </div>
  
    <button class="reset cd-nav-trigger js-cd-nav-trigger" aria-label="Toggle menu"><span></span></button>
 
    <ul class="cd-nav__list js-cd-nav__list">
      <li class="cd-nav__item"><a href="#0">Tour</a></li>
     
      <li class="cd-nav__item cd-nav__item--has-children cd-nav__item--account js-cd-item--has-children">
        <a href="#0"><i style="font-size: 1.5em;" class="fa fa-link"></i>&nbsp;&nbsp;
           <span>Setting</span> &nbsp;&nbsp;
           <i style="font-size: .8em;" class="fa fa-caret-down"></i></a>
    
        <ul class="cd-nav__sub-list">
          <li class="cd-nav__sub-item"><a href="#0">My Account</a></li>
          <li class="cd-nav__sub-item"><a href="#0">Edit Account</a></li>
          <li class="cd-nav__sub-item"><a href="#0">Logout</a></li>
        </ul>
      </li>
      <li class="cd-nav__item cd-nav__item--has-children cd-nav__item--account js-cd-item--has-children">
        <a href="#0">
          <i class="fa fa-user"></i> &nbsp;&nbsp;
          <span>Account</span>
          &nbsp;&nbsp;
          <i style="font-size: .8em;" class="fa fa-caret-down"></i></a>
    
        <ul class="cd-nav__sub-list">
          <li class="cd-nav__sub-item"><a href="#0">My Account</a></li>
          <li class="cd-nav__sub-item"><a href="#0">Edit Account</a></li>
          <li class="cd-nav__sub-item"><a href="#0">Logout</a></li>
        </ul>
      </li>
    </ul>
  </header> <!-- .cd-main-header -->

   <body>
    <main class="cd-main-content">
        <nav class="cd-side-nav js-cd-side-nav" id="sidebar">

          <ul class="cd-side__list js-cd-side__list list-unstyled components">
    
          </ul>
          <ul class="cd-side__list js-cd-side__list">
            <li class="cd-side__label"><span>Main</span></li>

            <li class="cd-side__item  cd-side__item--overview ">
              <a href="/admin">Dashboard</a>             
            
            </li>
            <li class="cd-side__label"><span>Primary</span></li>
            <li>
              <a href="#uielementsmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fa fa-gears">&nbsp;&nbsp;</i> Manage Sites &nbsp;&nbsp;&nbsp; <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
              <ul class="collapse list-unstyled" id="uielementsmenu">
                  <li>
                      <a href="/newlead"><i class="fa fa-gears"></i> Add new lead</a>
                  </li>
                  <li>
                      <a href="/newsite"><i class="fa fa-gears"></i> add new site</a>
                  </li>
                  <li>
                      <a href="/sites"><i class="fa fa-gears"></i> View sites</a>
                  </li>
                  <li>
                      <a href="ui-alerts.html"><i class="fa fa-gears"></i> Alerts</a>
                  </li>
                  <li>
                      <a href="ui-tabs.html"><i class="fa fa-gears"></i> Tabs</a>
                  </li>
                  <li>
                      <a href="ui-date-time-picker.html"><i class="fa fa-gears"></i> Date & Time Picker</a>
                  </li>
              </ul>
          </li>
            <li>
              <a href="#faqsmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fa fa-gears">&nbsp;&nbsp;</i> Manage FAQS &nbsp;&nbsp;&nbsp; <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
              <ul class="collapse list-unstyled" id="faqsmenu">
                  <li>
                      <a href="/newfaqs"><i class="fa fa-gears"></i> New Faqs</a>
                  </li>
                  <li>
                      <a href="/allfaqs"><i class="fa fa-gears"></i>All Faqs</a>
                  </li>
                 
                
                
              </ul>
          </li>
          <li>
            <a href="#faqsmenu1" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fa fa-gears">&nbsp;&nbsp;</i> Manage FAQS &nbsp;&nbsp;&nbsp; <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
            <ul class="collapse list-unstyled" id="faqsmenu1">
                <li>
                    <a href="/newfaqs"><i class="fa fa-gears"></i> New Faqs</a>
                </li>
                <li>
                    <a href="/allfaqs"><i class="fa fa-gears"></i>All Faqs</a>
                </li>
               
              
              
            </ul>
        </li>
    
            <li class="cd-side__item cd-side__item--has-children cd-side__item--notifications cd-side__item--selected js-cd-item--has-children">
              <a href="#0">Notifications<span class="cd-count">3</span></a>
              
              <ul class="cd-side__sub-list">
                <li class="cd-side__sub-item"><a aria-current="page" href="#0">All Notifications</a></li>
                <li class="cd-side__sub-item"><a href="#0">Messages</a></li>
                <li class="cd-side__sub-item"><a href="#0">Email</a></li>
                <li class="cd-side__sub-item"><a href="#0">Qoutes</a></li>
              </ul>
            </li>
        
            <li class="cd-side__item cd-side__item--has-children cd-side__item--comments js-cd-item--has-children">
              <a href="#0">Manage Blogs</a>
              
              <ul class="cd-side__sub-list">

                <li class="cd-side__sub-item">
                  <a href="/newblog"><i class="fa fa-gears"></i>&nbsp;&nbsp; New Blog</a>
              </li>
              <li class="cd-side__sub-item">
                  <a href="/allblogs"><i class="fa fa-gears"></i> &nbsp;&nbsp;All Blogs</a>
              </li>
              <li class="cd-side__sub-item">
                  <a href="ui-badges.html"><i class="fa fa-gears"></i> &nbsp;&nbsp;Comments</a>
              </li>
              <li class="cd-side__sub-item">
                  <a href="/blogcats"><i class="fa fa-gears"></i>&nbsp;&nbsp;Blog Categories</a>
              </li>
              <li class="cd-side__sub-item">
                  <a href="/allblogs"><i class="fa fa-gears"></i>&nbsp;&nbsp;All Blogs</a>
              </li>
                
              </ul>
            </li>
             
            <li class="cd-side__item cd-side__item--has-children cd-side__item--comments js-cd-item--has-children">
              <a href="#0">Manage FAQS</a>
              
              <ul class="cd-side__sub-list">

                <li class="cd-side__sub-item">
                  <a href="/newfaqs"><i class="fa fa-gears"></i> New Faqs</a>
              </li>
              <li class="cd-side__sub-item">
                <a href="/allfaqs"><i class="fa fa-gears"></i> &nbsp;&nbsp; All Faqs</a> 
              </li>
      
                
              </ul>
            </li>
     
          </ul>
        
          <ul class="cd-side__list js-cd-side__list">
            <li class="cd-side__label"><span>Secondary</span></li>
          
    
            <li class="cd-side__item cd-side__item--has-children cd-side__item--images js-cd-item--has-children">
              <a href="#0">Email and sms</a>
              
              <ul class="cd-side__sub-list">
                <li class="cd-side__sub-item"><a href="#0">All Images</a></li>
                <li class="cd-side__sub-item"><a href="#0">Edit Image</a></li>
              </ul>
            </li>
        
            <li class="cd-side__item cd-side__item--has-children cd-side__item--users js-cd-item--has-children">
              <a href="#0">Users</a>
              
              <ul class="cd-side__sub-list">
                <li class="cd-side__sub-item"><a href="#0">All Users</a></li>
                <li class="cd-side__sub-item"><a href="#0">Edit User</a></li>
                <li class="cd-side__sub-item"><a href="#0">Add User</a></li>
              </ul>
            </li>
            <li class="cd-side__item cd-side__item--has-children cd-side__item--bookmarks js-cd-item--has-children">
              <a href="#0">Administration</a>
              
              <ul class="cd-side__sub-list">
                <li class="cd-side__sub-item"><a href="#0">All Bookmarks</a></li>
                <li class="cd-side__sub-item"><a href="#0">Edit Bookmark</a></li>
                <li class="cd-side__sub-item"><a href="#0">Import Bookmark</a></li>
              </ul>
            </li>
          </ul>
        
          <ul class="cd-side__list js-cd-side__list">
            <li class="cd-side__label"><span>Action</span></li>
            <li class="cd-side__btn"><button class="reset" href="#0"> Logout</button></li>
          </ul>
        </nav>
      
        <div class="cd-content-wrapper">
            @yield('content')
        </div> <!-- .content-wrapper -->
      </main> <!-- .cd-main-content -->

      
   </body>
   @include('admin/include/footer')
</html>