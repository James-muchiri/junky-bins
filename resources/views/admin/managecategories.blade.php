@extends('admin.include.index')  
@section('content')  
            <div class="container">
              <div class="row">
            <div class="col-sm-12 tabs" >
<form>
              <input type="text" style="float: left; margin-right:10px;border-width: 0 0 2px;border-color: rebeccapurple;">
              <input type="submit" value="search" style="float: left">
            </form>
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                      <a class="nav-link " data-toggle="modal" data-target="#new_cat" data-whatever="@getbootstrap">New Category</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/hidden_cats">Hidden cats</a>
                      </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/unhidden_cats">Unhidden cats</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/most_viewed">Most searched</a>
                    </li>

                  </ul>
</div>
              </div>
              <div class="row">
            <div class="col-sm-12">

                @if (Session::has('show.hide'))
  <div class="alert alert-success">
    {{ Session::get('show.hide') }}
  </div>
@endif
</div>
              </div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="/admin/edit_category" method="post">
            @csrf <!-- {{ csrf_field() }} -->
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Category Name:</label>

          </div>
          <div class="form-group" id="cat">
          </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save Category</button>
    </form>
      </div>
    </div>
  </div>
</div>
<!-- Edit categories -->
<div class="modal fade" id="new_cat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Category</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form id="new_category">
          @csrf <!-- {{ csrf_field() }} -->
        <div class="form-group">
          <label for="recipient-name" class="col-form-label">Category Name:</label>
          <input type="text" class="form-control" id="name" required>
        </div>

        <div class="form-group">
          <label for="Description" class="col-form-label">Category Description:</label>
          <input type="text" class="form-control" id="cat_description" required>
        </div>


    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <input type="hidden" id="_token" value="{{ csrf_token() }}">

      <button class="btn btn-primary" id="submit">Save Category</button>
  </form>
      </div>
    </div>
  </div>
</div>
<!-- Edit categories -->






<div class="row">
  <div class="col-sm-12">
<table class="table table-striped">
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Name</th>
<th scope="col">Is Hidden</th>
<th scope="col">action</th>
</tr>
</thead>
<tbody>
@php
$n = 0;
@endphp
@foreach ($blog_cats as $blog_cat )

<tr>
<th scope="row"> {!! $n =$n +1 !!} </th>
<td>{{$blog_cat['name']}}</td>
<td>{{$blog_cat['cat_description']}} </td>

<td>

<a  class="btn btn-danger">Delete</a>
  <a style="margin: 19px;" type="button"  class="btn btn-primary" data-toggle="modal" data-target="#editModal" data-whatever="@getbootstrap">Edit</a>

<a  class="btn btn-success">Show</a>


</td>
</tr>
    
@endforeach



</tbody>
</table>
</div>
        </div>
               </div>




               <div id="snackbar">   <span class="badge badge-pill badge-success">Success</span> Added to Cart.</div>







@if (Session::has('success'))

<?php
echo '<script type="text/javascript">myFunction();</script>';
?>
   @endif
                  








@stop
