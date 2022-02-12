
@extends('user.includes.index')
@section('content')
    <div class="main-wrapper">


        <div class="container-fluid blog-picss" style="background-image: url('{{ asset('blogtest') }}/{{$blog['header_image']}}');">

            <div class="row align-items-center d-none d-lg-flex" style="" >
                <div class="col-sm-1">
                </div>
                <div class="col-sm-10">
                    <p class="moto-text_system_9">Featured  Post</p>

                    <h1 class="header-h">{{$blog['bloginfo']}}.</h1>

                        </div>

            </div>
            <div class="row align-items-center d-none d-lg-flex comments-sec " style="  padding-left:105px;" >
                <div class="post-meta-wrapper" >
                    <div class="post-meta">
                        <div class="post-author-avatar border-rounded">
                            <img src="{{ asset('images/12/planet-earth.png') }}" class="bloger-image" alt="Author Images">
                        </div>
                        <div class="content">
                            <h6 class="post-author-name">
                                <a class="hover-flip-item-wrapper" href="#">
                                    <span class="hover-flip-item">
                                        <span data-text="Ismat Jahan">Ismat Jahan</span>
                                    </span>
                                </a>
                            </h6>
                            <ul class="post-meta-list">
                                <li>Feb 17, 2019</li>
                                <li>300k Views</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>




        <!-- Start Post Single Wrapper  -->
        <div class="post-single-wrapper axil-section-gap bg-color-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="axil-post-details">
                            <p class="has-medium-font-size"><u>{{$blog['blog_description']}}</u></p>

                            <div class="com-text" style="color: #999;">
                                <?php echo $blog['blog'];?>
                            </div>
                                       
                           
                       

                
                            <p>For more information about the blog.</p>

                            <div class="tagcloud">
                                @php
                                                
                                $blog_cat = unserialize($blog['blog_cats']);
                            @endphp
                         @foreach ($blog_cat as $blog_ct )
                      <a href="#">{{$blog_ct}}</a>
                         @endforeach  
                                
                            </div>

                            <div class="social-share-block">
                                <div class="post-like">
                                 
                                    <a href="#" style="float: right;"><i class="fal fa-thumbs-up"></i><span>2.2k Likes</span></a>
                                    <a type="button" id="like-button">
                                        <svg class="heart-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><path d="M91.6 13A28.7 28.7 0 0 0 51 13l-1 1-1-1A28.7 28.7 0 0 0 8.4 53.8l1 1L50 95.3l40.5-40.6 1-1a28.6 28.6 0 0 0 0-40.6z"/></svg>
                                          Like
                                        </a>
                                </div>
                                <ul class="social-icon icon-rounded-transparent md-size">
                                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>

                          

                                <!-- Start Comment Respond  -->
                                <div class="comment-respond">
                                    <h4 class="title">Post a comment</h4>
                                    <form action="#">
                                        <p class="comment-notes"><span id="email-notes">Your email address will not be
                                                published.</span> Required fields are marked <span
                                                class="required">*</span></p>
                                        <div class="row row--10">
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="form-group">
                                                    <label>Your Name</label>
                                                    <input id="coment_name" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="form-group">
                                                    <label>Your Email</label>
                                                    <input id="coment_email" type="email">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="form-group">
                                                    <label>Your Website</label>
                                                    <input id="coment_website" type="text">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Leave a Reply</label>
                                                    <textarea id="coment_message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <p class="comment-form-cookies-consent">
                                                    <input id="coment_remember" name="wp-comment-cookies-consent" type="checkbox" value="yes">
                                                    <label for="wp-comment-cookies-consent">Save my name, email, and
                                                        website in this browser for the next time I comment.</label>
                                                </p>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-submit cerchio">
                                                    <input type="text" id="blog_id" value="{{$blog['id']}}" hidden>
                                                    <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                                    <a type="submit" id="submit" onclick="postcomment()" class="btn button-rounded comment-btn">Post Comment</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- End Comment Respond  -->
                                @php
                                $blog_comment_count = $blog_comments->count();
                                     
                                 @endphp
                                <!-- Start Comment Form Area  -->
                         
                                    <div class="axil-total-comment-post">
                                        <div class="title">
                                            <h4 class="mb--0">{{$blog_comment_count}} Comments</h4>
                                        </div>
                                       
                                    </div>
                                <!-- Start Comment Area  -->
                            
                                <div class="axil-comment-area">
                                   <ul class="comment-list">
                                        @if ($blog_comments->count() > 0)                                           
                                     
                                        @foreach ($blog_comments as $blog_comment )
                                        <!-- Start Single Comment  -->
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="single-comment">
                                                    <div class="comment-img">
                                                        <img src="{{ asset('images/12/planet-earth.png') }}" class="bloger-image" alt="Author Images">
                                                    </div>
                                                    <div class="comment-inner">
                                                        <h6 class="commenter">
                                                            <a class="hover-flip-item-wrapper" href="#">
                                                                <span class="hover-flip-item">
                                                                    <span data-text="{{$blog_comment->name}}">{{$blog_comment->name}}</span>
                                                                </span>
                                                            </a>
                                                        </h6>
                                                        <div class="comment-meta">
                                                            <div class="time-spent">{{$blog_comment->created_at}}</div>
                                                            <div class="reply-edit">
                                                                <div class="reply">
                                                                    <a class="comment-reply-link hover-flip-item-wrapper" href="#">
                                                                        <span class="hover-flip-item">
                                                                            <span data-text="Reply">Reply</span>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="comment-text">
                                                            <p class="b2">{{$blog_comment->message}} </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @php
                                            $blog_comments_replies = \App\Blog_comments_reply::where(['comment_id' => $blog_comment->id])->get();
                                            $blog_comments_replies = $blog_comments_replies->sortByDesc('created_at');
                                       
                                            @endphp
                                            @if ($blog_comments_replies->count() > 0)
                                                
                                           
                                            @foreach ($blog_comments_replies as $blog_comments_reply)
                                        
                                            <ul class="children">
                                                <!-- Start Single Comment  -->
                                                <li class="comment">
                                                    <div class="comment-body">
                                                        <div class="single-comment">
                                                            <div class="comment-img">
                                                                <img src="{{ asset('images/12/planet-earth.png') }}" class="bloger-image" alt="Author Images">
                                                            </div>
                                                            <div class="comment-inner">
                                                                <h6 class="commenter">
                                                                    <a class="hover-flip-item-wrapper" href="#">
                                                                        <span class="hover-flip-item">
                                                                            <span data-text="{{$blog_comments_reply->name}}">{{$blog_comments_reply->name}}</span>
                                                                        </span>
                                                                    </a>
                                                                </h6>
                                                                <div class="comment-meta">
                                                                    <div class="time-spent">{{$blog_comments_reply->created_at}}</div>
                                                                   
                                                                    <div class="reply-edit">
                                                                        <div class="reply">
                                                                            <a class="comment-reply-link hover-flip-item-wrapper" href="#">
                                                                                <span class="hover-flip-item">
                                                                                    <span data-text="Reply">Reply</span>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="comment-text">
                                                                 <p class="b2">{{$blog_comments_reply->message}} </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- End Single Comment  -->
                                            </ul> 
                                            @endforeach
                                            @endif
                                        </li>
                                        <!-- End Single Comment  --> 
                                        @endforeach
                                        @else
                                            <p> no comments yet </p>
                                        @endif
                                       
                                       
                                    </ul>
                                </div>
                                <!-- End Comment Area  -->

                            </div>
                            <!-- End Comment Form Area  -->


                    </div>
                    <div class="col-lg-4">
                        <!-- Start Sidebar Area  -->
                        <div class="sidebar-inner">
                            <!-- Start Single Widget  -->




                            <div class="single_widgets widget_search">
                                <h4 class="title">Search</h4>
                                <form action="#" class="sidebar-search-form">
                                    <input type="search" name="search" placeholder="Search..">
                                    <button type="submit"><i class="ti-search"></i></button>
                                </form>
                            </div>


                            <div class="single_widgets widget_category">
                                <h4 class="title">Categories</h4>
                                <ul>
                                    <li><a href="#">Lifestyle <span>09</span></a></li>
                                    <li><a href="#">Travel <span>12</span></a></li>
                                    <li><a href="#">Fashion <span>19</span></a>
                                    </li><li><a href="#">Branding <span>17</span></a></li>
                                    <li><a href="#">Music <span>10</span></a></li>
                                </ul>
                            </div>
                            <!-- End Single Widget  -->



                            <!-- Start Single Widget  -->
                            <div class="single_widgets widget widget_postlist mb--30">
                                <h5 class="widget-title">Popular on Blogar</h5>
                                <!-- Start Post List  -->
                                <div class="post-medium-block">

                                    <!-- Start Single Post  -->
                                    <div class="content-block post-medium mb--20">

                                        <div class="post-content">
                                            <h6 class="title"><a href="post-details.html">The underrated design book that transformed the way I
                                                    work </a></h6>
                                            <div class="post-meta">
                                                <ul class="post-meta-list">
                                                    <li>Feb 17, 2019</li>
                                                    <li>300k Views</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Post  -->

                                    <!-- Start Single Post  -->
                                    <div class="content-block post-medium mb--20">

                                        <div class="post-content">
                                            <h6 class="title"><a href="post-details.html">Here’s what you should (and shouldn’t) do when</a>
                                            </h6>
                                            <div class="post-meta">
                                                <ul class="post-meta-list">
                                                    <li>Feb 17, 2019</li>
                                                    <li>300k Views</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Post  -->

                                    <!-- Start Single Post  -->
                                    <div class="content-block post-medium">

                                        <div class="post-content">
                                            <h6 class="title"><a href="post-details.html">How a developer and designer duo at Deutsche Bank keep
                                                    remote</a></h6>
                                            <div class="post-meta">
                                                <ul class="post-meta-list">
                                                    <li>Feb 17, 2019</li>
                                                    <li>300k Views</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Post  -->

                                </div>
                                <!-- End Post List  -->

                            </div>
                            <!-- End Single Widget  -->

                            <!-- Start Single Widget  -->
                            <div class="single_widgets widget widget_newsletter mb--30">
                                <!-- Start Post List  -->
                                <div class="newsletter-inner text-center">
                                    <h4 class="title mb--15">Never Miss A Blog!</h4>
                                    <p class="b2 mb--30">Sign up for free and be the first to <br /> get notified about updates.</p>
                                    <form action="#">
                                        <div class="form-group">
                                            <input type="text" placeholder="Enter Your Email ">
                                        </div>
                                        <div class="form-submit">
                                            <button class="cerchio axil-button button-rounded"><span>Subscribe</span></button>
                                        </div>
                                    </form>
                                </div>
                                <!-- End Post List  -->
                            </div>
                            <!-- End Single Widget  -->







                            <!-- Start Single Widget  -->
                            <div class="single_widgets widget widget_video mb--30">
                                <h5 class="widget-title">Featured Videos</h5>
                                <!-- Start Post List  -->
                                <div class="video-post-wrapepr">

                                    <!-- Start Post List  -->
                                    <div class="content-block image-rounded">
                                        <div class="post-content">
                                            <div class="post-thumbnail">
                                                <a href="post-details.html">
                                                    <img src="assets/images/post-single/post-md-01.jpg" alt="Post Images">
                                                </a>
                                                <a class="video-popup size-medium icon-color-secondary position-top-center" href="post-details.html"><span class="play-icon"></span></a>
                                            </div>
                                            <h6 class="title mt--10"><a href="post-details.html">I built my own camera with a Raspberry Pi 4</a>
                                            </h6>
                                        </div>

                                    </div>
                                    <!-- End Post List  -->

                                    <!-- Start Post List  -->
                                    <div class="content-block image-rounded mt--20">
                                        <div class="post-content">
                                            <div class="post-thumbnail">
                                                <a href="post-details.html">
                                                    <img src="assets/images/post-single/post-md-02.jpg" alt="Post Images">
                                                </a>
                                                <a class="video-popup size-medium icon-color-secondary position-top-center" href="post-details.html"><span class="play-icon"></span></a>
                                            </div>
                                            <h6 class="title mt--10"><a href="post-details.html">A rocket launch can’t unite us until the space
                                                    world acknowledges our divisions</a></h6>
                                        </div>

                                    </div>
                                    <!-- End Post List  -->

                                    <!-- Start Post List  -->
                                    <div class="content-block image-rounded mt--20">
                                        <div class="post-content">
                                            <div class="post-thumbnail">
                                                <a href="post-details.html">
                                                    <img src="assets/images/post-single/post-md-03.jpg" alt="Post Images">
                                                </a>
                                                <a class="video-popup size-medium icon-color-secondary position-top-center" href="post-details.html"><span class="play-icon"></span></a>
                                            </div>
                                            <h6 class="title mt--10"><a href="post-details.html"> With iOS 14, Apple is finally letting the
                                                    iPhone home screen get complicated</a></h6>
                                        </div>
                                    </div>
                                    <!-- End Post List  -->

                                </div>
                                <!-- End Post List  -->
                            </div>
                            <!-- End Single Widget  -->


                            <!-- Start Single Widget  -->
                            <div class="single_widgets widget widget_tag_cloud mb--30">
                                <h5 class="widget-title">Archives</h5>
                                <!-- Start Post List  -->
                                <div class="tagcloud">
                                    <a href="#">Design</a>
                                    <a href="#">Development</a>
                                    <a href="#">Graphic</a>
                                    <a href="#">UI/UX Design</a>
                                    <a href="#">HTML</a>
                                </div>
                                <!-- End Post List  -->
                            </div>
                            <!-- End Single Widget  -->


                            <!-- Start Single Widget  -->
                            <div class="single_widgets widget widget_dropdown mb--30">
                                <h5 class="widget-title">Archives</h5>
                                <!-- Start Post List  -->
                                <form action="#">
                                    <select>
                                        <option>Select Month</option>
                                        <option>April 2020 (4)</option>
                                        <option>March 2020 (3)</option>
                                        <option>November 2018 (11)</option>
                                        <option>January 2013 (5)</option>
                                    </select>
                                </form>
                                <!-- End Post List  -->
                            </div>
                            <!-- End Single Widget  -->
 <!-- Start Single Widget  -->
 <div class="single_widgets widget widget_social mb--30">
    <h5 class="widget-title">Stay In Touch</h5>
    <!-- Start Post List  -->
    <ul class="social-icon md-size justify-content-center">
        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#"><i class="fab fa-slack"></i></a></li>
        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
    </ul>
    <!-- End Post List  -->
