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