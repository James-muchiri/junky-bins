@extends('admin.include.index')  
@section('content')  
                <div class="container-fluid" id="grad1">
                    <div class="row justify-content-center mt-0">
                        <div style="width: 90%; ">
                            <div class="card px-3 pt-4 pb-0 mt-3 mb-3" style="padding: 10px">
                                <h2><strong>{!! $blog['bloginfo'] !!}</strong></h2>
                                <div class="col-sm-12"  style="margin-top: 10px; margin-bottom:10px;">
                                  <a class="button btn-danger" href="/discard_blog" type="button">Discard</a>
                                  <a class="button btn-primary" type="button">Edit</a>
                                  <a class="button btn-success" href="/post_blog" type="button">Post</a>
                                </div>

                                <div class="col-sm-12"  style="margin-top: 10px; margin-bottom:10px;">
                                    <div class="com-text" style="color: #999;">
                                        <?php echo $blog['blog'];?>
                                    </div>
                                </div>
                                <div class="col-sm-12"  style="margin-top: 10px; margin-bottom:10px;">
                                @foreach ($blog->post as $pic )

                            
                                <img src="{{ asset('blogtest') }}/{{ $pic->getClientOriginalName()}}" style="height: 250px;width: 80%;">
                             
                                @endforeach
                                </div>
                            </div>
                        </div>
            </div>
        </div>
@stop
