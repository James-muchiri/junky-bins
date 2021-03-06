@extends('admin.include.index')  
@section('content')  

@php
    $blog_count = $blogs->count()

  @endphp    
            <div class="container">
                    <div class="row">
                        <div class="col-md-12 page-header">
                            <div class="page-pretitle">Overview</div>
                            <h2 class="page-title">Dashboard</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                                <i class="teal fas fa-shopping-cart"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail">
                                                <p class="detail-subtitle">New Sites</p>
                                                <span class="number">6</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="fas fa-calendar"></i> For this Week
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                                <i class="olive fas fa-money-bill-alt"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail">
                                                <p class="detail-subtitle">Total Sites</p>
                                                <span class="number">20</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="fas fa-calendar"></i> For this Month
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                                <i class="violet fas fa-eye"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail">
                                                <p class="detail-subtitle">Blog Views</p>
                                                <span class="number">28,210</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="fas fa-stopwatch"></i> For this week
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                                <i class="orange fas fa-envelope"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail">
                                                <p class="detail-subtitle">Total Blogs</p>
                                                <span class="number">{{$blog_count}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="fas fa-envelope-open-text"></i> For this week
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="content">
                                            <div class="head">
                                                <h5 class="mb-0">Sites Review</h5>
                                                <p class="text-muted">Current year new sites review</p>
                                            </div>
                                            <div class="canvas-wrapper">
                                                <canvas class="chart" id="trafficflow"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="content">
                                            <div class="head">
                                                <h5 class="mb-0">Sales Overview</h5>
                                                <p class="text-muted">Current year sales data</p>
                                            </div>
                                            <div class="canvas-wrapper">
                                                <canvas class="chart" id="sales"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h6>Quotes</h6>
                                </div>
                                <div class="ground-list ground-list-hove">
                                    <div class="ground ground-single-list">
                                        <a href="#">
                                            <div class="btn-circle-40 theme-cl theme-bg-light"><i class="ti-home"></i></div>
                                        </a>
        
                                        <div class="ground-content">
                                            <h6><a href="#">Your listing <strong>Azreal Modern</strong> has been approved!.</a></h6>
                                            <span class="small">Just Now</span>
                                        </div>
                                    </div>
        
                                    <div class="ground ground-single-list">
                                        <a href="#">
                                            <div class="btn-circle-40 theme-cl theme-bg-light"><i class="ti-comment-alt"></i></div>
                                        </a>
        
                                        <div class="ground-content">
                                            <h6><a href="#">Litha Lynes left a review on <strong>Renovated Apartment</strong></a></h6>
                                            <span class="small">20 min ago</span>
                                        </div>
                                    </div>
        
                                    <div class="ground ground-single-list">
                                        <a href="#">
                                            <div class="btn-circle-40 theme-cl theme-bg-light"><i class="ti-heart"></i></div>
                                        </a>
        
                                        <div class="ground-content">
                                            <h6><a href="#">Someone bookmark your View listing!<strong>Sargun Villa Bay</strong></a></h6>
                                            <span class="small">1 day ago</span>
                                        </div>
                                    </div>
        
                                    <div class="ground ground-single-list">
                                        <a href="#">
                                            <div class="btn-circle-40 theme-cl theme-bg-light"><i class="ti-home"></i></div>
                                        </a>
        
                                        <div class="ground-content">
                                            <h6><a href="#">Your listing <strong>Modern Family Home</strong> has been approved!.</a></h6>
                                            <span class="small">10 days ago</span>
                                        </div>
                                    </div>
        
                                    <div class="ground ground-single-list">
                                        <a href="#">
                                            <div class="btn-circle-40 theme-cl theme-bg-light"><i class="ti-comment-alt"></i></div>
                                        </a>
        
                                        <div class="ground-content">
                                            <h6><a href="#">Adam Brown left a review on <strong>Renovated Apartment</strong></a></h6>
                                            <span class="small">Just Now</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h6>Notifications</h6>
                                </div>
                                <div class="ground-list ground-list-hove">
                                    <div class="ground ground-single-list">
                                        <a href="#">
                                            <div class="btn-circle-40 theme-cl theme-bg-light"><i class="ti-home"></i></div>
                                        </a>
        
                                        <div class="ground-content">
                                            <h6><a href="#">Your listing <strong>Azreal Modern</strong> has been approved!.</a></h6>
                                            <span class="small">Just Now</span>
                                        </div>
                                    </div>
        
                                    <div class="ground ground-single-list">
                                        <a href="#">
                                            <div class="btn-circle-40 theme-cl theme-bg-light"><i class="ti-comment-alt"></i></div>
                                        </a>
        
                                        <div class="ground-content">
                                            <h6><a href="#">Litha Lynes left a review on <strong>Renovated Apartment</strong></a></h6>
                                            <span class="small">20 min ago</span>
                                        </div>
                                    </div>
        
                                    <div class="ground ground-single-list">
                                        <a href="#">
                                            <div class="btn-circle-40 theme-cl theme-bg-light"><i class="ti-heart"></i></div>
                                        </a>
        
                                        <div class="ground-content">
                                            <h6><a href="#">Someone bookmark your View listing!<strong>Sargun Villa Bay</strong></a></h6>
                                            <span class="small">1 day ago</span>
                                        </div>
                                    </div>
        
                                    <div class="ground ground-single-list">
                                        <a href="#">
                                            <div class="btn-circle-40 theme-cl theme-bg-light"><i class="ti-home"></i></div>
                                        </a>
        
                                        <div class="ground-content">
                                            <h6><a href="#">Your listing <strong>Modern Family Home</strong> has been approved!.</a></h6>
                                            <span class="small">10 days ago</span>
                                        </div>
                                    </div>
        
                                    <div class="ground ground-single-list">
                                        <a href="#">
                                            <div class="btn-circle-40 theme-cl theme-bg-light"><i class="ti-comment-alt"></i></div>
                                        </a>
        
                                        <div class="ground-content">
                                            <h6><a href="#">Adam Brown left a review on <strong>Renovated Apartment</strong></a></h6>
                                            <span class="small">Just Now</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h6>Blacklisted Blogs</h6>
                                </div>
                                <div class="ground-list ground-list-hove">
                                    <div class="ground ground-single-list">
                                        <a href="#">
                                            <div class="btn-circle-40 theme-cl theme-bg-light"><i class="ti-home"></i></div>
                                        </a>
        
                                        <div class="ground-content">
                                            <h6><a href="#">Your listing <strong>Azreal Modern</strong> has been approved!.</a></h6>
                                            <span class="small">Just Now</span>
                                        </div>
                                    </div>
        
                                    <div class="ground ground-single-list">
                                        <a href="#">
                                            <div class="btn-circle-40 theme-cl theme-bg-light"><i class="ti-comment-alt"></i></div>
                                        </a>
        
                                        <div class="ground-content">
                                            <h6><a href="#">Litha Lynes left a review on <strong>Renovated Apartment</strong></a></h6>
                                            <span class="small">20 min ago</span>
                                        </div>
                                    </div>
        
                                    <div class="ground ground-single-list">
                                        <a href="#">
                                            <div class="btn-circle-40 theme-cl theme-bg-light"><i class="ti-heart"></i></div>
                                        </a>
        
                                        <div class="ground-content">
                                            <h6><a href="#">Someone bookmark your View listing!<strong>Sargun Villa Bay</strong></a></h6>
                                            <span class="small">1 day ago</span>
                                        </div>
                                    </div>
        
                                    <div class="ground ground-single-list">
                                        <a href="#">
                                            <div class="btn-circle-40 theme-cl theme-bg-light"><i class="ti-home"></i></div>
                                        </a>
        
                                        <div class="ground-content">
                                            <h6><a href="#">Your listing <strong>Modern Family Home</strong> has been approved!.</a></h6>
                                            <span class="small">10 days ago</span>
                                        </div>
                                    </div>
        
                                    <div class="ground ground-single-list">
                                        <a href="#">
                                            <div class="btn-circle-40 theme-cl theme-bg-light"><i class="ti-comment-alt"></i></div>
                                        </a>
        
                                        <div class="ground-content">
                                            <h6><a href="#">Adam Brown left a review on <strong>Renovated Apartment</strong></a></h6>
                                            <span class="small">Just Now</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h6>Top viewed blogs</h6>
                                </div>
                                <div class="ground-list ground-list-hove">
                                    <div class="ground ground-single-list">
                                        <a href="#">
                                            <div class="btn-circle-40 theme-cl theme-bg-light"><i class="ti-home"></i></div>
                                        </a>
        
                                        <div class="ground-content">
                                            <h6><a href="#">Your listing <strong>Azreal Modern</strong> has been approved!.</a></h6>
                                            <span class="small">Just Now</span>
                                        </div>
                                    </div>
        
                                    <div class="ground ground-single-list">
                                        <a href="#">
                                            <div class="btn-circle-40 theme-cl theme-bg-light"><i class="ti-comment-alt"></i></div>
                                        </a>
        
                                        <div class="ground-content">
                                            <h6><a href="#">Litha Lynes left a review on <strong>Renovated Apartment</strong></a></h6>
                                            <span class="small">20 min ago</span>
                                        </div>
                                    </div>
        
                                    <div class="ground ground-single-list">
                                        <a href="#">
                                            <div class="btn-circle-40 theme-cl theme-bg-light"><i class="ti-heart"></i></div>
                                        </a>
        
                                        <div class="ground-content">
                                            <h6><a href="#">Someone bookmark your View listing!<strong>Sargun Villa Bay</strong></a></h6>
                                            <span class="small">1 day ago</span>
                                        </div>
                                    </div>
        
                                    <div class="ground ground-single-list">
                                        <a href="#">
                                            <div class="btn-circle-40 theme-cl theme-bg-light"><i class="ti-home"></i></div>
                                        </a>
        
                                        <div class="ground-content">
                                            <h6><a href="#">Your listing <strong>Modern Family Home</strong> has been approved!.</a></h6>
                                            <span class="small">10 days ago</span>
                                        </div>
                                    </div>
        
                                    <div class="ground ground-single-list">
                                        <a href="#">
                                            <div class="btn-circle-40 theme-cl theme-bg-light"><i class="ti-comment-alt"></i></div>
                                        </a>
        
                                        <div class="ground-content">
                                            <h6><a href="#">Adam Brown left a review on <strong>Renovated Apartment</strong></a></h6>
                                            <span class="small">Just Now</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="dfd text-center">
                                            <i class="blue large-icon mb-2 fas fa-thumbs-up"></i>
                                            <h4 class="mb-0">+21,900</h4>
                                            <p class="text-muted">FACEBOOK PAGE LIKES</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="dfd text-center">
                                            <i class="orange large-icon mb-2 fas fa-reply-all"></i>
                                            <h4 class="mb-0">+22,566</h4>
                                            <p class="text-muted">INSTAGRAM FOLLOWERS</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="dfd text-center">
                                            <i class="grey large-icon mb-2 fas fa-envelope"></i>
                                            <h4 class="mb-0">+15,566</h4>
                                            <p class="text-muted">E-MAIL SUBSCRIBERS</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="dfd text-center">
                                            <i class="olive large-icon mb-2 fas fa-dollar-sign"></i>
                                            <h4 class="mb-0">+98,601</h4>
                                            <p class="text-muted">TOTAL SALES</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
     
@stop