@include('admin/head')

   <style>

        hr{
            color: black;
        }
        #tab{
            background-color: #e6e4e4;

        }
        #tab p{
            text-align: center;
            padding-top: 13px;
            font-size: 14px;
            font-family: 'Courier New', Courier, monospace;
            font-weight: 600;

        }

    </style>
</head>

<body>
  @include('layouts/includes/sidebar')

    @include('layouts/includes/header')



        <!-- Content -->
        <div class="content" >
            <!-- Animated -->




               <div class="container">
                <div class="row" id="tab" >
                    <div class="col-lg-3 col-md-6" >
                        <a href="/products">
                        <div class="card" style=" border-bottom: 2px solid #000000;margin-top:10px;">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="pe-7s-cash"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">{!! $post !!}</span></div>
                                            <div class="stat-heading">Total products</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>

                    <div class="col-lg-3 col-md-6">


                        <a href="/pendingdeliveries">
                            <div class="card" style=" border-bottom: 2px solid #f39f00;margin-top:10px;">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-cash"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">{!! $delivery !!}</span></div>
                                            <div class="stat-heading">Pending Delivery</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6">


                        <a href="/completeorders">
                            <div class="card" style=" border-bottom: 2px solid #ce024b;margin-top:10px;">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-3">
                                        <i class="pe-7s-cash"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">{!! $completed !!}</span></div>
                                            <div class="stat-heading">Completed orders</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6">


                        <a href="//pendingorders">
                            <div class="card" style=" border-bottom: 2px solid #000000;margin-top:10px;">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="pe-7s-cash"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">{!! $pending !!}</span></div>
                                            <div class="stat-heading">pending orders</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="row" style="padding:10px;">

                    <hr>

                </div>
	<!-- row -->

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">New Orders</h4>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-lg table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Product ID</th>
                                    <th>Status</th>
                                    <th>Price</th>
                                    <th>Date Created</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td><a href="#"><img src="assets/img/p-1.png" class="avatar avatar-30 mr-2" alt="Avatar">Luxury House</a></td>
                                    <td>#258475</td>
                                    <td><div class="label text-success bg-success-light">Paid</div></td>
                                    <td>$ 310</td>
                                    <td>04/10/2013</td>
                                </tr>

                                <tr>
                                    <td><a href="#"><img src="assets/img/p-2.png" class="avatar avatar-30 mr-2" alt="Avatar">Sargun Apartment</a></td>
                                    <td>#249578</td>
                                    <td><div class="label text-warning bg-warning-light">Pending</div></td>
                                    <td>$ 584.14</td>
                                    <td>05/08/2014</td>
                                </tr>

                                <tr>
                                    <td><a href="#"><img src="assets/img/p-3.png" class="avatar avatar-30 mr-2" alt="Avatar">Preet Silver City</a></td>
                                    <td>#248712</td>
                                    <td><div class="label text-danger bg-danger-light">Cancel</div></td>
                                    <td>$ 710.5</td>
                                    <td>11/05/2015</td>
                                </tr>

                                <tr>
                                    <td><a href="#"><img src="assets/img/p-4.png" class="avatar avatar-30 mr-2" alt="Avatar">Mount See Villa</a></td>
                                    <td>#287246</td>
                                    <td><div class="label text-success bg-success-light">Paid</div></td>
                                    <td>$ 482.70</td>
                                    <td>06/09/2016</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row -->


    	<!-- row -->

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Order Status</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-lg table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Product ID</th>
                                        <th>Status</th>
                                        <th>Price</th>
                                        <th>Date Created</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td><a href="#"><img src="assets/img/p-1.png" class="avatar avatar-30 mr-2" alt="Avatar">Luxury House</a></td>
                                        <td>#258475</td>
                                        <td><div class="label text-success bg-success-light">Paid</div></td>
                                        <td>$ 310</td>
                                        <td>04/10/2013</td>
                                    </tr>

                                    <tr>
                                        <td><a href="#"><img src="assets/img/p-2.png" class="avatar avatar-30 mr-2" alt="Avatar">Sargun Apartment</a></td>
                                        <td>#249578</td>
                                        <td><div class="label text-warning bg-warning-light">Pending</div></td>
                                        <td>$ 584.14</td>
                                        <td>05/08/2014</td>
                                    </tr>

                                    <tr>
                                        <td><a href="#"><img src="assets/img/p-3.png" class="avatar avatar-30 mr-2" alt="Avatar">Preet Silver City</a></td>
                                        <td>#248712</td>
                                        <td><div class="label text-danger bg-danger-light">Cancel</div></td>
                                        <td>$ 710.5</td>
                                        <td>11/05/2015</td>
                                    </tr>

                                    <tr>
                                        <td><a href="#"><img src="assets/img/p-4.png" class="avatar avatar-30 mr-2" alt="Avatar">Mount See Villa</a></td>
                                        <td>#287246</td>
                                        <td><div class="label text-success bg-success-light">Paid</div></td>
                                        <td>$ 482.70</td>
                                        <td>06/09/2016</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->

        	<!--  row -->

            <div class="row">
                <div class="col-lg-8 col-md-7 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0">Extra Area Chart</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-inline text-center m-t-40">
                                <li>
                                    <h5><i class="fa fa-circle m-r-5 text-warning"></i>Website A</h5>
                                </li>
                                <li>
                                    <h5><i class="fa fa-circle m-r-5 text-danger"></i>Website B</h5>
                                </li>
                                <li>
                                    <h5><i class="fa fa-circle m-r-5 text-success"></i>Website C</h5>
                                </li>
                            </ul>
                            <div class="chart" id="extra-area-chart" style="height: 300px;"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-5 col-sm-12">
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
            </div>
            <!-- row -->
               </div>
        </div>






            <!-- .animated -->

        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->


    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>








</body>
</html>