</div>
      <!-- End Single Widget  -->
                            <!-- Start Single Widget  -->
                            <div class="single_widgets widget widget_postlist mb--30">
                                <h5 class="widget-title">Recent Post</h5>
                                <!-- Start Post List  -->
                                <div class="post-medium-block">

                                    <!-- Start Single Post  -->
                                    <div class="content-block post-medium mb--20">
                                        <div class="post-content">
                                            <h6 class="title"><a href="post-details.html">The underrated design book that transformed the way I
                                                    work </a></h6>
                                            <div class="post-meta">
                                                <ul class="post-meta-list">
                                                    <li>Feb 17, 2019</li>
                                                    <li>300k Views</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Post  -->

                                    <!-- Start Single Post  -->
                                    <div class="content-block post-medium mb--20">
                                        <div class="post-content">
                                            <h6 class="title"><a href="post-details.html">Here’s what you should (and shouldn’t) do when</a>
                                            </h6>
                                            <div class="post-meta">
                                                <ul class="post-meta-list">
                                                    <li>Feb 17, 2019</li>
                                                    <li>300k Views</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Post  -->

                                    <!-- Start Single Post  -->
                                    <div class="content-block post-medium">
                                        <div class="post-content">
                                            <h6 class="title"><a href="post-details.html">How a developer and designer duo at Deutsche Bank keep
                                                    remote</a></h6>
                                            <div class="post-meta">
                                                <ul class="post-meta-list">
                                                    <li>Feb 17, 2019</li>
                                                    <li>300k Views</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Post  -->
                                </div>
                                <!-- End Post List  -->
                            </div>
                            <!-- End Single Widget  -->





                        </div>
                        <!-- End Sidebar Area  -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Post Single Wrapper  -->

        <!-- Start More Stories Area  -->
        <div class="axil-more-stories-area axil-section-gap bg-color-grey">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2 class="title">More Stories</h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <!-- Start Stories Post  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <!-- Start Post List  -->
                        <div class="post-stories content-block mt--30">
                            <div class="post-thumbnail">
                                <a href="post-details.html">
                                    <img src="assets/images/post-single/stories-01.jpg" alt="Post Images">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a href="#">LEADERSHIP</a>
                                    </div>
                                </div>
                                <h5 class="title"><a href="post-details.html">Microsoft and Bridgestone launch real-time
                                        tire</a></h5>
                            </div>
                        </div>
                        <!-- End Post List  -->
                    </div>
                    <!-- Start Stories Post  -->

                    <!-- Start Stories Post  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <!-- Start Post List  -->
                        <div class="post-stories content-block mt--30">
                            <div class="post-thumbnail">
                                <a href="post-details.html">
                                    <img src="assets/images/post-single/stories-02.jpg" alt="Post Images">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a href="#">DESIGN</a>
                                    </div>
                                </div>
                                <h5 class="title"><a href="post-details.html">Microsoft and Bridgestone launch real-time
                                        tire</a></h5>
                            </div>
                        </div>
                        <!-- End Post List  -->
                    </div>
                    <!-- Start Stories Post  -->

                    <!-- Start Stories Post  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <!-- Start Post List  -->
                        <div class="post-stories content-block mt--30">
                            <div class="post-thumbnail">
                                <a href="post-details.html">
                                    <img src="assets/images/post-single/stories-03.jpg" alt="Post Images">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a href="#">PRODUCT UPDATES</a>
                                    </div>
                                </div>
                                <h5 class="title"><a href="post-details.html">Microsoft and Bridgestone launch real-time
                                        tire</a></h5>
                            </div>
                        </div>
                        <!-- End Post List  -->
                    </div>
                    <!-- Start Stories Post  -->

                    <!-- Start Stories Post  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <!-- Start Post List  -->
                        <div class="post-stories content-block mt--30">
                            <div class="post-thumbnail">
                                <a href="post-details.html">
                                    <img src="assets/images/post-single/stories-04.jpg" alt="Post Images">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-cat">
                                    <div class="post-cat-list">
                                        <a href="#">COLLABORATION</a>
                                    </div>
                                </div>
                                <h5 class="title"><a href="post-details.html">Microsoft and Bridgestone launch real-time
                                        tire</a></h5>
                            </div>
                        </div>
                        <!-- End Post List  -->
                    </div>
                    <!-- Start Stories Post  -->
                </div>
            </div>
        </div>
        <!-- End More Stories Area  -->



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


document.addEventListener('DOMContentLoaded', function() {
  var likeButton = document.getElementById('like-button');
  likeButton.addEventListener('click', function() {
    window.lb = likeButton;
    likeButton.classList.toggle('selected');
  });
}, false);



//// faqs update


function postcomment() {
    console.log("save");

    var name = document.getElementById('coment_name').value;    
        var email = document.getElementById('coment_email').value;
		var website = document.getElementById('coment_website').value;
        var message = document.getElementById('coment_message').value;
        var blog_id = document.getElementById('blog_id').value;
        var _token = document.getElementById('_token').value;
    
    



       
    
    // AJAX code to submit form.
    $.ajax({
             type: "POST",
             url: "/postcomment", //call  to store form data
             data:  {
        name:name,
        email:website,
        website:website,
        message: message,
        blog_id: blog_id,
        _token: _token,
        },
             cache: false,
             success: function(data) {
                 console.log(data);  
                 
          
            
             
          
                    document.getElementById("faqs_update").style.display = "block"; 
                    $("#faqs_update_message").html(data);
                        
             },
    
        });
    };


</script>
@include("user.includes.footer")
@endsection