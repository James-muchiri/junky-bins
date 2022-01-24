@extends('admin.include.index')  
@section('content')  
                <div class="container-fluid" id="grad1">
                    <div class="row justify-content-center mt-0">
                        <div style="width: 90%; ">
                        
                            <div class="card px-3 pt-4 pb-0 mt-3 mb-3" style="padding: 10px">
                                <h2><strong>Add new blog</strong></h2>
                                <p>Fill all form field to go to next step</p>
                                <div class="row">
                                    <div class="col-md-12 mx-0">
                                        <form id="msform" method="POST" action="/post_blog" enctype="multipart/form-data">
                                            @csrf <!-- {{ csrf_field() }} -->

                                            <!-- progressbar -->
                                            <ul id="progressbar">
                                                <li class="active" id="account"><strong>Author</strong></li>
                                                <li id="personal"><strong>Blog Info</strong></li>
                                                                                   
                                                <li id="confirm"><strong>Blog</strong></li>
                                            </ul> <!-- fieldsets -->
                                            <fieldset>
                                                <div class="form-card">
                                                    <h2 class="fs-title">Author Information</h2>
                                                     <input type="email" name="email" placeholder="Email Id" required/> 
                                                     <label for="">(You can put "anonymous" / leave blank is you don't want to display the author's name.)</label>
                                                     <input type="text" name="authorname" placeholder="Author Name" />
                                                
                                                </div>
                                                 <input type="button" name="next" class="next action-button" value="Next Step" />
                                            </fieldset>
                                            <fieldset>
                                                <div class="form-card">
                                                    <h2 class="fs-title">Blog Information</h2>
                                                   
                                                     <label for="">(Blog Name "Blog Header")</label><br>
                                                     <input class="form-control" type="text" name="bloginfo" placeholder="Blog description" />

                                                     <label for="">(Blog description" / this help when users are searching across multiple.)</label>
                                                     <textarea class="" id="text" name="blog_description" 
                                                     maxlength="200" placeholder="Type in your message" rows="5"></textarea>
                                                  <span class="pull-right label label-default" id="count_message"></span>
                                                
                                                  <div id="wrapper1">
                                                    <label for="">Blog header image</label><br>
                                                    
                                                    <label for="upload_input" class="btn btn-warning">Upload</label>
                                                    <input type="file" accept="image/*" name=header_image class="d-none" id="upload_input" onchange="preview_image(event)">
                                                    <img id="output_image"/>                                             
                                                   </div>
                                                   
                                                   <div class="row">
                                                    <div class="form-group">
                                                        <div class="items-collection">
                                            <h2>Please selsect blog categories</h2>
                                            @foreach ( $blog_cats as $blog_cat )

                                            <div class="items col-xs-6 col-sm-3 col-md-3 col-lg-3">
                                                <div class="info-block block-info clearfix">
                                                    <div data-toggle="buttons" class="btn-group bizmoduleselect">
                                                        <label class="btn btn-default">
                                                            <div class="itemcontent">
                                                                <input class="d-none" type="checkbox" name="var_id[]" autocomplete="off" value="">
                                                               
                                                                <h5>{{$blog_cat['name']}}</h5>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            @endforeach
                                                          
                                                         
                                                                        
                                                                    
                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <br>
                                                    <div class="form-group">
                                                        <div class="col-sm-12 col-md-12 col-lg-12">   
                                                   
                                                            <i class="fa fa-search fa-2x pull-left searchicon"></i><input type="search" class="form-control" id="search" placeholder="Filter items...">
                                                        </div>
                                                    </div>
                                                </div>  
                                              
                                        </div> 
                                                 <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> 
                                                 <input type="button" name="next" class="next action-button" value="Next Step" />
                                            </fieldset>
                                            <fieldset>
                                                <div class="form-card">
                                                    <h2 class="fs-title">Enter Blog Details</h2> 
                                                    <div class="form-group" >
                                                        <div>
                                                   
                                                            <textarea id="txtarea" name="blog"></textarea>
                                                          
                                                      </div>
                                  
                                                        </div>
                                                </div>
                                             
                                               

                                              
                                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                                 <input type="submit" name="submit" class="next action-button" value="Submit" />
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                      
                    </div>
                </div>
                </div>
   

       
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    

 @stop