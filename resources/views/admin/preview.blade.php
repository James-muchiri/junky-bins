@extends('admin.include.index')  
@section('content')  
                <div class="container-fluid" id="grad1">
                    <div class="row justify-content-center mt-0">
                        <div style="width: 90%; ">
                            <div class="card px-3 pt-4 pb-0 mt-3 mb-3 " style="padding: 20px">
                            <div class="col-sm-12 text-center"  style="background-image: url('{{ asset('blogtest') }}/{{$blog['header_image']}}'); ">
                                <div class="preview-header text-center">
                                <h2><strong>{!! $blog['bloginfo'] !!}</strong></h2>
                                </div>
                            </div>
                                <div class="col-sm-12"  style="margin-top: 10px; margin-bottom:10px;">
                                  <a class="btn btn-danger" href="/discard_blog" type="button">Discard</a>
                                  <a class="btn btn-primary" type="button">Edit</a>
                               
                             
                                </div>

                                <div class="col-sm-12"  style="margin-top: 10px; margin-bottom:10px;">
                                    <h4 class="preview-title"> Blog Description</h4>
                                <p>{!! $blog['blog_description'] !!} </p>
                                    <div class="com-text" style="color: #999;">
                                        <?php echo $blog['blog'];?>
                                    </div>
                                </div>
                                <div class="col-sm-12"  style="margin-top: 10px; margin-bottom:10px;">
                                    <div class="single_widgets widget_tags">
                                        <h4 class="title" style="padding-bottom: 30px;">Tags Cloud</h4>
                                        <ul>
                                            @php
                                                
                                                $blog_cat = unserialize($blog['blog_cats']);
                                            @endphp
                                         @foreach ($blog_cat as $blog_ct )
                                         <li><a href="#">{{$blog_ct}}</a></li>
                                         @endforeach                                          
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
@stop
